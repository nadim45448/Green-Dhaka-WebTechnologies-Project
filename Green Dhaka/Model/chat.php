<?php 
    require_once('db.php');

    function insertDonate($donate){
        $con = getConnection();
        $sql = "INSERT INTO `donation`(`email`, `donation`, `address`, `area`, `zip`, `date`, `description`) VALUES ('{$donate['email']}','{$donate['Donation']}','{$donate['addressline']}','{$donate['area']}','{$donate['zip']}','{$donate['pickupdate']}','{$donate['description']}');";
        $status = mysqli_query($con, $sql);
        return $status;
    }

    
?>
