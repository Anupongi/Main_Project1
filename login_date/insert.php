<?php  
 //insert.php  
    $serverName = "localhost";
    $userName = "root";
    $userPassword = "KZTuR1v3aaVA7t";
    $dbName = "user_login";
    $conn = mysqli_connect($serverName,$userName,$userPassword,$dbName);
    mysqli_set_charset($conn,"utf8");
    $username = $_POST['Username'];
    $date = date("d/m/Y");
    $time = date("G:i:s");
    if(isset($_POST["id"])){
        $sql1 = "INSERT INTO  `login_date`(`Username`,`Lastdate`,`time`) VALUES ('".$_POST["Username"]."','$date','$time')";  
        $query1 = mysqli_query($conn,$sql1);  
    }
?>