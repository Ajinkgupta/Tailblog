<?php
    if (!isset($_SESSION)) { session_start(); }
    $_SESSION = array(); 
    session_destroy(); 
    header("Location: login.php"); // Or wherever you want to redirect
    exit();
?>