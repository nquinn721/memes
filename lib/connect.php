<?php
require('default_appconf.php');
if(file_exists('appconf.php')){
	require('appconf.php');
}
try{
	$db = new PDO("mysql:host=localhost;dbname=memes;", $user, $password);
}catch(PDOException $e){
	echo "Failed to connect to db<br>";
	echo $e;
}


?>