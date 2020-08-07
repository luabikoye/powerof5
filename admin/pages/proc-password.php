<?php
session_start();

include('connect.php');

$password = $_POST['password'];
$confirm = $_POST['confirm'];

if(!$password || !$confirm)
{
	$error = 'Kindly enter your new password and confimation before you continue';
	include('change_pass.php');
	exit;
}

if($password != $confirm)
{
	$error = 'Error: Your password and confirmation are not the same';
	include('change_pass.php');
	exit;
}

$query = "update login set pass = '$password' where user = '".$_SESSION['admin_user']."'";
			
$result = mysql_query($query);
if($result)
{
	$correct = 'Your new password has been updated.';
	include('change_pass.php');
	exit;
}

?>