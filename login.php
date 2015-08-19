<?php
include "db.php";
  
 if( !isset($_SESSION) ) { session_start(); }
 if(isset($_POST['loginemail']) AND $_POST['loginpassword']){
  
  $mysql_hostname = "reconuserbase.db.7884262.hostedresource.com";
  $mysql_user = "reconuserbase";
  $mysql_password = "Chicken12!";
  $mysql_database = "reconuserbase";


  $link=mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die ("couldnot connect: ".mysql_error());
  mysql_select_db($mysql_database, $link)  or exit('Error Selecting database: '.mysql_error()); ;
  
  $myemail = $_POST['loginemail'];
  $mypassword = $_POST['loginpassword'];

  $errormessage = "";

  $sql="SELECT * FROM users where email='$myemail' AND password='$mypassword'";

  $carsql="SELECT * FROM cars where owner ='$myemail'";


  $myresult = mysql_query($sql, $link)  or exit('$sql failed: '.mysql_error()); 
  $mycarresult = mysql_query($carsql, $link)    or exit('$sql failed: '.mysql_error()); 

  $num_rows = mysql_num_rows($myresult);

  
 if(mysql_num_rows($myresult) == 1){
	$info = mysql_fetch_assoc( $myresult );
	$carinfo = mysql_fetch_assoc( $mycarresult );
	
	$sessprofpic = $info['profile_pic'];
	$sessprofpicloc = $info['profile_pic_location'];
	$sesscarmake  = $carinfo['make'];
	$sesscarmodel = $carinfo['model'];

	$sesscaryear  =$carinfo['year'];
	$sesscarcolor =$carinfo['color'];
	$sesscarstate =$carinfo['state'];
	$sesscarplate =$carinfo['plate'];
	
    $sessemail = $myemail;	
	$sessprofpic = $info['profile_pic'];
    $sessfname = $info['fname'];	
    $sesslname = $info['lname'];
    $sessid = $info['uid'];
 

   $_SESSION['profile_pic'] = $sessprofpic;
    $_SESSION['fname'] = $sessfname;	
    $_SESSION['email'] = $sessemail;	
    $_SESSION['lname'] = $sesslname;
	$_SESSION['uid'] = $sessid;
	$_SESSION['carmake'] = $sesscarmake;	
    $_SESSION['carmodel'] = $sesscarmodel;	
    $_SESSION['carcolor'] = $sesscarcolor;
	$_SESSION['carstate'] = $sesscarstate;
	$_SESSION['carplate'] = $sesscarplate;
    $_SESSION['caryear'] = $sesscaryear;
	$_SESSION['picicon'] = $sessprofilepic;
    $_SESSION['profile_pic'] = $sessprofpic;
	$_SESSION['profile_pic_location']=$sessprofpicloc;
	$_SESSION['owner']=$sessid;
	$_SESSION['page']=0;
	

    setcookie("user", $sessemail,  time()+3600*24);
	setcookie("uid", $sessid, time()+3600*24);
	setcookie("plate", $carplate, time() + 3600 * 24 );
	
    header("Location: profile_body.php");

   } else {

   echo "Failed. Try Again";
 session_start();
$_SESSION['login'] = '';
   exit;

  }
  }
?>
