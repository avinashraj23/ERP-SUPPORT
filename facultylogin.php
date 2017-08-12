<html>
<head>
<title>Faculty login</title>
</head>
<body>
<a align='left' href="index.php"> HOME </a>

<h2 align="center">FACULTY lOGIN </h2> 
 
<html>

<head>
<title>Login Page</title>
      
<style type = "text/css">
body {
font-family:Arial, sans-serif;
 font-size:14px;
}
         
label {
font-weight:bold;
width:100px;
font-size:14px;
}
         
</style>
      
</head>

<body bgcolor = "#FFFFFF">
	
<div align = "center">
<div style = "width:300px; " align = "left">
<div style = "background-color:#333333; color:#FFFFFF; padding:5px;">
<b>Login</b></div>
				
<div style = "margin:30px">
               
<form name="form" action = "connect2.php" method ="post" onsubmit="return validateForm()" >
   Username: <input type ="text" name="user" > <br><br>
   Password: <input type = "password" name="pass" ><br> <br>
   Enter Captcha <br>
   <img src="captcha.php" ><br>
   <input name="captcha" type="text"/>
   <br><br>
   <input type ="submit" name ="flogin" value="Log In"> <br><br>

   <a href="registration2.php"> New Faculty,Register Now </a>
    

   </form>


<div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>
			

</div>
				
</div>
			
</div>

</body>

<script src="validateForm.js"></script>

</html>

