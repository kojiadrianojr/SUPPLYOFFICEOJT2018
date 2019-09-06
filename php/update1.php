<?php
session_start();
include_once 'db_include.php';

if(isset($_POST['update'])){
	$pid = mysqli_real_escape_string($conn, $_POST['pid']);
	$pname = mysqli_real_escape_string($conn, $_POST['pname']);
	$pos = mysqli_real_escape_string($conn, $_POST['pos']);
	$stat = mysqli_real_escape_string($conn, $_POST['stat']);
	$office = mysqli_real_escape_string($conn, $_POST['office']);

	$statement = mysqli_query($conn, "UPDATE personnel SET person_name='".$pname."', person_position='".$pos."', person_status='".$stat."', off_name = '".$office."' WHERE person_id='".$pid."'") or die("Error: ".mysqli_error($conn));
	
	/*$statement = "UPDATE personnel SET person_name='$pname' AND person_position='$pos' AND person_status='$stat' WHERE person_id='$pid'";
	$result = mysqli_query($conn, $statement);*/

	if($statement){
		echo'<script>
		alert("Record Updated!");
		window.location.href=" ../table/personnel.php";
		</script>';
	}	 
	else{
		header("location: ../table/personnel.php");
	}
}
?>