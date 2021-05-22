<?php 
session_start();
        if(isset($_POST['username'])){
				//connection
                  include("../sql/conn.php");
				//รับค่า user & password
                  $username = $_POST['username'];
                  $password = md5($_POST['password']);
				//query 
                  $sql="SELECT * FROM user Where username='".$username."' and password='".$password."' ";

                  $result = mysqli_query($con,$sql);
				
                  if(mysqli_num_rows($result)==1){

                      $row = mysqli_fetch_array($result);

                      $_SESSION["userid"] = $row["u_id"];
                      $_SESSION["username"] = $row["u_fname"]." ".$row["u_lname"];
                      $_SESSION["userlevel"] = $row["u_level"];

                      if($_SESSION["userlevel"]=="admin"){ //ถ้าเป็น admin ให้กระโดดไปหน้า admin_page.php

                        Header("Location: ../Back End/index_admin.php");

                      }

                      if ($_SESSION["Userlevel"]=="member"){  //ถ้าเป็น member ให้กระโดดไปหน้า user_page.php

                        Header("Location: ../Front End/member_index.php");

                      }

                  }else{
                    echo "<script>";
                        echo "alert(\" user or  password Not correct\");"; 
                        echo "window.history.back()";
                    echo "</script>";

                  }

        }else{


             Header("Location: login.php"); //user & password incorrect back to login again

        }
?>