

<?php
include('dbcon.php');
 
if (isset($_POST['login'])){
 
$school_number=$_POST['school_number'];
 
$login_query=mysql_query("select * from member where school_number='$school_number' and status = 'InActive' ");
$count=mysql_num_rows($login_query);
$row=mysql_fetch_array($login_query);
$firstname=$row['lastname'];
$middlename=$row['middlename'];
$middlename=$row['lastname'];
$user_id=$row['user_id'];
 
if ($count > 0){
session_start();
$_SESSION['id']=$row['user_id'];
 
$user_id_query=$row['user_id'];
$user=$row['firstname']." ".$row['middlename']." ".$row['lastname'];
 
mysql_query("INSERT INTO userlog (username,id,date_log)VALUES('$user','$user_id_query',NOW())")or die(mysql_error());
 
echo "<script>window.location='log.php'</script>";
}else{
	echo "<div class='alert alert-error'>".'No match found for the School ID Number or Your Not Active Member Yet'."</div>";
?>
<?php } 
}
?>
