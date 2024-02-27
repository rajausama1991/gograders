<section id="content">
	<div class="content-wrap py-0">

		<div class="section p-0 m-0 h-100 position-absolute"
			 style="background: url('<?= asset_url() ?>front/images/login/bg2.jpg') center center no-repeat; background-size: cover; -webkit-filter: blur(3px);"></div>

		<div class="section bg-transparent min-vh-100 p-0 m-0">
			<div class="vertical-middle">
				<div class="container-fluid py-5 mx-auto">
					<!-- <div class="center">
						<a href="index.html"><img src="images/logo-dark.png" alt="Canvas Logo"></a>
					</div> -->

					<div class="card mx-auto rounded-0 border-0"
						 style="max-width: 570px; background-color: rgba(255,255,255,0.93);">
						<div class="card-body" style="padding: 40px;">
							<div class="w-100 text-center">


								<?php if ($this->session->userdata('msg_register') != "") { ?>
									<h6 class="text-center">
										<strong><?php echo $this->session->userdata('msg_register'); ?></strong></h6>
									<?php $this->session->unset_userdata('msg_register');
								} ?>


							</div>


							<form id="login-form" name="login-form" class="mb-0"
								  action="<?= base_url('create-account') ?>" method="post">
								<h3 style="text-transform: uppercase;">Sign Up to your Account</h3>

								<div class="row">

									<!--                                            <div class="col-12 form-group">-->
									<!--                                                <label for="login-form-username">Name:</label>-->
									<!--                                                <input type="text" id="login-form-username" name="name" value="-->
									<? //=set_value('name');?><!--" class="form-control not-dark" />-->
									<!--												--><?php //echo form_error('name', '<div style="margin-top:5px; font-size: 13px; margin-left:5px; color:darkred; font-weight:bold;" class="error">', '</div>'); ?>
									<!--											</div>-->


									<div class="col-12 form-group">
										<label for="login-form-username">Username:</label>
										<input type="text" id="login-form-username" name="username"
											   value="<?= set_value('username'); ?>" class="form-control not-dark"/>
										<?php echo form_error('username', '<div style="margin-top:5px; font-size: 13px; margin-left:5px; color:darkred; font-weight:bold;" class="error">', '</div>'); ?>
									</div>

									<div class="col-12 form-group">
										<label for="login-form-username">Email:</label>
										<input type="email" id="login-form-username" name="email"
											   value="<?= set_value('email'); ?>" class="form-control not-dark"/>
										<?php echo form_error('email', '<div style="margin-top:5px; font-size: 13px; margin-left:5px; color:darkred; font-weight:bold;" class="error">', '</div>'); ?>
									</div>

									<div class="col-12 form-group">
										<label for="login-form-password">Password:</label>
										<input type="password" id="login-form-password" name="password"
											   value="<?= set_value('password'); ?>" class="form-control not-dark"/>
										<?php echo form_error('password', '<div style="margin-top:5px; font-size: 13px; margin-left:5px; color:darkred; font-weight:bold;" class="error">', '</div>'); ?>
									</div>

									<div class="col-12 form-group">
										<label for="login-form-password">Confirm Password:</label>
										<input type="password" id="login-form-password" name="cpassword"
											   value="<?= set_value('cpassword'); ?>" class="form-control not-dark"/>
										<?php echo form_error('cpassword', '<div style="margin-top:5px; font-size: 13px; margin-left:5px; color:darkred; font-weight:bold;" class="error">', '</div>'); ?>
									</div>

									<div class="col-12 form-group">
										<label for="login-form-username">Phone:</label>
										<input type="text" id="login-form-username" name="phone"
											   value="<?= set_value('phone'); ?>" class="form-control not-dark"/>
										<?php echo form_error('phone', '<div style="margin-top:5px; font-size: 13px; margin-left:5px; color:darkred; font-weight:bold;" class="error">', '</div>'); ?>
									</div>

									<div class="col-12 form-group">
										<h5 style="margin-bottom: 15px; text-transform: uppercase;">
											<a href="<?= base_url('login') ?>">Already have an account?
											</a>
										</h5>
									</div>

									<div style="margin-top: 40px;" class="col-12 form-group">
										<button style="text-transform: uppercase;"
												class="button button-3d button-black m-0" id="login-form-submit"
												name="login-form-submit" value="login">Sign Up Now
										</button>
										<a style="text-transform: uppercase;" href="#" class="float-end">Forgot
											Password?</a>
									</div>
								</div>
							</form>

							<div class="line line-sm"></div>

							<!--  <div class="w-100 text-center">
								 <h4 style="margin-bottom: 15px;">or Login with:</h4>
								 <a href="#" class="button button-rounded si-facebook si-colored">Facebook</a>
								 <span class="d-none d-md-inline-block">or</span>
								 <a href="#" class="button button-rounded si-twitter si-colored">Twitter</a>
							 </div> -->
						</div>
					</div>

					<div class="text-center dark mt-3"><small>Copyrights &copy; All Rights Reserved by Tefsal.</small>
					</div>
				</div>
			</div>
		</div>

	</div>
</section>
