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

			<div class="tab-content" style="padding: 0px">
				<div id="tab1" class="tab-pane fade in active">
					<div class="panel panel-primary">
						<div class="panel-heading">
								ADMINISTRACIÓN DEL SISTEMA EXONERACIÓN DE MATRÍCULA
						</div>
						<div class="panel-body">
							<div class="row">
								<div class="col-md-1"></div>
								<div class="col-md-10">
									<div class="alert alert-info">
										<a href="#" class="close" data-dimiss="alert" aria-label="close"></a>
										<center>
											<strong>INGRESE LA SIGUIENTE INFORMACIÓN DEL USUARIO</strong>
										</center>
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-md-4">
									<div class="input-group">
										<div class="input-group-addon">
											<span class="glyphicon glyphicon-user"></span>
										</div>
											<input type="text" id="txtcedula" class="form-control" placeholder="Cédula">
									</div>
								</div>		

								<div class="col-md-4">
								<div class="input-group">
									<div class="input-group-addon">
										<span class="glyphicon glyphicon-user"></span>
									</div>
										<input type="text" id="txtpnombre" class="form-control" placeholder="Primer Nombre">
								</div>
								</div>

								<div class="col-md-4">
								<div class="input-group">
									<div class="input-group-addon">
										<span class="glyphicon glyphicon-user"></span>
									</div>
										<input type="text" id="txtsnombre" class="form-control" placeholder="Segundo Nombre">
								</div>
								</div>
							</div><br>

						<div class="row">
							<div class="col-md-4">
									<div class="input-group">
										<div class="input-group-addon">
											<span class="glyphicon glyphicon-user"></span>
										</div>
											<input type="text" id="txtapaterno" class="form-control" placeholder="Apellido Paterno">
									</div>
							</div>		

							<div class="col-md-4">
								<div class="input-group">
									<div class="input-group-addon">
										<span class="glyphicon glyphicon-user"></span>
									</div>
										<input type="text" id="txtamaterno" class="form-control" placeholder="Apellido Materno">
								</div>
							</div>

							<div class="col-md-4">
								<div class="input-group">
									<div class="input-group-addon">
										<span class="glyphicon glyphicon-user"></span>
									</div>
										<select  id="cmbprivilegios" class="form-control" placeholder="USUARIOS">
											<option value="0">=== TIPO DE USUARIO ===</option>
											<?php
											    foreach($privilegios as $row) {
												echo '<option value="'.$row['idprivilegios'].'">'.$row['nombreprivilegio'].'</option>';
											    }
											?>
										</select>
								</div>
							</div>
						</div><br>

							<div class="row">
								<div class="col-md-1"></div>
								<div class="col-md-10">
									<div class="alert alert-info">
										<a href="#" class="close" data-dimiss="alert" aria-label="close"></a>
										<center>
											<strong>CREAR USUARIO CONTRASEÑA</strong>
										</center>
									</div>
								</div>	
							</div>
				<div class="row">
					<div class="col-md-5">
							<div class="input-group">
								<div class="input-group-addon">
									<span class="glyphicon glyphicon-user"></span>
								</div>
									<input type="text" id="txtusuario" class="form-control" placeholder="Ingrese Usuario">
							</div>
					</div>		

					<div class="col-md-5">
						<div class="input-group">
							<div class="input-group-addon">
								<span class="glyphicon glyphicon-user"></span>
							</div>
								<input type="text" id="txtclave" class="form-control" placeholder="Ingrese Contraseña">
								<div class="input-group-btn">
									<button class="glyphicon glyphicon-refresh btn btn-primary" id="btnclave"></button>
								</div>
						</div>
					</div>
					<div class="col-md-2">
						<button class="btn btn-primary" id="btncrearusuario">
							<span class="glyphicon glyphicon-send"></span>
							CREAR
						</button>
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