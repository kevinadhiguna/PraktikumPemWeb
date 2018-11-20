<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/home.css">
	<link href="https://fonts.googleapis.com/css?family=Mali" rel="stylesheet">
</head>
<body>
	<div class="destination">
	
	<div class="nav">

	<ul>
		<li><a href="./home">Home</a></li>
		<li><a href="./destination">Destination</a></li>
		<li><a href="./gallery">Gallery</a></li>
		<li><a href="./request">Request</a></li>
		<li><a href="./aboutus">About Us</a></li>
	</ul>
	<br><br><br><br><br>
	</div>


<div class="loginbox">
	<img src="avaatar.jpg" class="avatar">
	<h1>Login Here</h1>
	<form id="loginform">
		<p>Username</p>
		<input type="text" id="user" name="user" placeholder="Enter Username">
		<p>Password</p>
		<input type="Password" id="pass" name="pass" placeholder="Enter Password">
		<input type="submit" name="submit" value="Login" onclick="Warn();"/>
		<a href="#">Forgot password</a>
		<a href="#">Create account</a>
	</form>
</div>

</div>

</body>

<script>
         <!--
            function Warn() {
               var a = document.getElementById('user').value;
               var b = document.getElementById('pass').value;

                if(a ==="" || b === "")
               alert ("Password or username hasn't been entered");
           		
               else{
               	document.getElementById('loginform').method = "POST";
               	document.getElementById('loginform').action = "redirect";
               }

            }
         //-->
      </script>

</html>