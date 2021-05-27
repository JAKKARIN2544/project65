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
include "conn.php";
        $id=$_POST['id'];
        $email=$_POST['email'];
        $username=$_POST['username'];
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $password = MD5($_POST["password"]);
        //$password=$_POST['password'];
        $phone_number=$_POST['phone_number'];
        $gender=$_POST['gender'];
        $address=$_POST['address'];
        $level=$_POST['level'];

$sql = "INSERT INTO user VALUE ('$id','$email','$username','$fname','$lname','$password','$gender','$phone_number','$address','member')";

    if (mysqli_query($conn, $sql)) {
          echo '<script type="text/javascript">
          swal("Welcome", "Register success .", "success");
          </script>';
          echo '<meta http-equiv="refresh" content="3; url=../Login/login.php" />';
      } else {
          echo '<script type="text/javascript">
          swal("Oops...", "Register T0 Failed !!!!", "error");
          </script>';
          echo '<meta http-equiv="refresh" content="3;url=../Login/register.php" />';
      }
  
      mysqli_close($conn);
  
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