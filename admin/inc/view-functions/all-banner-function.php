<?php
require 'inc/database/db.php';
$select_banner = "SELECT * FROM banners";
$banner_result = mysqli_query($db, $select_banner);