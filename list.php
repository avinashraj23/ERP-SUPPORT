

<?php
   $conn = mysql_connect('localhost','root','root','erp');
   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
   
   $sql = 'SELECT pname, email,mobile FROM slogin';
   mysql_select_db('erp');

  
   
   
   $retval = mysql_query($sql,$conn);
   
   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   } 
    echo 
   "<h2>Registered Student </h2>";

  echo
  "<table border='3'>
  <tr>
  <th>Name</th>
    <th>Email</th>
    <th>Mobile</th>
    </tr>";
    
   while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {
      echo 
      "<tr>
      <td>{$row['name']}</td>
      <td>{$row['email']}</td>
      <td>{$row['mobile']}</td>
      </tr>\n";

   }
   echo "</table>";

  /*$sql = 'SELECT pname, email,mobile FROM flogin';
  mysql_select_db('login_form');
   $retval = mysql_query($sql,$conn);
   
   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
    }
  
  echo "<h2>Faculty Info</h2>";
  echo" <table border='3'>
    <tr>
      <th>Name</th>
      <th>Email</th>
      <th>Mobile</th>
    </tr>" ;

   while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {
   echo 
      "<tr>
      <td>{$row['pname']}</td>
      <td>{$row['email']}</td>
      <td>{$row['mobile']}</td>
      </tr>\n";
   }
   echo "</table>";*/
   
   mysql_close($conn);
   
   ?>