<?php
    session_start();
    setcookie("login", "", time()+3600);
    unset($_SESSION['girl']);
    unset($_SESSION['weapon']);
    unset($_SESSION['drags']);
    header("Location: index.php");
?>