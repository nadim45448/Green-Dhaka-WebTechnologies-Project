<?php
	session_start();
    require_once("../Model/feedUpload.php");
    $date = date('y-m-d h:i:s');
	$email = $_SESSION['email'];
	$caption = $_POST['caption'];
    if($_FILES["image"]["error"] == 4){
        $pid = uniqid();
        $feeddata = ['pid'=> $pid,'email'=> $email,'caption'=> $caption,'date'=> $date ];
            $validation = insertPostWithoutImage($feeddata);
               if($validation){
                    
                    echo "<script>alert('Post Uploaded!');</script>";
                }
                else{
                    echo "<script>alert('Invalid !!!');</script>";
                }
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
      echo
      "
      <script>
        alert('Invalid Image Extension');
      </script>
      ";
    }
    else if($fileSize > 100000000000){
      echo
      "
      <script>
        alert('Image Size Is Too Large');
      </script>
      ";
    }
    else{
        $pid = uniqid();
        $newImageName = $pid;
        $newImageName .= '.' . $imageExtension;

        move_uploaded_file($tmpName, '../Asset/Feed/' . $newImageName);
        $feeddata = ['pid'=> $pid,'email'=> $email,'caption'=> $caption, 'image'=> $newImageName, 'date'=> $date];
            $validation = insertPost($feeddata);

               if($validation){
                    
                    echo "<script>alert('Post Uploaded!');</script>";
                }
                else{
                    echo "<script>alert('Invalid !!!');</script>";
                }
     
    }
    }
?>