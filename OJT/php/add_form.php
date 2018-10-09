<?php
session_start();
include_once 'db_include.php';

if (isset($_POST['add'])) {
	$date = mysqli_real_escape_string($conn, $_POST['date']);
	$form = mysqli_real_escape_string($conn, $_POST['form']);
	$name = mysqli_real_escape_string($conn, $_POST['name']);
	$sql = "INSERT INTO forms(form_id, form_name, date_assump, person_id) VALUES ('', '$form', '$date', '$name')";
	$result = mysqli_query($conn, $sql);

	echo '<script>
		window.location.href="../main/home.php";
	</script>';
}
?>