
<html lang="en-US">
<head>
<?php include_once('includes/head.php');?>
<title>Get an interactive user friendly website and grow your business</title>
<meta name="description"  content="Logo Valley is a digital design agency specializing in branding, animation, mobile and web design and development." />


</head>

<body class="home blog homepage_style homeclass hoverheader home-bd">

    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NF9QG64"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) --><div class="app-content">
      <div class="main">

        

<?php include_once('includes/header.php');?>


<section class="main-ghst-writng-first-sec sec-padding-60" style="background-color:#3892b0;">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-8 col-md-8 col-sm-12">
        <div class="ghst-writng-content">
        <h1 class="text-white mb-4 font-medium mt-5"><?php if(isset($_SESSION['thanksMsg'])){ echo $_SESSION['thanksMsg'];} ?><?php if(isset($_REQUEST['successMsg'])){ echo $_REQUEST['successMsg'];} ?></h1>
        </div>
      </div>
       <div class="col-lg-6 col-md-6 col-sm-12 serForm">
        
      </div>
    </div>

    
  </div>
  <!-- <svg xmlns="http://www.w3.org/2000/svg" class="curve-container__curve curve-one" viewBox="0 0 1440 68" enable-background="new 0 0 1440 68"><path d="m1622.3 1937.7c0 0-410.7 169.1-913.4 75.5-502.7-93.6-977.7 56.3-977.7 56.3v440h1891.1v-571.8" fill="#F4F5F7" transform="translate(0-1977)"></path></svg> -->
</section>
<?php include_once('includes/footer.php');?>
</div>
</div>




<?php include_once('includes/scripts.php');?>
<?php 
       	if(isset($_REQUEST['successMsg'])){
          if ($_REQUEST['status']==1) {
              echo "<script>Swal.fire({
                  position: 'top-end',
                  icon: 'success',
                  title: '$_REQUEST[successMsg]'
                })</script>";
          } else {
              echo "<script>Swal.fire({
                  position: 'top-end',
                  icon: 'warning',
                  title: '$_REQUEST[successMsg]'
                })</script>";
          }
          
         
      }
      ?>
    
</body>

</html>


