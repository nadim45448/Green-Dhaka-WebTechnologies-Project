<?php 
    require_once('db.php');

    function insertFeedback($fdata){
        $con = getConnection();
        $sql = "INSERT INTO `feedback`(`email`, `feedback`) VALUES ('{$fdata['email']}','{$fdata['feedback']}')";
        $status = mysqli_query($con, $sql);
        return $status;
    }

    function getFeedback(){

        $con = getConnection();
        $sql = "SELECT * FROM `feedback`";
        $status = mysqli_query($con, $sql);
        return $status;

    }
    
?>
