<?php



?>
    <link rel="stylesheet" href="../Asset/styleAdmin.css">
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
                   <input type="number" name="rArea" value=""><br>
                    </td>
                
                </tr>
                <tr align ="left">
                    <td width="60%">  Area of Garden (Sqr-ft)
                    </td>
                    <td>:
                    </td>
                    <td>
                    <input type="number" name="gArea" value=""><br>
                    </td>
                
                </tr>
                <tr align ="left">
                    <td width="60%"> Area of Solar panel (Sqr-ft)
                    </td>
                    <td>:
                    </td>
                    <td>
                     <input type="number" name="sArea" value=""><br>
                    </td>
                </tr>
                </table>
                <br>
               <br><br>
                <input type="submit" value="submit">
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