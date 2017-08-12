<?php
session_start();

include "dbconnect.php";

$user= $_POST['user'];
$pass = $_POST['pass'];
//$data=href="erp.php";

if (isset($_POST["login"]))
{

  if(isset($_POST["captcha"])&&$_POST["captcha"]!=""&&$_SESSION["code"]==$_POST["captcha"])
 {
   $query = "SELECT * FROM slogin WHERE username = '". mysqli_real_escape_string($con,$user) ."' AND password = '". mysqli_real_escape_string($con,$pass) ."'" ;

   $result = mysqli_query($con,$query);
     if (mysqli_num_rows($result) == 1)
      {
        
         $row=mysqli_fetch_row($result);
         printf ("Welcome,Logged In <br></br>Email:- %s \n",$row[4]);

      }
      else
      {
        echo " Please make sure that you enter the correct details or You are not Registered Yet";
      }
    }
 else
 {
     echo "Wrong captcha entered";
 }
}

else
{
  if (isset($_POST["flogin"]))

  if(isset($_POST["captcha"])&&$_POST["captcha"]!=""&&$_SESSION["code"]==$_POST["captcha"])
 {
  
   $query = "SELECT * FROM flogin WHERE username = '". mysqli_real_escape_string($con,$user) ."' AND password = '". mysqli_real_escape_string($con,$pass) ."'" ;

    
    $result = mysqli_query($con,$query);
     
     if (mysqli_num_rows($result) == 1)
      {
          
        header("location: paging.php");
      }
       else
      {
        echo "Please make sure that you enter the correct details or You are not Registered Yet";
      }}
      else
      {
        echo"Wrong Captcha entered";
      }
    }