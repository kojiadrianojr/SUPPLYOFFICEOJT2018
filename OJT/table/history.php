<?php
	include '../php/db_include.php';
	include '../php/check_user.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>History of Transfer | Bicol University Supply Office</title>
	<?php 
		include '../head/imports.php';
	?>
</head>
<body>
	<?php include '../clip/clip-history/navbar-history.php'; 
	echo '
		<div class="w3-overlay" onclick="w3_close()" style="cursor:pointer"></div>
		<div style="height:75px;background-color:#003471;color:white;margin-top:-1%;padding:1%;width:100%;">
			<span class="w3-opennav" onclick="w3_open()"><h3>☰</h3></span> <br><br>';
	echo'</div>
		<div class="w3-container"><br>
	';
		//include '../clip/clip-history/search-history.php';
		include '../clip/clip-history/table-history.php';
	echo'
		</div>
	';
	?>


</body>
</html>