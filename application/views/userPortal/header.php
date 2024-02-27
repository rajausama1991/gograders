<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>User Dashboard <?= ucfirst(getDomain()) ?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--Main-->

  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url('user_portal/') ?>plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url('user_portal/') ?>dist/css/adminlte.min.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="<?= base_url('user_portal/') ?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <link rel="stylesheet" href="<?= base_url('user_portal/') ?>dist/css/style.css">
  <script src="https://www.gstatic.com/firebasejs/8.2.5/firebase-app.js"></script>
  <script src="https://www.gstatic.com/firebasejs/7.7.0/firebase-messaging.js"></script>
  <script>
  const firebaseConfig = {
      apiKey: "AIzaSyCQYYemtXPdrer3xdxL0zcBr_0ZVre1bkA",
      authDomain: "essaygurus-df3ff.firebaseapp.com",
      projectId: "essaygurus-df3ff",
      storageBucket: "essaygurus-df3ff.appspot.com",
      messagingSenderId: "857297552308",
      appId: "1:857297552308:web:6c1eba39295bcbeb79a8e1",
      measurementId: "G-42RM3QYB77"
    };
    firebase.initializeApp(firebaseConfig);
    const messaging = firebase.messaging();

    function IntitalizeFireBaseMessaging() {
      messaging
        .requestPermission()
        .then(function() {
          console.log("Notification Permission");
          return messaging.getToken();
        })
        .then(function(token) {
          // console.log("Token : " + token);
          $.ajax({
            method: 'POST',
            url: '<?= base_url() ?>Userportal/insertToken',
            data: ({
              token_id: token
            }),
            dataType: 'text',
            success: function(data) {
              // console.log(data);
            }
          });
        })
        .catch(function(reason) {
          // console.log(reason);
        })
    }
    messaging.onMessage(function(payload) {
      console.log(payload);
      const notificationOption = {
        body: payload.notification.body,
        icon: payload.notification.icon
      };
      if (Notification.permission == "granted") {
        var notification = new Notification(payload.notification.title, notificationOption);
        notification.onclick = function(ev) {
          ev.preventDefault();
          window.open(payload.notification.click_action, '_blank');
          notification.close();
        }
      }
    })
    messaging.onTokenRefresh(function() {
      messaging.getToken()
        .then(function(newtoken) {
          console.log("New Token : " + newtoken);
          $.ajax({
            method: 'POST',
            url: '<?= base_url() ?>Userportal/insertToken',
            data: ({
              token_id: token
            }),
            dataType: 'text',
            success: function(data) {
              console.log(data);
            }
          });
        })
        .catch(function(reason) {
          console.log(reason);
        })
    })
    IntitalizeFireBaseMessaging();
  </script>
</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto bb">
        <!-- Messages Dropdown Menu -->
        <li class="nav-item">
          <div class="user-panel p-1 d-flex">
            <div class="welcome">Welcome to your Dashboard</div>
            <div class="image">
              <img src="<?= base_url('user_portal/') ?>dist/img/dummy-user.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
              <?php echo $this->session->userdata('user_name'); ?>
            </div>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('logout'); ?>">
            <i class="fas fa-sign-out-alt"></i> Logout
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->
    <!-- Main Sidebar Container -->

    <aside class="main-sidebar sidebar-dark-primary elevation-4 sidebar-fixed">

      <!-- Brand Logo -->

      <a href="#" class="brand-link">

        <img src="<?= base_url('user_portal/') ?>dist/img/logo-vpt.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">

        <span class="brand-text font-weight-light">User Dashboard</span>

      </a>

      <!-- Sidebar -->

      <div class="sidebar">

        <!-- Sidebar user (optional) -->



        <!-- Sidebar Menu -->

        <nav class="mt-2">

          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false" id="nav-div">

            <!-- Add icons to the links using the .nav-icon class

             with font-awesome or any other icon font library -->

            <li class="nav-item-cus nav-item-card">

              <a href="<?= base_url('calculate-price') ?>" class="nav-link">

                <i class="nav-icon fa fa-file"></i>

                <p>

                  Place New Order

                </p>

              </a>

            </li>

            <li class="nav-item-cus nav-item-card <?= (($this->uri->segment(1) == 'dashboard') ? 'li-active' : '') ?>">

              <a href="<?= base_url('dashboard') ?>" class="nav-link <?= (($this->uri->segment(1) == 'dashboard') ? 'li-active' : '') ?>">

                <i class="nav-icon fas fa-history"></i>

                <p>

                  Orders History

                </p>

              </a>

            </li>

            <!-- <li class="nav-item-cus nav-item-card <?= (($this->uri->segment(1) == 'check-progress') ? 'li-active' : '') ?>">

              <a href="<?= base_url('check-progress') ?>" class="nav-link <?= (($this->uri->segment(1) == 'check-progress') ? 'li-active' : '') ?>">

                <i class="nav-icon fas fa-search"></i>

                <p>

                  Check Order Progress

                </p>

              </a>

            </li> -->

            <li class="nav-item-cus nav-item-card <?= (($this->uri->segment(1) == 'download-work') ? 'li-active' : '') ?>">

              <a href="<?= base_url('download-work') ?>" class="nav-link <?= (($this->uri->segment(1) == 'download-work') ? 'li-active' : '') ?>">

                <i class="nav-icon fas fa-download"></i>

                <p>Download Work</p> <span class="badge badge bg-danger"><?= fetchDownloadWorkNoti(0) ?>
                </span>

              </a>

            </li>

            <li class="nav-item-cus nav-item-card <?= (($this->uri->segment(1) == 'req-revision') ? 'li-active' : '') ?>">

              <a href="<?= base_url('req-revision') ?>" class="nav-link <?= (($this->uri->segment(1) == 'req-revision') ? 'li-active' : '') ?>">

                <i class="nav-icon fas fa-clock"></i>

                <p>Request Revision</p>

              </a>

            </li>

            <li class="nav-item-cus nav-item-card my-hover <?= (($this->uri->segment(1) == 'revised-work') ? 'li-active' : '') ?>">

              <a href="<?= base_url('revised-work') ?>" class="nav-link <?= (($this->uri->segment(1) == 'revised-work') ? 'li-active' : '') ?>">

                <!-- <i class="nav-icon fas fa-user"></i> -->
                <i class="fa">&#xf15c;</i>

                <p>Revised Work</p> <span class="badge badge bg-danger"><?= fetchDownloadWorkNoti(1) ?>
                </span>

              </a>

            </li>

            <li class="nav-item-cus nav-item-card <?= (($this->uri->segment(1) == 'profile') ? 'li-active' : '') ?> ">

              <a href="<?= base_url('profile') ?>" class="nav-link <?= (($this->uri->segment(1) == 'profile') ? 'li-active' : '') ?>">

                <i class="nav-icon fas fa-user"></i>

                <p>Manage My Profile</p>

              </a>

            </li>

            <li class="nav-item-cus nav-item-card <?= (($this->uri->segment(1) == 'invalid-revision') ? 'li-active' : '') ?>">

              <a href="<?= base_url('invalid-revision') ?>" class="nav-link <?= (($this->uri->segment(1) == 'invalid-revision') ? 'li-active' : '') ?>">

                <i class="nav-icon fa fa-exclamation-circle" aria-hidden="true"></i>
                <p>Invalid Revision</p>

              </a>

            </li>

          </ul>

        </nav>

        <!-- /.sidebar-menu -->

      </div>

      <!-- /.sidebar -->

    </aside>