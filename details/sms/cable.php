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

    .process{
        display: none;
      }

      #name{
        display: none;
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



<div style="padding-top:120px; padding-bottom:90px;">


    <h2 class="w3-center">Cablesub</h2>

    <div class="box w3-card-4">

        <form method="post" id='cableform' data-plans-url="/ajax/load_plans/" novalidate>


            <div class="row">

                <div class="col-sm-8">

                    <input type="hidden" name="csrfmiddlewaretoken" value="Cr6klbqwpJNQ8A3T1alqDAnIslk9f4X67Wy44vQVB42e4VOJbeaS2QneEf8SEwyP"> 




<label class="w3-text-blue">
 <!--   
 -->
</label>

<div class=""><b>


    
    <div id="div_id_cablename" class="form-group">
        
            <label for="id_cablename" class=" requiredField">
                Cablename<span class="asteriskField">*</span>
            </label>
        

        

        

        
            
                <div class="">
                    <select name="cablename" class="select form-control" required id="id_cablename">
  <option value="" selected>---------</option>

  <option value="1">GOTV</option>

  <option value="2">DSTV</option>

  <option value="3">STARTIME</option>

</select>
                    


    




    



                </div>
            
        
    </div>
    

</b></div>




<label class="w3-text-blue">
 <!--   
 -->
</label>

<div class=""><b>


    
    <div id="div_id_smart_card_number" class="form-group">
        
            <label for="id_smart_card_number" class=" requiredField">
                Smart Card number / IUC number<span class="asteriskField">*</span>
            </label>
        

        

        

        
            
                <div class="">
                    <input type="text" name="smart_card_number" maxlength="15" minlength="5" class="textinput textInput form-control" required id="id_smart_card_number">
                    


    




    



                </div>
            
        
    </div>
    

</b></div>




<label class="w3-text-blue">
 <!--   
 -->
</label>

<div class=""><b>


    
    <div id="div_id_cableplan" class="form-group">
        
            <label for="id_cableplan" class=" requiredField">
                Cableplan<span class="asteriskField">*</span>
            </label>
        

        

        

        
            
                <div class="">
                    <select name="cableplan" class="select form-control" required id="id_cableplan">
  <option value="" selected>---------</option>

</select>
                    


    




    



                </div>
            
        
    </div>
    

</b></div>


     



                    
                    <label><b>Customer Name</b></label>
                    <p class="control" id="name"> </p>


                  
                 
                    <button type="button"  class=" btn process" id="btnsubmit" style='background-image: linear-gradient(-20deg, orange 0%, orange 100%);margin-bottom:15px;'> <span id="process2"><i class="fa fa-circle-o-notch fa-spin " style="font-size: 30px;animation-duration: 1s;"></i> Processing Please wait </span>  <span id="subm">Submit Order </span></button>
</form>
                    <button type="button"  id="validateiuc" class=" btn" style='margin-bottom:15px;'>  <span id="process"><i class="fa fa-circle-o-notch fa-spin " style="font-size: 30px;animation-duration: 1s;"></i> Validating Please wait </span>  <span id ="displaytext">Validate </span></button>

                </div>
                <div class="col-sm-4 ">

                  <p style="font-size:20px;">You can contact DSTV/GOtv's customers care unit on 01-2703232/08039003788 or the toll free lines: 08149860333, 07080630333, and 09090630333 for assistance, STARTIMES's customers care unit on (094618888, 014618888)</p>

                    

            </div>





    </div>
</div>

</div>
</div>












<div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="successModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="successModalCenterTitle">Order Submited succesfully</h5>
            <button type="button" id="btnPrint"  class=" btn btn-small btn-warning" style='width: 70px !important;'>Print </button>
 
           
          </div>
        <div class="modal-body">
        
<table class='table table-all' id="receipt">
    <th>
       VTUKONNECT Cablesub Receipt
    </th>

    <tr>

        <td><b>user</b></td>
        <td>SAM</td>
    </tr>

    <tr>

        <td><b>reference</b></td>
        <td id="ref"></td>
    </tr>

    <tr>

        <td><b>Plan Amount</b></td>
        <td id="amt"></td>
    </tr>

    <tr>

        <td><b>Paid Amount</b></td>
        <td > <span></span>₦<span id="paid"></span></td>
    </tr>

    <tr>

        <td><b>Previous Balance</b></td>
        <td><span></span>₦<span id="before"></span></td>
    </tr>

    <tr>
          <td><b> New Balance </b></td>
        <td> <span></span>₦<span id="after"></span></td>
    </tr>
    <tr>

        <td><b>Smart card/ IUC Number</b></td>
        <td id="num"> </td>
    </tr>

   

    <tr>

        <td><b>Package</b></td>
        <td id ="plan"></td>

    </tr>

    <tr>

        <td><b>Status</b></td>
        <td id ="status"></td>
    </tr>


    <tr>

        <td><b>Date</b></td>
        <td id ="date"></td>
    </tr>

</table>

        </div>
     
        <div class="modal-footer">
            <a href = "/profile" class="btn btn-secondary">OK</a>
           
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




<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script>
     $("#id_cablename").change(function () {
        var url = "/ajax/loadcableplans/"; // get the url of the `load_cities` view
        var cablenameId = $(this).val(); // get the selected country ID from the HTML input

        $.ajax({ // initialize an AJAX request
            url: url, // set the url of the request (= localhost:8000/hr/ajax/load-cities/)
            data: {
                'cablename': cablenameId // add the country id to the GET parameters
            },
            success: function(data) { // `data` is the return of the `load_cities` view function
                $("#id_cableplan").html(data); // replace the contents of the city input with the data that came from the server
            }
        });

    });
</script>


<script>


    $("#validateiuc").click(function() {


      var iuc = $("#id_smart_card_number").val();
      var cablename =$("#id_cablename option:selected").text();
      var id_cableplan = $("#id_cableplan").val();

      if(iuc == "" || cablename == "" || id_cableplan == "" ){
          alert(" All fields are required");
      }
      else {

      $.ajax({
        type:'GET',
        beforeSend: function(){
          $('#process').css("display", "block");
          $('#displaytext').css("display", "none");

            },
        url: '/ajax/validate_iuc/',
        data: {
          'smart_card_number': iuc,
          'cablename':cablename
        },
        dataType: 'json',
        success: function (data) {
            $("#name").css("display", "block");
            $("#name").text(data.name);
            console.log(data);


        if (data.invalid == false){
             $(".process").css("display", "block");
             $("#validateiuc").css("display", "none");

        }

        },
        complete: function(){
        $('#process').css("display", "none");
         $('#displaytext').css("display", "block");

  }
      });
    }

    });
 


  </script>

  
<script>
  $("#btnsubmit").click(function() {
      var url = "/api/cablesub/"; // get the url of the `load_cities` view
      var cableplan = $("#id_cableplan").val(); // get the selected country ID from the HTML input
      var cablename = $("#id_cablename ").val();
      var smart_card_number = $("#id_smart_card_number").val();
      var token = 'Cr6klbqwpJNQ8A3T1alqDAnIslk9f4X67Wy44vQVB42e4VOJbeaS2QneEf8SEwyP';
       
      var cableplantext = $("#id_cableplan option:selected").text(); // get the selected country ID from the HTML input
      var id_cablenametext=  $("#id_cablename option:selected").text();
      var smart_card_numbertext = $("#id_smart_card_number").val();

var r = confirm("Are you sure you want to Subscribe " + " " + cableplantext  + " " + "to"+ " " +    smart_card_numbertext   );

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
          data: JSON.stringify( {"cablename": cablename, "cableplan" :cableplan, "smart_card_number":smart_card_number}),
      success: function (data) {
 
  console.log(data);
  console.log(data.id);
  $('#ref').text(String(data.ident));
 
  $('#plan').text(String(data.package));
  $('#amt').text(String(data.plan_amount));
  $('#status').text(String(data.Status));
  $('#num').text(String(data.smart_card_number));
  $('#before').text(String(data.balance_before));
  $('#after').text(String(data.balance_after));
  $('#paid').text(String(data.paid_amount));
  $('#date').text(String(data.create_date));
 


  $('#successModal').modal()

  },
          error: function(XMLHttpRequest, textStatus, errorThrown) {
              var parsed_data = JSON.parse(XMLHttpRequest.responseText);
              $('#errmessage').text(String(parsed_data.error))
              $('#myModal').modal()
   
    },

   complete: function(){
      $('#process2').css("display", "none");
        $('#subm').css("display", "block");

}
      });
  }
  });
</script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.22/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
  
  <script type="text/javascript">
       document.getElementById('btnPrint').addEventListener('click',
       Export);

  function Export() {
            html2canvas(document.getElementById('receipt'), {
                onrendered: function (canvas) {
                    var data = canvas.toDataURL();
                    var docDefinition = {
                        content: [{
                            image: data,
                            width: 500
                        }]
                    };
                    pdfMake.createPdf(docDefinition).download("cablesubreceipt.pdf");
                }
            });
        }  </script>

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