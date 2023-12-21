<?php
    if(isset($_GET['err'])){
        echo "null username/password";
    }
?>
    <link rel="stylesheet" href="../Asset/login.css">
        <form method="post" action="../Controller/admincheck.php">
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

                Email<br> <input type="email" name="email" value="" /> <br>
                Password<br> <input type="password" name="password" value="" /> <br><br>
                <input type="submit" name="submit" value="Submit" /><br>
                
                <div id="email_error">Please fill up your Email </div>
                <div id="pass_error">Please fill up your Password</div>
                <div id="validation_error">Invalid User</div>

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
        