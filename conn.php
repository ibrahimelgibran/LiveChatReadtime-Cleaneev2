<?php
 
//MySQLi Procedural
$conn = mysqli_connect("localhost","root","root","chat_system");
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
 
?>