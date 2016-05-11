<!DOCTYPE HTML>
<!-- Zhen Xiao -->
<html>
	<head>
		<title>Madlibs</title>
		<link href='https://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
		<style>
			h1{
				text-align:center;
				font-family:Berlin Sans FB;
				background:linear-gradient(-45deg, #0080ff, #66ccff,#66b3ff);
				-webkit-background-clip:text;
  				-webkit-text-fill-color:transparent;
			}
			input{
				font:16pt consolas;
				margin-top:7.5%;
			}
			.submit-button{
				margin-top:5px;
				border-style:hidden;
				border-radius:3px;
				background:linear-gradient(-90deg, deepSkyBlue, dodgerBlue);
				font:18pt Ubuntu;
				color:white;
				margin-top:5%;
			}
			form{
				text-align:center;
			}
		</style>
		<script></script>
	</head>
	<body>
		<h1>Madlibs</h1>
		<form method = "post" action = "passage.php">
			<input type = "text" name = "N1" placeholder = "Input a noun" /><br />
			<input type = "text" name = "G1" placeholder = "Input a gerand" /><br />
			<input type = "text" name = "N2" placeholder = "Input a place" /><br />
			<input type = "text" name = "A1" placeholder = "Input an adjective"><br />
			<input type = "text" name = "N3" placeholder = "Input a noun" /><br />
			<input class = "submit-button" type = "submit" />
		</form>
	</body>
</html>