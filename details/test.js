$("select.select").change(function() {
            var selectednetwork = $(this).children("option:selected").val();
            var networkd = $("#id_network option:selected").text();


            if (networkd == "MTN NG") {
                 $('form input[type="submit"]').prop("disabled", false);
                $("#id_amount").keyup(function() {
                    $("#charge").text('#' + (Number($("#id_amount").val()) * Number("0.99")));
                   var charged = $("#id_amount").val() * 0.99;
                    $("input#wallet").val(charged);
                   // $("#discount").text('   (1% Discount)');


                });

            }


            else if (networkd == "GLO NG") {
                 $('form input[type="submit"]').prop("disabled", false);
                $("#id_amount").keyup(function() {
                    $("#charge").text('#' + (Number($("#id_amount").val()) * Number("0.98")));
                   var charged = $("#id_amount").val() * 0.98;
                    $("input#wallet").val(charged);
                    //$("#discount").text('   (2% Discount)');


                });

            }
            else if (networkd == "AIRTEL NG") {
                 $('form input[type="submit"]').prop("disabled", false);
                $("#id_amount").keyup(function() {
                    $("#charge").text('#' + (Number($("#id_amount").val()) * Number("0.99")));
                  var charged = $("#id_amount").val() * 0.99;
                    $("input#wallet").val(charged);
                   // $("#discount").text('   (1% Discount)');


                });

            }else if (networkd ==  "9MOBILE NG") {
                 $('form input[type="submit"]').prop("disabled", false);
                $("#id_amount").keyup(function() {
                    $("#charge").text('#' + (Number($("#id_amount").val()) * Number("0.99")));
                     var charged = $("#id_amount").val() * 0.99;
                    $("input#wallet").val(charged);
                   // $("#discount").text('   (1% Discount)');


                });

            }


        });


  $("form#paymentForm").on("submit", function(e) {
  e.preventDefault();
var select = document.querySelector("select#platforms").selectedIndex;
if(select == 0) {
$.ajax("../../pay_env", {
    method: "GET",
    dataType: "json",
    contentType: "application/json",
    success: function(response) {
     // console.log(JSON.stringify(response.key));
      var env = response.key;
      let envkey = JSON.stringify(env);
   let  handler = PaystackPop.setup({
    key:  `${env}`, // Replace with your public key
    email: document.querySelector("input#email").value,
    amount: document.querySelector("input#wallet").value * 100,
    label: document .querySelector("input#phone").value,
    ref: 'ICONSMSAirtime_'+document.querySelector("input#request_id").value, // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
    // label: "Optional string that replaces customer email"
    onClose: function(){
      alert('Payment Tab closed.');
      window.location = window.location.protocol+'//'+window.location.hostname+"/airtime"; 
    },
    callback: function(response){
      let message = 'Payment complete! Reference: ' + response.reference;
      alert(message);
      if(typeof(Storage) !== "undefined") {
        sessionStorage.setItem('resp', response.reference);
        sessionStorage.setItem('payment', 'success');
      }
  
   var networkd = $("select[name='network'] option:selected").text();
   
     
       var request_id = $("input[name='request_id']").val();
      var client_id = $("input[name='client_id']").val();
      var swiftType = $("input[name='swiftType']").val();
       var network = $("select[name='network']").val();
      var amount = $("input[name='amount']").val();
      var mobile_number = $("input[name='mobile_number']").val();
      var confirmamount = $("input[name='confirmamount']").val();
      var platforms = $("select[name='platforms']").val();
      var airtimesubmit = $("input[name='airtimesubmit']").val();
      
      var datass = {
          'request_id' : request_id,
        'client_id' : client_id,
        'swiftType' : swiftType,
        'network' : network,
        'amount' : amount,
        'mobile_number' : mobile_number,
        'confirmamount' : confirmamount,
        'platforms' : platforms,
        'airtimesubmit' : airtimesubmit
        
      }
      //  var dat = JSON.stringify(datas);

  var r = confirm("Are you sure you want to buy AIRTIME " + " " + networkd + "  " +"N" + amount + " " + "to"+ " " +   mobile_number   );

  if (r == true) {
      $.ajax('airtimeprocess.php',  {
          method: 'POST',
          dataType: 'html',
          data : datass,
        //   contentType: "application/json",
          beforeSend: function(){
          $('#process').css("display", "block");
          $('#airtimesubmit').css("display", "none");

            }, 
      
          //contentType: 'application/json',
          success: function(data) {
              console.log(data);
              var datas =  JSON.parse(data);
          console.log(datas);
             //var datas = JSON.parse(xhr.responseText);
            // var datas = JSON.parse(data);
            console.log(datas.id);
    $('#ref').text(String(datas.id));
    $('#net').text(String(datas.plan_network));
    $('#plan').text(String(datas.plan_name));
    $('#amt').text(String(datas.plan_amount));
    $('#status').text(String(datas.Status));
    $('#num').text(String(datas.mobile_number));
    $('#before').text(String(datas.balance_before));
    $('#after').text(String(datas.balance_after));
    $('#paid').text(String(datas.paid_amount));



    $('#successModal').modal()
      
          },
            complete: function(){
        $('#process').css("display", "none");
          $('#btnsubmit').css("display", "block");

  },
          error: function(xhr, textStatus, errorThrown) {
            console.log(xhr.status + ' ' + xhr.statusCode + ' ' + xhr.statusText);
             alert("error");
                var parsed_data = JSON.parse(xhr.responseText);
                $('#errmessage').text(String(parsed_data.error))
                $('#myModal').modal();
          }
          
        });
  }
    },
  });
  handler.openIframe();
},
    error: function(xhr) {
        console.error("Error Found");
      }
  
    });
  } else {
  
    var confirmamount = $("input[name='confirmamount']").val();
    var airtimesubmit = $("input[name='airtimesubmit']").val();
    var datawal = {
      'confirmamount' : confirmamount,
      'airtimesubmit' : airtimesubmit
    }
    $.ajax("walletairtime.php", {
      method: "POST",
      data : datawal,
      dataType: 'html',
     // async: 'false',
      success: function(data) {
        //console.log(data);
        var dat = JSON.parse(data);
      //  console.log(dat.key);
       // var ky = JSON.stringify(dat.key);
        if(dat.key == "Insufficient Fund") {
          alert("Insufficient Fund. Kindly Fund Your Wallet");
          window.location= window.location.protocol+'//'+window.location.hostname+'/home?key=' + dat.key;
        } else {
          if(typeof(Storage) !== "undefined") {
            sessionStorage.setItem('payment', 'success');
            sessionStorage.setItem('responses', 'success');
          }
          
  var networkd = $("select[name='network'] option:selected").text();
   
     
       var request_id = $("input[name='request_id']").val();
      var client_id = $("input[name='client_id']").val();
      var swiftType = $("input[name='swiftType']").val();
       var network = $("select[name='network']").val();
      var amount = $("input[name='amount']").val();
      var mobile_number = $("input[name='mobile_number']").val();
      var confirmamount = $("input[name='confirmamount']").val();
      var platforms = $("select[name='platforms']").val();
      var airtimesubmit = $("input[name='airtimesubmit']").val();
      
      var datass = {
          'request_id' : request_id,
        'client_id' : client_id,
        'swiftType' : swiftType,
        'network' : network,
        'amount' : amount,
        'mobile_number' : mobile_number,
        'confirmamount' : confirmamount,
        'platforms' : platforms,
        'airtimesubmit' : airtimesubmit
        
      }
      //  var dat = JSON.stringify(datas);

  var r = confirm("Are you sure you want to buy AIRTIME " + " " + networkd + "  " +"N" + amount + " " + "to"+ " " +   mobile_number   );

  if (r == true) {
      $.ajax('airtimeprocess.php',  {
          method: 'POST',
          dataType: 'html',
          data : datass,
        //   contentType: "application/json",
          beforeSend: function(){
          $('#process').css("display", "block");
          $('#airtimesubmit').css("display", "none");

            }, 
      
          //contentType: 'application/json',
          success: function(data) {
              console.log(data);
              var datas =  JSON.parse(data);
          console.log(datas);
             //var datas = JSON.parse(xhr.responseText);
            // var datas = JSON.parse(data);
            console.log(datas.id);
    $('#ref').text(String(datas.id));
    $('#net').text(String(datas.plan_network));
    $('#plan').text(String(datas.plan_name));
    $('#amt').text(String(datas.plan_amount));
    $('#status').text(String(datas.Status));
    $('#num').text(String(datas.mobile_number));
    $('#before').text(String(datas.balance_before));
    $('#after').text(String(datas.balance_after));
    $('#paid').text(String(datas.paid_amount));



    $('#successModal').modal()
      
          },
            complete: function(){
        $('#process').css("display", "none");
          $('#btnsubmit').css("display", "block");

  },
          error: function(xhr, textStatus, errorThrown) {
            console.log(xhr.status + ' ' + xhr.statusCode + ' ' + xhr.statusText);
             alert("error");
                var parsed_data = JSON.parse(xhr.responseText);
                $('#errmessage').text(String(parsed_data.error))
                $('#myModal').modal();
          }
          
        });
  }
  
        });
        