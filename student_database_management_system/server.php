<?php

$server ="localhost";
$username = "root";
$pass = "";
$database= "sms";
$conn = mysqli_connect($server,$username,$pass);
$db=mysqli_select_db($conn,$database);

if (!$conn) {
	die("<script>alert('connnection failed')</script>");

}



?>