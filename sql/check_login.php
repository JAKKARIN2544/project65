<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Check login</title>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
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
                    echo "<script language='JavaScript'>
                    sweetAlert('Warning!', 'Password และยืนยัน Password ต้องตรงกัน', 'warning');
                    window.location.href = 'index.php'; 
                    </script>";
                    //echo "<script> swal('Oops...', 'Something went wrong :(', 'error');
                    //location.href='../Login/login.php';
                    //</script>";

                    //echo "<script>";
                       // echo "alert(\" user หรือ  password ไม่ถูกต้อง\");"; 
                       //echo "window.history.back()";
                    //echo "</script>";
                  }

        }else{


             Header("Location: ../Login/login.php"); //user & password incorrect back to login again

        }
?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
</body>
</html>


