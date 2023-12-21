<?php
    require_once('../Model/garden.php');
    require_once('../Model/acceptedGarden.php');
     
    
        if(isset($_GET['email']))
        {
            $getemail=$_GET['email'];
        }
        if(isset($_GET['state']))
        {
            $state=$_GET['state'];
        }

    if($state = true )
    {
        $validation=deleteGarden($getemail);
        
           if($validation)
                {
                    echo "<script>alert('Garden Request Rejected');</script>";
                }
            else{
                     echo "<script>alert('Garden Request Rejection Error');</script>";
            }
   
    }

	
 

?>