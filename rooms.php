<?php
if(isset($_POST['submi'])){
    $name=$_POST['name'];
    $mobile_number=$_POST['number'];
    $check_in=$_POST['check_in'];
    $check_out=$_POST['check_out'];
    $guests=$_POST['guests'];
    $room=$_POST['room'];
   
    $sql=mysqli_query($conn,"INSERT INTO `check_in`(`name`, `mobile_number`, `check_in`, `check_out`, `guests`, `room`) VALUES ('$name','$mobile_number','$check_in','$check_out','$guests','$room')");
    if($sql==1){
      echo '<script>alert("Successfully submitted");</script>';
      header("location:rooms.php");
  }else {
      echo '<script>alert("oops...somthing went wrong");</script>';
  }
          
  }
?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Sona Template">
    <meta name="keywords" content="Sona, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sea Pearl Khavane Resort | Rooms</title>

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
        .img-responsive {
            width: 100%;
            height: auto;
            border-radius:4%;
        }

        .room_desc {
            padding: 15px 0;
            border-top: 1px solid #ddd;
        }

        .room_desc:hover {
            background-color: #fafbfd;
            cursor: pointer;
        }

        .room_list_desc h3 {
            color: #ed5434;
            font-size: 20px;
            margin-top: 30px;
        }

        .room_list_desc ul,
        .room_desc_home ul {
            list-style: none;
            margin: 0 0 25px 0;
            padding: 5px 0;
            border-top: 1px solid #ededed;
            border-bottom: 1px solid #ededed;
        }

        .room_list_desc ul li,
        .room_desc_home ul li {
            display: inline-block;
            margin-right: 10px;
            font-size: 24px;
        }

        .room_list_desc .price {
            line-height: 1.2;
        }

        .room_list_desc .price strong {
            font-size: 20px;
        }

        .room_list_desc .price small {
            display: block;
            color: #999;
        }

        .box_style_1 {
            background-color: #f6f7f9;
            padding: 25px 25px 15px 25px;
            margin-bottom: 20px;
        }

        .box_style_1 hr {
            margin: 10px -25px 20px -25px;
            border: 0;
            border-top: 2px solid #fff;
        }

        .box_style_2 {
            text-align: center;
            padding: 20px 20px 20px 20px;
            border: 1px solid #ddd;
            margin-top: 40px;
        }

        .box_style_2 a.phone {
            font-size: 26px;
            display: block;
            margin-bottom: 20px;
            color: #00a651;
        }

        .box_style_2 a.phone:hover {
            color: #333;
        }

        .box_style_2 i {
            font-size: 52px;
            margin-top: 10px;
            display: inline-block;
        }

        .box_style_3 {
            background-color: #fafbfd;
            padding: 40px 25px 65px 25px;
            margin-bottom: 65px;
        }

        .general_fac {
            font-size: 25px;
            margin-bottom: 20px;
        }

        a.btn_1_outline,
        .btn_1_outline {
            border: none;
            font-family: inherit;
            font-size: inherit;
            color: #ed5434;
            border: 2px solid #ed5434;
            cursor: pointer;
            padding: 7px 15px;
            display: inline-block;
            outline: none;
            font-size: 13px;
            -webkit-transition: all 0.3s;
            -moz-transition: all 0.3s;
            transition: all 0.3s;
            -webkit-border-radius: 3px;
            -moz-border-radius: 3px;
            border-radius: 3px;
            font-weight: 500;
        }

        a.btn_1_outline:hover,
        .btn_1_outline:hover {
            background: #333;
            border: 2px solid #333;
            color: #fff;
        }
    </style>
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Section Begin -->
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
                        <h2>Our Rooms</h2>
                        <div class="bt-option">
                            <a href="index.php">Home</a>
                            <span>Rooms</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section End -->

    <!-- Rooms Section Begin -->
    <section class="rooms-section spad">
        <div class="container margin_60">
            <div class="row">
                <!-- <div class="col-lg-4 col-md-6">
                    <div class="room-item">
                        <img src="img/room/room-5.jpg" alt="">
                        <div class="ri-text">
                            <h4>Standard Rooms</h4>
                            <h3>Rs. 2000<span>/Pernight</span></h3>
                            <table>
                                <tbody>
                                    <tr>
                                        <td class="r-o">Size:</td>
                                        <td>30 ft</td>
                                    </tr>
                                    <tr>
                                        <td class="r-o">Capacity:</td>
                                        <td>Max persion 2</td>
                                    </tr>
                                    <tr>
                                        <td class="r-o">Bed:</td>
                                        <td>King Beds</td>
                                    </tr>
                                    <tr>
                                        <td class="r-o">Services:</td>
                                        <td>Wifi, Television, Parking...</td>
                                    </tr>
                                </tbody>
                            </table>
                            <a href="room-details.php" class="primary-btn">More Details</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="room-item">
                        <img src="img/room/room-7.jpg" alt="">
                        <div class="ri-text">
                            <h4>NON AC Room</h4>
                            <h3>2000<span>/Pernight</span></h3>
                            <table>
                                <tbody>
                                    <tr>
                                        <td class="r-o">Size:</td>
                                        <td>30 ft</td>
                                    </tr>
                                    <tr>
                                        <td class="r-o">Capacity:</td>
                                        <td>Max persion 2</td>
                                    </tr>
                                    <tr>
                                        <td class="r-o">Bed:</td>
                                        <td>King Beds</td>
                                    </tr>
                                    <tr>
                                        <td class="r-o">Services:</td>
                                        <td>Wifi, Television, Parking...</td>
                                    </tr>
                                </tbody>
                            </table>
                            <a href="room-details-nonac.php" class="primary-btn">More Details</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="room-item">
                        <img src="img/room/room-6.jpg" alt="">
                        <div class="ri-text">
                            <h4>AC Room</h4>
                            <h3>2000<span>/Pernight</span></h3>
                            <table>
                                <tbody>
                                    <tr>
                                        <td class="r-o">Size:</td>
                                        <td>30 ft</td>
                                    </tr>
                                    <tr>
                                        <td class="r-o">Capacity:</td>
                                        <td>Max persion 2</td>
                                    </tr>
                                    <tr>
                                        <td class="r-o">Bed:</td>
                                        <td>King Beds</td>
                                    </tr>
                                    <tr>
                                        <td class="r-o">Services:</td>
                                        <td>Wifi, Television, Parking...</td>
                                    </tr>
                                </tbody>
                            </table>
                            <a href="room-details-ac.php" class="primary-btn">More Details</a>
                        </div>
                    </div>
                </div> -->

                <div class="col-lg-9 col-md-8">
                    <div class="room_desc clearfix row" onclick="location.href='room-details.php';">
                        <div class="col-md-7">
                            <img src="img/room/room-7.jpg" alt="" class="img-responsive">
                        </div>
                        <div class="col-md-5 room_list_desc">
                            <h3>Standard Rooms</h3>
                            <p>Sea Pearl Khavane Resort in located at Khavane Beach, Vengurla having spacious AC / NON AC Rooms equipped with all standard
                                amenities. All basic requirements of guest are fullfiled in room. </p>

                            <a href="#" class="btn_1_outline">Read more</a>
                        </div>
                    </div>

                    <div class="room_desc clearfix wow fadeIn row"
                        onclick="location.href='room-details-ac.php';" data-wow-delay="0.1s">
                        <div class="col-md-7">
                            <figure><img src="img/room/room-5.jpg" alt="" class="img-responsive">
                            </figure>
                        </div>
                        <div class="col-md-5 room_list_desc">
                            <h3>AC Room</h3>
                            <p>Sea Pearl Khavane Resort in located at Khavane Beach, Vengurla having 3 spacious AC Rooms equipped with all
                                standard amenities. All basic requirements of guest are fullfiled in room. </p>

                            <a href="#" class="btn_1_outline">Read more</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 sidebar">
                    <div class="theiaStickySidebar">
                        <div class="box_style_3" id="general_facilities">
                            <h3 class="general_fac">General facilities</h3>
                            <ul>
                                <li><i class="icon_set_1_icon-86"></i>Free Wifi</li>
                                <li><i class="icon_set_2_icon-103"></i>Loundry service</li>
                                <li><i class="icon_set_2_icon-110"></i>Swimming pool</li>
                                <li><i class="icon_set_1_icon-58"></i>Restaurant</li>
                                <li><i class="icon_set_1_icon-27"></i>Parking</li>
                            </ul>
                        </div>
                        <div class="box_style_2">
                            <i class="icon_set_1_icon-90"></i>
                            <h4>Need help? Call us</h4>
                            <a href="tel://918806985047" class="phone">+91 8806985047 / 8888053935</a>
                            <small>Monday to Sunday 7.00am - 11.00pm</small>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Rooms Section End -->

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
</body>

</html>