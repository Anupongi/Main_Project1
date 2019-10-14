<?php
    include "../../connection/connection.php";
    $id = $_GET['ID'];
    $sql ="SELECT * FROM `user` WHERE Username = '$id'";
    $result = mysqli_query($conn, $sql);
    $array = mysqli_fetch_array($result);
    echo $array[1];
?>