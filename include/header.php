<?php
$page=substr($_SERVER['SCRIPT_NAME'],strrpos($_SERVER['SCRIPT_NAME'],"/")+1);
?>

<header class="header-section">
    <div class="top-nav">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <ul class="tn-left">
                        <li><a href="tel:+917588817360" style="color:#19191a"><i class="fa fa-phone"></i> (91) 7588817360</a></li>
                        <li><a href="mailto:seapearlkhavane@gmail.com" style="color:#19191a"><i class="fa fa-envelope"></i>seapearlkhavane@gmail.com</a></li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <div class="tn-right">
                        <div class="top-social">
                            <a href="https://www.facebook.com/SeapearlKhavane" target="_blank"><i class="fa fa-facebook"></i></a>
                            <a href="https://api.whatsapp.com/send/?phone=918879253568&text&app_absent=0" target="_blank"><i class="fa fa-whatsapp"></i></a>
                        </div>
                        <a href="" class="bk-btn"  data-toggle="modal" data-target="#exampleModal">Booking Now</a>
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
                            <img src="img\logo\hd-logo2.webp" alt="" class="header-logo">
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
                                <li class=" <?= $page == 'place_to_visit.php' ? 'active':'' ?>"><a href="./place_to_visit.php">Place To Visit</a></li>
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
    <!-- <div class="search-icon search-switch">
        <i class="icon_search"></i>
    </div> -->
    <div class="header-configure-area">
    <a href="#" class="bk-btn mb-1">Pay Now</a>
        <a href="#" class="bk-btn">Booking Now</a>
    </div>
    <nav class="mainmenu mobile-menu">
    <ul>
                                <li  class=" <?= $page == 'index.php' ? 'active':'' ?>"><a href="./index.php">Home</a></li>
                                <li class=" <?= $page == 'about-us.php' ? 'active':'' ?>"><a href="./about-us.php">About Us</a></li>
                                <li class=" <?= $page == 'rooms.php' ? 'active':'' ?>"><a href="./rooms.php">Rooms</a></li>
                                <li class=" <?= $page == 'activities.php' ? 'active':'' ?>"><a href="./activities.php">Activities</a></li>
                                <li class=" <?= $page == 'place_to_visit.php' ? 'active':'' ?>"><a href="./place_to_visit.php">Place To Visit</a></li>
                                <li class=" <?= $page == 'gallery.php' ? 'active':'' ?>"><a href="./gallery.php">Gallery</a></li>
                                <li class=" <?= $page == 'contact.php' ? 'active':'' ?>"><a href="./contact.php">Contact</a></li>
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






<!-- Booking now model Begin -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title" id="exampleModalLabel" style="font-size: x-large;">Booking Now</h2>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>            </div>
            <div class="modal-body">
            <div class="booking-form">
                        <form method="POST">
                            <div class="row">
                                <div class="check-date col-6"> 
                                    <label for="date-in">Check In:</label>
                                    <input type="text" class="date-input" name="check_in" id="check_in" required>
                                    <i class="icon_calendar"></i>
                                </div>
                                <div class="check-date col-6">
                                    <label for="date-out">Check Out:</label>
                                    <input type="text" class="date-input" name="check_out" id="check_out" required>
                                    <i class="icon_calendar"></i>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 check-date">
                                    <label for="date-out">Name:</label>
                                    <input type="text" class="form-control" name="name" id="name" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 check-date">
                                    <label for="date-out">Mobile No:</label>
                                    <input type="tel" class="form-control" name="number" id="number" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="select-option col-6">
                                    <label for="guest">Guests:</label>
                                    <select name="guests" id="guests" required>
                                        <option value="" selected disabled>Adults</option>
                                        <option value="0">0 Adults</option>
                                        <option value="1">1 Adults</option>
                                        <option value="2">2 Adults</option>
                                        <option value="3">3 Adults</option>
                                    </select>
                                </div>
                                <div class="select-option col-6">
                                    <label for="room">Room:</label>
                                    <select name="room" id="room" required>
                                        <option value="" selected disabled>Room</option>
                                        <option value="1">1 Room</option>
                                        <option value="2">2 Room</option>
                                    </select>
                                </div>
                            </div>
                            <button type="submit" name="submi" id="submi">Check Availability</button>
                        </form>
                    </div>
            </div>

        </div>
    </div>
</div>

<!-- Booking now model end -->

