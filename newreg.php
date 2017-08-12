<?php



session_start();

include "dbconnect.php";
$name= $_POST['pname'];



if (isset($_POST["login"]))

{

If($_REQUEST['username']=='' || $_REQUEST['password']=='' || $_REQUEST['pname']==''|| $_REQUEST['email']=='' || $_REQUEST['mobile']=='' || $_REQUEST['post']=='')
{
Echo "please fill the empty field.";
}
Else
{
$strsql="INSERT INTO slogin(username, password, name, email, mobile,post) VALUES('".$_POST['username']."', '".$_POST['password']."', '".$_POST['pname']."', '".$_POST['email']."' ,'".$_POST['mobile']."' ,'".$_POST['post']."')";

//$strsql="INSERT INTO student (username,password,pname,email,mobile,post) VALUES ('avinash', 'avinash', 'avinash', 'avinash', '96','12')";
mysqli_query($con,$strsql) or die(mysqli_error($con));
echo "You are successfully registered $name";
}}
/*if (mysqli_query($conn, $sql)) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}*/
else
	{
		if (isset($_POST["login1"]))

If($_REQUEST['username']=='' || $_REQUEST['password']=='' || $_REQUEST['pname']==''|| $_REQUEST['email']=='' || $_REQUEST['mobile']=='' || $_REQUEST['post']=='')
{
Echo "please fill the empty field.";
}
Else
{
$strsql="INSERT INTO flogin(username, password, name, email, mobile,post) VALUES('".$_POST['username']."', '".$_POST['password']."', '".$_POST['pname']."', '".$_POST['email']."' ,'".$_POST['mobile']."' ,'".$_POST['post']."')";

//$strsql="INSERT INTO student (username,password,pname,email,mobile,post) VALUES ('avinash', 'avinash', 'avinash', 'avinash', '96','12')";
mysqli_query($con,$strsql) or die(mysqli_error($con));
echo "You are successfully registered $name";
}}