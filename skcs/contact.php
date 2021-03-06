<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SKCS | Contact</title>
    <link rel="shortcut icon" href="favicon.ico">

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/jquery.bxslider.css">
	<link rel="stylesheet" type="text/css" href="css/isotope.css" media="screen" />
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="js/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
	<link href="css/prettyPhoto.css" rel="stylesheet" />
	<link href="css/style.css" rel="stylesheet" />
    <!-- =======================================================
        Theme Name: SKCS
        Theme URL: https://skcs.co.id
    ======================================================= -->
  </head>

  <?php
  $id = base_convert(microtime(false), 10, 36); // create ID with php convert
  date_default_timezone_set('Asia/Jakarta');
  ?>

  <body>
	<header>
		<nav class="navbar navbar-default navbar-static-top" role="navigation">
			<div class="navigation">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse.collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<div class="navbar-brand">
							<a href="../index.html"><img src="images/logo_skcs.png" alt="" height="50" width="120"></a>
						</div>
					</div>

					<div class="navbar-collapse collapse">
						<div class="menu">
							<ul class="nav nav-tabs" role="tablist">
								<li role="presentation"><a href="../index.html" >Home</a></li>
								<li role="presentation"><a href="services.html">Services</a></li>
								<li role="presentation"><a href="portofolio.php" >Product</a></li>
								<li role="presentation"><a href="contact.php" class="active">Contact</a></li>
                <li role="presentation"><a href="news.php" >News</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</nav>
	</header>

    <!-- Contact Us -->
	<div class="contact">
		<div class="container">
			<div class="text-center">
				<div class="wow bounceInDown" data-wow-offset="0" data-wow-delay="0.3s">
					<h2>Contact Us</h2>
				</div>
				<div class="wow bounceInDown" data-wow-offset="0" data-wow-delay="0.6s">
					<p>If you are interested in our products and services, you can contact us immediately. We will be happy to serve and help you</p>
				</div>
			</div>
		</div>
	</div>

    <!-- Google Maps -->
	<div class="container">
		<div class="col-md-7">
			<div class="map">
				<div id="google-map" data-latitude="-6.16654" data-longitude="106.79943"></div>
			</div>
		</div>

        <!-- Contact info & Address -->
		<div class="contact-info">
			<div class="col-md-5">
				<h2>We Are SKCS</h2>
				<h3>That Inspires Our Customers & Clients</h3>
				<p>If you are interested in our products and services, you can contact us immediately. We will be happy to serve and help you</p>
				<ul>
					<li><i class="fa fa-building fa-2x"></i> Roxy Square, Lt. GF A03 No.12, <br>Jln. Kyai Tapa No. 1, Jakarta 11440</li>
					<li><i class="fa fa-phone fa-2x"></i> +6221-56954579</li>
					<li><i class="fa fa-envelope fa-2x"></i> info@skcs.co.id</li>
				</ul>
			</div>
		</div>
	</div>

    <!-- Contact Form -->
	<div class="contact-form">
		<div class="container">
		    <div class="col-md-8 col-md-offset-2">
    		    <div id="sendmessage">Your message has been sent. Thank you!</div>
                <div id="errormessage"></div>
                <form action="../admin/controller/contact-save.php" method="post" role="form" class="contactForm">
                    <div class="form-group">
                        <input type="hidden" name="id" value="<?php echo $id;?>" />
                        <input type="text" name="name" class="form-control" id="name" placeholder="Your Name"
                        data-rule="minlen:4" data-msg="Please enter at least 4 chars" required />
                        <div class="validation"></div>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Your Email"
                        data-rule="email" data-msg="Please enter a valid email" required />
                        <div class="validation"></div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject"
                        data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" required />
                        <div class="validation"></div>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="message" rows="5" data-rule="required"
                        data-msg="Please write something for us" placeholder="Message" required ></textarea>
                        <div class="validation"></div>
                    </div>

                    <div class="text-center"><button type="submit" class="btn btn-primary btn-lg" name="submit">Send Message</button></div>
                </form>
            </div>
        </div>
	</div>

	<footer>

		<div class="sub-footer">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						&copy; 2016 PT. SKCS | All Rights Reserved.
                        <div class="credits">
                            <!--
                                All the links in the footer should remain intact.
                                You can delete the links only if you purchased the pro version.
                                Licensing information: https://bootstrapmade.com/license/
                                Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Multi
                            -->
                            Designed by <a href="#">Acerudyn</a>
                        </div>
					</div>
					<div class="col-md-6">
						<ul class="pull-right">
							<li><a href="../index.html">Home</a></li>
							<li><a href="services.html">Services</a></li>
							<li><a href="portofolio.php">Proudct</a></li>
							<li><a href="contact.php" class="active">Contact</a></li>
              <li><a href="news.php">News</a></li>
						</ul>
					</div>
				</div>
				<div class="pull-right">
					<a href="#home" class="scrollup"><i class="fa fa-angle-up fa-3x"></i></a>
				</div>
			</div>
		</div>
	</footer>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-2.1.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/fancybox/jquery.fancybox.pack.js"></script>
	<script src="js/jquery.easing.1.3.js"></script>
	<script src="js/jquery.bxslider.min.js"></script>
	<script src="js/jquery.prettyPhoto.js"></script>
	<script src="js/jquery.isotope.min.js"></script>
    <script src="https://maps.google.com/maps/api/js?sensor=true"></script>
	<script src="js/functions.js"></script>
	<script>wow = new WOW({}).init();</script>
    <script src="contactform/contactform.js"></script>

</body>
</html>
