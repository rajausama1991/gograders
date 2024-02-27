<!doctype html>
<html>
<head>
<!-- Hotjar Tracking Code for https://paperly.net/ -->
<title>Payment unsuccessful</title>
<!-- ClickCease.com Conversion tracking-->
<script type="text/javascript">
ccConVal = 0;
var script = document.createElement("script");
script.async = true;
script.type = "text/javascript";
var target = 'https://www.clickcease.com/monitor/cccontrack.js';
script.src = target; var elem = document.head; elem.appendChild(script);
</script>
<noscript>
<a href="https://www.clickcease.com" rel="nofollow"><img src="https://monitor.clickcease.com/conversions/conversions.aspx?value=0" alt="ClickCease"/></a>
</noscript>
<!-- ClickCease.com Conversion tracking-->
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
<style>
    
.thank-you{
    padding-top: 180px;
}
.thanks-txt{
    color: #989898;
    padding: 20px;
}
.thanks-txt .summary-check img{
    display: table;
    margin: 10px auto 20px auto;
}
.thanks-txt .thx-big-txt{
    font-size: 35px;
    font-weight: 300;
    padding-bottom: 10px;
    text-align: center;
    color: #d71919;
}
.thanks-txt .thx-small-txt{
    font-size: 14px;
    font-weight: 300;
    text-align: center;
}
.red-btn a {
    color: #FFF;
    padding: 10px 42px 10px 42px !important;
    text-align: center;
    text-decoration: none;
    font-size: 15px;
    font-weight: 400;
    background: #6772e5;
    border: #6772e5 1px solid;
    border-radius: 100px;
    transition: all 0.2s ease-in-out;
    display: table;
    margin: 4px auto;
}
.red-btn a:hover {
    color:#fff;
    background: #343a40;
    transition: all 0.2s ease-in-out;
}
    
</style>
<title>Thank You</title>

</head>

<body>
    
    <div class="container thank-you">
    
      <div class="row">
                  
        <div class="col-md-12 thanks-txt"><div class="summary-check"><img src="<?= asset_url() ?>front/images/exclamation.png" class="img-responsive" /></div></div>
          
        <div class="col-md-12 thanks-txt">

          <div class="thx-big-txt">Your Payment unsuccessful</div>
            
          <div class="thx-small-txt"><?=$error_message?></div>

        </div>
          
        <div class="col-md-12">
          <div class="red-btn"><a href="<?=base_url('dashboard')?>">Try Again</a></div>
        </div>

      </div>
    
    </div>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/619bcefb6885f60a50bcfcf0/1fl4a12gn';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
</body>
</html>
