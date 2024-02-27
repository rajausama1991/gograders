<style>
  .fade-scale {
    transform: scale(0);
    opacity: 0;
    -webkit-transition: all .25s linear;
    -o-transition: all .25s linear;
    transition: all .25s linear;
  }

  .fade-scale.in {
    opacity: 1;
    transform: scale(1);
  }
</style>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Invalid Revisions</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Revised Work</li>
          </ol>
        </div>
      </div>
    </div>
    <!-- /.container-fluid -->
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
                  <div class="head-text">Invalid Revisions.</div>
                  <div class="content-txt"> Your revision has been marked as invalid. You can review the writer note for further details, You can check our <a data-toggle="modal" data-target="#revisionModal" href="javascript:void(0)">Revision Policy</a>
                  </div>
                </div>
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

                            <th><a href="<?= base_url('req-revision') ?>">Mark Revision</a></th>

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



                              if (!empty($key->work_files)) {



                                $workfiles = json_decode($key->work_files);



                                foreach ($workfiles as $key2) {



                                  $name = explode("/", $key2->work_files);



                                  if ($_SERVER['HTTP_HOST'] == "localhost") {



                                    $filename .= '<a href="' . $key2->work_files . '" title="Work File">' . $name[6] . '</a><br>';
                                  } else {



                                    $filename .= '<a href="' . $key2->work_files . '" title="Work File">' . $name[5] . '</a><br>';
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



                              if ($key->revision_id) {



                                $revision = 'Marked';
                              }



                          ?>



                              <tr>

                                <td>00<?= $count ?></td>

                                <td><?= $key->order_from ?>-<?= $key->order_id ?></td>

                                <td><?= date("d M, Y h:i a  ", strtotime($key->createdAt)) ?></td>

                                <td><?= $filename ?></td>

                                <td><span class="badge bg-success"><?= $revision ?></span></td>

                                <td><?= ((!empty($key->writer_revision_note)) ? $key->writer_revision_note : $key->valid_invalid_note) ?></td>

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


<!-- Modal -->
<div class="modal fade-scale" id="revisionModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div style="display:block !important;" class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Revision Policy</h4>
      </div>
      <div class="modal-body">
        <p>
          Revision policy are the legal terms that based on your piece of writing, either we accept or refuse under the following conditions:<br><br>

          We offer unlimited free of cost revisions till 14 days of the order delivery if your work is not according to the initial details provided.<br><br>

          It should also be acknowledged that we do not offer revision under 14 days agreement if the revision is based on third party remarks i.e. your professor, instructor, teacher, etc.<br><br>

          We do offer revisions after 14 days of order delivery in certain scenarios including minimal charges.

          We take approximately 12-24 hours to complete each revision.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Ok</button>
        <!--<button type="button" class="btn btn-primary">Ok</button>-->
      </div>
    </div>
  </div>
</div>


<!-- Control Sidebar -->



<aside class="control-sidebar control-sidebar-dark">



  <!-- Control sidebar content goes here -->



</aside>



<!-- /.control-sidebar -->



</div>



<!-- ./wrapper -->









<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
