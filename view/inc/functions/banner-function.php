<?php
require 'inc/database/db_view.php';
$select_banner = "SELECT * FROM banners WHERE `status` = '1'";
$banner_result = mysqli_query($sql, $select_banner);
$banner_assoc  = mysqli_fetch_assoc($banner_result);