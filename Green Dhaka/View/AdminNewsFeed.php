<?php
session_start();
    if(!isset($_SESSION['valid'])){
        header('location: login.php');
    }
    $con = mysqli_connect('127.0.0.1', 'root', '', 'greendhaka');
    $sql = "SELECT * FROM `feed`";
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

            .panel  a:visited {
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
                  <h1 style="color:SeaGreen;"> <b> News Feed </b> </h1>

                </td>
                
            </tr>
            <tr>
            <td>
        
            </td>
                <td align ="center">
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
                                <td>  Reaction  </td>
                                <td> <button><a href=""> Delete </a></button>   </td>
                                </tr>
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
                                <td>  Reaction  </td>
                                <td> <button><a href=""> Delete </a></button>   </td>
                                </tr>
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
    </form>