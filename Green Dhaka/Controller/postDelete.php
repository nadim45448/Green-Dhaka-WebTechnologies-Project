<?php
    $con = mysqli_connect('127.0.0.1', 'root', '', 'greendhaka');
     
    
        if(isset($_GET['pid']))
        {
            $geteid=$_GET['pid'];
        }
        if(isset($_GET['state']))
        {
            $state=$_GET['state'];
        }

    if($state = true )
    {
        $sql = "DELETE * FROM `feed`where pid = '{$geteid}' ";
       header
   
    }

?>