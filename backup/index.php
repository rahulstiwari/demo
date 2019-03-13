<?php include('function/function.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Red Take</title>
    
    <!--Bootstrap and Other Vendors-->
    <link rel="stylesheet" type="text/css" href="css/mitex_css_style.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/mitex_css_zerogrid.css" media="screen" />
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
	 
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<link href="css/css_animate.css" type="text/css" rel="stylesheet">

</head>
<body>
	<?php include('include/header.php'); ?>
    <section id="slider" class="row">
        <div class="row sliderCont flexslider m0">
            <ul class="slides nav">
				<?php $banner_sql=sqlfetch("SELECT name,name2,photo FROM banner where actstat='1' order by fld_order");
				if(count($banner_sql)) 
					foreach($banner_sql as $banner)
					{
				?>
                <li>
                    <img src="<?=SITE_URL;?>upload/<?=$banner['photo'];?>" alt="">
                    <div class="text_lines row m0">
                        <div class="container p0">
                            <h3><?=$banner['name'];?></h3>
                            <h2><?=$banner['name2'];?></h2>
                            <a href="<?=$banner['des'];?>"><h4>show more</h4></a>
                        </div>
                    </div> <!--Text Lines-->
                </li>
				<?php 
					} 
					?>
            </ul>
        </div>
    </section> <!--Slider-->
    
    <section id="homeBanners2" class="row contentRowPad">
        <div class="container">
            <div class="row">
				<div class="col-md-10 col-md-offset-1">
					<?php 
					$data=sqlfetch("SELECT * FROM about where id='7'");
					foreach($data as $about) { echo $about['des']; }
					?>
				</div>	
			</div>
        </div>
    </section>
    
    <section class="service-3 mid-level-padding" style=" background:linear-gradient(to right, #9e0f28 0%,#ed2371 100%); 100%); padding: 25px;color: white;">
        <div class="container">
            <div class="row wow fadeInUp animated animated" data-wow-duration="2s" style="visibility: visible; animation-duration: 2s; animation-name: fadeInUp;">
                <div class="col-sm-12">
                    <div class="bottom-section text-center">
                        <div class="row">
                            <div class="col-sm-3 col-xs-6">
                                <div class="left-section section">
                                    <h2><i class="fa fa-users" aria-hidden="true"></i><span class="sr-only">icon</span>
                                    </h2>
                                    <h3 class="count">125</h3>
                                    <p>Happy Clients</p>
                                </div>
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                <div class="left-section section">
                                    <h2><i class="fa fa-codepen" aria-hidden="true"></i><span class="sr-only">icon</span></h2>
                                    <h3 class="count">9102</h3>
                                    <p>Projects Delivered</p>
                                </div>
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                <div class="section">
                                    <h2><i class="fa fa-paint-brush" aria-hidden="true"></i><span class="sr-only">icon</span>
                                    </h2>
                                    <h3 class="count">615</h3>
                                    <p>Designs we have Done</p>
                                </div>
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                <div class="section">
                                    <h2><i class="fa fa-coffee" aria-hidden="true"></i><span class="sr-only">icon</span></h2>
                                    <h3 class="count">706</h3>
                                    <p>Cups Of Tea</p>
                                </div>
                            </div>
                        
						</div>
                    </div>
                </div>


            </div>
        </div>
    </section>
	
	<section id="featureCat2" class="row contentRowPad">
        <div class="container">
            <h3 class="heading">our featured categories</h3>
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
    
	<section id="ourTeam" class="row contentRowPad">
        <div class="container">
            <div class="row sectionTitle">
                <h3>meet our team</h3>
                <h5>we have our creative team</h5>
            </div>
            <div class="row">
			<?php  $team_sql=sqlfetch("SELECT name,photo,facebook,twitter,linkedin,desig,phone FROM `team` where actstat='1' order by fld_order");
			if(count($team_sql))
				foreach($team_sql as $team)
				{
			?>
                <div class="col-sm-4">
                    <div class="thumbnail">
                        <img src="upload/<?=$team['photo'];?>" class="img-responsive bt-image" alt="<?=$team['name'];?>">
						<div class="bt-overlay">
							<div class="bt-info"> <a class="bt-phone" href="tel:<?=$team['phone'];?>"><i class="fa fa-mobile"></i> <?=$team['phone'];?></a><a class="bt-readmore" href="<?=SITE_URL;?>team.html">See More</a>
							</div>
						</div>
                        <div class="caption">
                            <h4><?=$team['name'];?></h4>
                            <h5><?=$team['desig'];?></h5>
                            <ul class="list-inline row m0">
                                <li><a href="<?=$team['facebook'];?>"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="<?=$team['twitter'];?>"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="<?=$team['linkedin'];?>"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
				<?php 
				}
				?>
			</div>
        </div>
    </section>
    
		
	<section id="hww" class="row contentRowPad">
        <div class="container">
            <h3>how we work</h3>
            <div class="col-sm-4">
                <h5><span>01.</span> Planning</h5>
                <p>We provide the best Quality of products to you.We are always here to help our lovely customers.We ship our products anywhere with more secure.</p>
            </div>
            <div class="col-sm-4">                
                <h5><span>02.</span> Designing</h5>
                <p>We provide the best Quality of products to you.We are always here to help our lovely customers.We ship our products anywhere with more secure.</p>
            </div>
            <div class="col-sm-4">                
                <h5><span>03.</span> Delivering</h5>
                <p>We provide the best Quality of products to you.We are always here to help our lovely customers.We ship our products anywhere with more secure.</p>
            </div>
        </div>
    </section>
    
	<!-- work start -->
<section id="work">
    <div class="portfolio  mid-level-padding">
        <div id="project" class="wow fadeInUp section-padding" data-wow-duration="500ms" data-wow-delay="900ms">
            <div class="container">
                <div class="section-top-heading text-center">
                    <h2>Creative Work</h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                </div>

                <div class="row">
                    <div class="work-filter">
                        <ul class="text-center">
                            <li><a href="javascript:" data-filter="all" class="filter active">All</a></li>
                            <li><a href="javascript:" data-filter=".brand" class="filter">Brand</a></li>
                            <li><a href="javascript:" data-filter=".design" class="filter">Design</a></li>
                            <li><a href="javascript:" data-filter=".graphic" class="filter">Graphic</a></li>
                            <li><a href="javascript:" data-filter=".video" class="filter">Video</a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>


        <div class="container-fluid project-wrapper" id="MixItUp218D4D">
            <div class="zerogrid">
                <div class="wrap-container clearfix">
                    <div class="row wrap-content">
                        <div class="col-1-2">
                            <div class="col-full mix work-item video" style="display: inline-block;">
                                <div class="wrap-col">
                                    <div class="item-container">
                                        <a class="fancybox overlay text-center" data-fancybox-group="gallery" href="http://www.themesindustry.com/html/mitex/images/workimg1.jpg">
                                            <div class="overlay-inner">
                                                <h4 class="base">Creative Design</h4>
                                                <div class="line"></div>
                                                <p>Print Media</p>
                                            </div>
                                        </a>
                                        <img src="http://www.themesindustry.com/html/mitex/images/workimg1.jpg" alt="work">
                                    </div>
                                </div>
                            </div>
                            <div class="col-2-4 mix work-item brand" style="display: inline-block;">
                                <div class="wrap-col">
                                    <div class="item-container">
                                        <a class="fancybox overlay text-center" data-fancybox-group="gallery" href="http://www.themesindustry.com/html/mitex/images/workimg4.jpg">
                                            <div class="overlay-inner">
                                                <h4 class="base">Mobile Designs</h4>
                                                <div class="line"></div>
                                                <p>Latest Apps</p>
                                            </div>
                                        </a>
                                        <img src="http://www.themesindustry.com/html/mitex/images/workimg4.jpg" alt="work">
                                    </div>
                                </div>
                            </div>
                            <div class="col-2-4 mix work-item" style="display: inline-block;">
                                <div class="wrap-col">
                                    <div class="item-container">
                                        <a class="fancybox overlay text-center" data-fancybox-group="gallery" href="http://www.themesindustry.com/html/mitex/images/workimg5.jpg">
                                            <div class="overlay-inner">
                                                <h4 class="base">Print Designs</h4>
                                                <div class="line"></div>
                                                <p>Elements</p>
                                            </div>
                                        </a>
                                        <img src="http://www.themesindustry.com/html/mitex/images/workimg5.jpg" alt="work">  </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-1-4 mix work-item graphic" style="display: inline-block;">
                            <div class="wrap-col">
                                <div class="item-container">
                                    <a class="fancybox overlay text-center" data-fancybox-group="gallery" href="http://www.themesindustry.com/html/mitex/images/workimg2.jpg">
                                        <div class="overlay-inner">
                                            <h4 class="base">Modern Workspace</h4>
                                            <div class="line"></div>
                                            <p>Workstations</p>
                                        </div>
                                    </a>
                                    <img src="http://www.themesindustry.com/html/mitex/images/workimg2.jpg" alt="work">
                                </div>
                            </div>
                        </div>
                        <div class="col-1-4 mix work-item design" style="display: inline-block;">
                            <div class="wrap-col">
                                <div class="item-container">
                                    <a class="fancybox overlay text-center" data-fancybox-group="gallery" href="images/workimg3.jpg">
                                        <div class="overlay-inner">
                                            <h4 class="base">Elegant Images</h4>
                                            <div class="line"></div>
                                            <p>Laptops</p>
                                        </div>
                                    </a>
                                    <img src="http://www.themesindustry.com/html/mitex/images/workimg3.jpg" alt="work">  </div>
                            </div>
                        </div>
                        <div class="col-1-2 mix work-item graphic" style="display: inline-block;">
                            <div class="wrap-col">
                                <div class="item-container">
                                    <a class="fancybox overlay text-center" data-fancybox-group="gallery" href="http://www.themesindustry.com/html/mitex/images/workimg6.jpg">
                                        <div class="overlay-inner">
                                            <h4 class="base">Photography</h4>
                                            <div class="line"></div>
                                            <p>Stock Collection</p>
                                        </div>
                                    </a>
                                    <img src="http://www.themesindustry.com/html/mitex/images/workimg6.jpg" alt="work">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



</section>
<!-- work end -->


    <section id="testimonialTabs" class="row  contentRowPad">       
        <div class="container">
            <h3 class="heading text-center">our <span>happy</span> clients</h3>
            <div class="row">
			<?php $home_testimonial_sql=sqlfetch("SELECT * FROM review where actstat='1' order by rand() limit 3");
			if(count($home_testimonial_sql))
				foreach($home_testimonial_sql as $home_testimonial)
				{
					$star_count=rand(3,5);
			?>
                <div class="col-sm-4">
                    <div class="row m0 testimonialStyle3">
                        <div class="testiText row m0"><?=substr(strip_tags($home_testimonial['des']),0,254);?></div>
                        <div class="row m0 clientInfo text-center">
                            <img src="<?=SITE_URL;?>upload/<?=$home_testimonial['photo'];?>" alt="">
                            <div class="clientName"><?=$home_testimonial['name'];?></div>
                            <ul class="stars list-inline">
							<?php 
							for($i=1;$i<=5;$i++)
							{ 
							if($star_count>=$i)
								$star_class='stared';
							else
								$star_class='';
							?>
                                <li class="<?=$star_class;?>"><i class="fa fa-star"></i></li>
								<?php } ?>
                            </ul>
                        </div>
                    </div>
                </div>
            <?php 
				}
				?>
			</div>
        </div>
    </section> <!--Testimonial Tabs-->
    
    <section id="brands2" class="row contentRowPad">
        <div class="container">
            <h3 class="heading text-center">our clientele</h3>
            <div class="row brands">                
                <ul class="nav">
                    <?php 
					$home_client_sql=sqlfetch("SELECT * FROM `client` where actstat='1' order by fld_order");
					if(count($home_client_sql))
						foreach($home_client_sql as $home_client)
						{
					?>
					<li><img src="<?=SITE_URL;?>upload/<?=$home_client['photo'];?>" alt="<?=$home_client['name'];?>"></a></li>
                    <?php 
						}
						?>
                </ul>
            </div>
        </div>
    </section>
    
    <section id="fromBlogs" class="row contentRowPad">
        <div class="container">
            <div class="row sectionTitle">
                <h3>from our blog</h3>
                <h5>get latest updates from our blog</h5>
            </div>
            <div class="row">
				<?php 
				$home_blog_sql=sqlfetch("SELECT * FROM `pages` order by fld_order limit 3");
				if(count($home_blog_sql))
					foreach($home_blog_sql as $home_blog)
					{
				?>
                <div class="col-sm-4">
                    <div class="blog row m0">
                        <div class="row m0 featureImg">
                            <img src="<?=SITE_URL;?>upload/<?=$home_blog['photo'];?>" alt="<?=$home_blog['name'];?>">
                        </div>
                        <div class="row m0 titleRow">
                            <div class="fleft date"><?=date('d');?><span><?=date('m');?></span></div>
                            <div class="fleft titlePart">
                                <a href="single-post.html"><h6 class="blogTitle heading"><?=$home_blog['name'];?></h6></a>
                                <p class="m0">By <a href="#">Admin</a></p>
                            </div>
                        </div>
                        <div class="row m0 excerpt">
                            <?=substr(strip_tags($home_blog['des']),0,169);?>
                        </div>
                    </div> <!--Blog Row End-->
                </div>
				<?php 
					}
					?>
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