<?php
#-----------------------------------------------------#
# Coder: Abdul Qadir
# Date: 24/03/2022
#-----------------------------------------------------#

include_once('../../../config/config.php');
extract($_POST);
extract($_GET);

$obj_global = new global_class();

if(!empty($action) && $action == 'fetch-user'){
    echo $obj_global->loadUserData($_POST);
    exit;
}

if(!empty($action) && $action == 'delete_user'){
    echo $obj_global->delete_user($_POST);
    exit;
}


if(!empty($action) && $action == 'fetch-search-user'){
    echo $obj_global->searchUser($_POST);
    exit;
}

if(!empty($action) && $action == 'fetch-edit-user'){
    echo $obj_global->fetchEditUser($_POST);
    exit;
}

if(!empty($action) && $action == 'update-form'){
    echo $obj_global->updateUser($_POST);
    exit;
}

if(!empty($action) && $action == 'checkEmailEdit'){
    echo $obj_global->checkEmailEdit($_POST);
    exit;
}