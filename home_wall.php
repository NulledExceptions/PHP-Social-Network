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
          <?php include ("showstate.php"); ?>
        </div>
      </div>
       
      <div class="userpanel">
        <div class="caricon">
          <img src= "<?php echo $_SESSION['picicon'];  ?> " height="100%" width="100%">
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
               <img src="images/home_icons/Profile.png" class="home_icon" onmouseover="popup('Profile')" onmouseout="kill()" onclick="switch2profile()" />
               <img src="images/home_icons/whatsup.png" class="home_icon" onmouseover="popup('Plate Feed')" onmouseout="kill()" onclick="switch2home()" /></a>
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
  
  <div id="homeContent">
    <!--<?php include ("testwall/wall/index.php"); ?>-->
  </div>
  
  <div class="sidebar2">
    <div class="searchform">
      <div class="searchplate">
	    <img src="images/genericplate.png" height="100%" width="100%">
      </div>
      
	  <div class="searchbar">
	    <form method="post" action="<? echo $_SERVER['PHP_SELF']; ?>">
	      <input type="text" name="plate" id="searchinput" value="Search" onclick="if(this.value=='Search'){this.value=''}" onblur="if(this.value==''){this.value='Search'}"/>></br>
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
	    <div id="ad_container_header"></div>
		<div class="ad_4container"></div>
		<div class="ad_4container"></div>
	  </div>
  </div>


  <div id='flashmessage'>
    <div id="flash" align="left"  ></div>
  </div>
<!--End Sidebar2-->
</div>
</body>
</html>
