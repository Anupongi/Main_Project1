<?php
    include("../../connection/connection.php");
    $user_name=$_POST['user_name'];
    $password=$_POST['password'];
    $first_name=$_POST['first_name'];
    $last_name=$_POST['last_name'];
	$user_level= '01';
	$image= 'default-profile.gif'
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
	// echo "ThaiCreate.Com Time now : ".DateThai($strDate);


    // $time = date("d-m-y h:i:s");
     $check = "SELECT * FROM `user` WHERE `Username` = '$user_name' ";
	  $result1 = mysqli_query($con,$check) or die(mysqli_error());
		$num=mysqli_num_rows($result1); 
        if($num > 0)   		
        {
    //ถ้ามี username นี้อยู่ในระบบแล้วให้แจ้งเตือน
             echo "<script>";
			 echo "alert(' มีผู้ใช้ username นี้แล้ว กรุณาสมัครใหม่อีกครั้ง !');";
			 echo "window.location='./add_authorities.php';";
          	 echo "</script>";
 
		}else{
    //ถ้าไม่มีก็บันทึกลงฐานข้อมูล
    $sql="INSERT INTO `user`(`Username`, `Password`, `Firstname`, `Lastname`, `Userlevel`, `profile`, `date` ) VALUES ('$user_name','$password','$first_name','$last_name','$user_level','$image','$strDate')";
        $result = mysqli_query($con,$sql);
//บันทึกสำเร็จแจ้งเตือนและกระโดดกลับไปหน้าฟอร์ม   ปล.การทำระบบจริงๆ อาจกระโดดไปหน้าอื่นที่เรากำหนด
	if($result){
			echo "<script type='text/javascript'>";
				echo "alert('SUCCESSFULLY');";
				echo "window.location='./list_authorities.php';";
			echo "</script>";
	  }
	  else{
//ถ้าบันทึกไม่สำเร็จแสดงข้อความ Error และกระโดดกลับไปหน้าฟอร์ม
		    echo "<script type='text/javascript'>";
				echo "alert('Error!');";
				echo "window.location='./add_authorities.php';";
			echo "</script>";
	  }
	  

}



	  
 ?>
    