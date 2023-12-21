<?php
session_start();
    if(!isset($_SESSION['valid'])){
        header('location: login.php');
    }
   
?>
    <style>
            body {
                background-image: url('../Images/white.jpg');
                background-repeat: no-repeat;
                background-size: 1500px 600px;
                
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
    <form method="post" name="upload" action="../Controller/feedPostUpload.php" onsubmit="return validateForm()" enctype="multipart/form-data">
    <table border="0" width = "100%" height = "100%">
            <tr >
                <td height="5%" width="15%" align="center">
                    <img src="../Images/logo.png" height="100" width="100" alt="Green Dhaka Logo">
                </td>
                <td align="center" height="5%"width="70%">
                    <h1 style="color:SeaGreen;">  </h1> <br>
                    <h1 style="color:SeaGreen;"> Green Dhaka </h1>
                    <h4 style="color:SeaGreen;"> An initiative of Dhaka City Corporation </h4>
                    
                    
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
            <td align ="center">
                <a href="CusNewsFeed.php"> News Feed </a><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

            </td>
                <td align ="center">
                <h1 style="color:SeaGreen;"> <b> Write a Post </b> </h1>
                <table border="1" align="">
                <tr>
                    <td align="left">
                    <?php echo $_SESSION['email']; ?>
                    </td>
                </tr>
                <tr>
                    <td>Write your Caption :<br>
                    <textarea  name="caption" rows="10" cols="60"></textarea>
                    </td>
                </tr>
                <tr>
                    <td>
                    Attach Photo here :
                    <input type="file" name="image" id = "image" accept=".jpg, .jpeg, .png" value="">
                    </td>
                </tr>
                <tr>
                    <td align ="center">
                    <input type="submit" name="submit" value="Post" size="23"/>
                </tr>
                </table>
                <br>
                <b><span class="formerror"> </span></b>

                </td>

                <td align ="center">
                <a href="CusNewsFeedPost.php"> My Posts </a><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

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
    <script src="../Asset/newsfeed.js"></script>
