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
    echo $sCSSEMM; ?>
</head>

<body>
    <?php echo $sFbRoot; ?>
    <?php echo $sGTagManagerBody; ?>
    <?php include_once("common/header.php"); ?>
    <!-- Back to top button -->
    <a id="button"><i class="fas fa-angle-double-up"></i></a>
    <main>
        <section class="hero-silider-area">
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
        <!-- <section class="divisions-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <a href="#">
                            <div class="section-title text-center">
                                <h2 class="title">Divisions</h2>
                                <div class="underline">
                                    <span></span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="row g-4 division-wrapper">
                    <div class="col-6 col-md-4 col-lg-3">
                        <a href="#" class="division-card">
                            <div class="division-img">
                                <img src="media/imgAll/bg/Home-Page/divisions-1.jpg" alt="divisions-1.jpg">
                            </div>
                            <div class="division-content">
                                <h4>Tilawat Section</h4>
                            </div>
                        </a>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3">
                        <a href="#" class="division-card">
                            <div class="division-img">
                                <img src="media/imgAll/bg/Home-Page/divisions-2.jpg" alt="divisions-2.jpg">
                            </div>
                            <div class="division-content">
                                <h4>Islamic Song</h4>
                            </div>
                        </a>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3">
                        <a href="#" class="division-card">
                            <div class="division-img">
                                <img src="media/imgAll/bg/Home-Page/divisions-3.jpg" alt="divisions-3.jpg">
                            </div>
                            <div class="division-content">
                                <h4>Recitation</h4>
                            </div>
                        </a>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3">
                        <a href="#" class="division-card">
                            <div class="division-img">
                                <img src="media/imgAll/bg/Home-Page/divisions-4.jpg" alt="divisions-4.jpg">
                            </div>
                            <div class="division-content">
                                <h4>Theatre Department</h4>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section> -->
        <section class="divisions-area">
            <div class="container">
                <div class="arrow-img-one">
                    <img src="media/imgAll/bg/Home-Page/arrow-1.svg" alt="">
                </div>
                <div class="arrow-img-tow">
                    <img src="media/imgAll/bg/Home-Page/arrow-2.svg" alt="">
                </div>
                <!-- Section Title -->
                <div class="section-title text-center mb-5">
                    <h2 class="title">Divisions</h2>
                </div>
                <div class="row g-4">
                    <!-- 1 -->
                    <div class="col-6 col-md-4 col-lg-3">
                        <a href="#" class="division-card">
                            <div class="division-img">
                                <img src="media/imgAll/bg/Home-Page/divisions-1.jpg" alt="Tilawat">
                                <div class="overlay"></div>
                                <h4>Tilawat Section</h4>
                            </div>
                        </a>
                    </div>
                    <!-- 2 -->
                    <div class="col-6 col-md-4 col-lg-3">
                        <a href="#" class="division-card">
                            <div class="division-img">
                                <img src="media/imgAll/bg/Home-Page/divisions-2.jpg" alt="Islamic Song">
                                <div class="overlay"></div>
                                <h4>Islamic Song</h4>
                            </div>
                        </a>
                    </div>
                    <!-- 3 -->
                    <div class="col-6 col-md-4 col-lg-3">
                        <a href="#" class="division-card">
                            <div class="division-img">
                                <img src="media/imgAll/bg/Home-Page/divisions-3.jpg" alt="Recitation">
                                <div class="overlay"></div>
                                <h4>Recitation</h4>
                            </div>
                        </a>
                    </div>
                    <!-- 4 -->
                    <div class="col-6 col-md-4 col-lg-3">
                        <a href="#" class="division-card">
                            <div class="division-img">
                                <img src="media/imgAll/bg/Home-Page/divisions-4.jpg" alt="Theatre">
                                <div class="overlay"></div>
                                <h4>Theatre Department</h4>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <section class="popular-presentation-area">
            <div class="container">
                <div class="dot-img-one">
                    <img src="media/imgAll/bg/Home-Page/dot-1.png" alt="">
                </div>
                <div class="dot-img-tow">
                    <img src="media/imgAll/bg/Home-Page/dot-2.png" alt="">
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <a href="#">
                            <div class="section-title text-center">
                                <h2 class="title">Popular Presentation</h2>
                                <div class="underline">
                                    <span></span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="video-slider">
                    <div class="video-gallery-items">
                        <a href="#">
                            <div class="video-gallery-imgs">
                                <img class="img-fluid" src="media/imgAll/bg/Home-Page/video-theme-4.jpg" alt="video-theme-4.jpg">
                                <div class="video-icons">
                                    <i class="fa-solid fa-play"></i>
                                </div>
                                <div class="video-gallery-overlay"></div>
                            </div>
                        </a>
                    </div>
                    <div class="video-gallery-items">
                        <a href="#">
                            <div class="video-gallery-imgs">
                                <img class="img-fluid" src="media/imgAll/bg/Home-Page/video-theme-5.jpg" alt="video-theme-5.jpg">
                                <div class="video-icons">
                                    <i class="fa-solid fa-play"></i>
                                </div>
                                <div class="video-gallery-overlay"></div>
                            </div>
                        </a>
                    </div>
                    <div class="video-gallery-items">
                        <a href="#">
                            <div class="video-gallery-imgs">
                                <img class="img-fluid" src="media/imgAll/bg/Home-Page/video-theme-6.jpg" alt="video-theme-6.jpg">
                                <div class="video-icons">
                                    <i class="fa-solid fa-play"></i>
                                </div>
                                <div class="video-gallery-overlay"></div>
                            </div>
                        </a>
                    </div>
                    <div class="video-gallery-items">
                        <a href="#">
                            <div class="video-gallery-imgs">
                                <img class="img-fluid" src="media/imgAll/bg/Home-Page/video-theme-7.jpg" alt="video-theme-7.jpg">
                                <div class="video-icons">
                                    <i class="fa-solid fa-play"></i>
                                </div>
                                <div class="video-gallery-overlay"></div>
                            </div>
                        </a>
                    </div>
                    <div class="video-gallery-items">
                        <a href="#">
                            <div class="video-gallery-imgs">
                                <img class="img-fluid" src="media/imgAll/bg/Home-Page/video-theme-1.jpg" alt="video-theme-1.jpg">
                                <div class="video-icons">
                                    <i class="fa-solid fa-play"></i>
                                </div>
                                <div class="video-gallery-overlay"></div>
                            </div>
                        </a>
                    </div>
                    <div class="video-gallery-items">
                        <a href="#">
                            <div class="video-gallery-imgs">
                                <img class="img-fluid" src="media/imgAll/bg/Home-Page/video-theme-2.jpg" alt="video-theme-2.jpg">
                                <div class="video-icons">
                                    <i class="fa-solid fa-play"></i>
                                </div>
                                <div class="video-gallery-overlay"></div>
                            </div>
                        </a>
                    </div>
                    <div class="video-gallery-items">
                        <a href="#">
                            <div class="video-gallery-imgs">
                                <img class="img-fluid" src="media/imgAll/bg/Home-Page/video-theme-3.jpg" alt="video-theme-3.jpg">
                                <div class="video-icons">
                                    <i class="fa-solid fa-play"></i>
                                </div>
                                <div class="video-gallery-overlay"></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <section class="activities-area">
            <div class="container">
                <div class="arrow-img-three">
                    <img src="media/imgAll/bg/Home-Page/arrow-3.webp" alt="">
                </div>
                <div class="arrow-img-four">
                    <img src="media/imgAll/bg/Home-Page/arrow-4.webp" alt="">
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <a href="#">
                            <div class="section-title text-center">
                                <h2 class="title">Our Activities</h2>
                                <div class="underline">
                                    <span></span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6">
                        <div class="activity-card">
                            <div class="icon"><i class="fas fa-music"></i></div>
                            <h4>Cultural Events</h4>
                            <p>We organize cultural programs and events</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="activity-card">
                            <div class="icon"><i class="fas fa-chalkboard-teacher"></i></div>
                            <h4>Training Programs</h4>
                            <p>Simple and structured learning sessions</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="activity-card">
                            <div class="icon"><i class="fas fa-theater-masks"></i></div>
                            <h4>Performances</h4>
                            <p>Stage shows and live presentations</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="activity-card">
                            <div class="icon"><i class="fas fa-tv"></i></div>
                            <h4>TV Programs</h4>
                            <p>Educational and media content</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="activity-card">
                            <div class="icon"><i class="fas fa-book"></i></div>
                            <h4>Publications</h4>
                            <p>Books, articles and publications</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="activity-card">
                            <div class="icon"><i class="fas fa-trophy"></i></div>
                            <h4>Competitions</h4>
                            <p>Friendly contests and competitions</p>
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
    <script>
        // hero-slider
        $('.hero-slider').slick({
            centerMode: true,
            centerPadding: '0px',
            slidesToShow: 1,
            autoplay: false,
            autoplaySpeed: 2000,
            speed: 800,
            cssEase: 'ease-in-out',
            arrows: true,
            prevArrow: '<span class="priv_arrow"><i class="fas fa-chevron-left"></i></span>',
            nextArrow: '<span class="next_arrow"><i class="fas fa-chevron-right"></i></span>',
            dots: false,
            pauseOnHover: false,
            responsive: [{
                breakpoint: 768,
                settings: {
                    slidesToShow: 1
                }
            }]
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
                            slidesToShow: 4,
                            slidesToScroll: 1,
                        },
                    },
                    {
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                        },
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 1,
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
    </script>
    <?php echo $sJSEMM; ?>
</body>

</html>