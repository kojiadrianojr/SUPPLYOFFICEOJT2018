<?php
include_once 'db_include.php';
$nm = mysqli_real_escape_string($conn,$_POST['nm']);
$output = "";
$i_count = '1';
$output .= '<table class="w3-table-all w3-bordered w3-striped">
	<thead>
		<tr style="background-color:#009688;color:white;">
			<th>Personnel</th>
			<th>Position</th>
			<th>Office</th>
			<th>Status</th>
			<th>Operation</th>
		<tr>
	</thead>
	<tbody>';

$sql = "SELECT * FROM personnel WHERE person_name LIKE ('%$nm%') OR person_position LIKE ('%$nm%') OR person_status LIKE ('%$nm%') GROUP BY person_id LIMIT 20";

$result = mysqli_query($conn, $sql);
	while ($row = mysqli_fetch_array($result)) {
		$sid = $row['person_id'];
		$output .='
			<tr>
				<td>'.$row['person_name'].'</td>
				<td>'.$row['person_position'].'</td>
				<td>'.$row['off_name'].'</td>
				<td>'.$row['person_status']	.'</td>
				<td>
					<div>
						<button style="border-radius: 5px;" onclick="document.getElementById('.'\'edit-person'.$sid.'\''.').style.display='.'\'block\''.'" class="w3-btn w3-green"><i class="fa fa-edit fa-lg"></i></button>
					</div>';
				include '../add-on/edit_person-modal.php';
	$output .= '</td>
			</tr>'; 	
	}
	$output .='</tbody>
	</table>';
	echo $output;
?>