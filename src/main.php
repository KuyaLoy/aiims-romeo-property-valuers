<header>
    <div class="top-header d-flex justify-content-between align-items-center">
        <ul class="social-links d-flex justify-content-center">
            <li><a href="https://www.facebook.com/RomeoPropertyValuers/" target="_blank"><?= renderImg("facebook.svg", "icons/social-media", "", "", "", "", "", "") ?></a></li>
            <li><a href="https://www.linkedin.com/company/romeopropertyvaluers/" target="_blank"><?= renderImg("linkedin.svg", "icons/social-media", "", "", "", "", "", "") ?></a></li>
            <li><a href="https://www.instagram.com/romeopropertyvaluers/" target="_blank"><?= renderImg("instagram.svg", "icons/social-media", "", "", "", "", "", "") ?></a></li>
        </ul>
        <ul class="minor-links d-flex justify-content-center">
            <li><a href="https://romeopropertyvaluers.com.au/privacy-policy/" target="_blank">Privacy Policy</a></li>
            <li><a href="#">Terms & Conditions</a></li>
        </ul>
    </div>
    <nav class="main-nav d-flex align-items-center justify-content-between">
        <a href="/" class="logo"><?= renderImg("logo.svg", "icons", "", "", "", "", "", "") ?></a>

        <ul class="cta-wrapper d-flex align-items-center justify-content-center">
            <li class="d-flex align-items-center justify-content-center">
                <a href="https://g.co/kgs/qVd3H26" target="_blank">5.0 <?= renderImg("five-star.svg", "icons", "", "", "", "", "", "") ?>
                    <span>155 Google Reviews</span>
                </a>
            </li>
            <li><a href="#get-started">Get Started</a></li>
            <li><a href="tel:02 9002 7347">02 9002 7347</a></li>
        </ul>
    </nav>
</header>

<main class="main overflow-hidden">

    <section class="sections section-hero">

        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-12 sec-left">
                    <h1><span>Specialists</span> in DHA Property Valuations</h1>
                    <p>At Romeo Property Valuers, we are experts in providing precise and reliable property valuations, with a particular focus on Defence Housing Australia (DHA) properties.</p>
                    <div class="cta-hero d-flex align-items-center justify-content-center justify-content-md-start ">
                        <a href="#get-started">Get Started</a>
                        <a href="https://g.co/kgs/qVd3H26" target="_blank" class="d-flex align-items-center">5.0 <?= renderImg("five-star.svg", "icons", "", "", "", "", "", "") ?>
                            <span>155 Google Reviews</span>
                        </a>
                    </div>

                    <div class="splide" id="myReviews">
                        <div class="splide__track greviewList">
                            <ul class="splide__list">
                                <?php foreach ($greviewsimages as $index => $greviewsimage) {
                                    $imgsize = getimagesize($greviewsimage);
                                    $filename = basename($greviewsimage);
                                    $filename_without_ext = preg_replace('/\\.[^.\\s]{3,4}$/', '', $filename);

                                    // Fetch the corresponding review data
                                    $review = $greviews[$index] ?? null;

                                    if ($review): ?>
                                        <li class="splide__slide">
                                            <div class="img-float">
                                                <img src="<?= $greviewsimage ?>"
                                                    alt="<?= htmlspecialchars($review['img'], ENT_QUOTES) ?>"
                                                    width="<?= $imgsize[0] ?>" height="<?= $imgsize[1] ?>"
                                                    aria-hidden="true" decoding="async" loading="lazy" />
                                            </div>
                                            <div class="name-star d-flex align-items-center justify-content-between">
                                                <p class="review-name"><?= htmlspecialchars($review['name'], ENT_QUOTES) ?></p>
                                                <?= renderImg("five-star.svg", "icons", "", "", "", "", "", "") ?>
                                            </div>
                                            <p class="review-desc"><?= htmlspecialchars($review['desc'], ENT_QUOTES) ?></p>
                                        </li>
                                <?php endif;
                                } ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-12 sec-right d-flex align-items-center justify-content-md-center justify-content-lg-end">
                    <div class="right-banner position-relative d-flex justify-content-center align-items-center">
                        <div class="main-image">
                            <?= renderImg("hero-banner.webp", "", "", "", "", "", "", "") ?>
                        </div>

                        <?= renderImg("line-white.svg", "", "line-white", "", "", "", "") ?>
                        <?= renderImg("line-blue.svg", "", "line-blue", "", "", "", "") ?>

                        <div class="banner-right-text">
                            <?= renderImg("triangle-banner.svg", "", "triangle-banner", "", "", "", "") ?>
                            <?= renderImg("banner-identifier.svg", "", "banner-identifier", "", "", "", "") ?>

                            <p>Market-Leading<br><span>Strategic Valuations</span></p>
                        </div>


                    </div>
                </div>
            </div>
        </div>

    </section>

    <section class="sections section-contact" id="get-started">
        <div class="container ">
            <div class="section-contact-cont">
                <div class="row g-0 align-items-center justify-content-center">
                    <div class="col-lg-5 col-md-12 left-cont text-center d-flex flex-column align-items-center justify-content-center">
                        <h2>Specialists in DHA Property Valuations</h2>
                        <p>At Romeo Property Valuers, we are experts in providing precise and reliable property valuations</p>
                        <div class="card-details">
                            <h3>Trusted <span>Professionals</span></h3>
                            <p>Romeo Property Valuers is built on a foundation of trust, precision, and professionalism.</p>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-12 right-cont">
                        <h2 id="chanage-text-contact">
                            <p class="d-none d-lg-inline">Contact us today <span>for professional guidance</span></p>
                            <p class="d-block d-lg-none">Contact Our Team</p>
                        </h2>
                        <p id="cforms" class="d-block d-lg-none">Simply complete the form below & we’ll get back to you as soon as possible</p>
                        <form action="src/form.php" method="POST"
                            enctype="multipart/form-data">
                            <div class="formCtrl">
                                <input type="text" name="name" id="name" placeholder="Name" required>
                            </div>
                            <div class="formCtrl">
                                <input type="tel" name="phone" id="phone" placeholder="Phone Number" required>
                            </div>
                            <div class="formCtrl">
                                <input type="email" name="email" id="email" placeholder="Email Address" required>
                            </div>
                            <div class="formCtrl">
                                <input type="text" name="suburb" id="suburb" placeholder="Suburb" required>
                            </div>
                            <div class="formCtrl caretHere">
                                <select name="service" id="service" required>
                                    <option value="" selected>Which service are you looking for</option>
                                    <option value="choice 1">choice 1</option>
                                    <option value="choice 1">choice 2</option>
                                </select>
                            </div>
                            <div class="formCtrl">
                                <textarea name="mssg" id="mssg" aria-label="Message" placeholder="Optional: How can we help you? (Provide any plumbing problems & details here)"></textarea>
                            </div>
                            <input type="hidden" name="token" id="recaptchaResponse"
                                class="recaptchaResponse">
                            <div style="display: none;">
                                <input type="text" name="honeypot" id="honeypot" value="" />
                            </div>
                            <div class="formCtrl">
                                <input type="submit" id="ContactUs" value="Contact Us">
                            </div>
                        </form>

                    </div>
                </div>
            </div>

        </div>
        <div class="container section-services-cont">
            <div class="splide myServices" id="myServices">
                <div class="splide__track">
                    <ul class="splide__list">

                        <?php foreach ($servicesimages as $index => $servicesimage) {
                            $imgsize = getimagesize($servicesimage);
                            $filename = basename($servicesimage);
                            $filename_without_ext = preg_replace('/\\.[^.\\s]{3,4}$/', '', $filename);

                            // Fetch the corresponding service data
                            $service = $services[$index] ?? null;

                            if ($service): ?>
                                <li class="splide__slide service-card <?= $index === 1 ? 'tofix' : '' ?>">

                                    <div class="text-details">
                                        <h3><?= $service['titleTags'] ?></h3>
                                        <p><?= htmlspecialchars($service['desc'], ENT_QUOTES) ?></p>
                                    </div>

                                    <img src="<?= $servicesimage ?>"
                                        alt="<?= htmlspecialchars($service['img'], ENT_QUOTES) ?>"
                                        width="<?= $imgsize[0] ?>" height="<?= $imgsize[1] ?>"
                                        aria-hidden="true" decoding="async" loading="lazy" />

                                </li>
                        <?php endif;
                        } ?>

                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="sections sec-whyPartner position-relative d-flex align-items-center justify-content-center">
        <?= renderImg("pyramid-right.svg", "", "pyramid-float", "", "", "", "", "") ?>

        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 col-md-12 left-sec">
                    <h2><span>Why Partner</span> with Romeo Property Valuers?</h2>
                    <p>Navigating the obligations and benefits of owning a DHA property can be complex. At Romeo Property Valuers, we provide expert advice and valuation services tailored to DHA landlords. Our in-depth knowledge of DHA processes ensures you understand your rights, meet your obligations, and maximise your investment's potential.</p>
                    <a href="#get-started" class="d-none d-lg-inline-block">Get Started</a>
                </div>
                <div class="col-lg-6 col-md-12 right-sec">
                    <div class="images-cont">
                        <?= renderImg("why-partner-banner.webp", "", "why-partner-banner", "", "", "", "", "") ?>
                        <?= renderImg("line-blue-2.svg", "", "line-blue-2", "", "", "", "", "") ?>
                        <?= renderImg("line-yellow-2.svg", "", "line-yellow-2", "", "", "", "", "") ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="orr-wrapper">
        <div class="container">
            <div class="title-wrapper">
                <h2>Landlord Obligations, Rights, and Requirements <span>For DHA Properties<span></h2>
                <p>Owning a Defence Housing Australia (DHA) leased property comes with a range of obligations, rights, and requirements designed to ensure a seamless experience for landlords and tenants alike. As a landlord, understanding these aspects is essential for maintaining compliance and maximising the benefits of your investment.</p>
            </div>
        </div>
        <div class="container">
            <div class="sec-1">
                <div class="splide myDHAproperties" id="myDHAproperties">
                    <div class="splide__track">
                        <ul class="splide__list">

                            <?php foreach ($dhaproperties as $index => $property): ?>
                                <li class="splide__slide property-<?= $index + 1; ?>">
                                    <div class=" card-cont">
                                        <?= renderImg("property.svg", "icons", "pyramid-float", "", "", "", "", "") ?>

                                        <h3><?= htmlspecialchars($property['title'], ENT_QUOTES, 'UTF-8'); ?></h3>
                                        <p><?= htmlspecialchars($property['desc'], ENT_QUOTES, 'UTF-8'); ?></p>
                                    </div>

                                </li>
                            <?php endforeach; ?>

                        </ul>

                    </div>
                </div>
                <div class="line-white-3">
                    <?= renderImg("line-white-3.svg", "", "", "", "", "", "", "") ?>
                </div>
                <div class="line-blue-3">
                    <?= renderImg("line-blue-3.svg", "", "", "", "", "", "", "") ?>
                </div>

                <?= renderImg("line-blue-2.svg", "", "line-blue-2", "", "", "", "", "") ?>
                <?= renderImg("line-yellow-2.svg", "", "line-yellow-2", "", "", "", "", "") ?>
            </div>
        </div>
        </div>
        <div class="container">
            <div class="sec-2">
                <div class="map-cont">
                    <?= renderImg("pyramid-right.svg", "", "pyramid-float", "", "", "", "", "") ?>

                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d31516.14549536585!2d151.13119950575657!3d-33.87093306078738!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b129126644b719d%3A0x27d1b793956e809a!2sRomeo%20Property%20Valuers!5e0!3m2!1sen!2sau!4v1734516785492!5m2!1sen!2sau" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="sec-3">
                <div class="title d-flex align-items-center justify-content-between">
                    <h3>Emergency Plumbing FAQS</h3>
                    <span class="line d-none d-md-block"></span>
                </div>
                <div class="custom-accordion">
                    <?php foreach ($faqs as $index => $faq): ?>
                        <div class="custom-accordion-item">
                            <div class="custom-accordion-title" onclick="toggleAccordion(this)">
                                <div class="left">
                                    <!-- Left Icon -->
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="21" viewBox="0 0 14 21" fill="none">
                                        <path d="M6.35508 20.8252C7.40381 20.8252 8.25398 20.0267 8.25398 19.0417C8.25398 18.0568 7.40381 17.2583 6.35508 17.2583C5.30634 17.2583 4.45618 18.0568 4.45618 19.0417C4.45618 20.0267 5.30634 20.8252 6.35508 20.8252Z" fill="#257093" />
                                        <path d="M4.93157 15.4747V14.1372C4.93157 11.5351 6.77255 10.1128 8.25464 8.97051C9.73674 7.82821 10.6283 7.06579 10.6283 5.66578C10.6283 4.04106 9.13763 2.99061 6.83047 2.99061C5.44741 2.99013 4.09343 3.36346 2.93013 4.06603L1.79079 4.84807L0.100769 2.71685L1.22872 1.92054C2.8831 0.871526 4.83435 0.312425 6.83047 0.315442C10.7441 0.315442 13.4766 2.51622 13.4766 5.66578C13.4766 8.4007 11.5834 9.86312 10.0586 11.0366C8.60119 12.162 7.77992 12.8602 7.77992 14.1372V15.4747H4.93157Z" fill="#257093" />
                                    </svg>
                                    <span><?= htmlspecialchars($faq['title'], ENT_QUOTES, 'UTF-8'); ?></span>
                                </div>
                                <div class="right">
                                    <!-- Default Plus Icon -->
                                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="23" viewBox="0 0 22 23" fill="none">
                                        <path d="M10.7683 11.5701V2.65283M10.7683 11.5701H19.6855M10.7683 11.5701V20.4873M10.7683 11.5701H1.85107" stroke="#257093" stroke-width="3.42971" stroke-linecap="round" />
                                    </svg>
                                </div>
                            </div>
                            <div class="custom-accordion-content <?= $index === 1 ? 'default-open' : ''; ?>">
                                <div class="custom-accordion-content-text">
                                    <p><?= nl2br(htmlspecialchars($faq['content'], ENT_QUOTES, 'UTF-8')); ?></p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>


            </div>
        </div>
    </section>

    <footer class="footer">
        <div class="container footer-cont d-flex flex-column flex-lg-row align-items-center justify-content-between">
            <ul class="copyright d-flex  align-items-center justify-content-center justify-content-lg-start">
                <li>Copyright 2024</li>
                <li>Romeo Property DHA</li>
                <li>All Rights Reserved</li>
                <li class="w-md-100">
                    <a href="https://www.facebook.com/RomeoPropertyValuers/" target="_blank"><?= renderImg("facebook.svg", "icons/social-media/white", "", "", "", "", "", "") ?></a>
                    <a href="https://www.linkedin.com/company/romeopropertyvaluers/" target="_blank"><?= renderImg("linkedin.svg", "icons/social-media/white", "", "", "", "", "", "") ?></a>
                    <a href="https://www.instagram.com/romeopropertyvaluers/" target="_blank"><?= renderImg("instagram.svg", "icons/social-media/white", "", "", "", "", "", "") ?></a>
                </li class="align-items-center justify-content-center">
            </ul>
            <ul class="partner d-flex align-items-center justify-content-center">
                <li><a href="https://www.aiims.com.au/like-our-work/" target="_blank"><?= renderImg("aiims-logo.svg", "", "Aiims", "", "", "", "", "") ?></a></li>
                <li><a href="https://www.aiims.com.au/like-our-work/" target="_blank"><?= renderImg("powered-by-logo.svg", "", "", "", "", "", "", "") ?></a></li>
            </ul>
        </div>
    </footer>