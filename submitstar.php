<?php
$mysql_hostname = "reconuserbase.db.7884262.hostedresource.com";
$mysql_user = "reconuserbase";
$mysql_password = "Chicken12!";
$mysql_database = "reconuserbase";

$rating = $_POST['star'];

mysql_connect($mysql_hostname, $mysql_user, $mysql_password, true)
or die("Oops something went wrong with the userDB");

mysql_select_db($mysql_database) or die("Can not select the database: ".mysql_error());

$ratingquery = mysql_query("INSERT INTO news_comments (rating) VALUES('".$rating"');
