<?php include_once("common/config.php"); ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
    <title>Competition</title>
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
    <main class="competition-page">
        <section class="common-banner-area">
            <div class="container">
                <h1>Competition</h1>
                <ul class="breadcrumb">
                    <li><a href="index.php">Home</a></li>
                    <li class="active">Competition</li>
                </ul>
            </div>
        </section>
        <section class="competition-page-area">
            <div class="container">
                <div class="row g-3">
                    <div class="col-lg-3 col-sm-6 d-flex">
                        <div class="competition-card">
                            <img class="img-fluid" src="media/imgAll/bg/others-page/competition-1.jpg" alt="competition-1.jpg">
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 d-flex">
                        <div class="competition-card">
                            <img class="img-fluid" src="media/imgAll/bg/others-page/competition-2.jpg" alt="competition-2.jpg">
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 d-flex">
                        <div class="competition-card">
                            <img class="img-fluid" src="media/imgAll/bg/others-page/competition-3.jpg" alt="competition-3.jpg">
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 d-flex">
                        <div class="competition-card">
                            <img class="img-fluid" src="media/imgAll/bg/others-page/competition-4.jpg" alt="competition-4.jpg">
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 d-flex">
                        <div class="competition-card">
                            <img class="img-fluid" src="media/imgAll/bg/others-page/competition-5.jpg" alt="competition-5.jpg">
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 d-flex">
                        <div class="competition-card">
                            <img class="img-fluid" src="media/imgAll/bg/others-page/competition-6.jpg" alt="competition-6.jpg">
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 d-flex">
                        <div class="competition-card">
                            <img class="img-fluid" src="media/imgAll/bg/others-page/competition-7.jpg" alt="competition-7.jpg">
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 d-flex">
                        <div class="competition-card">
                            <img class="img-fluid" src="media/imgAll/bg/others-page/competition-8.jpg" alt="competition-8.jpg">
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- footer-area -->
    <?php include_once("common/footer.php"); ?>
    <?php echo $sJSjQuery; ?>
    <?php echo $sJSBootStrap; ?>
    <?php echo $sJSEMM; ?>
</body>
</html>