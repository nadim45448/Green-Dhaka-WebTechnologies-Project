<?php
    
    require_once('../Model/customer.php');
    if(isset($_GET['email'])){
    $email=$_GET['email'];}
	$admingetdata=deleteCustomer($email);
    if($admingetdata){
       echo "<script>alert('User Deleted');</script>";
    }
 

?>