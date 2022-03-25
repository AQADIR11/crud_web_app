<?php
session_start();
error_reporting(0);

$db = new mysqli('localhost','root','','test_data');

include_once('../../../classes/golabl_class.php');