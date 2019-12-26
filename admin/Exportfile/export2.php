<?php 
    session_start();
    $servername = "localhost";
    $username = "root";
    $password = "itcmtc2019";
    $conn = mysqli_connect($servername, $username, $password);
    mysqli_set_charset($conn,"utf8");
    mysqli_select_db($conn,"user_login");
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
   
    include("./PHPExcel-1.8/Classes/PHPExcel.php");
    $excelReader = PHPExcel_IOFactory::createReaderForFile("../Exportfile/doc_xlsxflie/ประวัติการรักษา.xlsx");
    $excelObj = $excelReader->load("../Exportfile/doc_xlsxflie/ประวัติการรักษา.xlsx");
    $excelObj->setActiveSheetIndex(0);
    mysqli_select_db($conn, 'treatment');
    $sql_vs = "SELECT `Student_id`, `Firstname`, `Lastname`, `Sick`, `user_save`, `date` FROM `tb_treatment`";
    
    $query_vs = mysqli_query($conn, $sql_vs);
    
    
    $row = 2;
    $i=1;
    while($d = mysqli_fetch_array($query_vs)){
        // echo "'A'.$row,$d[$i]";
        $excelObj->getActiveSheet()->setCellValue('A'.$row,$i);
        $excelObj->getActiveSheet()->setCellValue('B'.$row,$d[0]);
        $excelObj->getActiveSheet()->setCellValue('C'.$row,$d[1]." ".$d[2]);
        $excelObj->getActiveSheet()->setCellValue('D'.$row,$d[3]);
        $excelObj->getActiveSheet()->setCellValue('E'.$row,$d[4]);
        $excelObj->getActiveSheet()->setCellValue('F'.$row,$d[5]);
        $i++;
        $row++; 
    }
    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    header('Content-Disposition: attachment; filename="ประวัติการรักษา.xlsx"');
    header('Cache-Control: max-age=0');
    
    $file = PHPExcel_IOFactory::createWriter($excelObj,'Excel2007');
    $file->save('php://output');
?>