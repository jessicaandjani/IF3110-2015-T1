<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$database = "stackexchange";
	$name = $_POST["name"];
	$email = $_POST["email"];
	$topic = $_POST["topic"];
	$content = $_POST["content"];
	$quest_id = $_GET["id"];
	$connection = mysql_connect($servername, $username, $password) or die(mysql_error());
	@mysql_select_db('stackexchange') or die(mysql_error());
	$sql = "UPDATE `question` SET `name`='$name', `email`='$email', `topic`='$topic', `content`='$content' WHERE (question_id = $quest_id)";
	echo $sql;
	mysql_query($sql);
	mysql_close();
	header("Location: /Tubes1/index.php");
?>