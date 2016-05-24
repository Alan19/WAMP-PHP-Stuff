<!DOCTYPE HTML>
<!-- Zhen Xiao -->
<html>
	<head>
		<title></title>
		<style></style>
		<script></script>
	</head>
	<body>
		<?php
			$conn = new PDO("mysql:host=localhost;dbname=shoppinglist", "root", "");
			$cmd = "SELECT * from tuesdayslist";
			$result = $conn->prepare($cmd);
			$result->execute();
			$numRows = $result->rowCount();
			//Some variations of getting data are FETCH_NUM, FETCH_ASSOC, and FETCH_BOTH
			for($i = 0; $i < $rowCount; $i++){
				$data = $result->fetch(PDO::FETCH_NUM);
				print_r ($data);
				echo "<br />";
			}
			//echo "<hr />";
		 ?>
	</body>
</html>
