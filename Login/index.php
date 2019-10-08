<!DOCTYPE html>
<html lang="en">
<head>
	<title>ระบบบริหารจัดการห้องพยาบาล | Log in</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
<link rel="icon" type="image/png" href="../img/206-2067143_no-wait-emergency-room-medical-bed-icon.png" >
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="./css/util.css">
	<link rel="stylesheet" type="text/css" href="./css/main1.css">
<!--===============================================================================================-->
	<link href="https://fonts.googleapis.com/css?family=Kanit&display=swap" rel="stylesheet">
	<link rel="icon" type="image/png" href="../dist/img/206-2067143_no-wait-emergency-room-medical-bed-icon.png" >
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@8.18.1/dist/sweetalert2.min.css">
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8.18.1/dist/sweetalert2.min.js"></script>  

</head>
<body style="background-color: #666666; font-family: 'Kanit', sans-serif;">
<?
session_start();
?>	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form validate-form" action="./check.php" method="POST" style="padding: 50px 55px 55px 55px;">
					<span class="login100-form-title p-b-40" style="font-family: 'Kanit', sans-serif;">
						ห้องพยาบาล วิทยาลัยเทคนิคเชียงใหม่
					</span>
					
					<?php 
        				if(isset($_GET['state'])){
          				echo "<p class='login-box-msg' style='font-family: Kanit, sans-serif;font-size:16px;'>เซลชันของคุณหมดเวลาแล้ว กรุณาเข้าสู่ระบบใหม่อีกครั้ง</p>";
        				}
      				?>
					<div class="wrap-input100 validate-input" data-validate = "ชื่อผู้ใช้: xxxxxxxxxx">
						<input class="input100" type="text" name="username_log" id="username_log">
						<span class="focus-input100"></span>
						<span class="label-input100">Username</span>
					</div>
					
					
					<div class="wrap-input100 validate-input" data-validate="ต้องการรหัสผ่าน">
						<input class="input100" type="password" name="password_log" id="password_log">
						<span class="focus-input100"></span>
						<span class="label-input100">Password</span>
					</div>

					<div class="flex-sb-m w-full p-t-3 p-b-32">
						<div class="contact100-form-checkbox">
							<!-- <input class="" id="ckb1" type="hidden" name="remember-me"> -->
							<!--<label class="label-checkbox100" for="ckb1">
								 Remember me 
							</label>-->
						</div>

						<div>
							<a href="#" class="txt1" data-toggle="modal" data-target="#exampleModal" style="font-family: 'Kanit', sans-serif;font-size:16px;">
								 วิธีการเข้าใช้งานระบบ ?
							</a>
							<!-- Modal -->
							<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
								<div class="modal-dialog" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title" id="exampleModalLabel">วิธีการเข้าใช้งานระบบ</h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body" >
										<h4><b>นักเรียนนักศึกษา</b></h4> 
        								<p style="font-family: 'Kanit', sans-serif;">เข้าสู่ระบบโดยใช้ ชื่อผู้ใช้งานคือ รหัสประจำตัวนักเรียน
										รหัสผ่านคือ รหัสนักศึกษา เช่น 61xxxxxxxx</p><br>  
        								<h4><b>คณะครู อาจารย์ บุคลากร</b></h4>
										
        								<p style="font-family: 'Kanit', sans-serif;">เข้าสู่ระบบโดยใช้ ชื่อผู้ใช้งานคือ รหัสประจำตัวประชาชนของคณะครู อาจารย์ บุคลากร
										รหัสผ่านคือ รหัสประจำตัวประชาชน เช่น 15xxxxxxxxxxx</p>
										<br>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<script>
						$('#myModal').on('shown.bs.modal', function () {
  						$('#myInput').trigger('focus')
						})
					</script>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn submit">
							Login
						</button>
					</div>
					
					<div class="text-center p-t-46 p-b-20">
						<span class="txt2" style="font-family: 'Kanit', sans-serif; font-size:16px;color:black;">
							หรือ สมัครสมาชิกใหม่
						</span>
					</div>

					<div class="login100-form-social flex-c-m">
						<a href="../frm_register/index.php" class="login100-form-social-item flex-c-m bg2 m-r-5">
							<i class="fa fa-user-plus" aria-hidden="true"></i>
						</a>

						
					</div>
				</div>

				<div class="login100-more" style="background-image: url('../dist/img/ห้องพยาบาล_๑๗๑๒๐๕_0008.jpg');">
				</div>
			</div>
		</div>
	</div>
	
	

	
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
	<script>
  		$(document).ready(function() {
			$(".submit").click(function() {
				var Username = $('#username_log').val();
				var Password = $('#password_log').val();
				var json = {
					username_log: Username,
					password_log: Password,
				};
        		console.log(json);
				// $.ajax({
				// 	type: "post",
				// 	url: "./check_login.php",
				// 	data: json,
				// 	success: function(response) {
            	// if (response == 1) {
				// 			window.location.href = "../admin/admin_index.php";
				// 		}else{
				// 			Swal.fire({
				// 				type: 'error',
				// 				title: 'ข้อความจากระบบ',
				// 				text: 'Username หรือ Password ไม่ถูกต้อง',
				// 				confirmButtonText: 'ยกเลิก',
    			// 				confirmButtonColor: "#DD6B55"
				// 			})
				// 		}
					// }
				// });
			});
		});
  
  	</script>
</body>
</html>