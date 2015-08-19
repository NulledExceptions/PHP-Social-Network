      <form name="pictureform2" id="pictureform" target="iframe2" action="uploadphotoregistration.php" method="post" enctype="multipart/form-data">
        <input type="file" name="photoinsurance" id="upinsurance" style="visibility:hidden" />
	    <input type="file" name="photoregistration" id="upregistration" style="visibility:hidden" />
	    <button type="button" name="insurancebutton" id="browser_insurance" onclick="changeinsurance(); this.form.upinsurance.click()"></button>
	    <button type="button" name="registrationbutton" id="browser_registration" onclick="changeregistration(); this.form.upregistration.click()"></button>
        <input type="submit" class="roundbt" id="submitpics1" value="" onclick="switch2finishh();" /></button>
		 <iframe name="iframe2" id="iframe" style="visiblity:hidden"></iframe>
      </form>

   
   