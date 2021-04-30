<style>
.main-menu .navigation > li > a {
    font-weight:400 !important;
}
.lang:hover{color:#C12F41 !important}
.stycolor:hover{color:#003C71 !important}
.clickcolor{color:#666 !important}
.SwissraRegular {
	font-family: "Swissra-Regular" !important;}
.getcolor:hover{color:#0000;}

	
</style>
<?php    
    // find out the domain:
    $domain = $_SERVER['HTTP_HOST'];
    // find out the path to the current file:
    $path = $_SERVER['SCRIPT_NAME'];
    // find out the QueryString:
    $queryString = $_SERVER['QUERY_STRING'];
    // put it all together:
    $url = "http://" . $domain . $path . "?" . $queryString;
?>  
<link rel="stylesheet" type="text/css" href="fonts/arabic-font/MyFontsWebfontsKit.css">
<header class="main-header header-style-two" style=" width: 100% !important;">

    <!-- Header Upper -->
    <div class="header-upper">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <!--Logo-->
                <div class="logo-box">
                    <div class="logo"><a href="index.php" title=""><img style="width: 170px; height: 80px; " src="images/Brand_Assets_Full_logo.svg" alt="" title=""></a></div>
                </div>
                <div class="right-info clearfix">
                    <!--Info-->
                    <div class="info clearfix">
                        <!--Info Block-->
                        <div class="info-block">
                            <!-- <div class="icon-box">
                                <span class="flaticon-placeholder-2"></span>
                            </div> -->
                            <div class="info-text">
                                    <span>
                                        <img width="170" height="170" src="new-image/newlogo.png" alt="Yanal" title="Yanal" style="margin-top:-17px  !important; margin-right:33px;">
                                    </span>
                            </div>
                        </div>
                        <!--Info Block-->
                        <div class="info-block">
                            <div class="icon-box">
                                <span class="flaticon-smartphone"></span>
                            </div>
                            <div class="info-text">
                                <span>اتصل بنا الآن</span>
                                <a href="tel:8001244555"><strong>8001244555</strong></a>
                            </div>
                        </div>
                        <!--Info Block-->
                        <div class="info-block">
                            <div class="icon-box">
                                <span class="flaticon-email"></span>
                            </div>
                            <div class="info-text">
                                <span>Send Us Email</span>
                                <a href="mailto: customercare@yanal.com"><strong> customercare@yanal.com</strong></a>
                            </div>
                        </div>
                    </div>
                    <!--Language Block-->
                    <div class="lang-block">
                        <!--Language-->
                        <div class="language">
                            <div class="lang-btn" style="color: #003C71">
                                <!-- <span class="flag"><img src="images/icons/icon-lang.png" alt="" title="English"></span> -->
                                <span class="txt lang SwissraRegular">عربي</span>
                                <!--                                        <span class="arrow fa fa-angle-down"></span>-->
                            </div>
                            <!--                                    <div class="lang-dropdown">-->
                            <!--                                        <ul>-->
                            <!--                                            <li><a href="#">Arabic</a></li>-->
                            <!--                                            <li><a href="#">English</a></li>-->
                            <!--                                        </ul>-->
                            <!--                                    </div>-->
                        </div>
                    
                    </div>
                    <div class="lang-block">
                    <div class="txt">
                    <a href="https://www.linkedin.com/company/yanalfinance/" target="_blanc" ><span  class="fab fa-linkedin-in lang" style="color:#003C71; margin-right:10px"></span></a>
                                            <a href="https://twitter.com/YanalFinance" target="_blanck"><span class="fab fa-twitter lang" style="color:#003C71;"></span></a>
</div>

</div>

                </div>
               
            </div>
        </div>
    </div>
    <!--End Header Upper-->

    <div class="header-lower">
        <div class="auto-container">
            <div class="nav-box clearfix">
                <div class="nav-outer clearfix">
                    <!--Mobile Navigation Toggler-->
                    <div class="mobile-nav-toggler"><span class="icon flaticon-menu-1"></span></div>

                    <!-- Main Menu -->
                    <nav class="main-menu navbar-expand-md navbar-light">
                        <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                            <ul class="navigation clearfix">
                                <li <?php if (basename($_SERVER['REQUEST_URI'], '?' . $_SERVER['QUERY_STRING']) == "index-ar.php"){ echo 'class="current"'; } ?> ><a href="index-ar.php">الرئيسية</a></li>
                                <li class="<?php if (basename($_SERVER['REQUEST_URI'], '?' . $_SERVER['QUERY_STRING']) == "overview-ar.php"){ echo 'current'; } ?> dropdown"><a href="#">من نحن</a>
                                    <ul>
                                        <li><a href="overview-ar.php">تعرف علينا</a></li>
                                        <!--                                                <li><a href="#">CEO Message</a></li>-->
                                        <li><a href="why-yanal-ar.php">لماذا ينال</a></li>
                                        <li><a href="shareholders-ar.php">المساهمون</a></li>
                                        <li><a href="leadership-ar.php">فريق القيادة</a></li>
                                        <!--                                                <li><a href="#">Orix Group</a></li>-->
                                    </ul>
                                </li>
                                <li  class="dropdown"><a href="#">خدماتنا</a>
                                    <ul>
                                        <li <?php if (basename($_SERVER['REQUEST_URI'], '?' . $_SERVER['QUERY_STRING']) == "leasing-services-ar.php"){ echo 'class="active"'; } ?> ><a href="leasing-services-ar.php">خدمات التمويل التأجيري</a></li>
                                        <li <?php if (basename($_SERVER['REQUEST_URI'], '?' . $_SERVER['QUERY_STRING']) == "sale-leaseback-ar.php"){ echo 'class="active"'; } ?> ><a href="sale-leaseback-ar.php">البيع و إعادة التأجير</a></li>
                                        <li <?php if (basename($_SERVER['REQUEST_URI'], '?' . $_SERVER['QUERY_STRING']) == "murabah-facility-ar.php"){ echo 'class="active"'; } ?> ><a href="murabah-facility-ar.php">التمويل بالمرابحة</a></li>
                                        <li <?php if (basename($_SERVER['REQUEST_URI'], '?' . $_SERVER['QUERY_STRING']) == "kafalah-guaranteed-financing-ar.php"){ echo 'class="active"'; } ?> ><a href="kafalah-guaranteed-financing-ar.php">التمويل المدعوم من "كفالة"</a></li>
                                        <li <?php if (basename($_SERVER['REQUEST_URI'], '?' . $_SERVER['QUERY_STRING']) == "monshaat-funded-facilities-ar.php"){ echo 'class="active"'; } ?> ><a href="monshaat-funded-facilities-ar.php">التمويل المدعوم من "منشآت"</a></li>
                                        <li <?php if (basename($_SERVER['REQUEST_URI'], '?' . $_SERVER['QUERY_STRING']) == "smes-financing-ar.php"){ echo 'class="active"'; } ?> ><a href="smes-financing-ar.php">تمويل المشاريع الصغيرة والمتوسطة</a></li>
                                        <li <?php if (basename($_SERVER['REQUEST_URI'], '?' . $_SERVER['QUERY_STRING']) == "corporate-financing-ar.php"){ echo 'class="active"'; } ?> ><a href="corporate-financing-ar.php">تمويل الشركات</a></li>
                                    </ul>
                                </li>
                                <!--                                        <li class="dropdown"><a href="#">How we work</a>-->
                                <!--                                            <ul>-->
                                <!--                                                <li><a href="#">Intro</a></li>-->
                                <!--                                                <li><a href="#">Customer Segments</a></li>-->
                                <!--                                                <li><a href="#">Modes of Payment</a></li>-->
                                <!--                                            </ul>-->
                                <!--                                        </li>-->
                                <li class="dropdown"><a href="#">المستثمرون</a>
                                    <ul>
                                        <li><a href="reports-and-statements-ar.php">التقارير والبيانات</a></li>
                                        <li><a href="announcements-ar.php">الإشعارات</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">آخر المستجدات</a>
                                    <ul>
                                        <li><a href="news-ar.php">الأخبار</a></li>
                                        <li><a href="ejarah-financing-pricing-ar.php">أسعار تمويل إجارة</a></li>
                                        <li><a href="murabaha-financing-pricing-ar.php">أسعار تمويل مرابحة</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">عملاؤنا</a>
                                    <ul>
                                        <li><a href="customer-complaint-ar.php">شكاوى العملاء</a></li>
                                        <li><a href="customer-support-ar.php">دعم العملاء</a></li>
                                        <li><a href="faqs-ar.php">الأسئلة الشائعة</a></li>
                                        <li><a href="useful-links-ar.php">روابط هامة</a></li>
                                        <li><a href="files/customer-production/SAMAPDF.pdf" target="_blank">مبادئ حماية العملاء</a></li>

                                    </ul>
                                </li>
                                <li><a href="modes-of-payment-ar.php">طرق الدفع</a></li>
                                <li><a href="careers-ar.php">الوظائف</a></li>
                                <li><a href="contact-ar.php">اتصل بنا</a>
                                </li>
                               
  
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <!-- Sticky Header  -->
    <div class="sticky-header">
        <div class="auto-container clearfix">
            <!--Logo-->
            <div class="logo pull-left">
                <a href="#" title=""><img style="width: 90px; height: 50px; " src="images/Brand_Assets_Full_logo.svg" alt="" title=""></a>
            </div>
            <!--Right Col-->
            <div class="pull-right">
                <!-- Main Menu -->
                <nav class="main-menu clearfix">
                    <!--Keep This Empty / Menu will come through Javascript-->
                </nav><!-- Main Menu End-->
            </div>
        </div>
    </div><!-- End Sticky Menu -->

    <!-- Mobile Menu  -->
    <div class="mobile-menu">
        <div class="menu-backdrop"></div>
        <div class="close-btn"><span class="icon flaticon-targeting-cross"></span></div>

        <nav class="menu-box">
            <div class="nav-logo"><a href="#"><img style="width: 170px; height: 80px; " src="images/Brand_Assets_Full_logo.svg" alt="" title=""></a></div>
            <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
            <!--Social Links-->
            <div class="social-links">
                <ul class="clearfix">
                    <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                    <li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
                    <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                    <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                    <li><a href="#"><span class="fab fa-youtube"></span></a></li>
                </ul>
            </div>
        </nav>
    </div><!-- End Mobile Menu -->
</header>