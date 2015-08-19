<?php
//include('db.php');
if(!isset($_SESSION))
{
session_start();
}
$session_id=$_SESSION['uid']; // User session id
$path = "imgs/";

$valid_formats = array("jpg", "png", "gif", "bmp","jpeg");
if(isset($_POST)) //and $_SERVER['REQUEST_METHOD'] == "POST")
{
$name = $_FILES['ad3_fu']['name'];
$size = $_FILES['ad3_fu']['size'];
if(strlen($name))
{
list($txt, $ext) = explode(".", $name);
if(in_array($ext,$valid_formats))
{
if($size<(1024*10240)) // Image size max 10 MB
{
$actual_image_name = time().".".$ext;
$tmp = $_FILES['ad3_fu']['tmp_name'];
if(move_uploaded_file($tmp, $path.$actual_image_name))
{
mysql_query("UPDATE users SET profile_image='$actual_image_name' WHERE uid='$session_id'");
echo "<img src='imgs/".$actual_image_name."' class='preview'>";
}
else
echo "failed";
}
else
echo "Image file size max 10 MB";
}
else
echo "Invalid file format..";
}
else
echo "Please select image..!";
exit;
}
?>