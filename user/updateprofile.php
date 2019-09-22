<?php
session_start();
$serverName = "localhost";
$userName = "root";
$userPassword = "";
$dbName = "user_login";
$db = "test";
$conn = new mysqli($serverName, $userName, $userPassword,$db);
$con = mysqli_connect($serverName,$userName,$userPassword,$dbName);
mysqli_set_charset($conn,"utf8");

$id = $_POST['id'];
if(isset($_POST['user_name'])){
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
    $sql="SELECT `DISTRICT_NAME` FROM `district` WHERE `DISTRICT_CODE`= '$district'";
    $query = mysqli_query($conn,$sql);
    $district2=mysqli_fetch_array($query);
    $district3=$district2[0];
    

    $zipcode=$_POST['zipcode'];
    $sql1="SELECT `ZIPCODE` FROM `zipcode` WHERE `ZIPCODE`= '$zipcode'";
    $query1 = mysqli_query($conn,$sql1);
    $zipcode2=mysqli_fetch_array($query1);
    $zipcode3=$zipcode2[0];
    

    $amphur=$_POST['amphur'];
    $sql2="SELECT `AMPHUR_NAME` FROM `amphur` WHERE `AMPHUR_ID`= '$amphur'";
    $query2 = mysqli_query($conn,$sql2);
    $amphur2=mysqli_fetch_array($query2);
    $amphur3=$amphur2[0];
    

    $province=$_POST['province'];
    $sql3="SELECT `PROVINCE_NAME` FROM `province` WHERE `PROVINCE_ID`= '$province'";
    $query3 = mysqli_query($conn,$sql3);
    $province2=mysqli_fetch_array($query3);
    $province3=$province2[0];
    

    $phone=$_POST['phone'];
    $your_email=$_POST['your_email'];
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
mysqli_set_charset($con,"utf8");
$sql = "UPDATE `user` SET `Username`='$user_name',`Password`='$password',`Firstname`='$first_name',`Lastname`='$last_name',`Department`='$position',`Class`='$class',`Room`='$room',`House_number`='$number',`Alley`='$alley',`Road`='$street',`District`='$district3',`Amphur`='$amphur3',`Zipcode`='$zipcode3',`Province`='$province3',`Phone`='$phone',`Email`='$your_email',`date`='$date' WHERE `ID` = $id";
// echo $sql;
$query = mysqli_query($con,$sql);
if($query==1){
	echo "<script>if(confirm('การแก้ไขข้อมูลถูกต้อง ระบบบันทึกข้อมูลเรียบร้อยแล้ว')){document.location.href='./editprofile.php'};</script>";
}
else if($query==0){
	echo "<script>if(confirm('การแก้ไขข้อมูลไม่ถูกต้อง ระบบไม่สามารถบันทึกข้อมูลได้')){document.location.href='./editprofile.php'};</script>";
}
}
else if(isset($_POST['user_name1'])){
	$user_name1=$_POST['user_name1'];
	$password1=$_POST['password1'];
	$first_name1=$_POST['first_name1'];
	$last_name1=$_POST['last_name1'];
	$user_level= '03';
	$number1=$_POST['number1'];
	$alley1=$_POST['alley1'];
	$street1=$_POST['street1'];
	
	$district1=$_POST['district1'];
	$sql="SELECT `DISTRICT_NAME` FROM `district` WHERE `DISTRICT_CODE`= '$district1'";
	$query = mysqli_query($conn,$sql);
	$district2=mysqli_fetch_array($query);
	$district3=$district2[0];


	$zipcode1=$_POST['zipcode1'];
	$sql1="SELECT `ZIPCODE` FROM `zipcode` WHERE `ZIPCODE`= '$zipcode1'";
	$query1 = mysqli_query($conn,$sql1);
	$zipcode2=mysqli_fetch_array($query1);
	$zipcode3=$zipcode2[0];


	$amphur1=$_POST['amphur1'];
	$sql2="SELECT `AMPHUR_NAME` FROM `amphur` WHERE `AMPHUR_ID`= '$amphur1'";
	$query2 = mysqli_query($conn,$sql2);
	$amphur2=mysqli_fetch_array($query2);
	$amphur3=$amphur2[0];


	$province1=$_POST['province1'];
	$sql3="SELECT `PROVINCE_NAME` FROM `province` WHERE `PROVINCE_ID`= '$province1'";
	$query3 = mysqli_query($conn,$sql3);
	$province2=mysqli_fetch_array($query3);
	$province3=$province2[0];


	$phone1=$_POST['phone1'];
	$your_email1=$_POST['your_email1'];
	date_default_timezone_set('asia/bangkok');
	$date=date("d-m-Y");
	mysqli_set_charset($con,"utf8");
$sql = "UPDATE `user` SET `Username`='$user_name',`Password`='$password',`Firstname`='$first_name',`Lastname`='$last_name',`Department`='$position',`Class`='$class',`Room`='$room',`House_number`='$number',`Alley`='$alley',`Road`='$street',`District`='$district3',`Amphur`='$amphur3',`Zipcode`='$zipcode3',`Province`='$province3',`Phone`='$phone',`Email`='$your_email',`date`='$date' WHERE `ID` = $id";
// echo $sql;
$query = mysqli_query($con,$sql);
if($query==1){
	echo "<script>if(confirm('การแก้ไขข้อมูลถูกต้อง ระบบบันทึกข้อมูลเรียบร้อยแล้ว')){document.location.href='./editprofile.php'};</script>";
}
else if($query==0){
	echo "<script>if(confirm('การแก้ไขข้อมูลไม่ถูกต้อง ระบบไม่สามารถบันทึกข้อมูลได้')){document.location.href='./editprofile.php'};</script>";
}} 
?>
