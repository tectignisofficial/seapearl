<?php
include("include/config.php");
?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Sona Template">
    <meta name="keywords" content="Sona, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sona | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cabin:400,500,600,700&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/flaticon.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <style>
        .gal {
            width: 100%;
            height: 200px;

        }

        .card{
            height: 500px;
        }
        .more {
            display: none;}

            .myBtn{
                cursor: pointer;
            }

            .readmore{
                font-weight: initial;
            }
    </style>
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

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
            <div class="language-option">
                <img src="img/flag.jpg" alt="">
                <span>EN <i class="fa fa-angle-down"></i></span>
                <div class="flag-dropdown">
                    <ul>
                        <li><a href="#">Zi</a></li>
                        <li><a href="#">Fr</a></li>
                    </ul>
                </div>
            </div>
            <a href="#" class="bk-btn">Booking Now</a>
        </div>
        <nav class="mainmenu mobile-menu">
            <ul>
                <li class="active"><a href="./index.html">Home</a></li>
                <li><a href="./rooms.html">Rooms</a></li>
                <li><a href="./about-us.html">About Us</a></li>
                <li><a href="./pages.html">Pages</a>
                    <ul class="dropdown">
                        <li><a href="./room-details.html">Room Details</a></li>
                        <li><a href="./blog-details.html">Blog Details</a></li>
                        <li><a href="#">Family Room</a></li>
                        <li><a href="#">Premium Room</a></li>
                    </ul>
                </li>
                <li><a href="./blog.html">News</a></li>
                <li><a href="./contact.html">Contact</a></li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="top-social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-tripadvisor"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>
        </div>
        <ul class="top-widget">
            <li><i class="fa fa-phone"></i> (12) 345 67890</li>
            <li><i class="fa fa-envelope"></i> info.colorlib@gmail.com</li>
        </ul>
    </div>
    <!-- Offcanvas Menu Section End -->

    <!-- Header Section Begin -->
    <?php
    include("include/header.php");
    ?>
    <!-- Header End -->

    <!-- Breadcrumb Section Begin -->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <h2>Activities</h2>
                        <div class="bt-option">
                            <a href="./index.html">Home</a>
                            <span>Activities</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section End -->

    <!-- About Us Page Section Begin -->
    <div class="container margin_60">
        <div class="">
            <div class="row">
            <?php 
                        $query=mysqli_query($conn,"select * from activities");
                            while($sql=mysqli_fetch_array($query))
                            {
                        ?>
                <div class="col-12 col-sm-6 col-md-3 col-lg-3 mb-4">
                    <div class="card" style="border-radius:4%">
                        <img src="Admin/dist/img/activities/<?php echo $sql['img']; ?>" class="gal" alt="Alps" style="border-radius:4%">
                        <div class="cont">
                            <h4><?php echo $sql['title']; ?></h4>
                            <p><?php echo $sql['short_content']; ?><span class="dots">...</span><span class="more"><?php echo $sql['full_content']; ?> </span> <span class="myBtn readmore">Read more</span></p>
                            <div class="price">from <strong>₹<?php echo $sql['price1']; ?></strong> /Per person<small></small>
                            </div>
                            <div class="price" <?php
                            if($sql['price2'] == ''){ ?>
                                style="display:none;"
                           <?php }else{ ?>
                            style="display:inline;"
                          <?php  } ?>
                            ?>from <strong>₹1300</strong> /Two person<small></small></div>
                        </div>
                    </div>
                </div>
                            <?php } ?>
                <!-- <div class="col-12 col-sm-6 col-md-3 col-lg-3 mb-4">
                    <div class="card">
                        <img src="img\bhogwe-beach-view.jpg" class="gal" alt="Alps">
                        <div class="cont">
                            <h4>Scuba Diving In Vengurla</h4>
                            <p>Scuba Diving in Vengurla is famous activity throughout <span class="dots">...</span><span class="more"> Maharashtra state. Amber Resort offers best Scuba Diving Packages in Vengurla with lowest rate, This is a cheapest scuba diving near Bhogwe beach. Scuba diving activity is easy to do for non swimmer’s too.</span> <span class="myBtn readmore">Read more</span></p>
                            <div class="price">from <strong>₹750</strong> /person<small></small></div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3 col-lg-3 mb-4">
                    <div class="card">
                        <img src="img\bhogwe-beach-view.jpg" class="gal" alt="Alps">
                        <div class="cont">
                            <h4>Para sailing in Vengurla</h4>
                            <p>Experience the bird’s eye view of the hypnotizing surround, <span class="dots">...</span><span class="more"> while you get to explore through and redefine adventure out on para sailing in Vengurla. Soar over the waves and experience thrill by Surrendering yourself to the ultimate and amazing watersports in Vengurla</span> <span class="myBtn readmore">Read more</span></p>
                            <div class="price">from <strong>₹900</strong> /One person<small></small></div>
                            <div class="price">from <strong>₹1300</strong> /Two person<small></small></div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3 col-lg-3 mb-4">
                    <div class="card">
                        <img src="img\bhogwe-beach-view.jpg" class="gal" alt="Alps">
                        <div class="cont">
                            <h4>3 Top Activities In Vengurla</h4>
                            <p>3 Top Activities In Vengurla Include Jet sky Ride, <span class="dots">...</span><span class="more">Bananan Boat Ride and Bummper Ride.This Budget Package activity can be arranged and scheduled by Amber Resort Vengurla.</span> <span class="myBtn readmore">Read more</span></p>
                            <div class="price">from <strong>₹600</strong> /One person<small></small></div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3 col-lg-3 mb-4">
                    <div class="card">
                        <img src="img\bhogwe-beach-view.jpg" class="gal" alt="Alps">
                        <div class="cont">
                            <h4>Backwater Ride In Vengurla</h4>
                            <p>Enjoy the beautiful backwater boat ride with picturesque <span class="dots">...</span><span class="more">surrounding from Bhogwe Beach. This ride include bhogwe beach, Devbag Sangam Point, Tsunami Island. This Activities can be arranged and scheduled by Amber Resort Vengurla.</span> <span class="myBtn readmore">Read more</span></p>
                            <div class="price">from <strong>₹1300</strong> /per Boat<small></small></div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3 col-lg-3 mb-4">
                    <div class="card">
                        <img src="img\bhogwe-beach-view.jpg" class="gal" alt="Alps">
                        <div class="cont">
                            <h4>Paramotor In Vengurla</h4>
                            <p>The paramotor, a cool, metal contraption, can<span class="dots">...</span><span class="more"> seat one person at a time and you'll be accompanied by an experienced instructor. Once you take off, you'll be treated to scenic views of the expansive sea below, the sandy shores of the beach and the frothy waves that lap it. This Activities can be arranged and scheduled by Amber Resort Vengurla.</span> <span class="myBtn readmore">Read more</span></p>
                            <div class="price">from <strong>₹2600</strong> /per Person<small></small></div>
                        </div>
                    </div>
                </div>              -->

            </div>
        </div>
    </div>


    <!-- Footer Section Begin -->
    <?php
    include("include/footer.php");
    ?>
    <!-- Footer Section End -->

    <!-- Search model Begin -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch"><i class="icon_close"></i></div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search model end -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
    <script>
$(document).ready(function(){
let dots = $('.dots').val();
  let more = $('.more').val();
  let myBtn = $('.myBtn').val();

$('body').on('click', '.myBtn', function(){
$(this).siblings('.more').css('display','inline');
$(this).siblings('.dots').css('display','none');
$(this).html('Read less').addClass('less').removeClass('myBtn');
  });

  $('body').on('click', '.less', function(){
$(this).siblings('.more').css('display','none');
$(this).siblings('.dots').css('display','inline');
$(this).html('Read More').addClass('myBtn').removeClass('less');
  });
});
    </script>
</body>

</html>