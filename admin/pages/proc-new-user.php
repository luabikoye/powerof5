<?php
session_start();
include('administrator-session.php');
include('connect.php');
require_once('fns.php');



$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$dob =  $_POST['dob'];
$address = $_POST['address'];
$city = $_POST['city'];
$state = $_POST['state'];

$country = $_POST['country'];
$zipcode = $_POST['zipcode'];
$mphone = $_POST['mphone'];
$nomineen = $_POST['nomineen'];
$nomineerel = $_POST['nomineerel'];
$bankname = $_POST['bankname'];
$beneficiary = $_POST['beneficiary'];
$acctnbr = $_POST['acctnbr'];
$accttype = $_POST['accttype'];


$plan = $_POST['plan'];
$price = plan_price($_POST['plan']);
$ref_user = $_POST['ref_user'];
$username = $_POST['username'];
$password = $_POST['password'];


$geo_id = get_geo_id();

if(check_user($username) == 'yes')
{
	$error = 'Sorry! This username ('.$username.') already exist. Try another one';
	include('add_user.php');
	exit;	
}

	
$query = "insert into profileupdate set
			date = '".date('Y-m-d')."',
			geo_id = '$geo_id',
			ref='".get_ref($geo_id)."',
			ref_user = '$ref_user',
			firstname = '$firstname',
			lastname = '$lastname',
			email = '$email',
			username = '$username',
			password = '$password',
			plan = '$plan',
			price = '$price',
			dob = '$dob',
			address = '$address',
			city = '$city',
			state = '$state',
			country = '$country',
			zipcode = '$zipcode',
			mphone = '$mphone',
			nomineen = '$nomineen',
			nomineerel = '$nomineerel',
			bankname = '$bankname',
			beneficiary = '$beneficiary',
			acctnbr = '$acctnbr',
			accttype = '$accttype',
			level = '0',
			reg_by = 'admin',
			status = 'Active'"; 


$result = mysql_query($query);
if($result)
{
	$subject = 'Welcome to the Powerof5ng.com';
	$mail_heading = 'Welcome to the Powerof5ng.com';
	$content = 'Welcome to Powerof5ng.com, The best MLM network in Nigeria.<br><br> Your account has been created with the credntials below.<br><br>Username: '.$username.'<br>Password: '.$password.'<br><br>Login to complete your registrations and explore the possibilies of learning and making money';
	send_mail($email, $firstname.' '.$lastname, $subject, $mail_heading,$content, 'noreply@powerof5ng.com');
	
	$correct = 'New user has been added to the portal';
	include('add_user.php');
}	
?>