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
    <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="js/ajax.js"></script>
	<script type="text/javascript" src="js/fileuploader.js"></script>
	<script type="text/javascript" src="js/ajaxfileupload.js"></script>
	<script type="text/javascript" src="js/frames.js"></script>
	<script type="text/javascript" src="js/form.js"></script>
	<script type="text/javascript" src="js/jquery.imgareaselect.min"></script>
	<script type="text/javascript" src="jquery-pack.js"></script>



<script type="text/javascript" >
 $(document).ready(function() { 
		
            $('#pic_thumb').live('change', function()			{ 
			           $("#pic_frame").html('');
			    $("#pic_frame").html('<img src="images/loading.gif" alt="Uploading...."/>');
			$("#file_upload").ajaxForm({
						target: '#pic_frame'
		}).submit();
		
			});
        }); 
</script>
</head>
<body>

<div class="container">
  <div class="header">
    <img src="images/header.jpg" height="100%" width="100%" />
  </div>
  
 <div id="ad_content"> 
  <div id="adheader">
	
  </div>
      
    <div id="adheader_h">

    </div>

   <div id="ad1">
  
   </div>
     
     <div id="ad1h">
	  <div id="ad1_frame">
	    <div id="title_frame"></div>
	  </div>
		<div id="ad1_panel"> 
		  <input type="text" id="ad1_tb1" value="Enter your website URL" onclick="if(this.value=='Enter your website URL'){this.value=''}" 
		                                                                 onblur="if(this.value==''){this.value='Enter your website URL'};">																		        
		  <input type="text" id="ad1_tb2" value="Enter the title of your ad" onclick="if(this.value=='Enter the title of your ad'){this.value=''}"
		                                                                     onblur="if(this.value==''){this.value='Enter the title of your ad'};
																			 title_display()">
		</div>
      </div>
     
   <div id="ad2">
  
   </div>
     
     <div id="ad2h">
		<div id="ad2_frame">
		  <div id="title_frame1"></div>
		  <div id="body_frame1"></div>
		</div>
		<input type="text" id="ad2_tb" value="Enter the body of your ad" onclick="if(this.value=='Enter the body of your ad'){this.value=''}" 
		                                                                 onblur="if(this.value==''){this.value='Enter the body of your ad'};
																		         body_display()">
     </div>
  
   <div id="ad3">
  
   </div>
  
     <div id="ad3h">
		  <div id="ad3_frame">
		    <div id="title_frame2"></div>
			<div id="body_frame2"></div>
			<div id="pic_frame">
			  
			</div>
		  </div>

		
		<form id="file_upload" method="POST" enctype="multipart/form-data" action="ajaxupload_adpage.php">
		  <input type="file" id="pic_thumb" name="ad3_fu">
		  <input type="text" id="ad3_tb" value="Upload a photo for your ad" onclick="if(this.value!='Upload a photo for your ad'){this.value='Upload a photo for your ad'};
																					 document.getElementById('pic_thumb').click();
																					 crop_frameV();">
		  <button type="submit" id="ad3_bt"></button>
		  <div id="crop_area"></div>
	    </form> 
     </div>
   
   <div id="ad4">
    <input type="button" id="createad_bt" onclick="
						   document.getElementById('ad1h').style.visibility='visible';document.getElementById('ad1').style.visibility='hidden';
						   document.getElementById('ad2h').style.visibility='visible';document.getElementById('ad2').style.visibility='hidden';
						   document.getElementById('ad3h').style.visibility='visible';document.getElementById('ad3').style.visibility='hidden';
						   document.getElementById('ad4h').style.visibility='visible';document.getElementById('ad4').style.visibility='hidden';
						   document.getElementById('adheader_h').style.visibility='visible';document.getElementById('adheader').style.visibility='hidden';
						   document.getElementById('previewad_bt').style.visibility='visible';document.getElementById('createad_bt').style.visibility='hidden'">
    <input type="button" id="previewad_bt"> 
   </div>

    <div id="ad4h">
		<div id="ad4_panel">
		<!-- Pay Per Click Button/Frame --> 
		  <button type="button" id="PPC_bt" onclick="PPC_frameV()">Pay Per Click</button>
		    <div id="PPC_frame">
			  <label id="PPC_lb1"><center>Max Bid(USD). How much are 
							         </br>you willing to pay per click?
							         </br>(min $0.01 USD)</center>
			  </label>
			  
			  </br><input type="text" id="PPC_tb" value="Suggested bid $1.77 - $3.14 USD" onclick="if(this.value=='Suggested bid $1.77 - $3.14 USD'){this.value='$'}" 
																					      onblur="if(this.value=='$'){this.value='Suggested bid $1.77 - $3.14 USD'};
																						          PPC_frameH()">
			  </br><label id="PPC_lb2"><center>Max bid/Suggested bid
									   </br>You will never pay more than
									   </br>your max bid, but you may pay
									   </br>less. The higher your bid, the
									   </br>more likely it is your advert will
									   </br>get shown.</center>
				  </label>
		    </div>
		 <!-- Pay Per View Button/Frame -->
		  <button type="button" id="PPV_bt" onclick="PPV_frameV()">Pay Per View</button>
		    <div id="PPV_frame">
			  <label id="PPV_lb1"><center>Max bid(USD). How much are
									 </br>you willing to pay per 1000
									 </br>impressions(min $0.02 USD)?</center>
			  </label>
			  </br><input type="text" id="PPV_tb" value="Suggested bid: $0.76 - $1.35 USD" onclick="if(this.value=='Suggested bid $0.76 - $1.35 USD'){this.value='$'}"
																						   onblur="if(this.value=='$'){this.value='Suggested bid $0.76 - $1.35 USD'};
																						            PPV_frameH()">
			  </br><label id="PPV_lb2"><center>You will never pay more than
			                              </br>your max bid, but you may pay
										  </br>less. The higher your bid, the
										  </br>more likely it is your advert will
										  </br>get shown</center>
				  </label>
			</div>
		 <!-- Budget Button/Frame -->
		  <button type="button" id="EB_bt" onclick="EB_frameV()">Enter Budget</button>
		    <div id="EB_frame">
			  <input type="text" id="EB_tb" value="Enter Budget (USD)" onclick="if(this.value=='Enter Budget (USD)'){this.value='$'}"
											onblur="if(this.value=='$'){this.value='Enter Budget (USD)'};
										            EB_frameH()">
			  </br><label id="EB_lb"><center>What is the most you want to
			                            </br>spend over the campaign's
										</br>scheduled time period?</center>
					</label>
			</div>
		 <!-- Per Day Button/Frame --> 
		  <button type="button" id="PD_bt" onclick="PD_frameV()">Per Day</button>
		    <div id="PD_frame">
			  <label id="PD_lb1"><center>Specify either a daily campaign budget or a
						            </br>lifetime campaign budget. If you choose a 
									</br>daily budget type, we will distribute 
									</br>your ad spend by day.</center>
			  </label>
			  <div id="PD_bts">
			    <button type="button" id="PD_bt1" onclick="PD_frameH()">Daily</button>
				<button type="button" id="PD_bt2" onclick="PD_frameH()">Lifetime</button>
			  </div>
			  <label id="PD_lb2"><center>If you choose a lifetime budget type, 
			                        </br>we will distribute your ad spend 
									</br>throughout the duration of the campaign.</center>
			  </label>
			</div>
		 
		 <!-- Schedule Button/Frame -->
		  <button type="button" id="SCHE_bt" onclick="SCHE_frameV()">Schedule</button>
		    <div id="SCHE_frame">
			  <div id="SCHE_radioFr">  
				<input type="radio" id="SCHE_rd" font size="10">Run my add continuously 
			                                                       </br><pre>       starting today</pre>
			  </div>
			  <input type="text" id="SCHE_tb1" value="Start Date & Time" onclick="if(this.value=='Start Date & Time'){this.value=''}"
			                                                             onblur="if(this.value==''){this.value='Start Date & Time'}">
			  <input type="text" id="SCHE_tb2" value="End Date & Time" onclick="if(this.value=='End Date & Time'){this.value=''}"
			                                                             onblur="if(this.value==''){this.value='End Date & Time'};
																		        SCHE_frameH()">
			</div>
		  
		 <!-- Location Button/Frame --> 
		  <button type="button" id="LOCA_bt" onclick="LOCA_frameV()">Location</button>
		    <div id="LOCA_frame">
			  <input type="text" class="LOCA_tb" value="Country/Territory" onclick="if(this.value=='Country/Territory'){this.value=''}"
			                                                               onblur="if(this.value==''){this.value='Country/Territory'}">
              <input type="text" class="LOCA_tb" value="State/Province" onclick="if(this.value=='State/Province'){this.value=''}"
			                                                            onblur="if(this.value==''){this.value='State/Province'}">
			  <input type="text" class="LOCA_tb" value="City" onclick="if(this.value=='City'){this.value=''}"
			                                                               onblur="if(this.value==''){this.value='City'};
																		           LOCA_frameH()">
			</div>
		 
		 <!-- Audience Button/Frame -->
   		  <button type="button" id="AUDI_bt" onclick="AUDI_frameV()">Audience</button>
		    <div id="AUDI_frame">
			  <div id="AUDI_panel">
			    <button type="button" id="AUDI_bt1">All</button>
				<button type="button" id="AUDI_bt2">Men</button>
				<button type="button" id="AUDI_bt3">Female</button>
				
				<input type="text" class="AUDI_tbL" value="Age 0-99" onclick="if(this.value=='Age 0-99'){this.value=''}"
																  onblur="if(this.value==''){this.value='Age 0-99'}">
			    <input type="text" class="AUDI_tbR" value="Language" onclick="if(this.value=='Language'){this.value=''}"
																  onblur="if(this.value==''){this.value='Language'}">
				<input type="text" class="AUDI_tbL" value="Relationship" onclick="if(this.value=='Relationship'){this.value=''}"
																  onblur="if(this.value==''){this.value='Relationship'}">
				<input type="text" class="AUDI_tbR" value="Garage Value" onclick="if(this.value=='Garage Value'){this.value=''}"
																  onblur="if(this.value==''){this.value='Garage Value'}">
			    <input type="text" class="AUDI_tbL2" value="Education" onclick="if(this.value=='Education'){this.value=''}"
																  onblur="if(this.value==''){this.value='Education'}">
				<input type="text" class="AUDI_tbR2" value="Workplace" onclick="if(this.value=='Workplace'){this.value=''}"
																  onblur="if(this.value==''){this.value='Workplace'};
																          AUDI_frameH()">
			  </div>
			</div>
		  
		 <!-- Voucher Button/Frame --> 
		  <button type="button" id="VOUC_bt" onclick="VOUC_frameV()">Redeem Voucher</button>
		    <div id="VOUC_frame">
			  <label class="VOUC_lb"><center>Please enter your coupon code below
			                          </br>and we will charge the coupon instead 
			  					      </br>of your credit card until the coupon
									  </br>expires or is used up</center>
			  </label>
			  <input type="text" id="VOUC_tb" value="Enter Code" onclick="if(this.value=='Enter Code'){this.value=''}"
																 onblur="if(this.value==''){this.value='Enter Code'};
																         VOUC_frameH()">
			  <label class="VOUC_lb"><center>If you let your advert run after that point,
									    </br>we will begin to charge your credit card.</center>
			  </label>
			</div>
		
		</div>
    </div>
      <a href="#"><div id="adfooter"></div> </a> 
</div>
</div>
</div>
</body>
</html>
