<?php

if(!isset($_COOKIE['user'])){
	header ("Location: /no.php");


}
if(!isset($_COOKIE['rob'])){
	header ("Location: /no.php");


}

error_reporting(0);
include_once 'includes/db.php';
include_once 'includes/Wall_Updates.php';
include_once 'includes/tolink.php';
include_once 'includes/textlink.php';
include_once 'includes/htmlcode.php';
include_once 'includes/time_stamp.php';
include_once 'session.php';



$Wall = new Wall_Updates();


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
  	<title>PlateMe</title>
  	<meta name="description" content="Demo of a Sliding Login Panel using jQuery 1.3.2" />
  	<meta name="keywords" content="jquery, sliding, toggle, slideUp, slideDown, login, login form, register" />
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
	<script type="text/javascript" src="js/ajax.js"></script>
	<script type="text/javascript" src="js/frames.js"></script>


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

<!-- Function to allow hitting enter for submitting a comment -->
<script type="text/javascript">
	function catchEnter(e) {
	if (!e) var e = window.event;
	if (e.keyCode) code = e.keyCode;
	else if (e.which) code = e.which;

	if (code==13) {
	//submit the form, do your validation, or whatever
	}
	}
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
          <?php include ("showstate.php"); ?>
        </div>
      </div>
       
      <div class="userpanel">
        <div class="caricon">
		  <div class="stimg" style="border:none;">
            <img src = " <?php echo $_SESSION['profile_pic_location']; echo $_SESSION['profile_pic'] ; ?> " class="homepic" />
		  </div> 
        </div>
         
        <div class="userinfo">
          <div class="car_info">
		    <?  echo $_SESSION['fname'];	   ?> 
		    <?  echo $_SESSION['lname'];	   ?>
		  </div>
		  <div class="car_info">
		    <?  echo $_SESSION['carmake'];	   ?>
		    <?  echo $_SESSION['carmodel'];	   ?>
          </div>
		  <div class="car_info">
		    <? echo $_SESSION['caryear'];		?>
		  </div>
          <div class="car_info">
		    <?  echo $_SESSION['carcolor'];	   ?>
		  </div>
		  <div class="car_info">
		    <?  echo $_SESSION['carstate'];    ?>
			<?  echo $_SESSION['carplate'];    ?>
		  </div>
		  
        </div>
      </div>
         
      <div class="iconpanel">
           <div class="icons">
             <div class="row">
               <img src="images/home_icons/Profile.png" class="home_icon" onmouseover="popup('Profile')" onmouseout="kill()" />
               <a href="home.php"><img src="images/home_icons/whatsup.png" class="home_icon" onmouseover="popup('Plate Feed')" onmouseout="kill()" /></a>
               <a href="#"><img src="images/home_icons/Favorites.png" class="home_icon" onmouseover="popup('Favorites')" onmouseout="kill()"/></a>
             </div>
             <div class="row"> 
               <a href="#"><img src="images/home_icons/Chat.png" class="home_icon" onmouseover="popup('Chat')" onmouseout="kill()"/></a>
               <a href="#"><img src="images/home_icons/Message.png" class="home_icon" onmouseover="popup('Messages')" onmouseout="kill()"/></a>
               <a href="profilepicture.php"><img src="images/home_icons/Camera.png" class="home_icon" onmouseover="popup('Photos')" onmouseout="kill()"/></a>
             </div>
             <div class="row">
               <a href="#"><img src="images/home_icons/Tracker.png" class="home_icon" onmouseover="popup('Followers')" onmouseout="kill()"/></a>
               <img src="images/home_icons/Settings.png" class="home_icon" onmouseover="popup('Settings')" onmouseout="kill()" onclick="switch2settings()" />
               <a href="#"><img src="images/home_icons/Location.png" class="home_icon" onmouseover="popup('Places')" onmouseout="kill()"/></a>
             </div>
           </div>
         </div> 
    </div>
    <!-- end .sidebar1 -->
  </div>
  
  <!--Middle Frame for Content-->
  <div id="homeContent">
    
	<div id="wall_container">
      <div id="updateboxarea">
    
        <form name="inputbox">
          <div id="inputiconrow">
	        <div class="inputicon" style="border:none"><img src="wallicons/whatup.png" name="whatup" class="feedbutton"></a></div>
	        <div class="inputicon"></div>
	        <div class="inputicon"></div>
			<div class="inputicon"></div>
			<div class="inputicon"></div>
			<div class="inputicon"></div>
			<div class="inputicon"></div>
		  </div>
		  <div id="input_tb">
	        <input type="text" name="update" id="update" value="Status:" onclick="if(this.value=='Status:'){this.value=''}" onblur="if(this.value==''){this.value='Status:'}" onKeyPress="catchEnter()">
			<input type="submit"  value=" Update "  id="update_button"  class="update_button" style="visibility:hidden"/> 
	      </div>
		  <br />
		</form>
		
	  </div>
  <!--<input type="text" name="update" id="update" maxlength="200" >
<br />
<div id="webcam_container" class='border'>
<div id="webcam" >
</div>
<div id="webcam_preview">

</div>

<div id='webcam_status'></div>
<div id='webcam_takesnap'>

<input type="button" value=" Take Snap " onclick="return takeSnap();" class="camclick button"/>
<input type="hidden" id="webcam_count" />
</div>
</div>
<div  id="imageupload" class="border">
<form id="imageform" method="post" enctype="multipart/form-data" action='image_ajax.php'> 
<div id='preview'>
</div>

<span id='addphoto'>Add Photo:</span> <input type="file" name="photoimg" id="photoimg" />
<input type='hidden' id='uploadvalues' />
</form>
</div>
<div style="width:100%;clear:both">

<span style="float:right">
<a href="javascript:void(0);" id="camera"><img src="icons/cameraa.png" border="0" title="Upload Image"/></a> 
 <a href="javascript:void(0);" id="webcam_button"><img src="icons/web-cam.png"  border="0" title="Webcam Snap" style='margin-top:5px'/></a>
</span>
</div>

</div>-->

<div id='flashmessage'>
<div id="flash" align="left"  ></div>
</div>
<div id="content">

<?php 
// Loading Messages
include('load_messages.php'); 
?>

</div>
</div>
   
  </div>
  <!--End Middle Frame-->
  
  <div class="sidebar2">
    <div class="searchform">
      <div class="searchplate">
	    <img src="images/genericplate.png" height="100%" width="100%">
      </div>
      
	  <div class="searchbar">
	    <form method="post" action="<? echo $_SERVER['PHP_SELF']; ?>">
	      <input type="text" name="plate" id="searchinput" value="Search" onclick="if(this.value=='Search'){this.value=''}" onblur="if(this.value==''){this.value='Search'}"/></br>
	      <!--<center><input type="submit" value = "Search" name="submitSearch"></center>-->
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
      <div class="ad_container">
	    <div id="ad_container_header"><a href="advertising.php" style="float:right; margin-right:10px; margin-top:3px;" onmouseover="this.color='blue';">Create an Ad</a></div>
		<div class="ad_4container">
		  <img src="images/fakead1.png" height="180" width="300">
		</div>
		<br><div class="ad_4container">
		  <img src="images/fakead2.png" height="180" width="300">
		</div>
	  </div>
  </div>

</body>
</html>
