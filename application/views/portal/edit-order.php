<?php  //print_r($order); ?>
<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<head>
    <!-- Hotjar Tracking Code for https://paperly.net/ -->
<script>
    (function(h,o,t,j,a,r){
        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
        h._hjSettings={hjid:2876349,hjsv:6};
        a=o.getElementsByTagName('head')[0];
        r=o.createElement('script');r.async=1;
        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
        a.appendChild(r);
    })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
</script>


    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="Academic Help Online" />
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" /> -->

    <title>Edit Order</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="<?= asset_url() ?>portal/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="<?= asset_url() ?>portal/css/style.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="<?= asset_url() ?>portal/css/zoomslider.css" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <link type="text/css" rel="stylesheet" href="<?= asset_url() ?>portal/css/jquery.jConveyorTicker.min.css" />
    
     <link rel="icon" href="<?= asset_url() ?>front/images/logo.png" type="image/gif" sizes="16x16">


    <!-- for phoneflag -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js" integrity="sha512-DNeDhsl+FWnx5B1EQzsayHMyP6Xl/Mg+vcnFPXGNjUZrW28hQaa1+A4qL9M+AiOMmkAhKAWYHh1a+t6qxthzUw==" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.min.css" integrity="sha512-yye/u0ehQsrVrfSd6biT17t39Rg9kNc+vENcCXZuMz2a+LWFGvXUnYuWUW6pbfYj1jcBb/C39UZw2ciQvwDDvg==" crossorigin="anonymous" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js" integrity="sha512-BNZ1x39RMH+UYylOW419beaGO0wqdSkO7pi1rYDYco9OL3uvXaC/GTqA5O4CVK2j4K9ZkoDNSSHVkEQKkgwdiw==" crossorigin="anonymous"></script>


    <style>
        input[type=number]::-webkit-inner-spin-button,
        input[type=number]::-webkit-outer-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        input[type=number] {
            -moz-appearance: textfield;
        }

        .iti {
            display: block !important;
        }
        
    </style>
    
    <!-- Global site tag (gtag.js) - Google Ads: 10777734605 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-10777734605"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-10777734605');
</script>


</head>

<body>


    <?php $this->load->view('portal/header'); ?>

     <style>
   .mobile-detail{
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
var btn1=document.querySelector("#formProceed > div.order-form.step-one-content > div.ord-cont > div:nth-child(8) > div > a");
btn1.classList.add("btn1");
var btn2=document.querySelector("#formProceed > div.order-form.step-two-content > div:nth-child(2) > div > a.yellow-btn");
btn2.classList.add("btn2");
var btn3=document.querySelector("#proceed-checkout");
btn3.classList.add("btn3");
}
setTimeout(function(){ wc_track(); }, 2000);
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

         <form  name="formProceed" id="formProceed" action="<?= base_url() ?>proceed_to_pay" method="post" class="require-validation" data-cc-on-file="false" data-stripe-publishable-key="<?php echo $this->config->item('stripe_key') ?>" id="payment-form" enctype="multipart/form-data">

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
                     <input onKeyPress="if(this.value.length==10) return false;" value="" name="phone" onchange="saveData();" id="phone" type="number" class="form-control"
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
                       <!-- <option value="">Select Document Type</option> -->
                       <?php foreach ($type_of_documents as $type_of_document) { ?>
                         <option value="<?= $type_of_document->name ?>" <?php if (isset($order->client_document) && ($type_of_document->name == $order->client_document)) {
                                                                          echo 'selected="selected"';
                                                                        } else {
                                                                          echo '';
                                                                        } ?>><?= $type_of_document->name ?></option>

                       <?php } ?>

                     </select>

                     <p style="color:red;" id="doc-type-message"></p>
                   </div>
                 </div>
               </div>
               <input value="" type="hidden" id="finger-print" />
               <div class="row">
                 <div class="col-md-12">
                   <div class="form-group">
                     <label for="password" class="col-form-label text-md-right">Academic Level</label>
                     <div class="radio-group aa">
                       <input <?php if (isset($order->client_acadmemic) && ($order->client_acadmemic == "High School")) {
                                echo 'checked';
                              } else {
                                echo '';
                              } ?> onchange="saveData();" type="radio" value="High School" class="high-school" id="1" name="acedamic_level"><label id="lbl-high-school" for="1">High School</label><input <?php if (isset($order->client_acadmemic) && ($order->client_acadmemic == "College-undergraduate")) {
                                                                                                                                                                                                            echo 'checked';
                                                                                                                                                                                                          } else {
                                                                                                                                                                                                            echo '';
                                                                                                                                                                                                          } ?> onchange="saveData();" type="radio" value="College-undergraduate" class="college-undergraduate" id="2" name="acedamic_level"><label for="2">College-undergraduate</label><input <?php if (isset($order->client_acadmemic) && ($order->client_acadmemic == "Masters")) {
                                                                                                                                                                                                                                                                                                                                                                                                              echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                                            } else {
                                                                                                                                                                                                                                                                                                                                                                                                              echo '';
                                                                                                                                                                                                                                                                                                                                                                                                            } ?> onchange="saveData();" type="radio" value="Masters" class="masters" id="3" name="acedamic_level"><label for="3">Masters</label><input <?php if (isset($order->client_acadmemic) && ($order->client_acadmemic == "PHD")) {
                                                                                                                                                                                                                                                                                                                                                                              echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                            } else {
                                                                                                                                                                                                                                                                                                                                                                              echo '';
                                                                                                                                                                                                                                                                                                                                                                            } ?> onchange="saveData();" type="radio" value="Doctoral" class="doctoral" id="4" name="acedamic_level"><label for="4">Doctoral</label>
                     </div>
                   </div>
                   <p style="color:red;" id="academic-message"></p>
                 </div>
               </div>
               <div class="row">
                 <div class="col-md-8">
                   <div class="inp-2">
                     <label class="control-label">Deadline Date:</label>
                     <input min="<?=date('Y-m-d');?>" value="<?php if (isset($order->end_date)) {
                                echo $order->end_date;
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
                             <?php if(!empty($order->end_time)){
                                  echo '<option value="'.$order->end_time.'" selected>'.$order->end_time.'</option>';
                                }?>
                         <!-- <option value="">Select Time</option> -->
                         <option value="00:00">00:00</option>
                         <option value="01:00">01:00</option>
                         <option value="02:00">02:00</option>
                         <option value="03:00">03:00</option>
                         <option value="04:00">04:00</option>
                         <option value="05:00">05:00</option>
                         <option value="06:00">06:00</option>
                         <option value="07:00">07:00</option>
                         <option value="08:00">08:00</option>
                         <option value="09:00">09:00</option>
                         <option value="10:00">10:00</option>
                         <option value="11:00">11:00</option>
                         <option value="12:00">12:00</option>
                         <option value="13:00">13:00</option>
                         <option value="14:00">14:00</option>
                         <option value="15:00">15:00</option>
                         <option value="16:00">16:00</option>
                         <option value="17:00">17:00</option>
                         <option value="18:00">18:00</option>
                         <option value="19:00">19:00</option>
                         <option value="20:00">20:00</option>
                         <option value="21:00">21:00</option>
                         <option value="22:00">22:00</option>
                         <option value="23:00">23:00</option>

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
                                             <option <?php if (isset($order->no_of_pages) && (1 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="1">1 Page ~ 300 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (2 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?>  value="2">2 Pages ~ 600 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (3 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="3">3 Pages ~ 900 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (4 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="4">4 Pages ~ 1200 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (5 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="5">5 Pages ~ 1500 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (6 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="6">6 Pages ~ 1800 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (7 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="7">7 Pages ~ 2100 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (8 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="8">8 Pages ~ 2400 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (9 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="9">9 Pages ~ 2700 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (10 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="10">10 Pages ~ 3000 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (11 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="11">11 Pages ~ 3300 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (12 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="12">12 Pages ~ 3600 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (13 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="13">13 Pages ~ 3900 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (14 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="14">14 Pages ~ 4200 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (15 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="15">15 Pages ~ 4500 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (16 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="16">16 Pages ~ 4800 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (17 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="17">17 Pages ~ 5100 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (18 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="18">18 Pages ~ 5400 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (19 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="19">19 Pages ~ 5700 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (20 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="20">20 Pages ~ 6000 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (21 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="21">21 Pages ~ 6300 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (22 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="22">22 Pages ~ 6600 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (23 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="23">23 Pages ~ 6900 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (24 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="24">24 Pages ~ 7200 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (25 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="25">25 Pages ~ 7500 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (26 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="26">26 Pages ~ 7800 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (27 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="27">27 Pages ~ 8100 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (28 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="28">28 Pages ~ 8400 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (29 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="29">29 Pages ~ 8700 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (30 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="30">30 Pages ~ 9000 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (31 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="31">31 Pages ~ 9300 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (32 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="32">32 Pages ~ 9600 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (33 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="33">33 Pages ~ 9900 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (34 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="34">34 Pages ~ 10200 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (35 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="35">35 Pages ~ 10500 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (36 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="36">36 Pages ~ 10800 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (37 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="37">37 Pages ~ 11100 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (38 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="38">38 Pages ~ 11400 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (39 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="39">39 Pages ~ 11700 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (40 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="40">40 Pages ~ 12000 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (41 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="41">41 Pages ~ 12300 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (42 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="42">42 Pages ~ 12600 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (43 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="43">43 Pages ~ 12900 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (44 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="44">44 Pages ~ 13200 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (45 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="45">45 Pages ~ 13500 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (46 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="46">46 Pages ~ 13800 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (47 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="47">47 Pages ~ 14100 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (48 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="48">48 Pages ~ 14400 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (49 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="49">49 Pages ~ 14700 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (50 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="50">50 Pages ~ 15000 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (51 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="51">51 Pages ~ 15300 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (52 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="52">52 Pages ~ 15600 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (53 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="53">53 Pages ~ 15900 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (54 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="54">54 Pages ~ 16200 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (55 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="55">55 Pages ~ 16500 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (56 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="56">56 Pages ~ 16800 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (57 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="57">57 Pages ~ 17100 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (58 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="58">58 Pages ~ 17400 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (59 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="59">59 Pages ~ 17700 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (60 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="60">60 Pages ~ 18000 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (61 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="61">61 Pages ~ 18300 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (62 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="62">62 Pages ~ 18600 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (63 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="63">63 Pages ~ 18900 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (64 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="64">64 Pages ~ 19200 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (65 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="65">65 Pages ~ 19500 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (66 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="66">66 Pages ~ 19800 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (67 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="67">67 Pages ~ 20100 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (68 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="68">68 Pages ~ 20400 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (69 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="69">69 Pages ~ 20700 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (70 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="70">70 Pages ~ 21000 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (71 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="71">71 Pages ~ 21300 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (72 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="72">72 Pages ~ 21600 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (73 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="73">73 Pages ~ 21900 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (74 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="74">74 Pages ~ 22200 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (75 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="75">75 Pages ~ 22500 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (76 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="76">76 Pages ~ 22800 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (77 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="77">77 Pages ~ 23100 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (78 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="78">78 Pages ~ 23400 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (79 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="79">79 Pages ~ 23700 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (80 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="80">80 Pages ~ 24000 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (81 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="81">81 Pages ~ 24300 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (82 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="82">82 Pages ~ 24600 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (83 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="83">83 Pages ~ 24900 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (84 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="84">84 Pages ~ 25200 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (85 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="85">85 Pages ~ 25500 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (86 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="86">86 Pages ~ 25800 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (87 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="87">87 Pages ~ 26100 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (88 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="88">88 Pages ~ 26400 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (89 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="89">89 Pages ~ 26700 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (90 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="90">90 Pages ~ 27000 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (91 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="91">91 Pages ~ 27300 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (92 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="92">92 Pages ~ 27600 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (93 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="93">93 Pages ~ 27900 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (94 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="94">94 Pages ~ 28200 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (95 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="95">95 Pages ~ 28500 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (96 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="96">96 Pages ~ 28800 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (97 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="97">97 Pages ~ 29100 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (98 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="98">98 Pages ~ 29400 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (99 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="99">99 Pages ~ 29700 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (100 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="100">100 Pages ~ 30000 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (101 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="101">101 Pages ~ 30300 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (102 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="102">102 Pages ~ 30600 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (103 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="103">103 Pages ~ 30900 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (104 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="104">104 Pages ~ 31200 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (105 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="105">105 Pages ~ 31500 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (106 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="106">106 Pages ~ 31800 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (107 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="107">107 Pages ~ 32100 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (108 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="108">108 Pages ~ 32400 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (109 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="109">109 Pages ~ 32700 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (110 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="110">110 Pages ~ 33000 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (111 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="111">111 Pages ~ 33300 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (112 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="112">112 Pages ~ 33600 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (113 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="113">113 Pages ~ 33900 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (114 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="114">114 Pages ~ 34200 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (115 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="115">115 Pages ~ 34500 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (116 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="116">116 Pages ~ 34800 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (117 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="117">117 Pages ~ 35100 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (118 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="118">118 Pages ~ 35400 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (119 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="119">119 Pages ~ 35700 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (120 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="120">120 Pages ~ 36000 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (121 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="121">121 Pages ~ 36300 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (122 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="122">122 Pages ~ 36600 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (123 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="123">123 Pages ~ 36900 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (124 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="124">124 Pages ~ 37200 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (125 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="125">125 Pages ~ 37500 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (126 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="126">126 Pages ~ 37800 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (127 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="127">127 Pages ~ 38100 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (128 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="128">128 Pages ~ 38400 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (129 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="129">129 Pages ~ 38700 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (130 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="130">130 Pages ~ 39000 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (131 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="131">131 Pages ~ 39300 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (132 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="132">132 Pages ~ 39600 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (133 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="133">133 Pages ~ 39900 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (134 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="134">134 Pages ~ 40200 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (135 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="135">135 Pages ~ 40500 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (136 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="136">136 Pages ~ 40800 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (137 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="137">137 Pages ~ 41100 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (138 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="138">138 Pages ~ 41400 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (139 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="139">139 Pages ~ 41700 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (140 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="140">140 Pages ~ 42000 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (141 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="141">141 Pages ~ 42300 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (142 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="142">142 Pages ~ 42600 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (143 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="143">143 Pages ~ 42900 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (144 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="144">144 Pages ~ 43200 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (145 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="145">145 Pages ~ 43500 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (146 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="146">146 Pages ~ 43800 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (147 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="147">147 Pages ~ 44100 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (148 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="148">148 Pages ~ 44400 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (149 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="149">149 Pages ~ 44700 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (150 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="150">150 Pages ~ 45000 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (151 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="151">151 Pages ~ 45300 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (152 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="152">152 Pages ~ 45600 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (153 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="153">153 Pages ~ 45900 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (154 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="154">154 Pages ~ 46200 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (155 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="155">155 Pages ~ 46500 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (156 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="156">156 Pages ~ 46800 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (157 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="157">157 Pages ~ 47100 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (158 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="158">158 Pages ~ 47400 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (159 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="159">159 Pages ~ 47700 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (160 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="160">160 Pages ~ 48000 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (161 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="161">161 Pages ~ 48300 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (162 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="162">162 Pages ~ 48600 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (163 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="163">163 Pages ~ 48900 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (164 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="164">164 Pages ~ 49200 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (165 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="165">165 Pages ~ 49500 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (166 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="166">166 Pages ~ 49800 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (167 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="167">167 Pages ~ 50100 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (168 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="168">168 Pages ~ 50400 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (169 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="169">169 Pages ~ 50700 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (170 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="170">170 Pages ~ 51000 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (171 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="171">171 Pages ~ 51300 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (172 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="172">172 Pages ~ 51600 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (173 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="173">173 Pages ~ 51900 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (174 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="174">174 Pages ~ 52200 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (175 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="175">175 Pages ~ 52500 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (176 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="176">176 Pages ~ 52800 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (177 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="177">177 Pages ~ 53100 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (178 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="178">178 Pages ~ 53400 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (179 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="179">179 Pages ~ 53700 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (180 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="180">180 Pages ~ 54000 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (181 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="181">181 Pages ~ 54300 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (182 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="182">182 Pages ~ 54600 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (183 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="183">183 Pages ~ 54900 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (184 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="184">184 Pages ~ 55200 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (185 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="185">185 Pages ~ 55500 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (186 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="186">186 Pages ~ 55800 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (187 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="187">187 Pages ~ 56100 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (188 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="188">188 Pages ~ 56400 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (189 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="189">189 Pages ~ 56700 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (190 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="190">190 Pages ~ 57000 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (191 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="191">191 Pages ~ 57300 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (192 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="192">192 Pages ~ 57600 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (193 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="193">193 Pages ~ 57900 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (194 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="194">194 Pages ~ 58200 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (195 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="195">195 Pages ~ 58500 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (196 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="196">196 Pages ~ 58800 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (197 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="197">197 Pages ~ 59100 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (198 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="198">198 Pages ~ 59400 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (199 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="199">199 Pages ~ 59700 Words</option>
                                             <option <?php if (isset($order->no_of_pages) && (200 == $order->no_of_pages)) {
                                                                                                    echo 'selected="selected"';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?> value="200">200 Pages ~ 60000 Words</option>
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
                         <input onchange="saveData();" type="text" class="form-control" id="name" name="name" value="<?= $order->client_name ?>">
                       </div>
                       <p style="color:red;" id="name-message"></p>
                     </div>
                   </div>

                   <div class="row">
                     <div class="col-md-12">
                       <div class="form-group inp">
                         <label class="control-label">Email:</label>
                         <input onchange="saveData();" type="email" class="form-control" id="email" name="email" value="<?= $order->client_email ?>">
                       </div>
                       <p style="color:red;" id="email-message"></p>
                     </div>
                   </div>

                   <!-- <div class="row">
                     <div class="col-md-12 ls-1">
                       <div class="form-group form-check">
                         <input type="checkbox" class="form-check-input" id="exampleCheck1">
                         <label class="form-check-label" for="exampleCheck1">I have read and agree to the <a href="#">Terms of Use</a>, <a href="#">Money Back Guarantee</a>, <a href="#">Privacy & Cookie Policy</a>.</label>
                       </div>
                       <p style="color:red;" id="terms-message"></p>
                     </div>
                   </div>

                   <div class="row">
                     <div class="col-md-12">
                       <div class="form-group form-check ls-2">
                         <input type="checkbox" class="form-check-input" id="exampleCheck2">
                         <label class="form-check-label" for="exampleCheck2">I am a registered user.</label>
                       </div>
                       <p style="color:red;" id="iam-message"></p>
                     </div>
                   </div> -->

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
                               <?php if(!empty($order->subject)){
                                echo '<option value="'.$order->subject.'" selected>'.$order->subject.'</option>';
                              }?>
                           <option value="">Select Subject</option>
                           <option value="Biology and Life Sciences">Biology and Life Sciences</option>
                           <option value="Business and Management">Business and Management</option>
                           <option value="Chemistry">Chemistry</option>
                           <option value="Culture">Culture</option>
                           <option value="Economics">Economics</option>
                           <option value="Education">Education</option>
                           <option value="English">English</option>
                           <option value="Environmental Science">Environmental Science</option>
                           <option value="Finance,Accounting and Banking">Finance, Accounting and Banking</option>
                           <option value="Geography">Geography</option>
                           <option value="Healthcare and Nursing">Healthcare and Nursing</option>
                           <option value="History and Anthropology">History and Anthropology</option>
                           <option value="HRM">HRM</option>
                           <option value="International Relations">International Relations</option>
                           <option value="IT">IT</option>
                           <option value="Law and International Law">Law and International Law</option>
                           <option value="Linguistics">Linguistics</option>
                           <option value="Literature">Literature</option>
                           <option value="Marketing and PR">Marketing and PR</option>
                           <option value="Maths">Maths</option>
                           <option value="Philosophy">Philosophy</option>
                           <option value="Physics">Physics</option>
                           <option value="Political Science">Political Science</option>
                           <option value="Psychology">Psychology</option>
                           <option value="Sociology">Sociology</option>
                           <option value="Statistics">Statistics</option>
                           <option value="Project Management">Project Management</option>
                           <option value="Operational_Plan">Operational Plan</option>
                           <option value="Critical review">Critical review</option>
                           <option value="Critical Appraisal">Critical Appraisal</option>
                           <option value="Capstone">Capstone</option>
                           <option value="Reflective Thinking">Reflective Thinking</option>
                           <option value="Other">Other</option>
                         </select>
                       </div>
                       <p style="color:red;" id="project-subject-message"></p>
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
                         <input onchange="saveData();" type="text" class="form-control" id="topic" placeholder="Topic" name="topic" value="<?= $order->title ?>">
                       </div>
                       <p style="color:red;" id="topic-message"></p>
                     </div>
                   </div>

                   <div class="row">
                     <div class="col-md-12">
                       <div class="form-group inp">
                         <label class="control-label">Number Of Sources:</label>
                         <input onchange="saveData();" name="NumberSources" type="text" class="form-control" id="NumberSources" placeholder="Number Of Sources" name="NumberSources" value="<?= $order->name_of_sources ?>">
                       </div>
                       <p style="color:red;" id="number-sources-message"></p>
                     </div>
                   </div>
                   <div class="row">
                     <div class="col-md-12">
                       <div class="form-group">
                         <label class="control-label">Citation Style:</label>
                         <select onchange="saveData();" name="citation_style" class="select-css-2" id="otherCitationstyle">
                           <option value="">Select Citation Style</option>
                           <option value="AMA" <?php if($order->citation_style == "AMA" ){ echo 'selected'; } ?>>AMA</option>
                           <option value="APA" <?php if($order->citation_style == "APA" ){ echo 'selected'; } ?>>APA</option>
                           <option value="AMS" <?php if($order->citation_style == "AMS"){ echo 'selected'; }?>>AMS</option>
                           <option value="Chicago" <?php if($order->citation_style == "Chicago"){ echo 'selected'; }?>>Chicago</option>
                           <option value="MLA" <?php if($order->citation_style == "MLA" ){ echo 'selected'; }?>>MLA</option>
                           <option value="Turbian" <?php if($order->citation_style == "Turbian" ){ echo 'selected'; }?>>Turbian</option>
                           <option value="Harvard" <?php if($order->citation_style == "Harvard" ){ echo 'selected'; }?>>Harvard</option>
                           <option value="IEEE" <?php if($order->citation_style == "IEEE" ){ echo 'selected'; }?>>IEEE</option>
                           <option value="Other" <?php if($order->citation_style == "Other" ){ echo 'selected'; }?>>Other</option>
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
                         <textarea onchange="saveData();" name="description" id="description" class="form-control" rows="4" cols="50" name="comment"><?= $order->description       ?></textarea>
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

                       <input type="hidden" name="total_price" id="o-price" />
                       <input type="hidden" name="finger-print" id="finger-print" />
                       <input type="hidden" name="total" id="totalp" />
                       <input type="hidden" name="is_full_pay" id="is_full_pay" value="1" />
                       <input type="hidden" value="" id="country-cd" name="country_code" />


                       <input type="hidden" id="inputlead" value="0" name="lead_id">
                       <input type="hidden" name="fullprice" class="auto-save" id="fullprice">
                       <input type="hidden" name="order_status" class="auto-save" id="order-status">
                       <input type="hidden" class="order_id" name="order_id" id="order_id" value="<?= $order->id ?>">
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

                         <div class="col-md-6">

                           <div class="summ-grey-box">

                             <div class="summary-label-2">Subject <span id="rev-subject2">Business Management</span></div>

                             <div class="summary-label-2">Paper Format <span id="rev-paper_format">MLA</span></div>

                           </div>

                         </div>

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

                 <a href="javascript:void();" onclick="stepsBack('review-info');" class="prev-btn">Previous</a>

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

                 <div class="col-md-12">You Pay<span class="total">$0</span></div>

               </div>

               <div class="clearfix"></div>

             </div>

             <div class="pa-1">

               
               
               <div class="row mb-2">

                  <div class="col-md-12 p-2"><span class="init">Limited Time</span> <span class="disc">Discount 50% OFF</span> <span class="cut-txt"><div class="actual">$00.00</div></span><span class="grey pull-right you-pay">$00.00</span></div>

                </div>
                
                <div class="row mb-2">
                
                  <div class="col-md-12">
                    
                    <div class="aa"><span class="fa fa-clock-o"></span> <span class="expiration">Discount expires in</span></div>
                    
                    <div class="bb" id="periodic-timer_period_days"></div>
                    
                  </div>
                
                </div>

               <div class="row mb-2">

                 <div class="col-xs-1"><input class="auto-save" type="checkbox" id="paymentStatus" onchange="saveData();" name="paymentStatus" value="1"></div>

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


    <?php $this->load->view('portal/footer'); ?>


    <script>
        var base_url = '<?php echo base_url(); ?>';
    </script>
    <script src="<?= asset_url() ?>portal/js/jquery-3.6.0.min.js"></script>
    <script src="<?= asset_url() ?>portal/js/bootstrap.min.js"></script>
    <script src="<?= asset_url() ?>portal/js/order-form.js"></script>
    <script src="<?= asset_url() ?>portal/js/jquery.jConveyorTicker.min.js"></script>
    <script type="text/javascript" src="<?= asset_url() ?>portal/js/jquery.syotimer.js"></script>
   <script type="text/javascript" src="<?= asset_url() ?>portal/js/syotimer.examples.js"></script>
    



    <script>
        var input = document.querySelector("#phone");
        window.intlTelInput(input, {
            allowExtensions: false,
            autoFormat: false,
            autoHideDialCode: false,
            autoPlaceholder: false,
            separateDialCode: true,

            initialCountry: "auto",
            geoIpLookup: function(callback) {
                $.get('https://ipinfo.io', function() {}, "jsonp").always(function(resp) {
                    var countryCode = (resp && resp.country) ? resp.country : "";
                    callback(countryCode);
                });
            },
            ipinfoToken: "yolo",
            nationalMode: false,
            //onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
            //preferredCountries: ['cn', 'jp'],
            preventInvalidNumbers: true,
            utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/11.0.14/js/utils.js" // just for formatting/placeholders etc
        });
    </script>
    
    
<!-- PASS THRU DATA OBJECT -->

<!-- Start of LiveChat (www.livechatinc.com) code -->
<script>
    window.__lc = window.__lc || {};
    window.__lc.license = 13090896;
    window.__lc.chat_between_groups = false;
    ;(function(n,t,c){function i(n){return e._h?e._h.apply(null,n):e._q.push(n)}var e={_q:[],_h:null,_v:"2.0",on:function(){i(["on",c.call(arguments)])},once:function(){i(["once",c.call(arguments)])},off:function(){i(["off",c.call(arguments)])},get:function(){if(!e._h)throw new Error("[LiveChatWidget] You can't use getters before load.");return i(["get",c.call(arguments)])},call:function(){i(["call",c.call(arguments)])},init:function(){var n=t.createElement("script");n.async=!0,n.type="text/javascript",n.src="https://cdn.livechatinc.com/tracking.js",t.head.appendChild(n)}};!n.__lc.asyncInit&&e.init(),n.LiveChatWidget=n.LiveChatWidget||e}(window,document,[].slice))
</script>
<noscript><a href="https://www.livechatinc.com/chat-with/13090896/" rel="nofollow">Chat with us</a>, powered by <a href="https://www.livechatinc.com/?welcome" rel="noopener nofollow" target="_blank">LiveChat</a></noscript>
<script>
$(".chaton").click(function () {
                LiveChatWidget.call('maximize'); return false;
            });
</script>
<!-- End of LiveChat code -->

<script src="//scripts.iconnode.com/95998.js"></script>

    <script>
        function Timer(duration, display) {
            var timer = duration,
                hours, mins, seconds;
            setInterval(function() {
                hours = parseInt((timer / 3600) % 24, 10)
                minutes = parseInt((timer / 60) % 60, 10)
                seconds = parseInt(timer % 60, 10);
                hours = hours < 10 ? "0" + hours : hours;
                minutes = minutes < 10 ? "0" + minutes : minutes;
                seconds = seconds < 10 ? "0" + seconds : seconds;
                // display.text(hours +":"+minutes + ":" + seconds);
                document.getElementById("day").innerHTML = '0';
                document.getElementById("hour").innerHTML = hours;
                document.getElementById("minute").innerHTML = minutes;
                document.getElementById("second").innerHTML = seconds;
                --timer;
            }, 1000);
        }
        jQuery(function($) {
            var twentyFourHours = 24 * 60 * 60;
            // var display = $('#remainingTime');
            Timer(twentyFourHours);
        });
    </script>

    <script>
        var a = 0;
        $(window).scroll(function() {

            var oTop = $('#counter').offset().top - window.innerHeight;
            if (a == 0 && $(window).scrollTop() > oTop) {
                $('.counter-value').each(function() {
                    var $this = $(this),
                        countTo = $this.attr('data-count');
                    $({
                        countNum: $this.text()
                    }).animate({
                            countNum: countTo
                        },

                        {

                            duration: 2000,
                            easing: 'swing',
                            step: function() {
                                $this.text(Math.floor(this.countNum));
                            },
                            complete: function() {
                                $this.text(this.countNum);
                                //alert('finished');
                            }

                        });
                });
                a = 1;
            }

        });
    </script>

    <script type="text/javascript" charset="utf-8">
        $(function() {

            /*! Default options:
             *  
             *  anim_duration:  200
             *  reverse_elm:    false
             *  force_loop:     false
             *  start_paused:   false
             * 
             */

            $('.js-conveyor-1').jConveyorTicker();

            $('.js-conveyor-2').jConveyorTicker({
                anim_duration: 100
            });

            $('.js-conveyor-3').jConveyorTicker({
                reverse_elm: true
            });

            $('.js-conveyor-4').jConveyorTicker({
                force_loop: true
            });

            window.jsConveyor5 = $('.js-conveyor-5').jConveyorTicker({
                start_paused: true
            });

        });
    </script>

    <script>
        $(document).scroll(function() {

            myID = document.getElementById("price");

            var myScrollFunc = function() {
                var y = window.scrollY;
                if (y >= 300) {
                    myID.className = "price show"
                } else {
                    myID.className = "price hide"
                }
            };

            window.addEventListener("scroll", myScrollFunc);
        });
    </script>

    <script>
        window.onscroll = function() {
            myFunction()
        };

        var header = document.getElementById("myHeader");
        var sticky = header.offsetTop;

        function myFunction() {
            if (window.pageYOffset > sticky) {
                header.classList.add("sticky");
            } else {
                header.classList.remove("sticky");
            }
        }
    </script>

    <script>
        function steps(stepNumber) {

            // For Step One 
            var phoneno = /^\d{10}$/;
            
            //  var phoneno = /^\d{10}$/;

             if($('.iti__selected-dial-code').text() === '+61'){
                phoneno = /^\d{9}$/;
             }

            var acedamic_level = '';
            if ($('.high-school').is(':checked')) {
                acedamic_level = $('.high-school').val();
            } else if ($('.college-undergraduate').is(':checked')) {
                acedamic_level = $('.college-undergraduate').val();
            } else if ($('.masters').is(':checked')) {
                acedamic_level = $('.masters').val();
            } else if ($('.doctoral').is(':checked')) {
                acedamic_level = $('.doctoral').val();
            } else {
                acedamic_level = '';
            }

            var documentType = $("#documentType").val();
            var phone = $("#phone").val();
            var date = $("#DeadlineDate").val();
            var time = $("#hours").val();
            var pages = $("#pages").val();



            // End Variables for step one 


            if (stepNumber == 'btn-step-one') {

                // 10% Discount from Total Price 

                isDiscountable('yes');
                // var discountedPrice = applyDiscount();
                // $('#discounted-price').val(discountedPrice);

                // alert(discountedPrice);

                // var applyDiscount = $('#actual').val();

                // alert('Apply Discount on this Step ' + $('#actual').val());
                saveData();

                saveLeads('step-one');
                
                if (phone == '') {
                    document.getElementById('phone').scrollIntoView({
                        behavior: "smooth"
                    });
                    $('#phone-message').text('Please Enter Phone Number');

                }
                if (documentType == '') {
                    $('#doc-type-message').text('Please Select Document Type');
                }
                if (acedamic_level == '') {
                    $('#academic-message').text('Please Select Academic Level');
                }

                if (date == '') {
                    $('#deadline-message').text('Please Select Date');
                }
                if (time == '') {
                    $('#hours-message').text('Please Select Time');
                }
                if (pages == '') {
                    $('#pages-message').text('Please Select # of Pages');
                }
                if (date !== '' && time !== '' &&
                    pages !== '' && phone !== '' &&
                    documentType !== '' && acedamic_level !== '') {

                    if (phone.match(phoneno)) {
                        phone = phone;
                        $('#phone-message').text('');

                        document.getElementById('divId').scrollIntoView({
                            behavior: "smooth"
                        });
                        $('.step-two-content').fadeIn('slow');
                        $('.step-one-content').fadeOut('slow');

                        $('.price-calculation').removeClass('active');
                        $('.order-details').addClass('active');

                        $('#marquee').text('');
                        $('#marquee').text('Congratulations!! You have unlocked 10% Additional Discount');
                        showPopup('step-one');
                      
                    }
                   
                }
            }
            if (stepNumber == 'btn-proceed') {
                $('#proceed-checkout').prop('disabled', true);
                $('#proceed-checkout').css('background', '#dedeef');

                saveLeads('form-proceed');
            }

            if (stepNumber == 'btn-step-two') {
                saveLeads('step-two');

                var name = $("#name").val();
                var email = $("#email").val();

                var projectsubject = $("#projectsubject").val();
                var topic = $("#topic").val();

                var NumberSources = $("#NumberSources").val();
                var otherCitationstyle = $("#otherCitationstyle").val();
                var otherCitation = $("#otherCitation").val();
                var description = $("#description").val();


                if (name == '') {
                    document.getElementById('name').scrollIntoView({
                        behavior: "smooth"
                    });

                    $('#name-message').text('Please Enter Name');
                }
                if (email == '') {
                    $('#email-message').text('Please Enter Eamil');

                }

                if (projectsubject == '') {
                    $('#project-subject-message').text('Please Select Subject');

                }
                if (topic == '') {
                    $('#topic-message').text('Please Enter Topic');

                }
                if (NumberSources == '') {
                    $('#number-sources-message').text('Please Enter Number Sources');

                }
                if (otherCitationstyle == '') {
                    $('#citation-message').text('Please Select Citation');

                }
                if (description == '') {
                    $('#description-message').text('Please Enter Description');

                }
                if (name !== '' && email !== '' &&
                    projectsubject !== '' && topic !== '' &&
                    NumberSources !== '' && otherCitationstyle !== '' && description !== '') {

                    if (/(.+)@(.+){2,}\.(.+){2,}/.test(email)) {
                        // valid email
                        email = email;
                        $('#email-message').text('');
                        reviewOrderInfo();

                        $('#name-message').text('');
                        $('#email-message').text('');
                        $('#project-subject-message').text('');
                        $('#othrt-subject-message').text('');
                        $('#number-sources-message').text('');
                        $('#citation-message').text('');
                        $('#other-citation-message').text('');
                        $('#description-message').text('');

                        $('.step-three-content').fadeIn('slow');
                        $('.step-two-content').fadeOut('slow');

                        $('.order-details').removeClass('active');
                        $('.review-info').addClass('active');

                        $('#myHeader').hide();
                    }

                } else {
                    $('#email-message').text('Please enter a valid Email');
                }
            }

        }

        function isDiscountable(yesOrNot) {
            // applyDiscount(yesOrNot);
            $('#check-step').val(yesOrNot);
        }

        function applyDiscount(price) {

            // var actualPrice = $('#actual').val();
            // alert(price);

            // $('#check-step').val(isYesOrNot);

            var myNumber = price;
            var percentToGet = 10;
            var dec = (percentToGet / 100).toFixed(2);
            var mult = myNumber * dec;
            var discont = myNumber - mult;
            return discont;
        }

        function stepsBack(stepNumber) {
            if (stepNumber == 'review-info') {

                // $('#actual').val('');

                $('.step-three-content').fadeOut('slow');
                $('.step-two-content').fadeIn('slow');

                $('.review-info').removeClass('active');
                $('.order-details').addClass('active');

                $('#myHeader').show();
                $('#marquee').text('');
                $('#marquee').text('Congratulations!! You have unlocked 10% Additional Discount');
            }

            if (stepNumber == 'order-details') {

                $('.step-one-content').fadeIn('slow');
                $('.step-two-content').fadeOut('slow');
                $('.order-details').removeClass('active');
                $('.price-calculation').addClass('active');

                $('#myHeader').show();
            }

        }

        function checkUser() {
            if ($('.new-user').is(':checked')) {
                window.location.href = base_url + "calculate-price";
            } else if ($('.existing-user').is(':checked')) {

                window.location.href = base_url + "login";
            } else {
                $('#user-error').text('Please Select User Type');
            }
        }
        
        document.getElementById("phone").addEventListener("input", function(event) {
     if (/^0/.test(this.value)) {
    this.value = this.value.replace(/^0/, "")
  }
});

        function saveData() {

            var prepay = document.getElementById("paymentStatus");

            if (prepay.checked == true) {
                $('#is_full_pay').val(0);
            } else {
                $('#is_full_pay').val(1);
            }

            // First Step Data 

            var acedamic_level = '';
            if ($('.high-school').is(':checked')) {
                acedamic_level = $('.high-school').val();
            } else if ($('.college-undergraduate').is(':checked')) {
                acedamic_level = $('.college-undergraduate').val();
            } else if ($('.masters').is(':checked')) {
                acedamic_level = $('.masters').val();
            } else if ($('.doctoral').is(':checked')) {
                acedamic_level = $('.doctoral').val();
            } else {
                acedamic_level = '';
            }

            var documentType = $("#documentType").val();
            var phone = $("#phone").val();
            var date = $("#DeadlineDate").val();
            var time = $("#hours").val();
            var pages = $("#pages").val();

            // End First Step Data 


            // 2nd Step Data 



            var client_name = $("#name").val();
            var inputEmail = $("#email").val();


            // End Step Data 

            var demo1 = "";
            var day1, day2, day3, day4_5, day6_7, day8;
            if (acedamic_level == "High School") {
                day1 = 19.0;

                day2 = 17.0;

                day3 = 15.5;

                day4_5 = 14.0;

                day6_7 = 13.0; /*15.50*/

                day8 = 12.5;
            } else if (acedamic_level == "College-undergraduate") {
                day1 = 21.0; /*22.50*/

                day2 = 19.5; /*21.50*/

                day3 = 18.5; /*20.50*/

                day4_5 = 17.5;

                day6_7 = 16.0; /*18.50*/

                day8 = 15.5;
            } else if (acedamic_level == "Masters") {
                day1 = 24.0;

                day2 = 23.0; /*23.50*/

                day3 = 20.5; /*22.75*/

                day4_5 = 19.5;

                day6_7 = 18.0; /*20.50*/

                day8 = 17.5;
            } else if (acedamic_level == "Doctoral") {
                day1 = 36.0;

                day2 = 34.0;

                day3 = 32.0;

                day4_5 = 31.0;

                day6_7 = 30.0;

                day8 = 29.0;
            }

            var d = new Date();
            var dateDiff = 0;
            var seconds_in_day = 86400;
            var currentDate = d.getTime();

            var ppg = 0;
            var selectedDate = new Date(date).getTime();
            var dateDiff = Math.ceil(((selectedDate - currentDate) / 1000 / 86400));

            var selectedDate2 = new Date(date + ',' + time).getTime();

            var seconds = Math.floor((selectedDate2 - (currentDate)) / 1000);
            var minutes = Math.floor(seconds / 60);
            var hours = Math.floor(minutes / 60);
            var days = Math.floor(hours / 24);

            var hours = hours - (days * 24);
            var minutes = minutes - (days * 24 * 60) - (hours * 60);
            var seconds = seconds - (days * 24 * 60 * 60) - (hours * 60 * 60) - (minutes * 60);

            //console.log(dateDiff);

            if (dateDiff == 0) {
                ppg = day1;

            } else if (dateDiff == 1) {
                ppg = day1;

            } else if (dateDiff == 2) {
                ppg = day2;

            } else if (dateDiff == 3) {
                ppg = day3;

            } else if (dateDiff == 4 || dateDiff == 5) {
                ppg = day4_5;

            } else if (dateDiff == 6 || dateDiff == 7) {
                ppg = day6_7;

            } else {
                ppg = day8;

            }
            //console.log(ppg);

            if (acedamic_level == "0" || isNaN(dateDiff)) {
                demo1 = day1;
            } else {
                demo1 = ppg;
            }
            // var finalPrice = 0;
            demo1 *= pages;

            var price = 0;

            var totalPrice = 0;

           var perr = (demo1 * 2).toFixed(2);
        //    alert('Actual Price: '+perr);
           var per = perr *10;

        //    alert('After Multiply: '+per);

           var ttl = per/100;

        //    alert('After Division: '+ttl);

           price = parseFloat(ttl)+parseFloat(perr);

        //    alert('Before Final: '+price);

           var halfPrice = price /2;

        //    alert('After Half: '+halfPrice);

        //    var isNewUser =  $('#new-user').val();
        //    alert('is_new_ '+isNewUser);

            var isApplicable = $('#check-step').val();
           
            // if (isApplicable === 'yes' && isNewUser ==='new') {
                if (isApplicable === 'yes') {

                var dicPrice = applyDiscount(halfPrice);
                // alert('disc price '+dicPrice);
                halfPrice = dicPrice;
                // totalPrice = dicPrice;

            } 
            // else {
            //     price = demo1.toFixed(2);

            //     totalPrice = demo1.toFixed(2);
            // }

            // var price = demo1.toFixed(2);

            // var totalPrice = demo1.toFixed(2);

            $('.you-pay').text('$' + halfPrice.toFixed(2));

            var sendLeads = 'true';

            if (phone === "" ||
                pages === "" || documentType === "" ||
                time === "" || acedamic_level === "" || date === "") {
                sendLeads = 'false';


                $(".total").text('$0');
                $('#pay-only').hide();
                $(".priceBoxCheck").text('$0');

                $('.you-pay').text('$0');
                $('#rev-price').text('$0');

                $('.actual').text('$0');

            } else {

                if ($("#paymentStatus").prop("checked") == true) {
                    $(".total").html('$' + halfPrice.toFixed(2) / 2);
                    $('#pay-only').show();
                    $(".priceBoxCheck").text('$' + halfPrice.toFixed(2) / 2);
                    // price = price / 2;
                    $('.you-pay').text('$' + halfPrice.toFixed(2));
                    var finalPrice = halfPrice.toFixed(2) / 2;
                    $('#rev-price').text('$' + finalPrice);
                    // alert('price checked: '+finalPrice);
                    $('#o-price').val(finalPrice);
                    // $('.actual').html('$' + totalPrice);
                    $("#totalp").val(finalPrice);
                    $('#is_full_pay').val(0);

                } else {

                    $('#is_full_pay').val(1);
                    $('.actual').html('$' + (demo1 * 2).toFixed(2));
                    $('#pay-only').hide();
                    $('.you-pay').text('$' + halfPrice.toFixed(2));
                    $(".total").text('$' + halfPrice.toFixed(2));
                    $("#totalp").val(halfPrice.toFixed(2));
                    var finalPrice = $("#totalp").val();

                    // alert('price un-checked: '+finalPrice);

                    $('#o-price').val(halfPrice.toFixed(2));
                    $('#rev-price').text('$' + halfPrice.toFixed(2));
                }

              
                // $('.actual').html('$' + (demo1 * 2).toFixed(2));
                // $('#actual').val((demo1 * 2).toFixed(2));

                $('.actual').html('$' + price.toFixed(2));
                $('#actual').val(price);
              


                saveLeads(sendLeads);
            }

            autoSaveLeads(client_name, inputEmail,
                phone, documentType,
                acedamic_level,
                pages, finalPrice, date, time);

            $("#country-cd").val($('.iti__selected-dial-code').text());
        }


        function autoSaveLeads(client_name, inputEmail, phone, documentType, acedamic_level, pages, price, date, time) {

            var regEx = /^[a-zA-Z ]{2,30}$/;

            // var phoneno = /^\d{10}$/;
            // var mailformat = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i;
            
             var phoneno = '';
            if($('.iti__selected-dial-code').text() === '+61'){
                 phoneno = /^\d{9}$/;
            }else{
                phoneno = /^\d{10}$/;
            }

            if (client_name != '') {

                if (client_name.match(regEx)) {
                    client_name = client_name;
                    $('#name-message').text('');
                    // return true;
                } else {
                    client_name = '';
                    $('#name-message').text('Please enter letters and space only.');
                    // return false;
                }
            }

            if (phone != '') {
                if (phone.match(phoneno)) {
                    phone = phone;
                    $('#phone-message').text('');
                    // return true;
                } else {
                    phone = '';
                    $('#phone-message').text('Please enter valid phone number');
                    // return false;
                }
            }

            if (inputEmail != '') {
                if (/(.+)@(.+){2,}\.(.+){2,}/.test(inputEmail)) {
                    // valid email
                    inputEmail = inputEmail;
                    $('#email-message').text('');
                } else {
                    // invalid email
                    inputEmail = '';
                    $('#email-message').text('Please enter a valid Email');
                    // return false;
                }
            }

            if (acedamic_level != '') {
                $('#academic-message').text('');
            }

            if (date != '') {
                $('#deadline-message').text('');
            }


            if ($("#projectsubject").val() != '') {
                $('#project-subject-message').text('');
            }

            if ($("#topic").val() != '') {
                $('#topic-message').text('');
            }

            if ($("#NumberSources").val() != '') {
                $('#number-sources-message').text('');
            }

            if ($("#otherCitationstyle").val() != '') {
                $('#citation-message').text('');
            }

            if ($("#description").val() != '') {
                $('#description-message').text('');
            }




            getFprint();


            setTimeout(() => {

                $.ajax({
                    type: "POST",
                    url: "<?= base_url('portal/orders/generateLeadAutoSave'); ?>",
                    data: {
                        name: client_name,
                        email: inputEmail,
                        phone: phone,
                        documentType: documentType,
                        academicLevel: acedamic_level,
                        no_of_page: pages,
                        quotedPrice: price,
                        duedate: date,
                        duetime: time,
                        fingerPrint: $('#finger-print').val()
                    },
                    // dataType: "json",
                    success: function(response) {
                        // 		var data = jQuery.parseJSON(response);
                        // console.log(data.lead_id);
                        // 		document.getElementById("inputlead").value = data.lead_id;	
                        // alert(data.success);

                    },

                });
            }, 3000);
        }

        function getFprint() {
            const fpPromise = new Promise((resolve, reject) => {
                    const script = document.createElement('script');
                    script.onload = resolve;
                    script.onerror = reject;
                    script.async = true;
                    script.src = 'https://cdn.jsdelivr.net/npm/' +
                        '@fingerprintjs/fingerprintjs-pro@3/dist/fp.min.js';
                    document.head.appendChild(script);
                })
                .then(() => FingerprintJS.load({
                    token: 'IKdv32iUnyBAXfWMs9yI',
                    region: 'ap'
                }));

            // Get the visitor identifier when you need it.
            fpPromise
                .then(fp => fp.get())
                .then(result => $('#finger-print').val(result.visitorId));
        }


        function reviewOrderInfo() {

            if ($('.high-school').is(':checked')) {
                $('#rev-academic_level').text($('.high-school').val());
            } else if ($('.college-undergraduate').is(':checked')) {
                $('#rev-academic_level').text($('.college-undergraduate').val());
            } else if ($('.masters').is(':checked')) {

                $('#rev-academic_level').text($('.masters').val());
            } else if ($('.doctoral').is(':checked')) {

                $('#rev-academic_level').text($('.doctoral').val());
            }

            $('#rev-phone').text($('#phone').val());

            $('#rev-document_type').text($('#documentType').val());
            $('#rev-hours').text($('#hours').val());
            $('#rev-number_pages').text($('#pages').val());
            // $('#rev-name').val($('#name').val());
            $('#rev-email').text($('#email').val());
            $('#rev-project_subject').text($('#projectsubject').val());
            $('#rev-paper_title').text($('#topic').val());
            $('#rev-sources').text($('#NumberSources').val());
            $('#rev-citation_style').text($('#otherCitationstyle').val());
            $('#rev-description').text($('#description').val());

            $('#rev-price').text('$' + $('#o-price').val());
            // var fp = $('input[type=file]').val().replace(/C:\\fakepath\\/i, '');


            $("#ulList").empty();
            var fp = $('#attach');

            var lg = fp[0].files.length; // get length
            var items = fp[0].files;
            var fragment = "";

            if (lg > 0) {
                for (var i = 0; i < lg; i++) {
                    var fileName = items[i].name; // get file name
                    // var fileSize = items[i].size; // get file size 
                    // var fileType = items[i].type; // get file type

                    // append li to UL tag to display File info
                    fragment += "<li>" + fileName + "</li>";
                }

                $("#ulList").append(fragment);
            }
        }
    </script>

    <script>
        function saveLeads(stepNum) {

            var acedamic_level = '';
            if ($('.high-school').is(':checked')) {
                acedamic_level = $('.high-school').val();
            } else if ($('.college-undergraduate').is(':checked')) {
                acedamic_level = $('.college-undergraduate').val();
            } else if ($('.masters').is(':checked')) {
                acedamic_level = $('.masters').val();
            } else if ($('.doctoral').is(':checked')) {
                acedamic_level = $('.doctoral').val();
            } else {
                acedamic_level = '';
            }
            var client_name = $("#name").val();
            var phone = $("#country-cd").val() + '' + $("#phone").val();
            var documentType = $("#documentType").val();
            var pages = $("#pages").val();
            var price = $("#totalp").val();
            var date = $("#DeadlineDate").val();
            var order_status = $("#order-status").val();
            var inputEmail = $("#email").val();
            var time = $("#hours").val();
            var is_full_pay = $("#is_full_pay").val();
            // alert(is_full_pay);


            var order_id = $("#order_id").val();
            // alert(order_id);
            var title = $("#topic").val();
            var subject = $("#projectsubject").val();
            var citation_style = $("#otherCitationstyle").val();
            var no_of_sources = $("#NumberSources").val();
            var description = $("#description").val();
            var filename = $("#attach").val();
            var otherdocumentType = $("#otherdocumentType1").val();
            // var filename = new FormData($('#attach')[0]);

            var lead_id = $("#inputlead").val();

            var formdata = new FormData();
            var ins = document.getElementById('attach').files.length;
            for (var x = 0; x < ins; x++) {
                formdata.append("files[]", document.getElementById('attach').files[x]);
            }

            formdata.append('finger_print_id', $('#finger-print').val());
            formdata.append('documentType', documentType);
            formdata.append('name', client_name);
            formdata.append('phone', phone);
            formdata.append('academicLevel', acedamic_level);
            formdata.append('no_of_page', pages);
            formdata.append('quotedPrice', price);
            formdata.append('duedate', date);
            formdata.append('order_status', order_status);
            formdata.append('email', inputEmail);
            formdata.append('duetime', time);
            formdata.append('order_id', order_id);
            formdata.append('is_full_pay', is_full_pay);
            formdata.append('title', title);
            formdata.append('project_subject', subject);
            formdata.append('citation_style', citation_style);
            formdata.append('NumberSources', no_of_sources);
            formdata.append('comment', description);
            formdata.append('lead_id', lead_id);
            formdata.append('otherdocumentType', otherdocumentType);

            if (stepNum === 'form-proceed') {
                setTimeout(() => {
                    document.formProceed.action = "<?= base_url('proceed_to_pay') ?>";
                    document.formProceed.submit();
                    return false;
                }, 2000);
            } else {

                if (stepNum === 'true') {
                    generateLead(formdata);
                }

                if (stepNum === 'step-two') {
                    placeOrder(formdata);
                }
            }
        }

        function generateLead(formdata) {
            $.ajax({
                url: "<?= base_url('portal/OrderNow/generate_lead'); ?>",
                type: "post",
                data: formdata,
                processData: false,
                dataType: "json",
                contentType: false,
                cache: false,
                async: true,
                success: function(data) {
                    if ($.isEmptyObject(data.error)) {
                        $('#inputlead').val(data.lead_id);
                        // alert('success response lead also done');
                    } else {}
                },

            });
        }

        function placeOrder(formdata) {

            var count = 0;
            $.ajax({
                url: "<?= base_url('portal/OrderNow/orderProcess'); ?>",
                type: "post",
                data: formdata,
                processData: false,
                dataType: "json",
                contentType: false,
                cache: false,
                async: true,
                success: function(data) {

                    // if (data.checkUser === false) {
                    //     count++;
                    //     if (count > 0) {
                    //         $('#new-user').val('new');
                    //     }
                    // }
                    // if (data.checkUser === true) {
                    //     if (count === 0) {
                    //         $('#new-user').val('old');
                    //     }
                    // }

                    // alert('order_resp '+data.checkUser);

                    $(".order_id").val(data.orderID);
                    $('#rev-order_id').html('PPL-' + data.orderID);
                    generateLead(formdata);
                },
            });
        }
    </script>



    <!-- Stripe JavaScript library -->
    <script type="text/javascript" src="https://js.stripe.com/v2/"></script>

    <script type="text/javascript">
        // pk_test_qblFNYngBkEdjEZ16jxxoWSM
        //set your publishable key
        Stripe.setPublishableKey('pk_live_51JaecpE9MdQoVk1fXHTXqyykO8wtuHlWevv4lYSlfoL2yPmYuESCgG8tZ9H61Zi4J8MzlKeXBTQAh9TVcWqA4L9k00flAi07Jb');
        

        //callback to handle the response from stripe
        function stripeResponseHandler(status, response) {
            if (response.error) {
                //enable the submit button
                $('#payBtn').removeAttr("disabled");
                //display the errors on the form
                // $('#payment-errors').attr('hidden', 'false');
                $('#payment-errors').addClass('alert alert-danger');
                $("#payment-errors").html(response.error.message);
            } else {
                var form$ = $("#paymentFrm");
                //get token id
                var token = response['id'];
                //insert the token into the form
                form$.append("<input type='hidden' name='stripeToken' value='" + token + "' />");
                //submit form to the server
                form$.get(0).submit();
            }
        }
        $(document).ready(function() {
            //on form submit
            $("#paymentFrm").submit(function(event) {
                //disable the submit button to prevent repeated clicks
                $('#payBtn').attr("disabled", "disabled");

                //create single-use token to charge the user
                Stripe.createToken({
                    number: $('#card_num').val(),
                    cvc: $('#card-cvc').val(),
                    exp_month: $('#card-expiry-month').val(),
                    exp_year: $('#card-expiry-year').val()
                }, stripeResponseHandler);

                //submit from callback
                return false;
            });
        });
    </script>
    
     <script>
    
$('#btclose').on('click', function(){
    clearInterval(interv);
    $('#container').hide();
  $('#popup').hide();
    
});

var interv='';
var countIf =0;

function showPopup(stepNumber){
    
    if (stepNumber ==='step-one') {

        if(countIf<1){


        var start = new Date();

//  interv = setInterval(function(){
    var now = new Date();
  console.log()
//   if(now-start > 1*10){
    $('#popup').show();
    $('#container').show();
//   }
  
// },10);   

const myTimeout = setTimeout(myGreeting, 5000);




}
countIf++;

    }
    
    
}

function myGreeting() {
    $( "#popup" ).slideUp( "slow", function() {
        $('#popup').hide();
  $('#container').hide();
    // Animation complete.
  });
  
}
    
</script>

<script type="text/javascript"> 
function wc_track() {
var el = document.getElementById('formProceed');
el.classList.add('page1', 'page2', 'page3');
var btn1=document.querySelector("#formProceed > div.order-form.step-one-content > div.ord-cont > div:nth-child(8) > div > a");
btn1.classList.add("btn1");
var btn2=document.querySelector("#formProceed > div.order-form.step-two-content > div:nth-child(2) > div > a.yellow-btn");
btn2.classList.add("btn2");
var btn3=document.querySelector("#proceed-checkout");
btn3.classList.add("btn3");
}
setTimeout(function(){ wc_track(); }, 2000);
</script>


</body>

</html>