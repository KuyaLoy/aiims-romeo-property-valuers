<?php
include __DIR__ . '/functions.php';
include __DIR__ . '/filescontent.php';
include __DIR__ . '/src/header.php';
?>
<!-- Event snippet for Enquiry Form conversion page -->
<!-- Event snippet for Quote Form conversion page -->
<script>
    gtag('event', 'conversion', {
        'send_to': 'AW-16528510367/8ZopCOjH7KUZEJ-btMk9'
    });
</script>

<script type="text/javascript">
    window.onload = function() {
        document.body.classList.add("noscrol");
        const contmssgtnk = document.getElementById('contmssgntk');
        contmssgtnk.classList.add("actve");
    };

    function removeClassBodyThn() {
        document.body.classList.remove('noscrol');
        const contmssgtnk = document.getElementById('contmssgntk');
        contmssgtnk.classList.remove("actve");
    }
</script>
<div class="thankyou-wrapper">
    <div id="contmssgntk" class="bodoverlay">
        <div class="modalc" id="modalc">
            <button class="close" onclick="removeClassBodyThn()">&times;</button>
            <div class="contmsgmo" id="contmsgmo">
                <div class="csmsgm">
                    <h2><span>Service request received!</span> we’ll be calling you shortly.</h2>
                    <p>Keep your phone handy.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include __DIR__ . '/src/main.php';
include __DIR__ . '/src/footer.php';
?>