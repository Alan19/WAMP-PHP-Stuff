<!DOCTYPE HTML>
<!-- Zhen Xiao -->
<html>
	<head>
		<title>Results</title>
		<style>
			.title{
				font:18pt arial;
				text-align:center;
			}
			.content{
				margin-top:10px;
				font:14pt garamond;
			}
			body{
				background-image:url("images/raichu_wallpaper_by_superonyxwolf-d5a3ncd.jpg");
				background-size:cover;
			}
			img{
				float:right;
			}
		</style>
		<script></script>
	</head>
	<body>
		<?php
			$required = array('firstName', 'lastName', 'firstQuiz', 'gender', 'strat', 'favoriteType', 'fun', 'location', 'age', 'job', 'standing', 'setting', 'income', 'utility');
			$error = false;
			foreach($required as $field){
				if(empty($_POST[$field])){
					global $error;
					$error = true;
				}
			}
			if($error == true){
				echo "<div class = 'title'>You missed a field. Go back and make sure everything is filled out.";
				return;
			}
			$firstName = $_POST['firstName'];
			if($_POST['firstQuiz'] == "on"){
				echo "<div class = 'title'>Congratulations!</div>
				<div class = 'title'>You have finished taking your first quiz! Now give me your email, social security number and your bank account and you can access your results...<br />Just kidding!</div><hr />";
			}

			if($_POST['age'] == "Young"){
				echo "<div class = 'title'>$firstName, you are a preschooler!</div>
				<div class = 'content'>Preschoolers often use cute and unevolved Pokemon but might have stronger Pokemon they borrowed from their teachers. They can often be found playing around preschools but might be in other places because of field trips.</div>
				<img src = 'images/103px-XY_Preschooler_M.png' />
				<img src = 'images/141px-XY_Preschooler_F.png' />";
			}
			elseif($_POST['job'] == "Student"){
				echo "<div class = 'title'>$firstName, you are a student!</div>
				<div class = 'content'>Students use a variety of Pokemon in battle and often apply the knowledge they learned from school in battle such as using items and using moves that benefit them in the type matchup.</div>
				<img src = 'images\XY_Schoolboy.png' />
				<img src = 'images\XY_Schoolgirl.png' />";
			}
			elseif($_POST['job'] == "Police"){
				echo "<div class = 'title'>$firstName, you are a police officer!</div>
				<div class = 'content'>Police officers do not challenge trainers during the day because they are busy with their jobs. However, they will challenge trainers during the night in order to make sure they are not suspicious individuals.</div>
				<img src = 'images\Spr_B2W2_Policeman.png' />";
			}
			elseif($_POST['job'] == "Scientist"){
				echo "<div class = 'title'>$firstName, you are a scientist!</div>
				<div class = 'content'>Scientists often use Pokemon created through artifical means, Pokemon revived from fossils or psychic type Pokemon. Some are even involved with evil organizations such as Team Rocket. They often start a battle by using a stat enchancing item on their Pokemon.</div>
				<irc src = 'images\XY_Scientist_M.png' />
				<irc src = 'images\XY_Scientist_F.png' />";
			}
			elseif($_POST['strat'] != "No Strategy" && $_POST['age'] != "Senior"){
				echo "<div class = 'title'>$firstName, you are an ace trainer!</div>
				<div class = 'content'>Ace trainers use a variety of Pokemon but unlike other trainers without a defined theme, they will often have teams that revolve around different strategies. They will also come prepared to battles and make good use of expensive healing items.</div>
				<img src = 'images\91px-ORAS_Ace_Trainer_M.png' />
				<img src = 'images/111px-ORAS_Ace_Trainer_F.png' />";
			}
			elseif($_POST['age'] == "Senior" && $_POST['income'] != "Really Rich"){
				echo "<div class = 'title'>$firstName, you are a veteran!</div>
				<div class = 'content'>Veterans are similar to ace trainers but they have become more mature from their experiences in life. They often impart wisdom of their adventures to passerby.
				<img src = 'images\85px-XY_Veteran_M.png' />
				<img src = 'images\85px-XY_Veteran_F.png' />";
			}
			elseif($_POST['age'] == "Senior" && $_POST['income'] == "Really Rich" && $_POST['gender'] == "Girl"){
				echo "<div class = 'title'>$firstName, you are a madame!</div>
				<div class = 'content'>Mesdames are old, wealthy women who use Pokemon similar to household pets or Pokemon with a 'refined' appearance. They spend a lot of time at high class resturants and chateaus challenging trainers to a battle.</div>
				<img src = 'images\XY_Madame.png' />";
			}
			elseif($_POST['age'] == "Senior" && $_POST['income'] == "Really Rich" && $_POST['gender'] == "Boy"){
				echo "<div class = 'title'>$firstName, you are a gentleman!</div>
				<div class = 'content'>Gentlement are old, wealthy men who often use Pokemon based on pets. They spend a lot of time at high class resturants and chateaus challenging trainers to a battle.</div>
				<img src = 'images\80px-ORAS_Gentleman.png' />";
			}
			elseif($_POST['age'] != "Senior" && $_POST['income'] == "Really Rich" && $_POST['gender'] == "Boy"){
				echo "<div class = 'title'>$firstName, you are a rich boy!</div>
				<div class = 'content'>Rich boys often use electric, normal or water type Pokemon and often pays large amounts of prize money upon defeat. They often use expensive items to heal their Pokemon even when it's not necessary.</div>
				<img src = 'images/159px-ORAS_Rich_Boy.png' />";
			}
			elseif($_POST['age'] != "Senior" && $_POST['income'] == "Really Rich" && $_POST['gender'] == "Girl"){
				echo "<div class = 'title'>$firstName, you are a lady!</div>
				<div class = 'content'>Ladies often use grass, normal or water type Pokemon and often pays large amounts of prize money upon defeat. They often use expensive items to heal their Pokemon even when it's not necessary.</div>
				<img src = 'images/142px-ORAS_Lady.png' />";
			}
			elseif($_POST['age'] != "Senior" && $_POST['income'] != "Really Rich" && $_POST['gender'] == "Boy"){
				echo "<div class = 'title'>$firstName, you are a youngster!</div>
				<div class = 'content'>Youngsters specialize in normal and bug type Pokemon and are often excited to battle and will often give gifts to people they are close to.</div>
				<img src = 'images\81px-ORAS_Youngster.png' />";
			}
			elseif($_POST['age'] != "Senior" && $_POST['income'] != "Really Rich" && $_POST['gender'] == "Girl"){
				echo "<div class = 'title'>$firstName, you are a lass!</div>
				<div class = 'content'>Lasses often use cute looking Pokemon and are often excited to battle and will often give gifts to people they are close to.</div>
				<img src = 'images/129px-ORAS_Lass.png' />";
			}
		 ?>
	</body>
</html>
