 <?php 
     
	session_start();
	require_once("./sqlcon.php");
        if(isset($_SESSION['id']))
	{
        $sql = "UPDATE user SET date = NOW() WHERE id = '".$_SESSION["id"]."' ";
	$query = mysqli_query($con,$sql);

	//*** Get User Login
	$strSQL = "SELECT * FROM user WHERE id = '".$_SESSION['id']."' ";
	$objQuery = mysqli_query($con,$strSQL);
	$objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);
        }
        
        ?>