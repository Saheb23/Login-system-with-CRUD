<?php
include 'config2.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Admin</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

    <div id="wrapper">
        <div id="header">
        <form  method="post" action="logout.php">
            <h2>WelCome To Admin Pannel-<?php echo $_SESSION['AdminLoginId'] ?></h2>
            <h2><input class="submit" type="submit" name="logout" value="logout" /></h2>
        </form>
        </div>
        
        <div id="menu">
            <ul>
                <li>
                    <a href="index.php">Home</a>
                </li>
                <li>
                    <a href="add.php">Add</a>
                </li>
                <li>
                    <a href="update.php">Update</a>
                </li>
                <li>
                    <a href="delete.php">Delete</a>
                </li>
            </ul>
        </div>
