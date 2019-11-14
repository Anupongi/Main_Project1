<?php 
  session_start();
  
  if(!isset($_SESSION["UserID"])){
    header('Location: ../Login/index.php');
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
  <link rel="stylesheet" href="../../dist/css/alluser.css">
  
 
</head>
<body class="hold-transition sidebar-mini">
<?php
$serverName = "localhost";
$userName = "root";
$userPassword = "Ice@2019";
$dbName = "user_login";


$conn = mysqli_connect($serverName,$userName,$userPassword,$dbName);
$date = date('d/m/Y');
mysqli_set_charset($conn, "utf8");
$sql = "SELECT * FROM `login_date`";
$query = mysqli_query($conn,$sql);

$num_rows = mysqli_num_rows($query);

$per_page = 10;   // Per Page
	$page  = 1;
	
	if(isset($_GET["Page"]))
	{
		$page = $_GET["Page"];
	}

	$prev_page = $page-1;
	$next_page = $page+1;

	$row_start = (($per_page*$page)-$per_page);
	if($num_rows<=$per_page)
	{
		$num_pages =1;
	}
	else if(($num_rows % $per_page)==0)
	{
		$num_pages =($num_rows/$per_page) ;
	}
	else
	{
		$num_pages =($num_rows/$per_page)+1;
		$num_pages = (int)$num_pages;
	}
	$row_end = $per_page * $page;
	if($row_end > $num_rows)
	{
		$row_end = $num_rows;
	}
    
    $sql .= " ORDER BY ID ASC LIMIT $row_start ,$row_end ";
	$query = mysqli_query($conn,$sql);


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
      <img src="../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">สำหรับเจ้าหน้าที่</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
        <?php
            include "../../connection/connection.php";
            $id = $_SESSION['User'];
            mysqli_set_charset($con,"utf8");
            $sqlimg="SELECT `profile` FROM `user` WHERE `Username` = '$id' ";
            $query = mysqli_query($con,$sqlimg);
            while($result=mysqli_fetch_array($query)){
          ?>
          <img src="../../admin/authorities/profile/<?php echo $result["profile"];?>" class="img-circle elevation-2" alt="User Image" style="width:40px;height:40px;">
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
                <a href="./alluser.php" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>รายชื่อสมาชิกทั้งหมด</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./user02.php" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>นักเรียน นักศึกษา</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./user03.php" class="nav-link">
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
                <a href="./login_date.php" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>การลงชื่อเข้าใช้ประจำวัน</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./logindate_menu.php" class="nav-link">
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
                <a href="../treatment/treatment_list.php" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>ข้อมูลทั้งหมด</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../treatment/treatment_frm.php" class="nav-link">
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
                <a href="../treatment/treatment.php" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>เพิ่มข้อมูลประวัติการรักษา</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../treatment/treatment_list1.php" class="nav-link">
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
                <a href="./addpost.php" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>เพิ่มข่าวประชาสัมพันธ์</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./allpost.php" class="nav-link">
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
                <a href="./page/upload_download/upload.php" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>เพิ่มเอกสารดาวน์โหลด</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./page/upload_download/download.php" class="nav-link">
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
                <a href="./add_authorities.php" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>เพิ่มข้อมูลเจ้าหน้าที่</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./list_authorities.php" class="nav-link">
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
            <h1 class="m-0 text-dark">สำหรับเจ้าหน้าที่</h1>
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
        <script language="javascript" src="module/scripts/jquery-1.8.1.min.js"></script>
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
      <div class="container" id="divDetail">
          <div class="row">
              <div class="col-md-3"></div>
              <div class="col-md-6">
                <form action="" method="post">
                    <div class="form-row">
                        <label for="inputEmail4" class="pl-5">ค้นหาวันที่</label>
                        <div class="form-group col pl-4">
                            <input class="form-control col-md-12" name="datetimepicker1" id="datetimepicker2" date-picker-example type="text" data-provide="datepicker" data-date-language="th-th" data-date-format="dd/mm/yyyy" value="<?php echo $date ?>" placeholder="xx/xx/xxxx" autocomplete="off">
                        </div>
                        <div class="form-group col">
                            <button type="submit" class="btn btn-info">ค้นหา</button>
                        </div>
                    </div>
                </form>
              </div>
              <div class="col-md-3"></div>
              <br>
              <br>
              <div class="col-md-12">
                    <div class="card">
                        <div class="card-header text-center">
                            <h5>รายชื่อการลงชื่อเข้าใช้ทั้งหมด</h5>
                        </div>
                        <div class="card-body">
                        <div class="table-responsive-md">
                          <table align="center"  class="table">
                                        <thead class="bg-success">
                                            <tr>
                                                <th > <div align="center">ลำดับ </div></th>
                                                <th> <div align="center">ชื่อผู้ใช้ </div></th>
                                                <th > <div align="center">ชื่อ-นามสกุล </div></th>
                                                <th ><div align="center">วันที่ลงชื่อเข้าใช้</div></th>
                                                <th ><div align="center">เวลาลงชื่อเข้าใช้</div></th>
                                                <th > <div align="center">ลบ </div></th>
                                            </tr>
                                        </thead>
                                        <?php
                                        $conn = mysqli_connect("localhost","root","Ice@2019","user_login");
                                        $count = 0;
                                        mysqli_set_charset($conn, "utf8");
                                        if(isset($_POST['datetimepicker1'])){
                                        $datetimepicker1 = $_POST['datetimepicker1'];
                                        $check = "SELECT * FROM `login_date` WHERE `Lastdate` = '$datetimepicker1' ";
                                        $result1 = mysqli_query($conn,$check);
                                        $num=mysqli_num_rows($result1);
                                        if($num > 0){
                                        $sql ="SELECT login_date.Username, user.Firstname, user.Lastname , login_date.Lastdate ,login_date.time FROM login_date INNER JOIN user ON login_date.Username=user.Username WHERE login_date.Lastdate = '$datetimepicker1'  ORDER BY `Lastdate` DESC";
                                        // echo $sql;
                                        $query = mysqli_query($conn,$sql);
                                        
                                        while ($d = mysqli_fetch_array($query)) {
                                        
                                          $count = $count + 1;    
                                        
                                        
                                        ?>
                                        <tr>
                                            
                                            <td><?php echo $count;?></td>
                                            <td><?php echo $d["Username"];?></td>
                                            <td><div align="center"><?php echo $d[1] ." ".$d["Lastname"];?></div></td>
                                            <td><?php echo $d[3];?></td>
                                            <td align="right"><?php echo $d["time"];?></td>
                                            <td align="right"> <a href="./del.php?ID=<?php echo $result[0]; ?>" class="btn btn-danger">ลบ</a></td>
                                        </tr>
                                        <?php
                                        }
                                        }else{
                                            echo "<script type='text/javascript'>";
				                            echo "alert('ขออภัยค่ะ ! ไม่พบการลงชื่อเข้าให้ประจำวันนี้');";
				                            echo "window.location='./login_datebyname.php';";
			                                echo "</script>";
                                        }
                                        }
                                        else{
                                          $sql ="SELECT login_date.Username, user.Firstname, user.Lastname , login_date.Lastdate,login_date.time FROM login_date INNER JOIN user ON login_date.Username=user.Username ORDER BY `Lastdate` DESC ";
                                          // echo $sql;
                                          $query = mysqli_query($conn,$sql);
                                          while ($d = mysqli_fetch_array($query)) {
                                            $count = $count + 1;
                                        ?>
                                        <tr>
                                            
                                            <td><?php echo $count;?></td>
                                            <td><?php echo $d["Username"];?></td>
                                            <td><div align="center"><?php echo $d[1] ." ".$d["Lastname"];?></div></td>
                                            <td><?php echo $d[3];?></td>
                                            <td align="right"><?php echo $d["time"];?></td>
                                            <td align="right"> <a href="./deluser.php?ID=<?php echo $result[0]; ?>" class="btn btn-danger">ลบ</a></td>
                                        </tr>
                                        <?php
                                          }
                                          }
                                        $count++;
                                        ?>
                                    </table>
                                    </div>
                                    <br>
                            Total <?php echo $num_rows;?> Record : <?php echo $num_pages;?> Page :
                            <?php
                            if($prev_page)
                            {
                              echo " <a href='$_SERVER[SCRIPT_NAME]?Page=$prev_page'><< Back</a> ";
                            }
                            
                            for($i=1; $i<=$num_pages; $i++){
                              if($i != $page)
                              {
                                echo "[ <a href='$_SERVER[SCRIPT_NAME]?Page=$i'>$i</a> ]";
                              }
                              else
                              {
                                echo "<b> $i </b>";
                              }
                            }
                            if($page!=$num_pages)
                            {
                              echo " <a href ='$_SERVER[SCRIPT_NAME]?Page=$next_page'>Next>></a> ";
                            }
                            $conn = null;
                            ?>
                            <div class="row">
                                <div class="col-9"></div>
                                <div class="col-3">
                                    <a href="../Exportfile/export.php" class="btn btn-success"><i class="fa fa-file-excel-o" aria-hidden="true"></i> Export to Excel</a>
                                </div>
                            </div>
                        </div>    
                        <div class="card-footer text-muted text-center">

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
</body>
</html>
