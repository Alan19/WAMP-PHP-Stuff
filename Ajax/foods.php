<?php
	$conn = new PDO("mysql:host=localhost;dbname=foodgrouplist", "root", "");
	$cmd = "SELECT * from foods";
	$result = $conn->prepare($cmd);
	$result->execute();

	$data = $result->fetchAll(PDO::FETCH_ASSOC);
	$food = $_GET["food"];
	$length = count($data);
	$groups = "";
	for($i = 0; $i > $length; $i++){
		if($data[i] == $food){
			$groups += data[i][2];
		}
	}
	print_r($data);
	echo $groups;
?>