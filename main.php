<?php
include 'uconfig.php';


?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>user</title>
<link rel="stylesheet" href="mstyle.css">
</head>
<body>

    <div id="wrapper">
        <div id="header">
        <form  method="post" action="ulogout.php">
            <h2>WelCome To User Pannel-<?php echo $_SESSION['AdminLoginId'] ?></h2>
            <h2><input class="submit" type="submit" name="logout" value="logout" /></h2>
        </form>
        </div>
        
        <div id="menu">
            <ul>
                <li>
                    <a href="uindex.php">Home</a>
                </li>
                <li>
                    <a href="uupdate.php">Update</a>
                </li>
                
            </ul>
        </div>
    </div>

