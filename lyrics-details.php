<?php include_once("common/config.php"); ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
    <title>Lyrics Details</title>
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
    <main class="lyrics-details-page">
        <section class="common-banner-area">
            <div class="container">
                <h1>Lyrics Details</h1>
                <ul class="breadcrumb">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="lyrics.php">Lyrics</a></li>
                    <li class="active">Lyrics Details</li>
                </ul>
            </div>
        </section>
        <section class="lyrics-details-page-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 mx-auto">
                        <div class="lyrics-text-box">
                            <h2>Kacey Musgraves Lyrics</h2>
                            <p>I’ve been chasing quiet dreams down a dusty road
                                Windows down, letting all my worries go
                                Stars above like they’re spelling out my name
                                Every mile feels like I’m not the same</p>
                            <p>Maybe I was lost, maybe I was blind
                                But I found a little peace in this heart of mine</p>
                            <p>I’m dancing in the moonlight, barefoot in the blue
                                Singing every broken song I knew
                                If love is just a whisper in the dark
                                I’ll follow every echo of your heart</p>
                            <p>Coffee cup and a sunrise in my hand
                                Learning how to love who I am
                                Every scar is just a story that I keep
                                Every tear just waters what I’ll be</p>
                            <p>I’m dancing in the moonlight, barefoot in the blue
                                Singing every broken song I knew
                                If love is just a whisper in the dark
                                I’ll follow every echo of your heart</p>
                            <p>Maybe home ain’t a place, it’s a feeling inside
                                Where the wild and the broken collide</p>
                            <p>So I’ll keep on driving, wherever it goes
                                With a heart wide open on this midnight road</p>
                            <div class="sharethis">
                                <div class="sharethis-inline-share-buttons sharethisIcon"></div>
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
    <?php echo $sJSBootStrap; ?>
    <script type="text/javascript"
        src="https://platform-api.sharethis.com/js/sharethis.js#property=67ad9e6e67f47b001298d58b&product=inline-share-buttons&source=platform"
        async="async"></script>
    <?php echo $sJSEMM; ?>
</body>
</html>