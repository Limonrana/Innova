<?php
require 'inc/database/db.php';
$site_identity          = "SELECT * FROM site_identity WHERE status='1'";
$site_identity_result   = mysqli_query($db, $site_identity);
$after_fatch            = mysqli_fetch_assoc($site_identity_result);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title><?php echo $after_fatch['site_title'] ?? ''; ?> - Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="<?php echo $after_fatch['site_description'] ?? ''; ?>" name="description" />
    <meta content="<?php echo $after_fatch['site_title'] ?? ''; ?>" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- App css -->
    <link href="assets/css/dropzone.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/metismenu.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/datepicker.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/sweetalert2.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/bootstrap-select.min.css" rel="stylesheet" type="text/css" />
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet" type="text/css" />

    <script src="assets/js/modernizr.min.js"></script>

</head>