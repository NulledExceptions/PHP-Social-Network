function init()
{
   fileUploadEvents();
}


function fileUploadEvents()
{
  var links = document.getElementsByTagName("a");
  if (links)
  {  
    for (var x=0; x<links.length; ++x)
    {
     if (links[x].className == "uploadfile")
	 links[x].onclick = uploadFile();
    
    }

  }
}

function uploadFile()
{
  var uploadForm = document.getElementById("#uploadphotoid");
  if (uploadForm)
  {
   uploadForm.target="fileframe";
   uploadForm.action="uploadphotoid.php";
  }
  uploadForm.submit();
}