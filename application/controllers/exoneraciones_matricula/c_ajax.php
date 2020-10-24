<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class C_ajax extends CI_Controller {

	
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->model('exoneraciones_matricula/m_exoneraciones_matricula');
		$this->load->library('session');
	}
	
	public function Guardar(){
		$data = $this->input->post('data');
		$opcion = $this->input->post('opcion');
		switch($opcion){
			case 'guardar_solicitud':					
				$session_arreglo['lastID'] = $this->m_exoneraciones_matricula->Agregar_ID('solicitud',$data);	
				$this->session->set_userdata($session_arreglo);					
			break;
			case 'guardar_usuario':	
				$data['clave'] = strtoupper(md5($data['clave']));
				$this->m_exoneraciones_matricula->Insertar('usuario',$data);
				if ($data['idtipousuario'] == 1) {
					unset($data['clave']);
					unset($data['usuario']);
					unset($data['idtipousuario']);
					$this->m_exoneraciones_matricula->Insertar('estudiantes',$data);
				}				
										
			break;
			case 'guardar_asignacion':
				$data['idcordinador'] = $this->session->userdata('idusuario');
				$this->m_exoneraciones_matricula->Insertar('asignado',$data);
				$data_bitacora = array(
					'idusuario'=>$this->session->userdata('idusuario'),
					'idnivelactual' => 3,
					'idnivelanterior' =>2,
					'idsolicitud' => $data['idsolicitud']

				);	
				$this->m_exoneraciones_matricula->Insertar('bitacora',$data_bitacora);
				$set = array('idnivel'=>3);
				$where = array('idsolicitud'=> $data['idsolicitud']);
				$this->m_exoneraciones_matricula->Update('solicitud',$set,$where);
			break;
			case 'guardar_evaluacion':
				$data['idpsicologo'] = $this->session->userdata('idusuario');
				//$data['idcordinador'] = $this->session->userdata('idusuario');
				$this->m_exoneraciones_matricula->Insertar('evaluacion',$data);
				$set = array('idnivel'=>4);
				$where = array('idsolicitud'=> $data['idsolicitud']);
				$this->m_exoneraciones_matricula->Update('solicitud',$set,$where);
				$data_bitacora = array(
					'idusuario'=>$this->session->userdata('idusuario'),
					'idnivelactual' => 4,
					'idnivelanterior' =>3,
					'idsolicitud' => $data['idsolicitud']

				);	
				$this->m_exoneraciones_matricula->Insertar('bitacora',$data_bitacora);
			break;	
			case 'negar_evaluacion':
				$data['idpsicologo'] = $this->session->userdata('idusuario');				
				$this->m_exoneraciones_matricula->Insertar('evaluacion',$data);
				$set = array('idestado'=>5);
				$where = array('idsolicitud'=> $data['idsolicitud']);
				$this->m_exoneraciones_matricula->Update('solicitud',$set,$where);
				/*$data_bitacora = array(
					'idusuario'=>$this->session->userdata('idusuario'),
					'idnivelactual' => 4,
					'idnivelanterior' =>3,
					'idsolicitud' => $data['idsolicitud']

				);	
				$this->m_exoneraciones_matricula->Insertar('bitacora',$data_bitacora); */
			break;	
			case 'aprobar_solicitud_vice':
				$set = array('idnivel'=>5);
				$where = array('idsolicitud'=> $data['idsolicitud']);
				$this->m_exoneraciones_matricula->Update('solicitud',$set,$where);
			break;		
		}
	}
	public function GetData(){
		$data_ajax['opcion'] = $this->input->post('opcion');
		$data = $this->input->post('data');
		switch ($data_ajax['opcion']){
			case 'traer_info_estudiante':
				$data['ESTUDIANTES'] = $this->m_exoneraciones_matricula->Traer_Estudiantes();
			break;
			case 'obtener_clave_generada':
				echo $this->m_exoneraciones_matricula->generar_clave(8);
				exit();
			break;
			case 'traer_info_nivel2_creadas':
				$data_ajax['SOLCREADAS'] = $this->m_exoneraciones_matricula->traer_info_nivel2_creadas($data['idnivel']);
			break;
			/*case 'traer_info_nivel2_trabajadorsocial':
				$data_ajax['SOLASIGNADAS'] = $this->m_exoneraciones_matricula->traer_info_nivel2_trabajadorsocial($data['idnivel']);
			break;
			case 'traer_info_nivel2_vicerrector':
				$data_ajax['SOLEVALUADAS'] = $this->m_exoneraciones_matricula->traer_info_nivel2_vicerrector($data['idnivel']);
			break; */
			case 'traer_asignaciones':
				$data_ajax['ASIGNACIONES'] = $this->m_exoneraciones_matricula->Traer_Asignaciones();
			break;
			case 'traer_solicitud_estudiante':
			   $data['SOLICITUD'] = $this->m_exoneraciones_matricula->Traer_Solicitud();
			break;
			case 'traer_info_nivel4_creadas':
			   $data_ajax['CREADAS'] = $this->m_exoneraciones_matricula->traer_info_nivel2_creadas($data['idnivel']);
			break;
			/*case 'traer_info_nivel4_vicerrector':
			   $data_ajax['EVALUADAS'] = $this->m_exoneraciones_matricula->traer_info_nivel2_vicerrector($data['idnivel']);
			break; 
			case 'traer_info_nivel4_trabajadorsocial':
				$data_ajax['ASIGNADAS'] = $this->m_exoneraciones_matricula->traer_info_nivel2_trabajadorsocial($data['idnivel']);
			break; */
		    case 'buscar_cedula':
		      $data_ajax['CEDULA'] = $this->m_exoneraciones_matricula->Buscar_Cedula($data['cedula']);
			break;
			 case 'traerdetalle':
		      $data_ajax['DETALLE'] = $this->m_exoneraciones_matricula->Ver_Detalle($data['idsolicitud']);
			break;
			case 'traer_mis_solicitudes':
				$data_ajax['MISSOLICITUDES'] = $this->m_exoneraciones_matricula->traer_mis_solicitudes();
			break;
			case 'detallenegado':
				$data_ajax['SOLICITUDESNEGADAS'] = $this->m_exoneraciones_matricula->ver_solicitudes_negadas_detalle($data['idsolicitud']);
			break;
			case 'traerresporte':
				$data_ajax['REPORTES'] = $this->m_exoneraciones_matricula->traer_reportes($data);
				
			break;
		}
		$this->load->view('exoneraciones_matricula/v_ajax_nivel2',$data_ajax);
	}

	public function GetDataJson(){
		$data = $this->input->post('data');
		$opcion = $this->input->post('opcion');
		switch($opcion){
			case 'traer_info_por_cedula':
				$arr = $this->m_exoneraciones_matricula->Traer_Info_Cedula($data['cedula']);
				echo json_encode($arr);
			break;
			case 'traer_info_por_solicitud':
				$arr = $this->m_exoneraciones_matricula->Traer_Solicitud_Id($data['idsolicitud']);
				echo json_encode($arr);			
			break;
		}
	}

	function GetDataUsuario(){
		$data['opcion'] = $this->input->post('opcion');
		switch ($data['opcion']){
			case 'traer_usuarios':
			   $data['USUARIO'] = $this->m_exoneraciones_matricula->Traer_Usuario();
			break;
		}
		$this->load->view('v_ajax_administrador',$data);
	}

	function Upload_File(){
		$name = @$_FILES['up_file']['name'];
		if(!empty($name)){
			$size = $_FILES['up_file']['size'];
			$tmp = $_FILES['up_file']['tmp_name'];
			$path = $_SERVER['DOCUMENT_ROOT']."/exoneraciones_matricula/assets/archivos/".$name;

			if(strlen($name)<=50){
				if(move_uploaded_file($tmp, $path)){
					$datos_archivo = array(
						'idsolicitud'=> $this->session->userdata('lastID'),
						'nombre'=> $name,
						'idtipoarchivo'=> $_POST['idtipoarchivo']
					);
					$this->m_exoneraciones_matricula->Insertar('archivos',$datos_archivo);
				}
				else{
					echo "Ha ocurrido un error al subir la foto, por favor intente de nuevo";
				}
			}			
		
			else{
				echo "El nombre de la imagen es demasiado largo, renombrela y vuélvala a subir";
			}

		}
		else{
			echo "Por favor elija un archivo";
		}
		
	}


	

	
	
}



?>








