<?php
       $ip= $_SERVER['REMOTE_ADDR'];
       print_r(geoCheckIP($ip));
       //Array ( [domain] => dslb-094-219-040-096.pools.arcor-ip.net [country] => DE - Germany [state] => Hessen [town] => Erzhausen )

       //Get an array with geoip-infodata
       function geoCheckIP($ip)
       {
               //check, if the provided ip is valid
               // if(!filter_var($ip, FILTER_VALIDATE_IP))
               // {
                       // throw new InvalidArgumentException("IP is not valid");
               // }

               //contact ip-server
               $response=@file_get_contents('http://www.netip.de/search?query='.$ip);
               // if (empty($response))
               // {
                       // throw new InvalidArgumentException("Error contacting Geo-IP-Server");
               // }

               //Array containing all regex-patterns necessary to extract ip-geoinfo from page
               $patterns=array();
               $patterns["domain"] = '#Domain: (.*?)&nbsp;#i';
               $patterns["country"] = '#Country: (.*?)&nbsp;#i';
               $patterns["state"] = '#State/Region: (.*?)<br#i';
               $patterns["town"] = '#City: (.*?)<br#i';

               //Array where results will be stored
               $ipInfo=array();

               //check response from ipserver for above patterns
               foreach ($patterns as $key => $pattern)
               {
                       //store the result in array
                       $ipInfo[$key] = preg_match($pattern,$response,$value) && !empty($value[1]) ? $value[1] : 'not found';
               }
		//echo $ipInfo[state];
		$mystate = $ipInfo[state];
		$myPlateState ='';

		if($mystate =="Alabama"){$myPlateState='Alabama.jpg';
}  else if($mystate ==	"Alaska"){$myPlateState='Alaska.jpeg';}
		else	if($mystate ==	"Arkansas"){$myPlateState='Arkansas.jpg';}
else		if($mystate == "California"){$myPlateState='California.jpg';}
else	if($mystate ==	"Colorado"){$myPlateState='Colorado.jpg';}
else	if($mystate ==	"Connecticut"){$myPlateState='Connecticut.jpg';}
else	if($mystate ==	 "Delaware"){$myPlateState='Delaware.jpg';}
else	if($mystate ==		"Florida"){$myPlateState='Florida.jpg';}
else	if($mystate ==		  "Georgia"){$myPlateState='Gerogia.jpg';}
else	if($mystate ==		  "Hawii"){$myPlateState='Hawii.jpg';}
else	if($mystate ==		  "Idaho"){$myPlateState='Idaho.jpg';}
else	if($mystate ==		  "Illinois"){$myPlateState='Illinois.jpg';}
else	if($mystate ==		  "Indiana"){$myPlateState='Indiana.jpg';}
else	if($mystate ==		  "Iowa"){$myPlateState='Iowa.jpg';}
else	if($mystate ==		  "Kansas"){$myPlateState='Kansas.jpg';}
else	if($mystate ==		  "Kentucky"){$myPlateState='Kentucky.jpg';}
else	if($mystate ==		  "Lousiana"){$myPlateState='Lousiana.jpg';}
else	if($mystate ==		  "Maine"){$myPlateState='Maine.jpg';}
else	if($mystate ==		  "Maryland"){$myPlateState='Maryland.jpg';}
    else   	if($mystate ==	  "Massachusetts"){$myPlateState='Massachusetts.jpg';}
else	if($mystate ==	  "Michigan"){$myPlateState='Michigan.jpg';}
else	if($mystate ==		  "Minnesota"){$myPlateState='Minnesota.jpg';}
else	if($mystate ==		  "Missouri"){$myPlateState='Missouri.jpg';}
else	if($mystate =="Montana"){$myPlateState='Montana.jpg';}
else	if($mystate =="Nebraska"){$myPlateState='Nebraska.jpg';}
else	if($mystate =="Nevada" ){$myPlateState='Nevada.jpg';}
else	if($mystate =="New Hampshire"){$myPlateState='NewHampshire.jpg';}
else	if($mystate =="New Jersey"){$myPlateState='NewJersey.jpg';}
else	if($mystate =="New Mexico"){$myPlateState='NexMexico.jpg';}
else	if($mystate =="New York"){$myPlateState='NewYork.jpg';}
else	if($mystate =="North Carolina"){$myPlateState='NorthCarolina.jpg';}
else	if($mystate =="North Dakota"){$myPlateState='NorthDakota.jpg';}
else	if($mystate =="Ohio"){$myPlateState='Ohio.jpg';}
else	if($mystate =="Oklahoma"){$myPlateState='Oklahoma.jpg';}
else	if($mystate =="Oregon"){$myPlateState='Oregon.jpg';}
else	if($mystate =="Pennsylvania"){$myPlateState='Pennsylvania.jpg';}
else	if($mystate =="Rhode Island"){$myPlateState='RhodeIsland.jpg';}
else	if($mystate =="South Carolina"){$myPlateState='SouthCarolina.jpg';}
else	if($mystate =="Tennessee"){$myPlateState='Tennessee.jpg';}
else	if($mystate =="Texas"){$myPlateState='Texas.jpg';}
else	if($mystate =="Utah"){$myPlateState='Utah.jpg';}
else	if($mystate =="Vermont"){$myPlateState='Vermont.jpg';}
else	if($mystate =="Virginia"){$myPlateState='Virginia.jpg';}
else	if($mystate =="Washington"){$myPlateState='Washington.jpg';}
else	if($mystate =="Washington DC"){$myPlateState='WashintonDC.jpg';}
else	if($mystate =="Wisconsoin" ){$myPlateState='Wisconsin.jpg';}
else	if($mystate =="Wyoming"){$myPlateState='Wyoming.jpg';}



	   else{$myPlateState =  "DefaultState.jpg";}    
         $rezultat = '<img src="StatePlates/'.$myPlateState.'" />';
	 //echo $rezultat;
 return $rezultat;
	 echo htmlentities($_SERVER['PHP_SELF']);
	
       }

?>