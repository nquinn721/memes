<?php
try{
	$db = new PDO("mysql:host=localhost;dbname=memes;", "root", "buttmunchers123");
}catch(PDOException $e){
	echo "Failed to connect to db<br>";
	echo $e;
}


?>