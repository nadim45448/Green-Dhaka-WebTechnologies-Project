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
                        <td align="center">  <br>
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
            <td>
          
            
            </td>
                <td align ="center">
                <br><h3 style="color:SeaGreen;"> About Us  </h3>
                <table border="0" align ="center">
                <tr>
                    <td width="50%">
                    <img height="350" width="550" src="../Images/aboutus.jpg">
                    
                    </td>
                    <td>
                    </td width="5%">
                    <td>
                    <h2>MISSION:</h2>
                    <p>To transform Dhaka into a sustainable and eco-friendly metropolis 
                        by implementing innovative solutions, promoting environmental awareness, 
                        and fostering community engagement. 
                        Our mission is to create a city where green spaces thrive, pollution is minimized, 
                        and residents enjoy a high quality of life in harmony with nature</p>
                        <br>
                    <h2>VISION:</h2>
                    <p>
                        To be the driving force behind Dhaka's evolution into a model of environmental sustainability
                        and resilience. We envision a 'Green Dhaka' characterized by lush greenery, efficient waste management, 
                        clean air and water, and a commitment to sustainable practices. 
                        Our vision is a city where future generations inherit a thriving and vibrant urban environment 
                        that reflects our dedication to ecological balance and responsible stewardship.
                    </p>
                    </td>
                    



                </tr>
                
                </table>
                
                
                </td>

                <td>
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