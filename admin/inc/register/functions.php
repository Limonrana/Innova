<?php
session_start();
require ('../database/db.php');

$username       = htmlentities($_POST['username'], 1);
$email          = $_POST['email'];
$pass           = password_hash($_POST['password'], PASSWORD_BCRYPT);
$role           = $_POST['role'];
$phone          = $_POST['phone'];
$name           = htmlentities($_POST['name'], 1);
$location       = htmlentities($_POST['location'], 1);
$birth_date     = $_POST['birth_date'];
$birth_year     = $_POST['birth_year'];
$gender         = $_POST['gender'];
$about_us       = htmlentities($_POST['about_us'], 1);
$language       = $_POST['language'];
$facebook       = htmlentities($_POST['fb'], 1);
$twitter        = htmlentities($_POST['tw'], 1);
$skype          = htmlentities($_POST['skype'], 1);
$state          = $_POST['state'];
$country        = $_POST['country'];
$position       = htmlentities($_POST['position'], 1);
$cp_website     = htmlentities($_POST['company_website'], 1);
$start_job      = $_POST['start_job'];
$end_job        = $_POST['end_job'];
$about_job      = htmlentities($_POST['about_job'], 1);


//EMAIL VALIDATION
$regex          = '/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/';
//Password Require
$upper          = preg_match('@[A-Z]@', $pass);
$lower          = preg_match('@[a-z]@', $pass);
$numb           = preg_match('@[0-9]@', $pass);
$spcl           = preg_match('@[!,#,%,*]@', $pass);

//Photos Code
$select_photo   = $_FILES['picture'];
$photo_name     = $select_photo['name'];
$photo_tmp      = $select_photo['tmp_name'];
$photo_size     = $select_photo['size'];
$p_name_explode = explode('.', $photo_name);
$photo_ext      = end($p_name_explode);
$allowed_ext    = ['jpg', 'png', 'gif', 'jpeg'];


if ( empty($username) ) {
    $_SESSION['err_msg'] = "Please Insert Your User Name";
    header('location:../../register.php');
}

elseif ( empty($email) ) {
    $_SESSION['err_msg'] = "Please Insert Your Email Address";
    header('location:../../register.php');
}

elseif ( !preg_match($regex, $email) ) {
    $_SESSION['err_msg'] = "Please Insert Valid Email Address";
    header('location:../../register.php');
}

elseif ( empty($pass) ) {
    $_SESSION['err_msg'] = "Please Insert Your Password";
    header('location:../../register.php');
}

elseif ( !$upper || !$lower || !$numb ) {
    $_SESSION['err_msg'] = "Please Insert Your Valid Password ( Must Be A-Z, a-z, 0-9 and Special Character )";
    header('location:../../register.php');
}

elseif ( empty($photo_name) ) {
    $_SESSION['err_msg'] = "Please Upload Your Photo";
    header('location:../../register.php');
}

elseif ( $photo_size > 8000000 ) {
    $_SESSION['err_msg'] = "Please Upload Your Photo Less Than 8 MB";
    header('location:../../register.php');
}

elseif(!in_array( $photo_ext, $allowed_ext) ) {
    $_SESSION['err_msg'] = "Please Upload Your Photo Only JPG, PNG, JPEG, GIF Format";
    header('location:../../register.php');
}

elseif ( empty($phone) ) {
    $_SESSION['err_msg'] = "Please Insert Your Valid Phone Number";
    header('location:../../register.php');
}

elseif ( empty($role) ) {
    $_SESSION['err_msg'] = "Please Select Your Valid Role";
    header('location:../../register.php');
}

elseif ( empty($name) ) {
    $_SESSION['err_msg'] = "Please Insert Your Full Name";
    header('location:../../register.php');
}

elseif ( empty($location) ) {
    $_SESSION['err_msg'] = "Please Insert Your Valid Location";
    header('location:../../register.php');
}

elseif ( empty($birth_date) or empty($birth_year) ) {
    $_SESSION['err_msg'] = "Please Insert Your Valid Birthday";
    header('location:../../register.php');
}

elseif ( empty($gender) ) {
    $_SESSION['err_msg'] = "Please Select Your Valid Gender";
    header('location:../../register.php');
}

elseif ( empty($about_us) ) {
    $_SESSION['err_msg'] = "Please Write Something About You";
    header('location:../../register.php');
}

elseif ( empty($language) ) {
    $_SESSION['err_msg'] = "Please Select Your Language";
    header('location:../../register.php');
}

elseif ( empty($facebook) ) {
    $_SESSION['err_msg'] = "Please Insert Your Valid Facebook Link";
    header('location:../../register.php');
}

elseif ( empty($twitter) ) {
    $_SESSION['err_msg'] = "Please Insert Your Valid Twitter Link";
    header('location:../../register.php');
}

elseif ( empty($skype) ) {
    $_SESSION['err_msg'] = "Please Insert Your Valid Skype ID";
    header('location:../../register.php');
}

elseif ( empty($state) ) {
    $_SESSION['err_msg'] = "Please Insert Your Valid State Name";
    header('location:../../register.php');
}

elseif ( empty($country) ) {
    $_SESSION['err_msg'] = "Please Insert Your Valid Country Name";
    header('location:../../register.php');
}

elseif ( empty($position) ) {
    $_SESSION['err_msg'] = "Please Insert Your Valid Position";
    header('location:../../register.php');
}

elseif ( empty($cp_website) ) {
    $_SESSION['err_msg'] = "Please Insert Your Valid Company Website";
    header('location:../../register.php');
}

elseif ( empty($start_job) ) {
    $_SESSION['err_msg'] = "Please Insert Your Valid Start Job Date";
    header('location:../../register.php');
}

elseif ( empty($end_job) ) {
    $_SESSION['err_msg'] = "Please Insert Your Valid End Job Date";
    header('location:../../register.php');
}

elseif ( empty($about_job) ) {
    $_SESSION['err_msg'] = "Please Write About Your Job";
    header('location:../../register.php');
}

else {
    $sql = "INSERT INTO users (fname, email, password, uname, birth_date, birth_year, location, phone, gender, role, about_us, languages, facebook, twitter, skype, state, country, positions, 	company_website, start_job, end_job, about_job)
 VALUES('$name', '$email', '$pass', '$username', '$birth_date', '$birth_year', '$location', '$phone', '$gender', '$role', '$about_us', '$language', '$facebook', '$twitter', '$skype', '$state', '$country', '$position', '$cp_website', '$start_job', '$end_job', '$about_job')";

    if ($db->query($sql) === TRUE) {
        $last_id    = mysqli_insert_id($db);
        $file_name  = $last_id.'.'.$photo_ext;
        $photo_loc  = '../../uploads/users/'.$file_name;
        move_uploaded_file($photo_tmp, $photo_loc);
        $update_data = "UPDATE users SET photo='$file_name' WHERE id='$last_id'";
        if ($db->query($update_data) === TRUE) {
            $_SESSION['success_reg'] = "You Are Successfully Registered";
            header('location:../../index.php');
        } else {
            $_SESSION['err_msg'] = "Error updating record: " . $conn->error;
            header('location:../../register.php');
        }
        $db->close();

    } else {
        $_SESSION['err_msg'] = "Error: " . $update_data . "<br>" . $db->error;
        header('location:../../register.php');
    }

    $db->close();
}
