<?php
session_start();
include('connect.php');



$user = $_POST['username'];
$pass = $_POST['password'];

if (!$user || !$pass)
{
$error = 'Enter credentials before you login';
 include('login.php');
 exit;
}
$query = "select * from login where
              user = '$user' and
              pass = '$pass'";

    $result = mysql_query( $query );
    $num = mysql_num_rows($result);
    $row = mysql_fetch_array($result);
    if(!$result)
    {
      echo 'Cannot run query.';
      exit;
    }

    if ( $num > 0 )
    {
      // visitor's name and password combination are correct
	  $_SESSION['admin_user'] = $user;
      include('index.php');
    }
    else
    {
      // visitor's name and password combination are not correct
    $error = 'Login failed - Please try again';
 include('login.php');
    }

?>
