<?php
session_start();
include('session-admin.php');
include('admin/pages/connect.php');
require_once('admin/pages/fns.php');



$id = $_GET['id'];
$amount = base64_decode($_GET['a']);
$username = base64_decode($_GET['u']);

//Update user profile to update table
$query = "update profileupdate set processed_payment = processed_payment+ $amount, total_earnings = total_earnings-$amount where id = '$id'";
$result = mysql_query($query);
if($result)
{
	
	//create records in pending payment table.
	mysql_query("insert into pending_payments set username = '$username', date_time = '".now()."', amount = '$amount', status ='unpaid'");
	
	header("Location: my-earnings.php?correct=yes");
	exit;
}
else{
	echo 'Insertion error';
}


?>