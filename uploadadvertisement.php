<?php


include "db.php";



if(!empty($_POST['title']) && !empty($_POST['body']))
{


	//$path = $_SERVER['DOCUMENT_ROOT'] . '/user/';
	//$thisdir = getcwd();
	//$userfolder = "/user/";
    $title = mysql_real_escape_string($_POST['title']);
    $body = mysql_real_escape_string($_POST['body']);
    $user = mysql_real_escape_string($_POST['user']);
    //$birthday = mysql_real_escape_string($_POST['birthday']);
    	$date = time();
	


    
	 mysql_select_db($mysql_database, $dbuser) or die("Opps some thing went wrong");
	 
	$checkad = mysql_query("SELECT * FROM advertisments WHERE title = '".$title."'", $dbuser);
	 
	 
	
     
     if(mysql_num_rows($checkad) == 1)
     {
     	
     	echo "<h1>Error</h1>";
        echo "<p>Sorry, that advertisement title has already been used. Please go back and try again.</p>";
	exit;
     }
	 

     else
     {
     	$registeruserad = mysql_query("INSERT INTO advertisements (title, body, user, date) VALUES('".$title."', '".$body."','".$user."','".$date."')", $dbuser);
		//mkdir($path . $email, 0775);
		//mkdir($thisdir . $userfolder . $email, 0700);
		//mkdir("$email");
	//return;
     }
}

$savefolder = 'imgsadvertisments';		// folder for upload
//$savefolder2 = 'imgsphotoplate';	
$max_size = 25000;			// maxim size for image file, in KiloBytes

// Allowed image types
$allowtype = array('bmp', 'gif', 'jpg', 'jpeg', 'gif', 'png');

/** Uploading the image **/

$rezultat = '';
// if is received a valid file
if (isset ($_FILES['adimg'])) {
  // checks to have the allowed extension
  $type = end(explode(".", strtolower($_FILES['adimg']['name'])));
  if (in_array($type, $allowtype)) {
    // check its size
	if ($_FILES['adimg']['size']<=$max_size*1000) {
      // if no errors
      if ($_FILES['adimg']['error'] == 0) {
        $thefile = $savefolder . "/" . $_FILES['adimg']['name'];
        // if the file can`t be uploaded, return a message
        if (!move_uploaded_file ($_FILES['adimg']['tmp_name'], $thefile)) {
          $rezultat = 'The file can`t be uploaded, try again';
        }
        else {
          // Return the img tag with uploaded image.
          $rezultat = '<img src="'.$thefile.'" />';
	  //echo htmlentities($_SERVER['PHP_SELF']);
		
		  
		  //add sql insert statements here
		  
        }
      }
    }
	else { $rezultat = 'The file <b>'. $_FILES['adimg']['name']. '</b> exceeds the maximum permitted size <i>'. $max_size. 'KB</i>'; }
  }
  else { $rezultat = 'The file <b>'. $_FILES['adimg']['name']. '</b> has not an allowed extension'; }
}




// encode with 'urlencode()' the $rezultat and return it in 'onload', inside a BODY tag
$rezultat = urlencode($rezultat);
echo '<body onload="parent.doneloading(\''.$rezultat.'\')"></body>';
//$rezultat2 = urlencode($rezultat2);
//echo '<body onload="parent.doneloading(\''.$rezultat2.'\')"></body>';
?>
