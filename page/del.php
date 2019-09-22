<?php 
    $serverName = "localhost";
    $userName = "root";
    $userPassword = "KZTuR1v3aaVA7t";
    $dbName = "user_login";
    $conn = mysqli_connect($serverName,$userName,$userPassword,$dbName);    
    $id =  $_GET['ID'];
        // $sql = "SELECT `img` FROM `tb_employee_6139010002` WHERE `id` = $id";
        // $query = mysqli_query($con,$sql);
        // $d= mysqli_fetch_array($query);
        // unlink("./img/$d[0]");
    $sqlDele = "DELETE FROM `login_date` WHERE `ID` = '$id'";
    $queryDele = mysqli_query($conn,$sqlDele);
    header('Location: login_date.php');
?>