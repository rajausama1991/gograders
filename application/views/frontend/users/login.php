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
						 style="max-width: 400px; background-color: rgba(255,255,255,0.93);">
						<div class="card-body" style="padding: 40px;">
							<form id="login-form" name="login-form" class="mb-0" action="<?= base_url('check-login') ?>"
								  method="post">
								<h3 style="text-transform: uppercase">Login to your Account</h3>

								<?php if ($this->session->userdata('msg') != "") { ?>
									<h6 class="text-center"><strong
												style="color:darkred;"><?php echo $this->session->userdata('msg'); ?></strong>
									</h6>
									<?php $this->session->unset_userdata('msg');
								} ?>

								<div class="row">

									<div class="col-12 form-group">
										<label for="login-form-username">Email:</label>
										<input type="email" id="login-form-username" name="email"
											   value="<?php if (get_cookie("cookename") != '') echo get_cookie("cookename"); ?>"
											   class="form-control not-dark"/>
										<?php echo form_error('email', '<div style="margin-top:5px; font-size: 13px; margin-left:5px; color:darkred; font-weight:bold;" class="error">', '</div>'); ?>
									</div>

									<div class="col-12 form-group">
										<label for="login-form-password">Password:</label>
										<input type="password" id="login-form-password" name="password"
											   value="<?php if (get_cookie("cookepass") != '') echo get_cookie("cookepass"); ?>"
											   class="form-control not-dark"/>
										<?php echo form_error('password', '<div style="margin-top:5px; font-size: 13px; margin-left:5px; color:darkred; font-weight:bold;" class="error">', '</div>'); ?>
									</div>

									<div class="col-12 form-group">
										<span style="margin-bottom: 15px; margin-left: 2px; text-transform: uppercase;"> Keep me logged in</span>
										<input style="float: left; margin-top: 6px; text-transform: uppercase;" id="checkbox_2" type="checkbox"
											   name="remember_me"
											   value="1" <?php if (get_cookie("remeber") != '') { ?> checked="checked" <?php } ?> >

										<a style="font-weight: bolder; text-transform: uppercase;" href="<?=base_url('forgot-password')?>" class="float-end btn-forgot-pwd">Forgot Password?</a>
									</div>

									<div class="left">
										<a style="text-transform: uppercase" href="<?= base_url('sign-up') ?>">
												Sign Up</a>
									</div>


									<div  style="margin-top: 40px;" class="col-12 form-group">
										<button style="text-transform: uppercase" class="button button-3d button-black m-0" id="login-form-submit"
												name="login-form-submit" value="login">Login
										</button>
<!--										<a href="--><?//=base_url('forgot-password')?><!--" class="float-end">Forgot Password?</a>-->
									</div>
								</div>
							</form>

							<div class="line line-sm"></div>

						</div>
					</div>

					<div class="text-center dark mt-3"><small>Copyrights &copy All Rights Reserved by Tefsal.</small>
					</div>
				</div>
			</div>
		</div>

	</div>
</section>
