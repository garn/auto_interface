<?php
define("SERVER_IP",'10.210.215.194');
define("PORT","3306");
define("DB_USER","root");
define("DB_PASSWD","123456");

$mysql_connect = mysql_connect(SERVER_IP.":".PORT, DB_USER, DB_PASSWD) or die("Could not connect: " . mysql_error()."\n");
$db_selected = mysql_select_db('tools', $mysql_connect) or die("Could not use db:".mysql_error()."\n");
$result=mysql_query("select * from log limit 1;") or die("Could not select query:".mysql_error()."\n");
echo mysql_result($result,0);
mysql_close($mysql_connect);
