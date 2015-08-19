<script type="text/javascript" src="js/ajax.js"></script>
<script type="text/javascript">
function showstuff(boxid){
   document.getElementById(boxid).style.visibility="visible";
}

function hidestuff(boxid){
   document.getElementById(boxid).style.visibility="hidden";
}

</script>
	  <div id="register">   
        <form id="registeruser" method="post" action="#">
           <div id="regframe">
		      <input type="text" name="email" class="reg_tb" value="Email" onclick="if(this.value=='Email'){this.value=''}";onblur="if(this.value==''){this.value='Email'}">
			  <input type="text" name="password" class="reg_tb" onmouseover="popup('Password')" onmouseout="kill()" onclick="if(this.value=='Password'){this.value=''}" />
			  <input type="text" name="password2" class="reg_tb" onmouseover="popup('Re-Enter Password')" onmouseout="kill()" onclick="if(this.value=='Password'){this.value=''}" />
			  
			  <button type="button" name="malebt" id="reg_male" style="border-left:none; border-right:none;" >Male</button>
			  <button type="button" name="femalebt" id="reg_female">Female</button>
			  <input type="text" name="birthday" id="reg_bday" value="Birthday" style="float:left; border-left:none; border-right:none;" onmouseover="popup('MM/DD/YYYY')" onmouseout="kill()" onclick="if(this.value=='Birthday'){this.value=''}" onblur="if(this.value==''){this.value='Birthday'}">
		   </div>
		   
		   <label id="next_label">Click here for full registration with your license plate</label>
		   <label id="register_label">Click here for quick registration (generic license plate)</label>
		   
		   <input type="submit" name="Rnext" id="reg_nextBT" value="">
		   <input type="submit" name="Rnext" id="reg_registerBT" value="">
		   <iframe name="framee" id="framee" style="visibility:hidden;"></iframe>
		</form>
		 <!--
		 <div class="frameborder"></div>
         <input type="text" name="email" class="inputr" id="Rtbh" value="Email" onclick="if(this.value=='Email'){this.value=''}";onblur="if(this.value==''){this.value='Email'}"/>
         <input type="password" name="password" class="inputr" id="Rtb1h" onmouseover="popup('Password')" onmouseout="kill()" onclick="if(this.value=='Password'){this.value=''}" />
         <input type="password" name="password2" class="inputr" id="Rtb2h" onmouseover="popup('Confirm Password')" onmouseout="kill()" onclick="if(this.value=='Confirm Password'){this.value=''}" />
         <input type="button" name="malebt" id="Rtbs1h" class="roundbt" style="background:#fff;" value="Male" onClick="change(event, 'gray', '#fff')" /></button>
	     <input type="button" name="femalebt" id="Rtbs2h" value="Female" style="background:#fff;" onClick="change(event, 'gray', '#fff')" /></button>
         <input type="text" name="birthday" class="inputr" id="Rtbs3h" value="MM/DD/YYYY" onmouseover="popup('Birthday')" onmouseout="kill()" onclick="if(this.value=='MM/DD/YYYY'){this.value=''}" onblur="if(this.value==''){this.value='MM/DD/YYYY'}"/>
         <label class="label1">Click here to register license plate</label>
	     <label class="label2">Click here to register without a license plate</label>
	     <input type="submit" name="Rnext" class="roundbt" id="Rbt1h" value="" style="border:none" onclick="#" />
         <input type="submit" name="Rsubmit" class="roundbt" id="Rbt2h" value="" style="border: none" onclick="switch2idh()">
		 <iframe name="framee" id="framee" style="visibility:hidden;"></iframe>-->

 

 </div>
  