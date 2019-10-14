<?php
    include "../../connection/connection.php";
    $id = $_GET['ID'];
    $sql ="SELECT * FROM `user` WHERE Username = '$id'";
    echo $sql;
    $result = mysqli_query($conn, $sql);
    
?>