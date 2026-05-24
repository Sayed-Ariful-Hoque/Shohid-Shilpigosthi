<?php include_once("common/config.php"); ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
    <title><?php echo $sSiteTitle; ?></title>
    <?php echo $sGAnalytics;
    echo $sGTagManagerHead;
    echo $sAddSense;
    echo $sDomainVerification;
    echo $sMSClarity; ?>
    <meta name="description" content="<?php echo $sSiteTitle; ?>,">
    <meta name="keywords" content="<?php echo $sSiteTitle; ?>,">
    <meta name="author" content="<?php echo $sAuthor; ?>">
    <meta name="Developer" content="<?php echo $sDeveloper; ?>">
    <meta name="resource-type" content="document">
    <meta name="contact" content="<?php echo $sEmail; ?>">
    <meta name="copyright" content="Copyright (c) <?php echo gmdate("Y"); ?>. All Rights &reg; Reserved by <?php echo $sSiteURL; ?>.">
    <meta name="robots" content="index, follow">
    <meta name="googlebot" content="index, follow">
    <meta name="googlebot-news" content="index, follow">
    <meta name="msnbot" content="index, follow">
    <meta property="fb:app_id" content="<?php echo $sFBAppId; ?>">
    <meta property="fb:pages" content="<?php echo $sFBPageId; ?>">
    <meta property="og:site_name" content="<?php echo $sSiteName; ?>">
    <meta property="og:title" content="">
    <meta property="og:description" content="">
    <meta property="og:url" content="<?php echo $sSiteURL; ?>">
    <meta property="og:type" content="article">
    <meta property="og:image" content="<?php echo $sLogoURLfb; ?>">
    <meta property="og:locale" content="en_US">
    <link rel="image_src" href="<?php echo $sLogoURLfb; ?>">
    <link type="image/x-icon" rel="shortcut icon" href="<?php echo $sFavicon; ?>">
    <link type="image/x-icon" rel="icon" href="<?php echo $sFavicon; ?>">
    <?php echo $sCSSBootStrap;
    echo $sCSSFontAwesome;
    echo $sCSSSlick;
    echo $sCSSSlickTheme;
    echo $sCSSFancybox;
    echo $sCSSEMM; ?>
</head>

<body>
    <?php echo $sFbRoot; ?>
    <?php echo $sGTagManagerBody; ?>
    <?php include_once("common/header.php"); ?>
    <!-- Back to top button -->
    <a id="button"><i class="fas fa-angle-double-up"></i></a>
    <main>
        <section class="hero-slider-area">
            <div class="container-fluid">
                <div class="hero-slider">
                    <div class="slide-item">
                        <img class="img-fluid" src="media/imgAll/bg/Home-Page/banner-1.jpg" alt="Slider Image 1">
                        <div class="slider-overlay">
                            <div class="slider-content">
                                <h1>Welcome to Shohid Shilpigosthi</h1>
                                <p>Promoting Islamic Culture & Creative Excellence Since 1978</p>
                            </div>
                        </div>
                    </div>
                    <div class="slide-item">
                        <img class="img-fluid" src="media/imgAll/bg/Home-Page/banner-2.jpg" alt="Slider Image 1">
                        <div class="slider-overlay">
                            <div class="slider-content">
                                <h1>Inspiring Islamic Creativity</h1>
                                <p>Empowering Youth Through Culture, Art & Values</p>
                            </div>
                        </div>
                    </div>
                    <div class="slide-item">
                        <img class="img-fluid" src="media/imgAll/bg/Home-Page/banner-3.jpg" alt="Slider Image 1">
                        <div class="slider-overlay">
                            <div class="slider-content">
                                <h1>Where Talent Meets Purpose</h1>
                                <p>Building a Generation with Faith, Skill & Vision</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="competition-area">
            <div class="container">
                <div class="competition-wrap">
                    <div class="arrow-img-one">
                        <img src="media/imgAll/bg/Home-Page/arrow-1.svg" alt="">
                    </div>
                    <div class="arrow-img-tow">
                        <img src="media/imgAll/bg/Home-Page/arrow-2.svg" alt="">
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-title text-center">
                                <h2><a href="competition.php" class="title">Competition</a></h2>
                                <div class="underline">
                                    <span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="competition-items-wrap">
                        <div class="row g-3 justify-content-center">
                            <div class="col-lg-3 col-md-4 col-sm-6 d-flex align-items-center">
                                <a class="competition-card" href="competition-details.php">
                                    <div class="competition-imgs">
                                        <img class="img-fluid" src="media/imgAll/bg/Home-Page/competition-1.jpg" alt="চলো বিশ্ব জয় করি">
                                        <div class="overlay"></div>
                                        <span class="competition-badge">Upcoming</span>
                                    </div>
                                    <div class="competition-info">
                                        <h3 class="dynamic-font">চলো বিশ্ব জয় করি</h3>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 d-flex align-items-center">
                                <a class="competition-card" href="competition-details.php">
                                    <div class="competition-imgs">
                                        <img class="img-fluid" src="media/imgAll/bg/Home-Page/competition-2.jpg" alt="Rise Beyond Limits">
                                        <div class="overlay"></div>
                                        <span class="competition-badge">Past</span>
                                    </div>
                                    <div class="competition-info">
                                        <h3 class="dynamic-font">Rise Beyond Limits</h3>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 d-flex align-items-center">
                                <a class="competition-card" href="competition-details.php">
                                    <div class="competition-imgs">
                                        <img class="img-fluid" src="media/imgAll/bg/Home-Page/competition-3.jpg" alt="স্বপ্ন থেকে সফলতা">
                                        <div class="overlay"></div>
                                        <span class="competition-badge">Ongoing</span>
                                    </div>
                                    <div class="competition-info">
                                        <h3 class="dynamic-font">স্বপ্ন থেকে সফলতা</h3>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 d-flex align-items-center">
                                <a class="competition-card" href="competition-details.php">
                                    <div class="competition-imgs">
                                        <img class="img-fluid" src="media/imgAll/bg/Home-Page/competition-4.jpg" alt="competition-4.jpg">
                                        <div class="overlay"></div>
                                        <span class="competition-badge">Upcoming</span>
                                    </div>
                                    <div class="competition-info">
                                        <h3 class="dynamic-font">Future Champions</h3>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 d-flex align-items-center">
                                <a class="competition-card" href="competition-details.php">
                                    <div class="competition-imgs">
                                        <img class="img-fluid" src="media/imgAll/bg/Home-Page/competition-5.jpg" alt="competition-5.jpg">
                                        <div class="overlay"></div>
                                        <span class="competition-badge">Past</span>
                                    </div>
                                    <div class="competition-info">
                                        <h3 class="dynamic-font">তরুণদের নতুন যাত্রা</h3>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 d-flex align-items-center">
                                <a class="competition-card" href="competition-details.php">
                                    <div class="competition-imgs">
                                        <img class="img-fluid" src="media/imgAll/bg/Home-Page/competition-6.jpg" alt="competition-6.jpg">
                                        <div class="overlay"></div>
                                        <span class="competition-badge">Ongoing</span>
                                    </div>
                                    <div class="competition-info">
                                        <h3 class="dynamic-font">Creative Talent Hunt</h3>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 d-flex align-items-center">
                                <a class="competition-card" href="competition-details.php">
                                    <div class="competition-imgs">
                                        <img class="img-fluid" src="media/imgAll/bg/Home-Page/competition-7.jpg" alt="competition-7.jpg">
                                        <div class="overlay"></div>
                                        <span class="competition-badge">Upcoming</span>
                                    </div>
                                    <div class="competition-info">
                                        <h3 class="dynamic-font">জ্ঞানেই শক্তি</h3>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 d-flex align-items-center">
                                <a class="competition-card" href="competition-details.php">
                                    <div class="competition-imgs">
                                        <img class="img-fluid" src="media/imgAll/bg/Home-Page/competition-8.jpg" alt="competition-8.jpg">
                                        <div class="overlay"></div>
                                        <span class="competition-badge">Past</span>
                                    </div>
                                    <div class="competition-info">
                                        <h3 class="dynamic-font">Dream Big Achieve Bigger</h3>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="backgroun-imgs-icons-three">
                        <img src="media/imgAll/bg/Home-Page/backgroun-imgs-icons-3.png" alt="">
                    </div>
                </div>
            </div>
        </section>
        <section class="popular-presentation-area">
            <div class="container">
                <div class="popular-presentation-wrap">
                    <div class="dot-img-one">
                        <img src="media/imgAll/bg/Home-Page/dot-1.png" alt="">
                    </div>
                    <div class="dot-img-tow">
                        <img src="media/imgAll/bg/Home-Page/dot-3.png" alt="">
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-title text-center">
                                <h2><a href="#" class="title">Popular Presentation</a></h2>
                                <div class="underline">
                                    <span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="video-slider">
                        <div class="video-gallery-items">
                            <a href="https://youtu.be/fTkjS8cUQns?si=_EiSWYYvaB8NC-Ko" target="_blank">
                                <div class="video-gallery-imgs">
                                    <img class="img-fluid" src="media/imgAll/bg/Home-Page/video-theme-4.jpg" alt="video-theme-4.jpg">
                                    <div class="video-icons">
                                        <i class="fa-solid fa-play"></i>
                                    </div>
                                    <div class="video-gallery-overlay"></div>
                                </div>
                                <div class="video-gallery-info">
                                    <h3>Voices that carry the legacy of martyrs Voices that carry the legacy of martyrs</h3>
                                </div>
                            </a>
                        </div>
                        <div class="video-gallery-items">
                            <a href="https://youtu.be/fTkjS8cUQns?si=_EiSWYYvaB8NC-Ko" target="_blank">
                                <div class="video-gallery-imgs">
                                    <img class="img-fluid" src="media/imgAll/bg/Home-Page/video-theme-5.jpg" alt="video-theme-5.jpg">
                                    <div class="video-icons">
                                        <i class="fa-solid fa-play"></i>
                                    </div>
                                    <div class="video-gallery-overlay"></div>
                                    <div class="video-gallery-info">
                                        <h3>Songs that echo freedom and sacrifice</h3>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="video-gallery-items">
                            <a href="https://youtu.be/fTkjS8cUQns?si=_EiSWYYvaB8NC-Ko" target="_blank">
                                <div class="video-gallery-imgs">
                                    <img class="img-fluid" src="media/imgAll/bg/Home-Page/video-theme-6.jpg" alt="video-theme-6.jpg">
                                    <div class="video-icons">
                                        <i class="fa-solid fa-play"></i>
                                    </div>
                                    <div class="video-gallery-overlay"></div>
                                    <div class="video-gallery-info">
                                        <h3>Melodies of struggle, stories of courage</h3>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="video-gallery-items">
                            <a href="https://youtu.be/fTkjS8cUQns?si=_EiSWYYvaB8NC-Ko" target="_blank">
                                <div class="video-gallery-imgs">
                                    <img class="img-fluid" src="media/imgAll/bg/Home-Page/video-theme-7.jpg" alt="video-theme-7.jpg">
                                    <div class="video-icons">
                                        <i class="fa-solid fa-play"></i>
                                    </div>
                                    <div class="video-gallery-overlay"></div>
                                    <div class="video-gallery-info">
                                        <h3>Our history lives in these songs</h3>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="video-gallery-items">
                            <a href="https://youtu.be/fTkjS8cUQns?si=_EiSWYYvaB8NC-Ko" target="_blank">
                                <div class="video-gallery-imgs">
                                    <img class="img-fluid" src="media/imgAll/bg/Home-Page/video-theme-1.jpg" alt="video-theme-1.jpg">
                                    <div class="video-icons">
                                        <i class="fa-solid fa-play"></i>
                                    </div>
                                    <div class="video-gallery-overlay"></div>
                                    <div class="video-gallery-info">
                                        <h3>Tunes of sacrifice, pride in every beat</h3>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="video-gallery-items">
                            <a href="https://youtu.be/fTkjS8cUQns?si=_EiSWYYvaB8NC-Ko" target="_blank">
                                <div class="video-gallery-imgs">
                                    <img class="img-fluid" src="media/imgAll/bg/Home-Page/video-theme-2.jpg" alt="video-theme-2.jpg">
                                    <div class="video-icons">
                                        <i class="fa-solid fa-play"></i>
                                    </div>
                                    <div class="video-gallery-overlay"></div>
                                    <div class="video-gallery-info">
                                        <h3>Not just music—it's emotion and remembrance</h3>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="video-gallery-items">
                            <a href="https://youtu.be/fTkjS8cUQns?si=_EiSWYYvaB8NC-Ko" target="_blank">
                                <div class="video-gallery-imgs">
                                    <img class="img-fluid" src="media/imgAll/bg/Home-Page/video-theme-3.jpg" alt="video-theme-3.jpg">
                                    <div class="video-icons">
                                        <i class="fa-solid fa-play"></i>
                                    </div>
                                    <div class="video-gallery-overlay"></div>
                                    <div class="video-gallery-info">
                                        <h3>A tribute in every note to our martyrs</h3>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="photo-gallery-Area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title text-center">
                            <h2><a href="gallery.php" class="title">Photo Gallery</a></h2>
                            <div class="underline">
                                <span></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="photo-gallery">
                    <div class="row">
                        <div class="col-lg-6 order-lg-2 order-1 mb-2 mb-md-3 mb-lg-0">
                            <div class="photo-gallery-lead">
                                <a data-fancybox="photo-gallery" href="media/imgAll/bg/Home-Page/photo-gallery-1.jpg" data-caption="Honoring the martyrs through art, music, and unity — Shohid-Shilpigosthi.">
                                    <div class="photo-Gallery-Imgs">
                                        <img class="img-fluid" src="media/imgAll/bg/Home-Page/photo-gallery-1.jpg"
                                            alt="photo-gallery-1.jpg">
                                        <div class="photo-Gallery-Overlay"></div>
                                    </div>
                                    <div class="photo-Gallery-Info">
                                        <h3>Honoring the martyrs through art, music, and unity — Shohid-Shilpigosthi.</h3>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 order-lg-1 order-2">
                            <div class="row g-md-3 g-lg-0">
                                <div class="col-lg-12 col-6 ">
                                    <div class="photo-gallery-List">
                                        <a data-fancybox="photo-gallery" href="media/imgAll/bg/Home-Page/photo-gallery-2.jpg" data-caption="Where sacrifice meets creativity — Shohid-Shilpigosthi in action.">
                                            <div class="photo-Gallery-Imgs">
                                                <img class="img-fluid" src="media/imgAll/bg/Home-Page/photo-gallery-2.jpg"
                                                    alt="photo-gallery-2.jpg">
                                                <div class="photo-Gallery-Overlay"></div>
                                            </div>
                                            <div class="photo-Gallery-Info">
                                                <h3>Where sacrifice meets creativity — Shohid-Shilpigosthi in action.</h3>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-6 ">
                                    <div class="photo-gallery-List">
                                        <a data-fancybox="photo-gallery" href="media/imgAll/bg/Home-Page/photo-gallery-3.jpg" data-caption="Keeping the spirit of the martyrs alive through cultural expression.">
                                            <div class="photo-Gallery-Imgs">
                                                <img class="img-fluid" src="media/imgAll/bg/Home-Page/photo-gallery-3.jpg"
                                                    alt="photo-gallery-2.jpg">
                                                <div class="photo-Gallery-Overlay"></div>
                                            </div>
                                            <div class="photo-Gallery-Info">
                                                <h3>Keeping the spirit of the martyrs alive through cultural expression.</h3>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 order-lg-3 order-3">
                            <div class="row g-md-3 g-lg-0">
                                <div class="col-lg-12  col-6">
                                    <div class="photo-gallery-List">
                                        <a data-fancybox="photo-gallery" href="media/imgAll/bg/Home-Page/photo-gallery-4.jpg" data-caption="Remembering the heroes, inspiring the future through performance and culture.">
                                            <div class="photo-Gallery-Imgs">
                                                <img class="img-fluid" src="media/imgAll/bg/Home-Page/photo-gallery-4.jpg"
                                                    alt="photo-gallery-2.jpg">
                                                <div class="photo-Gallery-Overlay"></div>
                                            </div>
                                            <div class="photo-Gallery-Info">
                                                <h3>Remembering the heroes, inspiring the future through performance and culture.</h3>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-12  col-6">
                                    <div class="photo-gallery-List">
                                        <a data-fancybox="photo-gallery" href="media/imgAll/bg/Home-Page/photo-gallery-5.jpg" data-caption="Art with purpose, voices with meaning — Shohid-Shilpigosthi.">
                                            <div class="photo-Gallery-Imgs">
                                                <img class="img-fluid" src="media/imgAll/bg/Home-Page/photo-gallery-5.jpg"
                                                    alt="photo-gallery-2.jpg">
                                                <div class="photo-Gallery-Overlay"></div>
                                            </div>
                                            <div class="photo-Gallery-Info">
                                                <h3>Art with purpose, voices with meaning — Shohid-Shilpigosthi.</h3>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="activities-area">
            <div class="container">
                <div class="activities-wrap">
                    <div class="arrow-img-three">
                        <img src="media/imgAll/bg/Home-Page/arrow-3.webp" alt="">
                    </div>
                    <div class="arrow-img-four">
                        <img src="media/imgAll/bg/Home-Page/arrow-4.webp" alt="">
                    </div>
                    <div class="backgroun-imgs-icons-one">
                        <img src="media/imgAll/bg/Home-Page/backgroun-imgs-icons-1.png" alt="">
                    </div>
                    <div class="backgroun-imgs-icons-tow">
                        <img src="media/imgAll/bg/Home-Page/backgroun-imgs-icons-2.png" alt="">
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-title text-center">
                                <h2><a href="#" class="title">Our Activities</a></h2>
                                <div class="underline">
                                    <span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row g-4">
                        <div class="col-md-4 col-sm-6 d-flex align-items-center">
                            <div class="activity-card">
                                <div class="icon"><i class="fas fa-music"></i></div>
                                <h4>Cultural Events</h4>
                                <p>We organize cultural programs and events</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 d-flex align-items-center">
                            <div class="activity-card">
                                <div class="icon"><i class="fas fa-chalkboard-teacher"></i></div>
                                <h4>Training Programs</h4>
                                <p>Simple and structured learning sessions</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 d-flex align-items-center">
                            <div class="activity-card">
                                <div class="icon"><i class="fas fa-theater-masks"></i></div>
                                <h4>Performances</h4>
                                <p>Stage shows and live presentations</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 d-flex align-items-center">
                            <div class="activity-card">
                                <div class="icon"><i class="fas fa-tv"></i></div>
                                <h4>TV Programs</h4>
                                <p>Educational and media content</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 d-flex align-items-center">
                            <div class="activity-card">
                                <div class="icon"><i class="fas fa-book"></i></div>
                                <h4>Publications</h4>
                                <p>Books, articles and publications</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 d-flex align-items-center">
                            <div class="activity-card">
                                <div class="icon"><i class="fas fa-trophy"></i></div>
                                <h4>Competitions</h4>
                                <p>Friendly contests and competitions</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- footer-area -->
    <?php include_once("common/footer.php"); ?>
    <?php echo $sJSjQuery; ?>
    <?php echo $sJSSlick; ?>
    <?php echo $sJSBootStrap; ?>
    <?php echo $sJSFancybox; ?>
    <script>
        $('.hero-slider').slick({
            centerMode: true,
            centerPadding: '0px',
            slidesToShow: 1,
            autoplay: true,
            autoplaySpeed: 2000,
            speed: 1000,
            fade: true,
            cssEase: 'ease-in-out',
            arrows: true,
            prevArrow: '<span class="priv_arrow"><i class="fas fa-chevron-left"></i></span>',
            nextArrow: '<span class="next_arrow"><i class="fas fa-chevron-right"></i></span>',
            dots: false,
            pauseOnHover: false
        });
        // video-slider
        $(document).ready(function() {
            $(".video-slider").slick({
                dots: false,
                arrows: true,
                infinite: true,
                speed: 1000,
                centerPadding: '0 50px',
                autoplay: true,
                prevArrow: '<span class="priv_arrow"><i class="fas fa-chevron-left"></i></span>',
                nextArrow: '<span class="next_arrow"><i class="fas fa-chevron-right"></i></span>',
                slidesToShow: 4,
                slidesToScroll: 1,
                responsive: [{
                        breakpoint: 1023,
                        settings: {
                            slidesToShow: 4,
                            slidesToScroll: 1,
                            infinite: false,
                            dots: false,
                        },
                    },
                    {
                        breakpoint: 992,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 1,
                        },
                    },
                    {
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1,
                        },
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1,
                        },
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                        },
                    },
                ],
            });
        });
        // Fancybox
        Fancybox.bind("[data-fancybox='photo-gallery']", {
            Thumbs: {
                autoStart: true,
            },
            Toolbar: {
                display: ["close", "zoom", "fullscreen", "thumbs"],
            },
            AnimationEffect: "zoom",
            dragToClose: true,
            loop: true,
        });
    </script>
    <?php echo $sJSEMM; ?>
</body>

</html>