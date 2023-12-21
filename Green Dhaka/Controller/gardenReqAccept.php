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
        $validation=searchGarden($getemail);
        if($validation)
        {   $accept=insertaGarden($validation);
           if($accept)
                {
                    $validation=deleteGarden($getemail);
                    echo "<script>alert('Garden Request Accepted');</script>";
                }
            else{
                     echo "<script>alert('Garden Request NOT Accepted');</script>";
            }
        

        }
        else{
            echo "<script>alert('Garden Request Not Found');</script>";
        }
    }

	
 

?>