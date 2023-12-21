<?php
session_start();
    if(!isset($_SESSION['valid'])){
        header('location: login.php');
    }
    $con = mysqli_connect('127.0.0.1', 'root', '', 'greendhaka');
    $sql = "SELECT * FROM `feed`where email='{$_SESSION['email']}'";
    $result = mysqli_query($con, $sql);
?>
    <style>
            body {
                background-image: url('../Images/white.jpg');
                background-repeat: no-repeat;
                background-size: 1500px 600px;
                
            }

            .panel a:link {
                background-color: SeaGreen;
                color: white;
                padding: 5px 5px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
            }

            .panel a:visited {
                background-color: SeaGreen;
                color: white;
                padding: 5px 5px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
            }

            .panel a:hover {
                background-color: transparent;
                color: Black;
                padding: 5px 5px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
            }
    </style>
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
                        <td> 
                        </td>
                        <td align="right"> 
                                <div class="panel">
                            <a href="cusAccount.php"> <?php echo $_SESSION['email']; ?> <a> <br>
                             <a href="cusDashboard.php"> Dashboard <a>
                             <a href="../Controller/logout.php"> Logout <a></div>
                        </td>
                    </tr>
                
                </table>
                   
                </td>
            </tr>
            <tr>
                <td colspan="3" align="center" height ="8%">
                <div class="panel">
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
                    </div>

                </td>
                
            </tr>
            <tr>
            <td align ="center" height ="15%">
            <div class="panel">
                <a href="CusNewsFeed.php"> News Feed </a></div>

            </td>
                <td align ="center" height ="15%">
                <br>
                <h1 style="color:SeaGreen;"> <b> My Post </b> </h1><br>
                
                

                </td>
                
                <td align="center" height ="15%">
                <div class="panel">
                <a href="CusNewsFeedUpload.php"> Make a Post </a></div>
                </td>
            </tr>
            <tr>
            <td>
            </td>
            <td>
            
                        <?php while($data = mysqli_fetch_assoc($result)){
                            $pid = $data['pid'];
                            $email = $data['email'];
                            $caption = $data['caption'];
                            $image = $data['image'];
                            $time = $data['date'];
                            if($image != null){
                                echo'<br>
                                <table border="1" align="center" style="width:500px">
                                <tr><td>
                               <table border="0" align="center" style="width:500px">
                                <tr>
                                <td>
                                 <p style="color:Green;">
                                    <b> #'.$email.'  </b> </p> </td>
                                    <td>'.$time.' </td>
                                </tr>
                                <tr>
                                <td>  '.$caption.'  </td> </tr>
                               <tr>
                                <td align="center"><a href="../Asset/Feed/'.$image.'"> <img src="../Asset/Feed/'.$image.'" height="60%" width="60%"> </a> </td> </tr>
                                <tr>
                                <td>  Reaction  </td> </tr>
                               </table>
                                </td></tr>
                        
                                </table>
                            ';
                            }
                            else{
                                echo'<br>
                                <table border="1" align="center" style="width:500px">
                                <tr><td>
                               <table border="0" align="center" style="width:500px">
                                <tr>
                                <td>
                                 <p style="color:Green;">
                                    <b> #'.$email.'  </b> </p> </td>
                                     <td>'.$time.' </td>
                                </tr>
                                <tr>
                                <td>  '.$caption.'  </td> </tr>
                               
                                <tr>
                                <td>  Reaction  </td> </tr>
                               </table>
                                </td></tr>
                        
                                </table>
                            ';
                            }
                        }
                        ?>
                       

           
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
 