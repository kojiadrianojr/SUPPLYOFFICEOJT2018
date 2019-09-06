<div class="w3-modal" id="edit-person<?php echo $sid ?>">
	<div class="w3-modal-content w3-animate-zoom" style="width:40%;height:50%;">
		<header class="w3-container w3-teal">
			<span onclick="document.getElementById('edit-person<?php echo $sid ?>').style.display='none'" class="w3-closebtn">&times;</span>
			<h2>EDIT PERSON</h2>
		</header>
		<form name="editForm" method="post" action="../php/update1.php" class="w3-form" onsubmit="return valid_editperson()">
		<?php
			echo'
			<div>
				<label>Person name</label>
				<input type="hidden" name="pid" value="'.$sid.'">
				<input type="text" name="pname" value="'.$row['person_name'].'"><br><br>
				<label>Position</label>
				<input type="text" name="pos" value="'.$row['person_position'].'"><br><br>
				<label>Office Name</label>
				<input type="text" name="office" value="'.$row['off_name'].'"><br><br>
				<label>Status: <u>'.$row['person_status'].'</u></label>
				<select name="stat">
					<option value="on-job">On Job</option>
					<option value="retired">Retired</option>						
					<option value="fired">Fired</option>
				</select><br><br>

				<button type="submit" name="update" class="w3-btn w3-green">Update</button>
				<button onclick="document.getElementById('.'\'edit-person'.$sid.'\''.').style.display='.'\'none\''.'" type="button" class="w3-btn w3-red" style="text-align: center;">Cancel</button>
			</div>';
		?>
		</form>
	</div>
</div>