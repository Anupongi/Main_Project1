<?php
    include "../../connection/connection.php";
    $id = $_GET['ID'];
    $sql ="SELECT * FROM `user` WHERE Username = '$id'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
    $_SESSION["Userlevel"] = $row["Userlevel"];
    echo $_SESSION["Userlevel"];
?>