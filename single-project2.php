<?php include('function/function.php');
$cid=get_product_id($_GET['id']);
$product_sql=sqlfetch("SELECT * FROM `product` where id='$cid' and actstat='1'");
if(count($product_sql))
{
	foreach($product_sql as $product)
	{
		?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Red Take</title>
    <!--Bootstrap and Other Vendors-->
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
    
	<?php include('include/header.php');?>
    <section id="breadcrumbRow" class="row">
        <h2><?=$_GET['id'];?></h2>
        <div class="row pageTitle m0">
            <div class="container">
                <h4 class="fleft"><?=$_GET['id'];?></h4>
                <ul class="breadcrumb fright">
                    <li><a href="<?=SITE_URL;?>">home</a></li>
                    <li><a href="<?=SITE_URL;?>services.html">Projects</a></li>
                    <li class="active"><?=$_GET['id'];?></li>
                </ul>
            </div>
        </div>
    </section>
    
    <section class="row contentRowPad">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">                    
                    <div class="blog row m0 single_post">
                        <div class="row m0 featureImg">
                            <img data-tilt src="<?=SITE_URL;?>upload/<?=$product['photo'];?>" alt="<?=$product['name'];?>">
                        </div>
                        <div class="row m0 titleRow">
                            <div class="fleft date">29<span>Dec</span></div>
                            <div class="fleft titlePart">
                                <a href="single-post.html"><h4 class="blogTitle heading"><?=$product['name'];?></h4></a>
                                <p class="m0">- <a href="#"><?=$product['company_name'];?></a><span></p>
                            </div>
                        </div>
                        <div class="row m0 excerpt">
                            <p>
								<?=$product['des'];?>
							</p>
                        </div>
                    </div> <!--Blog Row End-->
                    <div class="shareRow row m0">
                        <h4 class="heading fleft">Share this Project</h4>
                        <ul class="list-inline">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-tumblr"></i></a></li>
                        </ul>
                    </div> <!--Share Widget-->
                    
                    
                    
                </div>
            
			</div>
        </div>
    </section>
    
    <?php include('include/footer.php');?>
   
    <!--jQuery, Bootstrap and other vendor JS-->
    
    
    <!--jQuery-->
    <script src="<?=SITE_URL;?>js/jquery-2.1.3.min.js"></script>
    
    <!--Google Maps-->
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    
    <!--Bootstrap JS-->
    <script src="<?=SITE_URL;?>js/bootstrap.min.js"></script>
    
    <!--Nice Scroll-->
    <script src="<?=SITE_URL;?>vendors/nicescroll/jquery.nicescroll.js"></script>
        
    <!--Flickr-->
    
    
    <!--Lightshot-->
    <script src="<?=SITE_URL;?>vendors/lightbox/js/lightbox.min.js"></script>
    
    <!--Tweets-->
    <script src="<?=SITE_URL;?>vendors/tweet/scripts.js"></script>
    <script src="<?=SITE_URL;?>vendors/tweet/tweetie.min.js"></script>
    
    <!--Counter Up-->
    <script src="<?=SITE_URL;?>vendors/waypoints/waypoints.min.js"></script>
    <script src="<?=SITE_URL;?>vendors/counterup/jquery.counterup.min.js"></script>
    
    <!--Owl Carousel-->
    <script src="<?=SITE_URL;?>vendors/owl.carousel/js/owl.carousel.min.js"></script>
    
    <!--Isotope-->
    <script src="<?=SITE_URL;?>vendors/isotope/isotope-custom.js"></script>
    
    <!--FlexSlider-->
    <script src="<?=SITE_URL;?>vendors/flexslider/jquery.flexslider-min.js"></script>
    
    <!--Strella JS-->
    <script src="<?=SITE_URL;?>js/furniture.js"></script>
	<!--<script src="<?=SITE_URL;?>js/tilt.jquery.js"></script>-->
</body>
</html>
<?php 
	}
}
?>