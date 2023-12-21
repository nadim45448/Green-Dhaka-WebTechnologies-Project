<?php
   $conn = mysqli_connect('localhost','root','','greendhaka') or die('connection failed');
    $result = mysqli_query($conn, "SELECT * FROM `order`");
?>
   <link rel="stylesheet" href="../Asset/styleAdmin.css">
    <form method="post" action="../Controller/solarinsert.php">
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
                             <a href="login.php"> Logout <a>
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
                <h3 style="color:SeaGreen;"> Order List  </h3>

                    <table border="1" width ="90%" align ="center">
                        <tr >
                            <td> Name   </td>
                            <td> Number  </td>
                            <td> Email   </td>
                            <td> Payment Method   </td>
                            <td> Flat  </td>
                            <td> Street  </td>
                            <td> City   </td>
                            <td> state   </td>
                            <td> Country   </td>
                            <td> Zip  </td>
                            <td> Products   </td>
                            <td> Bill   </td>
                        </tr>
                        <?php while($data = mysqli_fetch_assoc($result)){ ?>
                                <tr>
                                    <td><?=$data['name']?></td>
                                    <td><?=$data['number']?></td>
                                    <td><?=$data['email']?></td>
                                    <td><?=$data['method']?></td>
                                    <td><?=$data['flat']?></td>
                                    <td><?=$data['street']?></td>
                                    <td><?=$data['city']?></td>
                                    <td><?=$data['state']?></td>
                                    <td><?=$data['country']?></td>
                                    <td><?=$data['pin_code']?></td>
                                    <td><?=$data['total_products']?></td>
                                    <td><?=$data['total_price']?></td>
                                </tr>
                              <?php  } ?>
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