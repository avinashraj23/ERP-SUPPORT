<?php

include "dbconnect.php";
if(isset($_POST['submit'])) 
{
    
print_r($_POST);
 
//$ch[]=$_POST['checkbox[]'];  


 //$strsql="insert into attendance(atd1) values ('$ch[]')"; 


$strsql="INSERT INTO attendence(avinash,venkatesh) VALUES('".$_POST['checkbox']."','".$_POST['checkbox']."')";


mysqli_query($con,$strsql) or die(mysqli_error($con));

if($strsql==1)  
   {  
      echo'<script>alert("Inserted Successfully")</script>';  
   }  
else  
   {  
      echo'<script>alert("Failed To Insert")</script>';  
   }  
}   
?>
