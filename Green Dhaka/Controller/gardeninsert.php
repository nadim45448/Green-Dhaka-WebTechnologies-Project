<?php
	session_start();
    require_once("../Model/garden.php");

	$email = $_SESSION['email'];
	$rArea = $_POST['rArea'];
    $gArea = $_POST['gArea'];
    $loc = $_POST['loc'];
    $tin = $_POST['tin'];

    $garden = ['email'=> $email, "rArea"=> $rArea, 'gArea'=> $gArea,'loc'=> $loc,'tin'=> $tin];
    
    if($gArea > $rArea)
        {
            echo "<script>alert('Garden is Larger than rooftop');</script>";
        }
    else
        {
           
            
            $validation = insertGarden($garden);
    
               if($validation){
                   
                    echo "<script>alert('Registration Requested!');</script>";
                }
                else{
                    echo "<script>alert('Request Not Accepted!!');</script>";
                }
        }
    
     
?>