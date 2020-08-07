<?php 
session_start();
include('admin/pages/connect.php');
require_once('admin/pages/fns.php');

if($_SESSION['username'])
{
	$username = $_SESSION['username'];
}else{
	
	$username = $_SESSION['loggedin'];
}


$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$password = $_POST['password'];
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


if (!$firstname || !$lastname || !$dob || !$country) {
	
	$error = 'All information must be filled before you submit';
	include('index.php');
	exit;		
	 				
	}






$query = "update profileupdate set
			firstname = '$firstname',
			lastname = '$lastname',
			Email = '$email',
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
			status = 'Active' where username = '".$username."'"; 


$result = mysql_query($query);

if ($result)
{
	if(isset($_SESSION['loggedin']))
	{
		$updated = 'yes';
		include('genealogy.php');
	}else
	{
	$correct = 'Thank you for joining our team, you can start referring people using your user name or the link below: <br>'.domain_name().'?u='.$_SESSION['username'];
	
	$_SESSION['loggedin'] = $_SESSION['username'];
	include('member-area.php');
	}

}
else
{
	echo 'Database Error';

	exit;	
}




?>




