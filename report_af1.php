<?php
   include 'connect.php';
  date_default_timezone_set("Asia/Bangkok");
require_once __DIR__ . '/mpdf/vendor/autoload.php';

function thaiDate($date){
 	$d = strtotime($date);
 	return date("d/m/",$d).(date("Y",$d)+543);
}
$year=explode('|',$_POST['year_id']);
if ($_POST['report_type']==1) {
  $mpdf = new mPDF('th', 'A4-L', '12', '',8,8,8,8);
  $text = '
 ';

          $sq = "SELECT * FROM member where id=$id;";
          $qr=mysql_query($sq);
          $result1=mysqli_query($conn,$select1);
          $row=mysqli_fetch_array($result1);

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


}

  $text .= '</table>'
  ;
  $stylesheet = file_get_contents('pdf.css'); // external css
  $mpdf->WriteHTML($stylesheet,1);
  $mpdf->WriteHTML($text,2);
  $mpdf->Output();

}elseif ($_POST['report_type']==2) {
  $mpdf = new mPDF('th', 'A4-L', '12', '',8,8,8,8);
  $text = '
  <td width="291" align="center" ><span class="style2">รายงานสภาวการณ์ครูจำแนกตามอำเภอ ประจำปีการศึกษา '.$year[1].'</td>
  	<table bordercolor="#424242" width="1141" height="78" border="1"  align="center" cellpadding="0" cellspacing="0" class="style">

  		<tr>
  			<td width="155" align="center" bgcolor="#D5D5D5"><strong>อำเภอ</strong></td>
  			<td width="155" align="center" bgcolor="#D5D5D5"><strong>จำนวนครูทั้งหมด</strong></td>
        <td width="155" align="center" bgcolor="#D5D5D5"><strong>สอนตรงสาระภาษาไทย</strong></td>
        <td width="155" align="center" bgcolor="#D5D5D5"><strong>สอนตรงสาระสังคม</strong></td>
        <td width="155" align="center" bgcolor="#D5D5D5"><strong>สอนตรงสาระภาษาอังกฤษ</strong></td>
        <td width="155" align="center" bgcolor="#D5D5D5"><strong>สอนตรงสาระคณิตศาสตร์</strong></td>
        <td width="155" align="center" bgcolor="#D5D5D5"><strong>สอนตรงสาระวิทยาศาสตร์</strong></td>
        <td width="155" align="center" bgcolor="#D5D5D5"><strong>สอนไม่ตรงสาระ</strong></td>
  		    </tr>';

          $q = "SELECT AMPHUR_NAME,count(t_id)as t_id FROM amphur a,province p,teachers t,school s WHERE a.PROVINCE_ID=p.PROVINCE_id and p.PROVINCE_ID=s.PROVINCE_ID and s.AMPHUR_ID=a.AMPHUR_ID and s.sc_id=t.sc_id GROUP by AMPHUR_NAME";
          $qr=mysql_query($q);

          $sum=0;
          while($rs=mysql_fetch_array($qr)){
            $sum+=$rs["t_id"];
            $sum1+=$rs["AMPHUR_NAME"];
      $text .= '
            <tr>
           <td class="style">'.$rs["AMPHUR_NAME"].'</td>
           <td class="style"><center >'.$rs["t_id"].'</center></td>
           <td class="style"><center >'.$rs["t_id"].'</center></td>
           <td class="style"><center>'.$rs["t_id"].'</center></td>
           <td class="style"><center >'.$rs["t_id"].'</center></td>
           <td class="style"><center>'.$rs["t_id"].'</center></td>
           <td class="style"><center >'.$rs["t_id"].'</center></td>
           <td class="style"><center>'.$rs["t_id"].'</center></td>
            </tr>

      ';

}
$text .= '
      <tr>
     <td width="1"><center >รวม</center></td>
     <td ><center>'.$sum.'</center></td>
     <td ><center>'.$sum.'</center></td>
     <td ><center>'.$sum.'</center></td>
     <td ><center>'.$sum.'</center></td>
     <td ><center>'.$sum.'</center></td>
     <td ><center>'.$sum.'</center></td>
     <td ><center>'.$sum.'</center></td>
      </tr>

';
  $text .= '</table>'
  ;
  $stylesheet = file_get_contents('pdf.css'); // external css
  $mpdf->WriteHTML($stylesheet,1);
  $mpdf->WriteHTML($text,2);
  $mpdf->Output();
}elseif ($_POST['report_type']==3) {
  $mpdf = new mPDF('th', 'A4-L', '12', '',8,8,8,8);
  $text = '
  <td width="291" align="center" ><span class="style2">รายงานสภาวการณ์ครูจำแนกตามสังกัด ประจำปีการศึกษา '.$year[1].'</td>
  	<table bordercolor="#424242" width="1141" height="78" border="1"  align="center" cellpadding="0" cellspacing="0" class="style">

  		<tr>
  			<td width="170" align="center" bgcolor="#D5D5D5"><strong>สังกัด</strong></td>
  			<td width="155" align="center" bgcolor="#D5D5D5"><strong>จำนวนครูทั้งหมด</strong></td>
        <td width="155" align="center" bgcolor="#D5D5D5"><strong>สอนตรงสาระภาษาไทย</strong></td>
        <td width="155" align="center" bgcolor="#D5D5D5"><strong>สอนตรงสาระสังคม</strong></td>
        <td width="155" align="center" bgcolor="#D5D5D5"><strong>สอนตรงสาระภาษาอังกฤษ</strong></td>
        <td width="155" align="center" bgcolor="#D5D5D5"><strong>สอนตรงสาระคณิตศาสตร์</strong></td>
        <td width="155" align="center" bgcolor="#D5D5D5"><strong>สอนตรงสาระวิทยาศาสตร์</strong></td>
        <td width="155" align="center" bgcolor="#D5D5D5"><strong>สอนไม่ตรงสาระ</strong></td>
  		    </tr>';

          $q = "SELECT af_name,count(t_id)as t_id FROM  affiliation a,teachers t,school s WHERE a.af_id=s.af_id and s.sc_id=t.sc_id  GROUP by af_name";
          $qr=mysql_query($q);
          $sum=0;
          while($rs=mysql_fetch_array($qr)){
            $sum+=$rs["t_id"];
            $sum1+=$rs["af_name"];
      $text .= '
            <tr>
           <td class="style">'.$rs["af_name"].'</td>
           <td class="style"><center >'.$rs["t_id"].'</center></td>
           <td class="style"><center >'.$rs["t_id"].'</center></td>
           <td class="style"><center>'.$rs["t_id"].'</center></td>
           <td class="style"><center >'.$rs["t_id"].'</center></td>
           <td class="style"><center>'.$rs["t_id"].'</center></td>
           <td class="style"><center >'.$rs["t_id"].'</center></td>
           <td class="style"><center>'.$rs["t_id"].'</center></td>
            </tr>

      ';

}
$text .= '
      <tr>
     <td width="1"><center >รวม</center></td>
     <td ><center>'.$sum.'</center></td>
     <td ><center>'.$sum.'</center></td>
     <td ><center>'.$sum.'</center></td>
     <td ><center>'.$sum.'</center></td>
     <td ><center>'.$sum.'</center></td>
     <td ><center>'.$sum.'</center></td>
     <td ><center>'.$sum.'</center></td>
      </tr>

';
  $text .= '</table>'
  ;
  $stylesheet = file_get_contents('pdf.css'); // external css
  $mpdf->WriteHTML($stylesheet,1);
  $mpdf->WriteHTML($text,2);
  $mpdf->Output();
}
