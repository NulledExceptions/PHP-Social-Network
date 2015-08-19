<?php session_start(); include("db.php") ;  ?>

<!--
	Copyright 2009 Jeremie Tisseau
	"Sliding Login Panel with jQuery 1.3.2" is distributed under the GNU General Public License version 3:
	http://www.gnu.org/licenses/gpl-3.0.html
-->

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


<style>
*{ margin:0px; padding:0px}
body
{
	background-color:#fff;
}
#sri_container
{
	margin:0 auto;
	width:800px;
}
#sri_head
{
	background-color:#fff;
	height:100px;
	margin-top:15px;
	
}
#sri_body
{
	background-color:#ffffff;
	min-height:700px;
	overflow:auto;
	
	
	
}
@-webkit-keyframes greenPulse {
from { background-color: #749a02; -webkit-box-shadow:: 0 0 9px #333; }
50% { background-color: #91bd09; -webkit-box-shadow:: 0 0 18px #91bd09; }
to { background-color: #749a02; -webkit-box-shadow:: 0 0 9px #333; }
}
a.green.button {
-webkit-animation-name: greenPulse;
-webkit-animation-duration: 2s;
-webkit-animation-iteration-count: infinite;
}
.green.button:hover {
background-color: #749A02;
}
#subscribe
{
padding:10px;
width:550px;
}
.section-links{font-size:11px;line-height:16px;margin-bottom:5px;padding:6px 10px;color:#000;margin-bottom:10px;border-bottom:#fff solid 1px}
.feedinput{padding:4px;font-family:"Lucida Grande","Lucida Sans Unicode",Verdana,Arial,Helvetica,sans-serif;font-size:12px;color:#333333;font-weight:bold;border:solid 1px #dedede}
*html .feedinput{padding:0;height:23px}
input.gsc-search-button{background-color:#006699; padding:3px 10px 3px 10px; color:#fff; border:solid 1px #333;cursor:pointer;}
.gsc-branding-user-defined,.gsc-branding-text, .gsc-branding-img{height:0px; display:none
.section-links a:link,.section-links a:visited{text-decoration:none;color:#000}
</style>

</head>

<body>
<!-- Panel -->
<div id="toppanel">
	<div id="panel">
		<div class="content clearfix">
			<div class="left">
				<h1>Member Login</h1>
                <form method="post" action="login.php" name="login">
					<label class="grey" for="loginemail">Email:</label>
					<input class="field" type="text" name="loginemail" id="loginemail" value="" size="23" />
					<label class="grey" for="loginpassword">Password: </label>
					<input class="field" type="password" name="loginpassword" id="loginpassword" size="23" />
	            	<label><input name="rememberme" id="rememberme" type="checkbox" checked="checked" value="forever" /> &nbsp;Remember me</label>
        			<div class="clear"></div>
					<input type="submit" name="submit" value="Login" class="bt_login" />
					<a class="lost-pwd" href="#">Lost your password?</a>
				</form>
			</div>
			<div class="left">
				<!-- Login Form -->
				<form class="clearfix" action="register.php" name="register" method="post">
					<h1>Join PlateMe!</h1>
					<label class="grey" for="fname">First Name: 
					<input class="field" type="text" name="fname" id="fname" size="23" /></label>
					<label class="grey" for="lname">Last Name: 
					<input class="field" type="text" name="lname" id="lname" size="23" /></label>
                    <label class="grey" for="email">&nbsp&nbsp&nbsp&nbsp&nbsp&nbspEmail: 
					<input class="field" type="text" name="email" id="email" size="23" /></label>
	            	<label class="grey" for="password">Password:
                    <input class="field" type="password" name="password" id="password" size="23" /></label>
					<label class="grey" for="password2">Re-Enter:
                    <input class="field" type="password" name="password2" id="password2" size="23" /></label>
                    <label class="grey" for="state">State:
                    <select name="state" id="state">
                        <option value='' selected='selected'>Select</option>
                        <option value="AL">AL</option>
                        <option value="AK">AK</option>
                        <option value="AZ">AZ</option>
                        <option value="AR">AR</option>
                        <option value="CA">CA</option>
                        <option value="CO">CO</option>
                        <option value="CT">CT</option>
                        <option value="DE">DE</option>
                        <option value="DC">DC</option>
                        <option value="FL">FL</option>
                        <option value="GA">GA</option>
                        <option value="HI">HI</option>
                        <option value="ID">ID</option>
                        <option value="IL">IL</option>
                        <option value="IN">IN</option>
                        <option value="IA">IA</option>
                        <option value="KS">KS</option>
                        <option value="KY">KY</option>
                        <option value="LA">LA</option>
                        <option value="ME">ME</option>
                        <option value="MD">MD</option>
                        <option value="MA">MA</option>
                        <option value="MI">MI</option>
                        <option value="MN">MN</option>
                        <option value="MS">MS</option>
                        <option value="MO">MO</option>
                        <option value="MT">MT</option>
                        <option value="NE">NE</option>
                        <option value="NV">NV</option>
                        <option value="NH">NH</option>
                        <option value="NJ">NJ</option>
                        <option value="NM">NM</option>
                        <option value="NY">NY</option>
                        <option value="NC">NC</option>
                        <option value="ND">ND</option>
                        <option value="OH">OH</option>
                        <option value="OK">OK</option>
                        <option value="OR">OR</option>
                        <option value="PA">PA</option>
                        <option value="RI">RI</option>
                        <option value="SC">SC</option>
                        <option value="SD">SD</option>
                        <option value="TN">TN</option>
                        <option value="TX">TX</option>
                        <option value="UT">UT</option>
                        <option value="VT">VT</option>
                        <option value="VA">VA</option>
                        <option value="WA">WA</option>
                        <option value="WV">WV</option>
                        <option value="WI">WI</option>
                        <option value="WY">WY</option>	
                    </select>
                    <label class="grey" for=">" align="right">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp>>>>>>>>>>></label>
                	
			</div>
			<div class="left right">			
					
					<label class="grey" for="licenseplate">Plate #:</label>
					<input class="field" type="text" name="plate" id="plate" value="" size="23" />
					<label class="grey" for="make">Make and Model:</label>
					<label><input class="fieldS" type="text" name="make" id="make" size="15" />
                    <input class="fieldS" type="text" name="model" id="model" /></label>
					<label class="grey" for="color">Color:</label>
					<input class="field" type="text" name="color" id="color" size="15" />
					<label class="grey" for="year">Year:
                    <select name="year" id="year">
            			<option value='' selected='selected'>Select</option>
                        <option value="2012">2012</option>
                        <option value="2011">2011</option>
                        <option value="2010">2010</option>
                        <option value="2009">2009</option>
                        <option value="2008">2008</option>
                        <option value="2007">2007</option>
                        <option value="2006">2006</option>
                        <option value="2005">2005</option>
                        <option value="2004">2004</option>
                        <option value="2003">2003</option>
                        <option value="2002">2002</option>
                        <option value="2001">2001</option>
                        <option value="2000">2000</option>
                        <option value="1999">1999</option>
                        <option value="1998">1998</option>
                        <option value="1997">1997</option>
                        <option value="1996">1996</option>
                        <option value="1995">1995</option>
                     </select></label>
                    <input type="submit" name="register" value="Register" class="bt_register" />
                </form>
			</div>
            <div class="logoC">
            <div class="logo">
              <img src="images/pmlogo1.jpg" height="80" width="200">
            </div></div>
        </div>
   <!-- /login -->
</div>	

	<!-- The tab on top -->	
	<div class="tab">
		<ul class="login">
			<li class="left">&nbsp;</li>
			<li>Hello <? echo $_SESSION['email']; ?></li>
			<li class="sep">|</li>
			<li id="toggle">
				<a id="open" class="open" href="#">Log In | Register</a>
				<a id="close" style="display: none;" class="close" href="#">Close Panel</a>			
			</li>
			<li class="right">&nbsp;</li>
		</ul> 
	</div> <!-- / top -->
	
</div> <!--panel -->
</div>

<div class="container">
  <div class="header">
    <a href="index.html"><img src="images/header.jpg" height="100" width="1200" /></a>
  </div>
  <div class="sidebar1">
    <div class="infopanel">
       
       <div class="platecontainer">
         <div class="plate">
           <center><br /><br />Users Plate Will Go Here</center>
         </div>
       </div>
       
       <div class="userpanel">
         <div class="caricon">
            <center><br />Car Icon Here</center>
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
         <input type="text" name="search" method= "post" action = "platesearch.php" id="search" class="searchinput" value="Type a plate here to search..." onFocus="if (value == 'Type a plate here to search...') {value=''}" onBlur="if (value== '') {value='Type a plate here to search...'}"/>
       </div>
     </div>
     <div class="ad2"><center><br /><br /><br /><br /><br /><br /><br />Advertise Here</center></div>
  </div>
<div class="footer">
  <img src="images/footer.jpg" height="90" width="1200" />
</div>
  
 <div class="content"> 
  <div class="blogheader">
    <img src="images/blogheader.png" height="150" width="auto" />
  </div>
<form method="post" action="">
<textarea cols="30" rows="3" name="update" id="update" maxlength="200" ></textarea>
<br />

<input type="submit"  value=" Update "  id="update_button"  class="update_button"/>
</form>
</div>
<div id='flashmessage'>
<div id="flash" align="left"  ></div>
</div>
<div id="content">
<script type="text/javascript"> 
$(document).ready(function(){$("#stexpand6").oembed("Charlie bit my finger http://www.youtube.com/watch?v=_OBlgSz8sSM",{maxWidth: 400, maxHeight: 300});});
</script>
<div class="stbody" id="stbody6">
<div class="stimg">
<img src="http://www.gravatar.com/avatar.php?gravatar_id=7a9e87053519e0e7a21bb69d1deb6dfe" class='big_face'/>
</div> 
<div class="sttext">
<a class="stdelete" href="#" id="6" title="Delete update">X</a>
 <b>Srinivas</b> Charlie bit my finger <a href="http://www.youtube.com/watch?v=_OBlgSz8sSM">http://www.youtube.com/watch?v=_OBlgSz8sSM</a><div class="sttime">6 minutes ago | <a href='#' class='commentopen' id='6' title='Comment'>Comment </a></div> 

<div id="stexpandbox">
<div id="stexpand6"></div>
</div>
<div class="commentcontainer" id="commentload6">
</div>
<div class="commentupdate" style='display:none' id='commentbox6'>
<div class="stcommentimg">
<img src="http://www.gravatar.com/avatar.php?gravatar_id=7a9e87053519e0e7a21bb69d1deb6dfe" class='small_face'/>
</div> 
<div class="stcommenttext" >
<form method="post" action="">
<textarea name="comment" class="comment" maxlength="200"  id="ctextarea6"></textarea>
<br />
<input type="submit"  value=" Comment "  id="6" class="comment_button"/>
</form>
</div>

</div>
</div> 
</div>
<script type="text/javascript"> 
$(document).ready(function(){$("#stexpand3").oembed("Thought of You http://vimeo.com/14803194 ",{maxWidth: 400, maxHeight: 300});});
</script>
<div class="stbody" id="stbody3">
<div class="stimg">
<img src="http://www.gravatar.com/avatar.php?gravatar_id=7a9e87053519e0e7a21bb69d1deb6dfe" class='big_face'/>
</div> 
<div class="sttext">
<a class="stdelete" href="#" id="3" title="Delete update">X</a>
 <b>Srinivas</b> Thought of You <a href="http://vimeo.com/14803194">http://vimeo.com/14803194</a> <div class="sttime">20 hours ago | <a href='#' class='commentopen' id='3' title='Comment'>Comment </a></div> 

<div id="stexpandbox">
<div id="stexpand3"></div>
</div>
<div class="commentcontainer" id="commentload3">
<div class="stcommentbody" id="stcommentbody2">
<div class="stcommentimg">
<img src="http://www.gravatar.com/avatar.php?gravatar_id=7a9e87053519e0e7a21bb69d1deb6dfe" class='small_face'/>
</div> 
<div class="stcommenttext">
<a class="stcommentdelete" href="#" id='2' title='Delete Comment'>X</a>
 <b>Srinivas</b> Very nice<div class="stcommenttime">20 hours ago</div> 

</div>
</div>
</div>
<div class="commentupdate" style='display:none' id='commentbox3'>
<div class="stcommentimg">
<img src="http://www.gravatar.com/avatar.php?gravatar_id=7a9e87053519e0e7a21bb69d1deb6dfe" class='small_face'/>
</div> 
<div class="stcommenttext" >
<form method="post" action="">
<textarea name="comment" class="comment" maxlength="200"  id="ctextarea3"></textarea>
<br />
<input type="submit"  value=" Comment "  id="3" class="comment_button"/>
</form>
</div>
</div>
</div> 

</div>

<div class="stbody" id="stbody2">
<div class="stimg">
<img src="images/smallmark.jpeg" class='big_face'/>
</div> 

<div id="stexpandbox">
<div id="stexpand2"></div>
</div>
<div class="commentcontainer" id="commentload2">
</div>
<div class="commentupdate" style='display:none' id='commentbox2'>
<div class="stcommentimg">
<img src="http://www.gravatar.com/avatar.php?gravatar_id=7a9e87053519e0e7a21bb69d1deb6dfe" class='small_face'/>
</div> 
<div class="stcommenttext" >
<form method="post" action="">
<textarea name="comment" class="comment" maxlength="200"  id="ctextarea2"></textarea>
<br />
<input type="submit"  value=" Comment "  id="2" class="comment_button"/>
</form>
</div>

</div>
</div> 
</div>
<script type="text/javascript"> 
$(document).ready(function(){$("#stexpand1").oembed("Hello",{maxWidth: 400, maxHeight: 300});});
</script>
<div class="stbody" id="stbody1">
<div class="stimg">
<img src="http://www.gravatar.com/avatar.php?gravatar_id=7a9e87053519e0e7a21bb69d1deb6dfe" class='big_face'/>
</div> 
<div class="sttext">
<a class="stdelete" href="#" id="1" title="Delete update">X</a>
 <b>Srinivas</b> Hello<div class="sttime">20 hours ago | <a href='#' class='commentopen' id='1' title='Comment'>Comment </a></div> 

<div id="stexpandbox">
<div id="stexpand1"></div>
</div>
<div class="commentcontainer" id="commentload1">
<div class="stcommentbody" id="stcommentbody1">
<div class="stcommentimg">
<img src="http://www.gravatar.com/avatar.php?gravatar_id=7a9e87053519e0e7a21bb69d1deb6dfe" class='small_face'/>
</div> 
<div class="stcommenttext">
<a class="stcommentdelete" href="#" id='1' title='Delete Comment'>X</a>
<b>Srinivas</b> My first comment <div class="stcommenttime">20 hours ago</div> 
</div>

</div>
</div>
<div class="commentupdate" style='display:none' id='commentbox1'>
<div class="stcommentimg">
<img src="http://www.gravatar.com/avatar.php?gravatar_id=7a9e87053519e0e7a21bb69d1deb6dfe" class='small_face'/>
</div> 
<div class="stcommenttext" >
<form method="post" action="">
<textarea name="comment" class="comment" maxlength="200"  id="ctextarea1"></textarea>
<br />
<input type="submit"  value=" Comment "  id="1" class="comment_button"/>
</form>
</div>
</div>
</div> 
</div>

</div>
</div>

</body>
</html>
