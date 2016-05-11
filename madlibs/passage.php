<!DOCTYPE HTML>
<!-- Zhen Xiao -->
<html>
	<head>
		<title></title>
		<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
		<style>
			body{
				font:14pt comic sans ms;
			}
			h1{
				text-align:center;
				font-family:Open Sans;
				background:linear-gradient(-45deg, #0080ff, #66ccff,#66b3ff);
				-webkit-background-clip:text;
  				-webkit-text-fill-color:transparent;
			}
		</style>
		<script></script>
	</head>
	<body>
		<h1>The Facinating Object</h1>
		<?php
			$N1 = $_POST['N1'];
			$G1 = $_POST['G1']; 
			$N2 = $_POST['N2']; 
			$A1 = $_POST['A1']; 
			$N3 = $_POST['N3'];
			echo "When $N1 was running to $N2, $N1 saw a $A1 $G1 $N3. Since $N1 was so fascinated by the $A1 $N3, $N1 was unable to get to the destination on time.";
		?>
	</body>
</html>