<?php 
session_start();

if(!isset($_SESSION['loggedin']))
{
	header("Location: form.php?session=out");	
}


?>




