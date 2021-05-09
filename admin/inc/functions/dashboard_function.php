<?php
require 'inc/database/db.php';
$select_users_all           = "SELECT * FROM users";
$select_all_users           = mysqli_query($db, $select_users_all);
$all_num_rows               = mysqli_num_rows($select_all_users);

$select_users_active        = "SELECT * FROM users WHERE status = '1'";
$select_active_users        = mysqli_query($db, $select_users_active);
$active_num_rows            = mysqli_num_rows($select_active_users);

$select_users_pending       = "SELECT * FROM users WHERE status = '2'";
$select_pending_users       = mysqli_query($db, $select_users_pending);
$pending_num_rows           = mysqli_num_rows($select_pending_users);

$select_users_disable       = "SELECT * FROM users WHERE status = '3'";
$select_disable_users       = mysqli_query($db, $select_users_disable);
$disable_num_rows           = mysqli_num_rows($select_disable_users);

$users_active_pending           = "SELECT * FROM users WHERE status = '1' or '2'";
$pending_active_users           = mysqli_query($db, $users_active_pending);
