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


<main class="main">

    <section class="sections section-hero">

        <div class="container">
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
                    <div class="right-banner">

                    </div>
                </div>
            </div>
        </div>

    </section>

    <footer class="footer">

    </footer>