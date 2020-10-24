<?php 
	switch ($opcion) {
		case 'traer_info_nivel2_creadas':			
			echo '<table class="table table-bordered table-striped">
				<tr class="warning">
					<th><span class="glyphicon glyphicon-asterisk"></span> No.</th>
					<th><span class="glyphicon glyphicon-credit-card"></span> CÉDULA</th>
					<th><span class="glyphicon glyphicon-credit-card"></span> NOMBRE</th>
					<th><span class="glyphicon glyphicon-align-left"></span> NIVEL</th>
					<th><span class="glyphicon glyphicon-list-alt"></span> DETALLE</th>
					<th><span class="glyphicon glyphicon-calendar"></span> FECHA DE ASIGNACIÓN</th>
					<th><span class="glyphicon glyphicon-th"></span> TIPO DE EXONERACIÓN</th>
					<th><span class="glyphicon glyphicon-book"></span> SEMESTRE</th>
					<th><span class="glyphicon glyphicon-flag"></span> ESTADO</th>
					<th colspan="2">ACCIONES</th>
				</tr>
			';
			//$c=0;
			//$total=0;
			if (!empty($SOLCREADAS)) {                     
				foreach ($SOLCREADAS as $row) {
				//$c++;
					$mostrar_btn = '';
					switch ($row['idnivel']) {
						case '2':
							$nivel="1-SOLICITUD CREADA";
						break;
						case '3':
							$nivel="2-PSICOLOGO";
							$mostrar_btn = 'style = "display: none;"';
						break;
						case '4':
							$nivel="3-VICERRECTOR";
							$mostrar_btn = 'style = "display: none;"';
						break;
						case '5':
							$nivel="4-FINANZA";
						break;
					}
					echo '
					<tr>
						<td>'.$row['idsolicitud'].'</td>
						<td>'.$row['cedula'].'</td>
						<td>'.$row['ESTUDIANTE'].'</td>
						<td>'.$nivel.'</td>
						<td>'.$row['detalle'].'</td>
						<td>'.$row['fecha'].'</td>
						<td>'.$row['EXONERACION'].'</td>
						<td>'.$row['SEMESTRE'].'</td>
						<td>'.$row['ESTADO'].'</td>
						<td><button class="glyphicon glyphicon-ok btn btn-primary btn-sm" '.$mostrar_btn.' id="btntraerpsicologo" value="'.$row['idsolicitud'].'" data-toggle="modal" data-target="#myModal">ASIGNAR</button></td>
					</tr>';
				}
			}
			echo '</table>';			
		break;
		case 'traer_info_nivel2_trabajadorsocial': 
			echo '<table class="table table-bordered table-striped">
				<tr class="warning">
					<th><span class="glyphicon glyphicon-asterisk"></span> No.</th>
					<th><span class="glyphicon glyphicon-credit-card"></span> ID.SOLICITUD</th>
					<th><span class="glyphicon glyphicon-align-left"></span> NIVEL</th>
					<th><span class="glyphicon glyphicon-list-alt"></span> ID.PSICOLOGO</th>
					<th><span class="glyphicon glyphicon-calendar"></span> ID.COORDINADOR</th>
					<th><span class="glyphicon glyphicon-th"></span> FECHA ASIGNADA</th>
					<th><span class="glyphicon glyphicon-book"></span> HORA ASIGNADA</th>
					<th><span class="glyphicon glyphicon-flag"></span> ACTIVO</th>
				</tr>
			';
			//$c=0;
			//$total=0;
			if (!empty($SOLASIGNADAS)) {                     
				foreach ($SOLASIGNADAS as $row) {
				//$c++;
					switch ($row['IDNIVEL']) {
						case '2':
							$nivel="1-SOLICITUD CREADA";
							break;
						case '3':
							$nivel="2-PSICOLOGO";
							break;
						case '4':
							$nivel="3-VICERRECTOR";
							break;
						case '5':
							$nivel="4-FINANZA";
							break;
					}
					echo '
					<tr>
						<td>'.$row['IDASIGNADO'].'</td>
						<td>'.$row['idsolicitud'].'</td>
						<td>'.$nivel.'</td>
						<td>'.$row['IDPSICOLOGO'].'</td>
						<td>'.$row['IDCOORDINADOR'].'</td>
						<td>'.$row['FASIGNADA'].'</td>
						<td>'.$row['HORA'].'</td>
						<td>'.$row['ACTIVO'].'</td>
					</tr>';
				}
			}
			echo '</table>';			
		break;
		case 'traer_info_nivel2_vicerrector': 
			echo '<table class="table table-bordered table-striped">
				<tr class="warning">
					<th><span class="glyphicon glyphicon-asterisk"></span> No.</th>
					<th><span class="glyphicon glyphicon-credit-card"></span> ID.SOLICITUD</th>
					<th><span class="glyphicon glyphicon-align-left"></span> NIVEL</th>
					<th><span class="glyphicon glyphicon-list-alt"></span> ID.PSICOLOGO</th>
				
					<th><span class="glyphicon glyphicon-book"></span> DETALLE</th>
					<th><span class="glyphicon glyphicon-th"></span> FECHA</th>
					<th><span class="glyphicon glyphicon-flag"></span> ACTIVO</th>		
				</tr>
			';
			//$c=0;
			//$total=0;
			if (!empty($SOLEVALUADAS)) {                     
				foreach ($SOLEVALUADAS as $row) {
				//$c++;
					switch ($row['IDNIVEL']) {
						case '2':
							$nivel="1-SOLICITUD CREADA";
							break;
						case '3':
							$nivel="2-PSICOLOGO";
							break;
						case '4':
							$nivel="3-VICERRECTOR";
							break;
						case '5':
							$nivel="4-FINANZA";
							break;
					}
					echo '
					<tr>
						<td>'.$row['IDEVALUACION'].'</td>
						<td>'.$row['idsolicitud'].'</td>
						<td>'.$nivel.'</td>
						<td>'.$row['IDPSICOLOGO'].'</td>
						
						<td>'.$row['DETALLE'].'</td>
						<td>'.$row['FECHA'].'</td>
						<td>'.$row['ACTIVO'].'</td>
					</tr>';
				}
			}
			echo '</table>';			
		break;								//nivel 3 trabajador social
		case 'traer_asignaciones': 
			echo '<div class="table_responsive"><table class="table table-bordered table-striped">
				<tr class="warning">
					<th><span class="glyphicon glyphicon-asterisk"></span> No.</th>
					<th><span class="glyphicon glyphicon-credit-card"></span> ID.SOLICITUD</th>
					<th><span class="glyphicon glyphicon-credit-card"></span> CÉDULA DEL ESTUDIANTE</th>
					<th><span class="glyphicon glyphicon-align-left"></span> NIVEL</th>
					<th><span class="glyphicon glyphicon-list-alt"></span> ID.PSICÓLOGO</th>
					<th><span class="glyphicon glyphicon-calendar"></span> ID.COORDINADOR</th>
					<th><span class="glyphicon glyphicon-th"></span> FECHA ASIGNADA</th>
					<th><span class="glyphicon glyphicon-book"></span> HORA ASIGNADA</th>
					<th><span class="glyphicon glyphicon-flag"></span> ARCHIVOS</th>
					<th colspan="2">ACCIONES</th>
				</tr>
			';
			//$c=0;
			//$total=0;
			if (!empty($ASIGNACIONES)) {                     
				foreach ($ASIGNACIONES as $row) {
					$mostrar_btn = '';
				//$c++;
					switch ($row['IDNIVEL']) {
						case '2':
							$nivel="1-SOLICITUD CREADA";
							break;
						case '3':
							$nivel="2-PSICOLOGO";
							break;
						case '4':
							$nivel="3-VICERRECTOR";
							$mostrar_btn = 'style = "display: none;"';
							break;
						case '5':
							$nivel="4-FINANZA";
							break;
					}
					echo '
					<tr>
						<td>'.$row['IDASIGNADO'].'</td>
						<td>'.$row['idsolicitud'].'</td>
						<td>'.$row['cedula'].'</td>
						<td>'.$nivel.'</td>
						<td>'.$row['IDPSICOLOGO'].'</td>
						<td>'.$row['IDCOORDINADOR'].'</td>
						<td>'.$row['FASIGNADA'].'</td>
						<td>'.$row['HORA'].'</td>
						<td>';
							$reg = $this->m_exoneraciones_matricula->mostrar_archivos($row['idsolicitud']);
							if(!empty($reg)){
								foreach ($reg as $row_reg){
									echo '<a href="'.base_url()."assets/archivos/".$row_reg['nombre'].'" target="_blank">'.$row_reg['nombre'].'</a><br><br>';
								}
							}							
						echo'</td>

						<td><button class="glyphicon glyphicon-ok btn btn-primary btn-sm" '.$mostrar_btn.' id="btntraersolicitud" value="'.$row['idsolicitud'].'" data-toggle="modal" data-target="#myModal">EVALUAR</button></td>
					</tr>';
				}
			}
			echo '</table></div>';			 
		break;
		case 'buscar_cedula': 
			echo '<table class="table table-bordered table-striped">
				<tr class="warning">
					<th><span class="glyphicon glyphicon-asterisk"></span> No.</th>
					<th><span class="glyphicon glyphicon-credit-card"></span> ID.SOLICITUD</th>
					<th><span class="glyphicon glyphicon-credit-card"></span> CEDULA DEL ESTUDIANTE</th>
					<th><span class="glyphicon glyphicon-align-left"></span> NIVEL</th>
					<th><span class="glyphicon glyphicon-list-alt"></span> ID.PSICOLOGO</th>
					<th><span class="glyphicon glyphicon-calendar"></span> ID.COORDINADOR</th>
					<th><span class="glyphicon glyphicon-th"></span> FECHA ASIGNADA</th>
					<th><span class="glyphicon glyphicon-book"></span> HORA ASIGNADA</th>
					<th><span class="glyphicon glyphicon-flag"></span> ACTIVO</th>
					<th colspan="2">ACCIONES</th>
				</tr>
			';
			//$c=0;
			//$total=0;
			if (!empty($CEDULA)) {                     
				foreach ($CEDULA as $row) {
				//$c++;
					switch ($row['IDNIVEL']) {
						case '2':
							$nivel="1-SOLICITUD CREADA";
							break;
						case '3':
							$nivel="2-PSICOLOGO";
							break;
						case '4':
							$nivel="3-VICERRECTOR";
							break;
						case '5':
							$nivel="4-FINANZA";
							break;
					}
					echo '
					<tr>
						<td>'.$row['IDASIGNADO'].'</td>
						<td>'.$row['idsolicitud'].'</td>
						<td>'.$row['cedula'].'</td>
						<td>'.$nivel.'</td>
						<td>'.$row['IDPSICOLOGO'].'</td>
						<td>'.$row['IDCOORDINADOR'].'</td>
						<td>'.$row['FASIGNADA'].'</td>
						<td>'.$row['HORA'].'</td>
						<td>'.$row['ACTIVO'].'</td>
						<td><button class="glyphicon glyphicon-ok btn btn-primary btn-sm" id="btntraersolicitud" value="'.$row['idsolicitud'].'" data-toggle="modal" data-target="#myModal">EVALUAR</button></td>
					</tr>';
				}
			}
			echo '</table>';			
		break; 
		//nivel 4 vicerrector sin asignar
		case 'traer_info_nivel4_creadas':			
			echo '<table class="table table-bordered table-striped">
				<tr class="warning">
					<th><span class="glyphicon glyphicon-asterisk"></span> No.</th>
					<th><span class="glyphicon glyphicon-credit-card"></span> CÉDULA</th>
					<th><span class="glyphicon glyphicon-align-left"></span> NIVEL</th>
					<th><span class="glyphicon glyphicon-list-alt"></span> DETALLE</th>
					<th><span class="glyphicon glyphicon-calendar"></span> FECHA DE ASIGNACIÓN</th>
					<th><span class="glyphicon glyphicon-th"></span> TIPO DE EXONERACIÓN</th>
					<th><span class="glyphicon glyphicon-book"></span> SEMESTRE</th>
					<th><span class="glyphicon glyphicon-flag"></span> ESTADO</th>
					<th colspan=3><span class="glyphicon glyphicon-cog"></span> ACCIONES</th>	
				</tr>
			';
			//$c=0;
			//$total=0;
			if (!empty($CREADAS)) {                     
				foreach ($CREADAS as $row) {
				//$c++;
					$btn_verdetalle = '';
					$btn_aprobar = '';
					$btn_rechazar = '';
					switch ($row['idnivel']) {
						case '2':
							$nivel="1-SOLICITUD CREADA";
							break;
						case '3':
							$nivel="2-PSICOLOGO";
							break;
						case '4':
							$nivel="3-VICERRECTOR";
							$btn_verdetalle = '<button class="btn btn-default" id="verdetalle" data-toggle="modal" data-target="#myModal" value="'.$row['idsolicitud'].'">ver detalles</button>';
							$btn_aprobar = '<button class="btn btn-success" id="btn_aprobar_vice" value="'.$row['idsolicitud'].'">Aprobar</button>';
							$btn_rechazar= '<button class="btn btn-danger" id="crear_detalle_rechazo" data-toggle="modal" data-target="#myModal2" value="'.$row['idsolicitud'].'">Rechazar</button>';
							break;
						case '5':
							$nivel="4-FINANZA";
							break;
					}
					echo '
					<tr>
						<td>'.$row['idsolicitud'].'</td>
						<td>'.$row['cedula'].'</td>
						<td>'.$nivel.'</td>
						<td>'.$row['detalle'].'</td>
						<td>'.$row['fecha'].'</td>
						<td>'.$row['EXONERACION'].'</td>
						<td>'.$row['SEMESTRE'].'</td>
						<td>'.$row['ESTADO'].'</td>
						<td>'.$btn_verdetalle.'</td>
						<td>'.$btn_aprobar.'</td>
						<td>'.$btn_rechazar.'</td>
					</tr>';
				}
			}
			echo '</table>';			
		break;	
		case 'traer_info_nivel4_vicerrector': 
			echo '<table class="table table-bordered table-striped">
				<tr class="warning">
					<th><span class="glyphicon glyphicon-asterisk"></span> No.</th>
					<th><span class="glyphicon glyphicon-credit-card"></span> ID.SOLICITUD</th>
					<th><span class="glyphicon glyphicon-align-left"></span> NIVEL</th>
					<th><span class="glyphicon glyphicon-list-alt"></span> ID.PSICOLOGO</th>
					<th><span class="glyphicon glyphicon-book"></span> DETALLE</th>
					<th><span class="glyphicon glyphicon-th"></span> FECHA</th>
					<th><span class="glyphicon glyphicon-flag"></span> ACTIVO</th>	
					<th><span class="glyphicon glyphicon-cog"></span> ACCIONES</th>	
				</tr>
			';
			//$c=0;
			//$total=0;
			if (!empty($EVALUADAS)) {                     
				foreach ($EVALUADAS as $row) {
				//$c++;
					$btn_verdetalle = '';
					switch ($row['IDNIVEL']) {
						case '2':
							$nivel="1-SOLICITUD CREADA";
							break;
						case '3':
							$nivel="2-PSICOLOGO";
							break;
						case '4':
							$nivel="3-VICERRECTOR";
							$btn_verdetalle = '<button class="btn btn-success" id="verdetalle" data-toggle="modal" data-target="#myModal" value="'.$row['idsolicitud'].'">ver detalles</button>';
						break;
						case '5':
							$nivel="4-FINANZA";
							break;
					}
					echo '
					<tr>
						<td>'.$row['IDEVALUACION'].'</td>
						<td>'.$row['idsolicitud'].'</td>
						<td>'.$nivel.'</td>
						<td>'.$row['IDPSICOLOGO'].'</td>
					
						<td>'.$row['DETALLE'].'</td>
						<td>'.$row['FECHA'].'</td>
						<td>'.$row['ACTIVO'].'</td>
						<td>'.$btn_verdetalle.'</td>

					</tr>';
				}
			}
			echo '</table>';			
		break;
		case 'traer_info_nivel4_trabajadorsocial': 
			echo '<table class="table table-bordered table-striped">
				<tr class="warning">
					<th><span class="glyphicon glyphicon-asterisk"></span> No.</th>
					<th><span class="glyphicon glyphicon-credit-card"></span> ID.SOLICITUD</th>
					<th><span class="glyphicon glyphicon-align-left"></span> NIVEL</th>
					<th><span class="glyphicon glyphicon-list-alt"></span> ID.PSICOLOGO</th>
					<th><span class="glyphicon glyphicon-calendar"></span> ID.COORDINADOR</th>
					<th><span class="glyphicon glyphicon-th"></span> FECHA ASIGNADA</th>
					<th><span class="glyphicon glyphicon-book"></span> HORA ASIGNADA</th>
					<th><span class="glyphicon glyphicon-flag"></span> ACTIVO</th>
				</tr>
			';
			//$c=0;
			//$total=0;
			if (!empty($ASIGNADAS)) {                     
				foreach ($ASIGNADAS as $row) {
				//$c++;
					switch ($row['IDNIVEL']) {
						case '2':
							$nivel="1-SOLICITUD CREADA";
							break;
						case '3':
							$nivel="2-PSICOLOGO";
							break;
						case '4':
							$nivel="3-VICERRECTOR";
							break;
						case '5':
							$nivel="4-FINANZA";
							break;
					}
					echo '
					<tr>
						<td>'.$row['IDASIGNADO'].'</td>
						<td>'.$row['idsolicitud'].'</td>
						<td>'.$nivel.'</td>
						<td>'.$row['IDPSICOLOGO'].'</td>
						<td>'.$row['IDCOORDINADOR'].'</td>
						<td>'.$row['FASIGNADA'].'</td>
						<td>'.$row['HORA'].'</td>
						<td>'.$row['ACTIVO'].'</td>
					</tr>';
				}
			}
			echo '</table>';			
		break;
		case 'traerdetalle':
			if (!empty($DETALLE)) {
				foreach ($DETALLE as $row) {
					echo "psicologo: ".$row['psicologo']."<br>";
					echo "detalle: ".$row['detalle'];
				}
			
			}
		break;
		case 'traer_mis_solicitudes':
			echo '<table class="table table-bordered table-striped">
				<tr class="warning">
					<th><span class="glyphicon glyphicon-asterisk"></span> No.</th>
					<th><span class="glyphicon glyphicon-credit-card"></span> CÉDULA</th>
					<th><span class="glyphicon glyphicon-align-left"></span> NIVEL</th>
					<th><span class="glyphicon glyphicon-list-alt"></span> DETALLE</th>
					<th><span class="glyphicon glyphicon-calendar"></span> FECHA DE ASIGNACIÓN</th>
					<th><span class="glyphicon glyphicon-th"></span> TIPO DE EXONERACIÓN</th>
					<th><span class="glyphicon glyphicon-book"></span> SEMESTRE</th>
					<th><span class="glyphicon glyphicon-flag"></span> ESTADO</th>
					<th colspan="2">ACCIONES</th>
				</tr>
			';
			//$c=0;
			//$total=0;
			if (!empty($MISSOLICITUDES)) {                     
				foreach ($MISSOLICITUDES as $row) {
				//$c++;
					$mostrar_btn = '';
					if ($row['idestado'] == 5) {
						$mostrar_btn = '<button id="btnverdetalle" class="btn btn-success" value="'.$row['idsolicitud'].'" data-toggle="modal" data-target="#myModal">Ver detalle</button>';
					}
					switch ($row['idnivel']) {
						case '2':
							$nivel="1-SOLICITUD CREADA";
						break;
						case '3':
							$nivel="2-PSICOLOGO";
							
						break;
						case '4':
							$nivel="3-VICERRECTOR";
						break;
						case '5':
							$nivel="4-FINANZA";
						break;
					}
					echo '
					<tr>
						<td>'.$row['idsolicitud'].'</td>
						<td>'.$row['cedula'].'</td>						
						<td>'.$nivel.'</td>
						<td>'.$row['detalle'].'</td>
						<td>'.$row['fecha'].'</td>
						<td>'.$row['EXONERACION'].'</td>
						<td>'.$row['SEMESTRE'].'</td>
						<td>'.$row['ESTADO'].'</td>
						<td>'.$mostrar_btn.'</td>
					</tr>';
				}
			}
			echo '</table>';	
		break;
		case 'traerresporte':
			echo '<table class="table table-bordered table-striped">
				<tr class="warning">
					<th><span class="glyphicon glyphicon-asterisk"></span> No.</th>
					<th><span class="glyphicon glyphicon-credit-card"></span> CEDULA</th>
					<th><span class="glyphicon glyphicon-list-alt"></span> NOMBRE</th>
					<th><span class="glyphicon glyphicon-list-alt"></span> APELLIDO</th>
					<th><span class="glyphicon glyphicon-align-left"></span> NIVEL</th>
					<th><span class="glyphicon glyphicon-flag"></span> ESTADO</th>
				</tr>
			';
			//$c=0;
			//$total=0;
			if (!empty($REPORTES)) {                     
				foreach ($REPORTES as $row) {
				//$c++;
					switch ($row['idnivel']) {
						case '2':
							$nivel="1-SOLICITUD CREADA";
						break;
						case '3':
							$nivel="2-PSICOLOGO";
							
						break;
						case '4':
							$nivel="3-VICERRECTOR";
						break;
						case '5':
							$nivel="4-FINANZA";
						break;
					}
					switch ($row['idestado']) {
						case '1':
							$estado="CREADA";
						break;
						case '2':
							$estado="ASIGNADA";
							
						break;
						case '3':
							$estado="EVALUADA";
						break;
						case '4':
							$estado="APROBADA";
						break;
						case '5':
							$estado="DENEGADA";
						break;
					}
					echo '
					<tr>
						<td>'.$row['idsolicitud'].'</td>
						<td>'.$row['cedula'].'</td>	
						<td>'.$row['pnombre'].'</td>	
						<td>'.$row['apellidop'].'</td>				
						<td>'.$nivel.'</td>
						<td>'.$estado.'</td>
					</tr>';
				}
			}
			echo '</table>';	
		break;
		case 'detallenegado':
			foreach ($SOLICITUDESNEGADAS as $row) {
				echo $row['detalle'];
			}
		break;
	}

 ?>