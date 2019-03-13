<?php include('function/function.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Red Take</title>
    
    <!--Bootstrap and Other Vendors-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/owl.carousel/css/owl.carousel.css">    
    
    <link rel="stylesheet" type="text/css" href="vendors/lightbox/css/lightbox.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="vendors/flexslider/flexslider.css" media="screen" />
    
    <!--Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800|Montserrat:400,700' rel='stylesheet' type='text/css'>
    
    <!--Mechanic Styles-->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    
    <!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    
    	<?php include('include/header.php'); ?>
    <section id="breadcrumbRow" class="row">
        <h2>About us</h2>
        <div class="row pageTitle m0">
            <div class="container">
                <h4 class="fleft">About us</h4>
                <ul class="breadcrumb fright">
                    <li><a href="<?=SITE_URL;?>">home</a></li>
                    <li class="active">about us</li>
                </ul>
            </div>
        </div>
    </section>
    <section id="whatWeDid" class="row contentRowPad">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
					<?php 
					$data=sqlfetch("SELECT * FROM about where id='1'");
					foreach($data as $about) { echo $about['des']; }
					?>
				</div>
				<div class="col-md-4">
					<?php include('include/sidebar.php');?>
				</div>
			</div>
        </div>
    </section>
    
	<?php include('include/footer.php'); ?>
    <!--jQuery, Bootstrap and other vendor JS-->
    
    <!--jQuery-->
    <script src="js/jquery-2.1.3.min.js"></script>
    
    <!--Google Maps-->
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    
    <!--Bootstrap JS-->
    <script src="js/bootstrap.min.js"></script>
    
    <!--Nice Scroll-->
    <script src="vendors/nicescroll/jquery.nicescroll.js"></script>
        
    <!--Flickr-->
    
    
    <!--Lightshot-->
    <script src="vendors/lightbox/js/lightbox.min.js"></script>
    
    <!--Tweets-->
    <script src="vendors/tweet/scripts.js"></script>
    <script src="vendors/tweet/tweetie.min.js"></script>
    
    <!--Counter Up-->
    <script src="vendors/waypoints/waypoints.min.js"></script>
    <script src="vendors/counterup/jquery.counterup.min.js"></script>
    
    <!--Owl Carousel-->
    <script src="vendors/owl.carousel/js/owl.carousel.min.js"></script>
    
    <!--Isotope-->
    <script src="vendors/isotope/isotope-custom.js"></script>
    
    <!--FlexSlider-->
    <script src="vendors/flexslider/jquery.flexslider-min.js"></script>
    
    <!--Strella JS-->
    <script src="js/furniture.js"></script>
</body>
</html>