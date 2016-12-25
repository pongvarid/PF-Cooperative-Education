<?php include './session.php'; ?>
<html>
    <head>
       <?php include './style.php';
$style = new style();
$style->head("");
$style->bootstrap();$style->tail();
$style->main();

$style->font();
include './navbar.php';
$nav = new navbar();
 ?>
    </head>
    <body>
        <div class="container custom">
        <?php
        if(!isset($objResult["role"])){header("location:index.php");}
        if($objResult["role"]!="Student"){$nav->navOk();}
        else {$nav->student();}
        ?>
            <br>
            <h1>ยินดีต้อนรับ</h1>
            <h2>คุณ <?php echo $objResult["name"]." ".$objResult["surname"] ;?></h2><br>
         <div id="home-tiles" class="container-fluid metro-responsive-tiles">
      <div class="row-fluid">
         <div class="span4">
            <a class="tile wide imagetext bg-color-orange first" href="https://github.com/aozora/bootmetro">
               <div class="image-wrapper">
                   <img class="img-responsive logo" id="logo" src="img/amenu1.png" alt="Smiley face" >
               </div>
               <div class="column-text">
                  <div class="text-header2">ข้อมูลส่วนตัว</div>
                  <div class="text4">
                      <p>ดูข้อมูลส่วนตัวของผู้ใช้ทั้งหมด</p>
                  </div>
               </div>
            </a>
         </div>
         <div class="span4">
             <a class="tile wide imagetext bg-color-blueDark middle" href="./formsearch.php">
               <div class="image-wrapper">
                   <img class="img-responsive logo" id="logo" src="img/amenu2.png" alt="Smiley face" >
               </div>
               <div class="column-text">
                     <h3>สถานประกอบการ</h3>
                  <div class="text4">
                      <p>เพิ่ม/ลบ และแก้ไขข้อมูล</p>
                  </div>
               </div>
            </a>
         </div>
         <div class="span4">
           <a class="tile wide imagetext bg-color-blue middle" href="./hub.html">
               <div class="image-wrapper">
                   <img class="img-responsive logo" id="logo" src="img/amenu3.png" alt="Smiley face" >
               </div>
               <div class="column-text">
                     <h2>ค้นหา</h2>
                  <div class="text4">
                      <p>ค้นหาสถานประกอบการ</p>
                  </div>
               </div>
            </a>
      </div>
   
      <div class="row-fluid">
         <div class="span4">
            <a class="tile wide imagetext bg-color-purple middle" href="./hub.html">
               <div class="image-wrapper">
                   <img class="img-responsive logo" id="logo" style="height: 90px;" src="img/amenu4.png" alt="Smiley face" >
               </div>
               <div class="column-text">
                     <h3>ระบุผลการสมัคร</h3>
                  <div class="text4">
                      <p>ผลการสมัครจากสถานประกอบการเพื่อลงฝึกงานหรือสหกิจศึกษาที่เลือกไว้</p>
                  </div>
               </div>
            </a>
         </div>
         <div class="span4">
                 <a class="tile wide imagetext bg-color-green middle" href="./hub.html">
               <div class="image-wrapper">
                   <img class="img-responsive logo" id="logo" src="img/amenu5.png" alt="Smiley face" >
               </div>
               <div class="column-text">
                     <h2>เอกสาร</h2>
                  <div class="text4">
                      <p>เพิ่ม/ลบ เอกสาร</p>
                  </div>
               </div>
            </a>
         </div>
         <div class="span4">
                 <a class="tile wide imagetext bg-color-red middle" href="./hub.html">
               <div class="image-wrapper">
                   <img class="img-responsive logo" id="logo" src="img/amenu6.png" alt="Smiley face" >
               </div>
               <div class="column-text">
                     <h2>ออกจากระบบ</h2>
                  <div class="text4">
                      <p>&nbsp;</p>
                  </div>
               </div>
            </a>
         </div>
      </div>
   </div>
             
               <div id="footer">
      <br>
      <h4 class="text-muted credit" style="color: white;">สถานะ <?php echo $objResult["role"]; ?></h4>
   <br>
    </div>
        </div>
        
        
    </body>
</html>
