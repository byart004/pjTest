<?php
include("connect.php");

require_once __DIR__ . '/mpdf/vendor/autoload.php';

function thaiDate($date){
 	$d = strtotime($b_date);
 	return date("d/m/",$d).(date("Y",$d)+543);
}

$mpdf = new mPDF('th', 'A4', '14', '',8,8,8,8);

	$id = $_SESSION["id"];

    $select1 = "select * from member where id=$id ";
    $result1=mysqli_query($conn,$select1);
    $row=mysqli_fetch_array($result1);

$text .= '
			
          <br><br>
		   ประเภทสมาชิก : <?php echo . $row['facter'].; ?>
          <br><br>
            คำนำหน้า : <?php echo $row['gender']; ?>
          <br><br>
          ชื่อ: <?php echo $row['name']; ?>
          <br><br>
          นามสกุล: <?php echo $row['surname']; ?>
          <br><br>
          รหัสนักศึกษา  : <?php echo $row['studentID']; ?>
          <br><br>
          วันเดือนปีเกิด : <?php echo $row['birthday']; ?>
          <br><br>
          หมายเลขโทรศัพท์ : <?php echo $row['phonenumber']; ?>
          <br><br>
          อีเมลล์ : <?php echo $row['email']; ?>
          <br><br>
          ชื่อผู้ใช้ : <?php echo $row['username']; ?>
          <br><br>
          เลือกรูปถ่าย :<?php echo $row['picture']; ?>
          <br><br>
';	
		
$text .= '</table>';
$stylesheet = file_get_contents('css/pdf.css'); // external css
$mpdf->WriteHTML($stylesheet,1);
$mpdf->WriteHTML($text,2);
$mpdf->Output();

?>