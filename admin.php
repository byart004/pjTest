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
        <a class="navbar-brand" href="admin.php"><i class="fa fa-home"> หน้าแรก</i> </a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
         </ul>
        <ul class="nav navbar-nav navbar-right">
                 <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> ออกจากระบบ</a></li>
        </ul>
    </div>
</div>
</nav>
</div>
</div>
<img src="img/Banner1.jpg" width="1136" height="250" border="0" alt="">
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
              <a href="home1.php"><span class="glyphicon glyphicon-calendar"> หน้าหลัก </span></a>
            <br></br>

            <a href="rule.php"><span class="glyphicon glyphicon-pushpin"> กฏการเข้าใช้บริการ </span></a>


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
      <div class="" align="center" ><h4></h4></div>
      <div class="panel-body">
        <form method="post" action="chk_login.php">

      <!-- Centered Tabs -->
<ul class="nav nav-tabs nav-justified">
     <div class="col-sm-4 text-center">
        <li><a href="table_member.php"><img src="img/ButtonA1.jpg" class="img-responsive" style="width:100%" alt="Image"></a></li>
      </div>

      <div class="col-sm-4 text-center">
        <li><a href="table_staff.php"><img src="img/ButtonA2.jpg" class="img-responsive" style="width:100%" alt="Image"></a></li>
      </div>

      <div class="col-sm-4 text-center">
         <li><a href="table_Trainer.php"><img src="img/ButtonA3.jpg" class="img-responsive" style="width:100%" alt="Image"></a></li>
      </div>
</ul>

<ul class="nav nav-tabs nav-justified">
      <div class="col-sm-4 text-center">
        <li><a href="table_news.php"><img src="img/ButtonA11.jpg" class="img-responsive" style="width:100%" alt="Image"></a></li>
      </div>

      <div class="col-sm-4 text-center">
          <li><a href="table_training_equipment.php"><img src="img/ButtonA5.jpg" class="img-responsive" style="width:100%" alt="Image"></a></li>
      </div>

      <div class="col-sm-4 text-center">
          <li><a href="table_payment.php"><img src="img/ButtonA10.jpg" class="img-responsive" style="width:100%" alt="Image"></a></li>
      </div>
</ul>

<ul class="nav nav-tabs nav-justified">
      <div class="col-sm-4 text-center">
        <li><a href="table_scan.php"><img src="img/ButtonA8.jpg" class="img-responsive" style="width:100%" alt="Image"></a></li>
      </div>

      <div class="col-sm-4 text-center">
        <li><a href="add_report.php"><img src="img/ButtonA9.jpg" class="img-responsive" style="width:100%" alt="Image"></a></li>
      </div>

</ul>


</div>
</div>
 </div>
</div>
</div>
</div>
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

 </head>
 <body>

    <div class="container">




 </body>


<!--row3-->
<div class="row">
 <div class="col-md-12">
    <div class="panel panel-default">
      <div class="panel-heading">
       <center> ระบบบริหารจัดการศูนย์วิทยาศาสตร์การกีฬาและสุขภาพ มหาวิทยาลัยราชภัฏยะลา </center>
      </div>
    </div>
  </div><!--end column header-->
</div><!--end column header-->

</div><!--end row header-->
</table>
</html>
