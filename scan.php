<?php
  include "connect.php";
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
      <div class="container">

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

    <a class="navbar-brand" href="admin.php"><i class="fa fa-home">หน้าแรก</i> </a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav navbar-right">
                   <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> ออกจากระบบ</a></li>
          </ul>

    </div>
</div>
</nav>
</div>
</div>
<!--end row1 -->
<div class="jumbotron">
  <div class="container text-center">
    <div class="row">
  <div class="col-md-4">
 </div>
  <div class="col-md-4">
          <div class="panel panel-info">
      <img src="img/img001.jpg" width="100" height="100" border="0" alt="">
      <br>
      </br>

            <div class="panel-heading" align="center" ><h4>สแกนลายนิ้วมือ</h4></div>
            <div class="panel-body">
              <form method="post" action="#">
                <div class="form-group">
                  กรุณากรอกรหัสสมาชิก  <input type="text"  name ="studentID" placeholder="รหัสสมาชิก">
                </div>
                <center><button type="submit" name="submit" class="btn btn-primary" ><span class="glyphiconglyphicon">
            </span>เข้าใช้งาน</button>
        </center>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

        </div>
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
</body>
</html>

<?php
  if($_POST){
    if($_POST['studentID']!=""){
      $stuID = $_POST['studentID'];
      $status = "yes";

      $select1 = "select * from member where studentID='$stuID' and status = '$status' ";
      $result1=mysqli_query($conn,$select1);
      $row1=mysqli_fetch_array($result1);

      if(!$row1)
      {
        echo "<script>alert('กรอกรหัสไม่ถูกต้อง!'); </script>";
        echo "<script> window.history.back();</script>";
      }
      else
      {
        $memberid = $row1['id'];
        $date = date("Y-m-d");
        mysqli_query($conn,"INSERT INTO scan VALUES ('','$memberid',CURDATE(),CURTIME())");

        echo "<script>alert('สแกนเรียบร้อยแล้วค่ะ!'); </script>";
        echo "<script> location.href='scan.php';</script>";
      }
    }
  }
?>
