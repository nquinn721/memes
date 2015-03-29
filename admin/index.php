<?php
require_once('../lib/connect.php');
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" type="text/css"/>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<style>
	html, body{
		height:100%;
	}
	.container{
		display: flex;
		height: 100%;
	}
	.login-panel {
		width:400px;
		margin:auto;
	}
	</style>
</head>
<body>
	<div class="container">
		<div class="login-panel">
			<div class="messages">
				<?php if(isset($_GET['error'])):?>
					<div class="alert alert-danger"><?php echo urldecode($_GET['error']);?></div>
				<?php endif;?>
			</div>
			<div class="panel panel-info">
				<div class="panel-heading">Login</div>
			  	<div class="panel-body">
					<form method="post" action="login.php">
						  <div class="form-group">
						    <label for="username">Username</label>
						    <input type="text" class="form-control" name="username" id="username" placeholder="Username">
						  </div>
						  <div class="form-group">
						    <label for="password">Password</label>
						    <input type="password" id="password" name="password" class="form-control" placeholder="Password">
						  </div>
						  <button type="submit" class="btn btn-default">Login!</button>
					</form>
		  		</div>
			</div>
		</div>
	</div>
</body>
</html>