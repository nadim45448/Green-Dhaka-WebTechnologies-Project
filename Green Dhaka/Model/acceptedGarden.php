<?php 
    require_once('db.php');

    function insertaGarden($gardeninfo){
        $con = getConnection();
        $sql = "INSERT INTO `acceptedgarden`(`email`, `rArea`, `gArea`, `loc`, `tin`) VALUES ('{$gardeninfo['email']}','{$gardeninfo['rArea']}','{$gardeninfo['gArea']}','{$gardeninfo['loc']}','{$gardeninfo['tin']}');";
        $status = mysqli_query($con, $sql);
        return $status;
    }
    function deleteaGarden($getemail){
        $con = getConnection();
        $sql = "DELETE FROM `acceptedgarden` WHERE email = '{$getemail}'";
        $status = mysqli_query($con, $sql);
        return $status;
    }
?>
