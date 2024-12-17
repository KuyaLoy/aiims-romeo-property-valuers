<header>
    <div class="top-header d-flex justify-content-between align-items-center">
        <ul class="social-links d-flex justify-content-center">
            <li><a href="#"><?= renderImg("facebook.svg", "icons/social-media", "", "", "", "", "", "") ?></a></li>
            <li><a href="#"><?= renderImg("linkedin.svg", "icons/social-media", "", "", "", "", "", "") ?></a></li>
            <li><a href="#"><?= renderImg("instagram.svg", "icons/social-media", "", "", "", "", "", "") ?></a></li>
        </ul>
        <ul class="minor-links d-flex justify-content-center">
            <li><a href="#">Privacy Policy</a></li>
            <li><a href="#">Terms & Conditions</a></li>
        </ul>
    </div>
    <nav class="main-nav d-flex align-items-center justify-content-between">
        <a href="#" class="logo"><?= renderImg("logo.svg", "icons", "", "", "", "", "", "") ?></a>

        <ul class="cta-wrapper d-flex align-items-center justify-content-center">
            <li class="d-flex align-items-center justify-content-center">
                <a href="#">5.0 <?= renderImg("five-star.svg", "icons", "", "", "", "", "", "") ?>
                    <span>155 Google Reviews</span>
                </a>
            </li>
            <li><a href="#">Get Started</a></li>
            <li><a href="#">02 9002 7347</a></li>
        </ul>
    </nav>
</header>


<main class="main overflow-hidden">

    <section class="sections section-hero">

        <div class="container ">
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-12 sec-left">
                    <h1><span>Specialists</span> in DHA Property Valuations</h1>
                    <p>At Romeo Property Valuers, we are experts in providing precise and reliable property valuations, with a particular focus on Defence Housing Australia (DHA) properties.</p>
                    <div class="cta-hero d-flex align-items-center justify-content-md-center ">
                        <a href="#">Get Started</a>
                        <a href="#" class="d-flex align-items-center">5.0 <?= renderImg("five-star.svg", "icons", "", "", "", "", "", "") ?>
                            <span>155 Google Reviews</span>
                        </a>
                    </div>
                    <ul class="greviewList">
                        <?php foreach ($greviewsimages as $index => $greviewsimage) {
                            $imgsize = getimagesize($greviewsimage);
                            $filename = basename($greviewsimage);
                            $filename_without_ext = preg_replace('/\\.[^.\\s]{3,4}$/', '', $filename);

                            // Fetch the corresponding review data
                            $review = $greviews[$index] ?? null;

                            if ($review): ?>
                                <li class="">
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
    <section class="sections section-contact">
        <div class="container section-contact-cont">
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
                    <h2 id="chanage-text-contaact">Contact us today <span>for professional guidance</span></h2>
                    <form action="">
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
                        <div class="formCtrl">
                            <select name="service" id="service" required>
                                <option value="" selected>Which service are you looking for</option>
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
        <div class="container section-services-cont">
            <div class="splide" id="mySplide">
                <div class="splide__track">
                    <ul class="splide__list">
                        <li class="splide__slide">Slide 1</li>
                        <li class="splide__slide">Slide 2</li>
                        <li class="splide__slide">Slide 3</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer">

    </footer>