<?php
session_start();
require '../database/db.php';

$email      = $_POST['email'];
$password   = $_POST['password'];

$select_user        = "SELECT COUNT(*) as logged_in, password FROM users WHERE email='$email'";
$get_user           = mysqli_query($db, $select_user);
$single_user        = mysqli_fetch_assoc($get_user);

$select_status = "SELECT * FROM users WHERE email='$email'";
$get_status    = mysqli_query($db, $select_status);
$single_status = mysqli_fetch_assoc($get_status);

if ($single_user['logged_in'] == 1 and $single_status['status'] == 1) {
    //if (password_verify($password, $single_user['password'])) {
        /****************************
         * Users Data Save ON Session
         ****************************/
        $_SESSION['id']                 = $single_status['id'];
        $_SESSION['fname']              = $single_status['fname'];
        $_SESSION['email']              = $single_status['email'];
        $_SESSION['password']           = $single_status['password'];
        $_SESSION['phone']              = $single_status['phone'];
        $_SESSION['birth_date']         = $single_status['birth_date'];
        $_SESSION['birth_year']         = $single_status['birth_year'];
        $_SESSION['location']           = $single_status['location'];
        $_SESSION['gender']             = $single_status['gender'];
        $_SESSION['role']               = $single_status['role'];
        $_SESSION['uname']              = $single_status['uname'];
        $_SESSION['photo']              = $single_status['photo'];
        $_SESSION['about_us']           = $single_status['about_us'];
        $_SESSION['languages']          = $single_status['languages'];
        $_SESSION['facebook']           = $single_status['facebook'];
        $_SESSION['twitter']            = $single_status['twitter'];
        $_SESSION['skype']              = $single_status['skype'];
        $_SESSION['state']              = $single_status['state'];
        $_SESSION['country']            = $single_status['country'];
        $_SESSION['positions']          = $single_status['positions'];
        $_SESSION['company_website']    = $single_status['company_website'];
        $_SESSION['start_job']          = $single_status['start_job'];
        $_SESSION['end_job']            = $single_status['end_job'];
        $_SESSION['about_job']          = $single_status['about_job'];
        $_SESSION['status']             = $single_status['status'];
        /**********************
         * Users Data Save End
         **********************/
        $_SESSION['log_in'] = "Successfully Login";
        setcookie('cuser', 'puser', time()+300);
        header("location:../../dashboard.php");
//    }
//    else {
//        $_SESSION['login_error'] = "Opps! Your Email or Password is Wrong";
//        header("location: ../../index.php");
//    }
}

elseif ($single_status['status'] == 2) {
    $_SESSION['pending_user'] = "Your Account is Pending for Approval";
    header("location: ../../index.php");
}

elseif ($single_status['status'] == 3) {
    $_SESSION['disable_user'] = "Your Account is Disable";
    header("location: ../../index.php");
}

else {
    $_SESSION['login_error'] = "Opps! Your Email or Password is Wrong";
    header("location: ../../index.php");
}