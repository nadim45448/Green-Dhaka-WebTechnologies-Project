<?php
	session_start();
    require_once("../Model/solar.php");

	$email = $_SESSION['email'];
	$rArea = $_POST['rArea'];
    $sArea = $_POST['sArea'];
    $loc = $_POST['loc'];
    $tin = $_POST['tin'];

    $solar = ['email'=> $email, "rArea"=> $rArea, 'sArea'=> $sArea,'loc'=> $loc,'tin'=> $tin];
    
    if($sArea > $rArea)
        {
            echo "<script>alert('Solar is Larger than rooftop');</script>";
        }
    else
        {
            
            $validation = insertSolar($solar);
    
               if($validation){
                  
                    echo "<script>alert('Quotation Requested!');</script>";
                }
                else{
                    echo "<script>alert('Invalid !!');</script>";
                }
        }
    
     
?>