<?php
include "uconfig.php";

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
    if(isset($_POST['signup']))
    {
        extract($_POST);    
    }

    ?>
            <div class="col-sm-4">
            </div>
            <div class="col-sm-4">
            <div class="login_form">
            <form class="post-form" action="usavedata.php" method="post" enctype="multipart/form-data">
            <h1 class="text">SIGNUP</h1>
                <div class="mb-3">
                    <label class="form-label">Name</label>
                    <input type="text"class="form-control" name="s_name" required/>
                </div>
                <div class="mb-3">
                    <label class="form-label">Address</label>
                    <input type="text"class="form-control" required name="s_address" />
                </div>
                <div class="mb-3">
                    <label class="form-label">Phone</label>
                    <input type="tel"class="form-control" required name="s_phone" />
                </div>
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email"class="form-control" required name="s_email" />
                </div>
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password"class="form-control" required name="s_password" />
                </div>
                <div class="mb-3">
                    <label class="form-label">Re-Password</label>
                    <input type="password"class="form-control" required name="s_repassword" />
                </div>
                <div class="mb-3">
                    <label class="form-label">uplode your photo</label>
                    <input type="file"class="form-control" required name="photo" />
                </div>
                <input class="form_btn" type="submit" value="Save" name="signup" />
                
            </form>
            <p>Have an account? <a href="ulogin.php">Login</a></p>
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