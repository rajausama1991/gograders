<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Request Revision</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Request Revision</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12" style="padding: 0 0px;">
        <?php if (isset($_SESSION['success'])) : ?>
          <div class="alert alert-success" style="width:100%; margin-bottom: 0px;">
            <?php echo $_SESSION['success']; ?>
          </div>
        <?php endif; ?>
        <?php unset($_SESSION['success']); ?>
      </div>
      <div class="col-md-12" style="padding: 0 0px;">
        <?php if (isset($_SESSION['error'])) : ?>
          <div class="alert alert-danger" style="width:100%; margin-bottom: 0px;">
            <?php echo $_SESSION['error']; ?>
          </div>
        <?php endif; ?>
        <?php unset($_SESSION['error']); ?>
      </div>
    </div>
  </div>
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

                  <div class="content-txt">

                    If you need changes, edits, or additions to your downloaded project, please mark revisions here
                    immediately. Your project writer may have a backlog of other work, but if you remain within your
                    deadline period, those tasks will be set aside to provide you with reasonable revisions on a "first
                    come' basis. Changes to original guidelines, however, are not considered revisions. You must provide
                    specific and detailed notes, comments, and instructions when requesting any changes. Extensive
                    changes beyond your original guidelines or project description may incur delivery delays and
                    reasonable additional charges. Your complete satisfaction is our objective, and you are the sole
                    judge of the writing we provide. </div>

                  <div class="head-text-2">Please be sure to give us an accurate Order ID and to include detailed notes
                    below.</div>

                  <div class="req-outer-container">

                    <div class="req-inner-container">

                      <div class="padding-cont">

                        <form action="<?= base_url('userportal/revision_request') ?>" method="post" onsubmit="formsubmit_fun(event, this, 0)" enctype="multipart/form-data">

                          <div class="form-group row">

                            <label for="staticEmail" class="col-sm-4 col-form-label">Order ID: </label>

                            <div class="col-sm-8">

                              <select name="order_id" class="form-control" id="o_id" required>
                                <option value="">--Select--</option>
                                <?php if (!empty($orders)) {
                                  foreach ($orders as $key) {
                                    $check = $this->common_model->select_where_return_row_limit_1('*', 'revisions', array('order_id' => $key->order_id), 'revision_id', 'DESC');
                                  if($check){
                                    if ($check->is_rev_submitted || $key->is_revision == 0) {

                                ?>
                                      <option value="<?= $key->order_id ?>-<?= $key->writer_id ?>">(<?= $key->order_from . $key->order_id ?>) | <i>
                                          <?= $key->title ?>
                                        </i></option>
                                <?php
                                    }
                                  } else {
                                    if($key->is_revision == 0){
                                     ?>
                                       <option value="<?= $key->order_id ?>-<?= $key->writer_id ?>">(<?= $key->order_from . $key->order_id ?>) | <i>
                                          <?= $key->title ?>
                                        </i></option>
                                  <?php 

                                  }
                                  }
                                  }
                                }
                                ?>
                              </select>
                              <small>e.g (Order ID) | Title</small>
                            </div>

                          </div>

                          <div class="form-group row">

                            <label for="staticEmail" class="col-sm-4 col-form-label">Revision Notes: </label>

                            <div class="col-sm-8">

                              <textarea name="revision_note" required class="textarea-styling"></textarea>

                            </div>

                          </div>

                          <div class="form-group row">

                            <label for="staticEmail" class="col-sm-4 col-form-label">Select Document: </label>

                            <div class="col-sm-8">


                              <!-- <div class="">
                                <input type="file" name="revision_file" class="form-group file-btn" id="attach">

                              </div> -->


                              <!-- File Input  -->
                              <div class="upload-btn-wrapper">
                                <label class="form-group file-btn file-upload-btn" for="attach"><i class="fa fa-upload" aria-hidden="true"></i>
                                  <span id="upload-attach">Upload a file</span></label>
                                <input type="file" name="revision_file" style="font-size:10px" id="attach"  class="form-group file-btn" />
                              </div>


                            </div>

                          </div>

                          <div class="form-group row">

                            <div class="col-sm-12 ">

                              <div class="submit-btn-div"><button type="submit" class="portal-btn pull-right">Submit</button>

                              </div>
                            </div>

                          </div>

                        </form>

                      </div>


                    </div>

                  </div>
                </div>
                <!--Content End-->

              </div>

            </div>

          </div>

        </div>

      </div>

    </div>
  </section>

</div>
<script>
  function formsubmit_fun(e,form, id){
    // e.preventDefault();
      let button=form.querySelector('button[type="submit"]')
      button.disabled = true;
      setTimeout(function() {
        button.disabled = false;
      }, 8000)
  }
</script>
<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
  <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->