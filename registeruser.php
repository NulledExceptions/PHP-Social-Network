<?php

include "db.php";
session_start();


if(!empty($_POST['email']) && !empty($_POST['password']))
{
	
    $password = mysql_real_escape_string($_POST['password']);
    $email = mysql_real_escape_string($_POST['email']);
    $sex = mysql_real_escape_string($_POST['sex']);
    $birthday = mysql_real_escape_string($_POST['birthday']);
	$folder= md5($email);
	


    
	 mysql_select_db($mysql_database, $dbuser) or die("Opps some thing went wrong");
	 
	$checkemail = mysql_query("SELECT * FROM users WHERE email = '".$email."'", $dbuser);
	 
	 
	
     
     if(mysql_num_rows($checkemail) == 1)
     {
     	
     
        $_SESSION['status'] =  "<h1>Error</h1>Email taken";
	exit;
     }
	 

     else
     {
	 	 //$path = $_SERVER['DOCUMENT_ROOT'] . '/mp0/user/';
		// $thisdir = getcwd();
		$userfolder = "user/";
		$uploads = "uploads/";
		$uploadsf = "/";
     	$registeruserquery = mysql_query("INSERT INTO users (password, email, sex, birthday) VALUES('".$password."', '".$email."','".$sex."','".$birthday."')", $dbuser);
		     if($registeruserquery)
       {
		
		$_SESSION['status'] =  "<h1>Sucess</h1><p>Your user data was saved and username has been created.</p><p> Please login to continue to the members area";
		
		 if(mkdir("$userfolder$folder", 0777)){
			 $_SESSION['dirstatus'] = "good";
			
		
		 }else{
				 $_SESSION['dirstatus'] = "failed";
			
		 }
		} else{
		echo "failed, couldnt effin save";
		
		}
		
		//if(mkdir("$userfolder$folder$uploadsf$uploads", 0777)){
			// $_SESSION['dirstatus'] = "good";
			
		
	//	 }else{
		//		 $_SESSION['dirstatus'] = "failed";
			
		 //}
		//} else{
		//echo "failed, couldnt effin save";
		
	//	}
	
	
	return;
     }
} else {
$_SESSION['dirstatus'] = "not posted";
}
	
		
?>
	
	
	
