<!DOCTYPE html>
<html>
<body>
<?php
include "connect.php";
            $name=$_POST["name"];
			$facter=$_POST["facter"];
			$stuid=$_POST["studentid"];
			$bd=$_POST["birthday"];
			$gender=$_POST["gender"];
			$phone=$_POST["phonenumber"];
			$email=$_POST["email"];
			$username=$_POST["username"];
			$password=$_POST["password"];
			$txtname=$_POST["txtname"];
			$picture=$_POST["picture"];
//echo $id;

$update="update member set name='$name',facter='$facter',studentid ='$stuid',birthday ='$bd',gender='$gender',phonenumber='$phone',email='$email',username='$username',password='$password',txtname='$txtname'
where id='$id'";
$result=mysql_db_query('webproject', $update);
	  if(!$result){
	    //echo "<script>alert('ไม่สามารถแก้ไขข้อมูลได้!'); </script>";
			//echo "<script> window.history.back();</script>";

	  }else {
	    echo "<script>alert('แก้ไขข้อมูลเรียบร้อย');</script>";
	    echo "<script>location.href='admin.php';</script>";
	  }

?>
</body>

</html>
