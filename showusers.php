<?php
include "db.php"; 
//select the database
mysql_select_db($mysql_database, $dbuser)  or exit('Error Selecting database: '.mysql_error()); ;

//loop to show all the tables and fields
$sql="SELECT * FROM users";
$i = 0;

  $result = mysql_query("SELECT * FROM users");
  echo "<table border='1'>
  <tr>
  <th>email</th>
  <th>password</th>
  <th>sex</th>  
  <th>birthday</th>
  <th>profile_pic</th>


  </tr>";
  while ($row = mysql_fetch_array($result)) {
  echo "<tr>";
  echo "<td>" . $row['email'] . "</td>";
  echo "<td>" . $row['password'] . "</td>";
   echo "<td>" . $row['uid'] . "</td>";
  echo "<td>" . $row['birthday'] . "</td>";
 echo "<td>" . $row['profile_pic'] . "</td>";
  echo "</tr>";
  }
  echo "</table>";

 
?>

}
?>