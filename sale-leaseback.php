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

    <!--Leasing Services Section-->
    <div class="sidebar-page-container services-page">
        <div class="auto-container">
            <div class="row clearfix">

                <!--Content Side-->
                <div class="content-side col-lg-8 col-md-12 col-sm-12">
                    <div class="services-content">
                        <div class="service-details">
                            <div class="image-box">
                                <img src="new-image/Leasing-Services/Sale-and-Leaseback1.jpg" alt="">
                            </div>
                            <!--content-->
                            <div class="content">
                                <h3 class="lang" style="color:#003C71;">Sale and Leaseback
                                </h3>

                                <div class="text">
                                    <p>
                                        Does your company know how much equity it has in fixed assets? Looking to achieve more success by accessing such funds for sustained growth? YANAL’s Sale and Leaseback option can help your business unlock the equity tied up in fixed assets such as vehicles, equipment's, plant, and machinery as well as real estate to generate cash. At YANAL, the process is simple. Our representatives will value your existing assets and provide a fair purchase price. YANAL will then buy the assets at an agreed price and lease them back to your company.
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