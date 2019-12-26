<?php
session_start();
$serverName = "localhost";
$userName = "root";
$userPassword = "itcmtc2019";
$dbName = "post";

$conn = mysqli_connect($serverName,$userName,$userPassword,$dbName);

$id = $_POST['id'];
$title = $_POST['title'];
$file_name = $_FILES['image']['name'];
$file_tmp =$_FILES['image']['tmp_name'];
move_uploaded_file($file_tmp,"../img/img/".$file_name);
$content = $_POST['editor1'];
$id_admin = $_SESSION["name"];
date_default_timezone_set('asia/bangkok');
    $date=date("d-m-Y");
    function DateThai($strDate)
	{
		$strYear = date("Y",strtotime($strDate))+543;
		$strMonth= date("n",strtotime($strDate));
		$strDay= date("j",strtotime($strDate));
		
		$strMonthCut = Array("","มกราคม.","กุมภาพันธ์.","มีนาคม.","เมษายน.","พฤษภาคม.","มิถุนายน.","กรกฎาคม.","สิงหาคม.","กันยายน.","ตุลาคม.","พฤศจิกายน.","ธันวาคม.");
		$strMonthThai=$strMonthCut[$strMonth];
		return "$strDay $strMonthThai $strYear";
	}

        $strDate = $date;
        $date1 = DateThai($strDate);
	mysqli_set_charset($conn,"utf8");
	$sql = "UPDATE `allpost` SET `title`= '$title' ,`image`= '$file_name' ,`content`= '$content' ,`date` = '$date1',`user_post`= '$id_admin' WHERE `post_id` = '$id'";
	// echo $sql;
	$query = mysqli_query($conn,$sql);
 Header("Location: ../allpost.php"); 
?>
