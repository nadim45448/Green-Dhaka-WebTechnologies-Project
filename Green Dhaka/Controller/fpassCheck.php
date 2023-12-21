<?php
	session_start();
    require_once("../Model/customer.php");

	$email = $_POST['email'];
	$cnum = $_POST['cnum'];
    $uppassword = $_POST['uppassword'];

    $len_password = strlen($uppassword);
    $len_contactNumber = strlen($cnum);
    
    $number    = preg_match('@[0-9]@', $uppassword);
    $specialChars = preg_match('@[^\w]@', $uppassword);
    
    if($email == "" || $cnum == "" || $uppassword == ""){
        echo "<script>alert('Please Fill All the fields!');</script>";
    }
    elseif ($uppassword == $email) {
        echo "<script>alert('Username and Password cannot be same!');</script>";
    }
    elseif ($len_contactNumber != 11) {
        echo "<script>alert('Contact Number must contain 11 digits!');</script>";
    }
    elseif (!$number || !$specialChars || $len_password < 4) {
        echo "<script>alert('Password must contain at least 4 characters with number and special character!');</script>";
    }
    else {
        $usercheck = ['email'=> $email, "cnum"=> $cnum];
        $validation = fpassCustomer($usercheck);
        if($validation)
            {   
             $passUpdate = ['email'=> $email, "uppassword"=> $uppassword];
             $update = passchangeCustomer($passUpdate);
             echo "<script>alert('Password Changed');</script>";
            }
        else{
            echo "<script>alert('User Not Found');</script>";

        }

    }
    
    

?>