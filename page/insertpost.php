<?php 
    session_start();
    $serverName = "localhost";
    $userName = "root";
    $userPassword = "KZTuR1v3aaVA7t";
    $dbName = "post";
    $conn = mysqli_connect($serverName,$userName,$userPassword,$dbName);
    mysqli_set_charset($conn,"utf8");
    $id_admin = $_SESSION["name"];
    $title = $_POST['title'];
    $content = $_POST['editor1'];
    $file_name = $_FILES['image']['name'];
    $file_tmp =$_FILES['image']['tmp_name'];
    move_uploaded_file($file_tmp,"./img/img/".$file_name);
    
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
        
    
	// echo "ThaiCreate.Com Time now : ".DateThai($strDate);
    $sql = "INSERT INTO `allpost`(`title`,`image`, `content`, `date` , `user_post`, `published`) 
            VALUES ('$title','$file_name','$content','$date1','$id_admin','y');";
    mysqli_query($conn,$sql);
    
     header('Location: allpost.php');
     
        
        
?>  

