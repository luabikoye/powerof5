<?php
session_start();
include('administrator-session.php');
include('connect.php');
require_once('fns.php');



$id = $_POST['id'];
$username = $_POST['username'];
$plan = $_POST['plan'];
$current_level = $_POST['current_level'];
$level = $_POST['level'];

$email = col_val('profileupdate','username', $username, 'email');
$firstname = col_val('profileupdate','username', $username, 'firstname');
$lastname = col_val('profileupdate','username', $username, 'lastname');

if($current_level == $level)
{
	$error = 'You cannot upgrade to the same level. Choose a higher level';
	include('update_user.php');
	exit;
}

if($current_level > $level)
{
	$error = 'You cannot downgrade to a lower level. Choose a higher level';
	include('update_user.php');
	exit;
}

$earnings = get_earnings($level,$plan);
$new_stage = stage_name($level);

//Update account for user
make_payments($username,'Upgraded to '.$new_stage, $earnings, 'CREDIT');

$query = "update profileupdate set level = '$level', total_earnings = total_earnings+$earnings where username = '$username'";
$result = mysql_query($query);
if($result)
{
	$sms_msg = 'Hi '.$username.', you have been upgraded to: '.$new_stage.' and your earnings have been credited with: N'.number_format($earnings);
	send_sms($sms_msg,$mphone);
	
	
	$subject = 'You have been upgraded to '.$new_stage;
	$mail_heading = 'You have upgraded to '.$new_stage;
	$content = 'Congratulations! You have been upgraded to '.$new_stage.' and your earnings have been credited with the sum N'.number_format($earnings);
	
	send_mail($email, $firstname.' '.$lastname, $subject,$mail_heading,$content, 'noreply@powerof5ng.com');
	
	$correct = 'User account has been upgraded successfully with appropriate amount added to earnings.';
	include('update_user.php');
	exit;
}
else{
	echo 'Insertion error';
}


?>