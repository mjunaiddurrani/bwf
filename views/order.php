<!doctype html>
<html lang="en">

<!-- Mirrored from bookwritingfounders.com/order by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 15 Mar 2021 08:21:58 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<title>Order Form</title>
<meta name="keywords" content="">
<meta name="description" content="We would love to hear from you">










    <?php include_once('includes/head.php');?>


   


</head>
<body class="order-page">








<section class="tphead">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 ord-box1">
        <div class="logo">
            <a href="/">
              <img class="img-fluid black" src="assets/images/logo.svg" alt="*" />
            </a>
          </div>
      </div>
      <div class="col-lg-8  ord-box2">
        <div class="text-right">
          <a href="/"><span class="icon-x-square"></span></a>
        </div>
      </div>
    </div>
  </div>
</section>





      <div class="home-banner ptpx-100">
        <div class="container ">
          <div class="row">
            <div class=" col-lg-12 col-xl-12 text-center">
              <div class="home-banner-content">
                <div class="col-lg-8 offset-lg-2   inner-content mtpx-100 text-left">
                  <div class="form-box-main clearfix">
                    <h2>We would love to hear from you</h2>
                    <form class="cmxform" id="contactForm"  method="POST" action="/leads/"  enctype="multipart/form-data">
                          <input type="hidden" id="tag" name="tag" value="footer-top">
                          <input type="hidden" id="priceVal" name="price" value="null">
                          <input type="hidden" name="news" value="1">
                          <input type="hidden" name="route" value="<?= $_SERVER['REQUEST_URI'] ?>">
                          <input type="hidden" name="brand" value="bookwritingfounders">
                      <div class="row">
                        <div class="col-md-12">
                          <label class="field-txt">Name <span>*</span></label>
                          <input id="username" name="name" minlength="2" type="text" placeholder="Enter your name" required />
                        </div>
                        <div class="col-md-12">
                          <label class="field-txt">Email <span>*</span></label>
                          <input id="cemail" type="email" name="email" placeholder="Enter email here" required>
                        </div>
                        <div class="col-md-12">
                          <label class="field-txt">Phone Number<span>*</span></label>
                          <input id="phone-country" name="phone" type="number" placeholder="Phone Number" required/>
                        </div>
                      
                        
                        <div class="col-md-12">
                          <label class="field-txt">Additional Comments <span>*</span></label>
                          <textarea name="brief" placeholder="Enter message here" /></textarea>
                        </div>
                        <div class="col-md-12">
                          <input class="btn-theme" type="submit" value="Submit" />
                          <input class="" type="hidden" name="ctry" value="" />
                          <input type="hidden" name="pc" value="">
                          <input type="hidden" name="cip" >
                          <input type="hidden" name="hiddencapcha" value="">
                        </div>
                      </div>
                    </form>
                  </div>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
    








        <?php include_once('includes/footer.php');?>

<?php include_once('includes/scripts.php');?>

</body>

<!-- Mirrored from bookwritingfounders.com/order by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 15 Mar 2021 08:21:58 GMT -->
</html>