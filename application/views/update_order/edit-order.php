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

         #pos-fix {
             position: inherit !important;
         }
     }

     .radio-btn-cont {
         cursor: pointer;
     }

     /* #pos-fix {         position: fixed;         right: 11%;     }     .top-fix {         top: 1%;         z-index: 999999;     } */
 </style> <!--Ticker-->
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
     <div class="ticker" style="padding:0px 0px !important; background-color: transparent;">
         <aside class="d-playbox"> <!-- DEMO begin -->
             <div class="d-demo-wrap"> </div> <!-- DEMO end -->
         </aside>
     </div>
 </div> <!--Ticker-->
 <div class="container-fluid main-bg-2" style="padding:0px">
     <div class="discount-message sticky" style="z-index:100">
         <marquee id="marquee">Avail Additional 10% Discount On Next Step.</marquee>
     </div>
     <div style="display: none;" id="loader-wrapper">
         <div id="loader"></div>
         <div class="loader-section section-left"></div>
         <div class="loader-section section-right"></div>
     </div>
     <div class="container count">
         <div class="row container-div df">
             <div id="divId" class="col-md-7 form-outer-cont ord-cont-2 top-div " style="margin-bottom:30px">
                 <div id="please-fill" style="background:transparent !important; display: nonee;" class="red-hd">
                     <p style="font-size: 20px" class="mobile-detail" id="step3-top-text">Please Fill In The Details Below To Calculate Your Discounted Price</p>
                 </div>
                 <div class="blue-heading ">Calculate Your Price</div>
                 <div class=""> <span class="step price-calculation active">
                         <div class="heading steps-heading top-padding "><span>1</span>Price Calculation </div>
                     </span> <span class="step order-details">
                         <div class="heading steps-heading"><span>2</span>Order Details </div>
                     </span> <span class="step review-info">
                         <div class="heading steps-heading"><span>3</span>Review Info </div>
                     </span> </div>
                 <form name="formProceed" id="formProceed" action="<?= base_url() ?>proceed_to_pay" method="post" class="require-validation" data-cc-on-file="false" data-stripe-publishable-key="<?php echo $this->config->item('stripe_key') ?>" id="payment-form" enctype="multipart/form-data"> <!-- Process 1 -->
                     <div class="order-form step-one-content">
                         <div class="ord-cont order-outer-cont">
                             <div class="row">
                                 <div class="col-md-8">
                                     <div class="form-group inp margin-btm"> <label class="control-label">Phone:</label> <input onKeyPress="if(this.value.length==14) return false;" value="<?=isset($order->user_phone)?$order->user_phone:''; ?>" placeholder="Enter phone number" name="phone" onchange="saveData(1,'phone');" id="phone" type="number" class="form-control"> <!--<input onKeyPress="if(this.value.length==10) return false;" value="" name="phone" onchange="saveData();" id="phone" type="number" class="form-control">--> <span id="valid-msg" class="hide">Valid</span> <span id="error-msg" class="hide">Invalid number</span> </div>
                                     <p style="color:red;" id="phone-message"></p>
                                 </div>
                                 <div class="col-md-4">
                                     <div class="form-group inp margin-btm">
                                         <label class="control-label">Currency:</label>
                                         <select name="currency" id="currency" class="select-css-2" onchange="saveData(1,'currency');">
                                             <option value="USD" <?=($order->paid_in=='USD')?'selected':''?>>$ USD</option>
                                             <option value="CAD"<?=($order->paid_in=='CAD')?'selected':''?>>C$ CAD</option>
                                             <option value="AUD"<?=($order->paid_in=='AUD')?'selected':''?>>A$ AUD</option>
                                             <option value="GBP"<?=($order->paid_in=='GBP')?'selected':''?>>£ GBP</option>
                                             <option value="EUR"<?=($order->paid_in=='EUR')?'selected':''?>>€ EUR</option>
                                         </select>
                                     </div>
                                 </div>
                             </div>
                             <div class="row">
                                 <div class="col-md-12">
                                     <div class="form-group"> <label class="control-label">Type Of Document:</label> <select name="documentType" id="documentType" class="select-css-2" onchange="saveData(0,'documentType');">
                                             <option value="">Select Document Type</option> <?php foreach ($type_of_documents as $type_of_document) { ?> <option value="<?= $type_of_document->name ?>" <?php if (isset($order->document_type) && ($type_of_document->name == $order->document_type)) {
                                                                                                                                                                                                            echo 'selected="selected"';
                                                                                                                                                                                                        } else {
                                                                                                                                                                                                            echo '';
                                                                                                                                                                                                        } ?>><?= $type_of_document->name ?></option> <?php } ?>
                                         </select>
                                         <p style="color:red;" id="doc-type-message"></p>
                                     </div>
                                 </div>
                             </div>
                             <div class="row">
                                 <div class="col-md-12" id="otherdocumentType" style="display: none;">
                                     <div class="form-group"> <label class="control-label">Other Document Type:</label> <input type="text" class="form-control" id="otherdocumentType1" onchange="saveData(0,'otherdocumentType1');" placeholder="Other Document Type" name="otherdocumentType" />
                                         <p style="color:red;" id="doc-type-other-message"></p>
                                     </div>
                                 </div>
                             </div> <input value="" type="hidden" id="finger-print" />
                             <div class="row">
                                 <div class="col-md-12">
                                     <div class="form-group margin-btm"> <label for="password" class="col-form-label control-label text-md-right">Academic Level</label>
                                         <div class="">
                                             <div class="row">
                                                 <div class="col-md-3 custom-col">
                                                     <div class="radio-btn-cont"> <input <?php if (isset($order->academic_level) && ($order->academic_level == "High School")) {
                                                                                                echo 'checked';
                                                                                            } else {
                                                                                                echo '';
                                                                                            } ?> onchange="saveData(0,'acedamic_level');" type="radio" value="High School" class="high-school" id="1" name="acedamic_level"> <label id="lbl-high-school" for="1" class="radio-group-label">High School</label> </div>
                                                 </div>
                                                 <div class="col-md-3 custom-col">
                                                     <div id="u-g" class="radio-btn-cont"> <input <?php if (isset($order->academic_level) && ($order->academic_level == "College-undergraduate")) {
                                                                                                        echo 'checked';
                                                                                                    } else {
                                                                                                        echo '';
                                                                                                    } ?> onchange="saveData(0,'acedamic_level');" type="radio" value="College-undergraduate" class="college-undergraduate" id="2" name="acedamic_level"> <label for="2" class="radio-group-label">College-undergraduate</label> </div>
                                                 </div>
                                                 <div class="col-md-3 custom-col">
                                                     <div class="radio-btn-cont"> <input <?php if (isset($order->academic_level) && ($order->academic_level == "Masters")) {
                                                                                                echo 'checked';
                                                                                            } else {
                                                                                                echo '';
                                                                                            } ?> onchange="saveData(0,'acedamic_level');" type="radio" value="Masters" class="masters" id="3" name="acedamic_level"> <label for="3" class="radio-group-label">Masters</label> </div>
                                                 </div>
                                                 <div class="col-md-3 custom-col">
                                                     <div class="radio-btn-cont"> <input <?php if (isset($order->academic_level) && ($order->academic_level == "PHD")) {
                                                                                                echo 'checked';
                                                                                            } else {
                                                                                                echo '';
                                                                                            } ?> onchange="saveData(0,'acedamic_level');" type="radio" value="PHD" class="doctoral" id="4" name="acedamic_level"> <label for="4" class="radio-group-label">Doctoral</label> </div>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                     <p style="color:red;" id="academic-message"></p>
                                 </div>
                             </div>
                             <div class="row">
                                 <div class="col-md-8">
                                     <div class="inp-2"> <label class="control-label">Deadline Date:</label> <input min="<?= date('Y-m-d'); ?>" value="<?php if (isset($order->academic_level)) {
                                                                                                                                                            echo $order->due_date;
                                                                                                                                                        } else {
                                                                                                                                                            echo '';
                                                                                                                                                        } ?>" onchange="saveData(0,'DeadlineDate');" type="date" class="form-control" id="DeadlineDate" placeholder="Select Deadline" name="DeadlineDate"> </div>
                                     <p style="color:red;" id="deadline-message"></p>
                                 </div>
                                 <div class="col-md-4 deadline-pad">
                                     <div class="form-group"> <span class="afTimeOrder"> <select onchange="saveData(0,'hours');" name="hours" id="hours" class="select-css-2"> <?php
                                                                                                                                                                                if (!empty($hours)) {
                                                                                                                                                                                    foreach ($hours as $key) {
                                                                                                                                                                                ?> 
                                                                                                                                                                                <option value="<?= $key->name ?>" <?=(($order->lead_due_time==$key->name))?'selected':''?>><?= $key->name ?></option> <?php
                                                                                                                                                                                                                                            }
                                                                                                                                                                                                                                        }
                                                                                                                                                                                                                                                ?> </select> </span> </div>
                                     <p style="color:red;" id="hours-message"></p>
                                 </div>
                             </div>
                             <div class="row">
                                 <div class="col-md-12">
                                     <div class="form-group"> <label class="control-label">No. of Pages:</label> <select name="pages" id="pages" onchange="saveData(0,'pages');" class="select-css-2">
                                             <option value="">Select No. of Pages</option> <?php
                                                                                            if (!empty($no_of_pages)) {
                                                                                                foreach ($no_of_pages as $key) {
                                                                                            ?>
                                                     <option value="<?= $key->id ?>" <?= ((isset($order->no_of_pages) && $order->no_of_pages == $key->id) ? 'selected' : '') ?>><?= $key->name ?></option>
                                             <?php
                                                                                                }
                                                                                            }
                                                ?>
                                         </select> </div>
                                     <p style="color:red;" id="pages-message"></p>
                                 </div>
                             </div>
                             <div class="row">
                                 <div class="col-md-6">
                                     <p class="mobile-detail" style="font-size:15px !important; font-weight:600; text-transform: none; "><span style="font-weight:bold; color: #030431;">NOTE: </span>Please click on the NEXT button to get 10% extra discount.</p>
                                 </div>
                                 <div class="col-md-6">
                                     <button type="button" onclick="steps('btn-step-one');" class="yellow-btn flip-button" id="save-lead-button"><strong><i class="fa fa-spinner fa-spin text-bold" id="lead-loader" style="display: none;"></i></strong>
                                         <span class="flip-button__front"><strong><i class="fa fa-spinner fa-spin text-bold" id="lead-loader" style="display: none;"></i></strong> Add 10% Extra Discount <i class="fa fa-arrow-right" style="padding-left:10px;" aria-hidden="true"></i></span>
                                         <span class="flip-button__back">Next <i class="fa fa-arrow-right" style="padding-left:10px;" aria-hidden="true"></i>
                                         </span>
                                 </div>
                             </div>
                         </div>
                         <div class="row">
                             <div class="col-md-12">
                                 <div class="pkg-thumb"> <img src="<?= asset_url() ?>portal/images/coupon-locked.webp" alt="Avatar" class="image">
                                     <div class="overlay">
                                         <div class="text"><span class="title-big">Avail Additional Discount in Next Step</span></div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                         <div class="mt-1"></div> <!-- </form> -->
                     </div> <!-- Process 2 -->
                     <div style="display: none;" class="order-form step-two-content order-outer-cont"> <!-- <form id="regForm" action="/action_page.php"> --> <!-- One "tab" for each step in the form: --> <!-- Tab -->
                         <div class="">
                             <div class="">
                                 <div class="">
                                     <div class="row">
                                         <div class="col-md-12"> <img src="<?= asset_url() ?>portal/images/coupon-unlocked.webp" class="img-responsive" /><br /> </div>
                                     </div>
                                     <div class="row">
                                         <div class="col-md-6">
                                             <div class="form-group inp margin-btm"> <label class="control-label">Name:</label> <input onchange="saveData(0,'name');" type="text" class="form-control" id="name" name="name" value="<?=isset($order->user_name)?$order->user_name:''?>"> </div>
                                             <p style="color:red;" id="name-message"></p>
                                         </div>
                                         <div class="col-md-6">
                                             <div class="form-group inp margin-btm"> <label class="control-label">Email:</label> <input onchange="saveData(0,'email');" type="email" class="form-control" id="email" name="email" value="<?=isset($order->user_email)?$order->user_email:''?>"> </div>
                                             <p style="color:red;" id="email-message"></p>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="">
                                     <div class="row">
                                         <div class="col-md-12">
                                             <div class="blue-heading" style="text-align:left;">Enter Order Details</div>
                                             <hr class="horizontal-divider">
                                         </div>
                                     </div>
                                     <div class="row">
                                         <div class="col-md-6">
                                             <div class="form-group margin-btm"> <label class="control-label">Subject:</label> <select onchange="saveData(0,'projectsubject');" name="project_subject" class="select-css-2" id="projectsubject">
                                                     <option value="">Select Subject</option> <?php
                                                                                                if (!empty($subjects)) {
                                                                                                    foreach ($subjects as $subject) {
                                                                                                ?> <option value="<?= $subject->name ?>" <?=($order->subject==$subject->name)?'Selected':''?>><?= $subject->name ?></option> <?php
                                                                                                                                                                    }
                                                                                                                                                                }
                                                                                                                                                                        ?>
                                                 </select> </div>
                                             <p style="color:red;" id="project-subject-message"></p>
                                         </div>
                                         <div class="col-md-6">
                                             <div class="form-group inp margin-btm"> <label class="control-label">Topic:</label> <input onchange="saveData(0,'topic');" type="text" class="form-control" id="topic" placeholder="Topic" value="<?=isset($order->title)?$order->title:''?>" name="topic"> </div>
                                             <p style="color:red;" id="topic-message"></p>
                                         </div>
                                     </div>
                                     <div class="row">
                                         <div class="col-md-12" id="othersubject1" style="display: none;">
                                             <div class="form-group margin-btm"> <label class="control-label">Other Subject: </label> <input type="text" class="form-control" id="otherSubject" placeholder="Other Document Type" name="otherdocumentType" />
                                                 <p style="color:red;" id="other-subject-message"></p>
                                             </div>
                                         </div>
                                     </div>
                                     <div class="row">
                                         <div class="col-md-6">
                                             <div class="form-group inp margin-btm"> <label class="control-label">Number of sources/references:</label> <input onchange="saveData(0,'NumberSources');" name="NumberSources" type="text" class="form-control" id="NumberSources" placeholder="Number of sources/references" name="NumberSources" value="<?=isset($order->name_of_sources)?$order->name_of_sources:''?>"> </div>
                                             <p style="color:red;" id="number-sources-message"></p>
                                         </div>
                                         <div class="col-md-6">
                                             <div class="form-group margin-btm"> <label class="control-label">Citation Style:</label> <select onchange="saveData(0,'otherCitationstyle');" name="citation_style" class="select-css-2" id="otherCitationstyle">
                                                     <option value="">Select Citation Style</option>
                                                     <option value="AMA"<?=($order->citation_style=='AMA')? 'selected':''?>>AMA</option>
                                                     <option value="APA"<?=($order->citation_style=='APA')? 'selected':''?>>APA</option>
                                                     <option value="AMS"<?=($order->citation_style=='AMS')? 'selected':''?>>AMS</option>
                                                     <option value="Chicago"<?=($order->citation_style=='Chicago')? 'selected':''?>>Chicago</option>
                                                     <option value="MLA"<?=($order->citation_style=='MLA')? 'selected':''?>>MLA</option>
                                                     <option value="Turbian"<?=($order->citation_style=='Turbian')? 'selected':''?>>Turbian</option>
                                                     <option value="Harvard"<?=($order->citation_style=='Harvard')? 'selected':''?>>Harvard</option>
                                                     <option value="IEEE"<?=($order->citation_style=='IEEE')? 'selected':''?>>IEEE</option>
                                                     <option value="Other"<?=($order->citation_style=='Other')? 'selected':''?>>Other</option>
                                                 </select> </div>
                                             <p style="color:red;" id="citation-message"></p>
                                         </div>
                                     </div>
                                     <div class="row">
                                         <div class="col-md-12" id="otherCitation" style="display: none;">
                                             <div class="form-group margin-btm"> <label class="control-label">Other Citation:</label> <input type="text" class="form-control" id="otherCitationValue" placeholder="Other Citation" name="otherCitation"> </div>
                                             <p style="color:red;" id="other-citation-message"></p>
                                         </div>
                                     </div>
                                     <div class="row">
                                         <div class="col-md-12">
                                             <div class="form-group inp margin-btm"> <label class="control-label">Description:</label> <textarea onchange="saveData(0,'description');" name="description" id="description" class="form-control" rows="4" cols="50" name="comment"><?=isset($order->description)?$order->description:''?></textarea> </div>
                                             <p style="color:red;" id="description-message"></p>
                                         </div>
                                     </div>
                                     <div class="row">
                                         <div class="col-md-12">
                                             <div class="form-group margin-btm"> <label class="control-label">Attach file (optional):</label> <!-- <input type="file" name="files[]" class="form-group" id="attach" multiple> -->
                                                 <div class="fallback"> <input type="hidden" name="myf" id="myf" value=""> <input id="new-multiple" name="img_post_blog" type="file" multiple /> </div>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                         <div style="overflow:auto;">
                             <div> <a href="javascript:void();" onclick="stepsBack('order-details');" class="prev-btn">Previous</a> <button onclick="steps('btn-step-two');" class="yellow-btn" id="save-order-button"><strong><i class="fa fa-spinner fa-spin text-bold" id="order-loader" style="display: none;"></i></strong>Review and Checkout</button> </div>
                         </div>
                         <div class="mt-1"></div> <!-- </form> -->
                     </div> <!-- end --> <!-- Process 3 -->
                     <div style="display: none;" class="order-form step-three-content"> <!-- <form id="regForm" action="/action_page.php"> -->
                         <div class="">
                             <div class="">
                                 <div class="row">
                                     <div class="col-md-12 thanks-txt">
                                         <div class="ticker-2"><img src="<?= asset_url() ?>portal/images/thanks-ticker.webp" class="img-responsive" /></div>
                                         <div class="thanks-big-txt text-center">Thank you for choosing us!!</div>
                                         <div class="thx-small-txt text-center">Your order will be processed immediately after the conﬁrmation of your payment via our payment processor (Stripe)</div>
                                     </div>
                                 </div>
                                 <div class="row">
                                     <div class="col-md-12">
                                         <div class="main-tab">
                                             <div class="sd-panel-3">
                                                 <div class="col-md-6">Price: <span id="rev-price">$200.00</span></div>
                                                 <div class="col-md-6 txt-r">Order ID: <span id="rev-order_id"></span></div>
                                                 <div class="clearfix"></div>
                                             </div>
                                             <div class="big-title"><span>Paper Title: </span> <span id="rev-paper_title">Title Goes Here</span></div>
                                             <div class="row"> <!-- ------------------Info Table start-------------- -->
                                                 <div class="table-responsive" id="my-table-container">
                                                     <table class="table table-striped table-bordered table-rounded">
                                                         <tbody>
                                                             <tr>
                                                                 <td>
                                                                     <div class="summary-label">Email</div>
                                                                 </td>
                                                                 <td>
                                                                     <div class="summary-val"><span id="rev-email">customer@mail.com</span></div>
                                                                 </td>
                                                             </tr>
                                                             <tr>
                                                                 <td>
                                                                     <div class="summary-label">Contact</div>
                                                                 </td>
                                                                 <td>
                                                                     <div class="summary-val"><span id="rev-phone">+380 122222222</span> </div>
                                                                 </td>
                                                             </tr>
                                                             <tr>
                                                                 <td>
                                                                     <div class="summary-label">Subject</div>
                                                                 </td>
                                                                 <td>
                                                                     <div class="summary-val"><span id="rev-project_subject">Biology and Life Sciences</span></div>
                                                                 </td>
                                                             </tr>
                                                             <tr>
                                                                 <td>
                                                                     <div class="summary-label">Document Type </div>
                                                                 </td>
                                                                 <td>
                                                                     <div class="summary-val"><span id="rev-document_type">Admission Essay</span> </div>
                                                                 </td>
                                                             </tr>
                                                             <tr>
                                                                 <td>
                                                                     <div class="summary-label">No.of Pages </div>
                                                                 </td>
                                                                 <td>
                                                                     <div class="summary-val"><span id="rev-number_pages">4 Pages~ 1200 Words</span> </div>
                                                                 </td>
                                                             </tr>
                                                             <tr>
                                                                 <td>
                                                                     <div class="summary-label">Academic Level</div>
                                                                 </td>
                                                                 <td>
                                                                     <div class="summary-val"> <span id="rev-academic_level">APA</span></div>
                                                                 </td>
                                                             </tr>
                                                             <tr>
                                                                 <td>
                                                                     <div class="summary-label">Deadline </div>
                                                                 </td>
                                                                 <td>
                                                                     <div class="summary-val"><span id="rev-deadline">08/30/2021 </span> <span id="rev-hours">14:00 </span></div>
                                                                 </td>
                                                             </tr>
                                                             <tr>
                                                                 <td>
                                                                     <div class="summary-label">Citation style</div>
                                                                 </td>
                                                                 <td>
                                                                     <div class="summary-val"> <span id="rev-citation_style">ABC</span></div>
                                                                 </td>
                                                             </tr>
                                                             <tr>
                                                                 <td>
                                                                     <div class="summary-label">Sources</div>
                                                                 </td>
                                                                 <td>
                                                                     <div class="summary-val"><span id="rev-sources">10</span></div>
                                                                 </td>
                                                             </tr>
                                                             <tr>
                                                                 <td>
                                                                     <div class="summary-label">Description</div>
                                                                 </td>
                                                                 <td>
                                                                     <div class="summary-val"><span id="rev-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ac nulla felis. Aenean placerat, sem sit amet rutrum laoreet, elit libero iaculis ipsum, eget tincidunt nibh elit non nisi.</span></div>
                                                                 </td>
                                                             </tr>
                                                         </tbody>
                                                     </table>
                                                 </div> <!-- -------------------Info table end------------------ --> <input type="hidden" name="total_price" id="o-price" />
                                                 <input type="hidden" name="finger-print" id="finger-print" />
                                                 <input type="hidden" name="total" id="totalp" />
                                                 <input type="hidden" name="totalp_usd" id="totalp_usd" />
                                                 <input type="hidden" name="selected_currency" id="selected_currency" />
                                                 <input type="hidden" name="is_full_pay" id="is_full_pay" value="<?=isset($order->payment_type)?$order->payment_type:1?>" />
                                                 <input type="hidden" value="" id="country-cd" name="country_code" />
                                                <input type="hidden" id="inputlead" value="<?=isset($order->lead_id)?$order->lead_id:0 ?>" name="lead_id">
                                                <input type="hidden" id="eng_id" value="<?=1?>" name="eng_id" >
                                                <input type="hidden" name="fullprice" class="auto-save" id="fullprice">
                                                <input type="hidden" name="order_status" class="auto-save" id="order-status">
                                                <input type="hidden" class="order_id" name="order_id" id="order_id" value="<?=isset($order->order_id)?$order->order_id:0?>">
                                                <input type="hidden" name="actual" id="actual" value="">
                                                <input type="hidden" name="actual-empty" id="actual-empty" value="">
                                                <input type="hidden" name="discounted-price" id="discounted-price" value="">
                                                <input type="hidden" name="checkStep" id="check-step" value="">
                                                <input type="hidden" name="newUser" id="new-user" value="">
                                                 <div class="row" style="padding-left:15px">
                                                     <div class="col-md-12">
                                                         <div class="summary-label">Files</div>
                                                         <div class="summary-val"><span id="rev-file">
                                                                 <ul id="ulList"> </ul>
                                                             </span></div>
                                                     </div>
                                                 </div>
                                             </div>
                                             <p class="sml-red" style="margin-bottom:20px">We are ready to start working on your paper as soon as the payment is made. We accept any major Debit/Credit cards. Click "Proceed to checkout" to proceed to the secure payment page. If you want to change the initial requirements for this order, press the “Edit Order Details” and indicate all the necessary changes.</p>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                             <div style="overflow:auto;">
                                 <div> <a href="javascript:void();" onclick="stepsBack('review-info');" class="prev-btn">Edit Order Details</a> <!-- <button type="submit" class="yellow-btn">Proceed to Payment</button> --> <a href="javascript:;" id="proceed-checkout" onclick="steps('btn-proceed');" class="yellow-btn">Deposit Funds</a> </div>
                             </div>
                             <div class="mt-1"></div> <!-- </form> -->
                         </div>
                 </form>
             </div>
         </div> <!-- ------------------RIGHT CONTAINER---------------- -->
         <div class="col-md-5 bottom-div" style="zoom:95% ">
             <div class="sticky" style="z-index:99">
                 <div class="sep-side"></div>
                 <div class="discount-badge" style="z-index:999">
                     <div class="discount-badge-inner"> <img src="<?= asset_url() ?>portal/images/discount-coupon-50.png" alt="Avatar" class="image"> </div>
                 </div>
                 <div class="">
                     <div class="">
                         <div class="blue-box">
                             <h2 class="lmtd-offr-heading"> Limited Time Offer </h2>
                         </div>
                         <div class="light-blue-box">
                             <p class="no-margin">All users will get 60% discount on all orders </p>
                         </div>
                     </div>
                     <div id="white-container" class="pa-1">
                         <div class="row mb-2">
                             <div class="col-md-12">
                                 <div class="aa"><span class="fa fa-clock-o"></span> <span class="expiration">Discount expires in</span></div>
                                 <div class="bb" id="periodic-timer_period_days"></div>
                             </div>
                         </div>
                         <div class="row prepay-cont" style="margin-bottom:20px; margin-top:10px;">
                             <div class="col-md-1 col-xs-1" id="prepaycheck"><input class="auto-save" type="checkbox" id="paymentStatus" onchange="saveData(0,'');" name="paymentStatus" value="<?=isset($order->payment_type)?$order->payment_type:''?>" <?=($order->payment_type==0)?'checked':''?>></div>
                             <div class="col-md-3 col-xs-3 font-s-2" style="padding:0px;">Prepay 50%</div>
                             <div class="col-md-8 col-xs-8 font-s-2" style="padding:0px;">Discount <span class="discount-50-off">60% OFF:</span><span class="cut-through-2"><span class="c_sign">$</span>68.20</span><span class="curved"><span class="c_sign">$</span>30.69</span></div>
                         </div>
                         <div class="free-fe outer-cont-features">
                             <div class="summary-head-2 feature-head-cont">Our Free Features</div>
                             <div class="row no-margin feature-row">
                                 <div class="col-md-7 feature-text">Unlimited Revisions</div>
                                 <div class="col-md-5 txt-r green-txt"><span class="cut-through"><span class="c_sign">$</span>08</span><span class="curved">FREE</span></div>
                             </div>
                             <div class="order-sep"></div>
                             <div class="row no-margin feature-row">
                                 <div class="col-md-7 feature-text">Paper Formatting</div>
                                 <div class="col-md-5 txt-r green-txt"><span class="cut-through"><span class="c_sign">$</span>05</span><span class="curved">FREE</span></div>
                             </div>
                             <div class="order-sep"></div>
                             <div class="row no-margin feature-row">
                                 <div class="col-md-7 feature-text">Referencing & Bibliography </div>
                                 <div class="col-md-5 txt-r green-txt"><span class="cut-through"><span class="c_sign">$</span>10</span><span class="curved">FREE</span></div>
                             </div>
                             <div class="order-sep"></div>
                             <div class="row no-margin feature-row">
                                 <div class="col-md-7 feature-text">Cover Page</div>
                                 <div class="col-md-5 txt-r green-txt"><span class="cut-through"><span class="c_sign">$</span>05</span><span class="curved">FREE</span></div>
                             </div>
                             <div class="order-sep"></div>
                             <div class="row no-margin feature-row">
                                 <div class="col-md-7 feature-text">24/7 Order Tracking</div>
                                 <div class="col-md-5 txt-r green-txt"><span class="cut-through"><span class="c_sign">$</span>05</span><span class="curved">FREE</span></div>
                             </div>
                             <div id="pay-only" style="display: none;">
                                 <div class="order-sep"></div>
                                 <div style="margin-top: 32px;" class="row mb-2">
                                     <div class="col-md-9 p-2"><span class="init" style="margin-right: 10px;">Deposit Now Only</span><span class="c_sign">$</span><span class="disc priceBoxCheck">0</span></div>
                                 </div>
                                 <div class="order-sep"></div>
                                 <div style="margin-top: 32px;" class="row mb-2">
                                     <div class="col-md-9 p-2"><span class="init" style="margin-right: 10px;">Deposit On Delivery</span><span class="c_sign">$</span><span class="disc priceBoxCheck you-payy">0</span></div>
                                 </div>
                             </div>
                         </div>
                         <div class="pay-now ">
                             <div class="col-md-12" style="padding:0px;">
                             <?php $currency = json_decode($currencies, true); ?>
                                 <div class="pay-now-cont"> Order Cost: <span class="c_sign"></span><span class="total"><?=(isset($order->paid_in))?$currency[$order->paid_in]:$currency['USD']?> <?=(isset($order->paid_price) && $order->paid_price !='0.00')?$order->paid_price:((isset($order->quoted_price))?$order->quoted_price:'$0')?></span> </div>
                             </div>
                         </div>
                         <div class="clearfix"></div>
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
 </div> <!-- Event snippet for Submit lead form conversion page -->
 <script>
     gtag('event', 'conversion', {
         'send_to': 'AW-10777734605/w3YLCNjm3qwDEM3bnJMo',
         'value': 1.0,
         'currency': 'PKR'
     });
 </script>