<!-- Navbar -->
<!-- Hotjar Tracking Code for https://paperly.net/ -->
<script>
    (function(h,o,t,j,a,r){
        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
        h._hjSettings={hjid:2876349,hjsv:6};
        a=o.getElementsByTagName('head')[0];
        r=o.createElement('script');r.async=1;
        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
        a.appendChild(r);
    })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
</script>
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
          <img src="<?= asset_url() ?>user_dashboard/dist/img/dummy-user.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <?=$this->session->userdata('username')?>
        </div>
      </div>
		</li>
      <li class="nav-item">
        <a class="nav-link" href="<?=base_url('logout')?>">
          <i class="fas fa-sign-out-alt"></i> Logout
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->