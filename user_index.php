<?php 
  session_start();
  
  if(!isset($_SESSION["UserID"])){
    header('Location: ./Login/index.php');
  }
?>  
<!DOCTYPE html>
<html>
  
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link href="https://fonts.googleapis.com/css?family=Kanit&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <title><?php  echo $_SESSION["name"];?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/iCheck/flat/blue.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="plugins/morris/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker-bs3.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<?php
$serverName = "localhost";
$userName = "root";
$userPassword = "Ice@2019";
$dbName = "user_login";
$dbName1 = "treatment";

$conn = mysqli_connect($serverName,$userName,$userPassword,$dbName);
$con = mysqli_connect($serverName,$userName,$userPassword,$dbName1);

$name = $_SESSION["User"];
// echo $name;
$sql1 = "SELECT `Lastdate` FROM `login_date` WHERE Username='".$name."' order by id desc limit 1";
$query = mysqli_query($conn,$sql1);

$result = mysqli_query($conn,$sql1);
  if(mysqli_num_rows($result)==1){
    $row = mysqli_fetch_array($result);
    $Lastdate = '';
    $Lastdate = $row["Lastdate"];
  }elseif(mysqli_num_rows($result)==0){
    $Lastdate = '';
  }
    
$sql2 = "SELECT `date` FROM `tb_treatment` WHERE Student_id='".$name."' order by id desc limit 1";
$query2 = mysqli_query($con,$sql2); 
$result2 = mysqli_query($con,$sql2);
if(mysqli_num_rows($result2)==1){
  $row1 = mysqli_fetch_array($result2);
  $Lastdate1 = $row1["date"];
}else if(mysqli_num_rows($result2)==0){
  $Lastdate1 = '';
}
  // echo "<pre>";
	// print_r($_SESSION);
?>
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
      <a href="#" class="nav-link"><i class="ion-ios-home"></i> หน้าแรก</a>
      </li>
    </ul>


    
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li>
      <?php
        echo '<a href="./logout.php"><i class="fa fa-indent"></i> ออกจากระบบ</a> ';
      ?>
        
          
      </li>
      <!-- Notifications Dropdown Menu -->
      
    </ul>

  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <p class="brand-link">
        <img src="./dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
           <?php 
           $_SESSION["Userlevel"];
           if($_SESSION["Userlevel"] == 02){
               $Userlevel = 'สำหรับนักเรียน นักศึกษา';
           }else if($_SESSION["Userlevel"] == 03){
                $Userlevel = 'สำหรับครู บุคลากร';
           }
           ?>
      <span class="brand-text font-weight-light" style="font-size:16px;"><?php echo $Userlevel ?></span>
    </p>


    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
        <?php
          $sql1 = "SELECT * FROM `user` WHERE Username='".$name."' ";
          $query = mysqli_query($conn,$sql1);
          while ($d = mysqli_fetch_array($query)) {
          ?>
          <img src="./user/img/img/profile/<?php echo $d[5]?>" class="img-circle elevation-2" alt="User Image" style="width:40px;height:40px;">
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
         
          
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-pie-chart"></i>
              <p>
                แก้ไขข้อมูลส่วนตัว
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./user/editpicprofile.php" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>เปลี่ยนรูปโปร์ไฟล์</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./user/editprofile.php" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>แก้ไขข้อมูลส่วนตัว</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>ลบบัญชี</p>
                </a>
              </li>
            </ul>
          </li>
          
              
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-edit"></i>
              <p>
                ประวัติการรักษา
                <i class="fa fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./user/alllist_treatment.php" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>ประวัติการรักษาทั้งหมด</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./user/list_treatment.php" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>ประวัติการรักษาประจำวัน</p>
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
                <a href="./user/alllist_login.php" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>การลงชื่อเข้าใช้ทั้งหมด</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./user/list_login.php" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>การลงชื่อเข้าใช้ประจำวัน</p>
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
    <section class="content">
      <div class="container" >
        <div class="row">
          <div class="col-md-1"></div>
          <div class="col-md-5">
            <div class="card card-image-overlay " style="background-image: url(https://i0.wp.com/officemate.blog/wp-content/uploads/2018/04/3-Step-%E0%B8%88%E0%B8%94%E0%B8%97%E0%B8%B0%E0%B9%80%E0%B8%9A%E0%B8%B5%E0%B8%A2%E0%B8%99%E0%B8%9A%E0%B8%A3%E0%B8%B4%E0%B8%A9%E0%B8%B1%E0%B8%97-%E0%B8%94%E0%B9%89%E0%B8%A7%E0%B8%A2%E0%B8%95%E0%B8%B1%E0%B8%A7%E0%B9%80%E0%B8%AD%E0%B8%87%E0%B9%81%E0%B8%9A%E0%B8%9A%E0%B8%9F%E0%B8%A3%E0%B8%B5%E0%B9%86-%E0%B9%84%E0%B8%A1%E0%B9%88%E0%B8%A2%E0%B8%B2%E0%B8%81%E0%B8%AD%E0%B8%A2%E0%B9%88%E0%B8%B2%E0%B8%87%E0%B8%97%E0%B8%B5%E0%B9%88%E0%B8%84%E0%B8%B4%E0%B8%94.jpg?resize=790%2C520&ssl=1); background-position: center bottom;background-repeat: no-repeat;border-radius: 8px;background-size: cover;">
              <div class="card-header text-center">
                <h2 style="color: white; text-shadow: 2px 2px 4px #000000;">การลงชื่อเข้าใช้</h1>
              </div>
              <div class=" text-center d-flex align-items-center rgba-black-strong py-2 px-4">
                <div class="card-body">
                  <h5 class="card-text" style="color: white; text-shadow: 2px 2px 4px #000000;">แสดงการลงชื่อเข้าใช้บริการห้องพยาบาล</h5>
                  <a href="./user/alllist_login.php" class="btn btn-primary">ข้อมูลเพิ่มเติม</a>
                </div>
              </div>
              <div class="card-footer text-muted text-center">
                <p class="card-text"><small  style="color:white;" >แก้ไขข้อมูลล่าสุด: <?php echo $Lastdate;?></small></p>
              </div>
            </div>
          </div> <!-- /.col-6 -->
          <div class="col-md-5">
            <div class="card card-image-overlay " style="background-image: url(https://health.mthai.com/app/uploads/2017/12/Doctor800.jpg); background-position: top right;background-repeat: no-repeat;border-radius: 8px;background-size: cover;">
                <div class="card-header text-center">
                  <h2 style="color: white; text-shadow: 2px 2px 4px #000000;">ประวัติการรักษา</h1>
                </div>
                <div class=" text-center d-flex align-items-center rgba-black-strong py-2 px-4">
                  <div class="card-body">
                    <h5 class="card-text" style="color: white; text-shadow: 2px 2px 4px #000000;">แสดงการประวัติการรักษาของผู้ใช้</h5>
                    <a href="./user/alllist_treatment.php" class="btn btn-primary">ข้อมูลเพิ่มเติม</a>
                  </div>
                </div>
                <div class="card-footer text-muted text-center">
                  <p class="card-text"><small  style="color:white;" >แก้ไขข้อมูลล่าสุด: <?php echo $Lastdate1;?></small></p>
                </div>
              </div>
          
          </div>
        </div> <!-- /.row -->
      </div> <!-- /.container -->
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
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="plugins/morris/morris.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>
