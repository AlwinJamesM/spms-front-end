<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>About Us</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        /* Custom styles for the "Learn more about our process" section */
        .process-section {
            background-color: #f8f9fa; /* Light gray background */
            padding: 80px 0; /* Adjust as needed */
        }

        .process-section h2 {
            color: #333; /* Dark text color */
            font-size: 36px; /* Larger font size */
            margin-bottom: 30px; /* Spacing below the heading */
        }

        .process-section p {
            color: #666; /* Medium gray text color */
            font-size: 18px; /* Normal font size */
        }

        .process-step {
            margin-bottom: 40px; /* Spacing between process steps */
        }

        .process-step h4 {
            color: #333; /* Dark text color */
            font-size: 24px; /* Larger font size */
            margin-bottom: 15px; /* Spacing below the heading */
        }

        .process-step p {
            color: #666; /* Medium gray text color */
            font-size: 16px; /* Normal font size */
        }
    </style>
</head>
<body>

<!-- Page Title -->
<section id="page-title">
    <div class="container clearfix">
        <h1>About Us</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">About Us</li>
        </ol>
    </div>
</section><!-- #page-title end -->

<!-- Content -->
<section id="content">
    <div class="content-wrap">
        <div class="container clearfix notopmargin">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <?php echo base64_decode($content); ?>
                </div>
            </div>
        </div>
    </div>
</section><!-- #content end -->

<!-- Counters -->
<section class="section section-primary border-0 mb-0 appear-animation" data-appear-animation="fadeIn" data-plugin-options="{'accY': -150}">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="row">
                    <div class="col-md-3 col-sm-6 mb-4">
                        <div class="counter text-center">
                            <i class="icons icon-user text-color-light"></i>
                            <strong class="text-color-light font-weight-bold d-block mt-2" data-to="45000" data-append="+">45000</strong>
                            <label class="text-4 text-color-light">Happy Clients</label>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 mb-4">
                        <div class="counter text-center">
                            <i class="icons icon-briefcase text-color-light"></i><!-- Corrected icon class -->
                            <strong class="text-color-light font-weight-bold d-block mt-2" data-to="15">30</strong>
                            <label class="text-4 text-color-light">Years In Business</label>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 mb-4">
                        <div class="counter text-center">
                            <i class="icons icon-graph text-color-light"></i>
                            <strong class="text-color-light font-weight-bold d-block mt-2" data-to="178">100%</strong>
                            <label class="text-4 text-color-light">High Score</label>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 mb-4">
                        <div class="counter text-center">
                            <i class="icons icon-cup text-color-light"></i>
                            <strong class="text-color-light font-weight-bold d-block mt-2" data-to="352">1000</strong>
                            <label class="text-4 text-color-light">Cups of Coffee</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- Counters end -->

<section class="process-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <h2 class="font-weight-bold mb-4">Discover Our Process</h2>
                <p class="lead mb-5">Explore how we transform ideas into groundbreaking healthcare solutions at St. Patrick's Medical Systems Inc. Our transparent process ensures innovation every step of the way.</p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-4 process-step">
                <div class="circular-bar mb-4">
                    <div class="meeting"></div>
                </div>
                <h4 class="font-weight-bold">Meeting</h4>
                <p>Collaboration starts here. Our team listens closely to your needs, ensuring our healthcare solutions align perfectly with your goals and objectives.</p>
            </div>
            <div class="col-md-4 process-step">
                <div class="circular-bar mb-4">
                    <div class="Execute"></div>
                </div>
                <h4 class="font-weight-bold">Execute</h4>
                <p>With a solid plan in place, we put our expertise to work. Every detail is meticulously executed, ensuring seamless integration and optimal performance of our healthcare technology.</p>
            </div>
            <div class="col-md-4 process-step">
                <div class="circular-bar mb-4">
                    <div class="Delivery"></div>
                </div>
                <h4 class="font-weight-bold">Delivery</h4>
                <p>Our commitment to excellence doesn't end with development. We deliver our solutions promptly and efficiently, empowering you to make an immediate impact on patient care.</p>
            </div>
        </div>
    </div>
</section>

<!-- Include Bootstrap JS (optional) -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
