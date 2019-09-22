<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>สมัครสมาชิกใหม่</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<!-- <link rel="stylesheet" type="text/css" href="css/montserrat-font.css"> -->
	<link href="https://fonts.googleapis.com/css?family=Kanit&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
	<!-- Main Style Css -->
	<link rel="stylesheet" href="css/style.css"/>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	
	<!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.2/css/select2.min.css" rel="stylesheet" /> -->
</head>
<body class="form-v10">
	<div class="container text-center" style="font-family: 'Kanit', sans-serif;">
		<div  style="width:90%;">
			<div class="page-header">
				<h2>สมัครสมาชิกใหม่</h2>
			</div>
			<div class="card text-center">
				<div class="card-header">
					<ul class="nav nav-tabs card-header-tabs">
						<li class="nav-item">
							<a class="nav-link active" data-toggle="tab" href="#insta">สำหรับนักเรียน นักศึกษา</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-toggle="tab" href="#face">สำหรับครู บุคลากร</a>
						</li>
					</ul>
				</div>
				<div class="tab-content card-body">
					<div id="insta" class="tab-pane active">
						 <div class="page-content">
							<div class="form-v10-content">
								<form class="form-detail" action="./insert.php" method="post" id="myform">
									<div class="form-left">
										<h2>ข้อมูลทั่วไป</h2>
										<div class="form-row">
											<div class="form-row form-row-1">
												<label>ชื่อผู้ใช้</label>
												<input type="text" name="user_name" id="first_name" class="input-text" placeholder="รหัสนักศึกษา" required>
											</div>
											<div class="form-row form-row-2">
												<label>รหัสผ่าน</label>
												<input type="text" name="password" id="last_name" class="input-text" placeholder="xx/xx/xxxx" required>
											</div>
											
										</div>
										<div class="form-group">
											<div class="form-row form-row-1">
												<input type="text" name="first_name" id="first_name" class="input-text" placeholder="ชื่อ" required>
											</div>
											<div class="form-row form-row-2">
												<input type="text" name="last_name" id="last_name" class="input-text" placeholder="นามสกุล" required>
											</div>
										</div>
										<div class="form-row">
											<label for="">แผนกวิชา</label>
											<select name="position">
												<option value="position">แผนกวิชาช่างยนต์</option>
												<option value="position">แผนกวิชาช่างกลโรงงาน</option>
												<option value="position">แผนกวิชาช่างเชื่อมโลหะ</option>
												<option value="position">แผนกวิชาช่างไฟฟ้า</option>
												<option value="position">แผนกวิชาช่างอิเล็กทรอนิกส์</option>
												<option value="position">แผนกวิชาช่างเมคคาทรอนิกส์</option>
												<option value="position">แผนกวิชาช่างก่อสร้าง</option>
												<option value="position">แผนกวิชาช่างสถาปัตยกรรม</option>
												<option value="position">แผนกวิชาช่างเทคนิคพื้นฐาน</option>
												<option value="position">แผนกวิชาช่างเทคนิคอุตสหกรรม</option>
												<option value="position">แผนกวิชาช่างเทคโนโลยีสารสนเทศ</option>
												<option value="position">แผนกวิชาช่างเทคนิคกายอุปกรณ์</option>
											</select>
											<span class="select-btn">
												<i class="zmdi zmdi-chevron-down"></i>
											</span>
										</div>
										<div class="form-group">
											<div class="form-row form-row-3">
												<select name="class">
														<option value="class">ปวช.1</option>
														<option value="class">ปวช.2</option>
														<option value="class">ปวช.3</option>
														<option value="class">ปวส.1</option>
														<option value="class">ปวส.2</option>
												</select>
												<span class="select-btn">
													<i class="zmdi zmdi-chevron-down"></i>
												</span>
											</div>
											<div class="form-row form-row-2">
												<input type="text" name="room" class="room" id="room" placeholder="ห้อง" required>
											</div>
										</div>
										
									</div>
									<div class="form-right">
										<h2>ส่วนสำหรับติดต่อ</h2>
										<div class="form-row">
											<input type="text" name="number" class="number" id="number" placeholder="บ้านเลขที่" required>
										</div>
										<div class="form-group">
											<div class="form-row form-row-1">
												<input type="text" name="alley" id="alley" class="input-text" placeholder="ซอย" >
											</div>
											<div class="form-row form-row-1.5">
												<input type="text" name="street" id="street" class="input-text" placeholder="ถนน" >
											</div>
										</div>
										<div class="form-row form-row-2">
											<select  id="district"	name="district">
                            					<option> -- Select --</option>
                        					</select>
											<span class="select-btn">
												<i class="zmdi zmdi-chevron-down"></i>
											</span>
										</div>
										<div class="form-group">
											<div class="form-row form-row-1.5">
												<select name="zipcode"  id="zipcode">
													<option id="zipcode">รหัสไปรษณีย์</option>
												</select>
											</div>
											<div class="form-row form-row-1">
												<select name="amphur"  id="amphur">
													<option id="amphur_list"> -- Select --</option>
												</select>
												<span class="select-btn">
													<i class="zmdi zmdi-chevron-down"></i>
												</span>
											</div>
										</div>
										<div class="form-row">
											<select name="province"  id="province">
												<option id="province_list"	>จังหวัด</option>
											</select>
											<span class="select-btn">
												<i class="zmdi zmdi-chevron-down"></i>
											</span>
										</div>
										<div class="form-group">
											<div class="form-row form-row-1">
												<input type="text" name="phone" class="phone" id="phone" placeholder="เบอร์โทรศัพท์" required>
											</div>
										</div>
										<div class="form-row">
											<input type="text" name="your_email" id="your_email" class="input-text" required pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}" placeholder="อีเมลของคุณ">
										</div>
										
										<div class="form-row-last">
											<input type="submit" name="register" class="register" value="สมัครสมาชิก">
										</div>
									</div>
								</form>
							</div>
						</div> 

					</div>
					<div id="face" class="tab-pane">Facebook</div>
					<div id="twit" class="tab-pane">Twitter</div>
				</div>
			</div>
			<!-- END WIDGET 2 -->
		</div>
	</div>

	
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
                              $("#province").append("<option value='"+ value.id +"'> " + value.name + "</option>");
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
                              $("#district").append("<option value='" + value.DISTRICT_CODE + "'> " + value.DISTRICT_NAME+ "</option>");
                              $("#zipcode").append("<option value='" + value.id + "'> " + value.name  + "</option>");
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