<?php
    include "../../connection/connection3.php";
    // include "../../connection/connection.php";
    $id = $_GET['ID'];
    $sql ="SELECT * FROM `tb_treatment` WHERE id = '$id'";
    echo $sql;
    $result = mysqli_query($connn, $sql);
    // $array = mysqli_fetch_array($result);
        if(mysqli_num_rows($result)==1){
            $row = mysqli_fetch_array($result);
            $userid = $row["Student_id"];
            if($userid == $userid){
                include "../../connection/connection.php";
                $sql1 = "SELECT * FROM `user` WHERE Username = '$userid'";
                echo $sql1;
                $query = mysqli_query($con, $sql1);
                $row = mysqli_fetch_array($query);
                $userlevel = $row["Userlevel"];
                    if($userlevel == '02'){
                        Header("Location: ./test.php?ID=$id");
                    }
                    else if($userlevel == '03'){
                        Header("Location: ./test1.php?ID=$id");
                    }
            }
            // include "../../connection/connection.php";
            // $sql = "SELECT * FROM `user` ";
            // $row = mysqli_fetch_array($result);
            // $ID = $row["ID"];
            // echo $ID;
            // $userlevel = $row["Userlevel"];
            // if($userlevel == '02'){
            //     Header("Location: ./test.php?ID=$id");
            // }
        }
?>