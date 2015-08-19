//only assign a new timestamp if the session variable is empty
if (strlen($_SESSION['random_key'])==0){
	    $_SESSION['random_key'] = strtotime(date('Y-m-d H:i:s')); 

//assign the timestamp to the session variable
		$_SESSION['user_file_ext']= "";
}
		foreach ($allowed_image_types as $mime_type => $ext) {
			//loop through the specified image types and if they match the extension then break out
			//everything is ok so go and check file size
			if($file_ext==$ext && $userfile_type==$mime_type){
				$error = "";
				break;
			}else{
				$error = "Only <strong>".$image_ext."</strong> images accepted for upload";
			}
		}
		//check if the file size is above the allowed limit
		if ($userfile_size > ($max_file*1048576)) {
			$error.= "Images must be under ".$max_file."MB in size";
		}
		$(window).load(function () {  
          $("#thumbnail").imgAreaSelect({ aspectRatio: "1:thumb_height/thumb_width", onSelectChange: preview });  
        });  
		    function preview(img, selection) {  
        var scaleX =  / selection.width;  
        var scaleY =  / selection.height;   
      
        $('#thumbnail + div > img').css({  
            width: Math.round(scaleX * ) + '100px',  
            height: Math.round(scaleY * ) + '100px',  
            marginLeft: '-' + Math.round(scaleX * selection.x1) + '0px',  
            marginTop: '-' + Math.round(scaleY * selection.y1) + '0px'  
        });  
        $('#x1').val(selection.x1);  
        $('#y1').val(selection.y1);  
        $('#x2').val(selection.x2);  
        $('#y2').val(selection.y2);  
        $('#w').val(selection.width);  
        $('#h').val(selection.height);  
    } 
	    if (isset($_POST["pic_thumb"])) {  
        //Get the new coordinates to crop the image.  
        $x1 = $_POST["x1"];  
        $y1 = $_POST["y1"];  
        $x2 = $_POST["x2"]; // not really required  
        $y2 = $_POST["y2"]; // not really required  
        $w = $_POST["w"];  
        $h = $_POST["h"];  
        //Scale the image to the 100px by 100px  
        $scale = $thumb_width/$w;  
        $cropped = resizeThumbnailImage($thumb_image_location, $large_image_location,$w,$h,$x1,$y1,$scale);  
        //Reload the page again to view the thumbnail  
        header("location:".$_SERVER["PHP_SELF"]);  
        exit();  
    }  