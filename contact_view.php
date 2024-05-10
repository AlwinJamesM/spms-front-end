<head>

	<head>

		<!-- Basic -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Contact Us</title>

		<meta name="keywords" content="WebSite Template" />
		<meta name="description" content="Porto - Multipurpose Website Template">
		<meta name="author" content="okler.net">

		<!-- Favicon -->
		<link rel="shortcut icon" href="<?php echo base_url(); ?>/spms/porto/assets/img/favicon.ico"
			type="image/x-icon" />
		<link rel="apple-touch-icon" href="<?php echo base_url(); ?>/spms/porto/assets/img/apple-touch-icon.png">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

		<!-- Web Fonts  -->
		<link id="googleFonts"
			href="<?php echo base_url(); ?>/spms/porto/assets/https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800%7CShadows+Into+Light&display=swap"
			rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet"
			href="<?php echo base_url(); ?>/spms/porto/assets/vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet"
			href="<?php echo base_url(); ?>/spms/porto/assets/vendor/fontawesome-free/css/all.min.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>/spms/porto/assets/vendor/animate/animate.compat.css">
		<link rel="stylesheet"
			href="<?php echo base_url(); ?>/spms/porto/assets/vendor/simple-line-icons/css/simple-line-icons.min.css">
		<link rel="stylesheet"
			href="<?php echo base_url(); ?>/spms/porto/assets/vendor/owl.carousel/assets/owl.carousel.min.css">
		<link rel="stylesheet"
			href="<?php echo base_url(); ?>/spms/porto/assets/vendor/owl.carousel/assets/owl.theme.default.min.css">
		<link rel="stylesheet"
			href="<?php echo base_url(); ?>/spms/porto/assets/vendor/magnific-popup/magnific-popup.min.css">

		<!-- Theme CSS -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>/spms/porto/assets/css/theme.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>/spms/porto/assets/css/theme-elements.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>/spms/porto/assets/css/theme-blog.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>/spms/porto/assets/css/theme-shop.css">

		<!-- Skin CSS -->
		<link id="skinCSS" rel="stylesheet" href="<?php echo base_url(); ?>/spms/porto/assets/css/skins/default.css">

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>/spms/porto/assets/css/custom.css">

		<!-- font-awesome Icon -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">


	</head>


	<!-- Page Title
		============================================= -->
	<!-- Google Maps - Go to the bottom of the page to change settings and map location. -->
	<div id="googlemaps" class="google-map" style="height: 500px;">
		<iframe
			src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15444.932931465306!2d121.04678669364013!3d14.585781629084192!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x59f9878959c314fc!2sSt. Patrick's Medical Systems Inc. (SPMS)!5e0!3m2!1sen!2sph!4v1571243944683!5m2!1sen!2sph"
			frameborder="0" style="border:0;" width="100%" height="500px" allowfullscreen=""></iframe>
	</div>
	<div class="container">

		<div class="row py-4">
			<div class="col-lg-6">

				<h2 class="font-weight-bold text-8 mt-2 mb-0">Contact Us</h2>
				<p class="mb-4">Feel free to ask for details, don't save any questions!</p>

				<div class="center alert alert-danger">
					<i class="icon-warning-sign"></i> We are not affiliated with <strong>St. Patrick's Clinic and
						Laboratory</strong>. The said establishment is permanently closed. <a
						href="https://spms.com.ph/clinic.html" target="_blank">Click here</a> to learn more
				</div>

				<form class="nobottommargin" id="template-contactform" name="template-contactform"
					action="<?php echo base_url(); ?>inquiry/send_contacts" method="post">

					<div class="form-process"></div>

					<div class="col_one_third">
						<input name="firstname" type="text" id="firstname" class="hide-robot">
						<label for="template-contactform-name">Name</label>
						<input type="hidden" name="template-contactform-fullname">
						<input type="text" id="template-contactform-name" name="template-contactform-name" value=""
							class="sm-form-control required" />
					</div>

					<div class="col_one_third">
						<label for="template-contactform-email">Email</label>
						<input type="email" id="template-contactform-email" name="template-contactform-email" value=""
							class="required email sm-form-control" />
					</div>

					<div class="col_one_third col_last">
						<label for="template-contactform-phone">Phone</label>
						<input type="text" id="template-contactform-phone" name="template-contactform-phone" value=""
							class="sm-form-control" />
					</div>

					<div class="clear"></div>

					<div class="col_half">
						<label for="template-contactform-subject">Subject</label>
						<input type="text" id="template-contactform-subject" name="template-contactform-subject"
							value="" class="required sm-form-control" />
					</div>

					<div class="col_half col_last">
						<label for="template-contactform-subject">Area</label>
						<input type="text" id="template-contactform-area" name="template-contactform-area" value=""
							class="required sm-form-control" />
					</div>

					<div class="clear"></div>

					<div class="col_full">
						<label for="template-contactform-message">Message</label>
						<textarea class="required sm-form-control" id="template-contactform-message"
							name="template-contactform-message" rows="6" cols="30"></textarea>
					</div>
					<div class="col_full">
						<script src="https://www.google.com/recaptcha/api.js" async defer></script>
						<div class="g-recaptcha" data-sitekey="6LcqPXAUAAAAAMradOQi7C3TOeBhNnEQG-Hrb1IF"></div>
					</div>

					<div class="col_full hidden">
						<input type="text" id="template-contactform-botcheck" name="template-contactform-botcheck"
							value="" class="sm-form-control" />
					</div>

					<div class="col_full">
						<button name="submit" type="submit" id="submit-button" tabindex="5" value="Submit"
							class="button button-3d nomargin">Send Email</button>
					</div>

					<input type="hidden" name="prefix" value="template-contactform-">


				</form>

			</div>

			<div class="col-lg-6" style="height: 650px; padding: 0;">

				<div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="800">
					<?php
					$query = $this->db->get('tbl_setting_contacts');
					$phone = "";
					$email = "";
					$fb = "";
					$instagram = "";
					$address = "";
					$youtube = "";
					foreach ($query->result() as $row) {
						$phone = $row->phone;
						$email = $row->email;
						$fb = $row->facebook;
						$address = $row->address;
						$instagram = $row->instagram;
						$youtube = $row->youtube;
					}
					?>
				</div>

				<div class="container py-5 my-5" style="margin-left: 60px;">
					<div class="row row-gutter-sm align-items-lg-center">
						<div class="col-7 col-lg-5 ps-xs-1">
							<img src="http://localhost/spms/porto/assets/img/hyl-it.jpg"
								class="img-fluid box-shadow-4 rounded-0 mb-3 mb-sm-4"
								alt="Restaurant inside showcase 2">
							<img src="http://localhost/spms/porto/assets/img/spms-logo.jpg"
								class="img-fluid box-shadow-4 rounded-0" alt="Restaurant inside showcase 3">
						</div>
						<div class="col-7 col-lg-7 ms-auto">
							<!-- Adjusted column size to col-lg-8 for the third image -->
							<img src="http://localhost/spms/porto/assets/img/spms-pic.jpg"
								class="img-fluid box-shadow-4 rounded-0" alt="Restaurant inside showcase 1">
						</div>
					</div>
				</div>

			</div>

		</div>

	</div>
	</div>

	<div class="container my-4">
    <div class="row pt-5 py-lg-5">
        <div class="col-lg-3 col-md-6 col-sm-6 mb-5 mb-lg-0">
            <h5 class="text-6 text-transform-none font-weight-semi-bold text-color-light mb-4">Location</h5>
            <p><i class="fas fa-map-marker-alt top-6"></i> <strong class="text-dark">Address:</strong><?php echo " ".$address; ?></p>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 mb-5 mb-lg-0">
            <h5 class="text-6 text-transform-none font-weight-semi-bold text-color-light mb-4">Opening Hours</h5>
            <p><i class="fa-regular fa-clock"></i>Monday - Friday - 8am to 5pm</p>
            <p><i class="far fa-clock top-6"></i> Saturday - Closed</p>
            <p><i class="far fa-clock top-6"></i> Sunday - Closed</p>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 mb-5 mb-lg-0">
            <h5 class="text-6 text-transform-none font-weight-semi-bold text-color-light mb-4">Call Us and Email Now</h5>
            <p class="text-7 text-color-light font-weight-light mb-2"><a href="tel:0123456789"><i class="fas fa-phone top-6"></i> <strong class="text-dark">Phone:</strong> <?php echo " ".$phone; ?></a></p>
            <p><i class="fas fa-envelope top-6"></i> <strong class="text-dark">Email:</strong> <a href="#">spmsphilippines@gmail.com</a></p>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
            <h5 class="text-6 text-transform-none font-weight-semi-bold text-color-light mb-4">Social Media</h5>
            <ul class="footer-social-icons social-icons m-0">
                <li><a href="https://www.facebook.com/<?php echo ltrim($fb, '@'); ?>"><i class="icon-facebook"></i></a> <span class="subtitle"><?php echo $fb; ?></span></li>
                <li><a href="https://www.instagram.com/<?php echo ltrim($instagram, '@'); ?>"><i class="icon-instagram2"></i> </a><?php echo $instagram; ?></li>
            </ul>
        </div>
    </div>
</div>

	<!-- Content
		============================================= -->

	<!-- Vendor -->
	<script src="/spms/porto/assets/vendor/plugins/js/plugins.min.js"></script>

	<!-- Theme Base, Components and Settings -->
	<script src="/spms/porto/assets/js/theme.js"></script>

	<!-- Circle Flip Slideshow Script -->
	<script src="/spms/porto/assets/vendor/circle-flip-slideshow/js/jquery.flipshow.min.js"></script>
	<!-- Current Page Views -->
	<script src="/spms/porto/assets/js/views/view.home.js"></script>

	<!-- Theme Custom -->
	<script src="/spms/porto/assets/js/custom.js"></script>

	<!-- Theme Initialization Files -->
	<script src="/spms/porto/assets/js/theme.init.js"></script>

	<!-- Font awesome kit -->
	<script src="https://kit.fontawesome.com/4f647d983d.js" crossorigin="anonymous"></script>