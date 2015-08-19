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
  <th>birthday</th>

  </tr>";
  while ($row = mysql_fetch_array($result)) {
  echo "<tr>";
  echo "<td>" . $row['email'] . "</td>";
  echo "<td>" . $row['birthday'] . "</td>";
 
  echo "</tr>";
  }
  echo "</table>";

 
?>

}
?>