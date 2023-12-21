<?php
 session_start();
    if(!isset($_SESSION['valid'])){
        header('location: login.php');
    }


?>
<head>
    <script src="../Asset/calculator.js" defer></script>
</head>
<body>
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
                        <td align="right"> 
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
            <p style="color:SeaGreen;"> 
            -   To secure a subsidiary for garden and solar panel installations, initiate the process by sending a formal request via mail to the city corporation or contact our support.
            <br>
            -   Include supporting documents or plans to aid in the evaluation process.
            <br>
            -   Adhering to these steps enhances the chances of successfully obtaining the subsidiary, also promoting sustainability and benefiting our community and environment.
            <br> </p>
            
            </td>
                <td align ="center">
                <h3 style="color:SeaGreen;"> Subsidiary Calculator  </h3>
                <table border="0" align ="center">
                <tr align ="left">
                    
                
                </tr>
                <tr align ="left">
                    <td width="60%"> Area of Rooftop (Sqr-ft)
                    </td>
                    <td>:
                    </td>
                    <td>
                    <input type="number" id="rArea" >
                    </td>
                
                </tr>
                <tr align ="left">
                    <td width="60%">  Area of Garden (Sqr-ft)
                    </td>
                    <td>:
                    </td>
                    <td>
                    <input type="number" id="gArea" >

                    </td>
                
                </tr>
                <tr align ="left">
                    <td width="60%"> Area of Solar panel (Sqr-ft)
                    </td>
                    <td>:
                    </td>
                    <td>
                    <input type="number" id="sArea" >

                    </td>
                </tr>
                </table>
                <br>
               <br><br>
                <input type="button" id="submitButton" value="Calculate">
                 <input type="button" id="clearButton" value="Clear">
                <br>
                <div id="result"></div>
                
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