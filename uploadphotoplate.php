<?php include "db.php";  
 mysql_select_db($mysql_database, $dbuser) or die("Opps some thing went wrong");
 
if($_FILES['file']['size'] > 0)
{

$name = $_FILES['file']['name'];
$tmpName = $_FILES['file']['tmp_name'];
$size = $_FILES['file']['size'];
$type = $_FILES['file']['type'];

$fp   =fopen($tmpName,'r');
$content = fread($fp, filesize($tmpName));
$content = addslashes($content);
fclose($fp);



$query ="INSERT INTO images (name, size, type, content)"."VALUES ('$name','$size','$type','$content')";

mysql_query($query) or die('Error, Query Failed');

}
?>

	