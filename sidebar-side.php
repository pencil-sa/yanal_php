<!--sidebar-side-->

<div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
    <aside class="sidebar services-sidebar">
        <!--Services Widget-->
        <div class="sidebar-widget services-widget">
            <div class="widget-inner">
                <ul>
                    <li <?php if (basename($_SERVER['REQUEST_URI'], '?' . $_SERVER['QUERY_STRING']) == "leasing-services.php"){ echo 'class="active"'; } ?> ><a href="leasing-services.php">Leasing Services</a></li>
                    <li <?php if (basename($_SERVER['REQUEST_URI'], '?' . $_SERVER['QUERY_STRING']) == "sale-leaseback.php"){ echo 'class="active"'; } ?> ><a href="sale-leaseback.php">Sale & Leaseback</a></li>
                    <li <?php if (basename($_SERVER['REQUEST_URI'], '?' . $_SERVER['QUERY_STRING']) == "murabah-facility.php"){ echo 'class="active"'; } ?> ><a href="murabah-facility.php">Murabah Facility</a></li>
                    <li <?php if (basename($_SERVER['REQUEST_URI'], '?' . $_SERVER['QUERY_STRING']) == "kafalah-guaranteed-financing.php"){ echo 'class="active"'; } ?> ><a href="kafalah-guaranteed-financing.php">Kafalah Guaranteed Financing</a></li>
                    <li <?php if (basename($_SERVER['REQUEST_URI'], '?' . $_SERVER['QUERY_STRING']) == "monshaat-funded-facilities.php"){ echo 'class="active"'; } ?> ><a href="monshaat-funded-facilities.php">Monshaat Funded Facilities</a></li>
                    <li <?php if (basename($_SERVER['REQUEST_URI'], '?' . $_SERVER['QUERY_STRING']) == "smes-financing.php"){ echo 'class="active"'; } ?> ><a href="smes-financing.php">SMEs Financing</a></li>
                    <li <?php if (basename($_SERVER['REQUEST_URI'], '?' . $_SERVER['QUERY_STRING']) == "corporate-financing.php"){ echo 'class="active"'; } ?> ><a href="corporate-financing.php">Corporate Financing</a></li>
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