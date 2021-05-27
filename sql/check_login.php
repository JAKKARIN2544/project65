<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
<?php 
session_start();
        if(isset($_POST['u_username'])){
				//connection
                  include("../sql/conn.php");
				//รับค่า user & password
                  $username = $_POST['u_username'];
                  $password = $_POST['u_password'];
				//query 
                  $sql="SELECT * FROM user Where u_username ='".$username."' and u_password ='".$password."' ";

                  $result = mysqli_query($conn,$sql);
				
                  if(mysqli_num_rows($result)==1){

                      $row = mysqli_fetch_array($result);

                      $_SESSION["u_id"] = $row["u_id"];
                      $_SESSION["u_username"] = $row["u_username"];
                      $_SESSION["user"] = $row["u_fname"]." ".$row["u_lname"];
                      $_SESSION["u_level"] = $row["u_level"];

                      if($_SESSION["u_level"]=="admin"){ //ถ้าเป็น admin ให้กระโดดไปหน้า admin_page.php

                        Header("Location: ../Back End/index_admin.php");

                      }

                      if ($_SESSION["u_level"]=="member"){  //ถ้าเป็น member ให้กระโดดไปหน้า user_page.php

                        Header("Location: ../Front End/member_index.php");

                      }

                  }else{
                    echo '<script type="text/javascript">
                          swal("", "ข้อมูลไม่ถูกต้อง", "error");
                          </script>';
                    echo '<meta http-equiv="refresh" content="1.5;url=../Login/login.php" />';
                  }
        }else{


             Header("Location: ../Login/login.php"); //user & password incorrect back to login again

        }
?>
</body>
</html>