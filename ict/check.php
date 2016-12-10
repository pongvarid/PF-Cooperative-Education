<?php
echo "Test Ldap Service via http://res.ict.up.ac.th/training<br><br><br>";

$user = isset ( $_POST ['user'] ) ? $_POST ['user'] : "xxx";
$pass = isset ( $_POST ['pass'] ) ? $_POST ['pass'] : "xxx";

if ($user != "xxx" && $pass != "xxx") {
	
	$user_encode = base64_encode ( $user );
	$url = "http://res.ict.up.ac.th/training/service/ldap?user=" . strlen ( $user_encode ) . "dkttthai" . $user_encode . base64_encode ( $pass );
	$new_identity = trim ( file_get_contents ( $url ));
	echo "URL ".$url."<br>";
	$new_identity = preg_replace ( '/[\x00-\x1F\x80-\xFF]/', '', $new_identity );
	if (! $new_identity) {
			//die( "Wrong Username or Password" );
			return false;
	}
	$new_identity = json_decode ( $new_identity, true );
	echo "<pre>";

	
echo $new_identity['username']."<br>";
echo $new_identity['facultyen']."<br>";
	
	echo "</pre>";
        if(!$new_identity['username']){echo "ใส่รหัสให้ถูกไอ้สัด";}
	die();
}
?>