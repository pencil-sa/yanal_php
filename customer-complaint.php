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
                <div class="upper-text" style="color: #C12F41;">Customer Complaint</div>
                <h2 style="top: 0px;" class="lang"><strong>Expect nothing but the best</strong></h2>
                <p>
                    At YANAL, our business philosophy is driven by a core belief, delivering the highest standards of customer service. Our dedicated teams are adept at ensuring an exceptional experience every time we have the opportunity of offering our services to you. We always endeavor to improve our customer satisfaction standards by welcoming your valuable feedback.
                </p>
            </div>

            <!--Case Block-->
            <div class="case-block-two wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                <div class="inner-box clearfix">
                    <div class="image-column">
                        <div class="image-layer" style="background-image: url(images/customer-complaint/support.jpg);"></div>
                        <figure class="image-box">
                            <img src="images/customer-complaint/support.jpg" alt="" title="">
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
                                    We are keen to hear from you on how we can improve our products and serve you better. We have put in place a comprehensive customer service protocol to ensure a speedy response and an effective handling process for every customer complaint. Please share your complaint or suggestions and we will be happy to address any concerns you may have in a timely manner. Get in touch with us by calling <a href="tel:800124455" class="stycolor clickcolor">8001244555</a> or send us an email to <a href="mailto:customercare@yanal.com" class="stycolor clickcolor">customercare@yanal.com</a>

                                    <br/>
                                    Alternatively, you can submit your details using the form below and we will contact you within five working day.

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