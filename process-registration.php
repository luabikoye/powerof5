<?php 
session_start();
include('admin/pages/connect.php');
require_once('admin/pages/fns.php');

if(base64_decode($_GET['pay']) != 'true')
{
	header("form.php");
	exit;
}	

$fullname  =  explode(' ',$_SESSION['firstname']);
$email = $_SESSION['email'];
$mphone = $_SESSION['mphone'];
$username = $_SESSION['username'];
$password = $_SESSION['password'];
$ref_user = $_SESSION['ref_user'];
$plan = $_SESSION['plan'];
$price = plan_price($_SESSION['plan']);


$geo_id = get_geo_id();

$query = "insert into profileupdate set date = '".date('Y-m-d')."', geo_id = '".$geo_id."', ref='".get_ref($geo_id)."', ref_user = '".set_ref_user($ref_user)."', firstname = '".$fullname[0]."', lastname = '".$fullname[1]."', email = '$email', mphone = '$mphone', username = '$username', password = '$password', plan = '$plan', price = '$price', level = '0', reg_by = 'self'";
$result = mysql_query($query);
if($result)
{
	$subject = 'Welcome to the Powerof5ng.com';
	$mail_heading = 'Welcome to the Powerof5ng.com';
	$content = 'Welcome to the Powerof5ng.com, The best MLM network in Nigeria.<br><br> Your account has been created with the credntials below.<br><br>Username: '.$username.'<br>Password: '.$password.'<br><br>Login to complete your registrations and explore the possibilies of learning and making money';
	send_mail($email, $fullname[0].' '.$fullname[1], $subject,$mail_heading,$content, 'noreply@powerof5ng.com');
	
	$sms_msg = 'Welcome to the Powerof5ng.com. Your username: '.$username.' Password: '.$password;
	send_sms($sms_msg,$mphone);
	
	header("Location: profile-update.php?update=new");	
	exit;
}
else
{
	echo 'Insertion Error';	
}



?>




