<?php 
    include("../connection/connection.php");
    $id =  $_GET['ID'];
        // $sql = "SELECT `img` FROM `tb_employee_6139010002` WHERE `id` = $id";
        // $query = mysqli_query($con,$sql);
        // $d= mysqli_fetch_array($query);
        // unlink("./img/$d[0]");
    $sqlDele = "DELETE FROM `user` WHERE `ID` = $id";
    $queryDele = mysqli_query($con,$sqlDele);
    header('Location: list_authorities.php');
?>