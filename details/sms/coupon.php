<?php 
session_start();
?>
<!doctype html>
<html lang="en">


<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="theme-color" content="#0C359D ">

    <link rel="apple-touch-icon" sizes="180x180" href="../../static/img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../../static/img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../../static/img/favicon-16x16.png">
    <link rel="manifest" href="../../static/img/site.webmanifest">

    <meta name="msapplication-TileColor" content="#0C359D ">
    <meta name="msapplication-TileImage" content="../../static/img/bg.jpg">
    <meta itemprop="name" content=".ICONSMS- Buy Airtime and Data for all Network. Make payment for DSTV, GOTV, PHCN other services">
    <meta itemprop="description" content="Buy Cheap Internet Data Plan and Airtime Recharge for Airtel, 9mobile, GLO, MTN, Pay DSTV, GOTV, PHCN.">
    <meta itemprop="image" content="../../static/img/bg.jpg">
     <link rel="stylesheet" href="../../static/ogbam/w3.css">

     <!-- Twitter Card data -->
     <meta name="twitter:card" content="../../static/img/bg.jpg">
     <meta name="twitter:title" content=".ICONSMS- Buy Airtime and Data for all Network. Make payment for DSTV, GOTV, PHCN other services">
     <meta name="twitter:description" content="Buy Cheap Internet Data Plan and Airtime Recharge for Airtel, 9mobile, GLO, MTN, Pay DSTV, GOTV, PHCN.">
     <meta name="twitter:image:src" content="../../static/img/bg.jpg">

     <!-- Open Graph data -->
     <meta property="og:locale" content="en_US">
     <meta property="og:title" content=".ICONSMS- Buy Airtime and Data for all Network. Make payment for DSTV, GOTV, PHCN other services">
     <meta property="og:image" content="../../static/img/bg.jpg">
     <meta property="og:description" content="Buy Cheap Internet Data Plan and Airtime Recharge for Airtel, 9mobile, GLO, MTN, Pay DSTV, GOTV, PHCN."/>
     <meta property="og:site_name" content=".ICONSMS"/>
     <meta property="og:url" content="https://www..ICONSMS.com.ng">
     <meta property="og:type" content="website">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../../static/assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="../../static/assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="../../static/assets/libs/css/style.css">
    <link rel="stylesheet" href="../../static/assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="../../static/assets/vendor/charts/chartist-bundle/chartist.css">
    <link rel="stylesheet" href="../../static/assets/vendor/charts/morris-bundle/morris.css">
    <link rel="stylesheet" href="../../static/assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../../static/assets/vendor/charts/c3charts/c3.css">
    <link rel="stylesheet" href="../../static/assets/vendor/fonts/flag-icon-css/flag-icon.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../static/ogbam/form.css">
</head>

<body onload="alertinfo()">
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">

    <?php require '../navbar.php'; ?>

        <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">

                <?php if(isset($_SESSION["userSmsId"])): ?>
    <h2 class="w3-center">Fund account with Coupon Code</h2>

    <div class="box w3-card-4">

        <form method='post' id="myform">


            <div class="row">

                <div class="col-sm-8">

                    <input type="hidden" name="csrfmiddlewaretoken" value="XzxEWAzsLHtOPf4P3r8aPnM7Na23l6Ohs4ZoFUZRX2IcLAPFdvXCeDMDZ4QMKyp0"> 




<label class="w3-text-blue">
 <!--   
 -->
</label>

<div class=""><b>


    
    <div id="div_id_Code" class="form-group">
        
            <label for="id_Code" class=" requiredField">
                Code<span class="asteriskField">*</span>
            </label>
        

        

        

        
            
                <div class="">
                    <input type="text" name="Code" maxlength="15" class="textinput textInput form-control" required id="id_Code">
                    


    




    



                </div>
            
        
    </div>
    

</b></div>


     





                    <button type="submit" value="Continue to Funding" class=" btn"  id="btnsubmit"style='margin-bottom:15px;'>Fund</button>

                </div>
                <div class="col-sm-4 ">


                    <div class="alert alert-info">
                        <strong><i class="fa fa-whatsapp w3-large"></i> Buy Coupon code:</strong><p class="">Contact us on whatsapp to buy your coupon code  <a href="https://wa.me/2348133709526" class="btn " style="background-color: rgb(4, 219, 4) !important; color: white;"><strong>  <i class="fa fa-whatsapp w3-large"> </i> whatsapp us</strong></a></p>
                      </div>
                </div>

                

            </div>





    </div>

</div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script>

    $(function()
    {
      $('#btnsubmit').on('click',function()
      {
        $(this).text('Please wait ...')
          .attr('disabled','disabled');
        $('#myform').submit();
      });
    
    });
    </script>
    <?php else: ?>
    <h3 class="text-center"> You have to Log In to have Access to the DashBoard </h3>
<?php endif; ?>
    <!-- ============================================================== -->
    <!-- end main wrapper  -->
    <!-- ============================================================== -->

    <!-- ============================================================== -->
    <!-- footer -->
    <!-- ============================================================== -->
    <div class="footer" style="position: absolute; bottom: 0; left: 0; right: 0; background-color: rgb(12, 4, 36); color: wheat;">
        <div class="container-fluid">
            <a href='/documentation/' style="color: pink; font-size: 17px; font-weight: bold;">DEVELOPER'S API</a>
              <p>   Copyright © 2020 VTUKONNECT. All rights reserved.</p>
            </div>
        </div>
    </div>
</div>


    <!-- Optional JavaScript -->
    <!-- jquery 3.3.1 -->
    <script src="../../static/assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <!-- bootstap bundle js -->
    <script src="../../static/assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <!-- slimscroll js -->
    <script src="../../static/assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <!-- main js -->
    <script src="../../static/assets/libs/js/main-js.js"></script>
    <!-- chart chartist js -->
    <script src="../../static/assets/vendor/charts/chartist-bundle/chartist.min.js"></script>
    <!-- sparkline js -->
    <script src="../../static/assets/vendor/charts/sparkline/jquery.sparkline.js"></script>
    <!-- morris js -->
    <script src="../../static/assets/vendor/charts/morris-bundle/raphael.min.js"></script>
    <script src="../../static/assets/vendor/charts/morris-bundle/morris.js"></script>
    <!-- chart c3 js -->
    <script src="../../static/assets/vendor/charts/c3charts/c3.min.js"></script>
    <script src="../../static/assets/vendor/charts/c3charts/d3-5.4.0.min.js"></script>
    <script src="../../static/assets/vendor/charts/c3charts/C3chartjs.js"></script>
    <script src="../../static/assets/libs/js/dashboard-ecommerce.js"></script>


</body>

</html>