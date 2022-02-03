<?php
include "uconfig.php";
if(!isset($_SESSION['msg']))
{
    header("Location: ulogin.php");
}
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
            <div class="col-sm-4">
            </div>
            <div class="col-sm-4">
            <div class="login_form">
            <form method="POST">
                <h1 class="text">USER LOGIN</h1>
                <div class="mb-3 bg-success text-light text-center">
                <?php
                if(isset($_SESSION['msg'])){
                    echo $_SESSION['msg'];
                }else{
                    echo $_SESSION['msg'] = "You are logged out. Please login again";
                }
                ?>
                </div>
                <div class="mb-3">
                    <label class="form-label">Email address</label>
                    <input type="email" class="form-control" name="email" >
                </div>
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control" name="password">
                </div>
                <button type="submit" class="btn btn-primary form_btn"name="signin">Login</button>
            </form>
            <a href="urecover password.php">Forgot Password</a><br>
            <p>Don't have an account? <a href="register.php">Sign up</a></p>
            </div>
            </div>
            <div class="col-sm-4">
            </div>
        </div>
    </div>
    <?php
    if(isset($_POST['signin']))
    {
        $query="SELECT * FROM `student_d` WHERE`s_email`='$_POST[email]' AND `s_password`='$_POST[password]'";
        
        $result=mysqli_query($conn,$query);
            if(mysqli_num_rows($result)==1)
            {
                
                $_SESSION['AdminLoginId']=$_POST['email'];
                header("Location: uindex.php");
            
            }
            else
            {
                echo"<script>alert('Incorrect Password')</script>";
            }

    }
    ?>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" ></script>
    

</html>