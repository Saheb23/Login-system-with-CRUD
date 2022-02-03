<?php
include 'config2.php';

if(isset($_POST['logout']))
        {
            session_destroy();
            header("Location: loginadmin.php");
        }
?>