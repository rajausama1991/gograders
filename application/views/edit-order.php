<style>
	.mobile-detail {

		font-weight: bold;

		color: #ac2544;

		text-transform: capitalize;

		font-size: 10px;

	}



	@media only screen and (max-width: 768px) {

		#please-fill {

			display: block !important;

			background: transparent !important;

		}





	}
</style>

<!--Ticker-->

<script type="text/javascript">
	function wc_track() {

		var el = document.getElementById('formProceed');

		el.classList.add('page1', 'page2', 'page3');

		var btn1 = document.querySelector("#formProceed > div.order-form.step-one-content > div.ord-cont > div:nth-child(8) > div > a");

		btn1.classList.add("btn1");

		var btn2 = document.querySelector("#formProceed > div.order-form.step-two-content > div:nth-child(2) > div > a.yellow-btn");

		btn2.classList.add("btn2");

		var btn3 = document.querySelector("#proceed-checkout");

		btn3.classList.add("btn3");

	}

	setTimeout(function() {

		wc_track();

	}, 2000);
</script>



<div class="header" id="myHeader">



	<div class="ticker">



		<aside class="d-playbox">



			<!-- DEMO begin -->

			<div class="d-demo-wrap">



				<!-- Plugin HTML begin -->

				<div class="container">



					<div class="js-conveyor-1">

						<ul>

							<li>

								<span id="marquee">Avail Additional 10% Discount On Next Step.</span>

							</li>

						</ul>

					</div>



				</div>

				<!-- Plugin HTML end -->



			</div>

			<!-- DEMO end -->



		</aside>



	</div>



</div>



<!--Ticker-->



<div class="container-fluid main-bg-2">

	<div id="please-fill" style="background:transparent !important; display: nonee;" class="red-hd">

		<p style="font-size: 20px" class="mobile-detail">Please fill in the details below to calculate your discounted price</p>

	</div>



	<div class="container">



		<div class="row container-div df">



			<div id="divId" class="col-md-7 ord-cont-2 top-div">



				<div class="">

					<span class="step price-calculation active">

						<div class="heading">Price Calculation <span>1</span></div>



					</span>

					<span class="step order-details">

						<div class="heading">Order Details <span>2</span></div>



					</span>

					<span class="step review-info">

						<div class="heading">Review Info <span>3</span></div>



					</span>

				</div>



				<form name="formProceed" id="formProceed" action="<?= base_url() ?>proceed_to_pay" method="post" class="require-validation" data-cc-on-file="false" data-stripe-publishable-key="<?php echo $this->config->item('stripe_key') ?>" id="payment-form" enctype="multipart/form-data">



					<!-- Process 1 -->

					<div class="order-form step-one-content">



						<!-- <form id="regForm" action="/action_page.php"> -->



						<!-- One "tab" for each step in the form: -->



						<div class="ord-cont">



							<div class="row">



								<div class="col-md-12">



									<div class="blue-hd">Calculate Your Price</div>



								</div>



							</div>



							<!-- <div class="row">



			<div class="col-md-12">



			  <div class="red-hd">All Users will get 50% discount on all orders</div>



			</div>



		  </div> -->



							<div class="row">

								<div class="col-md-12">

									<div class="form-group">

										<label class="control-label">Phone:</label>

										<input onKeyPress="if(this.value.length==10) return false;" value="<?= $order->user_phone ?>" name="phone" onchange="saveData();" id="phone" type="number" class="form-control">

										<!--<input onKeyPress="if(this.value.length==10) return false;" value="" name="phone" onchange="saveData();" id="phone" type="number" class="form-control">-->

										<span id="valid-msg" class="hide">Valid</span>

										<span id="error-msg" class="hide">Invalid number</span>

									</div>

									<p style="color:red;" id="phone-message"></p>

								</div>

							</div>



							<div class="row">

								<div class="col-md-12">

									<div class="form-group">

										<label class="control-label">Type Of Document:</label>

										<select name="documentType" id="documentType" class="select-css-2" onchange="saveData();">

											<option value="">Select Document Type</option>

											<?php foreach ($type_of_documents as $type_of_document) { ?>

												<?php foreach ($type_of_documents as $type_of_document) {

												?>
													<option value="<?= $type_of_document->name ?>" <?php if (isset($order->document_type) && ($type_of_document->name == $order->document_type)) {
																										echo 'selected="selected"';
																									} else {
																										echo '';
																									} ?>><?= $type_of_document->name ?></option>
												<?php } ?>



											<?php } ?>



										</select>



										<p style="color:red;" id="doc-type-message"></p>

									</div>

								</div>

							</div>

							<div class="row">

								<div class="col-md-12" id="otherdocumentType" style="display: none;">

									<div class="form-group">

										<label class="control-label">Other Document Type:</label>

										<input type="text" class="form-control" id="otherdocumentType1" placeholder="Other Document Type" name="otherdocumentType" />

									</div>

								</div>

							</div>

							<input value="" type="hidden" id="finger-print" />

							<div class="row">

								<div class="col-md-12">

									<div class="form-group">

										<?php
										$isCheckedHighSchool = '';
										$isCheckedCollege = '';
										$isCheckedMasters = '';
										$isCheckedDoctorial = '';

										if (isset($order->academic_level)) {
											if ($order->academic_level == "High School")
												$isCheckedHighSchool = 'checked';

											if ($order->academic_level == "College-undergraduate")
												$isCheckedCollege = 'checked';

											if ($order->academic_level == "Masters")
												$isCheckedMasters = 'checked';

											if ($order->academic_level == "PHD")
												$isCheckedDoctorial = 'checked';
										}
										?>

										<label for="password" class="col-form-label text-md-right">Academic Level<?= $isCheckedMasters ?></label>

										<div class="radio-group aa">
											<input <?= $isCheckedHighSchool ?> onchange="saveData();" type="radio" value="High School" class="high-school" id="1" name="academic_level"><label id="lbl-high-school" for="1">High School</label><input <?= $isCheckedCollege ?> onchange="saveData();" type="radio" value="College-undergraduate" class="college-undergraduate" id="2" name="academic_level"><label for="2">College-undergraduate</label><input <?= $isCheckedMasters ?> onchange="saveData();" type="radio" value="Masters" class="masters" id="3" name="academic_level"><label for="3">Masters</label><input <?= $isCheckedDoctorial ?> onchange="saveData();" type="radio" value="PHD" class="doctoral" id="4" name="academic_level"><label for="4">Doctoral</label>
										</div>

									</div>

									<p style="color:red;" id="academic-message"></p>

								</div>

							</div>

							<div class="row">

								<div class="col-md-8">

									<div class="inp-2">

										<label class="control-label">Deadline Date:</label>

										<input min="<?= date('Y-m-d'); ?>" value="<?php if (isset($order->due_date)) {

																						echo $order->due_date;
																					} else {

																						echo '';
																					} ?>" onchange="saveData();" type="date" class="form-control" id="DeadlineDate" placeholder="Select Deadline" name="DeadlineDate">

									</div>

									<p style="color:red;" id="deadline-message"></p>

								</div>

								<div class="col-md-4 deadline-pad">

									<div class="form-group">

										<span class="afTimeOrder">

											<select onchange="saveData();" name="hours" id="hours" class="select-css-2">

											<?php
                                                    if (!empty($hours)) {
                                                        foreach ($hours as $key) {
                                                    ?>

                                                         <option value="<?= $key->name ?>" <?= (($key->name == $order->lead_due_time) ? 'selected' : '') ?>><?= $key->name ?></option>

                                                 <?php
                                                        }
                                                    }
                                                    ?>



											</select>

										</span>

									</div>

									<p style="color:red;" id="hours-message"></p>

								</div>

							</div>

							<div class="row">

								<div class="col-md-12">

									<div class="form-group">



										<label class="control-label">No. of Pages:</label>

										<select name="pages" id="pages" onchange="saveData();" class="select-css-2">

											<option value="">Select No. of Pages</option>

											<?php
											if (!empty($no_of_pages)) {
												foreach ($no_of_pages as $key) {
											?>
													<option value="<?= $key->id ?>" <?= (($key->id == $order->no_of_pages) ? 'selected' : '') ?>><?= $key->name ?></option>

											<?php

												}
											}
											?>

										</select>



									</div>

									<p style="color:red;" id="pages-message"></p>

								</div>

							</div>



							<div style="overflow:auto; margin-left:18px; margin-right:18px;">

								<div>



									<a href="javascript:void();" onclick="steps('btn-step-one');" class="yellow-btn">Add 10% Extra Discount</a>



								</div>

							</div>



						</div>



						<div class="row">



							<div class="col-md-12">



								<div class="pkg-thumb">

									<img src="<?= asset_url() ?>portal/images/coupon-locked.webp" alt="Avatar" class="image">

									<div class="overlay">

										<div class="text"><span class="title-big">Avail Additional Discount in Next Step</span></div>

									</div>

								</div>



							</div>



						</div>



						<div class="mt-1"></div>



						<!-- </form> -->



					</div>

					<!-- Process 2 -->

					<div style="display: none;" class="order-form step-two-content">



						<!-- <form id="regForm" action="/action_page.php"> -->



						<!-- One "tab" for each step in the form: -->



						<!-- Tab -->

						<div class="">

							<div class="">



								<div class="ord-cont">



									<div class="row">



										<div class="col-md-12">



											<img src="<?= asset_url() ?>portal/images/coupon-unlocked.webp" class="img-responsive" /><br />



										</div>



									</div>



									<div class="row">

										<div class="col-md-12">

											<div class="form-group inp">

												<label class="control-label">Name:</label>

												<input value="<?= $order->user_name ?>" onchange="saveData();" type="text" class="form-control" id="name" name="name">

											</div>

											<p style="color:red;" id="name-message"></p>

										</div>

									</div>



									<div class="row">

										<div class="col-md-12">

											<div class="form-group inp">

												<label class="control-label">Email:</label>

												<input disabled onchange="saveData();" type="email" value="<?= $order->user_email ?>" class="form-control" id="email" name="email">

											</div>

											<p style="color:red;" id="email-message"></p>

										</div>

									</div>



									



								</div>



								<div class="ord-cont">

									<div class="row">



										<div class="col-md-12">



											<div class="blue-hd">Enter Order Details</div>



										</div>



									</div>

									<div class="row">

										<div class="col-md-12">

											<div class="form-group">

												<label class="control-label">Subject:</label>

												<select onchange="saveData();" name="project_subject" class="select-css-2" id="projectsubject">

													<option value="">Select Subject</option>

													<?php
													if (!empty($subjects)) {
														foreach ($subjects as $subject) {
													?>

															<option value="<?= $subject->name ?>" <?= (($subject->name == $order->subject) ? 'selected' : '') ?>><?= $subject->name ?></option>

													<?php
														}
													}
													?>

												</select>

											</div>

											<p style="color:red;" id="project-subject-message"></p>

										</div>

									</div>



									<div class="row">

										<div class="col-md-12" id="" style="display: none;">

											<div class="form-group">

												<label class="control-label">Other Subject: </label>

												<input type="text" class="form-control" id="" placeholder="Other Document Type" name="otherdocumentType" />

											</div>

										</div>

									</div>



									<div class="row">

										<div class="col-md-12" style="display: none;">

											<div class="form-group">

												<label class="control-label">Other Subject:</label>

												<input type="text" class="form-control" id="otherSubject" placeholder="Other Subject" name="otherSubject">

											</div>

											<p style="color:red;" id="other-subject-message"></p>

										</div>

									</div>

									<div class="row">

										<div class="col-md-12">

											<div class="form-group inp">

												<label class="control-label">Topic:</label>

												<input onchange="saveData();" value="<?= $order->title ?>" type="text" class="form-control" id="topic" placeholder="Topic" name="topic">

											</div>

											<p style="color:red;" id="topic-message"></p>

										</div>

									</div>



									<div class="row">

										<div class="col-md-12">

											<div class="form-group inp">

												<label class="control-label">Number of sources/references:</label>

												<input value="<?= $order->name_of_sources ?>" onchange="saveData();" name="NumberSources" type="text" class="form-control" id="NumberSources" placeholder="Number of sources/references" name="NumberSources">

											</div>

											<p style="color:red;" id="number-sources-message"></p>

										</div>

									</div>

									<div class="row">

										<?php

										$isSelectedAMA = '';
										$isSelectedAPA = '';
										$isSelectedAMS = '';
										$isSelectedChicago = '';
										$isSelectedMLA = '';
										$isSelectedTurbian = '';
										$isSelectedHarvard = '';
										$isSelectedIEEE = '';
										$isSelectedOther = '';

										if (isset($order->citation_style)) {
											if ($order->citation_style == 'AMA')
												$isSelectedAMA = 'selected';

											if ($order->citation_style == 'APA')
												$isSelectedAPA = 'selected';

											if ($order->citation_style == 'AMS')
												$isSelectedAMS = 'selected';

											if ($order->citation_style == 'Chicago')
												$isSelectedChicago = 'selected';

											if ($order->citation_style == 'MLA')
												$isSelectedMLA = 'selected';

											if ($order->citation_style == 'Turbian')
												$isSelectedTurbian = 'selected';

											if ($order->citation_style == 'Harvard')
												$isSelectedHarvard = 'selected';

											if ($order->citation_style == 'IEEE')
												$isSelectedIEEE = 'selected';

											if ($order->citation_style == 'Other')
												$isSelectedOther = 'selected';
										}



										?>

										<div class="col-md-12">

											<div class="form-group">

												<label class="control-label">Citation Style:</label>

												<select onchange="saveData();" name="citation_style" class="select-css-2" id="otherCitationstyle">

													<option value="">Select Citation Style</option>

													<option <?= $isSelectedAMA ?> value="AMA">AMA</option>

													<option <?= $isSelectedAPA ?> value="APA">APA</option>

													<option <?= $isSelectedAMS ?> value="AMS">AMS</option>

													<option <?= $isSelectedChicago ?> value="Chicago">Chicago</option>

													<option <?= $isSelectedMLA ?> value="MLA">MLA</option>

													<option <?= $isSelectedTurbian ?> value="Turbian">Turbian</option>

													<option <?= $isSelectedHarvard ?> value="Harvard">Harvard</option>

													<option <?= $isSelectedIEEE ?> value="IEEE">IEEE</option>

													<option <?= $isSelectedOther ?> value="Other">Other</option>

												</select>

											</div>

											<p style="color:red;" id="citation-message"></p>

										</div>

									</div>

									<div class="row">

										<div class="col-md-12" id="otherCitation" style="display: none;">

											<div class="form-group">

												<label class="control-label">Other Citation:</label>

												<input type="text" class="form-control" id="otherCitation" placeholder="Other Citation" name="otherCitation">

											</div>

											<p style="color:red;" id="other-citation-message"></p>

										</div>

									</div>

									<div class="row">

										<div class="col-md-12">

											<div class="form-group inp">

												<label class="control-label">Description:</label>

												<textarea onchange="saveData();" name="description" id="description" class="form-control" rows="4" cols="50" name="comment"><?= $order->description ?></textarea>

											</div>

											<p style="color:red;" id="description-message"></p>

										</div>

									</div>

									<div class="row">

										<div class="col-md-12">

											<div class="form-group">

												<label class="control-label">Attach file (optional):</label>

												<input type="file" name="files[]" class="form-group" id="attach" multiple>

											</div>

										</div>

									</div>



								</div>



							</div>

						</div>



						<div style="overflow:auto; margin-left:18px; margin-right:18px;">

							<div>



								<a href="javascript:void();" onclick="stepsBack('order-details');" class="prev-btn">Previous</a>



								<a href="javascript:void();" onclick="steps('btn-step-two');" class="yellow-btn">Review and Checkout</a>



							</div>



						</div>



						<div class="mt-1"></div>



						<!-- </form> -->



					</div>



					<!-- end -->

					<!-- Process 3 -->



					<div style="display: none;" class="order-form step-three-content">



						<!-- <form id="regForm" action="/action_page.php"> -->



						<div class="">



							<div class="">



								<div class="row">



									<div class="col-md-12 thanks-txt">



										<div class="col-md-2 ticker-2"><img src="<?= asset_url() ?>portal/images/thanks-ticker.webp" class="img-responsive" /></div>



										<div class="col-md-10">

											<div class="thx-big-txt center">Thank you for choosing us!!</div>

											<div class="thx-small-txt center">Your order will be processed immediately after the conﬁrmation of your payment via our payment processor (Stripe)</div>

										</div>



									</div>



								</div>



								<div class="row">



									<div class="col-md-12">



										<div class="main-tab">



											<div class="sd-panel-3">



												<div class="col-md-6">Price: <span id="rev-price">$200.00</span></div>



												<div class="col-md-6 txt-r">Order ID: <span id="rev-order_id">ERP12345</span></div>



												<div class="clearfix"></div>



											</div>



											<div class="title-big"><span>PaperTitle: </span> <span id="rev-paper_title">Title Goes Here</span></div>



											<div class="row">



												<div class="col-md-6">



													<div class="summ-grey-box">



														<div class="summary-label">Email</div>



														<div class="summary-val"><span id="rev-email">customer@mail.com</span></div>



													</div>



												</div>



												<div class="col-md-6">



													<div class="summ-grey-box">



														<div class="summary-label">Contact</div>



														<div class="summary-val"><span id="rev-phone">+380 122222222</span> </div>



													</div>



												</div>



											</div>



											<input type="hidden" value="<?= $order->quoted_price ?>" name="total_price" id="o-price" />

											<input type="hidden" name="finger-print" id="finger-print" />

											<input type="hidden" name="total" id="totalp" />

											<input type="hidden" name="is_full_pay" id="is_full_pay" value="1" />

											<input type="hidden" value="" id="country-cd" name="country_code" />





											<input type="hidden" id="inputlead" value="<?= $order->lead_id ?>" name="lead_id">

											<input type="hidden" name="fullprice" class="auto-save" id="fullprice">

											<input type="hidden" name="order_status" class="auto-save" id="order-status">

											<input type="hidden" class="order_id" name="order_id" id="order_id" value="0">

											<input type="hidden" name="actual" id="actual" value="">

											<input type="hidden" name="actual-empty" id="actual-empty" value="">

											<input type="hidden" name="discounted-price" id="discounted-price" value="">

											<input type="hidden" name="checkStep" id="check-step" value="">

											<input type="hidden" name="newUser" id="new-user" value="">







											<div class="row">



												<div class="col-md-12">



													<div class="summ-grey-box">



														<div class="summary-label">Subject</div>



														<div class="summary-val"><span id="rev-project_subject">Biology and Life Sciences</span></div>



													</div>



												</div>



											</div>



											<div class="row">



												<div class="col-md-6">



													<div class="summ-grey-box">



														<div class="summary-label-2">Document Type <span id="rev-document_type">Admission Essay</span></div>



														<div class="summary-label-2">No. of Pages <span id="rev-number_pages">4 Pages~ 1200 Words</span></div>



													</div>



												</div>



												<div class="col-md-6">



													<div class="summ-grey-box">



														<div class="summary-label-2">Academic Level <span id="rev-academic_level">APA</span></div>



														<div class="summary-label-2">Deadline <span id="rev-deadline">08/30/2021 </span> <span id="rev-hours">14:00 </span></div>



													</div>



												</div>



											</div>



											<div class="row">



												<!--<div class="col-md-6">-->



												<!--  <div class="summ-grey-box">-->



												<!--    <div class="summary-label-2">Subject <span id="rev-subject2">Business Management</span></div>-->



												<!--    <div class="summary-label-2">Paper Format <span id="rev-paper_format">MLA</span></div>-->



												<!--  </div>-->



												<!--</div>-->



												<div class="col-md-6">



													<div class="summ-grey-box">



														<div class="summary-label-2">Citation Style <span id="rev-citation_style">ABC</span></div>



														<div class="summary-label-2">Sources <span id="rev-sources">10</span></div>



													</div>



												</div>



											</div>



											<div class="row sm-pb">



												<div class="col-md-12">



													<div class="summary-label">Description</div>



													<div class="summary-val"><span id="rev-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ac nulla felis. Aenean placerat, sem sit amet rutrum laoreet, elit libero iaculis ipsum, eget tincidunt nibh elit non nisi.</span></div>



												</div>



											</div>



											<div class="row sm-pb">



												<div class="col-md-12">



													<div class="summary-label">Files</div>



													<div class="summary-val"><span id="rev-file">

															<ul id="ulList">

															</ul>

														</span></div>



												</div>



											</div>



										</div>



										<p class="sml-red">We are ready to start working on your paper as soon as the payment is made. We accept any major Debit/Credit cards.

											Click "Proceed to checkout" to proceed to the secure payment page. If you want to change the initial requirements for this order, press the “Edit Order Details” and indicate all the necessary changes.</p>



									</div>



								</div>



							</div>



						</div>



						<div style="overflow:auto; margin-left:18px; margin-right:18px;">

							<div>



								<a href="javascript:void();" onclick="stepsBack('review-info');" class="prev-btn">Edit Order Details</a>



								<!-- <button type="submit" class="yellow-btn">Proceed to Payment</button> -->

								<a href="javascript:;" id="proceed-checkout" onclick="steps('btn-proceed');" class="yellow-btn">Proceed to Payment</a>

							</div>



						</div>



						<div class="mt-1"></div>



						<!-- </form> -->



					</div>



				</form>



			</div>





			<div class="col-md-5 bottom-div">



				<div class="sticky">



					<div class="sep-side"></div>



					<div class="red-hd">All users will get 50% discount on all orders.



					</div>



					<div class="wht-box">



						<div class="blu-box">



							<div class="pay-now">



								<div class="col-md-12">You Pay<span class="total">$<?= $order->quoted_price ?></span></div>



							</div>



							<div class="clearfix"></div>



						</div>



						<div class="pa-1">







							<div class="row mb-2">



								<div class="col-md-12 p-2"><span class="init">Limited Time</span> <span class="disc">Discount 50% OFF</span> <span class="cut-txt">

										<div class="actual">$00.00</div>

									</span><span class="grey pull-right you-pay">$00.00</span></div>



							</div>



							<div class="row mb-2">



								<div class="col-md-12">



									<div class="aa"><span class="fa fa-clock-o"></span> <span class="expiration">Discount expires in</span></div>



									<div class="bb" id="periodic-timer_period_days"></div>



								</div>



							</div>



							<div class="row mb-2">
								<?php
								$isChecked = '';
								if ($order->payment_type == 0) {
									$isChecked = 'checked';
								}
								?>


								<div class="col-xs-1"><input <?= $isChecked ?> class="auto-save" type="checkbox" id="paymentStatus" onchange="saveData();" name="paymentStatus" value="1"></div>



								<div class="col-xs-9 fs-1">Prepay 50%</div>



							</div>



							<div class="free-fe">



								<div class="summary-head-2">Our Free Features</div>



								<div class="row mb-2">



									<div class="col-md-8">Unlimited Revisions</div>



									<div class="col-md-4 txt-r green-txt"><span class="cut-through">$08</span><span class="curved">FREE</span></div>



								</div>



								<div class="order-sep"></div>



								<div class="row mb-2">



									<div class="col-md-8">Paper Formatting</div>



									<div class="col-md-4 txt-r green-txt"><span class="cut-through">$05</span><span class="curved">FREE</span></div>



								</div>



								<div class="order-sep"></div>



								<div class="row mb-2">



									<div class="col-md-8">Referencing & Bibliography </div>



									<div class="col-md-4 txt-r green-txt"><span class="cut-through">$10</span><span class="curved">FREE</span></div>



								</div>



								<div class="order-sep"></div>



								<div class="row mb-2">



									<div class="col-md-8">Cover Page</div>



									<div class="col-md-4 txt-r green-txt"><span class="cut-through">$05</span><span class="curved">FREE</span></div>



								</div>



								<div class="order-sep"></div>



								<div class="row mb-2">



									<div class="col-md-8">24/7 Order Tracking</div>



									<div class="col-md-4 txt-r green-txt"><span class="cut-through">$05</span><span class="curved">FREE</span></div>



								</div>



								<div id="pay-only" style="display: none;">



									<div class="order-sep"></div>



									<div style="margin-top: 32px;" class="row mb-2">



										<div class="col-md-9 p-2"><span class="init">Pay Now Only</span> <span class="disc priceBoxCheck">$0</span></div>



									</div>



									<div class="order-sep"></div>



									<div style="margin-top: 32px;" class="row mb-2">



										<div class="col-md-9 p-2"><span class="init">Rest On Delivery</span> <span class="disc priceBoxCheck you-payy">$0</span></div>



									</div>

								</div>





							</div>



						</div>



					</div>



					<div class="side-payment">



						<div class="row">



							<div class="col-md-8 col-md-offset-2"><img src="<?= asset_url() ?>portal/images/payment-methods.webp" class="img-responsive" /></div>



						</div>



					</div>



				</div>



			</div>



		</div>



	</div>



</div>



<div class="bt-price">



	<div id="price" class="price hide">



		<div class="pay-now">



			<div class="col-md-12">Total<span class="total">$0</span></div>



		</div>



	</div>



</div>



<!-- Event snippet for Submit lead form conversion page -->

<script>
	gtag('event', 'conversion', {

		'send_to': 'AW-10777734605/w3YLCNjm3qwDEM3bnJMo',

		'value': 1.0,

		'currency': 'PKR'

	});
</script>