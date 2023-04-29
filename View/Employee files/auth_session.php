<?php
    session_start();
    if(!isset($_SESSION["UserName"])) {
        header("Location:EMPayroll.php");
        exit();
    }
?>