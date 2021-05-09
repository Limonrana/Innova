<?php
session_start();
require 'inc/database/db.php';
$id = $_GET['id'];
$select_photo = "SELECT photo FROM users WHERE id = '$id'";
$photo_rasult = mysqli_query($db, $select_photo);
$after_fetch  = mysqli_fetch_assoc($photo_rasult);
$photo_name   = $after_fetch['photo'];
$delete_from = 'upload/users'.$photo_name;
if ($_SESSION['id'] == $id){
    $_SESSION['error'] = "You Can't Delete Your Account From Here";
    header("location:single-profile.php");
}
else {
    $select_user = "DELETE FROM users WHERE id='$id'";

    if (mysqli_query($db, $select_user)) {
        $_SESSION['error'] = "Record deleted successfully";
        unlink($delete_from);
        header("location:users.php");
    } else {
        $_SESSION['error'] = "Error deleting record: " . mysqli_error($db);
        header("location:users.php");
    }
}

mysqli_close($db);