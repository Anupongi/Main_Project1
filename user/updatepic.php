<?php
$serverName = "localhost";
$userName = "root";
$userPassword = "KZTuR1v3aaVA7t";
$dbName = "user_login";

$conn = mysqli_connect($serverName,$userName,$userPassword,$dbName);

$id = $_POST['id'];
$file_name = $_FILES['image']['name'];
$file_tmp =$_FILES['image']['tmp_name'];
move_uploaded_file($file_tmp,"./img/img/profile/".$file_name);

$sql = "UPDATE `user` SET `profile` = '$file_name' WHERE `ID` = $id";
$query = mysqli_query($conn,$sql);
Header("Location: editpicprofile.php"); 
?>