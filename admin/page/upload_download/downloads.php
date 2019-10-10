<?php
    include "../../../connection/connection2.php";
    $id = $_GET['id'];
    $download = $_GET['path'];
    Header("Location: ./uploads/file/$download");

    $sql="SELECT `downloads` FROM `files` WHERE `id` = '$id'";
    $query = mysqli_query($conn, $sql);
    $d = mysqli_fetch_array($query);

    $number = $d[0]+1;
    $sqlupdate ="UPDATE `files` SET `downloads`= '$number'  WHERE `id` = '$id'";
    mysqli_query($conn, $sqlupdate);
?>