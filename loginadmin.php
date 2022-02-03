<?php
include "config2.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN-ADMIN</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" >
    <link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
            </div>
            <div class="col-sm-4">
            <div class="login_form">
            <form method="POST">
                <h1 class="text">ADMIN LOGIN</h1>
                <div class="mb-3">
                    <label class="form-label">Email address</label>
                    <input type="email" class="form-control"name="email" >
                </div>
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control" name="password">
                </div>
                <button type="submit" class="btn btn-primary form_btn"name="signin">Login</button>
            </form>
            <a href="forgot_password.php">Forgot Password</a>
            </div>
            </div>
            <div class="col-sm-4">
            </div>
        </div>
    </div>
    <?php
    if(isset($_POST['signin']))
    {
        $query="SELECT * FROM `admin` WHERE`email`='$_POST[email]'AND `password`='$_POST[password]'";
        $result=mysqli_query($con,$query);
            if(mysqli_num_rows($result)==1)
            {
                
                $_SESSION['AdminLoginId']=$_POST['email'];
                header("Location: index.php");
            
            }
            else
            {
                echo"<script>alert('Incorrect Password')</script>";
            }

    }
    ?>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" ></script>
    

</html>