<?php

// Configure your CMS by editing these values!

$dbhost = 'localhost:3306'; 						// Database host:port
$dbuser = 'root';									// Database username
$dbpass = 'ascent';									// Database password
$dbname = 'cms';									// Database name
$realmlist = 'set realmlist logon.myserver.com';	// Realmlist

$conn = mysql_connect($dbhost, $dbuser, $dbpass) or die  ('Error connecting to MySQL!');
mysql_select_db($dbname);
?>