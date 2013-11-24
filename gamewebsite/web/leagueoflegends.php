<!Doctype html>
<html>
<head>
<meta charset="utf-8">
<title>League of Legends</title>
<link href="stylesheetgames.css" rel="stylesheet" type="text/css" />
<link href="../../project/web/reset.css" rel="stylesheet" type="text/css" />
<link href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" rel="stylesheet" type="text/css" />
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<style>
	#lolavatar img{
	}
	#lolavatar{
		position: fixed;
		bottom: -2000px;
		left: 1200px;
	}
	body{
		background: url("images/background5.jpg")
	}
</style>
<script>
	$(document).ready(function(){
		 $(function() {
			$( "#lolavatar" ).draggable();
		  });
		$("#lolavatar").animate({ bottom: "20px"},"slow");
	});
</script>
</head>
<body>
	<div class="container">
		<a href="games.html">Go Back</a>
		<h1 id="titleheader"><strong>Whats up with League of Legends</strong></h1>
		<p>I just started playing this game and decided to make a blog about it.</p>
		<h3>You can watch the playthrough in the Skyrim Videos section. I will try to get an entry once to twice a week.</h3>
	</div>
<div id="lolavatar">
	<img src="images/leagueoflegends.png" />
</div>
</body>
</html>