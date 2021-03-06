<?php include "db.php"; session_start(); ?>
<?php if(!isset($_COOKIE['rob'])){header ("Location: /forbidden.php");} ?>


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
    <link rel="stylesheet" href="css/star.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="css/css.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="css/wall.css" type="text/css" media="screen" />

    <!-- Java Script -->
	<script src="js/jquery.js" type="text/javascript"></script>
	<script src="js/slide.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="js/jquery.coda-slider-2.0.js"></script>
    <script type="text/javascript" src="js/nifty.js"></script>
    <script type="text/javascript" src="js/rating.js"></script>
    <script type="text/javascript" src="js/jquery.MetaData.js"></script>
    <script type="tet/javascript" src-"js/submit.js"></script>
    <script type="text/javascript" src="js/oembed.js"></script>
    <script type="text/javascript" src="js/wall.js"></script>

	<!--Feed Menu -->		
	<script type="text/javascript">
  	  $().ready(function() {
	  $('#coda-slider-1').codaSlider();
  	  });
	</script>
    
    <!--Nifty Corners -->
    <script type="text/javascript">
	  window.onload=function(){
	  if(!NiftyCheck())
      return;
      Rounded("div#icon","all","#000","#D4DDFF","smooth"); 
      }
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


<style type="text/css">
body
{
font-family:Arial, Helvetica, sans-serif;
font-size:12px;
}
.update_box
{
background-color:#fff; border-bottom:#ffffff solid 1px; padding-top:3px margin-top:10px;
}
a
	{
	text-decoration:none;
	color:#d02b55;
	}
	a:hover
	{
	text-decoration:underline;
	color:#d02b55;
	}
	*{margin:0;padding:0;}
	
	
	ol.timeline
	{list-style:none;font-size:1.2em;}ol.timeline li{ display:none;position:relative; }ol.timeline li:first-child{border-top:1px dashed #006699;}
	.delete_button
	{
	float:right; margin-right:10px; width:20px; height:20px
	}
	
	.cdelete_button
	{
	float:right; margin-right:10px; width:20px; height:20px
	}
	
	.feed_link
	{
	font-style:inherit; font-family:Georgia; font-size:13px;padding:10px; float:left; width:350px
	}
	.comment
	{
	color:#0000CC; text-decoration:underline
	}
	.delete_update
	{
	font-weight:bold;
	
	}
	.cdelete_update
	{
	font-weight:bold;
	
	}
	.post_box
	{
	height:55px;border-bottom:1px dashed #006699;background-color:#F3F3F3;  width:499px;padding:.7em 0 .6em 0;line-height:1.1em;
	
	}
	#fullbox
	{
	margin-top:6px;margin-bottom:6px; display:none;
	}
	.comment_box
	{
	    display:none;margin-left:90px; padding:10px; background-color:#d3e7f5; width:300px;  height:50px;
	
	}
	.comment_load
	{
	  margin-left:90px; padding:10px; background-color:#d3e7f5; width:300px; height:30px; font-size:12px; border-bottom:solid 1px #FFFFFF;
	
	}
	.text_area
	{
	width:290px;
	font-size:12px;
	height:30px;
	}
	#expand_box
	{
	margin-left:90px;
	margin-top:5px;
	margin-bottom:5px;
	}
	embed
	{
		width:200px;
		height:150px;

	}
	
</style>

</head>

<body>
<!-- Panel -->
<div id="toppanel">
	<div id="panel">
		<div class="content clearfix">
			<div class="left">
				<h1>Member Login</h1>
					<label class="grey" for="log">Email:</label>
					<input class="field" type="text" name="log" id="log" value="" size="23" />
					<label class="grey" for="pwd">Password: </label>
					<input class="field" type="password" name="pwd" id="pwd" size="23" />
	            	<label><input name="rememberme" id="rememberme" type="checkbox" checked="checked" value="forever" /> &nbsp;Remember me</label>
        			<div class="clear"></div>
					<input type="submit" name="submit" value="Login" class="bt_login" />
					<a class="lost-pwd" href="#">Lost your password?</a>
				</form>
			</div>
			<div class="left">
				<!-- Login Form -->
				<form class="clearfix" action="#" method="post">
					<h1>Join PlateMe!</h1>
					<label class="grey" for="user">First Name: 
					<input class="field" type="text" name="log" id="log" value="" size="23" /></label>
					<label class="grey" for="pass">Last Name: 
					<input class="field" type="password" name="pwd" id="pwd" size="23" /></label>
                    <label class="grey" for="pass2">&nbsp&nbsp&nbsp&nbsp&nbsp&nbspEmail: 
					<input class="field" type="password" name="pwd" id="pwd" size="23" /></label>
	            	<label class="grey" for="fname">Password:
                    <input class="field" type="text" name="fname" id="fname" size="23" /></label>
					<label class="grey" for="lname">Re-Enter:
                    <input class="field" type="text" name="lname" id="lname" size="23" /></label>
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
                </form>
			</div>
			<div class="left right">			
				<!-- Register Form -->
				<form action="#" method="post">
					<h1></h1>				
					<label class="grey" for="licenseplate">Plate #:</label>
					<input class="field" type="text" name="plate" id="plate" value="" size="23" />
					<label class="grey" for="make">Make/Model:</label>
					<input class="field" type="text" name="car" id="car" size="15" />
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
                    <input type="submit" name="submit" value="Register" class="bt_register" />
                </form>
			</div>
		    <div class="logo">
              <img src="images/pmlogo1.jpg" height="80" width="200">
            </div>
        </div>
   <!-- /login -->
</div>	

	<!-- The tab on top -->	
	<div class="tab">
		<ul class="login">
			<li class="left">&nbsp;</li>
			<li>Hello Guest!</li>
			<li class="sep">|</li>
			<li id="toggle">
				<a id="open" class="open" href="#">Log In | Register</a>
				<a id="close" style="display: none;" class="close" href="#">Close Panel</a>			
			</li>
			<li class="right">&nbsp;</li>
		</ul> 
	</div> <!-- / top -->
	
</div> <!--panel -->

<div class="container">
  <div class="header">
    <a href="home.php"><img src="images/header.jpg" height="100" width="1200" /></a>
  </div>
  
  
  
  <div class="profilecontent"> 


  <div class="profilenav">

       <div class="navinfo">
         User Name <img src="images/arrow.jpg" height="12" width="12" /> Profile
       </div>
       
    </div>
    
    <div class="profile">
    <!-- Profile Body Content-->
      
      
      <div class="leftframe">
        <div class="profilepic"><center>Profile Picture</center></div>
        
        <div class="changepic"><a href="profilepicture.php"><img src="images/changepicture.png" /></a></div>
        
        <div class="profilespecs">
          <div class="nfo">User Info</div>
          <div class="nfotxt">
            <p> <P><?  echo $_SESSION['fname'];	   ?> <P><?  echo $_SESSION['lname'];	   ?>  
            
            <p>email:  <P><?  echo $_SESSION['email'];	   ?> 
            
          </div>
        </div>
        
        <div class="profilespecs">
          <div class="nfo">Car Specs</div>
          <div class="nfotext">
		    
            <P><?  echo $_SESSION['make'];	   ?> 
			<p><?  echo $_SESSION['model'];	   ?>
			<p><?  echo $_SESSION['color'];	   ?>
			 <P><?  echo $_SESSION['plate'];	   ?> <br />
	    
         
          </div>

	  
	  </div>
	  
	  </div>
      
      <div class="topframe">
         <div class="profilehead">
	   <img src="images/profilebanner.png" height="100" width="700"
	   class="banner">
	 </div>

	 <div class="profileblog">
	 
	    
<div align="center">
<table cellpadding="0" cellspacing="0" width="500px">
<tr>
<td>


<div align="left">
<form  method="post" name="form" action="">
<table cellpadding="0" cellspacing="0" width="500px">

<tr><td align="left"><div align="left">
<h3></h3></div></td></tr>
<tr>
<td style="padding:4px; padding-left:10px;" class="update_box">
<textarea cols="10" rows="2" style="width:400px;font-size:14px; height:40px; font-weight:bold" name="content" id="content" maxlength="145" ></textarea><br />
<input type="submit"  value="Update"  id="v" name="submit" class="comment_button"/>
</td>

</tr>

</table>
</form>

</div>
<div style="height:7px"></div>
<div id="flash" align="left"  ></div>



<ol  id="update" class="timeline">



</ol>

</td>
</tr>
</table>






</div>


	    
	      
  </div>
</div>	   	      
	  
	  
<div class="footer">
  <img src="images/footer.jpg" height="90" width="1200" />
</div>
  

 
     
     
</div>
</div>
</div>
</body>
</html>
