<?php
require 'inc/database/db_view.php';
$select_logo = "SELECT * FROM logos WHERE `status` = '1'";
$logo_result = mysqli_query($sql, $select_logo);
$logo_assoc  = mysqli_fetch_assoc($logo_result);