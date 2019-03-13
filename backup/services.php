<?php include('function/function.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Red Take</title>
    
    <!--Bootstrap and Other Vendors-->
    <link rel="stylesheet" href="<?=SITE_URL;?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=SITE_URL;?>css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="<?=SITE_URL;?>css/font-awesome.min.css">
    <link rel="stylesheet" href="<?=SITE_URL;?>vendors/owl.carousel/css/owl.carousel.css">    
    
    <link rel="stylesheet" type="text/css" href="<?=SITE_URL;?>vendors/lightbox/css/lightbox.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="<?=SITE_URL;?>vendors/flexslider/flexslider.css" media="screen" />
    
    <!--Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800|Montserrat:400,700' rel='stylesheet' type='text/css'>
    
    <!--Mechanic Styles-->
    <link rel="stylesheet" href="<?=SITE_URL;?>css/style.css">
    <link rel="stylesheet" href="<?=SITE_URL;?>css/responsive.css">
    
    <!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    
    <?php include('include/header.php'); ?>
    <section id="breadcrumbRow" class="row">
        <h2>services</h2>
        <div class="row pageTitle m0">
            <div class="container">
                <h4 class="fleft">services</h4>
                <ul class="breadcrumb fright">
                    <li><a href="<?=SITE_URL;?>">home</a></li>
                    <li class="active">services</li>
                </ul>
            </div>
        </div>
    </section>
    
    
	<section id="featureCat2" class="row contentRowPad">
        <div class="container">
            <h3 class="heading">our featured Services</h3>
            <div class="row m0">
				<?php $service_home_sql=sqlfetch("SELECT  name,photo FROM category where actstat='1' order by fld_order");
				if(count($service_home_sql))
					foreach($service_home_sql as $service_home)
					{
				?>
				<div class="col-sm-3">
                    <div class=" category2 text-center">
                        <div class="row m0 imgHov">
                            <img src="<?=SITE_URL;?>upload/<?=$service_home['photo'];?>" alt="<?=$service_home['name'];?>">
                            <div class="hovArea row m0">
                                <a href="<?=SITE_URL;?>services/<?=urlencode($service_home['name']);?>.html">Check Now <i class="fa fa-caret-right"></i></a>
                            </div>
                        </div>
                        <div class="row m0">
                            <h5 class="heading"><?=$service_home['name'];?></h5>
                        </div>
                    </div>
                </div>
            <?php 
					}
					?>
			</div>
        </div>
    </section>
    
    <section id="contactBanner" class="row contentRowPad">
        <div class="container">
            <div class="row">
                <div class="col-sm-9">
                    <h3>Bring ideas in your life</h3>
                    <h5>If you have any ideas! We have a special team to make your design</h5>
                </div>
                <div class="col-sm-3">
                   <a href="contact.html" class="btn">contact us</a>                    
                </div>
            </div>
        </div>
    </section>
    
    
	<?php include('include/footer.php');?>
   
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