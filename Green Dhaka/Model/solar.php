<?php 
    require_once('db.php');

    function insertSolar($solar){
        $con = getConnection();
        $sql = "INSERT INTO `solar`(`email`, `rArea`, `sArea`, `loc`, `tin`) VALUES ('{$solar['email']}','{$solar['rArea']}','{$solar['sArea']}','{$solar['loc']}','{$solar['tin']}');";
        $status = mysqli_query($con, $sql);
        return $status;
    }

    function checkSolar(){
    $user = $_SESSION['email'];
	
        $con = getConnection();
        $sql = "select * from garden where email = '{$user}'";
        $status = mysqli_query($con, $sql);
        $resultCheck = mysqli_num_rows($status);

        
    }
    
?>
