<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="St. Patrick's Medical Systems, Inc." />
    <!-- Your Stylesheets, Scripts & Title
    ============================================= -->
	<title>St. Patrick's Medical Systems Inc. (Dental Supplies) | <?php echo $title; ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<!--[if lt IE 9]>
		<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
	<![endif]-->
    <link rel="icon" href="<?php echo base_url(); ?>assets/favicon.png" type="image/png" sizes="16x16">	
	<link rel="apple-touch-icon" href="favicon.png">
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url(); ?>assets/favicon.png">
	<link rel="apple-touch-icon" sizes="120x120" href="<?php echo base_url(); ?>assets/favicon.png">
	<link rel="apple-touch-icon" sizes="152x152" href="<?php echo base_url(); ?>assets/favicon.png">
	
	<script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Organization",
      "url": "<?php echo base_url(); ?>",
      "logo": "<?php echo base_url(); ?>assets/home/images/logo.png"
    }
    </script>
	<script type="application/ld+json">
	{
	  "@context" : "http://schema.org",
	  "@type" : "LocalBusiness",
	  "name" : "St. Patrick's Medidcal Systems, Inc.",
	  "logo": "<?php echo base_url(); ?>assets/home/images/logo.png",
	  "image" : "<?php echo base_url(); ?>assets/home/images/logo.png",
	  "priceRange" : "300 PHP - 1,000,000 PHP",
	  "telephone" : "8533-8817",
	  "email" : "spmsphilippines@gmail.com",
	  "address" : {
		"@type" : "PostalAddress",
		"streetAddress" : "3rd Floor, St. Patrick's Square, 566 Shaw Boulevard",
		"addressLocality" : "Mandaluyong City",
		"addressRegion" : "Metro Manila",
		"addressCountry" : "Philippines",
		"postalCode" : "1552"
	  },
	  "url" : "<?php echo base_url(); ?>",
	  "sameAs": [
		"https://facebook.com/spmsofficialpage",
		"https://www.instagram.com/spmsofficial"
	  ]
	}
	</script>
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="norton-safeweb-site-verification" content="542qcc0ca96ig0qqh241uqpzob5t2n2un79mha56zec7313n51bxtdgpevs25drr0qq90v83wtehnd4-7fnic1e5df2dlbg-rrtetn3n3r1naivzav8p9o-nbbco0e7q" />
	<meta name="theme-color" content="#009688"/>
	<meta property="og:url" content="<?php echo current_url(); ?>"> 
	<meta property="og:site_name" content="St. Patrick's Medical Systems Inc"> 
	<meta property="og:title" content="<?php echo $title; ?>"> 
	<?php if($title=="Home"){ ?>
	<meta property="og:description" content="St. Patrick's Medical Systems Inc. (SPMS) address the medical and dental equipment needs of healthcare professionals by providing them with reliable, high quality products and services."> 
	
	<meta name="description" content=" St. Patrick's Medical Systems Inc. (SPMS) address the medical and dental equipment needs of healthcare professionals by providing them with reliable, high quality products and services. ">  
	<link rel="canonical" href="https://spms.com.ph" />
	
	<meta property="og:image" content="<?php echo base_url(); ?>assets/og-img.jpg">  
	<?php }else if($title=="About Us"){ ?>
	<meta property="og:description" content="St.Patrick's Medical Systems (SPMS) was established in November 1989 as a division of St. Patrick's Clinic and Laboratory, the pioneer in Healthcare Maintenance Organizations in the Philippines."> 
	
	<meta name="description" content="St.Patrick's Medical Systems (SPMS) was established in November 1989 as a division of St. Patrick's Clinic and Laboratory, the pioneer in Healthcare Maintenance Organizations in the Philippines.">  
	
	<meta property="og:image" content="<?php echo base_url(); ?>assets/og-img.jpg">  
	<link rel="canonical" href="<?php echo current_url(); ?>" />
	<style>
		@font-face {
			font-family: "Roboto";
			src: url("<?php echo base_url(); ?>assets/home/fonts/Roboto/Roboto-Regular.ttf");
		}

	</style>
	<?php }else if($title=="Installation"){ ?>
	<meta property="og:description" content="Add Installation"> 
	<meta name="description" content="Add Installation">  
	<link rel="canonical" href="<?php echo current_url(); ?>" />
	<?php }else if($title=="Company Policies"){ ?>
	<meta property="og:description" content="Company Policies"> 
	<meta name="description" content="Company Policies">  
	<link rel="canonical" href="<?php echo current_url(); ?>" />
	<?php }else if($title=="Products"){ ?>
	<meta property="og:description" content="St.Patrick's Medical Systems (SPMS) offer different types of products that will surely provide solutions for every healthcare and dental offices."> 
	
	<meta property="og:image" content="<?php echo base_url(); ?>assets/og-img.jpg">  
	<meta name="description" content="St.Patrick's Medical Systems (SPMS) offer different types of products that will surely provide solutions for every healthcare and dental offices.">  
	<link rel="canonical" href="<?php echo current_url(); ?>" />
	<?php }else if($title=="Blogs"){ ?>
	<meta property="og:description" content="Content and article pertaining to dental matters."> 
	
	<meta name="description" content="Content and article pertaining to dental matters.">  
	<link rel="canonical" href="<?php echo current_url(); ?>" />
	<style>
		@font-face {
			font-family: "Roboto";
			src: url("<?php echo base_url(); ?>assets/home/fonts/Roboto/Roboto-Regular.ttf");
		}

	</style>
	<?php }else if($title=="Careers"){ ?>
	<meta property="og:description" content="Looking for an exciting job that will fit to your qualifications? Apply now!"> 
	
	<meta property="og:image" content="<?php echo base_url(); ?>assets/og-img.jpg">  
	<meta name="description" content="Looking for an exciting job that will fit to your qualifications? Apply now!">  
	<link rel="canonical" href="<?php echo current_url(); ?>" />
	<?php }else if($title=="Contact Us"){ ?>
	<meta property="og:description" content="Send us a message! You can contact us here and we will gladly reply!"> 
	
	<meta name="description" content="Send us a message! You can contact us here and we will gladly reply!">  
	<link rel="canonical" href="<?php echo current_url(); ?>" />
	<?php }else{ ?>
	<meta property="og:image" content="<?php echo $ogimg; ?>" />
	<meta property="og:description" content="<?php echo $metadesc; ?>"> 
	<?php echo $structureddata; ?>
	<meta name="description" content='<?php echo $metadesc; ?>'>  
	<link rel="canonical" href="<?php echo current_url(); ?>" />
	<style>
		@font-face {
			font-family: "Roboto";
			src: url("<?php echo base_url(); ?>assets/home/fonts/Roboto/Roboto-Regular.ttf");
		}

	</style>
	<?php } ?>
	
	<link href="<?php echo base_url(); ?>	https://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
	
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/home/css/bootstrap.css" type="text/css" />
	
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/home/css/font-icons.css" type="text/css" />
	<?php if($title=="Shop"){
	?>	
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/home/style-import-shop.css" type="text/css" />	
	<?php	
	}else{
	?>
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/home/style-home.css" type="text/css" />
	<?php
	} ?>
	<!-- External JavaScripts
	============================================= -->
	<script src="<?php echo base_url(); ?>assets/home/js/jquery.js"></script>
	<script src="<?php echo base_url(); ?>assets/home/js/plugins.js"></script>
	<style>
	.content-wrap{padding-top:20px; padding-bottom:40px;}
	#page-title{
	padding: 20px;
	}

	.heading-block:after {
		width: 100%; 
	}
	.team-title h4{
		text-transform: none;
		text-align: center;
	}
	#fixed1 {
		position: fixed;
		cursor:pointer;
	  z-index:1000;
		bottom: 12%;
		right: 0px; 
	}
	
	
	.hide-robot{
		display:none;
	}

	#logo {
    background-image: url(http://localhost/spms/porto/assets/img/admin_logo.png);
    background-repeat: no-repeat;
    background-position: left;
    background-size: contain; /* Adjust the size value as needed */
    height: 60px; /* Set a height for the logo container */
    width: 100px; /* Set a width for the logo container */
}
</style>
	<noscript id="deferred-styles">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/home/dark.css" type="text/css">
	<!--<link rel="stylesheet" href="<?php echo base_url(); ?>assets/home/css/custom.css" type="text/css">-->
	
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/home/css/responsive.css" type="text/css" />
	
    </noscript>
    <script>
      var loadDeferredStyles = function() {
        var addStylesNode = document.getElementById("deferred-styles");
        var replacement = document.createElement("div");
        replacement.innerHTML = addStylesNode.textContent;
        document.body.appendChild(replacement)
        addStylesNode.parentElement.removeChild(addStylesNode);
      };
      var raf = requestAnimationFrame || mozRequestAnimationFrame ||
          webkitRequestAnimationFrame || msRequestAnimationFrame;
      if (raf) raf(function() { window.setTimeout(loadDeferredStyles, 0); });
      else window.addEventListener('load', loadDeferredStyles);
    </script>
	
	
	<?php if($title=="Checkout"){ ?>
	
	<?php } ?>
	
</head>
<body class="no-transition stretched device-xl">
 
    <!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">
		
		<!-- Header
		============================================= -->
		<header id="header" style="background-color: #c0FFFF; padding: 0; height: 60px;">

			<div id="header-wrap" style="height: 60px;">

				<div class="container clearfix">

					<div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

					<!-- Logo
					============================================= -->
					<div id="logo" style=" margin: 0 auto; display: block;">
						<!--<a href="<?php echo base_url(); ?>" class="standard-logo" data-sticky-logo="<?php echo base_url(); ?>assets/home/images/logo.png" data-mobile-logo="<?php echo base_url(); ?>assets/home/images/logo.png"><img src="<?php echo base_url(); ?>assets/home/images/logo.png" alt="SPMS Logo"></a>-->
					</div><!-- #logo end -->

					<!-- Primary Navigation
					============================================= -->
					<nav id="primary-menu">

						<ul>
						<li <?php if ($title=="Home"){echo 'class="current"'; } ?> ><a href="<?php echo base_url(); ?>index.php/" style="padding: 20px;">HOME</a></li>
		
							</li>
							<li <?php if ($title=="About Us"){echo 'class="current"'; } ?> ><a href="<?php echo base_url(); ?>index.php/about/" style="padding: 20px;"><div>ABOUT US</div></a>
								
							</li>
							
							
							<li <?php if ($title=="Products"){echo 'class="current"'; } ?>><a href="<?php echo base_url(); ?>index.php/products/" style="padding: 20px;"><div>PRODUCTS</div></a>
								<ul>
									<?php 
									$this->db->where('p_cat_status','Active');
									$query=$this->db->get('tbl_prod_category'); 
									foreach($query->result() as $row){
									?>
									<li><a href="<?php echo base_url(); ?>index.php/products/<?php echo $row->p_slug; ?>"><div><?php echo $row->p_cat_name; ?></div></a>
										<?php $this->db->where('p_s_parent_cat',$row->p_cat_id); 
											$this->db->where('p_s_cat_status','Active');
											  $query1=$this->db->get('tbl_prod_sub_category');
											  if($query1->result() != null){  
										?>
											<ul>
										<?php foreach($query1->result() as $row1){ ?>
											<li><a href="<?php echo base_url(); ?>index.php/products/<?php echo $row->p_slug; ?>/<?php echo $row1->p_s_slug; ?>"><div><?php echo $row1->p_s_cat_name; ?></div></a></li>
										<?php	
										} ?>
											</ul>
										<?php  } ?>
									</li>
									<?php
									}
									?>
									
								</ul>
							</li>
							<li <?php if ($title=="Blogs"){echo 'class="current"'; } ?>><a href="<?php echo base_url(); ?>index.php/blog/" style="padding: 20px;"><div>BLOGS</div></a>
							</li>
							<li <?php if ($title=="Careers"){echo 'class="current"'; } ?>><a href="<?php echo base_url(); ?>index.php/careers/" style="padding: 20px;"><div>CAREERS</div></a>
							</li>
							<li <?php if ($title=="Contact Us"){echo 'class="current"'; } ?>><a href="<?php echo base_url(); ?>index.php/contact/" style="padding: 20px;"><div>CONTACT US</div></a>
							</li>
							<!--<li ><a href="<?php echo base_url(); ?>shop"><div>SHOP</div></a>
							</li>-->
							
							<!--<li><a href="<?php echo base_url(); ?>login"><div>LOGIN</div></a>
							</li>-->
						</ul>
						
						<!-- Top Cart
						============================================= <?php //echo base_url(); ?>shop/cart-->
						
						<div id="top-cart">
						<?php if($this->session->user_id!=null){ ?>
						<a id="top-cart-trigger" href="#" ><i class="icon-shopping-cart"></i><span id="carticon">0</span></a>
							<div  id="top-cart-content" class="top-cart-content">
								<div class="top-cart-title">
									<h4>Shopping Cart</h4>
								</div>
								<div class="top-cart-items">
								<?php
								$this->db->where('cart_user_id',$this->session->user_id);
								$this->db->order_by('cart_id','desc');
								$query=$this->db->get('tbl_cart');
								$totalq=0;
								foreach($query->result() as $row){
									
									$imgdis='<img width="64" height="64" src="'.base_url().'assets/images/default/defaultx54.jpg"> ';
								   $this->db->where('items_item_id',$row->cart_item_id);
								   $this->db->where('items_main_img',"Yes");
								   $query1=$this->db->get('tbl_items_img');
								   foreach($query1->result() as $r1){
									 $imgdis='<img width="64" height="64" src="'.base_url().'assets/images/shop/thumb/'.$r1->items_img_raw.'_thumb'.$r1->items_img_ext.'"> ';   
								   }
								?>
									<div class="top-cart-item clearfix">
										<div class="top-cart-item-image">
											<a href="#"><? echo $imgdis; ?></a>
										</div>
										<div class="top-cart-item-desc">
											<a href="#"><?php echo $row->cart_item_name; ?></a>
											<span class="top-cart-item-price">&#8369; <?php echo $row->cart_item_price; ?></span>
											<span class="top-cart-item-quantity">x <?php echo $row->cart_item_quantity; ?></span>
										</div>
									</div>
								<?php 
									$totalq=$totalq+(($row->cart_item_price)*($row->cart_item_quantity));
								} ?>
									
								</div>
								<div class="top-cart-action clearfix">
									<span class="fleft top-checkout-price">&#8369; <?php echo $totalq; ?></span>
									<button onclick="location.href = '<?php echo base_url(); ?>shop/cart';" class="button button-3d button-small nomargin fright">View Cart</button>
								</div>
							</div>	
							<?php } ?>
						</div>
						<!-- Top Search
						============================================= -->
						<div id="top-search" style="margin: 20px;">
							<a href="#" id="top-search-trigger"><i class="icon-search3"></i><i class="icon-line-cross"  style="margin-bottom: 10px;"></i></a>
							<form action="<?php echo base_url(); ?>search/" method="get">
								<input type="text" name="q" class="form-control" value="" placeholder="Type &amp; Hit Enter..">
							</form>
						</div><!-- #top-search end -->

					</nav><!-- #primary-menu end -->

				</div>

			</div>

		</header><!-- #header end -->
		

		