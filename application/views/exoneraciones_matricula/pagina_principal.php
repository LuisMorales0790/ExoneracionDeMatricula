<?php
	$js = base_url().'assets/js/';
	$css = base_url().'assets/css/';
?>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="<?php echo $css.'bootstrap-3.1.1.css';?>">
		<link rel="stylesheet" type="text/css" href="<?php echo $css.'estilo.css';?>">
		<link rel="stylesheet" type="text/css" href="<?php echo $css.'jquery-ui.css';?>">
		<script src="<?php echo $js.'jquery.js';?>"></script>
		<script src="<?php echo $js.'JqueryUI.js';?>"></script>		
		<script src="<?php echo $js.'bootstrap-3.1.1.js';?>"></script>
		<script type="text/javascript">var base_url='<?php echo base_url();?>'</script>
		<script src="<?php echo $js.'eventos.js';?>"></script>
		<script src="<?php echo $js.'include_page.js';?>"></script>	
	</head>	
	<body>
		<div class="contenido">			
			
			<ul class="nav nav-tabs">
				<li class="active"><a data-toggle="tab" href="#tab-1">Registro de libro</a></li>
				<li><a data-toggle="tab" href="#tab-2">Registrar Prestamos</a></li>
				<li><a data-toggle="tab" href="#tab-3">Prestamos</a></li>
				<li><a data-toggle="tab" href="#menu3">Menu 3</a></li>
			</ul>

			<div class="tab-content">
				<div id="tab-1" class="tab-pane fade in active">
					<br>
					<div class="row">						
						<div class="col-md-10">
							<div class="panel panel-primary">
								<div class="panel-heading"></div>
								<div class="panel-body">	
									<div class="row">
										<div class="col-md-2">
											<label>Codigo:</label>
											<input type="text" class="form-control input-sm" id="codigo">
										</div>
										<div class="col-md-5">
											<label>Titulo:</label>
											<input type="text" class="form-control input-sm" id="titulo">
										</div>
										<div class="col-md-5">
											<label>Autor:</label>
											<input type="text" class="form-control input-sm" id="autor">
										</div>
									</div>
									<br>
									<div class="row">
										<div class="col-md-5">
											<label>Editorial:</label>
											<input type="text" class="form-control input-sm" id="editorial">
										</div>
										<div class="col-md-5">
											<label>Pais:</label>
											<input type="text" class="form-control input-sm" id="pais">
										</div>
										<div class="col-md-2">
											<label>Año:</label>
											<input type="text" class="form-control input-sm" id="anio">
										</div>
									</div>
								</div>
							</div>								
						</div>
						<div class="col-md-2">							
							<div class="panel panel-primary">
								<div class="panel-heading"></div>
								<div class="panel-body">
									<div class="row">
										<center>
											<button class="btn btn-success" id="btn_save_book">
												<span class="glyphicon glyphicon-floppy-save"></span>
												Guardar
											</button>
										</center>
									</div>
									<br>
									<div class="row">
										<center>
											<button class="btn btn-danger" id="">
												<span class="glyphicon glyphicon-remove"></span>
												Cancelar
											</button>
										</center>
									</div>
								</div>
							</div>							
						</div>
					</div>
					<div class="alert alert-info">Listado de libros</div>
					<br>
					<div id="t_libros"></div>
				</div>
				<div id="tab-2" class="tab-pane fade">
					<br>														
					<div class="row">
						<div class="col-md-5">
							<div class="input-group stylish-input-group">
								<input type="text" class="form-control input-sm" placeholder="Titulo o autor" id="txt_libro_autor" style="border-right:none;">							
								<span class="input-group-addon" style="background:#FFF; border-left:0px;">									
									<span class="glyphicon glyphicon-search"></span>									
								</span>
							</div>
						</div>
					</div>									
					<br>
					<div class="row">
						<div class="col-md-12">
							<span id="t_libros_js"></span>
						</div>
					</div>
				</div>
				<div id="tab-3" class="tab-pane fade">
					<br>
					<span id="t_prestamos"></span>
				</div>
				<div id="menu3" class="tab-pane fade">
					<h3>Menu 3</h3>
					<p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
				</div>
			</div>						
			
		</div>		
	</body>
</html>
<!--====Campos escondidos=================================-->
<input type="hidden" id="idLibro">
<input type="hidden" id="idcliente">
<!--======================================================-->
<div class="modal fade" id="ModPres" role="dialog">
	<div class="modal-dialog modal-md">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h5 class="modal-title">Registro de prestamo</h5>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-md-12">
						<div class="input-group">
							<input type="text" class="form-control" id="txt_ced_client" style="text-align:center;" value="">
							<span class="input-group-btn">
								<button class="btn btn-default" id="btn_ced_client">
									&nbsp;
									<span class="glyphicon glyphicon-search"></span>
								</button>
							</span>
						</div>
						<br>
						<span id="cliente_info"></span>
					</div>
				</div>
				<br>
				<div class="row">
					<div class="col-md-6">
						<label>Fecha Desde:</label>
						<input type="date" class="form-control input-sm" id="fecha_desde">
					</div>
					<div class="col-md-6">
						<label>Fecha Hasta:</label>
						<input type="date" class="form-control input-sm" id="fecha_hasta">
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button class="btn btn-success" id="btn_prestamo_ok">
					<span class="glyphicon glyphicon-ok"></span>
					Aceptar
				</button>
				<button class="btn btn-danger" data-dismiss="modal" id="close_modal_pres">
					<span class="glyphicon glyphicon-remove"></span>
					Cerrar
				</button>
			</div>
		</div>
	</div>
</div>