<?php include_once("common/config.php"); ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
    <title>Academy</title>
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
    <main class="academy-page">
        <section class="common-banner-area">
            <div class="container">
                <h1>Academy</h1>
                <ul class="breadcrumb">
                    <li><a href="index.php">Home</a></li>
                    <li class="active">Academy</li>
                </ul>
            </div>
        </section>
        <section class="academy-area">
            <div class="container">
                <div class="academy-area-wrap">
                    <div class="row g-4 justify-content-center">
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="branch-card">
                                <h3>Mirpur Branch</h3>
                                <div class="branch-info">
                                    <p><span>Address :</span> House #12, Road #05, Mirpur-10, Dhaka</p>
                                    <p><span>Call :</span> <a href="tel:+8801714822008">+880 1714-822008</a></p>
                                    <p><span>Email :</span> <a href="mailto:mirpur@gmail.com">mirpur@gmail.com</a></p>
                                </div>
                                <div class="payment-box">
                                    <p><span>Bkash :</span> 01714-822008</p>
                                    <p><span>Nagad :</span> 01855-114477</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="branch-card">
                                <h3>Uttara Branch</h3>
                                <div class="branch-info">
                                    <p><span>Address :</span> Sector-07, Uttara, Dhaka</p>
                                    <p><span>Call :</span> <a href="tel:+8801811223344">+880 1811-223344</a></p>
                                    <p><span>Email :</span> <a href="mailto:uttara@gmail.com">uttara@gmail.com</a></p>
                                </div>
                                <div class="payment-box">
                                    <p><span>Bkash :</span> 01811-223344</p>
                                    <p><span>Nagad :</span> 01922-445566</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="branch-card">
                                <h3>Dhanmondi Branch</h3>
                                <div class="branch-info">
                                    <p><span>Address :</span> Road-27, Dhanmondi, Dhaka</p>
                                    <p><span>Call :</span> <a href="tel:+8801911445566">+880 1911-445566</a></p>
                                    <p><span>Email :</span> <a href="mailto:dhanmondi@gmail.com">dhanmondi@gmail.com</a></p>
                                </div>
                                <div class="payment-box">
                                    <p><span>Bkash :</span> 01911-445566</p>
                                    <p><span>Nagad :</span> 01677-889900</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="branch-card">
                                <h3>Chattogram Branch</h3>
                                <div class="branch-info">
                                    <p><span>Address :</span> GEC Circle, Chattogram</p>
                                    <p><span>Call :</span> <a href="tel:+8801612334455">+880 1612-334455</a></p>
                                    <p><span>Email :</span> <a href="mailto:ctg@gmail.com">ctg@gmail.com</a></p>
                                </div>
                                <div class="payment-box">
                                    <p><span>Bkash :</span> 01612-334455</p>
                                    <p><span>Nagad :</span> 01588-778899</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="branch-card">
                                <h3>Sylhet Branch</h3>
                                <div class="branch-info">
                                    <p><span>Address :</span> Zindabazar, Sylhet</p>
                                    <p><span>Call :</span> <a href="tel:+8801711002200">+880 1711-002200</a></p>
                                    <p><span>Email :</span> <a href="mailto:sylhet@gmail.com">sylhet@gmail.com</a></p>
                                </div>
                                <div class="payment-box">
                                    <p><span>Bkash :</span> 01711-002200</p>
                                    <p><span>Nagad :</span> 01333-224466</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="branch-card">
                                <h3>Khulna Branch</h3>
                                <div class="branch-info">
                                    <p><span>Address :</span> Shib Bari More, Khulna</p>
                                    <p><span>Call :</span> <a href="tel:+8801811778899">+880 1811-778899</a></p>
                                    <p><span>Email :</span> <a href="mailto:khulna@gmail.com">khulna@gmail.com</a></p>
                                </div>
                                <div class="payment-box">
                                    <p><span>Bkash :</span> 01811-778899</p>
                                    <p><span>Nagad :</span> 01755-991122</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="branch-card">
                                <h3>Rajshahi Branch</h3>
                                <div class="branch-info">
                                    <p><span>Address :</span> Shaheb Bazar, Rajshahi</p>
                                    <p><span>Call :</span> <a href="tel:+8801999887766">+880 1999-887766</a></p>
                                    <p><span>Email :</span> <a href="mailto:rajshahi@gmail.com">rajshahi@gmail.com</a></p>
                                </div>
                                <div class="payment-box">
                                    <p><span>Bkash :</span> 01999-887766</p>
                                    <p><span>Nagad :</span> 01444-223355</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="branch-card">
                                <h3>Barishal Branch</h3>
                                <div class="branch-info">
                                    <p><span>Address :</span> Sadar Road, Barishal</p>
                                    <p><span>Call :</span> <a href="tel:+8801766554433">+880 1766-554433</a></p>
                                    <p><span>Email :</span> <a href="mailto:barishal@gmail.com">barishal@gmail.com</a></p>
                                </div>
                                <div class="payment-box">
                                    <p><span>Bkash :</span> 01766-554433</p>
                                    <p><span>Nagad :</span> 01555-667788</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pagination-area mt-5">
                <div class="container">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <span aria-hidden="true">«</span>
                                </a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <span aria-hidden="true">»</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </section>
    </main>
    <!-- footer-area -->
    <?php include_once("common/footer.php"); ?>
    <?php echo $sJSjQuery; ?>
    <?php echo $sJSBootStrap; ?>
    <script type="text/javascript"
        src="https://platform-api.sharethis.com/js/sharethis.js#property=67ad9e6e67f47b001298d58b&product=inline-share-buttons&source=platform"
        async="async"></script>
    <?php echo $sJSEMM; ?>
</body>

</html>