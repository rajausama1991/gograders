<style>
	.heading-block::after {
		display: none;
	}


</style>
<!--<section id="page-title">-->
<!---->
<!--	<div class="container clearfix">-->
<!--		<h1>--><? //= $page_name; ?><!--</h1>-->
<!--		<ol class="breadcrumb">-->
<!--			<li class="breadcrumb-item"><a href="--><? //= base_url(); ?><!--">Home</a></li>-->
<!--			<li class="breadcrumb-item active" aria-current="page">--><? //= $page_name; ?><!--</li>-->
<!--		</ol>-->
<!--	</div>-->
<!---->
<!--</section>-->
<section id="slider" class="slider-element min-vh-100 include-header" style="background-color: #444; padding: 4rem 0;">
	<div class="slider-inner meas-detail-sl">

		<div class="row justify-content-center align-items-center h-100">

			<div class="col-lg-7 col-sm-7 col-10">

				<div class="center mb-5 dark">
					<h1 class="fw-bold display-4"><?= $page_name; ?></h1>
				</div>

				<div class="form-widgetr" data-loader="button" data-alert-type="inline">

					<form name="myDetailsForm" id="myDetailsForm">

						<div class="row form-section px-4 py-5 bg-white rounded shadow-lg">


							<div class="col-12 form-group">
								<div id="msg_succsess" style="display: none" class="style-msg successmsg">
									<div class="sb-msg center"><i class="icon-thumbs-up"></i><strong>Success!</strong>
										Successfully Updated!
									</div>
								</div>

								<div id="errormsg" style="display: none" class="style-msg errormsg">
									<div class="sb-msg center"><i class="icon-remove"></i><strong>Error!</strong>
										Something Went Wrong, not updated.
									</div>
								</div>
							</div>

							<div class="col-6 form-group">
								<label>Name:</label>
								<input style="background-color: transparent;" readonly type="text"
									   name="landing-enquiry-name" id="landing-enquiry-name"
									   class="form-control form-control-lg required"
									   value="<?php echo $this->session->userdata('username') ?>" placeholder="Name">
							</div>
							<div class="col-6 form-group">
								<label>Age:</label>
								<input type="tel" name="age" id="landing-enquiry-phone"
									   class="form-control form-control-lg required"
									   value="<?php if (isset($personal_details->age) and $personal_details->age != '') {
										   echo $personal_details->age;
									   } ?>" placeholder="25">
							</div>

							<!--									SELECT CATEGORY-->
							<?php
							$cat_id = '';

							$has_value = $check_existance->num_rows();
							if($has_value == 0){
							?>


							<div class="col-12 form-group">

							<label style="float: left;"
								   for="template-contactform-name">Select
								Category </label>
							<select class="form-select cat_select">
								<option value="" selected>Select Category</option>
								<?php foreach ($categories->result() as $category) { ?>

									<option value="<?= $category->cat_id ?>"><?= $category->cat_name ?></option>

								<?php } ?>

							</select>
							</div>
							<?php }?>

							<!--									END SELECT CATEGORY-->


							<?php $count = 0;
							$tmp_order_id = '';

							foreach ($measure_detail as $detail) {
								if ($count == 0) {
									$tmp_order_id = $detail->tmp_order_id;
									$cat_id = $detail->cat_id;
								}
								?>


								<div class="col-12 form-group">
									<label><?= $detail->meas_name_eng ?>:</label>
									<input type="text" name="measurement_feild[<?= $detail->measurementId ?>]"
										   id="landing-enquiry-waist" class="form-control form-control-lg required"
										   value="<?= $detail->meas_value ?>"
										   placeholder="<?= $detail->meas_name_eng ?>">
								</div>


								<?php $count++;
							}

							?>

							<input type="hidden" name="cat_id" id="landing-enquiry-waist"
								   class="form-control form-control-lg required category_id" value="<?= $cat_id ?>">
							<input type="hidden" name="tmp_order_id" id="landing-enquiry-waist"
								   class="form-control form-control-lg required"
								   value="<?= $tmp_order_id ?>">


							<div class="col-12">
								<button style="float: right" type="button" onclick="update_details();"
										name="landing-enquiry-submit"
										class="button button-3d button-small button-rounded button-green">Save
								</button>
							</div>

							<input type="hidden" name="prefix" value="landing-enquiry-">
						</div>

					</form>
				</div>


			</div>
		</div>

	</div>
</section>
