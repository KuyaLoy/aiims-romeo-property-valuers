<?php
include __DIR__ . '/../functions.php';


function curl_get_file_contents($URL)
{
    $c = curl_init();
    curl_setopt($c, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($c, CURLOPT_URL, $URL);
    $contents = curl_exec($c);
    curl_close($c);

    if ($contents) return $contents;
    else return FALSE;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['token'])) {
    if (!empty($_POST['honeypot'])) {
        // If honeypot is filled, this is likely a bot, stop processing.
        exit('Bot detected');
    }
// if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify';
    $recaptcha_secret = $recaptcha_server_secret;
    $recaptcha_response = $_POST['token'];
    $recaptcha = curl_get_file_contents($recaptcha_url . '?secret=' . $recaptcha_secret . '&response=' . $recaptcha_response);
    $recaptcha = json_decode($recaptcha);

    

    try {
        if ($recaptcha->score < 0.5) {
            throw new Exception('Low Score. Please try resubmitting the form again');
            // echo json_encode(array('statn' => 'Low score'));
        }
        else {
           
            $to = $admin_email;
            // $formn = $_POST['formn'];
            // $fname = $_POST['fname'];
            // $lname = $_POST['lname'];

            $name = $_POST['name'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $suburb = $_POST['suburb'];
            $service = $_POST['service'];
            $mssg = $_POST['mssg'];
            $subject = "Message from " . $name;

            // Phone number validation: must start with 0 and be exactly 10 digits long
            if (!preg_match('/^0\d{9}$/', $phone)) {
                throw new Exception('Invalid phone number. Please enter a valid 10-digit number starting with 0.');
            }

            $mime_boundary = "----=" . md5(time());

            $attachment_section = "";
            if (isset($_FILES['uploadedFile']) && $_FILES['uploadedFile']['error'] == UPLOAD_ERR_OK) {
                $file_tmp_name = $_FILES['uploadedFile']['tmp_name'];
                $file_name = $_FILES['uploadedFile']['name'];
                $attachment = file_get_contents($file_tmp_name);

                if ($attachment === false) {
                    throw new Exception("Failed to read the file");
                }

                $attachment_encoded = chunk_split(base64_encode($attachment));
                $attachment_section = "--$mime_boundary\r\n" .
                    "Content-Type: application/octet-stream; name=\"" . basename($file_name) . "\"\r\n" .
                    "Content-Transfer-Encoding: base64\r\n" .
                    "Content-Disposition: attachment; filename=\"" . basename($file_name) . "\"\r\n\r\n" .
                    $attachment_encoded . "\r\n\r\n" .
                    "--$mime_boundary--\r\n";
            }

            $html_content = '<!DOCTYPE html><html><head><style>
                table { font-family: arial, sans-serif; border-collapse: collapse; width: 100%; }
                td, th { border: 1px solid #dddddd; text-align: left; padding: 8px; }
                tr:nth-child(even) { background-color: #dddddd; }
                </style></head><body>
                <table><tbody>
                <tr><td>Your Name: </td><td><b>' . strip_tags($name) . '</b></td></tr>
                <tr><td>Email Address: </td><td><b>' . strip_tags($email) . '</b></td></tr>
                <tr><td>Your Phone Number: </td><td><b>' . strip_tags($phone) . '</b></td></tr>
                <tr><td>Suburb: </td><td><b>' . strip_tags($suburb) . '</b></td></tr>
                <tr><td>Required Service: </td><td><b>' . strip_tags($service) . '</b></td></tr>
                <tr><td>Message: </td><td><b>' . strip_tags($mssg) . '</b></td></tr>
                </tbody></table></body></html>';

            $message = "--$mime_boundary\r\n" .
                "Content-Type: text/html; charset=utf-8\r\n" .
                "Content-Transfer-Encoding: 8bit\r\n\r\n" .
                $html_content . "\r\n\r\n" .
                $attachment_section .
                "--$mime_boundary--\r\n";

            $headers = "MIME-Version: 1.0\r\n" .
                "Content-Type: multipart/mixed; boundary=\"$mime_boundary\"\r\n" .
                "From: " . $name . " <" . $email . ">" . "\r\n" .
                "Reply-To: " . $name . " <" . $email . ">" . "\r\n" .
                "Cc: " . $cc_email . "\r\n" .
                "Bcc: " . $bcc_email . "\r\n" .
                "X-Mailer: PHP/" . phpversion();

            $result = mail($to, $subject, $message, $headers);

            if ($result) {
                header('Location: ./../thankyou.php');
            } else {
                throw new Exception('Failed, please submit form again or call us directly.');
            }

        }
        

    } catch (Exception $e) {
        echo '<script language="javascript">alert("' . $e->getMessage() . '")</script>';
        echo '<script language="javascript">history.go(-1);</script>';
    }
}
