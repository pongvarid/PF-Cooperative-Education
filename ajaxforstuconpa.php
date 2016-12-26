
<html>
<head>


<meta charset="UTF-8">
</head>
<body>
<?php

include './sqlcon.php';



$op ='';

$sql = "SELECT * FROM company WHERE  NameCPN LIKE '%".$_POST["search"]."%' UNION
SELECT * FROM company WHERE  AddCPM LIKE '%".$_POST["search"]."%' UNION
SELECT * FROM company WHERE  PositionCPN LIKE '%".$_POST["search"]."%' UNION
SELECT * FROM company WHERE  MajorCPN LIKE '%".$_POST["search"]."%' UNION
SELECT * FROM company WHERE  StatusCPN LIKE '%".$_POST["search"]."%' ";
mysqli_set_charset($con,"set character set utf8");
//$result = $con->query("set character set utf8");
$result = mysqli_query($con,$sql);



if(mysqli_num_rows($result)>0){
	//$op.='<h4 align="center">ผลลัพธ์</h4>';
	$op .='<div class="table-responsive">
				<table class="table table bordered tablesorter">
					<thead>
					<tr>
						<th><a href="conpany_stu.php?st=name&bb='.$_POST["search"].'">ชื่อ</a></th>
						<th><a href="conpany_stu.php?st=add&bb='.$_POST["search"].'">ที่อยู่</a></th>
						<th><a href="conpany_stu.php?st=pos&bb='.$_POST["search"].'">ตำแแหน่งที่รองรับ</a></th>
						<th><a href="conpany_stu.php?st=maj&bb='.$_POST["search"].'">สาชาที่รับ</a></th>
						<th><a href="conpany_stu.php?st=sta&bb='.$_POST["search"].'">สถานะ</a></th>
						<th>รายละเอียด</th>
					</tr></thead>';
	
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
					<td><a href="detail_form_stu.php"><button type="submit" class="btn btn-success">คลิกดูรายละเอียด</button></a></td>
				</tr>';
	}
	echo $op;
			
}else{
	echo "ไม่พบข้อมูล";
}



?>


</body>
</html>