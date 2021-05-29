<?php
	include '../sql/conn.php';

	$sql = "SELECT COUNT(id) FROM user";
	$res = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($res);

	/*$sql1 = "SELECT COUNT(cus_id) FROM customer";
	$res1 = mysqli_query($conn, $sql1);
	$row1 = mysqli_fetch_assoc($res1);

	$sql2 = "SELECT COUNT(pro_id) FROM product";
	$res2 = mysqli_query($conn, $sql2);
	$row2 = mysqli_fetch_assoc($res2);

	$sql3 = "SELECT COUNT(id) FROM user";
	$res3 = mysqli_query($conn, $sql3);
	$row3 = mysqli_fetch_assoc($res3);

	$sql6 = "SELECT COUNT(ser_id) FROM services";
	$res6 = mysqli_query($conn, $sql6);
	$row6 = mysqli_fetch_assoc($res6);
	
	$sql7 = "SELECT COUNT(ser_det_id) FROM services_details";
	$res7 = mysqli_query($conn, $sql7);
	$row7 = mysqli_fetch_assoc($res7);
	
	$sql4 = "SELECT COUNT(status) AS status FROM services WHERE status='กำลังดำเนินการ'";
	$res4 = mysqli_query($conn, $sql4);
	$row4 = mysqli_fetch_assoc($res4);

	$sql5 = "SELECT COUNT(status) AS status FROM services WHERE status='เสร็จ'";
	$res5 = mysqli_query($conn, $sql5);
	$row5 = mysqli_fetch_assoc($res5); */
	?>