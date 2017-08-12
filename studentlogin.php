<html>
<head>
<title>Student login</title>
</head>
<body>

 
<html>

<head>
<title>Login Page</title>
<a align='left' href="index.php"> HOME </a>
   
<div align="center">

<h1>Student Login</h1>
</div>
      
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
<div style = "width:200px; " align = "left">
<div style = "background-color:white; color:black; padding:3px;">
				
<div style = "margin:30px">
               
<form action = "connect2.php" method ="post">
   Username: <br><br><input type = "text" name="user" placeholder="username" > <br><br>
   Password: <br><br><input type = "password" name="pass" placeholder="password" > <br><br>
   Enter Captcha 
   <img src="captcha.php" ><br><br>
   <input name="captcha" type="text"/>
   <br><br>
   <input type ="submit" name ="login" value="Log In"> <br><br>
   



</form>

<div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>
</div>
</div>
 
 <a href="registration1.php"> Not Yet Registered,Register Now </a>
			
</div>

</body>
</html>
