<?php include "db.php";
if(isset($_POST['upload']) && $_FILES['file']['size'] > 0)
{
$photoid = $_FILES['file']['photoid'];
$tmpNameId = $_FILES['file']['tmp_nameId'];
$photoidsize = $_FILES['file']['size'];
$type = $_FILES['file']['type'];

$photoplate = $_FILES['file']['photoplate'];
$tmpNamePlate = $_FILES['file']['tmp_namePlate'];
$photoplatesize = $_FILES['file']['size'];
$type = $_FILES['file']['type'];



$fp   =fopen($tmpNameId,'r');
$content = fread($fp, filesize($tmpNameId));
$contentId = addslashes($content);
fclose($fp);



if(!get_magic_quotes_gpc())
{
	$photoid = addslashes($photoid);
}

$gp   =fopen($tmpNamePlate,'r');
$contentPlate = fread($gp, filesize($tmpNamePlate));
$contentPlate = addslashes($contentPlate);
fclose($gp);
if(!get_magic_quotes_gpc())
{
	$photoplate = addslashes($photoplate);
}
$query ="INSERT INTO photoid (name, size, type, content)".
"VALUES ('$photoid','$photoidsize','$type','$contentId')";

mysql_query($query) or die('Error, Query Failed');

$platequery ="INSERT INTO photoplate(name, size, type, content)".
"VALUES ('$photoplate','$photoplatesize','$type','$contentId')";

mysql_query($platequery) or die('Error, Plate Query Failed');


echo "<br>File $photoid $photoplate uploaded<br>";
}
?>

	