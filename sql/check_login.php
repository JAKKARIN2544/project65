<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <!-- Site favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="../vendors/images/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="../vendors/images/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="../vendors/images/favicon-16x16.png">

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="../vendors/styles/core.css">
	<link rel="stylesheet" type="text/css" href="../vendors/styles/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="../src/plugins/sweetalert2/sweetalert2.css">
	<link rel="stylesheet" type="text/css" href="../vendors/styles/style.css">
</head>
<body>
<?php 
session_start();
        if(isset($_POST['username'])){
				//connection
                  include("../sql/conn.php");
				//รับค่า user & password
                  $username = $_POST['username'];
                  $password = MD5($_POST["password"]);
				//query 
                  $sql="SELECT * FROM user Where username ='".$username."' and password ='".$password."' ";

                  $result = mysqli_query($conn,$sql);
				
                  if(mysqli_num_rows($result)==1){

                      $row = mysqli_fetch_array($result);

                      $_SESSION["id"] = $row["id"];
                      $_SESSION["username"] = $row["username"];
                      $_SESSION["user"] = $row["fname"]." ".$row["lname"];
                      $_SESSION["level"] = $row["level"];

                      if($_SESSION["level"]=="admin"){ //ถ้าเป็น admin ให้ไปหน้า admin_page.php
                        echo '<script type="text/javascript">
                        swal("Login Success", "The username or password is correct.", "success");
                        </script>';
                      echo '<meta http-equiv="refresh" content="4; url=../Back End/dashboard.php" />';
                      }

                      if ($_SESSION["level"]=="personnel"){  //ถ้าเป็น member ให้ไปหน้า user_page.php
                        echo '<script type="text/javascript">
                        swal("Login Success", "The username or password is correct.", "success");
                        </script>';
                      echo '<meta http-equiv="refresh" content="4; url=../Back End/dashboard.php-" />';
                      }

                      if ($_SESSION["level"]=="member"){  //ถ้าเป็น member ให้ไปหน้า user_page.php
                        echo '<script type="text/javascript">
                        swal("Login Success", "The username or password is correct.", "success");
                        </script>';
                      echo '<meta http-equiv="refresh" content="4; url=../Front End/member_index.php" />';
                      }
                      
                  }else{
                        echo '<script type="text/javascript">
                          swal("Oops...", "username or password incorrect back to login again!!!", "error");
                          </script>';
                        echo '<meta http-equiv="refresh" content="4;url=../Login/login.php" />';
                  }
        }else{
              echo '<script type="text/javascript">
              swal("Oops...", "username or password incorrect back to login again!!!", "error");
              </script>';
            echo '<meta http-equiv="refresh" content="4;url=../Login/login.php" />';
             //Header("Location: ../Login/login.php"); //user & password incorrect back to login again

        }
?>
<!-- js -->
<script src="../vendors/scripts/core.js"></script>
	<script src="../vendors/scripts/script.min.js"></script>
	<script src="../vendors/scripts/process.js"></script>
	<script src="../vendors/scripts/layout-settings.js"></script>

	<!-- add sweet alert js & css in footer -->
	<script src="../src/plugins/sweetalert2/sweetalert2.all.js"></script>
	<script src="../src/plugins/sweetalert2/sweet-alert.init.js"></script>
</body>
</html>