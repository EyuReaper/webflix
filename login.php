<?php
include 'dbh.php';
echo '<script>alert("gdgyjc")</script>';

if(isset($_POST['login'])){
    echo '<script>alert("gdgyjc")</script>';
        $uname=$_POST['uname'];
        $password=$_POST['psw'];
        if($uname!="" && $password!=""){
            $sql="SELECT id FROM user where uname='$uname'and password='$password'";
            $result=mysqli_query($con,$sql);
            $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
             $count=mysqli_num_rows($result);
             if($count==1){
                header ('Location: index.html');
             } 

        }
    }
   

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>loginpage|webflix</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet"  type="text/css" href="Style/style.css">
    <script type="text/javascript">
<!--

</head>

<body>
	<div id="page-wrap">
	<ul id="nav">
 		<nav class="navbar-default">
				<div class="nav-brand">
			<a class="logo" href="#"><img src="image/Artboard2.jpg" alt="sitelogo"></a>
	  </div>
			
	  	<li><a href="Webflix/index.html">	
		  Home</a></li>
		<li><a href="file:///C|/Users/Eyu/Desktop/Webflix/movies.html">Movies</a></li>
		<li><a href="file:///C|/Users/Eyu/Desktop/Webflix/tvseries.html">Tvseries</a></li>
		<li><a href="file:///C|/Users/Eyu/Desktop/Webflix/latest.html">Latest</a></li>
		<li><a href="file:///C|/Users/Eyu/Desktop/Webflix/about.html">About</a></li>
			</nav>
	</ul>
		//--login button area--->
		<div id="login-area">
			<button onclick="document.getElementById('form pop').style.display='block'" style="width:auto;">Login</button>
			</div>
		
	
		<div id="form pop" class="modal">
		<form class="modal-content animate" method="POST">
    <div class="imgcontainer">
      <img src="avatar.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required><br>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required><br>
        
      <button id="submit" type="submit" name="login">Login</button>
      <label><br>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="submit" onclick="document.getElementById('form pop').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Not registered? <a href="signup.php">Signup</a></span>
    </div>
  </form>
								</div>




	</div>
</body>
</html>
