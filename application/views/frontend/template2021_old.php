<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<head runat="server">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- Document Title ============================================= -->
  <title><?= $title ?></title>
  <meta name="description" content="Order the most reliable consultation service online on Paperly. We provide academic consultation for all kinds of consultancy to students worldwide.">
    <meta name="keywords" content="Academic editing, academic mentoring service, academic editing, assignments editing, help with assignment">

    <!-- All Og tags used-->
    <meta property="og:locale" content="en_US">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Paperly | Trust-worthy consultation Service Online!">
    <meta property="og:description" content="Order the most reliable consultation service online on Paperly. We provide academic editing for all kinds of academic editing to students worldwide.">
    
    <meta property="og:site_name" content="Paperly">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:description" content="Order the most reliable academic mentoring service online on Paperly. We provide academic proofreading for all kinds of academic mentoring to students worldwide.">
    <meta name="twitter:title" content="Paperly | Trust-worthy consultancy Service Online!">
    <meta name="author" content="type pixel">
    <!--<link rel="icon" href="<?= asset_url() ?>front/favicon.jpg" type="image/gif" sizes="16x16">-->
    
    <link rel="icon" href="<?= asset_url() ?>front/images/logo.png" type="image/gif" sizes="16x16">
    <link rel="canonical" href="<?= ((isset($canonical)) ? $canonical : '') ?>" />

    <!-- All CSS file links -->
    
 
    <!-- All CDN's CSS files links -->
	<link rel="stylesheet" href="<?= asset_url() ?>front/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" type="text/css" />
	<link rel="stylesheet" href="<?= asset_url() ?>front/ajax/libs/font-awesome/5.10.2/css/all.min.css" type="text/css" />
	<link rel="stylesheet" href="<?= asset_url() ?>front/ajax/libs/animate.css/3.7.2/animate.min.css" type="text/css" />
	<!-- IntlTelInput CDN CSS file  -->
	<link rel="stylesheet" href="<?= asset_url() ?>front/ajax/libs/intl-tel-input/17.0.15/css/intlTelInput.css" type="text/css" />
	<!-- Swiper's Slider CDN CSS -->
	<link rel="stylesheet" href="<?= asset_url() ?>front/ajax/libs/Swiper/8.0.7/swiper-bundle.min.css" type="text/css" />
	<!-- Fonts CSS -->	
	<link rel="stylesheet" href="<?= asset_url() ?>front/css/fonts.css" />
	<!-- Custom CSS -->
	<link rel="stylesheet" href="<?= asset_url() ?>front/css/style3661.css?v=2.0" type="text/css" />
	<link rel="stylesheet" href="<?= asset_url() ?>front/css/responsive3661.css?v=2.0" type="text/css" />
	<!-- Cookiebar CSS File-->
	<link rel="stylesheet" href="<?= asset_url() ?>front/ajax/libs/cookieconsent2/3.1.0/cookieconsent.min.css" type="text/css" />

	<!-- JQuery Included -->
	<script src="<?= asset_url() ?>front/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	
	<script type="text/javascript" src="<?= asset_url() ?>front/js/jquery.syotimer.js"></script>
<script type="text/javascript" src="<?= asset_url() ?>front/js/syotimer.examples.js"></script>
   
    <style type="text/css">
        .loader {
            border: 16px solid #f3f3f3;
            /* Light grey */
            border-top: 16px solid #2f55d4;
            /* Blue */
            border-radius: 50%;
            width: 120px;
            height: 120px;
            animation: spin 2s linear infinite;
            margin: auto;
        }

        input[type=number]::-webkit-inner-spin-button,
        input[type=number]::-webkit-outer-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        input[type=number] {
            -moz-appearance: textfield;
        }
        
        

    </style>
    
  <script src="//scripts.iconnode.com/101542.js"></script>
  
  <!-- Global site tag (gtag.js) - Google Ads: 10971418945 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-10971418945"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-10971418945');
</script>
    
</head>

<body id="top">
	<!-- Clicky Scripts -->
	<script>
        var clicky_site_ids = clicky_site_ids || [];
        clicky_site_ids.push(101342344);
    </script>
    <script async="" src="http://static.getclicky.com/js"></script>

    <!-- Header/ Navigation Section Starts -->


  <?php $this->load->view('header'); ?>

  <?php echo $content; ?>

  <?php $this->load->view('footer'); ?>


  <script>
    var base_url = '<?php echo base_url(); ?>';
  </script>

  <!--new -->
  <!-- JavaScript file included links -->
<script src="<?= asset_url() ?>front/ajax/libs/cookieconsent2/3.1.0/cookieconsent.min.js"></script>
<script src="<?= asset_url() ?>front/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script> <!-- support for HTML5 in IE8 -->
<script src="<?= asset_url() ?>front/ajax/libs/popper.js/1.15.0/umd/popper.min.js"></script>
<script src="<?= asset_url() ?>front/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script src="<?= asset_url() ?>front/ajax/libs/Swiper/8.0.7/swiper-bundle.min.js"></script>
<script src="<?= asset_url() ?>front/ajax/libs/owl-carousel/1.3.2/owl.carousel.min.js"></script>
<script src="<?= asset_url() ?>front/ajax/libs/ouibounce/0.0.11/ouibounce.min.js"></script>
<script src="<?= asset_url() ?>front/ajax/libs/jquery.lazy/1.7.10/jquery.lazy.min.js"></script>
<script src="<?= asset_url() ?>front/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js"></script>
<!--Custom scripts used file-->
<script src="<?= asset_url() ?>front/js/scripts3661.js?v=2.0"></script>
  <!--end new-->

<!-- PASS THRU DATA OBJECT -->
<script src="<?= asset_url() ?>front/common/intlTelInput.js"></script>
<script type="text/javascript">
    $(function() {
        /*$("#phone").intlTelInput({
            dropdownContainer: "body",
            placeholderNumberType: "",// "MOBILE",
            preferredCountries: ['us', 'gb', 'au', 'nz', 'ie'],
            separateDialCode: true,
            utilsScript: "js/utils.js"
        });*/

        $(document).on('click', '.country-list li', function(e) {
            $('#phone_code').val($(document).find('.selected-dial-code').text());
            $('#country_iso_code').val($(this).attr('data-country-code'));
        });

        $(document).on('keyup', '#phone', function(e) {
            $('#phone_code').val($(document).find('.selected-dial-code').text());
            elem = $($(document).find('.selected-flag').children(0).get(0)).clone();
            $('#country_iso_code').val($(elem).removeClass('iti-flag').attr('class'));
        });

        setTimeout(function() {
            $('#phone_code').val($(document).find('.selected-dial-code').text());
            elem = $($(document).find('.selected-flag').children(0).get(0)).clone();
            $('#country_iso_code').val($(elem).removeClass('iti-flag').attr('class'));
        }, 10000);
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


<script>
    function submitForm() {
      document.order_form_Q.action = "<?= base_url('calculate-price') ?>";
      document.order_form_Q.submit();
    }
    
    $(document).ready(function () {
    var quantitiy = 0;
    $('.quantity-right-plus').click(function (e) {
        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        var quantity = parseInt($('#pages').val());
        // If is not undefined
        if (quantity < 9999) {
            $('#pages').val(quantity + 1);
        }
        setHomeCalculator();
        // Increment
    });

    $('.quantity-left-minus').click(function (e) {
        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        var quantity = parseInt($('#pages').val());

        // If is not undefined
        // Increment
        if (quantity > 1) {
            $('#pages').val(quantity - 1);
        }
        setHomeCalculator();
    });

    $('#pages').on('input', function () {
        var t = $("#pages").val();
        1 > t && $("#pages").val(1)
        setHomeCalculator();
    });
});	
	
  </script>
  <!--  Clickcease.com tracking-->
<script type='text/javascript'>var script = document.createElement('script');
script.async = true; script.type = 'text/javascript';
var target = 'https://www.clickcease.com/monitor/stat.js';
script.src = target;var elem = document.head;elem.appendChild(script);
</script>
<noscript>
<a href='https://www.clickcease.com' rel='nofollow'><img src='https://monitor.clickcease.com/stats/stats.aspx' alt='ClickCease'/></a>
</noscript>
<!--  Clickcease.com tracking-->
  
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/619bcefb6885f60a50bcfcf0/1fl4a12gn';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
</body>

</html>
