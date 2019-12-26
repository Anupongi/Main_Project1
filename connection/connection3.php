<?php

$hostname = "localhost"; //ชื่อโฮสต์
$user = "root"; //ชื่อผู้ใช้
$password = "itcmtc2019"; //รหัสผ่าน
$dbname = "treatment"; //ชื่อฐานข้อมูล
$tblname = "tb_treatment"; //ชื่อตาราง 
$connn= mysqli_connect($hostname, $user, $password,$dbname) or die("Error: " . mysqli_error($con));
mysqli_query($conn, "SET NAMES 'utf8' "); 
?>
