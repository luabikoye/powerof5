<?php
if(!isset($_SESSION['admin_user']))
{
	
	$error = 'You cannot access the selected page, Please login with the right priviledge';
	include('login.php');	
	exit;
}
?>