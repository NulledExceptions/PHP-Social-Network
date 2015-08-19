<?php

include "db.php";
session_start();

mysql_select_db($mysql_database, $dbuser) or die("Opps some thing went wrong");

if(!empty($_POST['email']) || !empty($_POST['phoneH']) || !empty($_POST['phoneM']) || !empty($_POST['skypeid']) || !empty($_POST['IMid']) || !empty($_POST['website']) || !empty($_POST['address']))
{
$email = mysql_real_escape_string($_POST['email']);
$phoneH = mysql_real_escape_string($_POST['phoneH']);
$phoneM = mysql_real_escape_string($_POST['phoneM']);
$skypeid = mysql_real_escape_string($_POST['skypeid']);
$IMid = mysql_real_escape_string($_POST['IMid']);
$website = mysql_real_escape_string($_POST['website']);
$address = mysql_real_escape_string($_POST['address']);



  $registeruserquery = mysql_query("INSERT INTO users_info ( email, home_phone,mobile_phone,skype,IM_screen_name,website,address) VALUES('".$email."', '".$phoneH."','".$phoneM."','".$skypeid."','".$IMid."', '".$website."','".$address."')", $dbuser);
		     if($registeruserquery)
       {
	   $_SESSION['status'] = "saving personal info worked";
		} else {
		$_SESSION['status'] = "saving person info DIDIDIIDID NOT work";
		}
    
}
	

if(!empty($_POST['favsports']) || !empty($_POST['favteams']) || !empty($_POST['favathletes']) || !empty($_POST['favactivities']) || !empty($_POST['favinterests']) || !empty($_POST['favplaces']) )
{
$favsports = mysql_real_escape_string($_POST['favsports']);
$favteams = mysql_real_escape_string($_POST['favteams']);
$favathletes = mysql_real_escape_string($_POST['favathletes']);
$favactivities = mysql_real_escape_string($_POST['favactivities']);
$favinterests = mysql_real_escape_string($_POST['favinterests']);
$favplaces = mysql_real_escape_string($_POST['favplaces']);



  $registeruserquery = mysql_query("INSERT INTO users_info ( fav_sports, fav_teams, fav_athletes, fav_activities, interests,fav_places) VALUES('".$favsports."', '".$favteams."','".$favathletes."','".$favactivities."','".$favplaces."')", $dbuser);
		     if($registeruserquery)
       {
	   $_SESSION['status'] = "saving personal favorite info worked";
	   } else { 
		$_SESSION['status'] = "saving person info favprite DIDIDIIDID NOT work";
		}
    
}
	
	
	
	
if(!empty($_POST['favmusic']) || !empty($_POST['favmovies']) || !empty($_POST['favbooks']) || !empty($_POST['favtv']) || !empty($_POST['favgames']))
{
$favmusic = mysql_real_escape_string($_POST['favmusic']);
$favbooks = mysql_real_escape_string($_POST['favbooks']);
$favmovies = mysql_real_escape_string($_POST['favmovies']);
$favtv = mysql_real_escape_string($_POST['favtv']);
$favgames = mysql_real_escape_string($_POST['favgames']);



  $registeruserquery = mysql_query("INSERT INTO users_info (music,book,movies,tv_shows,games) VALUES('".$favmusic."', '".$favbooks."','".$favtv."','".$favgames."')", $dbuser);
		     if($registeruserquery)
       {
	   $_SESSION['status'] = "saving fav movies music personal info worked";
		} else {
		$_SESSION['status'] = "saving person info fav misc lkdjfakmoviesDIDIDIIDID NOT work";
		}

}
	
	
	
	if(!empty($_POST['employer']) || !empty($_POST['college']) || !empty($_POST['highschool']) || !empty($_POST['middleschool']) || !empty($_POST['elementryschool']))
{
$employer= mysql_real_escape_string($_POST['employer']);
$college = mysql_real_escape_string($_POST['college']);
$highschool = mysql_real_escape_string($_POST['highschool']);
$middleschool = mysql_real_escape_string($_POST['middleschool']);
$elementryschool = mysql_real_escape_string($_POST['elementryschool']);



  $registeruserquery = mysql_query("INSERT INTO users_info ( employer,college,highschool,middle_school,elementary_school) VALUES('".$employer."', '".$college."','".$highschool."','".$middleschool."','".$elementaryschool."')", $dbuser);
		     if($registeruserquery)
       {
	   $_SESSION['status'] = "saving personal school info worked";
		} else {
		$_SESSION['status'] = "saving person school info DIDIDIIDID NOT work";
		}

     
}
	
	
	if(!empty($_POST['family']) || !empty($_POST['favorites']) || !empty($_POST['relationship']) || !empty($_POST['followers']) || !empty($_POST['random']))
{
$family= mysql_real_escape_string($_POST['family']);
$favorites = mysql_real_escape_string($_POST['favorites']);
$relationship = mysql_real_escape_string($_POST['relationship']);
$followers = mysql_real_escape_string($_POST['followers']);
$random = mysql_real_escape_string($_POST['random']);




  $registeruserquery = mysql_query("INSERT INTO users_info (family,favorites,relationship,followers,random) VALUES('".$family."', '".$favorites."','".$relationship."','".$followers."','".$random."')", $dbuser);
		     if($registeruserquery)
       {
	   $_SESSION['status'] = "saving personal family info worked";
		} else {
		$_SESSION['status'] = "saving person info family DIDIDIIDID NOT work";
		}
  
	
}
	
		if(!empty($_POST['bdayM']) || !empty($_POST['bdayY']) || !empty($_POST['sex']) || !empty($_POST['currcity']) || !empty($_POST['hometown'])!empty($_POST['preference']) || !empty($_POST['relastatus']) || !empty($_POST['about']) || !empty($_POST['languages']) || !empty($_POST['bdayM']))
{
$bdayD= mysql_real_escape_string($_POST['bdayD']);
$bdayY = mysql_real_escape_string($_POST['bdayY']);
$sex = mysql_real_escape_string($_POST['sex']);
$currcity = mysql_real_escape_string($_POST['currcity']);
$hometown = mysql_real_escape_string($_POST['hometown']);
$preference= mysql_real_escape_string($_POST['preference']);
$relastatus = mysql_real_escape_string($_POST['relastatus']);
$about = mysql_real_escape_string($_POST['about']);
$langauges = mysql_real_escape_string($_POST['languages']);
$bdayM = mysql_real_escape_string($_POST['bdayM']);
	
	

  $registeruserquery = mysql_query("INSERT INTO users_info (bdayD,bdayM,bdayY,sex,currcity,hometown,preference,relastatus,about,languages ) VALUES('".$bdayD."','".$bdayM."','".$bdayY."','".$sex."','".$currcity."', '".$hometown."','".$prefrence."','".$relastatus."', '".$about."','".$languages."')", $dbuser);
		     if($registeruserquery)
       {
	   $_SESSION['status'] = "saving personal info worked";
		} else {
		$_SESSION['status'] = "saving person info DIDIDIIDID NOT work";
		}
	
	}
	        
     $registeruserquery = mysql_query("INSERT INTO users (password, email, sex, birthday) VALUES('".$password."', '".$email."','".$sex."','".$birthday."')", $dbuser);
		     if($registeruserquery)
       {
		}
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
	
	
	
