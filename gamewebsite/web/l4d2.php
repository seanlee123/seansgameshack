<!Doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Left 4 Dead 2</title>
<link href="stylesheetgames.css" rel="stylesheet" type="text/css" />
<link href="../../project/web/reset.css" rel="stylesheet" type="text/css" />
<link href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" rel="stylesheet" type="text/css" />
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<style>
	#l4d2avatar img{
	}
	#l4d2avatar{
		position: fixed;
		bottom: -500px;
		left: 1200px;
	}
	body{
		background: url("images/background3.jpg")
	}
</style>
<script>
	$(document).ready(function(){
		 $(function() {
			$( "#l4d2avatar" ).draggable();
		  });
		$("#l4d2avatar").animate({ bottom: "-50px"},"slow");
	});
</script>
</head>
<body>
	<div class="container">
		<a href="games.html">Go Back</a>
		<h1 id="titleheader"><strong>What's up with Left 4 Dead 2</strong></h1>
		<p>So I have played quite a bit of this game and I just decided to make a blog about it.</p>
		<h3>You can watch the playthrough in the Left 4 Dead 2 Videos section. I will try to get an entry once to twice a week.</h3>
	</div>
<div id="l4d2avatar">
	<img src="images/left4dead2.png" />
</div>
</body>
</html>