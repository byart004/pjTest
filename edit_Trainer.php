<?php
  include 'connect.php';
  date_default_timezone_set("Asia/Bangkok");

  $id=$_REQUEST['id'];
  $select1 = "select * from trainer where id='$id' ";
  $result1=mysqli_query($conn,$select1);
  $row1=mysqli_fetch_array($result1)


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
          <li><a href="login.php"><span class="glyphicon glyphicon-log-out"></span> อออกจากระบบ</a></li>
        </ul>
    </div>
</div>
</nav>
</div>
</div>
<img src="img/Banner4.jpg" width="1136" height="150" border="0" alt="">
<br></br>
<!--end row1 -->
<div class="col-md-3">
   <div class="panel panel-info">
     <div class="panel-body">

   <div class="col-md-12">
   <div class="panel panel-info">
     <div class="panel-heading" align="center" ><h4>Menu</h4></div>
     <div class="panel-body">
         <body>
     <!-- Centered Tabs -->
             <a href="admin.php"><span class="glyphicon glyphicon-home"> หน้าแรก </span></a>
         <br></br>
           <a href="table_member.php"><span class="glyphicon glyphicon-user"> สมาชิก </span></a>
         <br></br>
           <a href="table_staff.php"><span class="glyphicon glyphicon-tasks"> พนักงาน </span></a>
         <br></br>
           <a href="table_Trainer.php"><span class="glyphicon glyphicon-eye-open"> ครูฝึก </span></a>
         <br></br>
           <a href="table_news.php"><span class="glyphicon glyphicon-list-alt"> ข่าวสาร </span></a>
         <br></br>
           <a href="table_training_equipment.php"><span class="glyphicon glyphicon-scale"> เครื่องออกกำลังกาย </span></a>
         <br></br>
           <a href="table_payment.php"><span class="glyphicon glyphicon-bitcoin"> การเงิน </span></a>
         <br></br>
           <a href="table_save_member.php"><span class="glyphicon glyphicon-copy"> บันทึกรายจ่าย </span></a>
         <br></br>
            <a href="table_scan.php"><span class="glyphicon glyphicon-qrcode"> สแกนลายนิ้วมือ </span></a>
        <br></br>
            <a href="table_report.php"><span class="glyphicon glyphicon-stats"> รายงาน </span></a>
     <div class="panel-body">
        <div class="form-group">
        </div>
     </div>
       </form>
</div>
</div>
</div>
</div>
</div>
</div>

<div class="col-md-9">
 <div class="panel panel-info">
   <div class="panel-body">

 <div class="col-md-12">
 <div class="panel panel-info">
   <div class="panel-heading" align="center" ><h2>แก้ไขข้อมูลครูฝึก</h2></div>
   <div class="panel-body">
       </body>


<div class="col-md-12">
<div class = "detail">
<div class="col-md-2">
</div>
<div class="col-md-8" style="border: 1px solid Navy;">
        <form action="" method="post"  enctype="multipart/form-data">
          <br><br>
            <label class="control-label col-sm-5" for="sc_id">ชื่อ : </label>
            <input type="text" name ="name" value="<?= $row1['name']; ?>">
          <br><br>
            <label class="control-label col-sm-5" for="sc_id">นามสกุล : </label>
            <input type="text" name ="surname" value="<?= $row1['surname']; ?>">
          <br><br>
            <label class="control-label col-sm-5" for="sc_id">รหัสนักศึกษา/บุคลากร  : </label>
            <input type="text" name ="studentid" value="<?= $row1['studentid']; ?>">
          <br><br>
            <label class="control-label col-sm-5" for="sc_id">วันเดือนปีเกิด : </label>
            <input type="date" name ="birthday" value="<?= $row1['birthday']; ?>">
          <br><br>
            <label class="control-label col-sm-5" for="sc_id">หมายเลขโทรศัพท์ : </label>
            <input type="text" name ="phonenumber" value="<?= $row1['phonenumber']; ?>">
          <br><br>
            <label class="control-label col-sm-5" for="sc_id">อีเมล : </label>
            <input type="text" name ="email" value="<?= $row1['email']; ?>">
          <br><br>
            <label class="control-label col-sm-5" for="sc_id">เลือกรูปถ่าย : </label>
            <input type="hidden" name ="txtname">
              <input type="file" name ="fileupload">
          <br><br>
          <center><button type="submit" name ="submit">แก้ไขข้อมูลครูฝึก </button></center>
          <br><br>
        </form>

      </div>
    </article>
</div>
</div>
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
</div>

</table>
</body>
</html>

<?php
  if(isset($_POST["submit"])){

            $name=$_POST["name"];
      $surname=$_POST["surname"];     
      $stuid=$_POST["studentid"];
      $bd=$_POST["birthday"];
      $phone=$_POST["phonenumber"];
      $email=$_POST["email"];

      $update=" update trainer
            set name='$name',surname='$surname',studentid ='$stuid',birthday='$bd',phonenumber='$phone',
            email='$email'
            where id='$id'";

      mysqli_query($conn,$update);
      echo "<script>alert('แก้ไขข้อมูลเรียบร้อย');</script>";
      echo "<script>location.href='table_Trainer.php';</script>";


  }

?>
