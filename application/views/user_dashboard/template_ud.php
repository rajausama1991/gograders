<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<head>


    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <!-- <meta name="author" content="Academic Help Online" /> -->
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" /> -->

    <title><?= $title ?></title>

   <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--Main-->
  <link rel="stylesheet" href="<?= asset_url() ?>user_dashboard/dist/css/style.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= asset_url() ?>user_dashboard/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= asset_url() ?>user_dashboard/dist/css/adminlte.min.css">
	<!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="<?= asset_url() ?>user_dashboard/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  
   <link rel="icon" href="<?= asset_url() ?>front/images/logo.png" type="image/gif" sizes="16x16">

</head>

<body class="hold-transition sidebar-mini">

    <div class="wrapper">

        <?php $this->load->view('user_dashboard/common/header'); ?>
        <?php $this->load->view('user_dashboard/common/left_menu'); ?>

        <?php echo $content; ?>

        <?php $this->load->view('user_dashboard/common/footer'); ?>

    </div>
    <script>
        var base_url = '<?php echo base_url(); ?>';
    </script>
   

    <!-- jQuery -->
    <script src="<?= asset_url() ?>user_dashboard/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?= asset_url() ?>user_dashboard/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- bs-custom-file-input -->
    <script src="<?= asset_url() ?>user_dashboard/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= asset_url() ?>user_dashboard/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?= asset_url() ?>user_dashboard/dist/js/demo.js"></script>
    <script type="text/javascript" src="<?= asset_url() ?>user_dashboard/dist/js/ddaccordion.js">
        // <script type="text/javascript">
        $(document).ready(function() {
            bsCustomFileInput.init();
        });
    </script>

    <script type="text/javascript">
        ddaccordion.init({
            headerclass: "submenuheader", //Shared CSS class name of headers group
            contentclass: "submenu", //Shared CSS class name of contents group
            revealtype: "click", //Reveal content when user clicks or onmouseover the header? Valid value: "click", "clickgo", or "mouseover"
            mouseoverdelay: 200, //if revealtype="mouseover", set delay in milliseconds before header expands onMouseover
            collapseprev: true, //Collapse previous content (so only one open at any time)? true/false 
            defaultexpanded: [], //index of content(s) open by default [index1, index2, etc] [] denotes no content
            onemustopen: false, //Specify whether at least one header should be open always (so never all headers closed)
            animatedefault: false, //Should contents open by default be animated into view?
            persiststate: true, //persist state of opened contents within browser session?
            toggleclass: ["", ""], //Two CSS classes to be applied to the header when it's collapsed and expanded, respectively ["class1", "class2"]
            togglehtml: ["suffix", "<img src='dist/img/plus.webp' class='statusicon' />", "<img src='dist/img/minus.webp' class='statusicon' />"], //Additional HTML added to the header when it's collapsed and expanded, respectively  ["position", "html1", "html2"] (see docs)
            animatespeed: "fast", //speed of animation: integer in milliseconds (ie: 200), or keywords "fast", "normal", or "slow"
            oninit: function(headers, expandedindices) { //custom code to run when headers have initalized
                //do nothing
            },
            onopenclose: function(header, index, state, isuseractivated) { //custom code to run whenever a header is opened or closed
                //do nothing
            }
        })
    </script>

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



</body>

</html>