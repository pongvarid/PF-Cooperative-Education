<?php


 $userin = explode("pongv",$_GET["user"]);
echo $user = base64_decode($userin[0]);
$passin = explode("pongv",$_GET["pass"]);
echo $pass = base64_decode($passin[0]);

if ($user != "xxx" && $pass != "xxx") {
	
	$user_encode = base64_encode ( $user );
	$url = "http://res.ict.up.ac.th/training/service/ldap?user=" . strlen ( $user_encode ) . "dkttthai" . $user_encode . base64_encode ( $pass );
	$new_identity = trim ( file_get_contents ( $url ));
	//echo "URL ".$url."<br>";
	$new_identity = preg_replace ( '/[\x00-\x1F\x80-\xFF]/', '', $new_identity );
	if (! $new_identity) {
		
	}
	$new_identity = json_decode ( $new_identity, true );
	echo "<pre>";
	//print_r($new_identity);
        $name = $new_identity['name'];
	$surname = $new_identity['surname'];
	$studentCode= $new_identity['username'];
	$major = $new_identity['majorth'];
	$faculty = $new_identity['facultyth'];
	$role = $new_identity['privilege'];
	$email = $new_identity['email'];
        echo checkDB($studentCode);
        if(checkDB($studentCode)!= 1 ){
            include './sqlcon.php';
            $sql = "INSERT INTO user (username,name,surname,major,faculty,role,email)
            VALUES ('$studentCode','$name','$surname','$major','$faculty','$role','$email')";
            
            if ($con->query($sql) === TRUE) {
                echo "New record created successfully";
                sessionstart($studentCode);
            } else {
                echo "Error: " . $sql . "<br>" . $con->error;
}
        }
        else {
            echo "มีข้อมูลแล้ว";
        
           sessionstart($studentCode);
        }
        

}
function checkDB($code){
    include './sqlcon.php';
    $sql = "SELECT username FROM user";
    $result = $con->query($sql);


    while($row = $result->fetch_assoc()) { 
        if($code==$row["username"]){
            return 1; 
            break;
        }
        
      
    } 
    
    
}

function sessionstart($usernameinto){
    
        session_start();

	include("./sqlcon.php");
	$strUsername = mysqli_real_escape_string($con,$username = $usernameinto);
        $strSQL = "SELECT * FROM user WHERE username = '".$strUsername."'";
	$objQuery = mysqli_query($con,$strSQL);
	$objResult = mysqli_fetch_array($objQuery);
	if(!$objResult)
	{
		echo "<h3>อีเมล์หรือรหัสผ่านผิดพลาด<h3>";
                    echo '<a class="btn" style="color: dodgerblue;" href="index.php">กลับ</a>';
		exit();
	}
	else
		{
                    date_default_timezone_set("Asia/Bangkok");
                    $timeX = "วันที่ ".date("d-m-Y")." เวลา".date("h:i:sa");
			//*** Update Status Login
			$sql = "UPDATE user SET date = 'ABC' WHERE id = '".$objResult["id"]."' ";
			$query = mysqli_query($con,$sql);

			//*** Session
			$_SESSION["id"] = $objResult["id"];
			session_write_close();

			//*** Go to Main page
			header("location:index.php");
		}
			
	
	mysqli_close($con);
        unset($_SESSION["numX"]); 


}

 
	
?>