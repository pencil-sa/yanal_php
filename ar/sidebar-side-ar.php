<!--sidebar-side-->

<div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
    <aside class="sidebar services-sidebar">
        <!--Services Widget-->
        <div class="sidebar-widget services-widget">
            <div class="widget-inner">
                <ul>
                    <li <?php if (basename($_SERVER['REQUEST_URI'], '?' . $_SERVER['QUERY_STRING']) == "leasing-services-ar.php"){ echo 'class="active"'; } ?> ><a href="leasing-services-ar.php">خدمات التأجير التمويلي</a></li>
                    <li <?php if (basename($_SERVER['REQUEST_URI'], '?' . $_SERVER['QUERY_STRING']) == "sale-leaseback-ar.php"){ echo 'class="active"'; } ?> ><a href="sale-leaseback-ar.php">البيع و إعادة التأجير</a></li>
                    <li <?php if (basename($_SERVER['REQUEST_URI'], '?' . $_SERVER['QUERY_STRING']) == "murabah-facility-ar.php"){ echo 'class="active"'; } ?> ><a href="murabah-facility-ar.php">التمويل بالمرابحة</a></li>
                    <li <?php if (basename($_SERVER['REQUEST_URI'], '?' . $_SERVER['QUERY_STRING']) == "kafalah-guaranteed-financing-ar.php"){ echo 'class="active"'; } ?> ><a href="kafalah-guaranteed-financing-ar.php">التمويل المدعوم من "كفالة"</a></li>
                    <li <?php if (basename($_SERVER['REQUEST_URI'], '?' . $_SERVER['QUERY_STRING']) == "monshaat-funded-facilities-ar.php"){ echo 'class="active"'; } ?> ><a href="monshaat-funded-facilities-ar.php">التمويل المدعوم من "منشآت"</a></li>
                    <li <?php if (basename($_SERVER['REQUEST_URI'], '?' . $_SERVER['QUERY_STRING']) == "smes-financing-ar.php"){ echo 'class="active"'; } ?> ><a href="smes-financing-ar.php">تمويل المشاريع الصغيرة والمتوسطة</a></li>
                    <li <?php if (basename($_SERVER['REQUEST_URI'], '?' . $_SERVER['QUERY_STRING']) == "corporate-financing-ar.php"){ echo 'class="active"'; } ?> ><a href="corporate-financing-ar.php">تمويل الشركات</a></li>
                </ul>
            </div>
        </div>

        <!--Info Widget-->
        <div class="sidebar-widget info-widget">
            <div class="widget-inner">
                <div class="image"><a href="#"><img src="images/leasing-services/featured-image-4.jpg" alt=""></a></div>
                <div class="lower">
                    <div class="subtitle">Got any Questions? <br>Call us Today!</div>
                    <div class="icon-box"><span class="flaticon-telephone"></span></div>
                    <div class="phone"><a href="tel:920002020" class="stycolor">920002020</a></div>
                    <div class="email"><a href="mailto:info@yanal.com"class="stycolor">info@yanal.com</a></div>
                </div>
            </div>
        </div>
    </aside>
</div>