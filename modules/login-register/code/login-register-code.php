<?php
#-----------------------------------------------------#
# Coder: Abdul Qadir
# Date: 24/03/2022
#-----------------------------------------------------#

include_once('../../../config/config.php');
extract($_POST);
extract($_GET);

$obj_global = new global_class();

if (!empty($action) && $action == 'register-form') {
    if ($_FILES) {
        if (!is_dir('../../../profile-pic')) {
            mkdir('../../../profile-pic', 0777, true);
        }
        $target_dir = '../../../profile-pic/';
        $allowed_ext = ['jpg', 'JPG', 'JPEG', 'jpeg', 'png', 'PNG'];
        $file_ext = explode('.', $_FILES['profile_pic']['name']);
        $fileName = date('d-m-Y-H-i-s') . '.' . $file_ext[1];
        if (in_array($file_ext[1], $allowed_ext)) {
            if (move_uploaded_file($_FILES['profile_pic']['tmp_name'], $target_dir . $fileName)) {
                $_POST['file-path'] = 'profile-pic/' . $fileName;
                echo $obj_global->register_user($_POST);
            } else {
                echo 'Somthing went wrong please retry!';
            }
        } else {
            echo 'file formate not allowed!';
        }
    } else {
        echo $obj_global->register_user($_POST);
    }
    exit;
}

if (!empty($action) && $action == 'checkEmail') {
    echo $obj_global->checkEmail($_POST);
}

if (!empty($action) && $action == 'login-form') {
    echo $obj_global->loginUser($_POST);
}
