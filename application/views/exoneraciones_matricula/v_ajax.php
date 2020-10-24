<?php
	switch ($opcion) {
			case 'traer_info_estudiante':
				if (!empty($ESTUDIANTES)) {
			foreach ($ESTUDIANTES as $row) {
				echo '<div>
				<tr>
					<td>'.$row['idestudiantes'].'</td>
					<td>'.$row['pnombre'].'</td>
					<td>'.$row['snombre'].'</td>
					<td>'.$row['apellidop'].'</td>
					<td>'.$row['apellidom'].'</td>
					<td>
				</tr>';		
			}
		}
		echo "</div>";
	break;
	
	}
?>