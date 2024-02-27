<style media="screen">
  .my-200{
    margin: 200px 0px;
  }
  .my-a{
    color: #ff4a17;
  }
</style>



<section class="my-200">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">

    <?php if(isset($_SESSION['success'])): ?>

    <div class="alert alert-success" style="width:100%; margin-bottom: 5px;" >

    <?php echo $_SESSION['success']; ?>

    </div>

    <?php endif; ?>

    <?php unset($_SESSION['success']); ?>

               </div>

               <div class="col-md-8">

    <?php if(isset($_SESSION['error'])): ?>

    <div class="alert alert-danger" style="width:100%; margin-bottom: 5px;" >

    <?php echo $_SESSION['error']; ?>

    </div>

    <?php endif; ?>

    <?php unset($_SESSION['error']); ?>

     </div>
      <div class="col-md-6">
        <div class="card px-5 py-5 shadow">
          <h1>Reset Password</h1>
          <hr>
          <form class="" action="<?= base_url('reset-password?hash=' . $hash) ?>" method="post">
            <div class="form-group my-3">
              <label for="">New Password</label>
              <input type="password" name="password" value="<?php echo set_value('password')?>" class="form-control">
              <p class=""><?= form_error('password')?></p>
            </div>
            <div class="form-group my-3">
              <label for="">Confirm New Password</label>
              <input type="password" name="c_password" value="<?php echo set_value('c_password')?>" class="form-control">
              <p class=""><?= form_error('c_password')?></p>
            </div>

            <div class="form-group my-3">
              <button type="submit" name="button" class="theme-btn">Submit</button>
            </div>


          </form>
        </div>
      </div>

    </div>

  </div>
</section>
<script type="text/javascript">
setTimeout(function() {
    let alert = document.querySelector(".alert");
        alert.remove();
}, 5000);
</script>
