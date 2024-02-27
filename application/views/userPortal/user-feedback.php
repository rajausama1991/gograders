<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
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
    padding-right: 40px;
    /* Create space for the eye icon */
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

  .password-field input[type="text"] {
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
          <h1>Customer Feedback</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Customer Feedback</li>
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
            <div class="card-body box-feedback offset-md-2 col-md-8 p-4">
              <div class="col-md-12"><!--Content Start-->
                <div class="container box-feedback-inner">
                  <form action="<?=base_url('user-feedback')?>" method="POST" class="feedbackform" onsubmit="customerFeedback(event, this, 0)">
                    <div class="head-blue">Your Feedback</div>
                    <p>Share Your Experience with the community</p>
                    <hr>
                    <div class="mt-5">
                      <label for="">Order ID</label>
                      <input type="hidden" name="feedback_id" id="feedback_id" value="<?=(isset($feedback))?$feedback->feedback_id:'' ?>">
                      <select name="order_id" class="form-control" id="o_id" required>
                      <option value="">--Select--</option>
                        <?php if(isset($feedback)){
                          foreach ($orders as $key) {
                            if($key->order_id==$feedback->order_id){
                          ?>
                          <option value="<?= $key->order_id ?>-<?= $key->writer_id ?>" <?=($key->order_id==$orderId)?'selected':''?>>(<?= $key->order_from .'-'. $key->order_id ?>) | <i>
                                          <?= $key->title ?>
                                        </i></option>
                      <?php }}} else if (!empty($orders)) {
                        foreach ($orders as $key) {
                      ?>
                         <option value="<?= $key->order_id ?>-<?= $key->writer_id ?>" <?=($key->order_id==$orderId)?'selected':''?>>(<?= $key->order_from .'-'. $key->order_id ?>) | <i>
                                          <?= $key->title ?>
                                        </i></option>
                        <?php
                        }
                      }
                        ?>
                      </select>
                    </div>

                    <div class="rating-box mt-5">
                      <label>Overall satisfaction rating</label>
                      <div class="row">
                        <div class="col-md-8 col-12">
                          <p>How satisfied are you with the writer's work?</p>
                        </div>
                        <div class="col-md-4 col-12 text-right">
                          <div class="stars">
                            <?php
                              $writer_rating=0;
                              $blanck=5;
                              if(isset($feedback)):
                              $writer_rating= $feedback->writer_rating;
                              $blanck=5-$writer_rating;
                              endif;
                              for($i=1; $i<=$writer_rating; $i++):
                              ?>
                              <i class="fa-solid fa-star active"></i>
                              <?php endfor;
                              for($i=$blanck; $i>0; $i--):
                              ?>
                              <i class="fa-solid fa-star"></i>
                            <?php endfor; ?>
                          </div>
                        </div>
                      </div>

                    </div>
                    <input type="hidden" name="writer_rating" id="writer_rating" value="<?=($writer_rating!=0)?$writer_rating:''?>" require>
                    <div class="mt-5">
                      <label for="">Your Experience with Writer</label>
                      <div>
                        <textarea name="client_comment" id="client_comment" require><?=(isset($feedback))?$feedback->client_comment:'' ?></textarea>
                      </div>
                    </div>
                    <hr>
                    <div class="text-right mt-2">
                      <button class="btn btn-primary "><?=(isset($feedback))?'Update Feedback':'Send Feedback' ?></button>
                    </div>
                  </form>
                </div><!--Content End-->

              </div>

            </div>

          </div>

        </div>

      </div>

    </div>

  </section>
  <script>
    // ---- ---- Const ---- ---- //
    let stars = document.querySelectorAll('.stars i');
    let rating = document.querySelector('input[name="writer_rating"]');
    let starsNone = document.querySelector('.rating-box');

    // ---- ---- Stars ---- ---- //
    stars.forEach((star, index1) => {
      star.addEventListener('click', () => {
        stars.forEach((star, index2) => {
          rating.value= index1+1
          // ---- ---- Active Star ---- ---- //
          index1 >= index2 ?
            star.classList.add('active') :
            star.classList.remove('active');
        });
      });
    });
  </script>

</div>



<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
  <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->