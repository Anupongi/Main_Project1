<?php
    include "../../connection/connection3.php";
    // include "../../connection/connection.php";
    $id = $_GET['ID'];
    $sql ="SELECT * FROM `tb_treatment` WHERE id = '$id'";
    echo $sql;
    $result = mysqli_query($connn, $sql);
    // $array = mysqli_fetch_array($result);
        // if(mysqli_num_rows($result)==1){
        //     $row = mysqli_fetch_array($result);
        //     $ID = $row["ID"];
        //     echo $ID;
        //     $userlevel = $row["Userlevel"];
        //     // if($userlevel == '02'){
        //     //     Header("Location: ./test.php?ID=$id");
        //     // }
        // }
?>