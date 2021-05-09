<?php
require 'inc/database/db.php';
$id = $_GET['id'];
$select_data = "SELECT * FROM users WHERE id='$id'";
$select_query = mysqli_query($db, $select_data);
$single_user  = mysqli_fetch_assoc($select_query);

$user_id = $single_user['id'];