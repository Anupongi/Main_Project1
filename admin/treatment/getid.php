<?php
    include "../../connection/connection.php";
    $id = $_GET['ID'];
    $sql ="SELECT * FROM `user` WHERE Username = '$id'";
    echo $sql;
    $result = mysqli_query($con, $sql);
    // $array = mysqli_fetch_array($result);
        if(mysqli_num_rows($result)==1){
            $row = mysqli_fetch_array($result);
            $userlevel = $row["Userlevel"];
            if($userlevel == '02'){
                echo 'window.location.href = "./test.php?ID=<?php echo $array[1]; ?>"';
            }
        }
?>