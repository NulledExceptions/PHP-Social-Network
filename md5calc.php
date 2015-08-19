<?php
//Returns md5 result
session_start();
$_SESSION['result'] = '';
if(isSet($_POST['input'])){
	$data = $_POST['input'];
	$datamd5=md5($data);
	$_SESSION['result']= $datamd5;
	$string = 'MD5 = '.$datamd5.'';
	echo $string;

}


?>

<head>
<h1>MD5 Calc</h1>
</head>
<body>

 <form method="post" action="<? echo $_SERVER['PHP_SELF']; ?>">
	      <input type="text" name="input" method = "post" id="searchinput" value="MD5 Hash Me: " onclick="if(this.value=='Search'){this.value=''}" onblur="if(this.value==''){this.value='Search'}"/></br>
	      <!--<center><input type="submit" value = "Search" name="submitSearch"></center>-->
	    </form>

</body>

