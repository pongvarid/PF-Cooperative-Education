
<html>
<head>


<meta charset="UTF-8">
</head>
<body>
<?php

include './sqlcon.php';

$op ='';
$sql = "SELECT * FROM user WHERE name LIKE '%".$_POST["search"]."%'";
mysqli_set_charset($con,"set character set utf8");
//$result = $con->query("set character set utf8");
$result = mysqli_query($con,$sql);

if(mysqli_num_rows($result)>0){
	//$op.='<h4 align="center">ผลลัพธ์</h4>';
	$op .='<div class="table-responsive">
				<table class="table table bordered">
					<tr>
						<th>ชื่อ</th>
						<th>นามสกุล</th>
					</tr>';
	
	while ($row = mysqli_fetch_array($result)){
		
		$op .='<tr>
					<td>'.$row["name"].'</td>
					<td>'.$row["surname"].'</td>
				</tr>';
	}
	echo $op;
			
}else{
	echo "ไม่พบข้อมูล";
}
?>
</body>
</html>