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
                <div class="row">
                    <div class="col-lg-12">
                        <div class="competition-wrap">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <div class="copetition-tabs-heding">
                                        <ul class="nav nav-pills" id="pills-tab" role="tablist">
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">All</button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">
                                                    Upcoming</button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Past</button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="pills-ongoing-tab" data-bs-toggle="pill" data-bs-target="#pills-ongoing" type="button" role="tab" aria-controls="pills-ongoing" aria-selected="false" ongoing>Ongoing</button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="copetition-tabs-body">
                                <div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                                        aria-labelledby="pills-home-tab" tabindex="0">
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
                                    </div>
                                    <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                                        aria-labelledby="pills-profile-tab" tabindex="0">
                                        <div class="competition-items-wrap">
                                            <div class="row g-3">
                                                <div class="col-lg-3 col-sm-6 d-flex align-items-center">
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
                                                <div class="col-lg-3 col-sm-6 d-flex align-items-center">
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
                                                <div class="col-lg-3 col-sm-6 d-flex align-items-center">
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
                                                <div class="col-lg-3 col-sm-6 d-flex align-items-center">
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
                                                <div class="col-lg-3 col-sm-6 d-flex align-items-center">
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
                                                <div class="col-lg-3 col-sm-6 d-flex align-items-center">
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
                                                <div class="col-lg-3 col-sm-6 d-flex align-items-center">
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
                                                <div class="col-lg-3 col-sm-6 d-flex align-items-center">
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
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                                        aria-labelledby="pills-contact-tab" tabindex="0">
                                        <div class="competition-items-wrap">
                                            <div class="row g-3">
                                                <div class="col-lg-3 col-sm-6 d-flex align-items-center">
                                                    <a class="competition-card" href="competition-details.php">
                                                        <div class="competition-imgs">
                                                            <img class="img-fluid" src="media/imgAll/bg/Home-Page/competition-1.jpg" alt="চলো বিশ্ব জয় করি">
                                                            <div class="overlay"></div>
                                                            <span class="competition-badge">Past</span>
                                                        </div>
                                                        <div class="competition-info">
                                                            <h3 class="dynamic-font">চলো বিশ্ব জয় করি</h3>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-lg-3 col-sm-6 d-flex align-items-center">
                                                    <a class="competition-card" href="competition-details.php">
                                                        <div class="competition-imgs">
                                                            <img class="img-fluid" src="media/imgAll/bg/Home-Page/competition-7.jpg" alt="competition-7.jpg">
                                                            <div class="overlay"></div>
                                                            <span class="competition-badge">Past</span>
                                                        </div>
                                                        <div class="competition-info">
                                                            <h3 class="dynamic-font">জ্ঞানেই শক্তি</h3>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-lg-3 col-sm-6 d-flex align-items-center">
                                                    <a class="competition-card" href="competition-details.php">
                                                        <div class="competition-imgs">
                                                            <img class="img-fluid" src="media/imgAll/bg/Home-Page/competition-4.jpg" alt="competition-4.jpg">
                                                            <div class="overlay"></div>
                                                            <span class="competition-badge">Past</span>
                                                        </div>
                                                        <div class="competition-info">
                                                            <h3 class="dynamic-font">Future Champions</h3>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-lg-3 col-sm-6 d-flex align-items-center">
                                                    <a class="competition-card" href="competition-details.php">
                                                        <div class="competition-imgs">
                                                            <img class="img-fluid" src="media/imgAll/bg/Home-Page/competition-1.jpg" alt="চলো বিশ্ব জয় করি">
                                                            <div class="overlay"></div>
                                                            <span class="competition-badge">Past</span>
                                                        </div>
                                                        <div class="competition-info">
                                                            <h3 class="dynamic-font">চলো বিশ্ব জয় করি</h3>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-lg-3 col-sm-6 d-flex align-items-center">
                                                    <a class="competition-card" href="competition-details.php">
                                                        <div class="competition-imgs">
                                                            <img class="img-fluid" src="media/imgAll/bg/Home-Page/competition-7.jpg" alt="competition-7.jpg">
                                                            <div class="overlay"></div>
                                                            <span class="competition-badge">Past</span>
                                                        </div>
                                                        <div class="competition-info">
                                                            <h3 class="dynamic-font">জ্ঞানেই শক্তি</h3>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-lg-3 col-sm-6 d-flex align-items-center">
                                                    <a class="competition-card" href="competition-details.php">
                                                        <div class="competition-imgs">
                                                            <img class="img-fluid" src="media/imgAll/bg/Home-Page/competition-4.jpg" alt="competition-4.jpg">
                                                            <div class="overlay"></div>
                                                            <span class="competition-badge">Past</span>
                                                        </div>
                                                        <div class="competition-info">
                                                            <h3 class="dynamic-font">Future Champions</h3>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-lg-3 col-sm-6 d-flex align-items-center">
                                                    <a class="competition-card" href="competition-details.php">
                                                        <div class="competition-imgs">
                                                            <img class="img-fluid" src="media/imgAll/bg/Home-Page/competition-1.jpg" alt="চলো বিশ্ব জয় করি">
                                                            <div class="overlay"></div>
                                                            <span class="competition-badge">Past</span>
                                                        </div>
                                                        <div class="competition-info">
                                                            <h3 class="dynamic-font">চলো বিশ্ব জয় করি</h3>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-lg-3 col-sm-6 d-flex align-items-center">
                                                    <a class="competition-card" href="competition-details.php">
                                                        <div class="competition-imgs">
                                                            <img class="img-fluid" src="media/imgAll/bg/Home-Page/competition-4.jpg" alt="competition-4.jpg">
                                                            <div class="overlay"></div>
                                                            <span class="competition-badge">Past</span>
                                                        </div>
                                                        <div class="competition-info">
                                                            <h3 class="dynamic-font">Future Champions</h3>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="pills-ongoing" role="tabpanel"
                                        aria-labelledby="pills-ongoing-tab" tabindex="0">
                                        <div class="competition-items-wrap">
                                            <div class="row g-3">
                                                <div class="col-lg-3 col-sm-6 d-flex align-items-center">
                                                    <a class="competition-card" href="competition-details.php">
                                                        <div class="competition-imgs">
                                                            <img class="img-fluid" src="media/imgAll/bg/Home-Page/competition-1.jpg" alt="চলো বিশ্ব জয় করি">
                                                            <div class="overlay"></div>
                                                            <span class="competition-badge">Ongoing</span>
                                                        </div>
                                                        <div class="competition-info">
                                                            <h3 class="dynamic-font">চলো বিশ্ব জয় করি</h3>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-lg-3 col-sm-6 d-flex align-items-center">
                                                    <a class="competition-card" href="competition-details.php">
                                                        <div class="competition-imgs">
                                                            <img class="img-fluid" src="media/imgAll/bg/Home-Page/competition-7.jpg" alt="competition-7.jpg">
                                                            <div class="overlay"></div>
                                                            <span class="competition-badge">Ongoing</span>
                                                        </div>
                                                        <div class="competition-info">
                                                            <h3 class="dynamic-font">জ্ঞানেই শক্তি</h3>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-lg-3 col-sm-6 d-flex align-items-center">
                                                    <a class="competition-card" href="competition-details.php">
                                                        <div class="competition-imgs">
                                                            <img class="img-fluid" src="media/imgAll/bg/Home-Page/competition-4.jpg" alt="competition-4.jpg">
                                                            <div class="overlay"></div>
                                                            <span class="competition-badge">Ongoing</span>
                                                        </div>
                                                        <div class="competition-info">
                                                            <h3 class="dynamic-font">Future Champions</h3>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-lg-3 col-sm-6 d-flex align-items-center">
                                                    <a class="competition-card" href="competition-details.php">
                                                        <div class="competition-imgs">
                                                            <img class="img-fluid" src="media/imgAll/bg/Home-Page/competition-1.jpg" alt="চলো বিশ্ব জয় করি">
                                                            <div class="overlay"></div>
                                                            <span class="competition-badge">Ongoing</span>
                                                        </div>
                                                        <div class="competition-info">
                                                            <h3 class="dynamic-font">চলো বিশ্ব জয় করি</h3>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-lg-3 col-sm-6 d-flex align-items-center">
                                                    <a class="competition-card" href="competition-details.php">
                                                        <div class="competition-imgs">
                                                            <img class="img-fluid" src="media/imgAll/bg/Home-Page/competition-7.jpg" alt="competition-7.jpg">
                                                            <div class="overlay"></div>
                                                            <span class="competition-badge">Ongoing</span>
                                                        </div>
                                                        <div class="competition-info">
                                                            <h3 class="dynamic-font">জ্ঞানেই শক্তি</h3>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-lg-3 col-sm-6 d-flex align-items-center">
                                                    <a class="competition-card" href="competition-details.php">
                                                        <div class="competition-imgs">
                                                            <img class="img-fluid" src="media/imgAll/bg/Home-Page/competition-4.jpg" alt="competition-4.jpg">
                                                            <div class="overlay"></div>
                                                            <span class="competition-badge">Ongoing</span>
                                                        </div>
                                                        <div class="competition-info">
                                                            <h3 class="dynamic-font">Future Champions</h3>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-lg-3 col-sm-6 d-flex align-items-center">
                                                    <a class="competition-card" href="competition-details.php">
                                                        <div class="competition-imgs">
                                                            <img class="img-fluid" src="media/imgAll/bg/Home-Page/competition-1.jpg" alt="চলো বিশ্ব জয় করি">
                                                            <div class="overlay"></div>
                                                            <span class="competition-badge">Ongoing</span>
                                                        </div>
                                                        <div class="competition-info">
                                                            <h3 class="dynamic-font">চলো বিশ্ব জয় করি</h3>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-lg-3 col-sm-6 d-flex align-items-center">
                                                    <a class="competition-card" href="competition-details.php">
                                                        <div class="competition-imgs">
                                                            <img class="img-fluid" src="media/imgAll/bg/Home-Page/competition-4.jpg" alt="competition-4.jpg">
                                                            <div class="overlay"></div>
                                                            <span class="competition-badge">Ongoing</span>
                                                        </div>
                                                        <div class="competition-info">
                                                            <h3 class="dynamic-font">Future Champions</h3>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
    <?php echo $sJSEMM; ?>
</body>

</html>