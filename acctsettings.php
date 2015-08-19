<script type="text/javascript" src="js/frames.js"></script>
<script type="text/javascript" src="js/ajax/js"></script>

<script type="text/javascript" >
 $(document).ready(function() { 
		
            $('#pic_thumb').live('change', function()			{ 
			           $("#PROFILEP_thumb").html('');
			    $("#PROFILEP_thumb").html('<img src="images/loading.gif" alt="Uploading...."/>');
			$("#acct_profilePic").ajaxForm({
						target: '#PROFILEP_thumb'
		}).submit();
		
			});
        }); 
</script>

<div id="settings_head"></div>
 <div id="settings_container">
  <div id="xframe">
    <div class="xrow"><button type="button" name="info_x" id="info_x" class="xbutton" onclick="INFORMATION_frameH();"></button></div>
	<div class="xrow"><button type="button" name="info_x" id="profilepic_x" class="xbutton" onclick="PROFILEP_frameH();"></button></div>
	<div class="xrow"><button type="button" name="info_x" id="connections_x" class="xbutton" onclick="CONNECTIONS_frameH();"></button></div>
	<div class="xrow"><button type="button" name="info_x" id="education_x" class="xbutton" onclick="EDUCATION_frameH();"></button></div>
	<div class="xrow"><button type="button" name="info_x" id="garage_x" class="xbutton" onclick="GARAGE_frameH();"></button></div>
	<div class="xrow"><button type="button" name="info_x" id="entertainment_x" class="xbutton" onclick="ENTERTAINMENT_frameH();"></button></div>
	<div class="xrow"><button type="button" name="info_x" id="activities_x" class="xbutton" onclick="ACTIVITIES_frameH();"></button></div>
	<div class="xrow"><button type="button" name="info_x" id="contact_x" class="xbutton" onclick="CONTACT_frameH();"></button></div>
  </div>
   <div id="optionsframe">
    <!--Basic Information-->
	<button type="button" id="acct_INFO" onclick="INFORMATION_frameV()">Basic Information</button>
	   <div id="INFORMATION_frame">
	     <form name="acct_information">
		   <input type="text" name="bdayM" class="bday_tb" style="border-left:none; border-right:none;" value="Month" onclick="if(this.value=='Month'){this.value=''}" 
																										 onblur="if(this.value==''){this.value='Month'}">
																											
		   <input type="text" name="bdayD" class="bday_tb" value="Day" onclick="if(this.value=='Day'){this.value=''}" 
														  onblur="if(this.value==''){this.value='Day'}">
		   <input type="text" name="bdayY" class="bday_tb" style="border-left:none; border-right:none;" value="Year" onclick="if(this.value=='Year'){this.value=''}" 
																										 onblur="if(this.value==''){this.value='Year'}">
		  
		   <button type="button" class="MoF_bt" style="border-left:none; border-right:none;">Male</button>
		   <button type="button" class="MoF_bt" style="border-right:none;">Female</button>
		   <!--NEED HIDDEN TB-->
		   <input type="text" name="currcity" class="WIDE_tb" value="Current City" onclick="if(this.value=='Current City'){this.value=''}" 
																   onblur="if(this.value==''){this.value='Current City'}">	
		   <input type="text" name="hometown" class="WIDE_tb" value="Hometown" onclick="if(this.value=='Hometown'){this.value=''}" 
															   onblur="if(this.value==''){this.value='Hometown'}">
		   
		   <button type="button" class="MoF_bt" style="border-left:none; border-right:none;">Men</button>
		   <button type="button" class="MoF_bt" style="border-right:none;">Women</button>
		   <!--NEED HIDDEN TB-->
		   <input type="text" name="relastatus" class="WIDE_tb" value="Relationship Status" onclick="if(this.value=='Relationship Status'){this.value=''}" 
																		  onblur="if(this.value==''){this.value='Relationship Status'}">
		   <input type="text" name="about" class="WIDE_tb" value="About" onclick="if(this.value=='About'){this.value=''}" 
															onblur="if(this.value==''){this.value='About'}">
		   <input type="text" name="languages" class="WIDE_tb" value="Languages" style="border-bottom:none;" onclick="if(this.value=='Languages'){this.value=''}" 
																							onblur="if(this.value==''){this.value='Languages'}">
		 </form>
	   </div>
	<!--Profile Picture-->
	<button type="button" id="acct_PROFILEP" onclick="PROFILEP_frameV()">Profile Picture</button>
	   <div id="PROFILEP_frame">
	     <form name="acct_profilePic" method="POST" enctype="multipart/form-data" action="ajaxupload.php">
		    <div id="PROFILEP_thumb">
              <input type="file" id="pic_thumb" name="pic_thumb" style="visibility:hidden">
		    </div>
		    <label id="PROFILEP_lb">Drag Photo To Adjust Thumbnail</label>
		    <br>
		    <br>
		    <button type="button" class="WIDE_bt" onclick="this.form.pic_thumb.click()">Add New Photo</button>
		    <button type="button" class="WIDE_bt">Remove Photo</button>
	     </form>
	   </div>
	<!--Connections-->
	<button type="button" id="acct_CONNECTIONS" onclick="CONNECTIONS_frameV()">Connections</button>
	   <div id="CONNECTIONS_frame">
	      <form name="acct_connections">
		     <input type="text" name="family" class="WIDE_tb" value="Family" onclick="if(this.value=='Family'){this.value=''}" onblur="if(this.value==''){this.value='Family'}">
																										 
			 <input type="text" name="friends" class="WIDE_tb" value="Friends" onclick="if(this.value=='Friends'){this.value=''}" onblur="if(this.value==''){this.value='Friends'}">
			 <input type="text" name="favorites" class="WIDE_tb" value="Favorites" onclick="if(this.value=='Favorites'){this.value=''}" onblur="if(this.value==''){this.value='Favorites'}">
			 <input type="text" name="relationship" class="WIDE_tb" value="Relationship" onclick="if(this.value=='Relationship'){this.value=''}" onblur="if(this.value==''){this.value='Relationship'}">
			 <input type="text" name="followers" class="WIDE_tb" value="Followers" onclick="if(this.value=='Followers'){this.value=''}" onblur="if(this.value==''){this.value='Followers'}">
			 <input type="text" name="random" class="WIDE_tb" value="Random" style="border-bottom:none;" onclick="if(this.value=='Random'){this.value=''}" onblur="if(this.value==''){this.value='Random'}">
		  </form>
	   </div>
	<!--Education & Work-->
	<button type="button" id="acct_EDUCATION" onclick="EDUCATION_frameV()">Education & Work</button>
	   <div id="EDUCATION_frame">
	     <form name="acct_education">
		     <input type="text" name="employer" class="WIDE_tb" value="Employer" onclick="if(this.value=='Employer'){this.value=''}" onblur="if(this.value==''){this.value='Employer'}">
			 <input type="text" name="college" class="WIDE_tb" value="College/University" onclick="if(this.value=='College/University'){this.value=''}" onblur="if(this.value==''){this.value='College/University'}">
			 <input type="text" name="highschool" class="WIDE_tb" value="High School" onclick="if(this.value=='High School'){this.value=''}" onblur="if(this.value==''){this.value='High School'}">
			 <input type="text" name="middleschool" class="WIDE_tb" value="Middle School" onclick="if(this.value=='Middle School'){this.value=''}" onblur="if(this.value==''){this.value='Middle School'}">
			 <input type="text" name="elementryschool" class="WIDE_tb" value="Elementry School" style="border-bottom:none;" onclick="if(this.value=='Elementry School'){this.value=''}" onblur="if(this.value==''){this.value='Elementry School'}">
		 </form>
	   </div>
	<!--Garage-->
	<button type="button" id="acct_GARAGE" onclick="GARAGE_frameV()">Garage</button>
	   <div id="GARAGE_frame">
	     <form name="acct_garage">
		    <button type="button" class="WIDEup_bt" style="float:left;">Edit Plate Information</button>
			<br>
			<br>
			<br>
			<button type="button" name="previousplate" id="left_arrow"></button>
			<div id="pick_plate">
			
			</div>
			<button type="button" name="nextplate" id="right_arrow"></button>
		 </form>
	   </div>
	<!--Entertainment-->
	<button type="button" id="acct_ENTERTAINMENT" onclick="ENTERTAINMENT_frameV();">Entertainment</button>
	   <div id="ENTERTAINMENT_frame">
	     <form name="acct_entertainment">
		    <input type="text" name="favmuisc" class="WIDEup_tb" value="What music do you like?" onclick="if(this.value=='What music do you like?'){this.value=''}" onblur="if(this.value==''){this.value='What music do you like?'}">
			<input type="text" name="favbooks" class="WIDEup_tb" value="What books do you like?" onclick="if(this.value=='What books do you like?'){this.value=''}" onblur="if(this.value==''){this.value='What books do you like?'}">
			<input type="text" name="favmovies" class="WIDEup_tb" value="What movies do you like?" onclick="if(this.value=='What movies do you like?'){this.value=''}" onblur="if(this.value==''){this.value='What movies do you like?'}">
			<input type="text" name="favtv" class="WIDEup_tb" value="What TV shows do you like?" onclick="if(this.value=='What TV shows do you like?'){this.value=''}" onblur="if(this.value==''){this.value='What TV shows do you like?'}">
			<input type="text" name="favgames" class="WIDEup_tb" value="What games do you like?" style="border-bottom:none;" onclick="if(this.value=='What games do you like?'){this.value=''}" onblur="if(this.value==''){this.value='What games do you like?'}">
		 </form>
	   </div>
	<!--Activities & Interests-->
	<button type="button" id="acct_ACTIVITIES" onclick="ACTIVITIES_frameV()">Activities & Interests</button>
	   <div id="ACTIVITIES_frame">
	     <form name="acct_activities">
		   <input type="text" name="favsports" class="WIDEup_tb" value="Favorite Sports" onclick="if(this.value=='Favorite Sports'){this.value=''}" onblur="if(this.value==''){this.value='Favorite Sports'}">
	       <input type="text" name="favteams" class="WIDEup_tb" value="Favorite Teams" onclick="if(this.value=='Favorite Teams'){this.value=''}" onblur="if(this.value==''){this.value='Favorite Teams'}">
		   <input type="text" name="favathletes" class="WIDEup_tb" value="Favorite Athletes" onclick="if(this.value=='Favorite Athletes'){this.value=''}" onblur="if(this.value==''){this.value='Favorite Athletes'}">
		   <input type="text" name="favactivities" class="WIDEup_tb" value="Favorite Activities" onclick="if(this.value=='Favorite Activities'){this.value=''}" onblur="if(this.value==''){this.value='Favorite Activities'}">
		   <input type="text" name="favinterests" class="WIDEup_tb" value="Interests" onclick="if(this.value=='Interests'){this.value=''}" onblur="if(this.value==''){this.value='Interests'}">
	       <input type="text" name="favplaces" class="WIDEup_tb" value="Favorite Places" style="border-bottom:none;" onclick="if(this.value=='Favorite Places'){this.value=''}" onblur="if(this.value==''){this.value='Favorite Places'}">		     
		 </form>
	   </div>
	<!--Contact Information-->
	<button type="button" id="acct_CONTACT" onclick="CONTACT_frameV()">Contact Information</button>
	   <div id="CONTACT_frame">
	     <form name="acct_contact">
		   <input type="text" name="email" class="WIDEup_tb" value="Email Address" onclick="if(this.value=='Email Address'){this.value=''}" onblur="if(this.value==''){this.value='Email Address'}">
	       <input type="text" name="phoneH" class="WIDEup_tb" value="Home Phone" onclick="if(this.value=='Home Phone'){this.value=''}" onblur="if(this.value==''){this.value='Home Phone'}">
		   <input type="text" name="phoneM" class="WIDEup_tb" value="Mobile Phone" onclick="if(this.value=='Mobile Phone'){this.value=''}" onblur="if(this.value==''){this.value='Mobile Phone'}">
		   <input type="text" name="skypeid" class="WIDEup_tb" value="Skype" onclick="if(this.value=='Skype'){this.value=''}" onblur="if(this.value==''){this.value='Skype'}">
		   <input type="text" name="IMid" class="WIDEup_tb" value="IM Screen Names" onclick="if(this.value=='IM Screen Names'){this.value=''}" onblur="if(this.value==''){this.value='IM Screen Names'}">
		   <input type="text" name="website" class="WIDEup_tb" value="Website" onclick="if(this.value=='Website'){this.value=''}" onblur="if(this.value==''){this.value='Website'}">
	       <input type="text" name="address" class="WIDEup_tb" value="Address" style="border-bottom:none;" onclick="if(this.value=='Address'){this.value=''}" onblur="if(this.value==''){this.value='Address'}">		 
		 </form>
	   </div>
	<!--Privacy-->
	<a href="privacy.php"><button type="button" id="acct_PRIVACY" onclick="alert('Setting have been saved! Moving to privacy setttings...')">Privacy</button></a>

  </div>
  <!--Vertical Frame For Dynamic Check Marks-->
  <div id="checksframe">
    <div class="checksrow"><img src="images/check.png" id="info_check" height="40" width="40" style="visibility:hidden"></div>
	<div class="checksrow"><img src="images/check.png" id="profilepic_check" height="40" width="40" style="visibility:hidden"></div>
	<div class="checksrow"><img src="images/check.png" id="connections_check" height="40" width="40" style="visibility:hidden"></div>
	<div class="checksrow"><img src="images/check.png" id="education_check" height="40" width="40" style="visibility:hidden"></div>
	<div class="checksrow"><img src="images/check.png" id="garage_check" height="40" width="40" style="visibility:hidden"></div>
    <div class="checksrow"><img src="images/check.png" id="entertainment_check" height="40" width="40" style="visibility:hidden"></div>
	<div class="checksrow"><img src="images/check.png" id="activities_check" height="40" width="40" style="visibility:hidden"></div>
	<div class="checksrow"><img src="images/check.png" id="contact_check" height="40" width="40" style="visibility:hidden"></div>
  </div>
  <!--Save Changes Button-->
    <div id="savechanges_bt">
		<a href="home.php"><button type="button" style="width:100%; height:100%; background:transparent; border:none;" onclick="alert('Settings have been saved!')"></button></a>
	</div>
</div>