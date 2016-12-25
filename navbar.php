<?php
class navbar{
function student(){
    echo '<nav class="navbar navbar-transparent">

    <div class="navbar-header">
      <a class="navbar-brand" href="index.php"><img class="img-responsive logoxl" id="logo" src="img/logoxl.png" alt="Smiley face" ></a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">หน้าหลัก</a></li>
      <li><a style="color:white;" href="#">ข้อมูลส่วนตัว</a></li>
      <li><a style="color:white;" href="#">ค้นหาและสมัคร</a></li>
         <li><a style="color:white;" href="#">แก้ไขการสมัคร</a></li>
            <li><a style="color:white;" href="#">ผลการสมัคร</a></li>
               <li><a style="color:white;" href="#">เอกสาร</a></li>
      <li><a style="color:white;" href="logout.php">ออกจากระบบ</a></li>
    </ul>

</nav>';
}


function admin(){
    echo '<nav class="navbar navbar-transparent">

    <div class="navbar-header">
      <a class="navbar-brand" href="index.php"><img class="img-responsive logoxl" id="logo" src="img/logoxl.png" alt="Smiley face" ></a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">หน้าหลัก</a></li>
      <li><a style="color:white;" href="#">ข้อมูลส่วนตัว</a></li>
      <li><a style="color:white;" href="#">ค้นหาและสมัคร</a></li>
         <li><a style="color:white;" href="#">แก้ไขการสมัคร</a></li>
            <li><a style="color:white;" href="#">ผลการสมัคร</a></li>
               <li><a style="color:white;" href="#">เอกสาร</a></li>
      <li><a style="color:white;" href="logout.php">ออกจากระบบ</a></li>
    </ul>

</nav>';
}
function navOk(){
    echo '<nav class="navbar navbar-transparent">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="glyphicon glyphicon-option-horizontal"></span>
          
        </button>
              <a class="navbar-brand" href="index.php"><img class="img-responsive logoxl" id="logo" src="img/logoxl.png" alt="Smiley face" ></a>

      </div>
      <div class="collapse navbar-collapse navbar-ex1-collapse">
 <ul class="nav navbar-nav">
  <li class="active"><a href="#">หน้าหลัก</a></li>
      <li><a style="color:white;" href="#">ข้อมูลส่วนตัว</a></li>
      <li><a style="color:white;" href="#">ค้นหาและสมัคร</a></li>
         <li><a style="color:white;" href="#">แก้ไขการสมัคร</a></li>
            <li><a style="color:white;" href="#">ผลการสมัคร</a></li>
               <li><a style="color:white;" href="#">เอกสาร</a></li>
      <li><a style="color:white;" href="logout.php">ออกจากระบบ</a></li>
    </ul>
       
      </div>
    </div>
  </nav>';
}

}
?>
