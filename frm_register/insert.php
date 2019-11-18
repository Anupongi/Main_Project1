<?php
    $servername = "localhost";
    $username = "root";
    $password = "Ice@2019";
    $db = "test";
    $db1 = "user_login";
    $conn = new mysqli($servername, $username, $password,$db);
    $con = new mysqli($servername, $username, $password,$db1);
    mysqli_set_charset($conn,"utf8");
    mysqli_set_charset($con,"utf8");

    if(isset($_POST['user_name'])){
    $user_name=$_POST['user_name'];
    $password=$_POST['password'];
    $first_name=$_POST['first_name'];
    $last_name=$_POST['last_name'];
    $card_number=$_POST['card_number'];
    $dateofbirth=$_POST['dateofbirth'];
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
    $date=date("d/m/Y");

    $check = "SELECT * FROM `user` WHERE `Username` = '$user_name' ";
    $result1 = mysqli_query($con,$check);
      $num=mysqli_num_rows($result1); 
      if($num > 0)   		
      {
        echo "<script>";
        echo "alert(' มีผู้ใช้ username นี้แล้ว กรุณาสมัครใหม่อีกครั้ง !');";
        echo "window.location='./index.php';";
        echo "</script>";

      }else{
            $sql4="INSERT INTO `user`(`Username`, `Password`, `Firstname`, `Lastname`, `Card_number`, `Dateofbirth`, `Department`, `Class`, `Room`, `House_number`, `Alley`, `Road`, `District`, `Amphur`, `Zipcode`, `Province`,  `Userlevel`,`Phone`, `Email`, `date`) VALUES ('$user_name','$password','$first_name','$last_name','$card_number','$dateofbirth','$position','$class','$room','$number','$alley','$street','$district3','$amphur3','$zipcode3','$province3','$user_level','$phone','$your_email','$date')";
            $query4 = mysqli_query($con,$sql4);
            if($query4){
                echo "<script type='text/javascript'>";
                    echo "alert('บันทึกข้อมูลสำเร็จ');";
                    echo "window.location='../login.php';";
                echo "</script>";
          }
          else{
    //ถ้าบันทึกไม่สำเร็จแสดงข้อความ Error และกระโดดกลับไปหน้าฟอร์ม
                // echo "<script type='text/javascript'>";
                //     echo "alert('ผิดพลาด ไม่สามารถบันทึกข้อมูลได้!');";
                //     echo "window.location='./index.php';";
                // echo "</script>";
                echo $sql4;
          }
          
      }
    
    // Header("Location: ../login.php");
    }
    else if(isset($_POST['user_name1'])){
        $user_name1=$_POST['user_name1'];
        $password1=$_POST['password1'];
        $first_name1=$_POST['first_name1'];
        $last_name1=$_POST['last_name1'];
        $card_number1=$_POST['card_number1'];
        $dateofbirth1=$_POST['dateofbirth1'];
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

        $check = "SELECT * FROM `user` WHERE `Username` = '$user_name1' ";
        $result1 = mysqli_query($con,$check);
        $num=mysqli_num_rows($result1); 
        if($num > 0)   		
        {
        echo "<script>";
        echo "alert(' มีผู้ใช้ username นี้แล้ว กรุณาสมัครใหม่อีกครั้ง !');";
        echo "window.location='./index.php';";
        echo "</script>";

        }else{
            $sql4="INSERT INTO `user`(`Username`, `Password`, `Firstname`, `Lastname`,`Card_number`, `Dateofbirth`, `House_number`, `Alley`, `Road`, `District`, `Amphur`, `Zipcode`, `Province`, `Userlevel`, `Phone`, `Email`, `date`) VALUES ('$user_name1','$password1','$first_name1','$last_name1','$card_number1','$dateofbirth1','$number1','$alley1','$street1','$district3','$amphur3','$zipcode3','$province3','$user_level','$phone1','$your_email1','$date')";
            $query4 = mysqli_query($con,$sql4);
            if($query4){
                echo "<script type='text/javascript'>";
                    echo "alert('บันทึกข้อมูลสำเร็จ');";
                    echo "window.location='../login.php';";
                echo "</script>";
          }
          else{
    //ถ้าบันทึกไม่สำเร็จแสดงข้อความ Error และกระโดดกลับไปหน้าฟอร์ม
                echo "<script type='text/javascript'>";
                    echo "alert('ผิดพลาด ไม่สามารถบันทึกข้อมูลได้!');";
                    echo "window.location='./index.php';";
                echo "</script>";
          }
          
      }
        // $sql1="INSERT INTO `user`(`Username`, `Password`, `Firstname`, `Lastname`, `House_number`, `Alley`, `Road`, `District`, `Amphur`, `Zipcode`, `Province`, `Userlevel`, `Phone`, `Email`, `date`) VALUES ('$user_name1','$password1','$first_name1','$last_name1','$number1','$alley1','$street1','$district1','$amphur1','$zipcode1','$province1','$user_level','$phone1','$your_email1','$date')";
        // $query1 = mysqli_query($con,$sql1);
        // echo $sql;
        // Header("Location: ../login.php");  
    }
    
    

    
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