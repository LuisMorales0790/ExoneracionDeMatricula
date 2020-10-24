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
  			<div id="Contenido" class="container">
				<ul class="nav nav-tabs" role="tablist">
					<li class="active"><a data-toggle="tab" href="#tab1">Solicitudes</a></li>
				</ul>
			<div class="tab-content" style="padding: 0px;">
				<div id="home" class="tab-pane fade in active">
					<div class="panel panel-primary">
						<div class="panel-heading">
							SOLICITUDES PARA 
							ASIGNAR NIVEL 1 COORDINADOR
						</div>
						<div class="panel panel-body">
							<div class="row">
								<div class="col-md-8">
									<center>
										<label>NIVELES</label>
									</center>
									<select class="form-control" id="cmbniveles">
										<option hidden selected>SELECCIONE EL NIVEL</option>
										<option value="2">NIVEL 1 - CREADAS</option>
										<option value="3">NIVEL 2 - TRABAJADOR SOCIAL</option>
										<option value="4">NIVEL 3 - VICERRECTOR</option>
									</select>							
								</div>
								<div class="col-md-4">
									<center>
										<label>OPCIONES</label><br>
										<button class="btn btn-primary" id="btnbuscarnivel2">
										<span class="glyphicon glyphicon-search"></span>
										BUSCAR
										</button>
									</center>
								</div>
							</div>
							<br>
							<div class="row">
								<div class="col-md-12">
									<div id="tabla_info_nivel2"></div>
								</div>	
							</div>
						</div>
					</div>
				</div>
				
			</div>
		</div> <!---->
		
	</div>
	
</div>
<!-- inicio alert-->
<!-- fin de alert -->
</body>
</html>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">ASIGNAR A PSICÓLOGO</h4>
      </div>
      <div class="modal-body">
       <!-- aqui va input botones etc-->
       	<div class="row">
       		<div class="col-md-6">
       			<center>
					<label>SELECCIONE EL PSICÓLOGO</label>
				</center>
				<select  id="cmbpsicologos" class="form-control" placeholder="Psicologo">
					<option value="0">=== PSICÓLOGOS ===</option>
					<?php
					    foreach ($usuario as $row) {
					    	echo '<option value="'.$row['idusuario'].'">'.$row['usuario'].'</option>';
					    }
					?>					
				</select>
			</div>
			
			<div class="col-md-6">
				<center>
					<label>FECHA DE ASIGNACIÓN</label>
				</center>
				<input type="date" class="form-control" id="txtdate">
			</div>
		</div><br>

		<div class="row">
			<div class="col-md-12">
				<center>
					<label>HORA DE ASIGNACIÓN</label>
				</center>
				<input type="time" class="form-control" id="txttime">
			</div><br>
		</div>
	   </div>

      <div class="modal-footer">
      	<button type="button" id="btnasignar" class="glyphicon glyphicon-ok btn btn-success">ASIGNAR</button>
        <button type="button" class="glyphicon glyphicon-remove btn btn-danger" data-dismiss="modal">SALIR</button>
      </div>
    </div>

  </div>
</div>