<?php
	session_start();
    require_once("../Model/feedUpload.php");

	$email = $_SESSION['email'];
	$caption = $_POST['caption'];
    if($_FILES["image"]["error"] == 4){
    
    }
    else{
     if(isset($_FILES["image"])){
    $fileName = $_FILES["image"]["name"];
    $fileSize = $_FILES["image"]["size"];
    $tmpName = $_FILES["image"]["tmp_name"];
    }
    $validImageExtension = ['jpg', 'jpeg', 'png'];
    $imageExtension = explode('.', $fileName);
    $imageExtension = strtolower(end($imageExtension));
    
    if ( !in_array($imageExtension, $validImageExtension) ){
      
    }
    else if($fileSize > 1000000){
      
    }
    else{
        $pid = uniqid();
        $newImageName = $pid;
        $newImageName .= '.' . $imageExtension;

        move_uploaded_file($tmpName, '../Asset/Feed/' . $newImageName);
        $feeddata = ['pid'=> $pid,'email'=> $email,'caption'=> $caption, 'image'=> $newImageName ];
            $validation = insertPost($feeddata);
    }
    }
?>