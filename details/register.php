<?php 
session_start();
?>
<!doctype html>
<html lang="en">


<!-- Mirrored from www.ICONSMS.com/signup/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 23 Oct 2020 12:41:26 GMT -->
<head>
    <!-- Required meta tags -->
    <meta http-equiv="content-type" charset="text/html;utf-8">

    <title>Signup with ICONSMS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="theme-color" content="#1a7922">

    <link rel="apple-touch-icon" sizes="180x180" href="../static/img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../static/img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../static/img/favicon-16x16.png">
    <link rel="manifest" href="../static/img/site.html">

<meta name="msapplication-TileColor" content="#1a7922">
<meta name="msapplication-TileImage" content="../static/img/bg.html">
<meta itemprop="name" content="ICONSMS- Buy Airtime and Data for all Network. Make payment for DSTV, GOTV, PHCN other services">
    <meta itemprop="description" content="Buy Cheap Internet Data Plan and Airtime Recharge for Airtel, 9mobile, GLO, MTN, Pay DSTV, GOTV, PHCN.">
    <meta itemprop="image" content="../static/img/bg.html">
  <link rel="stylesheet" href="../static/ogbam/w3.css">

    <!-- Twitter Card data -->
    <meta name="twitter:card" content="../static/img/bg.html">
    <meta name="twitter:title" content="ICONSMS- Buy Airtime and Data for all Network. Make payment for DSTV, GOTV, PHCN other services">
    <meta name="twitter:description" content="Buy Cheap Internet Data Plan and Airtime Recharge for Airtel, 9mobile, GLO, MTN, Pay DSTV, GOTV, PHCN.">
    <meta name="twitter:image:src" content="../static/img/bg.html">

    <!-- Open Graph data -->
    <meta property="og:locale" content="en_US">
    <meta property="og:title" content="ICONSMS- Buy Airtime and Data for all Network. Make payment for DSTV, GOTV, PHCN other services">
    <meta property="og:image" content="../static/img/bg.html">
    <meta property="og:description" content="Buy Cheap Internet Data Plan and Airtime Recharge for Airtel, 9mobile, GLO, MTN, Pay DSTV, GOTV, PHCN."/>
    <meta property="og:site_name" content="ICONSMS"/>
    <meta property="og:url" content="https://www.iconsms.com.ng/">
    <meta property="og:type" content="website">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../static/assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="../static/assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="../static/assets/libs/css/style.css">
    <link rel="stylesheet" href="../static/assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="../../cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
    html,
    body {
        height: 100%;
    }

    body {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-align: center;
        align-items: center;
        padding-top: 40px;
        padding-bottom: 40px;
        background-color: #1a7922;


    }
    </style>
</head>

<body>
    <!-- ============================================================== -->
    <!-- login page  -->
    <!-- ============================================================== -->
    <div class="splash-container">

        <div class="card ">
            

            <div class="card-header text-center">
                <a href="../index.html" style="font-size: 30px; font-weight: bolder;">ICONSMS</a>
            </div>
            <div class="card-body">

             



                <form method="POST" action="signup.php">
                <?php
                if(isset($_SESSION["userSmsId"])) {

                   //header("Location: login.php?login=you are logged in already");
                  echo "<div  class='text-center'> <p style='display: flex;  color: #000; font-size: 14px;'>You are already logged in. You can register with another Email Address & Username or Visit the DashBoard or Home Page to explore our Services.</p></div><br>";
              }
              ?>
                    <!-- <input type="hidden" name="csrfmiddlewaretoken" value="fAaJBC688ipVtvdYHDFe5s40gSOvCjoG9U8dcceqlkA0FklvwVz4HCRcVHG0Y43X">
                    <div class="form-group">
                        
                        
 -->

    
    <div id="div_id_FullName" class="form-group">
        
            <label for="id_FullName" class=" requiredField">
                FullName<span class="asteriskField">*</span>
            </label>
        

        

        

        
            
                <div class="">
                    <input type="text" name="fullName" maxlength="200" class="textinput textInput form-control" required id="id_FullName">
                    


    




    



                </div>
            
        
    </div>
    



            
                        


    
    <div id="div_id_username" class="form-group">
        
            <label for="id_username" class=" requiredField">
                Username<span class="asteriskField">*</span>
            </label>
        

        

        

        
            
                <div class="">
                    <input type="text" name="uid" autofocus class="textinput textInput form-control" required id="id_username">
                    


    




    



                </div>
            
        
    </div>
    



            
                        


    
    <div id="div_id_email" class="form-group">
        
            <label for="id_email" class=" requiredField">
                Email<span class="asteriskField">*</span>
            </label>
        

        

        

        
            
                <div class="">
                    <input type="email" name="mail" maxlength="254" class="emailinput form-control" required id="id_email">
                    


    




    



                </div>
            
        
    </div>
    



            
                        


    
    <div id="div_id_Phone" class="form-group">
        
            <label for="id_Phone" class=" requiredField">
                Phone<span class="asteriskField">*</span>
            </label>
        

        

        

        
            
                <div class="">
                    <input type="text" name="phone" maxlength="11" minlength="11" class="textinput textInput form-control" required id="id_Phone">
                    


    




    



                </div>
            
        
    </div>
    



            
                        


    
    <div id="div_id_Address" class="form-group">
        
            <label for="id_Address" class=" requiredField">
                Address<span class="asteriskField">*</span>
            </label>
        

        

        

        
            
                <div class="">
                    <input type="text" name="iconAddress" maxlength="500" class="textinput textInput form-control" required id="id_Address">
                    


    




    



                </div>
            
        
    </div>
    



            
                        


    
    <div id="div_id_referer_username" class="form-group">
        
            <label for="id_referer_username" class="">
                Referal username [optional]
            </label>
        

        

        

        
            
                <div class="">
                    <input type="text" name="referal" class="textinput textInput form-control" id="id_referer_username">
                    


    




    
    
        <small id="hint_id_referer_username" class="form-text text-muted">Leave blank if no referal</small>
    




                </div>
            
        
    </div>
    



            
                        


    
    <div id="div_id_password1" class="form-group">
        
            <label for="id_password1" class=" requiredField">
                Password<span class="asteriskField">*</span>
            </label>
        

        

        

        
            
                <div class="">
                    <input type="password" name="pwd" class="textinput textInput form-control" required id="id_password1">
                    


    




    
    
        <small id="hint_id_password1" class="form-text text-muted">min_lenght-8 mix characters [i.e musa1234] </small>
    




                </div>
            
        
    </div>
    



            
                        


    
    <div id="div_id_password2" class="form-group">
        
            <label for="id_password2" class=" requiredField">
                Comfirm Password<span class="asteriskField">*</span>
            </label>
        

        

        

        
            
                <div class="">
                    <input type="password" name="pwd-repeat" class="textinput textInput form-control" required id="id_password2">
                    


    




    
    
        <small id="hint_id_password2" class="form-text text-muted">Enter same password as before</small>
    




                </div>
            
        
    </div>
    
    <div id="usertype" class="form-group">
        
        <label for="userType" class=" requiredField">
           UserType[Optional]
        </label>
      <select class="form-control" id="userType" name="userType">
      <option disabled selected value="-1">Select User Type </option>
      <option disabled value="Admin">Admin </option>
      <option selected value="User">You are a User [Not Editable] </option>
      </select>
      </div>


                
       
                <div id="signup-submit" class="form-group">
                    <input type="submit" class="btn btn-lg btn-block form-control" style="background: linear-gradient(45deg, #1a7921, #1a7922); color: white;" id="signup-submit" name="signup-submit" onClick="this.form.submit(); this.disabled=true; this.innerText ='Authenticating.....'; " value="Sign Up">
                </div>
                </form>
            </div>
            <div class="card-footer bg-white p-0">
                <div class="card-footer-item card-footer-item-bordered">
                    <a href="../"  class="footer-link">MyAccount</a>
                    </div>
                    <div class="card-footer-item card-footer-item-bordered">
                    <a href="login" class="footer-link">Login</a>
                    
</div>
</div>

            </div>
        </div>

    <!-- </div> -->

    <!-- ============================================================== -->
    <!-- end login page  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <script src="../static/assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="../static/assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <script>

        console.log("")

        $("#id_referer_username").val("");

        </script>
</body>


<!-- Mirrored from www.ICONSMS.com/signup/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 23 Oct 2020 12:41:26 GMT -->
</html>