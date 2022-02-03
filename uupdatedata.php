<?php
include "uconfig.php";

if(isset($_POST['save']))
{
    extract($_POST);
    $stu_id =$_SESSION['AdminLoginId'];
    $sql="UPDATE student_d SET s_name='$s_name',s_address='$s_address',s_phone='$s_phone',s_email='$s_email',s_password='$s_password' WHERE s_email='$stu_id'";
    $res= mysqli_query($conn,$sql);
}
header("Location: uindex.php");

?>