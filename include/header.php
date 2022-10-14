<?php
$page=substr($_SERVER['SCRIPT_NAME'],strrpos($_SERVER['SCRIPT_NAME'],"/")+1);
?>

<header class="header-section">
    <div class="top-nav">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <ul class="tn-left">
                        <li><i class="fa fa-phone"></i> (91) 7588817360</li>
                        <li><i class="fa fa-envelope"></i>seapearlkhavane@gmail.com</li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <div class="tn-right">
                        <div class="top-social">
                            <a href="https://www.facebook.com/SeapearlKhavane" target="_blank"><i class="fa fa-facebook"></i></a>
                            <a href="https://api.whatsapp.com/send/?phone=918879253568&text&app_absent=0" target="_blank"><i class="fa fa-whatsapp"></i></a>
                        </div>
                        <a href="#" class="bk-btn">Booking Now</a>
                        <a href="#" class="bk-btn">Pay Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="menu-item">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="logo">
                        <a href="index.php">
                            <img src="img\logo\ddd.jpeg" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-10">
                    <div class="nav-menu">
                        <nav class="mainmenu">
                            <ul>
                                <li  class=" <?= $page == 'index.php' ? 'active':'' ?>"><a href="./index.php">Home</a></li>
                                <li class=" <?= $page == 'about-us.php' ? 'active':'' ?>"><a href="./about-us.php">About Us</a></li>
                                <li class=" <?= $page == 'rooms.php' ? 'active':'' ?>"><a href="./rooms.php">Rooms</a></li>
                                <li class=" <?= $page == 'activities.php' ? 'active':'' ?>"><a href="./activities.php">Activities</a></li>
                                <li class=" <?= $page == 'place-to-visit.php' ? 'active':'' ?>"><a href="./place-to-visit.php">Place To Visit</a></li>
                                <li class=" <?= $page == 'gallery.php' ? 'active':'' ?>"><a href="./gallery.php">Gallery</a></li>
                                <li class=" <?= $page == 'contact.php' ? 'active':'' ?>"><a href="./contact.php">Contact</a></li>
                            </ul>
                        </nav>
                        <div class="nav-right search-switch">
                            <!-- <i class="icon_search"></i> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Offcanvas Menu Section Begin -->
<div class="offcanvas-menu-overlay"></div>
<div class="canvas-open">
    <i class="icon_menu"></i>
</div>
<div class="offcanvas-menu-wrapper">
    <div class="canvas-close">
        <i class="icon_close"></i>
    </div>
    <div class="search-icon search-switch">
        <i class="icon_search"></i>
    </div>
    <div class="header-configure-area">
        <a href="#" class="bk-btn">Booking Now</a>
    </div>
    <nav class="mainmenu mobile-menu">
        <ul>
            <li class="active"><a href="./index.html">Home</a></li>
            <li><a href="./about-us.html">About Us</a></li>
            <li><a href="./rooms.html">Rooms</a></li>
            <li><a href="./activities.php">Activities</a></li>
            <li><a href="./">Place To Visit</a></li>
            <li><a href="./gallery.php">Gallery</a></li>
            <li><a href="./contact.php">Contact</a></li>
        </ul>
    </nav>
    <div id="mobile-menu-wrap"></div>
    <div class="top-social">
        <a href="#"><i class="fa fa-facebook"></i></a>
        <a href="#"><i class="fa fa-whatsapp"></i></a>
    </div>
    <ul class="top-widget">
        <li><i class="fa fa-phone"></i> (91) 7588817360</li>
        <li><i class="fa fa-envelope"></i>seapearlkhavane@gmail.com</li>
    </ul>
</div>
<!-- Offcanvas Menu Section End -->