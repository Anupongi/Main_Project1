<?php 
    $serverName = "localhost";
    $userName = "root";
    $userPassword = "KZTuR1v3aaVA7t";
    $dbName = "treatment";
    $con = mysqli_connect($serverName,$userName,$userPassword,$dbName);
    $id =  $_GET['ID'];
    $sqlDele = "DELETE FROM `tb_med` WHERE `med_id` = $id";
    $queryDele = mysqli_query($con,$sqlDele);
    header('Location: treatment_list.php');
?>