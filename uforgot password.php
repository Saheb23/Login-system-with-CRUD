<?php
include "uconfig.php";
// session_start();
ob_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" >
    <link rel="stylesheet" type="text/css" href="ustyle.css">
</head>
<body>
    <div class="container">
        <div class="row">

        <?php


    if (isset($_POST['submit'])) {

        if(isset($_GET['token'])){

        $token = $_GET['token'];

        $newpassword = $_POST['s_password'];
        $cpassword =  $_POST['s_password'];


            if ($newpassword === $cpassword) {

                $updatequery = "UPDATE student_d SET s_password='$newpassword' WHERE token='$token' ";

                $iquery = mysqli_query($conn, $updatequery);

                if ($iquery) {
                    $_SESSION['msg'] = "Your password has been updated";
                    header('location:ulogin.php');

                }else{
                    $_SESSION['passmsg'] = "Your password is not updated";
                    header('location:urecover password.php');
                }
           }else{
            $_SESSION['passmsg'] = "password is not matching";
           }
       }else{
           echo "No token found";
       }

    }

    ?>

            <div class="col-sm-4">
            </div>
            <div class="col-sm-4">
            <div class="login_form">
            <form class="post-form" method="post">
            <h2 class="text">New Password</h2>
            <div class="mb-3 bg-success test-light text-center">
            <?php 
            if(isset($_SESSION['passmsg'])){
                    echo $_SESSION['passmsg'];
                }else{
                    $_SESSION['passmsg'] = "";
                }
                ?>
            </div>
        
                <div class="mb-3">
                    <label class="form-label">Enter New Password</label>
                    <input type="password"class="form-control" required name="s_password" />
                </div>
                <div class="mb-3">
                    <label class="form-label">Re Enter Password</label>
                    <input type="password"class="form-control" required name="s_repassword" />
                </div>
                <input class="form_btn" type="submit" value="update" name="submit" />
                
            </form>
            </div>
            </div>
            <div class="col-sm-4">
            </div>
            <div class="col-sm-4">
            </div>
        </div>
    </div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" ></script>
    

</html>