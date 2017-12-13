<?php
	include 'connect.php';
	date_default_timezone_set("Asia/Bangkok");

?>

<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus®">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <title>Document</title>

  <style>
		div.container {
			width: 100%;
			border: 1px solid gray;
		}

		div.detail{
			padding-left: 80px;
		}

		header, footer {
			padding: 1em;
			color: white;
			background-color: black;
			clear: left;
			text-align: center;
		}

		nav {
			float: left;
			max-width: 160px;
			margin: 0;
			padding: 1em;
		}

		nav ul {
			list-style-type: none;
			padding: 0;
		}
		   
		nav ul a {
			text-decoration: none;
		}

		article {
			margin-left: 170px;
			border-left: 1px solid gray;
			padding: 1em;
			overflow: hidden;
		}
		</style>


 </head>
 <body>

		<div class="container">

		<header>
			<center><h2>ศูนย์วิทยาศาสตร์การกีฬาและสุภาพ มรย.</h2></center>
		</header>
		  
		<nav>
			<ul>
				<li><a href="home.php">หน้าแรก</a></li><br><br>
				<li><a href="register.php">สมัครสมาชิก</a></li><br><br>
				<li><a href="login.php">เข้าสู่ระบบ</a></li><br><br>
				<li><a href="#">เกี่ยวกับเรา</a></li><br><br>
			</ul>
		</nav>

		<article>
			<center><h3>ลงทะเบียนสมัครสมาชิก</h3></center>
			<div class = "detail">
				<form action="" method="post"  enctype="multipart/form-data">
					ชื่อ-สกุล สมาชิก : <input type="text" name ="name" placeholder="ชื่อ-สกุล">
					<br><br>
					วันเดือนปี เกิด : <input type="date" name ="birthday">
					<br><br>
					เพศ  : <input type="radio" name="gender" value="male" checked> ชาย 
						<input type="radio" name="dender" value="fumale"> หญิง 
					<br><br>
					หมายเลขโทรศัพท์ : <input type="text" name ="phonenumber" placeholder="หมายเลขโทรศัพท์">
					<br><br>
					อีเมลล์ : <input type="text" name ="email" placeholder="อีเมลล์">
					<br><br>
					เลือกรูปถ่าย : <input type="hidden" name ="txtname">
							<input type="file" name ="fileupload">
					<br><br>
					<button type="submit" name ="submit">ยืนยันการสมัคร </button>
				</form>		
			</div>
		</article>

		<footer>Copyright &copy; W3Schools.com</footer>

		</div>

  
 </body>
</html>

<?php
	
	if(isset($_POST["submit"])){


		if($_POST["name"]!="" && $_POST["facter"]!="" && $_POST["birthday"]!="" && $_POST["phonenumber"]!="" &&		$_POST["email"]!="" && $_POST["username"]!="" && $_POST["password"]!="")
		{

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
			echo $file=$_FILES["fileupload"]["name"];

			mysqli_query($conn,"INSERT INTO member VALUES ('','$name','$facter','$stuid','$bd','$gender','$phone','$email','$username','$password','$file')");			
			echo "<script>alert('บันทึกข้อมูลสำเร็จ'); location.href='register.php'</script";
		}
		else
			echo "<script>alert('บันทึกข้อมูลไม่สำเร็จ'); location.href='register.php'</script";

	}

?>
