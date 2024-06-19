
<?php
function isPageActive($pageName)
{
	$currentPage = basename($_SERVER['PHP_SELF']);
	return ($currentPage == $pageName) ? 'active' : '';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

	<!-- Basic -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<meta name="keywords" content="WebSite Template" />
	<meta name="description" content="Porto - Multipurpose Website Template">
	<meta name="author" content="okler.net">

	<!-- Favicon -->
	<link rel="icon" href="https://spms.com.ph/assets/favicon.png" type="image/png" sizes="16x16">
	<link rel="apple-touch-icon" href="img/apple-touch-icon.png">

	<!-- Mobile Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

	<!-- Web Fonts  -->
	<link id="googleFonts" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800%7COpen+Sans:400,700,800&display=swap" rel="stylesheet" type="text/css">

	<!-- Vendor CSS -->
	<link rel="stylesheet" href="porto/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="porto/vendor/fontawesome-free/css/all.min.css">
	<link rel="stylesheet" href="porto/vendor/animate/animate.compat.css">
	<link rel="stylesheet" href="porto/vendor/simple-line-icons/css/simple-line-icons.min.css">
	<link rel="stylesheet" href="porto/vendor/owl.carousel/assets/owl.carousel.min.css">
	<link rel="stylesheet" href="porto/vendor/owl.carousel/assets/owl.theme.default.min.css">
	<link rel="stylesheet" href="porto/vendor/magnific-popup/magnific-popup.min.css">

	<!-- Theme CSS -->
	<link rel="stylesheet" href="porto/css/theme.css">
	<link rel="stylesheet" href="porto/css/theme-elements.css">
	<link rel="stylesheet" href="porto/css/theme-blog.css">
	<link rel="stylesheet" href="porto/css/theme-shop.css">

	<!-- Demo CSS -->
	<link rel="stylesheet" href="porto/css/demos/demo-landing.css">

	<!-- Skin CSS -->
	<link id="skinCSS" rel="stylesheet" href="porto/css/skins/skin-landing.css">

	<!-- Theme Custom CSS -->
	<link rel="stylesheet" href="porto/css/custom.css">
	
	<!-- style css -->
	 <!-- start -->
	<?php if ($title == 'blogs') { ?>
	<style>
		.card.custom-card {
			background-color: #018391;
			color: white;
			height: 100%;
			display: flex;
			flex-direction: column;
			justify-content: space-between;
		}

		.card.custom-card .card-body {
			display: flex;
			flex-direction: column;
			justify-content: space-between;
			height: 100%;
		}

		.card.custom-card .card-body p {
			color: black;
		}

		.portfolio-item {
			height: 100%;
		}

		/* Spacing and centering cards */
		.row.justify-content-center {
			display: flex;
			justify-content: center;
			flex-wrap: wrap;
		}

		.isotope-item {
			display: flex;
			justify-content: center;
			margin-bottom: 30px;
		}
	</style>
	<?php } else if ($title == 'homepage') { ?>
	<link rel="stylesheet" href="css/demos/demo-medical.css">
	<?php } ?>

<!-- end -->

</head>

<body class="loading-overlay-showing" data-plugin-page-transition data-loading-overlay data-plugin-options="{'hideDelay': 0, 'effect': 'pulse'}">
	<div class="loading-overlay">
		<div class="bounce-loader">
			<div class="wrapper-pulse">
				<div class="cssload-pulse-loader"></div>
			</div>
		</div>
	</div>

	<div class="body">
		<header id="header" class="header-transparent header-effect-shrink custom-header-1" data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': false, 'stickyStartAt': 70, 'stickyChangeLogo': false, 'stickyHeaderContainerHeight': 70}">
			<div class="header-body border-top-0 bg-dark box-shadow-none">
				<div class="header-container container-fluid">
					<div class="header-row p-relative px-0">
						<div class="header-column px-lg-3">
							<div class="header-row">
								<div class="header-logo">
									<img src="img/spms-logo.jpg" alt="Porto" width="100" height="70" data-sticky-width="82" data-sticky-height="40" data-sticky-top="0" src="img/logo-default-slim-dark.png">

								</div>
							</div>
						</div>
						<div class="header-column w-100 ms-2 ms-xl-5 ps-2 pe-lg-3">
							<div class="header-row justify-content-end justify-content-lg-start">
								<div class="header-nav header-nav-links header-nav-light-text justify-content-lg-start">
									<div class="header-nav-main header-nav-main-square header-nav-main-dropdown-no-borders header-nav-main-mobile-dark header-nav-main-dropdown-border-radius header-nav-main-text-capitalize header-nav-main-text-size-5 header-nav-main-arrows header-nav-main-effect-1 header-nav-main-sub-effect-1">
										<nav class="collapse">
											<ul class="nav nav-pills" id="mainNav">
												<li class="dropdown">
													<a class="<?php echo isPageActive('myray.php'); ?>" href="homepage.php">Home</a>
												</li>
												<li class="dropdown">
													<a class="dropdown-item <?php echo isPageActive('about-Us.php'); ?>" data-hash data-hash-offset="0" data-hash-offset-lg="90" href="about-Us.php">About Us</a>
												</li>
												<li class="dropdown">
													<a class="dropdown-item <?php echo isPageActive('products.php'); ?>" data-hash data-hash-offset="0" data-hash-offset-lg="90" href="products.php">Products</a>
												</li>
												<li class="dropdown">
													<a class="dropdown-item <?php echo isPageActive('blogs.php'); ?>" data-hash data-hash-offset="0" data-hash-offset-lg="90" href="blogs.php">Blogs</a>
												</li>
												<li class="dropdown">
													<a class="dropdown-item <?php echo isPageActive('careers.php'); ?>" data-hash data-hash-offset="0" data-hash-offset-lg="90" href="careers.php">Careers</a>
												</li>
												<li class="dropdown">
													<a class="dropdown-item <?php echo isPageActive('contact-Us.php'); ?>" data-hash data-hash-offset="0" data-hash-offset-lg="90" href="contact-Us.php">Contact Us</a>
												</li>
												</li>
											</ul>
										</nav>
									</div>
								</div>
								<div class="d-flex">
									<button class="btn header-btn-collapse-nav" data-bs-toggle="collapse" data-bs-target=".header-nav-main nav"><i class="fa fa-bars"></i></button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>

		