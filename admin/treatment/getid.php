<?php
    include "../../connection/connection.php";
    $id = $_GET['ID'];
    $sql ="SELECT * FROM `tb_treatment` WHERE id = '$id'";
    echo $sql;
?>