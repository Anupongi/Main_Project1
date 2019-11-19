<?php 
    include("../../connection/connection.php");
    $id =  $_GET['ID'];
    $sqlDele = "DELETE FROM `user` WHERE `ID` = $id";
    $queryDele = mysqli_query($con,$sqlDele);
    header('Location: user02.php');
?>