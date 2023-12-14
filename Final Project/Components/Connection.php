<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "LAGTO";

	$conn = new mysqli($servername, $username, $password, $dbname);
	if($conn->connect_errno ) {
		printf("Connect failed: %s<br />", $mysqli->connect_error);
		exit();
		}
	printf('Connected successfully.<br />');
?>