<!--Why YANAL-->
<?php include_once('function.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>YANAL | <?php echo getFileName(); ?></title>
    <!-- Stylesheets -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <!-- Responsive File -->
    <link href="css/responsive.css" rel="stylesheet">

    <link rel="shortcut icon" href="theme-icon-2.ico" type="image/x-icon">
    <link rel="icon" href="theme-icon-2.ico" type="image/x-icon">

    <!-- Responsive Settings -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>

<div class="page-wrapper">
    <!-- Preloader -->
    <div class="preloader"><div class="icon"></div></div>

    <!-- Main Header -->
    <?php include_once('header.php'); ?>
    <!-- End Main Header -->

    <!-- Inner Banner Section -->
    <section class="inner-banner">
        <div class="banner-curve"></div>
        <div class="auto-container">
            <div class="inner">
                <div class="theme-icon"></div>
                <div class="title-box">
                    <h1><?php echo getFileName(); ?></h1>
                    <div class="d-text"></div>
                </div>
            </div>
        </div>
    </section>
    <!--End Banner Section -->


    <!--Contact Section-->
    <section class="contact-section-two">
        <div class="auto-container">
            <div class="upper-row">
                <div class="row clearfix">
                    <!--Text Column-->
                    <div class="text-column col-lg-6 col-md-12 col-sm-12">
                        <div class="inner">
                            <div class="sec-title">
                                <div class="upper-text">Get In Touch With Us Today!
                                </div>
                                <h2>Do You Have Any Questions? We’ll Be Happy To Assist!</h2>
                            </div>

                            <div class="social-links">
                                <ul class="clearfix">
                                    <li><a href="https://twitter.com/YanalFinance" target="_blanck"><span class="fab fa-twitter"></span></a></li>
                                    <li><a href="https://www.linkedin.com/company/yanalfinance/" target="_blanc"><span class="fab fa-linkedin"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--Form Column-->
                    <div class="form-column col-lg-6 col-md-12 col-sm-12">
                        <div class="inner">
                            <!--Form Box-->
                            <div class="form-box">
                                <div class="default-form contact-form">
                                    <form method="post" action="sendemail.php" id="contact-form">
                                        <div class="row clearfix">
                                            <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                                <input type="text" name="username" placeholder="Your Name" required="" value="">
                                            </div>

                                            <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                                <input type="email" name="email" placeholder="Email" required="" value="">
                                            </div>

                                            <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                                <input type="text" name="phone" placeholder="Phone" required="" value="">
                                            </div>

                                            <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                                <input type="text" name="subject" placeholder="Subject" required="" value="">
                                            </div>

                                            <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                                <textarea name="message" placeholder="Message" required=""></textarea>
                                            </div>

                                            <div class="form-group col-md-12 col-sm-12">
                                                <button type="submit" class="theme-btn btn-style-one"><span class="btn-title">Make a Request</span></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="lower-row">
                <div class="row clearfix">
                    <!--Info Block-->
                    <div class="contact-info-block col-lg-4 col-md-6 col-sm-12">
                        <div class="inner wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="content-box">
                                <div class="title-box">
                                    <h4><a href="#">RIYADH
                                        </a></h4>
                                    <div class="sub-text">Head Quarter
                                    </div>
                                </div>
                                <div class="text-content">
                                    <div class="info">
                                        <ul>
                                            <li>Yanal Finance Company
                                                343, King Saud Road,
                                                P.O. Box 22890, Riyadh 11416,
                                                Kingdom of Saudi Arabia
                                                <br/><br/><br/>

                                            </li>
                                            <li>Call us <a href="tel:+966 11 2997777"><strong>+966 11 2997777</strong></a></li>
                                            <li><a href="https://goo.gl/maps/QfySRYCW2jZyHe4u5" target="_blanc"
                                        >Location Map</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!--Info Block-->
                    <!--Info Block-->
                    <div class="contact-info-block col-lg-4 col-md-6 col-sm-12">
                        <div class="inner wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="content-box">
                                <div class="title-box">
                                    <h4><a href="#">JEDDAH
                                        </a></h4>
                                    <div class="sub-text">Branch
                                    </div>
                                </div>
                                <div class="text-content">
                                    <div class="info">
                                        <ul>
                                            <li>Yanal Finance Company
                                                1st Floor, Saudi Investment Bank,
                                                Al Zahra Roundabout, Amir Mit’ab Street
                                                Al Safa Area
                                                P.O.Box 54731, Jeddah 21524
                                                Kingdom of Saudi Arabia

                                            </li>
                                            <li>Call us <a href="tel:+966 920000481"><strong>+966 920000481</strong></a></li>
                                            <li><a href="#">Location Map</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!--Info Block-->
                    <div class="contact-info-block col-lg-4 col-md-6 col-sm-12">
                        <div class="inner wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="content-box">
                                <div class="title-box">
                                    <h4><a href="#">AL KHOBAR

                                        </a></h4>
                                    <div class="sub-text">Branch
                                    </div>
                                </div>
                                <div class="text-content">
                                    <div class="info">
                                        <ul>
                                            <li>Yanal Finance Company
                                                1st Floor, Saudi Investment Bank
                                                Prince Sultan Street, Qutuba Area
                                                P.O.Box 9233, Al Khobar 31413
                                                Kingdom of Saudi Arabia
                                                <br/><br/>

                                            </li>
                                            <li>Call us <a href="tel:+966 920000681"><strong>+966 920000681</strong></a></li>
                                            <li><a href="#">Location Map</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="row clearfix">
                    <!--Info Block-->
                    <div class="contact-info-block col-lg-4 col-md-6 col-sm-12">
                        <div class="inner wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="content-box">
                                <div class="title-box">
                                    <h4><a href="#">JUBAIL
                                        </a></h4>
                                    <div class="sub-text">Branch
                                    </div>
                                </div>
                                <div class="text-content">
                                    <div class="info">
                                        <ul>
                                            <li>Yanal Finance Company
                                                101 Business Tower
                                                Al Jubail 35513,
                                                Kingdom of Saudi Arabia
                                                <br/><br/>
                                            </li>
                                            <li>Call us <a href="tel:+966 13 3472356"><strong>+966 13 3472356</strong></a></li>
                                            <li><a href="#">Location Map</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!--Info Block-->
                    <!--Info Block-->
                    <div class="contact-info-block col-lg-4 col-md-6 col-sm-12">
                        <div class="inner wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="content-box">
                                <div class="title-box">
                                    <h4><a href="#">KHAMIS MUSHAIT

                                        </a></h4>
                                    <div class="sub-text">Branch
                                    </div>
                                </div>
                                <div class="text-content">
                                    <div class="info">
                                        <ul>
                                            <li>Yanal Finance Company
                                                Madina Askari Road,
                                                Burj Al Huwaizi
                                                Office # 603

                                                Kingdom of Saudi Arabia

                                            </li>
                                            <li>Call us <a href="#"><strong>+966 17 2208244, +966 17 2208284</strong></a></li>
                                            <li><a href="#">Location Map</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!--Info Block-->
                    <div class="contact-info-block col-lg-4 col-md-6 col-sm-12">
                        <div class="inner wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="content-box">
                                <div class="title-box">
                                    <h4><a href="#">MAKKAH AL MUKAARRAMAH


                                        </a></h4>
                                    <div class="sub-text">Branch
                                    </div>
                                </div>
                                <div class="text-content">
                                    <div class="info">
                                        <ul>
                                            <li>Yanal Finance Company
                                                Office No. 204, 13th Floor
                                                Al Safa Administration Tower
                                                Al Aziziah, Makkah Al Mukaarramah

                                                Kingdom of Saudi Arabia

                                            </li>
                                            <li>Call us <a href="tel:+966 12 5299533"><strong>+966 12 5299533</strong></a></li>
                                            <li><a href="#">Location Map</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <?php include_once('footer.php'); ?>

</div>
<!--End pagewrapper-->

<script src="js/jquery.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/jquery.fancybox.js"></script>
<script src="js/owl.js"></script>
<script src="js/scrollbar.js"></script>
<script src="js/validate.js"></script>
<script src="js/appear.js"></script>
<script src="js/wow.js"></script>
<script src="js/custom-script.js"></script>

</body>
</html>