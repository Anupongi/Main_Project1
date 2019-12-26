<?php 
    $serverName = "localhost";
    $userName = "root";
    $userPassword = "itcmtc2019";
    $dbName = "treatment";
    $con = mysqli_connect($serverName,$userName,$userPassword,$dbName);
    $id =  $_POST['ID'];
    $sqlDele = "DELETE FROM `tb_treatment` WHERE `id` = $id";
    $queryDele = mysqli_query($con,$sqlDele);
    echo 1;
    // echo $sqlDele;
    // header('Location: treatment_list.php');

?>

