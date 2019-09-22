<?php

$hostname = "localhost"; //ชื่อโฮสต์
$user = "root"; //ชื่อผู้ใช้
$password = ""; //รหัสผ่าน
$dbname = "user_login"; //ชื่อฐานข้อมูล
$tblname = "user"; //ชื่อตาราง 
$con= mysqli_connect($hostname, $user, $password,$dbname) or die("Error: " . mysqli_error($con));
mysqli_query($con, "SET NAMES 'utf8' "); 
?>
