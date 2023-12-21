<?php
    
    require_once('../Model/customer.php');
    
    #customer_account
    $email = $_SESSION['email'];
	$cusgetdata=searchCustomer($email);
    if($cusgetdata != null){
        return $cusgetdata;
    }
       


?>