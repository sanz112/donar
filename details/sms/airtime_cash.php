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
    <style>
 
        .control {
            display: block;
            width: 100%;
            height: calc(2.25rem + 2px);
            padding: .375rem .75rem;
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            color: #495057;
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid #ced4da;
            border-radius: .25rem;
            transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
        }

        .blink_me {
  animation: blinker 1s linear infinite;
}

@keyframes blinker {
  50% {
    opacity: 0;
  }
}


#process, #process2{
        display: none;
    }


    
     /*--thank you pop starts here--*/
     .thank-you-pop{
      width:100%;
       padding:20px;
      text-align:center;
    }
    .thank-you-pop img{
      width:76px;
      height:auto;
      margin:0 auto;
      display:block;
      margin-bottom:25px;
    }
    
    .thank-you-pop h1{
      font-size: 42px;
        margin-bottom: 25px;
      color:#5C5C5C;
    }
    .thank-you-pop p{
      font-size: 20px;
        margin-bottom: 27px;
       color:#5C5C5C;
    }
    .thank-you-pop h3.cupon-pop{
      font-size: 25px;
        margin-bottom: 40px;
      color:#222;
      display:inline-block;
      text-align:center;
      padding:10px 20px;
      border:2px dashed #222;
      clear:both;
      font-weight:normal;
    }
    .thank-you-pop h3.cupon-pop span{
      color:#03A9F4;
    }
    .thank-you-pop a{
      display: inline-block;
        margin: 0 auto;
        padding: 9px 20px;
        color: #fff;
        text-transform: uppercase;
        font-size: 14px;
        background-color: #8BC34A;
        border-radius: 17px;
    }
    .thank-you-pop a i{
      margin-right:5px;
      color:#fff;
    }
    #ignismyModal .modal-header{
        border:0px;
    }
    /*--thank you pop ends here--*/
    
    </style>

    <h2 class="w3-center"> Airtime Funding/ Airtime to Cash</h2>
    <p>for Airtime pin kindly load it , fill this transfer form and transfer to the number display</p>
  
    <div class="box w3-card-4">

     

            <div class="row">

                <div class="col-sm-8">
                    
                    <form method='post'>

                    <input type="hidden" name="csrfmiddlewaretoken" value="zBY6VMLJ6psjBwa7IvE3QegfCUAlMRWZ46qQE6b8iKHHxRVXSztvfugLOOo4bjxI"> 




<label class="w3-text-blue">
 <!--   
 -->
</label>

<div class=""><b>


    
    <div id="div_id_network" class="form-group">
        
            <label for="id_network" class=" requiredField">
                Network<span class="asteriskField">*</span>
            </label>
        

        

        

        
            
                <div class="">
                    <select name="network" class="select form-control" required id="id_network">
  <option value="" selected>---------</option>

  <option value="1">MTN</option>

  <option value="2">GLO</option>

  <option value="3">9MOBILE</option>

  <option value="4">AIRTEL</option>

</select>
                    


    




    



                </div>
            
        
    </div>
    

</b></div>




<label class="w3-text-blue">
 <!--   
 -->
</label>

<div class=""><b>


    
    <div id="div_id_mobile_number" class="form-group">
        
            <label for="id_mobile_number" class=" requiredField">
                Mobile number<span class="asteriskField">*</span>
            </label>
        

        

        

        
            
                <div class="">
                    <input type="text" name="mobile_number" maxlength="11" minlength="11" class="textinput textInput form-control" required id="id_mobile_number">
                    


    




    



                </div>
            
        
    </div>
    

</b></div>




<label class="w3-text-blue">
 <!--   
 -->
</label>

<div class=""><b>


    
    <div id="div_id_amount" class="form-group">
        
            <label for="id_amount" class=" requiredField">
                Amount<span class="asteriskField">*</span>
            </label>
        

        

        

        
            
                <div class="">
                    <input type="number" name="amount" min="0" class="numberinput form-control" required id="id_amount">
                    


    




    



                </div>
            
        
    </div>
    

</b></div>




<label class="w3-text-blue">
 <!--   
 -->
</label>

<div class=""><b>


    
        <div class="form-group">
        
    
    <div id="div_id_use_to_fund_wallet" class="form-check">
        

        

        

        
            
                
                    <input type="checkbox" name="use_to_fund_wallet" class="checkboxinput form-check-input" id="id_use_to_fund_wallet">
                
                <label for="id_use_to_fund_wallet" class="form-check-label">
                    Check if you want to use it to fund wallet else transfer to bank below.
                </label>
                


    




    



            
        
    </div>
    
        
        </div>
    

</b></div>


     



                    <label><b>you will receive</b></label>
                    <p class="control" id="amount"> </p>

                    
                    <label><b>Bank name</b></label>
                    <p class="control" id="bname"> Wema Bank</p>

                    <label><b>Account Number</b></label>
                    <p class="control" id="Anum">0229852464 </p>

                           



                  
                    <button type="button" class="btn btn-primary" id="open">
                        Preceed
                      </button>
</form>


                </div>
                <div class="col-sm-4  ">



                    

            </div>




            <!-- Modal -->
<div class="modal fade" id="processModal" tabindex="-1" role="dialog" aria-labelledby="processModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
            <center><h4 class="modal-title" id="processModalLongTitle"> To complete this request, follow the instructions below.</h4></center> 
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>
            <h5 class='w3-text-blue  w3-padding'> Kindly Transfer the sum of  to 07047695310 ,follow the process below </h5>
        </p>
        <hr>
        <p>How to transfer Airtime on  network MTN Share ’N’ Sell Dial:
         
          <b id="code"> *600*07047695310**PIN# </b></p>
     
            <p><b> If you don't have a PIN, to use 1234 as your PIN Dial: *600*0000*new pin*new pin# {i.e *600*0000*1234*1234#}
            </b>   </p>
       
        <p><b>NOTE: Ensure you have paid N  into the Number above before clicking on airtime sent. Also, you must send exactly N Airtime within 30 minutes or this transaction will be cancelled.</b></p>
        <P><b>NOTE: Confirmation is instant and payment is automated usually within 5-30mins.<br>Also note that to send to us, you need to send from your personal sim .</p>
    
          <p style="color:red;" class="blink_me"><b>NOTE: Click on comfirmation button without send the airtime can lead to your accoun and emain been ban.</b></p>
      </div>
        <div class="modal-footer">
                <button type="button"  class=" btn process" id="btnsubmit"style="background-color: rgb(17, 199, 17);" id="btnsubmit"> <span id="process2"><i class="fa fa-circle-o-notch fa-spin " style="font-size: 30px;animation-duration: 1s;"></i> Processing Please wait </span>  <span id="subm">COMFIRM AIRTIME SENT</span></button>

          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
           </div>
      </div>
    </div>
  </div>





<div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="successModalTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
    
      <div class="modal-body">
        <div class="thank-you-pop">
          <img src="http://goactionstations.co.uk/wp-content/uploads/2017/03/Green-Round-Tick.png" alt="">
          <h1>Thank You!</h1>
          <p>Your request is received and we will process it shortly</p>
          <button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
  
          
         </div>
      </div>
   
    </div>
  </div>
</div>


<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
    
      <div class="modal-body">
        <div class="thank-you-pop">
          <img src="https://www.pngmart.com/files/10/Stop-Sign-Transparent-Background.png" alt="">
          <p id ="errmessage" style="font-size: 20px;"></p>
          <button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
  
         </div>
      </div>

     
   
    </div>
  </div>
</div>

            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

            <script>
                $(document).ready(function() {

                    $("#id_network").change(function() {
                        var name = $(this).children("option:selected").val();

                        $("#id_amount").keyup(function() {
                            var amount = Number($("#id_amount").val());
                            console.log('80');

                            if (name == "1") {

                                $("#amount").text('#' + (Number(amount) * (Number("80") / 100)));


                            }


                            if (name == "2") {
                                $("#amount").text('#' + (Number(amount) * (Number("82") / 100)));

                            }

                            if (name == "3") {
                                $("#amount").text('#' + (Number(amount) * (Number("70") / 100)));

                            }
                            if (name == "4") {
                                $("#amount").text('#' + (Number(amount) * (Number("79") / 100)));

                            }


                        });
                    });





                });
            </script>




<script>


  $("#open").click(function() {


    var network = $("#id_network").val(); // get the selected country ID from the HTML input
    
    var mobile_number = $("#id_mobile_number").val();
    var amount = $("#id_amount").val();
   
   
    if(network == "" || amount == "" || mobile_number == "" ){
        alert(" All fields are required");

    }
    else {
      var networkn = $("#id_network option:selected").text(); // get the selected country ID from the HTML input

      if (networkn =="MTN"){
        $("#code").text(" *600*07047695310* " + amount +"*PIN#")
      
      }
     
      else if (networkn =="GLO"){
        $("#code").text("*131*N* " + amount +" *PIN# ")
      }
      else if (networkn =="AIRTEL"){
        
        $("#code").text(" *432*1*#  To ")
       
        
      }
      else{
        $("#code").text("*223*B*" + amount +" *PIN#")
     
     
      }
      $('#processModal').modal()
   }
  });

</script>



<script>
  $("#btnsubmit").click(function() {
      var url = "/api/Airtime_funding/"; // get the url of the `load_cities` view
      var network = $("#id_network").val(); // get the selected country ID from the HTML input
      var mobile_number = $("#id_mobile_number").val();
      var amount = $("#id_amount").val();
      var token = 'zBY6VMLJ6psjBwa7IvE3QegfCUAlMRWZ46qQE6b8iKHHxRVXSztvfugLOOo4bjxI';
      var use_to_fund_wallet =  $('#id_use_to_fund_wallet').is(":checked");
       
      var networkn = $("#id_network option:selected").text(); // get the selected country ID from the HTML input

      if (networkn =="MTN"){
        var r = confirm("Are you sure you have sent " + " " + networkn  + " " + "N"+amount + " " + "to"+ " " +    "07047695310 to avoid your account and email been ban"   );
  
      }
     
      else if (networkn =="GLO"){
        var r = confirm("Are you sure you have sent " + " " + networkn  + " " + "N"+amount + " " + "to"+ " " +   "N to avoid your account and email been ban"    );
  
      }
      else if (networkn =="AIRTEL"){
        var r = confirm("Are you sure you have sent " + " " + networkn  + " " + "N"+amount + " " + "to"+ " " +    " to avoid your account and email been ban"   );
  
      }
      else{
        var r = confirm("Are you sure you have sent " + " " + networkn  + " " + "N"+amount + " " + "to"+ " " +   "B to avoid your account and email been ban"    );
  
      }
      
  
  if (r == true) {
      $.ajax({
          type:'POST',
          dataType: 'json',
          contentType: "application/json",
     beforeSend: function(){
        $('#process2').css("display", "block");
        $('#subm').css("display", "none");
  
          }, // initialize an AJAX request
          url: url,
          headers: { "X-CSRFToken": token },
          data: JSON.stringify({"network":network, "mobile_number": mobile_number,  "amount": amount,"use_to_fund_wallet":use_to_fund_wallet   } ),
      success: function (data) {
  
  console.log(data);
  console.log(data.id);
  $('#ref').text(String(data.ident));
  $('#processModal').modal('hide');
  $('#successModal').modal()
  
  },
          error: function(XMLHttpRequest, textStatus, errorThrown) {
              var parsed_data = JSON.parse(XMLHttpRequest.responseText);
              $('#errmessage').text(String(parsed_data.error));
              $('#processModal').modal('hide');
              $('#myModal').modal();

            
   
    },
  
   complete: function(){
      $('#process2').css("display", "none");
        $('#subm').css("display", "block");
  
  }
      });
  }
  });
  </script>

    </div>
</div>

</div>
</div>
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
    <!-- ============================================================== -->
    <!-- end footer -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- end wrapper  -->
<!-- ============================================================== -->
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