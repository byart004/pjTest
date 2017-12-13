<?php
include 'connect.php';
date_default_timezone_set("Asia/Bangkok");
?>
<!DOCTYPE html>
<html lang="en">
 <head> 
  <title>หน้าหลัก</title> 
  <meta charset="utf-8" /> 
  <meta name="viewport" content="width=device-width, initial-scale=1" /> 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" /> 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> 
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
  <link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet" /> 
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" /> 
  <link rel="stylesheet" type="text/css" href="style.css">
  <script type="text/javascript" src="js/jquery.js"></script> 
  <script type="text/javascript" src="js/bootstrap.min.js"></script> 
  <script type="text/javascript" src="js/bootstrap.js"></script> 
  <style type="text/css">

  </style> 
  <style type="text/css"> body {
           background: linear-gradient(to top, #000066 0%, #ffffff 100%);
           color: black;
}</style>
  <style>
      body {
        font-family: 'Kanit', sans-serif;
      }
    </style>
 </head>   
 <body> 
  <div class="container">
   <!--style="border : 2px solidblue sky;"--> 
   <div class="panel panel-default"> 
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
         <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button> 
         <a class="navbar-brand" href="index.php"><i class="fa fa-home"></i> </a> 
        </div> 
        <div class="collapse navbar-collapse" id="myNavbar"> 
         <ul class="nav navbar-nav"> 
          <li class="active"><a href="home1.php">หน้าหลัก</a></li>
        <li><a href="#">เกี่ยวกับเรา</a></li>
         </ul>
        <ul class="nav navbar-nav navbar-right">
                 <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> ออกจากระบบ</a></li>
        </div> 
       </div> 
      </nav> 
     </div> 
    </div> 
    <img src="img/Banner1.jpg" width="1136" height="250" border="0" alt="" /> 
    <br />
    <br /> 
    <!--end row1 --> 
    <div class="">
  <div class="col-md-4">
    <div class="panel panel-info">
      <div class="panel-heading" align="center" ><h4></h4></div>
      <div class="panel-body">
        <form method="post" action="chk_login.php">
          <body>
   <center><h2>ตารางครูฝึก</h2></center>
  <table class="table table-bordered">
    <thead>
       <tr class="info">
        <th>วัน</th>
        <th>ชื่อครูผู้ฝึก</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
     <tr class="warning">
        <td>จันทร์</td>
        <td>ซัลเล็ม ดอเล็ง</td>
        <td>รอบียะห์ มะแตหะ</td>
      </tr>
      <tr class="warning">
        <td>อังคาร</td>
        <td></td>
        <td></td>
      </tr>
      <tr class="warning">
        <td>พุธ</td>
        <td></td>
        <td></td>
      </tr>
     <tr class="warning">
        <td>พฤหัสบดี</td>
        <td></td>
        <td></td>
      </tr>
    <tr class="warning">
        <td>วันศุกร์</td>
        <td></td>
        <td></td>
      </tr>
      <table class="table table-bordered">
           <tr class="info">
             <a href="rule.php"><span class="glyphicon glyphicon-pushpin"> กฎในการเข้าใช้ศูนย์วิทยาศาสตร์การกีฬาและสุขภาพ มหาวิทยาลัยราชภัฏยะลา</span></a>
             <a href="http://www.yru.ac.th/web54/frontpage"><span class="glyphicon glyphicon-pushpin"> เว็บไซต์ : มหาวิทยาลัยราชภัฏยะลา</span></a>
        </tbody>
      </table>
  </table>
</div>
        </form>
      </div>
    </div>
  </div>
  <div class="col-md-8">
    <div class="panel panel-info">
      <div class="panel-heading" align="center" ><marquee direction="left"> <h3>ศูนย์วิทยาศาสตร์การกีฬาและสุขภาพ มหาวิทยาลัยราชภัฏยะลา</h3></marquee></div>
      <div class="panel-body">
        <form method="post" action="chk_login.php">
          <body>
    <div class="row">
  <div class="col-md-12">
    <div class="panel panel-info">
      <div class="panel-body">
    <article>
      <div class="panel panel-Default">
        <div class="panel-heading">
          <table class="table table-bordered table-striped ">
             <thead>
           <tr>
              <th class="text-nowrap">no</th>
              <th class="text-nowrap">title</th>
              <th class="text-nowrap">news</th>
           </tr>
           </thead>
           <tbody>
           <tr>
            <br>
           </br>

            <?php
            $i=0;

            $select1 = "select * from health";
            $result1=mysqli_query($conn,$select1);

          while($row1=mysqli_fetch_array($result1)){

            $i++;

            ?>
            </tr>
              <td ><?php echo  $i; ?></td>
              <td ><?php echo $row1['title']; ?></td>
              <td ><?php echo $row1['detail']; ?></td>
            </tr>
              <?php }   ?>



           </body>
         </table>


      </div>
    </article>











        <form method="post" action="chk_login.php">
          <div class="form-group">
        </form>
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
