<?php session_start();?>
<?php 

if (!$_SESSION["u_id"]){  //check session
	echo "<script>alert('received!'); 
	location.href='../Login/login.php';
	</script>";
	  //Header("Location: ../Login/login.php"); //ไม่พบผู้ใช้กระโดดกลับไปหน้า login form 

}else{?>
<?php }?>