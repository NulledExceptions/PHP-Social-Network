var vis=1;
function cover() 
{  

	var cover=document.getElementById('cover');

	if(vis)
	{
		vis=0;
		cover.style.display='block';      
	} 
	else 
	{   
		vis=1;
		cover.style.display='none'; 
	}

}