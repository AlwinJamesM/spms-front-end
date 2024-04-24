<!-- Page Title
		============================================= -->
		<section id="page-title">
			<div class="container clearfix">
				<h1>Careers</h1>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">Home</a></li>
					<li class="breadcrumb-item active" aria-current="page">Careers</li>
				</ol>
			</div>
		</section><!-- #page-title end -->
		<!-- Content
		============================================= -->
		<section id="content">
			<div class="content-wrap">
				<div class="container clearfix">
					<div class="col_three_fifth nobottommargin">
						
						
						<div class="container clearfix">
							<div class="fancy-title title-bottom-border">
								<h4>Our <span>Employment Philosophy</span></h4>
							</div>	
							<p>
							We believe that developing people's competence is an investment that accelerates organizational growth and effectiveness. Thus, we empower and enable our employees to excel in their jobs and work with them to establish a corporate roadmap to achieve their personal aspirations and a career they will cherish. We continually seek people who can work in an environment that promotes <span style="color:#1ABC9C"><b>"Nurturing Growth Solutions"</b></span>.</br></br>We want you to be part of our team !!!
							</p>
						</div>
						<?php
						$this->db->where('ca_status','Active');
						$this->db->order_by('ca_added_date','desc');
						$jobs=$this->db->get('tbl_careers');
						if ($jobs->result() !=null){
							foreach($jobs->result() as $jr){
							?>
							<div class="divider divider-short"><i class="icon-star3"></i></div>
							<div class="fancy-title title-bottom-border">
								<h3><?php echo $jr->ca_position.' - '.date('M d, Y',strtotime($jr->ca_added_date)); ?></h3>
							</div>
							<p align="justify"><?php echo $jr->ca_short_desc; ?></p>
							<div class="accordion accordion-bg clearfix">
								<div class="acctitle"><i class="acc-closed icon-ok-circle"></i><i class="acc-open icon-remove-circle"></i>Requirements</div>
								<div class="acc_content clearfix">
									<ul class="iconlist iconlist-color nobottommargin">
									<?php $req = preg_split('/\r\n|[\r\n]/', $jr->ca_requirements); 
											foreach($req as $value)
											{
									?>
											<li><i class="icon-ok"></i><?php echo $value; ?></li>
									<?php
											}
									?>
										
									</ul>
								</div>
								<div class="acctitle"><i class="acc-closed icon-ok-circle"></i><i class="acc-open icon-remove-circle"></i>What we Expect from you?</div>
								<div class="acc_content clearfix">
									<ul class="iconlist iconlist-color nobottommargin">
										<?php $req1 = preg_split('/\r\n|[\r\n]/', $jr->ca_expectation); 
											foreach($req1 as $value1)
											{
										?>
												<li><i class="icon-plus-sign"></i><?php echo $value1; ?></li>
										<?php
												}
										?>
									</ul>
								</div>
								<div class="acctitle"><i class="acc-closed icon-ok-circle"></i><i class="acc-open icon-remove-circle"></i>What you've got?</div>
								<div class="acc_content clearfix"><?php echo $jr->ca_qualify; ?></div>
							</div>
							<a href="#" data-scrollto="#job-apply" onclick="applyJ('<?php echo $jr->ca_position; ?>');" class="button button-3d button-black nomargin">Apply Now</a>
						<?php
							}
						}
						else
						{
						?>
							<div class="acctitle"><center><h5>No job position available now.</h5></center></div>
						<?php	
						}
						?>
						
						
					</div>
					<div class="col_two_fifth nobottommargin col_last">
						<div id="job-apply" class="heading-block">
							<h2><center><font color="#639e9c">We are</font><font color="#eb5454"> Hiring!</font></center></h2>
						</div>
						<div class="form-widget">
							<div class="form-result"></div>
							<form action="<?php echo base_url(); ?>inquiry/send_application" id="template-jobform" name="template-jobform" method="post" enctype="multipart/form-data">
								<div class="form-process"></div>
								<div class="col_half">
									<label for="template-jobform-fname">First Name </label>
									<input type="text" id="template-jobform-fname" name="template-jobform-fname" value="" tabindex="1" class="sm-form-control required" />
								</div>
								<div class="col_half col_last">
									<label for="template-jobform-lname">Last Name </label>
									<input type="text" id="template-jobform-lname" name="template-jobform-lname" value="" tabindex="2" class="sm-form-control required" />
								</div>
								<div class="clear"></div>
								<div class="col_full">
									<label for="template-jobform-contact">Contact No.</label>
									<input type="text" id="template-jobform-contact" name="template-jobform-contact" value="" tabindex="3" class="required sm-form-control" />
								</div>
								<div class="col_full">
									<label for="template-jobform-email">Email</label>
									<input type="email" id="template-jobform-email" name="template-jobform-email" value="" tabindex="4" class="required email sm-form-control" />
								</div>
								<div class="col_full">
									<label for="template-jobform-birthday">Birthday </label>
									<input type="date" name="template-jobform-birthday" id="template-jobform-age" value="" size="22"  tabindex="5" class="sm-form-control required" />
								</div>
								<div class="col_full">
									<label for="template-jobform-address">Address </label>
									<input type="text" name="template-jobform-address" id="template-jobform-address" value="" size="22" tabindex="6" class="sm-form-control required" />
								</div>
								<div class="clear"></div>
								<div class="col_full">
									<label for="template-jobform-service">Position </label>
									<select name="template-jobform-position" id="template-jobform-position"  tabindex="7" class="sm-form-control required">
										<option value="">-- Select Position --</option>
										<?php
										$this->db->where('ca_status','Active');
										$job=$this->db->get('tbl_careers');
										foreach($job->result() as $j){
										?>
										<option value="<?php echo $j->ca_position; ?>"><?php echo $j->ca_position; ?></option>
										<?php										
										}
										?>
										
									</select>
								</div>
								<div class="clear"></div>
								<!--<div class="col_full">
									<label for="template-jobform-experience">Experience (optional)</label>
									<textarea name="template-jobform-experience" id="template-jobform-experience" rows="3" tabindex="8" class="sm-form-control"></textarea>
								</div>
								<div class="col_full">
									<label for="template-jobform-application">Skills</label>
									<textarea name="template-jobform-application" id="template-jobform-application" rows="6" tabindex="9" class="sm-form-control required"></textarea>
								</div>-->
								<div class="col_full">
									<label for="template-jobform-cvfile">Upload CV (PDF or DOC)</label>
									<input type="file" id="template-jobform-cvfile" name="template-jobform-cvfile" value="" class="required sm-form-control" accept="application/msword, application/pdf" />
								</div>
								<div class="col_full hidden">
									<input type="text" id="template-jobform-botcheck" name="template-jobform-botcheck" value="" class="sm-form-control" />
								</div>
								<div class="col_full">
									<script src="https://www.google.com/recaptcha/api.js" async defer></script>
									<div class="g-recaptcha" data-sitekey="6LcqPXAUAAAAAMradOQi7C3TOeBhNnEQG-Hrb1IF"></div>
								</div>
								<div class="col_full">
									<button class="button button-3d button-large btn-block nomargin" name="template-jobform-apply" type="submit" value="apply">Send Application</button>
								</div>
								<input type="hidden" name="prefix" value="template-jobform-">
							</form>
						</div>
					</div>
				</div>
				<div class="container clearfix topmargin-sm">
					
					<?php
						$this->db->where('caf_id','1');
						$footer=$this->db->get('tbl_careers_footer');
						foreach($footer->result() as $f){
							echo base64_decode($f->caf_footer);
						}
					
					?>
					
				</div>
			</div>
			<div class="content-wrap">
    <div class="row">
        <div class="featured-boxes featured-boxes-style-2">
            <div class="row">
                <div class="col-md-6 col-lg-4 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="700">
                    <div class="featured-box featured-box-effect-4">
                        <div class="box-content text-center"> <!-- Add text-center class -->
                            <i class="icon-featured icon-screen-tablet icons text-color-primary bg-color-grey"></i>
                            <h4 class="font-weight-bold">Innovative Healthcare Solutions</h4>
                            <p class="px-3">Discover how SPMS revolutionizes healthcare with cutting-edge technology and innovative solutions tailored to your needs.</p>
                        </div>
                    </div>
                </div>
                <!-- Repeat the same modification for the other featured boxes -->
                <div class="col-md-6 col-lg-4 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="800">
                    <div class="featured-box featured-box-effect-4">
                        <div class="box-content text-center"> <!-- Add text-center class -->
                            <i class="icon-featured icon-layers icons text-color-light bg-color-primary"></i>
                            <h4 class="font-weight-bold">Customer-Centric Approach</h4>
                            <p class="px-3">At SPMS, our focus is on you. Experience personalized service and dedicated support every step of the way.</p>
                        </div>
                    </div>
                </div>
                <!-- Repeat the same modification for the other featured boxes -->
                <div class="col-md-6 col-lg-4 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="900">
                    <div class="featured-box featured-box-effect-4">
                        <div class="box-content text-center"> <!-- Add text-center class -->
                            <i class="icon-featured icon-magnifier icons text-color-primary bg-color-grey"></i>
                            <h4 class="font-weight-bold">Streamlined Workflow Optimization</h4>
                            <p class="px-3">Transform your workflow efficiency with SPMS's streamlined solutions, designed to optimize your operations seamlessly.</p>
                        </div>
                    </div>
                </div>
                <!-- Repeat the same modification for the other featured boxes -->
                <div class="col-md-6 col-lg-4 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="1000">
                    <div class="featured-box featured-box-effect-4">
                        <div class="box-content text-center"> <!-- Add text-center class -->
                            <i class="icon-featured icon-screen-desktop icons text-color-light bg-color-primary"></i>
                            <h4 class="font-weight-bold"> Comprehensive Practice Management</h4>
                            <p class="px-3"> SPMS offers comprehensive practice management solutions, empowering you to take control of your healthcare organization's success.</p>
                        </div>
                    </div>
                </div>
                <!-- Repeat the same modification for the other featured boxes -->
                <div class="col-md-6 col-lg-4 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="1100">
                    <div class="featured-box featured-box-effect-4">
                        <div class="box-content text-center"> <!-- Add text-center class -->
                            <i class="icon-featured icon-doc icons text-color-primary bg-color-grey"></i>
                            <h4 class="font-weight-bold"> Advanced Medical Software</h4>
                            <p class="px-3"> Experience the power of SPMS's advanced medical software, engineered to elevate patient care and maximize productivity.</p>
                        </div>
                    </div>
                </div>
                <!-- Repeat the same modification for the other featured boxes -->
                <div class="col-md-6 col-lg-4 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="1200">
                    <div class="featured-box featured-box-effect-4">
                        <div class="box-content text-center"> <!-- Add text-center class -->
                            <i class="icon-featured icon-menu icons text-color-light bg-color-primary"></i>
                            <h4 class="font-weight-bold">Visionary Healthcare Partnerships</h4>
                            <p class="px-3">Partner with SPMS for visionary healthcare solutions that align with your organization's goals and aspirations.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- #content end -->
	<script src="<?php echo base_url(); ?>assets/home/js/functions.js"></script>
	<script src="<?php echo base_url(); ?>assets/admin/global_assets/js/plugins/forms/validation/validate.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/admin/global_assets/js/plugins/extensions/jquery_ui/interactions.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/admin/global_assets/js/plugins/forms/selects/select2.min.js"></script>	
	<script>
		function applyJ(position){
			$('#template-jobform-position').val(position);
			$('#template-jobform-fname').focus();
			
			
		}
	</script>