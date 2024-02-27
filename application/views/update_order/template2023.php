<!DOCTYPE html>

<html dir="ltr" lang="en-US">



<head>

    <!-- Hotjar Tracking Code for https://paperly.net/ -->

    <script>
        (function(h, o, t, j, a, r) {

            h.hj = h.hj || function() {
                (h.hj.q = h.hj.q || []).push(arguments)
            };

            h._hjSettings = {
                hjid: 2876349,
                hjsv: 6
            };

            a = o.getElementsByTagName('head')[0];

            r = o.createElement('script');
            r.async = 1;

            r.src = t + h._hjSettings.hjid + j + h._hjSettings.hjsv;

            a.appendChild(r);

        })(window, document, 'https://static.hotjar.com/c/hotjar-', '.js?sv=');
    </script>





    <meta http-equiv="content-type" content="text/html; charset=utf-8" />

    <meta name="author" content="Academic Help Online" />

    <!-- <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" /> -->



    <title><?= $title ?></title>



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
    <!-- For loader -->
    <link type="text/css" rel="stylesheet" href="<?= asset_url() ?>loader/css/normalize.css" />
    <link rel="stylesheet" href="<?= asset_url() ?>loader/css/main.css">
    <script src="<?= asset_url() ?>loader/js/vendor/modernizr-2.6.2.min.js"></script>


    <!-- Bootstrap Dropzone CSS -->
    <link href="<?= base_url() ?>dist2/jquery.fileuploader.css" rel="stylesheet">
    <link href="<?= base_url() ?>dist2/css/jquery.fileuploader-theme-dragdrop.css" media="all" rel="stylesheet">


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

        input:disabled {
            background-color: #fff !important;
        }
    </style>



    <!-- Global site tag (gtag.js) - Google Ads: 10777734605 -->

    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-10777734605"></script>

    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());



        gtag('config', 'AW-10777734605');
    </script>





</head>



<body>





    <?php $this->load->view('portal/header'); ?>



    <?php echo $content; ?>



    <?php $this->load->view('portal/footer'); ?>





    <script>
        var base_url = '<?php echo base_url(); ?>';
    </script>

    <script src="<?= asset_url() ?>portal/js/jquery-3.6.0.min.js"></script>

    <script src="<?= asset_url() ?>portal/js/bootstrap.min.js"></script>

    <!-- <script src="<?= asset_url() ?>portal/js/order-form.js"></script> -->

    <script src="<?= asset_url() ?>portal/js/jquery.jConveyorTicker.min.js"></script>

    <script type="text/javascript" src="<?= asset_url() ?>portal/js/jquery.syotimer.js"></script>

    <script type="text/javascript" src="<?= asset_url() ?>portal/js/syotimer.examples.js"></script>
    <!-- For recaptcha -->
    <script src='https://www.google.com/recaptcha/api.js'></script>


    <!-- For file upload -->
    <script type="text/javascript" src="<?= base_url() ?>dist2/jquery.fileuploader.min.js"></script>
    <script src="<?= base_url() ?>dist2/js/custom.js" type="text/javascript"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('input[name="img_post_blog"]').fileuploader({
                // Options will go here
            });
        })
    </script>





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

        ;
        (function(n, t, c) {
            function i(n) {
                return e._h ? e._h.apply(null, n) : e._q.push(n)
            }
            var e = {
                _q: [],
                _h: null,
                _v: "2.0",
                on: function() {
                    i(["on", c.call(arguments)])
                },
                once: function() {
                    i(["once", c.call(arguments)])
                },
                off: function() {
                    i(["off", c.call(arguments)])
                },
                get: function() {
                    if (!e._h) throw new Error("[LiveChatWidget] You can't use getters before load.");
                    return i(["get", c.call(arguments)])
                },
                call: function() {
                    i(["call", c.call(arguments)])
                },
                init: function() {
                    var n = t.createElement("script");
                    n.async = !0, n.type = "text/javascript", n.src = "https://cdn.livechatinc.com/tracking.js", t.head.appendChild(n)
                }
            };
            !n.__lc.asyncInit && e.init(), n.LiveChatWidget = n.LiveChatWidget || e
        }(window, document, [].slice))
    </script>

    <noscript><a href="https://www.livechatinc.com/chat-with/13090896/" rel="nofollow">Chat with us</a>, powered by <a href="https://www.livechatinc.com/?welcome" rel="noopener nofollow" target="_blank">LiveChat</a></noscript>

    <script>
        $(".chaton").click(function() {

            LiveChatWidget.call('maximize');
            return false;

        });
    </script>

    <!-- End of LiveChat code -->



    <script src="//scripts.iconnode.com/102850.js"></script>











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

            var phoneno = /^.{8,14}$/;



            //  var phoneno = /^\d{10}$/;



            if ($('.iti__selected-dial-code').text() === '+61') {

                phoneno = /^\d{9,10}$/;

                //phoneno = '';

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
            var otherdocumentType1 = $("#otherdocumentType1").val();
            var phone = $("#phone").val();

            var date = $("#DeadlineDate").val();

            var time = $("#hours").val();

            var pages = $("#pages").val();







            // End Variables for step one





            if (stepNumber == 'btn-step-one') {

                var date_error = $('#deadline-message').text();
                if (date_error != '') {
                    return false;
                }

                // 10% Discount from Total Price



                isDiscountable('yes');

                // var discountedPrice = applyDiscount();

                // $('#discounted-price').val(discountedPrice);



                // alert(discountedPrice);



                // var applyDiscount = $('#actual').val();



                // alert('Apply Discount on this Step ' + $('#actual').val());

                saveData(0);



                saveLeads('step-one');



                if (phone == '') {

                    document.getElementById('phone').scrollIntoView({

                        behavior: "smooth"

                    });

                    $('#phone-message').text('Please Enter Phone Number');



                }

                if (documentType == '') {
                    $('#doc-type-message').text('Please Select Document Type');
                } else {
                    if (documentType == 'Other') {
                        if (otherdocumentType1 != '') {
                            $('#doc-type-other-message').text('');
                        } else {
                            documentType = otherdocumentType1;
                            $('#doc-type-other-message').text('Please Enter Document Type.');
                        }
                    }
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
                var back_end_errors = $('.backend-error-p').length;
                if (date !== '' && time !== '' &&

                    pages !== '' && phone !== '' &&

                    documentType !== '' && acedamic_level !== '') {



                    if (phone.match(phoneno) && back_end_errors == 0) {

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
                var otherSubject = $("#otherSubject").val();
                var topic = $("#topic").val();



                var NumberSources = $("#NumberSources").val();

                var otherCitationstyle = $("#otherCitationstyle").val();
                var otherCitationValue = $("#otherCitationValue").val();
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

                } else {
                    if (projectsubject == 'Other') {
                        if (otherSubject != '') {
                            $('#other-subject-message').text('');
                        } else {
                            projectsubject = otherSubject;
                            $('#other-subject-message').text('Please Enter Subject.');
                        }
                    }
                }

                if (topic == '') {

                    $('#topic-message').text('Please Enter Topic');



                }

                if (NumberSources == '') {

                    $('#number-sources-message').text('Please Enter Number Sources');



                }

                if (otherCitationstyle == '') {
                    $('#citation-message').text('Please Select Citation');

                } else {
                    if (otherCitationstyle == 'Other') {
                        if (otherCitationValue != '') {
                            $('#other-citation-message').text('');
                        } else {
                            otherCitationstyle = otherCitationValue;
                            $('#other-citation-message').text('Please Enter Citation Style.');
                        }
                    }
                }

                if (description == '') {

                    $('#description-message').text('Please Enter Description');

                }

                if (name !== '' && email !== '' &&

                    projectsubject !== '' && topic !== '' &&

                    NumberSources !== '' && otherCitationstyle !== '' && description !== '') {



                    advanceRegex = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\\.,;:\s@\"]+\.)+[^<>()[\]\\.,;:\s@\"]{2,})$/;
                    if (/(.+)@(.+){2,}\.(.+){2,}/.test(email) && advanceRegex.test(email)) {

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

                        $('#loader-wrapper').show();

                    } else {
                        $('#email-message').text('Please enter a valid Email');
                    }



                } else {



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



        function saveData(is_phone, element_id) {

            var halfPrice = 0;
            var currencyType = $("#currency").val();
            var prepay = document.getElementById("paymentStatus");
            if (prepay.checked == true) {
                $('#is_full_pay').val(0);
            } else {
                $('#is_full_pay').val(1);
            }

            // First Step Data

            var acedamic_level = '';
            var demo1 = "";

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
            if (acedamic_level != '') {
                $('#academic-message').text('');
            }
            var documentType = $("#documentType").val();
            var otherdocumentType1 = $("#otherdocumentType1").val();
            var date = $("#DeadlineDate").val();
            var time = $("#hours").val();
            var pages = $("#pages").val();
            var phone = $("#phone").val();
            var regEx = /^[a-zA-Z ]{2,30}$/;

            var phoneno = '';

            if ($('.iti__selected-dial-code').text() === '+61') {
                phoneno = /^\d{9}$/;
            } else {
                phoneno = /^.{8,14}$/;
            }
            var client_name = $("#name").val();
            var inputEmail = $("#email").val();

            halfPrice = convertPrice(acedamic_level, date, time, pages, currencyType);
            if (phone.match(phoneno)) {
                $('.you-pay').text(halfPrice.toFixed(2));
            }

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

                if (phone.match(phoneno)) {
                    if ($("#paymentStatus").prop("checked") == true) {
                        $(".total").html(halfPrice.toFixed(2) / 2);
                        $('#pay-only').show();
                        var price_hlf = halfPrice / 2;
                        $(".priceBoxCheck").text(price_hlf.toFixed(2));
                        $('.you-pay').text(halfPrice.toFixed(2));
                        var finalPrice = halfPrice.toFixed(2) / 2;
                        $('#rev-price').text(finalPrice);
                        $('#o-price').val(finalPrice);
                        $("#totalp").val(finalPrice);
                        $('#is_full_pay').val(0);
                    } else {
                        $('#is_full_pay').val(1);
                        $('.actual').html((demo1 * 2).toFixed(2));
                        $('#pay-only').hide();
                        $('.you-pay').text(halfPrice.toFixed(2));
                        $(".total").text(halfPrice.toFixed(2));
                        $("#totalp").val(halfPrice.toFixed(2));

                        var finalPrice = $("#totalp").val();
                        $('#o-price').val(halfPrice.toFixed(2));
                        $('#rev-price').text(halfPrice.toFixed(2));
                    }
                    $('.actual').html(halfPrice.toFixed(2));
                    $('#actual').val(halfPrice);
                    if (is_phone == 1) {
                        saveLeads(sendLeads, 1);
                    } else {
                        saveLeads(sendLeads, 0);
                    }
                }
            }

            var name = $("#name").val();
            var email = $("#email").val();
            var projectsubject = $("#projectsubject").val();
            var otherSubject = $("#otherSubject").val();
            var topic = $("#topic").val();
            var NumberSources = $("#NumberSources").val();
            var otherCitationstyle = $("#otherCitationstyle").val();
            var otherCitation = $("#otherCitation").val();
            var otherCitationValue = $("#otherCitationValue").val();
            var description = $("#description").val();
            var order_id = $("#order_id").val();

            if (projectsubject == 'Other') {
                if (otherSubject != '') {

                } else {
                    projectsubject = otherSubject;

                }
            }

            if (otherCitationstyle == 'Other') {
                if (otherCitationValue != '') {

                } else {
                    otherCitationstyle = otherCitationValue;
                }
            }

            if (name !== '' && email !== '' &&
                projectsubject !== '' && topic !== '' &&
                NumberSources !== '' && otherCitationstyle !== '' && description !== '' && order_id != 0) {
                saveLeads('step-two');
            }

            autoSaveLeads(client_name, inputEmail,
                phone, documentType,
                acedamic_level,
                pages, finalPrice, date, time, otherdocumentType1, element_id);

            $("#country-cd").val($('.iti__selected-dial-code').text());
        }

        function convertPriceCurrencyVise(acedamic_level, date, time, pages, selectedCurrencyType) {
            var demo1 = "";
            var day1, day2, day3, day4_5, day6_7, day8;

            switch (acedamic_level) {
                case "High School":
                    day1 = 19.0;
                    day2 = 17.0;
                    day3 = 15.5;
                    day4_5 = 14.0;
                    day6_7 = 13.0;
                    day8 = 12.5;
                    break;
                case "College-undergraduate":
                    day1 = 21.0;
                    day2 = 19.5;
                    day3 = 18.5;
                    day4_5 = 17.5;
                    day6_7 = 16.0;
                    day8 = 15.5;
                    break;
                case "Masters":
                    day1 = 24.0;
                    day2 = 23.0;
                    day3 = 20.5;
                    day4_5 = 19.5;
                    day6_7 = 18.0;
                    day8 = 17.5;
                    break;
                case "PHD":
                    day1 = 36.0;
                    day2 = 34.0;
                    day3 = 32.0;
                    day4_5 = 31.0;
                    day6_7 = 30.0;
                    day8 = 29.0;
                    break;
                default:
                    // Handle invalid academic level
                    break;
            }

            var currentDate = Date.now();
            var selectedDate = new Date(date).getTime();
            var dateDiff = Math.ceil((selectedDate - currentDate) / 86400000);

            var selectedDate2 = new Date(date + ',' + time).getTime();
            var seconds = Math.floor((selectedDate2 - currentDate) / 1000);
            var minutes = Math.floor(seconds / 60);
            var hours = Math.floor(minutes / 60);
            var days = Math.floor(hours / 24);
            hours = hours - (days * 24);
            minutes = minutes - (days * 24 * 60) - (hours * 60);
            seconds = seconds - (days * 24 * 60 * 60) - (hours * 60 * 60) - (minutes * 60);

            var ppg = 0;

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

            if (acedamic_level == "0" || isNaN(dateDiff)) {
                demo1 = day1;
            } else {
                demo1 = ppg;
            }

            demo1 *= pages;
            var price = 0;
            var perr = (demo1 * 2).toFixed(2);
            var per = perr * 10;
            var ttl = per / 100;
            price = parseFloat(ttl) + parseFloat(perr);
            var halfPrice = price / 2;

            var isApplicable = $('#check-step').val();
            if (isApplicable === 'yes') {
                var dicPrice = applyDiscount(halfPrice);
                halfPrice = dicPrice;
            }

            $("#totalp_usd").val(halfPrice);
            return halfPrice;
        }

        function convertPrice(acedamic_level, date, time, pages, selectedCurrencyType) {
            var currencySigns = {
                'USD': '$',
                'CAD': 'C$',
                'AUD': 'A$',
                'GBP': '£',
                'EUR': '€'
            };
            var newPrice = 0;
            var response = <?php echo $currencies; ?>;
            var currencyRates = {
                'USD': parseFloat(response.USD_RATE),
                'CAD': parseFloat(response.CAD_RATE),
                'AUD': parseFloat(response.AUD_RATE),
                'GBP': parseFloat(response.GBP_RATE),
                'EUR': parseFloat(response.EUR_RATE)
            };

            if (selectedCurrencyType === 'USD') {
                $("#selected_currency").val('USD');
                $(".c_sign").text("$");
                newPrice = convertPriceCurrencyVise(acedamic_level, date, time, pages, selectedCurrencyType);
            } else {
                $("#selected_currency").val(selectedCurrencyType);
                $(".c_sign").text(currencySigns[selectedCurrencyType]);
                var base_price = convertPriceCurrencyVise(acedamic_level, date, time, pages, selectedCurrencyType);
                newPrice = currencyRates[selectedCurrencyType] * parseFloat(base_price);
            }

            return newPrice;
        }

        function autoSaveLeads(client_name, inputEmail, phone, documentType, acedamic_level, pages, price, date, time, otherdocumentType1, element_id) {

            var regEx = /^[a-zA-Z ]{2,30}$/;
            var phoneno = '';
            if ($('.iti__selected-dial-code').text() === '+61') {
                phoneno = /^\d{9,10}$/;
            } else {

                phoneno = /^.{8,14}$/;

            }
            if (client_name != '') {
                if (client_name.match(regEx)) {

                    client_name = client_name;

                    $('#name-message').text('');
                } else {
                    client_name = '';
                    if (element_id == 'name')
                        $('#name-message').text('Please enter letters and space only.');
                }

            }

            if (phone != '') {
                if (phone.match(phoneno)) {
                    phone = phone;
                    $('#phone-message').text('');

                } else {
                    phone = '';
                    if (element_id == 'phone')
                        $('#phone-message').text('Please enter valid phone number');
                }

            }

            if (date != '') {
                $('#deadline-message').text('');
            } else {
                if (element_id == 'DeadlineDate') {
                    date = '';
                    $('#deadline-message').text('Please enter valid deadline');
                }
            }

            if (inputEmail != '') {
                if (/(.+)@(.+){2,}\.(.+){2,}/.test(inputEmail)) {
                    inputEmail = inputEmail;
                    $('#email-message').text('');
                } else {
                    if (element_id == 'email') {
                        inputEmail = '';
                        $('#email-message').text('Please enter a valid Email');
                    }
                }
            }

            if (documentType != '') {
                $('#doc-type-message').text('');
            } else {
                if (element_id == 'documentType')
                    $('#doc-type-message').text('Please Select Document Type.');
            }

            if (pages != '') {
                $('#pages-message').text('');
            } else {
                if (element_id == 'pages')
                    $('#pages-message').text('Please Select # of Pages.');
            }

            if (otherdocumentType1 != '') {
                $('#doc-type-other-message').text('');
            } else {
                if (element_id == 'otherdocumentType1')
                    $('#doc-type-other-message').text('Please Enter Document Type.');
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

            isSendRequest = 1;


            if (phone != '' && documentType != '' && acedamic_level != '' && date != '' && pages != '' && time != '') {
                isSendRequest = 0;
            }
            if (phone != '' || documentType != '' || acedamic_level != '' || date != '' || pages != '' || time != '') {
                if (isSendRequest === 1) {
                    var formdata = new FormData();
                    var eng_id = $("#eng_id").val();

                    formdata.append('eng_id', eng_id);
                    formdata.append('phone', $('.iti__selected-dial-code').text() + '' + phone);
                    formdata.append('documentType', documentType);
                    formdata.append('academic_level', acedamic_level);
                    formdata.append('client_deadline', date);
                    formdata.append('hours', time);
                    formdata.append('no_of_pages', pages);
                    collectEngagements(formdata);
                }
            }
        }

        function collectEngagements(formdata) {
            $.ajax({
                url: "<?= base_url('portal/Engagements/generate_engagement'); ?>",
                type: "post",
                data: formdata,
                processData: false,
                dataType: "json",
                contentType: false,
                cache: false,
                async: true,
                success: function(response) {
                    console.log(response);
                    if (response.eng_id != 0) {
                        $("#eng_id").val(response.eng_id);
                    }
                },
            });
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
            if ($('#documentType').val() == 'Other') {
                $('#rev-document_type').text($('#otherdocumentType1').val());
            } else {
                $('#rev-document_type').text($('#documentType').val());
            }

            $('#rev-deadline').text($('#DeadlineDate').val());
            $('#rev-hours').text($('#hours').val());
            $('#rev-number_pages').text($('#pages').val());
            $('#rev-email').text($('#email').val());
            if ($('#projectsubject').val() == 'Other') {
                $('#rev-project_subject').text($('#otherSubject').val());
            } else {
                $('#rev-project_subject').text($('#projectsubject').val());
            }

            $('#rev-paper_title').text($('#topic').val());
            $('#rev-sources').text($('#NumberSources').val());

            if ($('#otherCitationstyle').val() == 'Other') {
                $('#rev-citation_style').text($('#otherCitationValue').val());
            } else {
                $('#rev-citation_style').text($('#otherCitationstyle').val());
            }

            $('#rev-description').text($('#description').val());

            $('#rev-price').text($("#selected_currency").val() + '' + $('#o-price').val());
            $("#ulList").empty();
        }
    </script>



    <script>
        function saveLeads(stepNum, is_phone) {
            var acedamic_level = '';
            var formdata = new FormData();

            if ($('.high-school').is(':checked')) {
                acedamic_level = $('.high-school').val();
            } else if ($('.college-undergraduate').is(':checked')) {
                acedamic_level = $('.college-undergraduate').val();
            } else if ($('.masters').is(':checked')) {
                acedamic_level = $('.masters').val();
            } else if ($('.doctoral').is(':checked')) {
                acedamic_level = $('.doctoral').val();
            }

            var fields = {
                'myf': $("#myf").val(),
                'finger_print_id': $('#finger-print').val(),
                'documentType': $("#documentType").val(),
                'name': $("#name").val(),
                'phone': $("#country-cd").val() + $("#phone").val(),
                'academicLevel': acedamic_level,
                'no_of_page': $("#pages").val(),
                'paid_price': $("#totalp").val(),
                'paid_in': $("#selected_currency").val(),
                'quotedPrice': $("#totalp_usd").val(),
                'duedate': $("#DeadlineDate").val(),
                'order_status': $("#order-status").val(),
                'email': $("#email").val(),
                'duetime': $("#hours").val(),
                'order_id': $("#order_id").val(),
                'is_full_pay': $("#is_full_pay").val(),
                'title': $("#topic").val(),
                'project_subject': $("#projectsubject").val(),
                'citation_style': $("#otherCitationstyle").val(),
                'NumberSources': $("#NumberSources").val(),
                'comment': $("#description").val(),
                'lead_id': $("#inputlead").val(),
                'otherdocumentType': $("#otherdocumentType1").val(),
                'otherCitation': $("#otherCitationValue").val(),
                'otherSubject': $("#otherSubject").val(),
                'is_phone': is_phone
            };

            Object.entries(fields).forEach(([key, value]) => {
                formdata.append(key, value);
            });

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
        // function saveLeads(stepNum, is_phone) {
        //     var acedamic_level = '';

        //     if ($('.high-school').is(':checked')) {
        //         acedamic_level = $('.high-school').val();

        //     } else if ($('.college-undergraduate').is(':checked')) {
        //         acedamic_level = $('.college-undergraduate').val();

        //     } else if ($('.masters').is(':checked')) {
        //         acedamic_level = $('.masters').val();

        //     } else if ($('.doctoral').is(':checked')) {
        //         acedamic_level = $('.doctoral').val();

        //     } else {
        //         acedamic_level = '';
        //     }

        //     var client_name = $("#name").val();
        //     var phone = $("#country-cd").val() + '' + $("#phone").val();
        //     var documentType = $("#documentType").val();
        //     var pages = $("#pages").val();
        //     var price = $("#totalp").val();
        //     var date = $("#DeadlineDate").val();
        //     var order_status = $("#order-status").val();
        //     var inputEmail = $("#email").val();
        //     var time = $("#hours").val();
        //     var is_full_pay = $("#is_full_pay").val();
        //     var order_id = $("#order_id").val();
        //     var title = $("#topic").val();
        //     var subject = $("#projectsubject").val();
        //     var citation_style = $("#otherCitationstyle").val();
        //     var no_of_sources = $("#NumberSources").val();
        //     var description = $("#description").val();
        //     var filename = $("#myf").val();
        //     var otherdocumentType = $("#otherdocumentType1").val();
        //     var lead_id = $("#inputlead").val();
        //     var otherSubject = $("#otherSubject").val();
        //     var otherCitation = $("#otherCitationValue").val();
        //     var formdata = new FormData();
        //     formdata.append('myf', filename);
        //     formdata.append('finger_print_id', $('#finger-print').val());
        //     formdata.append('documentType', documentType);
        //     formdata.append('name', client_name);
        //     formdata.append('phone', phone);
        //     formdata.append('academicLevel', acedamic_level);
        //     formdata.append('no_of_page', pages);
        //     formdata.append('quotedPrice', price);
        //     formdata.append('duedate', date);
        //     formdata.append('order_status', order_status);
        //     formdata.append('email', inputEmail);
        //     formdata.append('duetime', time);
        //     formdata.append('order_id', order_id);
        //     formdata.append('is_full_pay', is_full_pay);
        //     formdata.append('title', title);
        //     formdata.append('project_subject', subject);
        //     formdata.append('citation_style', citation_style);
        //     formdata.append('NumberSources', no_of_sources);
        //     formdata.append('comment', description);
        //     formdata.append('lead_id', lead_id);
        //     formdata.append('otherdocumentType', otherdocumentType);
        //     formdata.append('otherCitation', otherCitation);
        //     formdata.append('otherSubject', otherSubject);
        //     formdata.append('is_phone', is_phone);

        //     if (stepNum === 'form-proceed') {

        //         setTimeout(() => {

        //             document.formProceed.action = "<?= base_url('proceed_to_pay') ?>";

        //             document.formProceed.submit();

        //             return false;

        //         }, 2000);

        //     } else {
        //         if (stepNum === 'true') {
        //             generateLead(formdata);

        //         }
        //         if (stepNum === 'step-two') {
        //             placeOrder(formdata);

        //         }

        //     }

        // }



        function generateLead(formdata) {
            var lead_id = $("#inputlead").val();
            $.ajax({

                url: "<?= base_url('portal/OrderNow/generate_lead'); ?>",

                type: "post",

                data: formdata,

                processData: false,

                dataType: "json",

                contentType: false,

                cache: false,

                async: true,
                beforeSend: function() {
                    $("#save-lead-button").prop("disabled", true);
                    $("#lead-loader").show();
                    if (lead_id == 0) {
                        $("#paymentStatus").attr("disabled", true);
                        $("#formProceed :input").prop("disabled", true);
                    }
                },
                complete: function() {
                    $("#save-lead-button").prop("disabled", false);
                    $("#lead-loader").hide();
                    if (lead_id == 0) {
                        $("#paymentStatus").attr("disabled", false);
                        $("#formProceed :input").prop("disabled", false);
                    }
                },
                success: function(data) {
                    if (data.error == 'date_error') {
                        $('#deadline-message').text(data.message);
                    }

                    if ($.isEmptyObject(data.error)) {

                        $("#inputlead").val(data.lead_id);
                        console.log(data.lead_id);
                    } else if (data.error == 'errors') {

                        if (data.document_type != '') {
                            $('#doc-type-message').html(data.document_type);
                        }

                        if (data.academic_level != '') {
                            $('#academic-message').html(data.academic_level);
                        }

                        if (data.due_date != '') {
                            $('#deadline-message').html(data.due_date);
                        }

                        if (data.no_of_page != '') {
                            $('#pages-message').html(data.no_of_page);
                        }
                    }
                },
            });
        }



        function placeOrder(formdata) {
            var count = 0;
            var fragment = "";
            $("#ulList").empty();
            $.ajax({
                url: "<?= base_url('portal/OrderNow/orderProcess'); ?>",
                type: "post",
                data: formdata,
                processData: false,
                dataType: "json",
                contentType: false,
                cache: false,
                async: true,
                beforeSend: function() {
                    $("#save-order-button").prop("disabled", true);
                    $("#order-loader").show();
                },
                complete: function() {
                    $("#save-order-button").prop("disabled", false);
                    $("#order-loader").hide();
                },
                success: function(data) {

                    if (data.success === 'success') {
                        for (let i = 0; i < data.uploadedFiles.length; i++) {
                            fragment += "<li>" + data.uploadedFiles[i] + "</li>";
                        }
                        $("#ulList").append(fragment);
                        $(".order_id").val(data.orderID);

                        $('#rev-order_id').html('<?= returnSlug() ?>' + '-' + data.orderID);
                        generateLead(formdata);
                        $('#loader-wrapper').hide();
                        $('body').addClass('loaded');
                        if (data.checkAccount == 1) {
                            $('#step3-top-text').text('You have been signed-up automatically. Please check your email for Login Credentials.');
                        } else {
                            $('#step3-top-text').text('You have been logged-in automatically.');

                        }
                    }

                },

            });

        }
    </script>







    <!-- Stripe JavaScript library -->

    <script type="text/javascript" src="https://js.stripe.com/v2/"></script>



    <script type="text/javascript">
        <?php
        if ($_SERVER['HTTP_HOST'] == "localhost") {
        ?>
            Stripe.setPublishableKey('<?= $this->config->item('stripe_key') ?>');
        <?php
        } else {
        ?>
            Stripe.setPublishableKey('<?= $this->config->item('stripe_key') ?>');
        <?php
        }
        ?>


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
                return false;
            });

        });
    </script>



    <script>
        $('#btclose').on('click', function() {

            clearInterval(interv);

            $('#container').hide();

            $('#popup').hide();



        });



        var interv = '';
        var countIf = 0;

        function showPopup(stepNumber) {
            if (stepNumber === 'step-one') {
                if (countIf < 1) {
                    var start = new Date();
                    var now = new Date();
                    $('#popup').show();
                    $('#container').show();
                    initCCConvertion(0);
                    const myTimeout = setTimeout(myGreeting, 5000);
                }
                countIf++;
            }
        }



        function myGreeting() {

            $("#popup").slideUp("slow", function() {
                $('#popup').hide();
                $('#container').hide();
            });
        }

        $('#projectsubject').on('change', function() {

            if (this.value == 'Other')

            {

                $("#othersubject1").show();

            } else

            {

                $("#othersubject1").hide();

            }

        });

        $('#otherCitationstyle').on('change', function() {

            if (this.value == 'Other')

            {

                $("#otherCitation").show();

            } else

            {

                $("#otherCitation").hide();

            }

        });

        $('#documentType').on('change', function() {

            if (this.value == 'Other')

            {

                $("#otherdocumentType").show();

            } else

            {

                $("#otherdocumentType").hide();

            }

        });
    </script>



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


    <!--  Clickcease.com tracking-->
    <script type='text/javascript'>
        var script = document.createElement('script');
        script.async = true;
        script.type = 'text/javascript';
        var target = 'https://www.clickcease.com/monitor/stat.js';
        script.src = target;
        var elem = document.head;
        elem.appendChild(script);
    </script>
    <noscript>
        <a href='https://www.clickcease.com' rel='nofollow'><img src='https://monitor.clickcease.com/stats/stats.aspx' alt='ClickCease' /></a>
    </noscript>
    <!--  Clickcease.com tracking-->
    <script type="text/javascript">
        function initCCConvertion(val) {

            window.ccConVal = val || 0;

            var script = document.createElement('script');

            var target = 'https://www.clickcease.com/monitor/cccontrack.js';

            var elem = document.head;

            script.type = 'text/javascript';

            script.src = target;

            elem.appendChild(script);

        }

        function validRecaptcha() {

            let captcha = grecaptcha.getResponse();
            let res = '';
            $.ajax({
                type: "POST",
                url: "<?= base_url() ?>payment/payment/googleCaptachStore",
                data: {

                    captcha: captcha
                },
                async: false,
                beforeSend: function() {
                    $("#loaderWrapper").show();
                },
                complete: function() {
                    $("#loaderWrapper").hide();
                },
                success: function(response) {
                    res = response;

                }
            })
            if (res == 1) {
                $("#rec-error").text('');
                $("#payBtn").attr("onclick", "");
                return true;
            } else {
                $("#rec-error").text('Sorry Google Recaptcha Unsuccessful!!');
                return false;
            }

        }
    </script>

</body>

<script>
    window.onscroll = function() {
        topFunction();
        myFunction();
    };

    var header2 = document.getElementById("pos-fix");
    var sticky2 = header2.offsetTop;

    function topFunction() {
        if (window.pageYOffset > sticky2) {
            header2.classList.add("top-fix");
        } else {
            header2.classList.remove("top-fix");
        }
    }
</script>

</html>