<?php
  include 'connect.php';
  date_default_timezone_set("Asia/Bangkok");

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>หน้าหลัก</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" />
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <style type="text/css">

  </style>

  </head>
  <body>
 </head>
 <style type="text/css"> body {
         background: linear-gradient(to top, #000066 0%, #ffffff 100%);
         color: black;
}</style>
<div class="container" ><!--style="border : 2px solidblue sky;"-->
<div class="row">
  <div class="col-md-12">
      <div class="container-fluid">

        </div>

  </div>
</div>
<!--row1-->
<div class="row">
<!--Headder -->
  <div class="col-md-12">

        <center>

        </center>
        <h7></h7>

  </div>
</div>
<div class="manu_area">
<div class="menu-wrap">
<nav class="navbar navbar-inverse">
<div class="container-fluid">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php"><i class="fa fa-home"></i> </a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
   <li class="active"><a href="home.php">หน้าแรก</a></li>
      <li><a href="register.php">สมัครสมาชิก</a></li>
        <li><a href="#">เกียวกับเรา</a></li>
         </ul>
        <ul class="nav navbar-nav navbar-right">
                 <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> ออกจากระบบ</a></li>
        </ul>
    </div>
</div>
</nav>
</div>
</div>
<img src="img/Banner3.jpg" width="1136" height="250" border="0" alt="">
<!--end row1 -->
<div class="row">
  <div class="col-md-2">
    <div class="panel panel-info">
  <div class="btn-group-vertical">
  <button <a href="home.php" type="button" class="btn btn-primary"><a href="home.php"> <font color="#FFFFFF"> หน้าแรก </font></a> </button>
      <button <a href="home.php" type="button" class="btn btn-primary"><a href="Add%20news.php"> <font color="#FFFFFF"> เพื่มข่าวสาร </font></a> </button>
    <button <a href="home.php" type="button" class="btn btn-primary"><a href="#"> <font color="#FFFFFF"> เพื่มข้อมูลครูผู้ฝึกสอน </font></a> </button>
    <button <a href="home.php" type="button" class="btn btn-primary"><a href="#"> <font color="#FFFFFF"> เพื่มเครื่องออกกำลังกาย </font></a> </button>
    <button <a href="home.php" type="button" class="btn btn-primary"><a href="#"> <font color="#FFFFFF"> การชำระเงิน </font></a> </button>
     <button <a href="home.php" type="button" class="btn btn-primary"><a href="#"> <font color="#FFFFFF"> บันทึกรายจ่าย </font></a> </button>
      <div class="panel-body">
        <form method="post" action="chk_login.php">
          <div class="form-group">
             </div>
          </div>

        </form>
      </div>
    </div>
  </div>
  <div class="col-md-10">
    <div class="panel panel-info">
      <div class="panel-body">
        <h5></h5>

     <article>
      <center><h2>ลงทะเบียนพนักงาน</h2></center>
      <div class = "detail">
        <form action="" method="post"  enctype="multipart/form-data">
         คำนำหน้า  : <input type="radio" name="gender" value="นาย" checked> นาย
            <input type="radio" name="gender" value="นาง"> นาง
            <input type="radio" name="gender" value="นางสาว"> นางสาว
          <br></br>
          ชื่อ : <input type="text" name ="name" placeholder="ชื่อ">
          <br><br>
          สกุล : <input type="text" name ="surname" placeholder="สกุล">
          <br><br>
          รหัสบุคลากร  : <input type="text" name ="studentid" placeholder="รหัสนักศึกษา">
          <br><br>
          วันเดือนปี เกิด : <input type="date" name ="birthday">
          <br><br>
          หมายเลขโทรศัพท์ : <input type="text" name ="phonenumber" placeholder="หมายเลขโทรศัพท์">
          <br><br>
          อีเมลล์ : <input type="text" name ="email" placeholder="อีเมลล์">
          <br><br>
          เลือกรูปถ่าย : <input type="hidden" name ="txtname">
              <input type="file" name ="fileupload">
          <br><br>
          <button type="submit" name ="submit">เพิ่มข้อมูล </button>
        </form>

      </div>
    </article>
</div>
</div>
</div>

<!--row3-->
<div class="row">
 <div class="col-md-12">
   <div class="panel panel-info">
     <div class="panel-heading">
       <center>
      <center>ศูนย์วิทยาศาสตร์การกีฬาและสุภาพ มาหาวิทยาลัยราชภัฏยะลา</center>
   </center>
    </div>
  </div>

</div><!--end column header-->

</div><!--end row header-->
</div>
               </table>
</body>
</html>

<?php

  if(isset($_POST["submit"])){


    if($_POST["name"]!="" && $_POST["surname"]!=""&& $_POST["studentid"] && $_POST["gender"]!="" && $_POST["birthday"]!="" && $_POST["phonenumber"]!="" && $_POST["email"]!="")
    {

       $gender=$_POST["gender"];
      $name=$_POST["name"];
      $surname=$_POST["surname"];
      $stuid=$_POST["studentid"];
      $bd=$_POST["birthday"];
      $phone=$_POST["phonenumber"];
      $email=$_POST["email"];

      $txtname=$_POST["txtname"];
      echo $file=$_FILES["fileupload"]["name"];

      mysqli_query($conn,"INSERT INTO staff VALUES ('','$gender','$name','$surname','$stuid','$bd','$phone','$email','$file')");
      echo "<script>alert('บันทึกข้อมูลสำเร็จ'); location.href='table_staff.php '</script>";
    }
    else
      echo "<script>alert('บันทึกข้อมูลไม่สำเร็จ'); location.href='add_staff.php '</script>";

  }

?>
