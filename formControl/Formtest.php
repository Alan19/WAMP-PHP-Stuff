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
		<form method = "post" action = "controlTest.php">
			C1<input type = "checkbox" name = "C1" />
			C2<input type = "checkbox" name = "C2" />
			C3<input type = "checkbox" name = "C3" />
			C4<input type = "checkbox" name = "C4" />
			C5<input type = "checkbox" name = "C5" />
			C6<input type = "checkbox" name = "C6" /><hr />
			<input type = "submit" />
		</form>
	</body>
</html>