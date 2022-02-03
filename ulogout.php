<?php
include 'uconfig.php';

if(isset($_POST['logout']))
        {
            session_destroy();
            header("Location: ulogin.php");
        }
?>