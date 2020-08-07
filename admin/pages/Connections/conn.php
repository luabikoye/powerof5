<?php
/*
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_conn = "localhost";
$database_conn = "aikimaz_sahcol";
$username_conn = "aikimaz_sahcol";
$password_conn = "101certify231";
$conn = mysql_pconnect($hostname_conn, $username_conn, $password_conn) or trigger_error(mysql_error(),E_USER_ERROR); 
*/


$hostname_connect = "localhost";
$database_connect = "outsource_hr";
$username_connect = "outsource_hr";
$password_connect = "certification";
$connect = mysql_connect($hostname_connect, $username_connect, $password_connect); 

?>