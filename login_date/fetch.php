<?php
//fetch.php
if(isset($_POST["id"]))
{
 $connect = mysqli_connect("localhost", "root", "", "user_login");
 mysqli_set_charset($connect,"utf8");
 $username = $_POST['id'] ;
 $query = "SELECT * FROM user WHERE `Username` = '".$_POST["id"]."' ";
 $result = mysqli_query($connect, $query);
   
 while($row = mysqli_fetch_array($result))
 {
  $data["Username"] = $row["Username"];
  $data["Firstname"] = $row["Firstname"];
  $data["Lastname"] = $row["Lastname"];
  $data["Userlevel"] = $row["Userlevel"];
 }
 echo json_encode($data);
}
?>