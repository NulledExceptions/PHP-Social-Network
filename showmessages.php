<?php
include "db.php"; 
//select the database
mysql_select_db($mysql_database, $dbuser)  or exit('Error Selecting database: '.mysql_error()); ;

//loop to show all the tables and fields
$sql="SELECT * FROM users";
$i = 0;

  $result = mysql_query("SELECT * FROM messages");
  echo "<table border='1'>
  <tr>
  <th>owner</th>
  <th>message</th>
  <th>uid_fk</th>
  </tr>";
  while ($row = mysql_fetch_array($result)) {
  echo "<tr>";
  echo "<td>" . $row['owner_fk'] . "</td>";
  echo "<td>" . $row['message'] . "</td>";
 echo "<td>" . $row['uid_fk'] . "</td>";
  echo "</tr>";
  }
  echo "</table>";

 
?>

}
?>