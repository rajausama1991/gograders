<footer class="main-footer">

    &nbsp;

    <div class="txt-rr d-sm-inline-block">

        <strong>Copyright &copy; <?= date('Y') ?> User Dashboard.</strong>

        All rights reserved.

    </div>

</footer>

<div class="modal fade" id="note-modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Comments</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url("orders/editWorkNote") ?>" method="post">
                <div class="modal-body">

                    <div class="comment">

                        <div class="comment-main">
                            <p id="show-note" name="val" rows="10"></p>
                        </div>

                    </div>

                </div>
                <div class="modal-footer justify-content-between">

                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<!-- Control Sidebar -->

<aside class="control-sidebar control-sidebar-dark">

    <!-- Control sidebar content goes here -->

</aside>

<!-- /.control-sidebar -->

</div>

<!-- ./wrapper -->



<!-- jQuery -->

<script src="<?= base_url('user_portal/') ?>plugins/jquery/jquery.min.js"></script>

<!-- Bootstrap 4 -->

<script src="<?= base_url('user_portal/') ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- bs-custom-file-input -->

<script src="<?= base_url('user_portal/') ?>plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>

<!-- AdminLTE App -->

<script src="<?= base_url('user_portal/') ?>dist/js/adminlte.min.js"></script>

<!-- AdminLTE for demo purposes -->

<script src="<?= base_url('user_portal/') ?>dist/js/demo.js"></script>

<script type="text/javascript" src="<?= base_url('user_portal/') ?>dist/js/ddaccordion.js"></script>

<script type="text/javascript">
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

        togglehtml: ["suffix", "<img src='<?= asset_url() ?>user_dashboard/dist/img/add (1).png' class='statusicon icon-img-size' />", "<img src='<?= asset_url() ?>user_dashboard/dist/img/minus.png' class='statusicon icon-img-size' />"], //Additional HTML added to the header when it's collapsed and expanded, respectively  ["position", "html1", "html2"] (see docs)

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
<script>
    // Get the container element
    var btnContainer = document.getElementById("nav-div");

    // Get all buttons with class="btn" inside the container
    var btns = btnContainer.getElementsByClassName("nav-item-card");

    // Loop through the buttons and add the active class to the current/clicked button
    for (var i = 0; i < btns.length; i++) {
        btns[i].addEventListener("click", function(e) {
            // e.preventDefault();
            var current = document.getElementsByClassName("li-active");
            current[0].className = current[0].className.replace(" li-active", "");
            this.className += " li-active";
        });
    }
</script>
<script type="text/javascript">
    function search() {
        var oid = $("#oid").val();

        $.ajax({
            url: "<?= base_url("operations/searchOrder") ?>",
            type: "get",
            data: {
                oid: oid
            },
            beforeSend: function() {
                $("#loader").show();
            },
            complete: function() {
                $("#loader").hide();
            },
            success: function(data, status) {
                $("#show-data").html(data);
                // $("#noti-table").load(location.href+" #noti-table>*","");
            }
        });
    }
    $(document).ready(function() {
        bsCustomFileInput.init();
    });
</script>

<script type="text/javascript">
    $(document).ready(function() {

        bsCustomFileInput.init();

    });
    var currencySigns = {
                'USD': '$',
                'CAD': 'C$',
                'AUD': 'A$',
                'GBP': '£',
                'EUR': '€'
    };
    function Payment(order_id, price,  paid_in, paid_price, payment_type) {
        $("#order_no").val(order_id);
        $("#price").val(price);
        $("#paid_price").val(paid_price);
        $("#paid_in").val(paid_in);
        $("#payment_type").val(payment_type);
        $("#order_price_show").text(paid_price);
        $(".c_sign").text(currencySigns[paid_in]);
        $('#myModal').modal('show');
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



            //submit from callback

            return false;

        });

    });


    function downloaded(order_id, check) {
        $.ajax({
            type: "POST",
            url: "<?= base_url('userportal/download_notification'); ?>",
            data: {
                order_id: order_id,
                check: check
            },
            success: function(response) {
                console.log(response)
                if (response) {
                    console.log('success');
                }
            },

        });
    }
</script>

<script type="text/javascript">
    $(document).ready(function() {



        bsCustomFileInput.init();



    });
</script>

<script type="text/javascript">
    $(document).ready(function() {
        bsCustomFileInput.init();
    });
   $("#show_password").on('click', function() {
        var passwordField = $("#popup2");
        var passwordFieldType = passwordField.attr('type');
        if (passwordFieldType == 'password') {
            passwordField.attr('type', 'text');
            $(this).html('<i class="fas fa-eye-slash"></i>');
        } else {
            passwordField.attr('type', 'password');
            $(this).html('<i class="fas fa-eye"></i>');
        }
    });
    $("#show_password-2").on('click', function() {
        var passwordField = $("#popup3");
        var passwordFieldType = passwordField.attr('type');
        if (passwordFieldType == 'password') {
            passwordField.attr('type', 'text');
            $(this).html('<i class="fas fa-eye-slash"></i>');
        } else {
            passwordField.attr('type', 'password');
            $(this).html('<i class="fa fa-eye"></i>');
        }
    });

    function readMore(id, note_type) {
        var paragraph = $("#" + note_type + '' + id).text();
        $('#show-note').text(paragraph);
        $('#note-modal').modal('show');
        return;
    }
</script>
<script>
    var el = document.getElementById('edit2');
    el.addEventListener('click', function() {
        document.getElementById('inp4').disabled = false;
        document.getElementById('popup2').disabled = false;
        document.getElementById('popup3').disabled = false;
        var text2 = document.getElementById("popup2");
        text2.classList.toggle("show");
        var text3 = document.getElementById("popup3");
        text3.classList.toggle("show");
        var text4 = document.getElementById("popup4");
        text4.classList.toggle("show");
        var text5 = document.getElementById("show_password");
        text5.classList.toggle("show");
        var text6 = document.getElementById("show_password-2");
        text6.classList.toggle("show");
    });
</script>
<script type="text/javascript">
    setTimeout(function() {
        let alert = document.querySelector(".alert");
        alert.remove();
    }, 5000);

    $(".enter-key").keypress(function(event) {
        if (event.keyCode === 13) {
            search();
        }
    });
</script>
</body>

<script>
    const fileInput = document.getElementById('attach');
    const message = document.getElementById('upload-attach');
    fileInput.addEventListener('change', function() {
        // Update the message text
        message.textContent = fileInput.files[0].name;
    });
      function readMorefun() {
        var dots = document.getElementById("readmore-dots");
        var moreText = document.getElementById("readmore-text");
        var btnText = document.getElementById("readmore-btn");

        if (dots.style.display === "none") {
            dots.style.display = "inline";
            btnText.innerHTML = "Read more";
            moreText.style.display = "none";
        } else {
            dots.style.display = "none";
            btnText.innerHTML = "Read less";
            moreText.style.display = "inline";
        }
    }
    function customerFeedback(e, form, id) {
        e.preventDefault();
        let isValid = false;
        let order_id = form.querySelector('select[name="order_id"]')
        let writerting = form.querySelector('input[name="writer_rating"]')
        let client_comment = form.querySelector('textarea[name="client_comment"]')
        console.log(order_id.value)
        console.log(client_comment.value)
        console.log(writerting.value)
        if (writerting.value == '' || client_comment.value == '' || order_id.value == '') {
            isValid = false;
        } else {
            isValid = true;
        }
        if (isValid == true) {
            form.submit();
        }
    }
    function locationreload(url, id) {
        url = '<?= base_url(); ?>' + url + '/' + id
        window.open(url);
    }
</script>

</html>