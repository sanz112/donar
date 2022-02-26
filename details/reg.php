<html>
    <head>

    </head>
    <body>
                <form method="POST" action="signup.php">
                    
                    <input type="text" name="fullName"  placeholder="fullname">  

                    <input type="text" name="uid" autofocus placeholder="username">
                
                    <input type="email" name="mail" placeholder="mail">
                   <input type="number" name="phone" placeholder="phone">
                    
                    <input type="text" name="iconAddress"placeholder="address">          


                    <input type="password" placeholder="password" name="pwd">

     <input type="password" name="pwd-repeat" placeholder="confirm password">

      <select id="userType" name="userType">
      <option selected value="1">Select User Type </option>
      <option  value="Admin">Admin </option>
      <option selected value="User">You are a User [Not Editable] </option>
      </select>
            
                    <input type="submit" value="Sign Up">
                </form>
</body>
    </html>       