<?php
$hostname = "localhost"; //ชื่อโฮสต์
$user = "root"; //ชื่อผู้ใช้
$password = "itcmtc2019"; //รหัสผ่าน
$dbname = "post"; //ชื่อฐานข้อมูล
$con= mysqli_connect($hostname, $user, $password,$dbname) or die("Error: " . mysqli_error($con));
mysqli_query($con, "SET NAMES 'utf8' "); 
?>
