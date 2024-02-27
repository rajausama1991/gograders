<style>
  .g-recaptcha iframe {
    width: 350px;
    height: 90px;
    /* Adjust the width as per your requirements */
  }
</style>
<div class="container-fluid main-bg">

  <div class="container">
    <?php if (validation_errors()) : ?>
      <div class="alert alert-danger" role="alert">
        <strong>Oops!</strong>
        <?php echo validation_errors(); ?>
      </div>
    <?php endif ?>
    <div id="payment-errors"></div>
    <div class="row">

      <div class="col-md-6">

        <div class="wht-cont">

          <div class="blue-head">

            Products in your shopping cart

          </div>

          <div class="pa-3">

            <!-- <div class="col-md-1"><a href="#"><span class="fa fa-close"></a></div> -->

            <div class="col-md-5 product">

              <?= $topic ?><br />
              [Order#: <?= $order_no ?> Type of paper: <?= $doc_type ?> Pages: <?= $pages ?> Deadline: <?= $Deadline ?> Subject: <?= $subject ?>]

            </div>

            <div class="col-md-2 col-md-offset-1">

              <div class="product">Quantity:<br />1</div>

            </div>

            <div class="col-md-2 col-md-offset-1">
              <div class="product">Price:<br /><?= $selected_currency ?><?= $price ?></div>
            </div>

            <div class="clearfix"></div>

            <div class="order-sep-2"></div>

            <div class="col-md-5 col-md-offset-7 txt-r">

              <div class="big-price">Total Price: <span><?= $selected_currency ?><?= $price ?></span></div>

              <!-- <div class="small-price">Total TAX/VAT : $0.00</div> -->

            </div>

            <div class="clearfix"></div>

          </div>

        </div>

      </div>

      <div class="col-md-6">

        <div class="wht-cont">

          <div class="blue-head">

            Enter Card Detail

          </div>

          <div id="payment-errors"></div>
          <form method="post" id="paymentFrm" enctype="multipart/form-data" action="<?= base_url('payment/Payment/check'); ?>">


            <input type="hidden" name="email" value="<?= $email ?>" />
            <input type="hidden" name="price" value="<?= $price ?>" />
            <input type="hidden" name="order_no" value="<?= $order_no ?>" />
            <input type="hidden" name="item_name" value="<?= $topic ?>" />
            <input type="hidden" name="selected_currency" value="<?= $selected_currency ?>" />

            <div class="pa-3">

              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label class="control-label">Card Number</label>
                    <input type="number" name="card_num" id="card_num" class="form-control" required autocomplete="off">
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label class="control-label">Card Holder Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Name" value="<?php echo set_value('namee'); ?>" required>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label class="control-label">Card Expiry Month</label>
                    <input type="number" name="exp_month" maxlength="2" class="form-control" id="card-expiry-month" placeholder="MM" value="<?php echo set_value('exp_month'); ?>" required>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label">Expiry Year</label>
                    <input type="number" name="exp_year" class="form-control" maxlength="4" id="card-expiry-year" placeholder="YYYY" required="" value="<?php echo set_value('exp_year'); ?>">
                  </div>
                </div>

                <div class="col-md-6" id="othersubjectt">
                  <div class="form-group">
                    <label class="control-label">CVV Number</label>
                    <input type="number" class="form-control" name="cvc" id="card-cvc" maxlength="3" required>
                  </div>
                </div>

              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <!--<div class="g-recaptcha" data-sitekey="<?php echo $this->config->item('google_key') ?>"></div>-->
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <div class="error"><strong style="color: red;" id="rec-error"></strong></div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <button type="submit" id="payBtn" class="yellow-btn" onclick="return validRecaptcha()">Submit & Complete Order</button>
                  </div>
                </div>
              </div>

            </div>

          </form>

        </div>

      </div>

    </div>

    <div class="row cent mt-9">

      <div class="col-md-12">

        By completing my purchase I agree to the Terms & Conditions.

      </div>

    </div>

    <div class="side-payment">

      <div class="row">

        <div class="col-md-8 col-md-offset-2"><img src="<?= asset_url() ?>portal/images/payment-methods.webp" class="img-responsive" /></div>

      </div>

    </div>

  </div>

</div>