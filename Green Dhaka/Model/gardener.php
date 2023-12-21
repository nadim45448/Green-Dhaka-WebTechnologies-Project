<?php 
    require_once('db.php');

    function insertGardener($gardener){
        $con = getConnection();
        $sql = "INSERT INTO `gardener`(`email`, `date`, `time`, `loc`) VALUES ('{$gardener['email']}','{$gardener['date']}','{$gardener['time']}','{$gardener['loc']}');";
        $status = mysqli_query($con, $sql);
        return $status;
    }

    function checkGardener(){
    $user = $_SESSION['email'];
	
        $con = getConnection();
        $sql = "select * from garden where email = '{$user}'";
        $status = mysqli_query($con, $sql);
        $resultCheck = mysqli_num_rows($status);

        
    }
    
?>
