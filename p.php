<html>
<head>
<body>

<?php
include "dbcon.php";
$result = mysql_query("select pname,email from login where post=877676 ");
if (!$result) {
    echo 'Could not run query: ' . mysql_error();
    exit;
}
$row = mysql_fetch_row($result);

echo $row[0];

echo $row[1];
?>
</body>
</head>
</html>