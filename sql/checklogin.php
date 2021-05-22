<?php 
include "connect.php";
    session_start();
    $username = $_POST['user'];
    $password = $_POST['pass'];
    $sql = "SELECT * from user where user_name='".$username."' AND user_pass='".$password."'";
    $result = mysqli_query($conn,$sql);
    $obj = mysqli_fetch_array($result);
    echo $obj;
     if (!$obj) {
         $mg="คุณกรอกข้อมูลผิดพลาด..........";
     }
     else {
         $_SESSION["user_id"] = $obj["user_id"];
         $_SESSION["user_name"] = $obj["user_name"];
         $_SESSION["user_fname"] = $obj["user_fname"];
         $_SESSION["user_status"] = $obj["user_status"];
         if ($obj["user_status"]=="admin") {
             header("Location: index_admin.php");
         }
         else {
             header("Location: index.php");
         }
     }
 ?>
 <script type="text/javascript">
  alert("<?php echo $mg; ?>");
   window.location = 'login.php';
  </script>