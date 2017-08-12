<html>
<head>
<title>REGISTRATION FORM</title>

<style type="text/css">
 
body {font-family:Arial, Sans-Serif;}
 
#container {width:300px; margin:0 auto;}
 
          
 
</style>

<body>
<a align='left' href="index.php"> HOME </a>

<h2 align="center">
<div style = "background-color:#333333; color:#FFFFFF; padding:2px;">
<b>Registration Form <br></b></div>
</h2> 

<div align = "center">
<div style = "width:300px " align = "left">
<form name="registration" method="post" action="newreg.php">


USERNAME: <br> <input type="text" name="username" value=""><br><br>
PASSWORD: <br> <input type="password" name="password" value=""><br></br>
NAME:<br> <input type="text" name="pname" value=""><br></br>
EMAIL:<br> <input type="email" name="email" value=""><br></br>
MOBILE:<br> <input type="integer" name="mobile" minlength="10" maxlength="10" value=""><br></br>
POSTAL CODE:<br> <input type="integer" name="post"  minlength="6" maxlength="6" value=""><br><br></br>
<input type="submit" name="login" value="Student_submit">&nbsp;
<input type="submit" name="login1" value="Faculty_submit">
</div>
</body>
</head>
</html>