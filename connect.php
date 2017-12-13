<?php
	$username = "root";
	$servername = "localhost";
	$password = "";
	$dbname = "it_db";

	$conn = new mysqli($servername, $username, $password, $dbname);
	if ($conn->connect_error) {
		die("Connection failed : " .$conn->connect_error);
	}
	$cs1 = "SET character_set_results=utf8";
	mysqli_query($conn, "SET character_set_results = utf8");
	mysqli_query($conn, "SET character_set_client = utf8");
	mysqli_query($conn, "SET character_set_connection = utf8");
	mysql_query("SET NAMES UTF8");

?>

