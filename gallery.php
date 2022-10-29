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
    header("location:gallery.php");
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
    <title>Sea Pearl Khavane Resort | Gallery</title>

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
    <link href="glightbox/css/glightbox.min.css" rel="stylesheet">
<style>
	.gslide-description, .description-bottom{
		display: none !important;
	}
	.img-fluid {
    max-width: 100%;
    height: 100%;
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
                            <a href="index.php">Home</a>
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

    <section class="py-3 mb-3">
        <div class="container">
            <div class="tp-title-line-2"></div>
          

               



                        <div class="row portfolio-container" data-aos="fade-up">


						<?php     
                             $sql=mysqli_query($conn,"select * from gallery");

                             while($arr=mysqli_fetch_array($sql)){
                             ?>

                            <div class="col-lg-4 col-md-6 portfolio-item filter-card py-3">
                                

                                <a href="Admin/dist/img/gallery/<?php echo $arr['img'];?>" data-gallery="portfolioGallery"
                                    class="portfolio-lightbox preview-link text-center" title="Trusts & Hospitals">
                                    <img src="Admin/dist/img/gallery/<?php echo $arr['img'];?>" class="img-fluid" alt="">
                                </a>
                            </div>
							<?php }  ?>
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
    <script src="glightbox/js/glightbox.min.js"></script>

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


<script>
	
  /**
   * Porfolio isotope and filter
   */
  window.addEventListener('load', () => {
    let portfolioContainer = select('.portfolio-container');
    if (portfolioContainer) {
      let portfolioIsotope = new Isotope(portfolioContainer, {
        itemSelector: '.portfolio-item'
      });

      let portfolioFilters = select('#portfolio-flters li', true);

      on('click', '#portfolio-flters li', function(e) {
        e.preventDefault();
        portfolioFilters.forEach(function(el) {
          el.classList.remove('filter-active');
        });
        this.classList.add('filter-active');

        portfolioIsotope.arrange({
          filter: this.getAttribute('data-filter')
        });
        portfolioIsotope.on('arrangeComplete', function() {
          AOS.refresh()
        });
      }, true);
    }

  });

  /**
   * Initiate portfolio lightbox 
   */
  const portfolioLightbox = GLightbox({
    selector: '.portfolio-lightbox'
  });

  /**
   * Portfolio details slider
   */
  new Swiper('.portfolio-details-slider', {
    speed: 400,
    loop: true,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false
    },
    pagination: {
      el: '.swiper-pagination',
      type: 'bullets',
      clickable: true
    }
  });
</script>
</body>

</html>