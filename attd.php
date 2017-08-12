<?php
  session_start();
 
  $link = mysqli_connect('localhost','root','root');
  $database = mysqli_select_db($link,'login_form');

  if (!$link) {
    die("Connection failed: " . $link);
}
//for student
$result = mysqli_query($link,"Select pname from login");

echo "<h2> Name </h2>";
echo "<table border='1'>
<tr>
<th>Name</th>
<th>28may</th>
</tr>";
echo "<form method='post' action='check.php'>"; 
while($row = mysqli_fetch_array($result))
{

echo "<tr>";

echo "<td>" . $row['pname'] . "</td>";
echo "<td> <input type ='checkbox' name ='checkbox' value='1' }'> </td>";
echo "</tr>";
}
echo"</table>"; 


echo "<input type='submit' name='submit' value='SAVE'>";  
echo "</form>";
?>
