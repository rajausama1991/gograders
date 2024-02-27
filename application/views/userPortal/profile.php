<style media="screen">
  .my-btn {
    font-weight: 400;
    color: #212529;
    text-align: center;
    vertical-align: middle;
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    background-color: transparent;
    border: 1px solid transparent;
    padding: 0.375rem 0.75rem;
    font-size: 1rem;
    line-height: 1.5;
    border-radius: 0.25rem;
    transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
  }
  .password-field {
    position: relative;
  }

  #pop3 {
    padding-right: 40px; /* Create space for the eye icon */
  }

  .showpass-icon {
    position: absolute;
    top: 50%;
    right: 10px;
    transform: translateY(-50%);
    background: none;
    border: none;
    cursor: pointer;
  }
  .password-field input[type="text" ]  {
    padding: 0px 15px !important;
    background-color: #ffffff !important;
    width: 100% !important;
    border-radius: 6px !important;
    box-shadow: 0 3px 10px rgba(87, 87, 87, 0.301) !important;
    border: none !important;
  }
  .showpass-icon:focus {
    border: none;
    outline: none;
  } 
</style>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Manage Profile</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Manage Profile</li>
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
            <div class="card-body box-profile m-5 p-4">

              <div class="row">

                <div class="col-md-12"><!--Content Start-->

                  <div class="container box-profile-inner-cont">

                    <div class="head-blue">Profile Information</div>



                    <div class="padding-cont padding-content-2">

                      <div class="container profile-info-outer-container">

                        <form>

                          <div class="form-group row mb-4">

                            <label for="staticEmail" class="col-md-1 col-sm-2 blue-label" style="display:flex; align-items:center;">Name: </label>

                            <div class="col-md-10 col-sm-10 input-container">
                              <i class="fa fa-user icon"></i>
                              <input id="inp" type="text" disabled value="<?php echo $this->session->userdata('user_name'); ?>">
                            </div>

                          </div>

                          <div class="form-group row mb-4">

                            <label for="staticEmail" class="col-md-1 col-sm-2 blue-label" style="display:flex; align-items:center;">Email: </label>

                            <div class="col-md-10 col-sm-10 input-container">

                              <i class="fa fa-envelope icon"></i>
                              <input id="inp2" type="text" disabled value="<?php echo $this->session->userdata('email'); ?>">

                            </div>

                          </div>

                          <div class="form-group row mb-4">

                            <label for="staticEmail" class="col-md-1 col-sm-2 blue-label" style="display:flex; align-items:center;">Phone: </label>

                            <div class="col-md-10 col-sm-10 input-container">
                              <i class="fa fa-phone" aria-hidden="true"></i>

                              <input id="inp3" type="text" disabled value="<?php echo $this->session->userdata('phone'); ?>">

                            </div>

                          </div>

                          <div class="form-group row">

                            <div class="col-md-11">
                              <div class="cc"><button id="popup" type="submit" class="portal-btn hide">Save</button>
                              </div>
                            </div>

                          </div>

                        </form>



                      </div>

                    </div>

                    <div class="head-blue">Set a New Password</div>

                    <div class="head-blue-sm">Change your password: make it totally new or stronger.</div>

                    <div class="padding-cont padding-content-2">

                      <div class="form-group row">

                        <label for="staticEmail" class="col-sm-2 blue-label">Password: </label>


                        <div class="col-sm-8">
                          <form action="<?php echo base_url('userportal/editProfile') ?>" method="post">

                            <div class="col-sm-12 input-container">
                              <i class="fa fa-unlock-alt" aria-hidden="true"></i>
                              <input id="inp4" type="text" disabled class="pbb" value="********">
                            </div>
                            <div class="password-field ">
                              <input type="password" id="popup2" disabled class="hide pbb"  name="user_password"  placeholder="New Password">
                              <button id="show_password" class="showpass-icon hide" tabindex="-1" type="button">
                              <i class="fa fa-eye"></i>
                              </button>
                              <p class="">
                                <?= form_error('user_password') ?>
                              </p>
                            </div>
                            <div class="password-field ">
                              <input type="password" id="popup3" disabled class="hide pbb"  name="confirm_password"  placeholder="New Password">
                              <button id="show_password-2" class="showpass-icon hide" tabindex="-1" type="button">
                              <i class="fa fa-eye"></i>
                              </button>
                              <p class="">
                                <?= form_error('user_password') ?>
                              </p>
                            </div>
                            

                            <div class="cc"><button id="popup4" type="submit" class="portal-btn hide">Save</button>
                            </div>
                          </form>
                        </div>

                        <div class="col-sm-2">
                          <button id="edit2" value="Edit"> <i class="fa fa-edit"></i>Edit</button>
                        </div>

                      </div>

                    </div>

                  </div><!--Content End-->

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