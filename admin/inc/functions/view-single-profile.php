<?php
require 'inc/database/db.php';

//$id = $_GET['id'];
//$user_data = "SELECT * FROM users where id=$id";
//$user_data_select = mysqli_query($db, $user_data);
//$after_fetch = mysqli_fetch_assoc($user_data_select);

if ($_SESSION['role'] == 1) {
    $role_name = strtoupper("Admin");
}

elseif ($_SESSION['role'] == 2) {
    $role_name = strtoupper("Moderator");
}

elseif ($_SESSION['role'] == 3) {
    $role_name = strtoupper("Editor");
}

else {
    $role_name = strtoupper("Subscriber");
}