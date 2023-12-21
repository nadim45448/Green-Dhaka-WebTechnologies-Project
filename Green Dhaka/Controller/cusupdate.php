<?php
	session_start();
    require_once("../Model/customer.php");

    $email = $_POST['upemail'];
	$upfirstName = $_POST['upfirstName'];
	$uplastName = $_POST['uplastName'];
	$upcontactNumber = $_POST['upcontactNumber'];
	$updob = $_POST['updob'];
    

    //for validation pupose
    $len_contactNumber = strlen($upcontactNumber);
    // blank field check
    if($upfirstName == "" || $uplastName == "" || $upcontactNumber == ""|| $updob == ""){
        echo "<script>alert('Please fill all required fields (* marked)');</script>";
    }
    // phone validation check
    elseif ($len_contactNumber != 11) {
        echo "<script>alert('Contact Number must contain 11 digits!');</script>";
    }
    else {
        $user = ['upemail'=> $email,'upfirstName'=> $upfirstName, "uplastName"=> $uplastName, "upcontactNumber"=> $upcontactNumber, "updob"=> $updob];
        $_SESSION['user'] = $user;
        $validation = updateCustomer($user);
        if($validation){
            echo "<script>alert('Data Updated!');</script>";
        }
        else{
            echo "<script>alert('Data Not Changed!');</script>";
        }
    }

?>