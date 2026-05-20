<?php include_once("common/config.php"); ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
    <title>Contact</title>
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
                <h1>Contact Us</h1>
                <ul class="breadcrumb">
                    <li><a href="index.php">Home</a></li>
                    <li class="active">Contact Us</li>
                </ul>
            </div>
        </section>
        <section class="contact-area">
            <div class="container">
                <div class="row g-4 align-items-stretch">

                    <!-- Contact Info -->
                    <div class="col-lg-5">
                        <div class="contact-info-wrap">
                            <h2>Get In Touch</h2>
                            <div class="contact-info-card">
                                <div class="icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div class="info">
                                    <h4>Office Address</h4>
                                    <p>Mizan Tower, Moghbazar, Dhaka-1217, Bangladesh</p>
                                </div>
                            </div>
                            <div class="contact-info-card">
                                <div class="icon">
                                    <i class="fas fa-phone-alt"></i>
                                </div>
                                <div class="info">
                                    <h4>Phone Number</h4>
                                    <a href="tel:+8801714822008">+880 1714-822008</a>
                                </div>
                            </div>
                            <div class="contact-info-card">
                                <div class="icon">
                                    <i class="fa-brands fa-whatsapp"></i>
                                </div>
                                <div class="info">
                                    <h4>WhatsApp</h4>
                                    <a href="https://wa.me/8801973338890" target="_blank">+8801973338890</a>
                                </div>
                            </div>
                            <div class="contact-info-card">
                                <div class="icon">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <div class="info">
                                    <h4>Email Address</h4>
                                    <a href="mailto:sanatanmultipurpose@gmail.com">
                                        sanatanmultipurpose@gmail.com
                                    </a>
                                </div>
                            </div>
                            <div class="contact-info-card">
                                <div class="icon">
                                    <i class="fas fa-clock"></i>
                                </div>
                                <div class="info">
                                    <h4>Opening Time</h4>
                                    <p>Sat - Thu : 09.00 AM - 08.00 PM</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Contact Form -->
                    <div class="col-lg-7">
                        <div class="contact-form-wrap">
                            <div class="form-title">
                                <h3>Send Message</h3>
                            </div>
                            <form action="#">
                                <div class="row g-4">
                                    <div class="col-md-6">
                                        <div class="input-group-custom">
                                            <label>Your Name</label>
                                            <input type="text" placeholder="Enter your name">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-group-custom">
                                            <label>Phone Number</label>
                                            <input type="text" placeholder="Enter phone number">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-group-custom">
                                            <label>Email Address</label>
                                            <input type="email" placeholder="Enter email address">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-group-custom">
                                            <label>Subject</label>
                                            <input type="text" placeholder="Enter subject">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="input-group-custom">
                                            <label>Your Message</label>
                                            <textarea rows="4" placeholder="Write your message"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="contact-btn">
                                            Send Message
                                            <i class="fas fa-paper-plane"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="google-map-area">
            <div class="google-map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d58414.50581829208!2d90.36554105705653!3d23.7863395838867!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c7641406653d%3A0x817149accb56ac39!2sMulti%20Colour!5e0!3m2!1sen!2sbd!4v1772688677684!5m2!1sen!2sbd" width="100%" height="450" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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