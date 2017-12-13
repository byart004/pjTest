<?php
	session_start();
	include 'connect.php';
	date_default_timezone_set("Asia/Bangkok");

	if(!isset($_SESSION["email"])){
		echo "<script>alert('คุณยังไม่เข้าสู่ระบบค่ะ  กรุณาเข้าสู่ระบบก่อน');location.href='login.php';</script>";
	}
	else{
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
        <a class="navbar-brand" href="home.php"><i class="fa fa-home"></i> </a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
         </ul>
        <ul class="nav navbar-nav navbar-right">
                 <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> ออกจากระบบ</a></li>
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
	 <div class="panel-heading" align="center" ><h2>ตารางข้อมูลพนักงาน</h2></div>
	 <div class="panel-body">
		 <form method="post" action="chk_login.php">
			 </body>



		<article>
			<div class="panel panel-Default">
				<div class="panel-heading">
          <table class="table table-bordered table-striped ">
             <thead>
					 <tr>

					   <th class="text-nowrap">ลำดับ</th>
             <th class="text-nowrap">คำนำหน้า</th>
					   <th class="text-nowrap">ชื่อ</th>
             <th class="text-nowrap">นามสกุล</th>
					   <th class="text-nowrap">ลบ</th>
					   <th class="text-nowrap">แก้ไข</th>
					   <th class="text-nowrap">ตรวจสอบ</th>
					 </tr>
				   </thead>
				   <tbody>
					 <tr>
					 <button <a href="home.php" type="button" class="btn btn-primary"><a href="add_staff.php"> <font color="#FFFFFF"> เพื่มข้อมูลพนักงาน </font></a> </button> <br></br>
					   <?php
					  $i=0;

					  $select1 = "select * from staff ";
					  $result1=mysqli_query($conn,$select1);

					while($row1=mysqli_fetch_array($result1)){

					  $i++;

					  ?>
					  </tr>
					  <tr>
						<td ><?php echo $i; ?></td>
            <td ><?php echo $row1['gender']; ?></td>
						<td ><?php echo  $row1['name']; ?></td>
            <td ><?php echo  $row1['surname']; ?></td>
						<td><a href="delete_staff.php?id=<?php echo $row1['id'];?>">
          <span class="glyphicon glyphicon-trash"></span>
        </a></td>
						<td><a href="edit_staff.php?id=<?php echo $row1['id'];?>">
          <span class="glyphicon glyphicon-pencil"></span>
        </a></td>
						<td><a href="check_staff.php?id=<?php echo $row1['id'];?>">
          <span class="glyphicon glyphicon-check"></span>
        </a></td>

					  </tr>
						  <?php }   ?>



				   </body>
				 </table>


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

 </head>
 <body>

		<div class="container">




 </body>
</html>

<?php

	}
?>
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
