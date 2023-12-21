<?php
	session_start();
    require_once("../Model/customer.php");
    require_once("../Model/admin.php");

	$email = $_POST['email'];
	$password = $_POST['password'];

    $user = ['email'=> $email, "password"=> $password];
    
    $validation1 = loginCustomer($user);
    $validation2 = loginAdmin($user);
    
    if($email == "" && $password == ""){
        echo "<script>alert('Email & Password cannot be null!');</script>";
    }
    else if($validation1){
        $_SESSION['valid'] = 'true';
        $_SESSION['email'] = $email;
        header('location: ../View/cusDashboard.php');
    }
    else if($validation2){
        $_SESSION['valid'] = 'true';
        $_SESSION['email'] = $email;
        header('location: ../View/adminDashboard.php');
    }
    else {
        echo "<script>alert('Invalid User!!');</script>";
    }

?>