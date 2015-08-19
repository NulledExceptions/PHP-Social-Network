<?php

session_start();
include "db.php";

$uid = $_SESSION['uid'];
$folder = md5($_SESSION['email']);
$email=$_SESSION['email'];
//echo $email;echo "    ";
//$savefolder = 'user/'.$_SESSION['email'].'/';		// folder for upload
$savefolder = 'user/'.$folder.'';
$savefolder2 = 'testwall/wall/profile_pic';

$file = $_FILES['file']['name'];

$filename =  $_FILES['file']['name'];

$max_size = 25000;			// maxim size for image file, in KiloBytes

// Allowed image types
$allowtype = array('bmp', 'gif', 'jpg', 'jpeg', 'gif', 'png');

/** Uploading the image **/

$rezultat = '';
// if is received a valid file
if (isset ($_FILES['file'])) {
  // checks to have the allowed extension
  $type = end(explode(".", strtolower($_FILES['file']['name'])));
  if (in_array($type, $allowtype)) {
    // check its size
	if ($_FILES['file']['size']<=$max_size*1000) {
      // if no errors
      if ($_FILES['file']['error'] == 0) {
	  $the2ndfile=  $savefolder2 . "/" . $_FILES['file']['name'];
        $thefile = $savefolder . "/" . $_FILES['file']['name'];
        // if the file can`t be uploaded, return a message
        if (!move_uploaded_file ($_FILES['file']['tmp_name'], $thefile)) {
          $rezultat = 'The file can`t be uploaded, try again';
        }
        // else if (!move_uploaded_file ($_FILES['file']['tmp_name'], $the2ndfile)) {
          // $rezultat = 'The file can`t be uploaded to the testwall folder, try again';
        // }
        else {
          // Return the img tag with uploaded image.
          $rezultat = '<img src="'.$thefile.'"  />';
	  //echo htmlentities($_SERVER['PHP_SELF']);
		
		  
		 mysql_select_db($mysql_database, $dbuser) or die("Opps some thing went wrong");
//	$checkemail = mysql_query("SELECT * FROM users WHERE email = '".$email."'", $dbuser);
	 
	 
	
     
    // if(mysql_num_rows($checkemail) == 1)
    // {
	//	$info = mysql_fetch_assoc($checkemail);
		//if($info['profile_pic'] = ''){
			//echo "Profile pic = null";
			$theothersavefolder = $savefolder . "/" . "";
	 	$profilepicquery =  mysql_query("UPDATE users SET profile_pic = '".$filename."' WHERE uid = '".$uid."';"); 
		 	$profilepicquery =  mysql_query("UPDATE users SET profile_pic_location = '".$theothersavefolder."' WHERE uid = '".$uid."';"); 
	
				if($profilepicquery)
		
				{	$_SESSION['old_prof_pic'] = $_SESSION['profile_pic'];
					$_SESSION['profile_pic'] = $filename;
					$_SESSION['profile_pic_location']=$theothersavefolder;
					echo "sucessfly updated users profile info.";
				}else { 
		
					echo "could not change user profile pic info";
				}
	 
	 
	 
		//}	else 
	//	{
	//	echo "user has a profile pic homie";
		//}
     	
		//  }
        }
      }
    }
	else { $rezultat = 'The file <b>'. $_FILES['file']['name']. '</b> exceeds the maximum permitted size <i>'. $max_size. 'KB</i>'; }
  }
  else { $rezultat = 'The file <b>'. $_FILES['file']['name']. '</b> has not an allowed extension'; }
}








// encode with 'urlencode()' the $rezultat and return it in 'onload', inside a BODY tag
$rezultat = urlencode($rezultat);
echo '<body onload="parent.doneloading(\''.$rezultat.'\')"></body>';

?>
