<?php include_once("common/config.php"); ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
    <title>Theatre Department</title>
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
                <h1>Competition Details</h1>
                <ul class="breadcrumb">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="competition.php">Competition</a></li>
                    <li class="active">Competition Details</li>
                </ul>
            </div>
        </section>
        <!-- Competition Details Start -->
        <section class="competition-details-area">
            <div class="container">
                <div class="row justify-content-center">
                    <!-- Left Content -->
                    <div class="col-lg-10">
                        <div class="competition-details-wrap">
                            <!-- Main Image -->
                            <div class="competition-thumb">
                                <img src="media/imgAll/bg/others-page/competition-details-1.jpeg" class="img-fluid w-100"
                                    alt="Competition">
                                <span class="competition-status">Upcoming</span>
                            </div>
                            <!-- Content -->
                            <div class="competition-content mt-4">
                                <div class="competition-meta">
                                    <span class="competition-category">
                                        <i class="fas fa-trophy"></i> Cultural Competition
                                    </span>
                                    <span class="competition-date">
                                        <i class="far fa-calendar-alt"></i> 25 May 2026
                                    </span>
                                    <span class="competition-location">
                                        <i class="fas fa-map-marker-alt"></i> Dhaka, Bangladesh
                                    </span>
                                </div>
                                <h2 class="competition-title">National Islamic Cultural Competition 2026</h2>
                                <p class="competition-desc">The Cultural Competition 2026 is a vibrant and inspiring event designed to celebrate creativity, talent, and cultural diversity among participants from across Bangladesh. This competition brings together passionate individuals who are eager to showcase their artistic abilities in various categories including music, dance, recitation, painting, drama, photography, and creative writing. Whether you are a beginner with a dream or an experienced performer seeking a bigger stage, this event offers the perfect opportunity to express your creativity and gain valuable recognition.
                                </p>
                                <p class="competition-desc">
                                    Participants will have the chance to perform in front of respected judges, cultural personalities, and a lively audience who appreciate artistic excellence and innovation. The event is not only about competition but also about learning, collaboration, and cultural exchange. Contestants can connect with other talented individuals, share ideas, build confidence, and create unforgettable memories throughout the program.
                                </p>
                                <p class="competition-desc">The venue will feature a professional stage setup, sound system, exhibition area, and interactive sessions to ensure an enjoyable experience for everyone attending. Exciting prizes, certificates, and special awards will be presented to outstanding performers in each category. In addition, selected participants may receive opportunities to participate in future national cultural programs and workshops.
                                </p>
                                <p class="competition-desc">
                                    Cultural Competition 2026 aims to encourage young talent, preserve cultural heritage, and promote unity through art and performance. Families, students, artists, and cultural enthusiasts are warmly invited to attend and support the participants. Join us for a memorable celebration of passion, creativity, and cultural spirit in the heart of Dhaka. Let your talent shine and become part of an event that inspires the next generation of creative minds.
                                </p>
                                <!-- Info Box -->
                                <div class="competition-info-box">
                                    <div class="info-item">
                                        <h5>Registration Fee</h5>
                                        <p>Free</p>
                                    </div>
                                    <div class="info-item">
                                        <h5>Last Date</h5>
                                        <p>20 May 2026</p>
                                    </div>
                                    <div class="info-item">
                                        <h5>Prize Pool</h5>
                                        <p>৳ 50,000</p>
                                    </div>
                                </div>
                                <div class="competition-details-text mt-4">
                                    <h3>Competition Details</h3>
                                    <p>
                                        This competition is organized to inspire youth towards Islamic culture,
                                        creativity, and leadership. Participants from all over Bangladesh can join.Exciting prizes, certificates, and special awards will be presented to outstanding performers in each category. In addition, selected participants may receive opportunities to participate in future national cultural programs and workshops.
                                    </p>
                                    <ul>
                                        <li>Age Limit: 10 - 25 Years</li>
                                        <li>Online & Offline Participation Available</li>
                                        <li>Certificate For All Participants</li>
                                        <li>Top 3 Winners Will Receive Special Awards</li>
                                    </ul>
                                </div>
                                <div class="text-center mt-5">
                                    <a href="registrations.php" class="competition-btn">
                                        Register Now
                                    </a>
                                </div>
                                <div class="sharethis">
                                    <div class="sharethis-inline-share-buttons sharethisIcon"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Competition Details End -->
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