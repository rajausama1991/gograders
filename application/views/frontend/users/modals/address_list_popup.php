<div id="myModal" class="modal fade bs-example-modal-lg-address-list" tabindex="-1" role="dialog"
	 aria-labelledby="myLargeModalLabel"
	 aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="myModalLabel">Address</h4>
				<button type="button" class="btn-close btn-sm" data-bs-dismiss="modal" aria-hidden="true"></button>
			</div>
			<div class="modal-body">



				<?php
				$have_addresses = $user_addresses->num_rows();
				if($have_addresses !=0){
					?>

					<div class="row col-md-12">


						<div class="col-md-6 address-append-row">

							<h4>Address List</h4>


							<?php $count=1;
							foreach ($user_addresses->result() as $user_address) { ?>

								<div class="list-group ">

									<label class="list-group-item mb-0 nott fw-normal ls0 text-size-sm font-body">
										<label><?=$user_address->title?></label> <br>
										<input onclick="return makeVisible();" style="display: inline-block;" class="form-check-input me-1" type="radio" name="address_<?=$count?>" value="" aria-label="...">
										<?= $user_address->block . ', ' . $user_address->street . ' ' . $user_address->apartment . ', ' . $user_address->building . ', ' . $user_address->state ?>

										| <a style="background-color: #444 !important;" class="button button-3d button-mini button-rounded button-red address-del" href="<?= base_url('delete-address/') ?><?= $user_address->address_id ?>">Delete</a>
									</label>


								</div>


							<?php } ?>
							<a style="display: none;" href="#" class="button bg-dark text-white button-dark brand-color btn-save-visible">Save</a>
							<a onclick="addNewAddress();" type="button"
							   class="button bg-dark text-white button-dark brand-color">
								Add Address
							</a>

						</div>

					</div>

				<?php }?>

				<!--				Address List End-->


			</div>



		</div>
		<!--		modal content end up-->
	</div>
</div>
