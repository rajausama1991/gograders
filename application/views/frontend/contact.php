
   <div class="share-buttons">
    <a href="https://api.whatsapp.com/send?phone=447546546381" target="_blank" class="tx_deno">
      <div class="share-button">
        <div class="share-button-secondary">
          <div class="share-button-secondary-content">
            WhatsApp Now
          </div>
        </div>
        <div class="share-button-primary">
          <i class="share-button-icon fa fa-whatsapp"></i>
        </div>
      </div>
    </a>
    <a href="javascript:void(Tawk_API.toggle())" class="tx_deno">
      <div class="share-button">
        <div class="share-button-secondary">
          <div class="share-button-secondary-content">
            Talk With Expert
          </div>
        </div>
        <div class="share-button-primary">
          <i class="share-button-icon2 fa fa-phone"></i>
        </div>
      </div>
    </a>
    <a href="javascript:void(Tawk_API.toggle())" class="tx_deno d-none d-md-block d-lg-block d-xl-block" href="#">
      <div class="share-button">
        <div class="share-button-secondary">
          <div class="share-button-secondary-content">
            Chat With Expert
          </div>
        </div>
        <div class="share-button-primary">
          <i class="share-button-icon3 fa fa-commenting-o"></i>
        </div>
      </div>
    </a>
    <a href="mailto:info@gograders.com" class="tx_deno d-none d-md-block d-lg-block d-xl-block">
      <div class="share-button cu-mt">
        <div class="share-button-secondary">
          <div class="share-button-secondary-content">
            Send an Email
          </div>
        </div>
        <div class="share-button-primary">
          <i class="share-button-icon4 fa fa-envelope"></i>
        </div>
      </div>
    </a>
    <a href="mailto:info@gograders.com" class="tx_deno d-block d-md-none d-lg-none d-xl-none">
      <div class="share-button mt-3">
        <div class="share-button-secondary">
          <div class="share-button-secondary-content">
            Send Text SMS Now
          </div>
        </div>
        <div class="share-button-primary">
          <i class="share-button-icon3 fa fa-commenting-o"></i>
        </div>
      </div>
    </a>
  </div>
    <!-- ---------------- End Navbar-------------- -->

    <!-- ------------Hero Section ----------------->

    <div class="about-hero-bg d-flex justify-content-center align-items-center py-4">

        <div class="container img-z-index">

            <div class="row">

                <div class="col-md-6 d-flex justify-content-center align-items-center ">

                    <div class="head-content-div">

                        <div class="head2 blink-soft">24/7 SUPPORT FOR ACADEMIC HELP </div>

                        <h1 class="white-main-head py-2" style="padding-right: 20px;">
                            Contact Us Today For A Free Consultation.<br> </h1>

                        <p class="text-white">Look No Further For Help With Your Studies! Our Professionals Are On-Hand 24/7 To Provide You Instant Support And Assistance. If You Need Instant Support And Any Type Of Academic Help In Your Assignments, Quizzes And Many More, Dont Worry We Are Always Available For Student Academics Help, Please Use Live Chat Option To Reach Us Quickly, Our Experts Will Reply You Soon</p>

                        <div class="text-white">

                            <div class="row align-items-center mt-3 pt-2">

                                <div class="col-md-6 col-12">

                                    <a href="https://wa.me/+447546546381" class="btn btn-purple btn-custom w-100">Chat on Whatsapp

                                        <i class="fa fa-whatsapp"></i>

                                    </a>

                                </div>

                                <div class="col-md-6 d-flex ">

                                    <img alt="image" loading="lazy" class="btn-img" src="<?= asset_url() ?>front/icons/chatexpert.png">
                                    <a href="javascript:void(Tawk_API.toggle())" class="ds_expert ">&nbsp;Discuss With Expert</a>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>


                <!-- right side  -->

               
        <!-- right side price calculator -->

        <div class="col-md-2">

        </div>
        
        <div class="col-md-4" style="position: relative;">
				
				
          <!--New Form-->
          
          <div class="form-title">
  
                      <div class="title-img"><img src="<?= asset_url() ?>front/images/disc-paperly.gif" class="img-fluid"></div>
  
                  </div>
  
                  <form method="post" name="order-formm" action="<?= base_url('calculate-price') ?>">
  
  
  
                      <input type="hidden" id="calcWebURL" value="#">
  
                      <div class="order-form">
  
              <div class="order-p">
              
                            <select class="select-css">
                              <option>Select Document Type</option>
                              <option>Admission Essay</option>
                              <option>Annotated Bibliography</option>
                              <option>Application Letter</option>
                              <option>Argumentative Essay</option>
                              <option>Article </option>
                              <option>Assignment </option>
                              <option>Biography</option>
                              <option>Book Report </option>
                              <option>Book Review </option> 
                              <option>Business Plan</option>
                              <option>Case Study </option>
                              <option>College Paper </option>
                              <option>Coursework </option>
                              <option>Cover Letter</option>
                              <option>Creative Writing</option>
                              <option>Critical Thinking</option>
                              <option>Dissertation </option>
                              <option>eBook </option>
                              <option>Essay</option>
                              <option>Homework </option>
                              <option>Lab Report </option>
                              <option>Literature Review</option>
                              <option>Movie Review </option>
                              <option>News Release </option>
                              <option>Personal Statement</option>
                              <option>Presentation</option>
                              <option>PowerPoint Presentation</option>
                              <option>Report</option>
                              <option>Research Paper </option>
                              <option>Research proposal </option>
                              <option>Scholarship Essay</option>
                              <option>School Paper </option>
                              <option>Speech </option>
                              <option>Term Paper </option>
                              <option>Thesis </option>
                              <option>Thesis Proposal</option>
                            </select>
  
                           <select class="select-css">
                              <option>Select Academic Level</option>
                              <option>High School</option>
                              <option>College</option>
                              <option>Undergraduate</option>
                              <option>Master</option>
                              <option>Ph.D.</option>
                            </select>
  
  
  
                      <div class="two_selectbox">
  
                              <div class="row">
  
  
  
                                <div class="col-md-5">
                  
                                    <input type="date" id="DeadlineDate" placeholder="Select Deadline" name="DeadlineDate" class="form-control dl" onchange="this.className=(this.value!=''?'has-value':'')">
                  
                                </div>
  
                                <div class="col-md-7">
  
                                    <div class="incdc">
  
                                        <span class="ll"><input type="button" value="-" id="subs" class="btn btn-default pull-left" disabled=""></span>
                                        <input type="text" style="text-align: center; margin: 0;" class="onlyNumber form-control pull-left" id="noOfRoom" value="" name="noOfRoom" placeholder="No. of Pages">&nbsp;
                                        <span class="rr"><input type="button" value="+" id="adds" class="btn btn-default pull-left"></span>
  
                                    </div>
  
                                </div>
  
  
  
                              </div>
  
  
  
                          </div>
  
                          <div class="cal_right_tp">
  
                              <div class="title-red">
  
                                <span class="title">Original Discount</span>
  
                                <span class="red-discount fa-pull-right">50% OFF</span>
  
                              </div>
  
                              <div class="title-blue">
  
                                <span class="title">Special Discount</span>
  
                                <span class="blue-discount fa-pull-right">10% OFF</span>
  
                              </div>
  
                          </div>
                
                          </div>
              
                      <div class="row">
  
              <div class="col-md-12">
              
                              <div class="countdown-nw-hd">
  
                                <div class="col-md-12 text-center">
  
                                  <span class="card-sm-title">Total Discount</span>
                                  <span class="text-danger fw-bold fs-5 discount-badge">60%</span>
  
                                </div>
  
                                <div class="clearfix"></div>
  
                              </div>
              
              </div>
  
                    </div>
  
                    <div class="row">
  
                      <div class="col-md-12">
  
                        <div class="timer-counter text-center">
  
                          <div class="dotted-line"></div>
  
                          <div class="timer-big-num" id="timer">
                            <span class="timer-number" id="hours">4</span><span class="text-white fs-6">Hrs</span>
                            <span class="timer-number" id="minutes">24</span><span class="text-white fs-6">Mins</span>
                            <span class="timer-number" id="seconds">12</span><span class="text-white fs-6">Secs</span>
                          </div>
  
                          <div class="dotted-line mt-1"></div>
  
                        </div>
  
                      </div>
  
                    </div>
  
                      <div class="ripple-blue blink_me">
  
                          <button class="btn btn-purple proceedbtn OrderNoww calcProceedBtnn" type="submit" style="text-transform: none">
  
                              CHECK YOUR PRICE NOW
  
                          </button>
  
                      </div>
  
                      </div>
  
                  </form>
          
          <!--New Form-->
  
              </div>
            </div>

        </div>

    </div>


    <!-- ----------------------Section - Payment Methods------------------------- -->

    <section class="section-payment-methods">

      <div class="container">
        <div class="row">
          <div class="col-md-6 m-auto h-100  py-4 bd-top-bot">
            <h2 class="reliable-txt own-txt-left text-white text-center text-md-start text-lg-start text-xl-start">
              Our Flexible Payment Methods
            </h2>
            <p class="text-white txt_mob_cnt">Get a personalized price estimate for your task in seconds! No hidden fees
              here - the Graderz.org platform fee (11%) is already included, so you only pay according to the time we
              spend on resolving it. Tell us more about what help you need and let's get started right away!
            </p>
  
            <div class="row align-items-center mt-2 pt-2">
  
              <div class="col-md-6 col-12">
  
                <a href="https://wa.me/+447546546381" class="btn btn-purple btn-custom w-100">Whatsapp Now
  
                  <i class="fa fa-whatsapp"></i>
  
                </a>
  
              </div>
  
              <div class="col-md-6 d-flex button-jittery">
  
                <img alt="image" loading="lazy" class="btn-img" src="<?= asset_url() ?>front/icons/chatexpert.png">
                <a href="javascript:void(Tawk_API.toggle())" class="ds_expert ">&nbsp;Talk to a specialist</a>
  
              </div>
  
            </div>
  
            <div class="row mt-2">
  
              <div class="col-md-12">
  
                <span class="hed_sec3-blck text-white fw-bold discount-badge">Call Us At: </span>
  
                <!--<a href="tel:+1 213 318 4345" class="top-link"> <span class=" text-white fw-bold">-->
  
                <!--    <img src="<?= asset_url() ?>front/images/usa.png" class="px-0" alt="">&nbsp; +1 213 318 4345</span></a>-->
  
                <a href="tel:+44 1892 71 0953" class="top-link "> <span class="text-white px-2 fw-bold">
                    <img src="<?= asset_url() ?>front/images/united-kingdom.png" class="px-0" alt="">&nbsp; +44 1892 71 0953</span></a>
  
  
                <a href="tel:+61 2 8011 3862" class="top-link text-white fw-bold">
                  <img src="<?= asset_url() ?>front/images/australia.png" class="px-0" alt="">&nbsp; +61 2 8011 3862</a>
  
  
  
              </div>
  
            </div>
  
  
          </div>
          <div class="col-md-6  text-center h-100 py-2 min_h-100 m-auto justify-conntent-center">
  
            <img alt="image" loading="lazy" class="ccard_imag" data-src="<?= asset_url() ?>front/images/card_pay_ment.png" src="<?= asset_url() ?>front/images/card_pay_ment.png">
          </div>
  
  
  
        </div>
      </div>
    </section>
  <!-- ---------------------------Footer---------------------------- -->

  <div class="container gradient-purple py-5 footer-cta">
    <div class="text-center">

      <div class="row">
        <div class="col-xl-12">
          <div class="cta-text ">
            <h3 class="text-white text-center mb-3">We are available 24/7. </h3>
            <p class="text-white text-center" style="font-size: 22px;">Get started right now to hire one of the most qualified experts in the academic arena!</p>

          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xl-12 col-md-12  mb-30 text-start text-xl-center py-2">
          <div class="single-cta">
            <div class="row align-items-center mt-2 pt-2 px-10">

              <div class="col-md-4 col-12">
  
                <a href="https://wa.me/+447546546381" class="btn btn-purple btn-custom w-100">Chat on Whatsapp
  
                  <i class="fa fa-whatsapp text-white"></i>
  
                </a>
  
              </div>
  
              <div class="col-md-4 d-flex button-jittery">
  
                <img alt="image" loading="lazy" class="btn-img" src="<?= asset_url() ?>front/icons/chatexpert.png">
                <a href="javascript:void(Tawk_API.toggle())" class="ds_expert ">&nbsp;Talk to a specialist</a>
  
              </div>

              <div class="col-md-4 col-12">
  
                <a href="<?php base_url() ?>calculate-price" class="btn btn-purple btn-custom w-100">Order Now
  
                  <i class="fa fa-shopping-cart text-white"></i>
  
                </a>
  
              </div>
  
            </div>

            <div class="row mt-2">

              <div class="col-md-12">
  
                <span class="hed_sec3-blck text-white fw-bold discount-badge">Call Us At: </span>
  
                <!--<a href="tel:+1 213 318 4345" class="top-link"> <span class=" text-white fw-bold">-->
  
                <!--    <img src="<?= asset_url() ?>front/images/usa.png" class="px-0" alt="">&nbsp; +1 213 318 4345</span></a>-->
  
                <a href="tel:+44 1892 71 0953" class="top-link "> <span class="text-white px-2 fw-bold">
                    <img src="<?= asset_url() ?>front/images/united-kingdom.png" class="px-0" alt="">&nbsp; +44 1892 71 0953</span></a>
  
  
                <a href="tel:+61 2 8011 3862" class="top-link text-white fw-bold">
                  <img src="<?= asset_url() ?>front/images/australia.png" class="px-0" alt="">&nbsp; +61 2 8011 3862</a>
  
  
  
              </div>
  
            </div>
          </div>
        </div>
        <!-- <div class="col-xl-4 col-md-4  mb-30 text-start text-xl-center py-2">
          <div class="single-cta">
            <i class="fa fa-envelope-open"></i>
            <div class="cta-text">
              <h4>Mail us</h4>
              <span><a class="phone-num" href="mailto:info@domain.com">
                  info@domain.com </a></span>
            </div>
          </div>
        </div> -->
      </div>
    </div>
  </div>