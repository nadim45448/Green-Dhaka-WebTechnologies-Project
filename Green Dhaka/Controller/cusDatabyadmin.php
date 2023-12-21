<?php
    
    require_once('../Model/customer.php');
    
    #admin_Cus_management
    $admingetdata=cusData();
    if($admingetdata){
        return $admingetdata;
    }
 

?>