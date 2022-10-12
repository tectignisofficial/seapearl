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
		h2 {
			text-align: center;
			text-transform: capitalize;
			color: rgb(88, 11, 151);
			text-decoration: underline;
			margin-top: 10px;
		}

		.gallery {
			width: auto;
			height: 100%;
			margin-top: 50px;
			padding: 10px;
			border-radius: 3%;
			background-color: white;
		}

		.gal {
			width: 250%;
			height: 100%;
			border-radius: 10%;

		}

		a.lightbox img {
	/* height: 150px; */
	border: 3px solid white;
	box-shadow: 0px 0px 8px rgba(0, 0, 0, .3);
	/* margin: 9px 20px 20px 55px; */
      }

	  .lightbox-target {
    position: fixed;
    top: -100%;
    background: rgba(0, 0, 0, .7);
    width: 100%;
    opacity: 0;
    z-index: 1;
	  }

	  .lightbox-target {
	position: fixed;
	top: -100%;
	width: 100%;
	background: rgba(0, 0, 0, .7);
	width: 100%;
	opacity: 0;
	z-index: 1;
	-webkit-transition: opacity .5s ease-in-out;
	-moz-transition: opacity .5s ease-in-out;
	-o-transition: opacity .5s ease-in-out;
	transition: opacity .5s ease-in-out;
	overflow: hidden;

}

/* Styles the lightbox image, centers it vertically and horizontally, adds the zoom-in transition and makes it responsive using a combination of margin and absolute positioning */

.lightbox-target img {
	margin: auto;
	position: absolute;
	top: 0;
	left: 0;
	right: 0;
	bottom: 0;
	max-height: 0%;
	max-width: 0%;
	border: 3px solid white;
	box-shadow: 0px 0px 8px rgba(0, 0, 0, .3);
	box-sizing: border-box;
	-webkit-transition: .5s ease-in-out;
	-moz-transition: .5s ease-in-out;
	-o-transition: .5s ease-in-out;
	transition: .5s ease-in-out;

}

/* Styles the close link, adds the slide down transition */

.lightbox-close {
	display: block;
	width: 50px;
	height: 50px;
	box-sizing: border-box;
	background: white;
	color: black;
	text-decoration: none;
	position: absolute;
	top: -80px;
	right: 0;
	-webkit-transition: .5s ease-in-out;
	-moz-transition: .5s ease-in-out;
	-o-transition: .5s ease-in-out;
	transition: .5s ease-in-out;
}

/* Provides part of the "X" to eliminate an image from the close link */

.lightbox-close:before {
	content: "";
	display: block;
	height: 30px;
	width: 1px;
	background: black;
	position: absolute;
	left: 26px;
	top: 10px;
	-webkit-transform: rotate(45deg);
	-moz-transform: rotate(45deg);
	-o-transform: rotate(45deg);
	transform: rotate(45deg);
}

/* Provides part of the "X" to eliminate an image from the close link */

.lightbox-close:after {
	content: "";
	display: block;
	height: 30px;
	width: 1px;
	background: black;
	position: absolute;
	left: 26px;
	top: 10px;
	-webkit-transform: rotate(-45deg);
	-moz-transform: rotate(-45deg);
	-o-transform: rotate(-45deg);
	transform: rotate(-45deg);
}

/* Uses the :target pseudo-class to perform the animations upon clicking the .lightbox-target anchor */

.lightbox-target:target {
	opacity: 1;
	top: 0;
	bottom: 0;
	left: 0;
	overflow: scroll;
}

.lightbox-target:target img {
	max-height: 100%;
	max-width: 100%;
}

.lightbox-target:target a.lightbox-close {
	top: 23%;
}

		.img-responsive {
			border-radius: 10px;
		}

		.modal-img {
			width: 55%;
		}

		@media (max-width:768px) {
			.modal-img {
				width: 90%;
			}
		}
	</style>
</head>

<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
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
						<h2>Gallery</h2>
						<div class="bt-option">
							<a href="./index.html">Home</a>
							<span>Gallery</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Breadcrumb Section End -->

	<!-- About Us Page Section Begin -->
	<!-- <div class="container margin_60">
		<section class="grid">
			<div class="row">
				<div class="gallery">
					<div class="row">
						<?php 
                        $query=mysqli_query($conn,"select * from gallery");
                            while($sql=mysqli_fetch_array($query)) {
                        ?>
						<div class="col-12 col-sm-6 col-lg-3 mb-4">
							<a target="_blank" href="Admin/dist/img/gallery">
								<img src="Admin/dist/img/gallery/<?php echo $sql['img']; ?>" class="gal" alt="img1">
							</a></div>
					</div>

					<?php } ?>

					<div class="row">
					<div class="col-12 col-sm-6 col-lg-3 mb-4">
						<a target="_blank" href="img\gallery\img1.jpg">
							<img src="img\gallery\img1.jpg" class="gal" alt="img2">
						</a>
					</div>
					</div>
					<div class="col-12 col-sm-6 col-lg-3 mb-4">
						<a target="_blank" href="img\gallery\img1.jpg">
							<img src="img\gallery\img1.jpg" class="gal" alt="img2">
						</a>
					</div>
					<div class="col-12 col-sm-6 col-lg-3 mb-4">
						<a target="_blank" href="img\gallery\img1.jpg">
							<img src="img\gallery\img1.jpg" class="gal" alt="img2">
						</a>
					</div>
					<div class="col-12 col-sm-6 col-lg-3 mb-4">
						<a target="_blank" href="img\gallery\img1.jpg">
							<img src="img\gallery\img1.jpg" class="gal" alt="img2">
						</a>
					</div>
				</div>
			</div>


		</section>

	</div> -->

	<section class="my-5 py-5">
		<div class="container">
			<div class="tp-title-line-2"></div>
			<div class="row mt-5" id="g">
				<?php     
                             $sql=mysqli_query($conn,"select * from gallery");

                             while($arr=mysqli_fetch_array($sql)){
                             ?>
				<div class="col-md-4 col-sm-6 col-xs-12 margin-bottom">
					<a class="lightbox" href="<?php echo $arr['name'] ?>">
						<img src="Admin/dist/img/gallery/<?php echo $arr['img'];?>" alt="" class="img-responsive"
							style="height:250px; width:300px;" /></a>

					<div class="lightbox-target" id="<?php echo $arr['name'] ?>">
						<img src="Admin/dist/img/gallery/<?php echo $arr['img'];?>" alt=""
							class="img-responsive-modal-img" />
						<a class="lightbox-close" href="#"></a>
					</div>
					<h4 class="uppercase title font-weight-5 pt-4 text-center "></h4>
				</div>

				<?php }  ?>

				<!--end item-->
			</div>
		</div>

	</section>


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
		$(document).ready(function () {
			let dots = $('.dots').val();
			let more = $('.more').val();
			let myBtn = $('.myBtn').val();

			$('body').on('click', '.myBtn', function () {
				$(this).siblings('.more').css('display', 'inline');
				$(this).siblings('.dots').css('display', 'none');
				$(this).html('Read less').addClass('less').removeClass('myBtn');
			});

			$('body').on('click', '.less', function () {
				$(this).siblings('.more').css('display', 'none');
				$(this).siblings('.dots').css('display', 'inline');
				$(this).html('Read More').addClass('myBtn').removeClass('less');
			});
		});
	</script>
</body>

</html>