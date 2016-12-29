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



$sort = 'ASC';




if (isset($_GET["sort"])||isset($_GET["sort2"])) {
	
	//min to max
	if($_GET["sort"] == 'ASC'){
		$sort = 'DESC';
		
		if ($_GET["sort2"]=='name') {
			$sql = "SELECT * FROM company ORDER BY NameCPN ASC";
		}elseif ($_GET["sort2"]=='add') {
			$sql = "SELECT * FROM company ORDER BY NameCPN ASC";
		}elseif ($_GET["sort2"]=='posi') {
			$sql = "SELECT * FROM company ORDER BY NameCPN ASC";
		}elseif ($_GET["sort2"]=='maj') {
			$sql = "SELECT * FROM company ORDER BY NameCPN ASC";
		}elseif ($_GET["sort2"]=='status') {
			$sql = "SELECT * FROM company ORDER BY NameCPN ASC";
		}

		//max to min
	}elseif ($_GET["sort"]=='DESC') {
		$sort='ASC';
		if ($_GET["sort2"]=='name') {
			$sql = "SELECT * FROM company ORDER BY NameCPN DESC";
		}elseif ($_GET["sort2"]=='add') {
			$sql = "SELECT * FROM company ORDER BY NameCPN DESC";
		}elseif ($_GET["sort2"]=='posi') {
			$sql = "SELECT * FROM company ORDER BY NameCPN DESC";
		}elseif ($_GET["sort2"]=='maj') {
			$sql = "SELECT * FROM company ORDER BY NameCPN DESC";
		}elseif ($_GET["sort2"]=='status') {
			$sql = "SELECT * FROM company ORDER BY NameCPN DESC";
		}
	}
}else{ $sql = "SELECT * FROM company"; }












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

			<input type="text" placeholder="ค้นหาจากข้อมูล" class="form-control" id="myInput" onkeyup="myFunction()" />	<span class="input-group-addon glyphicon glyphicon-search"></span>


			<!-- <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name"> -->
                              
			</div>
		</div>
		<br>
		
		<div class="table-responsive ">
				<table class="table table bordered " id="myTable" >
				<thead>
					<tr class="danger">
						<th> <a href="conpany_stu.php?sort=<?php echo $sort; ?>&sort2=name"> ชื่อ </a></th>
						<th><a href="conpany_stu.php?sort=<?php echo $sort; ?>&sort2=add"> ที่อยู่ </a></th>
						<th><a href="conpany_stu.php?sort=<?php echo $sort; ?>&sort2=posi"> ตำแหน่งที่รองรับ </a></th>
						<th><a href="conpany_stu.php?sort=<?php echo $sort; ?>&sort2=maj"> สาขาที่รองรับ </a></th>
						<th><a href="conpany_stu.php?sort=<?php echo $sort; ?>&sort2=status"> สถานะ </a></th>
						<th> รายละเอียด </th>
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
	<script>
function myFunction() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display="ไม่พบข้อมูล";
      }
    }       
  }
}
</script>

</body>
</html>



<script>
function myFunction() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>
