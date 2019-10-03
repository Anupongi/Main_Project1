<?php
$serverName = "localhost";
$userName = "root";
$userPassword = "Ice@2019";
$dbName = "user_login";

$conn = mysqli_connect($serverName,$userName,$userPassword,$dbName);

$id = $_POST['id'];
$file_name = $_FILES['image']['name'];
$file_tmp =$_FILES['image']['tmp_name'];
move_uploaded_file($file_tmp,"./profile/".$file_name);

$sql = "UPDATE `user` SET `profile` = '$file_name' WHERE `ID` = $id";
echo $sql;
$query = mysqli_query($conn,$sql);
Header("Location: ./edituser.php"); 
?>