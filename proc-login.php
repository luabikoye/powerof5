<?php 
session_start();
include('admin/pages/connect.php');
require_once('admin/pages/fns.php');



$user = $_POST['username'];
$pass = $_POST['password'];


if (!$user || !$pass) {
	
	$error = 'Enter Username and Password to continue';
	include('index.php');
	exit;
				
}


$query = "select * from profileupdate where username='$user' and password='$pass' or email='$user' and password='$pass'";
$result = mysql_query($query);
$num_result = mysql_num_rows($result);
$row = mysql_fetch_array($result);


if($num_result > 0)
{
	//get priveledge and redirect administrator to CMS
	$_SESSION['loggedin'] = $row['username'];
	$_SESSION['plan'] = $row['plan'];
	if($row['status'] == 'Active' && $row['acctnbr'] != '')
	{
		header("Location: genealogy.php");		
	}
	elseif($row['status'] == 'Active' && $row['acctnbr'] == '')
	{
		header("Location: profile-update.php?update=update");		
	}
	else
	{
		$loginerror = 'Your account has been suspended. Contact Admin.';
		include('form.php');
		exit;
	}
}
else
{
	$loginerror = 'Sorry! The Username or Password is invalid';
	include('form.php');
	exit;
}

?>