<?php
$serverName = "localhost";
$userName = "root";
$userPassword = "Ice@2019";
$dbName = "file-management";

$conn = mysqli_connect($serverName,$userName,$userPassword,$dbName);

$id=$_GET['id'];
$sql = "UPDATE `files` SET `published`='y' WHERE `id` = $id";

$query = mysqli_query($conn,$sql);
Header("Location: ../download.php");
?>