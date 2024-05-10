<head>
	<!-- Favicon -->
	<link rel="shortcut icon" href="<?php echo base_url(); ?>/spms/porto/assets/img/favicon.ico" type="image/x-icon" />
	<link rel="apple-touch-icon" href="<?php echo base_url(); ?>/spms/porto/assets/img/apple-touch-icon.png">

	<!-- Mobile Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

	<!-- Web Fonts  -->
	<link id="googleFonts"
		href="<?php echo base_url(); ?>https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&display=swap"
		rel="stylesheet" type="text/css">

	<!-- Vendor CSS -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>/spms/porto/assets/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>/spms/porto/assets/vendor/fontawesome-free/css/all.min.css">
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

	<!-- Demo CSS -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>/spms/porto/assets/css/demos/demo-seo-2.css">

	<!-- Skin CSS -->
	<link id="skinCSS" rel="stylesheet" href="<?php echo base_url(); ?>/spms/porto/assets/css/skins/skin-seo-2.css">

	<!-- Theme Custom CSS -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>/spms/porto/assets/css/custom.css">

	<style>
		.blog-posts-grid {
			display: flex;
			flex-wrap: wrap;
			justify-content: space-between;
		}

		.blog-post-border {
			border: 1px solid #e5e5e5;
			padding: 20px;
			transition: border-color 0.3s ease;
			height: 100%;
		}

		.blog-post-border:hover {
			border-color: #ddd;
		}

		.blog-posts-grid .col-lg-4 {
			flex: 0 0 31%;
			max-width: 31%;
			margin-bottom: 30px;
		}

		@media (max-width: 1199px) {
			.blog-posts-grid .col-lg-4 {
				flex: 0 0 48%;
				max-width: 48%;
			}
		}

		@media (max-width: 991px) {
			.blog-posts-grid .col-lg-4 {
				flex: 0 0 100%;
				max-width: 100%;
			}
		}

		.title-minimize {
			overflow: hidden;
			text-overflow: ellipsis;
			white-space: nowrap;
			max-width: 100%;
			margin: 0;
		}

		.entry {
			position: relative;
		}

		.more-link {
			font-size: 17px;
			padding: 5px;
			background-color: white;
			border: none;
			border-radius: 5px;
			color: black;
			position: absolute;
			bottom: 0;
			right: 0;
			background-color: black;
			color: white;
			transition: background-color 0.3s, color 0.3s;
		}

		.more-link:hover {
			background-color: rgba(0, 0, 0, 0.5);
			/* Black color with 50% opacity */
			color: white;
			/* Text color when hovering */
		}

		.more-link a {
			font-size: 17px;
			padding: 5px;
			background-color: white;
			border: none;
			border-radius: 5px;
			color: black;
			position: absolute;
			bottom: 0;
			right: 0;
			background-color: black;
			color: white;
			transition: background-color 0.3s, color 0.3s;
		}

		.more-link a:hover {
			background-color: rgba(0, 0, 0, 0.5);
			/* Black color with 50% opacity */
			color: white;
			/* Text color when hovering */
		}
	</style>

</head>

<div role="main" class="main">
	<section class="page-header page-header-modern bg-color-secondary page-header-lg mb-0 ">
		<div class="container">
			<div class="row my-4 bg-image">
				<div class="col-md-12 align-self-center text-center">
					<h1 class="text-9 text-color-light custom-secondary-font font-weight-bold my-4 ">Blog</h1>
				</div>
			</div>
		</div>
	</section>



	<section class="section section-no-border bg-color-light m-0"
		style="padding-top:0; background-color: white !important;">
		<?php
		if ($results != null) {
			echo '<div class="container"><div class="row justify-content-center">';
			$count = 0;
			foreach ($results as $row) {
				$date = strtotime($row->blog_added_date);
				$new_date1 = date('dS M Y', $date);
				if ($count % 3 == 0 && $count != 0) {
					echo '</div><div class="row justify-content-center">';
				}
				?>
				<div class="col-lg-4 mb-4">
					<article class="custom-post-blog blog-post-border" style="background-color:#cce8e8;">
						<span class="thumb-info custom-thumb-info-2">
							<span class="thumb-info-caption custom-box-shadow">
								<span class="thumb-info-caption-text">
									<div class="entry" style="height: 400px;">
										<div class="entry-title">
											<!-- title -->
											<h2 class="title-minimize"><a href="#"><?php echo $row->blog_title; ?></a></h2>
											<h2 class="title-full" style="display:none;"><?php echo $row->blog_title; ?></h2>
										</div>
										<!-- Added by -->
										<ul class="entry-meta clearfix">
											<li style="color: red;"><i class="icon-calendar3"></i> <?php echo $new_date1; ?>
											</li>
											<li><a
													href="<?php echo base_url() . 'blog/single/' . $row->blog_id . '/' . url_title($row->blog_title, "dash", TRUE); ?>"><i
														class="icon-user"></i> <?php echo $row->blog_added_by; ?></a></li>
										</ul>

										<br>
										<div class="entry-content">
											<p><?php echo html_entity_decode(preg_replace('/\s+?(\S+)?$/', '', substr(strip_tags(base64_decode($row->blog_desc)), 0, 400))) . '...'; ?>
											</p>

										</div>
										<a href="<?php echo base_url() . 'blog/single/' . $row->blog_id . '/' . url_title($row->blog_title, "dash", TRUE); ?>"
											class="more-link">Read More</a>
									</div>
								</span>
							</span>
						</span>
					</article>
				</div>
				<?php
				$count++;
			}
			// Add an additional box manually
			?>
			<div class="col-lg-4 mb-4">
				<article class="custom-post-blog blog-post-border" style="background-color:#cce8e8; position: relative;">
					<span class="thumb-info custom-thumb-info-2">
						<span class="thumb-info-caption custom-box-shadow">
							<!-- Add your content for the extra box here -->
							<div class="entry" style="height: 400px;">
								<div class="entry-title title-minimize title-full">
									<h2><a href="#">What is hyaluronic acid?</a></h2>
								</div>
								<ul class="entry-meta clearfix">
									<li style="color:red;"><i class="icon-calendar3"></i> 14th Jan 2020</li>
									<li><a href="#"><i class="icon-user"></i> Jomar Juntilla</a></li>
								</ul>
								<div class="entry-content">
									<br>
									<p>1Hyaluronic Acid (sodium hyaluronate, hyaluronan, HA)&nbsp;is a physiological
										substance discovered by Karl Meyer and John Palmer in 1934, scientists at Columbia
										University, New York. They found it...</p>
								</div>
							</div>
							<a href="#" class="more-link" style="position: absolute; bottom: 72px; right: 20px;" <?php echo base_url() . 'blog/single/' . $row->blog_id . '/' . url_title($row->blog_title, "dash", TRUE); ?>>Read More</a>
						</span>
					</span>
				</article>
			</div>

			<?php
			echo '</div></div>'; // Close the row and container
		} else {
			?>
			<h2>No posts available</h2>
			<?php
		}
		?>
	</section>


	<script>
		document.addEventListener('DOMContentLoaded', function () {
			var titles = document.querySelectorAll('.title-minimize');
			titles.forEach(function (title) {
				title.addEventListener('click', function () {
					this.style.display = 'none';
					this.nextElementSibling.style.display = 'block';
				});
			});
		});
	</script>

</div><!-- #content end -->
<!-- #content end -->

<!-- Vendor -->
<script src="/spms/porto/assets/vendor/plugins/js/plugins.min.js"></script>

<!-- Theme Base, Components and Settings -->
<script src="/spms/porto/assets/js/theme.js"></script>

<!-- Demo -->
<script src="/spms/porto/assets/js/demos/demo-seo-2.js"></script>

<!-- Theme Custom -->
<script src="/spms/porto/assets/js/custom.js"></script>

<!-- Theme Initialization Files -->
<script src="/spms/porto/assets/js/theme.init.js"></script>
</div><!-- #content end -->
<!-- #content end -->