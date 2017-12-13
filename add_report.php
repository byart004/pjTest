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
        <li><a href="#">เกียวกับเรา</a></li>
         </ul>
        <ul class="nav navbar-nav navbar-right">
                 <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> ออกจากระบบ</a></li>
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
       <form method="post" action="chk_login.php">
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
       <form method="post" action="chk_login.php">
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
   <div class="panel-heading" align="center" ><h2>สถิติการเข้าใช้บริการ</h2></div>
   <div class="panel-body">
     
    <article>
      <div class = "detail">
      สถิติการเข้าใช้งานรายวัน<br><br>
      <?php
      $date = date("Y-m-d");
      $select1 = "select scanID from scan where date = '$date'";
      $result1=mysqli_query($conn,$select1);
      $row1=mysqli_num_rows($result1);
      echo $row1 ," คน";
//=รายวัน===========================================================
      $select1 = "select scanID from scan left join member 
      on scan.id = member.id 
      where date = '$date' and member.facter = 'บุคลากร' ";
      $result1=mysqli_query($conn,$select1);
      $row1=mysqli_num_rows($result1);
      echo "บุคลากร", $row1 ," คน";

      $select1 = "select scanID from scan left join member 
      on scan.id = member.id 
      where date = '$date' and member.facter = 'นักศึกษา' ";
      $result1=mysqli_query($conn,$select1);
      $row1=mysqli_num_rows($result1);
      echo "นักศึกษา", $row1 ," คน";
//============================================================
      ?>

      <br><br>สถิติการเข้าใช้งานรายเดือน<br><br>
      <?php
      $select1 = "select scanID from scan where date between '2017-01-01' and '2017-01-31'";
      $result1=mysqli_query($conn,$select1);
      $row1=mysqli_num_rows($result1);
      echo "มกราคม", $row1 ," คน";
//==========รายเดือน=========================================================
      $select1 = "select scanID from scan left join member 
      on scan.id = member.id 
      where date between '2017-01-01' and '2017-01-31' and member.facter = 'บุคลากร' ";
      $result1=mysqli_query($conn,$select1);
      $row1=mysqli_num_rows($result1);
      echo "บุคลากร", $row1 ," คน";

      $select1 = "select scanID from scan left join member 
      on scan.id = member.id 
      where date between '2017-01-01' and '2017-01-31' and member.facter = 'นักศึกษา' ";
      $result1=mysqli_query($conn,$select1);
      $row1=mysqli_num_rows($result1);
      echo "นักศึกษา", $row1 ," คน";


//============================================================================
      $select1 = "select scanID from scan where date between '2017-02-01' and '2017-02-29'";
      $result1=mysqli_query($conn,$select1);
      $row1=mysqli_num_rows($result1);
      echo "กุมภาพันธ์", $row1 ," คน";
      $select1 = "select scanID from scan left join member 
      on scan.id = member.id 
      where date between '2017-02-01' and '2017-02-31' and member.facter = 'บุคลากร' ";
      $result1=mysqli_query($conn,$select1);
      $row1=mysqli_num_rows($result1);
      echo "บุคลากร", $row1 ," คน";

      $select1 = "select scanID from scan left join member 
      on scan.id = member.id 
      where date between '2017-02-01' and '2017-02-31' and member.facter = 'นักศึกษา' ";
      $result1=mysqli_query($conn,$select1);
      $row1=mysqli_num_rows($result1);
      echo "นักศึกษา", $row1 ," คน";



      $select1 = "select scanID from scan where date between '2017-03-01' and '2017-03-31'";
      $result1=mysqli_query($conn,$select1);
      $row1=mysqli_num_rows($result1);
      echo "มีนาคม", $row1 ," คน";
      $select1 = "select scanID from scan left join member 
      on scan.id = member.id 
      where date between '2017-03-01' and '2017-03-31' and member.facter = 'บุคลากร' ";
      $result1=mysqli_query($conn,$select1);
      $row1=mysqli_num_rows($result1);
      echo "บุคลากร", $row1 ," คน";

      $select1 = "select scanID from scan left join member 
      on scan.id = member.id 
      where date between '2017-03-01' and '2017-03-31' and member.facter = 'นักศึกษา' ";
      $result1=mysqli_query($conn,$select1);
      $row1=mysqli_num_rows($result1);
      echo "นักศึกษา", $row1 ," คน";



      $select1 = "select scanID from scan where date between '2017-04-01' and '2017-04-30'";
      $result1=mysqli_query($conn,$select1);
      $row1=mysqli_num_rows($result1);
      echo "เมษายน", $row1 ," คน";
      $select1 = "select scanID from scan left join member 
      on scan.id = member.id 
      where date between '2017-04-01' and '2017-04-31' and member.facter = 'บุคลากร' ";
      $result1=mysqli_query($conn,$select1);
      $row1=mysqli_num_rows($result1);
      echo "บุคลากร", $row1 ," คน";

      $select1 = "select scanID from scan left join member 
      on scan.id = member.id 
      where date between '2017-04-01' and '2017-04-31' and member.facter = 'นักศึกษา' ";
      $result1=mysqli_query($conn,$select1);
      $row1=mysqli_num_rows($result1);
      echo "นักศึกษา", $row1 ," คน";



      $select1 = "select scanID from scan where date between '2017-05-01' and '2017-05-31'";
      $result1=mysqli_query($conn,$select1);
      $row1=mysqli_num_rows($result1);
      echo "พฤษภาคม", $row1 ," คน";
      $select1 = "select scanID from scan left join member 
      on scan.id = member.id 
      where date between '2017-05-01' and '2017-05-31' and member.facter = 'บุคลากร' ";
      $result1=mysqli_query($conn,$select1);
      $row1=mysqli_num_rows($result1);
      echo "บุคลากร", $row1 ," คน";

      $select1 = "select scanID from scan left join member 
      on scan.id = member.id 
      where date between '2017-05-01' and '2017-05-31' and member.facter = 'นักศึกษา' ";
      $result1=mysqli_query($conn,$select1);
      $row1=mysqli_num_rows($result1);
      echo "นักศึกษา", $row1 ," คน";



      $select1 = "select scanID from scan where date between '2017-06-01' and '2017-06-30'";
      $result1=mysqli_query($conn,$select1);
      $row1=mysqli_num_rows($result1);
      echo ",มิถุนายน", $row1 ," คน";
      $select1 = "select scanID from scan left join member 
      on scan.id = member.id 
      where date between '2017-06-01' and '2017-06-31' and member.facter = 'บุคลากร' ";
      $result1=mysqli_query($conn,$select1);
      $row1=mysqli_num_rows($result1);
      echo "บุคลากร", $row1 ," คน";

      $select1 = "select scanID from scan left join member 
      on scan.id = member.id 
      where date between '2017-06-01' and '2017-06-31' and member.facter = 'นักศึกษา' ";
      $result1=mysqli_query($conn,$select1);
      $row1=mysqli_num_rows($result1);
      echo "นักศึกษา", $row1 ," คน";



      $select1 = "select scanID from scan where date between '2017-07-01' and '2017-07-31'";
      $result1=mysqli_query($conn,$select1);
      $row1=mysqli_num_rows($result1);
      echo "กรกฎาคม", $row1 ," คน";
      $select1 = "select scanID from scan left join member 
      on scan.id = member.id 
      where date between '2017-07-01' and '2017-07-31' and member.facter = 'บุคลากร' ";
      $result1=mysqli_query($conn,$select1);
      $row1=mysqli_num_rows($result1);
      echo "บุคลากร", $row1 ," คน";

      $select1 = "select scanID from scan left join member 
      on scan.id = member.id 
      where date between '2017-07-01' and '2017-07-31' and member.facter = 'นักศึกษา' ";
      $result1=mysqli_query($conn,$select1);
      $row1=mysqli_num_rows($result1);
      echo "นักศึกษา", $row1 ," คน";



      $select1 = "select scanID from scan where date between '2017-08-01' and '2017-08-31'";
      $result1=mysqli_query($conn,$select1);
      $row1=mysqli_num_rows($result1);
      echo "สิงหาคม", $row1 ," คน";
      $select1 = "select scanID from scan left join member 
      on scan.id = member.id 
      where date between '2017-08-01' and '2017-08-31' and member.facter = 'บุคลากร' ";
      $result1=mysqli_query($conn,$select1);
      $row1=mysqli_num_rows($result1);
      echo "บุคลากร", $row1 ," คน";

      $select1 = "select scanID from scan left join member 
      on scan.id = member.id 
      where date between '2017-08-01' and '2017-08-31' and member.facter = 'นักศึกษา' ";
      $result1=mysqli_query($conn,$select1);
      $row1=mysqli_num_rows($result1);
      echo "นักศึกษา", $row1 ," คน";



      $select1 = "select scanID from scan where date between '2017-09-01' and '2017-09-30'";
      $result1=mysqli_query($conn,$select1);
      $row1=mysqli_num_rows($result1);
      echo "กันยายน", $row1 ," คน";
      $select1 = "select scanID from scan left join member 
      on scan.id = member.id 
      where date between '2017-09-01' and '2017-01-31' and member.facter = 'บุคลากร' ";
      $result1=mysqli_query($conn,$select1);
      $row1=mysqli_num_rows($result1);
      echo "บุคลากร", $row1 ," คน";

      $select1 = "select scanID from scan left join member 
      on scan.id = member.id 
      where date between '2017-09-01' and '2017-09-31' and member.facter = 'นักศึกษา' ";
      $result1=mysqli_query($conn,$select1);
      $row1=mysqli_num_rows($result1);
      echo "นักศึกษา", $row1 ," คน";



      $select1 = "select scanID from scan where date between '2017-10-01' and '2017-10-31'";
      $result1=mysqli_query($conn,$select1);
      $row1=mysqli_num_rows($result1);
      echo "ตุลาคม", $row1 ," คน";
      $select1 = "select scanID from scan left join member 
      on scan.id = member.id 
      where date between '2017-10-01' and '2017-10-31' and member.facter = 'บุคลากร' ";
      $result1=mysqli_query($conn,$select1);
      $row1=mysqli_num_rows($result1);
      echo "บุคลากร", $row1 ," คน";

      $select1 = "select scanID from scan left join member 
      on scan.id = member.id 
      where date between '2017-10-01' and '2017-10-31' and member.facter = 'นักศึกษา' ";
      $result1=mysqli_query($conn,$select1);
      $row1=mysqli_num_rows($result1);
      echo "นักศึกษา", $row1 ," คน";



      $select1 = "select scanID from scan where date between '2017-11-01' and '2017-11-30'";
      $result1=mysqli_query($conn,$select1);
      $row1=mysqli_num_rows($result1);
      echo "พฤศจิกายน", $row1 ," คน";
      $select1 = "select scanID from scan left join member 
      on scan.id = member.id 
      where date between '2017-11-01' and '2017-11-31' and member.facter = 'บุคลากร' ";
      $result1=mysqli_query($conn,$select1);
      $row1=mysqli_num_rows($result1);
      echo "บุคลากร", $row1 ," คน";

      $select1 = "select scanID from scan left join member 
      on scan.id = member.id 
      where date between '2017-11-01' and '2017-11-31' and member.facter = 'นักศึกษา' ";
      $result1=mysqli_query($conn,$select1);
      $row1=mysqli_num_rows($result1);
      echo "นักศึกษา", $row1 ," คน";



      $select1 = "select scanID from scan where date between '2017-12-01' and '2017-12-31'";
      $result1=mysqli_query($conn,$select1);
      $row1=mysqli_num_rows($result1);
      echo "ธันวาคม", $row1 ," คน";
      $select1 = "select scanID from scan left join member 
      on scan.id = member.id 
      where date between '2017-12-01' and '2017-12-31' and member.facter = 'บุคลากร' ";
      $result1=mysqli_query($conn,$select1);
      $row1=mysqli_num_rows($result1);
      echo "บุคลากร", $row1 ," คน";

      $select1 = "select scanID from scan left join member 
      on scan.id = member.id 
      where date between '2017-12-01' and '2017-12-31' and member.facter = 'นักศึกษา' ";
      $result1=mysqli_query($conn,$select1);
      $row1=mysqli_num_rows($result1);
      echo "นักศึกษา", $row1 ," คน";


      ?>

      <br><br>สถิติการเข้าใช้งานรายปี<br><br>
      <?php
      $yy=date('Y');
      $select1 = "select scanID from scan where date between '2017-01-01' and '2017-12-31'";
      $result1=mysqli_query($conn,$select1);
      $row1=mysqli_num_rows($result1);

      echo $row1 ," คน";

      $select1 = "select scanID from scan left join member 
      on scan.id = member.id 
      where date between '2017-01-01' and '2017-12-31' and member.facter = 'บุคลากร' ";
      $result1=mysqli_query($conn,$select1);
      $row1=mysqli_num_rows($result1);
      echo "บุคลากร", $row1 ," คน";

      $select1 = "select scanID from scan left join member 
      on scan.id = member.id 
      where date between '2017-01-01' and '2017-12-31' and member.facter = 'นักศึกษา' ";
      $result1=mysqli_query($conn,$select1);
      $row1=mysqli_num_rows($result1);
      echo "นักศึกษา", $row1 ," คน";



      $select1 = "select scanID from scan left join member 
      on scan.id = member.id 
      where member.facter = 'บุคลากร' ";
      $result1=mysqli_query($conn,$select1);
      $row1=mysqli_num_rows($result1);
      echo "บุคลากรทั้งหมด", $row1 ," คน";

      $select1 = "select scanID from scan left join member 
      on scan.id = member.id 
      where member.facter = 'นักศึกษา' ";
      $result1=mysqli_query($conn,$select1);
      $row1=mysqli_num_rows($result1);
      echo "นักศึกษานั้งหมด", $row1 ," คน";





      ?>
        

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
  
?>

