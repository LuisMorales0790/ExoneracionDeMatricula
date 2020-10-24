<!DOCTYPE html>
<html>
<head>
    <title>SISTEMA DE EXONONERACIONES (VAES)</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap-3.1.1.css';?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/estilo.css';?>">
	<script src="<?php echo base_url().'assets/js/jquery.js';?>"></script>
	<script src="<?php echo base_url(). 'assets/js/bootstrap-3.1.1.js';?>"></script>
	<script type="text/javascript">
		var base_url='<?php echo base_url();?>'
	</script>
	<script src="<?php echo base_url().'assets/js/eventos.js';?>">
	</script>
</head>
<body>
	
	<div class="row">
		<div class="col-md-1"></div>
		<div class="col-md-10">
			<div id="Contenido" class="container" style="width: 95%;">
				<ul class="nav nav-tabs" role="tablist">
					<li class="active"><a data-toggle="tab" href="#tab1">Solicitudes</a></li>
					<li ><a data-toggle="tab" href="#tab2">Reportes</a></li>
				</ul>

				<div class="tab-content" style="padding: 0px">
					<div id="tab1" class="tab-pane fade in active">
						<div class="panel panel-primary">
							<div class="panel-heading">
								SOLICITUDES PARA EVALUACIÓN NIVEL 4 VICERRECTOR
							</div>
							<div class="panel-body">
								<div class="row">
									<div class="col-md-1"></div>
									<div class="col-md-8">
										<center><label>FILTRO DE BUSQUEDA</label></center>
										<select class="form-control" id="cmbnivel4">
											<option value="0">==ESCOJA EL TIPO DE SOLICITUD==</option>
											<option value="2">SIN ASIGNAR</option>
											<option value="4">PARA MI USUARIO - EVALUADAS</option>
											<option value="3">ASIGNADAS</option>
											<option value="5">APROBADAS</option>
										</select>
									</div>
									<div class="col-md-2"><br>
										<center>
											<button class="btn btn-primary" id="btnbuscarnivel4">
												<span class="glyphicon glyphicon-filter"></span>
												BUSCAR
											</button>
										</center>		
									</div>	
								</div>
								<br>
								<div class="row">
									<div class="col-md-12">
										<div id="tabla_info_nivel4"></div>
									</div>	
								</div>
							</div>
						</div>	
					</div>
					<div id="tab2" class="tab-pane fade">
						<div class="panel panel-primary">
							<div class="panel-heading">
								SOLICITUDES PARA EVALUACION NIVEL 4 VICERRECTOR
							</div>
							<div class="panel-body">
								<div class="row">
									<div class="col-md-4"><br>
										<select class="form-control" id="cbtipoexo">
											<option value="0">SELECCIONE EL TIPO DE EXONERACION</option>
												<?php 
													foreach ($exoneraciones as $row) {
														echo '<option value="'.$row['idtipoexoneraciones'].'">'.$row['descripcion'].'</option>';
													}
												 ?>
										</select>
									</div>
									<div class="col-md-3"><br>
										<select class="form-control" id="cbtiposem">
											<option value="0">SELECCIONE EL SEMESTRE</option>
											<?php 
												foreach ($semestres as $row) {
													echo '<option value="'.$row['idsemestre'].'">'.$row['detalle'].'</option>';
													}
												 ?>
										</select>
									</div>
									<div class="col-md-3"><br>
									<select class="form-control" id="cbtipoano">
										<option value="0">SELECCIONE EL A&ntilde;O</option>
										<?php 
											for ($i=date('Y')-3; $i <=date('Y')+3 ; $i++) { 
												echo '<option value="'.$i.'">'.$i.'</option>';
											}
										 ?>
									</select>
								</div> 
								<div class="col-md-2">
									<br>
									<button class="btn btn-success" id="btnreporte">
										<span class="glyphicon glyphicon-search"></span>
										BUSCAR
									</button>								
								</div> 
							</div>
								<br>

								<div class="row">
									<div class="col-md-12">
										<div id="tabla_info_reporte"></div>
									</div>	
								</div>
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
        <h4 class="modal-title">DETALLES DE SOLICITUD</h4>
      </div>
      <div class="modal-body">
       <!-- aqui va input botones etc-->
       	<div class="row">
       		<div class="col-md-12">
       			<div id="detallesolicitud">
       				
       			</div>
       		</div>
       		
		</div>
		
	   </div>

      <div class="modal-footer">
        <button type="button" class="glyphicon glyphicon-remove btn btn-danger" data-dismiss="modal">SALIR</button>
      </div>
    </div>

  </div>
</div>

<!-- Modal -->
<div id="myModal2" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">DETALLES DE RECHAZO</h4>
      </div>
      <div class="modal-body">
       <!-- aqui va input botones etc-->
       	<div class="row">
       		<div class="col-md-12">
       			<textarea id="txtadetalleevaluacion" class="form-control"></textarea>
       		</div>
       		
		</div>
		
	   </div>

      <div class="modal-footer">
      	<button type="button" id="btnnegar" class="glyphicon glyphicon-ok btn btn-success" name="4">Rechazar</button>
        <button type="button" class="glyphicon glyphicon-remove btn btn-danger" data-dismiss="modal">SALIR</button>
      </div>
    </div>

  </div>
</div>