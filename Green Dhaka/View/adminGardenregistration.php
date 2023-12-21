<?php

    $con = mysqli_connect('127.0.0.1', 'root', '', 'greendhaka');
    $sql = "SELECT * FROM `garden`";
    $sql2 = "SELECT * FROM `acceptedGarden`";
    $result = mysqli_query($con, $sql);
    $result2 = mysqli_query($con, $sql2);
?>
   <link rel="stylesheet" href="../Asset/styleAdmin.css">
    <form method="post" action="../Controller/acceptedGarden.php">
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
            <td align ="center" colspan="3">
            <table>
            <tr>
            <td align ="left" width="50%">
                <h3 style="color:SeaGreen;"> Requested Gardens  </h3>

                    <table border="1" width="100%"  align ="left">
                        <tr >
                            <td> Email   </td>
                            <td> Rooftop Area   </td>
                            <td> Garden Area   </td>
                            <td> Location   </td>
                            <td> Tin Number   </td>
                                
                        </tr>
                        <?php while($data = mysqli_fetch_assoc($result)){
                            $email = $data['email'];
                            $rArea = $data['rArea'];
                            $gArea = $data['gArea'];
                            $loc = $data['loc'];
                            $tin = $data['tin'];
                            

                            echo'<tr>
                                <td> '.$email.'    </td>
                                <td>  '.$rArea.'  </td>
                                <td>  '.$gArea.'   </td>
                                <td>  '.$loc.'   </td>
                                <td>  '.$tin.'   </td>
                                <td>  
                                    <button><a href="../Controller/gardenReqAccept.php?email='.$email.'&state=true"> Accept </a></button>
                                    <button><a href="../Controller/gardenReqReject.php?email='.$email.'&state=false">   Reject </a></button>
                                </td>
                                </tr>
                            ';
                        }
                        ?>
                        
                    </table>
            </td>
            <td>
            <img src="../Images/bar.jpg" height="100%" width="10">
            </td>
            <td align ="right">
                <h3 style="color:SeaGreen;"> Accepted Gardens  </h3>

                    <table border="1" width="100%" align ="center">
                        <tr >
                            <td> Email   </td>
                            <td> Rooftop Area   </td>
                            <td> Garden Area   </td>
                            <td> Location   </td>
                            <td> Tin Number   </td>
                                
                        </tr>
                        <?php while($data = mysqli_fetch_assoc($result2)){ 
                          $email = $data['email'];
                            $rArea = $data['rArea'];
                            $gArea = $data['gArea'];
                            $loc = $data['loc'];
                            $tin = $data['tin'];
                            
                            echo'<tr>
                                <td> '.$email.'    </td>
                                <td>  '.$rArea.'  </td>
                                <td>  '.$gArea.'   </td>
                                <td>  '.$loc.'   </td>
                                <td>  '.$tin.'   </td>
                                <td>  
                                    <button><a href="../Controller/acceptedGardenReqDelete.php?email='.$email.'&state=b"> Delete </a></button>
                                
                                </td>
                                </tr> 
                            ';
                        }
                        ?>
                                
                    </table>
            </td>
            </tr>
            </table>
                    

                    
                    
            
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