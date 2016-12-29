<?php include './session.php'; ?>
<html>
    <head>
       <?php include './style.php';
       include './sqlcon.php';
$style = new style();
$style->head("");
$style->bootstrap();$style->tail();
$style->main();

$style->font();
include './navbar.php';
$nav = new navbar();
$sql = "SELECT * FROM company WHERE idCPN=".$objResult["cpnid"];
mysqli_set_charset($con,"set character set utf8");
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_assoc($result);


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
            <h1>ยินดีต้อนรับ</h1>
            <h2>คุณ <?php echo $objResult["name"]." ".$objResult["surname"] ;?></h2><br>
            <div class="row-fluid">
            	<div class="container bg-color-orange first "> 
				
				<h2 class="text-center">ประวัติส่วนตัว</h2><br>
				<h3>ชื่อ นาย<?php echo $objResult["name"].' '.$objResult["surname"]; ?>
				</h3><br>

				<h3>คณะ<?php echo $objResult["faculty"]; ?></h3> <br>
				<h3>สาชา<?php echo $objResult["major"]; ?></h3><br><br>
				<h3>สถานที่ฝึกงาน : <?php echo $row["NameCPN"];
				
				 ?></h3>
					



            	</div>

            </div>
</div>
   



</body>
</html>

