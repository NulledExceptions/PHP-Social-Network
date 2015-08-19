<?php
/*
session_start();
if(!isset($_COOKIE['rob'])){
	header ("Location: /no.php");


}
*/
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
    <link rel="stylesheet" href="css/rounded.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/fileinput.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/jRounded.css" type="text/css">
	<link rel="stylesheet" href="css/grayout.css" type="text/css">
	
    <!-- Java Script -->
	<script src="js/jquery.js" type="text/javascript"></script>
	<script src="js/slide.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="js/jquery.coda-slider-2.0.js"></script>

    <script type="text/javascript" src="js/popup.js"></script>
    <script type="text/javascript" src="js/runonload.js"></script>
    <script type="text/javascript" src="js/form.js"></script>
    <script type="text/javascript" src="js/grayout.js"></script>
    <script type="text/javascript" src="js/fileinput.js"></script>
    <script type="text/javascript" src="js/changeuploads.js"></script>
    <script type="text/javascript" src="js/jRounded.js"></script>
    <script type="text/javascript" src="js/uploader.js"></script>
	<script type="text/javascript" src="js/simplemodal.js"></script>
	<script type="text/javascript" src="js/basic.js"></script>
	<script type="text/javascript" src="js/ui.js"></script>
	<script type="text/javascript" src="js/ui.position.js"></script>
	<script type="text/javascript" src="js/library.js"></script>

    <!--Feed Menu -->		

<script type="text/javascript">
window.onload = init;
</script>


<script type="text/javascript">
$(function() {
$("#Rbt2").click(function() {
var email = $("#Rtb").val();
var password = $("#Rtb1").val();
var sex = $("#Rtbs1").val();
var birthday= $("#Rtbs3").val();
var dataString = 'email='+ email + '&password=' + password + '&sex=' + sex + '&birthday=' + birthday;

if(email=='' || password=='' || sex=='' || birthday=='')
{
$('.success').fadeOut(200).hide();
$('.error').fadeOut(200).show();
}
else
{
$.ajax({
type: "POST",
url: "registeruser.php",
data: dataString,
success: function(){
$('.success').fadeIn(200).show();
$('.error').fadeOut(200).hide();
}
});
}
alert('User Created successfully');
{
onclick="grayOut(false)"
}
return false;
});
});
</script>

<script type="text/javascript">
$(function() {
$("#Rbt2h").click(function() {
var email = $("#Rtbh").val();
var password = $("#Rtb1h").val();
var sex = $("#Rtbs1h").val();
var birthday= $("#Rtbs3h").val();
var dataString = 'email='+ email + '&password=' + password + '&sex=' + sex + '&birthday=' + birthday;

if(email=='' || password=='' || sex=='' || birthday=='')
{
$('.success').fadeOut(200).hide();
$('.error').fadeOut(200).show();
}
else
{
$.ajax({
type: "POST",
url: "registeruser.php",
data: dataString,
success: function(){
$('.success').fadeIn(200).show();
$('.error').fadeOut(200).hide();
}
});
}
alert('User Created successfully');
{
onclick="grayOut(false)"
}
return false;
});
});
</script>

<script type="text/javascript">
$(document).ready(function() {

$('#submitpics').click(function(e) {

     e.preventDefault();
 
      var photoid = $('#upid').val();
      var formData = $('#pictureform').serialize();
      submitForm(photoid);
if(photoid=="")
{
$('.success').fadeOut(200).hide();
$('.error').fadeOut(200).show();
}
else
{
});
});


<script type="text/javascript">
$(document).ready(function() {

$('#submitpicsh').click(function(e) {

     e.preventDefault();
 
      var photoid = $('#upidh').val();
      var formData = $('#pictureformh').serialize();
      submitForm(photoid);
if(photoid=="")
{
$('.success').fadeOut(200).hide();
$('.error').fadeOut(200).show();
}
else
{
});
});
function submitForm(photoid) {
      $.ajax({
      type: 'POST',
      url: 'uploadphotoid.php',
      data: formData,
      dataType: "json",
      success: function(data) {
          alert ('Success')

}
});
};
</script>

<script type="text/javascript">

var t = 0;
var IE = navigator.appName;
var OP = navigator.userAgent.indexOf('Opera');
var tmp = '';

function operaFix() {

   if (OP != -1) {
      document.getElementById('browser').style.left = -120 + 'px';
   }

}


function startBrowse() {

   tmp = document.getElementById('dummy_path').value;
   getFile();

}

function getFile() {

   // IF Netscape or Opera is used...
   //////////////////////////////////////////////////////////////////////////////////////////////
   if (OP != -1) {

   displayPath();

if (tmp != document.getElementById('dummy_path').value && document.getElementById('dummy_path').value 

!= '') {

         clearTimeout(0);
         return;

      }

   setTimeout("getFile()", 20);

   // If IE is used...
   //////////////////////////////////////////////////////////////////////////////////////////////
   } else if (IE == "Microsoft Internet Explorer") {

      if (t == 3) {

         displayPath();

         clearTimeout(0);
         t = 0;
         return;

      }

   t++;
   setTimeout("getFile()", 20);


   // Or if some other, better browser is used... like Firefox for example :)
   //////////////////////////////////////////////////////////////////////////////////////////////
   } else {

      displayPath();

   }

}


function displayPath() {

   document.getElementById('dummy_path').value = document.getElementById('browser').value;

}

</script>

<script type="text/javascript">

(function($){ 
  $.fn.extend({ 
    box: function() { 
      return $(this).each(function(){
		$(this).wrap('<div class="box"><div></div><div class="tl"></div><div class="tr"></div><div class="bl"></div><div class="br"></div></div>');
      });
    }
  })
})(jQuery);
</script>

<script type="text/javascript">
function change(e, color, fcolor){
var el=window.event? event.srcElement: e.target
if (el.tagName=="INPUT"&&el.type=="button")
el.style.backgroundColor=color
el.style.color=fcolor  
if (el.style.backgroundColor=="color")
el.style.backgroundColor="#fff"
}
</script>

<script type="text/javascript">
<!--
function confirmation() {
	var answer = confirm("The 'Register' button expedites the registration process and allows you to create a PlateMe account with generic plate and user information. Please note that some features of the site may be unaccessable to users who register with generic information.  If you would like to continue with full registration, please click 'Cancel' and select the 'Next' button to continue with full registration.");
	if (answer){
		alert("Continuing with quick registration...Please login using the email and password you've just provided.");
		document.forms["registeruser"].submit();
	}
	else{
		alert("Cancelling quick registration...");
		window.location = "http://www.oopsner.com/rebelSF/index.php";
	}
}
//-->
</script>

</head>

<body>

<div class="container">
  <div class="header">
    
	<div class="logins">
	 <form method="post" action="login.php" name="loginsform">
	  <input type="text" id="loginemail" name="loginemail" value="Email" onclick="if(this.value=='Email'){this.value=''}" onblur="if(this.value==''){this.value='Email'}">
	  <input type="password" id="loginpassword" value="Password"
  name= "loginpassword" onclick="if(this.value=='Password'){this.value=''}" onblur="if(this.value==''){this.value='Password'}">
	  <input type="submit" class="roundbt" id="loginsbt" value="Log In">
	 
	  <div class="loginsinfo1">
	    <input type="radio" name="staylogged" id="loginsradiobt" value="staylogged">Keep me logged in
	  </div>
	  <div class="loginsinfo2">
	    <a href="#">Forgot your password?</a>
	  </div>	
	  </form>
	</div>
	</div>
 
<div class="footer">
  <img src="images/footer.jpg" height="90" width="1200" />
</div>
  
 <div class="startcontent"> 
   <div id="panels_container"> 
   <img src="images/blackbanner.png" height="90" width="1200" />
   
     <div id="panel1" onclick="javascript:cover();document.getElementById('panel1h').style.visibility='visible';
	                                              document.getElementById('panel2').style.visibility='hidden';
												  document.getElementById('panel2cap').style.visibility='visible';
												  document.getElementById('panel1').style.visibility='hidden'">
       <?php include ('reguser.php'); ?>
     </div>
	 
	<div id="cover">
	  <div id="panel1h">
		<div id="warning">
		  <form id="registeruser" name="registeruser" method="post" action="registeruser.php" target="framee">
	       <div id="regframe">
		     <input type="text" name="email" class="reg_tb" value="Email" onclick="if(this.value=='Email'){this.value=''}" onblur="if(this.value==''){this.value='Email'}" />
		     <input type="password" name="password" class="reg_tb" onmouseover="popup('Password')" onmouseout="kill()" onclick="if(this.value=='Password'){this.value=''}" />
		     <input type="password" name="password2" class="reg_tb" onmouseover="popup('Re-Enter Password')" onmouseout="kill()" onclick="if(this.value=='Password'){this.value=''}" />
			  
		     <button type="button" name="malebt" id="reg_male" style="border-left:none; border-right:none;" onclick="this.style.background='#c1c1c1'; document.getElementById('MoF_tb').value='m';document.getElementById('reg_female').style.background='#fff';">Male</button>
		     <button type="button" name="femalebt" id="reg_female" onclick="this.style.background='#c1c1c1'; document.getElementById('MoF_tb').value='f';">Female</button>
		     <input type="text" name="birthday" id="reg_bday" value="Birthday" style="float:left; border-left:none; border-right:none;" onmouseover="popup('MM/DD/YYYY')" onmouseout="kill()" onclick="if(this.value=='Birthday'){this.value=''}" onblur="if(this.value==''){this.value='Birthday'}">
		   </div>
		   
		     <label id="next_label">Click here for full registration with your license plate</label>
		     <label id="register_label">Click here for quick registration (generic license plate)</label>
		   
		     <input type="submit" name="Rnext" id="reg_nextBT" value="" onclick="switch2idh()">
		     <input type="submit" name="Rnext" id="reg_registerBT" value="" onclick="confirmation()" >
		     <iframe name="framee" id="framee" style="visibility:hidden;"></iframe>
			 <input type="text" name="sex" id="MoF_tb" value="" style="visibility:hidden">
		  </form>
		</div>
	  </div>
	</div>
	 
     <div id="panel2">
       
	   <img src="images/panel2cap.PNG" id="panel2cap">
       <div class="Sicons">
         
         <div id="Srow">
           <div class="Sicon">
             <a href="#"><img src="icons2/about.png" height="65" width="65" onmouseover="popup('About')" onmouseout="kill()" /></a>
           </div>  
           <div class="Sicon">
             <a href="advertising.php"><img src="icons2/Advertising.png" height="65" width="65" onmouseover="popup('Advertising')" onmouseout="kill()" /></a>
           </div>
           <div class="Sicon">
             <a href="#"><img src="icons2/Career.png" height="65" width="65" onmouseover="popup('Careers')" onmouseout="kill()" /></a>
           </div>
         
         </div>
         
         <div id="Srow">
         	<div class="Sicon">
              <a href="#"><img src="icons2/Developer2.png" height="65" width="65" onmouseover="popup('Developer')" onmouseout="kill()" /></a>
            </div>
            <div class="Sicon">
              <a href="#"><img src="icons2/Developer4.png" height="65" width="65" onmouseover="popup('Terms')" onmouseout="kill()" /></a>
            </div>
            <div class="Sicon">
              <a href="#"><img src="icons2/mobile.png" height="65" width="65" onmouseover="popup('Mobile')" onmouseout="kill()" /></a>
            </div>
         </div>
         
         <div id="Srow">
           <div class="Sicon">
             <a href="#"><img src="icons2/Privacy.png" height="65" width="65" onmouseover="popup('Privacy Settings')" onmouseout="kill()"  /></a>
           </div>
           <div class="Sicon">
             <a href="#"><img src="icons2/Globe.png" height="65" width="65" onmouseover="popup('Language')" onmouseout="kill()" /></a>
           </div>
           <div class="Sicon">
             <a href="#"><img src="icons2/Help.png" height="65" width="65" onmouseover="popup('Help')" onmouseout="kill()" 
             /></a>
           </div>
         </div>
       
       </div>
     </div>
     
     <div id="panel3">
       <div id="panel3_plate"><img src="images/genericplate.png" height="130" width="280"></div>
        <div id="panel3_boxs">
		 <form action="platesearch.php" name="startupsearch">
            <input type="text" name="countrytb" class="panel3_squareL" value="Country" onclick="if(this.value=='Country'){this.value=''}" onblur="if(this.value==''){this.value='Country'}" />
		    <input type="text" name="statetb" class="panel3_squareR" value="State/Region" onclick="if(this.value=='State/Region'){this.value=''}" onblur="if(this.value==''){this.value='State/Region'}" />
			
			<input type="text" name="plateb" class="panel3_squareL" value="Plate Number" onclick="if(this.value=='Plate Number'){this.value=''}" onblur="if(this.value==''){this.value='Plate Number'}" />
			<input type="submit" name="mainsearch" id="panel3_squareBT" value="" />
		   <!--<input type="text" name="countrytb" id="Splatetb1" onclick="if(this.value=='Country'){this.value=''}" onblur="if(this.value==''){this.value='Country'}" value="Country" style="border: none" />
           <input type="text" name="statetb" id="Splatetb2" value="State/Region" onclick="if(this.value=='State/Region'){this.value=''}" onblur="if(this.value==''){this.value='State/Region'}"  style="border: none" />
           <input type="text" name="platetb" id="Splatetb3" value="Plate Number" style="border: none" onclick="if(this.value=='Plate Number'){this.value=''}" onblur="if(this.value==''){this.value='Plate Number'}" />
           <input type="submit" name="mainsearch" id="Splatebt" value="" />-->
         </form>
		</div>
	  </div>
   </div>
   
</div>
</div>
</div>
</div>
</body>
</html>