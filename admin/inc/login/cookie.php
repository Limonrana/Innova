<?php
if (!isset($_COOKIE['c_user'])) {
    header('location:index.php');
} else {
    setcookie('cuser', 'puser', time() + 300);
}