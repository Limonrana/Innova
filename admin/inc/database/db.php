<?php
$host_name = "localhost";
$user_name = "root";
$password  = "";
$db_name   = "fast_freelance_bd";

$db = new mysqli($host_name, $user_name, $password, $db_name);

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>