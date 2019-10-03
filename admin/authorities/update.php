<?php
$serverName = "localhost";
$userName = "root";
$userPassword = "Ice@2019";
$dbName = "user_login";

$conn = mysqli_connect($serverName,$userName,$userPassword,$dbName);
$id = $_POST['ID'];
$username = $_POST['user_name'];
$password = $_POST['password']; 
$firstname = $_POST['first_name'];
$last_name = $_POST['last_name'];

mysqli_set_charset($conn,"utf8");
$sql = "UPDATE `user` SET `Username`= '$username' ,`Password`= '$password' ,`Firstname`= '$firstname' ,`Lastname` = '$last_name' WHERE `ID` = $id";
echo $sql;
$query = mysqli_query($conn,$sql);
//  Header("Location: list_authorities.php"); 
?>