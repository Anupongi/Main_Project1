<?php
    include "../connection/connection.php";
    include "../connection/connection3.php";
    $username = $_GET['username'];
    $sql="DELETE FROM user WHERE Username='$username'";
    $query=mysqli_query($con,$sql);
    if($query==1){
        echo "<script>";
        echo "alert(\"ชื่อผู้ใช้นี้ถูกลบจากระบบแล้ว\");"; 
        echo "window.location.href='../Login/index.php';";
        echo "</script>";

        $sql2="DELETE FROM `tb_treatment` WHERE Student_id='$username'";
        $query1=mysqli_query($conn,$sql2);

        $sql3="DELETE FROM `login_date` WHERE Username='$username'";
        $query2=mysqli_query($con,$sql3);
    }else{
        echo "<script>";
        echo "alert(\"ชื่อผู้ใช้นี้ถูกลบจากระบบแล้ว\");"; 
        echo "window.history.back();";
        echo "</script>";
    }
?>