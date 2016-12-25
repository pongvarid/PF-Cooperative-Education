
<html>
<head>


<meta charset="UTF-8">
</head>
<body>
<?php

include './sqlcon.php';

$op ='';
$sql = "SELECT * FROM company WHERE  NameCPN LIKE '%".$_POST["search"]."%'";
mysqli_set_charset($con,"set character set utf8");
//$result = $con->query("set character set utf8");
$result = mysqli_query($con,$sql);

if(mysqli_num_rows($result)>0){
	//$op.='<h4 align="center">ผลลัพธ์</h4>';
	$op .='<div class="table-responsive">
				<table class="table table bordered">
					<tr>
						<th>ชื่อ</th>
						<th>ที่อยู่</th>
						<th>ตำแแหน่งที่รองรับ</th>
						<th>สาชาที่รับ</th>
						<th>สถานะ</th>
					</tr>';
	
	while ($row = mysqli_fetch_array($result)){
		
		if($row["StatusCPN"]==1){
			$status = "เต็มค่ะ";
		}else {
			$status = "ว่างค่ะ";

		} 
		$op .='<tr>
					<td>'.$row["NameCPN"].'</td>
					<td>'.$row["AddCPM"].'</td>
					<td>'.$row["PositionCPN"].'</td>
					<td>'.$row["MajorCPN"].'</td>
					<td>'.$status.'</td>
				</tr>';
	}
	echo $op;
			
}else{
	echo "ไม่พบข้อมูล";
}
?>
</body>
</html>