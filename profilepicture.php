

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
    
    <!-- Java Script -->
	<script src="js/jquery.js" type="text/javascript"></script>
	<script src="js/slide.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="js/jquery.coda-slider-2.0.js"></script>
    <script type="text/javascript" src="js/nifty.js"></script>
    

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
  
  <div class="profilesidebar">
    <div class="profilelinks">
      <div class="plink"> <!--Basic Information-->
        <a href="basicinformation.html"><img src="images/basicinfo.jpg" height="35" width="190" /></a>
      </div>
      
      <div class="plink"> <!--Profile Picture-->
        <a href="profilepicture.html"><img src="images/profile.jpg" height="35" width="190" /></a>
      </div>
      
      <div class="plink"> <!--Friends and Family-->
        <a href="FaF.html"><img src="images/friends.jpg" height="35" width="190" /></a>
      </div>
      
      <div class="plink"> <!--Education and Work-->
        <a href="EaU.html"><img src="images/education.jpg" height="35" width="190" /></a>
      </div>
      
      <div class="plink"> <!--Garage-->
        <a href="garage.html"><img src="images/garage.jpg" height="35" width="190" /></a>
      </div>
      
      <div class="plink"> <!--Entertainment-->
        <a href="entertainment.html"><img src="images/entertainment.jpg" height="35" width="190" /></a>
      </div>
      
      <div class="plink"> <!--Activities-->
        <a href="activities.html"><img src="images/activities.jpg" height="35" width="190" /></a>
      </div>
      
      <div class="plink"> <!--Interests-->
        <a href="interests.html"><img src="images/interests.jpg" height="35" width="190" /></a>
      </div>
      
      <div class="plink"> <!--Contact Information-->
        <a href="contactinfo.html"><img src="images/contact.jpg" height="35" width="190" /></a>
      </div>
      <div class="profileinfo">
        Visit your <a href="privacy.html">Privacy Settings</a> to control who can see the information on your profile
      </div>
    </div>  
  </div>
  
  <div class="profilecontent"> 
    <div class="profilenav">
       <a href="profile.html"><input type="submit" class="navbutton" id="viewplate"
    value="Back to Profile"/></a>  
       <div class="navinfo">
         User Name <img src="images/arrow.jpg" height="12" width="12" /> Edit Profile <img src="images/arrow.jpg" height="12" width="12"  /> Profile Picture
       </div>
       </div>
    
    <div class="piccontent">
      <div class="imgform">
        <div class="upfom">
        <form action="upload.php" method="post" enctype="multipart/form-data">
        <label for="file">Filename:
        <input type="file" name="file" id="file" /></label>
        <br />
        <input type="submit" name="submit" value="Upload" />
        </form> 
       </div>
       
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
