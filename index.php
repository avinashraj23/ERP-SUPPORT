<!DOCTYPE html>
<html>
<head>

   
   
   
	<title> ERP </title>

	<style type="text/css">
		{ * margin: 0; padding: 0; }

		body
		{
			font-family: arial;
			background-color: #ebebeb;
		}



		#header
		{
			background-color:white;
			height: 100px;
			width: 100%;
		}
		

		
		#logoArea
		{
			height: 100px;
			width: 300px;
			float : left;
			background-image: url('images.png');
			background-size: cover;
		}

		.container
		{
			width: auto;
			height: 600px;
			margin: 0 auto;
		}

		#navArea
		{
			width: 20px;
			height: 30px;
			float: right;
			padding-top: 10px;
		}

		#nav
		{
			list-style: none;
			

		}

		#nav a
		{
			color: white;
			text-decoration: none;
		}

		#nav li
		{
			float: right;
			margin: 15px;
			background-color: #252525;
			padding: 25px;
			border:1px solid silver;
			border-radius: 5px;
		}

		#nav li:hover
		{
			background-color: gray;
		}

		.page
		{
			background-color: white;
			padding: 10px;

		}

		footer{
			padding:1em;
			color: white;
			background-color: black;
			clear: left;
			text-align: center;
		}
	</style>
</head>
<body>

	<div id="header">
		<div class ="container">
			<div id="logoArea"> </div>
			<div id="navArea"></div>
			<ul id="nav">

				
				<a href="facultylogin.php"> <li> FACULTY LOGIN </li> </a>
				<a href="studentlogin.php"> <li> STUDENT LOGIN </li> </a>
				<a href="paging.php"> <li> STUDENT RECORD</li> </a>
				<a href="registration.php"> <li> NEW REGISTRATION</li> </a>
			</ul>



		</div>
	</div>
 
	<div id="mainArea">


		<div class="container page">
		<br><br>
			<h3>Welcome</h3>
<p>You can Register, Login In</p>
		
<button type="button"
          onclick="document.getElementById('demo').innerHTML = Date()">
               Click me to display Date and Time.</button>
               <p id="demo"></p>




		</div>
	</div>
<footer>
	Copyright &copy; ME AND MYSELF
</footer>



</body>
</html>

