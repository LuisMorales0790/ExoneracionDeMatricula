<html>
	<head>
		<!--Importar el boostrap -->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap-3.1.1.css';?>">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/estilo.css';?>">		
		<!--Importar el jquery -->
		<script src="<?php echo base_url().'assets/js/jquery.js';?>"></script>			
		<script src="<?php echo base_url().'assets/js/bootstrap-3.1.1.js';?>"></script>
		<script type="text/javascript">
			var base_url='<?php echo base_url();?>'
		</script>
		<script src="<?php echo base_url().'assets/js/eventos.js';?>"></script>				
	</head>	
	<body>
		<br>
		<!-- INICIO DE CONTENEDOR, PANEL Y TABS-->		
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-10">
				<div id="Contenido" class="container-rounded ">

					<ul class="nav nav-tabs-primary">
						<li class="active"><a data-toggle="tab" href="#home">SOLICITUDES</a></li>					
					</ul>

					<div class="tab-content" style="padding:10px;">
						<div id="home" class="tab-pane fade in active">
							<div class="panel panel-primary">
								<div class="panel-heading">
									Datos
								</div>
								<div class="panel-body">
									<div class="row">
										<div class="col-md-3">
											<center>
												<label for="">Valor</label>
											</center>
											<input type="text" class="form-control">
										</div>

										<div class="col-md-3">
											<center>
												<label for="">FILTRO DE BUSQUEDA</label>
											</center>
											<select class="form-control">
												<option value=""></option>
												<option value="1">nivel 1</option>
												<option value="2">nivel 2</option>
												<option value="3">nivel 3</option>
											</select>
										</div>

										<div class="col-md-3">
											<center>
												<label for="">NIVELES</label>
											</center>
											<select class="form-control">
												<option value="">===SELECCIONA NIVEL===</option>
												<option value="1">nivel 4</option>
												<option value="2">nivel 5</option>
												<option value="3">nivel 6</option>
											</select>
										</div>	

										<div class="col-md-3">
											<center>
												<label for="">OPCIONES</label><br>
												<button class="btn btn-primary">
													<span class="glyphicon glyphicon-search"></span>
													BUSCAR
												</button>
											</center>

										</div>
								</div>
							</div>
						</div>
					</div>
				</div>	


			</div> <!-- -->
		</div>
		<br>
		<!-- FIN DE CONTENEDOR, PANEL Y TABS-->	
		<div class="row">
			<div class="col-md-2">

			</div>
			<div class="col-md-8">
				<div class="row">
					<div class="col-md-3">
						<div class="input-group">
							<div class="input-group-addon">
								<span class="glyphicon glyphicon-user"></span>
							</div>
							<input type="text" class="form-control" placeholder="Nombre">
						</div>
					</div>

					<div class="col-md-3">
						<div class="input-group">
							<div class="input-group-addon">
								<span class="glyphicon glyphicon-lock"></span>
							</div>
							<input type="text" class="form-control" placeholder="contraseña">
						</div>
					</div>

					<div class="col-md-3">
						<div class="input-group">
							<div class="input-group-addon">
								<span class="glyphicon glyphicon-tint"></span>
							</div>
							<input type="text" class="form-control" placeholder="tipo de sangre">
						</div>

					</div>
				</div>
			</div>
		</div>

		<br>
        <div class="row">
			<div class="col-md-2">
			</div>
			<div class="col-md-8">
				<center>
				<table class="table table-bordered table-striped table-hover">
				<tr>

						<th>Hoy</th>

						<th>Mañana</th>

						<th>Lunes</th>

				</tr>
				<tr>

						<td>Soleado</td>

						<td>Mayormente soleado</td>

						<td>Parcialmente nublado</td>

				</tr>
				<tr>

						<td>19°C</td>

						<td>17°C</td>

						<td>12°C</td>

						</tr>

						<tr>

						<td>E 13 km/h</td>

						<td>E 11 km/h</td>

						<td>S 16 km/h</td>
				</tr>
				</table>
				</center>
			</div>

		</div>

		<div class="container" style="background-color:#aaa">
  <h2>Close Alerts via Data-Attributes</h2>
  <p>The data-dismiss="alert" is used to close the alert box.</p>
  <div class="alert alert-success alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Success!</strong> This alert box could indicate a successful or positive action.
  </div>
</div>
</div>

<div class="container">
  <h2>Dynamic Tabs</h2>
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
    <li><a data-toggle="tab" href="#menu1">Menu 1</a></li>
    <li><a data-toggle="tab" href="#menu2">Menu 2</a></li>
    <li><a data-toggle="tab" href="#menu3">Menu 3</a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <h3>HOME</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    </div>
    <div id="menu1" class="tab-pane fade">
      <h3>Menu 1</h3>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
    <div id="menu2" class="tab-pane fade">
      <h3>Menu 2</h3>
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
    </div>
    <div id="menu3" class="tab-pane fade">
      <h3>Menu 3</h3>
      <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
    </div>
  </div>
</div>

	</body>
</html>
