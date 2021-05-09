<?php
session_start();
require 'section-template/header.php';
require 'inc/view-functions/all-logos-function.php';
?>

<?php
require 'section-template/left-sidebar.php';
require 'section-template/topbar.php';
?>

<?php
include 'page-template/all-logos-content.php';
?>

<?php
require 'section-template/footer.php';
?>
