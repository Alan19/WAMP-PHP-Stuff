<!DOCTYPE HTML>
<!-- Zhen Xiao -->
<html>
	<head>
		<title>Using JSON to enchance PHP</title>
		<style>
			#mydata{
				font:16pt times new roman;
				vertical-align:middle;
				margin:auto;
			}
			table,td{
				border-collapse:collapse;
				border-style:solid;
				vertical-align:middle;
				text-align: center;
				padding:3px;
			}
			html{
				background-size:cover;
				background-repeat: no-repeat;

			}
		</style>
		<script>
			<?php
				$conn = new PDO("mysql:host=localhost;dbname=shoppinglist", "root", "");
				$cmd = "SELECT * from tuesdayslist";
				$result = $conn->prepare($cmd);
				$result->execute();

				$data = $result->fetchAll(PDO::FETCH_NUM);
				echo "mydata = " . json_encode($data) . ";";
			 ?>
			 function initialize(){
				 outputBox = document.getElementById("mydata");
				 theOutput = "";
				 for(var r = 0; r < mydata.length; r++){
					 var row1 = outputBox.insertRow(r);
					 for(var c = 0; c < mydata[0].length; c++){
						 var cell1 = row1.insertCell(c);
						 cell1.innerHTML = mydata[r][c];
					 }
					 var quantityCell = row1.insertCell(row1.length);
					 quantityCell.innerHTML = "<input type = 'number' placeholder = 'Number of Items' name = '" + r + "' min = '0' step = '1'>";
				 }
			 }
		</script>
	</head>
	<body onload = "initialize()">
		<form action='receipt.php' method='post'>
			<table id = "mydata"></table>
			<input type = "submit">
		</form>
	</body>
</html>
