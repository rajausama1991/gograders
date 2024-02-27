
 <style>
     .dropp{
         margin-bottom: 15px;
     }
 </style>
 <!-- Modal HTML -->
 <div id="myModal" class="modal fade">
      <div class="modal-dialog modal-login">
        <div class="modal-content">
          <div class="modal-header">				
            <h4 class="modal-title">Member Login</h4>	
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          </div>
          <div class="modal-body">
            <form action="/examples/actions/confirmation.php" method="post">
              <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" required="required">		
              </div>
              <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" required="required">	
              </div>        
              <div class="bb">
                <a href="#" class="mod-btn">Login</a>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <a href="#">Forgot Password?</a>
          </div>
        </div>
      </div>
    </div>
    <!-- eND Modal HTML -->
<div class="helpOption">
        <div class="options">
            <a target="_blank" href="tel:+18886791477" class="liveChat tooltipBox" data-placement="top" title="Call Us">
                <span class="abc"><img src="<?= asset_url() ?>front/images/usa.png" alt="icon"></span>
                <span class="def"><img src="<?= asset_url() ?>front/images/phone.png" alt="icon"></span> <span>+1 (888) 679-1477</span>
            </a>
        </div>
    </div>
    <div class="helpOption2">
        <div class="options">
            <a target="_blank" href="tel:+441892710953" class="liveChat tooltipBox" data-placement="top" title="Call Us">
                <span class="abc"><img src="<?= asset_url() ?>front/images/uk.png" alt="icon"></span>
                <span class="def"><img src="<?= asset_url() ?>front/images/phone.png" alt="icon"></span> <span>+44 1892 71 0953</span>
            </a>
        </div>
    </div>
    <div class="helpOption3">
        <div class="options">
            <a target="_blank" href="tel:+61280113862" class="liveChat tooltipBox" data-placement="top" title="Call Us">
                <span class="abc"><img src="<?= asset_url() ?>front/images/aus.png" alt="icon"></span>
                <span class="def"><img src="<?= asset_url() ?>front/images/phone.png" alt="icon"></span> <span>+61 2 8011 3862</span>
            </a>
        </div>
    </div>
     <div class="helpOption4">
        <div class="options">
            <a target="_blank" href="https://api.whatsapp.com/send?phone=447546546381" class="liveChat tooltipBox" data-placement="top" title="WhatsApp Us">
                <span class="abc"><img src="<?= asset_url() ?>front/images/wt.png" alt="icon"></span>
            </a>
        </div>
    </div>
    
    <div class="header-space"></div><!-- Top Banner Starts Desktop version--> 
<section class="top-banner mobile_banner">
    <div class="container">
        <div class="row">
            <div class="">
                <div class="col-sm-6 left-content tagline_mobile wow fadeIn ">
                    <div class="hexagon">
                        <h2>SCORE EXCELLENT GRADES WITH INDUSTRY'S TOP-RANKED <span>ACADEMIC</span>
                            <span>EXPERTS</span>
                        </h2>
                        <div class="carousel slide" data-ride="carousel" data-interval="3000" id="seals_slider">
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">
                                <div class="carousel-item slides active">
                                    <div class="banner_seals">
                                        <span class="stars_rating">
                                           <img src="<?= asset_url() ?>front/images/star-4.7.png" class="img-fluid" alt="star-4.7">
                                            <span>4.7 of 5 on</span>
                                        </span>
                                        <img src="<?= asset_url() ?>front/images/tp.png" alt="Seal">
                                    </div>
                                </div>
                                <div class="carousel-item slides">
                                    <div class="banner_seals">
                                        <span class="stars_rating">
                                            <img src="<?= asset_url() ?>front/images/star-4.8.png" class="img-fluid" alt="star-4.8">
                                            <span> 4.8 of 5 on</span>
                                        </span>
                                        <img src="<?= asset_url() ?>front/images/sj.png" alt="Seal">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="offers d-none d-md-block">
                            <span class="boxes_boxes">
                                PH.D. QUALIFIED EXPERTS IN 100+ SUBJECTS
                            </span>
                            <span class="boxes_boxes">
                                95.7% ORDERS DELIVERED WITHIN 3 - 24 HOURS
                            </span>
                            <span class="boxes_boxes">
                                24/7 LIVE SUPPORT AND ORDER TRACKING
                            </span>
                            <span class="boxes_boxes">
                                TURNITIN AND COPYSCAPE APPROVED PAPERS
                            </span>
                            <span class="boxes_boxes">
                                100% PRIVACY AND MONEYBACK ASSURANCE
                            </span>
                        </div>
                        <div class="trusted d-none d-md-block">
                            <img class="img-responsive" src="<?= asset_url() ?>front/images/insurance.png" alt="inusrance">
                            <span class="dodgerblue">SECURE AND CONFIDENTIAL</span>
                            <div class="anitvirus">
                                <div class="secure_confidential secure_confidential1"></div>
                                <div class="secure_confidential secure_confidential2"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 right-content calculate_banner_mobile">
                    <div class="calculate_order wow fadeIn" id="calculate_order">
                        <div class="form-title">
                            <h3>CALCULATE YOUR ORDER PRICE</h3>
                        </div>
                        <form method="post" name="order-form" action="<?= base_url('calculate-price') ?>">
                            <div class="order-form">
                                <select class="select-css" id="document_type" name="documentType">
                                    
                                <option value="">Select Document type</option>
                                    
                                <?php foreach ($type_of_documents as $type_of_document) { ?>

                                <option value="<?= $type_of_document->name ?>"><?= $type_of_document->name ?></option>

                                <?php } ?>
                                </select>
                                <select name="acedamic_level" class="select-css" onchange="" id="level" name="Level">
                                    <option class="disabled" data-val="1" value="High School">High School</option>
                                    <option class="disabled" data-val="2" value="College UnderGraduate">College</option>
                                    <!-- <option data-val="4" value="4">Undergraduate</option> -->
                                    <option data-val="5" value="Masters">Master</option>
                                    <option data-val="6" value="PHD">Ph.D.</option>
                                </select>
                                
                                <div class="two_selectbox">
                                    
                                    <span class="ccc"><input type="date" id="DeadlineDate" placeholder="dd/mm/yyyy" min="<?=date('Y-m-d');?>" name="DeadlineDate"></span>


                                <!--<span class="cc"><input type="date" id="DeadlineDate" min="<?=date('Y-m-d');?>" placeholder="Select Deadline" name="DeadlineDate"></span>-->
                                 <!-- <select class="small select days" id="days" name="Delivery" onchange="">
                                        <option selected="selected" data-val="1" value="1">15 days</option>
                                        <option data-val="2" value="2">10 days</option>
                                        <option data-val="3" value="3">7 days</option>
                                        <option data-val="4" value="4">5 days</option>
                                        <option data-val="5" value="5">4 days</option>
                                        <option data-val="6" value="6">3 days</option>
                                        <option data-val="7" value="7">2 days</option>
                                        <option data-val="8" value="8">1 day</option>
                                        <option data-val="9" value="9">12 Hours</option>
                                    </select> -->
                                    <!-- <span class="pages">Pages</span> -->
                                    <div class="pages_number">
                                        <span class="input-group-btn">
                                            <button class="quantity-left-minus btn bgdarkred white" data-type="minus" data-field="">
                                                <span class="fa fa-minus">-</span>
                                            </button>
                                        </span>
                                        <input type="text" id="pages" maxlength="4" name="no_pages" class="form-control pages" onkeypress="return checkIt(event)" value="1">
                                        <span class="input-group-btn">
                                            <button type="button" class="quantity-right-plus btn bgdarkred white" data-type="plus" data-field="">
                                                <span class="fa fa-plus">+</span>
                                            </button>
                                        </span>
                                    </div>
                                </div>
                                <div class="disc_prices">
                                    <p class="heartBeat">
                                        Original Discount
                                        <span class="main">50%</span>
                                    </p>
                                </div>
                                <div class="stand_prices">
                                    <p>
                                        To Pay Now
                                        <span id="standard_price" class="main">50%</span>
                                    </p>
                                </div>
                                
                                <div class="disc_prices">
                                    <p class="heartBeat">
                                        Special Discount
                                        <span class="main">10%</span>
                                    </p>
                                </div>

                                <div class="stand_prices cl-1">
                                    
                                    <div class="row">
                                    
                                      <div class="col-md-5"><span class="expiration">Discount expires in</span></div>
                                        
                                      <div class="col-md-7"><div id="periodic-timer_period_days"></div></div>
                                    
                                    </div>
                                    
                                </div>
                                
                                <!-- <div class="stand_prices">
                                    <p>
                  
                                        <div class="timer">
                                            
                                          <span class="expiration">Discount expires in</span>
                                            
                                          <div>

                                            <span class="days" id="day"></span> 

                                            <span class="smalltext">d</span>

                                         </div>

                                         <div>

                                            <span class="hours" id="hour"></span> 

                                            <span class="smalltext">h</span>

                                         </div>

                                         <div>

                                            <span class="minutes" id="minute"></span> 

                                            <span class="smalltext">m</span>
                                         </div>

                                         <div>

                                            <span class="seconds" id="second"></span> 

                                            <span class="smalltext">s</span>

                                         </div>

                                         <p id="time-up"></p>

                                      </div>
                                    </p>
                                </div> -->
                            </div>
                            <div class="total_prices blink_me">
                                <p>
                                    Total DISCOUNT:
                                    <span id="discount_price" class="main"><span class="dollor"></span>60%</span>
                                </p>
                            </div>
                            <button class="btn-submit btn-default proceedbtn OrderNow_" type="submit">
                                Check your Price Now!
                            </button>
                        </form>
                    </div>
                </div>
                <div class="col-sm-6 left-content features_mob d-block d-md-none">
                    <div class="hexagon">
                        <div class="offers d-block d-md-none">
                            <span class="boxes_boxes">
                                PH.D. QUALIFIED EXPERTS IN 100+ SUBJECTS
                            </span>
                            <span class="boxes_boxes">
                                95.7% ORDERS DELIVERED WITHIN 3 - 24 HOURS
                            </span>
                            <span class="boxes_boxes">
                                24/7 LIVE SUPPORT AND ORDER TRACKING
                            </span>
                            <span class="boxes_boxes">
                                TURNITIN AND COPYSCAPE APPROVED PAPERS
                            </span>
                            <span class="boxes_boxes">
                                100% PRIVACY AND MONEYBACK ASSURANCE
                            </span>
                        </div>
                        <div class="trusted d-block d-md-none">
                            <img class="img-responsive" src="<?= asset_url() ?>front/images/insurance.png" alt="inusrance">
                            <span class="dodgerblue">SECURE AND CONFIDENTIAL</span>
                            <div class="anitvirus">
                                <div class="secure_confidential secure_confidential1"></div>
                                <div class="secure_confidential secure_confidential2"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/- Top Banner Desktop version Ends -->

<!-- Top Banner Starts Mobile version Starts -->

<!--/- Top Banner Mobile version Ends -->

<div class="header-space"></div>
<!--Top Header Space-->
<main>
    <!-- Benefits section Starts -->
    <section class="benefits text-left" id="benefits">
        <div class="container">
            <div class="row">
                <div class="col-sm-5 exlore_benefits">
                    <hgroup>
                        <h6 class="exlarge_title text-left">
                            <span>Benefits</span>&nbsp;YOU GET
                        </h6>
                    </hgroup>
                    <p class="hgroup">
                        Can't figure out how to complete your paper before the deadline? Well, stop staring at that cursor on your screen because we have got your back. By having our professional team by your side, you can free yourself from the unnecessary stress of creating flawless papers. Team up with our highly experienced experts and climb up the academic ladder to achieve better grades.
                    </p>
                    <div class="benefit_offers">
                        <p class="boxes_boxes">
                            <a href="<?=base_url('calculate-price')?>" class="benefit_area_link">
                                TELL ME MORE
                            </a>
                        </p>
                    </div>
                </div>
                <div class="col-sm-7 type_benefits">
                    <div class="d-flex">
                        <div class="col-sm-6">
                            <div class="single-benefit">
                                <!-- Black Image Static-->
                                <div class="ourbenefits_icon_black ourbenefits_icon1"></div>
                                <!-- White Image on Hover-->
                                <div id="hoverimg1" class="ourbenefits_icon_white ourbenefits_icon1"></div>
                                <h6 class="exsmall_title dodgerblue">
                                    Quality First Approach
                                </h6>
                                <p>
                                    Our services are based on a mindset of delivering nothing but quality. We go above and beyond to get your work done perfectly.
                                </p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="single-benefit marg-top">
                                <!-- Black Image Static-->
                                <div class="ourbenefits_icon_black ourbenefits_icon2"></div>
                                <!-- White Image on Hover-->
                                <div id="hoverimg2" class="ourbenefits_icon_white ourbenefits_icon2"></div>
                                <h6 class="exsmall_title dodgerblue">
                                    Talented Experts Squad
                                </h6>
                                <p>
                                    A mind-boggling essay or a complex research paper, nothing can beat our ambition to create excellent assignments.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="col-sm-6">
                            <div class="single-benefit">
                                <!-- Black Image Static-->
                                <div class="ourbenefits_icon_black ourbenefits_icon3"></div>
                                <!-- White Image on Hover-->
                                <div id="hoverimg3" class="ourbenefits_icon_white ourbenefits_icon3"></div>
                                <h6 class="exsmall_title dodgerblue">
                                    Quickest Turnaround
                                </h6>
                                <p>
                                    Almost 90 - 96% of papers we do are delivered back to students within 24 hours regardless of order length or complexity.
                                </p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="single-benefit marg-top">
                                <!-- Black Image Static-->
                                <div class="ourbenefits_icon_black ourbenefits_icon4"></div>
                                <!-- White Image on Hover-->
                                <div id="hoverimg4" class="ourbenefits_icon_white ourbenefits_icon4"></div>
                                <h6 class="exsmall_title dodgerblue">
                                    Unlimited Free Revisions
                                </h6>
                                <p>
                                    Do you think just a few more changes can help you get an A grade that you desire? Don't worry; we'll make as many free revisions as you want.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/- Benefits section Ends -->

    <!-- Guarantee section Starts -->
    <section class="reviews" id="reviews">
        <div class="container">
            <div class="row-eq-height row">
                <div class="col-sm-6 guarntee">
                    <div class="outer_hgroup">
                        <hgroup>
                            <h6 class="exlarge_title text-left wow shake">
                                WHY&nbsp;<span class="dodgerblue">CHOOSE US</span>
                            </h6>
                        </hgroup>
                        <p class="hgroup">
                            The remarkable reviews shared by students belonging to the renowned universities
                            back our claim of being the most trustworthy Experts service.
                        </p>
                    </div>
                </div>
                <div class="col-sm-6 trust_pilot">
                    <div class="row row-eq-height">
                        <div class="col-sm-6">
                            <div class="carousel slide trustpilot" data-ride="carousel" data-interval="3500" id="trustpilot">

                                <!-- Indicators -->
                                <ol class="carousel-indicators">
                                    <li data-target="#trustpilot" data-slide-to="0" class="active"></li>
                                    <li data-target="#trustpilot" data-slide-to="1"></li>
                                    <li data-target="#trustpilot" data-slide-to="2"></li>
                                </ol>

                                <!-- Wrapper for slides -->
                                <div class="carousel-inner">
                                    <div class="carousel-item slides active">
                                        <div class="review_logos review_logo1"></div>
                                        <div class="star_rating">
                                            <h6>&nbsp;
                                                <span class="stars-active" style="width:100%">
                                                    <img src="<?= asset_url() ?>front/images/star-4.8.png" class="img-fluid" alt="star-4.7">
                                                </span>
                                            </h6>
                                            <h2>
                                                <span class="rating">Good</span>
                                                <span class="vl"></span>
                                                <span class="text-right">
                                                    Trust Score <b>4.7</b>
                                                </span>
                                            </h2>
                                        </div>
                                        <div class="single-trustpilot">
                                            <div class="name">
                                                <p>Reviewed by<span>&nbsp;Leo King</span></p>
                                            </div>
                                            <div class="career_level">
                                                <p>Best Proofreading Service</p>
                                            </div>
                                            <div class="review_content">
                                                <p>I am not a good reviewer when it comes to my own projects. That is why I need help with the rechecking of my assignments before submission and Paperly online happily does this for me. </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item slides">
                                        <div class="review_logos review_logo1"></div>
                                        <div class="star_rating">
                                            <h6>&nbsp;
                                                <span class="stars-active" style="width:100%">
                                                    <img src="<?= asset_url() ?>front/images/star-4.8.png" class="img-fluid" alt="star-4.7">
                                                </span>
                                            </h6>
                                            <h2>
                                                <span class="rating">Good</span>
                                                <span class="vl"></span>
                                                <span class="text-right">
                                                    Trust Score <b>4.7</b>
                                                </span>
                                            </h2>
                                        </div>
                                        <div class="single-trustpilot">
                                            <div class="name">
                                                <p>Reviewed by<span>&nbsp;Jack Williams </span></p>
                                            </div>
                                            <div class="career_level">
                                                <p>Satisfied Customer</p>
                                            </div>
                                            <div class="review_content">
                                                <p>I am probably one of the oldest customers of Paperly. I have always sought their help for my Creative editing and they have never let me down. I would highly recommend their Experts services to everyone. </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item slides">
                                        <div class="review_logos review_logo1"></div>
                                        <div class="star_rating">
                                            <h6>&nbsp;
                                                <span class="stars-active" style="width:100%">
                                                    <img src="<?= asset_url() ?>front/images/star-4.8.png" class="img-fluid" alt="star-4.8">
                                                </span>
                                            </h6>
                                            <h2>
                                                <span class="rating">Good</span>
                                                <span class="vl"></span>
                                                <span class="text-right">
                                                    Trust Score <b>4.7</b>
                                                </span>
                                            </h2>
                                        </div>
                                        <div class="single-trustpilot">
                                            <div class="name">
                                                <p>Reviewed by<span>&nbsp;Daphne Craig</span></p>
                                            </div>
                                            <div class="career_level">
                                                <p>Big Discount</p>
                                            </div>
                                            <div class="review_content">
                                                <p>Thanks to Paperly for always giving me huge discounts. I am able to place orders for proofreading with my pocket-money since your rates are affordable and you give an extra discount. </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="carousel slide trustpilot" data-ride="carousel" data-interval="4500" id="sitejabber">

                                <!-- Indicators -->
                                <ol class="carousel-indicators">
                                    <li data-target="#sitejabber" data-slide-to="0" class="active"></li>
                                    <li data-target="#sitejabber" data-slide-to="1"></li>
                                    <li data-target="#sitejabber" data-slide-to="2"></li>
                                </ol>

                                <!-- Wrapper for slides -->
                                <div class="carousel-inner">
                                    <div class="carousel-item slides active">
                                        <div class="review_logos review_logo2"></div>
                                        <div class="star_rating">
                                            <h6>&nbsp;
                                                <span class="stars-active" style="width:100%">
                                                    <img src="<?= asset_url() ?>front/images/star-4.8.png" class="img-fluid" alt="star-4.8">
                                                </span>
                                            </h6>
                                            <h2>
                                                <span class="rating">Excellent</span>
                                                <span class="vl"></span>
                                                <span class="text-right">
                                                    Trust Score <b>4.8</b>
                                                </span>
                                            </h2>
                                        </div>
                                        <div class="single-trustpilot">
                                            <div class="name">
                                                <p>Reviewed by<span>&nbsp;Rita Taylor</span></p>
                                            </div>
                                            <div class="career_level">
                                                <p>Problem Solver</p>
                                            </div>
                                            <div class="review_content">
                                                <p>I am happy with the way these guys resolve the problem. I could not receive my file on the panel, in time due to some internet problems, but they were quick enough to send me the file through other means. </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item slides">
                                        <div class="review_logos review_logo2"></div>
                                        <div class="star_rating">
                                            <h6>&nbsp;
                                                <span class="stars-active" style="width:100%">
                                                    <img src="<?= asset_url() ?>front/images/star-4.8.png" class="img-fluid" alt="star-4.8">
                                                </span>
                                            </h6>
                                            <h2>
                                                <span class="rating">Excellent</span>
                                                <span class="vl"></span>
                                                <span class="text-right">
                                                    Trust Score <b>4.8</b>
                                                </span>
                                            </h2>
                                        </div>
                                        <div class="single-trustpilot">
                                            <div class="name">
                                                <p>Reviewed by <span>&nbsp;J. Malarkey</span></p>
                                            </div>
                                            <div class="career_level">
                                                <p>Plagiarism Free Work</p>
                                            </div>
                                            <div class="review_content">
                                                <p>At last, I came across a service that does justice with the work. I’ve worked with other services but never got 
a Experts like this, keep up the good work guys! </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item slides">
                                        <div class="review_logos review_logo2"></div>
                                        <div class="star_rating">
                                            <h6>&nbsp;
                                                <span class="stars-active" style="width:100%">
                                                    <img src="<?= asset_url() ?>front/images/star-4.8.png" class="img-fluid" alt="star-4.8">
                                                </span>
                                            </h6>
                                            <h2>
                                                <span class="rating">Excellent</span>
                                                <span class="vl"></span>
                                                <span class="text-right">
                                                    Trust Score <b>4.8</b>
                                                </span>
                                            </h2>
                                        </div>
                                        <div class="single-trustpilot">
                                            <div class="name">
                                                <p>Reviewed by<span>&nbsp;Sunny K.</span></p>
                                            </div>
                                            <div class="career_level">
                                                <p>Summary Well-Done</p>
                                            </div>
                                            <div class="review_content">
                                                <p>They did editing for summary of my course’s novel was well done. Their experts are truly amazing and dedicated to delivering only quality. </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--<div class="row">-->
            <!--    <div class="col-sm-12 text-center"></div>-->
            <!--    <hr>-->
            <!--</div>-->
            <!--<div class="row seals_imgs">-->
            <!--    <div class="col-sm-4">-->
            <!--        <a href="javascript:void(0)">-->
            <!--            <div class="review_seals review_seals1"></div>-->
            <!--        </a>-->
            <!--    </div>-->
            <!--    <div class="col-sm-4">-->
            <!--        <a href="javascript:void(0)">-->
            <!--            <div class="review_seals review_seals2"></div>-->
            <!--        </a>-->
            <!--    </div>-->
            <!--    <div class="col-sm-4">-->
            <!--        <a href="javascript:void(0)">-->
            <!--            <div class="review_seals review_seals3"></div>-->
            <!--        </a>-->
            <!--    </div>-->
            <!--</div>-->
        </div>
    </section>
    <!--/- Guarantee section Ends -->

    <!-- Offers section Starts -->
    <section class="offers text-center lazyload" data-src="<?= asset_url() ?>front/images/commonsectionbg.png" id="offers">
        <div class="container">
            <div class="row row-eq-height">
                <div class="col-sm-12 exlore_offers text-center">
                    <div class="outer_offerbox">
                        <hgroup>
                            <h6 class="large_title wow fadeInDown">
                                <span class="marketing">SERVICES</span>&nbsp;WE OFFER
                            </h6>
                        </hgroup>
                        <p class="main_paragraph">
                            Let our subject matter experts handle your <br>challenging tasks affordably
                        </p>
                    </div>
                </div>
                <div class="col-sm-6 all_offers">
                    <div class="carousel slide" data-ride="carousel" data-interval="7000" id="all_offers">

                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#all_offers" data-slide-to="0" class="active"></li>
                            <li data-target="#all_offers" data-slide-to="1"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="carousel-item slides active">
                                <div class="row row-eq-height d-flex justify-content-center">
                                    <div class="col-sm-4">
                                        <div class="offers_singleoffer">
                                            <p>Assignment </p>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="offers_singleoffer">
                                            <p>Essay</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="offers_singleoffer">
                                            <p>Thesis</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="offers_singleoffer">
                                            <p>Dissertation </p>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="offers_singleoffer">
                                            <p>Research Paper</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="offers_singleoffer">
                                            <p>Term Paper</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="offers_singleoffer">
                                            <p>College Paper</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="offers_singleoffer">
                                            <p>Article</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="offers_singleoffer">
                                            <p>Case Study</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="offers_singleoffer">
                                            <p>Movie Review</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="offers_singleoffer">
                                            <p>Presentation</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="offers_singleoffer">
                                            <p>Personal Statement</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="offers_singleoffer">
                                            <p>Lab Report</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="offers_singleoffer">
                                            <p>Scholarship Essay</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="offers_singleoffer">
                                            <p>Cover Letter</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="offers_singleoffer">
                                            <p>School Paper</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item slides ">
                                <div class="row row-eq-height d-flex justify-content-center">
                                    <div class="col-sm-4">
                                        <div class="offers_singleoffer">
                                            <p>Speech</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="offers_singleoffer">
                                            <p>Book Review</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="offers_singleoffer">
                                            <p>Book Report</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="offers_singleoffer">
                                            <p>News Release</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="offers_singleoffer">
                                            <p>eBook</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="offers_singleoffer">
                                            <p>Homework</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="offers_singleoffer">
                                            <p id="annoted">Annotated Bibliography</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="offers_singleoffer">
                                            <p>Argumentative Essay</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="offers_singleoffer">
                                            <p>Application Letter</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="offers_singleoffer">
                                            <p>Coursework</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="offers_singleoffer">
                                            <p>Research Proposal</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="offers_singleoffer">
                                            <p>Thesis Proposal</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="offers_singleoffer">
                                            <p>Literature Review</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="offers_singleoffer">
                                            <p>Biography</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="offers_singleoffer">
                                            <p>Business Plan</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="offers_singleoffer">
                                            <p>Lab Report</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row-eq-height col-sm-6 type_offers">
                    <div class="d-flex">
                        <div class="col-sm-6">
                            <div class="single-offer">
                                <div class="ourservices_icon ourservices_icon1"></div>
                                <h6 class="exsmall_title dodgerblue text-left">
                                    Quality Assurance
                                </h6>
                                <p>
                                   Achieving your trust is our priority so we never compromise on the quality of your assignments. Our assignment helpers are eager to give you the best editing and proofreading services.
                                </p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="single-offer last_middle">
                                <div class="ourservices_icon ourservices_icon2"></div>
                                <h6 class="exsmall_title dodgerblue text-left">
                                    Rigorous Editing
                                </h6>
                                <p>
                                    We edit your papers to ensure that no contextual or grammatical errors may affect your grade.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="col-sm-6 clearfix">
                            <div class="single-offer marg-top">
                                <div class="ourservices_icon ourservices_icon3"></div>
                                <h6 class="exsmall_title dodgerblue text-left">
                                    Thorough Proofreading
                                </h6>
                                <p>
                                    Not sure if your paper is good enough? Let a professional proofread and identify errors for you.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/- Offers section Ends -->

    <!-- Discount section Starts -->
    <section class="discount lazyload" data-src="<?= asset_url() ?>front/images/discountbg.png" id="discount">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 discount_off text-center">
                    <hgroup>
                        <h6 class="large_title white">
                            <b>We Are Offering</b>&nbsp;<b>&nbsp;60% OFF </b>for
                            <br class="d-none d-md-block">&nbsp;Students of Every Academic Level.
                        </h6>
                    </hgroup>
                    <div class="row justify-content-center contact_buttons">
                        <ul>
                            <li>
                                <a href="tel:+1 (888) 679-1477" class="slateblueextralarge bgslateblue white">
                                    <div class="contact_icons_btn contact_icons_btn1"></div>
                                    <span>+1 (888) 679-1477</span>
                                </a>
                            </li>
                            <li>
                                <a href="tel:+ 441892710953" class="slateblueextralarge bgslateblue white chaton">
                                    <div class="contact_icons_btn contact_icons_btn2"></div>
                                    <span>+44 1892 71 0953</span>
                                </a>
                            </li>
                            <li>
                                <a href="tel:+61 2 8011 3862" class="slateblueextralarge bgslateblue white">
                                    <div class="contact_icons_btn contact_icons_btn3"></div>
                                    <span>+61 2 8011 3862</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/- Discount  section Ends -->

    <!-- Our Clients/ Regular Customers section Starts -->
    <section class="ourclients text-center" id="ourclients">
        <div class="container">
            <div class="row row-eq-height">
                <div class="col-sm-5 exlore_ourclients">
                    <hgroup>
                        <h6 class="exlarge_title text-left">
                            Why<span>&nbsp;Students</span>
                            <br><span>&nbsp;Come Back</span>&nbsp;for More?
                        </h6>
                    </hgroup>
                    <p class="hgroup">
                        Our quality-first mindset, quickest turnaround time, affordable rates and reliable services set us apart from others.
                    </p>
                </div>
                <div class="col-sm-7 type_ourclients wow shake">
                    <div class="d-flex">
                        <div class="col-sm-6">
                            <div class="single-ourclients">
                                <div class="ourclient_icon ourclient_icon1"></div>
                                <h6 class="blue medium_title text-left text_xs_center">
                                    99.8%
                                </h6>
                                <p>
                                    Satisfaction Rate
                                </p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="single-ourclients">
                                <div class="ourclient_icon ourclient_icon2"></div>
                                <h6 class="blue medium_title text-left text_xs_center">
                                    3-Hour
                                </h6>
                                <p>
                                    Instant Delivery
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="col-sm-6">
                            <div class="single-ourclients">
                                <div class="ourclient_icon ourclient_icon3"></div>
                                <h6 class="blue medium_title text-left text_xs_center">
                                    24/7
                                </h6>
                                <p>
                                    Online Presence
                                </p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="single-ourclients">
                                <div class="ourclient_icon ourclient_icon4"></div>
                                <h6 class="blue medium_title text-left text_xs_center">
                                    100%
                                </h6>
                                <p>
                                    Confidential Services
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/- Our Clients/ Regular Customers  section Ends -->

    <!-- States + Order Numbers Starts -->
    <section class="order_numbers text-center d-none d-md-block lazyload" data-src="<?= asset_url() ?>front/images/order_numbers.png">
        <div class="container">
            <div class="row row-eq-height">
                <div class="col-sm-12 text-center">
                    <hgroup>
                        <h6 class="large_title">
                            <span class="dodgerblue">Numbers Don't Lie</span>,&nbsp;Look How We're
                            <br>Helping Students
                        </h6>
                    </hgroup>
                </div>
            </div>
            <div class="all_orders">
                <div class="vertical-tab" role="tabpanel">
                    <!-- Nav tabs -->
                    <div class="row row-eq-height">
                        <div class="col-sm-4">
                            <div class="d-flex">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li role="presentation">
                                        <a class="active" href="#order_inqueu" aria-controls="order_inqueu" role="tab" data-toggle="tab">
                                            <b class="counting">700</b>
                                            ORDERS LINED UP
                                        </a>

                                    </li>
                                    <li role="presentation">
                                        <a href="#order_inprocess" aria-controls="order_inprocess" role="tab" data-toggle="tab">
                                            <b class="counting">1250</b>
                                            ORDERS IN PROGRESS

                                        </a>

                                    </li>
                                    <li role="presentation">
                                        <a href="#order_completed" aria-controls="order_completed" role="tab" data-toggle="tab">
                                            <b class="counting">3700</b>
                                            RECENTLY COMPLETED
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <!-- Tab panes -->
                            <div class="tab-content tabs">
                                <div role="tabpanel" class="tab-pane fadeIn bounceOut active" id="order_inqueu">
                                    <div class="d-flex">
                                        <div class="col-sm-4">
                                            <div class="single-order">
                                                <div class="ordername">
                                                    <h6>
                                                        <span class="text-left">Joanna Jetton</span>
                                                    </h6>
                                                </div>
                                                <div class="ordersubject">
                                                    <h6>
                                                        <span class="text-left">Subject</span>
                                                        <span class="text-right">Marketing</span>
                                                    </h6>
                                                </div>
                                                <div class="ordertype">
                                                    <h6>
                                                        <span class="text-left">Type</span>
                                                        <span class="text-right">Term Paper</span>
                                                    </h6>
                                                </div>
                                                <div class="orderlevel">
                                                    <h6>
                                                        <span class="text-left">Level</span>
                                                        <span class="text-right">Undergraduate</span>
                                                    </h6>
                                                </div>
                                                <div class="ordercons">
                                                    <h6>
                                                        <span class="cons"><b>Expert</b><br>Jason Smith </span>
                                                        <span class="wrt_rating">Rating
                                                            <span class="stars-active">
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                            </span>
                                                            <br>
                                                            <span class="satisfiction">Satisfaction 99%</span>
                                                            <br>
                                                            <span class="progress">
                                                                <span class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:99%">
                                                                    <span class="sr-only">99% Complete</span>
                                                                </span>
                                                            </span>
                                                        </span>
                                                    </h6>
                                                </div>
                                                <div class="orderdeadline">
                                                    <h6>
                                                        <span class="text-left">Deadline</span>
                                                        <span class="text-right">24 Hours</span>
                                                    </h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="single-order">
                                                <div class="ordername">
                                                    <h6>
                                                        <span class="text-left">Kristen Reese</span>
                                                    </h6>
                                                </div>
                                                <div class="ordersubject">
                                                    <h6>
                                                        <span class="text-left">Subject</span>
                                                        <span class="text-right">Accounting</span>
                                                    </h6>
                                                </div>
                                                <div class="ordertype">
                                                    <h6>
                                                        <span class="text-left">Type</span>
                                                        <span class="text-right">Assignment</span>
                                                    </h6>
                                                </div>
                                                <div class="orderlevel">
                                                    <h6>
                                                        <span class="text-left">Level</span>
                                                        <span class="text-right">High School</span>
                                                    </h6>
                                                </div>
                                                <div class="ordercons">
                                                    <h6>
                                                        <span class="cons"><b>Expert</b><br>Robert Parmenter</span>
                                                        <span class="wrt_rating">Rating
                                                            <span class="stars-active">
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                            </span>
                                                            <br>
                                                            <span class="satisfiction">Satisfaction 100%</span>
                                                            <br>
                                                            <span class="progress">
                                                                <span class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:100%">
                                                                    <span class="sr-only">100% Complete</span>
                                                                </span>
                                                            </span>
                                                        </span>
                                                    </h6>
                                                </div>
                                                <div class="orderdeadline">
                                                    <h6>
                                                        <span class="text-left">Deadline</span>
                                                        <span class="text-right">12 Hours</span>
                                                    </h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="single-order">
                                                <div class="ordername">
                                                    <h6>
                                                        <span class="text-left">Stephen Louis </span>
                                                    </h6>
                                                </div>
                                                <div class="ordersubject">
                                                    <h6>
                                                        <span class="text-left">Subject</span>
                                                        <span class="text-right">Chemistry</span>
                                                    </h6>
                                                </div>
                                                <div class="ordertype">
                                                    <h6>
                                                        <span class="text-left">Type</span>
                                                        <span class="text-right"> Paper</span>
                                                    </h6>
                                                </div>
                                                <div class="orderlevel">
                                                    <h6>
                                                        <span class="text-left">Level</span>
                                                        <span class="text-right">Bachelors</span>
                                                    </h6>
                                                </div>
                                                <div class="ordercons">
                                                    <h6>
                                                        <span class="cons"><b>Expert</b><br>Mathew Simpson</span>
                                                        <span class="wrt_rating">Rating
                                                            <span class="stars-active">
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                            </span>
                                                            <br>
                                                            <span class="satisfiction">Satisfaction 99%</span>
                                                            <br>
                                                            <span class="progress">
                                                                <span class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:99%">
                                                                    <span class="sr-only">99% Complete</span>
                                                                </span>
                                                            </span>
                                                        </span>
                                                    </h6>
                                                </div>
                                                <div class="orderdeadline">
                                                    <h6>
                                                        <span class="text-left">Deadline</span>
                                                        <span class="text-right">06 Hours</span>
                                                    </h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex">
                                        <div class="col-sm-4">
                                            <div class="single-order">
                                                <div class="ordername">
                                                    <h6>
                                                        <span class="text-left">Joseph Platt </span>
                                                    </h6>
                                                </div>
                                                <div class="ordersubject">
                                                    <h6>
                                                        <span class="text-left">Subject</span>
                                                        <span class="text-right">History</span>
                                                    </h6>
                                                </div>
                                                <div class="ordertype">
                                                    <h6>
                                                        <span class="text-left">Type</span>
                                                        <span class="text-right">Research Paper</span>
                                                    </h6>
                                                </div>
                                                <div class="orderlevel">
                                                    <h6>
                                                        <span class="text-left">Level</span>
                                                        <span class="text-right">Masters</span>
                                                    </h6>
                                                </div>
                                                <div class="ordercons">
                                                    <h6>
                                                        <span class="cons"><b>Expert</b><br>Betsy Jackson</span>
                                                        <span class="wrt_rating">Rating
                                                            <span class="stars-active">
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                            </span>
                                                            <br>
                                                            <span class="satisfiction">Satisfaction 100%</span>
                                                            <br>
                                                            <span class="progress">
                                                                <span class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:100%">
                                                                    <span class="sr-only">100% Complete</span>
                                                                </span>
                                                            </span>
                                                        </span>
                                                    </h6>
                                                </div>
                                                <div class="orderdeadline">
                                                    <h6>
                                                        <span class="text-left">Deadline</span>
                                                        <span class="text-right">12 Hours</span>
                                                    </h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="single-order">
                                                <div class="ordername">
                                                    <h6>
                                                        <span class="text-left">Winfrey Gray</span>
                                                    </h6>
                                                </div>
                                                <div class="ordersubject">
                                                    <h6>
                                                        <span class="text-left">Subject</span>
                                                        <span class="text-right">Physics</span>
                                                    </h6>
                                                </div>
                                                <div class="ordertype">
                                                    <h6>
                                                        <span class="text-left">Type</span>
                                                        <span class="text-right">Research Work</span>
                                                    </h6>
                                                </div>
                                                <div class="orderlevel">
                                                    <h6>
                                                        <span class="text-left">Level</span>
                                                        <span class="text-right">Intermediate</span>
                                                    </h6>
                                                </div>
                                                <div class="ordercons">
                                                    <h6>
                                                        <span class="cons"><b>Expert</b><br>Jason Smith </span>
                                                        <span class="wrt_rating">Rating
                                                            <span class="stars-active">
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                            </span>
                                                            <br>
                                                            <span class="satisfiction">Satisfaction 99%</span>
                                                            <br>
                                                            <span class="progress">
                                                                <span class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:99%">
                                                                    <span class="sr-only">99% Complete</span>
                                                                </span>
                                                            </span>
                                                        </span>
                                                    </h6>
                                                </div>
                                                <div class="orderdeadline">
                                                    <h6>
                                                        <span class="text-left">Deadline</span>
                                                        <span class="text-right">02 days 05 hours</span>
                                                    </h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="single-order">
                                                <div class="ordername">
                                                    <h6>
                                                        <span class="text-left">Alexis Scott</span>
                                                    </h6>
                                                </div>
                                                <div class="ordersubject">
                                                    <h6>
                                                        <span class="text-left">Subject</span>
                                                        <span class="text-right">Bioinformatics</span>
                                                    </h6>
                                                </div>
                                                <div class="ordertype">
                                                    <h6>
                                                        <span class="text-left">Type</span>
                                                        <span class="text-right">Research Proposal</span>
                                                    </h6>
                                                </div>
                                                <div class="orderlevel">
                                                    <h6>
                                                        <span class="text-left">Level</span>
                                                        <span class="text-right">Undergraduate</span>
                                                    </h6>
                                                </div>
                                                <div class="ordercons">
                                                    <h6>
                                                        <span class="cons"><b>Expert</b><br>Mathew Simpson</span>
                                                        <span class="wrt_rating">Rating
                                                            <span class="stars-active">
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                            </span>
                                                            <br>
                                                            <span class="satisfiction">Satisfaction 100%</span>
                                                            <br>
                                                            <span class="progress">
                                                                <span class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:100%">
                                                                    <span class="sr-only">100% Complete</span>
                                                                </span>
                                                            </span>
                                                        </span>
                                                    </h6>
                                                </div>
                                                <div class="orderdeadline">
                                                    <h6>
                                                        <span class="text-left">Deadline</span>
                                                        <span class="text-right">04 Days</span>
                                                    </h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="order_inprocess">
                                    <div class="d-flex">
                                        <div class="col-sm-4">
                                            <div class="single-order">
                                                <div class="ordername">
                                                    <h6>
                                                        <span class="text-left">Sylvia Stacy</span>
                                                    </h6>
                                                </div>
                                                <div class="ordersubject">
                                                    <h6>
                                                        <span class="text-left">Subject</span>
                                                        <span class="text-right">Psychology</span>
                                                    </h6>
                                                </div>
                                                <div class="ordertype">
                                                    <h6>
                                                        <span class="text-left">Type</span>
                                                        <span class="text-right">Essay</span>
                                                    </h6>
                                                </div>
                                                <div class="orderlevel">
                                                    <h6>
                                                        <span class="text-left">Level</span>
                                                        <span class="text-right">High School</span>
                                                    </h6>
                                                </div>
                                                <div class="ordercons">
                                                    <h6>
                                                        <span class="cons"><b>Expert</b><br>Betsy Jackson</span>
                                                        <span class="wrt_rating">Rating
                                                            <span class="stars-active">
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                            </span>
                                                            <br>
                                                            <span class="satisfiction">Satisfaction 99%</span>
                                                            <br>
                                                            <span class="progress">
                                                                <span class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:99%">
                                                                    <span class="sr-only">99% Complete</span>
                                                                </span>
                                                            </span>
                                                        </span>
                                                    </h6>
                                                </div>
                                                <div class="orderdeadline">
                                                    <h6>
                                                        <span class="text-left">Deadline</span>
                                                        <span class="text-right">12 Hours</span>
                                                    </h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="single-order">
                                                <div class="ordername">
                                                    <h6>
                                                        <span class="text-left">Michael Seiler</span>
                                                    </h6>
                                                </div>
                                                <div class="ordersubject">
                                                    <h6>
                                                        <span class="text-left">Subject</span>
                                                        <span class="text-right">Communications and Media</span>
                                                    </h6>
                                                </div>
                                                <div class="ordertype">
                                                    <h6>
                                                        <span class="text-left">Type</span>
                                                        <span class="text-right">Essay</span>
                                                    </h6>
                                                </div>
                                                <div class="orderlevel">
                                                    <h6>
                                                        <span class="text-left">Level</span>
                                                        <span class="text-right">Doctorate</span>
                                                    </h6>
                                                </div>
                                                <div class="ordercons">
                                                    <h6>
                                                        <span class="cons"><b>Expert</b><br>Betsy Jackson</span>
                                                        <span class="wrt_rating">Rating
                                                            <span class="stars-active">
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                            </span>
                                                            <br>
                                                            <span class="satisfiction">Satisfaction 100%</span>
                                                            <br>
                                                            <span class="progress">
                                                                <span class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:100%">
                                                                    <span class="sr-only">100% Complete</span>
                                                                </span>
                                                            </span>
                                                        </span>
                                                    </h6>
                                                </div>
                                                <div class="orderdeadline">
                                                    <h6>
                                                        <span class="text-left">Deadline</span>
                                                        <span class="text-right">05 Hours 30 Minutes</span>
                                                    </h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="single-order">
                                                <div class="ordername">
                                                    <h6>
                                                        <span class="text-left">Deniese Blain </span>
                                                    </h6>
                                                </div>
                                                <div class="ordersubject">
                                                    <h6>
                                                        <span class="text-left">Subject</span>
                                                        <span class="text-right">Ethics</span>
                                                    </h6>
                                                </div>
                                                <div class="ordertype">
                                                    <h6>
                                                        <span class="text-left">Type</span>
                                                        <span class="text-right">Essay</span>
                                                    </h6>
                                                </div>
                                                <div class="orderlevel">
                                                    <h6>
                                                        <span class="text-left">Level</span>
                                                        <span class="text-right">Doctorate</span>
                                                    </h6>
                                                </div>
                                                <div class="ordercons">
                                                    <h6>
                                                        <span class="cons"><b>Expert</b><br>Thomas Johns</span>
                                                        <span class="wrt_rating">Rating
                                                            <span class="stars-active">
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                            </span>
                                                            <br>
                                                            <span class="satisfiction">Satisfaction 99%</span>
                                                            <br>
                                                            <span class="progress">
                                                                <span class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:99%">
                                                                    <span class="sr-only">99% Complete</span>
                                                                </span>
                                                            </span>
                                                        </span>
                                                    </h6>
                                                </div>
                                                <div class="orderdeadline">
                                                    <h6>
                                                        <span class="text-left">Deadline</span>
                                                        <span class="text-right">48 Hours</span>
                                                    </h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex">
                                        <div class="col-sm-4">
                                            <div class="single-order">
                                                <div class="ordername">
                                                    <h6>
                                                        <span class="text-left">Philip Rawling</span>
                                                    </h6>
                                                </div>
                                                <div class="ordersubject">
                                                    <h6>
                                                        <span class="text-left">Subject</span>
                                                        <span class="text-right">Auditing</span>
                                                    </h6>
                                                </div>
                                                <div class="ordertype">
                                                    <h6>
                                                        <span class="text-left">Type</span>
                                                        <span class="text-right">Analysis</span>
                                                    </h6>
                                                </div>
                                                <div class="orderlevel">
                                                    <h6>
                                                        <span class="text-left">Level</span>
                                                        <span class="text-right">Bachelors</span>
                                                    </h6>
                                                </div>
                                                <div class="ordercons">
                                                    <h6>
                                                        <span class="cons"><b>Expert</b><br>Thomas Johns</span>
                                                        <span class="wrt_rating">Rating
                                                            <span class="stars-active">
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                            </span>
                                                            <br>
                                                            <span class="satisfiction">Satisfaction 100%</span>
                                                            <br>
                                                            <span class="progress">
                                                                <span class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:100%">
                                                                    <span class="sr-only">100% Complete</span>
                                                                </span>
                                                            </span>
                                                        </span>
                                                    </h6>
                                                </div>
                                                <div class="orderdeadline">
                                                    <h6>
                                                        <span class="text-left">Deadline</span>
                                                        <span class="text-right">12 Hours </span>
                                                    </h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="single-order">
                                                <div class="ordername">
                                                    <h6>
                                                        <span class="text-left">Deniese Petterson </span>
                                                    </h6>
                                                </div>
                                                <div class="ordersubject">
                                                    <h6>
                                                        <span class="text-left">Subject</span>
                                                        <span class="text-right">Finance </span>
                                                    </h6>
                                                </div>
                                                <div class="ordertype">
                                                    <h6>
                                                        <span class="text-left">Type</span>
                                                        <span class="text-right">Analysis</span>
                                                    </h6>
                                                </div>
                                                <div class="orderlevel">
                                                    <h6>
                                                        <span class="text-left">Level</span>
                                                        <span class="text-right">Bachelors </span>
                                                    </h6>
                                                </div>
                                                <div class="ordercons">
                                                    <h6>
                                                        <span class="cons"><b>Expert</b><br>Betsy Jackson</span>
                                                        <span class="wrt_rating">Rating
                                                            <span class="stars-active">
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                            </span>
                                                            <br>
                                                            <span class="satisfiction">Satisfaction 100%</span>
                                                            <br>
                                                            <span class="progress">
                                                                <span class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:100%">
                                                                    <span class="sr-only">100% Complete</span>
                                                                </span>
                                                            </span>
                                                        </span>
                                                    </h6>
                                                </div>
                                                <div class="orderdeadline">
                                                    <h6>
                                                        <span class="text-left">Deadline</span>
                                                        <span class="text-right">06 Hours </span>
                                                    </h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="single-order">
                                                <div class="ordername">
                                                    <h6>
                                                        <span class="text-left">Marry Elms </span>
                                                    </h6>
                                                </div>
                                                <div class="ordersubject">
                                                    <h6>
                                                        <span class="text-left">Subject</span>
                                                        <span class="text-right">Statistical Analysis</span>
                                                    </h6>
                                                </div>
                                                <div class="ordertype">
                                                    <h6>
                                                        <span class="text-left">Type</span>
                                                        <span class="text-right">Numerical Problems</span>
                                                    </h6>
                                                </div>
                                                <div class="orderlevel">
                                                    <h6>
                                                        <span class="text-left">Level</span>
                                                        <span class="text-right">Bachelors </span>
                                                    </h6>
                                                </div>
                                                <div class="ordercons">
                                                    <h6>
                                                        <span class="cons"><b>Expert</b><br>Robert Parmenter</span>
                                                        <span class="wrt_rating">Rating
                                                            <span class="stars-active">
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                            </span>
                                                            <br>
                                                            <span class="satisfiction">Satisfaction 99%</span>
                                                            <br>
                                                            <span class="progress">
                                                                <span class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:99%">
                                                                    <span class="sr-only">99% Complete</span>
                                                                </span>
                                                            </span>
                                                        </span>
                                                    </h6>
                                                </div>
                                                <div class="orderdeadline">
                                                    <h6>
                                                        <span class="text-left">Deadline</span>
                                                        <span class="text-right">05 Days</span>
                                                    </h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="order_completed">
                                    <div class="d-flex">
                                        <div class="col-sm-4">
                                            <div class="single-order">
                                                <div class="ordername">
                                                    <h6>
                                                        <span class="text-left">Edwin Montoya</span>
                                                    </h6>
                                                </div>
                                                <div class="ordersubject">
                                                    <h6>
                                                        <span class="text-left">Subject</span>
                                                        <span class="text-right">Computer Science</span>
                                                    </h6>
                                                </div>
                                                <div class="ordertype">
                                                    <h6>
                                                        <span class="text-left">Type</span>
                                                        <span class="text-right">Research Paper</span>
                                                    </h6>
                                                </div>
                                                <div class="orderlevel">
                                                    <h6>
                                                        <span class="text-left">Level</span>
                                                        <span class="text-right">Graduate</span>
                                                    </h6>
                                                </div>
                                                <div class="ordercons">
                                                    <h6>
                                                        <span class="cons"><b>Expert</b><br>Joseph Wilson</span>
                                                        <span class="wrt_rating">Rating
                                                            <span class="stars-active">
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                            </span>
                                                            <br>
                                                            <span class="satisfiction">Satisfaction 100%</span>
                                                            <br>
                                                            <span class="progress">
                                                                <span class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:100%">
                                                                    <span class="sr-only">100% Complete</span>
                                                                </span>
                                                            </span>
                                                        </span>
                                                    </h6>
                                                </div>
                                                <div class="orderdeadline">
                                                    <h6>
                                                        <span class="text-left">Deadline</span>
                                                        <span class="text-right">Monday, 12:30 PM</span>
                                                    </h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="single-order">
                                                <div class="ordername">
                                                    <h6>
                                                        <span class="text-left">Stacy Carter</span>
                                                    </h6>
                                                </div>
                                                <div class="ordersubject">
                                                    <h6>
                                                        <span class="text-left">Subject</span>
                                                        <span class="text-right">Management Sciences</span>
                                                    </h6>
                                                </div>
                                                <div class="ordertype">
                                                    <h6>
                                                        <span class="text-left">Type</span>
                                                        <span class="text-right">Research Proposal</span>
                                                    </h6>
                                                </div>
                                                <div class="orderlevel">
                                                    <h6>
                                                        <span class="text-left">Level</span>
                                                        <span class="text-right">Undergraduate</span>
                                                    </h6>
                                                </div>
                                                <div class="ordercons">
                                                    <h6>
                                                        <span class="cons"><b>Expert</b><br>Robert Parmenter</span>
                                                        <span class="wrt_rating">Rating
                                                            <span class="stars-active">
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                            </span>
                                                            <br>
                                                            <span class="satisfiction">Satisfaction 100%</span>
                                                            <br>
                                                            <span class="progress">
                                                                <span class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:100%">
                                                                    <span class="sr-only">100% Complete</span>
                                                                </span>
                                                            </span>
                                                        </span>
                                                    </h6>
                                                </div>
                                                <div class="orderdeadline">
                                                    <h6>
                                                        <span class="text-left">Deadline</span>
                                                        <span class="text-right">Thursday, 07:40 AM</span>
                                                    </h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="single-order">
                                                <div class="ordername">
                                                    <h6>
                                                        <span class="text-left">Mandy Mosley</span>
                                                    </h6>
                                                </div>
                                                <div class="ordersubject">
                                                    <h6>
                                                        <span class="text-left">Subject</span>
                                                        <span class="text-right">English </span>
                                                    </h6>
                                                </div>
                                                <div class="ordertype">
                                                    <h6>
                                                        <span class="text-left">Type</span>
                                                        <span class="text-right">Essay</span>
                                                    </h6>
                                                </div>
                                                <div class="orderlevel">
                                                    <h6>
                                                        <span class="text-left">Level</span>
                                                        <span class="text-right">Masters</span>
                                                    </h6>
                                                </div>
                                                <div class="ordercons">
                                                    <h6>
                                                        <span class="cons"><b>Expert</b><br>Mathew Simpson</span>
                                                        <span class="wrt_rating">Rating
                                                            <span class="stars-active">
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                            </span>
                                                            <br>
                                                            <span class="satisfiction">Satisfaction 100%</span>
                                                            <br>
                                                            <span class="progress">
                                                                <span class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:100%">
                                                                    <span class="sr-only">100% Complete</span>
                                                                </span>
                                                            </span>
                                                        </span>
                                                    </h6>
                                                </div>
                                                <div class="orderdeadline">
                                                    <h6>
                                                        <span class="text-left">Deadline</span>
                                                        <span class="text-right">Sunday, 02:00 AM</span>
                                                    </h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex">
                                        <div class="col-sm-4">
                                            <div class="single-order">
                                                <div class="ordername">
                                                    <h6>
                                                        <span class="text-left">Richard Hendricks</span>
                                                    </h6>
                                                </div>
                                                <div class="ordersubject">
                                                    <h6>
                                                        <span class="text-left">Subject</span>
                                                        <span class="text-right">Tourism</span>
                                                    </h6>
                                                </div>
                                                <div class="ordertype">
                                                    <h6>
                                                        <span class="text-left">Type</span>
                                                        <span class="text-right">Essay</span>
                                                    </h6>
                                                </div>
                                                <div class="orderlevel">
                                                    <h6>
                                                        <span class="text-left">Level</span>
                                                        <span class="text-right">Masters</span>
                                                    </h6>
                                                </div>
                                                <div class="ordercons">
                                                    <h6>
                                                        <span class="cons"><b>Expert</b><br>Jason Smith </span>
                                                        <span class="wrt_rating">Rating
                                                            <span class="stars-active">
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                            </span>
                                                            <br>
                                                            <span class="satisfiction">Satisfaction 99%</span>
                                                            <br>
                                                            <span class="progress">
                                                                <span class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:99%">
                                                                    <span class="sr-only">99% Complete</span>
                                                                </span>
                                                            </span>
                                                        </span>
                                                    </h6>
                                                </div>
                                                <div class="orderdeadline">
                                                    <h6>
                                                        <span class="text-left">Deadline</span>
                                                        <span class="text-right">Friday, 04:40 AM</span>
                                                    </h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="single-order">
                                                <div class="ordername">
                                                    <h6>
                                                        <span class="text-left">Cara Herdon</span>
                                                    </h6>
                                                </div>
                                                <div class="ordersubject">
                                                    <h6>
                                                        <span class="text-left">Subject</span>
                                                        <span class="text-right">Law</span>
                                                    </h6>
                                                </div>
                                                <div class="ordertype">
                                                    <h6>
                                                        <span class="text-left">Type</span>
                                                        <span class="text-right">Assignment</span>
                                                    </h6>
                                                </div>
                                                <div class="orderlevel">
                                                    <h6>
                                                        <span class="text-left">Level</span>
                                                        <span class="text-right">Bachelors</span>
                                                    </h6>
                                                </div>
                                                <div class="ordercons">
                                                    <h6>
                                                        <span class="cons"><b>Expert</b><br>Betsy Jackson</span>
                                                        <span class="wrt_rating">Rating
                                                            <span class="stars-active">
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                            </span>
                                                            <br>
                                                            <span class="satisfiction">Satisfaction 100%</span>
                                                            <br>
                                                            <span class="progress">
                                                                <span class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:100%">
                                                                    <span class="sr-only">100% Complete</span>
                                                                </span>
                                                            </span>
                                                        </span>
                                                    </h6>
                                                </div>
                                                <div class="orderdeadline">
                                                    <h6>
                                                        <span class="text-left">Deadline</span>
                                                        <span class="text-right">Thursday, 09:25 PM</span>
                                                    </h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="single-order">
                                                <div class="ordername">
                                                    <h6>
                                                        <span class="text-left">James Barnes </span>
                                                    </h6>
                                                </div>
                                                <div class="ordersubject">
                                                    <h6>
                                                        <span class="text-left">Subject</span>
                                                        <span class="text-right">Personal</span>
                                                    </h6>
                                                </div>
                                                <div class="ordertype">
                                                    <h6>
                                                        <span class="text-left">Type</span>
                                                        <span class="text-right">Dissertation</span>
                                                    </h6>
                                                </div>
                                                <div class="orderlevel">
                                                    <h6>
                                                        <span class="text-left">Level</span>
                                                        <span class="text-right">Graduate</span>
                                                    </h6>
                                                </div>
                                                <div class="ordercons">
                                                    <h6>
                                                        <span class="cons"><b>Expert</b><br>Thomas Johns</span>
                                                        <span class="wrt_rating">Rating
                                                            <span class="stars-active">
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                            </span>
                                                            <br>
                                                            <span class="satisfiction">Satisfaction 100%</span>
                                                            <br>
                                                            <span class="progress">
                                                                <span class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:100%">
                                                                    <span class="sr-only">100% Complete</span>
                                                                </span>
                                                            </span>
                                                        </span>
                                                    </h6>
                                                </div>
                                                <div class="orderdeadline">
                                                    <h6>
                                                        <span class="text-left">Deadline</span>
                                                        <span class="text-right">Monday, 08:14 AM</span>
                                                    </h6>
                                                </div>
                                            </div>
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
    <!--/- States + Order Numbers Ends -->

    <!-- Experts section Starts -->
    <section class="Experts lazyload" data-src="<?= asset_url() ?>front/images/helpbg.png" id="Experts">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 d-flex justify-content-center" style=" padding: 15px; ">
                    <div class="col-sm-5 col-md-5 discount_off wow shake">
                        <hgroup>
                            <h6 class="large_title text-bold text-left white">
                                What's Your Paper Type?
                            </h6>
                        </hgroup>
                        <p style=" margin-top: 15px; color: #484747; ">We'll assign it to an Expert in seconds</p>
                    </div>
                    <div class="col-sm-5 col-md-5 form">
                        <div class="help-form">
                            <form action="<?= base_url('calculate-price') ?>" method="post">
                            <select class="dropp select-css" id="service" name="documentType" style="display: none;">
                            <?php foreach ($type_of_documents as $type_of_document) { ?>

<option value="<?= $type_of_document->name ?>"><?= $type_of_document->name ?></option>

<?php } ?>
                            </select>
                            <span class="available">
                                <span class="hide_first" style=" margin: 2px; color: #484747; ">
                                    <b id="0" class="Level-text">
                                        65
                                        <span class="products">&nbsp;</span>
                                    </b>
                                    <span class="last_hour">Ordered Last Hour</span>
                                </span>
                                <b id="36" class="Level-text">
                                    13
                                    <span class="products">PowerPoint Presentations</span>
                                    <span class="last_hour">Ordered Last Hour</span>
                                </b>
                                <b id="11" class="Level-text">
                                    13
                                    <span class="products">Homeworks</span>
                                    <span class="last_hour">Ordered Last Hour</span>
                                </b>
                                <b id="28" class="Level-text">
                                    06
                                    <span class="products">Creative Expertss</span>
                                    <span class="last_hour">Ordered Last Hour</span>
                                </b>
                                <b id="33" class="Level-text">
                                    07
                                    <span class="products">Reports</span>
                                    <span class="last_hour">Ordered Last Hour</span>
                                </b>
                                <b id="21" class="Level-text">
                                    12
                                    <span class="products">Admission Essays</span>
                                    <span class="last_hour">Ordered Last Hour</span>
                                </b>

                                <b id="15" class="Level-text">
                                    13
                                    <span class="products">Assignments</span>
                                    <span class="last_hour">Ordered Last Hour</span>
                                </b>
                                <b id="1" class="Level-text">
                                    08
                                    <span class="products">Essays</span>
                                    <span class="last_hour">Ordered Last Hour</span>
                                </b>
                                <b id="6" class="Level-text">
                                    02
                                    <span class="products">Theses</span>
                                    <span class="last_hour">Ordered Last Hour</span>
                                </b>
                                <b id="5" class="Level-text">
                                    02
                                    <span class="products">Dissertations</span>
                                    <span class="last_hour">Ordered Last Hour</span>
                                </b>
                                <b id="3" class="Level-text">
                                    07
                                    <span class="products">Research Papers</span>
                                    <span class="last_hour">Ordered Last Hour</span>
                                </b>
                                <b id="2" class="Level-text">
                                    03
                                    <span class="products">Term Papers</span>
                                    <span class="last_hour">Ordered Last Hour</span>
                                </b>
                                <b id="16" class="Level-text">
                                    04
                                    <span class="products">College Papers</span>
                                    <span class="last_hour">Ordered Last Hour</span>
                                </b>
                                <b id="19" class="Level-text">
                                    05
                                    <span class="products">Articles</span>
                                    <span class="last_hour">Ordered Last Hour</span>
                                </b>
                                <b id="20" class="Level-text">
                                    03
                                    <span class="products">Case Studies</span>
                                    <span class="last_hour">Ordered Last Hour</span>
                                </b>
                                <b id="13" class="Level-text">
                                    03
                                    <span class="products">Movie Reviews</span>
                                    <span class="last_hour">Ordered Last Hour</span>
                                </b>
                                <b id="32" class="Level-text">
                                    06
                                    <span class="products">Presentations</span>
                                    <span class="last_hour">Ordered Last Hour</span>
                                </b>
                                <b id="31" class="Level-text">
                                    02
                                    <span class="products">Personal Statements</span>
                                    <span class="last_hour">Ordered Last Hour</span>
                                </b>
                                <b id="12" class="Level-text">
                                    05
                                    <span class="products">Lab Reports</span>
                                    <span class="last_hour">Ordered Last Hour</span>
                                </b>
                                <b id="34" class="Level-text">
                                    04
                                    <span class="products">Scholarship Essays</span>
                                    <span class="last_hour">Ordered Last Hour</span>
                                </b>
                                <b id="27" class="Level-text">
                                    03
                                    <span class="products">Cover Letters</span>
                                    <span class="last_hour">Ordered Last Hour</span>
                                </b>
                                <b id="17" class="Level-text">
                                    03
                                    <span class="products">School Papers</span>
                                    <span class="last_hour">Ordered Last Hour</span>
                                </b>
                                <b id="18" class="Level-text">
                                    02
                                    <span class="products">Speeches</span>
                                    <span class="last_hour">Ordered Last Hour</span>
                                </b>
                                <b id="9" class="Level-text">
                                    04
                                    <span class="products">Book Reviews</span>
                                    <span class="last_hour">Ordered Last Hour</span>
                                </b>
                                <b id="8" class="Level-text">
                                    03
                                    <span class="products">Book Reports</span>
                                    <span class="last_hour">Ordered Last Hour</span>
                                </b>
                                <b id="14" class="Level-text">
                                    02
                                    <span class="products">News Releases</span>
                                    <span class="last_hour">Ordered Last Hour</span>
                                </b>
                                <b id="10" class="Level-text">
                                    05
                                    <span class="products">eBooks</span>
                                    <span class="last_hour">Ordered Last Hour</span>
                                </b>
                                <b id="22" class="Level-text">
                                    04
                                    <span class="products">Annotated Bibliographies</span>
                                    <span class="last_hour">Ordered Last Hour</span>
                                </b>
                                <b id="24" class="Level-text">
                                    05
                                    <span class="products">Argumentative Essays</span>
                                    <span class="last_hour">Ordered Last Hour</span>
                                </b>
                                <b id="23" class="Level-text">
                                    03
                                    <span class="products">Application Letters</span>
                                    <span class="last_hour">Ordered Last Hour</span>
                                </b>
                                <b id="4" class="Level-text">
                                    05
                                    <span class="products">Coursework Assignments</span>
                                    <span class="last_hour">Ordered Last Hour</span>
                                </b>
                                <b id="7" class="Level-text">
                                    05
                                    <span class="products">Research Proposals</span>
                                    <span class="last_hour">Ordered Last Hour</span>
                                </b>
                                <b id="35" class="Level-text">
                                    07
                                    <span class="products">Thesis Proposals</span>
                                    <span class="last_hour">Ordered Last Hour</span>
                                </b>
                                <b id="30" class="Level-text">
                                    08
                                    <span class="products">Literature Reviews</span>
                                    <span class="last_hour">Ordered Last Hour</span>
                                </b>
                                <b id="25" class="Level-text">
                                    03
                                    <span class="products">Biographies</span>
                                    <span class="last_hour">Ordered Last Hour</span>
                                </b>
                                <b id="26" class="Level-text">
                                    06
                                    <span class="products">Business Plans</span>
                                    <span class="last_hour">Ordered Last Hour</span>
                                </b>
                                <b id="37" class="Level-text">
                                    10
                                    <span class="products">Other Papers</span>
                                    <span class="last_hour">Ordered Last Hour</span>
                                </b>
                            </span>
                            <div class="order_btn">
                                <button id="ordernowlink_" type="submit" class="slatebluelarge bgslateblue white" style=" margin-top: 8px; ">Order Now</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/- Experts section Ends -->

    <!-- OurProcess section Starts -->
    <section class="ourprocess text-center lazyload" data-src="<?= asset_url() ?>front/images/process-bg.png" id="ourprocess">
        <div class="container">
            <div class="row">
                <div class="col-sm-5 process_type">
                    <hgroup>
                        <h6 class="exlarge_title text-left">
                            Order<span>&nbsp;Your Paper</span>
                            <br>in<span>&nbsp;4 Simple Steps </span>
                        </h6>
                    </hgroup>
                    <div class="single-process">
                        <div class="img_box process_icons process_icons1"></div>
                        <div class="content_box">
                            <h6 class="exsmall_title blue text-left">
                                Create an Account
                            </h6>
                            <p>

                                If you already have an account, welcome back! If not, it's never too late.
                                Sign up with our easy account creation process and get on-board. Enter your
                                name, email and number in the given form and you are good to go.
                            </p>
                        </div>
                    </div>
                    <div class="single-process">
                        <div class="img_box process_icons process_icons2"></div>
                        <div class="content_box">
                            <h6 class="exsmall_title blue text-left">
                                Tell Us About Your Work
                            </h6>
                            <p>
                                Sit back, relax and take your time to fill up the detailed requirements of
                                your paper. You can either share all the details using our order form or
                                send us an email later so that we can start working on your order right away.
                            </p>
                        </div>
                    </div>
                    <div class="single-process">
                        <div class="img_box process_icons process_icons3"></div>
                        <div class="content_box">
                            <h6 class="exsmall_title blue text-left">
                                Pay for Your Order
                            </h6>
                            <p>
                                Filled up the details via order form? Now it's time to preview the details and make payment
                                using the most reliable payment methods on our website. You can make payment via any credit
                                or debit card that you have.
                            </p>
                        </div>
                    </div>
                    <div class="single-process">
                        <div class="img_box process_icons process_icons4"></div>
                        <div class="content_box">
                            <h6 class="exsmall_title blue text-left">
                                Download File from User Area
                            </h6>
                            <p>
                                We will start working on your paper as soon as the payment
                                is made. We set our deadline way ahead of yours so that you can get your
                                final file before the final deadline. We email you order updates as well.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-7 ourprocess_detail">
                    <div class="detailimg_box lazyload" data-src="<?= asset_url() ?>front/images/Make_an_account.png">
                        <!--***  
                             Detail Process image will be shown here when hovering each process type.
                             This is done with jQuery and Css Backgroung image property   
                            ***-->
                    </div>
                    
                    <div class="row th-btns">
                    
                      <div class="col-md-4">
                        
                        <div class="purple"><a href="tel: +1 (888) 679-1477"><img src="<?= asset_url() ?>front/images/usa2.png"><img src="<?= asset_url() ?>front/images/phone.png"><span>+1 (888) 679-1477</span></a></div>
                        
                      </div>
                        
                        <div class="col-md-4">
                        
                        <div class="lt-bl"><a href="tel: +44 1892 71 0953"><img src="<?= asset_url() ?>front/images/uk2.png"><img src="<?= asset_url() ?>front/images/phone.png"><span>+44 1892 71 0953</span></a></div>
                        
                      </div>
                        
                        <div class="col-md-4">
                        
                        <div class="purple"><a href="tel: +61 2 8011 3862"><img src="<?= asset_url() ?>front/images/aus2.png"><img src="<?= asset_url() ?>front/images/phone.png"><span>+61 2 8011 3862</span></a></div>
                        
                      </div>
                    
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
    <!-- /-OurProcess section Ends -->

    <!-- Expert Contact section Starts -->
    <!-- Expert Contact section Starts -->
<section class="discount discount_copy lazyload" data-src="<?= asset_url() ?>front/images/discountbg.png" id="discountcopy">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 discount_off text-center">
                <hgroup>
                    <h6 class="large_title white">
                        Distinction-worthy paper seems like a far cry?
                        <br>
                        <b>Let an expert do it for you!</b>
                    </h6>
                </hgroup>
                <div class="row justify-content-center contact_buttons">
                    
                    <form name="expert_contactt" id="expert_contactt" action="<?=base_url('calculate-price')?>" method="post">
                    
                    <div class="col-md-12">
                        
                      <div class="row">
                        
                        <div class="col-md-6"><input required type="email" name="email" id="txtEmail" placeholder="Enter your email address here"></div>
                          
                        <div class="col-md-6"><input onKeyPress="if(this.value.length==10) return false;" required type="number" name="phone" id="txtEmail" placeholder="Enter your phone here"></div>
                        
                      </div>
                        
                      <div class="row justify-content-center">
                        
                        <button class="slatebluelarge bgslateblue white" type="submit" id="btnEmaill">I'm Ready to Order</button>
                        
                      </div>
                        
                    </div>
                    
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</section>
<!--/- Expert contact section Ends -->

    <!--/- Expert contact section Ends -->

    <!-- Our Features section Starts -->
    <section class="ourfeatures text-center" id="ourfeatures">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="outer_ourfeaturebox">
                        <hgroup>
                            <h6 class="large_title blue text-center medblack wow shake">
                                Most<span>&nbsp;Exclusive Features</span>&nbsp;Offered<br>for FREE!
                            </h6>
                        </hgroup>
                        <p class="main_paragraph">
                            Check out the coolest features that you will get with each order for free.
                            What's more, you can also top <br class="d-none d-md-block"> them up with the paid features to
                            make your experience worthwhile.
                        </p>
                    </div>
                </div>
                <div class="col-sm-8 features_detail d-block d-md-none">
                    <!--*** This box div will be open By-Default and MouseOut property ***-->
                    <div class="offersdetail_box">
                        <div class="offerimg_box lazyload" data-src="<?= asset_url() ?>front/images/Features_Section.png">
                            <!--***  
                                     Detail Offer image will be shown here when hovering each offer type.
                                    ***-->
                        </div>
                        <p>
                            Get the most reliable and trusted services coupled with an array of
                            FREE and paid features. Whether it's an urgent essay or an extensive
                            dissertation, you can simply give us your work and forget about the rest.
                            We will provide exclusive features with each service to
                            exceed your expectations.
                        </p>
                        <br>
                    </div>
                </div>
                <div class="col-sm-4 features_type">
                    <div class="single-ourfeature wow fadeInLeft">
                        <h6>
                            Free Features
                        </h6>
                        <ul class="wow pulse">
                            <li class="offerfirst">Cover Page</li>
                            <li class="offersecond">Formatting in Any Style</li>
                            <li class="offerthird">Dedicated User Area</li>
                            <li class="offerfour">Unlimited Revisions</li>
                            <li class="offerfive">Referencing & Bibliography</li>
                            <li class="offersix">24/7 Order Tracking</li>
                            <li class="offersix">Plagiarism Report</li>
                        </ul>
                        <h6>
                            Paid Features
                        </h6>
                        <ul class="wow pulse">
                            <li class="offernine">
                                Grammar Check Report
                                <span class="price">$6.75</span>
                            </li>
                            <li class="offerseven">
                                Choose Preferred Expert
                                <span class="price">$8.75</span>
                            </li>
                            <li class="offereight">
                                One Page Summary
                                <span class="price">$8.00</span>
                            </li>
                            <li class="offerten">
                                Abstract Page
                                <span class="price">$8.00</span>
                            </li>
                            <li class="offereleven">
                                Quality Double-Check
                                <span class="price">$3.75</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-8 features_detail">
                    <!--*** This box div will be open By-Default and MouseOut property ***-->
                    <div class="offersdetail_box d-none d-md-block">
                        <div class="offerimg_box lazyload" data-src="<?= asset_url() ?>front/images/Features_Section.png">
                            <!--***  
                                 Detail Offer image will be shown here when hovering each offer type.
                                ***-->
                        </div>
                        <p>
                            Get the most reliable and trusted services coupled with an array of
                            FREE and paid features. Whether it's an urgent essay or an extensive
                            dissertation, you can simply give us your work and forget about the rest.
                            We will provide exclusive features with each service to exceed your expectations.
                        </p>
                    </div>
                    <div class="row th-btns">
                    
                      <div class="col-md-4">
                        
                        <div class="purple"><a href="tel: +1 (888) 679-1477"><img src="<?= asset_url() ?>front/images/usa2.png"><img src="<?= asset_url() ?>front/images/phone.png"><span>+1 (888) 679-1477</span></a></div>
                        
                      </div>
                        
                        <div class="col-md-4">
                        
                        <div class="lt-bl"><a href="tel: +44 1892 71 0953"><img src="<?= asset_url() ?>front/images/uk2.png"><img src="<?= asset_url() ?>front/images/phone.png"><span>+44 1892 71 0953</span></a></div>
                        
                      </div>
                        
                        <div class="col-md-4">
                        
                        <div class="purple"><a href="tel: +61 2 8011 3862"><img src="<?= asset_url() ?>front/images/aus2.png"><img src="<?= asset_url() ?>front/images/phone.png"><span>+61 2 8011 3862</span></a></div>
                        
                      </div>
                    
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /-Our Features section Ends -->

    <!-- Testimonials section Starts -->
      <!-- Testimonials section Starts -->
  <section class="testimonials text-center" id="testimonials">
      <div class="container">
          <div class="row">
              <div class="col-sm-12">
                  <div class="outer_tesimonialsbox">
                      <hgroup>
                          <h6 class="large_title text-center medblack">
                              Hear Out from
                              <span> Our Most Satisfied <br>Customers!</span>
                          </h6>
                      </hgroup>
                      <p class="main_paragraph">
                            Our content customers have a couple of amazing experiences to share about our quality of work and<br> how it helped them improve their grades.
                      </p>
                   </div>
              </div>
              <div class="mx-auto col-sm-10">
                  <div class="carousel slide" data-ride="carousel" data-interval="3000" id="testimonialsslider">

                      <!-- Indicators -->
                      <ol class="carousel-indicators">
                          <li data-target="#testimonialsslider" data-slide-to="0" class="active"></li>
                          <li data-target="#testimonialsslider" data-slide-to="1" class=""></li>
                          <li data-target="#testimonialsslider" data-slide-to="2" class=""></li>
                          <li data-target="#testimonialsslider" data-slide-to="3" class=""></li>
                          <li data-target="#testimonialsslider" data-slide-to="4" class=""></li>
                          <li data-target="#testimonialsslider" data-slide-to="5" class=""></li>
                      </ol>

                      <!-- Wrapper for slides -->
                      <div class="carousel-inner">
                          <div class="carousel-item slides active">
                              <div class="single-testimonials">
                                  <div class="content_box">
                                      <h6>
                                          JOSEPH FROM NEBRASKA
                                      </h6>
                                      <blockquote>
                                          I am a medical student and have good hands when it comes to practice but often fail at Experts complex papers. I had this paper related to human anatomy and needed an expert to edit it for me to highlight my mistakes. I asked for help from Paperly and they nailed it by making change in it.
                                      </blockquote>
                                      <h4>
                                          Medical Student
                                      </h4>
                                      <div class="star_rating">
                                          <span class="stars-active" style="width:100%">
                                              <i class="fa fa-star" aria-hidden="true"></i>
                                              <i class="fa fa-star" aria-hidden="true"></i>
                                              <i class="fa fa-star" aria-hidden="true"></i>
                                              <i class="fa fa-star" aria-hidden="true"></i>
                                          </span>
                                      </div>
                                      <h2>Bachelors</h2>
                                      <h3>45 Minutes Ago</h3>
                                  </div>
                              </div>
                          </div>
                          <div class="carousel-item slides">
                              <div class="single-testimonials">
                                  <div class="content_box">
                                      <h6>
                                          MARTIN FROM TEXAS
                                      </h6>
                                      <blockquote>
                                          I had a research paper related to the history of psychology. History has always been very boring to me. I sat for hours and did the paper but I could not give it a final touch. Paperly peeps helped me there to make it a professional one. They are the best.
                                      </blockquote>
                                      <h4>
                                          Psychology Student
                                      </h4>
                                      <div class="star_rating">
                                          <span class="stars-active" style="width:100%">
                                              <i class="fa fa-star" aria-hidden="true"></i>
                                              <i class="fa fa-star" aria-hidden="true"></i>
                                              <i class="fa fa-star" aria-hidden="true"></i>
                                              <i class="fa fa-star" aria-hidden="true"></i>
                                              <i class="fa fa-star" aria-hidden="true"></i>
                                          </span>
                                      </div>
                                      <h2>Masters</h2>
                                      <h3>2 Days Ago</h3>
                                  </div>
                              </div>
                          </div>
                          <div class="carousel-item slides">
                              <div class="single-testimonials">
                                  <div class="content_box">
                                      <h6>
                                          KUNAL FROM OHIO
                                      </h6>
                                      <blockquote>
                                         I always got loopy while Experts about complex equations involving the operating system timings and execution cycles. I was not sure where to look for help but then I found this website. I must say that Paperly impressed me there and now I know how to crack complex equations!
                                      </blockquote>
                                      <h4>
                                          Computer Science Student
                                      </h4>
                                      <div class="star_rating">
                                          <span class="stars-active" style="width:100%">
                                              <i class="fa fa-star" aria-hidden="true"></i>
                                              <i class="fa fa-star" aria-hidden="true"></i>
                                              <i class="fa fa-star" aria-hidden="true"></i>
                                              <i class="fa fa-star" aria-hidden="true"></i>
                                              <i class="fa fa-star" aria-hidden="true"></i>
                                          </span>
                                      </div>
                                      <h2>Bachelors</h2>
                                      <h3>6 Days Ago</h3>
                                  </div>
                              </div>
                          </div>
                          <div class="carousel-item slides">
                              <div class="single-testimonials">
                                  <div class="content_box">
                                      <h6>
                                          AUSTIN FROM UTAH
                                      </h6>
                                      <blockquote>
                                          I am a digital marketing student. I have abundant ideas but I obviously need assistance while aligning them and making descriptive scripts and voice overs for my videos. I needed someone to work on the script for me and papelry Online sure provided me with that. Excellent Service, great turnaround!
                                      </blockquote>
                                      <h4>
                                          Marketing Student
                                      </h4>
                                      <div class="star_rating">
                                          <span class="stars-active" style="width:100%">
                                              <i class="fa fa-star" aria-hidden="true"></i>
                                              <i class="fa fa-star" aria-hidden="true"></i>
                                              <i class="fa fa-star" aria-hidden="true"></i>
                                              <i class="fa fa-star" aria-hidden="true"></i>
                                              <i class="fa fa-star" aria-hidden="true"></i>
                                          </span>
                                      </div>
                                      <h2>Bachelors</h2>
                                      <h3>3 Hours Ago</h3>
                                  </div>
                              </div>
                          </div>
                          <div class="carousel-item slides">
                              <div class="single-testimonials">
                                  <div class="content_box">
                                      <h6>
                                          MINDY FROM NYC
                                      </h6>
                                      <blockquote>
                                          I teach at a high school to a bunch of kids and am pursuing my Master's in education. It often gets really tough to keep up with the deadlines because of the school's activities. So, I was in dire need of some academic Experts help and I must say, that Paperly Online proved to be the best!
                                      </blockquote>
                                      <h4>
                                          Teacher at Local School
                                      </h4>
                                      <div class="star_rating">
                                          <span class="stars-active" style="width:100%">
                                              <i class="fa fa-star" aria-hidden="true"></i>
                                              <i class="fa fa-star" aria-hidden="true"></i>
                                              <i class="fa fa-star" aria-hidden="true"></i>
                                              <i class="fa fa-star" aria-hidden="true"></i>
                                              <i class="fa fa-star" aria-hidden="true"></i>
                                          </span>
                                      </div>
                                      <h2>Master</h2>
                                      <h3>3 Days Ago</h3>
                                  </div>
                              </div>
                          </div>
                          <div class="carousel-item slides">
                              <div class="single-testimonials">
                                  <div class="content_box">
                                      <h6>
                                          CAMERON FROM LA
                                      </h6>
                                      <blockquote>
                                          I was assigned a project in one of my courses to design pro-level mockups for a site. I needed assistance in making perfect textual content for every section of my mock-ups. I researched a bit about it and found the best available on the internet, I will definitely recommend Paperly Online to you!
                                      </blockquote>
                                      <h4>
                                          Ph.D. Student of HCI
                                      </h4>
                                      <div class="star_rating">
                                          <span class="stars-active" style="width:100%">
                                              <i class="fa fa-star" aria-hidden="true"></i>
                                              <i class="fa fa-star" aria-hidden="true"></i>
                                              <i class="fa fa-star" aria-hidden="true"></i>
                                              <i class="fa fa-star" aria-hidden="true"></i>
                                              <i class="fa fa-star" aria-hidden="true"></i>
                                          </span>
                                      </div>
                                      <h2>Doctorate</h2>
                                      <h3>12 Hours Ago</h3>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!--/- Testimonials section Ends -->

    <!--/- Testimonials section Ends -->

    <!--Top Universities section Starts -->
    <section class="topuniversities" id="topuniversities">
        <div class="container text-center uni_logos">
            <div class="row">
                <div class="col-sm-12">
                    <hgroup>
                        <h6 class="large_title text-centertext-bold">
                            Our experts are the <br> <span>Alumni of Reputable Universities</span>
                        </h6>
                    </hgroup>
                </div>
                <div class="col-md-2 col-sm-3 col-xs-12">
                    <div class="univ_logos univ_logos1"></div>
                </div>
                <div class="col-md-2 col-sm-3 col-xs-12">
                    <div class="univ_logos univ_logos2"></div>
                </div>
                <div class="col-md-2 col-sm-3 col-xs-12">
                    <div class="univ_logos univ_logos3"></div>
                </div>
                <div class="col-md-2 col-sm-3 col-xs-12">
                    <div class="univ_logos univ_logos4"></div>
                </div>
                <div class="col-md-2 col-sm-3 col-xs-12">
                    <div class="univ_logos univ_logos5"></div>
                </div>
                <div class="col-md-2 col-sm-3 col-xs-12">
                    <div class="univ_logos univ_logos6"></div>
                </div>
            </div>
        </div>
    </section>
    <!--/- Top Universities section Ends -->

    <!-- Paper Samples section Starts -->
    <section class="papersamples" id="papersamples">
        <div class="container text-center uni_logos">
            <div class="row">
                <div class="col-sm-12">
                    <hgroup>
                        <h6 class="large_title text-center white text-bold">
                            Samples of Work We Do
                        </h6>
                    </hgroup>
                    <p class="main_paragraph white marg-0">
                        Preview. Read. Order. Repeat.
                    </p>
                    <div class="carousel slide" data-ride="carousel" data-interval="5000" id="papersample">

                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#papersample" data-slide-to="0" class="active"></li>
                            <li data-target="#papersample" data-slide-to="1" class=""></li>
                            <li data-target="#papersample" data-slide-to="2" class=""></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="carousel-item slides active">
                                <div class="d-flex">
                                    <div class="col-sm-4">
                                        <div class="single-papersample">
                                            <div class="paperinfo">
                                                <h6>
                                                    Research Proposal
                                                    <img src="<?= asset_url() ?>front/images/samplepdf.png" data-src="<?= asset_url() ?>front/images/samplepdf.png" alt="Sample Pdf" class="lazyload animated wobble">
                                                    <span>Undergraduate, 13 Pages</span>
                                                </h6>
                                            </div>
                                            <div class="paperdesc">
                                                <p>
                                                    An Inquiry about On-Line Text-Based Communication in the Autistic Community.
                                                </p>
                                            </div>
                                            <div class="download_buttons d-flex">
                                                <div class="col-sm-6 ">
                                                    <a href="<?=base_url('calculate-price')?>" class="callbtn">
                                                        <div class="sample_view_icon sample_view_icon1"></div>
                                                        <span>Get Started</span>
                                                    </a>
                                                </div>
                                                <div class="col-sm-6">
                                                    <a href="javascript:void();" class="downloadbtn" data-toggle="modal" data-file="https://drive.google.com/file/d/1TB9cUWYPZwwKCs8nkujDEeDb7c0QX5oQ/preview" data-target="#Sample_Modal">
                                                        <div class="sample_view_icon sample_view_icon2"></div>
                                                        <span>Paperly Sample</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="single-papersample">
                                            <div class="paperinfo">
                                                <h6>
                                                    Business Case Study
                                                    <img src="<?= asset_url() ?>front/images/samplepdf.png" data-src="<?= asset_url() ?>front/images/samplepdf.png" alt="Sample Pdf" class="lazyload animated wobble">
                                                    <span>High School, 6 Pages</span>
                                                </h6>
                                            </div>
                                            <div class="paperdesc">
                                                <p>
                                                    SWOT (Strengths, Weaknesses, Opportunities, Threat) Analysis of Amazon.
                                                </p>
                                            </div>
                                            <div class="download_buttons d-flex">
                                                <div class="col-sm-6">
                                                    <a href="<?=base_url('calculate-price')?>" class="callbtn">
                                                        <div class="sample_view_icon sample_view_icon1"></div>
                                                        <span>Get Started</span>
                                                    </a>
                                                </div>
                                                <div class="col-sm-6">
                                                    <a href="javascript:void();" class="downloadbtn" data-toggle="modal" data-file="https://drive.google.com/file/d/1hCofmxVR6iH-nEfl-m32zSlAKApc6hrH/preview" data-target="#Sample_Modal">
                                                        <div class="sample_view_icon sample_view_icon2"></div>
                                                        <span>Paperly Sample</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="single-papersample">
                                            <div class="paperinfo">
                                                <h6>
                                                    Research Paper
                                                    <img src="<?= asset_url() ?>front/images/samplepdf.png" data-src="<?= asset_url() ?>front/images/samplepdf.png" alt="Sample Pdf" class="lazyload animated wobble">
                                                    <span>Masters, 4 Pages</span>
                                                </h6>
                                            </div>
                                            <div class="paperdesc">
                                                <p>
                                                    Analysis of Stability of the Government of the United States.
                                                </p>
                                            </div>
                                            <div class="download_buttons d-flex">
                                                <div class="col-sm-6 ">
                                                    <a href="<?=base_url('calculate-price')?>" class="callbtn">
                                                        <div class="sample_view_icon sample_view_icon1"></div>
                                                        <span>Get Started</span>
                                                    </a>
                                                </div>
                                                <div class="col-sm-6">
                                                    <a href="javascript:void();" class="downloadbtn" data-toggle="modal" data-file="https://drive.google.com/file/d/1qigUeHSfMDXgw0SQ0cX8rLxM0XwlTNBt/preview" data-target="#Sample_Modal">
                                                        <div class="sample_view_icon sample_view_icon2"></div>
                                                        <span>Paperly Sample</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item slides">
                                <div class="d-flex">
                                    <div class="col-sm-4">
                                        <div class="single-papersample">
                                            <div class="paperinfo">
                                                <h6>
                                                    Methodology
                                                    <img src="<?= asset_url() ?>front/images/samplepdf.png" data-src="<?= asset_url() ?>front/images/samplepdf.png" alt="Sample Pdf" class="lazyload animated wobble">
                                                    <span>Undergraduate, 6 Pages</span>
                                                </h6>
                                            </div>
                                            <div class="paperdesc">
                                                <p>
                                                    Firearm Violence and how African Americans Youth Prevent It?
                                                </p>
                                            </div>
                                            <div class="download_buttons d-flex">
                                                <div class="col-sm-6 ">
                                                    <a href="<?=base_url('calculate-price')?>" class="callbtn">
                                                        <div class="sample_view_icon sample_view_icon1"></div>
                                                        <span>Get Started</span>
                                                    </a>
                                                </div>
                                                <div class="col-sm-6">
                                                    <a href="javascript:void();" class="downloadbtn" data-toggle="modal" data-file="https://drive.google.com/file/d/1-69EHnxvJk4qqSVZC9sylkbSPAQjQ7jb/preview" data-target="#Sample_Modal">
                                                        <div class="sample_view_icon sample_view_icon2"></div>
                                                        <span>Paperly Sample</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="single-papersample">
                                            <div class="paperinfo">
                                                <h6>
                                                    Research Proposal
                                                    <img src="<?= asset_url() ?>front/images/samplepdf.png" data-src="<?= asset_url() ?>front/images/samplepdf.png" alt="Sample Pdf" class="lazyload animated wobble">
                                                    <span>Masters, 13 Pages</span>
                                                </h6>
                                            </div>
                                            <div class="paperdesc">
                                                <p>
                                                    The Impact of Bank Mergers and Acquisition on Banking Productivity.
                                                </p>
                                            </div>
                                            <div class="download_buttons d-flex">
                                                <div class="col-sm-6 ">
                                                    <a href="<?=base_url('calculate-price')?>" class="callbtn">
                                                        <div class="sample_view_icon sample_view_icon1"></div>
                                                        <span>Get Started</span>
                                                    </a>
                                                </div>
                                                <div class="col-sm-6">
                                                    <a href="javascript:void();" class="downloadbtn" data-toggle="modal" data-file="https://drive.google.com/file/d/1qar4s9M-hon8cNc6IAGp7jNM6nFplhaN/preview" data-target="#Sample_Modal">
                                                        <div class="sample_view_icon sample_view_icon2"></div>
                                                        <span>Paperly Sample</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="single-papersample">
                                            <div class="paperinfo">
                                                <h6>
                                                    College Response Paper
                                                    <img src="<?= asset_url() ?>front/images/samplepdf.png" data-src="<?= asset_url() ?>front/images/samplepdf.png" alt="Sample Pdf" class="lazyload animated wobble">
                                                    <span>College, 4 Pages</span>
                                                </h6>
                                            </div>
                                            <div class="paperdesc">
                                                <p>
                                                    GMF (Genetically Modified Food)- Biological Sciences Research and analysis.
                                                </p>
                                            </div>
                                            <div class="download_buttons d-flex">
                                                <div class="col-sm-6 ">
                                                    <a href="<?=base_url('calculate-price')?>" class="callbtn">
                                                        <div class="sample_view_icon sample_view_icon1"></div>
                                                        <span>Get Started</span>
                                                    </a>
                                                </div>
                                                <div class="col-sm-6">
                                                    <a href="javascript:void();" class="downloadbtn" data-toggle="modal" data-file="https://drive.google.com/file/d/167OKqcxCaoKLamogdN2vqb4fEk-lsD66/preview" data-target="#Sample_Modal">
                                                        <div class="sample_view_icon sample_view_icon2"></div>
                                                        <span>Paperly Sample</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item slides">
                                <div class="d-flex">
                                    <div class="col-sm-4">
                                        <div class="single-papersample">
                                            <div class="paperinfo">
                                                <h6>
                                                    Research Paper
                                                    <img src="<?= asset_url() ?>front/images/samplepdf.png" data-src="<?= asset_url() ?>front/images/samplepdf.png" alt="Sample Pdf" class="lazyload animated wobble">
                                                    <span>Graduate, 7 Pages</span>
                                                </h6>
                                            </div>
                                            <div class="paperdesc">
                                                <p>
                                                    Story of a Warrior: Beowulf.
                                                    Story of a great warrior and his bravery.

                                                </p>
                                            </div>
                                            <div class="download_buttons d-flex">
                                                <div class="col-sm-6 ">
                                                    <a href="<?=base_url('calculate-price')?>" class="callbtn">
                                                        <div class="sample_view_icon sample_view_icon1"></div>
                                                        <span>Get Started</span>
                                                    </a>
                                                </div>
                                                <div class="col-sm-6">
                                                    <a href="javascript:void();" class="downloadbtn" data-toggle="modal" data-file="https://drive.google.com/file/d/1w1FVfLLt9irDrE1KdHNn7mgcPBKTt-Ct/preview" data-target="#Sample_Modal">
                                                        <div class="sample_view_icon sample_view_icon2"></div>
                                                        <span>Paperly Sample</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="single-papersample">
                                            <div class="paperinfo">
                                                <h6>
                                                    Business Paper
                                                    <img src="<?= asset_url() ?>front/images/samplepdf.png" data-src="<?= asset_url() ?>front/images/samplepdf.png" alt="Sample Pdf" class="lazyload animated wobble">
                                                    <span>Undergraduate, 5 Pages</span>
                                                </h6>
                                            </div>
                                            <div class="paperdesc">
                                                <p>
                                                    Significant Pointers from Porter's Strategy Lecture. An Analysis.
                                                </p>
                                            </div>
                                            <div class="download_buttons d-flex">
                                                <div class="col-sm-6 ">
                                                    <a href="<?=base_url('calculate-price')?>" class="callbtn">
                                                        <div class="sample_view_icon sample_view_icon1"></div>
                                                        <span>Get Started</span>
                                                    </a>
                                                </div>
                                                <div class="col-sm-6">
                                                    <a href="javascript:void();" class="downloadbtn" data-toggle="modal" data-file="https://drive.google.com/file/d/1A33VlHt8BC1gOPGN7l0_s_rV0YOLDFlP/preview" data-target="#Sample_Modal">
                                                        <div class="sample_view_icon sample_view_icon2"></div>
                                                        <span>Paperly Sample</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="single-papersample">
                                            <div class="paperinfo">
                                                <h6>
                                                    Research Proposal
                                                    <img src="<?= asset_url() ?>front/images/samplepdf.png" data-src="<?= asset_url() ?>front/images/samplepdf.png" alt="Sample Pdf" class="lazyload animated wobble">
                                                    <span>Undergraduate, 13 Pages</span>
                                                </h6>
                                            </div>
                                            <div class="paperdesc">
                                                <p>
                                                    An Inquiry about On-Line Text-Based Communication in the Autistic Community.
                                                </p>
                                            </div>
                                            <div class="download_buttons d-flex">
                                                <div class="col-sm-6 ">
                                                    <a href="<?=base_url('calculate-price')?>" class="callbtn">
                                                        <div class="sample_view_icon sample_view_icon1"></div>
                                                        <span>Get Started</span>
                                                    </a>
                                                </div>
                                                <div class="col-sm-6">
                                                    <a href="javascript:void();" class="downloadbtn" data-toggle="modal" data-file="https://drive.google.com/file/d/1k4XGqJyOAE8zwp-R5Jwr2ACuvpqUtABf/preview" data-target="#Sample_Modal">
                                                        <div class="sample_view_icon sample_view_icon2"></div>
                                                        <span>Paperly Sample</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--*********** Paper Sample Modal Starts *************-->

                    ﻿<!--*********** Paper Sample Modal Starts *************-->
<div class="modal fade preview_sample_modal multi_smaple" id="Sample_Modal" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <button class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">x</span>
            </button>
            <div class="modal-body">
                <div class="sample_item">
                    <!-- ====== Sample document view using PDF/ Iframe ====== -->
                    <div class="sample_viewer set-margin-cicis-menu-to-go set-padding-cicis-menu-to-go set-border-cicis-menu-to-go set-box-shadow-cicis-menu-to-go center-block-horiz">
                        <div class="responsive-wrapper responsive-wrapper-padding-bottom-90pct" style="-webkit-overflow-scrolling: touch; overflow: auto;">
                            <iframe id="iframe" sandbox="allow-same-origin allow-scripts"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--*********** Paper Sample Modal Ends *************-->
                    <!--*********** Paper Sample Modal Ends *************-->
                </div>
            </div>
        </div>
    </section>
    <!-- Paper Samples section Starts -->

    <!-- Our Help section Starts -->
    <section class="ourhelp" id="ourhelp">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="outer_ourhelpbox">
                        <hgroup>
                            <h6 class="large_title text-center medblack wow shake">
                                Reasons Why <span> 500+ Students Sign Up for<br class="d-none d-md-block">
                                    Our Services Every Month
                                </span>
                            </h6>
                        </hgroup>
                        <p class="main_paragraph">
                            We do your work proactively and go the extra mile to get it done the
                            way you want. Know more about<br class="d-none d-md-block"> our quality dealings.
                        </p>
                    </div>
                </div>
                <div class="col-sm-12 justify-content-center d-flex">
                    <div class="col-sm-6 help_type">
                        <div class="out_box">
                            <div class="single-ourhelp">
                                <h6>
                                    <span></span>You can Hire Subject Specialists
                                </h6>
                                <p>
                                    Nothing is difficult for our team. You can assign your tasks to our team even for
                                    uncommon and unique courses.
                                </p>
                            </div>
                        </div>
                        <div class="out_box">
                            <div class="single-ourhelp">
                                <h6>
                                    <span></span>Your Guidelines are Never Mixed Up
                                </h6>
                                <p>
                                    Your paper will exactly mirror the guidelines. Even with 300 - 400 Experts tasks
                                    to manage every day, we never mess up guidelines.
                                </p>
                            </div>
                        </div>
                        <div class="out_box">
                            <div class="single-ourhelp">
                                <h6>
                                    <span></span>We Stay Connected with You 24/7
                                </h6>
                                <p>
                                    We tell you about each step we are performing via email notifications.
                                    What's more, you can start a live chat anytime to get the latest updates.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 features_detail wow fadeInUp">
                        <!--*** This box div will be open By-Default and MouseOut property ***-->
                        <div class="helpdetail_box fadeInDown">
                            <div class="helpdetailimg_box lazyload" data-src="<?= asset_url() ?>front/images/Subject-Specialists.png">
                                <!--***  
                                 Detail Offer image will be shown here when hovering each offer type.
                                ***-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Subject we cover section Starts -->
    <!-- Subject we cover section Starts -->
<section class="subjectwecover" id="subjectwecover">
    <div class="container">
        <div class="row row-eq-height">
            <div class="col-sm-12">
                <hgroup>
                    <h6 class="large_title text-center blue text-bold">
                        Subject Areas We Cover
                    </h6>
                </hgroup>
            </div>
            <div class="col-sm-12 d-flex subjectcover">
                <div class="slide subject_logos">
                    <div class="slide_icon icon1"></div>
                    <p>Accounting</p>
                </div>
                <div class="slide subject_logos">
                    <div class="slide_icon icon2"></div>
                    <p>Alternative Medicine</p>
                </div>
                <div class="slide subject_logos">
                    <div class="slide_icon icon3"></div>
                    <p>Art</p>
                </div>
                <div class="slide subject_logos">
                    <div class="slide_icon icon4"></div>
                    <p>Auditing</p>
                </div>
                <div class="slide subject_logos">
                    <div class="slide_icon icon5"></div>
                    <p>Biology</p>
                </div>
                <div class="slide subject_logos">
                    <div class="slide_icon icon6"></div>
                    <p>Business</p>
                </div>
                <div class="slide subject_logos">
                    <div class="slide_icon icon7"></div>
                    <p>Chemistry</p>
                </div>
                <div class="slide subject_logos">
                    <div class="slide_icon icon8"></div>
                    <p>Communications and Media</p>
                </div>
                <div class="slide subject_logos">
                    <div class="slide_icon icon9"></div>
                    <p>Economics</p>
                </div>
                <div class="slide subject_logos">
                    <div class="slide_icon icon10"></div>
                    <p>Education</p>
                </div>
                <div class="slide subject_logos">
                    <div class="slide_icon icon11"></div>
                    <p>Engineering</p>
                </div>
                <div class="slide subject_logos">
                    <div class="slide_icon icon12"></div>
                    <p>English</p>
                </div>
                <div class="slide subject_logos">
                    <div class="slide_icon icon13"></div>
                    <p>Ethics</p>
                </div>
                <div class="slide subject_logos">
                    <div class="slide_icon icon14"></div>
                    <p>Finance</p>
                </div>
                <div class="slide subject_logos">
                    <div class="slide_icon icon15"></div>
                    <p>Financial Analysis</p>
                </div>
                <div class="slide subject_logos">
                    <div class="slide_icon icon16"></div>
                    <p>History</p>
                </div>
                <div class="slide subject_logos">
                    <div class="slide_icon icon17"></div>
                    <p>Law</p>
                </div>
                <div class="slide subject_logos">
                    <div class="slide_icon icon18"></div>
                    <p>Literature</p>
                </div>
                <div class="slide subject_logos">
                    <div class="slide_icon icon19"></div>
                    <p>Management</p>
                </div>
                <div class="slide subject_logos">
                    <div class="slide_icon icon20"></div>
                    <p>Marketing</p>
                </div>
                <div class="slide subject_logos">
                    <div class="slide_icon icon21"></div>
                    <p>Mathematics</p>
                </div>
                <div class="slide subject_logos">
                    <div class="slide_icon icon22"></div>
                    <p>Medicine and Health</p>
                </div>
                <div class="slide subject_logos">
                    <div class="slide_icon icon23"></div>
                    <p>Nature</p>
                </div>
                <div class="slide subject_logos">
                    <div class="slide_icon icon24"></div>
                    <p>Philosophy</p>
                </div>
                <div class="slide subject_logos">
                    <div class="slide_icon icon25"></div>
                    <p>Physics</p>
                </div>
                <div class="slide subject_logos">
                    <div class="slide_icon icon26"></div>
                    <p>Political Science</p>
                </div>
                <div class="slide subject_logos">
                    <div class="slide_icon icon27"></div>
                    <p>Psychology</p>
                </div>
                <div class="slide subject_logos">
                    <div class="slide_icon icon28"></div>
                    <p>Religion and Theology</p>
                </div>
                <div class="slide subject_logos">
                    <div class="slide_icon icon29"></div>
                    <p>Sociology</p>
                </div>
                <div class="slide subject_logos">
                    <div class="slide_icon icon30"></div>
                    <p>Statistical Analysis</p>
                </div>
                <div class="slide subject_logos">
                    <div class="slide_icon icon31"></div>
                    <p>Statistics</p>
                </div>
                <div class="slide subject_logos">
                    <div class="slide_icon icon32"></div>
                    <p>Technology</p>
                </div>
                <div class="slide subject_logos">
                    <div class="slide_icon icon33"></div>
                    <p>Tourism</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Subject we cover section Ends -->
    <!--/-  Subject we cover section Ends -->

</main>

                <!-- Discount modal -->
                <div id="discountmodal" class="modal discountmodal" tabindex="1" role="dialog" aria-labelledby="discountmodal" aria-hidden="true">
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
                                    You can start a live chat right now to get your discount promo for this discount offer.
                                    This offer is available for a limited number of customers.
                                </p>
                                <a class="modal_dimiss hide_discountmodal">Hurry up, last 5 discount promos left!</a>
                                <div class="discount_button">
                                    <a href="<?=base_url('calculate-price');?>" class="hide_discountmodal">COUNT ME IN FOR 50% OFF</a>
                                </div>
                                <p class="valid">Discount Offer Expires In</p>
                                <div class="counter" id="timer">
                                    <ul>
                                        <!--<li><span id="days"></span>Days</li>-->
                                        <li><span class="hours" id="hours"></span>Hours</li>
                                        <li><span class="minutes" id="minutes"></span>Mins</li>
                                        <li><span class="seconds" id="seconds"></span>Secs</li>
                                    </ul>
                                    <p>Join hundreds of students who use our Experts services to achieve academic success.</p>
                                </div>
                                <div class="row row-eq-height seals_wrap">                                    
                                    <div class="col-md-6">
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
                                    <div class="col-md-6 bdr_0">
                                        <div class="popup_reviews">
                                            <div class="review_logo review_logo2"></div>
                                            <div class="star_rating">
                                                <h1>&nbsp;
                                                    <span class="stars-active" style="width: 100%">
                                                        <img src="<?= asset_url() ?>front/images/star-4.8.png" class="img-fluid" alt="star-4.8">
                                                    </span>
                                                </h1>
                                                <h2>
                                                    <span class="rating">Excellent</span>
                                                    <span class="vl"></span>
                                                    <span class="text-right">Trust Score&nbsp;<b>4.8</b>
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