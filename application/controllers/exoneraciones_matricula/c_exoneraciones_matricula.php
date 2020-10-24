<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class C_exoneraciones_matricula extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->model('exoneraciones_matricula/m_exoneraciones_matricula');
		$this->load->library('session');
		//c_ajax.php$this->load->model('calendario_control/m_calendario_control');
	}
	public function index(){
		$this->Inicio();
	}
	public function Inicio(){
		$data['privilegios'] = $this->m_exoneraciones_matricula->Privilegioscb();
		$this->load->view('exoneraciones_matricula/v_login',$data);	                    //pagina de inicio	
	}
	public function logueo(){
		$usuario = $this->input->post("txtusuario");
		$password = $this->input->post("txtpassword");
		//$pass = sha1($this->input->post("txtClave"));
		$respuesta = $this->m_exoneraciones_matricula->logueo($usuario,$password);
		//print_r($respuesta); exit();
		if (!empty($respuesta)) {
			
			foreach ($respuesta as $row) {

				$session_arreglo['cedula'] = $row['cedula'];
				$session_arreglo['pnombre'] = $row['pnombre'];
				$session_arreglo['snombre'] = $row['snombre'];
				$session_arreglo['apellidop'] = $row['apellidop'];
				$session_arreglo['apellidom'] = $row['apellidom'];
				$session_arreglo['idusuario'] = $row['idusuario'];
				$idtipousuario = $row['idtipousuario'];

			}

			$this->session->set_userdata($session_arreglo);
			$data['exoneraciones'] = $this->m_exoneraciones_matricula->Exoneracionescb();
		    $data['semestres'] = $this->m_exoneraciones_matricula->Semestrescb();
		    $data['usuario'] = $this->m_exoneraciones_matricula->Psicologoscb();
		    switch ($idtipousuario) {
		    	case 1:
		    		 $this->load->view('exoneraciones_matricula/v_nivel1e',$data);
		    		break;
		    	case 2:
		    		$this->load->view('exoneraciones_matricula/v_nivel2e',$data);
		    		break;
		    	case 3:
		    		$this->load->view('exoneraciones_matricula/v_nivel3e',$data);
		    		break;
		    	case 4:
		    		$this->load->view('exoneraciones_matricula/v_nivel4e',$data);
		    		break;
		    	case 5:
		    		$this->load->view('exoneraciones_matricula/v_nivel5e',$data);
		    		break;
		    }
			

		}
	}
}



