<?php 
    require_once('db.php');

    function insertPost($feeddata){
        $con = getConnection();
        $sql = "INSERT INTO `feed`(`pid`, `email`, `caption`, `image`, `date`) VALUES ('{$feeddata['pid']}','{$feeddata['email']}','{$feeddata['caption']}','{$feeddata['image']}','{$feeddata['date']}');
";
        $status = mysqli_query($con, $sql);
        return $status;
    }
    function insertPostWithoutImage($feeddata){
        $con = getConnection();
        $sql = "INSERT INTO `feed`(`pid`, `email`, `caption`, `date`) VALUES ('{$feeddata['pid']}','{$feeddata['email']}','{$feeddata['caption']}','{$feeddata['date']}');
";
        $status = mysqli_query($con, $sql);
        return $status;
    }

    function getPost(){

        $con = getConnection();
        $sql = "SELECT * FROM `feed`";
        $status = mysqli_query($con, $sql);
        return $status;

    }
    function getPostUser(){

        $con = getConnection();
        $sql = "SELECT * FROM `feed`";
        $status = mysqli_query($con, $sql);
        return $status;

    }
    
?>
