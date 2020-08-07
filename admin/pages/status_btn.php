
<?php
session_start();
include('connect.php');
include('administrator-session.php');
include('fns.php');

$id = base64_decode($_GET['id']);
$tab = base64_decode($_GET['tab']);
$amount = base64_decode($_GET['a']);
$restore = base64_decode($_GET['restore']); 
$return_url = base64_decode($_GET['return_url']); 
$username = base64_decode($_GET['u']); 


//mysql_query("delete from $tab where id = '$id'");
if($restore)
{
	//update tab nto show that payment has been paid or not
	mysql_query("update $tab set status = 'unpaid' where id = '$id'");
	
	//update user profile table to move funds back to appropriate table
	mysql_query("update profileupdate set processed_payment = processed_payment+ $amount where username = '$username'");
	
	//Remove this amount for payment record
	mysql_query("delete from payments where amount='$amount' and username = '$username' and transaction_type = 'DEBIT' and description = '".transfer_caption()."'");
	
}else
{
	//update tab nto show that payment has been paid or not
	mysql_query("update $tab set status = 'paid' where id = '$id'");
	
	//update user profile table to move funds back to appropriate table
	mysql_query("update profileupdate set processed_payment = processed_payment- $amount where username = '$username'");
	
	//Make payment available under payments table for breakdown calculaton
	make_payments($username, transfer_caption(), $amount, 'DEBIT');
}


header("Location: $return_url");

?>