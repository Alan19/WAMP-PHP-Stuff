<!DOCTYPE HTML>
<!-- Zhen Xiao -->
<html>
	<head>
		<title>Forms</title>
		<style>
			a{
				color:#034F84
			}
			form{
				border:thin dashed black;
			}
		</style>
		<script>
			function initialize(){
				
			}
		</script>
	</head>
	<body onload = "initialize();">
		<a href = "index.php">Go Back</a>
		<form method = "get" action = "formtest1.html">
			First Name: <input type = "text" name = "first" /><br />
			Last Name: <input type = "text" name = "last" /><br />
			<input type = "submit" />
		</form>
	</body>
</html>