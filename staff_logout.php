<?php 
session_start();

include '_inc/dbconn.php';
$date=$_SESSION['staff_date'];
$id=$_SESSION['id'];
$sql="UPDATE staff SET lastlogin='$date' WHERE id='$id'";
mysqli_query($con,$sql) or die(mysqli_error());

session_destroy();
header('location:index.php');
?>