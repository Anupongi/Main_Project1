<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="stylesheet" href="./dist/css/login1.css">
<link href="https://fonts.googleapis.com/css?family=Kanit&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="http://code.jquery.com/jquery-1.10.2.js"></script>
<title>ระบบบริหารจัดการห้องพยาบาล | Log in</title>
<style>
.field-icon {
  float: right;
  margin-left: -25px;
  margin-top: -35px;
  position: relative;
  z-index: 2;
  font-size: 30px;
}
</style>
</head>
<body>
<?
session_start();
?>
<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="./img/ห้องพยาบาล_๑๗๑๒๐๕_0008.jpg" style="width:100%;">
  
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="http://www.rmutk.ac.th/wp-content/uploads/2017/10/%E0%B8%AB%E0%B9%89%E0%B8%AD%E0%B8%87%E0%B8%9E%E0%B8%A2%E0%B8%B2%E0%B8%9A%E0%B8%B2%E0%B8%A5_%E0%B9%91%E0%B9%97%E0%B9%91%E0%B9%92%E0%B9%90%E0%B9%95_0009.jpg" style="width:100%;">
  
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="./img/ห้องพยาบาล_๑๗๑๒๐๕_0008.jpg" style="width:100%;">
  
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>
<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 5000); // Change image every 3 seconds
}
</script>
  <div class="login_page">
    <div class="login-box">
      <div class="login-logo">
        <a href="#"><b>ระบบบริหารจัดการห้องพยาบาลวิทยาลัยเทคนิคเชียงใหม่</b></a>
      </div>
    </div> <!-- /.login-box -->
    <div class="card-login">
    <div class="card-body login-card-body">
      <p class="login-box-msg">กรุณาลงชื่อเข้าใช้งานก่อนใช้งาน</p>
      
      <?php 
        if(isset($_GET['state'])){
          echo "<p class='login-box-msg'>เซลชันของคุณหมดเวลาแล้ว กรุณาเข้าสู่ระบบใหม่อีกครั้ง</p>";
        }
      ?>
      <form name="form1" method="post" action="check.php">
        <div class="form-group has-feedback">
          <input type="text" class="form-control" placeholder="ชื่อผู้ใช้" name="username_log">
          <span class="fa fa-envelope form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
          <input id="password-field" type="password" class="form-control" name="password_log" placeholder="รหัสผ่าน">
          <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
          <span class="fa fa-lock form-control-feedback"></span>
        </div>
        <div class="row">
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" name="Submit" class="button" style="vertical-align:middle"><span>ลงชื่อเข้าใช้ </span></button>
          </div>
          <!-- /.col -->
        </div>
      </form>
     
      <p class="mb-0">
        <a href="./frm_register/index.php" class="text-center">สมัครสมาชิกใหม่ >>></a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
      
    </div>

    <div class="card-usesystem">
      <div class="card-body login-card-body">
        <p class="login-box-msg">การเข้าใช้งานระบบ</p>
        <h4><b>นักเรียนนักศึกษา</b></h4> 
        <p>เข้าสู่ระบบโดยใช้ ชื่อผู้ใช้งานคือ รหัสประจำตัวนักเรียน
รหัสผ่านคือ รหัสนักศึกษา เช่น 61390100xx</p> 
        <h4><b>คณะครู อาจารย์ บุคลากร</b></h4> 
        <p>เข้าสู่ระบบโดยใช้ ชื่อผู้ใช้งานคือ รหัสประจำตัวประชาชนของคณะครู อาจารย์ บุคลากร
รหัสผ่านคือ รหัสนักศึกษา เช่น 61390100xx</p> 
      </div>
    </div>
    
    

  
</div> <!-- /.login_page -->

<script>
$(".toggle-password").click(function() {
    $(this).toggleClass("fa-eye fa-eye-slash");
    var input = $($(this).attr("toggle"));
    if (input.attr("type") == "password") {
      input.attr("type", "text");
    } else {
      input.attr("type", "password");
    }
  });
</script>

</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>