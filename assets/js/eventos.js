$(document).ready(function(){
	Traer_Asignaciones();
	Traer_mis_solicitudes();
////////////////////////////////////TRAER INFORMACION DEL ESTUDIANTE///////////////////////////////////////////
	$(document).on('click','#btninfocedula',function(){
		cedula = $("#txtcedula").val();
		if(cedula==""){
			alert('llene el campo cedula');
			$("#txtcedula").focus();
			return false;
		}
		data={
			'cedula':cedula
		};
		//console.log(data);
		GetDataJson('traer_info_por_cedula',data,function(resp){
			console.log(resp[0]['cedula']);
			if (resp[0]['cedula']=="") {
				alert('Cedula incorrecta');
			}
			$("#txtpnombre").val(resp[0]['pnombre']);
			$("#txtsnombre").val(resp[0]['snombre']);
			$("#txtapaterno").val(resp[0]['apellidop']);
			$("#txtamaterno").val(resp[0]['apellidom']);
			//$("#btntraerinfo").val(resp[0]['cedula']);
		});
	});
////////////////////////////////////GUARDAR SOLICITUD DEL ESTUDIANTE//////////////////////////////////////////
	$(document).on('click','#btncrear',function(resp){
		cbtiposem = $("#cbtiposem").val();
		if(cbtiposem == 0){
			alert('seleccione el semestre');
			$("#cbtiposem").focus();
			return false;
		}

		cbtipoexo = $("#cbtipoexo").val();
		if(cbtipoexo == 0){
			alert('seleccione el tipo de exoneracion');
			$("#cbtipoexo").focus();
			return false;
		}

		txtadetalle = $("#txtadetalle").val();
		if (txtadetalle==""){
			alert('llenar el campo detalle');
			$("#txtadetalle").focus();
			return false;
		}

		data={
			'cedula':$("#txtcedula").val(),
			'idtipo':$('#cbtiposem').val(),
			'idsemestre':$("#cbtipoexo").val(),
			'detalle':$("#txtadetalle").val()
		};
		//console.log(data);\
		Guardar('guardar_solicitud',data,function(resp){
			alert('Solicitud Registrada');
			Traer_mis_solicitudes();
			$('input').each(function(){
				$(this).val("");
			});
			$("#txtcedula").val("");
			$("#cbtiposem").val(0);
			$("#cbtipoexo").val(0);
			$("#txtadetalle").val("");
		});
	});

//////////////////////////////////GUARDAR USUARIO/////////////////////////////////////////////////////////////
$(document).on('click','#btncrearusuario',function(){
		txtcedula = $("#txtcedula").val();
		if (txtcedula ==""){
			alert('llenar el campo cedula');
			$("#txtcedula").focus();
			return false;
		}

		txtpnombre = $("#txtpnombre").val();
		if (txtpnombre ==""){
			alert("llenar el campo primero nombre");
			$("#txtpnombre").focus();
			return false;
		}

		txtsnombre = $("#txtsnombre").val();
		if (txtsnombre ==""){
			alert("llenar el campo segundo nombre");
			$("#txtsnombre").focus();
			return false;
		}

		txtapaterno = $("#txtapaterno").val();
		if (txtapaterno ==""){
			alert("llenar el campo apellido paterno");
			$("#txtapaterno").focus();
			return false;
		}

		txtamaterno = $("#txtamaterno").val();
		if (txtamaterno ==""){
			alert("llenar el campo apellido materno");
			$("#txtamaterno").focus();
			return false;
		}

		txtusuario = $("#txtusuario").val();
		if (txtusuario =="") {
			alert("llenar el campo usuario");
			$("#txtusuario").focus();
			return false;
		}

		txtclave = $("#txtclave").val();
		if (txtclave ==""){
			alert("llenar el campo clave");
			$("#txtclave").focus();
			return false;
		}

		cmbprivilegios =$("#cmbprivilegios").val();
		if (cmbprivilegios == 0){
			alert("seleccionar un tipo de usuario");
			$("#cmbprivilegios").focus();
			return false;
		}
		data={
			'cedula':$("#txtcedula").val(),
			'pnombre':$("#txtpnombre").val(),
			'snombre':$("#txtsnombre").val(),
			'apellidop':$("#txtapaterno").val(),
			'apellidom':$("#txtamaterno").val(),
			'usuario':$("#txtusuario").val(),
			'clave':$("#txtclave").val(),
			'idtipousuario':$("#cmbprivilegios").val()	
		};
		//console.log(data);
		Guardar('guardar_usuario',data,function(resp){
			alert('Usuario Registrado');
			$('input').each(function(){
				$(this).val("");
			});
			$("#txtcedula").val("");
			$("#txtpnombre").val("");
			$("#txtsnombre").val("");
			$("#txtapaterno").val("");
			$("#txtamaterno").val("");
			$("#txtusuario").val("");
			$("#txtclave").val("");
			$("#cmbprivilegios").val(0);	
		});
    });

///////////////////////////////////GENERAR CLAVE///////////////////////////////////////////////////////////
$(document).on('click','#btnclave',function(){
		GetData('obtener_clave_generada','',function(resp){
			$("#txtclave").val(resp);
		});
    });
///////////////////////////////////////TRAER INFO NIVEL 2 CREADAS TABLA SOLICITUD///////////////////////////////////////////////
$(document).on('click','#btnbuscarnivel2',function(){
		data = {
			'idnivel':$('#cmbniveles').val()
		};	
		GetData('traer_info_nivel2_creadas',data,function(resp){
			$("#tabla_info_nivel2").html(resp);
		});
	});
///////////////////////////////////////TRAER INFO NIVEL 2 TRABAJADOR SOCIAL TABLA ASIGNADO///////////////////////////////////////////////
/*$(document).on('click','#btnbuscarnivel2',function(){
		data = {
			'idnivel':$('#cmbniveles').val()
		};	
		GetData('traer_info_nivel2_trabajadorsocial',data,function(resp){
			$("#tabla_info_nivel2").html(resp);
		});
	});
///////////////////////////////////////TRAER INFO NIVEL 2 VICERRECTOR TABLA EVALUACION///////////////////////////////////////////////
$(document).on('click','#btnbuscarnivel2',function(){
		data = {
			'idnivel':$('#cmbniveles').val()
		};	
		GetData('traer_info_nivel2_vicerrector',data,function(resp){
			$("#tabla_info_nivel2").html(resp);
		});
	}); */

////////////////////////////////TRAER INFO NIVEL 4 CREADAS TABLA SOLICITUD ////////////////////////////////////////
  $(document).on('click','#btnbuscarnivel4',function(){
		data = {
			'idnivel':$('#cmbnivel4').val()
		};	
		GetData('traer_info_nivel4_creadas',data,function(resp){
			$("#tabla_info_nivel4").html(resp);
		});
	}); 

///////////////////////////////////////TRAER INFO NIVEL 4 VICERRECTOR TABLA EVALUACION///////////////////////////////////////////////
/*$(document).on('click','#btnbuscarnivel4',function(){
		data = {
			'idnivel':$('#cmbnivel4').val()
		};	
		GetData('traer_info_nivel4_vicerrector',data,function(resp){
			$("#tabla_info_nivel4").html(resp);
		});
	});

///////////////////////////////////////TRAER INFO NIVEL 4 TRABAJADOR SOCIAL TABLA ASIGNADO///////////////////////////////////////////////
$(document).on('click','#btnbuscarnivel4',function(){
		data = {
			'idnivel':$('#cmbnivel4').val()
		};	
		GetData('traer_info_nivel4_trabajadorsocial',data,function(resp){
			$("#tabla_info_nivel4").html(resp);
		});
	}); */
////////////////////////////////////////GUARDAR MODAL ASIGNAR PSICOLOGO///////////////////////////////////
$(document).on('click','#btnasignar',function(){
	cmbpsicologos = $("#cmbpsicologos").val();
		if (cmbpsicologos == 0){
			alert('seleccione el psicologo');
			$("#cmbpsicologos").focus();
			return false;
		}

	txtdate =$("#txtdate").val();
		if (txtdate == 0){
			alert('seleccione la fecha');
			$('#txtdate').focus();
			return false;
		}

	txttime =$("#txttime").val();
		if(txttime == 0){
			alert('seleccione la hora');
			$('#txttime').focus();
			return false;
		}

	data={
		'idpsicologo':$("#cmbpsicologos").val(),
		'fechaasig':$("#txtdate").val(),
		'hora':$("#txttime").val(),
		'idsolicitud':$(this).val()
		};
		console.log(data);
		Guardar('guardar_asignacion',data,function(resp){
			alert('Solicitud Asignada');
			$('input').each(function(){
			$(this).val();
			});
			$("#cmbpsicologos").val(0);
			$("#txtdate").val("");
			$("#txttime").val("");
			$("#btnbuscarnivel2").trigger('click');
			});
		});
//////////////////////////PASAR VALUE DE BTNTRAERPSICOLOGO A BTNASIGNAR///////////
$(document).on('click','#btntraerpsicologo',function(){
		idsolicitud = $(this).val();
		$('#btnasignar').val(idsolicitud);
	});
//////////////////////////PASAR VALUE DE creardetallerechazo A BTNnegar///////////
	$(document).on('click','#crear_detalle_rechazo',function(){
		idsolicitud = $(this).val();
		$('#btnnegar').val(idsolicitud);
	});

/////////////////////////BTN PARA TRAER INFO DE SOLICITUD AL PSICOLOGO///////////
	$(document).on('click','#btntraersolicitud',function(){
		idsolicitud = $(this).val();
		data={
			'idsolicitud':idsolicitud
		};
		GetDataJson('traer_info_por_solicitud',data,function(resp){

							//fila   //columna 	
            $("#txtadetallesolicitud").val(resp[0]['detalle']);
			$("#cmbtipexoneracion").val(resp[0]['idtipo']);
			$('#btnaceptar').val(idsolicitud);
			$('#btnnegar').val(idsolicitud);
			//$("#btneditar").val(resp[0]['idpaciente']);

		});
	});	

//////////////////////////GUARDAR MODAL EVALUAR SOLICITUD////////////////////////
$(document).on('click','#btnaceptar',function(){

	txtadetalleevaluacion =$("#txtadetalleevaluacion").val();
		if(txtadetalleevaluacion == 0){
			alert('Complete el campo detalle evaluacion');
			$('#txtadetalleevaluacion').focus();
			return false;
		}

	data={
		'detalle':$("#txtadetalleevaluacion").val(),
		'idsolicitud':$(this).val()
		};
		console.log(data);
		Guardar('guardar_evaluacion',data,function(resp){
			alert('Evaluacion Aceptada');
			Traer_Asignaciones();
			$('input').each(function(){
			$(this).val();
			});
			$("#txtadetalleevaluacion").val("");
		});
			 
		});
//////////////////////////////////////////////////////////////////////////////
	$(document).on('click','#btnnegar',function(){

	txtadetalleevaluacion =$("#txtadetalleevaluacion").val();
		if(txtadetalleevaluacion == 0){
			alert('Complete el campo detalle evaluación');
			$('#txtadetalleevaluacion').focus();
			return false;
		}
	nivel = $(this).attr('name');
	if(nivel != 4){
		nivel=3;
	}
	data={
		'detalle':$("#txtadetalleevaluacion").val(),
		'idsolicitud':$(this).val(),
		'idnivel':nivel,
		'negado':1
		};
		console.log(data);
		if(confirm('Desea rechazar esta evaluación')){

			Guardar('negar_evaluacion',data,function(resp){
				alert('Evaluación Negada');
				$('input').each(function(){
				$(this).val();
				});
				$("#txtadetalleevaluacion").val("");
				Traer_Asignaciones();
				data1 = {
					'idnivel': 4
				};	
				GetData('traer_info_nivel4_creadas',data1,function(resp1){
					$("#tabla_info_nivel4").html(resp1);
				});


			});
		}
		
	});

//////////////////////////////////APROBAR SOLICITUD VICERRECTOR-----------------------------
$(document).on('click','#btn_aprobar_vice',function(){
	data={
		'idsolicitud':  $(this).val()
	};
	Guardar('aprobar_solicitud_vice',data,function(resp){
		data1 = {
			'idnivel': 4
		};	
		GetData('traer_info_nivel4_creadas',data1,function(resp1){
			$("#tabla_info_nivel4").html(resp1);
		});
	});
});
//////////////////////////PASAR VALUE DE BTNTRAERSOLICITUD A BTNACEPTAR///////////
$(document).on('click','#btntraersolicitud',function(){
		idsolicitud = $(this).val();
		$('#btnaceptar').val(idsolicitud);
	});
///////////////////////BUSCADOR DE CEDULA////////////////////////////////////////////////
$(document).on('keyup','#txtbuscarcedula',function(){
		cedula = $(this).val();
		if (cedula !=""){
			data = {
			'cedula':cedula
			};
		}else{
			Traer_Asignaciones()
		}	
		GetData('buscar_cedula',data,function(resp){
				$("#tabla_info_nivel3").html(resp);
		});
	});

//////////////////////////////////////////////////////////////////////

////////////////////////////////////VER DETALLE VICERRECTOR///////////////////////

$(document).on('click','#verdetalle', function(){

 	data = { 

 		'idsolicitud': $(this).val()
 	};

 	GetData('traerdetalle', data, function(resp){
 			$("#detallesolicitud").html(resp);
 	});
});
///////////////////////////////// ver detalle de solicitud negada/////////////////////
$(document).on('click','#btnverdetalle', function(resp){

	data = {

		'idsolicitud': $(this).val()
	};

	GetData('detallenegado', data, function(resp){
		$("#t_detalle").html(resp);
	});
});

//////////////////////////////////subir archvos//////////////////////////////////
$(document).on('click','#btnenviar', function(resp){
	 upload_file();
});

//////////////////////////////////ver reportes---------------------------------

$(document).on('click','#btnreporte', function(resp){

	data = {

		'idsemestre': $("#cbtiposem").val(),
		'idtipo': $("#cbtipoexo").val(),
		'fecha': $("#cbtipoano").val()
	};

	GetData('traerresporte', data, function(resp){
		$("#tabla_info_reporte").html(resp);
	});
});



/////////////////////////////////////////////////////////////////////////////////
});

//FUNCIONES POST
function Guardar(op,data,func){
	$.post(base_url+'index.php/exoneraciones_matricula/c_ajax/Guardar',{opcion:op,data:data},
		function(res){
			func(res);
		}
	);
}
function GetData(op,data,func){
	$.post(base_url+'index.php/exoneraciones_matricula/c_ajax/GetData',{opcion:op,data:data},
		function(response){
			func(response);
		}
	);
}
function GetDataJson(op,data,func){
	$.post(base_url+'index.php/exoneraciones_matricula/c_ajax/GetDataJson',{opcion:op,data:data},
		function(response){
			func(response);
		},'json'
	);
}

function Traer_Estudiante(){
	GetData('traer_estudiante',0,function(resp){  //parametro de data esta en vacio porque no estoy utilizando una consulta solo traigo toda la info para mostrarla al cargar la pagina
		$('#boton_estudiante_info').html(resp);
	}); 
}

function Traer_Solicitudes_Nivel2(){
	GetData('traer_solicitudes',0,function(resp){  
		$('#tabla_usuarios_info').html(resp);
	}); 
}

function Traer_Asignaciones(){
	GetData('traer_asignaciones',0,function(resp){  //parametro de data esta en vacio porque no estoy utilizando una consulta solo traigo toda la info para mostrarla al cargar la pagina
		$('#tabla_info_nivel3').html(resp);
	}); 
}

function Traer_mis_solicitudes(){
	GetData('traer_mis_solicitudes',0,function(resp){  
		$('#tabla_mis_sol_info').html(resp);
	}); 
}

function upload_file(){    
    var file = $("#up_file")[0].files[0];
    var data = new FormData();
    var idtipoarchivo = $("#tipoarchivo").val();
	data.append('up_file',file);
	data.append('idtipoarchivo',idtipoarchivo);
    $.ajax({
        url: base_url+'index.php/exoneraciones_matricula/c_ajax/Upload_File',
        type: "POST",             // Type of request to be send, called as method
        data: data,               // Data sent to server, a set of key/value pairs (i.e. form fields and values)
        contentType: false,       // The content type used when sending data to the server.
        cache: false,             // To unable request pages to be cached
        processData:false,        // To send DOMDocument or non processed data file it is set to false
        success: function(data){
			$("#up_file").val("");
			//alert(data);
			alert('Archivo enviado con exito');
        }
    });
}







