<label for="blogpic">Blog Thumbnail Picture:</label>
<input type="file" size="23" id="blogpic" name="blogpic" onChange="javascript:previewImage(this.value)"/>
<div id="preview-image">
    <div id="imagethumb"></div>
    <input type="text" id="allocatedimagename" name="allocatedimagename" />
    <div id="loading" style="visibility:hidden"><img src="/images/loading.gif" alt="loading" title="loading" /></div>
    <div id="supportedfiles"><p class="nomargin">Supported file types: jpg, jpeg, png (max 1mb) <br/>Your image will be resized to 110 by 110 px (40 by 40 for blog thumbs)</p></div>
 
    <div id="removebutton"><button id="buttonremove" onclick="javascript:removeImage()">Remove</button></div>
</div>