<?php
session_start();
require '../database/db.php';
$id = $_GET['id'];
$status = $_GET['status'];
//$select_banner = "SELECT status FROM banners WHERE status='1'";
//$status_result = mysqli_query($db, $select_banner);
//$after_fetch   = mysqli_fetch_assoc($status_result);
//$active_status = $after_fetch['status'];
//$active_id = $after_fetch['id'];
if ($status == 1) {
    $disable_status = "UPDATE logos SET status ='2' WHERE status='1'";
    if ($db->query($disable_status) === TRUE) {
        $_SESSION['success'] = "Logo Successfully Deactivate";
        header('location:../../all-logos.php');
    } else {
        $_SESSION['error'] = "Error updating record: " . $db->error;
        header('location:../../all-logos.php');
    }
    $db->close();
}

else {
    $disable_status = "UPDATE logos SET status ='2' WHERE status='1'";
    if ($db->query($disable_status) === TRUE) {
        $update_status = "UPDATE logos SET status ='1' WHERE id='$id'";
        if ($db->query($update_status) === TRUE) {
            $_SESSION['success'] = "You Are Successfully Active Logo";
            header('location:../../all-logos.php');
        } else {
            $_SESSION['error'] = "Error updating record: " . $db->error;
            header('location:../../all-logos.php');
        }
        $db->close();

    } else {
        $_SESSION['error'] = "Error updating record: " . $db->error;
        header('location:../../all-logos.php');
    }
    $db->close();
}