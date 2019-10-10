<?php
//fetch.php
if(isset($_POST["id"]))
{
 $connect = mysqli_connect("localhost", "root", "Ice@2019", "user_login");
 mysqli_set_charset($connect,"utf8");
 $username = $_POST['id'] ;
 $query = "SELECT * FROM user WHERE `Username` = '".$_POST["id"]."' ";
 $result = mysqli_query($connect, $query);
   if(mysqli_num_rows($result)== 1){
       while($row = mysqli_fetch_array($result))
        {
            $data["Username"] = $row["Username"];
            $data["Firstname"] = $row["Firstname"];
            $data["Lastname"] = $row["Lastname"];
            $data["Userlevel"] = $row["Userlevel"];
            $data["Phone"] = $row["Phone"];
        }
        echo json_encode($data);
    }else{
        echo 2;
    }
//    }else{
//         while($row = mysqli_fetch_array($result)){
//             $data1["Username"] = $row["Username"];
//         }
//         // echo "<script>";
//         // echo "alert(\" Username หรือ  password ของคุณไม่ถูกต้อง\");"; 
//         // echo "window.history.back()";
//         // echo "</script>";
//         echo json_encode($data1);
//    }
   
}
?>