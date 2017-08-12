<!DOCTYPE html>
<html>
<head>
<?php
  session_start();

  $link = mysqli_connect('localhost','root','root');
  $database = mysqli_select_db($link,'erp');

  if (!$link) {
    die("Connection failed: " . $link);
}






//for student
$result = mysqli_query($link,"SELECT name, email, mobile FROM slogin");

echo "<h2>For student information</h2>";
echo "<table border='4'>
<tr>
<th>NAME</th>
<th>EMAIL</th>
<th>MOBILE</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['name'] . "</td>";
echo "<td>" . $row['email'] . "</td>";
echo "<td>" . $row['mobile'] . "</td>";
echo "</tr>";
}
echo"</table>";

<link type="text/css" rel="stylesheet" href="path_to/simplePagination.css"/>;





/*for faculty
$result = mysqli_query($link,"SELECT pname, email, mobile FROM flogin");

echo "<h2>For faculty information</h2>";
echo "<table border='4'>
<tr>
<th>NAME</th>
<th>EMAIL</th>
<th>MOBILE</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['pname'] . "</td>";
echo "<td>" . $row['email'] . "</td>";
echo "<td>" . $row['mobile'] . "</td>";
echo "</tr>";
}
echo "</table>";   */

mysqli_close($link);
?>
</head>
</html>