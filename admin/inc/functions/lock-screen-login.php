<?php
session_start();
$session_pass = $_SESSION['password'];
$password = $_POST['password'];
if ($session_pass == $password) {
    header("location:../../dashboard.php");
}