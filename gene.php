<?php 
session_start();
include('admin/pages/connect.php');
require_once('admin/pages/fns.php');


function Ssort_ref($user)
{
	$query1 = "select * from gene_tree where ref = '$user'";
	$result1 = mysql_query($query1);
	$num1 = mysql_num_rows($result1);
	$row1 = mysql_fetch_array($result1);
	
	
	if($num1 < DOWNLINE)
	{
		return $user;
	}
	else
	{
		$query = "select * from gene_tree where ref = '".$user."' limit 1";
		$result = mysql_query($query);
		$num = mysql_num_rows($result);
		$row = mysql_fetch_array($result);
		return Ssort_ref($row['user']);
	}
	
	
}

$user = 'Olumide'.date('U');

$query = "insert into gene_tree set user = '$user', ref = '".Ssort_ref('Bayo')."', root_ref = 'Bayo', stage = '0'";
$result = mysql_query($query);
echo 'ok';

?>




