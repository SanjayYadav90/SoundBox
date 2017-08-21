<?php
   $mysql_hostname ="localhost";
   $mysql_user ="root";
   $mysql_password ="sqlpassword";
   $mysql_database ="rockstar";
   $bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("CCould not connect to the database, check dbConnection.php and your MySql DB.");
   mysql_select_db($mysql_database, $bd) or die("Couldn't select / found database");
?>