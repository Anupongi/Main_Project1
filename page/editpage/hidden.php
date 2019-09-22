<?php
$serverName = "localhost";
$userName = "root";
$userPassword = "KZTuR1v3aaVA7t";
$dbName = "post";

$conn = mysqli_connect($serverName,$userName,$userPassword,$dbName);

$id=$_GET['id'];
$sql = "UPDATE `allpost` SET `published`='n' WHERE `post_id` = $id";

$query = mysqli_query($conn,$sql);
Header("Location: ../allpost.php"); 
?>