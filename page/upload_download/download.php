<?php 
  session_start();
  
  if(!isset($_SESSION["UserID"])){
    header('Location: login/index.php');
  }
?>

<!DOCTYPE html>
<html>
  
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link href="https://fonts.googleapis.com/css?family=Kanit&display=swap" rel="stylesheet">
  
  <title>AdminLTE 3 | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../../plugins/iCheck/flat/blue.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="../../plugins/morris/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="../../plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="../../plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../../plugins/daterangepicker/daterangepicker-bs3.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="../../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" crossorigin="anonymous">
</head>
<body class="hold-transition sidebar-mini" style="font-family: 'Kanit', sans-serif;">
<?php
$serverName = "localhost";
$userName = "root";
$userPassword = "KZTuR1v3aaVA7t";
$dbName = "file-management";
$conn = mysqli_connect($serverName,$userName,$userPassword,$dbName);

mysqli_set_charset($conn,"utf8");
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
      <a href="../../admin_index.php" class="nav-link"><i class="ion-ios-home"></i> หน้าแรก</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li>
      <?php
        echo '<a href="../../logout.php"><i class="fa fa-indent"></i> ออกจากระบบ</a> ';
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
      <img src="../../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
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
                <a href="pages/forms/general.html" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>รายชื่อสมาชิกทั้งหมด</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/forms/advanced.html" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>นักเรียน นักศึกษา</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/forms/editors.html" class="nav-link">
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
                <a href="pages/tables/simple.html" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>การลงชื่อเข้าใช้ประจำวัน</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/tables/data.html" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>การลงชื่อเข้าใช้ประจำเดือน</p>
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
                <a href="pages/charts/chartjs.html" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>ข้อมูลทั้งหมด</p>
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
            </li>
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
    <section class="content">
      <?php
      $conn = mysqli_connect('localhost', 'root', 'KZTuR1v3aaVA7t', 'file-management');
      $sql = "SELECT * FROM files";
      mysqli_set_charset($conn,"utf8");
      $result = mysqli_query($conn, $sql);
      while ($d = mysqli_fetch_array($result)) {
      
    // if (isset($_GET['file_id'])) {
    // $id = $_GET['file_id'];

    // // fetch file to download from database
    // $sql1 = "SELECT * FROM files WHERE id=$id";
    // $result1 = mysqli_query($conn, $sql1);

    // $file = mysqli_fetch_assoc($result1);
    // $filepath = './uploads/' . $file['name'];
    // if (file_exists($filepath)) {
    //     header('Content-Description: File Transfer');
    //     header('Content-Type: application/octet-stream');
    //     header('Content-Disposition: attachment; filename=' . basename($filepath));
    //     header('Expires: 0');
    //     header('Cache-Control: must-revalidate');
    //     header('Pragma: public');
    //     header('Content-Length: ' . filesize('./uploads/' . $file['name']));
    //     readfile('./uploads/' . $file['name']);

    //     // Now update downloads count
    //     $newCount = $file['downloads'] + 1;
    //     $updateQuery = "UPDATE files SET downloads=$newCount WHERE id=$id";
    //     mysqli_query($conn, $updateQuery);
    //     exit;
    // }

// }
?>
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-7">
                  
                  <div class="card mb-3" style="max-width: 550px;">
                    <div class="row no-gutters">
                    
                      <div class="col-md-5" style="margin-top:2%;margin-bottom:2%;">
                        
                        <img src="./uploads/img/<?php echo $d[1];?>" class="card-img" height="150" width="100;" style="right: 0px; padding: 10px;">
                      </div>
                      <div class="col-md-7">
                        <div class="card-body">
                          <h6 class="card-title" style="font-size:16px">เรื่อง : <?php echo $d[2]; ?></h6>
                          <h6 style="font-size:14px">โพสต์โดย : <?php echo $d[6]; ?></h6>
                          <h6 style="font-size:14px">ขนาดไฟล์ : <?php echo floor($d[4] / 1000) . ' KB'; ?></h6>
                          <h6 style="font-size:14px">จำนวนดาวน์โหลด : <?php echo $d[5]; ?> ครั้ง</h6>
                          <p class="card-text"><small class="text-muted">วันที่โพสต์  : <?php echo $d[7]; ?></small></p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>  
                <div class="col-2"></div>   
                <div class="col-3" style="margin-top:1%;margin-bottom:auto%;">
                  <?php if($d[8] == "y"){ ?>
                    <a href="./editpage/hidden.php?id=<?php echo $d[0] ?>" class="btn btn-warning btn-block">ซ่อนเอกสาร</a>
                  <?php }else{ ?>
                    <a href="./editpage/show.php?id=<?php echo $d[0] ?>" class="btn btn-success btn-block">แสดงเอกสาร</a>
                  <?php } ?>
                    <a href="./editpage/del.php?id=<?php echo $d[0] ?>" class="btn btn-danger btn-block">ลบ</a>
                </div>         
              </div>    
            </div>
          </div>
        </div>
      </div>
                  </div><?php }?>
            
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
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="../../plugins/morris/morris.min.js"></script>
<!-- Sparkline -->
<script src="../../plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="../../plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="../../plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="../../plugins/knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
<script src="../../plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="../../plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="../../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="../../plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../../plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../../dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<script>
           $('input[type="file"]').change(function(e){
        var fileName = e.target.files[0].name;
        $('.custom-file-label').html(fileName);
    }); 
        </script>
</body>
</html>
 
 
 
 
 
 


<!-- 
<?php include 'filesLogic.php';?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="style.css">
  <title>Download files</title>
  <style></style>
</head>
<body>

<table>
<thead>
    <th>ID</th>
    <th>รูป</th>
    <th>Filename</th>
    <th>size (in mb)</th>
    <th>Downloads</th>
    <th>Action</th>
</thead>
<tbody>
   <?php foreach ($files as $file):
    ?> 
    
    <tr>
      <td><?php echo $file['id']; ?></td>
      <td><?php echo $file['image']?></td>
      <td><?php echo $file['name']; ?></td>
      <td><?php echo floor($file['size'] / 1000) . ' KB'; ?></td>
      <td><?php echo $file['downloads']; ?></td>
      <td><a href="./filesLogic.php?file_id=<?php echo $file['id'] ?>">Download</a></td>
    </tr>
    
  <?php endforeach;?>
  
</tbody>
</table>

</body>
</html> -->