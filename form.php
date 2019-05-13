<?php

include 'dbh.php';
if(isset($_POST['create'])){
$uname=$_POST['uname'];
$email=$_POST['email'];
$password=$_POST['psw'];
    $sql="INSERT INTO user (uname,email,password) VALUES('$uname','$email','$password')";

      if($result = $con->query($sql)){
           echo '<script> alert("data inserted")</script>';
       }
       else{
           echo '<script> alert("data not inserted")</script>';
       }
	}
	
	
	
?>



<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Signup page|webflix</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet"  type="text/css" href="Style/style.css">
<script type="text/javascript">

function validate(){
var element=document.getElementById('n');
element.value=element.value.replace(/[^A-Za-z\s]+/,'')
}

function check(){
	if(document.getElementById('password').value == document.getElementById('confirm_password').value){
						document.getElementById('message').style.color='green';

					}
					else{
						document.getElementById('message').style.color='red';
						document.getElementById('message').innerHTML='not matching';
						

}
</script>
</head>

<body>
	<div id="page-wrap">
	<ul id="nav">
 		<nav class="navbar-default">
				<div class="nav-brand">
			<a class="logo" href="#"><img src="image/Artboard2.jpg" alt="sitelogo"></a>
	  </div>
			
	  	<li><a href="index.html">	
		  Home</a></li>
		<li><a href="movies.html">Movies</a></li>
		<li><a href="tvseries.html">Tvseries</a></li>
		<li><a href="latest.html">Latest</a></li>
		<li><a href="about.html">About</a></li>
			</nav>
	</ul>
				//---form section2 
		
 
	<form class="modal-content animate" method="POST">
		<div class="container">
			
			
			 <h1>Form</h1>
      <p>Please fill in this form to create an account.</p>
      <hr>
			
      <label for="uname"><b>Username</b></label><br>
      <input type="text" id="n" placeholder="Enter Username" name="uname" required id="name" onkeyup="validate();" required><br>
			
			<label for="email"><b>E-mail</b></label><br>
      		<input type="text" class="email" placeholder="Enter Email" name="email" required><br>

      <label for="psw"><b>Password</b></label><br>
	  <input type="password" placeholder="Enter Password" id="password" name="psw" required onkeyup='check();'><br>
	  
	  <label for="psw"><b>Repeat Password</b></label><br>
	  <input type="password" placeholder="Enter Password" id="confirm_password" name="psw-repeat" required	onkeyup='check();'><br>
	  <span id='message'></span>
			
			   <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
			
			 <div class="clearfix">
             <button type="submit" id="submit" name="create">Create</button>
        
      </div>
</div>
			</form>

<body>
</body>
</html>
