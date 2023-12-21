<?php
    require_once('../Model/customer.php');  
    if(isset($_GET['email'])){
    $email=$_GET['email'];}
	$cusgetdata=searchCustomer($email);
    if($cusgetdata != null){
        while($data = mysqli_fetch_assoc($cusgetdata)){
                $email = $data['email'];
                $name1 = $data['name1'];
                $name2 = $data['name2'];
                $cnum = $data['cnum'];
                $dob = $data['dob'];
            }
    }
    
   
?>
    <link rel="stylesheet" href="../Asset/styleAdmin.css">
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
                    <p style="color:SeaGreen;"> <b>  </b> </p>
                    
                </td>
                <td >
                <table border="0" align="center">
                    <tr>
                        <td> <img src="../Images/user.png" height="50" width="50" alt="User Logo">
                        </td>
                        <td align="right"> <br>
                             <a href="adminDashboard.php">Dashboard</a>
                             <a href="../Controller/logout.php"> Logout <a>
                        </td>
                    </tr>
                
                </table>
                   
                </td>
            </tr>
            <tr>
                <td colspan="3" align="center" height ="8%">
                  

                </td>
                
            </tr>
            <tr>
            <td>
        
            </td>
                <td align ="center">
                <h3 style="color:SeaGreen;"> <b> User Details Update </b> </h3>
                <br>
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