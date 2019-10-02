<?php
session_start(); 
$std_id = $_POST['std_id'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$card_id = $_POST['card_id'];
$dateofbirth = $_POST['dateofbirth'];
$Nationality = $_POST['Nationality'];
$Origin = $_POST['Origin'];
$Religion = $_POST['Religion'];
$Blood_type = $_POST['Blood_type'];
$Weight = $_POST['Weight'];
$Height = $_POST['Height'];
$Blood_pressure = $_POST['Blood_pressure'];
$phone = $_POST['phone'];
$phonep = $_POST['phonep'];
$Sick = $_POST['Sick'];
$Allergic_medication = $_POST['Allergic_medication'];
$Treatment = $_POST['Treatment'];
$Bed = $_POST['Bed'];
$med_name = $_POST['med_name'];
$total = $_POST['total'];
$med_type = $_POST['med_type'];
$Hospital_name = $_POST['Hospital_name'];
$Staff = $_POST['Staff'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ตรวจสอบข้อมูล</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Kanit&display=swap" rel="stylesheet">
</head>
<body style="font-family: 'Kanit', sans-serif;">
    <div class="container">
        <div class="row">
            <div class="col-1"></div>
            <div class="col-10">
                <div class="card">
                    <h5 class="card-header text-white bg-success mb-3">ตรวจสอบข้อมูล</h5>
                    <div class="card-body">
                        <form action="./save.php" method="POST">
                                <h3>ข้อมูลเบื้องต้น</h3> 
                                <div class="form-row">
                                    <div class="form-group col-md-3">
                                        <label for="inputEmail4">รหัสนักศึกษา</label>
                                        <input type="text" class="form-control" name="std_id" placeholder="รหัสนักศึกษา" value="<?php echo $std_id?>">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="inputPassword4">ชื่อ</label>
                                        <input type="text" class="form-control" name="firstname" placeholder="ชื่อ" value="<?php echo $firstname?>">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="inputPassword4">นามสกุล</label>
                                        <input type="text" class="form-control" name="lastname" placeholder="นามสกุล" value="<?php echo $lastname?>">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="inputPassword4">รหัสบัตรประจำตัวประชาชน</label>
                                        <input type="text" class="form-control" name="card_id" placeholder="รหัสบัตรประจำตัวประชาชน" value="<?php echo $card_id?>">
                                    </div>
                                </div>
                                <div class="form-row">
                                  <div class="form-group col-md-2">
                                      <label for="inputAddress">วัน/เดือน/ปีเกิด</label>
                                      <div class="md-form">
                                        <input class="form-control" name="dateofbirth" type="text" value="<?php echo $dateofbirth?>">
                                      </div>
                                  </div>
                                  <div class="form-group col-md-1">
                                      <label for="inputAddress">สัญชาติ</label>
                                      <input type="text" class="form-control" name="Nationality" value="<?php echo $Nationality?>">
                                  </div>
                                  <div class="form-group col-md-1">
                                      <label for="inputAddress">เชื้อชาติ</label>
                                      <input type="text" class="form-control" name="Origin" value="<?php echo $Origin?>">
                                  </div>
                                  <div class="form-group col-md-1">
                                      <label for="inputAddress">ศาสนา</label>
                                      <input type="text" class="form-control" name="Religion" value="<?php echo $Religion?>">
                                  </div>
                                  <div class="form-group col-md-2">
                                      <label for="inputAddress">กรุ๊ปเลือด</label>
                                      <input name="Blood_type" class="form-control" value="<?php echo $Blood_type?>">
                                  </div>
                                  <div class="form-group col-md-1">
                                      <label for="inputAddress">นํ้าหนัก</label>
                                      <input type="text" class="form-control" name="Weight" value="<?php echo $Weight?>">
                                  </div>
                                  <div class="form-group col-md-1">
                                      <label for="inputAddress">ส่วนสูง</label>
                                      <input type="text" class="form-control" name="Height" value="<?php echo $Height?>">
                                  </div>
                                  <div class="form-group col-md-2">
                                      <label for="inputAddress">ความดันโลหิต</label>
                                      <input type="text" class="form-control" name="Blood_pressure" value="<?php echo $Blood_pressure?>">
                                  </div>
                                </div>
                                <div class="form-row">
                                  <div class="form-group col-md-3">
                                    <label for="inputAddress">เบอร์โทรศัพท์ที่สามารถติดต่อได้</label>
                                    <input type="text" class="form-control" name="phone" value="<?php echo $phone?>"> 
                                  </div>
                                  <div class="form-group col-md-3">
                                    <label for="inputAddress">เบอร์โทรศัพท์ผู้ปกครอง</label>
                                    <input type="text" class="form-control" name="phonep" value="<?php echo $phonep?>"> 
                                  </div>
                                </div>
                                <br>
                                <h3>รายละเอียดการรักษา</h3>  
                                <div class="form-row">
                                  <div class="form-group col-md-7">
                                    <label for="inputAddress2">อาการเบื้องต้น</label>
                                    <textarea class="form-control" name="Sick" rows="3" ><?php echo $Sick?></textarea>
                                  </div>
                                  <div class="form-group col-md-4">
                                    <label for="inputCity">ยาที่แพ้</label>
                                    <input type="text" class="form-control" name="Allergic_medication" value="<?php echo $Allergic_medication?>">
                                  </div>
                                </div>
                                <div class="form-row">
                                  <div class="form-group col-md-7">
                                    <label for="inputCity">การรักษา</label>
                                    <textarea class="form-control" name="Treatment" rows="3"><?php echo $Treatment?></textarea>
                                  </div>
                                </div>
                                <div class="form-row">
                                  <div class="form-group col-md-2">
                                    <div id="frm_txt" >
                                      <label for="inputCity">เตียงที่</label>
                                      <input type="text" class="form-control" name="Bed" value="<?php echo $Bed?>">
                                    </div>
                                  </div>
                                </div>
                                <div id="frm_txt1" >
                                <div class="form-row">
                                  <div class="form-group col-md-4">
                                      <label for="inputCity">ยา</label>
                                      <input type="text" class="form-control" name="med_name" value="<?php echo $med_name?>">
                                  </div>
                                  <div class="form-group col-md-1">
                                      <label for="inputCity">จำนวน</label>
                                      <input type="text" class="form-control" name="total" value="<?php echo $total?>">
                                  </div>
                                  <div class="form-group col-md-2">
                                      <label for="inputCity">จำนวน</label>
                                      <input type="text" class="form-control" name="med_type" value="<?php echo $med_type?>">
                                  </div>
                                </div>
                                </div>
                                <div id="frm_txt2" >
                                  <div class="form-row">
                                    <div class="form-group col-md-4">
                                      <label for="inputCity">ชื่อโรงพยาบาล</label>
                                      <input type="text" class="form-control" name="Hospital_name" value="<?php echo $Hospital_name?>">
                                    </div>
                                    <div class="form-group col-md-4">
                                      <label for="inputCity">เจ้าหน้าที่ผู้ดูแล</label>
                                      <input type="text" class="form-control" name="Staff" value="<?php echo $Staff?>">
                                    </div>
                                  </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-4"></div> 
                                    <div class="form-group col-md-4 text-center">    
                                      <button type="submit" class="btn btn-success">ยืนยัน</button>
                                      <button type="button" class="btn btn-warning">ยกเลิก</button>
                                    </div>
                                    <div class="form-group col-md-4"></div> 
                                </div>
                            </form> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>