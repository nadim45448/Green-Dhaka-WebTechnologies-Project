<?php
    if(isset($_GET['err'])){
        echo "null username/password";
    }
?>
<head>
    <script defer src="../Asset/login.js"></script>
    
</head>
<body>
    <style>
  
         body {
              background: url('../Images/registerbackground.jpg');
              background-position: center;
              background-size: cover;
            }
         }
    </style>
         <form method="post" action="../Controller/logincheck.php" onsubmit="return validation()">
          <table border="0" width = "100%" height = "100%">
            <tr >
                <td height="2%" width="15%" align="center">
                
                </td>
                <td align="center" height="2%"width="70%">
                <br><br>
                <img src="../Images/logo.png" height="125" width="140" alt="Green Dhaka Logo">
                <h4 style="color:SeaGreen;"> An initiative of Dhaka City Corporation </h4>
                   <b> <p style="color:SeaGreen;"> Login </p></b>
                    
                </td>
                <td>
                </td>
            </tr>
            <tr>
                <td >
                </td>
                <td align="center">
                <p style="color:Green;"> 
                Email<br> <input type="email" id="email" name="email" value="" /> <br>
                Password<br> <input type="password" id="password" name="password" value="" /> 
                <h4 id="message"></h4><br><br>
                <input type="submit" name="submit" value="Submit" /><br><br>
                Create a new account! <a href="register.php" text-align="right"> Register</a><br>
                <a href="fpass.php" text-align="left">Forgotten Password?</a>

                <br>
                <a href="home.html" text-align="right"> Home</a>
                <br><br><br><br><br>
                </p>

                </td>
                <td >
                </td>
                
            </tr>      
           <tr height ="5%">
            <tr>
            <tr height ="4%" align="center">
                <td>
                </td>
                <td>
                <p style="color:white;background-color:SeaGreen;"> Call now : +88017xxxxxxx Email:greendhaka@gmail.com Address: Kuril,KA,187/0A Copyright ⓒ 2023 </p>
                
                </td>
                <td>
                </td>
            </tr>
            

    </table>  

        </form>
        <script >
        function validation() {
    let email = document.getElementById('email').value;
    let password = document.getElementById('password').value;
    if (!email) {
        document.getElementById('message').innerHTML = "Email Couldn't Be Empty!";
        return false;
    }
    if (!password) {
        document.getElementById('message').innerHTML = "Password Couldn't Be Empty!";
        return false;
    }
    if (password == email) {
        document.getElementById('message').innerHTML = "Email and Password cannot be same!";
        return false;
    }
}

        </script>