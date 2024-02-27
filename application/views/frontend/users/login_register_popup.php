<div class="tabs mx-auto mb-0 clearfix ui-tabs ui-corner-all ui-widget ui-widget-content" id="tab-login-register"
	 style="max-width: 500px;">

	<ul style="margin-left: 40px;"
		class="tab-nav tab-nav2 center clearfix ui-tabs-nav ui-corner-all ui-helper-reset ui-helper-clearfix ui-widget-header"
		role="tablist">
		<li class="inline-block ui-tabs-tab ui-corner-top ui-state-default ui-tab ui-tabs-active ui-state-active"
			role="tab" tabindex="0" aria-controls="tab-login" aria-labelledby="ui-id-1" aria-selected="true"
			aria-expanded="true"><a href="#tab-login" role="presentation" tabindex="-1" class="ui-tabs-anchor"
									id="ui-id-1">Login</a></li>
		<li class="inline-block ui-tabs-tab ui-corner-top ui-state-default ui-tab" role="tab" tabindex="-1"
			aria-controls="tab-register" aria-labelledby="ui-id-2" aria-selected="false" aria-expanded="false"><a
					href="#tab-register" role="presentation" tabindex="-1" class="ui-tabs-anchor"
					id="ui-id-2">Register</a></li>
	</ul>

	<div class="tab-container">

		<div class="tab-content ui-tabs-panel ui-corner-bottom ui-widget-content" id="tab-login"
			 aria-labelledby="ui-id-1" role="tabpanel" aria-hidden="false" style="">
			<div class="card mb-0">
				<div class="card-body" style="padding: 40px;">
					<form id="formLoginModal">
						<h3 style="text-transform: uppercase;">Login to your Account</h3>

						<div style="display: none"
							 class="alert alert-danger alert-dismissible m-2 custom-alert"
							 role="alert"></div>


						<!--						process-->

						<div class="form-process frm-procls">
<!--							<div class="css3-spinner">-->
<!--								<div class="css3-spinner-scaler"></div>-->
<!--							</div>-->
<!--							<div class="lds-dual-ring offset-5"></div>-->
							<div class="offset-4" style="margin-top: 165px;">
							<img style="max-width: 45% !important;" src="<?= asset_url() ?>/front/images/load.gif"
								 alt="Image">
								</div>
						</div>


						<!--						end-->
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
								<span style="margin-bottom: 15px; margin-left: 7px; text-transform: uppercase;"> Keep me logged in</span>
								<input style="float: left; margin-top: 6px;" id="checkbox_2" type="checkbox"
									   name="remember_me"
									   value="1" <?php if (get_cookie("remeber") != '') { ?> checked="checked" <?php } ?> >

							</div>


							<div style="margin-top: 40px;" class="col-12 form-group">
								<!--								<button class="button button-3d button-black m-0" id="login-form-submit"-->
								<!--										name="login-form-submit" value="login">Login-->
								<!--								</button>-->

								<input style="text-transform: uppercase;" type="button" onclick="loginByModal();"
									   class="button button-3d button-black m-0" id="login-form-submit"
									   name="login-form-submit" value="Login">

							</div>
						</div>
					</form>

				</div>
			</div>
		</div>

		<div class="tab-content ui-tabs-panel ui-corner-bottom ui-widget-content" id="tab-register"
			 aria-labelledby="ui-id-2" role="tabpanel" aria-hidden="true" style="display: none;">
			<div class="card mb-0">
				<div class="card-body" style="padding: 40px;">


					<form id="formSignupModal">
						<h3 style="text-transform: uppercase;">SignUp to your Account</h3>

						<div style="display: none"
							 class="alert alert-danger alert-dismissible m-2 custom-alert"
							 role="alert"></div>


						<!--						process-->

						<div class="form-process frm-procls">
<!--							<div class="css3-spinner">-->
<!--								<div class="css3-spinner-scaler"></div>-->
<!--							</div>-->
<!--							<div class="lds-dual-ring offset-5"></div>-->
							<div class="offset-4" style="margin-top: 165px;">
								<img style="max-width: 45% !important;" src="<?= asset_url() ?>/front/images/load.gif"
									 alt="Image">
							</div>
						</div>

						<!--						end-->

						<div class="row">

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

							<div style="margin-top: 40px;" class="col-12 form-group">


								<input style="text-transform: uppercase;" type="button" onclick="signUpByModal();"
									   class="button button-3d button-black m-0" id="login-form-submit"
									   name="login-form-submit" value="SignUp Now">

							</div>
						</div>
					</form>


				</div>
			</div>
		</div>

	</div>

</div>
