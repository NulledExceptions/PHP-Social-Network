<?php

$mysql_hostname = "reconuserbase.db.7884262.hostedresource.com";
$mysql_user = "reconuserbase";
$mysql_password = "Chicken12!";
$mysql_database = "reconuserbase";


mysql_connect($mysql_hostname, $mysql_user, $mysql_password, true)
or die("Opps some thing went wrong with user db");

mysql_select_db($mysql_database) or die("Can not select the database: ".mysql_error());

// $id = $_GET['id'];

// if(!isset($id) || empty($id) || !is_int($id)){
     // die("Please select your image!");
// }else{

$query = mysql_query("SELECT * FROM images WHERE id=1");
$row = mysql_fetch_array($query);
$content = $row['content'];

header('Content-type: image/jpg');
     echo $content;


?> 