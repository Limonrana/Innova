<?php
session_start();
require '../database/db.php';
$banner_title           = htmlentities($_POST['banner_title'], ENT_QUOTES);
$banner_desc            = htmlentities($_POST['banner_des'], ENT_QUOTES);
$button_text            = htmlentities($_POST['button_text'], ENT_QUOTES);
$button_url             = htmlentities($_POST['button_url'], ENT_QUOTES);
$button_bg              = $_POST['button_bg'];
$button_bg_hover        = $_POST['button_bg_hover'];
/*===================
Call To Action
=====================*/
$call_title              = htmlentities($_POST['call_title'], ENT_QUOTES);
$call_des                = htmlentities($_POST['call_des'], ENT_QUOTES);
$call_btn_text           = htmlentities($_POST['call_btn_text'], ENT_QUOTES);
$call_btn_url            = htmlentities($_POST['call_btn_url'], ENT_QUOTES);
$call_btn_border         = $_POST['call_btn_border'];
$call_btn_border_hover   = $_POST['call_btn_border_hover'];
$section_bg              = $_POST['section_bg'];

/*============
//Image Code
============*/
$bg_image                = $_FILES['bg_image'];
$image_name              = $bg_image['name'];
$image_tmp               = $bg_image['tmp_name'];
$image_size              = $bg_image['size'];

$image_explode           = explode('.', $image_name);
$extension_img           = end($image_explode);
$allow_type              = ['jpg', 'png', 'jpeg', 'gif'];

if (empty($banner_title)) {
    $_SESSION['error'] = "Please Insert Your Tittle";
    header("location:../../add-banner.php");
}

elseif (empty($banner_desc)) {
    $_SESSION['error'] = "Please Insert Your Description";
    header("location:../../add-banner.php");
}

elseif (empty($button_text)) {
    $_SESSION['error'] = "Please Insert Your Button Text";
    header("location:../../add-banner.php");
}

elseif (empty($button_url)) {
    $_SESSION['error'] = "Please Insert Your Button URL";
    header("location:../../add-banner.php");
}

elseif (empty($image_name)) {
    $_SESSION['error'] = "Please Select Your Banner Image";
    header("location:../../add-banner.php");
}

elseif ($image_size > 800000) {
    $_SESSION['error'] = "Please Select Your Banner Image Less Then 8 MB";
    header("location:../../add-banner.php");
}

elseif (!in_array($extension_img, $allow_type)) {
    $_SESSION['error'] = "Please Select Your Banner Image Less Then 8 MB";
    header("location:../../add-banner.php");
}

//=================
//Call Action Start
//===================

elseif (empty($call_title)) {
$_SESSION['error'] = "Please Insert Your Call Action Title";
header("location:../../add-banner.php");
}

elseif (empty($call_des)) {
$_SESSION['error'] = "Please Insert Your Call Action Description";
header("location:../../add-banner.php");
}

elseif (empty($call_btn_text)) {
$_SESSION['error'] = "Please Insert Your Call Action Button Text";
header("location:../../add-banner.php");
}

elseif (empty($call_btn_url)) {
$_SESSION['error'] = "Please Insert Your Call Action Button Url";
header("location:../../add-banner.php");
}

elseif (empty($section_bg)) {
$_SESSION['error'] = "Please Insert Your Call Action Section BG Color";
header("location:../../add-banner.php");
}

else {
    $insert_banner = "INSERT INTO banners (title, description, btn_text, btn_url, btn_color, button_bg_hover, call_title, call_des, call_btn_text, call_btn_url, call_btn_border, call_btn_border_hover, section_bg, status) VALUES('$banner_title', '$banner_desc', '$button_text', '$button_url', '$button_bg', '$button_bg_hover', '$call_title', '$call_des', '$call_btn_text', '$call_btn_url', '$call_btn_border', '$call_btn_border_hover', '$section_bg', '2')";

    if ($db->query($insert_banner) === TRUE) {
        $last_id    = mysqli_insert_id($db);
        $file_name  = $last_id.'.'.$extension_img;
        $photo_loc  = '../../uploads/banners/'.$file_name;
        move_uploaded_file($image_tmp, $photo_loc);
        $update_data = "UPDATE banners SET bg_image ='$file_name' WHERE id='$last_id'";
        if ($db->query($update_data) === TRUE) {
            $_SESSION['success'] = "You Are Successfully Upload Banner";
            header('location:../../add-banner.php');
        } else {
            $_SESSION['error'] = "Error updating record: " . $db->error;
            header('location:../../add-banner.php');
        }
        $db->close();

    } else {
        $_SESSION['error'] = "Error: " . $update_data . "<br>" . $db->error;
        header('location:../../add-banner.php');
    }

    $db->close();
}