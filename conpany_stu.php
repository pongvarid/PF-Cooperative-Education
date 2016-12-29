<?php include './session.php'; ?>
<html>
<head>

 <?php include './style.php';
$style = new style();
$style->head("");
$style->bootstrap();$style->tail();
$style->main(); 
$style->font();
include './sqlcon.php';
include './navbar.php';
$nav = new navbar();

$sql = "SELECT * FROM company";
mysqli_set_charset($con,"set character set utf8");
$result = mysqli_query($con,$sql);

$op ='';
?>
</head>
<body>
    <div class="container custom">
        <?php
        if(!isset($objResult["role"])){header("location:index.php");}
        if($objResult["role"]!="Student"){$nav->admin();}
        else {$nav->student();}
        ?>
	
		<br>
		<h2 align="center">ค้นหา</h2>
		<br>
		<div class="form-group">
			<div class="input-group">
			<input type="text" name="search_text" id="search_text" placeholder="ค้นหาจากข้อมูล" class="form-control" />	<span class="input-group-addon glyphicon glyphicon-search"></span>
                              
			</div>
		</div>
		<br>
		
		<div class="table-responsive">
				<table class="table table bordered">
				<thead>
					<tr>
						<th>ชื่อ</th>
						<th>ที่อยู่</th>
						<th>ตำแหน่งที่รองรับ</th>
						<th>สาขาที่รองรับ</th>
						<th>สถานะ</th>
						<th>รายละเอียด</th>
					</tr>
				</thead>
				<?php 
				if(mysqli_num_rows($result)>0){	
						while ($row = mysqli_fetch_array($result)){
		
		if($row["StatusCPN"]==1){
			$status = "เต็มค่ะ";
		}else {
			$status = "ว่างค่ะ";

		} 
		?>
		<tbody id="people">
		<tr>
					<td><?php echo $row["NameCPN"]; ?></td>
					<td><?php echo $row["AddCPM"]; ?></td>
					<td><?php echo $row["PositionCPN"]; ?></td>
					<td><?php echo $row["MajorCPN"]; ?></td>
					<td><?php echo  $status; ?></td>
					<td><a href="detail_form_stu.php"><button type="submit" class="btn btn-success">คลิกดูรายละเอียด</button></a></td>
				</tr>
	
	<?php
				}} else{
					echo "ไม่พบข้อมูล";
				}

?>

			</tbody>
			</table>

		
		</div>
	</div>
</body>
</html>





</script>