<!DOCTYPE html>
<html>
<head>
	<title>SISTEMAS DE EXONERACIONES (VAES)</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap-3.1.1.css';?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/estilo.css';?>">
	<script src="<?php echo base_url().'assets/js/jquery.js';?>"></script>
	<script src="<?php echo base_url().'assets/js/eventos.js';?>"></script>
	<script src="<?php echo base_url().'assets/js/bootstrap-3.1.1.js';?>"></script>
	<script type="text/javascript">
		var base_url ='<?php echo base_url();?>'
	</script>
</head>
<body>

	<div class="row">
		<div class="col-md-1"></div>
		<div class="col-md-10">
			<div id="Contenido" class="container">
				<ul class="nav nav-tabs" role='tablist'>
					<li class="active"><a data-toggle="tab" href="#tab1">Solicitudes</a></li>
				</ul>

				<div class="tab-content" style="padding: 0px">
					<div id="tab1" class="tab-pane fade in active">
						<div class="panel panel-primary">
							<div class="panel-heading">
								SOLICITUDES PARA EVALUACIÓN NIVEL 3 TRABAJADOR SOCIAL
							</div>
							<div class="panel-body">
								<div class="row">
									<div class="col-md-1"></div>
									<div class="col-md-8">
										<center><label>INGRESE LA CÉDULA</label></center>
										<input type="text" class="form-control" placeholder="x-xxx-xxxx" id="txtbuscarcedula"><br>
									</div><br>
									<div class="col-md-2">
										<center>	
											<button class="btn btn-primary">
												<span class="glyphicon glyphicon-filter"></span>
												BUSCAR
											</button>
										</center>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<div id="tabla_info_nivel3"></div>
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
        <h4 class="modal-title">EVALUAR SOLICITUD DEL ESTUDIANTE</h4>
      </div>
      <div class="modal-body">
       <!-- aqui va input botones etc-->
       	<div class="row">
       		<div class="col-md-12">
       			<center>
					<label>TIPO DE EXOENRACIÓN</label>
				</center>
				<select class="form-control" id="cmbtipexoneracion" disabled="">
					<option value="0">ERROR<option>
						<?php 
							foreach ($exoneraciones as $row) {
								echo '<option value="'.$row['idtipoexoneraciones'].'">'.$row['descripcion'].'</option>';
						}
					?>
				</select>
			</div>
		</div><br>
		<div class="row">
			<div class="col-md-12">
				<center>
					<label>DETALLE DE SOLICITUD</label>
				</center>
				<textarea class="form-control" rows="5" id="txtadetallesolicitud" disabled=""></textarea>
			</div>
		</div><br>

		<div class="row">
			<div class="col-md-12">
				<center>
					<label>DETALLES DE LA EVALUACIÓN</label>
				</center>
				  <textarea class="form-control" rows="5" id="txtadetalleevaluacion"></textarea>
			</div><br>
		</div>
	   </div>

      <div class="modal-footer">
      	<button type="button" id="btnaceptar" class="glyphicon glyphicon-ok btn btn-success">ACEPTAR</button>
      	<button type="button" id="btnnegar" class="glyphicon glyphicon-remove btn btn-danger" data-dismiss="modal">NEGAR</button>
        <button type="button" class="glyphicon glyphicon-remove btn btn-default" data-dismiss="modal">SALIR</button>
      </div>
    </div>

  </div>
</div>