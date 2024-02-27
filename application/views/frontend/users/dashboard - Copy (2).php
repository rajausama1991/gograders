<style>
	.heading-block::after {
		display: none;
	}
</style>
<section id="page-title">

	<div class="container clearfix">
		<h1><?= $page_name; ?></h1>
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="<?= base_url(); ?>">Home</a></li>
			<li class="breadcrumb-item active" aria-current="page"><?= $page_name; ?></li>
		</ol>
	</div>

</section>
<section id="content">
	<div class="content-wrap">
		<div class="container clearfix">

			<div class="row gutter-40 col-mb-80">

				<!--ALERT for adding or Deleting Data-->

				<div id="main_alert" style="display: none;" class="alert alert-success m-0">
					<div class="container">
						<div class="row justify-content-between align-items-center">
							<div id="msg_alert" class="col-lg-auto">
								<!--									<strong><i class="icon-success"></i> Success!</strong> address added successfully.-->
							</div>
							<div class="col-lg-auto mt-3 mt-lg-0">
								<!--									<a href="#" class="btn btn-success">Shop Now</a>-->
								<button type="button" class="btn btn-close btn-sm float-lg-none text-dark ms-md-3"
										data-bs-dismiss="alert" aria-hidden="true"></button>
							</div>
						</div>
					</div>
				</div>

				<?php if (@$this->session->flashdata('msg_address') != "") { ?>

					<p style="text-align:center;margin:20px auto; color: green;">


					<div id="main_alert" class="alert alert-success m-0">
						<div class="container">
							<div class="row justify-content-between align-items-center">
								<div id="msg_alert" class="col-lg-auto">
									<?= $this->session->flashdata('msg_address') ?>
								</div>
								<div class="col-lg-auto mt-3 mt-lg-0">
									<!--									<a href="#" class="btn btn-success">Shop Now</a>-->
									<button type="button" class="btn btn-close btn-sm float-lg-none text-dark ms-md-3"
											data-bs-dismiss="alert" aria-hidden="true"></button>
								</div>
							</div>
						</div>
					</div>


					<?php $this->session->unset_userdata('msg_address'); ?>
				<?php } ?>

				<!--End Alert Data-->

				<div class="postcontent col-lg-12">
<!--					<img src="--><?//= asset_url() ?><!--front/images/login/avatar.jpg"-->
<!--						 class="alignleft img-circle img-thumbnail notopmargin nobottommargin" alt="Avatar"-->
<!--						 style="max-width: 84px;">-->

					<div class="heading-block mt-10 noborder">
						<h4>
							<strong>Hello, </strong> <?php echo $this->session->userdata('username'); ?></h4>
						<span><a href="<?= base_url('logout') ?>"
								 class="button bg-dark text-white button-dark brand-color">Logout</a></span>
					</div>


					<!--					<h4 style="text-align: center">-->
					<!--						<strong>Hello, </strong> -->
					<?php //echo $this->session->userdata('username'); ?><!--</h4>-->


					<div class="tabs side-tabs mb-0 clearfix ui-tabs ui-corner-all ui-widget ui-widget-content"
						 id="tab-6">

						<ul class="tab-nav tab-nav2 clearfix ui-tabs-nav ui-corner-all ui-helper-reset ui-helper-clearfix ui-widget-header dashboard-tab-nav"
							role="tablist">
							<li role="tab"
								tabindex="0"
								class="ui-tabs-tab ui-corner-top ui-state-default ui-tab ui-tabs-active ui-state-active"
								aria-controls="tabs-21" aria-labelledby="ui-id-45" aria-selected="true"
								aria-expanded="true"><a href="#tabs-21" role="presentation" tabindex="-1"
														class="ui-tabs-anchor" id="ui-id-45"><i class="icon-user"></i>
									My Profile</a></li>
							<li role="tab"
								tabindex="-1"
								class="ui-tabs-tab ui-corner-top ui-state-default ui-tab" aria-controls="tabs-22"
								aria-labelledby="ui-id-46" aria-selected="false" aria-expanded="false"><a
										href="#tabs-22" role="presentation" tabindex="-1" class="ui-tabs-anchor"
										id="ui-id-46"><i class="icon-cart"></i> My Orders</a></li>
							<li role="tab" tabindex="-1" class="ui-tabs-tab ui-corner-top ui-state-default ui-tab"
								aria-controls="tabs-23" aria-labelledby="ui-id-47" aria-selected="false"
								aria-expanded="false"><a href="#tabs-23" role="presentation" tabindex="-1"
														 class="ui-tabs-anchor" id="ui-id-47"><i class="icon-edit"></i>
									Change Password</a></li>

							<li class="hidden-phone ui-tabs-tab ui-corner-top ui-state-default ui-tab" role="tab"
								tabindex="0" aria-controls="tabs-24" aria-labelledby="ui-id-48" aria-selected="true"
								aria-expanded="true">
								<a href="#tabs-24" role="presentation" tabindex="-1" class="ui-tabs-anchor"
								   id="ui-id-48"><i class="icon-address-card"></i> My Addresses</a></li>


							<li class="hidden-phone ui-tabs-tab ui-corner-top ui-state-default ui-tab" role="tab"
								tabindex="0" aria-controls="tabs-25" aria-labelledby="ui-id-48" aria-selected="true"
								aria-expanded="true">
								<a href="#tabs-25" role="presentation" tabindex="-1" class="ui-tabs-anchor"
								   id="ui-id-48"><i class="icon-users"></i> My Dependents <span
											class="badge bg-secondary float-end"
											style="margin-top: 14px;"><?php echo $dependents->num_rows(); ?></span> </a>
							</li>

						</ul>

						<div class="tab-container">

							<div class="tab-content clearfix ui-tabs-panel ui-corner-bottom ui-widget-content"
								 id="tabs-21" aria-labelledby="ui-id-45" role="tabpanel" aria-hidden="false" style="">

								<!--								Profile Details will Appear here soon!-->

								<form action="<?= base_url('update-profile') ?>" method="post">

									<div class="row" style="margin-bottom: 20px;">
										<div style="margin-bottom: 18px;" class="col-md-3">
											<input type="text" class="form-control" placeholder="Name"
												   value="<?= $user->username ?>" name="username" required>
										</div>
										<div class="col-md-3">
											<input type="text" class="form-control" placeholder="Email"
												   value="<?= $user->email ?>" id="mail" name="email" required>
										</div>
									</div>

									<div class="row">
										<div class="col-md-3 ">
											<input type="text" class="form-control" value="<?= $user->phone ?>"
												   placeholder="Phone Number" name="phone" required>
										</div>

									</div>
									<div class="" style="margin-top: 50px;">
										<button type="submit" class="button bg-dark text-white button-dark brand-color">
											Update
										</button>
									</div>
								</form>

								<!--								end info-->


							</div>
							<div class="table-responsive m-t-40">
<!--							<div class="tab-content clearfix ui-tabs-panel ui-corner-bottom ui-widget-content"-->
<!--								 id="tabs-22" aria-labelledby="ui-id-46" role="tabpanel" aria-hidden="true"-->
<!--								 style="display: none;">-->

								<div id="tabs-22" class="table-responsive m-t-40">
								<table id="myTable" class="table table-bordered table-striped">
									<thead>
									<tr>
										<th>Order#</th>
										<th>Name</th>
										<th>Date</th>
										<th>Total Price</th>
										<th>Order Status</th>
										<th>Actions</th>
									</tr>
									</thead>
									<tbody id="orderss">

									<!--									Table will Appear Here-->


									<?php foreach ($orders->result() as $order) {

										?>
										<tr class="order-tr">

											<td><?= $order->order_id ?></td>
											<td><?= $order->name ?></td>
											<td><?= $order->order_date ?></td>
											<td><?= $order->total_price . ' KWD' ?></td>
											<td style="color: #0b2e13; font-weight: bolder">
												<?php if ($order->order_status == 0) { ?>
													<span class="btn btn-danger order-btn-dngr">
												In Process
											</span>
												<?php } else if ($order->order_status == 1) { ?>
													<span class="btn btn-success ">
												Completed
											</span>
												<?php } ?>
											</td>
											<td><a onclick="return getOrderDetails(<?= $order->order_id ?>);"
												   style="color: black; font-weight: bold;" href="javascript:void(0);"
												   data-bs-target=".bs-example-modal-lg" data-bs-toggle="modal">View
													Details</a></td>


										</tr>

									<?php } ?>

									</tbody>


								</table>

							</div>
						</div>
							<div class="tab-content clearfix ui-tabs-panel ui-corner-bottom ui-widget-content"
								 id="tabs-23" aria-labelledby="ui-id-47" role="tabpanel" aria-hidden="true"
								 style="display: none;">
								<!--								<p>You Will Change Your Password Here Soon! </p>-->

								<div class="row col-md-12">

									<form id="frmChangePassword" name="frmChangePassword"
										  action="<?= base_url('change-password') ?>" method="post">
										<div class="row">


											<div class="col-md-6 mb-3">

												<div class="input-group toggle-password">
													<input name="old_password" type="password"
														   placeholder="Enter Old Password"
														   class="form-control border-end-0" value="">
													<button class="btn btn-outline-secondary icon-line-eye btn-password-toggle"
															type="button" style="border-color: #ced4da"></button>
												</div>


											</div>

											<div class="col-md-6 mb-3 ">

												<div class="input-group toggle-password">
													<input name="new_password" type="password"
														   placeholder="Enter New Password"
														   class="form-control border-end-0" value="">
													<button class="btn btn-outline-secondary icon-line-eye btn-password-toggle"
															type="button" style="border-color: #ced4da"></button>
												</div>
											</div>

											<div class="col-lg-12">
												<div class="profile-user-buttons" style="margin-top: 20px;">
													<button type="submit"
															class="button bg-dark text-white button-dark brand-color">
														Change Password
													</button>
												</div>
											</div>
										</div>
									</form>
								</div>

							</div>
							<div class="tab-content clearfix ui-tabs-panel ui-corner-bottom ui-widget-content"
								 id="tabs-24" aria-labelledby="ui-id-48" role="tabpanel" aria-hidden="true"
								 style="display: none;">
								<!--Start form details-->

								<div class="row col-md-12">

									<form id="frmAddress" name="frmAddress">
										<div class="row">
											<div class="col-md-12 mb-3">
												<input type="text" required="" class="form-control" placeholder="Title" name="title">
											</div>

											<div class="col-md-6 mb-3">
												<select name="state" required="" class="form-control">
													<option value="">Select Area</option>
													<?php foreach ($states->result() as $state) { ?>
														<option value="<?= $state->name ?>"><?= $state->name ?></option>
													<?php } ?>

												</select>
											</div>
											<div class="col-md-6 mb-3">
												<input type="text" required="" class="form-control" placeholder="Block"
													   name="block">
											</div>
											<div class="col-md-6 mb-3 ">
												<input type="text" required="" class="form-control" placeholder="Street"
													   name="street">
											</div>
											<div class="col-md-6 mb-3 ">
												<input type="text" required="" class="form-control"
													   placeholder="House/Building" name="building">
											</div>
											<div class="col-md-6  mb-3">
												<input type="text" required="" class="form-control"
													   placeholder="Apartment" name="apartment">
											</div>
											<div class="col-lg-12">
												<div class="profile-user-buttons" style="margin-top: 20px;">
													<button onclick="submitnewsltter();" type="button"
															class="button bg-dark text-white button-dark brand-color">
														Add Address
													</button>
												</div>
											</div>
										</div>
									</form>
								</div>

								<!--Address list-->
<!--								<div class="line"></div>-->

								<?php
								$have_addresses = $user_addresses->num_rows();
								if($have_addresses !=0){
								?>

								<div class="row col-md-12">


									<div class="col-md-6">

										<h4>Address List</h4>
										<div class="list-group-item mb-0 nott fw-normal ls0 text-size-sm font-body">
										<label class="form-check-label" for="gridRadios_default">
											<input checked <?php if($have_addresses == 0){ echo "checked";}?> style="display: inline-block;" class="form-check-input me-1" type="radio"
																									  name="default" value="default">
											Default
										</label>
										</div>

									<?php $count=1;
									foreach ($user_addresses->result() as $user_address) { ?>

										<div class="list-group">

											<label class="list-group-item mb-0 nott fw-normal ls0 text-size-sm font-body">
												<label><?=$user_address->title?></label> <br>
												<input onclick="return makeVisible();" style="display: inline-block;" class="form-check-input me-1" type="radio" name="address_<?=$count?>" value="" aria-label="...">
												<?= $user_address->block . ', ' . $user_address->street . ' ' . $user_address->apartment . ', ' . $user_address->building . ', ' . $user_address->state ?>

												| <a style="background-color: #444 !important;" class="button button-3d button-mini button-rounded button-red address-del" href="<?= base_url('delete-address/') ?><?= $user_address->address_id ?>">Delete</a>
											</label>


										</div>


									<?php } ?>
										<a style="display: none;" href="#" class="button bg-dark text-white button-dark brand-color btn-save-visible">Save</a>

									</div>

								</div>

								<?php }?>
								<!--End Address list-->


								<!--end details-->
							</div>

							<!--Dependents Details here-->
							<div class="tab-content clearfix ui-tabs-panel ui-corner-bottom ui-widget-content"
								 id="tabs-25" aria-labelledby="ui-id-47" role="tabpanel" aria-hidden="true"
								 style="display: none;">
								<!--								<p>You Will Change Your Password Here Soon! </p>-->

								<div class="row col-md-12">

									<!--									<h4>Dependents List</h4>-->


									<div class="col-md-12">
										<h4>Dependents List</h4>


										<ol class="list-group list-group-numbered">
											<li class="list-group-item">


												<strong style="text-transform: uppercase"><?= $owner_name ?></strong>
												<span style=" color: darkred;">(Owner)</span>

												<a style="float: right;" class="button bg-dark text-white button-dark brand-color btn-db-view" href="javascript:void(0);" data-bs-target=".bs-example-modal-lg2" data-bs-toggle="modal">
													Add Dependent
												</a>

												<a target="_blank" style="float: right;"
												   href="<?= base_url('my-measurement-details') ?>"
												   class="button bg-dark text-white button-dark brand-color btn-db-view">View</a>

											</li>
											<?php if ($dependents->num_rows > 0) { ?>

												<?php foreach ($dependents->result() as $dependent) { ?>
													<li class="list-group-item"><?= $dependent->dependent_name ?>

														<a style="float: right;"
														   onclick="return confirm('Are you sure you want to delete?');"
														   href="<?= base_url() ?>delete-dependent/<?= $dependent->dependent_id ?>"
														   class="button bg-dark text-white button-dark brand-color btn-db-view">remove</a>


														<!--														View Button-->
														<a style="float: right;"
														   href="<?= base_url() ?>dependent-measurement-details/<?= $dependent->dependent_id ?>"
														   class="button bg-dark text-white button-dark brand-color btn-db-view">View</a>
														<!--														End View Button-->
													</li>


												<?php } ?>
											<?php } else { ?>
												<span>No dependent Available</span>
											<?php } ?>

										</ol>
									</div>
<!--									<div class="col-md-2">-->
<!--										<a style="border-radius: 14px;" id="btn-plus" class="button bg-dark text-white button-dark brand-color" href="javascript:void(0);" data-bs-target=".bs-example-modal-lg" data-bs-toggle="modal">-->
<!--											+-->
<!--										</a>-->
<!--									</div>-->

<!--									<div class="col-md-6">-->
<!--										<h4>Add New Dependent</h4>-->
<!--										<form name="addDependents" action="--><?//= base_url('add-dependent') ?><!--"-->
<!--											  method="post">-->
<!--											<div class="row">-->
<!---->
<!---->
<!--												<div class="col-md-6 mb-3">-->
<!---->
<!--													<input required="" name="dependent_name"-->
<!--														   placeholder="Dependent Name" type="text" class="form-control"-->
<!--														   >-->
<!---->
<!--												</div>-->
<!---->
<!--												<div class="col-md-6 mb-3 ">-->
<!---->
<!--													<select name="gender" id="inputState" class="form-select" required>-->
<!--														<option value="" selected="">Gender</option>-->
<!--														<option value="male">Male</option>-->
<!--														<option value="female">Female</option>-->
<!--													</select>-->
<!--												</div>-->
<!---->
<!--												<div class="col-md-6 mb-3">-->
<!---->
<!--													<input required="" name="dependent_age"-->
<!--														   placeholder="Dependent Age" type="text" class="form-control"-->
<!--														   >-->
<!---->
<!--												</div>-->
<!---->
<!--												<div class="col-md-6 mb-3">-->
<!---->
<!--													<input required="" name="dependent_relation"-->
<!--														   placeholder="Relation" type="text" class="form-control"-->
<!--														   >-->
<!---->
<!--												</div>-->
<!---->
<!---->
<!--												<div class="col-lg-12">-->
<!--													<div class="profile-user-buttons" style="margin-top: 20px;">-->
<!--														<button type="submit"-->
<!--																class="button bg-dark text-white button-dark brand-color">-->
<!--															Add New-->
<!--														</button>-->
<!--													</div>-->
<!--												</div>-->
<!--											</div>-->
<!--										</form>-->
<!--									</div>-->
								</div>

							</div>
							<!--End Dependents Details Here-->

						</div>

					</div>


<!--					<div class="line"></div>-->


				</div>


			</div>


		</div>
	</div>


	<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
		 aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="myModalLabel">Order Details</h4>
					<button type="button" class="btn-close btn-sm" data-bs-dismiss="modal" aria-hidden="true"></button>
				</div>
				<div class="modal-body">

					<div class="row">
						<div style="margin-bottom: 15px;" class="center">
							<a href="javascript:void(0);" class="standard-logo"
							   data-dark-logo="<?= asset_url() ?>front/images/logo.svg">
								<img class="order-img" style="max-width: 10%;" src="<?= asset_url() ?>front/images/logo.svg"
									 alt="Tefsal Logo"></a>
						</div>
					</div>

					<div id="bill-shipp-details" class="row">

						<!--details here for billing and shipping-->
					</div>

					<div style="margin-bottom: 0.1rem !important;" class="row mx-0 bottommargin-lg align-items-stretch">


					</div>

					<div class="row">
						<div style="margin-left: 10%;" class="col-md-9 summary-table">
							<div style="padding-bottom: 30px;" class="panel panel-default">
								<div class="panel-heading">
									<h3 class="panel-title"><strong>Summary</strong></h3>
								</div>
								<div class="panel-body">
									<div class="table-responsive">
										<table class="table table-condensed">
											<thead>
											<tr>
												<td><strong>Item Name</strong></td>
												<td class="text-right"><strong>Size</strong></td>
												<td class="text-center"><strong>Price</strong></td>
												<td class="text-center"><strong>Quantity</strong></td>
												<td class="text-right"><strong>Totals</strong></td>
											</tr>
											</thead>
											<tbody id="summary">
											<!-- foreach ($order->lineItems as $line) or some such thing here -->

											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>



<!--Modal 2 for Dependents-->
<!--Modal-->
<div id="myModal" class="modal fade bs-example-modal-lg2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
	 aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="myModalLabel">Add New Dependent</h4>
				<button type="button" class="btn-close btn-sm" data-bs-dismiss="modal" aria-hidden="true"></button>
			</div>
			<div class="modal-body">
				<div class="col-md-12">
					<div style="display: none" class="alert alert-danger alert-dismissible m-2 custom-alert" role="alert"></div>

					<h4></h4>
					<form name="addnewDependents" id="frmAddDependents" >
						<div class="row">


							<div class="col-md-12 mb-3">

								<input required="" name="dependent_name" placeholder="Name" type="text" class="form-control">

							</div>

							<div class="col-md-12 mb-3 ">

								<select name="gender" id="inputState" class="form-select" required="">
									<option value="" selected="">Gender</option>
									<option value="male">Male</option>
									<option value="female">Female</option>
								</select>
							</div>

							<div class="col-md-12 mb-3">

								<input required="" name="dependent_age" placeholder="Age" type="text" class="form-control">

							</div>

<!--							<div class="col-md-6 mb-3">-->
<!---->
<!--								<input required="" name="dependent_relation" placeholder="Relation" type="text" class="form-control">-->
<!---->
<!--							</div>-->


							<div class="col-lg-12">
								<div class="profile-user-buttons" style="margin-top: 20px;">
									<!--									<button type="submit" class="button bg-dark text-white button-dark brand-color">-->
									<!--										Add New-->
									<!--									</button>-->
									<input type="button" onclick="addNewDependent();"
										   class="button bg-dark text-white button-dark brand-color" name="login-form-submit" value="Save">
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
