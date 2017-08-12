<?php
$conn = mysql_connect('localhost','root','root','erp');

   
   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
   
   $sql = 'SELECT pname, email,mobile FROM slogin';
   //$sql = 'SELECT pname, email,mobile FROM flogin';
   mysql_select_db('erp');
   
   $retval = mysql_query($sql,$conn);
   
   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   } 

   ?>

   <table border="1">
  <thead>
    <tr>
      <th>Name</th>
      <th>Email</th>
      <th>Mobile</th>
    </tr>
    <br>
  </thead>
  <tbody
   
   <?php
   while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {
      echo 
      "<tr>
      <td>{$row['name']}</td>
      <td>{$row['email']}</td>
      <td>{$row['mobile']}</td>
      </tr>\n";

   }
   
   echo 
   "Registered Student <br></br>";
   
   mysql_close($conn);

?>
<?php
$conn = mysql_connect('localhost','root','root','login_form');


    $sql = 'SELECT pname, email,mobile FROM flogin';
   mysql_select_db('login_form');
   
   $retval = mysql_query($sql,$conn);
   
   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   } 

   ?>

   <table border="1">
  <thead>
    <tr>
      <th>Name</th>
      <th>Email</th>
      <th>Mobile</th>
    </tr>
  </thead>
  <tbody> 
   

   
   <?php
   while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {
      echo 
      "<tr>
      <td>{$row['name']}</td>
      <td>{$row['email']}</td>
      <td>{$row['mobile']}</td>
      </tr>\n";
   }
   
   echo 
   "<br>Registered Faculty <br></br>";
   
   mysql_close($conn);
?>
