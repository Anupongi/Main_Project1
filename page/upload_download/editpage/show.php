<?php
$serverName = "localhost";
$userName = "root";
$userPassword = "";
$dbName = "file-management";

$conn = mysqli_connect($serverName,$userName,$userPassword,$dbName);

$id=$_GET['id'];
$sql = "UPDATE `files` SET `published`='y' WHERE `id` = $id";

$query = mysqli_query($conn,$sql);
Header("Location: ../download.php");
?>