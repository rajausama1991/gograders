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

							<?php if ($resultUser) { ?>
								<form id="frmupdateForgotPass" name="frmupdateForgotPass" class="mb-0">

									<input type="hidden" name="token"
										   value="<?php echo encode($resultUser->user_id); ?>"
										   required>


									<h3>Reset Password</h3>

									<?php if ($this->session->userdata('msg') != "") { ?>
										<h6 class="text-center"><strong
													style="color:darkred;"><?php echo $this->session->userdata('msg'); ?></strong>
										</h6>
										<?php $this->session->unset_userdata('msg');
									} ?>

									<div class="row">

										<div style="display: none"
											 class="alert alert-danger alert-dismissible m-2 custom-alert" role="alert">

										</div>

										<div class="col-12 form-group">
											<label for="login-form-username">Password:</label>
											<input type="password" id="login-form-username" name="password"
												   placeholder="Password"
												   required autocomplete="new-password"
												   value=""
												   class="form-control not-dark"/>
											<?php echo form_error('username', '<div style="margin-top:5px; font-size: 13px; margin-left:5px; color:darkred; font-weight:bold;" class="error">', '</div>'); ?>
										</div>

										<div class="col-12 form-group">
											<label for="login-form-password">Confirm Password:</label>
											<input type="password" id="login-form-password" name="confirm_password"
												   value="" required autocomplete="new-password"
												   placeholder="Confirm Password"
												   class="form-control not-dark"/>

										</div>


										<div class="col-12 form-group">
											<!--										<button class="button button-3d button-black m-0" id="login-form-submit"-->
											<!--												name="login-form-submit" value="login">Reset-->
											<!--										</button>-->

											<input type="button" onclick="update_forgot_passwordd();"
												   class="button button-3d button-black m-0" id="login-form-submit"
												   name="login-form-submit" value="Reset">


										</div>
									</div>
								</form>
							<?php } else { ?>
								<div class="err_section">
									<h3><i class="fa fa-chain-broken fa-2x"></i></h3>
									<p>The link you have come with is maybe expired or already used. If
										not please make sure that you copied the link correctly or request another by <a
												href="<?php echo base_url("login"); ?>">
											clicking here!</a></p>
								</div>
							<?php } ?>

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
