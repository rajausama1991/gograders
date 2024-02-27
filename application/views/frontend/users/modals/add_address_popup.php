<div id="myModal" class="modal fade bs-example-modal-lg-address" tabindex="-1" role="dialog"
	 aria-labelledby="myLargeModalLabel"
	 aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="myModalLabel">Address</h4>
				<button type="button" class="btn-close btn-sm" data-bs-dismiss="modal" aria-hidden="true"></button>
			</div>
			<div class="modal-body">

				<div style="display: none"
					 class="alert alert-danger alert-dismissible m-2 address-alert"
					 role="alert"></div>


				<form id="frmAddNewAddress" name="frmAddNewAddress">
					<div  class="row">

						<div class="col-md-12 mb-3">
							<input type="text" required="" class="form-control" placeholder="Title" name="title">
						</div>

						<div class="col-md-12 mb-3">
							<select name="state" required="" class="form-control">
								<option value="">Select City</option>
								<?php foreach ($states->result() as $state) { ?>
									<option value="<?= $state->name ?>"><?= $state->name ?></option>
								<?php } ?>

							</select>
						</div>
						<div class="col-md-12 mb-3">
							<input type="text" required="" class="form-control" placeholder="Block"
								   name="block">
						</div>
						<div class="col-md-12 mb-3 ">
							<input type="text" required="" class="form-control" placeholder="Street"
								   name="street">
						</div>
						<div class="col-md-12 mb-3 ">
							<input type="text" required="" class="form-control"
								   placeholder="Area" name="area">
						</div>
						<div class="col-md-12  mb-3">
							<input type="text" required="" class="form-control"
								   placeholder="Apartment" name="apartment">
						</div>

						<div class="col-md-12  mb-3">
							<input type="text" required="" class="form-control"
								   placeholder="House" name="building">
						</div>
						<div class="col-lg-12">
							<div class="profile-user-buttons" style="margin-top: 20px;">
								<button onclick="addNewAddress();" type="button"
										class="button bg-dark text-white button-dark brand-color">
									Add Address
								</button>
							</div>
						</div>
					</div>
				</form>

			</div>



		</div>
		<!--		modal content end up-->
	</div>
</div>
