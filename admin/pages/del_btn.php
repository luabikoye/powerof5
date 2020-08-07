
<?php
session_start();
include('connect.php');
include('administrator-session.php');
include('fns.php');

$id = base64_decode($_GET['id']);
$tab = base64_decode($_GET['tab']);
$restore = base64_decode($_GET['restore']); 
$return_url = base64_decode($_GET['return_url']); 



//mysql_query("delete from $tab where id = '$id'");
if($restore)
{
	mysql_query("update $tab set status = 'Suspended' where id = '$id'");
}else
{
	mysql_query("update $tab set status = 'Active' where id = '$id'");	
}


header("Location: $return_url");

?>