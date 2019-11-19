<?php 
    $serverName = "localhost";
    $userName = "root";
    $userPassword = "Ice@2019";
    $dbName = "user_login";
    $conn = mysqli_connect($serverName,$userName,$userPassword,$dbName);    
    $id =  $_GET['ID'];
    $sqlDele = "DELETE FROM `login_date` WHERE `ID` = '$id'";
    $queryDele = mysqli_query($conn,$sqlDele);
    header('Location: logindate_menu.php');
?>