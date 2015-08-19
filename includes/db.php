<?php
$mysql_hostname = "reconuserbase.db.7884262.hostedresource.com";
$mysql_user = "reconuserbase";
$mysql_password = "Chicken12!";
$mysql_database = "reconuserbase";

  //marneezypeople.db.7884793.hostedresource.com


  $link=mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die ("couldnot connect: ".mysql_error());
  mysql_select_db($mysql_database, $link)  or exit('Error Selecting database: '.mysql_error()); ;
  
?>