<?php
    
    require_once('../Model/donation.php');
    
    #get_donation_data
    $admingetdata=checkDonate();
    if($admingetdata){
        return $admingetdata;
    }
 

?>