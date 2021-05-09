<?php
session_start();
require '../database/db.php';

$users_id       = $_POST['id'];
$name           = $_POST['name'];
$email          = $_POST['email'];
$pass           = $_POST['password'];
$c_pass         = $_POST['confirm_password'];
$birth          = $_POST['birth'];
$location       = $_POST['location'];
$phone          = $_POST['phone'];
$gender         = $_POST['gender'];
$role           = $_POST['role'];
$status         = $_POST['status'];

//EMAIL VALIDATION
$regex          = '/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/';
//Password Require
$upper          = preg_match('@[A-Z]@', $pass);
$lower          = preg_match('@[a-z]@', $pass);
$numb           = preg_match('@[0-9]@', $pass);
$spcl           = preg_match('@[!,#,%,*]@', $pass);

if ( empty($name) ) {
    $_SESSION['err_msg'] = "Please Insert Your Full Name";
    header('location:../../edit-profile.php?id='. $users_id);
}

elseif ( empty($email) ) {
    $_SESSION['err_msg'] = "Please Insert Your Email Address";
    header('location:../../edit-profile.php?id='. $users_id);
}

elseif ( !preg_match($regex, $email) ) {
    $_SESSION['err_msg'] = "Please Insert Valid Email Address";
    header('location:../../edit-profile.php?id='. $users_id);
}

elseif ( empty($pass) ) {
    $_SESSION['err_msg'] = "Please Insert Your Password";
    header('location:../../edit-profile.php?id='. $users_id);
}

elseif ( !$upper || !$lower || !$numb ) {
    $_SESSION['err_msg'] = "Please Insert Your Valid Password ( Must Be A-Z, a-z, 0-9 and Special Character )";
    header('location:../../edit-profile.php?id='. $users_id);
}

elseif ( $pass != $c_pass ) {
    $_SESSION['err_msg'] = "DO Not Match Your Password";
    header('location:../../edit-profile.php?id='. $users_id);
}

//elseif ( empty($birth) ) {
//    $_SESSION['err_msg'] = "Please Insert Your Valid Birthday";
//    header('location:../../edit-profile.php?id='. $users_id);
//}

elseif ( empty($location) ) {
    $_SESSION['err_msg'] = "Please Insert Your Valid Location";
    header('location:../../edit-profile.php?id='. $users_id);
}

elseif ( empty($phone) ) {
    $_SESSION['err_msg'] = "Please Insert Your Valid Phone Number";
    header('location:../../edit-profile.php?id='. $users_id);
}

elseif ( empty($gender) ) {
    $_SESSION['err_msg'] = "Please Select Your Valid Gender";
    header('location:../../edit-profile.php?id='. $users_id);
}

elseif ( empty($role) ) {
    $_SESSION['err_msg'] = "Please Select Your Valid Role";
    header('location:../../edit-profile.php?id='. $users_id);
}

else {
    $update = "UPDATE users SET fname='$name', email='$email', password='$pass', location='$location', phone='$phone', gender='$gender', role='$role', status='$status' WHERE id='$users_id'";

    if ($db->query($update) === TRUE) {
        $_SESSION['sucess_update'] = "You Are Successfully Updated";
        header('location:../../profile.php?id='. $users_id);
    } else {
        $_SESSION['err_msg'] = "Error: " . $sql . "<br>" . $conn->error;
        header('location:../../edit-profile.php?id='. $users_id);
    }

    $db->close();
}