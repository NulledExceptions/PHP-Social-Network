<?php

session_start();
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
	 <div id="wall_container">

<div id="updateboxarea">
<h4>What's up?</h4>
<textarea name="update" id="update" maxlength="200" ></textarea>
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
<input type="submit"  value=" Update "  id="update_button"  class="update_button"/> 
<span style="float:right">
<a href="javascript:void(0);" id="camera"><img src="icons/cameraa.png" border="0" title="Upload Image"/></a> 
 <a href="javascript:void(0);" id="webcam_button"><img src="icons/web-cam.png"  border="0" title="Webcam Snap" style='margin-top:5px'/></a>
</span>
</div>

</div>

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
