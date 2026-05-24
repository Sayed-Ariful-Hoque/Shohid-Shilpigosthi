<?php include_once("common/config.php"); ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
    <title>About Us</title>
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
    echo $sCSSFancybox;
    echo $sCSSEMM; ?>
</head>

<body class="others-page">
    <?php echo $sFbRoot; ?>
    <?php echo $sGTagManagerBody; ?>
    <?php include_once("common/header.php"); ?>
    <!-- Back to top button -->
    <a id="button"><i class="fas fa-angle-double-up"></i></a>
    <main>
        <section class="common-banner-area">
            <div class="container">
                <h1>About Us</h1>
                <ul class="breadcrumb">
                    <li><a href="index.php">Home</a></li>
                    <li class="active">About Us</li>
                </ul>
            </div>
        </section>
        <!-- <section class="about-page-area">
            <div class="container">
                <div class="about-wrapper">
                </div>
            </div>
        </section> -->
        <!-- About Us Section Start -->
        <!-- ====================================
        Premium About Organization Section
==================================== -->
        <section class="about-page-area">
            <div class="container">

                <!-- Top Title -->
                <!-- <div class="section-heading text-center">
                    <span>ABOUT OUR ORGANIZATION</span>
                    <h2>
                        Empowering Society Through <br>
                        Creativity, Leadership & Humanity
                    </h2>
                </div> -->
                <div class="row g-5">
                    <div class="col-lg-4">
                        <div class="about-left">
                            <div class="about-left-wrap">
                                <div class="image-one">
                                    <img class="img-fluid" src="media/imgAll/bg/others-page/about.png" alt="about.png">
                                </div>
                                <div class="circle-shape"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="premium-about-content">
                            <div class="about-tag">
                                <h5><i class="fa-solid fa-star"></i>
                                Trusted Organization</h5>
                            </div>
                            <h2>
                                We Create Positive Impact
                                Through Culture, Education
                                & Social Development
                            </h2>
                            <p>
                                Our organization is committed to building a stronger
                                and more creative society through education,
                                cultural activities, leadership development,
                                and humanitarian initiatives. We continuously
                                work to inspire future generations and support
                                talented individuals across the community.
                            </p>
                            <p>
                                Our organization is committed to building a stronger
                                and more creative society through education,
                                cultural activities, leadership development,
                                and humanitarian initiatives. We continuously
                                work to inspire future generations and support
                                talented individuals across the community.
                            </p>
                            <p>
                                Our organization is committed to building a stronger
                                and more creative society through education,
                                cultural activities, leadership development,
                                and humanitarian initiatives. We continuously
                                work to inspire future generations and support
                                talented individuals across the community.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Us Section End -->
    </main>
    <!-- footer-area -->
    <?php include_once("common/footer.php"); ?>
    <?php echo $sJSjQuery; ?>
    <?php echo $sJSBootStrap; ?>
    <?php echo $sJSEMM; ?>
</body>

</html>