<?php
	$conn = new mysqli('localhost', 'root', '', 'samplelogin');

	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	
?>