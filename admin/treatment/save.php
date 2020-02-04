<?php
	error_reporting( error_reporting() & ~E_NOTICE );
    session_start();  
	
	
	// echo "<pre>";
	// print_r($_SESSION);
	// echo "<hr>";
	// print_r($_POST);
	// echo "</pre>";
	$serverName = "localhost";
	$userName = "root";
	$userPassword = "itcmtc2019";
	$dbName = "treatment";
	$database_condb = mysqli_connect($serverName,$userName,$userPassword,$dbName);

	$std_id = $_POST['std_id'];
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$card_id = $_POST['card_id'];
	$dateofbirth = $_POST['dateofbirth'];
	$Nationality = $_POST['Nationality'];
	$Origin = $_POST['Origin'];
	$Religion = $_POST['Religion'];
	$Blood_type = $_POST['Blood_type'];
	$Weight = $_POST['Weight'];
	$Height = $_POST['Height'];
	$Blood_pressure = $_POST['Blood_pressure'];
	$phone = $_POST['phone'];
	$phonep = $_POST['phonep'];
	$Sick = $_POST['Sick'];
	$Allergic_medication = $_POST['Allergic_medication'];
	$Treatment = $_POST['Treatment'];
	$Bed = $_POST['Bed'];
	$med_name = $_POST['med_name'];
	$total = $_POST['total'];
	$med_type = $_POST['med_type'];
	$Hospital_name = $_POST['Hospital_name'];
	$Staff = $_POST['Staff'];
	$user_save = $_SESSION["name"];
	date_default_timezone_set('asia/bangkok');	
	$date = date('d/m/Y');
	// mysqli_query($database_condb, "BEGIN");
	mysqli_set_charset($database_condb,"utf8"); 
	$sql1 = "INSERT  INTO `tb_treatment`(`Student_id`, `Firstname`, `Lastname`, `Card_id`, `Dateofbirth`, `Nationality`, `Origin`, `Religion`, `Blood type`, `Weight`, `Height`, `Blood_pressure`,`phone`,`phonep`, `Sick`, `Allergic_medication`, `Treatment`, `Bed`,`med_name`,`total`,`med_type`, `Hospital_name`, `Staff`,`user_save`,`date`) VALUES('$std_id','$firstname','$lastname','$card_id','$dateofbirth','$Nationality','$Origin','$Religion','$Blood_type','$Weight','$Height','$Blood_pressure','$phone','$phonep','$Sick','$Allergic_medication','$Treatment','$Bed','$med_name','$total','$med_type','$Hospital_name','$Staff','$user_save','$date')"; 
	
	
	$query1	= mysqli_query($database_condb, $sql1) ; 
	// echo $sql1;

	$sql2="SELECT `total`  FROM `tb_med` WHERE `med_name`='$med_name'";
	$query2	= mysqli_query($database_condb, $sql2) ;
	$total1=mysqli_fetch_array($query2);
	$total2=$total1[0];
	if($med_name == ''){
		// Header("Location: treatment.php");
		echo "<script>if(confirm('การบันทึกข้อมูลถูกต้อง ระบบบันทึกข้อมูลเรียบร้อยแล้ว')){document.location.href='./treatment.php'};</script>";
	}
	else if($total2==0){
		echo "<script>if(confirm('การบันทึกข้อมูลไม่ถูกต้อง จำนวนคงเหลือของอุปกรณ์ไม่เพียงพอ')){document.location.href='./treatment.php'};</script>";
		// echo "<script>";
        // echo "alert(\" การบันทึกข้อมูลไม่ถูกต้อง จำนวนคงเหลือของอุปกรณ์ไม่เพียงพอ\");"; 
        // echo "window.history.back()";
        // echo "</script>";
		
	  
	}else{
		$total3=$total2-$total;
		$sql3 ="UPDATE `tb_med` SET `total`= '$total3' WHERE `med_name`='$med_name'";
		$query3	= mysqli_query($database_condb, $sql3) ;
		echo "<script>if(confirm('การบันทึกข้อมูลถูกต้อง ระบบบันทึกข้อมูลเรียบร้อยแล้ว')){document.location.href='./treatment.php'};</script>";	
	}
?>