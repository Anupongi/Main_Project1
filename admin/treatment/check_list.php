<?php
session_start(); 
// $connect = mysqli_connect("localhost", "root", "", "user_login");
// if(isset($_POST["id"]))
// {
// $query = "SELECT * FROM user ORDER BY Username ASC";
// $result = mysqli_query($connect, $query);
// while($row = mysqli_fetch_array($result))
//  {

//  }
// }
$connect = mysqli_connect("localhost", "root", "itcmtc2019", "treatment");
$id = $_GET['ID'];
mysqli_set_charset($connect,"utf8");
$sql = "SELECT * FROM `tb_treatment` WHERE `id` = $id" ;
$result = mysqli_query($connect, $sql);
$array = mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ข้อมูลเบื้องต้นเพิ่มเติม</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Kanit&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../../plugins/font-awesome/css/font-awesome.min.css">
</head>
<body style="font-family: 'Kanit', sans-serif;">
    <div class="container">
        <div class="row">
            <div class="col-1"></div>
            <div class="col-10">
                <div class="card">
                    <h5 class="card-header text-white bg-success mb-3">ข้อมูลเบื้องต้นเพิ่มเติม</h5>
                    <div class="card-body">
                        <form action="" method="POST">
                                <h3>ข้อมูลเบื้องต้น</h3> 
                                <div class="form-row">
                                    <div class="form-group col-md-3">
                                        <label for="inputEmail4">รหัสนักศึกษา</label>
                                        <input type="text" class="form-control" name="std_id" placeholder="รหัสนักศึกษา" value="<?php echo $array[1]?>"  readonly>
                                        <input type="hidden" name="ID" value="<?php echo $id ?>">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="inputPassword4">ชื่อ</label>
                                        <input type="text" class="form-control" name="firstname" placeholder="ชื่อ" value="<?php echo $array[2]?>"  readonly>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="inputPassword4">นามสกุล</label>
                                        <input type="text" class="form-control" name="lastname" placeholder="นามสกุล" value="<?php echo $array[3]?>"  readonly>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="inputPassword4">รหัสบัตรประจำตัวประชาชน</label>
                                        <input type="text" class="form-control" name="card_id" placeholder="รหัสบัตรประจำตัวประชาชน" value="<?php echo $array[4]?>" readonly>
                                    </div>
                                </div>
                                <div class="form-row">
                                  <div class="form-group col-md-2">
                                      <label for="inputAddress">วัน/เดือน/ปีเกิด</label>
                                      <div class="md-form">
                                        <input class="form-control" name="dateofbirth" type="text" value="<?php echo $array[5]?>" readonly>
                                      </div>
                                  </div>
                                  <div class="form-group col-md-1">
                                      <label for="inputAddress">สัญชาติ</label>
                                      <input type="text" class="form-control" name="Nationality" value="<?php echo $array[6]?>" readonly>
                                  </div>
                                  <div class="form-group col-md-1">
                                      <label for="inputAddress">เชื้อชาติ</label>
                                      <input type="text" class="form-control" name="Origin" value="<?php echo $array[7]?>" readonly>
                                  </div>
                                  <div class="form-group col-md-1">
                                      <label for="inputAddress">ศาสนา</label>
                                      <input type="text" class="form-control" name="Religion" value="<?php echo $array[8]?>" readonly>
                                  </div>
                                  <div class="form-group col-md-2">
                                      <label for="inputAddress">กรุ๊ปเลือด</label>
                                      <input name="Blood_type" class="form-control" value="<?php echo $array[9]?>" readonly>
                                  </div>
                                  <div class="form-group col-md-1">
                                      <label for="inputAddress">นํ้าหนัก</label>
                                      <input type="text" class="form-control" name="Weight" value="<?php echo $array[10]?>" readonly>
                                  </div>
                                  <div class="form-group col-md-1">
                                      <label for="inputAddress">ส่วนสูง</label>
                                      <input type="text" class="form-control" name="Height" value="<?php echo $array[11]?>" readonly>
                                  </div>
                                  <div class="form-group col-md-2">
                                      <label for="inputAddress">ความดันโลหิต</label>
                                      <input type="text" class="form-control" name="Blood_pressure" value="<?php echo $array[12]?>" readonly>
                                  </div>
                                </div>
                                <div class="form-row">
                                  <div class="form-group col-md-3">
                                    <label for="inputAddress">เบอร์โทรศัพท์ที่สามารถติดต่อได้</label>
                                    <input type="text" class="form-control" name="phone" value="<?php echo $array[13]?>" readonly> 
                                  </div>
                                  <div class="form-group col-md-3">
                                    <label for="inputAddress">เบอร์โทรศัพท์ผู้ปกครอง</label>
                                    <input type="text" class="form-control" name="phonep" value="<?php echo $array[14]?>" readonly> 
                                  </div>
                                </div>
                                <br>
                                <h3>รายละเอียดการรักษา</h3>  
                                <div class="form-row">
                                  <div class="form-group col-md-7">
                                    <label for="inputAddress2">อาการเบื้องต้น</label>
                                    <textarea class="form-control" name="Sick" rows="3"  readonly><?php echo $array[15]?></textarea>
                                  </div>
                                  <div class="form-group col-md-4">
                                    <label for="inputCity">ยาที่แพ้</label>
                                    <input type="text" class="form-control" name="Allergic_medication" value="<?php echo $array[16]?>" readonly>
                                  </div>
                                </div>
                                <div class="form-row">
                                  <div class="form-group col-md-7">
                                    <label for="inputCity">การรักษา</label>
                                    <textarea class="form-control" name="Treatment" rows="3" value="" readonly><?php echo $array[17]?></textarea>
                                  </div>
                                </div>
                                <div class="form-row">
                                  <div class="form-group col-md-2">
                                    <div id="frm_txt" >
                                      <label for="inputCity">เตียงที่</label>
                                      <input type="text" class="form-control" name="Bed" value="<?php echo $array[18]?>" readonly>
                                    </div>
                                  </div>
                                </div>
                                <div id="frm_txt1" >
                                <div class="form-row">
                                  <div class="form-group col-md-4">
                                      <label for="inputCity">ยา</label>
                                      <input type="text" class="form-control" name="med_name" value="<?php echo $array[19]?>" readonly>
                                  </div>
                                  <div class="form-group col-md-1">
                                      <label for="inputCity">จำนวน</label>
                                      <input type="text" class="form-control" name="total" value="<?php echo $array[20]?>" readonly>
                                  </div>
                                  <div class="form-group col-md-2">
                                      <label for="inputCity">จำนวน</label>
                                      <input type="text" class="form-control" name="med_type" value="<?php echo $array[21]?>" readonly>
                                  </div>
                                </div>
                                </div>
                                <div id="frm_txt2" >
                                  <div class="form-row">
                                    <div class="form-group col-md-4">
                                      <label for="inputCity">ชื่อโรงพยาบาล</label>
                                      <input type="text" class="form-control" name="Hospital_name" value="<?php echo $array[22]?>" readonly>
                                    </div>
                                    <div class="form-group col-md-4">
                                      <label for="inputCity">เจ้าหน้าที่ผู้ดูแล</label>
                                      <input type="text" class="form-control" name="Staff" value="<?php echo $array[23]?>" readonly>
                                    </div>
                                  </div>
                                </div>
                                  <div class="row">
                                    <div class="col-md-4"></div>
                                    <div class="col-md-4">
                                      <div class="form-row">
                                        <div class="col-md-4">
                                          <button type="button" class="btn btn-success" onclick="window.location.href='./treatment_list1.php'">ตกลง</button>
                                        </div>
                                        <br>
                                        <!-- <div class="col-md-8">
                                          <a href="./getid.php?ID=<?php echo $array[0]; ?>" class="btn btn-danger"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> Export to PDF</a>
                                        </div> -->
                                      </div>
                                    </div>
                                    <div class="col-md-3"></div>
                                  </div>
                            </form> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>