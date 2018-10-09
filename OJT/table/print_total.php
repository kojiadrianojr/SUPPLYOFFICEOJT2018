<?php
include_once '../php/db_include.php';
if (isset($_GET['fid'])) {
	$fid = mysqli_real_escape_string($conn, $_GET['fid']);
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Print Table</title>
</head>
<?php include '../head/imports.php'; ?>
<body onload="window.print();">
<div id="center-me">
	<b><h3>REPORT ON THE PHYSICAL COUNT OF PROPERTY PLANT AND EQUIPMENT</h3></b>
	<?php
		$query = "SELECT * FROM forms WHERE form_id='$fid'";
		$res = mysqli_query($conn, $query);
		if ($chk = mysqli_num_rows($res)) {
			while ($row = mysqli_fetch_array($res)) {
				$name = $row['form_name'];
				echo''.$name.'';
			}
		}
	?>
	<h5>As at <?php date_default_timezone_set("Asia/Taipei"); echo date("F d, Y");?></h5>
	<table style="width:35%;margin-left:25%;" class="w3-striped">
		<div style="margin-top:5%;">
			<b>BREAKDOWN OF COMPUTATION PER CLASSIFICATION</b>
			<?php
				$sql1=mysqli_query($conn, "SELECT COUNT(*) AS count FROM categories");
				while ($rows=mysqli_fetch_array($sql1)) {
					$max_cat=$rows['count'];
					$count='1';
				}				
				while ($count<=$max_cat) {
					$query=mysqli_query($conn, "SELECT SUM(total_amt) AS total, cat_name FROM categories, items, forms, office WHERE categories.cat_id=items.cat_id AND office.form_id=forms.form_id AND items.form_id=forms.form_id AND office.off_id=items.office_id AND office.form_id=items.form_id AND forms.form_id='$fid' AND categories.cat_id='$count'");
					while ($row=mysqli_fetch_array($query)) {
						$total=$row['total'];
						$name=$row['cat_name'];
						$count++;
					}
			?>
					<tr>
						<?php
						echo'<td style="float:left;">'.$name.'</td>
							<td style="float:right;">'.$total.'</td>';
						?>
					</tr>
			<?php
				}
			?>
		</div>
	</table>
	<h5 style="float:left;margin-top:5%;">Certified Correct by:</h5>
</div>
</body>
</html>