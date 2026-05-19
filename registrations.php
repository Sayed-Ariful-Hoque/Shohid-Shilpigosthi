<?php include_once("common/config.php"); ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
    <title>Registrations</title>
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
                <h1>Registrations</h1>
                <ul class="breadcrumb">
                    <li><a href="index.php">Home</a></li>
                    <li class="active">Registrations</li>
                </ul>
            </div>
        </section>
        <section class="registrations-page">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="register-card">
                            <h2 class="register-title">Registrations</h2>
                            <form>
                                <div class="form-group">
                                    <label class="form-label">
                                        Name <span class="required">*</span>
                                    </label>
                                    <input type="text" class="form-control" placeholder="Enter your full name">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">
                                        Date of Birth <span class="required">*</span>
                                    </label>
                                    <div class="dob-wrapper">
                                        <input class="form-control" type="date" placeholder="Select your birth date">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">
                                        Address <span class="required">*</span>
                                    </label>
                                    <div class="row g-3">
                                        <div class="col-md-4">
                                            <select class="form-select">
                                                <option selected>Division</option>
                                                <option value="Dhaka">Dhaka</option>
                                                <option value="Chattogram">Chattogram</option>
                                                <option value="Rajshahi">Rajshahi</option>
                                                <option value="Khulna">Khulna</option>
                                                <option value="Barishal">Barishal</option>
                                                <option value="Sylhet">Sylhet</option>
                                                <option value="Rangpur">Rangpur</option>
                                                <option value="Mymensingh">Mymensingh</option>
                                            </select>
                                        </div>
                                        <div class="col-md-4">
                                            <select class="form-select">
                                                <option selected>District</option>
                                                <!-- Dhaka Division -->
                                                <option>Dhaka</option>
                                                <option>Faridpur</option>
                                                <option>Gazipur</option>
                                                <option>Gopalganj</option>
                                                <option>Kishoreganj</option>
                                                <option>Madaripur</option>
                                                <option>Manikganj</option>
                                                <option>Munshiganj</option>
                                                <option>Narayanganj</option>
                                                <option>Narsingdi</option>
                                                <option>Rajbari</option>
                                                <option>Shariatpur</option>
                                                <option>Tangail</option>

                                                <!-- Chattogram Division -->
                                                <option>Bandarban</option>
                                                <option>Brahmanbaria</option>
                                                <option>Chandpur</option>
                                                <option>Chattogram</option>
                                                <option>Cumilla</option>
                                                <option>Cox's Bazar</option>
                                                <option>Feni</option>
                                                <option>Khagrachari</option>
                                                <option>Lakshmipur</option>
                                                <option>Noakhali</option>
                                                <option>Rangamati</option>

                                                <!-- Rajshahi Division -->
                                                <option>Bogura</option>
                                                <option>Joypurhat</option>
                                                <option>Naogaon</option>
                                                <option>Natore</option>
                                                <option>Chapainawabganj</option>
                                                <option>Pabna</option>
                                                <option>Rajshahi</option>
                                                <option>Sirajganj</option>

                                                <!-- Khulna Division -->
                                                <option>Bagerhat</option>
                                                <option>Chuadanga</option>
                                                <option>Jashore</option>
                                                <option>Jhenaidah</option>
                                                <option>Khulna</option>
                                                <option>Kushtia</option>
                                                <option>Magura</option>
                                                <option>Meherpur</option>
                                                <option>Narail</option>
                                                <option>Satkhira</option>

                                                <!-- Barishal Division -->
                                                <option>Barguna</option>
                                                <option>Barishal</option>
                                                <option>Bhola</option>
                                                <option>Jhalokathi</option>
                                                <option>Patuakhali</option>
                                                <option>Pirojpur</option>

                                                <!-- Sylhet Division -->
                                                <option>Habiganj</option>
                                                <option>Moulvibazar</option>
                                                <option>Sunamganj</option>
                                                <option>Sylhet</option>

                                                <!-- Rangpur Division -->
                                                <option>Dinajpur</option>
                                                <option>Gaibandha</option>
                                                <option>Kurigram</option>
                                                <option>Lalmonirhat</option>
                                                <option>Nilphamari</option>
                                                <option>Panchagarh</option>
                                                <option>Rangpur</option>
                                                <option>Thakurgaon</option>

                                                <!-- Mymensingh Division -->
                                                <option>Jamalpur</option>
                                                <option>Mymensingh</option>
                                                <option>Netrokona</option>
                                                <option>Sherpur</option>
                                            </select>
                                        </div>
                                        <div class="col-md-4">
                                            <select class="form-select">
                                                <option selected>Upazila</option>
                                                <!-- Dhaka -->
                                                <option>Dhamrai</option>
                                                <option>Dohar</option>
                                                <option>Keraniganj</option>
                                                <option>Nawabganj</option>
                                                <option>Savar</option>

                                                <!-- Gazipur -->
                                                <option>Gazipur Sadar</option>
                                                <option>Kaliakair</option>
                                                <option>Kaliganj</option>
                                                <option>Kapasia</option>
                                                <option>Sreepur</option>

                                                <!-- Narayanganj -->
                                                <option>Araihazar</option>
                                                <option>Bandar</option>
                                                <option>Narayanganj Sadar</option>
                                                <option>Rupganj</option>
                                                <option>Sonargaon</option>

                                                <!-- Chattogram -->
                                                <option>Anwara</option>
                                                <option>Banshkhali</option>
                                                <option>Boalkhali</option>
                                                <option>Fatikchhari</option>
                                                <option>Hathazari</option>
                                                <option>Lohagara</option>
                                                <option>Mirsharai</option>
                                                <option>Patiya</option>
                                                <option>Rangunia</option>
                                                <option>Raozan</option>
                                                <option>Sandwip</option>
                                                <option>Satkania</option>
                                                <option>Sitakunda</option>

                                                <!-- Cumilla -->
                                                <option>Barura</option>
                                                <option>Brahmanpara</option>
                                                <option>Burichang</option>
                                                <option>Chandina</option>
                                                <option>Chauddagram</option>
                                                <option>Cumilla Sadar</option>
                                                <option>Daudkandi</option>
                                                <option>Debidwar</option>
                                                <option>Homna</option>
                                                <option>Laksam</option>
                                                <option>Meghna</option>
                                                <option>Muradnagar</option>

                                                <!-- Rajshahi -->
                                                <option>Bagha</option>
                                                <option>Bagmara</option>
                                                <option>Charghat</option>
                                                <option>Durgapur</option>
                                                <option>Godagari</option>
                                                <option>Mohanpur</option>
                                                <option>Paba</option>
                                                <option>Puthia</option>
                                                <option>Tanore</option>

                                                <!-- Khulna -->
                                                <option>Batiaghata</option>
                                                <option>Dacope</option>
                                                <option>Dumuria</option>
                                                <option>Dighalia</option>
                                                <option>Koyra</option>
                                                <option>Paikgacha</option>
                                                <option>Phultala</option>
                                                <option>Rupsa</option>
                                                <option>Terokhada</option>

                                                <!-- Barishal -->
                                                <option>Agailjhara</option>
                                                <option>Babuganj</option>
                                                <option>Bakerganj</option>
                                                <option>Banaripara</option>
                                                <option>Barishal Sadar</option>
                                                <option>Gournadi</option>
                                                <option>Hizla</option>
                                                <option>Mehendiganj</option>
                                                <option>Muladi</option>
                                                <option>Wazirpur</option>

                                                <!-- Sylhet -->
                                                <option>Balaganj</option>
                                                <option>Beanibazar</option>
                                                <option>Bishwanath</option>
                                                <option>Companiganj</option>
                                                <option>Fenchuganj</option>
                                                <option>Golapganj</option>
                                                <option>Gowainghat</option>
                                                <option>Jaintiapur</option>
                                                <option>Kanaighat</option>
                                                <option>Sylhet Sadar</option>

                                                <!-- Rangpur -->
                                                <option>Badarganj</option>
                                                <option>Gangachara</option>
                                                <option>Kaunia</option>
                                                <option>Mithapukur</option>
                                                <option>Pirgachha</option>
                                                <option>Pirganj</option>
                                                <option>Rangpur Sadar</option>
                                                <option>Taraganj</option>

                                                <!-- Mymensingh -->
                                                <option>Bhaluka</option>
                                                <option>Dhobaura</option>
                                                <option>Fulbaria</option>
                                                <option>Gaffargaon</option>
                                                <option>Gouripur</option>
                                                <option>Haluaghat</option>
                                                <option>Ishwarganj</option>
                                                <option>Muktagacha</option>
                                                <option>Mymensingh Sadar</option>
                                                <option>Phulpur</option>
                                                <option>Trishal</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">
                                        Father's Name <span class="required">*</span>
                                    </label>
                                    <input type="text" class="form-control" placeholder="Enter father's name">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">
                                        Mother's Name <span class="required">*</span>
                                    </label>
                                    <input type="text" class="form-control" placeholder="Enter mother's name">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">
                                        Mobile Number <span class="required">*</span>
                                    </label>
                                    <input type="tel" class="form-control" placeholder="01XXXXXXXXX">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">
                                        Whatsapp Number
                                    </label>

                                    <input type="tel" class="form-control" placeholder="01XXXXXXXXX">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">
                                        Email
                                    </label>
                                    <input type="email" class="form-control" placeholder="Enter your email">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">
                                        Gender <span class="required">*</span>
                                    </label>
                                    <select class="form-select">
                                        <option selected>Select Gender</option>
                                        <option>Male</option>
                                        <option>Female</option>
                                        <option>Other</option>
                                    </select>
                                </div>
                                <div class="submit-btns text-center">
                                    <input class="btns" type="submit" value="Submit">
                                </div>
                            </form>
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