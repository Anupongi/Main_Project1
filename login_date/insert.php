<?php  
 //insert.php  
    $serverName = "localhost";
    $userName = "root";
    $userPassword = "";
    $dbName = "user_login";
    $conn = mysqli_connect($serverName,$userName,$userPassword,$dbName);
    mysqli_set_charset($conn,"utf8");
    $username = $_POST['Username'];
    $date = date("d/m/Y");
    if(isset($_POST["id"])){
        $sql1 = "INSERT INTO  `login_date`(`Username`,`Lastdate`) VALUES ('".$_POST["Username"]."','$date')";  
        $query1 = mysqli_query($conn,$sql1);  
    }
?>