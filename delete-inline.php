<?php
$stu_id=$_GET['id'];

include 'config.php';

$sql= "DELETE FROM student_d WHERE s_id={$stu_id}";
$result= mysqli_query($conn,$sql) or die("Quary unsucessful");

header("Location: index.php");
mysqli_close($conn);

?>

