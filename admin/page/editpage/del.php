<?php
$serverName = "localhost";
$userName = "root";
$userPassword = "itcmtc2019";
$dbName = "post";

$conn = mysqli_connect($serverName,$userName,$userPassword,$dbName);

$id=$_GET['id'];
$sql = "DELETE FROM `allpost` WHERE `post_id` = $id";

$query = mysqli_query($conn,$sql);
Header("Location: ../allpost.php");
?>