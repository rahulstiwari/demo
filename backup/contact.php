<?php include('function/function.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Red take</title>
    
    <!--Bootstrap and Other Vendors-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/owl.carousel/css/owl.carousel.css">    
    
    <link rel="stylesheet" type="text/css" href="vendors/lightbox/css/lightbox.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="vendors/flexslider/flexslider.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="vendors/bootstrap-rating/bootstrap-rating.css" media="screen" />
    
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
    <?php include('include/header.php');?>    
    <section id="breadcrumbRow" class="row">
        <h2>contact us</h2>
        <div class="row pageTitle m0">
            <div class="container">
                <h4 class="fleft">contact us</h4>
                <ul class="breadcrumb fright">
                    <li><a href="<?=SITE_URL;?>">home</a></li>
                    <li class="active">contact us</li>
                </ul>
            </div>
        </div>
    </section>
	
    <section id="contactRow" class="row contentRowPad">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="row m0">
                        <h4 class="contactHeading heading">contact form style</h4>
                    </div>
                    <div class="row m0 contactForm">
                        <form class="row m0" id="contactForm" method="post" name="contact" action="mailer.html">
                            <div class="row">
                                <div class="col-sm-6">
                                    <label for="name">Name *</label>
                                    <input type="text" class="form-control" name="name" id="name">
                                </div>
                                <div class="col-sm-6">
                                    <label for="email">Email *</label>
                                    <input type="email" class="form-control" name="email" id="email">
                                </div>
                            </div>
                            <div class="row m0">
                                <label for="subject">subject *</label>
                                <input type="text" class="form-control" name="subject" id="subject">
                            </div>
                            <div class="row m0">
                                <label for="message">your message</label>
                                <textarea name="message" id="message" class="form-control"></textarea>
                            </div>
                            <div class="row m0 captchaRow">
                                <img src="images/captcha.png" alt=""><br>
                                <label for="captcha">Enter the above text</label>
                                <input type="text" class="form-control" name="captcha" id="captcha">
                            </div>
                            <button class="btn btn-primary btn-lg filled" type="submit">send message</button>                            
                        </form>
                        <div id="success">
                                <span class="green textcenter">
                                    Your message was sent successfully! I will be in touch as soon as I can.
                                </span>
                        </div>
                        <div id="error">
                            <span>
                                Something went wrong, try refreshing and submitting the form again.
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="row m0">
                        <h4 class="contactHeading heading">contact info style</h4>
                    </div>
                    <div class="media contactInfo">
                        <div class="media-left">
                            <i class="fa fa-map-marker"></i>
                        </div>
                        <div class="media-body">
                            <h5 class="heading">where to reach us</h5>
                            <p>You can reach us at the following address:</p>
                            <h5>B-206a, Rama Park Road, Mohan Garden,Uttam Nagar, New Delhi 110059</h5>
                        </div> 
                    </div> <!--contactInfo-->
                    <div class="media contactInfo">
                        <div class="media-left">
                            <i class="fa fa-envelope"></i>
                        </div>
                        <div class="media-body">
                            <h5 class="heading">Email us @</h5>
                            <p>Email your issues and suggestion for the following email addresses: </p>
                            <h5>ritesh@redtakemedia.com</h5>
                        </div>
                    </div> <!--contactInfo-->
                    <div class="media contactInfo">
                        <div class="media-left">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="media-body">
                            <h5 class="heading">need to call us?</h5>
                            <p>From Monday to Friday,10:00 AM - 8:00 PM, call us at:</p>
                            <h5>+91-8076080300</h5>
                        </div>
                    </div> <!--contactInfo-->
                    <div class="media contactInfo">
                        <div class="media-left">
                            <i class="fa fa-question"></i>
                        </div>
                        <div class="media-body">
                            <h5 class="heading">we have great support</h5>
                            <p>We provide the best Quality of products to you.We are always here to help our lovely customers.We ship our products anywhere with more secure. We provide the best Quality of products to you.</p>
                        </div>
                    </div> <!--contactInfo-->
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
    
    <!--Rating-->
    <script src="vendors/bootstrap-rating/bootstrap-rating.min.js"></script>
    
    <!--FlexSlider-->
    <script src="vendors/flexslider/jquery.flexslider-min.js"></script>
    
    <!--Strella JS-->
    <script src="js/furniture.js"></script>
    
    <!--Google Map JS-->
    <script src="js/google-map.js"></script>
    
    <!--Contact JS-->
    <script src="js/contact.js"></script>
</body>
</html>