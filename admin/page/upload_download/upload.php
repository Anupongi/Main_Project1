<?php 
  session_start();
  
  if(!isset($_SESSION["UserID"])){
    header('Location: ../../../Login/index.php');
  }
?>

<!DOCTYPE html>
<html>
  
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link href="https://fonts.googleapis.com/css?family=Kanit&display=swap" rel="stylesheet">
  
  <title>เพิ่มเอกสารสำหรับดาวน์โหลด | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../../plugins/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../../dist/css/adminlte.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../../../plugins/iCheck/flat/blue.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="../../../plugins/morris/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="../../../plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="../../../plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../../../plugins/daterangepicker/daterangepicker-bs3.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="../../../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" crossorigin="anonymous">
  <link rel="icon" href="../../../dist/img/206-2067143_no-wait-emergency-room-medical-bed-icon.png" type="image/png">
</head>
<body class="hold-transition sidebar-mini" style="font-family: 'Kanit', sans-serif;">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
      <a href="../../../admin/admin_index.php" class="nav-link"><i class="ion-ios-home"></i> หน้าแรก</a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li>
      <?php
        echo '<a href="../../../Login/logout.php"><i class="fa fa-indent"></i> ออกจากระบบ</a> ';
      ?>
        
          
      </li>
      <!-- Notifications Dropdown Menu -->
      
    </ul>

  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index1.html" class="brand-link">
      <img src="../../../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">สำหรับเจ้าหน้าที่</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <?php
            include "../../../connection/connection.php";
            $id = $_SESSION['User'];
            mysqli_set_charset($con,"utf8");
            $sqlimg="SELECT `profile` FROM `user` WHERE `Username` = '$id' ";
            $query = mysqli_query($con,$sqlimg);
            while($result=mysqli_fetch_array($query)){
          ?>
          <img src="../../authorities/profile/<?php echo $result["profile"];?>" class="img-circle elevation-2" alt="User Image" style="width:40px;height:40px;">
          <?php 
            }
          ?>
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $_SESSION["name"]?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2" style="font-family: 'Kanit', sans-serif;">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library --> 
          <li class="nav-header">รายชื่อ ลงชื่อเข้าใช้ เวชภัณฑ์ ยา</li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-edit"></i>
              <p>
                รายชื่อสมาชิก
                <i class="fa fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../../page/alluser.php" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>รายชื่อสมาชิกทั้งหมด</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../../page/user02.php" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>นักเรียน นักศึกษา</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../../page/user03.php" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>ครู บุคลากร</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-table"></i>
              <p>
                การลงชื่อเข้าใช้
                <i class="fa fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../login_date.php" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>การลงชื่อเข้าใช้ประจำวัน</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../logindate_menu.php" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>การลงชื่อเข้าใช้ทั้งหมด</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-pie-chart"></i>
              <p>
              ข้อมูลเวชภัณฑ์ ยา
              
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../../treatment/treatment_list.php" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>ข้อมูลทั้งหมด</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../../treatment/treatment_frm.php" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>เพิ่มข้อมูลเวชภัณฑ์ยา</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-header">ประวัติการรักษา</li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-book"></i>
              <p>
                ประวัติการรักษา
                <i class="fa fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../../treatment/treatment.php" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>เพิ่มข้อมูลประวัติการรักษา</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../../treatment/treatment_list1.php" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>ประวัติการรักษาทั้งหมด</p>
                </a>
              </li>
              </ul>
            </li>
          <li class="nav-header">ข่าวประชาสัมพันธ์</li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-book"></i>
              <p>
                ข่าวประชาสัมพันธ์
                <i class="fa fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../addpost.php" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>เพิ่มข่าวประชาสัมพันธ์</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../allpost.php" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>ข่าวประชาสัมพันธ์ทั้งหมด</p>
                </a>
              </li>
              </ul>
            <li class="nav-header">เอกสารสำหรับดาวน์โหลด</li>
            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
              <i class="nav-icon fa fa-file"></i>
              <p>
                เอกสารดาวน์โหลด
                <i class="fa fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./upload.php" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>เพิ่มเอกสารดาวน์โหลด</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./download.php" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>เอกสารดาวน์โหลดทั้งหมด</p>
                </a>
              </li>
              </ul>
            </li>
            <li class="nav-header">สำหรับเจ้าหน้าที่</li>
          <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
              <i class="fa fa-user-md" aria-hidden="true"></i>
              <p>
                ข้อมูลเจ้าหน้าที่
                <i class="fa fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../../authorities/add_authorities.php" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>เพิ่มข้อมูลเจ้าหน้าที่</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../../authorities/list_authorities.php" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>รายชื่อเจ้าหน้าที่</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">ระบบริหารจัดการ</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">ระบบริหารจัดการ</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <?php

              // Uploads files
              if (isset($_POST['save'])) { // if save button on the form is clicked
                  // name of the uploaded file
                  $filename = $_FILES['myfile']['name'];
                  // destination of the file on the server
                  $destination = './uploads/file/' . $filename;

                  // get the file extension
                  $extension = pathinfo($filename, PATHINFO_EXTENSION);

                  // the physical file on a temporary uploads directory on the server
                  $file = $_FILES['myfile']['tmp_name'];
                  $size = $_FILES['myfile']['size'];
                  move_uploaded_file($file,"./uploads/file/".$filename);
                  $file_name = $extension;
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
                  
                  if($file_name == 'docx'){
                    $file_image = 'ms-word-document-icon-8.jpg';
                  }elseif($file_name == 'pdf'){
                      $file_image = '833px-PDF_file_icon.svg.png';
                  }elseif($file_name == 'zip'){
                      $file_image = 'www.downloadzen.com_.png';  
                  }elseif($file_name == 'doc'){
                    $file_image = 'ms-word-document-icon-8.jpg';  
                  }elseif($file_name == 'xls'){
                    $file_image = '782px-Microsoft_Excel_2013_logo.png';  
                  }


                  if (!in_array($extension, ['zip', 'pdf', 'docx' ,'doc','xls'])) {
                      echo "ไฟล์ที่คุณสามารถอัปโหลดได้คือ .zip, .pdf .docx or .doc .xls";
                  } elseif ($_FILES['myfile']['size'] > 1000000) { // file shouldn't be larger than 2Megabyte
                      echo "ไฟล์มีขนาดใหญ่เกินไป!";
                  } else {
                      // move the uploaded (temporary) file to the specified destination


                          $con = mysqli_connect("localhost","root","itcmtc2019","file-management");
                          mysqli_set_charset($con,"utf8"); 
                          $sql10 = "INSERT INTO `files`(`image`, `name`, `extension`, `size`, `downloads`, `user_post`, `date`, `published`) VALUES ('$file_image','$filename','$extension','$size', 0 ,'$id_admin','$date1','y')";
                          
                          $query4 = mysqli_query($con,$sql10);
                          
                          if ($query4) {
                              
                              $alert = '<div class="alert alert-success" role="alert">เอกสารของคุณถูกเพิ่มเรียบร้อยแล้ว <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                            </button></div>';//not showing an alert box. 
                            echo $alert;
                          }
                          else {
                          $alert = '<div class="alert alert-danger" role="alert">การเพิ่มไฟล์ผิดพลาด <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                            </button></div>';//not showing an alert box. 
                          echo $alert;
                          
                          }
                    }
              }
              ?>
    
    <section class="content">
      <div class="container">
        <div class="row">
          <div class="col-md-1"></div>
          <div class="col-md-10">
            <div class="card">
              <div class="card-header">
                เพิ่มเอกสารดาวน์โหลด
              </div>
              <div class="card-body">
                <form action="./upload.php" method="post" enctype="multipart/form-data" >
                  <div class="input-group mb-3">
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="inputGroupFile02" name="myfile">
                      <label class="custom-file-label" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02">Choose file</label>
                    </div>
                  </div>
                  <button type="submit" name="save"  class="btn btn-success">upload</button>
                  <br>
                  
                </form>
              </div>
            </div>
          </div>
          <div class="col-md-1"></div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2018 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.0.0-alpha
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../../plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="../../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="../../../plugins/morris/morris.min.js"></script>
<!-- Sparkline -->
<script src="../../../plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="../../../plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="../../../plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="../../../plugins/knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
<script src="../../../plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="../../../plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="../../../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="../../../plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../../../plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../../dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../../../dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../../dist/js/demo.js"></script>
<script>
           $('input[type="file"]').change(function(e){
        var fileName = e.target.files[0].name;
        $('.custom-file-label').html(fileName);
    }); 
        </script>
</body>
</html>
 
 
 
 
 
 
