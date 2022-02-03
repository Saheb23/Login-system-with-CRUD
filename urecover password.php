<?php
include "uconfig.php";
// session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" >
<link rel="stylesheet" type="text/css" href="ustyle.css">
</head>
<body>
<div class="container">
        <div class="row">
    <?php
        if (isset($_POST['sent'])) {
            $s_email = mysqli_real_escape_string($conn, $_POST['s_email']);
    
            $emailquery = " SELECT * FROM `student_d` WHERE`s_email`='$s_email' ";
            $query = mysqli_query($conn, $emailquery);
    
            $emailcount = mysqli_num_rows($query);
    
            if ($emailcount) {      
                
                $userdata = mysqli_fetch_array($query);
                $username = $userdata['s_name'];
                $token = $userdata['token'];
                        $subject = "Password Reset";
                        $body = "Hi, $username. Click here to reset your password
                        http://localhost/student/uforgot%20password.php?token=$token ";
                        $headers = "From: sahebcomptech@gmail.com";
    
                        if (mail($s_email, $subject, $body, $headers)) {
                            echo "Email successfully sent to $s_email...";
                            $_SESSION['msg'] = "check your mail to reset your password $s_email";
                            header('location:ulogin.php');
                        } else {
                            echo "Email sending failed...";
                        }
    
                    }else{
                        echo "Email not found";
                    }
        }

    ?>
        <div class="col-sm-4">
            <div class="login_form">
            <form method="POST">
                <h1 class="text">Recover Password</h1>
                <div class="mb-3">
                    <label class="form-label">Enter Your Email</label>
                    <input type="email" class="form-control" name="s_email" >
                </div>
                <button type="submit" class="btn btn-primary form_btn"name="sent">Sent</button>
            </form>
            </div>
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