<?php
session_start();
$serverName = "localhost";
$userName = "root";
$userPassword = "Ice@2019";
$dbName = "treatment";

$conn = mysqli_connect($serverName,$userName,$userPassword,$dbName);
$id = $_POST['ID'];
$med_name = $_POST['med_name'];
$med_fullname = $_POST['med_fullname'];
$total = $_POST['total'];
$user_post = $_SESSION["name"];
$date = date("d/m/Y");

mysqli_set_charset($conn,"utf8");
$sql = "UPDATE `tb_med` SET `med_name`= '$med_name' ,`med_fullname`= '$med_fullname' ,`total`= '$total' ,`user_post`='$user_post' , `date`='$date' WHERE `med_id` = $id";
$query = mysqli_query($conn,$sql);
// echo $sql;
 Header("Location: treatment_list.php"); 
?>