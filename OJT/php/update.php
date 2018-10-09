<?php
session_start();
include_once 'db_include.php';

if(isset($_POST['update'])){
	$pid = mysqli_real_escape_string($conn, $_POST['pid']);
	$fid = mysqli_real_escape_string($conn, $_POST['form_id']);
	$oid = mysqli_real_escape_string($conn, $_POST['off_id']);
	$pname = mysqli_real_escape_string($conn, $_POST['pname']);
	$pos = mysqli_real_escape_string($conn, $_POST['pos']);
	$stat = mysqli_real_escape_string($conn, $_POST['stat']);

	$statement = mysqli_query($conn, "UPDATE personnel SET person_name='".$pname."', person_position='".$pos."', person_status='".$stat."' WHERE person_id='".$pid."'") or die("Error: ".mysqli_error($conn));

	if($statement){
		echo'<script>
		alert("Record Updated!");
		window.location.href=" ../table/table_2.php?pid='.$pid.'&form_id='.$fid.'&off_id='.$oid.'";
		</script>';
	}	 
	else{
		header("location: ../table/table_2.php?pid='$pid'&form_id='$fid'&off_id='$oid'");
	}
}
?>