<table class="w3-table-all w3-bordered w3-striped" id="result">
	<thead>
		<tr style="background-color:#009688;color:white;">
			<th>History ID.</th>
			<th>Item No.</th>
			<th>Item Name</th>
			<th>Article</th>
			<th>Description</th>
			<th>Date Transfered</th>
			<th>Personnel</th>
			<th>Office</th>
			<th>Form</th>
		</tr>
	</thead>
	<tbody>
		<?php 
			$disp = "SELECT * FROM history, stocks, categories, personnel, office, forms WHERE stocks.cat_id = categories.cat_id AND stocks.item_no = history.item_no AND history.person_id = personnel.person_id AND history.office_id = office.off_id AND history.form_id = forms.form_id ORDER BY date_trans DESC LIMIT 20";
			$result = mysqli_query($conn, $disp);
			while ($row = mysqli_fetch_array($result)){
				$hid = $row['history_id'];
				$ino = $row['item_no'];
				$iname = $row['article'];
				$des = $row['des'];
				$date = $row['date_trans'];
				$person = $row['person_name'];
				$off = $row['off_name'];
				$form = $row['form_name'];
		 ?>
		<tr>
		<?php echo'
			<td>'.$hid.'</td>
			<td>'.$ino.'</td>
			<td>'.$iname.'</td><td>
			<td>'.$des.'</td>
			<td>'.$date.'</td>';
			echo'</td><td>'.$person.'</td>
			<td>'.$off.'</td>
			<td>'.$form.'</td>
			';
			}
		?>
		</tr>
	</tbody>
</table>