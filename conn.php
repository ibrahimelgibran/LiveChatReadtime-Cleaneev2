<?php
 
//MySQLi Procedural
$conn = mysqli_connect("localhost","root","root","chatsystem");
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
 
?>