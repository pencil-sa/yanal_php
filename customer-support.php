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

    <!--Cases Section Two-->
    <section class="cases-section-two cases-page">

        <div class="auto-container">

            <div class="sec-title centered">
                <div class="upper-text" style="color: #C12F41;">Customer Support</div>
                <h2 style="top: 0px;"class="lang"><strong>Office Working Hours</strong></h2>

            </div>

            <!--Case Block-->
            <div class="case-block-two wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                <div class="inner-box clearfix">
                    <div class="image-column">
                        <div class="image-layer" style="background-image: url(new-image/Home-page/01.jpg);"></div>
                        <figure class="image-box">
                            <img src="new-image/Home-page/01.jpg" alt="" title="">
                        </figure>
                        <a class="link-layer" href="#"></a>
                    </div>
                    <div class="content-column">
                        <div class="content-box">
                            <div class="title-box">
                                <!--                                <h3><a href="#">Best Financial Services</a></h3>-->
                                <!--                                <div class="sub-text">Artificial Intelligence</div>-->
                            </div>
                            <div class="text-content">
                                <div class="text">
                                    Normal Working Hours / 8:30 AM – 5:00 PM

                                    <br/>

                                    Ramadan Working Hours / 10:00 AM – 4:00 PM

                                    <br/>

                                    Please contact us on<a href="tel:920002020" class="stycolor clickcolor"> 920002020</a>

                                    <br/>

                                    Customer Care: <a href="mailto:info@yanal.com" class="stycolor clickcolor">info@yanal.com</a>

                                    <br/>

                                </div>
                                <!--                                <div class="link-box"><a href="case-single.html">View Case Study <span class="arrow fa fa-arrow-right"></span></a></div>-->
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