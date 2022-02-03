<?php
$stu_id = $_POST['s_id'];
$stu_name = $_POST['s_name'];
$stu_address = $_POST['s_address'];
$stu_phone = $_POST['s_phone'];
$stu_email = $_POST['s_email'];
$stu_password = $_POST['s_password'];

include "config.php";
$sql= "UPDATE student_d SET s_name='{$stu_name}',s_address='{$stu_address}',s_phone='{$stu_phone}',s_email='{$stu_email}',s_password='{$stu_password}' WHERE s_id='{$stu_id}' ";
$result= mysqli_query($conn,$sql) or die("Quary unsucessful");

header("Location: index.php");
mysqli_close($conn);
?>