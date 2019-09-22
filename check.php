<?php 
session_start();
        if(isset($_POST['username_log'])){
				//connection
              $con = mysqli_connect("localhost","root","KZTuR1v3aaVA7t","user_login");
				//รับค่า user & password
                  $Username = $_POST['username_log'];
                  $Password = $_POST['password_log'];
				//query 
                  $sql="SELECT * FROM User Where Username='".$Username."' and Password='".$Password."' ";
                    
                  $result = mysqli_query($con,$sql);
				
                  if(mysqli_num_rows($result)==1){

                      $row = mysqli_fetch_array($result);

                      $_SESSION["UserID"] = $row["ID"];
                      $_SESSION["User"] = $row["Username"];
                      $_SESSION["Password"] = $row["Password"];
                      $_SESSION["name"] = $row["Firstname"]." ".$row["Lastname"];
                      // $_SESSION["Username"] = $row["Username"];
                      $_SESSION["Userlevel"] = $row["Userlevel"];
                      

                      if($_SESSION["Userlevel"]=="01"){ //ถ้าเป็น admin ให้กระโดดไปหน้า admin_page.php

                        Header("Location: admin_index.php");

                      }

                      if ($_SESSION["Userlevel"]=="02"){  //ถ้าเป็น member ให้กระโดดไปหน้า user_page.php

                        Header("Location: user_index.php");

                      }

                      if ($_SESSION["Userlevel"]=="03"){  //ถ้าเป็น member ให้กระโดดไปหน้า user_page.php

                        Header("Location: user_index.php");

                      }

                  }else{
                    echo "<script>";
                        echo "alert(\" User หรือ  password ไม่ถูกต้อง\");"; 
                        echo "window.history.back()";
                    echo "</script>";

                  }

        }else{


             Header("Location: index.php"); //user & password incorrect back to login again

        }
?>