<!DOCTYPE html>
<html lang="en">

<head>

	<!-- Basic -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Porto - Multipurpose Website Template</title>

	<meta name="keywords" content="WebSite Template" />
	<meta name="description" content="Porto - Multipurpose Website Template">
	<meta name="author" content="okler.net">

	<!-- Favicon -->
	<link rel="shortcut icon" href="<?php echo base_url(); ?>/spms/porto/assets/img/favicon.ico" type="image/x-icon" />
	<link rel="apple-touch-icon" href="<?php echo base_url(); ?>/spms/porto/assets/img/apple-touch-icon.png">

	<!-- Mobile Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

	<!-- Web Fonts  -->
	<link id="googleFonts" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800%7CShadows+Into+Light&display=swap" rel="stylesheet" type="text/css">

	<!-- Vendor CSS -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>/spms/porto/assets/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>/spms/porto/assets/vendor/fontawesome-free/css/all.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>/spms/porto/assets/vendor/animate/animate.compat.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>/spms/porto/assets/vendor/simple-line-icons/css/simple-line-icons.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>/spms/porto/assets/vendor/owl.carousel/assets/owl.carousel.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>/spms/porto/assets/vendor/owl.carousel/assets/owl.theme.default.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>/spms/porto/assets/vendor/magnific-popup/magnific-popup.min.css">

	<!-- Theme CSS -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>/spms/porto/assets/css/theme.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>/spms/porto/assets/css/theme-elements.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>/spms/porto/assets/css/theme-blog.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>/spms/porto/assets/css/theme-shop.css">

	<!-- Current Page CSS -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>/spms/porto/assets/vendor/circle-flip-slideshow/css/component.css">

	<!-- Skin CSS -->
	<link id="skinCSS" rel="stylesheet" href="<?php echo base_url(); ?>/spms/porto/assets/css/skins/default.css">

	<!-- Theme Custom CSS -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>/spms/porto/assets/css/custom.css">

</head>


<!-- Page Title
		============================================= -->
		<div class="text-center pb-4 pt-5 my-5" >
    <div class="col-md-10 mx-md-auto">
        <h1 class="word-rotator slide font-weight-bold text-8 mb-3 appear-animation" data-appear-animation="fadeInUpShorter">
            <span style="font-size: 35px; margin-bottom:10px; margin-left:10px;">St. Patrick's Medical Systems (SPMS)</span><br>
            <span class="word-rotator-words" style="display: inline-block;">
                <b style="display: none; color:red;">NURTURING</b>
                <b style="display: none; color:red;">GROWTH</b>
                <b style="display: none; color:red;">SOLUTION</b>
            </span>
            <span> for the healthcare organizations.</span>
        </h1>
    </div>
</div>

<!-- Content
		============================================= -->

<div role="main" class="main">

	<section class="section-custom-medical">
		<div class="container">

			<!-- Youtube Video -->
			<div class="row mt-5 mb-5 pt-3 pb-3">
				<div class="col-md-8">
					<h3><span>WATCH</span> MyRay Hyperion X5</h3>
					<iframe style="width:100%;height:80%" src="" data-src="https://www.youtube.com/embed/videoseries?list=PLEFozZkV8lnPyX6MkwMkjQnaP_NrJtjTG" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
				<!--============================================= -->

				<!-- Brog from us -->
				<div class="col-md-4">
					<h5><span>BLOG</span> from us</h5>
					<?php
					$this->db->order_by('blog_added_date', 'desc');
					$query = $this->db->get('tbl_blog', 5);
					foreach ($query->result() as $row) {

						$date = strtotime($row->blog_added_date);
						$new_date1 = date('dS M Y', $date);
					?>
						<div class="spost clearfix">

							<div class="entry-c">
								<div class="entry-title">
									<h4><a href="<?php echo base_url() . 'blog/single/' . $row->blog_id . '/' . url_title($row->blog_title, 'dash', true); ?>"><?php echo ucwords(strtolower($row->blog_title)); ?></a></h4>
								</div>
								<ul class="entry-meta">
									<li><?php echo $new_date1; ?></li>
								</ul>
							</div>
						</div>
					<?php
					}
					?>

					<br><a href="<?php echo base_url(); ?>blog" class="button button-small button-border button-rounded">See more</a>
				</div>
			</div>
		</div>
		<!--============================================= -->
	</section>
</div>
</div>
</section>

<!-- Products -->
	<div class="container">
		<div class="row pt-3">
			<div class="col">
				<h5>Browse our <span>PRODUCTS</span></h5>
			</div>
		</div>
		<div class="row">
			<?php
			$this->db->order_by('RAND()');
			$query = $this->db->get('tbl_prod_items', 5);
			foreach ($query->result() as $row) {
				$date = strtotime($row->p_item_added_date);
				$new_date1 = date('dS M Y', $date);
			?>
				<div class="col-lg-4 col-md-6 mb-4">
					<div class="spost clearfix">
						<div class="entry-image">
							<!-- Image -->
							<?php $this->db->where('p_cat_name', $row->p_item_category);
							$catquery = $this->db->get('tbl_prod_category');
							if ($catquery->result() != null) {
							?>
								<a href="<?php echo base_url(); ?>products/<?php echo url_title($row->p_item_category, "dash", TRUE); ?>/<?php echo url_title($row->p_item_name, "dash", TRUE); ?>" class="nobg">
									<?php
								} else {

									$this->db->where('p_s_cat_name', $row->p_item_category);
									$catsubquery = $this->db->get('tbl_prod_sub_category');
									foreach ($catsubquery->result() as $subr) {
										$this->db->where('p_cat_id', $subr->p_s_parent_cat);
										$catsub = $this->db->get('tbl_prod_category');
										foreach ($catsub->result() as $catr) {
									?>
											<a href="<?php echo base_url(); ?>products/<?php echo url_title($catr->p_cat_name, "dash", TRUE); ?>/<?php echo url_title($subr->p_s_cat_name, "dash", TRUE); ?>/<?php echo url_title($row->p_item_name, "dash", TRUE); ?>" class="nobg">
									<?php
										}
									}
								} ?>
									<!--<a href="<?php //echo base_url().'listing/property/'.$row->p_id.'/'.url_title($row->p_project, 'dash', true); 
													?>" class="nobg">-->

									<?php $this->db->where('prod_item_id', $row->p_item_id);
									$this->db->where('prod_main_img', 'Yes');
									$qimg = $this->db->get('tbl_prod_img', 1);
									if ($qimg->result() != null) {
										foreach ($qimg->result() as $row1) {
									?>
											<img src="<?php echo base_url() . 'assets/images/products/thumb/' . $row1->prod_img_raw . '_thumb' . $row1->prod_img_ext; ?>" alt="<?php echo $row->p_item_name; ?> thumbnail">
										<?php
										}
									} else {
										?>
										<img src="<?php echo base_url(); ?>assets/images/default/defaultx54.jpg" alt="SPMS thumbnail default">
									<?php
									}
									?>
						</div>
						<div class="entry-c">
							<div class="entry-title">
								<!-- Title -->
								<h4>
									<?php $this->db->where('p_cat_name', $row->p_item_category);
									$catquery = $this->db->get('tbl_prod_category');
									if ($catquery->result() != null) {
									?>
										<a href="<?php echo base_url(); ?>products/<?php echo url_title($row->p_item_category, "dash", TRUE); ?>/<?php echo url_title($row->p_item_name, "dash", TRUE); ?>">
											<?php
										} else {

											$this->db->where('p_s_cat_name', $row->p_item_category);
											$catsubquery = $this->db->get('tbl_prod_sub_category');
											foreach ($catsubquery->result() as $subr) {
												$this->db->where('p_cat_id', $subr->p_s_parent_cat);
												$catsub = $this->db->get('tbl_prod_category');
												foreach ($catsub->result() as $catr) {
											?>
													<a href="<?php echo base_url(); ?>products/<?php echo url_title($catr->p_cat_name, "dash", TRUE); ?>/<?php echo url_title($subr->p_s_cat_name, "dash", TRUE); ?>/<?php echo url_title($row->p_item_name, "dash", TRUE); ?>">
											<?php
												}
											}
										} ?>

											<?php echo $row->p_item_name; ?>
													</a>
								</h4>
							</div>
							<ul class="entry-meta">
								<li><?php echo $new_date1; ?></li>
							</ul>
						</div>
					</div>
				</div>
			<?php
			}
			?>
		</div>
		<div class="row mt-lg-4">
			<div class="col-lg-4">
				<div class="feature-box feature-box-style-2 appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="300" style="padding: 0 !important;">
					<div class="feature-box-icon" style="min-width: 4.7rem;">
						<img src="img/demos/medical/icons/department-icon-dental.png" alt class="img-fluid" />
					</div>
					<div class="spost clearfix">
						<div class="entry-image">
							<a href="https://spms.com.ph/products/myray-products/intraoral/rxdc-hypersphere" class="nobg">

								<img src="https://spms.com.ph/assets/images/products/thumb/RXDC_HyperSphere_34_thumb.jpg" alt="RXDC HyperSphere thumbnail">
							</a>
						</div>
						<div class="entry-c">
							<div class="entry-title">
								<h4>
									<a href="https://spms.com.ph/products/myray-products/intraoral/rxdc-hypersphere">
										RXDC HyperSphere </a>
								</h4>
							</div>
							<ul class="entry-meta">
								<li>14th Jan 2020</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="feature-box feature-box-style-2 appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="300"  style="padding:0 !important;">
					<div class="feature-box-icon" style="min-width: 4.7rem;">
						<img src="img/demos/medical/icons/department-icon-gynecology.png" alt class="img-fluid" />
					</div>
					<div class="spost clearfix">
						<div class="entry-image">
							<a href="https://spms.com.ph/products/ems-dental-products/scaling-and-perio/instrument-ps" class="nobg">

								<img src="https://spms.com.ph/assets/images/products/thumb/PS_Instrument_63_thumb.jpg" alt="Instrument PS thumbnail">
							</a>
						</div>
						<div class="entry-c">
							<div class="entry-title">
								<h4>
									<a href="https://spms.com.ph/products/ems-dental-products/scaling-and-perio/instrument-ps">
										Instrument PS </a>
								</h4>
							</div>
							<ul class="entry-meta">
								<li>15th Jan 2020</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="feature-box feature-box-style-2 appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="300" style="padding:0 !important;">
					<div class="feature-box-icon" style="min-width: 4.7rem;">
						<img src="img/demos/medical/icons/department-icon-pulmonology.png" alt class="img-fluid" />
					</div>
					<div class="spost clearfix">
						<div class="entry-image">
							<a href="https://spms.com.ph/products/uvc-germicidal-air-exchanger/uvc-air-eco" class="nobg">

								<img src="https://spms.com.ph/assets/images/products/thumb/UVC-Air™_Eco_68_thumb.jpg" alt="UVC-Air™ Eco thumbnail">
							</a>
						</div>
						<div class="entry-c">
							<div class="entry-title">
								<h4>
									<a href="https://spms.com.ph/products/uvc-germicidal-air-exchanger/uvc-air-eco">
										UVC-Air™ Eco </a>
								</h4>
							</div>
							<ul class="entry-meta">
								<li>22nd Oct 2020</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row mt-lg-4">
			<div class="col-lg-4">
				<div class="feature-box feature-box-style-2 appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="300"  style="padding:0 !important;"	>
					<div class="feature-box-icon" style="min-width: 4.7rem;">
						<img src="img/demos/medical/icons/department-icon-dental.png" alt class="img-fluid" />
					</div>
					<div class="spost clearfix">
						<div class="entry-image">
							<a href="https://spms.com.ph/products/x-ray-accessories/thyroid-collar" class="nobg">

								<img src="https://spms.com.ph/assets/images/products/thumb/Thyroid_Collar_25_thumb.jpg" alt="Thyroid Collar thumbnail">
							</a>
						</div>
						<div class="entry-c">
							<div class="entry-title">
								<h4>
									<a href="https://spms.com.ph/products/x-ray-accessories/thyroid-collar">
										Thyroid Collar </a>
								</h4>
							</div>
							<ul class="entry-meta">
								<li>14th Jan 2020</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="feature-box feature-box-style-2 appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="300" style="padding:0 !important;">
					<div class="feature-box-icon" style="min-width: 4.7rem;">
						<img src="img/demos/medical/icons/department-icon-gynecology.png" alt class="img-fluid" />
					</div>
					<div class="spost clearfix">
						<div class="entry-image">
							<a href="https://spms.com.ph/products/ems-dental-products/table-tops/air-flow-master" class="nobg">

								<img src="https://spms.com.ph/assets/images/products/thumb/AIRFLOW®_Master_53_thumb.jpg" alt="AIR-FLOW® Master thumbnail">
							</a>
						</div>
						<div class="entry-c">
							<div class="entry-title">
								<h4>
									<a href="https://spms.com.ph/products/ems-dental-products/table-tops/air-flow-master">
										AIR-FLOW® Master </a>
								</h4>
							</div>
							<ul class="entry-meta">
								<li>15th Jan 2020</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="feature-box feature-box-style-2 appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="300" style="padding:0 !important;">
					<div class="feature-box-icon" style="min-width: 4.7rem;">
						<img src="img/demos/medical/icons/department-icon-hepatology.png" alt class="img-fluid" />
					</div>
					<div class="spost clearfix">
						<div class="entry-image">
							<a href="https://spms.com.ph/products/myray-products/extraoral/hyperion-x5-3d2d-ceph" class="nobg">

								<img src="https://spms.com.ph/assets/images/products/thumb/HyperionX5_3D2D_CEPH_33_thumb.jpg" alt="Hyperion X5 3D/2D CEPH thumbnail">
							</a>
						</div>
						<div class="entry-c">
							<div class="entry-title">
								<h4>
									<a href="https://spms.com.ph/products/myray-products/extraoral/hyperion-x5-3d2d-ceph">
										Hyperion X5 3D/2D CEPH </a>
								</h4>
							</div>
							<ul class="entry-meta">
								<li>14th Jan 2020</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<br>
		<div class="text-center">
			<a href="<?php echo base_url(); ?>products" class="button button-small button-border button-rounded">See more</a>
		</div>
	</div>
<br>

<!--============================================= -->
<!-- Resources -->
<br><br>
<div class="container">
	<div class="row pt-3">
		<div class="col">
			<h2 class="font-weight-semibold mb-0">Visit us:
				<span style="color: gray;">3/F East Wing St.Patrick's Square Bldg, 566 Shaw Blvd, Mandaluyong, 1552</span>
			</h2>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4">
			<span class="thumb-info-caption px-4 pb-3">
				<span class="thumb-info-caption-text p-xl">
					<h3>Call us today at <span style="background-color: transparent; color: black;" onmouseover="this.style.backgroundColor='white';" onmouseout="this.style.backgroundColor='transparent';">(02) 8533 8814</span> or Email us at <span style="background-color: transparent; color:black;" onmouseover="this.style.backgroundColor='white';" onmouseout="this.style.backgroundColor='transparent';">spmsphilippines@gmail.com</span></h3>
				</span>
			</span>
			</span>
			</a>
		</div>
		<div class="col-md-4">
			<span class="thumb-info-caption px-4 pb-3">
				<span class="thumb-info-caption-text p-xl">
					<h3><span style="color: black;">Enabling a successful healthcare practice through better customer solutions and employee excellence.</span>
				</span>
			</span>
			</span>
			</a>
		</div>
		<div class="col-md-4">
			<span class="thumb-info-caption px-4 pb-3">
				<span class="thumb-info-caption-text p-xl" style="margin-left: 60px;">
					<a href="<?php echo base_url(); ?>contact" class="button  button-xlarge button-border button-rounded">INQUIRE</a>
				</span>
			</span>
			</span>
			</a>
		</div>

	</div>

</div>

</section>


</div><!-- #content end -->


<a href="#" id="fixed1" data-toggle="modal" data-target="#subscribeModal" class="button button-small button-circle"><i class="icon-gift"></i> FREE gift!</a>
<div class="modal fade" id="subscribeModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-body">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="myModalLabel">Subscribe and get a gift!</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">
					<div class="form-widget">

						<div class="form-result"></div>

						<form class="nobottommargin" id="template-contactform" name="template-contactform" action="<?php echo base_url(); ?>inquiry/send_gift" method="post">

							<div class="form-process"></div>

							<div class="col_half">
								<label for="template-contactform-email-address">Email Address*</label>
								<input type="email" id="template-contactform-email-address" name="template-contactform-email-address" value="" class="sm-form-control required" />
							</div>
							<div class="col_half col_last">
								<label for="template-contactform-email-contact-number">Contact/Viber #*</label>
								<input type="text" id="template-contactform-number" name="template-contactform-number" value="" class="sm-form-control required" />
							</div>
							<div class="clear"></div>
							<div class="col_half">
								<label for="template-contactform-first-name">First Name*</label>
								<input type="text" id="template-contactform-first-name" name="template-contactform-first-name" value="" class="required sm-form-control" />
							</div>

							<div class="col_half col_last">
								<label for="template-contactform-phone">Last Name*</label>
								<input type="text" id="template-contactform-last-name" name="template-contactform-last-name" value="" class="sm-form-control required" />
							</div>
							<div class="clear"></div>
							<div class="col_full">
								<label for="template-contactform-area">Area / City*</label>
								<input list="loc" type="text" id="template-contactform-area" name="template-contactform-area" value="" class="sm-form-control required" />
								<datalist id="loc">
									<option value="Caloocan">
									<option value="Las Piñas">
									<option value="Makati ">
									<option value="Malabon">
									<option value="Mandaluyong">
									<option value="Manila">
									<option value="Marikina">
									<option value="Muntinlupa">
									<option value="Navotas">
									<option value="Parañaque">
									<option value="Pasay">
									<option value="Pasig ">
									<option value="Quezon City">
									<option value="San Juan">
									<option value="Taguig">
									<option value="Valenzuela">
									<option value="Butuan">
									<option value="Cabadbaran">
									<option value="Bayugan">
									<option value="Legazpi">
									<option value="Ligao">
									<option value="Tabaco">
									<option value="Isabela">
									<option value="Lamitan">
									<option value="Balanga">
									<option value="Batangas City">
									<option value="Lipa">
									<option value="Tanauan">
									<option value="Baguio">
									<option value="Tagbilaran">
									<option value="Malaybalay">
									<option value="Valencia">
									<option value="Malolos">
									<option value="Meycauayan">
									<option value="San Jose del Monte">
									<option value="Tuguegarao">
									<option value="Iriga">
									<option value="Naga">
									<option value="Roxas">
									<option value="Bacoor">
									<option value="Cavite City">
									<option value="Dasmariñas">
									<option value="Imus">
									<option value="Tagaytay">
									<option value="Trece Martires">
									<option value="Bogo">
									<option value="Carcar">
									<option value="Cebu City">
									<option value="Danao">
									<option value="Lapu-Lapu">
									<option value="Mandaue">
									<option value="Naga">
									<option value="Talisay">
									<option value="Toledo">
									<option value="Kidapawan">
									<option value="Panabo">
									<option value="Samal">
									<option value="Tagum">
									<option value="Davao City">
									<option value="Digos">
									<option value="Mati">
									<option value="Borongan">
									<option value="Batac">
									<option value="Laoag">
									<option value="Candon">
									<option value="Vigan">
									<option value="Iloilo City">
									<option value="Passi">
									<option value="Cauayan">
									<option value="Ilagan">
									<option value="Santiago">
									<option value="Tabuk">
									<option value="San Fernando">
									<option value="Biñan">
									<option value="Cabuyao">
									<option value="Calamba">
									<option value="San Pablo">
									<option value="Santa Rosa">
									<option value="San Pedro">
									<option value="Iligan">
									<option value="Marawi">
									<option value="Baybay">
									<option value="Ormoc">
									<option value="Tacloban">
									<option value="Cotabato City">
									<option value="Masbate City">
									<option value="Oroquieta">
									<option value="Ozamiz">
									<option value="Tangub">
									<option value="Cagayan de Oro">
									<option value="El Salvador">
									<option value="Gingoog">
									<option value="Bacolod">
									<option value="Bago">
									<option value="Cadiz">
									<option value="Escalante">
									<option value="Himamaylan">
									<option value="Kabankalan">
									<option value="La Carlota">
									<option value="Sagay">
									<option value="San Carlos">
									<option value="Silay">
									<option value="Sipalay">
									<option value="Talisay">
									<option value="Victorias">
									<option value="Bais">
									<option value="Bayawan">
									<option value="Canlaon">
									<option value="Dumaguete">
									<option value="Guihulngan">
									<option value="Tanjay">
									<option value="Cabanatuan">
									<option value="Gapan">
									<option value="Muñoz">
									<option value="Palayan">
									<option value="San Jose">
									<option value="Calapan Oriental">
									<option value="Puerto Princesa">
									<option value="Angeles">
									<option value="Mabalacat ">
									<option value="San Fernando">
									<option value="Alaminos">
									<option value="Dagupan">
									<option value="San Carlos">
									<option value="Urdaneta">
									<option value="Lucena">
									<option value="Tayabas">
									<option value="Antipolo">
									<option value="Calbayog">
									<option value="Catbalogan">
									<option value="Sorsogon City">
									<option value="General Santos">
									<option value="Koronadal">
									<option value="Maasin">
									<option value="Tacurong">
									<option value="Surigao City">
									<option value="Bislig">
									<option value="Tandag">
									<option value="Tarlac City">
									<option value="Olongapo">
									<option value="Dapitan">
									<option value="Dipolog">
									<option value="Pagadian">
									<option value="Zamboanga City">
								</datalist>
							</div>
							<div class="clear"></div>
							<div class="col_half">
								<label for="template-contactform-prc-no">PRC #*</label>
								<input type="number" id="template-contactform-prc-no" name="template-contactform-prc-no" value="" class="required sm-form-control" />
							</div>

							<div class="col_half col_last">
								<label for="template-contactform-birthday">Birthday*</label>
								<input type="date" id="template-contactform-birthday" name="template-contactform-birthday" value="<?php echo date('Y-m-d'); ?>" class="sm-form-control required" />
							</div>
							<div class="clear"></div>

							<div class="col_half">
								<label for="template-contactform-type">Are you a client or a guest?*</label>
								<select name="template-contactform-type" id="template-contactform-type" class="sm-form-control required">
									<option value="Client">Client</option>
									<option value="Guest">Guest</option>
								</select>
							</div>
							<div class="col_half col_last">
								<label for="template-contactform-know-us">How did you know about us?*</label>
								<input type="text" id="template-contactform-know-us" name="template-contactform-know-us" value="" class="sm-form-control required" />
							</div>

							<div class="clear"></div>

							<div class="col_full">
								<label for="template-contactform-package">Choose package*</label>
								<select name="template-contactform-package" id="template-contactform-package" class="sm-form-control required">
									<option>pack of 5 Hyl-it</option>
									<option>pack of 5 Chex-it</option>
									<option>pack of 5 Pov-it</option>
									<option>pack of 5 Moxident</option>
									<option>pack of 4 Microbex RS</option>
									<option>1pc Microbex SE</option>
									<option>pack of 1 each (Supreme, Implant ortho, Compact tuff, Special care, Tepe mini, ne pack assorted Interdental brush)</option>
									<option>pack of 1 each Hyl-it, Pov-it, Chex-it, Moxident, Microbex RS</option>
									<option>1000 spms gift check</option>
								</select>
							</div>
							<div class="col_full">
								<script src="https://www.google.com/recaptcha/api.js" async defer></script>
								<center>
									<div class="g-recaptcha" data-sitekey="6LcqPXAUAAAAAMradOQi7C3TOeBhNnEQG-Hrb1IF"></div>
								</center>
							</div>

							<div class="col_full hidden">
								<input type="text" id="template-contactform-botcheck" name="template-contactform-botcheck" value="" class="sm-form-control" />
							</div>

							<div class="col_full text-center">
								<button name="submit" type="submit" id="submit-button" value="Submit" class="button button-3d nomargin">Subscribe and get gift</button>
							</div>

							<input type="hidden" name="prefix" value="template-contactform-">

						</form>
					</div>
				</div>

			</div>
		</div>
	</div>
</div>


<div id="myModal" class="modal fade ">
	<div class="modal-dialog  modal-lg">
		<!-- Modal content -->
		<div class="modal-content">
			<div class="modal-header ">
				<h4 id="promoTitle" class="modal-title"></h4>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>
			<div class="modal-body center">

				<img id="promoImage" src="#" alt="Promo Image">
			</div>
		</div>
	</div>
</div>

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

<script>
	// JavaScript code to fetch and display dynamic content with image in the modal
	$(document).ready(function() {


		function fetchDynamicData() {
			$.ajax({
				url: '<?php echo base_url(); ?>promo/getPromo', // Adjust the URL based on your CodeIgniter setup
				method: 'GET',
				dataType: 'json',
				success: function(response) {
					// Display dynamic content and image in the modal
					if (response.promo_title) {
						//$('#promoTitle').text(response.promo_title);
						$('#promoImage').attr('src', response.image_url);
						$('#myModal').modal('show');
					} else {
						$('#myModal').modal('hide');
					}

				},
				error: function(xhr, status, error) {
					// Handle error by displaying an alert with the error message
					alert('Error: ' + error);
					//$('#promoImage').attr('src', '#'); // Set a default image or hide the image
				}
			});
		}
		// Call the function to fetch dynamic data when the page is ready
		fetchDynamicData();
		// Show the modal when the page is ready

	});
</script>


<script>
	function init() {
		var vidDefer = document.getElementsByTagName('iframe');
		for (var i = 0; i < vidDefer.length; i++) {
			if (vidDefer[i].getAttribute('data-src')) {
				vidDefer[i].setAttribute('src', vidDefer[i].getAttribute('data-src'));
			}
		}
	}
	window.onload = init;
</script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var words = document.querySelectorAll('.word-rotator-words b');
        var currentWord = 0;

        setInterval(function() {
            words[currentWord].style.display = 'none';
            currentWord = (currentWord + 1) % words.length;
            words[currentWord].style.display = 'inline-block';
        }, 2000); // Change every 2 seconds (2000 milliseconds)
    });
</script>