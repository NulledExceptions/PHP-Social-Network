 <?php
//Loading Comments link with load_updates.php 
if($lastid=='')
$lastid=0;
  
$updatesarray=$Wall->Updates($uid,$lastid,$owner);
$total=$Wall->Total_Updates($owner);
if($updatesarray)
{
foreach($updatesarray as $data)
 {
 $owner= $data['owner_fk'];
 $msg_id=$data['msg_id'];
 $orimessage=$data['message'];
 $message=tolink(htmlcode($data['message']));
 $time=$data['created'];
 $username=$data['username'];
 $uploads=$data['uploads'];
 $uid=$data['uid_fk'];
 // User Avatar
 if($gravatar)
 $face=$Wall->Gravatar($uid);
 else
 $face=$Wall->Profile_Pic($uid);
  // End Avatar
 if(textlink($orimessage))
 {
 $link =textlink($orimessage);
?>

<script type="text/javascript"> 
$(document).ready(function(){$("#stexpand<?php echo $msg_id;?>").oembed("<?php echo  $link; ?>",{maxWidth: 400, maxHeight: 300});});
</script>
<?php } ?>



<div class="stbody" id="stbody<?php echo $msg_id;?>">
  
 <!-- For left profile image of post -->
  <div class="stimg">
    <img src="<?php echo $face;?>" class='big_face' alt='<?php echo $username; ?>'/>
  </div> 

   <div class="sttext">
   
	   <div class="stheader">
	      <a href="<?php echo 'profile_body.php';  $owner=$uid;?>" style="float:left"><?php echo $username;?></a>
	      <a class="stdelete" href="#" id="<?php echo $msg_id;?>" title="Delete Update" style="float:right"></a>
        </div>
 	   
	   <div class="stcontent">
	     <?php echo clear($message);  ?>
	     <?php
	    if($uploads)
		  {
		  echo "<div style='margin-top:10px'>";
		  $s = explode(",", $uploads);
		  foreach($s as $a)
		  {
		  $newdata=$Wall->Get_Upload_Image_Id($a);
		  if($newdata)
		  echo "<img src='uploads/".$newdata['image_path']."' class='imgpreview'/>";
		  }
		  echo "</div>";
		  }
	     ?>	
		<div class="sttime">
		  | <?php time_stamp($time);?> |
		</div> 
	  
		<div class="stfooter">
		   <a href='#' class='comment' id='<?php echo $msg_id;?>' title='Comment'>Comment </a>
		</div>
   </div>
  </div>
    <div id="stexpandbox">
    <div id="stexpand<?php echo $msg_id;?>"></div>
    </div>
    <div class="commentcontainer" id="commentload<?php echo $msg_id;?>">
      <?php
	    $x=1;
	    include('load_comments.php') 
	  ?>
    </div>
    <div class="commentupdate" style='display:none' id='commentbox<?php echo $msg_id;?>'>
      <div class="stcommentimg">
        <img src="<?php echo $face;?>" class='small_face'/>
      </div> 
      <div class="stcommenttext" >
        <form method="post" action="">
		  <textarea name="comment" class="comment" maxlength="200"  id="ctextarea<?php echo $msg_id;?>"></textarea>
		  <br />
	   	  <input type="submit"  value=" Comment "  id="<?php echo $msg_id;?>" class="comment_button button"/>
	    </form>
      </div>
	  <!-- End Of Comment Text -->
    </div>
	<!-- End Of Comment's on Posts -->
  </div>
  <!-- End Of Post Text-->
<?php
  }
  if($total>$perpage)
  {
?>
 <!-- More Button here $msg_id values is a last message id value. -->
 
<div id="more<?php echo $msg_id; ?>" class="morebox">
  <a href="#" class="more" id="<?php echo $msg_id; ?>">More</a>
</div>

<?php
  }
  }
?>