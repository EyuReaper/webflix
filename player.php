<?php
session_start();
if(isset($_SESSION['id'])){

}else{
header('Location: log.php');
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Webflix|live player</title>
<link rel="stylesheet"  type="text/css" href="Style/style.css">

<script type="text/javascript">
	var videolist = ["Batman_-The-Killing-Joke--2016----BluRay----mycoolmoviez.org.mp4","Justice League For Free Online 123movies.com","Kill.Me.Three.Times.2014.720p.BluRay.x264.YIFY"];
	var videoindex = 0;
	var videoplayer = null;
	
	function onload(){
		console.log("body loaded");
		videoplayer= document.getElementById("video1");
		videoplayer.setAttribute("src","video/"+videolist[videoindex]+".mp4");
		videoplayer.play();
	}
	
	function onvideoended(){
		console.log("video ended");
		if(videoindex < videolist.length - 1){
			videoindex++;
		}
		else{
			videoindex= 0;
		}
		videoplayer.setAttribute("src", videolist[videoindex]);
		videoplayer.play();
	}
	</script>
</head>

<body onLoad="onload();">
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
	
	<section>
		<video  id="Video1" controls onEnded="onVideoEnded();">
		<source src="video/Batman_-The-Killing-Joke--2016----BluRay----mycoolmoviez.org.mp4">
		</video>
	</section>
		
	</div><!--end of pagewrap-->
	
	<div id="footer">
		<p>&copy;2018 Webflix.com </p>
	
	</div>
</body>
</html>
