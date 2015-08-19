

<?php
include "db.php";
  
 //if( !isset($_SESSION) ) { session_start(); }
 if(isset($_POST['plate'])) {
  
  $mysql_hostname = "reconuserbase.db.7884262.hostedresource.com";
  $mysql_user = "reconuserbase";
  $mysql_password = "Chicken12!";
  $mysql_database = "reconuserbase";


  $link=mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die ("couldnot connect: ".mysql_error());
  mysql_select_db($mysql_database, $link)  or exit('Error Selecting database: '.mysql_error()); ;
  
   $myplate = $_POST['plate'];
 

  $errormessage = "";

  $sql="SELECT * FROM cars where plate ='$myplate'";

 //$carsql="SELECT * FROM cars where owner ='$myemail'";


  $myresult = mysql_query($sql, $link)  or exit('$sql failed: '.mysql_error()); 
 // $mycarresult = mysql_query($carsql, $link)    or exit('$sql failed: '.mysql_error()); 

  $num_rows = mysql_num_rows($myresult);


 if(mysql_num_rows($myresult) == 1){
	echo "Plate found.";
	}else{
	echo "Plate not found.  Click here to post on this plate.";
	}

}
else { echo "";
}














	
	?>
	
	      <form method="post" action="platesearch.php" name="plate">
					<label class="grey" for="platesearch">platesearch:</label>
					<input class="field" type="text" for="plate" name="plate" id="plate" size="23" />
					
				</form>
	
 
