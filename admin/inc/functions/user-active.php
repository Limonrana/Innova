<?php
session_start();
require '../database/db.php';
$id = $_GET['id'];
$select_users   = "SELECT status FROM banners WHERE id='$id'";
$users_result   = mysqli_query($db, $select_users);
$after_fetch    = mysqli_fetch_assoc($users_result);
$users_status   = $after_fetch['status'];
$users_id       = $after_fetch['id'];
if ($users_status == 1) {
    $disable_status = "UPDATE users SET status ='3' WHERE id='$id'";
    if ($db->query($disable_status) === TRUE) {
        $_SESSION['error'] = "Users Successfully Disable";
    } else {
        $_SESSION['error'] = "Error updating record: " . $db->error;
        header('location:../../users.php');
    }
    $db->close();
}
else {
    $disable_status = "UPDATE users SET status ='1' WHERE id='$id'";
    if ($db->query($disable_status) === TRUE) {
        $_SESSION['error'] = "Users Successfully Active";
    } else {
        $_SESSION['error'] = "Error updating record: " . $db->error;
        header('location:../../dashboard.php');
    }
    $db->close();
}