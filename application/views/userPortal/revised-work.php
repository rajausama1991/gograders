<!-- Content Wrapper. Contains page content -->

<div class="content-wrapper">

  <!-- Content Header (Page header) -->

  <section class="content-header">

    <div class="container-fluid">

      <div class="row mb-2">

        <div class="col-sm-6">

          <h1>Revised Work</h1>

        </div>

        <div class="col-sm-6">

          <ol class="breadcrumb float-sm-right">

            <li class="breadcrumb-item"><a href="#">Home</a></li>

            <li class="breadcrumb-item active">Revised Work</li>

          </ol>

        </div>

      </div>

    </div><!-- /.container-fluid -->

  </section>



  <!-- Main content -->

  <section class="content">

    <div class="container">

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

                            <th>Revision Notes</th>

                          </tr>

                        </thead>

                        <tbody>

                          <?php



                          if (!empty($orders)) {

                            $count = 0;

                            foreach ($orders as $key) {



                              $count += 1;

                              $filename = '';

                              $revision = '-';
                              $filename2 = '';

                              if (!empty($key->work_files)) {

                                $workfiles = json_decode($key->work_files);

                                foreach ($workfiles as $key2) {

                                  $name = explode("/", $key2->work_files);

                                  if ($_SERVER['HTTP_HOST'] == "localhost") {

                                    $filename .= '<a onclick="downloaded(' . $key->revision_id . ', 1)" href="' . base_url('main/download/') . encode($key2->work_files) . '/' . $name[7] . '/work_files' . '" title="Work File">' . $name[7] . '</a><br>';
                                  } else {

                                    $filename .= '<a onclick="downloaded(' . $key->revision_id . ', 1)" href="' . base_url('main/download/') . encode($key2->work_files) . '/' . $name[6] . '/work_files' . '" title="Work File">' . $name[6] . '</a><br>';
                                  }
                                }
                              }
                              if (!empty($key->report_files)) {

                                $reportfiles = json_decode($key->report_files);

                                foreach ($reportfiles as $key2) {

                                  $name = explode("/", $key2->report_files);

                                  if ($_SERVER['HTTP_HOST'] == "localhost") {

                                    $filename2 .= '<a onclick="downloaded(' . $key->revision_id . ', 1)" href="' . base_url('main/download/') . encode($key2->report_files) . '/' . $name[7] . '/report_files' . '" title="Report File">' . $name[7] . '</a><br>';
                                  } else {

                                    $filename2 .= '<a onclick="downloaded(' . $key->revision_id . ', 1)" href="' . base_url('main/download/') . encode($key2->report_files) . '/' . $name[6] . '/report_files' . '" title="Report File">' . $name[6] . '</a><br>';
                                  }
                                }
                              }

                              if ($key->payment_type == 1) {

                                $rem_amount = '0.00';

                                $pay_now = '-';
                              } elseif ($key->payment_type == 0) {

                                $rem_amount = $key->quoted_price;

                                $pay_now = '<a href="javascript: void(0)">Pay Now</a>';
                              }



                          ?>

                              <tr>
                                <td>00<?= $count ?></td>
                                <td><?= $key->order_from ?>-<?= $key->order_id ?></td>
                                <td><?= date("d M, Y h:i a  ", strtotime($key->createdAt)) ?></td>
                                <td><?= $filename ?><br><?= $filename2 ?></td>
                                <td><?= $key->completed_note ?></td>
                              </tr>
                          <?php

                            }
                          } else {

                            echo '<td colspan="8" class="text-center">No work to download yet</td>';
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


<!-- Control Sidebar -->

<aside class="control-sidebar control-sidebar-dark">

  <!-- Control sidebar content goes here -->

</aside>

<!-- /.control-sidebar -->

</div>

<!-- ./wrapper -->