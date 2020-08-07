<?php 
session_start();
include('admin/pages/connect.php');
require_once('admin/pages/fns.php');


$firstname = $_POST['firstname'];
$mphone = $_POST['mphone'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];
$ref_user = $_POST['ref_user'];
$plan = $_POST['plan'];

if ($firstname == 'Firstname Lastname' || $mphone == 'Mobile number' || $email == 'Email id' || $username == 'Username' || $password == 'Password' || !$plan) {
	
	$error = 'All information must be filled before you submit';
	include('form.php');
	exit;		
	 				
	}
	
	if(!eregi('^[a-zA-Z0-9_\-\.-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]', $email))
{
	$error = 'Sorry! You have entered an invalid email';
	include('form.php');
	exit;	
}


if(check_user($username) == 'yes')
{
	$error = 'Sorry! This username ('.$username.') already exist. Try another one';
	include('form.php');
	exit;	
}


if(check_reference($ref_user) == 'no')
{
	$error = 'Sorry! This reference ('.$ref_user.') does not exist on our network. Try another one';
	include('form.php');
	exit;	
}



if(count_reference($ref_user) == 'yes')
{
	$error = 'Sorry! The reference you selected already has 5 downline. Please enter a different reference username';
	include('form.php');
	exit;	
}


if(!$ref_user || $ref_user == 'Reference Username')
{
	$ref_user = first_ref_user($plan);
	$error = 'Sorry! You did not enter a reference username. We have generated a Reference for you continue.';
	include('form.php');
	exit;
	
}	

if($ref_user != '.')
{
	if(ref_plan($ref_user,$plan) == 'error')
	{
		if($plan == 'classic')
		{
			$diff_plan = 'premium';
		}else
		{
			$diff_plan = 'classic';
		}
	
	$error = 'Sorry! Your reference is on a the '.strtoupper($diff_plan).' plan. You will have to change your plan to be a downline';
	include('form.php');
	exit;
	}
}
$_SESSION['firstname'] = $_POST['firstname'];
$_SESSION['mphone'] = $_POST['mphone'];
$_SESSION['email'] = $_POST['email'];
$_SESSION['username'] = $_POST['username'];
$_SESSION['password'] = $_POST['password'];
$_SESSION['ref_user']  = $_POST['ref_user'];
$_SESSION['plan']  = $_POST['plan'];
$_SESSION['price']  = plan_price($_POST['plan']);
$_SESSION['total_price']  = paystack_price($_POST['plan']);


$e = base64_encode($_SESSION['email']);
$i = base64_encode(date('U'));

header("Location: ps_payment.php?e=$e&i=$i");

?>




