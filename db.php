<?php


$mysql_hostname = "reconuserbase.db.7884262.hostedresource.com";
$mysql_user = "reconuserbase";
$mysql_password = "Chicken12!";
$mysql_database = "reconuserbase";

$mysql_hostname2 = "reconcarbase.db.7884262.hostedresource.com";
$mysql_user2 = "reconcarbase";
$mysql_password2 = "Chicken12!";
$mysql_database2 = "reconcarbase";





$dbuser = mysql_connect($mysql_hostname, $mysql_user, $mysql_password, true)
or die("Opps some thing went wrong with user db");

//$dbcar = mysql_connect($mysql_hostname2, $mysql_user2, $mysql_password2) or die ("Oops something went wrong with car db");

// mysql_select_db($mysql_database2, $dbcar) or die ("Oops something went wrong");
// mysql_select_db($mysql_database, $dbuser) or die("Opps some thing went wrong");


?>