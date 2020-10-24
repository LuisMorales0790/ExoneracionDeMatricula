<!DOCTYPE html>
<html>
<head>
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap-3.1.1.css';?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/estilo.css';?>">
	<script src="<?php echo base_url().'assets/js/jquery.js';?>"></script>
	<script src="<?php echo base_url().'assets/js/bootstrap-3.1.1.js';?>"></script>
	<script type="text/javascript">var base_url='<?php echo base_url();?>'</script>
	<script src="<?php echo base_url().'assets/js/eventos.js';?>"></script>

</head>
<body>
	<br>
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6">
		
			<div class="tab-content" style="padding:10px;">
					<div id="home" class="tab-pane fade in active">
						<div class="panel panel-primary">
							<div class="panel-heading">
								<center>
								INICIO DE SESIÓN
								</center>
							</div>
								<div class="panel-body">
								<center>
								<form action="<?php echo base_url().'index.php/exoneraciones_matricula/c_exoneraciones_matricula/logueo';?>" method="POST" target ="_blank">
										<div class="row">
											<div class="col-md-2"></div>
											<div class="col-md-8">
												<label for="">USUARIO</label>
												<div class="input-group">
													<div class="input-group-addon">
														<span class="glyphicon glyphicon-user"></span>
													</div>
													<input type="text" class="form-control" placeholder="user" id="txtusuario" name="txtusuario" required="">
												</div>
											</div>
										</div><br>

										<br>

										<div class="row">
											<div class="col-md-2"></div>
											<div class="col-md-8">
												<label for="">CONTRASEÑA</label>
												<div class="input-group">
													<div class="input-group-addon">
														<span class="glyphicon glyphicon-lock"></span>
													</div>
													<input type="password" class="form-control" placeholder="password" id="txtpassword" name="txtpassword" required="">
												</div>
											</div>
										</div>

										<div>
												<img src="assets/img/unachi.jpg" width="340" height="240">
										</div>

										<div class="row">
											<div class="col-md-2"></div>
											<div class="col-md-8">
												<button class="btn btn-primary" id="btnaccesar">
													<span class="glyphicon glyphicon-thumbs-up"></span>
													ACCESAR	
												</button>
												
												<button class="btn btn-primary">
													<span class="glyphicon glyphicon-trash"></span>
													LIMPIAR
												</button>

												<button class="btn btn-primary">
													<span class="glyphicon glyphicon-hand-left"></span>
													REGRESAR
												</button>		
											</div>
										</div>
								</form>
								</center>
								</div>
							
						</div>
						
					</div>
				
			</div>	
		</div>
		
	</div>	

</body>
</html>