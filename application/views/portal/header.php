<style>
  .order_now_btn {
    padding: 12px 24px;
    margin-right: 2px;
    text-decoration: none;
    outline: none;
    font-size: 14px;
    font-weight: 700;
    border-radius: 30px;
    display: inline-block;
    text-align: center;
    line-height: inherit;
    background-color: #0a2a7f;
    color: #fff;
    position: relative;
  }

  a:hover, a:focus {
    color: #fff;
    text-decoration: none;
  }
    
  
  @media (min-width: 992px)
    {
        .sep-row {
            display: flex !important;
            justify-content: flex-end !important;
            align-items: center !important;
        }
        .right-icon {
            left: 40px !important;
        }
        a.slatebluesmall {
            padding: 9px 12px 9px 72px;
        }
        .main-row {
            display: flex;
        justify-content: space-between;
        }
        .md-show {
        display:none;
        }
    }
    @media (max-width: 576px)
    {
        .logo-img {
            width: 100px !important;
        }
        a.slatebluesmall {
            padding: 3px 1px 10px 30px !important;
            min-width: 117px !important;
            font-size: 10px !important;
            margin-right: -7px !important;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .top-row {
                display: flex !important;
                justify-content: space-between !important;
                align-items: center !important;
                margin-bottom: 8px;
            }
        .order_now_btn {
            display: flex !important;
            justify-content: center !important;
            padding: 7px 20px !important;
            margin-right: 2px !important;
            font-size: 12px !important;
            font-weight: 500 !important;
            align-items: center !important;
        }
        .left-icon {
            width: 12px !important;
        }
        .right-icon {
            width: 12px !important;
            left: 20px !important;
        }
                .logo-div {
            padding-left: 4px !important;
        }
        /*.main-row {*/
        /*    display: flex;*/
        /*}*/
        .sep-row {
            display: flex !important;
            justify-content: space-between !important;
            align-items: center !important;
            margin-bottom: 8px;
        }
        .row-other-divs {
            padding-right: 1px !important;
            padding-left: 8px;
        }
        .md-none {
            display:none;
        }
     .md-show {
        display:block;
    }
    }
  
   @media (max-width: 336px){
       .sep-row {
               /*display: inline-block !important;*/
       }
   }
</style>

<div id="container">
  <div hidden="true" id="popup" class="fifty-disc">

    <div class="col-md-12">

      <button id="btclose">X</button>

      <div class="disc-big-text">Congratulations!!</div>

      <div class="gift"><img src="<?= asset_url() ?>front/images/gift.jpg" class="img-responsive" /></div>

      <div class="disc-big-text-2">10% Additional Discount Auto Applied</div>

    </div>


  </div>

</div>
<div class="container-fluid header-bg">

  <div class="container">
     <div class="row main-row">

      <div class="col-md-2 col-12 top-row logo-div">
        <div class="logo"><a href="<?= base_url() ?>"><img class="logo-img" src="<?= asset_url() ?>front/images/am-web-logo.png" style="width: 100px;"></a></div>
         <div class="md-show">
        <div class="logo"><a href="<?= base_url('login') ?>" class="order_now_btn white "><img class="login-icon" src="<?= base_url() ?>/assets/front/images/login.png" alt="icon" style="width: 33px; padding-right:10px;">LOGIN</a></div>
      </div>
      </div>
      
      <div class="row sep-row">
           <div class="col-md-3 row-other-divs">
        <div class="logo"><a href="tel:+1 213 318 4345" class="orderbtn slatebluesmall bgslateblue white hidden_mob"><img class="left-icon" src="<?= asset_url() ?>front/images/usa.png" alt="icon"><img class="right-icon" src="<?= asset_url() ?>front/images/phone.png" alt="icon"> +1 213 318 4345</a></div>
      </div>
      <div class="col-md-3 row-other-divs">
        <div class="logo"><a href="tel:+61280113862" class="orderbtn slatebluesmall bgslateblue white hidden_mob"><img class="left-icon" src="<?= asset_url() ?>front/images/aus2.png" alt="icon"><img class="right-icon" src="<?= asset_url() ?>front/images/phone.png" alt="icon"> +61 2 8011 3862</a></div>
      </div>
      
        <div class="col-md-3 row-other-divs">
        <div class="logo"><a href="tel:+441892710953" class="orderbtn slatebluesmall bgslateblue white hidden_mob"><img class="left-icon" src="<?= asset_url() ?>front/images/united-kingdom.png" alt="icon"><img class="right-icon" src="<?= asset_url() ?>front/images/phone.png" alt="icon"> +44 1892 71 0953</a></div>
      </div>
      
        <div class="col-md-3 md-none">
        <div class="logo"><a href="<?= base_url('login') ?>" class="order_now_btn white "><img class="login-icon" src="<?= base_url() ?>/assets/front/images/login.png" alt="icon" style="width: 33px; padding-right:10px;">LOGIN</a></div>
      </div>
  </div>
    <!--<div class="row">-->

    <!--   <div class="col-md-6">-->
    <!--      <a href="<?= base_url() ?>"><img src="<?= asset_url() ?>front/images/logo.png"></a>-->
    <!--      </div>-->

    <!--  <div class="col-md-3">-->
    <!--    <div class="logo"><a href="<?= base_url() ?>"><img src="<?= asset_url() ?>front/images/am-web-logo.png" style="width: 116px;"></a></div>-->
    <!--  </div>-->

    <!--  <div class="col-md-9">-->

    <!--    <ul class="navbar-nav topnav navbar-right top-buttons">-->
    <!--      <li>-->
    <!--          <a href="tel:+1 213 318 4345" class="orderbtn slatebluesmall bgslateblue white hidden_mob"><img src="<?= asset_url() ?>front/images/usa.png" alt="icon"><span class="ghi"><img src="<?= asset_url() ?>front/images/phone.png" alt="icon"></span> +1 213 318 4345</a>-->

    <!--        <a href="tel:+441892710953" class="orderbtn slatebluesmall bgslateblue white hidden_mob"><img src="<?= asset_url() ?>front/images/united-kingdom.png" alt="icon"><span class="ghi"><img src="<?= asset_url() ?>front/images/phone.png" alt="icon"></span> +44 1892 71 0953</a>-->
    <!--        <a href="tel:+61280113862" class="orderbtn slatebluesmall bgslateblue white hidden_mob"><img src="<?= asset_url() ?>front/images/aus2.png" alt="icon"><span class="ghi"><img src="<?= asset_url() ?>front/images/phone.png" alt="icon"></span> +61 2 8011 3862</a>-->
    <!--        <a href="<?= base_url('login') ?>" class="order_now_btn white "><img src="<?= base_url() ?>assets/front/images/login.png" alt="icon" style="width: 33px; padding-right:10px;">LOGIN</a>-->








    <!--      </li>-->
    <!--    </ul>-->

    <!--  </div>-->

    <!--</div>-->

  </div>

</div>