<?php


$savefolder3 = 'imgsphotoinsurance';		// folder for upload
$savefolder4 = 'imgsphotoregistration';	
$max_size = 25000;			// maxim size for image file, in KiloBytes

// Allowed image types
$allowtype = array('bmp', 'gif', 'jpg', 'jpeg', 'gif', 'png');

/** Uploading the image **/

$rezultat3 = '';
// if is received a valid file
if (isset ($_FILES['photoinsurance'])) {
  // checks to have the allowed extension
  $type = end(explode(".", strtolower($_FILES['photoinsurance']['name'])));
  if (in_array($type, $allowtype)) {
    // check its size
	if ($_FILES['photoinsurance']['size']<=$max_size*1000) {
      // if no errors
      if ($_FILES['photoinsurance']['error'] == 0) {
        $thefile3 = $savefolder3 . "/" . $_FILES['photoinsurance']['name'];
        // if the file can`t be uploaded, return a message
        if (!move_uploaded_file ($_FILES['photoinsurance']['tmp_name'], $thefile3)) {
          $rezultat3 = 'The file can`t be uploaded, try again';
        }
        else {
          // Return the img tag with uploaded image.
          $rezultat3 = '<img src="'.$thefile3.'" />';
          //echo 'The image was successfully loaded';
		  
		  
		  
		  //add sql insert statements here
		  
		  
        }
      }
    }
	else { $rezultat3 = 'The file <b>'. $_FILES['photoinsurance']['name']. '</b> exceeds the maximum permitted size <i>'. $max_size. 'KB</i>'; }
  }
  else { $rezultat3 = 'The file <b>'. $_FILES['photoinsurance']['name']. '</b> has not an allowed extension'; }
}


$rezultat4 = '';
// if is received a valid file
if (isset ($_FILES['photoregistration'])) {
  // checks to have the allowed extension
  $type = end(explode(".", strtolower($_FILES['photoregistration']['name'])));
  if (in_array($type, $allowtype)) {
    // check its size
	if ($_FILES['photoregistration']['size']<=$max_size*1000) {
      // if no errors
      if ($_FILES['photoregistration']['error'] == 0) {
        $thefile4 = $savefolder4 . "/" . $_FILES['photoregistration']['name'];
        // if the file can`t be uploaded, return a message
        if (!move_uploaded_file ($_FILES['photoregistration']['tmp_name'], $thefile4)) {
          $rezultat4 = 'The file can`t be uploaded, try again';
        }
        else {
          // Return the img tag with uploaded image.
          $rezultat4 = '<img src="'.$thefile4.'" />';
          //echo 'The image was successfully loaded';
        
		
		  //add sql insert statements here
		
		}
      }
    }
	else { $rezultat4 = 'The file <b>'. $_FILES['photoregistration']['name']. '</b> exceeds the maximum permitted size <i>'. $max_size. 'KB</i>'; }
  }
  else { $rezultat4 = 'The file <b>'. $_FILES['photoregistration']['name']. '</b> has not an allowed extension'; }
}



// encode with 'urlencode()' the $rezultat and return it in 'onload', inside a BODY tag
//$rezultat3 = urlencode($rezultat3);
//echo '<body onload="parent.doneloading(\''.$rezultat3.'\')"></body>';
//$rezultat4 = urlencode($rezultat4);
//echo '<body onload="parent.doneloading(\''.$rezultat4.'\')"></body>';
?>
