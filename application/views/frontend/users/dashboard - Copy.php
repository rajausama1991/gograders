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

				<div class="postcontent col-lg-12">


					<h4 style="text-align: center">
						<strong>Welcome</strong> <?php echo $this->session->userdata('username'); ?></h4>

					<div class="tabs side-tabs mb-0 clearfix ui-tabs ui-corner-all ui-widget ui-widget-content"
						 id="tab-6">

						<ul class="tab-nav tab-nav2 clearfix ui-tabs-nav ui-corner-all ui-helper-reset ui-helper-clearfix ui-widget-header"
							role="tablist">
							<li onclick="return getOrders();" role="tab"
								tabindex="0"
								class="ui-tabs-tab ui-corner-top ui-state-default ui-tab ui-tabs-active ui-state-active"
								aria-controls="tabs-21" aria-labelledby="ui-id-45" aria-selected="true"
								aria-expanded="true"><a href="#tabs-21" role="presentation" tabindex="-1"
														class="ui-tabs-anchor" id="ui-id-45"><i class="icon-user"></i>
									My Profile</a></li>
							<li onclick="return getOrders(<?= $this->session->userdata('id'); ?>);" role="tab"
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
							<li><a href="<?= base_url('logout') ?>"><i class="icon-signout"></i> Logout</a></li>
						</ul>

						<div class="tab-container">

							<div class="tab-content clearfix ui-tabs-panel ui-corner-bottom ui-widget-content"
								 id="tabs-21" aria-labelledby="ui-id-45" role="tabpanel" aria-hidden="false" style="">

								Profile Details will Appear here soon!

							</div>
							<div class="tab-content clearfix ui-tabs-panel ui-corner-bottom ui-widget-content"
								 id="tabs-22" aria-labelledby="ui-id-46" role="tabpanel" aria-hidden="true"
								 style="display: none;">
								<table class="table">
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
									<tbody id="orders">

									<!--									Table will Appear Here-->

									</tbody>


								</table>

							</div>
							<div class="tab-content clearfix ui-tabs-panel ui-corner-bottom ui-widget-content"
								 id="tabs-23" aria-labelledby="ui-id-47" role="tabpanel" aria-hidden="true"
								 style="display: none;">
								<p>You Will Change Your Password Here Soon! </p>

							</div>
							<div class="tab-content clearfix ui-tabs-panel ui-corner-bottom ui-widget-content"
								 id="tabs-24" aria-labelledby="ui-id-48" role="tabpanel" aria-hidden="true"
								 style="display: none;">
								<p>Praesent in eros vestibulum mi adipiscing adipiscing. Morbi facilisis. Curabitur
									ornare consequat nunc. Aenean vel metus. Ut posuere viverra nulla. Aliquam erat
									volutpat. Pellentesque convallis. Maecenas feugiat, tellus pellentesque pretium
									posuere, felis lorem euismod felis, eu ornare leo nisi vel felis. Mauris consectetur
									tortor et purus.</p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor, saepe, placeat iste
								distinctio ad facere libero sed tempora! Esse amet delectus debitis doloribus pariatur
								accusamus praesentium dolorem voluptatibus eveniet laboriosam.
							</div>

						</div>

					</div>


					<div class="line"></div>


				</div>


			</div>


		</div>
	</div>


	<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
		 aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="myModalLabel"></h4>
					<button type="button" class="btn-close btn-sm" data-bs-dismiss="modal" aria-hidden="true"></button>
				</div>
				<div class="modal-body">

					<div style="margin-bottom: 1rem !important;" class="row mx-0 bottommargin-lg align-items-stretch">

						<div class="col-lg-6 col-md-6"
							 style="background-color: #F5F5F5;  border-right: 1px solid #cccaca;">
							<div class="col-padding">
								<h3 class="font-body fw-normal ls1">Billing Details</h3>

								<div id="billing" style="font-size: 16px; line-height: 1.7;">
									<!--								Billing address will appear here-->
								</div>
							</div>
						</div>

						<div class="col-lg-6 col-md-6" style="background-color: #F5F5F5;">
							<div class="col-padding">
								<h3 class="font-body fw-normal ls1">Shipping Address</h3>

								<div id="shipping" style="font-size: 16px; line-height: 1.7;">

								</div>
							</div>
						</div>

					</div>

					<div class="row">
						<div class="col-md-12">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h3 class="panel-title"><strong>Order summary</strong></h3>
								</div>
								<div class="panel-body">
									<div class="table-responsive">
										<table class="table table-condensed">
											<thead>
											<tr>
												<td><strong>Item Name</strong></td>
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
