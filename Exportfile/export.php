<?php 
    session_start();
    $servername = "localhost";
    $username = "root";
    $password = "Ice@2019";
    $conn = mysqli_connect($servername, $username, $password);
    mysqli_set_charset($conn,"utf8");
    mysqli_select_db($conn,"user_login");
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    date_default_timezone_set('asia/bangkok');	
    $date = date('d/m/Y');
    include("./PHPExcel-1.8/Classes/PHPExcel.php");
    $excelReader = PHPExcel_IOFactory::createReaderForFile("../Exportfile/doc_xlsxflie/รายชื่อผู้ลงชื่อเข้าใช้ประจำวัน.xlsx");
    $excelObj = $excelReader->load("../Exportfile/doc_xlsxflie/รายชื่อผู้ลงชื่อเข้าใช้ประจำวัน.xlsx");
    $excelObj->setActiveSheetIndex(0);
    mysqli_select_db($conn, 'user_login');
    $sql_vs = "SELECT login_date.Username,user.Firstname, user.Lastname,login_date.Lastdate FROM user INNER JOIN login_date ON user.Username=login_date.Username WHERE login_date.`Lastdate` = '$date' ";
    // echo $sql_vs;
    $query_vs = mysqli_query($conn, $sql_vs);
    
    
    $row = 2;
    $i=1;
    while($d = mysqli_fetch_array($query_vs)){
        // echo "'A'.$row,$d[$i]";
        $excelObj->getActiveSheet()->setCellValue('A'.$row,$i);
        $excelObj->getActiveSheet()->setCellValue('B'.$row,$d[0]);
        $excelObj->getActiveSheet()->setCellValue('C'.$row,$d[1]);
        $excelObj->getActiveSheet()->setCellValue('D'.$row,$d[2]);
        $excelObj->getActiveSheet()->setCellValue('E'.$row,$d[3]);

        $i++;
        $row++; 
    }
    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    header('Content-Disposition: attachment; filename="รายชื่อผู้ลงชื่อเข้าใช้ประจำวัน.xlsx"');
    header('Cache-Control: max-age=0');
    
    $file = PHPExcel_IOFactory::createWriter($excelObj,'Excel2007');
    $file->save('php://output');
?>