<?php

//Loading Comments link with load_updates.php 
 $commentsarray=$Wall->Comments($msg_id,0);
 
 if($x)
 {
 $comment_count=count($commentsarray);
$second_count=$comment_count-2;
if($comment_count>2)
{
?>
<div class="comment_ui" id="view<?php echo $msg_id; ?>">
<a href="#" class="view_comments" id="<?php echo $msg_id; ?>">View all <?php echo $comment_count; ?> comments</a>
</div>
<?php
$commentsarray=$Wall->Comments($msg_id,$second_count);
}
}
if($commentsarray)
{
foreach($commentsarray as $cdata)
 {
 $owner = $cdata['owner_fk'];
 $com_id=$cdata['com_id'];
 $comment=tolink(htmlcode($cdata['comment'] ));
  $time=$cdata['created'];
   $username=$cdata['username'];
  $uid=$cdata['uid_fk'];
 // User Avatar
 if($gravatar)
 $cface=$Wall->Gravatar($uid);
 else
 $cface=$Wall->Profile_Pic($uid);
  // End Avatar
 ?>
<div class="stbody" id="stbody<?php echo $msg_id;?>">
  <div class="stimg">
    <img src="<?php echo $face;?>" class='big_face' alt='<?php echo $username; ?>'/>
  </div> 
  
  <div class="sttext">
    <div class="stheader">
	  <a href="<?php echo $base_url.$username; ?>" style="float:left"><?php echo $username;?></a>
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
	</div>

	<div class="stfooter">
	   <a href='#' class='comment' id='<?php echo $msg_id;?>' title='Comment'>Comment </a>
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
	   	  <input type="submit"  value=" Comment "  id="<?php echo $msg_id;?>" class="comment_button"/>
	    </form>
      </div>
	  <!-- End Of Comment Text -->
    </div>
	<!-- End Of Comment's on Posts -->
  </div>
  <!-- End Of Post Text-->
</div>
<!-- End of Each Post -->
<?php 
}
}
?>