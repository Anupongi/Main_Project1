<?php
$serverName = "localhost";
$userName = "root";
$userPassword = "";
$dbName = "file-management";

$conn = mysqli_connect($serverName,$userName,$userPassword,$dbName);

$id=$_GET['id'];
$sql = "DELETE FROM `files` WHERE `id` = $id";

$query = mysqli_query($conn,$sql);
Header("Location: ../download.php");
?>