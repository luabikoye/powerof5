<?php
 
  
@ $db = mysql_pconnect('localhost', 'powerof5_db', 'certification231');

  if (!$db)
  {
     echo 'Error: Could not connect to database server.  Please try again later.';
     exit;
  }

  $mysql = mysql_select_db('powerof5_db');
    if (!$mysql)
  {
     echo 'Error: Could not Select database.  Please try again later.';
     exit;
  }

  
  


?>