<?php
    include "../../connection/connection.php";
    $id = $_GET['ID'];
    $sql ="SELECT * FROM `user` WHERE id = '$id'";
    echo $sql;
    $result = mysqli_query($conn, $sql);
    
?>