<?php
	session_start();
    require_once("../Model/donation.php");

	$email = $_SESSION['email'];
	$dType = $_POST['Donation'];
    $adrsl = $_POST['addressline'];
    $area = $_POST['area'];
    $zip = $_POST['zip'];
    $pdate = $_POST['pickupdate'];
    $des = $_POST['description'];

    $donate = ['email'=> $email, "Donation"=> $dType, 'addressline'=> $adrsl,'area'=> $area,'zip'=> $zip,'pickupdate'=> $pdate,'description'=> $des];

    if( $email =="" || $dType =="" || $adrsl =="" || $area =="" || $zip =="" || $pdate =="" || $des =="" )
        {
            echo "<script>alert('Yor Have to Fill All the Fields');</script>";
        }
    else
        {
            
            $_SESSION['user'] = $donate;
            $validation = insertDonate($donate);
    
               if($validation){
                    $_SESSION['valid'] = 'true';
                    $_SESSION['email'] = $email;
                    echo "<script>alert('Donation Pickup Requested!');</script>";
                }
                else{
                    echo "<script>alert('Donation Request Failed!!');</script>";
                }
        }
    
     
?>