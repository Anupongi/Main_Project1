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
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <title><?php  echo $_SESSION["name"];?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../plugins/iCheck/flat/blue.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="../plugins/morris/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="../plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="../plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../plugins/daterangepicker/daterangepicker-bs3.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<?php
$serverName = "localhost";
$userName = "root";
$userPassword = "KZTuR1v3aaVA7t";
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
      <a href="../user_index.php" class="nav-link"><i class="ion-ios-home"></i> หน้าแรก</a>
      </li>
    </ul>


    
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li>
      <?php
        echo '<a href="../logout.php"><i class="fa fa-indent"></i> ออกจากระบบ</a> ';
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
        <img src="../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
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
          <img src="./img/img/profile/<?php echo $d[5]?>" class="img-circle elevation-2" alt="User Image" style="width:40px;height:40px;">
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
                <a href="./editpicprofile.php" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>เปลี่ยนรูปโปร์ไฟล์</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
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
                <a href="./alllist_treatment.php" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>ประวัติการรักษาทั้งหมด</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./list_treatment.php" class="nav-link">
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
                <a href="pages/tables/simple.html" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>การลงชื่อเข้าใช้ทั้งหมด</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/tables/data.html" class="nav-link">
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
            <h1 class="m-0 text-dark">แก้ไขข้อมูลส่วนตัว</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">แก้ไขข้อมูลส่วนตัว</li>
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
          <div class="col-md-12">
            <div class="card text-center">
                <div class="card-header">
                    Featured
                </div>
                <div class="card-body">
                <?php
                    mysqli_set_charset($conn,"utf8");    
                    $sql1 = "SELECT * FROM `user` WHERE Username='".$name."' ";
                    $query = mysqli_query($conn,$sql1);
                    while ($d = mysqli_fetch_array($query)) {
                ?>
                <div class="tab-content" id="pills-tabContent">
                <?php 
                    if($_SESSION["Userlevel"] == 02){
                ?>
                    <div class="tab-pane fade show active" id="pills-signin" role="tabpanel" aria-labelledby="pills-signin-tab">
                        <div class="col-sm-12 ">
                            <form action="./updateprofile.php" method="post" id="singninFrom">
                                <h2>ข้อมูลทั่วไป</h2>
                                <br>
                                <div class="form-group row text-center">
                                    <div class="col-md-6">
                                        <label class="font-weight-bold">ชื่อผู้ใช้ <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="user_name" name="user_name" value="<?php echo $d[1]?>">
                                        <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $d[0]?>">
                                        <small id="emailHelp" class="form-text">ตัวอย่าง : ชื่อผู้ใช้งานคือ รหัสประจำตัวนักเรียน.</small>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="font-weight-bold">รหัสผ่าน <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="password" name="password" value="<?php echo $d[2]?>">
                                    </div>
                                </div>
                                <div class="form-row text-center">
                                    <div class="form-group col-md-6">
                                        <label class="font-weight-bold">ชื่อ <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="first_name" name="first_name" value="<?php echo $d[3]?>">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="font-weight-bold">นามสกุล <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="last_name" name="last_name" value="<?php echo $d[4]?>">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label class="font-weight-bold">แผนกวิชา <span class="text-danger">*</span></label>
                                        <select class="form-control" id="position" name="position">
                                            <option selected ><?php echo $d[7]?></option>
                                            <option >แผนกวิชาช่างยนต์</option>
                                            <option>แผนกวิชาช่างกลโรงงาน</option>
                                            <option >แผนกวิชาช่างเชื่อมโลหะ</option>
                                            <option >แผนกวิชาช่างไฟฟ้า</option>
                                            <option >แผนกวิชาช่างอิเล็กทรอนิกส์</option>
                                            <option >แผนกวิชาช่างเมคคาทรอนิกส์</option>
                                            <option >แผนกวิชาช่างก่อสร้าง</option>
                                            <option >แผนกวิชาช่างสถาปัตยกรรม</option>
                                            <option >แผนกวิชาช่างเทคนิคพื้นฐาน</option>
                                            <option >แผนกวิชาช่างเทคนิคอุตสหกรรม</option>
                                            <option >แผนกวิชาช่างเทคโนโลยีสารสนเทศ</option>
                                            <option >แผนกวิชาช่างเทคนิคกายอุปกรณ์</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label class="font-weight-bold">ชั้นปี <span class="text-danger">*</span></label>
                                            <select class="form-control" id="class" name="class">
                                                <option selected><?php echo $d[8]?></option>
                                                <option >ปวช.1</option>
                                                <option >ปวช.2</option>
                                                <option >ปวช.3</option>
                                                <option >ปวส.1</option>
                                                <option >ปวส.2</option>
                                            </select>
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label class="font-weight-bold">ห้อง <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="room" name="room" value="<?php echo $d[9]?>">
                                    </div>
                                </div>
                                <br>
                                <h2>ส่วนสำหรับติดต่อ</h2>
                                <div class="form-row">
                                    <label class="font-weight-bold">บ้านเลขที่ <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="number" name="number" value="<?php echo $d[10]?>" required>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-3">
                                        <label class="font-weight-bold">ซอย </label>
                                        <input type="text" class="form-control" id="alley" name="alley" value="<?php echo $d[11]?>">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label class="font-weight-bold">ถนน</label>
                                        <input type="text" class="form-control" id="street" name="street" value="<?php echo $d[12]?>">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                    <label class="font-weight-bold">จังหวัด <span class="text-danger">*</span></label>
                                    <select name="province"  id="province" name="province" class="form-control">
                                        <option id="province_list"	><?php echo $d[16]?></option>
                                    </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label class="font-weight-bold">อำเภอ <span class="text-danger">*</span></label>
                                        <select name="amphur"  id="amphur" name="amphur" class="form-control">
                                            <option name="amphur"><?php echo $d[14]?></option>
                                        </select>
                                        <!-- <input type="text" name="zipcode"  id="zipcode" class="form-control" value="">	 -->
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label class="font-weight-bold">รหัสไปรษณีย์ <span class="text-danger">*</span></label>
                                        <input type="text" name="zipcode"  id="zipcode" class="form-control" value="<?php echo $d[15]?>">
                                        <!-- <select name="zipcode"  id="zipcode" class="form-control">
                                            <option id="zipcode">รหัสไปรษณีย์</option>
                                        </select> -->
                                    </div>
                                    <div class="form-row col-md-3">
                                        <label class="font-weight-bold">ตำบล <span class="text-danger">*</span></label>
                                        <select  id="district"	name="district" class="form-control">
                                            <option><?php echo $d[13]?></option>
                                        </select>
                                    </div>			
                                </div><br>
                                <div class="form-row">
                                    <div class="form-group col-md-3">
                                        <label class="font-weight-bold">เบอร์โทรศัพท์ <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="phone" id="phone" value="<?php echo $d[17]?>" required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label class="font-weight-bold">Email <span class="text-danger">*</span></label>
                                        <input type="text" name="your_email" id="your_email" class="form-control"  value="<?php echo $d[18]?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="submit" name="submit" value="แก้ไขข้อมูลส่วนตัว" class="btn btn-block btn-info">
                                </div>
                            </form>
                        </div>
                    
                     
                    <?php
                    }    
                else if($_SESSION["Userlevel"] == 03){
                ?>
                    <div class="tab-pane fade show active" id="pills-signup" role="tabpanel" aria-labelledby="pills-signup-tab">
                        <div class="col-sm-12">
                            <form action="./updateprofile.php" method="post" id="singnupFrom">
                                <h2>ข้อมูลทั่วไป</h2>
                            <br>
                            <div class="form-group row text-center">
                                <div class="col-md-6">
                                    <label class="font-weight-bold">ชื่อผู้ใช้ <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="user_name1" name="user_name1" value="<?php echo $d[1]?>">
                                    <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $d[0]?>">
                                    <small id="emailHelp" class="form-text">ตัวอย่าง : ชื่อผู้ใช้งานคือ รหัสบัตรประจำตัวประชาชน.</small>
                                </div>
                                <div class="col-md-6">
                                    <label class="font-weight-bold">รหัสผ่าน <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="password1" name="password1" value="<?php echo $d[2]?>">
                                </div>
                            </div>
                            <div class="form-row text-center">
                                <div class="form-group col-md-6">
                                    <label class="font-weight-bold">ชื่อ <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="first_name1" name="first_name1" value="<?php echo $d[3]?>">
                                </div>
                                <div class="form-group col-md-6">
                                    <label class="font-weight-bold">นามสกุล <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="last_name1" name="last_name1" value="<?php echo $d[4]?>">
                                </div>
                            </div>
                            <br>
                            <h2>ส่วนสำหรับติดต่อ</h2>
                            <div class="form-row">
                                <label class="font-weight-bold">บ้านเลขที่ <span class="text-danger">*</span></label>
								<input type="text" name="number1" class="form-control" id="number1" value="<?php echo $d[10]?>" required>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <label class="font-weight-bold">ซอย </label>
                                    <input type="text" name="alley1" class="form-control" id="alley1" value="<?php echo $d[11]?>">
                                </div>
                                <div class="form-group col-md-4">
                                    <label class="font-weight-bold">ถนน</label>
                                    <input type="text" name="street1" class="form-control" id="street1" value="<?php echo $d[12]?>">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                <label class="font-weight-bold">จังหวัด <span class="text-danger">*</span></label>
								<select name="province1"  id="province1" class="form-control">
									<option id="province_list"	><?php echo $d[16]?></option>
								</select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label class="font-weight-bold">อำเภอ <span class="text-danger">*</span></label>
									<select name="amphur1"  id="amphur1" class="form-control">
										<option id="amphur_list"><?php echo $d[13]?></option>
									</select>	
								</div>
                                <div class="form-group col-md-3">
                                    <label class="font-weight-bold">รหัสไปรษณีย์ <span class="text-danger">*</span></label>
                                    <input type="text" name="zipcode1"  id="zipcode1" class="form-control" value="<?php echo $d[15]?>">
									<!-- <select name="zipcode"  id="zipcode" class="form-control">
										<option id="zipcode">รหัสไปรษณีย์</option>
									</select> -->
                                </div>
                                <div class="form-row col-md-3">
                                    <label class="font-weight-bold">ตำบล <span class="text-danger">*</span></label>
									<select  id="district1"	name="district1" class="form-control">
                            			<option><?php echo $d[14]?></option>
                        			</select>
							    </div>			
							</div><br>
                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <label class="font-weight-bold">เบอร์โทรศัพท์ <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="phone1" id="phone1" value="<?php echo $d[17]?>" required>
                                </div>
                                <div class="form-group col-md-4">
                                    <label class="font-weight-bold">Email <span class="text-danger">*</span></label>
                                    <input type="text" name="your_email1" id="your_email1" class="form-control"  value="<?php echo $d[18]?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="submit" name="signupsubmit" value="แก้ไขข้อมูลส่วนตัว" class="btn btn-block btn-info">
                            </div>
                        </form>
                    </div>
                    <?php
                    }
                    ?>    
                </div><?php
                }
                ?>
            </div>
                </div>
                <div class="card-footer text-muted">
                    2 days ago
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
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="../plugins/morris/morris.min.js"></script>
<!-- Sparkline -->
<script src="../plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="../plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="../plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="../plugins/knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
<script src="../plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="../plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="../plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<!-- นำเข้า Javascript jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.2/js/select2.min.js"></script>
<script>
    $(function(){
        //เรียกใช้งาน Select2
        $(".select2-single").select2();
        //ดึงข้อมูล province จากไฟล์ get_data.php
            $.ajax({
                url:"get_data.php",
                dataType: "json", //กำหนดให้มีรูปแบบเป็น Json
                data:{show_province:'show_province'}, //ส่งค่าตัวแปร show_province เพื่อดึงข้อมูล จังหวัด
                success:function(data){
                    //วนลูปแสดงข้อมูล ที่ได้จาก ตัวแปร data
                    $.each(data, function( index, value ) {
                    //แทรก Elements ใน id province  ด้วยคำสั่ง append
                    $("#province").append("<option value='"+ value.id +"'> "+ value.name +  "</option>");
                    $("#province1").append("<option value='"+ value.id +"'> " + value.name + "</option>");
                    });
                }
            });
        //แสดงข้อมูล อำเภอ  โดยใช้คำสั่ง change จะทำงานกรณีมีการเปลี่ยนแปลงที่ #province
            $("#province").change(function(){
                //กำหนดให้ ตัวแปร province มีค่าเท่ากับ ค่าของ #province ที่กำลังถูกเลือกในขณะนั้น
                var province_id = $(this).val();
                    $.ajax({
                        url:"get_data.php",
                        dataType: "json",//กำหนดให้มีรูปแบบเป็น Json
                        data:{province_id:province_id},//ส่งค่าตัวแปร province_id เพื่อดึงข้อมูล อำเภอ ที่มี province_id เท่ากับค่าที่ส่งไป
                        success:function(data){
                            
                            //กำหนดให้ข้อมูลใน #amphur เป็นค่าว่าง
                            // $("#amphur").text("");
							$("#amphur").text("");
                            
                            //วนลูปแสดงข้อมูล ที่ได้จาก ตัวแปร data  
                            $.each(data, function( index, value ) {
                                
                                //แทรก Elements ข้อมูลที่ได้  ใน id zipcode  ด้วยคำสั่ง append
                                  $("#amphur").append("<option value='"+ value.id +"'> " + value.name + "</option>");
								  
								 
                            });
                        }
                    });
 
                });
                //แสดงข้อมูล อำเภอ  โดยใช้คำสั่ง change จะทำงานกรณีมีการเปลี่ยนแปลงที่ #province
            $("#province1").change(function(){
                //กำหนดให้ ตัวแปร province มีค่าเท่ากับ ค่าของ #province ที่กำลังถูกเลือกในขณะนั้น
                var province_id = $(this).val();
                    $.ajax({
                        url:"get_data.php",
                        dataType: "json",//กำหนดให้มีรูปแบบเป็น Json
                        data:{province_id:province_id},//ส่งค่าตัวแปร province_id เพื่อดึงข้อมูล อำเภอ ที่มี province_id เท่ากับค่าที่ส่งไป
                        success:function(data){
                            
                            //กำหนดให้ข้อมูลใน #amphur เป็นค่าว่าง
                            // $("#amphur").text("");
							$("#amphur1").text("");
                            
                            //วนลูปแสดงข้อมูล ที่ได้จาก ตัวแปร data  
                            $.each(data, function( index, value ) {
                                
                                //แทรก Elements ข้อมูลที่ได้  ใน id zipcode  ด้วยคำสั่ง append
                                 
								  $("#amphur1").append("<option value='"+ value.id +"'> " + value.name + "</option>");
								 
                            });
                        }
                    });
 
                });
				
				
				 //แสดงข้อมูลตำบล โดยใช้คำสั่ง change จะทำงานกรณีมีการเปลี่ยนแปลงที่  #amphur
				 $("#amphur").change(function(){
                    
                    //กำหนดให้ ตัวแปร amphur_id มีค่าเท่ากับ ค่าของ  #amphur ที่กำลังถูกเลือกในขณะนั้น
                    var amphur_id = $(this).val();
                    $.ajax({
                        url:"get_data.php",
                        dataType: "json",//กำหนดให้มีรูปแบบเป็น Json
                        data:{amphur_id:amphur_id},//ส่งค่าตัวแปร amphur_id เพื่อดึงข้อมูล ตำบล ที่มี amphur_id เท่ากับค่าที่ส่งไป
						success:function(data){
                            
                              //กำหนดให้ข้อมูลใน #district เป็นค่าว่าง
                              $("#district").text("");
                              $("#zipcode").text("");

                            //วนลูปแสดงข้อมูล ที่ได้จาก ตัวแปร data  
                            $.each(data, function( index, value ) {
                                
                              //แทรก Elements ข้อมูลที่ได้  ใน id district  ด้วยคำสั่ง append
                            //   $("#zipcode").append("<value='"+ value.id +"'>"+ value.name  +"");
                              $("#district").append("<option value='" + value.DISTRICT_CODE + "'> " + value.DISTRICT_NAME+ "</option>");
                            //   $("#zipcode").append("<option value='" + value.id + "'> " + value.name  + "</option>");
                              $('#zipcode').val(value.name);
                            });
							
                        }
                    });
                    
                });
                 //แสดงข้อมูลตำบล โดยใช้คำสั่ง change จะทำงานกรณีมีการเปลี่ยนแปลงที่  #amphur
				 $("#amphur1").change(function(){
                    
                    //กำหนดให้ ตัวแปร amphur_id มีค่าเท่ากับ ค่าของ  #amphur ที่กำลังถูกเลือกในขณะนั้น
                    var amphur_id = $(this).val();
                    $.ajax({
                        url:"get_data.php",
                        dataType: "json",//กำหนดให้มีรูปแบบเป็น Json
                        data:{amphur_id:amphur_id},//ส่งค่าตัวแปร amphur_id เพื่อดึงข้อมูล ตำบล ที่มี amphur_id เท่ากับค่าที่ส่งไป
						success:function(data){
                            
                              //กำหนดให้ข้อมูลใน #district เป็นค่าว่าง
                              $("#district1").text("");
                              $("#zipcode1").text("");

                            //วนลูปแสดงข้อมูล ที่ได้จาก ตัวแปร data  
                            $.each(data, function( index, value ) {
                                
                              //แทรก Elements ข้อมูลที่ได้  ใน id district  ด้วยคำสั่ง append
                            //   $("#zipcode").append("<value='"+ value.id +"'>"+ value.name  +"");
                              $("#district1").append("<option value='" + value.DISTRICT_CODE + "'> " + value.DISTRICT_NAME+ "</option>");
                            //   $("#zipcode").append("<option value='" + value.id + "'> " + value.name  + "</option>");
                              $('#zipcode1').val(value.name);
                            });
							
                        }
                    });
                    
                });
                
                //คำสั่ง change จะทำงานกรณีมีการเปลี่ยนแปลงที่  #district 
                $("#district").change(function(){
                    
                    //นำข้อมูลรายการ จังหวัด ที่เลือก มาใส่ไว้ในตัวแปร province
                    var province = $("#province option:selected").text();
                    
                    //นำข้อมูลรายการ อำเภอ ที่เลือก มาใส่ไว้ในตัวแปร amphur
                    var amphur = $("#amphur option:selected").text();
                    
                    //นำข้อมูลรายการ ตำบล ที่เลือก มาใส่ไว้ในตัวแปร district
                    var district = $("#district option:selected").text();
					
                });

				
                


            });
    </script>
</html>
