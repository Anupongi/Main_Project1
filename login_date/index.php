<?php 
//index.php
$connect = mysqli_connect("localhost", "root", "", "user_login");
$query = "SELECT * FROM user ORDER BY Username ASC";
$result = mysqli_query($connect, $query);
?>
<!DOCTYPE html>
<html>
 <head>
  <title>ระบบลงชื่อเข้าใช้ห้องพยาบาลวิทยาลัยเทคนิคเชียงใหม่</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" /> -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> -->
  <link href="https://fonts.googleapis.com/css?family=Kanit&display=swap" rel="stylesheet">
  <style>
  body{
    font-family: 'Kanit', sans-serif;
  }
  td{
    font-size:16px;
  }
  #result {
   position: absolute;
   width: 100%;
   max-width:870px;
   cursor: pointer;
   overflow-y: auto;
   max-height: 400px;
   box-sizing: border-box;
   z-index: 1001;
  }
  
  .link-class:hover{
   background-color:#f1f1f1;
  }
  </style>
 </head>
 <body>
  <br /><br />
  <div class="container" style="width:900px;">
   <h2 align="center">ระบบลงชื่อเข้าใช้ห้องพยาบาล วิทยาลัยเทคนิคเชียงใหม่</h2><br /> 
   <h5 align="center">กรอกรหัสผู้ใช้ของท่าน</h5><br />   
   <div class="row">
      <div class="col-3"></div>
      <div class="col-6">
        <form action="#" medthod="POST">
          <div class="col-md-12" align="center">
            <div id="frm" style="font-size:20px;">
              <input type="hidden" id="employee_name1" class="form-control">
              <input type="text" class="form-control" id="employee_list" autocomplete="off">
            </div><br>
            <div class="col-md-4" >
              <button type="button" name="search" id="search" class="btn btn-info">ยืนยัน</button>
            </div>
          </div>
          
        </form>
      </div>
      <div class="col-6"></div>
   </div>
   <br />
   <div class="table-responsive" id="employee_details" style="display:none";>
   <table class="table table-bordered">
    <tr>
     <td width="15%" align="right"><b>รหัสผู้ใช้</b></td>
     <td width="80%"><span id="employee_name"></span></td>
    </tr>
    <tr>
     <td width="15%" align="right"><b>ชื่อ</b></td>
     <td width="80%"><span id="employee_address"></span></td>
    </tr>

    <tr>
     <td width="15%" align="right"><b>นามสกุล</b></td>
     <td width="80%"><span id="employee_gender"></span></td>
    </tr>
    <tr>
     <td width="15%" align="right"><b>ประเภทผู้ใช้</b></td>
     <td width="80%"><span id="employee_designation"></span></td>
    </tr>
   </table>
   </div>
   
  </div>
 </body>
</html>

<script>
$(document).ready(function(){
 $('#search').click(function(){
    $('#frm').submit();
  var id= $('#employee_list').val();
  var Username = $('#employee_list').val();
  var firstname = $('#employee_name').val();
  var Lastname = $('#employee_gender').val();
  if(id == '')
  {
    alert("Please Select Employee");
    $('#employee_details').css("display", "none");
  }else{
   $.ajax({
    url:"fetch.php",
    method:"POST",
    data:{id:id},
    dataType:"JSON",
    success:function(data)
    {
     $('#employee_details').css("display", "block");
     setTimeout(function(){   
			$("#employee_details").fadeOut("Slow");  
      }, 2000);
     $('#employee_name').text(data.Username);
     $('#employee_name1').val(data.Firstname);
     $('#employee_address').text(data.Firstname);
     $('#employee_gender').text(data.Lastname);
     $('#employee_designation').text(data.Userlevel);
    }
   });
   $.ajax({
        url:"insert.php",
        method:"POST",
        data:{id:id, Username:Username},
        success:function(data){
         
        }
      });
  }
  
 });
 
});
</script>
