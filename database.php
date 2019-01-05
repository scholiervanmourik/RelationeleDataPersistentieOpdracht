<?php
	$servername = 'localhost';
	$username = 'root';
	$password = '';
	$dbName = 'supportmyday';
	
	function getConnection($servername, $username, $password, $dbName) {
		return new mysqli($servername, $username, $password, $dbName);
	}
	
	$conn = getConnection($servername, $username, $password, $dbName);
	
	if ($conn->connect_error) {
		die('connection failed: ' . $conn.connect_error);
	}
?>