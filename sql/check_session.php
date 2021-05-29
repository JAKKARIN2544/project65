<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php session_start();?>
<?php 

if (!$_SESSION["id"]){  //check session
	echo '<script type="text/javascript">
          swal("Warning !!", "Please Login before you can use it.", "warning");
          </script>';
    echo '<meta http-equiv="refresh" content="4; url=../Login/login.php" />';
	  //Header("Location: ../Login/login.php"); //ไม่พบผู้ใช้กระโดดกลับไปหน้า login form 
	  
}else{?>
<?php }?>