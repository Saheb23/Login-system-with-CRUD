<?php
$stu_name = $_POST['s_name'];
$stu_address = $_POST['s_address'];
$stu_phone = $_POST['s_phone'];
$stu_email = $_POST['s_email'];
$stu_password = $_POST['s_password'];

include "config.php";
$sql= "INSERT INTO student_d(s_name,s_address,s_phone,s_email,s_password) VALUES('{$stu_name}','{$stu_address}','{$stu_phone}','{$stu_email}','{$stu_password}')";
$result= mysqli_query($conn,$sql) or die("Quary unsucessful");

header("Location: index.php");
mysqli_close($conn);
?>