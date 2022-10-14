<?php
include("include/config.php");

if(isset($_POST['submit'])){
  $first_name=$_POST['fname'];
  $last_name=$_POST['lname'];
  $email=$_POST['email'];
  $phone_number=$_POST['number'];
  $message=$_POST['message'];
 
  $sql=mysqli_query($conn,"INSERT INTO `contact_us`(`first_name`, `last_name`, `email`, `phone_number`, `message`) VALUES ('$first_name','$last_name','$email','$phone_number','$message')");
  if($sql==1){
    echo '<script>alert("Successfully submitted");</script>';
    header("location:contact.php");
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
    <title>Sea Pearl Khavane Resort | Contact</title>

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

    <!-- Header Section Begin -->
    <?php
    include("include/header.php");
    ?>
    <!-- Header End -->

    <!-- Contact Section Begin -->
    <section class="contact-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="contact-text">
                        <h2>Contact Info</h2>
                        <p>Welcome to Sea Pearl Khavane resort vengurla. Make enquiry by filling & submitting this form.</p>
                        <table>
                            <tbody>
                                <tr>
                                    <td class="c-o">Address:</td>
                                    <td>House no. 363, Near Old Maruti mandir,</td>
                                </tr>
                                <tr>
                                    <td class="c-o"></td>
                                    <td>Khavane Beach, mhapan Sagari Mahamarg, Vengurla, Dist-Sindhudurg, Maharashtra-416522</td>
                                </tr>
                                <tr>
                                    <td class="c-o">Phone:</td>
                                    <td>7588817360 / 9370576066</td>
                                </tr>
                                <tr>
                                    <td class="c-o">Email:</td>
                                    <td>seapearlkhavane@gmail.com</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-lg-7 offset-lg-1">
                    <form method="POST" class="contact-form">
                        <div class="row">
                            <div class="col-lg-6">
                                <input type="text" name="fname" id="fname" placeholder="First Name">
                            </div>
                            <div class="col-lg-6">
                                <input type="text" name="lname" id="lname" placeholder="Last Name">
                            </div>
                            <div class="col-lg-6">
                                <input type="text" name="email" id="email" placeholder="Email">
                            </div>
                            <div class="col-lg-6">
                                <input type="text" name="number" id="number" placeholder="Phone Number">
                            </div>
                            <div class="col-lg-12">
                                <textarea name="message" id="message" placeholder="Your Message"></textarea>
                                <button type="submit" name="submit" id="submit">Submit Now</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3836.787776664177!2d73.5646397140303!3d15.920185347645562!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc007ecc8b07a1d%3A0x7bd31cfdbea37e49!2sSea%20Pearl%20Khavane!5e0!3m2!1sen!2sin!4v1665380838242!5m2!1sen!2sin" width="600" height="470" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->

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
    header("location:contact.php");
}else {
    echo '<script>alert("oops...somthing went wrong");</script>';
}
        
}
?>

</html>