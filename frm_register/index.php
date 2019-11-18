<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>สมัครสมาชิกใหม่</title>

    <!-- Font Icon -->
    <link href="https://fonts.googleapis.com/css?family=Kanit&display=swap" rel="stylesheet">

    <!-- Main css -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style6.css">
    <link rel="icon" type="image/png" href="../dist/img/206-2067143_no-wait-emergency-room-medical-bed-icon.png" >
    
</head>
<body>
    <br>
    <h1 class="text-center">สมัครสมาชิกใหม่</h1>
    <br>
    <div class="container mt-2 mb-4">
        <div class="col-sm-8 ml-auto mr-auto" >
            <ul class="nav nav-pills nav-fill mb-1" id="pills-tab" role="tablist">
                <li class="nav-item"> <a class="nav-link active" id="pills-signin-tab" data-toggle="pill" href="#pills-signin" role="tab" aria-controls="pills-signin" aria-selected="true"><p>สำหรับนักเรียนนักศึกษา</p></a> </li>
                <li class="nav-item"> <a class="nav-link" id="pills-signup-tab" data-toggle="pill" href="#pills-signup" role="tab" aria-controls="pills-signup" aria-selected="false"><p>สำหรับคณะครู บุคลากร</p></a> </li>
            </ul>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-signin" role="tabpanel" aria-labelledby="pills-signin-tab">
                <div class="col-sm-12 border border-primary shadow rounded pt-2">
                        <form action="./insert.php" method="post" id="singninFrom">
                            <h2>ข้อมูลทั่วไป</h2>
                            <br>
                            <div class="form-group row text-center">
                                <div class="col-md-6">
                                    <label class="font-weight-bold">ชื่อผู้ใช้ <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="user_name" name="user_name" placeholder="ชื่อผู้ใช้">
                                    <small id="emailHelp" class="form-text">ตัวอย่าง : ชื่อผู้ใช้งานคือ รหัสประจำตัวนักเรียน.</small>
                                </div>
                                <div class="col-md-6">
                                    <label class="font-weight-bold">รหัสผ่าน <span class="text-danger">*</span></label>
                                    <input type="password" class="form-control" id="password" name="password" placeholder="รหัสผ่าน">
                                </div>
                            </div>
                            <div class="form-row text-center">
                                <div class="form-group col-md-2">
                                    <label class="font-weight-bold">คำนำหน้า <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="name_title" name="name_title" placeholder="คำนำหน้า">
                                </div>
                                <div class="form-group col-md-5">
                                    <label class="font-weight-bold">ชื่อ <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="first_name" name="first_name" placeholder="ชื่่อ">
                                </div>
                                <div class="form-group col-md-5">
                                    <label class="font-weight-bold">นามสกุล <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="last_name" name="last_name" placeholder="นามสกุล">
                                </div>
                            </div>
                            <div class="form-row text-center">
                                <div class="form-group col-md-6">
                                    <label class="font-weight-bold">รหัสบัตรประจำตัวประชาชน <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="card_number" name="card_number" placeholder="รหัสบัตรประจำตัวประชาชน">
                                </div>
                                <div class="form-group col-md-6">
                                    <label class="font-weight-bold">วัน/เดือน/ปีเกิด <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="dateofbirth" name="dateofbirth" placeholder="วัน/เดือน/ปีเกิด">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label class="font-weight-bold">แผนกวิชา <span class="text-danger">*</span></label>
                                    <select class="form-control" id="position" name="position">
                                        <option selected></option>
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
                                            <option selected></option>
                                            <option >ปวช.1</option>
                                            <option >ปวช.2</option>
                                            <option >ปวช.3</option>
                                            <option >ปวส.1(ตรง)</option>
                                            <option >ปวส.1(ทวิ)</option>
                                            <option >ปวส.1(ม.6)</option>
                                            <option >ปวส.2(ตรง)</option>
                                            <option >ปวส.2(ม.6)</option>
                                            <option >ปวส.3</option>
                                            <option >ป.ตรี ปีที่ 1</option>
                                            <option >ป.ตรี ปีที่ 2</option>
                                        </select>
                                </div>
                                <div class="form-group col-md-2">
                                    <label class="font-weight-bold">ห้อง <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="room" name="room">
                                </div>
                            </div>
                            <br>
                            <h2>ส่วนสำหรับติดต่อ</h2>
                            <div class="form-row">
                                <label class="font-weight-bold">บ้านเลขที่ <span class="text-danger">*</span></label>
								<input type="text" class="form-control" id="number" name="number" placeholder="บ้านเลขที่" required>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <label class="font-weight-bold">ซอย </label>
                                    <input type="text" class="form-control" id="alley" name="alley">
                                </div>
                                <div class="form-group col-md-4">
                                    <label class="font-weight-bold">ถนน</label>
                                    <input type="text" class="form-control" id="street" name="street">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                <label class="font-weight-bold">จังหวัด <span class="text-danger">*</span></label>
								<select name="province"  id="province" name="province" class="form-control">
									<option id="province_list"	>จังหวัด</option>
								</select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label class="font-weight-bold">อำเภอ <span class="text-danger">*</span></label>
									<select name="amphur"  id="amphur" name="amphur" class="form-control">
										<option name="amphur">อำเภอ</option>
									</select>
                                    <!-- <input type="text" name="zipcode"  id="zipcode" class="form-control" value="">	 -->
								</div>
                                <div class="form-group col-md-3">
                                    <label class="font-weight-bold">รหัสไปรษณีย์ <span class="text-danger">*</span></label>
                                    <input type="text" name="zipcode"  id="zipcode" class="form-control" value="">
									<!-- <select name="zipcode"  id="zipcode" class="form-control">
										<option id="zipcode">รหัสไปรษณีย์</option>
									</select> -->
                                </div>
                                <div class="form-row col-md-3">
                                    <label class="font-weight-bold">ตำบล <span class="text-danger">*</span></label>
									<select  id="district"	name="district" class="form-control">
                            			<option>ตำบล</option>
                        			</select>
							    </div>			
							</div><br>
                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <label class="font-weight-bold">เบอร์โทรศัพท์ <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="phone" id="phone" placeholder="เบอร์โทรศัพท์" required>
                                </div>
                                <div class="form-group col-md-4">
                                    <label class="font-weight-bold">Email <span class="text-danger">*</span></label>
                                    <input type="text" name="your_email" id="your_email" class="form-control"  placeholder="อีเมลของคุณ">
                                </div>
                            </div>
                            <!-- <div class="form-group">
                                <input type="submit" name="submit" value="สมัครสมาชิก" class="btn btn-block btn-primary">
                            </div> -->
                            <div class="form-row text-center">
                                <div class="col-md-3"></div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="submit" name="signupsubmit" value="สมัครสมาชิก" class="btn btn-block btn-primary">
                                    </div>
                                    <div class="form-group">
                                        <a href="../Login/index.php" class="btn btn-block btn-warning">ยกเลิก</a>
                                    </div>
                                </div>
                                <div class="col-md-3"></div>
                            </div>
                        </form>
                    </div>
            </div>
            <div class="tab-pane fade" id="pills-signup" role="tabpanel" aria-labelledby="pills-signup-tab">
                <div class="col-sm-12 border border-primary shadow rounded pt-2">
                        <form action="./insert.php" method="post" id="singnupFrom">
                        <h2>ข้อมูลทั่วไป</h2>
                            <br>
                            <div class="form-group row text-center">
                                <div class="col-md-6">
                                    <label class="font-weight-bold">ชื่อผู้ใช้ <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="user_name1" name="user_name1" placeholder="ชื่อผู้ใช้">
                                    <small id="emailHelp" class="form-text">ตัวอย่าง : ชื่อผู้ใช้งานคือ รหัสบัตรประจำตัวประชาชน.</small>
                                </div>
                                <div class="col-md-6">
                                    <label class="font-weight-bold">รหัสผ่าน <span class="text-danger">*</span></label>
                                    <input type="password" class="form-control" id="password1" name="password1" placeholder="รหัสผ่าน">
                                </div>
                            </div>
                            <div class="form-row text-center">
                                <div class="form-group col-md-2">
                                    <label class="font-weight-bold">คำนำหน้า <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="name_title1" name="name_title1" placeholder="คำนำหน้า">
                                </div>
                                <div class="form-group col-md-5">
                                    <label class="font-weight-bold">ชื่อ <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="first_name1" name="first_name1" placeholder="ชื่่อ">
                                </div>
                                <div class="form-group col-md-5">
                                    <label class="font-weight-bold">นามสกุล <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="last_name1" name="last_name1" placeholder="นามสกุล">
                                </div>
                            </div>
                            <div class="form-row text-center">
                                <div class="form-group col-md-6">
                                    <label class="font-weight-bold">รหัสบัตรประจำตัวประชาชน <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="card_number" name="card_number1" placeholder="รหัสบัตรประจำตัวประชาชน">
                                </div>
                                <div class="form-group col-md-6">
                                    <label class="font-weight-bold">วัน/เดือน/ปีเกิด <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="dateofbirth" name="dateofbirth1" placeholder="วัน/เดือน/ปีเกิด">
                                </div>
                            </div>
                            <br>
                            <h2>ส่วนสำหรับติดต่อ</h2>
                            <div class="form-row">
                                <label class="font-weight-bold">บ้านเลขที่ <span class="text-danger">*</span></label>
								<input type="text" name="number1" class="form-control" id="number1" placeholder="บ้านเลขที่" required>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <label class="font-weight-bold">ซอย </label>
                                    <input type="text" name="alley1" class="form-control" id="alley1">
                                </div>
                                <div class="form-group col-md-4">
                                    <label class="font-weight-bold">ถนน</label>
                                    <input type="text" name="street1" class="form-control" id="street1">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                <label class="font-weight-bold">จังหวัด <span class="text-danger">*</span></label>
								<select name="province1"  id="province1" class="form-control">
									<option id="province_list"	>จังหวัด</option>
								</select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label class="font-weight-bold">อำเภอ <span class="text-danger">*</span></label>
									<select name="amphur1"  id="amphur1" class="form-control">
										<option id="amphur_list">อำเภอ</option>
									</select>	
								</div>
                                <div class="form-group col-md-3">
                                    <label class="font-weight-bold">รหัสไปรษณีย์ <span class="text-danger">*</span></label>
                                    <input type="text" name="zipcode1"  id="zipcode1" class="form-control" value="">
									<!-- <select name="zipcode"  id="zipcode" class="form-control">
										<option id="zipcode">รหัสไปรษณีย์</option>
									</select> -->
                                </div>
                                <div class="form-row col-md-3">
                                    <label class="font-weight-bold">ตำบล <span class="text-danger">*</span></label>
									<select  id="district1"	name="district1" class="form-control">
                            			<option>ตำบล</option>
                        			</select>
							    </div>			
							</div><br>
                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <label class="font-weight-bold">เบอร์โทรศัพท์ <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="phone1" id="phone1" placeholder="เบอร์โทรศัพท์" required>
                                </div>
                                <div class="form-group col-md-4">
                                    <label class="font-weight-bold">Email <span class="text-danger">*</span></label>
                                    <input type="text" name="your_email1" id="your_email1" class="form-control"  placeholder="อีเมลของคุณ">
                                </div>
                            </div>
                                <div class="form-row text-center">
                                    <div class="col-md-3"></div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="submit" name="signupsubmit" value="สมัครสมาชิก" class="btn btn-block btn-primary">
                                        </div>
                                        <div class="form-group">
                                            <a href="../Login/index.php" class="btn btn-block btn-warning">ยกเลิก</a>
                                        </div>
                                    </div>
                                    <div class="col-md-3"></div>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

  <!-- Modal -->
  <div class="modal fade" id="forgotPass" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <form method="post" id="forgotpassForm">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Forgot Password</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
          </div>
          <div class="modal-body">
            <div class="form-group">
              <label>Email <span class="text-danger">*</span></label>
              <input type="email" name="forgotemail" id="forgotemail" class="form-control" placeholder="Enter your valid email..." required>
            </div>
            <div class="form-group">
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Sign In</button>
            <button type="submit" name="forgotPass" class="btn btn-primary"><i class="fa fa-envelope"></i> Send Request</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script> -->

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

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