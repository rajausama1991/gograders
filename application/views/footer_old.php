


<!--Footer Section Starts-->
<section id="footer" class="footer wow pulse">
	<div class="container">
		<div class="footer-area">
			<div class="row footer_contacticon">
				<div class="availability">
					<div class="col-md-12">
						<div class="row">
							<div class="col-md-4">
								<div class="available-content">
									<h3>
										We are available 24/7.
									</h3>
									<p>
									Get started right now to hire one of the most qualified experts in the
										academic arena!
									</p>
								</div>
							</div>
							<!--end col-->
							<div class="col-md-8">
								<div class="help-form">
									<div class="cta_cmn_btn btn_footer ">
										<ul class="availability-cta">
											<li>
												<a href="<?=base_url('calculate-price')?>"	class="dodgerbluesmall orderbtn bgslateblue white available_btn">
													<span>Order Now</span>
													<img class="navi_icon" src="<?= asset_url() ?>front/images/ordernow.png" alt="Login icon">
												</a>
											</li>
											<li>
									
								</li>
								<li>
									<a href="tel:+61280113862" class="call-cta">
										<img src="<?= asset_url() ?>front/images/aus2.png" alt="icon">
										<p>
											<span class="darkgray_clr text-semibold">Call us at</span>
											<span class="white second text-semibold">
												 +61 2 8011 3862											</span>
										</p>
									</a>
								</li>
								
								
								
										</ul>
									</div>
								</div>
							</div>
							<!--end icon-->
						</div>
					</div>
				</div>
			</div>

			<div class="row text-left text-xs-center">				
				<div class="col-xs-12 col-sm-4 order-md-1 order-0">
					<h5>why us?</h5>
					<p>
					We craft the perfect tailor-made research quality for your research that will be curated by our panel of expert composers to ensure optimum quality is shown in your presentation.
					</p>				
				</div>
				<!-- Inner Pages Footer Navigation Starts -->
								<!-- Home + All Service & Lead Pages Footer Navigation Starts -->
				<div class="col-xs-12 col-sm-2 middle_links order-1">
					<h5>Quick links</h5>
					<ul class="list-unstyled middle_quick_links">
						<li><a href="#top">Home</a></li>
						<li><a href="#benefits">Benefits</a></li>
						<li><a href="#comparison">Comparison</a></li>
						<li><a href="#ourprocess">Process</a></li>
					</ul>
				</div>
				<div class="col-xs-12 col-sm-2 middle_links order-1">
					<h5>&nbsp;</h5>
					<ul class="list-unstyled middle_quick_links minus_marg">
						<li><a href="#benefits">Features </a></li>
						<li><a href="#testimonials">Testimonials</a></li>
						<li><a href="services-policy">Service Policy</a></li>
						<li><a href="privacy-policy">Privacy Policy</a></li>
						<!--<li><a href="term-and-conditions">Terms and Conditions</a></li>-->
					</ul>
				</div>
				<!--/- Home + All Service & Lead Pages Footer Navigation Ends -->
								<div class="col-sm-1 order-3"></div>
				<div class="col-xs-12 col-sm-3 order-3">
					<h5>Tell us about your work</h5>
					<ul class="list-unstyled right_quick_links">
					
						<li>
							<i class="fa fa-phone-alt spin"></i>
							<a class="phone" href="tel:+61280113862">+61 2 8011 3862</a>
							
						</li>
					
						
					</ul>
					<h5>Payment options</h5>
					<ul class="list-unstyled right_quick_links">
						<li>
							<img data-src="<?= asset_url() ?>front/images/payment-seals.png" src="<?= asset_url() ?>front/images/payment-seals.png" alt="payment logos"
								class="lazyload img-responsive" />
						</li>
					</ul>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12 disclaimer">
					<p>
						Our Literary creative work assistance and services are strictly for research purposes and personal understanding
					</p>
				</div>
			</div>
		</div>
	</div>
</section>
<!--  Footer Copyright-->
<div class="copyright_footer">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 text-center">
				<p>Copyright &copy;
					<a href="<?= base_url() ?>"
						<span class="year" id="year">
							<script>
								document.getElementById("year").innerHTML = new Date().getFullYear();

							</script>
						</span>  paperly.net
					</a>
				</p>
			</div>

		</div>
	</div>
</div>
<!--/- Footer/- section Ends -->
<!--/- Footer/- section Ends -->

<!-- Discount modal -->
<div id="discountmodal" class="modal discountmodal" tabindex="1" role="dialog" aria-labelledby="discountmodal"
	aria-hidden="true">
	<div class="underlay"></div>
	<!-- dialog -->
	<div class="modal-dialog ">
		<!--Modal content -->
		<div class="modal-content dodgerblue">
			<a class="btn-close pull-right hide_discountmodal">X</a>
			<!-- Modal close button -->
			<!--Modal body -->
			<div class="modal-body text-center">
				<h1>Hold on… Save BIG with <span>50% DISCOUNT</span></h1>
				<p>
				Get started right now to avail our 50% Discount Offer. This offer is available for a limited number of customers.
				</p>
				<a class="modal_dimiss hide_discountmodal">Hurry up, last 5 discount promos left!</a>
				<div class="discount_button">
					<a href="<?=base_url('calculate-price')?>" class="hide_discountmodal">COUNT ME IN
						FOR 50% OFF</a>
				</div>
				<p class="valid">Discount Offer Expires In</p>
				<div class="counter" id="timer">
					<ul>
						<!--<li><span id="days"></span>Days</li>-->
						<li><span class="hours" id="hours"></span>Hour</li>
						<li><span class="minutes" id="minutes"></span>Mins</li>
						<li><span class="seconds" id="seconds"></span>Secs</li>
					</ul>
					<p>Join hundreds of students who use our services to achieve academic success.</p>
				</div>
				<div class="row row-eq-height seals_wrap">
					<div class="col-md-4">
						<div class="popup_reviews">
							<div class="review_logo review_logo1"></div>
							<div class="star_rating">
								<h1>&nbsp;
									<span class="stars-active" style="width: 100%">
										<img src="<?= asset_url() ?>front/images/star-4.7.png" class="img-fluid" alt="star-4.7">
									</span>
								</h1>
								<h2>
									<span class="rating">Good</span>
									<span class="vl"></span>
									<span class="text-right">Trust Score&nbsp;<b>4.7</b>
									</span>
								</h2>
							</div>
						</div>
					</div>
					<div class="col-md-4 bdr_0">
						<div class="popup_reviews">
							<div class="review_logo review_logo2"></div>
							<div class="star_rating">
								<h1>&nbsp;
									<span class="stars-active" style="width: 100%">
										<img src="<?= asset_url() ?>front/<?= asset_url() ?>front/images/star-4.8.png" class="img-fluid" alt="star-4.9">
									</span>
								</h1>
								<h2>
									<span class="rating">Excellent</span>
									<span class="vl"></span>
									<span class="text-right">Trust Score&nbsp;<b>4.9</b>
									</span>
								</h2>
							</div>
						</div>
					</div>
					<div class="col-md-4 bdr_0">
						<div class="popup_reviews">
							<div class="review_logo review_logo3"></div>
							<div class="star_rating">
								<h1>&nbsp;
									<span class="stars-active" style="width: 100%">
										<img src="<?= asset_url() ?>front/<?= asset_url() ?>front/images/star-4.8.png" class="img-fluid" alt="star-4.7">
									</span>
								</h1>
								<h2>
									<span class="rating">Excellent</span>
									<span class="vl"></span>
									<span class="text-right">Trust Score&nbsp;<b>4.7</b>
									</span>
								</h2>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--Modal body -->
		</div>
		<!-- Modal content -->
	</div>
	<!--Discount modal dialog -->
</div>
<!---/- Discount modal -->