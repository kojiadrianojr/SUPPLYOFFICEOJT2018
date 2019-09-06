<?php
	include_once 'php/db_include.php';
	session_start();
	if (isset($_SESSION['user_id'])) {
		header('Location: main/home.php');
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login | Bicol University Supply Office</title>
</head>
<style>
	body{background-color: #001e42;}
	.w3-card-8{max-width:400px;margin-top:150px;margin-left:35%;}
</style>
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/w3.css">
<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.css">
<link rel="shortcut icon" href="logo.ico" type="image/x-icon">
<script src="js/script.js"></script>
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<body>
<form id="login" action="php/db_login.php" method="POST">
	<div class="w3-card-8">
		<div class="w3-container w3-light-grey">
			<div class="w3-section">
				<center><img src="logo.ico" width="150" style="border-radius:50%;margin-top:-20%;"></center><br>
				<label><b>Password</b></label>
					<i class="fa fa-key"></i>
					<input class="w3-input w3-border w3-margin-bottm" type="password" name="pass" placeholder="Enter Key" required>
					<br>
				<button class="w3-btn w3-btn-block w3-section" type="submit" name="login">Log-in</button>
			</div>
		</div>
	</div>
</form>
</body>
</html>