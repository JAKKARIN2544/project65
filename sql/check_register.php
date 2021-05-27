<?php

include "connect.php";

$id=$_POST['id'];
$email=$_POST['email'];
$user=$_POST['username'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$pass=$_POST['password'];
$phone=$_POST['phone'];
$gender=$_POST['gender'];
$address=$_POST['address'];
$status=$_POST['status'];



$sql = "INSERT INTO user VALUE ('$id','$email','$user','$pass','$fname','$phone','$address','user')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
    header( "location: login.php" );
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
  mysqli_close($conn);
  
?>