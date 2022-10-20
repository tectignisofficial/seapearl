<?php
include("include/config.php");

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
      header("location:activities.php");
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
    <title>Sea Pearl Khavane Resort | Activities</title>

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
        /* width: 100%;
        height: 200px; */

    }
    .box_style_3 {
    background-color: #fafbfd;
    padding: 25px 25px 15px 25px;
    margin-bottom: 20px;
}
#general_facilities h3 {
    margin: 0 0 20px 0;
    padding: 0;
    font-size: 18px;
}
#general_facilities ul {
    list-style: none;
    padding: 0;
    margin: 0;
    line-height: 34px;
}
#general_facilities ul li i {
    font-size: 22px;
    float: left;
    margin: 0 10px 0 0;
}
.box_style_2 {
    text-align: center;
    padding: 10px 20px 20px 20px;
    border: 1px solid #ddd;
}
.box_style_2 {
    text-align: center;
    padding: 10px 20px 20px 20px;
    border: 1px solid #ddd;
}
.box_style_2 a.phone {
    font-size: 26px;
    display: block;
    margin-bottom: 20px;
    color: #ff5d5d;
}
.box_style_2 i {
    font-size: 52px;
    margin-top: 10px;
    display: inline-block;
}
    .card {
        /* height: 500px; */
    }

    .more {
        display: none;
    }

    .myBtn {
        cursor: pointer;
    }

    .readmore {
        font-weight: initial;
    }
    </style>
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
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-12">
                <div class="row">
                    <?php 
                        $query=mysqli_query($conn,"select * from activities");
                            while($sql=mysqli_fetch_array($query))
                            {
                        ?>
                    <!-- <div class="col-12">
                        <div class="card my-3" style="border-radius:4%">
                            <div class="row">
                                <div class="col-lg-6 col-12">
                                    <img src="Admin/dist/img/activities/<?php echo $sql['img']; ?>" class="img-fluid"
                                        alt="Alps" style="border-radius:4%">
                                </div>
                                <div class="col-lg-6 col-12">
                                    <div class="cont">
                                        <h4><?php echo $sql['title']; ?></h4>
                                        <p><?php echo $sql['short_content']; ?><span class="dots">...</span><span
                                                class="more"><?php echo $sql['full_content']; ?> </span> <span
                                                class="myBtn readmore">Read more</span></p>
                                        <div class="price">from <strong>₹<?php echo $sql['price1']; ?></strong> /Per
                                            person<small></small>
                                        </div>
                                        <div class="price" <?php
                                             if($sql['price2'] == ''){ ?> style="display:none;" <?php }else{ ?> style="display:inline;"
                                            <?php  } ?> ?>from <strong>₹1300</strong> /Two person<small></small>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div> -->
                    <div class="col-12">
                        <div class="card my-3" style="border-radius:4%">
                            <div class="row">
                                <div class="col-lg-6 col-12">
                                    <img src="Admin/dist/img/activities/<?php echo $sql['img']; ?>" class="img-fluid"
                                        alt="Alps" style="border-radius:4%">
                                </div>
                                <div class="col-lg-6 col-12">
                                    <div class="cont my-3">
                                        <h4><?php echo $sql['title']; ?></h4>
                                        <p><?php echo $sql['full_content']; ?></p>
                                        <div class="price">from <strong>₹<?php echo $sql['price1']; ?></strong> /Per
                                            person<small></small>
                                        </div>
                                        <div class="price" <?php
                                             if($sql['price2'] == ''){ ?> style="display:none;" <?php }else{ ?> style="display:inline;"
                                            <?php  } ?> ?>from <strong>₹1300</strong> /Two person<small></small>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
            <div class="col-lg-3 col-12">
            <div class="theiaStickySidebar">
            <div class="box_style_3" id="general_facilities">
				<h3>General facilities</h3>
				<ul>
					<li><i class="icon_set_2_icon-109"></i>Pickup/drop from beach</li>
					<li><i class="icon-extinguisher"></i>Scuba Apparatus</li>
					<li><i class="icon-building"></i>Changing Rooms</li>
					<li><i class="icon-lock"></i>Locker System</li>
					<li><i class="icon_set_1_icon-27"></i>Free Parking</li>
				</ul>
			</div>
			<div class="box_style_2">
				<i class="fa fa-phone icons"></i>
				<h4>Need help? Call us</h4>
				<a href="tel://917588817360" class="phone">+91 7588817360</a> <a href="tel://919370576066" class="phone">+91 9370576066</a>
				<small>Monday to Sunday 8.00am - 9.30pm</small>
			</div>

            </div>
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
    $(document).ready(function() {
        let dots = $('.dots').val();
        let more = $('.more').val();
        let myBtn = $('.myBtn').val();

        $('body').on('click', '.myBtn', function() {
            $(this).siblings('.more').css('display', 'inline');
            $(this).siblings('.dots').css('display', 'none');
            $(this).html('Read less').addClass('less').removeClass('myBtn');
        });

        $('body').on('click', '.less', function() {
            $(this).siblings('.more').css('display', 'none');
            $(this).siblings('.dots').css('display', 'inline');
            $(this).html('Read More').addClass('myBtn').removeClass('less');
        });
    });
    </script>
</body>

</html>