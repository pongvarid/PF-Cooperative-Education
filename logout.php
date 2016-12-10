<?php
	session_start();

	require_once("./sqlcon.php");
        
	//*** Update Status
	$sql = "UPDATE member SET status = '0', date = '0000-00-00 00:00:00' WHERE id = '".$_SESSION["id"]."' ";

	
        $query = mysqli_query($con,$sql);
        unset($_SESSION["numX"]); 
	session_destroy();
	header("location:index.php");
?>