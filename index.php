<?php include("include/config.php"); ?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Sona Template">
    <meta name="keywords" content="Sona, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sea Pearl Khavane Resort | Index</title>

    <!-- Google Font -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Lora:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cabin:400,500,600,700&display=swap" rel="stylesheet"> -->
    <!-- <link rel="stylesheet" href="css/fonts.css" type="text/css"> -->

    <!-- Css Styles -->
    <!-- <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css"> -->
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css">

    <!-- <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css"> -->
    <!-- <link rel="stylesheet" href="css/fa.css" type="text/css"> -->

    <!-- <link rel="stylesheet" href="css/elegant-icons.css" type="text/css"> -->
    <!-- <link rel="stylesheet" href="css/elegant.css" type="text/css"> -->

    <!-- <link rel="stylesheet" href="css/flaticon.css" type="text/css"> -->
    <!-- <link rel="stylesheet" href="css/flat.css" type="text/css"> -->

    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
 
    <!-- <link rel="stylesheet" href="css/jquery.css" type="text/css"> -->

    <!-- <link rel="stylesheet" href="css/magnific-popup.css" type="text/css"> -->

    <!-- <link rel="stylesheet" href="css/slicknav.min.css" type="text/css"> -->
    <!-- <link rel="stylesheet" href="css/slick.css" type="text/css"> -->


    <!-- <link rel="stylesheet" href="css/style.css" type="text/css"> -->
    <link rel="stylesheet" href="css/style2.css" type="text/css">

    <!-- <link rel="stylesheet" href="watersports.css" type="text/css"> -->

    <style>
    .img-fluid {
        max-width: 100%;
        height: 100%;
    }

    .bk-btn1 {
        display: inline-block;
        font-size: 13px;
        font-weight: 700;
        padding: 12px 28px 15px;
        background: #ff5d5d;
        color: #ffffff;
        border: none;
        text-transform: uppercase;
        letter-spacing: 2px;
        position: absolute;
        /* right: 0; */
        bottom: 15px;
    }

    .ui-datepicker{
        z-index: 999999999 !important;
    }
    .bk-btn2 {
        display: inline-block;
        font-size: 13px;
        font-weight: 700;
        padding: 12px 28px 15px;
        background: #ff5d5d;
        color: #ffffff;
        border: none;
        text-transform: uppercase;
        letter-spacing: 2px;
        position: absolute;
        right: 45%;
        bottom: -165px;
    }

    .video-section .video-text p {
        font-size: 20px;
        color: #ffffff;
        margin-bottom: 40px;
        line-height: 50px;
    }

    .h4 {
        margin-bottom: 1rem;
    }

    .p {
        margin-bottom: 1.5rem;
    }
    .colDiv{
        padding: 1rem ;
    }

    @media (max-width: 768px) {
        .bk-btn2 {
            right: 35%;
            bottom: -135px;
        }

        .video-section .video-text p {
            line-height: 28px;
        }

        .h4 {
            margin-bottom: 1rem;
        }

        .p {
            margin-bottom: 3rem;
        }
        .colDiv{
            padding: 1.5rem !important;
        }

    }

    .imgSports {
        position: relative;
        text-align: center;
    }

    .centered {
        position: relative;
        /* top: 50%; */
        left: 50%;
        bottom: 26px;
        transform: translate(-50%, -50%);
    }

    .text-block {
        background-color: black;
        color: white;
        padding: 15px 15px 15px 15px;
        opacity: 0.8;
        font-size: 14px;
        text-align: start;
    }

    .set-bg {
        background-attachment: fixed;
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

     <!-- Hero Section Begin -->
    <section class="hero-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="hero-text">
                        <h1>Sea Pearl Khavane</h1>
                        <p>Here are the best hotel booking sites, including recommendations for international
                            travel and for finding low-priced hotel rooms.</p>
                        <a href="#" class="primary-btn">Discover Now</a>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5 offset-xl-2 offset-lg-1">
                    <div class="booking-form">
                        <h3>Booking Your Hotel</h3>
                        <form method="POST">
                            <div class="row">
                                <div class="check-date col-6">
                                    <label for="date-in">Check In:</label>
                                    <!-- <input type="text" class="date-input" id="date-in"> -->
                                    <input type="text" class="date-input" name="check_in" id="date-in" required>
                                    <i class="icon_calendar"></i>
                                </div>
                                <div class="check-date col-6">
                                    <label for="date-out">Check Out:</label>
                                    <input type="text" class="date-input" name="check_out" id="date-out" required>
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
                                    <!-- <input type="text" class="form-control" name="number" id="number" pattern="^\+(?:[0-9] ?){6,25}[0-9]$" required> -->
                                    <input name="contact_no" type="text" name="number" pattern="[6-9]{1}[0-9]{9}"
                                        maxlength="10" placeholder="" required>
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
                            <button type="submit" name="submit" id="submit">Check Availability</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero-slider owl-carousel">
            <!-- <div class="hs-item set-bg" data-setbg="img/hero/hero-4.webp"></div> -->
            <div class="hs-item set-bg" data-setbg="img/hero/hero-1.webp"></div>
            <div class="hs-item set-bg" data-setbg="img/hero/hero-2.webp"></div>
            <div class="hs-item set-bg" data-setbg="img/hero/hero-3.webp"></div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- About Us Section Begin -->
    <section class="aboutus-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-text">
                        <div class="section-title">
                            <span>About Us</span>
                            <h2>Welcome To The Hotel <br />Sea Pearl Khavane</h2>
                        </div>
                        <p class="f-para">Located near to Khavane Beach. is one of the best and cheapest hotel in
                            Vengurla. We Here To Make Your Vacation Memorable Our promise at Sea Pearls is a premium
                            standard of amenities and service with a true passion for the
                            environment.</p>
                        <p class="s-para">So when it comes to booking the perfect hotel, vacation rental, resort,
                            apartment, guest house, or tree house, we’ve got you covered.</p>
                        <a href="about-us.php" class="primary-btn about-btn">Read More</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-pic">
                        <div class="row">
                            <div class="col-sm-6">
                                <img src="img/about/about-1.webp" alt="">
                            </div>
                            <div class="col-sm-6">
                                <img src="img/about/about-2.webp" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Us Section End -->

    <!-- Services Section End -->
    <section class="services-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>What We Do</span>
                        <h2>Discover Our Services</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="service-item">
                        <i class="flaticon-036-parking"></i>
                        <h4>Parking</h4>
                        <p>Parking space is availaible in our owned land. It is safe to park your vehicle in front of
                            Resort. Parking is not chargeable. 6 Cars can easily parked in front property of Resort.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="service-item">
                        <i class="flaticon-033-dinner"></i>
                        <h4>Restaurant</h4>
                        <p>Sea Pearl Khavane Resort has its own restaurant setup put up on terrace. Very cool and calm
                            place with lush green surroundings. Both Veg as well as Non veg food is served in Malvani
                            Style.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="service-item">
                        <i class="flaticon-026-bed"></i>
                        <h4>Power Backup</h4>
                        <p>It's much more common for power to go out in Parule and Bhogwe. Everything gets powered down
                            on power outage. We have Generator facility to restore power and avoid inconvienience to the
                            guest.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="service-item">
                        <i class="flaticon-024-towel"></i>
                        <h4>Activities</h4>
                        <p>Scuba diving, Water sports(Jet Ski, Bump ride, banana boat, kayaking), Parasailing, Boating,
                            Dolphin watch ride, Fishing, Arrangement of two wheeler and four wheeler for sightseeing.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="service-item">
                        <i class="flaticon-044-clock-1"></i>
                        <h4>Security and safety</h4>
                        <p>The whole resort with parking space is under security of CCTV cameras. Branded door Key locks
                            are used. Balcony of each room has Glass partition. Housekeepers are local honest people.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="service-item">
                        <i class="flaticon-012-cocktail"></i>
                        <h4>Swimming Pool</h4>
                        <p>Well maintained Swimming pool having clean water is a main attraction. It is equipped with
                            self filteration unit. Size of swimmming pool is 15 x 30 Sq. feet.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services Section End -->

    <!-- Video Section Begin -->
    <section class="video-section set-bg" data-setbg="img/video-bg.webp">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="video-text">
                        <h2>Book Your Vacation Room.</h2>
                        <p class="para">When your eyes feast on a visual delight of exotic tropical beauty, pristine
                            sand kissing the shores of the Khavane beach, you know you’ve reached, the Sea Pearl,
                            Snuggle up to the comfort.</p>
                        <a href="rooms.php" class="bk-btn2 shadow">Book Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Video Section End -->

    <!-- Services Section End -->
    <section class="services-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>Choice Of Sports</span>
                        <h2>Watersports</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-sm-12 p-1">
                    <div class="card shadow m-2">
                        <div class="row ">
                            <div class="col-lg-6 col-sm-12 pb-0 mb-0 imgSports">
                                <img src="img/sports/scuba2.webp" class="img-fluid" alt="">
                                <div class="centered">
                                    <div class="text-block">From ₹1500 /Person</div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-12 colDiv">
                                <h4 class="h4">Scuba Diving</h4>
                                <p class="p">Sea Pearl Khavane offers best Scuba Diving Packages in Vengurla.</p>

                                <a href="rooms.php" class="bk-btn1">Book Now</a>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12 p-1">
                    <div class="card shadow m-2">
                        <div class="row ">
                            <div class="col-lg-6 col-sm-12 pb-0 mb-0 imgSport">
                                <img src="img/sports/para2.webp" class="img-fluid" alt="">
                                <div class="centered">
                                    <div class="text-block">From ₹900 /One Person</div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-12 colDiv">
                                <h4 class="h4">Para Sailing</h4>
                                <p class="p">Sea Pearl Khavane offers best Para Sailing Packages in Vengurla.</p>

                                <a href="rooms.php" class="bk-btn1">Book Now</a>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12 p-1">
                    <div class="card shadow m-2">
                        <div class="row ">
                            <div class="col-lg-6 col-sm-12 pb-0 mb-0 imgSport">
                                <img src="img/sports/waterSport2.webp" class="img-fluid" alt="">
                                <div class="centered">
                                    <div class="text-block">From ₹1500 /Person</div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-12 colDiv">
                                <h4 class="h4">Watersports</h4>
                                <p class="p">Sea Pearl Khavane offers best watersports Packages in Vengurla.</p>

                                <a href="rooms.php" class="bk-btn1">Book Now</a>
                            </div>

                        </div>
                    </div>
                </div>
                
                <div class="col-lg-6 col-sm-12 p-1">
                    <div class="card shadow m-2">
                        <div class="row ">
                            <div class="col-lg-6 col-sm-12 pb-0 mb-0 imgSport">
                                <img src="img/sports/dolphin1.webp" class="img-fluid" alt="">
                                <div class="centered">
                                    <div class="text-block">From ₹1500 /Per Boat</div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-12 colDiv">
                                <h4 class="h4">Dolphin Ride</h4>
                                <p class="p">Sea Pearl Khavane offers best Dolphin Ride Packages in Vengurla.</p>

                                <a href="rooms.php" class="bk-btn1">Book Now</a>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Services Section End -->

    <!-- Testimonial Section Begin -->
    <section class="testimonial-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>Testimonials</span>
                        <h2>What Customers Say?</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="testimonial-slider owl-carousel">
                        <div class="ts-item">
                            <p>"My family and my in-laws spent the new year in sea pearl khavane resort in khavane
                                beach. khavane beach is a beautiful place and should be on the must visit list of places
                                if you love clean beach and costal climate.</p>
                            <div class="ti-author">
                                <div class="rating">
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star-half_alt"></i>
                                </div>
                                <h5> - Monika Gore</h5>
                            </div>

                        </div>
                        <div class="ts-item">
                            <p>The facilities and food are very good,For me it was just amazing experience.</p>
                            <div class="ti-author">
                                <div class="rating">
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star-half_alt"></i>
                                </div>
                                <h5> - Aniket Nangare</h5>
                            </div>

                        </div>
                        <div class="ts-item">
                            <p>Easy to locate as it's closer to the highway. Been here with friends and we all thoroughly enjoyed our time here Hotel is nice and clean.</p>
                            <div class="ti-author">
                                <div class="rating">
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <!-- <i class="icon_star-half_alt"></i> -->
                                </div>
                                <h5> - Priti Sharma</h5>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonial Section End -->

    <!-- Blog Section Begin -->

    <!-- Blog Section End -->

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
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">

<link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</body>
<?php


if(isset($_POST['submit'])){
  $name=$_POST['name'];
  $mobile_number=$_POST['number'];
  $check_in=$_POST['check_in'];
  $check_out=$_POST['check_out'];
  $guests=$_POST['guests'];
  $room=$_POST['room'];
 
  $sql=mysqli_query($conn,"INSERT INTO `check_in`(`name`, `mobile_number`, `check_in`, `check_out`, `guests`, `room`) VALUES ('$name','$mobile_number','$check_in','$check_out','$guests','$room')");
  if($sql==1){
     ?>
<?php 
                        
                        $sql=mysqli_query($conn,"select * from SweetalertModal");
                       
                         while($arr=mysqli_fetch_array($sql)){
                        ?>
<script>
swal({
    title: "<?php echo $arr['Sweetalert'];?>!",
    // text: "You clicked the button!",
    icon: "success",
    timer: 5000,
});
</script>

<?php } ?>
<?php
    header("location:index.php");
}else {
    echo '<script>alert("oops...somthing went wrong");</script>';
}
        
}
?>
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
    // header("location:index.php");
}else {
    echo '<script>alert("oops...somthing went wrong");</script>';
}
        
}
?>

</html>