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
                    <h1>SMEs Financing</h1>
                    <div class="d-text"></div>
                </div>
            </div>
        </div>
    </section>
    <!--End Banner Section -->

    <!--Leasing Services Section-->
    <div class="sidebar-page-container services-page">
        <div class="auto-container">
            <div class="row clearfix">

                <!--Content Side-->
                <div class="content-side col-lg-8 col-md-12 col-sm-12">
                    <div class="services-content">
                        <div class="service-details">
                            <div class="image-box">
                                <img src="new-image/SMEs/06.jpg" alt="">
                            </div>
                            <!--content-->
                            <div class="content">
                                <h3 class="lang" style="color:#003C71;">SMEs Financing

                                </h3>
                                <div class="text">
                                    <p>
                                        At YANAL, we have always given special attention to the Small and Medium Enterprises sector which comprises businesses with revenues below 200 million Saudi Riyals per year. Our dedicated team will provide you with any possible assistance you require and guide you in securing funds through special financing schemes such as "Kafalah" guaranteed financing, Monshaat funding, and several other customized offers.
                                    </p>

                                </div>


                            </div>
                        </div>
                    </div>
                </div>

                <!--Sidebar Side-->
                <?php include_once('sidebar-side.php'); ?>

            </div>
        </div>
    </div>

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