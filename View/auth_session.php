<?php
    session_start();
    if(!isset($_SESSION["UserName"])) {
        header("Location: EMS_Login.php");
        exit();
    }
?>

