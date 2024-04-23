<head>
	<!-- Favicon -->
	<link rel="shortcut icon" href="<?php echo base_url(); ?>/spms/porto/assets/img/favicon.ico" type="image/x-icon" />
	<link rel="apple-touch-icon" href="<?php echo base_url(); ?>/spms/porto/assets/img/apple-touch-icon.png">

	<!-- Mobile Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

	<!-- Web Fonts  -->
	<link id="googleFonts" href="<?php echo base_url(); ?>https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&display=swap" rel="stylesheet" type="text/css">

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

	<!-- Demo CSS -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>/spms/porto/assets/css/demos/demo-seo-2.css">

	<!-- Skin CSS -->
	<link id="skinCSS" rel="stylesheet" href="<?php echo base_url(); ?>/spms/porto/assets/css/skins/skin-seo-2.css">

	<!-- Theme Custom CSS -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>/spms/porto/assets/css/custom.css">

	</style>
</head>
    <div role="main" class="main">

<section class="page-header page-header-modern bg-color-secondary page-header-lg mb-0 ">
    <div class="container">
        <div class="row my-4 bg-image">
            <div class="col-md-12 align-self-center text-center">
                <h1 class="text-9 text-color-light custom-secondary-font font-weight-bold my-4 " >Blog</h1>
            </div>
        </div>
    </div>
</section>



<section class="section section-no-border bg-color-light m-0">
    <?php
    if ($results != null) {
        echo '<div class="container"><div class="row blog-posts-horizontal">';
        foreach ($results as $row) {
            $date = strtotime($row->blog_added_date);
            $new_date1 = date('dS M Y', $date);
    ?>
            <div class="col-lg-4 mb-4">
                <article class="custom-post-blog">
                    <span class="thumb-info custom-thumb-info-2">
                        <span class="thumb-info-caption custom-box-shadow">
                            <span class="thumb-info-caption-text">
                                <div class="entry clearfix">

                                    <div class="entry-title">
                                        <h2><a href="<?php echo base_url() . 'blog/single/' . $row->blog_id . '/' . url_title($row->blog_title, "dash", TRUE); ?>"><?php echo $row->blog_title; ?></a></h2>
                                    </div>
                                    <ul class="entry-meta clearfix">
                                        <li><i class="icon-calendar3"></i> <?php echo $new_date1; ?></li>
                                        <li><a href="<?php echo base_url() . 'blog/single/' . $row->blog_id . '/' . url_title($row->blog_title, "dash", TRUE); ?>"><i class="icon-user"></i> <?php echo $row->blog_added_by; ?></a></li>
                                    </ul>
									<br>
                                    <div class="entry-content">
                                        <p><?php echo html_entity_decode(preg_replace('/\s+?(\S+)?$/', '', substr(strip_tags(base64_decode($row->blog_desc)), 0, 200))) . '...'; ?></p>
                                        <a href="<?php echo base_url() . 'blog/single/' . $row->blog_id . '/' . url_title($row->blog_title, "dash", TRUE); ?>" class="more-link">Read More</a>
                                    </div>
                            </span>
                        </span>
                    </span>
                </article>
            </div>
        <?php
        }
        echo '</div></div>'; // Close the row and container
    } else {
        ?>
        <h2>No posts available</h2>
    <?php
    }
    ?>

    <!-- Pagination -->
    <div class="row mb-3">
        <div class="col-12">
            <ul class="pagination" style="display: flex; justify-content: center;"><?php echo $links; ?></ul>
        </div>
    </div>
    <!-- .pager end -->

</section>
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