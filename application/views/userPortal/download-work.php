<!-- Content Wrapper. Contains page content -->

<div class="content-wrapper">

  <!-- Content Header (Page header) -->

  <section class="content-header">

    <div class="container-fluid">

      <div class="row mb-2">

        <div class="col-sm-6">

          <h1>Download Work</h1>

        </div>

        <div class="col-sm-6">

          <ol class="breadcrumb float-sm-right">

            <li class="breadcrumb-item"><a href="#">Home</a></li>

            <li class="breadcrumb-item active">Download Work</li>

          </ol>

        </div>

      </div>

    </div><!-- /.container-fluid -->

  </section>



  <!-- Main content -->

  <section class="content">

    <div class="container-fluid">

      <div class="row">



        <div class="col-md-12">



          <div class="card card-info-purple card-outline">

            <div class="card-body box-profile">



              <div class="row">



                <div class="col-md-12">

                  <!--Content Start-->



                  <div class="head-text">You can download your work when it is completed from here.</div>



                  <div class="content-txt"> Be sure to save the complete file to your desktop.

                    We ask that you review your project immediately. If you require any revisions, edits, or other changes, let us know promptly. If your request falls within your deadline period, we'll gladly make any changes without additional charge. Beyond your deadline period, we will make every effort to accommodate reasonable change requests.<br /><br />



                    We will always go the "extra mile" to provide work that exceeds your expectations. We will always do our absolute best to provide quality work as per your instructions. You are the sole judge of the writing we provide and cannot guarantee academic results of any kind as they depend on factors beyond anyones control.<br /><br />



                    Your satisfaction is our utmost priority. If you have any questions about downloading or saving your file, contact us immediately.</div>



                </div>

                <!--Content End-->



              </div>



              <div class="row">



                <div class="col-md-12">



                  <div class="padding-cont">



                    <div class="card-body table-responsive p-0">

                      <table class="table text-nowrap">

                        <thead>

                          <tr>

                            <th>Sr.No.</th>

                            <th>Order ID</th>

                            <th>Order Date</th>

                            <th>Download</th>

                            <!--<th></th>-->

                            <th>Remaining Amount</th>

                            <th>Message</th>


                          </tr>

                        </thead>

                        <tbody>

                          <?php

                          if (!empty($downloadWork)) {

                            $count = 0;
                            $submission_note = "'submission_note'";
                            foreach ($downloadWork as $key) {

                              if (!empty($key->payment_type)) {



                                $count += 1;

                                $filename = '';

                                $revision = '-';

                                $filename2 = '';

                                $workfiles = json_decode($key->work_file);
                                if (isset($workfiles)) {

                                  foreach ($workfiles as $key2) {

                                    $name = explode("/", $key2->work_files);



                                    if ($_SERVER['HTTP_HOST'] == "localhost") {

                                      $filename .= '<a onclick="downloaded(' . $key->order_id . ')" href="' . base_url() . 'main/download/' . encode($key2->work_files) . '/' . $name[7] . '/work_files' . '" title="Work File">' . $name[7] . ',</a><br>';
                                    } else {

                                      $filename .= '<a onclick="downloaded(' . $key->order_id . ')" href="' . base_url() . 'main/download/' . encode($key2->work_files) . '/' . $name[6] . '/work_files' . '" title="Work File">' . $name[6] . ',</a><br>';
                                    }
                                  }
                                }

                                if (!empty($key->report_file)) {

                                  $reportfiles = json_decode($key->report_file);

                                  foreach ($reportfiles as $key2) {

                                    $name = explode("/", $key2->report_files);

                                    if ($_SERVER['HTTP_HOST'] == "localhost") {

                                      $filename2 .= '<a onclick="downloaded(' . $key->order_id . ')" href="' . base_url() . 'main/download/' . encode($key2->report_files) . '/' . $name[7] . '/report_files' . '" title="Report File">' . $name[7] . ',</a><br>';
                                    } else {

                                      $filename2 .= '<a onclick="downloaded(' . $key->order_id . ')" href="' . base_url() . 'main/download/' . encode($key2->report_files) . '/' . $name[6] . '/report_files' . '" title="Report File">' . $name[6] . ',</a><br>';
                                    }
                                  }
                                }

                                if ($key->payment_type == 1) {

                                  $rem_amount = '0.00';

                                  $pay_now = '-';
                                } elseif ($key->payment_type == 0) {

                                  $rem_amount = $key->quoted_price;
                                  $user_email = $key->user_email;


                                  $pay_now = '<button type="button" class="btn btn-info" onclick="Payment(' . $key->order_id .','. $quoted_rem_amount . ',\'' . $paid_in .  '\',' .$paid_rem_amount .','. $key->payment_type . ')" style="margin-left: 10px;"><i class="fa fa-credit-card"></i> Pay Now</button>';
                                }

                                // if ($key->revision_id) {

                                //   $revision = 'Marked';
                                // }

                          ?>

                                <tr>

                                  <td>00<?= $count ?></td>

                                  <td><?= $key->order_from ?>-<?= $key->order_id ?></td>

                                  <td><?= date("d M, Y h:i a  ", strtotime($key->createdAt)) ?></td>

                                  <td><?= $filename . $filename2 ?></td>

                                  <!--<td><span class="badge bg-success"><?= $revision ?></span></td>-->

                                  <td>$<?= $rem_amount ?></td>

                                  <td><span style="display:none" id="submission_note<?= $key->order_id ?>"><?= $key->work_notes ?></span><span id="work-note-span<?= $key->order_id ?>"><?= substr_replace($key->work_notes, '<a href="javascript: void readMore(' . $key->order_id . ',' . $submission_note . ')">...Read More</a>', 50) ?></span></td>



                                </tr>

                              <?php



                              } else {
                                $filename = '-';
                                $count += 1;

                                if (!empty($key->enc_file)) {

                                  if (is_json($key->enc_file)) {
                                    $encfile_arr = json_decode($key->enc_file);
                                    foreach ($encfile_arr as $index => $value) {

                                      $name = explode('/', $value);
                                      if ($_SERVER['HTTP_HOST'] == "localhost") {

                                        $filename .= '<a href="' . base_url() . 'main/downloadEncFile/' . encode($value) . '/' . encode($name[5]) . '" title="Encrypted File">' . $name[5] . ',</a><br>';
                                      } else {

                                        $filename .= '<a href="' . base_url() . 'main/downloadEncFile/' . encode($value) . '/' . encode($name[4]) . '" title="Encrypted File">' . $name[4] . ',</a><br>';
                                      }
                                    }
                                  } else {
                                    $name = explode("/", $key->enc_file);

                                    if ($_SERVER['HTTP_HOST'] == "localhost") {

                                      $filename .= '<a href="' . base_url() . 'main/downloadEncFile/' . encode($key->enc_file) . '/' . encode($name[5]) . '" title="Encrypted File">' . $name[5] . ',</a><br>';
                                    } else {

                                      $filename .= '<a href="' . base_url() . 'main/downloadEncFile/' . encode($key->enc_file) . '/' . encode($name[4]) . '" title="Encrypted File">' . $name[4] . ',</a><br>';
                                    }
                                  }
                                }
                                if ($key->payment_type == 1) {

                                  $quoted_rem_amount = '0.00';

                                  $pay_now = '-';
                                } elseif ($key->payment_type == 0) {
                                  if($key->paid_in!='USD'){
                                    $quoted_rem_amount = $key->quoted_price;
                                    $paid_rem_amount = $key->paid_price;
                                    $paid_in=$key->paid_in;
                                  } else {
                                    $quoted_rem_amount = $key->quoted_price;
                                    $paid_rem_amount = $key->quoted_price;
                                    $paid_in='USD';  
                                  }

                                  $pay_now = '  <a href="javascript: void(0)" onclick="Payment(' . $key->order_id .','. $quoted_rem_amount . ',\'' . $paid_in .  '\',' .$paid_rem_amount .','. $key->payment_type . ')" style="margin-left: 10px;"><i class="fa fa-credit-card"></i> Pay Now</a>';
                                }

                              ?>

                                <tr>

                                  <td>00<?= $count ?></td>

                                  <td><?= $key->order_from ?><?= $key->order_id ?></td>

                                  <td><?= date("d M, Y h:i a  ", strtotime($key->createdAt)) ?></td>

                                  <td><?= $filename ?></td>

                                  <!--<td><span class="">-</span></td>-->

                                  <td><?=(($paid_in)?$currences[$paid_in].$paid_rem_amount:'$'.$paid_rem_amount) ?><?= $pay_now ?></td>
                                  <td><span style="display:none" id="submission_note<?= $key->order_id ?>"><?= $key->work_notes ?></span><span id="work-note-span<?= $key->order_id ?>"><?= substr_replace($key->work_notes, '<a href="javascript: void readMore(' . $key->order_id . ',' . $submission_note . ')">...Read More</a>', 50) ?></span></td>

                                </tr>

                          <?php

                              }
                            }
                          } else {

                            echo '<td colspan="8" class="text-center">No download work yet</td>';
                          }

                          ?>

                        </tbody>

                      </table>

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



</div>


<!-- Modal HTML -->
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
<!-- eND Modal HTML -->

<!-- Control Sidebar -->

<aside class="control-sidebar control-sidebar-dark">

  <!-- Control sidebar content goes here -->

</aside>

<!-- /.control-sidebar -->

</div>

<!-- ./wrapper -->