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
       <img src="img/Banner1.jpg" width="1136" height="250" border="0" alt="">

        <div class="col-md-2">
        </div>


          <div class="col-md-12">
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
        		<?php
        			$id = $_GET['id'];
        			$select1 = "select * from member where id = '$id' ";
        			$result1=mysqli_query($conn,$select1);
        			$row1=mysqli_fetch_array($result1);
        		?>

                   สถานะ ค้างชำระ<br><br>
                   ประเภทสมาชิก : <?php echo $row1['facter']; ?>
                  <br><br>
                   <span>ชื่อ-สกุล :</span><?php echo $row1['gender']; ?> <?php echo $row1['name']; ?> <?php echo $row1['surname']; ?>
                  <br><br>
                  รหัสนักศึกษา  : <?php echo $row1['studentID']; ?>
                  <br><br>
                  วันเดือนปีเกิด : <?php echo $row1['birthday']; ?>
                  <br><br>
                  หมายเลขโทรศัพท์ : <?php echo $row1['phonenumber']; ?>
                  <br><br>
                  อีเมลล์ : <?php echo $row1['email']; ?>
                  <br><br>
                  ชื่อผู้ใช้ : <?php echo $row1['username']; ?>
                  <br><br>
                  เลือกรูปถ่าย :<?php echo $row1['picture']; ?>
                  <br><br>
                  <button type="button" name ="print">พิมพ์</button>
                  <button type="button" name ="edit">แก้ไข</button>
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
