<?php

include "db.php";



if(!empty($_POST['email']) && !empty($_POST['password']))
{
	
    $password = mysql_real_escape_string($_POST['password']);
    $email = mysql_real_escape_string($_POST['email']);
	$firstname = mysql_real_escape_string($_POST['fname']);
	$lastname  = mysql_real_escape_string($_POST['lname']);
	$state = mysql_real_escape_string($_POST['state']);
	$plate = mysql_real_escape_string($_POST['plate']);
	$make = mysql_real_escape_string($_POST['make']);
	$model = mysql_real_escape_string($_POST['model']);
	$color = mysql_real_escape_string($_POST['color']);
	$year = mysql_real_escape_string($_POST['year']);

    
	 mysql_select_db($mysql_database, $dbuser) or die("Opps some thing went wrong");
	 $checkplate =  mysql_query("SELECT * FROM users WHERE plate = '".$plate."'", $dbuser);
	 
	 


    
	 $checkusername = mysql_query("SELECT * FROM users WHERE email = '".$email."'", $dbuser);
	 
	 
	
     
     if(mysql_num_rows($checkusername) == 1)
     {
     	
     	echo "<h1>Error</h1>";
        echo "<p>Sorry, that username is taken. Please go back and try again.</p>";
     }
	 
	 elseif(mysql_num_rows($checkplate) == 1) {
	header('Location: http://www.oopsner.com/steve/index.php');
	  
     	echo "<h1>Error</h1>";
        echo "<p>Sorry, that plate is already registered.  If this is truly your plate id, Please contact support.</p>";
     
	 
	 }
     else
     {
     	$registeruserquery = mysql_query("INSERT INTO users (password, email, fname, lname, plate) VALUES('".$password."', '".$email."','".$firstname."','".$lastname."','".$plate."')", $dbuser);
		
		
     // if($registeruserquery)
       // {
        	// echo "<h1>Success</h1>";
        	// echo "<p>Your user data was saved and  created. Please <a href=\"index.php\">click here to login</a>.</p>";
        // }
        // else
        // {
     		// echo "<h1>Error</h1>";
        	// echo "<p>Sorry, your user data did not save. Please go back and try again.</p>";    
			
        // }
		
		//mysql_select_db($mysql_database2, $dbcar) or die ("Oops something went wrong");
		// mysql_select_db($mysql_cardatabase, $carbd) or die("Opps some thing went wrong");
		// echo "Connected to car Database";
		$registercarquery = mysql_query("INSERT INTO cars ( make, model, color, plate, owner) VALUES('".$make."','".$model."','".$color."' , '".$plate."' ,'".$email."' )", $dbuser);
		if ( $registercarquery)
       {
			header('Location: http://www.oopsner.com/steve/index.php');
			echo "Registration Complete";
        }
        else
        {
		header('Location: http://www.oopsner.com/steve/index.php');
     		echo "<h1>Error</h1>";
        	echo "<p>Sorry, your car saving failed. Please go back and try again.</p>";    
			
        }
		
	
	
	
	}
}?>


