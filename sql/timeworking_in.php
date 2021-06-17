<?php include "../sql/conn.php";

$per_id = $_POST['per_id'];
$working_date = $_POST['working_date'];
$time_in = $_POST['time_in'];
$time_out = $_POST['time_out'];



$sql = "INSERT INTO working_time VALUE ('$per_id','$working_date','$time_in','$time_out'')";

if (mysqli_query($conn, $sql)) {
    echo '<script type="text/javascript">
          swal("Record Time Success", "The username or password is correct.", "success");
          </script>';
    echo '<meta http-equiv="refresh" content="3; url=../Back End/time_working.php" />';
} else {
    echo '<script type="text/javascript">
          swal("Error", "Failed to save Time !!!!!!!", "error");
          </script>';
    echo '<meta http-equiv="refresh" content="3;url=../Back End/time_working.php" />';
}

mysqli_close($conn);
