<?php
include "uconfig.php";
$stu_name = $_POST['s_name'];
$stu_address = $_POST['s_address'];
$stu_phone = $_POST['s_phone'];
$stu_email = $_POST['s_email'];
$stu_password = $_POST['s_password'];
$stu_repassword = $_POST['s_repassword'];
$stu_file = $_FILES['photo'];
$token = bin2hex(random_bytes(15));


        //print_r($stu_file);
        $filename = $stu_file['name'];
        $filepath = $stu_file['tmp_name'];
        $fileerror = $stu_file['error'];
        if($fileerror == 0){
        $destfile = 'uploadimg/'.$filename;
         // echo "$destfile";
        move_uploaded_file($filepath,$destfile);
        }
    
    $sqlq= "SELECT * FROM `student_d` WHERE`s_email`='$stu_email'";
    $resul= mysqli_query($conn,$sqlq) or die("Quary unsucessful");
        if(mysqli_num_rows($resul)>0) 
        {
        $row=mysqli_fetch_assoc($resul);
        }
        if($stu_email==$row['s_email'])
            {
                header("Location: register.php?msg=email already exists");
            }
        else{
            if($stu_password == $stu_repassword )
            {
                $sql= "INSERT INTO student_d(s_name,s_address,s_phone,s_email,s_password,picture,token) VALUES('{$stu_name}','{$stu_address}','{$stu_phone}','{$stu_email}','{$stu_password}','{$destfile}','{$token}')";
                $result= mysqli_query($conn,$sql) or die("Quary unsucessful");
                if($result)
                {
                    header("Location: ulogin.php?msg=successfully register");
                }
                else
                {
                    header("Location: register.php?msg=unsuccessfully register");   
                }
            }
            else{
                header("Location: register.php?msg=Password not matched");
            }
            
            }
    

?>