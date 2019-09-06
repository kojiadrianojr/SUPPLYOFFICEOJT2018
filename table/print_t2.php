<?php
include_once '../php/db_include.php';
if (isset($_GET['sid'])) {
	$sid = mysqli_real_escape_string($conn, $_GET['sid']);
}
if (isset($_GET['pin'])) {
	$oid = mysqli_real_escape_string($conn, $_GET['pin']);
}
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
<div id="center-me" style="margin-top:-10px;">
	<h5>
		<?php
			$query = "SELECT * FROM forms WHERE form_id='$fid'";
			$res = mysqli_query($conn, $query);
			if ($chk = mysqli_num_rows($res)) {
				while ($row = mysqli_fetch_array($res)) {
					$name = $row['form_name'];
					echo''.$name.'';
				}
			}
			$query1 = "SELECT * FROM office WHERE off_id='$oid'";
			$result = mysqli_query($conn, $query1);
			if ($check = mysqli_num_rows($result)) {
				while ($row = mysqli_fetch_array($result)) {
					$name = $row['off_name'];
					echo'<h1>'.$name.'</h1>';
				}
			}
		?>
	</h5>
	<h5>As of <?php date_default_timezone_set("Asia/Taipei"); echo date("F d, Y l");?></h5>
</div>
<div>
	<table border="1" cellpadding="5" class="w3-table-all w3-bordered w3-striped" >
		<thead>
			<tr>
				<th>Item No.</th>
				<th>Article</th>
				<th>Description</th>
				<th>Date Acquired</th>
				<th>Propery Number</th>
				<th>Unit of Measure</th>
				<th>Unit Value</th>
				<th>Total Amount</th>
				<th>Quantity per Property Card</th>
				<th>Quantity per Physical Count</th>
				<th>REMARKS (state, whereabouts, conditions, etc.)</th>
			</tr>
		</thead>
		<tbody>
			<?php 
				$disp_item = mysqli_query($conn,"SELECT * FROM personnel, items WHERE items.remarks = '$sid' AND personnel.person_id = '$sid'");
				while ($row = mysqli_fetch_assoc($disp_item)){
			?>
			<tr>
				<td><?=$row['item_no']; ?></td>
				<td><?=$row['article']; ?></td>
				<td><?=$row['des']; ?></td>
				<td><?=$row['date_acquire']; ?></td>
				<td><?=$row['prop_num']; ?></td>
				<td><?=$row['unit_measure']; ?></td>
				<td><?=$row['unit_value']; ?></td>
				<td><?=$row['total_amt']; ?></td>
				<td><?=$row['qty_prop_card']; ?></td>
				<td><?=$row['qty_phys_count']; ?></td>
				<td><?=$row['person_name']; ?></td>
			</tr>
			<?php } ?>
		</tbody>
	</table>
</div>
</body>
</html>