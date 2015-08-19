<?php


$savefolder = 'imgsphotoid';		// folder for upload
$savefolder2 = 'imgsphotoplate';	
$max_size = 25000;			// maxim size for image file, in KiloBytes

// Allowed image types
$allowtype = array('bmp', 'gif', 'jpg', 'jpeg', 'gif', 'png');

/** Uploading the image **/

$rezultat = '';
// if is received a valid file
if (isset ($_FILES['photoid'])) {
  // checks to have the allowed extension
  $type = end(explode(".", strtolower($_FILES['photoid']['name'])));
  if (in_array($type, $allowtype)) {
    // check its size
	if ($_FILES['photoid']['size']<=$max_size*1000) {
      // if no errors
      if ($_FILES['photoid']['error'] == 0) {
        $thefile = $savefolder . "/" . $_FILES['photoid']['name'];
        // if the file can`t be uploaded, return a message
        if (!move_uploaded_file ($_FILES['photoid']['tmp_name'], $thefile)) {
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
	else { $rezultat = 'The file <b>'. $_FILES['photoid']['name']. '</b> exceeds the maximum permitted size <i>'. $max_size. 'KB</i>'; }
  }
  else { $rezultat = 'The file <b>'. $_FILES['photoid']['name']. '</b> has not an allowed extension'; }
}


$rezultat2 = '';
// if is received a valid file
if (isset ($_FILES['photoplate'])) {
  // checks to have the allowed extension
  $type = end(explode(".", strtolower($_FILES['photoplate']['name'])));
  if (in_array($type, $allowtype)) {
    // check its size
	if ($_FILES['photoplate']['size']<=$max_size*1000) {
      // if no errors
      if ($_FILES['photoplate']['error'] == 0) {
        $thefile2 = $savefolder2 . "/" . $_FILES['photoplate']['name'];
        // if the file can`t be uploaded, return a message
        if (!move_uploaded_file ($_FILES['photoplate']['tmp_name'], $thefile2)) {
          $rezultat2 = 'The file can`t be uploaded, try again';
        }
        else {
          // Return the img tag with uploaded image.
          $rezultat2 = '<img src="'.$thefile2.'" />';
          echo 'The image was successfully loaded';
		  
		  
		  
		  //add sql insert statements here
		  
		  
		  
        }
      }
    }
	else { $rezultat2 = 'The file <b>'. $_FILES['photoplate']['name']. '</b> exceeds the maximum permitted size <i>'. $max_size. 'KB</i>'; }
  }
  else { $rezultat2 = 'The file <b>'. $_FILES['photoplate']['name']. '</b> has not an allowed extension'; }
}



// encode with 'urlencode()' the $rezultat and return it in 'onload', inside a BODY tag
$rezultat = urlencode($rezultat);
echo '<body onload="parent.doneloading(\''.$rezultat.'\')"></body>';
$rezultat2 = urlencode($rezultat2);
echo '<body onload="parent.doneloading(\''.$rezultat2.'\')"></body>';
?>
