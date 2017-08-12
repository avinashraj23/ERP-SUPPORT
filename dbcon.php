<?php
$conn = mysql_connect('localhost','root','root');
$database =mysql_select_db('erp',$conn);
   
   if(! $conn) {
      die('Could not connect: ' . mysql_error());
   }
?>
