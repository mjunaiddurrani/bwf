<?php
ob_start();
// session_start();
?>
<!DOCTYPE html>
<html>
<head>

	<!-- Start of Zendesk Widget script -->
<script id="ze-snippet" src="https://static.zdassets.com/ekr/snippet.js?key=22eb8331-0ee2-4530-8f3e-d02db7677920"> </script>
<!-- End of Zendesk Widget script -->
<?php 

// dont allow directly to get in php file




// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);


if (isset($_SERVER['HTTPS'])) {
	$requesMet = "https";
}else{
	$requesMet = "http";
}




?>
<base href="<?= $requesMet.'://'.$_SERVER['HTTP_HOST'].'/' ?>">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="/css/bootstrap.min.css">
	<link rel="icon" href="img/landing-two/logo.png" type="image/icon">
	<title>Professional Book Writing Services</title> <meta name="description" content="Professional Bookwriting at your service! Our Bookwriting agency provides the best services in the market. Learn for
yourself. Contact us now!
">
	<link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="/css/landing-two/nav.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.green.min.css" integrity="sha512-C8Movfk6DU/H5PzarG0+Dv9MA9IZzvmQpO/3cIlGIflmtY3vIud07myMu4M/NTPJl8jmZtt/4mC9bAioMZBBdA==" crossorigin="anonymous" />

	<link rel="stylesheet" type="text/css" href="/css/landing-two/style.css">
	<link rel="stylesheet" type="text/css" href="/css/landing-two/pricing.css">

	<link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/hamburgers/1.1.3/hamburgers.min.css" integrity="sha512-+mlclc5Q/eHs49oIOCxnnENudJWuNqX5AogCiqRBgKnpoplPzETg2fkgBFVC6WYUVxYYljuxPNG8RE7yBy1K+g==" crossorigin="anonymous" />
  <link rel="stylesheet" type="text/css" href="/css/landing-two/footer.css">

  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
  <?php include('includes/head.php');?>

  	<link rel="stylesheet" type="text/css" href="/css/landing-two/circle.css">
	<link rel="stylesheet" type="text/css" href="/css/landing-two/landing-two.css">
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-CMYEHF8GE5"></script>
	<script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());

	gtag('config', 'G-CMYEHF8GE5');
	</script>
	<style>
    p{
        color:#fff;
    }
		.mob-header{
		display: none;
		}
		@media (max-width:767px){
			.mob-header{
				display: block;
			}
			.web-header{
				display: none;
			}
			.mobile-header{
				display: none;
			}
		}
		.btn-red{
		background-color: #217091;
		color:#fff;
	}
	.btn-red:hover{
		color:#fff;
	}
	.card:after {
    	background-color: #217091!important;
	}
	.ulPlans li:before {
    
    	color: #217091!important;
	}
    .home-banner{
        min-height:628px;
    }
    .posBottom{
        position:absolute;
        bottom:0;
        width:100%;
        left:0;
		right:0;
		margin-left:auto;
		margin-right:auto;
    }
    .cardCustom  p{
	color: #000;
}
.cardRed p{
    color:#fff
}
	</style>
</head>
<body >


 
<div class="ys-layer"></div>
    <div class="ys-container" id="ys-container">
        <div class="ys-box">
            <a class="ys-popup-close ys-exit" href="#">x</a>
            <!--<img src="assets/images/form-banner.jpg" class="mainbann" alt="">-->
            <div class="ys-popup-content">
                <!-- <p>Are Your Sure?</p>
           <a href="#" class="ys-exit">Exit</a> -->

                <div class="popupform tabform clearfix  text-left">
                    <!-- <h2 class="text-center">Get a Beautiful, Results-Driven, Custom-Designed Animated Explainer Video That Get Your Prospects To Say  <span class="font-permanentmarker">YES</span></h2> -->
                    <h3>Get Special Discount</h3>
                    <figure>
                        <img src="assets/images/popup-img.jpg" alt="">
                    </figure>
                    <P>Don't miss out on special discount offer</P>
                    <form id="popupfrm" class="cmxform" method="POST" action="/leads/">
                        <input type="hidden" id="tag" name="tag" value="footer-top">
                        <input type="hidden" id="priceVal" name="price" value="null">
                        <input type="hidden" name="news" value="1">
                        <input type="hidden" name="route" value="<?= $_SERVER['REQUEST_URI'] ?>">
                        <input type="hidden" name="brand" value="bookwritingfounders">

                        <div class="fldst">
                            <input id="username" name="name" minlength="2" type="text" placeholder="Full Name *" required />
                        </div>

                        <div class="fldst fldstrght">
                            <input id="cemail" type="Email" name="email" placeholder="Email Address *" required>
                        </div>

                        <div class="fldst">
                            <input id="phone-coun" name="phone" required="" type="number" rangelength="[2,15]" placeholder="Phone No *">
                         
                            <input type="hidden" name="hiddencapcha" value="">
                            <input class="" type="hidden" name="tctry" value="" />
                            <input type="hidden" name="tpc" value="">
                            <input type="hidden" name="cip">
                            <input type="hidden" id="location" name="locationURL" value="http://bookwritingfounders.com/" />
                        </div>

                        <div class="fldst">
                            <textarea name="brief" placeholder="Enter a brief description of your Book Project"></textarea>

                        </div>


                        <div class="fldst btnattach">
                            <!-- <input class="submit" type="submit" value="" class="btnsb" /> -->
                            <button type="submit" form="popupfrm" value="Submit"><span class="icon-paperplane plane"></span> Let's Get Started</button>

                        </div>
                        <p class="lst-p">Discuss With Our Strategic Consultant <span><a href="tel:+18889768388 ">+1-888-976-8388 </a></span></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="mobile-nav">
        <a href="/" class="logo-main"> <img src="/assets/images/logo.gif" alt="*" /></a>
        <nav>

            <ul class="unstyled mainnav pbpx-15">
                <li><a href="/home/">Home</a></li>
                <li><a href="javascript:;">Services <i class="xicon icon-angle-down"></i></a>
                    <ul class="firstlevel unstyled">
                        <li><a href="/services/">Our Services</a></li>
                        <li><a class="inner-pad" href="/book-writing/">Book Writing Founders</a></li>
                        <li><a class="inner-pad" href="/editing/">Editing</a></li>
                        <li><a class="inner-pad" href="/book-publishing/">Book Publishing</a></li>
                        <li><a class="inner-pad" href="/ebook-writing/">Ebook Writing</a></li>
                        <li><a class="inner-pad" href="/book-marketing/">Book Marketing</a></li>
                        <li><a class="inner-pad" href="/book-cover-design/">Book Cover Design</a></li>
                        <li><a class="inner-pad" href="/author-website/">Author Website</a></li>
                        <li><a class="inner-pad" href="/professional-audio-book/">Professional Audio Book</a></li>
                        <li><a class="inner-pad" href="/Book-Video-Trailer/">Book Video Trailer</a></li>
                        <li><a class="inner-pad" href="/book-cover-design/">Book Cover Design</a></li>
                        <li><a class="inner-pad" href="/custom-book-illustration/">Custom Book Illustration</a></li>
                        <li><a class="inner-pad" href="/article-writing-publication/">Article Writing & Publication</a></li>
                    </ul>
                </li>
                <li><a href="/about-us/">About</a></li>
                <!--<li><a href="http://bookwritingfounders.com/trusted-reviews">Reviews</a></li>-->
                <!-- <li><a href="http://bookwritingfounders.com/samples">Samples</a></li> -->
                <li><a href="/pricing/">Pricing</a></li>
                <li><a href="/contact/">Contact</a></li>
            </ul>




        </nav>
    </div>
    <main class="app-container">
        <!-- Mobile Navigation Button Start-->
        <div class="mobile-nav-btn"> <span class="lines"></span> </div>
        <!-- Mobile Navigation Button End-->

        <header class="header-main">
            <div class="top-bar-line">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7">
                            <div class="sldrwrp">
                                <p><span>Book Writing Founders </span>Book Writing, Marketing & Publication Experts</p>
                                <p><span>Book Writing Founders </span>Book Writing, Marketing & Publication Experts</p>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="cntct">
                                <ul>
                                    <li><a href="tel:+18889768388 "><i class="fa fa-phone" aria-hidden="true"></i>+1-888-976-8388 </a></li>
                                    <li><a href="mailto:query@bookwritingfounders.com"><i class="fa fa-mail" aria-hidden="true"></i>query@bookwritingfounders.com</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="top-bar d-none d-lg-block">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7 lg-wdt1">

                            <div class="secondlogo">
                                <a href="/">
                                    <img class="img-fluid" src="assets/images/logo.gif" alt="*" />
                                </a>
                            </div>
                        

                        </div>
                        <div class="col-lg-5 lg-wdt2">
                            <ul class="top-info-list">
                                <li>
                                    <a href="tel:+18889768388 "><img src="assets/images/us-flag.png" alt="UK Flag" />+1-888-976-8388 </a>
                                </li>
                                <li><a href="javascript:;" class="liveChat" onclick="setButtonURL();" target="_self"><span class="icon-chat"></span> Live Chat</a> </li>
                                <li><a href="/order/" class="btn-main">Let's Get Started</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
      







        </header>



        <div class="floatbutton">
            <div class="btns_wrap">

                <!-- <a href="javascript:;" class="chat_wrap" onclick="$zopim.livechat.window.toggle()">
              <span class="icoo"><i class="fa fa-comment"></i></span>
              <span>Chat With Us</span>
            </a> -->
                <a href="tel:+18889768388 " class="call_wrap">
                    <span class="icoo"><i class="fa fa-phone"></i></span>
                    <span> +1-888-976-8388  </span>
                </a>
            </div>


            <div class="clickbutton">
                <div class="crossplus"><i class="fa fa-send"></i></div>
            </div>
            <div class="banner-form">
                <h3>Chat With Us to <br>
                    <Strong>Avail 20% Discount</Strong>
                </h3>
                <div class="banform">
                    <div class="container">
                        <div class="row">
                            <div class="ban-form">
                                <form class="cmxform" id="bannerform" method="POST" action="/leads/">
                                    <input type="hidden" id="tag" name="tag" value="footer-top">
                                    <input type="hidden" id="priceVal" name="price" value="null">
                                    <input type="hidden" name="news" value="1">
                                    <input type="hidden" name="route" value="<?= $_SERVER['REQUEST_URI'] ?>">
                                    <input type="hidden" name="brand" value="bookwritingfounders">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="fldset">
                                                <input id="username" name="name" minlength="2" type="text" placeholder="Enter your name" required />
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="fldset">
                                                <input id="cemail" type="email" name="email" placeholder="Enter email here" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="fldset">
                                                <input id="phone-coun" name="phone" type="number" placeholder="Phone Number" required />
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="fldset">
                                                <textarea name="brief" id="" rows="7" placeholder="Talk About Your Project"></textarea>
                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <div class="fldset">
                                                <input name="submit" type="submit" placeholder="Connect With Us" required />
                                                <input type="hidden" name="hiddencapcha" value="">
                                                <input type="hidden" name="ctry" value="">
                                                <input type="hidden" name="pc" value="">
                                                <input type="hidden" name="cip">
                                                <input type="hidden" id="location" name="locationURL" value="/" />
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>







<section class="section8"  style="background-color: #282658;padding:0">
    <!-- <h3 class="section8Heading">We are working on</h3> -->
	<div class="container-fluid socialImg">
		<div class="row">
			<div class="col-1">
				
			</div>
			<div class="col-2">
				<img src="img/landing-two/social/7.png" width="100%" alt="Google books icon">
			</div>
			<div class="col-2">
				<img src="img/landing-two/social/8.png" width="100%" alt="amazon books image">
			</div>
			<div class="col-2">
				<img src="img/landing-two/social/9.png" width="100%" alt="alibris books image">
			</div>
			<div class="col-2">
				<img src="img/landing-two/social/10.png" width="100%" alt="ingram image">
			</div>
			<div class="col-2">
				<img src="img/landing-two/social/11.png" width="100%" style="margin-top:40px;" alt="barnes and noble image">
			</div>
			<div class="col-1">
				
			</div>
		</div>
	</div>
</section>

<div class="home-banner d-flex" style="background-image:url('img/landing-two/collage.jpg')">
    <div class="container posBottom">
        <div class="row">
            <div class=" col-lg-12 col-md-12 col-sm-12">
                <div class="home-banner-content">
                    <h1>Having a hard time writing your book!<br> We are here to assist you.</h1>
                    <p class="subtitle">If you have an idea for a book you want to write but you are not a master of words, you have come to the right place!</p>
                    <!--   <a href="http://bookwritingfounders.com/order" class="btn-theme">Let’s Get Started</a> -->
                </div>
            </div>

        </div>

    </div>
</div>

<section class="section5">
	
		<div class="myContainer">
		<div class="rowCards row flex-items-middle flex-items-xs-center rowOfWaitingFor">

			<!-- Table #1  -->
			<div class="col-12 col-lg-3 col-md-6">
				<div class="card text-center">
					<div class="">
					<h3 class="display-2"><span class="currency">$</span>799</h3>
						<div class="text-center">
						<s><p class="text-black">$1,450</p></s>
						</div>
					</div>
					<div class="card-block entry-content">
					<h4 class="card-title"> 
						Silver Plan
					</h4>
					<ul class="list-group ulPlans">
							<li class=""> Creating /updating the outline.  </li>
							<li class=""> Completing an entire book of <b>50-100</b> Pages as per the requirements/outline.  </li>
							<li class=""> Adjusting the layout and presentation for the publishing standards.  </li>
							<li class=""> Unlimited revisions.  </li>
							<li class=""> A dedicated team of expert writers and designers.  </li>
							<li class=""> Access to the online portal.  </li>
							<li class=""> Free Editing, Proofreading and formatting  </li>
							<li class=""> Free Cover design. Font and Back 2D and 3D.  </li>
							<li class=""> 100% Rights + Royalties  + Ownership.  </li>
					</ul>
					<a href="/order/" class="btn btn-red mt-2 price"  data-price="499">Get a quote</a>
					</div>
				</div>
				</div>

				<!-- Table #2  -->
				<div class="col-12 col-lg-3 col-md-6">
				<div class="card text-center">
					<div class="">
					<h3 class="display-2"><span class="currency">$</span>999</h3>
					<div class="text-center">
						<s><p class="text-black">$2,000</p></s>
						</div>
					</div>
					<div class="card-block">
					<h4 class="card-title"> 
						Gold Plan
					</h4>
					<ul class="list-group ulPlans">
						<li class=""> Creating /updating the outline.  </li>
						<li class=""> Completing an entire book of <b>100-150</b> Pages as per the requirements/outline.  </li>
						<li class=""> Adjusting the layout and presentation for the publishing standards.  </li>
						<li class=""> Unlimited revisions.  </li>
						<li class=""> A dedicated team of expert writers and designers.  </li>
						<li class=""> Access to the online portal.  </li>
						<li class=""> Free Editing, Proofreading and formatting  </li>
						<li class=""> Free Cover design. Font and Back 2D and 3D.  </li>
						<li class=""> 100% Rights + Royalties  + Ownership.  </li>
					</ul>
					<a href="/order/" class="btn btn-red mt-2 price"  data-price="799">Get a quote</a>
					</div>
				</div>
				</div>

				<!-- Table #3  -->
				<div class="col-12 col-lg-3 col-md-6">
				<div class="card text-center">
					<div class="">
					<h3 class="display-2"><span class="currency">$</span>1,299</h3>
					<div class="text-center">
						<s><p class="text-black">$2,600</p></s>
						</div>
					</div>
					<div class="card-block">
					<h4 class="card-title"> 
						Platinium Plan    

					</h4>
					<ul class="list-group ulPlans">
						<li class=""> Creating /updating the outline.  </li>
						<li class=""> Completing an entire book of <b>150-200</b> Pages as per the requirements/outline.  </li>
						<li class=""> Adjusting the layout and presentation for the publishing standards.  </li>
						<li class=""> Unlimited revisions.  </li>
						<li class=""> A dedicated team of expert writers and designers.  </li>
						<li class=""> Access to the online portal.  </li>
						<li class=""> Free Editing, Proofreading and formatting  </li>
						<li class=""> Free Cover design. Font and Back 2D and 3D.  </li>
						<li class=""> 100% Rights + Royalties  + Ownership.  </li>
					</ul>
					<a href="/order/" class="btn btn-red mt-2 price"  data-price="999">Get a quote</a>
					</div>
				</div>
				</div>

				<!-- Table #4  -->
				<div class="col-12 col-lg-3 col-md-6">
				<div class="card text-center">
					<div class="">
					<h3 class="display-2"><span class="currency">$</span>1,499</h3>
					<div class="text-center">
						<s><p class="text-black">$3,000</p></s>
						</div>
					</div>
					<div class="card-block">
					<h4 class="card-title"> 
						Diamond Plan    

					</h4>
					<ul class="list-group ulPlans">
						<li class=""> Creating /updating the outline.  </li>
						<li class=""> Completing an entire book of <b>200-250</b> Pages as per the requirements/outline.  </li>
						<li class=""> Adjusting the layout and presentation for the publishing standards.  </li>
						<li class=""> Unlimited revisions.  </li>
						<li class=""> A dedicated team of expert writers and designers.  </li>
						<li class=""> Access to the online portal.  </li>
						<li class=""> Free Editing, Proofreading and formatting  </li>
						<li class=""> Free Cover design. Font and Back 2D and 3D.  </li>
						<li class=""> 100% Rights + Royalties  + Ownership.  </li>
					</ul>
					<a href="/order/" class="btn btn-red mt-2 price"  data-price="1,299">Get a quote</a>
					</div>
				</div>
				</div>


			</div>
					
		</div>
</section>
<!-- section 2 started -->
<section class="section2">
	<div class="myContainer">
		<div class="col-md-12 ml-auto mr-auto">
			<h2 class="headingLightemail">
				Sign Up with Bookwriting Founders right now to avail of our special discounts made just for you!
			</h2>
		</div>
		<div class="row " style="justify-content: center;">
			<div class="signUpFormDiv" style="justify-content: center !important;">
				<form class="signUpForm"  action="/leads/" method="POST">
						<input type="hidden" id="tag" name="tag" value="footer-top">
                        <input type="hidden" id="priceVal" name="price" value="null">
                        <input type="hidden" name="news" value="1">
                        <input type="hidden" name="route" value="<?= $_SERVER['REQUEST_URI'] ?>">
                        <input type="hidden" name="brand" value="bookwritingfounders">
				
				    <!-- <input type="hidden" name="company" value="">
				    <input type="hidden" name="budget" value=""> -->
					<div class="row" style="justify-content: center;">
						<div class="col-md-3  p-1">
							<input type="text" style="font-size: 12px;" name="name" placeholder="Your name" class="signUpField" required>
						</div>
						<div class="col-md-2  p-1">
							<input type="text" name="email" style="font-size: 12px;" placeholder="Your email" class="signUpField" required>
						</div>
						<div class="col-md-2  p-1">
							<input type="text" name="phone" style="font-size: 12px;" placeholder="Your phone" class="signUpField" required>
						</div>
						<div class="col-md-2  p-1">
							<input type="text" name="brief" style="font-size: 12px;" placeholder="Brief" class="signUpField" >
						</div>
						<input type="hidden" value="1" name="news">
						<div class="col-md-2  p-1">
							<input type="submit" style="font-weight:bold; text-transform:uppercase;font-size:11px;"  placeholder="Your name" style="font-size: 12px;" class="signUpField btn-primary signUpBtn" >
						</div>	
					</div>
					
					
				</form>
			</div>
		</div>
	</div>
</section>
<section class="section5">
	
	<div class="">
		<div class="myContainer">
			<div class="row rowOfWaitingFor" style="padding-bottom: 50px; padding-top:50px;">
				<div class="col-md-12 text-center ">
					<h4 class="font-popins">Book Writing Founders</h4>
					<div class="manageHr">
						<hr class="hrGreen w-30 ml-auto mr-auto"  style="float: none;">
					</div>
					<div class="clear"></div>
					<div class=" text-center">
						<h1  class="font-popins color-black weHaveHelp">With the help of our authors, we have helped inspire millions out there.</h1>
						<p class="text-black">
							Our diverse pool of immensely talented writers strives to produce fascinating content. We have domain specialists that create attractive and diverse content. We make books that inspire and influence the readers in a unique way.
						</p>
					</div>
				</div>
				
			</div>
			
					
		</div>
		<div class="col-md-12 ">
			<div class="owl-carousel owl-theme owl-books" id="owl-books-eight">
				
						<div class="item">
					<div class="bookItem">
						<img src="img/book_cover/fiction/6.jpg" class="bookImg" alt="Ghostwritten book">
					</div>
				</div>
			<div class="item">
					<div class="bookItem">
						<img src="img/book_cover/fiction/1.jpg" class="bookImg" alt="Ghostwritten book">
					</div>
				</div>
				<div class="item">
					<div class="bookItem">
						<img src="img/book_cover/Auto-biography/4.jpg" class="bookImg" alt="Ghostwritten book">
					</div>
				</div>
				<div class="item">
					<div class="bookItem">
						<img src="img/book_cover/biography/2.jpg" class="bookImg" alt="Ghostwritten book">
					</div>
				</div>
				<div class="item">
					<div class="bookItem">
						<img src="img/book_cover/informative/2.jpg" class="bookImg" alt="Ghostwritten book">
					</div>
				</div>
				<div class="item">
					<div class="bookItem">
						<img src="img/book_cover/Auto-biography/4.jpg" class="bookImg" alt="Ghostwritten book">
					</div>
				</div>
				<div class="item">
					<div class="bookItem">
						<img src="img/book_cover/biography/6.jpg" class="bookImg" alt="Ghostwritten book">
					</div>
				</div>
				<div class="item">
					<div class="bookItem">
						<img src="img/book_cover/Auto-biography/1.jpg" class="bookImg" alt="Ghostwritten book">
					</div>
				</div>
			</div>
		</div>


	
	</div>	
</section>

<section class="section4" id="section4">
	<div class="myContainer">
		<div class="row">
			<div class="col-md-6 align-self-center">
				<img src="img/landing-two/book.jpg" style="width:100%;">
				<div class="owl-carousel owl-theme owl-books" id="owl-books2">
				<div class="item">
					<div class="bookItem">
						<img src="img/landing-two/fiction1 (1).jpg" class="bookImg" alt="Ghostwritten book">
					</div>
				</div>
				<div class="item">
					<div class="bookItem">
						<img src="img/landing-two/fiction1 (2).jpg" class="bookImg" alt="Ghostwritten book">
					</div>
				</div>
				<div class="item">
					<div class="bookItem">
						<img src="img/landing-two/fiction1 (3).jpg" class="bookImg" alt="Ghostwritten book">
					</div>
				</div>
				<div class="item">
					<div class="bookItem">
						<img src="img/landing-two/fiction1 (4).jpg" class="bookImg" alt="Ghostwritten book">
					</div>
				</div>
			</div>
			</div>
			<div class="col-md-6">
				<div class="linksPages">
					<h2 class="theWorldWaiting">The people are waiting to hear what you have to say.</h2>
					<hr class="hrGreen w-50">

					<h4 class="weHaveRec">Our portfolio is the evidence of our creative ability. Immaculate attention to detail and enhancing the quality of your content is what we do best.</h4>

					
					<div class="row">
						<div class="col-6">
							 <p class="linkPage">
								<i class="fa fa-check"></i> Fiction
							</p>
						</div>
						<div class="col-6">
							 <p class="linkPage">
								<i class="fa fa-check"></i> Non-Fiction
							</p>
						</div>
						<div class="col-6">
							 <p class="linkPage">
							<i class="fa fa-check"></i>  Biography
							</p>
						</div>
						<div class="col-6">
							 <p class="linkPage">
								<i class="fa fa-check"></i>  Informative
							</p>
						</div>
						<div class="col-6">
							 <p class="linkPage"> 
							<i class="fa fa-check"></i> Autobiography
							</p>
						</div>
						<div class="col-6">
							 <p class="linkPage">
							<i class="fa fa-check"></i> Memoirs
							</p>
						</div>
						<div class="col-6">
							 <p class="linkPage">
							<i class="fa fa-check"></i>  Action & Adventure
							</p>
						</div>
						<div class="col-6">
							 <p class="linkPage">
							<i class="fa fa-check"></i>  Western
							</p>
						</div>
						<div class="col-6">
							 <p class="linkPage">
								<i class="fa fa-check"></i>  Anthology
							</p>
						</div>
						<div class="col-6">
							 <p class="linkPage">
								<i class="fa fa-check"></i>  Romance
							</p>
						</div>
					</div>
					<div class="text-left mb-5">
					
					<button  class="btn btn-success getStartedHeaderButton"  onclick="window.open('/order/','_self')">Let's Get Started <i class="fa fa-arrow-right"></i></button>
					</div> 	
				</div>
			</div>
		</div>
	</div>
</section>

<section class="section5 section5Two">
	<div class="myContainer">



		<div class="row">
			<div class="my-col-md-5">
				<div class="cardCustom ">
					<img src="img/landing-two/cards/1.png">
					<p>
						Publishing <br>Services
					</p>
				</div>
			</div>
			<div class="my-col-md-5">
				<div class="cardCustom cardRed">
					<img src="img/landing-two/cards/2.png">
					<p>
						Agent <br>Introductions
					</p>
				</div>
			</div>
			<div class="my-col-md-5">
				<div class="cardCustom ">
					<img src="img/landing-two/cards/3.png">
					<p>
						Marketing Strategy <br>Development
					</p>
				</div>
			</div>
			<div class="my-col-md-5">
				<div class="cardCustom cardRed">
					<img src="img/landing-two/cards/4.png">
					<p>
						Website & SEO <br>Optimization
					</p>
				</div>
			</div>
			<div class="my-col-md-5">
				<div class="cardCustom ">
					<img src="img/landing-two/cards/5.png">
					<p>
						Book Proposals & <br>Queries
					</p>
				</div>
			</div>
			<div class="my-col-md-5">
				<div class="cardCustom cardRed">
					<img src="img/landing-two/cards/6.png">
					<p>
						Branding <br>your Book
					</p>
				</div>
			</div>
			<div class="my-col-md-5">
				<div class="cardCustom ">
					<img src="img/landing-two/cards/7.png">
					<p>
						Book <br>Editing
					</p>
				</div>
			</div>
			<div class="my-col-md-5 cardRed">
				<div class="cardCustom ">
					<img src="img/landing-two/cards/8.png">
					<p>
						Bookwriting <br>Services
					</p>
				</div>
			</div>
			<div class="my-col-md-5">
				<div class="cardCustom ">
					<img src="img/landing-two/cards/9.png">
					<p>
						Proofreading <br>Content
					</p>
				</div>
			</div>
			<div class="my-col-md-5 cardRed">
				<div class="cardCustom ">
					<img src="img/landing-two/cards/10.png">
					<p>
						Writing Research <br>Articles
					</p>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="section6">
	<div class="myContainer">
		<div class="row">
			<div class="col-lg-5 col-md-12">
				<img src="img/landing-two/dog-cover.png" width="100%">
			</div>
			 <div class="col-lg-7 col-md-12">
			 	<h1>We'll help you become the next bestseller.</h1>
				<h4 class="font-poppins" style="color:#c6ff00; font-size:22px;">
					Get your best seller at 50% Off
				</h4>
				<h2 class="callNow text-white">Contact Us Now!</h2>
				<h3>
					<a href="tel:+1-888-976-8388" style="font-family:'poppins'" class="colorWhite no-dec">+1-888-976-8388</a>
				</h3>
				<button  class="btn btn-success getStartedHeaderButton mt-5 liveChat"  >You need an expert <i class="fa fa-arrow-right"></i></button>
			 </div>
		</div>
	</div>
</section>
<section class="section5Slider">
	
	<div class="">
		<div class="myContainer">
			<div class="row rowOfWaitingFor">
				<div class="col-md-6">
					<h4>Waiting for your book writing <br>dreams to come true?</h4>
					<div class="manageHr">
						<hr class="hrGreen w-30" >
					</div>
					<div class="manageContentWithHr">
						<h2>Our satisfied<br>
						clientele is a <br> testament to <br>our
						dedication.</h2>
					</div>
				</div>
				<div class="col-md-6">
					<div class="owl-carousel owl-theme owl-Green" id="owl-two">
						<div class="item">
							<div class="myWhiteDiv iUtilize">
								<div class="imgGoalHai">
									
								</div>
								<br>
								<p class="quote">
									“I am super glad that I hired their Bookwriting Services! They maintained a high level of professionalism all the time and provided me what I was looking for. I liked them because they kept me updated about my story development and kept coming back for confirmation if I wanted a specific part to be included in the book.”
								</p>
									
									<br>
									<h4 class="colorWhite">Laura S. Golden</h4>
									<p class="authorP">Author</p>
							
							</div>
						</div>
						<div class="item">
							<div class="myWhiteDiv iUtilize">
								<div class="imgGoalHai">
									
								</div>
								<br>
								<p class="quote">
									“Working with Book Writing Founders was a great experience. I am happy that I choose their services for my business book writing. They delivered what they promised me. I was reluctant initially, but after seeing their portfolio, I was satisfied that my book was in safe hands. ”
								</p>
									
									<br>
									<h4 class="colorWhite">Victor M. Metz</h4>
									<p>Author</p>
							
							</div>
						</div>
						<div class="item">
							<div class="myWhiteDiv iUtilize">
								<div class="imgGoalHai">
									
								</div>
								<br>
								<p class="quote">
									“I wanted help in writing children's books for my students. Even though I already had options to choose from pre-written texts that I could use as classroom material, I wanted a customized story with my prompt, and that idea was exciting for me. I came across their services, and being new to children's book writing.”
								</p>
									
									<br>
									<h4 class="colorWhite">Heather J. Cullen</h4>
									<p>Author</p>
							
							</div>
						</div>
					</div>
					

				</div>
			</div>
		</div>
	</div>	
</section>


<section class="section8" style="padding: 0;">
    <!-- <h3 class="section8Heading">We are working on</h3> -->
	<div class="container-fluid socialImg">
		<div class="row">
			<div class="col-1">
				
			</div>
			<div class="col-2">
				<img src="img/landing-two/social/1.png" width="100%" alt="Google books icon">
			</div>
			<div class="col-2">
				<img src="img/landing-two/social/2.png" width="100%" alt="amazon books image">
			</div>
			<div class="col-2">
				<img src="img/landing-two/social/3.png" width="100%" alt="alibris books image">
			</div>
			<div class="col-2">
				<img src="img/landing-two/social/4.png" width="100%" alt="ingram image">
			</div>
			<div class="col-2">
				<img src="img/landing-two/social/5.png" width="100%" alt="barnes and noble image">
			</div>
			<div class="col-1">
				
			</div>
		</div>
	</div>
</section>



<footer>
	<div class="myContainer">
		<div class="row">
			<div class="col-lg-5 col-md-12">
				<img width="40%" src="assets/images/white-logo.gif">
				<p class="mt-4">
					
				Bookwriting Founders promises to be a top-tier customer service experience for you, ensuring that the content we provide is of the highest quality. We help aspiring storytellers tell their stories, using our publications as a means to express their ideas. Our team of skilled professionals include the best editing services you can ask for. 




				</p>
			</div>
			<div class="col-lg-3 col-md-6">
				<div class="contactFooterSerction">
					<p class="text-white">Contact us Now</p>

					 <a href="tel:+1-888-976-8388" style="font-size: 12px;" class="footerAnc">+1-888-976-8388</a>
			<br>		<a href="mailto:query@bookwritingfounders.com" style="font-size: 12px;" class="footerAnc">query@bookwritingfounders.com</a>
<br><br>		<a href="#" style="font-size: 12px;cursor:text" class="footerAnc">4803 N Milwaukee Ave Suite B Unit #226 Chicago, IL 60630</a>
<br><br>				
</div>

			</div>
           
            <div class="col-lg-3 col-md-6">
				<form method='POST' action='/leads/'  >
                <input type="hidden" id="tag" name="tag" value="footer-top">
                        <input type="hidden" id="priceVal" name="price" value="null">
                        <input type="hidden" name="news" value="1">
                        <input type="hidden" name="route" value="<?= $_SERVER['REQUEST_URI'] ?>">
                        <input type="hidden" name="name" value="null-footer-subscribe">
                        <input type="hidden" name="phone" value="null-footer-subscribe">
                        <input type="hidden" name="brief" value="null-footer-subscribe">
			      <h3 class="footerNavHeading mb-3">Stay in touch</h3>
			      <div class=" rowOfTextNdBtn">
			      	<div class="col-xs-8 p-0">
			      		<input required type="email" placeholder="enter your email address" class="form-control" name="email">
			      	</div>
			      	<div class="col-xs-4 p-0">
			      		<button class="btn btnGreen">Subscribe</button>
			      	</div>
			      </div>
				</form>
				<br>
				<div class="social d-none">
					<a href="#" class="fa fa-facebook"></a>
					<a href="#" class="fa fa-twitter"></a>
					<a href="#" class="fa fa-instagram"></a>
				</div>
				
			</div>
		        
			
			
		</div>
		
			
		<hr class="breakerForCopy">
		<div class="copyRights">

			
			<p style="text-align:left;" class="copyRightsPara">
			   
				© <?php echo date('Y');?>, <a href="/">Bookwriting Founders</a> | All Rights Reserved
			
			    <span style="float:right;" class="termsAndCon">
			      <a href="javascript:void(0)" data-toggle="modal" data-target="#modalForPrivacy">Privacy Policy</a> | <a href="javascript:void(0)" data-toggle="modal" data-target="#modalFOrTerms">Terms & Conditions</a>
			    </span>
			</p>
		</div>
	</div>
</footer>

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/sweetalert.min.js"></script>
<script src="js/typed.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script>

<script >
	$("#btnNav").click(function(){
		var nav = $(".navMobile"); 
		$('.navMobile').toggle();
	})
	
</script>
<script >


</script>
<script >



	$('#owl-two').owlCarousel({
	    loop:true,
	    margin:10,
	    nav:false,
		autoplay: true,
        autoPlaySpeed: 1000,
        autoPlayTimeout: 1000,
        autoplayHoverPause: true,
	    dots: false,
	    responsive:{
	        0:{
	            items:1
	        },
	        600:{
	            items:1
	        },
	        1000:{
	            items:1
	        }
	    }
	});	
	$('#owl-books').owlCarousel({
	    loop:true,
	    margin:10,
	    nav:false,
	    dots: false,
		autoplay: true,
        autoPlaySpeed: 1000,
        autoPlayTimeout: 1000,
        autoplayHoverPause: true,
	    responsive:{
	        0:{
	            items:2
	        },
	        600:{
	            items:2
	        },
	        1000:{
	            items:4
	        }
	    }
	});
	$('#owl-two').owlCarousel({
	    loop:true,
	    margin:10,
	    nav:true,
		autoplay: true,
        autoPlaySpeed: 1000,
        autoPlayTimeout: 1000,
        autoplayHoverPause: true,
	    dots: false,
	    navText:[`<div class="goal-daba">
			<i class="fa fa-long-arrow-left"></i>
		</div>`,`<div class="goal-daba">
			<i class="fa fa-long-arrow-right"></i>
		</div>`],
	    responsive:{
	        0:{
	            items:1
	        },
	        600:{
	            items:1
	        },
	        1000:{
	            items:1
	        }
	    }
	});
	$('#owl-books-eight').owlCarousel({
	    loop:true,
	    margin:10,
	    nav:false,
		autoplay: true,
        autoPlaySpeed: 1000,
        autoPlayTimeout: 1000,
        autoplayHoverPause: true,
	    dots: false,
		slideTransition: 'linear',
	    responsive:{
	        0:{
	            items:2
	        },
	        600:{
	            items:4
	        },
	        1000:{
	            items:8
	        }
	    }
	});	

	$(document).on('click','.liveChat',function(){
	$zopim.livechat.window.show();

});

</script>


<?php

    if(isset($_GET['successMsg'])){
        echo "<script>swal('Done','".$_GET['successMsg']."','success')</script>";
    }else if(isset($_GET['errorMsg'])){
    	 echo "<script>swal('Error','".$_GET['errorMsg']."','warning')</script>";
    }

?>


<script type="application/ld+json">{"@context":"https://schema.org","@type":"Organization","name":"bookwritingfounders","url":"/","logo":"/img/logo.png","contactPoint":{"@type":"ContactPoint","telephone":"+1 800 513 1678","contactType":"customer service"},"sameAs":["https://www.facebook.com/bookwritingfounders","https://twitter.com/bookwritingfounders","https://www.instagram.com/bookwritingfounders","https://www.youtube.com/channel/UC-xU--XxSovzJq07jwmZrsw","https://www.pinterest.com/bookwritingfounders"]}</script>
<script type="application/ld+json">{"@context":"https://schema.org","@type":"SiteNavigationElement","hasPart":[{"@context":"https://schema.org","@type":"WebPage","url":"/editing"},{"@context":"https://schema.org","@type":"WebPage","url":"/publishing"},{"@context":"https://schema.org","@type":"WebPage","url":"/pricing"},{"@context":"https://schema.org","@type":"WebPage","url":"/blog"},{"@context":"https://schema.org","@type":"WebPage","url":"/contact-us"}]}</script>
   
   <!--bradcrumbs-->
<script type="application/ld+json">{"@context":"https://schema.org","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":0,"name":"Home","item":"/"},{"@type":"ListItem","position":1,"name":"bookwritingfounders"}]}</script>   

<!--reviews-->
<script type="application/ld+json">{"@context":"https://schema.org","@type":"Review","reviewBody":"Great Experience. I have created several national brands in the past at great expense and effort. This was effortless, fast, fun and inexpensive. I highly recommend it. Will change how this is done in the future!","itemReviewed":{"@type":"Product","@id":"/editing"},"reviewRating":{"@type":"Rating","ratingValue":5,"bestRating":"5","worstRating":"0"},"author":{"@type":"Person","name":"bruce.bond"},"publisher":{"@type":"Organization","name":"99designs","sameAs":"https://99designs.com"}}</script>


<!--modal that will show after some time	-->


<div class="modal fade-in" id="modalForDiscount" tabindex="-1" role="dialog" aria-labelledby="modalForDiscount" aria-hidden="true">
		<div class="modal-dialog modal-lg modalDetailsLG" role="document">
			<div class="container-fluid">
			    <div class="modal-content container-fluid">
			    	<div class="">
						<div class="row">
						    <!--<a type="button" class="modalClose" data-dismiss="modal" style="text-align: right;"><i class="fa fa-times"></i></a>-->
							<button type="button" class="close modalClose" data-dismiss="modal">&times;</button>
						    
							<div class="col-lg-6 col-md-12 mbl-none p-0">
								
							</div>
							<div class="col-lg-6 col-md-12 col-sm-12 col-12">
								<div class="modalDetailsOf">
									<div class="row modalDetailsOfRow">
										<h1>Sale Upto 50% Off  </h1><hr class="hrModal">
										
									</div>
									<p class="colorGray mb-0"> Providing you the perfect solution for your business needs. Let's work together and unlock doors to success.</p>
									<form action="/leads/" method="POST">
									<input type="hidden" id="tag" name="tag" value="footer-top">
									<input type="hidden" id="priceVal" name="price" value="null">
									<input type="hidden" name="news" value="1">
									<input type="hidden" name="route" value="<?= $_SERVER['REQUEST_URI'] ?>">
									<input type="hidden" name="brand" value="bookwritingfounders">
										<input type="hidden" id="priceVal" name="price">
										<div class="row">
											<div class="col-md-6">
												<input required type="text" name="name" class="form-control" placeholder="Your Name">
												<input required type="email" name="email" class="form-control" placeholder="Your Email">
												<input required type="tel" name="phone" id="phone" class="form-control" placeholder="Your Phone">
												<input type="hidden" name="route" value="landingpage">    
												<input type="hidden" name="brand" value="bookwritingfounders">

											</div>
										<div class="col-md-6 " style="padding-left: 0;">
											<textarea name="brief" class="form-control"  style="" placeholder="To help us understand better, enter a brief description of your project."></textarea>
										</div>
										</div>
										
											<label class="containerCheckBox">
											<input type="checkbox" checked="checked" name="news" style="visibility:hidden;position:absolute">
											<span style="background-color: black;color: aliceblue;">Signup to avail amazing discounts.<br> Upto <strong>50% discount</strong> on all plans.</span>
											</label>
											<input type="hidden" name="set" value="true">
											<div class="text-center">
												<button class="btn btn-info btn-theme">Submit Now</button>
											</div>
										
									</form>
								</div>
							</div>
						</div>
					</div>

			    </div>
			</div>
		</div>
	</div>	 
	<div  title="Opens a widget where you can chat to one of our agents" style="width: 100px; height: 100px; padding: 0px; margin: 10px 20px; position: fixed; bottom: 0; left:20px; overflow: visible; opacity: 1; border: 0px none; z-index: 999998; transition-duration: 250ms; transition-timing-function: cubic-bezier(0.645, 0.045, 0.355, 1); transition-property: opacity, top, bottom; left: 0px;"><a alt="Live Chat Book Writing Founders" href="https://wa.me/18889768388?text=" target="blank" title="Book Writing Founders" style=" padding:10px 20px; display:inline-block;border-radius: 25px;"><img width="70" src="img/landing-two/wp.png" /></a></div>


<div class="modal fade-in" id="modalFOrTerms" tabindex="-1" role="dialog" aria-labelledby="modalFOrTerms" aria-hidden="true">
		<div class="modal-dialog modal-lg " role="document">
			<div class="container-fluid">
			    <div class="modal-content container-fluid">
			    	<div class="">
						<div class="row">
						    <!--<a type="button" class="modalClose" data-dismiss="modal" style="text-align: right;"><i class="fa fa-times"></i></a>-->
							<button type="button" class="close modalClose" data-dismiss="modal">&times;</button>
						    
							<div class="">
								<div class="modalDetailsOf modalTerms">
									<div class=" modalDetailsOfRow">
										<h1>Our terms and condition  </h1>

										<hr class="hrModal" style="float: none">
										
									</div>
									<p>
									The use of this Website and/or the services we offer legislates your agreement to the following terms and conditions:
									</p>
									<ol>
									<li> you don't accept any of these terms and conditions, please do not use this Website or the services we offer.
									</li>
									<li> If you're under the lawful age of consent for your respective district, you cannot access or use Bookwriting Founders or the services we offer.
									</li>
									<li>You acknowledge and agree to the statement that you must be of the lawful age to consent to avail of any of our services or products on this Website or otherwise.
									</li>
									<li> submitting an order and/or payment, you acknowledge that you have read and understood these terms and conditions. You acknowledge and accept that you are legally bound by these terms and conditions, which form the entire agreement between You and bookwritingfounders.com.
									</li>
									</ol>

									<b>DEFINITION OF TERMS</b>
									<p>"Website" means all online content on bookwritingfounders.com web pages.
									  </p>
									  <p>"Customer," "You," or "Yours" relates to you and/or any other individual submitting an order to bookwritingfounders.com on your part.
									  </p>
									  <p>"Company," "We," or "Our" means & refers to bookwritingfounders.com, a company/organization registered under the laws of the State.
									  </p>
									  <p> "Product or Services" means and represents all services and products provided by bookwritingfounders.com to customers following their order.
									  </p>
									  <p>
									  "Order" means an order via phone and/or e-mail made by a customer to purchase services or products provided by bookwritingfounders.com. Down payments confirm orders via cheque, credit card, cash-receipt, wire transfer, including the use of any other payment method.
									  </p>
									 
									 <b> OUR SERVICES </b>
									<p> submitting the payment and/ or order, you are buying the product for Your use only. All Products are drafted by our in-house writers, who transferred all rights and ownership to the Company. All goods are non-refundable and come with no guarantees, expressed or hinted. Your solemn duty is to read these Terms & Conditions before submitting any Order and/ or payment to Bookwriting Founders.
									</p>
									<b>REFUND POLICY</b>
									<p> is important that you carefully read & understand our refund policy to fully know the privileges and limitations governed by the Bookwriting Founders Policy. We offer refunds in special cases and specified conditions only, detailed as under:
									</p>
									<b>  CHANGE OF MIND: </b>
									<p>
									The customer is due to a 100% refund before our writers/ editors start your project.
									If (for any reason) you have a change of mind and decide not to continue your project with us after your order has been placed, you can ask for a refund within one hour of your order being placed. A 15% processing fee will be deducted in other cases.
									</p>
									<b> INCOMPETENT DELIVERY: </b>
									<p>Once the work is delivered, clients are only qualified to claim a refund once they have exhausted all the options detailed as under;
									</p>
									<ol>
									<li> If it is not in direct accordance with project requirements (as requested/ documented by the customer).
									</li>
									<li>We are devoted to provide our customers with 100% satisfaction and offer unlimited amendments to ensure that the shipment is up to the mark. We assign, re-assign, and re-write your project to ascertain complete satisfaction. Reserve FREE Pages for the future, but of the same value, and you can avail them at any time. If we're still not able to produce what you asked for, a refund will be concocted with mutual agreement on a pre-decided percentage (but only in the cases where the delivery is completely off the mark)
									</li>
									</ol>
									<b> LATE DELIVERY: </b>
									<p> We believe in "On-Time Delivery," but if for any reason we fail to present the asked service on time, after at least three attempts to contact us, your refund will be prepared once it is established through documentary evidence that the late delivery was Bookwriting Founders's fault.
									</p>
									<b>REFUND TIME FRAME:</b>
									<p>A refund must be demanded within 120 days of dispatch. Refunds claimed that after the allotted time frame will not be deemed worthy.
									All the customers must acknowledge the due date for asking for a refund when the order is placed.
									</p>
									<b>CASES WHERE REFUND WILL NOT BE ISSUED:</b>
									<ol>
									<li>
									In case of late delivery due to some minor mechanical errors, such as analytic, typing, word count, missing sources, etc., refunds will be processed with mutual understanding. Bookwriting Founders will only settle with partial refunds or discounts reserved for future purchases.
									</li>
									<li>Company will not be responsible for any delay from the client's end.
									</li>
									<li> No refund will be issued based on the low of writing.
									</li>
									
								</div>
							</div>
						</div>
					</div>

			    </div>
			</div>
		</div>
</div>
<div class="modal fade-in" id="modalForPrivacy" tabindex="-1" role="dialog" aria-labelledby="modalForPrivacy" aria-hidden="true">
		<div class="modal-dialog modal-lg " role="document">
			<div class="container-fluid">
			    <div class="modal-content container-fluid">
			    	<div class="">
						<div class="row">
						    <!--<a type="button" class="modalClose" data-dismiss="modal" style="text-align: right;"><i class="fa fa-times"></i></a>-->
							<button type="button" class="close modalClose" data-dismiss="modal">&times;</button>
						    
							<div class="">
								<div class="modalDetailsOf modalTerms">
									<div class=" modalDetailsOfRow">
										<h1>Our Privacy and Policy  </h1>

										<hr class="hrModal" style="float: none">
										
									</div>
									
										<p>
										  This notice discloses the privacy practices for bookwritingfounders.com. Therefore, this privacy notice applies only to information collected from this site. It will inform you of the following:
										  </p>
										<ol>
										<li>What personally identifiable info we collect from you through the website, how we use it, and with whom it may be shared.
										  </li>
										  <li>The options that are presented to you concerning the use of your data. It will inform you about all the security procedures in place to protect from any misusage of your information.
										  </li> 
										  <li>How you can correct any errors or blunders in the information. Also, information collection, its use, and sharing.
										  </li>
										  <li>Confidentiality of the services you are undertaking.
										  </li>
										  <li>Originality of content, making it plagiarism free.
										  </li>
										</ol>
										<p>
										We are the sole caretakers of the info collected on this website. We merely have access to information that you voluntarily give us via email or another direct contact from you. We will never lease or sell this information to any third-party.
										</p>
										<h4>
										YOUR ACCESS TO / CONTROL OVER YOUR INFORMATION
										</h4>
										<p>
										You can discontinue contacting us in the future. Moreover, you proceed with any of the following actions at any time by contacting us via our phone number or the email address provided on our website:
										  </p>
										  <ol>
										<li>
										TO VIEW WHAT DATA WE HAVE ON YOU, IF ANY.
										  </li>
										<li>CORRECT/ CHANGE ANY DATA WE HAVE ON YOU.
										  </li>
										  <li>
										  ASK US TO ERASE ANY INFORMATION THAT WE HAVE ON YOU. 
										  </li>
										  <li>
										  EXPRESS ANY DOUBTS THAT YOU MAY HAVE ABOUT OUR USAGE OF YOUR DATA.
										  </li>
										  </ol>

										<b>SECURITY</b>
										<p> protect your info offline. Only our contractors and employees who need the information to perform a specific job (for example, the services ordered or billing) are granted personally identifiable information. The servers or computers used to store personally identifiable information are kept in a protected environment. There are absolutely no chances of any leak in the confidential information.
										</p>

										<b>PAYMENT </b>
										<p> the purpose of processing your order, we might need to collect personal information about you, such as your billing address, phone number, name, and email address. The credit card info is only handled by our third-party creditcard provider. Any additional relevant information will be provided to our customer then and there.
										</p>

										<b>COOKIES AND IP ADDRESS</b>
										<p> data such as your IP address is automatically documented when you enter our website. This data is used only to analyze server problems and website administration. Cookies on this website are used to enhance user-experience and for collecting usage statistics.
										</p>

										<b> ABOUT OUR SERVICES AND PRODUCTS </b>
										<p> make all effort to be as precise as possible in describing the services and products offered on bookwritingfounders.com. We do not guarantee that the service descriptions or any other content on this website are accurate, reliable, complete, current, or free of error. Please email or call us immediately if you feel that the service you received from us differs from this website's descriptions. If you feel that we are not abiding by this privacy policy, you should contact us immediately via email at info@bookwritingfounders.com or contact us via telephone. Our customer support team will resolve your query as soon as possible.
										</p>

										<b> AND CONFIDENTIALITY </b>
										<p> various writing services require sales or recognition incentives, our service is one hundred percent confidential. All communication and content reviewed or developed for the purpose of working together will never be disclosed to any other party under any circumstances. We reserve no rights to the services and products that we provide you. Everything we write or edit is considered the sole property of the client. If you come under our contact, you will only be recognized as the author and / or owner of your manuscript/material.
										</p>

										<b>ORIGINALITY</b>
										<p> ghostwrite all original content for a customer that is free of plagiarism and not copied from any other source. All info submitted to a client that is inspired or researched from any other source will be rephrased and properly cited to ensure the material's originality, authenticity, and reliability.
										</p>

									
								</div>
							</div>
						</div>
					</div>

			    </div>
			</div>
		</div>
</div>
<script >
    $('.mobile-nav-btn').click(function() {
        $('.mobile-nav-btn, .mobile-nav, .app-container').toggleClass('active');
    });
	$(".clickbutton").click(function(){
       $('.floatbutton').toggleClass("active");
       $('.crossplus').toggleClass("rotate");
    });


$('.liveChat').click(function(){
	$zopim.livechat.window.toggle();
});
</script>

<?php

if(isset($_SESSION['successMsg']) and $_SESSION['successMsg']==true){

	echo "<script>swal('Thank you for your query! We will be contacting you shortly.')</script>";
	unset($_SESSION['successMsg']);
}


?>
	</body>
</html>
