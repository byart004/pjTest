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
  <link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">

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
<style>
      body {
        font-family: 'Kanit', sans-serif;
      }
    </style>
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
          <li><a href="scan.php">สแกน</a></li> 
          <li><a href="login_member.php">เข้าสู่ระบบ</a></li>
         </ul> 
         <ul class="nav navbar-nav navbar-right"> 
          <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Admin</a></li>
        </ul>
    </div>
</div>
</nav>
</div>
</div>
<img src="img/Banner4.jpg" width="1136" height="150" border="0" alt="">


<div class="col-md-2">
</div>


  <div class="col-md-9">
   <div class="panel panel-info">
     <div class="panel-body">

   <div class="col-md-12">
   <div class="panel panel-info">
     <div class="panel-heading" align="center" ><h2>ลงทะเบียนสมัครสมาชิก</h2></div>
     <div class="panel-body">
     <div class="col-md-12">
<div class = "detail">
  <div class="col-md-2">
  </div>
  </div>

      <div class="col-md-8" style="border: 1px solid Navy;">
<div class = "detail">
  <form action="" method="post"  enctype="multipart/form-data">
 <br><br>
      <label class="control-label col-sm-5" for="sc_id">ประเภท : </label>
        <input type="radio" name="  facter" value="นักศึกษา"> นักศึกษา
        <input type="radio" name="  facter" value="บุคลากร"> บุคลากร
    <br><br>
      <label class="control-label col-sm-5" for="sc_id">คำนำหน้า : </label>
        <input type="radio" name="gender" value="นาย"> นาย
        <input type="radio" name="gender" value="นาง"> นาง
        <input type="radio" name="gender" value="นางสาว"> นางสาว
    <br><br>
      <label class="control-label col-sm-5" for="sc_id">ชื่อ : </label>
        <input type="text" name="name" placeholder="ชื่อ" onKeyUp="if(!(isNaN(this.value))) { alert('กรุณากรอกอักษร'); this.value='';}"maxlength ="20"/>
    <br><br>
      <label class="control-label col-sm-5" for="sc_id">นามสกุล : </label>
        <input type="text" name="surname" placeholder="นามสกุล" onKeyUp="if(!(isNaN(this.value))) { alert('กรุณากรอกอักษร'); this.value='';}"maxlength ="20"/>
    <br><br>
      <label class="control-label col-sm-5" for="sc_id">รหัสนักศึกษา/บุคลากร : </label>
        <input type="text" name="studentID" placeholder="รหัสนักศึกษา/บุคลากร" onKeyUp="if(isNaN(this.value)){ alert('กรุณากรอกตัวเลข'); this.value='';}" maxlength ="9" />
    <br><br>
      <label class="control-label col-sm-5" for="sc_id">วันเดือนปีเกิด : </label>
        <input type="date" name ="birthday">
    <br><br>
      <label class="control-label col-sm-5" for="sc_id">หมายเลขโทรศัพท์ : </label>
        <input type="text" name="phonenumber" placeholder="หมายเลขโทรศัพท์" onKeyUp="if(isNaN(this.value)){ alert('กรุณากรอกตัวเลข'); this.value='';}"maxlength ="10" />
    <br><br>
      <label class="control-label col-sm-5" for="sc_id">อีเมล : </label>
        <input type="email" name ="email" placeholder="อีเมลล์">
    <br><br>
      <label class="control-label col-sm-5" for="sc_id">ชื่อผู้ใช้ : </label>
        <input type="text" name ="username" placeholder="ชื่อผู้ใช้" id="studentID" type="text"  maxlength ="20">
    <br><br>
      <label class="control-label col-sm-5" for="sc_id">รหัสผ่าน : </label>
        <input type="password" name="password" placeholder="รหัสผ่าน" onKeyUp="if(isNaN(this.value)){ alert('กรุณากรอกตัวเลข'); this.value='';}"maxlength ="8" />
    <br><br>
      <label class="control-label col-sm-5" for="sc_id">ยืนยันรหัสผ่าน : </label>
        <input type="password" name="password" placeholder="ยืนยันรหัสผ่าน" onKeyUp="if(isNaN(this.value)){ alert('กรุณากรอกตัวเลข'); this.value='';}"maxlength ="8" />
    <br><br>
      <label class="control-label col-sm-5" for="img">เลือกรูปถ่าย : </label>
        <input type="hidden" name ="txtname">
        <input type="file" name ="fileupload">
    <br><br>
    <center><button type="submit" name ="submit">ยืนยันการสมัคร </button></center>
  <br><br>
  </form>
      </div>

      </div>
</div>

    </article>
  </div>
  </div>
  </div>
</div>
</div>
</div>

<!--row3-->
<div class="row">
 <div class="col-md-12">
   <div class="panel panel-default">
     <div class="panel-heading">
       <center>
      <center>ระบบบริหารจัดการศูนย์วิทยาศาสตร์การกีฬาและสุขภาพ มหาวิทยาลัยราชภัฏยะลา</center>
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
   if($_POST){


    if($_POST["facter"]!="" && $_POST["gender"]!="" && $_POST["name"]!="" && $_POST["surname"]!="" && $_POST["studentID"]!="" && $_POST["birthday"]!="" && $_POST["phonenumber"]!="" && $_POST["email"]!="" && $_POST["username"]!="" && $_POST["password"]!="")
    {

      $facter=$_POST["facter"];
      $gender=$_POST["gender"];
      $name=$_POST["name"];
      $surname=$_POST["surname"];
      $studentID=$_POST["studentID"];
      $bd=$_POST["birthday"];
      $phone=$_POST["phonenumber"];
      $email=$_POST["email"];
      $username=$_POST["username"];
      $password=$_POST["password"];
      $status="no";

      $txtname=$_POST["txtname"];
      echo $file=$_FILES["fileupload"]["name"];

      mysqli_query($conn,"INSERT INTO member VALUES (
      '','$facter','$gender','$name','$surname','$studentID','$bd','$phone','$email','$username','$password','$file','$status')");
      
      $select1 = "select max(id) as maxid from member";
      $result1=mysqli_query($conn,$select1);
      $row1=mysqli_fetch_assoc($result1);
      echo $id = $row1['maxid'];

      echo "<script>alert('บันทึกข้อมูลสำเร็จ'); location.href='check_member.php?id=$id'</script>";
    }
    else
      echo "<script>alert('บันทึกข้อมูลไม่สำเร็จ'); ";

  }

?>
