<style>
  .center {
    text-align: center;
  }
</style>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Order History</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Order History</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
<!-- -----Flash Message------- -->
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-7 offset-md-1" style="padding: 0 0px;">
          <?php if (isset($_SESSION['success'])) : ?>
          <div class="alert alert-success mb-2" style="width:100%;">
            <?php echo $this->session->flashdata('success'); ?>
          </div>
        <?php endif; ?>
      </div>
      <div class="col-md-7" style="padding: 0 0px;">
        <?php if (isset($_SESSION['error'])) : ?>
          <div class="alert alert-danger mb-2" style="width:100%; margin-bottom: 0px;">
            <?php echo $this->session->flashdata('error'); ?>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </div>
  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- content column -->
        <div class="col-md-12">
          <!-- Profile Image -->
          <div class="card card-info-purple card-outline">
            <div class="card-body box-profile">
              <div class="row">
                <div class="col-md-12">
                  <div class="glossymenu">
                    <?php
                    if (!empty($orders)) {
                      foreach ($orders as $key) {
                        $row_rev = $this->common_model->select_where_return_row_with_limit('*', 'revisions', array('order_id' => $key->order_id), 'revision_id', 'DESC');
                        if ($key->payment_type == 1) {
                          $payment_type = 'Full';
                        } elseif ($key->payment_type == 0) {
                          $payment_type = 'Half';
                        }
                        if ($key->order_status == 0) {
                          $order_status = 'Unpaid';
                          $payment_class = 'unpaid bg-red';
                        } elseif ($key->order_status == 1) {
                          $order_status = 'Paid';
                          $payment_class = 'paid bg-success';
                        } elseif ($key->order_status == 2) {
                          $order_status = 'Completed';
                          $payment_class = 'paid bg-primary';
                        } elseif ($key->order_status == 3) {
                          $order_status = 'In-Progress';
                          $payment_class = 'paid bg-info';
                        } elseif ($key->order_status == 4) {
                          $order_status = 'Revision';
                          $payment_class = 'paid bg-secondary';
                        } elseif ($key->order_status == 5) {
                          $order_status = 'Disputed';
                          $payment_class = 'paid bg-dark';
                        } elseif ($key->order_status == 6) {
                          $order_status = 'Credited';
                          $payment_class = 'paid bg-light';
                        } elseif ($key->order_status == 7) {
                          $order_status = 'Pending';
                          $payment_class = 'paid bg-secondary';
                        }
                        if ($key->order_status == 3 && $key->is_submitted == 1) {
                          $order_status = 'Completed';
                          $payment_class = 'paid bg-primary';
                          $feedback_btn= 'true';
                          if ($key->is_revision == 1) {
                            if ($row_rev->status == 0) {
                              $order_status = 'New Revision';
                              $payment_class = 'paid bg-secondary';
                            } elseif ($row_rev->status == 1) {
                              $order_status = 'Revision in Progress';
                              $payment_class = 'paid bg-secondary';
                            } elseif ($row_rev->status == 2) {
                              $order_status = 'Invalid Revision';
                              $payment_class = 'paid bg-secondary';
                            } elseif ($row_rev->status == 5) {
                              $order_status = 'Completed';
                              $payment_class = 'paid bg-primary';
                            }
                          }
                        }
                        if ($key->order_status == 4 && $row_rev->status == 0) {
                          $order_status = 'New Revision';
                          $payment_class = 'paid bg-secondary';
                        }
                        if ($key->order_status == 4 && $row_rev->status == 1) {
                          $order_status = 'Revision in Progress';
                          $payment_class = 'paid bg-secondary';
                        }
                        if ($key->order_status == 4 && $row_rev->status == 2) {
                          $order_status = 'Invalid Revision';
                          $payment_class = 'paid bg-secondary';
                        }
                        if ($key->order_status == 4 && $row_rev->status == 5) {
                          $order_status = 'Completed';
                          $payment_class = 'paid bg-primary';
                        }
                    ?>
                        <a class="menuitem submenuheader" href="#">
                          <!--Row Start-->
                          <div class="row">
                            <div class="col-md-3 col-sm-3">
                              <h6><b>ORDER ID</b></h6>
                              <?= $key->order_from . '-' . $key->order_id ?>
                            </div>
                            <div class="col-md-3 col-sm-3">
                              <h6><b>Deadline</b></h6>
                              <?= date("d M, Y", strtotime($key->due_date)) ?>
                              <?= ' ' . date("h:i", strtotime($key->lead_due_time)) ?>
                            </div>
                            <div class="col-md-3 col-sm-3">
                              <div class="row">
                                <div class="col-md-12">
                                  <div class="payment-bar">
                                    <h6><b>Payment Type</b></h6>
                                  </div>
                                </div>
                                <div class="col-md-8 ">
                                  <?= (($key->paid_in!='USD')?$currences[$key->paid_in].$key->paid_price: '$' . $key->quoted_price ). ' / ' . $payment_type ?>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-3 col-sm-3">
                              <div class="status-bar">
                                <h6><b>Order Status</b></h6><span class="<?php if ($key->payment_type == 0) {
                                                                            echo "unpaid bg-red";
                                                                          } else {
                                                                            echo $payment_class;
                                                                          }
                                                                          ?>">
                                  <?php
                                  if ($key->payment_type == 0 && $key->submitted_by != '') {
                                    echo "CWHP";
                                  } else {
                                    echo $order_status;
                                  }
                                  ?>
                                </span>
                                <?php
                                if ($key->paid_in != 'USD') {
                                  $quoted_price = $key->quoted_price;
                                  $paid_price = $key->paid_price;
                                  $paid_in = $key->paid_in;
                                } else {
                                  $quoted_price = $key->quoted_price;
                                  $paid_price = $key->quoted_price;
                                  $paid_in = 'USD';
                                }
                                if ($key->order_status == 0 && $key->payment_type == 1) { ?>
                                  <button onclick="Payment(<?= $key->order_id ?>,<?= $quoted_price ?>,'<?= $paid_in ?>',<?= $paid_price ?>,<?= $key->payment_type ?>)" class="btn btn-success" style="margin-left: 10px;"><i class="fa fa-credit-card"></i> Pay Now</button>
                                <?php } elseif ($key->order_status == 0 && $key->payment_type == 0) { ?>
                                  <button onclick="Payment(<?= $key->order_id ?>,<?= $quoted_price ?>,'<?= $paid_in ?>',<?= $paid_price ?>,<?= 2 ?>)" class="btn btn-success" style="margin-left: 10px;"><i class="fa fa-credit-card"></i> Pay Now</button>
                                <?php } elseif ($key->payment_type == 0 && $key->submitted_by != '') { ?>
                                  <button onclick="Payment(<?= $key->order_id ?>,<?= $quoted_price ?>,'<?= $paid_in ?>',<?= $paid_price ?>,<?= $key->payment_type ?>)" class="btn btn-success" style="margin-left: 10px;"><i class="fa fa-credit-card"></i> Pay Now</button>
                                <?php  } else {
                                  if(isset($feedback_btn)){ ?>
                                    <button  class="btn btn-success btn-feedback" onclick="locationreload('user-feedback', '<?=encode($key->order_id)?>')" style="margin-left: 10px;"><i class="fa fa-comments"></i> Feedback</butoon>
                                 <?php }
                                } ?>
                              </div>
                            </div>
                          </div>
                        </a>
                        <div class="submenu">
                          <div class="row">
                            <!--Order Details-->
                            <div class="col-md-7 col-sm-12">
                              <div class="order-container">
                                <div class="ord-details">
                                  <div class="ord-entity"><label>Document Type:</label> <span>
                                      <?= $key->document_type ?>
                                    </span></div>
                                  <div class="ord-entity"><label>Academic Level:</label> <span>
                                      <?= $key->academic_level ?>
                                    </span></div>
                                  <div class="ord-entity"><label>Due Date & Time:</label> <span>
                                      <?= date("d M, Y", strtotime($key->due_date)) ?>
                                      <?= ' ' . date("h:i", strtotime($key->lead_due_time)) ?>
                                    </span></div>
                                  <div class="ord-entity"><label>Number of Pages:</label> <span>
                                      <?= $key->no_of_pages ?>
                                    </span></div>
                                  <div class="ord-entity"><label>Subject:</label> <span>
                                      <?= $key->subject ?>
                                    </span></div>
                                  <div class="ord-entity"><label>Title:</label> <span>
                                      <?= $key->title ?>
                                    </span></div>
                                  <div class="ord-entity"><label>Citation Style:</label> <span>
                                      <?= $key->citation_style ?>
                                    </span></div>
                                  <div class="ord-entity"><label>Number of Sources:</label> <span>
                                      <?= $key->name_of_sources ?>
                                    </span></div>
                                  <div class="ord-entity"><label>Instructions:</label> <span>
                                      <?= $key->description ?>
                                    </span></div>
                                  <div class="ord-entity"><label>Attachment(s):</label>
                                    <?php if (!empty($files)) {
                                      foreach ($files as $key2 => $data) {
                                        if ($data->order_id == $key->order_id) {
                                          $name = explode("/", $data->file_source);
                                          if ($_SERVER['HTTP_HOST'] == "localhost") {
                                            $filename = $name[6];
                                          } else {
                                            $filename = $name[5];
                                          }
                                    ?>
                                          <span><a href="<?= $data->file_source ?>" target="_blank"><?= $filename ?></a></span><br>
                                    <?php
                                        }
                                      }
                                    }
                                    ?>
                                  </div>
                                </div>
                              </div>
                              <div class="edit-ord">
                                <?php
                                if ($key->order_status == 0) {
                                  echo '<a href="' . base_url('edit-order/') . $key->order_id . '"><i class="fas fa-edit"></i> Edit Order Details</a>';
                                  // echo '<a href="javascript: void(0)" onclick="Payment(' . $key->order_id . ',' . $paid_in . ',' . $paid_price . ',' . $key->payment_type . ')" style="margin-left: 10px;"><i class="fa fa-credit-card"></i> Pay Now</a>';
                                }
                                ?>
                              </div>
                            </div>
                            <?php
                            if ($key->order_status == 0) {
                              if ($key->payment_type == 2) {
                                $quoted_price = $key->quoted_price * 2;
                              } else {
                                $quoted_price = $key->quoted_price;
                              }
                            ?>
                              <div class="col-md-5 col-sm-12">
                                <!--Right Column Payment-->
                                <div class="wht-box">
                                  <div class="blu-box">
                                    <div class="pay-now">
                                      <div class="col-md-12">You Pay<span>
                                          <?=(($key->paid_in!='USD')?$currences[$key->paid_in].$key->paid_price: '$'.$quoted_price )?>
                                          <?php (($key->paid_in!='USD')? $currency_sign = $currences[$key->paid_in]: $currency_sign=$currences['USD']) ?>
                                        </span></div>
                                    </div>
                                    <div class="clearfix"></div>
                                  </div>
                                  <div class="pa-1">
                                    <div class="free-fe">
                                      <div class="summary-head-2">Our Free Features</div>
                                      <div class="row mb-2">
                                        <div class="col-lg-7 col-md-12">Unlimited Revisions</div>
                                        <div class="col-lg-5 col-md-12 d-flex justify-content-end txt-rr green-txt"><span class="cut-through"><?=$currency_sign?>08</span><span class="curved">FREE</span></div>
                                      </div>
                                      <hr class="background-secondary mt-3 mb-3">
                                      <div class="order-sep"></div>
                                      <div class="row mb-2">
                                        <div class="col-lg-7 col-md-12">Paper Formatting</div>
                                        <div class="col-lg-5 col-md-12 d-flex justify-content-end txt-rr green-txt"><span class="cut-through"><?=$currency_sign?>05</span><span class="curved">FREE</span></div>
                                      </div>
                                      <hr class="background-secondary mt-3 mb-3">
                                      <div class="order-sep"></div>
                                      <div class="row mb-2">
                                        <div class="col-lg-7 col-md-12">Referencing & Bibliography </div>
                                        <div class="col-lg-5 col-md-12 d-flex justify-content-end txt-rr green-txt"><span class="cut-through"><?=$currency_sign?>10</span><span class="curved">FREE</span></div>
                                      </div>
                                      <hr class="background-secondary mt-3 mb-3">
                                      <div class="order-sep"></div>
                                      <div class="row mb-2">
                                        <div class="col-lg-7 col-md-12">Cover Page</div>
                                        <div class="col-lg-5 col-md-12 d-flex justify-content-end txt-rr green-txt"><span class="cut-through"><?=$currency_sign?>05</span><span class="curved">FREE</span></div>
                                      </div>
                                      <hr class="background-secondary mt-3 mb-3">
                                      <div class="order-sep"></div>
                                      <div class="row mb-2">
                                        <div class="col-lg-7 col-md-12">24/7 Order Tracking</div>
                                        <div class="col-lg-5 col-md-12 d-flex justify-content-end txt-rr green-txt"><span class="cut-through"><?=$currency_sign?>05</span><span class="curved">FREE</span></div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="side-payment">
                                  <div class="row">
                                    <div class="col-md-12"><img src="<?= base_url('user_portal/') ?>dist/img/payment-methods.webp" class="img-responsive" /></div>
                                  </div>
                                </div>
                              </div>
                              <!--Right Column Payment-->
                            <?php
                            }
                            ?>
                          </div>
                          <!--Order Details-->
                        </div>
                        <!--Row End-->
                    <?php
                      }
                    } else {
                      echo "No Order Yet";
                    }
                    ?>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!--content column -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<div id="myModal" class="modal fade">
  <div class="modal-dialog  modal-lg modal-login">
    <div class="modal-content">
      <div id="payment-errors"></div>
      <div class="modal-header">
        <h4 class="modal-title">Billing</h4>
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      </div>
      <div class="modal-body">
        <form role="form" action="<?= base_url('payment/Payment/HalfPay'); ?>" method="post" class="require-validation" data-cc-on-file="false" id="paymentFrm">
          <!--Billing Form-->
          <section class="customer-reviews">
            <div class="col-md-12">
              <div class="row payment-detail-form">
                <!--New Form-->
                <div class="col-md-5">
                  <div class="right-panel">
                    <div class="dark-total">
                      <p>Total</p>
                      <h6><span class="c_sign"></span><span id="order_price_show"></span></h6>
                    </div>
                    <div class="card-options">
                      <div class="opt-one">
                        <div class="row">
                          <div class="col-md-12"><img class="img-fluid" src="<?= base_url('user_portal/dist/') ?>img/payment-methods.webp" /></div>
                        </div>
                      </div>
                      <div class="rd-str">All payments are securely processed.</div>
                    </div>
                  </div>
                </div>
                <div class="col-md-7">
                  <div class="left-panel">
                    <h6>Your Payment Details</h6>
                    <div class="row payment-row-gap">
                      <div class="col-md-12">
                        <div class="form-group has-feedback">
                          <label class="control-label">Name on Card:</label>
                          <input type="text" name="name" class="form-control" placeholder="Username" required />
                          <i class="fa fa-check my-icon"></i>
                        </div>
                      </div>
                    </div>
                    <div class="row payment-row-gap">
                      <div class="col-md-12">
                        <div class="form-group has-feedback">
                          <label class="control-label">Card Number:</label>
                          <input autocomplete='off' name="card_num" class='form-control card-number' id="card_num" size='20' onKeyPress="if(this.value.length==16) return false;" type='number' required>
                          <i class="fa fa-credit-card my-icon"></i>
                        </div>
                      </div>
                    </div>
                    <div class="row expiry-row payment-row-gap">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="control-label">Expiry Year:</label>
                          <input class='form-control card-expiry-year' name="exp_year" id="card-expiry-year" placeholder='YYYY' size='4' onKeyPress="if(this.value.length==4) return false;" type='number' required>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="control-label">Expiry Month:</label>
                          <input class='form-control card-expiry-month' id="card-expiry-month" name="exp_month" placeholder='MM' size='2' type='number' onKeyPress="if(this.value.length==2) return false;" required>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="control-label">CVV:</label>
                          <input autocomplete='off' class='form-control card-cvc' name="cvc" id="card-cvc" placeholder='ex. 311' size='4' type='number' required>
                        </div>
                      </div>
                    </div>
                    <div class="row payment-row-gap">
                      <div class="col-md-12">
                        <div class="form-group">
                          <div class='col-md-12 error form-group hide'>
                            <div class='alert-danger alert'>Please correct the errors and try
                              again.</div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <input type="hidden" name="price" class="auto-save" id="price">
                    <input type="hidden" name="paid_price" class="auto-save" id="paid_price">
                    <input type="hidden" name="paid_in" class="auto-save" id="paid_in">
                    <input type="hidden" name="payment_type" id="payment_type" value="">
                    <input type="hidden" name="order_no" id="order_no" value="">
                    <div class="cent-btn"><button type="submit" id="payBtn" class="blu-btn btn btn-success">Proceed to Pay</button></div>
                  </div>
                </div>
              </div>
              <!--New Form-->
            </div>
          </section>
          <div class="text-block">
            <div class="container">
            </div>
          </div>
          <!--Billing Form-->
        </form>
      </div>
      <div class="modal-footer"></div>
    </div>
  </div>
</div>