// The AJAX function...

function AJAX(){
try{
xmlHttp=new XMLHttpRequest(); // Firefox, Opera 8.0+, Safari
return xmlHttp;
}
catch (e){
try{
xmlHttp=new ActiveXObject("Msxml2.XMLHTTP"); // Internet Explorer
return xmlHttp;
}
catch (e){
try{
xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
return xmlHttp;
}
catch (e){
alert("Your browser does not support AJAX.");
return false;
}
}
}
}

function switch2id()
{
     var xmlhttp_id = AJAX();

    xmlhttp_id.onreadystatechange=function(){
	if(xmlhttp_id.readyState==4){
	    document.getElementById('panel1').innerHTML=xmlhttp_id.responseText;
	}
    }
xmlhttp_id.open("GET",'regplateid.php',true);
xmlhttp_id.send();
}
function switch2insurance()
{
    var xmlhttp_insurance = AJAX();

    xmlhttp_insurance.onreadystatechange=function(){
	if(xmlhttp_insurance.readyState==4){
	    document.getElementById('panel1').innerHTML=xmlhttp_insurance.responseText;
	}
    }
xmlhttp_insurance.open("GET",'reginsurance.php',true);
    xmlhttp_insurance.send();
}

function switch2finish()
{
    var xmlhttp_finish = AJAX();

    xmlhttp_finish.onreadystatechange=function(){
	if(xmlhttp_finish.readyState==4){
	    document.getElementById('panel1').innerHTML=xmlhttp_finish.responseText;
	}
    }
xmlhttp_finish.open("GET",'regcomplete.php',true);
    xmlhttp_finish.send();
}
function switch2start()
{
    var xmlhttp_start = AJAX();

    xmlhttp_start.onreadystatechange=function(){
	if(xmlhttp_start.readyState==4){
	    document.getElementById('panel1').innerHTML=xmlhttp_start.responseText;
	}
    }
xmlhttp_start.open("GET",'reguser.php',true);
    xmlhttp_start.send();
}
function switch2idh()
{
     var xmlhttp_idh = AJAX();

    xmlhttp_idh.onreadystatechange=function(){
	if(xmlhttp_idh.readyState==4){
	    document.getElementById('panel1h').innerHTML=xmlhttp_idh.responseText;
	}
    }
xmlhttp_idh.open("GET",'regplateid.php',true);
xmlhttp_idh.send();
}
function switch2insuranceh()
{
    var xmlhttp_insuranceh = AJAX();

    xmlhttp_insuranceh.onreadystatechange=function(){
	if(xmlhttp_insuranceh.readyState==4){
	    document.getElementById('panel1h').innerHTML=xmlhttp_insuranceh.responseText;
	}
    }
xmlhttp_insuranceh.open("GET",'reginsurance.php',true);
    xmlhttp_insuranceh.send();
}

function switch2finishh()
{
    var xmlhttp_finishh = AJAX();

    xmlhttp_finishh.onreadystatechange=function(){
	if(xmlhttp_finishh.readyState==4){
	    document.getElementById('panel1h').innerHTML=xmlhttp_finishh.responseText;
	}
    }
xmlhttp_finishh.open("GET",'regcomplete.php',true);
    xmlhttp_finishh.send();
}
function switch2starth()
{
    var xmlhttp_starth = AJAX();

    xmlhttp_starth.onreadystatechange=function(){
	if(xmlhttp_starth.readyState==4){
	    document.getElementById('panel1h').innerHTML=xmlhttp_starth.responseText;
	}
    }
xmlhttp_starth.open("GET",'reguser.php',true);
    xmlhttp_starth.send();
}

function title_display()
{
    var xmlhttp_ad1 = AJAX();

    xmlhttp_ad1.onreadystatechange=function(){
	if(xmlhttp_ad1.readyState==4){
	    document.getElementById('title_frame').innerHTML=document.getElementById('ad1_tb2').value;
		document.getElementById('title_frame1').innerHTML=document.getElementById('ad1_tb2').value;
		document.getElementById('title_frame2').innerHTML=document.getElementById('ad1_tb2').value;
	}
    }
xmlhttp_ad1.open("POST",'advertising.php',true);
    xmlhttp_ad1.send();
}
function body_display()
{
    var xmlhttp_ad2 = AJAX();

    xmlhttp_ad2.onreadystatechange=function(){
	if(xmlhttp_ad2.readyState==4){
	    document.getElementById('body_frame1').innerHTML=document.getElementById('ad2_tb').value;
		document.getElementById('body_frame2').innerHTML=document.getElementById('ad2_tb').value;
	}
    }
xmlhttp_ad2.open("POST",'advertising.php',true);
    xmlhttp_ad2.send();
}
function pic_display()
{
    var xmlhttp_ad3 = AJAX();

    xmlhttp_ad3.onreadystatechange=function(){
	if(xmlhttp_ad3.readyState==4){
	    document.getElementById('pic_frameDiv').innerHTML=document.getElementById('pic_frame').target;
	}
    }
xmlhttp_ad3.open("POST",'advertising.php',true);
    xmlhttp_ad3.send();
}

function switch2profile()
{
     var xmlhttp_profile = AJAX();

    xmlhttp_profile.onreadystatechange=function(){
	if(xmlhttp_profile.readyState==4){
	    document.getElementById('homeContent').innerHTML=xmlhttp_profile.responseText;
	}
    }
xmlhttp_profile.open("GET",'profile_body.php',true);
xmlhttp_profile.send();
}

function switch2home()
{
     var xmlhttp_home = AJAX();

    xmlhttp_home.onreadystatechange=function(){
	if(xmlhttp_home.readyState==4){
	    document.getElementById('homeContent').innerHTML=xmlhttp_home.responseText;
	}
    }
xmlhttp_home.open("GET",'home_body.php',true);
xmlhttp_home.send();
}

function switch2settings()
{
     var xmlhttp_settings = AJAX();

    xmlhttp_settings.onreadystatechange=function(){
	if(xmlhttp_settings.readyState==4){
	    document.getElementById('homeContent').innerHTML=xmlhttp_settings.responseText;
	}
    }
xmlhttp_settings.open("GET",'acctsettings.php',true);
xmlhttp_settings.send();
}

function switch2wall()
{
	 var xmlhttp_homeWall = AJAX();
	 
	xmlhttp_homeWall.onreadystatechange=function(){
	if(xmlhttp_homeWall.readyState==4){
	    document.getElementById('homeContent').innerHTML=xmlhttp_homeWall.responseText;
	}
	}
xmlhttp_homeWall.open("GET",'homewall.php',true);
xmlhttp_homeWall.send();
}

/* Functions for switching wall update methods E.G. general update or image */

function whatsup()
{
	 var xmlhttp_whatsup = AJAX();
	 
	xmlhttp_whatsup.onreadystatechange=function(){
	if(xmlhttp_whatsup.readyState==4){
		document.getElementById('input_tb').innerHTML=xmlhttp_whatsup.responseText;
	}
	}
xmlhttp_whatsup.open("GET",'wallWhatsUp.php',true);
xmlhttp_whatsup.send();
}	

function uploadImage()
{
	 var xmlhttp_uploadImage = AJAX();
	 
	xmlhttp_uploadImage.onreadystatechange=function(){
	if(xmlhttp_uploadImage.readyState==4){
		document.getElementById('input_tb').innerHTML=xmlhttp_uploadImage.responseText;
	}
	}
xmlhttp_uploadImage.open("GET",'wallImageUp.php',true);
xmlhttp_uploadImage.send();
}	


