<?php include("connect.php"); @session_start();  
if(!isset($_SESSION["id_regis"]) && !isset($_SESSION["name_std"])){
  // echo "<script>alert('กรุณาเข้าสู่ระบบ !'); </script>";
  echo "<script> window.history.back();</script>";
}  
    
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>หน้าแรก</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">

  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" />
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <style type="text/css">
  body {
       background-color:#D3D3D3;
    }
  p{
        font-size: 20px;
        font-weight: bold;
    }
    span{
          font-weight: bold;
    }
  </style>
  </head>
  <body>
    <div class="container">
    <nav class="navbar navbar-inverse" style="margin-bottom: 5px;">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Scholarships</a>      
    </div>
  </div>
</nav>
        <img src="img/bb3.jpg"  width="100%" height="230" style="margin-bottom: 5px;">

<nav class="navbar navbar-inverse1" style="margin-bottom: 5px;">
  <div class="container-fluid">
    <div class="navbar-header">
     <a class="btn" href="pro_std.php">หน้าแรก</a>
      <a class="btn" href="infor_std.php">ข้อมูล</a>
      <a class="btn" href="status_std.php">สถานะการตอบกลับ</a>
    </div>
    <ul class="nav navbar-nav navbar-right">
      <li class="dropdown">
         <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="fa fa-user"> :</span> <?= $_SESSION["name_std"]; ?> <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="pro_dpm.php">ข้อมูลส่วนตัว</a></li>
          <li><a href="logout.php">ออกจากระบบ</a></li>
        </ul>
      </li>
    </ul>
  </div>
</nav>
<div id="divprint"> 
<div class="panel-body">
 <div class="row">
  <div class="col-md-12">
    <div id="myCarousel" class="carousel slide" data-ride="carousel" style="margin-bottom: 5px;">
  <div class="fix single_sidebar pad">
    <div class="post-title" align="center"></span> ข้อมูลการสมัครทุน</div>
    <div class="col-md-12">

      <?php
  include("connect.php"); @session_start();
          // open connection
          $id_regis = $_GET["id_regis"];
          

          $sql = $sql = "SELECT * FROM apply_scholarship AS d1
             INNER JOIN regis_std AS d2
             ON  (d1.id_regis = d2.id_regis) 
              INNER JOIN post_dpm  AS d3
             ON  (d1.id_scholar_dpm = d3.id_scholar_dpm)
             INNER JOIN regis_dpm  AS d4
             ON  (d3.id_dpm = d4.id_dpm) INNER JOIN faculty  AS d5
             ON  (d2.faculty = d5.faculty_id) INNER JOIN major  AS d6
             ON  (d2.major = d6.major_id) INNER JOIN regis_std2  AS d7
             ON  (d2.id_regis = d7.id_regis)  where d1.id_regis = '" . $id_regis . "'";
          $result = $conn->query($sql);
          $row = $result->fetch_assoc();
          $reply_status = $row['reply_status'];

            if ($reply_status == '') {

              $status="<p class='label label btn' style='color: black;'><span class='fa fa-clock-o'></span> รอการตอบกลับ</p>";

            }

            if ($reply_status == '1') {

              $status="<p class='label label btn' style='color: black;'><span class='fa fa-check'></span> ผ่านการคัดเลือก</p>";
            }
            if ($reply_status == '2') {
              $status="<p class='label label btn' style='color: black;'><span class='fa fa-times'></span> ไม่ผ่านการคัดเลือก</p>";
            }
    

  ?>
    <div class="col-md-12" align="center">
        <img src="profile_std/<?php echo $row['img_std']; ?>" class="img-thumbnail" alt="<?php echo $row['img_std']; ?>" width="150" height="75">
    </div>
        <article>
      <div class = "detail">
        <form action="" method=""  enctype="multipart/form-data">
         <span>ชื่อทุน :</span> <?php echo $row['scholar_name_dpm']; ?>    <span>สมัครวันที่ :</span> <?php echo $row['scholar_date_dpm']; ?>
          <br>
          <span>ชื่อ-สกุล :</span> <?php echo $row['title_std']; ?> : <?php echo $row['name_std']; ?>
          <br>
          <span>รหัสบัตรประชาชาชน :</span> <?php echo $row['id_card_std']; ?>
          <br>
          <span>วันเดือนปีเกิด  :</span> <?php echo $row['birthday_std']; ?>  <span>อายุ :</span> <?php echo $row['age_std']; ?> <span>ปี</span>
          <br>
          <span>เกรดเฉลี่ยล่าสุด :</span> <?php echo $row['gpa_std']; ?>
          <br>
          <span>ชั้นปีที่ :</span> <?php echo $row['class_std']; ?>
          <br>
          <span>รหัสนักศึกษา :</span> <?php echo $row['id_std']; ?>
          <br>
          <span>สาขาวิชา :</span> <?php echo $row['major_name']; ?>
          <br>
          <span>คณะ: : </span><?php echo $row['faculty_name']; ?>
          <br>
          <span>เบอร์โทร  :</span> <?php echo $row['phone1_std']; ?>
          <br>
          <span>สถานะการคัดเลือก  :</span> <?php echo $status; ?> <span>จากหน่วยงาน  :</span> <?php echo $row['name_orga_dpm']; ?>
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
</div>
</div>
</div>
<div class="text-center">
  <div class="col-sm-4">
        <a class="btn btn-sm" href="status_std.php" style='color: black;' class="btn btn-info">ย้อนกลับ</a>
      </div>
        <a class="btn btn-sm" align="center" style="display: initial;color: green;" onclick="printDiv('divprint')"><i class="fa fa-print"></i> Print this page</a>
</div>
<script type="text/javascript"> 
function printDiv(divName) { 
var printContents = document.getElementById(divName).innerHTML; 
var originalContents = document.body.innerHTML; 

document.body.innerHTML = printContents; 
window.print(); 

document.body.innerHTML = originalContents; 
} 
</script> 
      </div>

  </body>
  </html>
