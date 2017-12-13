<?php

	session_start();
	include "connect.php";

	$username=$_POST['username'];
	$password=$_POST['password'];
	
	$select1 = "select * from member where username='$username' and password='$password' ";
	$result1=mysqli_query($conn,$select1);

	$row1=mysqli_fetch_array($result1);
		if(!$row1)
		{
			echo "<script>alert('Username and Password Incorrect!'); </script>";
			echo "<script> window.history.back();</script>";
		}
		else
		{
			$_SESSION["id"] = $row1["id"];
			$_SESSION["username"] = $row1["username"];
			$_SESSION["password"] = $row1["password"];

			session_write_close();

			echo "<script> location.href='member.php';</script>";
		}
	mysqli_close($conn);

?>
