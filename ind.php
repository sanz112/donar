<?php 
session_start();
?>
<!doctype html>
<html lang="en">

<!-- Mirrored from corporx.themetags.com/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 21 Aug 2020 15:19:44 GMT -->

<!-- Mirrored from www.ICONSMS.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 23 Oct 2020 12:18:38 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="theme-color" content="#0C359D ">

    <link rel="apple-touch-icon" sizes="180x180" href="static/img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="static/img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="static/img/favicon-16x16.png">
    <link rel="manifest" href="static/img/site.html">

    <!--title-->
    <title>ICONSMS</title>

    <!--favicon icon-->
    <link rel="icon" href="static/styling/img/favicon.png" type="image/png" sizes="16x16">

    <!--google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700%7COpen+Sans:400,600&amp;display=swap" rel="stylesheet">

    <!--Bootstrap css-->
	 <link href="static/styling/js/remixicon/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="static/styling/css/bootstrap.min.css">
	 <link rel="stylesheet" href="../cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--Magnific popup css-->
    <link rel="stylesheet" href="static/styling/css/magnific-popup.css">
    <!--Themify icon css-->
    <link rel="stylesheet" href="static/styling/css/themify-icons.css">
    <!--Fontawesome icon css-->
    <link rel="stylesheet" href="static/styling/css/all.min.css">
    <!--animated css-->
    <link rel="stylesheet" href="static/styling/css/animate.min.css">
    <!--ytplayer css-->
    <link rel="stylesheet" href="static/styling/css/jquery.mb.YTPlayer.min.css">
    <!--Owl carousel css-->
    <link rel="stylesheet" href="static/styling/css/owl.carousel.min.css">
    <link rel="stylesheet" href="static/styling/css/owl.theme.default.min.css">
    <!--custom css-->
    <link rel="stylesheet" href="static/styling/css/style.css">
    <!--responsive css-->
    <link rel="stylesheet" href="static/styling/css/responsive.css">

</head>
<body>
<meta name="theme-color" content="#1A2C79">



<!--header section start-->
<header class="header">
    <!--start navbar-->
    <nav class="navbar navbar-expand-lg fixed-top bg-transparent">
        <div class="container">
            <a class="navbar-brand" href="#!">
               <h3 style="color: white;">ICONSMS</h3>
		   </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="ti-menu"></span>
            </button>
            <div class="collapse navbar-collapse h-auto" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto menu">
                    <li><a href="iconsmsdetails/iconsms/dashboard"> DashBoard </a></li>
                    <li><a  href="#about">About Us</a></li>
                    <li><a  href="#services">Our Services</a></li>
                    <li><a  href="#contact">Contact Us</a></li>
                    <?php if(!isset($_SESSION["userSmsId"])): ?> 
                    <li><a  href="iconsmsdetails/register">Register</a></li>
                    <li><a  href="iconsmsdetails/login.php">Login</a></li>
                    <?php else: ?> 
                     <li><a  href="iconsmsdetails/logout.php">Logout</a></li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>
</header>
<!--header section end-->

<!--body content wrap start-->
<div class="main">

    <!--hero section start-->
    <section class="hero-equal-height pt-165 pb-100 gradient-overly-right-color" style="background: url('static/styling/img/hero-bg5.jpg')no-repeat center center / cover">
        <div class="container">
            <div class="row">
                <div class="owl-carousel owl-theme hero-content-slider custom-dot custom-dot-2">
                    <div class="item">
                        <div class="col-md-8 col-lg-7 col-12">
                            <div class="hero-content-wrap text-white">
                                <span class="text-uppercase">Welcome to ICONSMS</span>
                                <h1 class="text-white">Home Of <p>Cheap Data</p> Plans </h1>

                                <div class="action-btns mt-4">
                                    <a href="iconsmsdetails/register" class="btn secondary-solid-btn mr-3">Register <i class="fa fa-plus"></i></a>
                                    <?php if(!isset($_SESSION["userSmsId"])): ?> 
                                 <a href="iconsmsdetails/login" class="btn outline-white-btn">Login <i class="fa fa-unlock"></i></a>
                                    <?php else: ?>
                                    <a href="iconsmsdetails/logout.php" class="btn outline-white-btn">Logout <i class="fa fa-unlock"></i></a>
                                    <?php endif; ?>   
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="col-md-8 col-lg-7 col-12">
                            <div class="hero-content-wrap text-white position-relative z-index">
                                <span class="text-uppercase">Welcome to ICONSMS</span>
                                <h1 class="text-white">Best Selling <p>VTU Platform</h1>

                                <div class="action-btns mt-3">
                                    <a href="iconsmsdetails/register" class="btn secondary-solid-btn">Register <i class="fa fa-plus"></i></a>
                                    <?php if(!isset($_SESSION["userSmsId"])): ?> 
                                 <a href="iconsmsdetails/login" class="btn outline-white-btn">Login <i class="fa fa-unlock"></i></a>
                                    <?php else: ?>
                                    <a href="iconsmsdetails/logout.php" class="btn outline-white-btn">Logout <i class="fa fa-unlock"></i></a>
                                    <?php endif; ?> 
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="col-md-8 col-lg-7 col-12">
                            <div class="hero-content-wrap text-white">
                                <span class="text-uppercase">better solutions for</span>
                                <h1 class="text-white">Automated<p> VTU Business</h1>
                                 <div class="action-btns mt-4">
                                    <a href="iconsmsdetails/register" class="btn secondary-solid-btn mr-3">Register <i class="fa fa-plus"></i></a>
                                    <?php if(!isset($_SESSION["userSmsId"])): ?> 
                                 <a href="iconsmsdetails/login" class="btn outline-white-btn">Login <i class="fa fa-unlock"></i></a>
                                    <?php else: ?>
                                    <a href="iconsmsdetails/logout.php" class="btn outline-white-btn">Logout <i class="fa fa-unlock"></i></a>
                                    <?php endif; ?> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--hero section end-->

    <!--about us section start-->
    <section class="about-us-section ptb-100" id="about">
        <div class="container">
            <div class="row justify-content-around">
                <div class="col-md-12 col-lg-6">
                    <div class="about-img-wrap">
                        <img src="../www.mazidata.com.ng/static/assetshome/img/hero-img.png" >
                        <div class="card-img-overlay text-center">

						</div>
                    </div>
                </div>

                <div class="col-md-12 col-lg-5">
                    <div class="about-content-right mb-md-4 mb-lg-0">
                        <h2>About Us</h2>
                        <p>This is a telecommunication industry playing a major role in distribution, selling affordable and most cheapest data, airtime, Dstv subscription, Gotv subscription, Startimes subscription, Convert Airtime to Cash and Electricity subscription</p>

						<div class="feature-tabs-wrap">
                            <ul class="nav nav-tabs mb-3 border-bottom-0 feature-tabs" data-tabs="tabs">
                                <li class="nav-item">
                                    <a class="nav-link d-flex align-items-center active" href="#feature-tab-1"
                                       data-toggle="tab">
                                        <h6 class="mb-0">Our Beliefs</h6>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link d-flex align-items-center" href="#feature-tab-2"
                                       data-toggle="tab">
                                        <h6 class="mb-0">Our Mission</h6>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link d-flex align-items-center" href="#feature-tab-3"
                                       data-toggle="tab">
                                        <h6 class="mb-0">Our Vision</h6>
                                    </a>
                                </li>
                            </ul>
                            <div class="tab-content feature-tab-content">
                                <div class="tab-pane active" id="feature-tab-1">
                                    <p>At ICONSMS: Customer first. Therefore, we consistently seek avenues to make our partners and customers enjoy affordable and excellent delivery service at their comfort zone.</p>


                                </div>
                                <div class="tab-pane" id="feature-tab-2">
                                    <p>To be an excellent service provider in the telecommunication industry. We seek avenues to add value to our customers and the entire Nigeria.</p>

								</div>
                                <div class="tab-pane" id="feature-tab-3">
                                    <p>To build a world class innovative organization that offers affordable and consistent excellent service delivery that meet vast Nigerian needs.</p>


								</div>
                            </div>
                        </div>

                        <center>
                          <a href="https://play.google.com/store/apps/details?id=ICONSMS.com" ><img src="../play.google.com/intl/en_us/badges/static/images/badges/en_badge_web_generic.png" height="150px" width="200px"></a>
                        </center>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--about us section end-->

    <!--feature section start-->
    <section class="feature-content-two ptb-100 gray-light-bg" id="services">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="section-heading text-center mb-5">
                        <h2>Our Services</h2>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="feature-feature-list p-4 text-center">
                        <div class="picture"></div>
						<img src="static/styling/img/buy-airtime.svg"/>
                        <h5 class="mb-2">Airtime TopUp</h5>
                        <p>Making an online recharge has become very easy and safe on ICONSMS</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="feature-feature-list p-4 text-center">
                        <div class="picture"></div>
						<img src="static/styling/img/buy-data.svg"/>
					   <h5 class="mb-2">Buy Data</h5>
                        <p>Start enjoying this very low rates Data plan for your internet browsing databundle.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="feature-feature-list p-4 text-center">
                      <div class="picture"></div>
						<img src="static/styling/img/electricity.svg"/>
						<h5 class="mb-2">Utility Payment</h5>
                        <p>Because we understand your needs, we have made bills and utilities payment more convenient.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="feature-feature-list p-4 text-center">
                        <div class="picture"></div>
						<img src="static/styling/img/pay-cabletv.svg"/>
						<h5 class="mb-2">Cable Subscription</h5>
                        <p>Instantly Activate Cable subscription with favourable discount compare to others .</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="feature-feature-list p-4 text-center">
                       <div class="picture"></div>
						<img src="static/styling/img/recharge-all.svg"/>
					   <h5 class="mb-2">Airtime To Cash</h5>
                        <p>We offer this service at a very good attractive rate please login to get current conversion rate..</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="feature-feature-list p-4 text-center">
                       <div class="picture"></div>
						<img src="static/styling/img/pay-bills.svg"/>
						<h5 class="mb-2">Bulk SMS</h5>
                        <p>Send BulkSMS to any number for as low as just 2.5kobo per unit.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="feature-feature-list p-4 text-center">
                       <div class="picture"></div>
						<img src="../grayspeaktherapy.com/wp-content/uploads/2018/12/Speech-Education-icon.png" style = "height: 175px; margin-bottom: 20px;">
						<h5 class="mb-2">Result Checkers</h5>
                        <p>WAEC/JAMB/NECO E-pins.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--feature section end-->

    <!--counter section start-->
    <section class="call-to-action ptb-100 gradient-overlay"
             style="background: url('static/styling/img/about-img.jpg')no-repeat top center / cover fixed">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-8">
                    <div class="call-to-action-content text-white text-center mb-4">
                        <h2 class="text-white mb-1">FACTS</h2>
                        <p class="lead">Facts never lie!...we've grown over the years with customers increasing on a daily basis .</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-3">
                    <div class="single-counter rounded p-4 text-center text-white">
                        <span class="ti-medall-alt icon-md"></span>
                        <h3 class="mb-0 text-white">1600</h3>
                        <p>Active users</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="single-counter rounded p-4 text-center text-white">
                        <SPAN>&#128522 </SPAN>
                        <h3 class="mb-0 text-white">2500</h3>
                        <p>Happy clients</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="single-counter rounded p-4 text-center text-white">
                        <span><i class="fa fa-calendar"></i></span>
                        <h3 class="mb-0 text-white">3</h3>
                        <p>Years Of Experience</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="single-counter rounded p-4 text-center text-white">
                        <span class="ti-user icon-md"></span>
                        <h3 class="mb-0 text-white">2150</h3>
                        <p>Clients satisfaction</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--counter section end-->

    <!--our work process section start-->
    <section class="work-process-new pt-100 gray-light-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="">
                    <div class="section-heading mb-5">
                        <h2 class="text-center">WHY CHOOSE US?</h2>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="work-process-wrap">
                        <div class="single-work-process">
                            <div class="work-process-icon-wrap primary-bg rounded-circle">
                              <i class="fa fa-check-double fa-3x" style="color: white"></i>
                                <span class="process-step white-bg color-primary shadow-sm">1</span>
                            </div>
                            <div class="work-process-content mt-4">
                                <h5>We are Automated</h5>
                                <p>We use cutting-edge technology to run our services. Our data delivery and wallet funding is automated, airtime top-up and data purchase are automated and get delivered to you almost instantly. </p>
                            </div>
                        </div>
                        <div class="single-work-process">
                            <div class="work-process-icon-wrap primary-bg rounded-circle">
                                 <i class="fa fa-check-double fa-3x" style="color: white"></i>
                                <span class="process-step white-bg color-primary shadow-sm">2</span>
                            </div>
                            <div class="work-process-content mt-4">
                                <h5>We are 100% secure</h5>
                                <p>Your e-wallet is the safest, easiest and fastest means of carrying out transactions with us. Your funds are secured with your e-wallet PIN and can be kept for you for as long as you want. You can also withdraw it any time. </p>
                            </div>
                        </div>
                        <div class="single-work-process">
                            <div class="work-process-icon-wrap primary-bg rounded-circle">
                                 <i class="fa fa-check-double fa-3x" style="color: white"></i>
                                <span class="process-step white-bg color-primary shadow-sm">3</span>
                            </div>
                            <div class="work-process-content mt-4">
                                <h5>We are Reliable</h5>
                                <p>ICONSMS is a fully optimized platform for reliability and dependability. You get 100% value for any transaction you carry with us.</p>
                            </div>
                        </div>
                        <div class="single-work-process">
                            <div class="work-process-icon-wrap primary-bg rounded-circle">
                                <i class="fa fa-check-double fa-3x" style="color: white"></i>
                                <span class="process-step white-bg color-primary shadow-sm">4</span>
                            </div>
                            <div class="work-process-content mt-4">
                                <h5>Customer's Support</h5>
                                <p>Our customers are premium to us, hence satisfying them is our topmost priority. Our customer service is just a click away. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--our work process section end-->

 <!-- ======= Pricing Section ======= -->
  <section class="feature-content-two ptb-100 gray-light-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="section-heading text-center mb-5">
						<h2>Affordable Data Packages</h2>
                        <h3>Plans And Prices</h3>
        </div>
		 </div>
        </div>
    		<div class="row">
    			<div class="col-md-6 col-lg-3 ftco-animate fadeInUp ftco-animated">
                    <div class="shadow-lg p-3 mb-5 bg-white rounded">
                        <div class="text-center">
                        <img style="width: 100px; height: 100px;" src="static/styling/img/a.png">
                            <span class="excerpt d-block">MTN DATA</span>
                        <div class="pricing-text mb-5">
                            <table class="table table-all ">
                                
                                <tr>
                                <td style="color: rgb(5, 37, 78); font-size:14px; font-weight: bolder;"> 500.0MB </td>
                                <td style="color: rgb(5, 37, 78); font-size:14px;  font-weight: bolder;"><i> &#8358;170</i></td>
                                <td style="color: rgb(5, 37, 78); font-size:14px;  font-weight: bolder;"><i>1 Month</i></td>
                                </tr>
                                
                                <tr>
                                <td style="color: rgb(5, 37, 78); font-size:14px; font-weight: bolder;"> 1.0GB </td>
                                <td style="color: rgb(5, 37, 78); font-size:14px;  font-weight: bolder;"><i> &#8358;295</i></td>
                                <td style="color: rgb(5, 37, 78); font-size:14px;  font-weight: bolder;"><i>1 Month</i></td>
                                </tr>
                                
                                <tr>
                                <td style="color: rgb(5, 37, 78); font-size:14px; font-weight: bolder;"> 2.0GB </td>
                                <td style="color: rgb(5, 37, 78); font-size:14px;  font-weight: bolder;"><i> &#8358;595</i></td>
                                <td style="color: rgb(5, 37, 78); font-size:14px;  font-weight: bolder;"><i>1 Month</i></td>
                                </tr>
                                
                                <tr>
                                <td style="color: rgb(5, 37, 78); font-size:14px; font-weight: bolder;"> 3.0GB </td>
                                <td style="color: rgb(5, 37, 78); font-size:14px;  font-weight: bolder;"><i> &#8358;885</i></td>
                                <td style="color: rgb(5, 37, 78); font-size:14px;  font-weight: bolder;"><i>1 Month</i></td>
                                </tr>
                                
                                <tr>
                                <td style="color: rgb(5, 37, 78); font-size:14px; font-weight: bolder;"> 5.0GB </td>
                                <td style="color: rgb(5, 37, 78); font-size:14px;  font-weight: bolder;"><i> &#8358;1475</i></td>
                                <td style="color: rgb(5, 37, 78); font-size:14px;  font-weight: bolder;"><i>1 Month</i></td>
                                </tr>
                                
                            </table>
                        </div>
                        <a href="iconsmsdetails/iconsms/dashboard" class="btn btn-primary d-block px-2 py-3" style="background-image: linear-gradient(75deg, #30791a 10%, #18e805);">Shop Now<i class="fa fa-shopping-cart"></i> </a>
                        </div>
                    </div>
                </div>


	        <div class="col-md-6 col-lg-3 ftco-animate fadeInUp ftco-animated">
                <div class="shadow-lg p-3 mb-5 bg-white rounded">
                  <div class="text-center">
                      <img src="static/styling/img/d.jpg">
                      <span class="excerpt d-block">GLO DATA</span>
                      <div class="pricing-text mb-5">
                          <table class="table table-all ">

                              


                              <tr>

                                  <td style="color: rgb(5, 37, 78); font-size:14px; font-weight: bolder;"> 1.0GB </td>

                                  <td style="color: rgb(5, 37, 78); font-size:14px;  font-weight: bolder;"><i> &#8358;413</i></td>
                                     <td style="color: rgb(5, 37, 78); font-size:14px;  font-weight: bolder;"><i>14days</i></td>

                              </tr>
                              


                              <tr>

                                  <td style="color: rgb(5, 37, 78); font-size:14px; font-weight: bolder;"> 2.3GB </td>

                                  <td style="color: rgb(5, 37, 78); font-size:14px;  font-weight: bolder;"><i> &#8358;827</i></td>
                                     <td style="color: rgb(5, 37, 78); font-size:14px;  font-weight: bolder;"><i>1 Month</i></td>

                              </tr>
                              


                              <tr>

                                  <td style="color: rgb(5, 37, 78); font-size:14px; font-weight: bolder;"> 3.75GB </td>

                                  <td style="color: rgb(5, 37, 78); font-size:14px;  font-weight: bolder;"><i> &#8358;1241</i></td>
                                     <td style="color: rgb(5, 37, 78); font-size:14px;  font-weight: bolder;"><i>1 Month</i></td>

                              </tr>
                              


                              <tr>

                                  <td style="color: rgb(5, 37, 78); font-size:14px; font-weight: bolder;"> 5.25GB </td>

                                  <td style="color: rgb(5, 37, 78); font-size:14px;  font-weight: bolder;"><i> &#8358;1650</i></td>
                                     <td style="color: rgb(5, 37, 78); font-size:14px;  font-weight: bolder;"><i>1 Month</i></td>

                              </tr>
                              


                              <tr>

                                  <td style="color: rgb(5, 37, 78); font-size:14px; font-weight: bolder;"> 7.0GB </td>

                                  <td style="color: rgb(5, 37, 78); font-size:14px;  font-weight: bolder;"><i> &#8358;2069</i></td>
                                     <td style="color: rgb(5, 37, 78); font-size:14px;  font-weight: bolder;"><i>1 Month</i></td>

                              </tr>
                              


                              <tr>

                                  <td style="color: rgb(5, 37, 78); font-size:14px; font-weight: bolder;"> 9.0GB </td>

                                  <td style="color: rgb(5, 37, 78); font-size:14px;  font-weight: bolder;"><i> &#8358;2490</i></td>
                                     <td style="color: rgb(5, 37, 78); font-size:14px;  font-weight: bolder;"><i>1 Month</i></td>

                              </tr>
                              


                          </table>
                      </div>
                   <a href="iconsmsdetails/iconsms/dashboard" class="btn btn-primary d-block px-2 py-3" style="background-image: linear-gradient(75deg, #30791a 10%, #18e805);">Shop Now<i class="fa fa-shopping-cart"></i> </a>
                  </div>
                </div>
              </div>

	        <div class="col-md-6 col-lg-3 ftco-animate fadeInUp ftco-animated">
	          <div class="shadow-lg p-3 mb-5 bg-white rounded">
	            <div class="text-center">
            	<img src="static/styling/img/b.jpg">
	            	<span class="excerpt d-block">AIRTEL DATA</span>
	            <div class="pricing-text mb-5">
					<table class="table table-all ">

                        


                        <tr>

                          <td style="color: rgb(5, 37, 78); font-size:14px; font-weight: bolder;"> 750.0MB </td>

                          <td style="color: rgb(5, 37, 78); font-size:14px;  font-weight: bolder;"><i> &#8358;470</i></td>
                             <td style="color: rgb(5, 37, 78); font-size:14px;  font-weight: bolder;"><i>1 Month</i></td>

                        </tr>
                        


                        <tr>

                          <td style="color: rgb(5, 37, 78); font-size:14px; font-weight: bolder;"> 1.5GB </td>

                          <td style="color: rgb(5, 37, 78); font-size:14px;  font-weight: bolder;"><i> &#8358;940</i></td>
                             <td style="color: rgb(5, 37, 78); font-size:14px;  font-weight: bolder;"><i>1 Month</i></td>

                        </tr>
                        


                        <tr>

                          <td style="color: rgb(5, 37, 78); font-size:14px; font-weight: bolder;"> 2.0GB </td>

                          <td style="color: rgb(5, 37, 78); font-size:14px;  font-weight: bolder;"><i> &#8358;1116</i></td>
                             <td style="color: rgb(5, 37, 78); font-size:14px;  font-weight: bolder;"><i>1 Month</i></td>

                        </tr>
                        


                        <tr>

                          <td style="color: rgb(5, 37, 78); font-size:14px; font-weight: bolder;"> 3.0GB </td>

                          <td style="color: rgb(5, 37, 78); font-size:14px;  font-weight: bolder;"><i> &#8358;1400</i></td>
                             <td style="color: rgb(5, 37, 78); font-size:14px;  font-weight: bolder;"><i>1 Month</i></td>

                        </tr>
                        


                        <tr>

                          <td style="color: rgb(5, 37, 78); font-size:14px; font-weight: bolder;"> 4.5GB </td>

                          <td style="color: rgb(5, 37, 78); font-size:14px;  font-weight: bolder;"><i> &#8358;1860</i></td>
                             <td style="color: rgb(5, 37, 78); font-size:14px;  font-weight: bolder;"><i>1 Month</i></td>

                        </tr>
                        


                        <tr>

                          <td style="color: rgb(5, 37, 78); font-size:14px; font-weight: bolder;"> 6.0GB </td>

                          <td style="color: rgb(5, 37, 78); font-size:14px;  font-weight: bolder;"><i> &#8358;2345</i></td>
                             <td style="color: rgb(5, 37, 78); font-size:14px;  font-weight: bolder;"><i>1 Month</i></td>

                        </tr>
                        


                        <tr>

                          <td style="color: rgb(5, 37, 78); font-size:14px; font-weight: bolder;"> 8.0GB </td>

                          <td style="color: rgb(5, 37, 78); font-size:14px;  font-weight: bolder;"><i> &#8358;2818</i></td>
                             <td style="color: rgb(5, 37, 78); font-size:14px;  font-weight: bolder;"><i>1 Month</i></td>

                        </tr>
                        


                        <tr>

                          <td style="color: rgb(5, 37, 78); font-size:14px; font-weight: bolder;"> 11.0GB </td>

                          <td style="color: rgb(5, 37, 78); font-size:14px;  font-weight: bolder;"><i> &#8358;3755</i></td>
                             <td style="color: rgb(5, 37, 78); font-size:14px;  font-weight: bolder;"><i>1 Month</i></td>

                        </tr>
                        


                        <tr>

                          <td style="color: rgb(5, 37, 78); font-size:14px; font-weight: bolder;"> 15.0GB </td>

                          <td style="color: rgb(5, 37, 78); font-size:14px;  font-weight: bolder;"><i> &#8358;4695</i></td>
                             <td style="color: rgb(5, 37, 78); font-size:14px;  font-weight: bolder;"><i>1 Month</i></td>

                        </tr>
                        


                      </table>
                </div>
	           <a href="iconsmsdetails/iconsms/dashboard" class="btn btn-primary d-block px-2 py-3" style="background-image: linear-gradient(75deg, #30791a 10%, #18e805);">Shop Now<i class="fa fa-shopping-cart"></i> </a>
	            </div>
	          </div>
            </div>

	        <div class="col-md-6 col-lg-3 ftco-animate fadeInUp ftco-animated">
	          <div class="shadow-lg p-3 mb-5 bg-white rounded">
	            <div class="text-center">
	            <img src="static/styling/img/c.jpg">
	            	<span class="excerpt d-block">9MOBILE DATA</span>
					<div class="pricing-text mb-5">
						<table class="table table-all ">

							


							<tr>

								<td style="color: rgb(5, 37, 78); font-size:14px; font-weight: bolder;"> 500.0MB </td>

								<td style="color: rgb(5, 37, 78); font-size:14px;  font-weight: bolder;"><i> &#8358;440</i></td>
								   <td style="color: rgb(5, 37, 78); font-size:14px;  font-weight: bolder;"><i>1 Month</i></td>

							</tr>
							


							<tr>

								<td style="color: rgb(5, 37, 78); font-size:14px; font-weight: bolder;"> 1.5GB </td>

								<td style="color: rgb(5, 37, 78); font-size:14px;  font-weight: bolder;"><i> &#8358;880</i></td>
								   <td style="color: rgb(5, 37, 78); font-size:14px;  font-weight: bolder;"><i>1 Month</i></td>

							</tr>
							


							<tr>

								<td style="color: rgb(5, 37, 78); font-size:14px; font-weight: bolder;"> 2.0GB </td>

								<td style="color: rgb(5, 37, 78); font-size:14px;  font-weight: bolder;"><i> &#8358;1100</i></td>
								   <td style="color: rgb(5, 37, 78); font-size:14px;  font-weight: bolder;"><i>1 Month</i></td>

							</tr>
							


							<tr>

								<td style="color: rgb(5, 37, 78); font-size:14px; font-weight: bolder;"> 3.0GB </td>

								<td style="color: rgb(5, 37, 78); font-size:14px;  font-weight: bolder;"><i> &#8358;1350</i></td>
								   <td style="color: rgb(5, 37, 78); font-size:14px;  font-weight: bolder;"><i>1 Month</i></td>

							</tr>
							


							<tr>

								<td style="color: rgb(5, 37, 78); font-size:14px; font-weight: bolder;"> 4.5GB </td>

								<td style="color: rgb(5, 37, 78); font-size:14px;  font-weight: bolder;"><i> &#8358;1820</i></td>
								   <td style="color: rgb(5, 37, 78); font-size:14px;  font-weight: bolder;"><i>1 Month</i></td>

							</tr>
							


							<tr>

								<td style="color: rgb(5, 37, 78); font-size:14px; font-weight: bolder;"> 11.0GB </td>

								<td style="color: rgb(5, 37, 78); font-size:14px;  font-weight: bolder;"><i> &#8358;3620</i></td>
								   <td style="color: rgb(5, 37, 78); font-size:14px;  font-weight: bolder;"><i>1 Month</i></td>

							</tr>
							


							<tr>

								<td style="color: rgb(5, 37, 78); font-size:14px; font-weight: bolder;"> 15.0GB </td>

								<td style="color: rgb(5, 37, 78); font-size:14px;  font-weight: bolder;"><i> &#8358;4560</i></td>
								   <td style="color: rgb(5, 37, 78); font-size:14px;  font-weight: bolder;"><i>1 Month</i></td>

							</tr>
							


							<tr>

								<td style="color: rgb(5, 37, 78); font-size:14px; font-weight: bolder;"> 40.0MB </td>

								<td style="color: rgb(5, 37, 78); font-size:14px;  font-weight: bolder;"><i> &#8358;9100</i></td>
								   <td style="color: rgb(5, 37, 78); font-size:14px;  font-weight: bolder;"><i>1 Month</i></td>

							</tr>
							


						</table>
                    </div>

	            <a href="iconsmsdetails/iconsms/dashboard" class="btn btn-primary d-block px-2 py-3" style="background-image: linear-gradient(75deg, #30791a 10%, #18e805);">Shop Now<i class="fa fa-shopping-cart"></i> </a>
	            </div>
	          </div>
	        </div>
	      </div>
    	</div>
    </section>

    <!--testimonial section start-->
    <section class="testimonial-section ptb-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-9 col-lg-8">
                    <div class="section-heading mb-5 text-center">
                        <h2>What Clients Say</h2>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-lg-12">
                    <div class="owl-carousel owl-theme client-testimonial custom-arrow custom-arrow-bottom-center mb-5">
                        <div class="item">
                            <div class="testimonial-single shadow-sm gray-light-bg rounded p-4">
                                <blockquote>
                                    ICONSMS is best platform when its come to affordable data plan for both end-user and resseller ,i recommend this platform it's fast, automated and secured

								</blockquote>
                                <div class="client-img d-flex align-items-center justify-content-between pt-4">
                                    <div class="d-flex align-items-center">
                                        <img src="static/styling/img/a2.jpg" alt="client" width="50" class="img-fluid rounded-circle shadow-sm mr-3"/>
                                        <div class="client-info">
                                            <h5 class="mb-0">Saul Goodman</h5>
                                            <small class="mb-0">Lead Developer</small>
                                        </div>
                                    </div>
                                    <div class="client-ratting">
                                        <ul class="list-inline client-ratting-list">
                                            <li class="list-inline-item"><span class="fas fa-star ratting-color"></span></li>
                                            <li class="list-inline-item"><span class="fas fa-star ratting-color"></span></li>
                                            <li class="list-inline-item"><span class="fas fa-star ratting-color"></span></li>
                                            <li class="list-inline-item"><span class="fas fa-star ratting-color"></span></li>
                                            <li class="list-inline-item"><span class="fas fa-star ratting-color"></span></li>
                                        </ul>
                                        <span class="font-weight-bold">5.0 <small class="font-weight-lighter">Out of 5</small></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-single shadow-sm gray-light-bg rounded p-4">
                                <blockquote>
                                    I love the quick response to issues. We might just get along well. So far so good. There's no star here but I give ⭐⭐⭐.

								</blockquote>
                                <div class="client-img d-flex align-items-center justify-content-between pt-4">
                                    <div class="d-flex align-items-center">
                                        <img src="static/styling/img/a1.jpg" alt="client" width="50" class="img-fluid rounded-circle shadow-sm mr-3"/>
                                        <div class="client-info">
                                            <h5 class="mb-0">Pirtle Karole</h5>
                                            <small class="mb-0">UI/UX Designerr</small>
                                        </div>
                                    </div>
                                    <div class="client-ratting">
                                        <ul class="list-inline client-ratting-list">
                                            <li class="list-inline-item"><span class="fas fa-star ratting-color"></span></li>
                                            <li class="list-inline-item"><span class="fas fa-star ratting-color"></span></li>
                                            <li class="list-inline-item"><span class="fas fa-star ratting-color"></span></li>
                                            <li class="list-inline-item"><span class="fas fa-star ratting-color"></span></li>
                                            <li class="list-inline-item"><span class="fas fa-star ratting-color"></span></li>
                                        </ul>
                                        <span class="font-weight-bold">5.0 <small class="font-weight-lighter">Out of 5</small></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-single shadow-sm gray-light-bg rounded p-4">
                                <blockquote>
                                    These site is great... All thanks to ICONSMS.I can really say that since I joined this site I have been earning more than before... Kudus To ICONSMS Kudus to the developer.

								</blockquote>
                                <div class="client-img d-flex align-items-center justify-content-between pt-4">
                                    <div class="d-flex align-items-center">
                                        <img src="static/styling/img/a3.jpg" alt="client" width="50" class="img-fluid rounded-circle shadow-sm mr-3"/>
                                        <div class="client-info">
                                            <h5 class="mb-0">Joe Pirtle</h5>
                                            <small class="mb-0">Student</small>
                                        </div>
                                    </div>
                                    <div class="client-ratting">
                                        <ul class="list-inline client-ratting-list">
                                            <li class="list-inline-item"><span class="fas fa-star ratting-color"></span></li>
                                            <li class="list-inline-item"><span class="fas fa-star ratting-color"></span></li>
                                            <li class="list-inline-item"><span class="fas fa-star ratting-color"></span></li>
                                            <li class="list-inline-item"><span class="fas fa-star ratting-color"></span></li>
                                            <li class="list-inline-item"><span class="fas fa-star ratting-color"></span></li>
                                        </ul>
                                        <span class="font-weight-bold">5.0 <small class="font-weight-lighter">Out of 5</small></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-single shadow-sm gray-light-bg rounded p-4">
                                <blockquote>
                                      Amazing!...i recommend to all data resellers...kudos

							   </blockquote>
                                <div class="client-img d-flex align-items-center justify-content-between pt-4">
                                    <div class="d-flex align-items-center">
                                        <img src="static/styling/img/a4.png" alt="client" width="50" class="img-fluid rounded-circle shadow-sm mr-3"/>
                                        <div class="client-info">
                                            <h5 class="mb-0">Matt Brandon</h5>
                                            <small class="mb-0">Freelancer</small>
                                        </div>
                                    </div>
                                    <div class="client-ratting">
                                        <ul class="list-inline client-ratting-list">
                                            <li class="list-inline-item"><span class="fas fa-star ratting-color"></span></li>
                                            <li class="list-inline-item"><span class="fas fa-star ratting-color"></span></li>
                                            <li class="list-inline-item"><span class="fas fa-star ratting-color"></span></li>
                                            <li class="list-inline-item"><span class="fas fa-star ratting-color"></span></li>
                                            <li class="list-inline-item"><span class="fas fa-star ratting-color"></span></li>
                                        </ul>
                                        <span class="font-weight-bold">5.0 <small class="font-weight-lighter">Out of 5</small></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--testimonial section end-->


    <section  id="contact" class="d-flex justify-content-center ptb-100 contact-section">
    <div class="container">
      <!-- <div class="row">    -->
    <div  class="w-100 card">
  <h2 class="h1-responsive font-weight-bold text-center my-3">Contact us</h2>
  <!-- Section description -->
  <p class="text-center w-responsive mx-auto">Contact Us. We will Respond as Soon As Possible</p>
  <div class="row p-3">
    <div class="col-lg-5">
    
      <form  action="mail" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
      <div class="card">
      <!-- <div style="width: 100%;">  -->
        <div class="card-header">
            <h3> Write to Us! </h3>
        </div>
        <div class="card-body">
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter Your Email" name="email" required>
      <div class="valid-feedback">Great</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
    <label for="uid">Username/Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter Username/Name" name="user_name" required>
      <div class="valid-feedback">Great</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
    <label for="subject">Subject:</label>
      <input type="text" class="form-control" id="subject" maxlength="100" minlength="5" placeholder="Enter Subject" name="subject" required>
      <div class="valid-feedback">Great</div>
      <div class="invalid-feedback">Please fill out this field or character must be must than 5 and less than 100 Characters.</div>
    </div>
    <div class="form-group">
      <label for="message">Message:</label>
      <textarea style="resize: none;" type="text" class="form-control" id="message" placeholder="Your Message" name="message" required></textarea>
      <div class="valid-feedback">Great</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember" required> I agree on <a href="#!" data-toggle="modal" data-target="#myModal">Terms & Condition </a>
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Check this checkbox to continue.</div>
      </label>
    </div>

  <!-- The Modal -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Swift Geek Links Terms & Condition</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
        <p class="text-center"> Our Terms & Condition are as follows: </p>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-md btn-warning" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
    <?php
    if(isset($_GET["error"])) {
          if($_GET["error"] == "eMAIL_NOT_sENT") {
              echo "<p style='color:red'> Email Not Sent</p>";
          }
        }
        ?>

         <div class="card-footer">
    <input type="submit" class="form-control btn btn-success" id="subject" Value="Submit Message" name="submit_message" required>
        </div>
        </div>
    </div>
  </form>
    </div>
       
<script>
// Disable form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Get the forms we want to add validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>

    <div class="col-lg-7">

      <!--Google map-->
      <div id="map-container-section" class="mb-2" style="width: 100%; height: 500px">
        <iframe src="https://maps.google.com/maps?q=Lagos&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0"
          style="border:0; height: 100%; width: 100%;" allowfullscreen></iframe>
      </div>
      <!-- Buttons-->
      <div class="row text-center">
        <div class="col-4 mb-3">
          <a class="btn-floating blue accent-1">
            <i class="fas fa-3x fa-map-marker-alt"></i>
          </a>
          <p>Lagos</p>
          <b><p class="mb-0">Nigeria</p></b>
        </div>
        <div class="col-4 mb-3">
          <a class="btn-floating blue accent-1">
            <i class="fas fa-3x fa-phone"></i>
          </a>
          <p>+ +234-80 342 48 420</p>
          <b><p class="mb-0">24/7, 8:00-22:00</p></b>
        </div>
        <div class="col-4 mb-3">
          <a class="btn-floating blue accent-1">
            <i class="fas fa-3x fa-envelope"></i>
          </a>
          <p>info@iconsms.com.ng</p>
        </div>
      </div>

    </div>
    </div>
        </div>
        </div>
</section>


</div>
<!--body content wrap end-->

  <!-- ======= Footer ======= -->
  <footer id="footer">



    <div class="footer-top gradient-bg">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact" style="color:white;">
            <h3 style="color:white;">ICONSMS</h3>
            <p>
             <strong>Location:</strong>OAU, Ile-Ife, Osun State, Nigeria. <br>

              <strong>Phone:</strong> +2348034248420<br>
              <strong>Email:</strong>info@iconsms.com.ng
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links" style="color:white;">
            <h4 style="color:white;">Useful Links</h4>
            <ul>
              <li style="color:white;"><i class="bx bx-chevron-right"></i> <a href="iconsmsdetails/iconsms/dashboard">DashBoard</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#about">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#services">Our Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#contact">Contact Us</a></li>
              <?php if(!isset($_SESSION["userSmsId"])): ?> 
              <li><i class="bx bx-chevron-right"></i> <a href="iconsmsdetails/register">Register</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="iconsmsdetails/login">Login</a></li>
              <?php else: ?>
                <li><i class="bx bx-chevron-right"></i> <a href="iconsmsdetails/logout.php">Logout</a></li> 
              <?php endif; ?>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links" style="color:white;">
            <h4 style="color:white;">Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="airtime">Buy Airtime</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="data">Buy Data</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="cable">Cable Subscription</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="utility">Utility Payment</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links" style="color:white;">
                <h4 style="color:white;">Our Social Networks</h4>
                <p>Join Us On Our Whatsapp Group</p>
                <div class="social-links mt-3" style="color:white;">
                  <a href="#" class="twitter"><i class="bx bxl-whatsapp"></i></a>
                  <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                </div>
                <a href='documentation/index.html' class="text-center font-weight: bold;" style="color: white;">DEVELOPER'S API</a>
          </div>

        </div>
      </div>
    </div>
    <div class="footer-bottom bg-light py-2">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-md-7 col-lg-7">
                    <p class="copyright-text pb-0 mb-0">Copyrights © 2020. All rights reserved by
                        <strong>ICONSMS.</strong> Designed and Powered by Witt<span style="color: plum;">Stack</span> </p>
                </div>
                <div class="col-md-7 col-lg-6 d-none d-md-block d-lg-block">
                    <div class="social-nav text-right">

                    </div>
                </div>
            </div>
        </div>
    </div>

  </footer><!-- End Footer -->



<!--bottom to top button start-->
<button class="scroll-top scroll-to-target" data-target="html">
    <span class="ti-angle-up"></span>
</button>
<!--bottom to top button end-->

<!--jQuery-->
<script src="static/styling/js/jquery-3.4.1.min.js"></script>
<!--Popper js-->
<script src="static/styling/js/popper.min.js"></script>
<!--Bootstrap js-->
<script src="static/styling/js/bootstrap.min.js"></script>
<!--Magnific popup js-->
<script src="static/styling/js/jquery.magnific-popup.min.js"></script>
<!--jquery easing js-->
<script src="static/styling/js/jquery.easing.min.js"></script>
<!--jquery ytplayer js-->
<script src="static/styling/js/jquery.mb.YTPlayer.min.js"></script>
<!--Isotope filter js-->
<script src="static/styling/js/mixitup.min.js"></script>
<!--wow js-->
<script src="static/styling/js/wow.min.js"></script>
<!--owl carousel js-->
<script src="static/styling/js/owl.carousel.min.js"></script>
<!--countdown js-->
<script src="static/styling/js/jquery.countdown.min.js"></script>
<!--custom js-->
<script src="static/styling/js/scripts.js"></script>



</body>

<!-- Mirrored from www.ICONSMS.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 23 Oct 2020 12:28:59 GMT -->
</html>