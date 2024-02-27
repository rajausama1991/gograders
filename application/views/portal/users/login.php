<div class="container-fluid main-bg">

  <div class="container">

    <div class="row container-div df">

      <div class="col-md-6 col-md-offset-3 ord-cont-3">

        <div class="order-form">

          <form action="<?= base_url('login') ?>" method="post">

            <!-- One "tab" for each step in the form: -->

            <div class="ord-cont">

              <div class="row">

                <div class="col-md-12">

                  <div class="blue-hd">Customer Portal</div>
                  <?php if ($this->session->userdata('msg') != "") { ?>
                    <h6 style="text-align: center; color:red;">
                      <strong><?php echo $this->session->userdata('msg'); ?></strong>
                    </h6>
                  <?php $this->session->unset_userdata('msg');
                  } ?>
                  <?php if ($this->session->flashdata('success')) { ?>
                    <h6 class="text-success" style="text-align: center;"><strong><?php echo $this->session->flashdata('success'); ?></strong></h6>
                  <?php } else if ($this->session->flashdata('error')) {  ?>
                    <h6 class="text-danger" style="text-align: center;"><strong><?php echo $this->session->flashdata('error'); ?></strong></h6>
                  <?php } ?>
                </div>



              </div>


              <div class="row">

                <div class="col-md-12">


                  <div class="form-group">
                    <label class="control-label">Email:</label>

                    <input required name="user_name" id="user_name" type="text" class="form-control" value="<?php if (isset($_COOKIE["cookename"])) {
                                                                                                              echo $_COOKIE["cookename"];
                                                                                                            } ?>">

                  </div>

                </div>

              </div>

              <div class="row">

                <div class="col-md-12">

                  <div class="form-group">

                    <label class="control-label">Password:</label>

                    <input required id="password" type="password" name="password" class="form-control" value="<?php if (isset($_COOKIE["cookepass"])) {
                                                                                                                echo $_COOKIE["cookepass"];
                                                                                                              } ?>">

                  </div>

                </div>

              </div>

              <div class="row">

                <div class="col-md-6">

                  <div class="checkbox">

                    <label><input name="remember_me" type="checkbox" <?php if (isset($_COOKIE["remeber"])) {
                                                                        echo "checked";
                                                                      } ?>> Remember me</label>

                  </div>

                </div>

                <div class="col-md-6 f-pass">

                  <div class="form-group"><a href="<?= base_url('forgot-password') ?>">Forgot Password?</a></div>

                </div>

              </div>

              <div class="row">

                <div class="col-md-12">

                  <div class="">

                    <button type="submit" class="yellow-btn">Login</button>

                  </div>

                </div>

              </div>

            </div>

          </form>

        </div>

      </div>

    </div>

  </div>

</div>