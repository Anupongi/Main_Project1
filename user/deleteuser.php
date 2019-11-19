<?php
    include "../connection/connection.php";
    $username = $_GET['username'];
    $sql="DELETE FROM user WHERE Username='$username'";
    $query=mysqli_query($con,$sql);
    if($query==1){
        echo "<script>";
        echo "alert(\"ชื่อผู้ใช้นี้ถูกลบจากระบบแล้ว\");"; 
        echo "window.location.href='../Login/index.php';";
        echo "</script>";
    }else{
        echo "<script>";
        echo "alert(\"ชื่อผู้ใช้นี้ถูกลบจากระบบแล้ว\");"; 
        echo "window.history.back();";
        echo "</script>";
    }
?>