<?php
session_start();
$thumb_name = $_SESSION['profile_pic'];
$location = $_SESSION['profile_pic_location'];
$pic = $location.$thumb_name;
echo '<img src="'.$pic.'">';
//$email = $_SESSION['email'];
//$profilepic = $_SESSION['profile_pic'];
//	echo $profilepic;
//$folder = "user/";
//$userfolder = md5($email);
//$backslash = "/";
//$pic = ''.$folder.''.$userfolder.''.$backslash.''.$profilepic.'';
//echo $pic;
	//echo $profilepic;
  //   

	//	if($profilepic == NULL){
		//	$rezultat = '<img src="icons/defaultprofile.jpg"  />';
		
	//	}else{
			
			//$rezultat = '<img src="user/'.$userfolder.'/'.$pic.'" />';
		//	$rezultat = '<img src="'.$pic.'"/>';
		//}


    //   $rezultat = '<img src="StatePlates/'.$myPlateState.'" />';
//	 echo $rezultat;
	// echo htmlentities($rezultat);
// return $rezultat;
	// echo htmlentities($_SERVER['PHP_SELF']);
	
       

?>