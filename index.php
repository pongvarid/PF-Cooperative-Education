<!DOCTYPE html>
<html lang="en">
<head>
 
 <?php include './style.php';
$style = new style();
$style->head("");
$style->bootstrap();
$style->index();
$style->font();
 ?>

</head>
<body>

<div class="section myEp ">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
    <center><img class="img-responsive logo" id="logo" src="img/logo.png" alt="Smiley face" ></center>
    <?php
    include './session.php';
        if(isset($objResult["username"])){

			header("location:main.php");

      
        }
        else {echo '
 <center>
    <form class="form-inline" action="'.$_SERVER['PHP_SELF'].'" method="post">
  <div class="form-group">
    <label class="sr-only" for="exampleInputEmail3">Email address</label>
    <input type="text" class="form-control" name="user"  placeholder="Username">
  </div>
  <div class="form-group">
    <label class="sr-only" for="exampleInputPassword3">Password</label>
    <input type="password" class="form-control" name="pass"placeholder="Password">
  </div>

  <button type="submit" class="btn btn-success">Sign in</button>
        </form></center>';} ?>
  <?php checkLogin();?>
 </div>
        </div>
      </div>
        <br><br>
    </div>
hellp


</body>
</html>

<?php
function checkLogin(){
    $user = isset ( $_POST ['user'] ) ? $_POST ['user'] : "xxx";
$pass = isset ( $_POST ['pass'] ) ? $_POST ['pass'] : "xxx";

if ($user != "xxx" && $pass != "xxx") {
	
	$user_encode = base64_encode ( $user );
	$url = "http://res.ict.up.ac.th/training/service/ldap?user=" . strlen ( $user_encode ) . "dkttthai" . $user_encode . base64_encode ( $pass );
	$new_identity = trim ( file_get_contents ( $url ));
	
	$new_identity = preg_replace ( '/[\x00-\x1F\x80-\xFF]/', '', $new_identity );
	if (! $new_identity) {echo '<h5 style="color:red;">Username หรือ Password ไม่ถูกต้อง</h5>';}
        else {
            $usergo = base64_encode ($user)."pongv".base64_encode ("pongvarid");
        $passgo = base64_encode($pass)."pongv".base64_encode ("maneewan");
        header("location:logincheck.php?user=$usergo&pass=$passgo");}
	
}
}
?>

