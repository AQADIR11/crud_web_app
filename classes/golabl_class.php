<?php
#-----------------------------------------------------#
# Coder: Abdul Qadir
# Date: 24/03/2022
#-----------------------------------------------------#

class global_class
{

    function register_user($dataArray)
    {
        global $db;
        $sql = "INSERT INTO users (name, email, phone, password, gender, dob, address, profile_pic_path, user_type)VALUES('" . $dataArray['name'] . "', '" . $dataArray['email'] . "', '" . $dataArray['phone'] . "', '" . MD5($dataArray['password']) . "', '" . $dataArray['gender'] . "', '" . $dataArray['dob'] . "', '" . $dataArray['address'] . "', '" . $dataArray['file-path'] . "', 2)";
        if ($db->query($sql) === TRUE) {
            return 'success';
        } else {
            return 'Somthing Not Right Please Retry!';
        }
    }

    function checkEmail($dataArray)
    {
        global $db;
        $sql = "SELECT email FROM users WHERE email = '" . $dataArray['value'] . "'";
        $result = $db->query($sql);
        if ($result->num_rows > 0) {
            return 'success';
        } else {
            return 'fail';
        }
    }

    function loginUser($dataArray)
    {
        global $db;
        $sql = "SELECT * FROM users WHERE email = '" . $dataArray['login_email'] . "' AND password = '" . MD5($dataArray['login_pass']) . "'";
        $result = $db->query($sql);
        if ($result->num_rows > 0) {
            $row = mysqli_fetch_assoc($result);
            if ($row['user_type'] == 0) {
                $_SESSION['login'] = 'super admin';
                return 'super admin';
            }
            if ($row['user_type'] == 1) {
                $_SESSION['login'] = 'admin';
                return 'admin';
            }
            if ($row['user_type'] == 2) {
                $_SESSION['login'] = 'user';
                return 'user';
            }
        }else{
            return 'Invalid Username OR Password';
        }
    }

    function loadUserData($dataArray)
    {
        global $db;
        $record_per_page = 10;
        $page = "";
        $total_pages = 0;
        if (isset($dataArray['pageid'])) {
            $page = $dataArray['pageid'];
        } else {
            $sqlcount = "SELECT email From users WHERE user_type = 2";
            $result = $db->query($sqlcount);
            $total_record = $result->num_rows;
            $total_pages = ceil($total_record / $record_per_page);
            $page = 1;
        }
        $offset = ($page - 1) * $record_per_page;
        $sql = "SELECT * FROM users WHERE user_type = 2 LIMIT {$offset}, {$record_per_page}";
        $result = $db->query($sql);
        if ($result->num_rows > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $row['total_pages'] = $total_pages;
                $json_data[] = $row;
            }
            return json_encode($json_data);
        } else {
            return 'No Record Found';
        }
    }

    function delete_user($dataArray)
    {
        global $db;
        $sql = "DELETE FROM users WHERE id = " . $dataArray['id'] . "";
        if ($db->query($sql) === TRUE) {
            return 'success';
        } else {
            return 'fail';
        }
    }

    function searchUser($dataArray)
    {
        global $db;
        $value = $dataArray['value'];
        $sql = "SELECT * FROM `users` WHERE (CONVERT(`id` USING utf8) LIKE '%$value%' OR CONVERT(`name` USING utf8) LIKE '%$value%' OR CONVERT(`email` USING utf8) LIKE '%$value%' OR CONVERT(`phone` USING utf8) LIKE '%$value%' OR CONVERT(`gender` USING utf8) LIKE '%$value%' OR CONVERT(`dob` USING utf8) LIKE '%$value%')";
        $result = $db->query($sql);
        if ($result->num_rows > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $json_data[] = $row;
            }
        }
        return json_encode($json_data);
    }

    function fetchEditUser($dataArray)
    {
        global $db;
        $sql = "SELECT * FROM users WHERE id = " . $dataArray['id'] . "";
        $result = $db->query($sql);
        $row = mysqli_fetch_assoc($result);
        return json_encode($row);
    }

    function checkEmailEdit($dataArray)
    {
        global $db;
        $sql = "SELECT email FROM users WHERE id != " . $dataArray['id'] . " AND email = '" . $dataArray['value'] . "' AND user_type = 2";
        $result = $db->query($sql);
        if ($result->num_rows > 0) {
            return 'success';
        } else {
            return 'fail';
        }
    }

    function updateUser($dataArray)
    {
        global $db;
        $sql = "UPDATE users SET name = '" . $dataArray['name'] . "', email = '" . $dataArray['email'] . "', phone = '" . $dataArray['phone'] . "', password = '" . MD5($dataArray['password']) . "', dob = '" . $dataArray['dob'] . "', address = '" . $dataArray['address'] . "', gender = '" . $dataArray['gender'] . "', profile_pic_path = '" . $dataArray['profile_pic'] . "' WHERE id = " . $dataArray['id'] . "";
        if ($db->query($sql) === TRUE) {
            return 'success';
        } else {
            return 'fail';
        }
    }
}
