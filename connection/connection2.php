<?php

$hostname = "localhost"; //ชื่อโฮสต์
$user = "root"; //ชื่อผู้ใช้
$password = "Ice@2019"; //รหัสผ่าน
$dbname = "file-management"; //ชื่อฐานข้อมูล
$tblname = "files"; //ชื่อตาราง 
$conn= mysqli_connect($hostname, $user, $password,$dbname) or die("Error: " . mysqli_error($con));
mysqli_query($conn, "SET NAMES 'utf8' "); 
?>
