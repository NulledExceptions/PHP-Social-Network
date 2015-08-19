
      <form name="pictureform" action="uploadphotoid.php" id="pictureform" target="iframe" method="post" enctype="multipart/form-data">
        <input type="file" name="photoid" id="upid" class="multi" style="visibility:hidden" />
	    <input type="file" name="photoplate" id="upplate" class="multi" style="visibility:hidden" />
	      <button type="button" name="idbutton" class="roundbt" id="browser_id" onclick="changeid(); this.form.upid.click()" span="info_id"></button>
		  <button type="button" name="platebutton" class="roundbt" id="browser_plate" onclick="changeplate(); this.form.upplate.click()" span="info_id"></button>
        <input type="submit" class="roundbt" id="submitpics" value="" onclick="switch2insuranceh(); change(event, 'gray')" />
		<iframe name="iframe" id="iframe" style="visibility:hidden" ></iframe>
      </form>
