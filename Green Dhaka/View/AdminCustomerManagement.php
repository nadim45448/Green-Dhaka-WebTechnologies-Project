<?php
    require_once('../Controller/cusDatabyadmin.php');

?>
   <link rel="stylesheet" href="../Asset/styleAdmin.css">
    <form method="post" action="">
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
                <h3 style="color:SeaGreen;"> <b> Customer Management </b> </h3>
                <br>
                <table border="1" width ="80%" align ="center">
                        <tr >
                            <td> Email   </td>
                            <td> First Name   </td>
                            <td> Surname   </td>
                            <td> Contact Number   </td>
                            <td> Date Of Birth   </td>
                            <td>    </td>
                             
                        </tr>
                        <?php while($data = mysqli_fetch_assoc($admingetdata)){ 
                            
                            $email = $data['email'];
                            $name1 = $data['name1'];
                            $name2 = $data['name2'];
                            $cnum = $data['cnum'];
                            $dob = $data['dob'];
                            
                            echo'<tr>
                                <td> '.$email.'    </td>
                                <td>  '.$name1.'  </td>
                                <td>  '.$name2.'   </td>
                                <td>  '.$cnum.'   </td>
                                <td>  '.$dob.'   </td>
                                <td>  
                                    <button><a href="adminCusUpdate.php?email='.$email.'"> Update </a></button>
                                    <button><a href="../Controller/cusDataDelete.php?email='.$email.'"> Delete </a></button>
                                
                                </td>
                                </tr>
                            ';
                        }
                        ?>
                                
                              
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