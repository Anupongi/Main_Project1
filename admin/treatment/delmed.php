<?php 
    $serverName = "localhost";
    $userName = "root";
    $userPassword = "Ice@2019";
    $dbName = "treatment";
    $con = mysqli_connect($serverName,$userName,$userPassword,$dbName);
    $id =  $_GET['ID'];
    $sqlDele = "DELETE FROM `tb_med` WHERE `med_id` = $id";
    $queryDele = mysqli_query($con,$sqlDele);
    // echo $sqlDele;
    header('Location: treatment_list.php');

?>
