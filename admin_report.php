<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus®">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <title>Document</title>

<?php
		if(!isset($_SESSION["username"])){
			header("Location:admin_report.php");
		}

		if(isset($_GET["id"])){
			$id = $_GET["id"];
			$result = $pdo->prepare("DELETE FROM booking WHERE b_id = :param1");
			$result->execute(array(
				'param1'=> $id
			));
		}

		function thaiDate($date){
		 	$d = strtotime($date);
		 	return date("d/m/",$d).(date("Y",$d)+543);
		}
	?>

	</head>
	<body>
		
<div id="wrapper">

<?php include("admin_system_navbar.php");?>

  <div id="page-wrapper">
				<div class="container-fluid">
					<!-- Page Heading -->
					<div class="row">
						<div class="col-lg-12">
							<h1 class="page-header">
								รายงาน <small>รายงานการจอง</small>
							</h1>
							<ol class="breadcrumb">
								<li><a href="admin_report_out.php"><i class="fa fa-dashboard"></i> download</a></li>
								<li class="active">รายงาน</li>
							</ol>
						</div>
					</div>
					<!-- /.row -->
					<div class="row">
						<div class="col-md-11">

							    <div class="container">    
        <div class="row">
            <div class="col-sm-11">
                <div class="panel panel-success">
                    <div class="panel-heading"><center><h4>รายงานสถานะการจองของทั้งหมด</h4></center></div>
                    <div class="panel-body">

                    <table class="table table-bordered table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th class="text-nowrap">ลำดับ</th>
                                        <th class="text-nowrap">รหัสห้องค้นคว่า</th>
                                        <th class="text-nowrap">วัตถุประสงค์การใช้งาน</th>
                                        <th class="text-nowrap">วันที่จอง</th>
                                        <th class="text-nowrap">เวลา</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $result = $pdo->prepare("SELECT * FROM booking ORDER BY b_id ASC");
                                        $result->execute();
                                        while ($rs = $result->fetch(PDO::FETCH_ASSOC)) {
                                            ?>
                                    <tr>
                                        <td><?php echo $rs["b_id"];?></td>
                                         <td><?php echo $rs["room_id"];?></td>
                                         <td><?php echo $rs["subject"];?></td>
                                         <td><?php echo thaiDate($rs["b_date"]);?></td>
                                         <td><?php echo $rs["booking_time"];?></td>
                                        
                                    </tr>
                                    <?php
                                        }
                                    ?>
                                </tbody>
                            </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
							
						</div>
					</div>
				</div>
				<!-- /.container-fluid -->
	</div>
</div>


<?php include("admin_system_footer.php");?>