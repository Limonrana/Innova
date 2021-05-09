<?php
session_start();
require '../database/db.php';
//upload.php

$folder_name = '../../uploads/logos/';

if(!empty($_FILES)) {
    $filename = $_FILES['file']['name'];
    $temp_file = $_FILES['file']['tmp_name'];
    $image_size = $_FILES['file']['size'];
    $explode = explode('.', $filename);
    $extension = end($explode);
    $allowTypes = ['jpg', 'png', 'jpeg', 'gif'];
    $location = $folder_name . $filename;

    if (empty($filename)) {
        $_SESSION['error'] = "Please Select Your Logo";
        header("location:../../add-logo.php");
    } elseif (!in_array($extension, $allowTypes)) {
        $_SESSION['error'] = "Please Select Your Logo Only PNG, JPG, JPEG, GIF Format";
        header("location:../../add-logo.php");
    } elseif ($image_size > 2000000) {
        $_SESSION['error'] = "Please Select Your Logo Image Less Then 20 MB";
        header("location:../../add-logo.php");
    } elseif (move_uploaded_file($temp_file, $location)) {
        $uploaded_on = NOW();
        // Image db insert sql
        $insert_logo = "INSERT into logos (file_name, uploaded_on, status) values('$filename', '$uploaded_on', '2')";
        if ($db->query($insert_logo) === TRUE) {
            $_SESSION['success'] = "You Are Successfully Uploaded Your Logo";
            header('location:../../add-logo.php');
        } else {
            $_SESSION['error'] = 'Error in uploading file - ' . $_FILES['file']['name'] . '<br/>';
            header('location:../../add-logo.php');
        }
        $db->close();
    } else {
        $_SESSION['error'] = "Please Select Your Logo Image";
        header("location:../../add-logo.php");
    }
}