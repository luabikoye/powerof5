<?php
session_start();
include('administrator-session.php');
include('connect.php');
require_once('fns.php');



$username = $_POST['username'];
$ref_user = $_POST['ref_user'];

mysql_query("update profileupdate set ref_user = '$ref_user' where username = '$username'");

header("Location: registered_members.php");
	
?>