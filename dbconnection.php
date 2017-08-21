<?php
$mysql_hostname ="localhost";
$mysql_user ="root";
$mysql_password ="sqlpassword";
$mysql_database ="phpauth";
$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect to the database, check dbConnection.php and your MySql DB.");
mysql_select_db($mysql_database, $bd) or die("Could not select MySql database");
?>

