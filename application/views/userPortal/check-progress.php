<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Order Progress</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Order Progress</li>
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

                <div class="col-md-12"><!--Content Start-->

                  <div class="head-text">Just give us your Order ID, and we'll gladly share up-to- the-minute progress
                    on your writing project.</div>

                  <div class="content-txt">Because our writers are working 24/7 around the clock, we often respond
                    within 30minutes.
                    If your personal writer is currently offline (sometimes they actually eat and sleep!), your update
                    will appear in your email Inbox within 12 hours.</div>


                  <div class="order-id-outer-container">

                    <div class="col-md-12">

                      <div class="order-id-img-container">

                        <img src="<?= base_url('assets/user_dashboard/') ?>dist/img/order-now.png" class="img-responsive" />
                      </div>

                    </div>

                    <div class="order-id-inner-cont">

                      <div class="padding-cont">



                        <div class="form-group row mt-2">

                          <label for="staticEmail" class="col-sm-4 col-form-label">Order ID: </label>

                          <div class="col-sm-8">

                            <input type="text" class="enter-key" id="oid" />

                          </div>

                        </div>

                        <div class="form-group row">

                          <div class="col-md-12"><button type="button" onclick="search()" class="portal-btn mt-2">Submit</button></div>

                        </div>



                      </div>
                    </div>
                  </div>
                  <div class="row mt" style="background: #f9fbfb; padding: 10px; border-radius: 5px;">
                    <img src="<?php echo base_url('assets/front/images/ajax-loader.gif'); ?>" style="display: none;" id="loader">
                    <div class="col-md-12" id="show-data">

                    </div>
                  </div>
                </div><!--Content End-->

              </div>

            </div>

          </div>

        </div>

      </div>

    </div>
  </section>

</div>