<?php
include("include/config.php");

if(isset($_POST['submit'])){
  $name=$_POST['name'];
  $mobile_number=$_POST['number'];
  $check_in=$_POST['check_in'];
  $check_out=$_POST['check_out'];
  $guests=$_POST['guests'];
  $room=$_POST['room'];
 
  $sql=mysqli_query($conn,"INSERT INTO `check_in`(`name`, `mobile_number`, `check_in`, `check_out`, `guests`, `room`) VALUES ('$name','$mobile_number','$check_in','$check_out','$guests','$room')");
  if($sql==1){
    echo '<script>alert("Successfully submitted");</script>';
    header("location:room-details.php");
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
    <title>Sea Pearl Khavane Resort | Room Details</title>

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

    <!-- Room Details Section Begin -->
    <section class="room-details-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="room-details-item">
                        <img src="img/room/room-details-standard.jpg" alt="">
                        <div class="rd-text">
                            <div class="rd-title">
                                <h3>Standard Rooms</h3>
                                <div class="rdt-right">
                                    <div class="rating">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star-half_alt"></i>
                                    </div>
                                    <a href="#">Booking Now</a>
                                </div>
                            </div>
                            <h2>2000<span>/Pernight</span></h2>
                            <table>
                                <tbody>
                                    <tr>
                                        <td class="r-o">Size:</td>
                                        <td>300 sq. ft.</td>
                                    </tr>
                                    <tr>
                                        <td class="r-o">Capacity:</td>
                                        <td>Max persion 3</td>
                                    </tr>
                                    <tr>
                                        <td class="r-o">Bed:</td>
                                        <td>King Beds</td>
                                    </tr>
                                    <tr>
                                        <td class="r-o">Services:</td>
                                        <td>Wifi, Television, Parking, Bathroom, Restaurant, Loundry service ...</td>
                                    </tr>
                                </tbody>
                            </table>
                            <p class="f-para">Measuring a spacious 300 sq. ft., These Rooms in Bhogwe beach offer you an
                                unparalleled experience of luxury.<br><br> proportioned and well maintained spacious 4
                                air conditioned rooms, Each room having private balcony and sitting area. Room is
                                attached with western style toilet and bath. Double bed with white bedsheet on
                                comfortable matressess. Tea maker, Towels and toilatories provided inside room.
                                All rooms are furnished with double/twin beds with comfortable matressess, wardrobe,
                                fan, AC, electric hot shower, flat TV with cable channels.</p>
                            <h4>Room facilities</h4>
                            <p>
                                AC Rooms in Sea Pearl Khavane Resort are equpped with all basic ammenities and
                                facilities.
                            </p>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="room-booking">
                        <h3>Your Reservation</h3>
                        <form method="POST">
                            <div class="row">
                                <div class="check-date col-6">
                                    <label for="date-in">Check In:</label>
                                    <input type="text" class="date-input" name="check_in" id="check_in">
                                    <i class="icon_calendar"></i>
                                </div>
                                <div class="check-date col-6">
                                    <label for="date-out">Check Out:</label>
                                    <input type="text" class="date-input" name="check_out" id="check_out">
                                    <i class="icon_calendar"></i>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 check-date">
                                    <label for="date-out">Name:</label>
                                    <input type="text" class="form-control" name="name" id="name">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 check-date">
                                    <label for="date-out">Mobile No:</label>
                                    <input type="tel" class="form-control" name="number" id="number">
                                </div>
                            </div>
                            <div class="row">
                                <div class="select-option col-6">
                                    <label for="guest">Guests:</label>
                                    <select name="guests" id="guests">
                                        <option value="" selected disabled>Adults</option>
                                        <option value="0">0 Adults</option>
                                        <option value="1">1 Adults</option>
                                        <option value="2">2 Adults</option>
                                        <option value="3">3 Adults</option>
                                    </select>
                                </div>
                                <div class="select-option col-6">
                                    <label for="room">Room:</label>
                                    <select name="room" id="room">
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
        </div>
    </section>
    <!-- Room Details Section End -->

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

<!-- Booking Now modal Insert -->
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
      header("location:room-details.php");
  }else {
      echo '<script>alert("oops...somthing went wrong");</script>';
  }
          
  }
?>

</html>