<section id="content">
	<div class="content-wrap py-0">

		<div class="section p-0 m-0 h-100 position-absolute" style="background: url('<?= asset_url() ?>front/images/login/bg2.jpg') center center no-repeat; background-size: cover; -webkit-filter: blur(3px);"></div>

		<div class="section bg-transparent min-vh-100 p-0 m-0">
			<div class="vertical-middle">
				<div class="container-fluid py-5 mx-auto">
					<div class="text-center">
						<?php if ($this->session->flashdata('success')) { ?>
							<div class="text-success"><?php echo $this->session->flashdata('success'); ?></div>
						<?php } else if ($this->session->flashdata('error')) {  ?>
							<div class="text-danger"><?php echo $this->session->flashdata('error'); ?></div>
						<?php } ?>
					</div>

					<div class="card mx-auto rounded-0 border-0" style="max-width: 400px; background-color: rgba(255,255,255,0.93);">
						<div class="card-body" style="padding: 40px;">
							<form id="frmsendForgotPass" name="frmsendForgotPass" class="mb-0" method="post">
								<h3>Recover Password</h3>


								<div class="row">

									<div style="display: none" class="alert alert-danger alert-dismissible m-2 custom-alert" role="alert"></div>

									<div class="col-12 form-group">
										<label for="login-form-username">Email:</label>
										<input type="email" id="login-form-username" name="reset_email" value="" class="form-control not-dark" />
										<?php echo form_error('reset_email'); ?>
									</div>


									<div class="left">
										<h5 style="margin-bottom: 15px;"><a href="<?= base_url('login') ?>">Login</a>
										</h5>
									</div>


									<div class="col-12 form-group">
										<input type="submit" class="button button-3d button-black m-0" id="login-form-submit" name="login-form-submit" value="Reset">


									</div>
								</div>
							</form>

							<div class="line line-sm"></div>

						</div>
					</div>

					<div class="text-center dark mt-3"><small>Copyrights &copy All Rights Reserved by Paperly.</small>
					</div>
				</div>
			</div>
		</div>

	</div>
</section>