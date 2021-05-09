<?php
session_start();
require '../database/db.php';
$site_title           = htmlentities($_POST['site_title'], ENT_QUOTES) ?? '';
$site_desc            = htmlentities($_POST['site_des'], ENT_QUOTES) ?? '';

    if ( !empty($site_title) && ($site_desc)) {
        $insert_site_title = "INSERT INTO site_identity (site_title, site_description, status) VALUES('$site_title', '$site_desc', '2')";

        if ($db->query($insert_site_title) === TRUE) {

            //        ======================================================
            $filename = $_FILES['file']['name'];
            $targetDir = "../../uploads/logos/".$filename;
            $image_size = $_FILES['file']['size'];
            $explode = explode('.', $filename);
            $extension = end($explode);
            $allowTypes = ['jpg', 'png', 'jpeg', 'gif'];

// Upload files and store in database
            if (empty($filename)) {
                $_SESSION['error'] = "Please Select Your Logo";
                header("location:../../add-logo.php");
            }

            elseif (!in_array($extension, $allowTypes)) {
                $_SESSION['error'] = "Please Select Your Logo Only PNG, JPG, JPEG, GIF Format";
                header("location:../../add-logo.php");
            }

            elseif ($image_size > 2000000) {
                $_SESSION['error'] = "Please Select Your Logo Image Less Then 20 MB";
                header("location:../../add-logo.php");
            }

            elseif (move_uploaded_file($_FILES["file"]["tmp_name"], $targetDir)) {
// Image db insert sql
                $insert_logo = "INSERT into logos (file_name, uploaded_on, status) values('$filename', NOW(), '2')";
                if ($db->query($insert_logo) === TRUE) {
                    $_SESSION['success'] = "You Are Successfully Uploaded Your Logo";
                    header('location:../../add-logo.php');
                }
                else {
                    $_SESSION['error'] = 'Error in uploading file Database - ' . $_FILES['file']['name'] . '<br/>';
                    header('location:../../add-logo.php');
                }

                $db->close();
            }
            else {
                $_SESSION['error'] = 'Error in uploading file - ' . $_FILES['file']['name'] . '<br/>';
                header('location:../../add-logo.php');
            }

        }
        else {
        $_SESSION['error'] = "Error Site Title Upload : ". $db->error;
        header('location:../../add-logo.php');
        }
        $db->close();
    }

    else {
        //        ======================================================
        $filename = $_FILES['file']['name'];
        $targetDir = "../../uploads/logos/".$filename;
        $image_size = $_FILES['file']['size'];
        $explode = explode('.', $filename);
        $extension = end($explode);
        $allowTypes = ['jpg', 'png', 'jpeg', 'gif'];

// Upload files and store in database
        if (empty($filename)) {
            $_SESSION['error'] = "Please Select Your Logo";
            header("location:../../add-logo.php");
        }

        elseif (!in_array($extension, $allowTypes)) {
            $_SESSION['error'] = "Please Select Your Logo Only PNG, JPG, JPEG, GIF Format";
            header("location:../../add-logo.php");
        }

        elseif ($image_size > 2000000) {
            $_SESSION['error'] = "Please Select Your Logo Image Less Then 20 MB";
            header("location:../../add-logo.php");
        }

        elseif (move_uploaded_file($_FILES["file"]["tmp_name"], $targetDir)) {
// Image db insert sql
            $insert_logo = "INSERT into logos (file_name, uploaded_on, status) values('$filename', NOW(), '2')";
            if ($db->query($insert_logo) === TRUE) {
                $_SESSION['success'] = "You Are Successfully Uploaded Your Logo";
                header('location:../../add-logo.php');
            }
            else {
                $_SESSION['error'] = 'Error in uploading file Database - ' . $_FILES['file']['name'] . '<br/>';
                header('location:../../add-logo.php');
            }

            $db->close();
        }
        else {
            $_SESSION['error'] = 'Error in uploading file - ' . $_FILES['file']['name'] . '<br/>';
            header('location:../../add-logo.php');
        }
    }