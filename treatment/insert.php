<?php
	session_start();
    $serverName = "localhost";
	$userName = "root";
	$userPassword = "KZTuR1v3aaVA7t";
	$dbName3 = "treatment";
	$con = mysqli_connect($serverName,$userName,$userPassword,$dbName3);
	mysqli_set_charset($con,"utf8");
    $med_name=$_POST['med_name'];
    $med_fullname=$_POST['med_fullname'];
	$total=$_POST['total'];
	$user_post = $_SESSION["name"];
    date_default_timezone_set('asia/bangkok');
	$date=date("d/m/Y");
    // function DateThai($strDate)
	// {
	// 	$strYear = date("Y",strtotime($strDate))+543;
	// 	$strMonth= date("n",strtotime($strDate));
	// 	$strDay= date("j",strtotime($strDate));
		
	// 	$strMonthCut = Array("","มกราคม.","กุมภาพันธ์.","มีนาคม.","เมษายน.","พฤษภาคม.","มิถุนายน.","กรกฎาคม.","สิงหาคม.","กันยายน.","ตุลาคม.","พฤศจิกายน.","ธันวาคม.");
	// 	$strMonthThai=$strMonthCut[$strMonth];
	// 	return "$strDay $strMonthThai $strYear";
	// }

	// $strDate = $date;
	// // echo "ThaiCreate.Com Time now : ".DateThai($strDate);


    // $time = date("d-m-y h:i:s");
     $check = "SELECT * FROM `tb_med` WHERE `med_name` = '$med_name' ";
	  $result1 = mysqli_query($con,$check) or die(mysqli_error());
		$num=mysqli_num_rows($result1); 
        if($num > 0)   		
        {
    //ถ้ามี username นี้อยู่ในระบบแล้วให้แจ้งเตือน
             echo "<script>";
			 echo "alert(' มีข้อมูลเวชภัณฑ์ ยา อุปกรณ์ทางการแพทย์ นี้แล้ว กรุณาเพิ่มข้อมูลใหม่อีกครั้ง !');";
			 echo "window.location='./treatment_frm.php';";
          	 echo "</script>";
 
		}else{
	//ถ้าไม่มีก็บันทึกลงฐานข้อมูล
	mysqli_set_charset($con,"utf8");
    $sql="INSERT INTO `tb_med`(`med_name`, `med_fullname`, `total`, `user_post`, `date`) VALUES ('$med_name','$med_fullname','$total','$user_post','$date')";
    $result = mysqli_query($con,$sql);
//บันทึกสำเร็จแจ้งเตือนและกระโดดกลับไปหน้าฟอร์ม   ปล.การทำระบบจริงๆ อาจกระโดดไปหน้าอื่นที่เรากำหนด
	if($result){
			echo "<script type='text/javascript'>";
				echo "alert('บันทึกข้อมูลสำเร็จ');";
				echo "window.location='./treatment_list.php';";
			echo "</script>";
	  }
	  else{
//ถ้าบันทึกไม่สำเร็จแสดงข้อความ Error และกระโดดกลับไปหน้าฟอร์ม
		    echo "<script type='text/javascript'>";
				echo "alert('บันทึกข้อมูลไม่สำเร็จ!');";
				echo "window.location='./treatment_frm.php';";
			echo "</script>";
	  }
	  

}



	  
 ?>
