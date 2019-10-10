<?php 
  session_start();
  if(!isset($_SESSION["UserID"])){
    header('Location: ../../../../Login/index.php');
  }
?>  
<!DOCTYPE html>
<html>
  
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link href="https://fonts.googleapis.com/css?family=Kanit&display=swap" rel="stylesheet">
  
  <title>เพิ่มข้อมูลการรักษา | Dashboard</title>
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
  <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
  <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
  <link rel="icon" type="image/png" href="../../dist/img/206-2067143_no-wait-emergency-room-medical-bed-icon.png" >
  <style>
    .bg {
  height: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
}

.span_pseudo, .chiller_cb span:before, .chiller_cb span:after {
  content: "";
  display: inline-block;
  background: #fff;
  width: 0;
  height: 0.2rem;
  position: absolute;
  transform-origin: 0% 0%;
}

.chiller_cb {
  position: relative;
  height: 2rem;
  display: flex;
  align-items: center;
}
.chiller_cb input {
  display: none;
}
.chiller_cb input:checked ~ span {
  background: #fd2727;
  border-color: #fd2727;
}
.chiller_cb input:checked ~ span:before {
  width: 1rem;
  height: 0.15rem;
  transition: width 0.1s;
  transition-delay: 0.3s;
}
.chiller_cb input:checked ~ span:after {
  width: 0.4rem;
  height: 0.15rem;
  transition: width 0.1s;
  transition-delay: 0.2s;
}
.chiller_cb input:disabled ~ span {
  background: #ececec;
  border-color: #dcdcdc;
}
.chiller_cb input:disabled ~ label {
  color: #dcdcdc;
}
.chiller_cb input:disabled ~ label:hover {
  cursor: default;
}
.chiller_cb label {
  padding-left: 2rem;
  position: relative;
  z-index: 2;
  cursor: pointer;
  margin-bottom:0;
}
.chiller_cb span {
  display: inline-block;
  width: 1.2rem;
  height: 1.2rem;
  border: 2px solid #ccc;
  position: absolute;
  left: 0;
  transition: all 0.2s;
  z-index: 1;
  box-sizing: content-box;
}
.chiller_cb span:before {
  transform: rotate(-55deg);
  top: 1rem;
  left: 0.37rem;
}
.chiller_cb span:after {
  transform: rotate(35deg);
  bottom: 0.35rem;
  left: 0.2rem;
}
  </style>
</head>
<body class="hold-transition sidebar-mini">
<?php
$serverName = "localhost";
$userName = "root";
$userPassword = "Ice@2019";
$dbName = "user_login";
$dbName1 = "post";
$dbName2 = "file-management";

$conn = mysqli_connect($serverName,$userName,$userPassword,$dbName);
$conn1 = mysqli_connect($serverName,$userName,$userPassword,$dbName1);
$conn2 = mysqli_connect($serverName,$userName,$userPassword,$dbName2);


$sql = "SELECT * FROM user WHERE Userlevel IN ('02', '03') ";
$query = mysqli_query($conn,$sql);
$num_rows = mysqli_num_rows($query);

$sql1 = "SELECT * FROM login_date";
$query1 = mysqli_query($conn,$sql1);
$num_rows1 = mysqli_num_rows($query1);

$sql2 = "SELECT * FROM allpost";
$query2 = mysqli_query($conn1,$sql2);
$num_rows2 = mysqli_num_rows($query2);

$sql3 = "SELECT * FROM `files`";
$query3 = mysqli_query($conn2,$sql3);
$num_rows3 = mysqli_num_rows($query3);

$sql4 = "SELECT * FROM `user` WHERE Userlevel IN ('01')";
$query4 = mysqli_query($conn,$sql4);
$num_rows4 = mysqli_num_rows($query4);
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
      <a href="../admin_index.php" class="nav-link"><i class="ion-ios-home"></i> หน้าแรก</a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li>
      <?php
        echo '<a href="../../Login/logout.php"><i class="fa fa-indent"></i> ออกจากระบบ</a> ';
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
      <span class="brand-text font-weight-light">สำหรับเจ้าหน้าที่</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <?php
            $id = $_SESSION['User'];
            mysqli_set_charset($conn,"utf8");
            $sqlimg="SELECT `profile` FROM `user` WHERE `Username` = '$id' ";
            $query1 = mysqli_query($conn,$sqlimg);
            while($result=mysqli_fetch_array($query1)){
          ?>
          <img src="../authorities/profile/<?php echo $result["profile"]?>" class="img-circle elevation-2" alt="User Image" style="width:40px;height:40px;">
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
              <i class="nav-icon fa fa-users"></i>
              <p>
                รายชื่อสมาชิก
                <i class="fa fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../page/alluser.php" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>รายชื่อสมาชิกทั้งหมด</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../page/user02.php" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>นักเรียน นักศึกษา</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../page/user03.php" class="nav-link">
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
                <a href="../page/login_date.php" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>การลงชื่อเข้าใช้ประจำวัน</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../page/logindate_menu.php" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>การลงชื่อเข้าใช้ทั้งหมด</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-medkit"></i>
              <p>
              ข้อมูลเวชภัณฑ์ ยา
              
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./treatment_list.php" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>ข้อมูลทั้งหมด</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./treatment_list.php" class="nav-link">
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
                <a href="#" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>เพิ่มข้อมูลประวัติการรักษา</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./treatment_list1.php" class="nav-link">
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
                <a href="../page/addpost.php" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>เพิ่มข่าวประชาสัมพันธ์</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../page/allpost.php" class="nav-link">
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
                <a href="../page/upload_download/upload.php" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>เพิ่มเอกสารดาวน์โหลด</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../page/upload_download/download.php" class="nav-link">
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
                <a href="../authorities/add_authorities.php" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>เพิ่มข้อมูลเจ้าหน้าที่</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../authorities/list_authorities.php" class="nav-link">
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
        <div class="container">
          <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-6 text-center">
            <?php
              $connect = mysqli_connect("localhost", "root", "Ice@2019","user_login");
              $query = "SELECT * FROM user ORDER BY Username ASC";
              $result = mysqli_query($connect, $query);
            ?>
            <form action="#" method="post">
              <div class="form-row">
                  <div class="form-group col-md-6">
                    <input type="text" id="employee_list" class="form-control" placeholder="รหัสผู้ใช้" autocomplete="off">
                  </div>
                  <div class="form-group">
                    <button type="button" name="search" id="search" class="btn btn-info">ค้นหา</button>
                  </div>
              </div>
            </form>
              
            </div>
            <div class="col-md-4"></div>
          </div>
        </div>   
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header text-center">
                            เพิ่มข้อมูลการรักษา
                        </div>
                        <div class="card-body">
                            <form action="./confirm.php" method="POST">
                                <h3>ข้อมูลเบื้องต้น</h3> 
                                <div class="form-row">
                                    <div class="form-group col-md-3">
                                        <label for="inputEmail4">รหัสผู้ใช้</label>
                                        <input type="text" class="form-control" id="std_id" name="std_id" placeholder="รหัสนักศึกษา" required>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="inputPassword4">ชื่อ</label>
                                        <input type="text" class="form-control" id="firstname"  name="firstname" placeholder="ชื่อ" required>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="inputPassword4">นามสกุล</label>
                                        <input type="text" class="form-control" id="lastname" name="lastname" placeholder="นามสกุล" required>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="inputPassword4">รหัสบัตรประจำตัวประชาชน</label>
                                        <input type="text" class="form-control" name="card_id" placeholder="รหัสบัตรประจำตัวประชาชน" required>
                                    </div>
                                </div>
                                <div class="form-row">
                                  <div class="form-group col-md-2">
                                      <label for="inputAddress">วัน/เดือน/ปีเกิด</label>
                                      <div class="md-form">
                                        <input class="form-control" name="dateofbirth" date-picker-example type="text" data-provide="datepicker" data-date-language="th-th" data-date-format="dd/mm/yyyy" placeholder="xx/xx/xxxx" autocomplete="off" required>
                                      </div>
                                      <!-- <div class="md-form">
                                        <input placeholder="xx/xx/xxxx" type="text" id="date-picker-example" class="form-control datepicker">
                                        <label for="date-picker-example">Try me...</label>
                                        </div>-->
                                      <script>
                                        function demo() {
                                          $('.datepicker').datepicker();
                                          
                                          }
                                          
                                      </script> 
                                  </div>
                                  <div class="form-group col-md-1">
                                      <label for="inputAddress">สัญชาติ</label>
                                      <input type="text" class="form-control" name="Nationality">
                                  </div>
                                  <div class="form-group col-md-1">
                                      <label for="inputAddress">เชื้อชาติ</label>
                                      <input type="text" class="form-control" name="Origin" autocomplete="off">
                                  </div>
                                  <div class="form-group col-md-1">
                                      <label for="inputAddress">ศาสนา</label>
                                      <input type="text" class="form-control" name="Religion">
                                  </div>
                                  <div class="form-group col-md-2">
                                      <label for="inputAddress">กรุ๊ปเลือด</label>
                                      <select name="Blood_type" class="form-control" required>
                                        <option selected>เลือก...</option>
                                        <option>O</option>
                                        <option>A</option>
                                        <option>B</option>
                                        <option>AB</option>
                                      </select>
                                  </div>
                                  <div class="form-group col-md-1">
                                      <label for="inputAddress">นํ้าหนัก</label>
                                      <input type="text" class="form-control" name="Weight" required>
                                  </div>
                                  <div class="form-group col-md-1">
                                      <label for="inputAddress">ส่วนสูง</label>
                                      <input type="text" class="form-control" name="Height" required>
                                  </div>
                                  <div class="form-group col-md-2">
                                      <label for="inputAddress">ความดันโลหิต</label>
                                      <input type="text" class="form-control" name="Blood_pressure" required>
                                  </div>
                                </div>
                                <div class="form-row">
                                  <div class="form-group col-md-3">
                                    <label for="inputAddress">เบอร์โทรศัพท์ที่สามารถติดต่อได้</label>
                                    <input type="text" class="form-control" name="phone" id="phone" required> 
                                  </div>
                                  <div class="form-group col-md-2">
                                    <label for="inputAddress">เบอร์โทรศัพท์ผู้ปกครอง</label>
                                    <input type="text" class="form-control" name="phonep" required> 
                                  </div>
                                </div>
                                <br>
                                <h3>รายละเอียดการรักษา</h3>  
                                <div class="form-row">
                                  <div class="form-group col-md-7">
                                    <label for="inputAddress2">อาการเบื้องต้น</label>
                                    <textarea class="form-control" name="Sick" rows="3" required></textarea>
                                  </div>
                                  <div class="form-group col-md-4">
                                    <label for="inputCity">ยาที่แพ้</label>
                                    <input type="text" class="form-control" name="Allergic_medication">
                                  </div>
                                </div>
                                <div class="form-row">
                                  <div class="form-group col-md-7">
                                    <label for="inputCity">การรักษา</label>
                                    <textarea class="form-control" name="Treatment" rows="3" required></textarea>
                                  </div>
                                  <div class="form-group col-md-5">
                                    <label for="inputCity">ประเภทการรักษา</label>
                                      <div class="card" >
                                        <div class="card-body">
                                          <div class="form-row">
                                            <div class="form-group col-md-5">
                                              <div class="chiller_cb">
                                                  <input id="myCheckbox1" type="checkbox" onClick="ck_frm1();" >
                                                  <label for="myCheckbox1">การจ่ายยา</label>
                                                  <span></span>
                                              </div>
                                            </div>
                                            <div class="form-group col-md-5">
                                              <div class="chiller_cb">
                                                    <input id="myCheckbox2" type="checkbox" onClick="ck_frm();" >
                                                    <label for="myCheckbox2">การนอนพัก</label>
                                                    <span></span>
                                              </div>
                                            </div>
                                            <div class="form-group col-md-5">
                                              <div class="chiller_cb">
                                                    <input id="myCheckbox3" type="checkbox" onClick="ck_frm2();" >
                                                    <label for="myCheckbox3">อุบัติเหตุฉุกเฉิน</label>
                                                    <span></span>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>    
                                  </div>
                                </div>
                                <script type="text/javascript">
	                                function ck_frm1(){
                                    var ck1 = document.getElementById('myCheckbox1');
                                    if(ck1.checked == true){
                                    document.getElementById('frm_txt1').style.display = "";
                                    }else{
                                    document.getElementById('frm_txt1').style.display = "none";
                                    }
	                                }
                                  function ck_frm(){
                                    var ck = document.getElementById('myCheckbox2');
                                    if(ck.checked == true){
                                    document.getElementById('frm_txt').style.display = "";
                                    }else{
                                    document.getElementById('frm_txt').style.display = "none";
                                    }
	                                }
                                  function ck_frm2(){
                                    var ck2 = document.getElementById('myCheckbox3');
                                    if(ck2.checked == true){
                                    document.getElementById('frm_txt2').style.display = "";
                                    }else{
                                    document.getElementById('frm_txt2').style.display = "none";
                                    }
	                                }
                                </script>
                                <div class="form-row">
                                  <div class="form-group col-md-2">
                                    <div id="frm_txt" style="display:none;">
                                      <label for="inputCity">เตียงที่</label>
                                      <input type="text" class="form-control" name="Bed">
                                    </div>
                                  </div>
                                </div>
                                <div id="frm_txt1" style="display:none;">
                                <div class="form-row">
                                  <div class="form-group col-md-4">
                                      <label for="inputCity">ยา</label>
                                      <?php
                                      $serverName = "localhost";
                                      $userName = "root";
                                      $userPassword = "Ice@2019";
                                      $dbName = "treatment";
                                      $con = mysqli_connect($serverName,$userName,$userPassword,$dbName);
                                      mysqli_set_charset($con,"utf8");
                                      $strsql = "SELECT * FROM `tb_med` ORDER BY `med_id` ASC";
                                      $query = mysqli_query($con,$strsql);
                                      ?>
                                      <select name='med_name' class="form-control">
                                        <option value=''></option>
                                        <?php
                                          while($rs = mysqli_fetch_array($query))
                                          {
                                        ?>
                                        <option value='<?php echo $rs['med_name'];?>'><?php echo $rs['med_name'];?></option>
                                        <?php } ?>
                                      </select>
                                  </div>
                                  <div class="form-group col-md-1">
                                      <label for="inputCity">จำนวน</label>
                                      <input type="text" class="form-control" name="total">
                                  </div>
                                  <div class="form-group col-md-2">
                                      <label for="inputCity">จำนวน</label>
                                      <select id="inputState" class="form-control" name="med_type">
                                          <option selected></option>
                                          <option>เม็ด</option>
                                          <option>แผง</option>
                                          <option>ขวด</option>
                                      </select>
                                  </div>
                                </div>
                                </div>
                                <div id="frm_txt2" style="display:none;">
                                  <div class="form-row">
                                    <div class="form-group col-md-4">
                                      <label for="inputCity">ชื่อโรงพยาบาล</label>
                                      <input type="text" class="form-control" name="Hospital_name">
                                    </div>
                                    <div class="form-group col-md-4">
                                      <label for="inputCity">เจ้าหน้าที่ผู้ดูแล</label>
                                      <input type="text" class="form-control" name="Staff">
                                    </div>
                                  </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-4"></div> 
                                    <div class="form-group col-md-4 text-center">    
                                      <button type="submit" class="btn btn-success">ยืนยัน</button>
                                      <button type="button" class="btn btn-warning" onclick="window.location.href='./../admin_index.php'">ยกเลิก</button>
                                    </div>
                                    <div class="form-group col-md-4"></div> 
                                </div>
                            </form> 
                        </div>
                        <div class="card-footer text-muted text-center">
                        <script>
                          function date_time(id)
                          {
                          date = new Date;
                          year = date.getFullYear();
                          month = date.getMonth();
                          months = new Array('กรกฎาคม', 'กุมภาพันธ์', 'มีนาคม', 'เมษายน', 'พฤษภาคม', 'มิถุนายน', 'กรกฎาคม', 'สิงหาคม', 'กันยายน', 'ตุลาคม', 'พฤศจิกายน', 'ธันวาคม');
                          d = date.getDate();
                          day = date.getDay();
                          days = new Array('อาทิตย์', 'จันทร์', 'อังคาร', 'พุธ', 'พฤหัสบดี', 'ศุกร์', 'เสาร์');
                          h = date.getHours();
                          if(h<10)
                          {
                                  h = "0"+h;
                          }
                          m = date.getMinutes();
                          if(m<10)
                          {
                                  m = "0"+m;
                          }
                          s = date.getSeconds();
                          if(s<10)
                          {
                                  s = "0"+s;
                          }
                          result = 'วัน '+days[day]+' ที่ '+d+' '+months[month]+' '+year+' เวลา '+h+':'+m+':'+s;
                          document.getElementById(id).innerHTML = result;
                          setTimeout('date_time("'+id+'");','1000');
                          return true;
                          }
                        </script>
                          <span id="date_time"></span>
                          <script type="text/javascript">window.onload = date_time('date_time');</script>
                        </div>
                    </div>
                </div>
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
<script src="../plugins/daterangepicker/daterangepicker.js"></script>
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
$(document).ready(function(){
 $('#search').click(function(){
    // $('#frm').submit();
  var id= $('#employee_list').val();
  if(id == '')
  {
    alert("กรุณากรอกรหัสผู้ใช้ให้ถูกต้อง");
  }
  else{
   $.ajax({
    url:"fetch.php",
    method:"POST",
    data:{id:id},
    dataType:"JSON",
    success:function(data)
    {
      alert(data);
      // alert("พบข้อมูลผู้ใช้แล้ว");
     $('#std_id').val(data.Username);
     $('#firstname').val(data.Firstname);
     $('#lastname').val(data.Lastname);
     $('#phone').val(data.Phone);
    //  $('#employee_designation').text(data.Userlevel);
      if(data == 2){
        alert("ไม่พบข้อมูลผู้ใช้แล้ว");
      }
    }
   });
  }
 });
});
</script>
</body>
</html>
