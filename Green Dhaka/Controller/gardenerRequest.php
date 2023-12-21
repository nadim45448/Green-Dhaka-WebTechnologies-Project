<?php
	session_start();
    require_once("../Model/gardener.php");

	$email = $_SESSION['email'];
	$date = $_POST['date'];
    $time = $_POST['time'];
    $loc = $_POST['loc'];

    
    $gardener = ['email'=> $email, "date"=> $date, 'time'=> $time,'loc'=> $loc];
    $_SESSION['user'] = $gardener;
    $validation = insertGardener($gardener);
    
               if($validation){
                    $_SESSION['valid'] = 'true';
                    $_SESSION['email'] = $email;
                    echo "<script>alert(' Requested!');</script>";
                }
                else{
                    echo "<script>alert('Invalid User!!');</script>";
                }
       
    
     
?>