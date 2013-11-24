<!Doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Skyrim</title>
<link href="stylesheetgames.css" rel="stylesheet" type="text/css" />
<link href="../../project/web/reset.css" rel="stylesheet" type="text/css" />
<link href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" rel="stylesheet" type="text/css" />
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<style>
	#skyrimavatar img{
	}
	#skyrimavatar{
		position: fixed;
		bottom: -500px;
		left: 1200px;
	}
	body{
		background: url("images/background2.jpg")
	}
</style>
<script>
	$(document).ready(function(){
				$(function() {
			$( "#skyrimavatar" ).draggable();
		  });
		  
		$("#skyrimavatar").animate({ bottom: "-35px"},"slow");
	});
</script>
</head>
<body>
	<div class="container">
		<a href="games.html">Go Back</a>
		<h1 id="titleheader"><strong>What's up with Skyrim</strong></h1>
		<p>So I have beaten this game before, but this being the first of my Skyrim blog I thought that I should start from scratch so I started a new game.</p>
		<h3>You can watch the playthrough in the Skyrim Videos section. I will try to get an entry once to twice a week.</h3>
		<p>Skip the beginning and go to Whiterun. </p>
	</div>
<div id="skyrimavatar">
	<img src="images/skyrimguard.png" />
</div>
</body>
</html>