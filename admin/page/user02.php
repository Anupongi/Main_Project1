<!DOCTYPE html>
<html>
 <head>
 <meta charset="UTF-8">
 <title>แสดงข้อมูลผู้ใช้</title>
 <!-- <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
 <link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css"> -->
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 <link href="https://fonts.googleapis.com/css?family=Kanit&display=swap" rel="stylesheet">
 <link rel="stylesheet" href="../../dist/css/alluser.css">
 </head>
 <body style="margin-top: 10px;font-family: 'Kanit', sans-serif;">
 <?php
   ini_set('display_errors', 1);
   error_reporting(~0);

   $serverName = "localhost";
   $userName = "root";
   $userPassword = "Ice@2019";
   $dbName = "user_login";
    
   $conn = mysqli_connect($serverName,$userName,$userPassword,$dbName);
   mysqli_set_charset($conn, "utf8");
	$sql = "SELECT `ID`,`Username`, `Password`, `Firstname`, `Lastname`, `Userlevel`, `date` FROM user WHERE Userlevel IN ('02') ";
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
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h1 class="text-center">รายชื่อนักเรียน นักศึกษาผู้สมัครสมาชิก</h1>
			<div class="card">
				<div class="card-body">
					<div class="table-responsive-xl">
						<table align="center">
							<thead>
    							<tr>
									<th width="91"> <div align="center">ลำดับ</div></th>
									<th width="110"> <div align="center">ชื่อผู้ใช้ </div></th>
									<th width="120"> <div align="center">รหัสผ่าน </div></th>
									<th width="150"> <div align="center">ชื่อ-นามสกุล </div></th>
									<th width="80"><div align="center">สถานะผู้ใช้</div></th>
									<th width="100"><div align="center">เริ่มสมัครสมาชิก</div></th>
									<!-- <th width="59"> <div align="center">แก้ไข </div></th> -->
									<th width="71"> <div align="center">ลบ </div></th>
								</tr>
  							</thead>
							<?php
								$count = 1;
								while($result=mysqli_fetch_array($query))
								{
							?>
							<tbody>
								<tr>
									<td><div align="center"><?php echo $count;?></div></td>
									<td><?php echo $result["Username"];?></td>
									<td><?php echo $result["Password"];?></td>
									<td><div align="center"><?php echo $result["Firstname"] ." ".$result["Lastname"];?></div></td>
									<td><?php 
									$level = $result["Userlevel"];
									$sql1 = "SELECT * FROM `user_level` WHERE `userlevel_id` = $level ";
									$query1 = mysqli_query($conn,$sql1);
									$userlevel = mysqli_fetch_array($query1);
									echo $userlevel[1];
									
									
									?></td>
									<td align="right"><?php echo $result["date"];?></td>
									<!-- <td align="right"><a href="./edituser.php?ID=<?php echo $result[0] ?>" class="btn btn-warning text-white">แก้ไข</a></td> -->
									<td align="right"> <a href="./deluser1.php?ID=<?php echo $result['ID']; ?>" class="btn btn-danger">ลบ</a></td>
								</tr>
								<?php
								$count=$count+1;
								}
								?>	
										
							</tbody>
							
						</table>
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
					</div>
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