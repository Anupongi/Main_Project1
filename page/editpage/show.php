<?php
$serverName = "localhost";
$userName = "root";
$userPassword = "";
$dbName = "post";

$conn = mysqli_connect($serverName,$userName,$userPassword,$dbName);

$id=$_GET['id'];
$sql = "UPDATE `allpost` SET `published`='y' WHERE `post_id` = $id";

$query = mysqli_query($conn,$sql);
Header("Location: ../allpost.php");
?>