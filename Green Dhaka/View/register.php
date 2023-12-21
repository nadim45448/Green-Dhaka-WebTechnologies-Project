
    <style>
  
         body {
              background: url('../Images/registerbackground.jpg');
              background-position: center;
              background-size: cover;
            }
         }
    </style>

    <html>
    <head>
        
    </head>
       
    <body>


        <form method="post" action="../Controller/registrationcheck.php" onsubmit="return validation()">
          <table border="0" width = "100%" height = "100%">
            <tr height="5%">
                <td height="" width="15%" align="center">
                
                </td>
                <td align="center" height=""width="70%">
                <br><br><br>
                <img src="../Images/logo.png" height="125" width="140" alt="Green Dhaka Logo">
                <h4 style="color:SeaGreen;"> An initiative of Dhaka City Corporation </h4>
                   <b> <p style="color:SeaGreen;"> Customer Registration </p></b>
                    
                </td>
                <td>
                </td>
            </tr>
            <tr>
                <td >
                </td>
                <td align="center">
                <p style="color:Green;"> 
                
                Email<br> 
                <input type="email" id="email" name="email" value="" /> <br>
                First Name<br> 
                <input type="text" id="firstName" name="firstName" value="" /> <br>
                Last Name<br> 
                <input type="text" id="lastName" name="lastName" value="" /> <br>
                Contact Number<br> 
                <input type="tel" id="contactNumber" name="contactNumber" value="" />
                <br>
                Date Of Birth<br> 
                <input type="Date"  id="dob" name="dob" value="" /> <br>
                Password<br> 
                <input type="password"  id="password" name="password" value="" /> <br>
                Confirm Password<br> 
                <input type="password"  id="confirmPassword" name="confirmPassword" value="" /> <br>
                
               
                <p id="error-message" style="color: red;"></p>
                
                <input type="submit" name="submit" value="Submit" />
                <br><br>
                Already Have an Account! <a href="login.php" text-align="right"> Login</a><br>

                <a href="home.html" text-align="right"> Home</a>

                </p>

                </td>
                <td >
                </td>
                
            </tr>
            <tr height ="5%">
            <tr>
            
           
            <tr height ="5%" align="center">
                <td>
                </td>
                <td>
                <br>
                <p style="color:white;background-color:SeaGreen;"> Call now : +88017xxxxxxx Email:greendhaka@gmail.com Address: Kuril,KA,187/0A Copyright ⓒ 2023</p>
                
                </td>
                <td>
                </td>
            </tr>
            

    </table>  

        </form>
            <script src="../Asset/registration.js"></script>
        </body>
</html>
           
        