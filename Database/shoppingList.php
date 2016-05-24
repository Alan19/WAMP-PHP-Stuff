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
			$data = $result->fetchAll(PDO::FETCH_NUM);
			foreach($data as $key => $value){
				print_r ($value);
				echo "<br />";
			}
			echo "<hr />";
			print_r($data);
		 ?>
	</body>
</html>
