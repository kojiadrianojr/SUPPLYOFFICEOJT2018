<table class="w3-table-all w3-bordered w3-striped">
	<thead>
		<tr style="background-color:#009688;color:white;">
			<th>Personnel</th>
			<th>Position</th>
			<th>Office</th>
			<th>Status</th>
			<th>Operation</th>

		<tr>
	</thead>
	<tbody>
		<?php 
			while ($row = mysqli_fetch_array($query)) {
				$sid = $row['person_id'];
		 ?>
		<tr>
		<?php echo'
			<td>'.$row['person_name'].'</td>
			<td>'.$row['person_position'].'</td>
			<td>'.$row['off_name'].'</td>
			<td>'.$row['person_status'].'</td>
			<td>
				
					<div>
						<button style="border-radius: 5px;" onclick="document.getElementById('.'\'edit-person'.$sid.'\''.').style.display='.'\'block\''.'" class="w3-btn w3-green"><i class="fa fa-edit fa-lg"></i></button>
					</div>';
				include '../add-on/edit_person-modal.php';
		echo'</td>';
			}
		?>
		</tr>
	</tbody>
</table>