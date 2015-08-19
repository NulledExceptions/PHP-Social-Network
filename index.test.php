<?php
if (!isset($_COOKIE['user'])){
 header("Location: /no.php");
  
} else {

  $user = $_SESSION['user']; 

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

<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-874">
<title>Marneezy Wall</title>
<META name="description" content="The Marneezyness has begun. That is all for now" />
<META name="keywords" content="marneezy, marneezyness, oopsner, gangsta shit, kevin summer, bitch of the week, sofreshsoclean" />
<link rel="shortcut icon" href="/images/mylogo.ico" />

<script src="jquery.js" type="text/javascript"></script>
<script src="login.js" type="text/javascript"></script>
<script src="Scripts/swfobject_modified.js" type="text/javascript"></script>
<script src="javascript/slide.js" type="text/javascript"></script>
<script src="javascript/jquery-1.6.2" type="text/javascript"></script>
<script src="Scripts/swfobject_modified.js" type="text/javascript"></script>

<script type="text/javascript" src="js/mediaplayer.js"></script>
<script type="text/javascript" src="js/player.js"></script>


    <!-- jQuery - the core -->
	<script src="js/jquery-1.3.2.min.js" type="text/javascript"></script>
	<!-- Sliding effect -->
	<script src="js/slide.js" type="text/javascript"></script>
		<link rel="stylesheet" href="css/slide.css" type="text/css" media="screen" />


<style type="text/css">

<!--

@import url("http://www.marneezy.com/style.css");
@import url("/style.css");


-->.


</style>
<script src="Scripts/swfobject_modified.js" type="text/javascript"></script>
</head><body bgcolor="#FFFFFF"><table id="siteHeader" width="100%" border="0" cellpadding="0" cellspacing="0"> <tbody><tr>
  <td height="108"><table width="815" border="0" cellpadding="0" cellspacing="0" id="siteHeader_innerContent">
  
  <tbody><tr>
   <td class="banner"><object id="FlashID" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="648" height="80">
     <param name="movie" value="good0.swf" />
       <param name="quality" value="high" />
       <param name="wmode" value="opaque" />

       <param name="swfversion" value="105.0.0.0" />
       <!-- This param tag prompts users with Flash Player 6.0 r65 and higher to download the latest version of Flash Player. Delete it if you dont want users to see the prompt. -->
       <param name="expressinstall" value="Scripts/expressInstall.swf" />
       <param name="LOOP" value="false" />
       <!-- Next object tag is for non-IE browsers. So hide it from IE using IECC. -->
       <!--[if !IE]>-->
       <object type="application/x-shockwave-flash" data="good0.swf" width="648" height="80">
         <!--<![endif]-->
         <param name="quality" value="high" />

         <param name="wmode" value="opaque" />
         <param name ="loop" value='false' />
         <param name="swfversion" value="105.0.0.0" />
         <param name="expressinstall" value="Scripts/expressInstall.swf" />
         <param name="LOOP" value="false" />
         <!-- The browser displays the following alternative content for users with Flash Player 6.0 and older. -->
         <div>
           <h4>Content on this page requires a newer version of Adobe Flash Player.</h4>

           <p><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" /></a></p>
         </div>
         <!--[if !IE]>-->
       </object>
       <!--<![endif]-->
     </object></td>
    <td class="banner"></a></td>
    
  </tr></tbody>
  
  
  
  </table></td>

      <td>&nbsp;</td>
      <td>&nbsp;</td>
</tr>
</tbody></table>

<!-- End Site Header -->




<!--Navigation -->

<table id="navigation" border="0" cellpadding="0" cellspacing="0" width="100%"> <tbody><tr><td>	

<table id="navigation_innerContent" border="0" cellpadding="0" cellspacing="0">

  <tbody><tr>

    <td class="tabs">
	<div><a href="/member.php">Home</a></div>
	<div><a href="/movies.php">Movies</a></div>
	<div><a href="/images.php">Images</a></div>
	<div><a href="/music.php">Music</a>
	</div><div><a href="/profile.php">Profile</a></div>
	</td>
     <td class="banner">  

        

  </tr></tbody></table>

	

	</td></tr></tbody></table>

<!-- End Navigation -->



<table id="mainPanel" border="0" cellpadding="0" cellspacing="0" width="100%"> <tbody><tr><td>
	
	<table id="mainPanel_innerContent" border="0" cellpadding="0" cellspacing="0">
  <tbody><tr>

    

    

	    </li></td>
    <td width="613" bgcolor="#D6D6D6" class="mainPanelContent">
	 
    
  	<!-- PNG FIX for IE6 -->
  	<!-- http://24ways.org/2007/supersleight-transparent-png-in-ie6 -->
	<!--[if lte IE 6]>
		<script type="text/javascript" src="js/pngfix/supersleight-min.js"></script>
	<![endif]-->
	 
    <!-- jQuery - the core -->
	<script src="js/jquery-1.3.2.min.js" type="text/javascript"></script>
	<!-- Sliding effect -->
	<script src="js/slide.js" type="text/javascript"></script>

</head>

    
<body>    
    

<div class="header"> <h2>Gangster Shit</h2>   </div>
	
	<div class="content"> 
<div class="post_info"><p /><center>
</center><br />
<div id="wall_container">
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
<div id="content">

<?php include('load_messages.php'); ?>

</div>



</div>
  

</div>









    
    

    
    
     </div>
		</td>
    <td width="239" class="reftSidebarPanel"> 
    
    
	



<div class="ns-ticker-box">

            <br />


		        			
	    		
	    
		

		



		

		

	     
		

		

		
<div class="news">
		<a href="http://www.marneezy.com/whatsgood.html" title="Read More"><div class="header"></div></a><a href="http://www.marneezy.com/whatsgood.html" rel="bookmark" title="Start taking notes"><a href="http://www.marneezy.com/whatsgood.html" rel="bookmark" title="Start taking notes"><a href="http://www.marneezy.com/whatsgood.html" rel="bookmark" title="Start taking notes"><a href="http://www.marneezy.com/whatsgood.html" rel="bookmark" title="Start taking notes"><a href="http://www.marneezy.com/whatsgood.html" rel="bookmark" title="Start taking notes"><a href="http://www.marneezy.com/whatsgood.html" rel="bookmark" title="Start taking notes"><a href="http://www.marneezy.com/whatsgood.html" rel="bookmark" title="Start taking notes"><img src="/images/animatedroid.gif" alt="" width="239" height="205" border="0" /></a></a></a></a></a></a></a></div>
				 
		
<div class="news">
		<a href="http://www.marneezy.com/whatsgood.html" title="Read More"><div class="header"> <h3>Whats Good</h3> </div></a>
        
		

<div class="img"><a href="http://www.marneezy.com/whatsgood.html" rel="bookmark" title="Start taking notes">

<img src="indexBackup_files/comp.html" alt="" border="0" />

</a></div>

        
		
   


            <script language="javascript">
<!--
var where = document.referrer
var name = navigator.appName
var vers = navigator.appVersion
var codename = navigator.appCodeName
var ip= '<!--#echo var="REMOTE_ADDR"-->';

document.write("<FONT COLOR=black><FONT SIZE=2>...and you came here via <BR>"+ip+"<BR>"+where+" <BR> "+name+"  "+vers+"<BR>"+codename+"<BR></FONT></FONT>");

// -->
</script>
<?php    $ip=$_SERVER['REMOTE_ADDR'];
       print_r(geoCheckIP($ip));
       //Array ( [domain] => dslb-094-219-040-096.pools.arcor-ip.net [country] => DE - Germany [state] => Hessen [town] => Erzhausen )

       //Get an array with geoip-infodata
       function geoCheckIP($ip)
       {
               //check, if the provided ip is valid
               // if(!filter_var($ip, FILTER_VALIDATE_IP))
               // {
                       // throw new InvalidArgumentException("IP is not valid");
               // }

               //contact ip-server
               $response=@file_get_contents('http://www.netip.de/search?query='.$ip);
               // if (empty($response))
               // {
                       // throw new InvalidArgumentException("Error contacting Geo-IP-Server");
               // }

               //Array containing all regex-patterns necessary to extract ip-geoinfo from page
               $patterns=array();
               $patterns["domain"] = '#Domain: (.*?)&nbsp;#i';
               $patterns["country"] = '#Country: (.*?)&nbsp;#i';
               $patterns["state"] = '#State/Region: (.*?)<br#i';
               $patterns["town"] = '#City: (.*?)<br#i';

               //Array where results will be stored
               $ipInfo=array();

               //check response from ipserver for above patterns
               foreach ($patterns as $key => $pattern)
               {
                       //store the result in array
                       $ipInfo[$key] = preg_match($pattern,$response,$value) && !empty($value[1]) ? $value[1] : 'not found';
               }
		
		
		echo $ipInfo[town];
		echo "</br>";
		echo $ipInfo[state];
		//$mystate = $ipInfo[state];
	   }?>
<div id="example"></div>
<script type="text/javascript">


txt+= "<p>Cookies Enabled: " + navigator.cookieEnabled + "</p>";
txt+= "<p>Platform: " + navigator.platform + "</p>";
txt+= "<p>User-agent header: " + navigator.userAgent + "</p>";

document.getElementById("example").innerHTML=txt;

</script>

          </div>
		



</div>	




<center>


</center>    
    </div></td><td width="2" style="vertical-align: top;"><br />
            </td>

  </tr></tbody></table>
	
	</td></tr></tbody></table>






<table id="footer" border="0" cellpadding="0" cellspacing="0" width="100%"> <tbody><tr><td>

	

	<table id="footer_innerContent" border="0" cellpadding="0" cellspacing="0">

  <tbody><tr>

    <td class="top">

	

	<table border="0" cellpadding="0" cellspacing="0" width="100%">

  <tbody><tr>

    <td class="left">
    <table border="0" cellpadding="0" cellspacing="0" width="100%"><tbody><tr><td width="0%" style="vertical-align: top;"><br />
                        </td>
<td valign="top" width="22%"><div>
      <h3><a href="file:///media/5106-DC19/Website/index.html?page_id=14&amp;pOpen=tutorial#ADOBE">Funny Shit</a></h3>

      <table width="100%"><tbody><tr>
        <td valign="top"><a href="www.marneezy.com">Pictures</a></td></tr><tr>
          <td valign="top">Videos</td></tr><tr>
            <td valign="top"><a href="www.marneezy.com">Noob</a></td></tr><tr>
        <td valign="top"><a href="www.marneezy.com/tutorial">Marneezy</a></td></tr><tr>
        <td valign="top"><a href="www.marneezy.com/al">Links</a></td></tr></tbody></table></div></td><td valign="top" width="24%"><div><h3><a href="/computer.html">COMPUTER</a></h3><table width="100%"><tbody><tr><td valign="top"><a href="www.marneezy.comp;pOpen=tutorial">The Basics<br />

                              </a></td></tr><tr>
          <td valign="top"><a href="www.marneezy.com/orial">My Computers</a></td></tr><tr><td valign="top"><a href="www.marneezy.com/torial">OverClocking<br />
                              </a></td></tr><tr><td valign="top"><a href="www.marneezy.com/utorial">Networking</a></td></tr><tr><td valign="top"><a href="www.marneezy.com/pOpen=tutorial">Scripting<br />
                              </a></td></tr></tbody></table></div></td><td valign="top" width="42%"><div><h3><a href="file:///media/5106-DC19/Website/index.html?page_id=14&amp;pOpen=tutorial#PROGRAMMING">PROGRAMMING</a></h3><table width="100%"><tbody><tr><td valign="top"><a href="www.marneezy.com/n=tutorial">C</a></td></tr><tr><td valign="top"><a href="www.marneezy.com/utorial">Java</a></td></tr><tr><td valign="top"><a href="www.marneezy.com/ial">JavaScript</a></td></tr><tr><td valign="top"><a href="www.marneezy.com/tutorial">PHP<br />

                              </a></td></tr><tr><td valign="top"><a href="www.marneezy.com/n=tutorial">Python<br />
                              </a></td></tr></tbody></table></div></td><td valign="top" width="12%"><div>
            <h3>Plug</h3><table width="100%"><tbody><tr>
              <td valign="top">Fill me In</td></tr><tr>
              <td valign="top">Empty</td></tr><tr><td valign="top"><a href="www.marneezy.com/en=tutorial"><br /></a></td></tr><tr>
              <td valign="top"><a href="hwww.marneezy.com/utorial"><br /></a></td></tr><tr><td valign="top"><a href="www.marneezy.com/n=tutorial%22"><br /></a></td></tr></tbody></table></div></td></tr></tbody></table>
<!--<table width="100%" border="0" cellspacing="0" cellpadding="0">

  <tr>

    <td>	<div>   <24870143>

	<h3>ADOBE:</h3>

      <a href="#">After Effects</a> <br />

      <a href="#">DreamWeaver</a> <br />

      <a href="#">Flash</a> <br />

      <a href="#">Photoshop</a> <br />

      <a href="#">Premiere Pro</a> <br />

      <a href="#">Other	</a>  </div> </td>

    <td>&nbsp;</td>

    <td>

	<div>  

	<h3>COMPUTER:</h3>

      <a href="#">3ds Max</a> <br />

      <a href="#">Blender</a> <br />

      <a href="#">Networking</a> <br />

      <a href="#">CSS</a> <br />

      <a href="#">How to Build a computer</a> <br />

      <a href="#">Other	</a>  </div> </td>

    <td>&nbsp;</td>

    <td>

	<div>  

	<h3>PROGRAMMING:</h3>

      <a href="#">C</a> <br />

      <a href="#">C++</a> <br />

      <a href="#">Cocos2d</a> <br />

      <a href="#">Game Development</a> <br />

      <a href="#">Intermediate Java</a> <br />

      <a href="#">Other	</a>  </div> 

	</td>

    <td>&nbsp;</td>

    <td>

	<div>  <24870143>

	<h3>VIDEO GAMES:</h3>

      <a href="#">Assasins Creed</a> <br />

      <a href="#">Battlefield Bad Company</a> <br />

      <a href="#">Call of duty</a> <br />

      <a href="#">Left 4 dead</a> <br />

      <a href="#">Mass Effect 2</a> <br />

      <a href="#">Other	</a>  </div> </td>

  </tr>

</table>-->

	



</td></tr></tbody></table>



	

	 </td>



  </tr>

    <tr>

    <td class="bottom"> <div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp; </div>
      <div style="float: right;"> <a href="#top" class="btn">Back to Top</a> </div>

	    </td>

    

  </tr>

  </tbody></table>

	

	</td></tr></tbody></table>
<script type="text/javascript">
<!--
swfobject.registerObject("FlashID");
//-->
</script>
<script type="<text/javascript" src="js/mediaplayer.js"></script>
<script type="text/javascript" src="http://mediaplayer.yahoo.com/js"></script>

<script type="text/javascript">
   function apiReadyHandler(){
      YAHOO.ympyui.util.Event.onDOMReady(UpdateRelevantInfo);
      YAHOO.MediaPlayer.onTrackStart.subscribe(UpdateRelevantInfo);
   }
 

   function getElementsByClassName(className, tag, elm){
      var testClass = new RegExp("(^|\\s)" + className + "(\\s|$)");
      var tag = tag || "*";
      var elm = elm || document;
      var elements = (tag == "*" && elm.all)
                        ? elm.all
                        : elm.getElementsByTagName(tag);
      var returnElements = [];
      var current;
      var length = elements.length;
      for(var i=0; i<length; i++){
         current = elements[i];
         if(testClass.test(current.className)){
            returnElements.push(current);
         }
      }
      return returnElements;
   }
 
   function UpdateRelevantInfo() {
      // Default text
      var info = '<a href="/video.php">whatface</a>';
 
      // Retrieve information about the track
      var meta = YAHOO.MediaPlayer.getMetaData();
 
      // If element with class "relevant-info" is available
      // inside the anchor, use its content instead
      if(meta && meta.anchor){
         var el = meta.anchor;
         var a = (el.getElementsByClassName)
                    ? el.getElementsByClassName("relevant-info")
                    : getElementsByClassName("relevant-info", null, el);
         if(a.length > 0){ info = a[0].innerHTML; }
      }
 
      document.getElementById('ymp-relevance').innerHTML = '
<div id="ymp-relevant-info">' + info + '</div>
 
';
   }
 
   YAHOO.MediaPlayer.onAPIReady.subscribe(apiReadyHandler);
</script>

</body></html>