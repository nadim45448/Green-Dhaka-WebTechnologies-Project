<?php 
    require_once('db.php');

    function insertGarden($garden){
        $con = getConnection();
        $sql = "INSERT INTO `garden`(`email`, `rArea`, `gArea`, `loc`, `tin`) VALUES ('{$garden['email']}','{$garden['rArea']}','{$garden['gArea']}','{$garden['loc']}','{$garden['tin']}');";
        $status = mysqli_query($con, $sql);
        return $status;
    }

    function searchGarden($getemail){
        $con = getConnection();
        $sql = "SELECT * FROM `garden` WHERE email = '{$getemail}'";
        $status = mysqli_query($con, $sql);
        while($row = mysqli_fetch_assoc($status))
           {
                $email = $row['email'];
                $rArea = $row['rArea'];
                $gArea = $row['gArea'];
                $loc = $row['loc'];
                $tin = $row['tin'];

                $gardeninfo = ['email'=>$email,'rArea'=>$rArea,'gArea'=>$gArea,'loc'=>$loc,'tin'=>$tin ];
           }
        return $gardeninfo;
    }


    function deleteGarden($getemail){
        $con = getConnection();
        $sql = "DELETE FROM `garden` WHERE email = '{$getemail}'";
        $status = mysqli_query($con, $sql);
        return $status;
    }
    
?>
