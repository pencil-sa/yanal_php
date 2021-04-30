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
                                <img src="new-image/Murabaha-Facility/03.jpg" alt="">
                            </div>
                            <!--content-->
                            <div class="content">
                                <h3 class="lang" style="color:#003C71;">Murabaha Facility</h3>
                                <div class="text">
                                    <p>Murabaha is an Islamic mode of financing where a Financial Institution purchases goods or assets on behalf of customer and then sells it to customer at cost plus profit on credit terms and amount payable by the customer is settled in installments. Tawarruq is a development of Murabaha and sometimes referred to as commodity Murabaha or reverse Murabaha as it involves having access to cash through real trading of a commodity (Bay Al’inah).
                                    </p>
                                    <p>At YANAL, the Murabaha facility structure involves real estate security, and the installments are payable over a medium to long-term tenure. The product participants consist of the finance company, the customer, and the broker for the commodity transaction.
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