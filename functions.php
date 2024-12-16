<?php
// include __DIR__ . '/env.php';
$jscssverion = 1;
$site = "Lorem ipsum dolor sit amet, consectet";
$phone_number = "0408 999 528";
$href_phone_number = "tel:+61408999528";
$emailcont = "localelectricalservices@outlook.com";
$href_emailcont = "mailto:" . $emailcont;
$admin_email = "aiimsstagingcom@aiims-staging.com.au";
$aiimsflogolinks = "https://www.aiims.com.au/like-our-work/";
$cc_email = "";
$bcc_email = "";
$no_reply_email = "";
$recaptcha_client_secret = "";
$recaptcha_server_secret = "";


function renderImg($filename, $folder = "", $classname = "", $stylebckgimg = "", $srcset = "", $width = "", $height = "")
{
    // Check if the browser supports WebP
    $boolsuprt = isset($_SERVER['HTTP_ACCEPT']) && stripos($_SERVER['HTTP_ACCEPT'], 'image/webp') !== false;

    $srcnp = "assets/images/";
    $filename_without_ext = preg_replace('/\.[^.\s]{3,4}$/', '', $filename);
    $chkchildfolder = $folder == "" ? $srcnp : $srcnp . $folder . "/";

    // Determine the source file
    $src = $chkchildfolder . $filename;
    if ($boolsuprt && file_exists($chkchildfolder . $filename_without_ext . ".webp")) {
        $src = $chkchildfolder . $filename_without_ext . '.webp';
    }

    // Handle SVG files differently (no width and height required)
    $file_extension = strtolower(pathinfo($filename, PATHINFO_EXTENSION));

    if ($file_extension === 'svg') {
        $imgTag = "<img src='" . $src . "' alt='" . htmlspecialchars($filename_without_ext, ENT_QUOTES) . "' class='" . $classname . "' aria-hidden='true' decoding='async' />";
    } else {
        // For other image types, get dimensions if not provided
        if (file_exists($src) && $file_extension !== 'svg') {
            $imgsize = getimagesize($src);
            $width = $width ?: ($imgsize[0] ?? '');
            $height = $height ?: ($imgsize[1] ?? '');
        }

        $imgTag = $srcset === "srcset"
            ? "<img src='" . $src . "?width=2400' srcset='" . $src . "?width=352 352w, " . $src . "?width=832 832w, " . $src . "?width=1200 1200w, " . $src . "?width=1920 1920w, " . $src . "?width=2400 2400w' alt='" . htmlspecialchars($filename_without_ext, ENT_QUOTES) . "' class='" . $classname . "' width='" . $width . "' height='" . $height . "' sizes='100%' aria-hidden='true' decoding='async' />"
            : "<img src='" . $src . "' alt='" . htmlspecialchars($filename_without_ext, ENT_QUOTES) . "' class='" . $classname . "' width='" . $width . "' height='" . $height . "' aria-hidden='true' decoding='async' />";
    }

    // Return either the src or the full img tag based on $stylebckgimg
    return $stylebckgimg === "srconly" ? $src : $imgTag;
}

function renderPicture($filename, $folder, $classname = "", $stylebckgimg = "", $srcset = "", $width = "", $height = "", $loading = "")
{

    //Check if webp support
    $boolsuprt = false;
    if (isset($_SERVER['HTTP_ACCEPT'])) {
        $accept = $_SERVER['HTTP_ACCEPT'];
        $pos = stripos($accept, 'image/webp');
        if ($pos === false) {
            $boolsuprt = false;
        } else {
            $boolsuprt = true;
        }
    }
    $srcnp = "assets/images/";
    $filename_without_ext = preg_replace('/\\.[^.\\s]{3,4}$/', '', $filename);
    $ext = pathinfo($filename, PATHINFO_EXTENSION);

    $chkchildfolder = $folder == "" ? $srcnp : $srcnp . $folder . "/";
    $srcjpg = $chkchildfolder . $filename;
    $srcmobjpg = $chkchildfolder . $filename_without_ext . '-m.' . $ext;
    $srcmobwebp = $chkchildfolder . $filename_without_ext . '-m.webp';
    $src = $boolsuprt ? $chkchildfolder . $filename_without_ext . '.webp' : $chkchildfolder . $filename;
    $srcmob = $boolsuprt ? $chkchildfolder . $filename_without_ext . '.webp' : $chkchildfolder . $filename;
    // Check for webp file
    if (!file_exists($chkchildfolder . $filename_without_ext . ".webp")) {
        $src = $chkchildfolder . $filename;
    }
    $imgsize = getimagesize($src);
    $width = $width == "" ? "" : $width;
    $height = $height == "" ? "" : $height;
    $srcset = $srcset == "srcset" ? "<img src='" . $src . "?width=2400' srcset='" . $src . "?width=352 352w, " . $src . "?width=832 832w, " . $src . "?width=1200 1200w, " . $src . "?width=1920 1920w, " . $src . "?width=2400 2400w' alt='" . $filename_without_ext . "' class='" . $classname . "' width='" . $width . "' height='" . $height . "' sizes='100%' aria-hidden='true' decoding='async' loading='" . $loading . "' />"  : "<picture><source media='(max-width: 600px)' srcset='$srcmobwebp'><source media='(max-width: 600px)' srcset='$srcmobjpg'><source media='(min-width: 601px)' srcset='$src'><source media='(min-width: 601px)' srcset='$srcjpg'><img src='" . $srcjpg . "' alt='" . $filename_without_ext . "' class='" . $classname . "' width='" . $imgsize[0] . "' height='" . $imgsize[1] . "' aria-hidden='true' decoding='async' loading='" . $loading . "' /></picture>";
    $fsource = $stylebckgimg == "srconly" ? $src : $srcset;

    return $fsource;
}
function renderImgLazy($filename, $folder, $classname = "", $stylebckgimg = "", $srcset = "", $width = "", $height = "")
{

    //Check if webp support
    $boolsuprt = false;
    if (isset($_SERVER['HTTP_ACCEPT'])) {
        $accept = $_SERVER['HTTP_ACCEPT'];
        $pos = stripos($accept, 'image/webp');
        if ($pos === false) {
            $boolsuprt = false;
        } else {
            $boolsuprt = true;
        }
    }
    $srcnp = "assets/images/";
    $filename_without_ext = preg_replace('/\\.[^.\\s]{3,4}$/', '', $filename);
    $chkchildfolder = $folder == "" ? $srcnp : $srcnp . $folder . "/";

    $src = $boolsuprt ? $chkchildfolder . $filename_without_ext . '.webp' : $chkchildfolder . $filename;
    // Check for webp file
    if (!file_exists($chkchildfolder . $filename_without_ext . ".webp")) {
        $src = $chkchildfolder . $filename;
    }
    $imgsize = getimagesize($src);
    // echo $imgsize[0];
    $width = $width == "" ? "" : $width;
    $height = $height == "" ? "" : $height;
    $srcset = $srcset == "srcset" ? "<img src='" . $src . "?width=2400' srcset='" . $src . "?width=352 352w, " . $src . "?width=832 832w, " . $src . "?width=1200 1200w, " . $src . "?width=1920 1920w, " . $src . "?width=2400 2400w' alt='" . $filename_without_ext . "' class='" . $classname . "' width='" . $width . "' height='" . $height . "' sizes='100%' aria-hidden='true' decoding='async' />"  : "<img src='" . $src . "' alt='" . $filename_without_ext . "' class='" . $classname . "' width='" . $imgsize[0] . "' height='" . $imgsize[1] . "' aria-hidden='true' decoding='async' loading='lazy' />";
    $fsource = $stylebckgimg == "srconly" ? $src : $srcset;

    return $fsource;
}
function renderImgLazyObserv($filename, $folder, $classname = "", $stylebckgimg = "", $srcset = "", $width = "", $height = "")
{

    //Check if webp support
    $boolsuprt = false;
    if (isset($_SERVER['HTTP_ACCEPT'])) {
        $accept = $_SERVER['HTTP_ACCEPT'];
        $pos = stripos($accept, 'image/webp');
        if ($pos === false) {
            $boolsuprt = false;
        } else {
            $boolsuprt = true;
        }
    }
    $srcnp = "assets/images/";
    $filename_without_ext = preg_replace('/\\.[^.\\s]{3,4}$/', '', $filename);
    $chkchildfolder = $folder == "" ? $srcnp : $srcnp . $folder . "/";
    $src = $boolsuprt ? $chkchildfolder . $filename_without_ext . '.webp' : $chkchildfolder . $filename;
    // Check for webp file
    if (!file_exists($chkchildfolder . $filename_without_ext . ".webp")) {
        $src = $chkchildfolder . $filename;
    }
    $imgsize = getimagesize($src);
    $width = $width == "" ? "" : $width;
    $height = $height == "" ? "" : $height;
    $srcset = $srcset == "srcset" ? "<img src='" . $src . "?width=2400' srcset='" . $src . "?width=352 352w, " . $src . "?width=832 832w, " . $src . "?width=1200 1200w, " . $src . "?width=1920 1920w, " . $src . "?width=2400 2400w' alt='" . $filename_without_ext . "' class='" . $classname . "' width='" . $imgsize[0] . "' height='" . $imgsize[1] . "' sizes='100%' aria-hidden='true' decoding='async' />"  : "<img src='assets/images/blankimg.png' data-src='" . $src . "' style='width: " . $imgsize[0] . "px; height: " . $imgsize[1] . "px' alt='" . $filename_without_ext . "' class='" . $classname . "' width='" . $imgsize[0] . "' height='" . $imgsize[1] . "' aria-hidden='true' decoding='async' />";
    $fsource = $stylebckgimg == "srconly" ? $src : $srcset;

    return $fsource;
}
