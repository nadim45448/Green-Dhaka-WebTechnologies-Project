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
        $validation=deleteaGarden($getemail);
        
           if($validation)
                {
                    echo "<script>alert('Accepted Garden Deleted');</script>";
                }
            else{
                     echo "<script>alert('Accepted Garden Not Deleted');</script>";
            }
   
    }

	
 

?>