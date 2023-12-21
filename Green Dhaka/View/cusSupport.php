<?php
session_start();
    if(!isset($_SESSION['valid'])){
        header('location: login.php');
    }
?>
    <style>
  
         body {
              background-image: url('../Images/white.jpg');
              background-position: center;
              background-size: cover;
            }
         a:link {
                background-color: SeaGreen;
                color: white;
                padding: 5px 5px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
         }
         a:visited {
                background-color: SeaGreen;
                color: white;
                padding: 5px 5px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
         }
         a:hover {
                background-color: transparent;
                color: Black;
                padding: 5px 5px;
                text-align: center;
                text-decoration: none;
                display: inline-block;

         }
    </style>
    <form method="post" action="../Controller/calculator.php">
    <table border="0" width = "100%" height = "100%">
            <tr >
                <td height="5%" width="15%" align="center">
                    <img src="../Images/logo.png" height="100" width="100" alt="Green Dhaka Logo">
                </td>
                <td align="center" height="5%"width="70%">
                    <h1 style="color:SeaGreen;">  </h1> <br>
                    <h1 style="color:SeaGreen;"> Green Dhaka </h1>
                    <h4 style="color:SeaGreen;"> An initiative of Dhaka City Corporation </h4>
                    <p style="color:SeaGreen;"> <b>  </b> </p>
                    
                </td>
                <td >
                <table border="0" align="center">
                    <tr>
                    <td> <img src="../Images/user.png" height="50" width="50" alt="User Logo">
                        </td>
                        <td align="center">  
                        <a href="cusAccount.php"> <?php echo $_SESSION['email']; ?> <a> <br>
                             <a href="cusDashboard.php"> Dashboard <a>
                             <a href="../Controller/logout.php"> Logout <a>
                        </td>
                    </tr>
                
                </table>
                   
                </td>
            </tr>
            <tr>
                <td colspan="3" align="center" height ="8%">
                    <a href="cusGardenregistration.php">Garden Registration</a>
                    <a href="cusSolarregistration.php">Solar Panel Request</a>
                    <a href="CusNewsFeed.php">News feed</a>
                    <a href="cusSubsidiarycalculator.php">Subsidiary Calculator</a>
                    <a href="cusEshop.php">E-shop</a>
                    <a href="cusDonation.php">Donation</a>
                    <a href="cusHiringagardener.php">Hire a Gardener</a>
                    <a href="cusExpert.php">Expert opinion</a>
                    <a href="cusHomevisit.php">Schedule a Home Visit</a>
                    <a href="cusSupport.php">Support</a>
                    <a href="cusServiceHistory.php">Service History</a>
                    <a href="cusAboutUS.php">About Us</a>
                    <a href="FAQ.php">FAQ</a>

                </td>
                
            </tr>
            <tr>
            
                <td align ="center" colspan="3">
                <h1 style="color:SeaGreen;"> <b> Support </b> </h1>
                <table border="0" align ="center">
                <tr>
                    <td width="500" >
                    <a href="cusChat.php"><h3> <b> Chat with us </b> </h3>  </a> <br><br> 
                    <a href="Contact.php"><h3> <b> Contact Us </b> </h3>  </a> <br><br>
                    <a href="cusFeedback.php"><h3> <b> Give us Feedback </b> </h3>  </a> <br><br>
                    </td>
                    <td td width="500" >
                    <img src="../Images/support.png" height="300" width="400" >
                    </td>
                </tr>




                </table>
                
                
                </td>

                
            </tr>
           
            <tr height ="5%" align="center">
                <td>
                </td>
                <td>
                <p style="color:white;background-color:SeaGreen;"> Call now : +88017xxxxxxx Email:greendhaka@gmail.com Address: Kuril,KA,187/0A </p>
                
                </td>
                <td>
                </td>
            </tr>
            

    </table>
    </form>