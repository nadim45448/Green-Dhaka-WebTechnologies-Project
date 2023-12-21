<?php
	session_start();
    require_once("../Model/feedback.php");

	$email = $_SESSION['email'];
	$feedback = $_POST['feedback'];

    if( $email =="" || $feedback =="" )
        {
            echo "<script>alert('Enter your feedback');</script>";
        }
    else
        {
            $fdata = ['email'=> $email, 'feedback'=> $feedback ];
            $validation = insertFeedback($fdata);
    
               if($validation){
                    
                    echo "<script>alert('Thanks For Your Feedback!');</script>";
                }
                else{
                    echo "<script>alert('Invalid Feedback!!!');</script>";
                }
        }
  
?>