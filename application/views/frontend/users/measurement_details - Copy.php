<style>
	.heading-block::after {
		display: none;
	}


</style>
<!--<section id="page-title">-->
<!---->
<!--	<div class="container clearfix">-->
<!--		<h1>--><?//= $page_name; ?><!--</h1>-->
<!--		<ol class="breadcrumb">-->
<!--			<li class="breadcrumb-item"><a href="--><?//= base_url(); ?><!--">Home</a></li>-->
<!--			<li class="breadcrumb-item active" aria-current="page">--><?//= $page_name; ?><!--</li>-->
<!--		</ol>-->
<!--	</div>-->
<!---->
<!--</section>-->
<section id="slider" class="slider-element min-vh-100 include-header" style="background-color: #444; padding: 4rem 0;">
	<div class="slider-inner">

		<div class="row justify-content-center align-items-center h-100">

			<div class="col-lg-7 col-sm-7 col-10">

				<div class="center mb-5 dark">
					<h1 class="fw-bold display-4"><?= $page_name; ?></h1>
				</div>

				<div class="form-widgetr" data-loader="button" data-alert-type="inline">

					<form action="<?=base_url('saveMy-details')?>" method="post" enctype="multipart/form-data">

						<div class="row form-section px-4 py-5 bg-white rounded shadow-lg">
							<div class="col-6 form-group">
								<label>Name:</label>
								<input style="background-color: transparent;" readonly type="text" name="landing-enquiry-name" id="landing-enquiry-name" class="form-control form-control-lg required" value="<?=$personal_details->name?>" placeholder="Name">
							</div>
							<div class="col-6 form-group">
								<label>Age:</label>
								<input type="tel" name="age" id="landing-enquiry-phone" class="form-control form-control-lg required" value="<?=$personal_details->age?>" placeholder="25" >
							</div>

							<?php foreach ($measure_detail as $detail) {?>
							<div class="col-12 form-group">
								<label><?=$detail->meas_name_eng?>:</label>
								<input type="text" name="measurement_feild[<?=$detail->meas_id?>]" id="landing-enquiry-waist" class="form-control form-control-lg required" value="<?=$detail->meas_value?>" placeholder="<?=$detail->meas_name_eng?>">
							</div>

								<input type="hidden" name="cat_id" id="landing-enquiry-waist" class="form-control form-control-lg required" value="<?=$detail->cat_id?>">
								<input type="hidden" name="tmp_order_id" id="landing-enquiry-waist" class="form-control form-control-lg required" value="<?=$detail->tmp_order_id?>">
							<?php }?>


							<div class="col-12">
								<button style="float: right" type="submit" name="landing-enquiry-submit" class="button button-3d button-small button-rounded button-green">Save</button>
							</div>

							<input type="hidden" name="prefix" value="landing-enquiry-">
						</div>

					</form>
				</div>



			</div>
		</div>

	</div>
</section>
