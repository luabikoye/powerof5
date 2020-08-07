<?php

session_start();
include('admin/pages/connect.php');
require_once('admin/pages/fns.php');

$password = $_POST['password'];
$confirm = $_POST['confirm'];


if(!$password || !$confirm)
{
	$error = 'Kindly enter your new password and confimation before you continue';
	include('change-password.php');
	exit;
}

if($password != $confirm)
{
	$error = 'Error: Your password and confirmation are not the same';
	include('change-password.php');
	exit;
}

if(strlen($password) < 6)
{
	$error = 'Error: Your password must be more 6 characters';
	include('change-password.php');
	exit;
}

$query = "update profileupdate set password = '$password' where username = '".$_SESSION['loggedin']."'";
			
$result = mysql_query($query);
if($result)
{
	$correct = 'Your new password has been updated.';
	include('change-password.php');
	exit;
}

?>