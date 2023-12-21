<?php
    session_start();
        if(!isset($_SESSION['valid'])){
            header('location: login.php');
        }
    require_once('../Controller/cusDatabyCus.php');

    while($data = mysqli_fetch_assoc($cusgetdata)){
                $email = $data['email'];
                $name1 = $data['name1'];
                $name2 = $data['name2'];
                $cnum = $data['cnum'];
                $dob = $data['dob'];
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
    <form method="post" action="../Controller/cusupdate.php">
    <table border="0" width = "100%" height = "100%">
            <tr >
                <td height="5%" width="15%" align="center">
                    <img src="../Images/logo.png" height="100" width="100" alt="Green Dhaka Logo">
                </td>
                <td align="center" height="5%"width="70%">
                    <h1 style="color:SeaGreen;">  </h1> <br>
                    <h1 style="color:SeaGreen;"> Green Dhaka </h1>
                    <h4 style="color:SeaGreen;"> An initiative of Dhaka City Corporation </h4>
                    <p style="color:SeaGreen;"> <b> Account Management </b> </p>
                    
                </td>
                <td >
                <table border="0" align="center">
                    <tr>
                        <td> <img src="../Images/user.png" height="50" width="50" alt="User Logo">
                        </td>
                        <td align="right"><?php echo $_SESSION['email']; ?> <br>
                            
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
                <h3 style="color:SeaGreen;"> Edit User Details  </h3>
                <h4 style="color:SeaGreen;"> <?php echo $_SESSION['email']; ?>  </h4>
                
                <table border="0" align ="center">
                <tr align ="left">
                    
                
                </tr>
                <tr align ="left">
                    <td width="60%"> Email
                    </td>
                    <td>:
                    </td>
                    <td>
                   <input type="email" name="upemail" value="<?php echo $email; ?> "><br>
                    </td>
                
                </tr>
                <tr align ="left">
                    <td width="60%"> First Name
                    </td>
                    <td>:
                    </td>
                    <td>
                   <input type="text" name="upfirstName" value="<?php echo $name1; ?> "><br>
                    </td>
                
                </tr>
                <tr align ="left">
                    <td width="60%">  Last Name
                    </td>
                    <td>:
                    </td>
                    <td>
                    <input type="text" name="uplastName" value="<?php echo $name2; ?>"><br>
                    </td>
                
                </tr>
                <tr align ="left">
                    <td width="60%"> Contact Number
                    </td>
                    <td>:
                    </td>
                    <td>
                     <input type="text" name="upcontactNumber" value="<?php echo $cnum; ?>"><br>
                    </td>
                </tr>
                <tr align ="left">
                    <td width="60%">  Date Of Birth
                    </td>
                    <td>:
                    </td>
                    <td>
                     <input type="Date" name="updob" value="<?php echo $dob; ?>"><br>
                    </td>
                </tr>
                
                </table>
                <br>
               <br><br>
                <input type="submit" value="Update">
                <input type="reset" value="Clear">
                <br>

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