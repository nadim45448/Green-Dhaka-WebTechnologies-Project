<?php

	$rArea = $_POST['rArea'];
	$gArea = $_POST['gArea'];
	$sArea = $_POST['sArea'];

	$sum=(int)$gArea+(int)$sArea;

	if ($rArea == ""||$gArea == "" || $sArea == "")
	{
        echo "<script>alert('Empty Measurements');</script>";
		
    }
	else if($gArea >$rArea || $sArea >$rArea || $sum >$rArea)
	{
		echo "<script>alert('Please Check Your Measurements Correctly');</script>";
		
	}
	else {
		$ratio = (($sum/$rArea)*100)/3;	
		echo "<script>alert('Your Subsidiary Reduction Percentage is $ratio');</script>";
	}

?>


	
		
