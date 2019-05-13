<?php
session_start();
if(isset($_SESSION['id'])){
echo '<script>document.getElementById("li").style.display="none"</script>';
echo '<script>document.getElementById("lo").style.display="block"</script>';
}else{
    echo '<script>document.getElementById("lo").style.display="none"</script>';
    echo '<script>document.getElementById("li").style.display="block"</script>';
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Webflix|Tvseries</title>
<link rel="stylesheet"  type="text/css" href="Style/style.css">
</head>

<body>
<div id="page-wrap">
 <ul id="nav">
 		<nav class="navbar-default">
				<div class="nav-brand">
			<a class="logo" href="#"><img src="image/Artboard2.jpg" alt="sitelogo"></a>
	  </div>
			
	  	<li><a href="index.php">	
		  Home</a></li>
		<li><a href="movies.html">Movies</a></li>
		<li><a href="tvseries.html"><span>Tvseries</span></a></li>
		<li><a href="latest.html">Latest</a></li>
		<li><a href="about.html">About</a></li>
		<li id="li"><a href="log.php">Log in</a></li>
		<li id="lo"><a href="logout.php">Log out</a></li>
			</nav>
	</ul>
		
    </div>