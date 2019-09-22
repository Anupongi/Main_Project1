<?php
    include("../connection/connection.php");
    $user_name=$_POST['user_name'];
    $password=$_POST['password'];
    $first_name=$_POST['first_name'];
    $last_name=$_POST['last_name'];
    $position=$_POST['position'];
    $class=$_POST['class'];
    $room=$_POST['room'];
    $user_level= '02';
    $number=$_POST['number'];
    $alley=$_POST['alley'];
    $street=$_POST['street'];
    $district=$_POST['district'];
    $zipcode=$_POST['zipcode'];
    $amphur=$_POST['amphur'];
    $province=$_POST['province'];
    $phone=$_POST['phone'];
    $your_email=$_POST['your_email'];
    date_default_timezone_set('asia/bangkok');
    $date=date("d-m-Y");
    // $time = date("d-m-y h:i:s");

    $sql="INSERT INTO `user`(`Username`, `Password`, `Firstname`, `Lastname`, `Userlevel`, `date`) VALUES ('$user_name','$password','$first_name','$last_name','$user_level','$date')";
    $query = mysqli_query($con,$sql);
    Header("Location: ../login.php");
// echo $date;
// echo $time;
// echo $sql;

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

?>