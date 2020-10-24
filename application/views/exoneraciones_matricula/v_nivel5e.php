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
				<ul class="nav nav-tabs" role="tablist">
					<li class="active"><a data-toggle="tab" href="#tab1">Solicitudes</a></li>
				</ul>

				<div class="tab-content" style="padding: 0px">
					<div id="tab1" class="tab-pane fade in active">
						<div class="panel panel-primary">
							<div class="panel-heading">
								SOLICITUDES PARA EVALUACION
							</div>
							<div class="panel-body">
								<div class="row">
									<div class="col-md-1"></div>
									<div class="col-md-8">
										<center><label>FILTRO DE BUSQUEDA</label></center>
										<select class="form-control">
											<option value="0">==ESCOJA EL TIPO DE SOLICITUD==</option>
											<option value="1">TODAS LAS SOLICITUDES</option>
											<option value="2">PARA MI USUARIO</option>
											<option value="3">ASIGNADAS</option>
											<option value="4">POR ASIGNAR</option>
										</select>
									</div>
									<div class="col-md-2"><br>
										<center>
											<button class="btn btn-primary">
												<span class="glyphicon glyphicon-filter"></span>
												BUSCAR
											</button>
										</center>		
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