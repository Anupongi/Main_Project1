<?php
$serverName = "localhost";
$userName = "root";
$userPassword = "KZTuR1v3aaVA7t";
$dbName = "file-management";

$conn = mysqli_connect($serverName,$userName,$userPassword,$dbName);

$id=$_GET['id'];
$sql = "UPDATE `files` SET `published`='y' WHERE `id` = $id";

$query = mysqli_query($conn,$sql);
Header("Location: ../download.php");
?>