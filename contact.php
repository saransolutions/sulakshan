<?php 
require_once 'funcs/cons.php';
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
	<title><?php echo MAIN_TITLE ?></title>
	<meta charset="utf-8">
	<!--[if IE]>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<![endif]-->
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/main.css" id="color-switcher-link">
	<link rel="stylesheet" href="css/animations.css">
	<link rel="stylesheet" href="css/fonts.css">
	<script src="js/vendor/modernizr-2.6.2.min.js"></script>

	<!--[if lt IE 9]>
		<script src="js/vendor/html5shiv.min.js"></script>
		<script src="js/vendor/respond.min.js"></script>
		<script src="js/vendor/jquery-1.12.4.min.js"></script>
	<![endif]-->

</head>

<body>
	<!--[if lt IE 9]>
		<div class="bg-danger text-center">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/" class="highlight">upgrade your browser</a> to improve your experience.</div>
	<![endif]-->

	<div class="preloader">
		<div class="preloader_image"></div>
	</div>


	<!-- search modal -->
	<div class="modal" tabindex="-1" role="dialog" aria-labelledby="search_modal" id="search_modal">
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">
				<i class="rt-icon2-cross2"></i>
			</span>
		</button>
		
	</div>

	<!-- Unyson messages modal -->
	<div class="modal fade" tabindex="-1" role="dialog" id="messages_modal">
		<div class="fw-messages-wrap ls with_padding">
			<!-- Uncomment this UL with LI to show messages in modal popup to your user: -->
			<!--		
		<ul>
			<li>Message To User</li>
		</ul>
		-->

		</div>
	</div>
	<!-- eof .modal -->

	<!-- wrappers for visual page editor and boxed version of template -->
	<div id="canvas">
		<div id="box_wrapper">

			<!-- template sections -->

			<?php
		
		     echo UPPER_HEADER;
			 echo MAIN_HEADER ?>
			

			<section class="ls section_padding_top_100 section_padding_bottom_75">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<section id="map" class="ls ms" data-address="sydney, australia, Liverpool street">
								<!-- marker description and marker icon goes here -->
								<div class="map_marker_description">
									<h3>Sulakshan GMBH</h3>
									<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2708.5397209430666!2d7.80216047551863!3d47.245148512868795!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47902b94e7819e51%3A0x4da7c9f24bae57b2!2sWeibelackerweg%201%2C%204914%20Roggwil!5e0!3m2!1sen!2sch!4v1706611040005!5m2!1sen!2sch" width="1200" height="650" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
								</div>
							</section>
						</div>
					</div>

					<div class="row topmargin_40">
						<div class="col-sm-4 to_animate" data-animation="pullDown">
							<div class="teaser text-center">
								<div class="teaser_icon highlight size_normal">
									<i class="rt-icon2-phone5"></i>
								</div>

								<p>
									<span class="grey">Phone:</span> +41 79 777  24 28
									<br>
									<span class="grey">Whatsapp:</span> +41 79 929  24 28
								</p>

							</div>
						</div>
						<div class="col-sm-4 to_animate" data-animation="pullDown">
							<div class="teaser text-center">
								<div class="teaser_icon highlight size_normal">
									<i class="rt-icon2-location2"></i>
								</div>

								<p>
									Sulakshan GMBH
									<br> Weibelackerweg 1
									<br> 4914 Roggwil
								</p>

							</div>
						</div>
						<div class="col-sm-4 to_animate" data-animation="pullDown">
							<div class="teaser text-center">
								<div class="teaser_icon highlight size_normal">
									<i class="rt-icon2-mail"></i>
								</div>

								<p>sulakshangmbh@gmail.com</p>

							</div>
						</div>

					</div>

					<div class="row">
						<div class="col-sm-12 to_animate">
							<form class="contact-form columns_padding_5" method="post" action="./">
								<div class="row">

									<div class="col-sm-6">
										<p class="contact-form-name">
											<label for="name">Full Name
												<span class="required">*</span>
											</label>
											<input type="text" aria-required="true" size="30" value="" name="name" id="name" class="form-control" placeholder="Full Name">
										</p>
										<p class="contact-form-email">
											<label for="email">Email address
												<span class="required">*</span>
											</label>
											<input type="email" aria-required="true" size="30" value="" name="email" id="email" class="form-control" placeholder="Email">
										</p>
										<p class="contact-form-subject">
											<label for="subject">Subject
												<span class="required">*</span>
											</label>
											<input type="text" aria-required="true" size="30" value="" name="subject" id="subject" class="form-control" placeholder="Subject">
										</p>
									</div>
									<div class="col-sm-6">

										<p class="contact-form-message">
											<label for="message">Message</label>
											<textarea aria-required="true" rows="7" cols="45" name="message" id="message" class="form-control" placeholder="Message"></textarea>
										</p>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12">

										<p class="contact-form-submit text-center topmargin_30">
											<button type="submit" id="contact_form_submit" name="contact_submit" class="theme_button color1">Send Message</button>
										</p>
									</div>

								</div>
							</form>
						</div>
					</div>
				</div>
			</section>


			<?php
			 echo FOOTER;
              ?>
</body>

</html>