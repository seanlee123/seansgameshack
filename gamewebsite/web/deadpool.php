<!Doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Deadpool</title>
<link href="stylesheetgames.css" rel="stylesheet" type="text/css" />
<link href="../../project/web/reset.css" rel="stylesheet" type="text/css" />
<link href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" rel="stylesheet" type="text/css" />
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<style>
	#deadpoolavatar img{
	}
	#deadpoolavatar{
		position: fixed;
		bottom: -500px;
		left: 1200px;
	}
	body{
		background: url("images/background4.jpg")
	}
</style>
<script>
	$(document).ready(function(){
		 $(function() {
			$( "#deadpoolavatar" ).draggable();
		  });
		$("#deadpoolavatar").animate({ bottom: "-50px"},"slow");
	});
</script>
</head>
<body>
	<div class="container">
		<a href="games.html">Go Back</a>
		<h1 id="titleheader"><strong>What's up with Deadpool</strong></h1>
		<p>So I have played quite a bit of this game and I just decided to make a blog about it.</p>
		<h3>You can watch the playthrough in the Deadpool Videos section. I will try to get an entry once to twice a week.</h3>
	</div>
<div id="deadpoolavatar">
	<img src="images/deadpool.png" />
</div>
</body>
</html>