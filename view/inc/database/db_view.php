<?php
$host_name = "localhost";
$user_name = "root";
$password  = "";
$db_name   = "fast_freelance_bd";

$sql = new mysqli($host_name, $user_name, $password, $db_name);

// Check connection
if ($sql->connect_error) {
    die("Connection failed: " . $sql->connect_error);
}
?>