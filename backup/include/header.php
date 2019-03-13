<header class="row" id="header">
        <div class="row m0 top_menus">
            <div class="container">
                <div class="row">
                    <ul class="nav nav-pills fleft">
						<li><a><i class="fa fa-map-marker"></i> Delhi</a></li><li><a href="tel:+918076080300"><i class="fa fa-phone"></i> +91-8076080300</a></li>
                    <li><a><i class="fa fa-briefcase"></i> Submit Brief</a></li>
					</ul><ul class="social-network social-circle fright">
                        <li><a href="#" class="icoRss" title="Rss"><i class="fa fa-rss"></i></a></li>
                        <li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" class="icopinterest" title="pinterest"><i class="fa fa-pinterest"></i></a></li>
                        <li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row m0 logo_line">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3 logo">
                        <a href="index.html" class="logo_a"><img style="height:100px;" src="images/logo.png" alt="Furniture House"></a>
                    </div>
                    <div class="col-sm-9 p0 searchSec">
						<nav class="navbar navbar-default m0 navbar-static-top">
							<div class="container-fluid p0">
								<!-- Brand and toggle get grouped for better mobile display -->
								<div class="navbar-header">
									<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mainNav">
										<i class="fa fa-bars"></i> Navigation
									</button>
								</div>

								<!-- Collect the nav links, forms, and other content for toggling -->
								<div class="collapse navbar-collapse" id="mainNav" style="overflow: hidden;" tabindex="5000">
									<ul class="nav navbar-nav">
										<li class="active dropdown">
											<a href="<?=SITE_URL;?>">Home</a>
										</li>
										<li><a href="<?=SITE_URL;?>about.html">About</a></li>
										<li class="dropdown">
											<a href="<?=SITE_URL;?>" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Services</a>
											<ul class="dropdown-menu" role="menu">
												<?php $menu_cat_sql=sqlfetch("SELECT * FROM category where actstat='1' order by fld_order limit 10");
								  if(count($menu_cat_sql))
									  foreach($menu_cat_sql as $menu_cat){ 
								  ?><li><a href="<?=SITE_URL;?>services/<?=urlencode($menu_cat['name']);?>.html"><?=$menu_cat['name'];?></a></li>
									  <?php }
									  ?>
												<li><a href="<?=SITE_URL;?>services.html">View All</a></li>
											</ul>
										</li>
										<li><a href="<?=SITE_URL;?>team.html">Team</a></li>
										<li><a href="<?=SITE_URL;?>portfolio.html">Portfolio</a></li>
										<li><a href="<?=SITE_URL;?>contact.html">Contact Us</a></li>
									</ul>              
								</div><!-- /.navbar-collapse -->
							</div><!-- /.container-fluid -->
						</nav>
						
					</div>
                </div>
            </div>
        </div>
    </header>
	