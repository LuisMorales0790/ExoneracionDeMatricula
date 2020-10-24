
<!DOCTYPE html>
<html>
<head>
	<title>SISTEMA DE EXONERACIONES (VAES)</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap-3.1.1.css';?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/estilo.css';?>">
	<script src="<?php echo base_url().'assets/js/jquery.js';?>"></script>
	<script src="<?php echo base_url().'assets/js/eventos.js';?>"></script>
	<script src="<?php echo base_url().'assets/js/bootstrap-3.1.1.js';?>"></script>
	<script type="text/javascript">
		var base_url='<?php echo base_url();?>'
	</script>
</head>
<body>

<div class="row">
<div class="col-md-1"></div>
<div class="col-md-10">
	<div id="Contenido" class="container-rounded">
			<ul class="nav nav-tabs">
				<li class="active"><a data-toggle="tab" href="#tab1">Solicitud</a></li>
				<li><a data-toggle="tab" href="#tab2">Seguimiento</a></li>
			</ul>

			<div class="tab-content" style="padding: 0px">
				<div id="tab1" class="tab-pane fade in active">
					<div class="panel panel-primary">
						<div class="panel-heading">
								SOLICITUD DEL ESTUDIANTE
						</div>
						<div class="panel-body">
							<div class="row">
								<div class="col-md-1"></div>
								<div class="col-md-10">
									<div class="alert alert-info">
										<a href="#" class="close" data-dimiss="alert" aria-label="close"></a>
										<center>
											<strong>INGRESE LA SIGUIENTE INFORMACIÓN</strong>
										</center>
									</div>
								</div>
							</div>

							<!-- <div class="row">
								<div class="col-md-4">
									<div class="input-group">
										<div class="input-group-addon">
											<span class="glyphicon glyphicon-user"></span>
										</div>
											<input type="text" class="form-control" placeholder="tomo" id="txttomo">
									</div>
								</div>

								<div class="col-md-4">
									<div class="input-group">
										<div class="input-group-addon">
											<span class="glyphicon glyphicon-user"></span>
										</div>
											<input type="text" class="form-control" placeholder="folio" id="txtfolio">
									</div>
								</div>

								<div class="col-md-4">
									<div class="input-group">
										<div class="input-group-addon">
											<span class="glyphicon glyphicon-user"></span>
										</div>
											<input type="text" class="form-control" placeholder="asiento" id="txtasiento">
									</div>
								</div><br>
							</div><br> -->

							<!-- <div class="row">
								<div class="col-md-1"></div>
								<div class="col-md-10">
									<div class="alert alert-info">
										<a href="#" class="close" data-dimiss="alert" aria-label="close"></a>
										<center>
											<strong>INGRESE LA SIGUIENTE INFORMACION</strong>
										</center>
									</div>
								</div>
							</div> -->

							<div class="row">
								<div class="col-md-2">
									<div class="input-group">
										<div class="input-group-addon">
											<span class="glyphicon glyphicon-user"></span>
										</div>
											<input type="text" class="form-control" disabled placeholder="Cedula x-xxx-xxxx" id="txtcedula" style="width:200px;height:30px" value="<?php echo $this->session->userdata('cedula'); ?>">
									</div>
								</div>

								<div class="col-md-2">
									<div class="input-group">
										<div class="input-group-addon">
											<span class="glyphicon glyphicon-user"></span>
										</div>
											<input type="text" class="form-control" disabled placeholder="Primer Nombre" id="txtpnombre" style="width:200px;
											height:30px" value="<?php echo $this->session->userdata('pnombre'); ?>">
									</div>
								</div>

								<div class="col-md-2">
									<div class="input-group">
										<div class="input-group-addon">
											<span class="glyphicon glyphicon-user"></span>
										</div>
											<input type="text" class="form-control" disabled placeholder="Segundo Nombre" id="txtsnombre" style="width:200px;
											height:30px" value="<?php echo $this->session->userdata('snombre'); ?>">
									</div>
								</div>

								<div class="col-md-2">
									<div class="input-group">
										<div class="input-group-addon">
											<span class="glyphicon glyphicon-user"></span>
										</div>
											<input type="text" class="form-control" disabled placeholder="Apellido Paterno" id="txtapaterno" style="width:200px;height:30px" value="<?php echo $this->session->userdata('apellidop'); ?>">		
									</div>
								</div>

								<div class="col-md-2">
									<div class="input-group">
										<div class="input-group-addon">
											<span class="glyphicon glyphicon-user"></span>
										</div>
											<input type="text" class="form-control" disabled placeholder="Apellido Materno" id="txtamaterno" style="width:200px;height:30px" value="<?php echo $this->session->userdata('apellidom'); ?>">											
									</div>
								</div>
							</div><br>

							<!--<div class="row">
								<div class="col-md-12">
									<button class="btn btn-primary" id="btninfocedula">
										<span class="glyphicon glyphicon-search"></span>
										BUSCAR
									</button>								
								</div> 
								
							</div> -->
							<div class="row">
							<!--	<div class="col-md-6"><br>
									<select class="form-control" id="cbtipoano">
										<option value="0">SELECCIONE EL AÑO<option>
										<?php 
											for ($i=date('Y'); $i <=date('Y')+2 ; $i++) { 
												echo '<option value="'.$i.'">'.$i.'</option>';
											}
										 ?>
									</select>
								</div>         -->
								<div class="col-md-6"><br>
									<select class="form-control" id="cbtiposem">
										<option value="0">SELECCIONE EL SEMESTRE<option>
										<?php 
											foreach ($semestres as $row) {
												echo '<option value="'.$row['idsemestre'].'">'.$row['detalle'].'</option>';
												}
											 ?>
									</select>
								</div>
								<div class="col-md-6"><br>
									<select class="form-control" id="cbtipoexo">
										<option value="0">SELECCIONE EL TIPO DE EXONERACIÓN<option>
											<?php 
												foreach ($exoneraciones as $row) {
													echo '<option value="'.$row['idtipoexoneraciones'].'">'.$row['descripcion'].'</option>';
												}
											 ?>
									</select>
								</div>
							</div><br>

							<div class="row">
							<!--	<div class="col-md-5"><br>
									<div class="input-group">
										<div class="input-group-addon">
											<label>SELECCIONE LA FECHA</label>
										</div>
											<input type="date" class="form-control" id="txtfecha">		
									</div>
								</div> -->
								<div class="col-md-10">
									<center><br>
										<label>DETALLE DE SOLICITUD</label>
									</center>
									<div class="form-group">
										<center>		
										<textarea class="form-control" rows="5" id="txtadetalle" required="">
										</textarea>
										</center>
									</div>
							    </div>
							    <div class="col-md-2"><br><br><br><br>
								    <button class="btn btn-primary" id="btncrear">
								    	<span class="glyphicon glyphicon-plus-sign"></span>
										CREAR
									</button>
								</div>
							</div>

							<div class="row">
								<div class="col-md-1"></div>
								<div class="col-md-10">
									<div class="alert alert-info">
										<a href="#" class="close" data-dimiss="alert" aria-label="close"></a>
										<center>
											<strong>ADJUNTAR ARCHIVOS</strong>
										</center>
									</div>
								</div>	
							</div>

							<div class="row">
								<div class="col-md-1"></div> 
								<div class="col-md-5"><br>
                            		<input name="FlCedula" id="up_file" type="file" class="form-control" accept=".jpg, .JPG, .jpge, .JPGE, .png, .PNG"/>
								</div><br>

								<div class="col-md-4">
									<select class="form-control" id="tipoarchivo">
										<option value="0">=SELECCIONE EL TIPO DE ARCHIVO=</option>
										<option value="1">CÉDULA</option>
										<option value="2">EXÁMENES MÉDICOS</option>	
									</select>
								</div>

								<div class="col-md-1">
									<button class="btn btn-primary" id="btnenviar">
										<span class="glyphicon glyphicon-send"></span>
										ENVIAR
									</button>
								</div>
							</div>
								
							<!--fin del row -->
						</div>		
					</div>		 					
				</div>
				<div id="tab2" class="tab-pane fade">
					<div class="alert alert-info">
						<a href="#" class="close" data-dimiss="alert" aria-label="close"></a>
						<center>
							<strong>SOLICITUDES EN PROCESO</strong>
						</center>
						
					</div>
					<br>
					<div class="row">
						<div class="col-md-12">
							<div id="tabla_mis_sol_info"></div>
						</div>
					</div>
				</div>

				
	    	</div>
	</div>
</div>
</div>
</body>
</html>
<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">DETALLE DE SOLICITUD</h4>
      </div>
      <div class="modal-body">
       		<div class="row">
       			<div class="col-md-12">
       				<div id="t_detalle"></div>
       			</div>
       		</div>
	   </div>

      <div class="modal-footer">
        <button type="button" class="glyphicon glyphicon-remove btn btn-danger" data-dismiss="modal">SALIR</button>
      </div>
    </div>

  </div>
</div>