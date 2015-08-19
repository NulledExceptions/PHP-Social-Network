<?php

session_start();
if(!isset($_COOKIE['user'])){
	header ("Location: /no.php");


}
error_reporting(0);
include_once 'includes/db.php';
include_once 'includes/functions.php';
include_once 'includes/tolink.php';
include_once 'includes/time_stamp.php';
include_once 'session.php';

$Wall = new Wall_Updates();
$updatesarray=$Wall->Updates($uid);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>PlateMe</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<link href="css/wall.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
 <script type="text/javascript" src="js/jquery.oembed.js"></script>
 <script type="text/javascript" src="js/wall.js"></script>
  
  

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />	

	<!-- stylesheets -->
  	<link rel="stylesheet" href="css/style.css" type="text/css" media="screen" />
  	<link rel="stylesheet" href="css/slide.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="css/reset.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="css/coda-slider-2.0.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="css/niftyCorners.css" type="text/css" />
    <link rel="stylesheet" href="css/niftyPrint.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="css/fbcomments.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="css/star.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="css/css.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="css/wall.css" type="text/css" media="screen" />
    
    <!-- Java Script -->
	<script src="js/jquery.js" type="text/javascript"></script>
	<script src="js/slide.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="js/jquery.coda-slider-2.0.js"></script>
    <script type="text/javascript" src="js/nifty.js"></script>
    <script type="text/javascript" src="js/popup.js"></script> 
    <script type="text/javascript" src="js/rating.js"></script>
    <script type="text/javascript" src="js/jquery.MetaData.js"></script>
    <script type="text/javascript" src="js/submit.js"></script>
    <script type="text/javascript" src="js/oembed.js"></script>
    <script type="text/javascript" src="js/wall.js"></script>

	<!--Feed Menu -->		
	<script type="text/javascript">
  	  $().ready(function() {
	  $('#coda-slider-1').codaSlider();
  	  });
	</script>

	  <script type="text/javascript">
      $('.auto-submit-star').rating({
        callback: function(value, link){
          this.form.submit();
        }
      });
      </script>

 <script type="text/javascript">


$(function() {

$(".comment_button").click(function() {

var element = $(this);
   
    var boxval = $("#content").val();
	
    var dataString = 'content='+ boxval;
	
	if(boxval=='')
	{
	alert("Please Enter Some Text");
	
	}
	else
	{
	$("#flash").show();
	$("#flash").fadeIn(400).html('<img src="ajax.gif" align="absmiddle">&nbsp;<span class="loading">Loading Update...</span>');
$.ajax({
		type: "POST",
  url: "update_ajax.php",
   data: dataString,
  cache: false,
  success: function(html){
 
  $("ol#update").prepend(html);
  $("ol#update li:first").slideDown("slow");
  
   document.getElementById('content').value='';
   $('#content').value='';
   $('#content').focus();
  $("#flash").hide();
  
    
	$("#expand_url").oembed(boxval);
	
  }
 });
}
return false;
	});


// delete undate
$('.delete_update').live("click",function() 
{
var ID = $(this).attr("id");
var dataString = 'msg_id='+ ID;

if(confirm("Sure you want to delete this update? There is NO undo!"))
{
$.ajax({
		type: "POST",
  url: "delete_update.php",
   data: dataString,
  cache: false,
  success: function(html){
 
 $(".bar"+ID).slideUp();
	
  }
 });

}
return false;
});


//comment slide
$('.comment').live("click",function() 
{

var ID = $(this).attr("id");
$(".fullbox"+ID).show();
$("#c"+ID).slideToggle(300);

return false;
});


//commment Submint

$('.comment_submit').live("click",function() 
{

var ID = $(this).attr("id");

var comment_content = $("#textarea"+ID).val();
	
    var dataString = 'comment_content='+ comment_content + '&msg_id=' + ID;
	
	if(comment_content=='')
	{
	alert("Please Enter Comment Text");
	
	}
	else
	{
	
   
   	$.ajax({
		type: "POST",
  url: "comment_ajax.php",
   data: dataString,
  cache: false,
  success: function(html){
  
 
  $("#commentload"+ID).append(html);
    document.getElementById("textarea"+ID).value='';
   
   $("#textarea"+ID).focus();
  
  }
 });
	
	
	}

return false;
});

//comment delete
$('.cdelete_update').live("click",function() 
{
var ID = $(this).attr("id");

var dataString = 'com_id='+ ID;

if(confirm("Sure you want to delete this update? There is NO undo!"))
{
$.ajax({
		type: "POST",
  url: "delete_comment.php",
   data: dataString,
  cache: false,
  success: function(html){
 
 $("#comment"+ID).slideUp();
	
  }
 });
}
return false;
});




return false;

});


</script>

</head>

<body>
  <div class="header">
    
  </div>
  
  <div class="home_container">

  
  <div class="sidebar1">
    <div class="infopanel">
     
      <div class="platecontainer">
        <div class="plate">
          <img src="images/floridaPlate.jpg" height="85" width="200">
        </div>
      </div>
       
      <div class="userpanel">
        <div class="caricon">
          <img src="images/mark.jpg" height="80" width="80">
        </div>
         
        <div class="userinfo">
          <?  echo $_SESSION['fname'];	   ?> 
          <?  echo $_SESSION['lname'];	   ?><br />
      
          <?  echo $_SESSION['make'];	   ?>   <?  echo $_SESSION['model'];	   ?><br />
      
          <?  echo $_SESSION['color'];	   ?><br />
        </div>
      </div>
         
      <div class="iconpanel">      
        <img src="images/iconbg.jpg" height="175" width="212" />
           <div class="icons">
             <div class="row1">
               <a href="profile.php"><img src="icons/profile.png" class="icon1" onmouseover="popup('Profile')" onmouseout="kill()" /></a>
               <a href=""><img src="icons/feed.png" class="icon2" onmouseover="popup('Plate Feed')" onmouseout="kill()"/></a>
               <a href="#"><img src="icons/favorites.png" class="icon3" onmouseover="popup('Favorites')" onmouseout="kill()"/></a>
             </div>
             <div class="row2"> 
               <a href="#"><img src="icons/chat.png" class="icon4" onmouseover="popup('Chat')" onmouseout="kill()"/></a>
               <a href="#"><img src="icons/messages.png" class="icon5" onmouseover="popup('Messages')" onmouseout="kill()"/></a>
               <a href="profilepicture.php"><img src="icons/photos.png" class="icon6" onmouseover="popup('Photos')" onmouseout="kill()"/></a>
             </div>
             <div class="row3">
               <a href="#"><img src="icons/followers.png" class="icon7" onmouseover="popup('Followers')" onmouseout="kill()"/></a>
               <a href="privacy.php"><img src="icons/privacy.png" class="icon8" onmouseover="popup('Privacy Settings')" onmouseout="kill()"/></a>
               <a href="#"><img src="icons/location.png" class="icon9" onmouseover="popup('Places')" onmouseout="kill()"/></a>
             </div>
           </div>
         </div> 
    </div>
    <!-- end .sidebar1 -->
  </div>
  
  <div class="sidebar2">
    <div class="searchform">
      <div class="searchplate">
	    <img src="plates/illinois.jpg" height="85" width="195">
      </div>
      
	  <div class="searchbar">
	    <form method="post" action="<? echo $_SERVER['PHP_SELF']; ?>">
	      <input type="text" name="plate" value="Enter A Plate""></br>
	      <center><input type="submit" value = "Search" name="submitSearch"></center>
	    </form>
    <?php
      //if( !isset($_SESSION) ) { session_start(); }
      if(isset($_POST['plate'])) {
  
      $mysql_hostname = "reconuserbase.db.7884262.hostedresource.com";
      $mysql_user = "reconuserbase";
      $mysql_password = "Chicken12!";
      $mysql_database = "reconuserbase";


	  $link=mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die ("couldnot connect: ".mysql_error());
	  mysql_select_db($mysql_database, $link)  or exit('Error Selecting database: '.mysql_error()); ;
	  
	   $myplate = $_POST['plate'];
	 

	  $errormessage = "";

	  $sql="SELECT * FROM cars where plate ='$myplate'";

	 //$carsql="SELECT * FROM cars where owner ='$myemail'";


	  $myresult = mysql_query($sql, $link)  or exit('$sql failed: '.mysql_error()); 
	 // $mycarresult = mysql_query($carsql, $link)    or exit('$sql failed: '.mysql_error()); 

	  $num_rows = mysql_num_rows($myresult);


	 if(mysql_num_rows($myresult) == 1){
		echo "Plate found.";
		}else{
		echo "Plate not found.  Click here to post on this plate.";
		}

}
else { echo "";
}
?>
      </div>
    </div>
      <div class="ad2"><center><br /><br /><br /><br /><br /><br /><br />Advertise Here</center></div>
  </div>


  <div id='flashmessage'>
    <div id="flash" align="left"  ></div>
  </div>

  <div id="homeContent">
div id="wall_container">
<div id="updateboxarea">
<h4>Sup?</h4>
<form method="post" action="">
<textarea cols="30" rows="4" name="update" id="update" maxlength="200" ></textarea>
<br />
<input type="submit"  value=" Update "  id="update_button"  class="update_button"/>
</form>
</div>
<div id='flashmessage'>
<div id="flash" align="left"  ></div>
</div>
<div id="wallcontent">

<?php include('load_messages.php'); ?>

</div>



</div>
</body>
  </div>
</div>
</body>
</html>
