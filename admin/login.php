<?php
require_once('../lib/connect.php');
session_start();
$username = $_POST['username'];
$password = $_POST['password'];
$password = sha1($password . '$@%GAS1415lkjaf'); 

$user = $db->prepare("SELECT firstname, username, email FROM admin WHERE username = ? AND password = ?");
$user->execute([$username, $password]);
$user = $user->fetchAll(PDO::FETCH_OBJ);

if(isset($user[0])) {
	$_SESSION['user'] = $user[0];
	header('location: admin.php');
}else{
	header('location: index.php?error=Login%20failed');
}
?>