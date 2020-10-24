<?php
	class M_exoneraciones_matricula extends CI_Model{
		function __construct(){
			parent:: __construct();
			$this->load->database();
		}
		function Insertar($tabla,$datos){
			$this->db->insert($tabla,$datos);
		}

		function Agregar_ID($tabla, $data){
			
			$this->db->insert($tabla, $data);
			$ID=$this->db->insert_id();				
			return($this->db->affected_rows()>0) ? $ID : FALSE;
		}

		function Update($tabla,$set,$where){
			$this->db->where($where);
			$this->db->update($tabla,$set);
		}
		function GetData($sql){
			$query = $this->db->query($sql);
			if($query->num_rows() > 0){
				foreach($query->result_array() as $row){
					$tab[] = $row;
				}
			}
			return $tab;
		}

		function Exoneracionescb(){
			$sql = "SELECT * FROM tipoexoneraciones";
			return $this->GetData($sql);
		}

		function Semestrescb(){
			$sql = "SELECT * FROM semestres";
			return $this->GetData($sql);
		}

		function Privilegioscb(){
			$sql = "SELECT * FROM privilegios";
			return $this->GetData($sql);
		}

		function Psicologoscb(){
			$sql = "SELECT idusuario, usuario
 					FROM usuario
                    WHERE idtipousuario=3"; 
            return $this->GetData($sql);
		}

		function Traer_Info_Cedula($cedula){
			$sql = "SELECT * FROM estudiantes WHERE cedula ='".$cedula."'";
			return $this->GetData($sql);
		}

		function Traer_Solicitud_Id($idsolicitud){
			$sql = "SELECT * FROM solicitud WHERE idsolicitud=".$idsolicitud;
			return $this->GetData($sql); //este GetData es del c_ajax
		}

		function Buscar_Cedula($cedula){
			$sql ="SELECT s.* ,ag.idnivel AS IDNIVEL, ag.idasignado AS IDASIGNADO, ag.fechaasig AS FASIGNADA, ag.hora AS HORA, ag.activo AS ACTIVO, ag.idpsicologo as IDPSICOLOGO, ag.idcordinador as IDCOORDINADOR
			FROM solicitud s
			INNER JOIN tipoexoneraciones ex ON(ex.idtipoexoneraciones = s.idtipo)
			INNER JOIN semestres sem ON (sem.idsemestre = s.idsemestre)
			INNER JOIN estadosolicitud esol ON (esol.idestado = s.idestado)
			INNER JOIN asignado ag ON (ag.idsolicitud = s.idsolicitud)

			WHERE cedula like '%$cedula%' AND s.idnivel = 3 AND s.idestado != 5 AND ag.idpsicologo = ".$this->session->userdata('idusuario'); 

			return @$this->GetData($sql); //este GetData es del c_ajax
		}

		function traer_info_nivel2_creadas($idnivel){
			$sql = "SELECT s.* ,ex.descripcion as EXONERACION, sem.detalle AS SEMESTRE, esol.detalle as ESTADO,
			CONCAT(est.pnombre, ' ',est.apellidop) as ESTUDIANTE
			FROM solicitud s
			INNER JOIN tipoexoneraciones ex on(ex.idtipoexoneraciones = s.idtipo)
			INNER JOIN semestres sem ON (sem.idsemestre = s.idsemestre)
			INNER JOIN estadosolicitud esol on (esol.idestado = s.idestado)
			INNER JOIN estudiantes est on(est.cedula = s.cedula)
			WHERE s.idnivel = $idnivel AND s.idestado<>5";

			return @$this->GetData($sql);
		}

		function traer_info_nivel2_trabajadorsocial($idnivel){
			$sql = "SELECT s.* ,ag.idnivel AS IDNIVEL, ag.idasignado AS IDASIGNADO, ag.fechaasig AS FASIGNADA, ag.hora AS HORA, ag.activo AS ACTIVO, ag.idpsicologo as IDPSICOLOGO, ag.idcordinador as IDCOORDINADOR
			FROM solicitud s
			INNER JOIN tipoexoneraciones ex ON(ex.idtipoexoneraciones = s.idtipo)
			INNER JOIN semestres sem ON (sem.idsemestre = s.idsemestre)
			INNER JOIN estadosolicitud esol ON (esol.idestado = s.idestado)
			INNER JOIN asignado ag ON (ag.idsolicitud = s.idsolicitud)
			WHERE ag.idnivel = $idnivel";

			return $this->GetData($sql); //este GetData es del c_ajax
		}

		function traer_info_nivel2_vicerrector($idnivel){
			$sql = "SELECT s.* ,ev.idnivel AS IDNIVEL, ev.idevaluacion AS IDEVALUACION, ev.fecha AS FECHA, ev.detalle AS DETALLE, ev.activo AS ACTIVO, ev.idpsicologo as IDPSICOLOGO
			FROM solicitud s
			INNER JOIN tipoexoneraciones ex ON(ex.idtipoexoneraciones = s.idtipo)
			INNER JOIN semestres sem ON (sem.idsemestre = s.idsemestre)
			INNER JOIN estadosolicitud esol ON (esol.idestado = s.idestado)
			INNER JOIN evaluacion ev ON (ev.idsolicitud = s.idsolicitud)
			WHERE ev.idnivel = $idnivel AND s.idestado !=5";

			return $this->GetData($sql); //este GetData es del c_ajax
		}


		function Traer_Asignaciones(){
			$sql = "SELECT s.* ,ag.idnivel AS IDNIVEL, ag.idasignado AS IDASIGNADO, ag.fechaasig AS FASIGNADA, ag.hora AS HORA, ag.activo AS ACTIVO, ag.idpsicologo as IDPSICOLOGO, ag.idcordinador as IDCOORDINADOR, ag.idsolicitud as IDSOLICITUD
			FROM solicitud s
			INNER JOIN tipoexoneraciones ex ON(ex.idtipoexoneraciones = s.idtipo)
			INNER JOIN semestres sem ON (sem.idsemestre = s.idsemestre)
			INNER JOIN estadosolicitud esol ON (esol.idestado = s.idestado)
			INNER JOIN asignado ag ON (ag.idsolicitud = s.idsolicitud)

			WHERE s.idnivel = 3 AND s.idestado != 5 AND ag.idpsicologo =".$this->session->userdata('idusuario');

			return @$this->GetData($sql); //este GetData es del c_ajax
		}

		function Traer_Evaluaciones($idnivel){
			$sql = "SELECT s.* ,ev.idnivel AS IDNIVEL, ev.idevaluacion AS IDEVALUACION, ev.fecha AS FECHA, ev.activo AS ACTIVO, ev.idpsicologo as IDPSICOLOGO, ev.idcordinador as IDCOORDINADOR, ev.detalle as DETALLE
			FROM solicitud s
			INNER JOIN tipoexoneraciones ex ON(ex.idtipoexoneraciones = s.idtipo)
			INNER JOIN semestres sem ON (sem.idsemestre = s.idsemestre)
			INNER JOIN estadosolicitud esol ON (esol.idestado = s.idestado)
			INNER JOIN evaluacion ev ON (ev.idevaluacion = s.idsolicitud)
			WHERE s.idnivel = $idnivel AND s.idestado<>5";

			return $this->GetData($sql); //este GetData es del c_ajax
		}

		function Traer_Solicitud(){
 			$sql ="SELECT
						s.*,te.descripcion
						FROM solicitud s
						INNER JOIN tipoexoneraciones te ON (s.idtipo = te.idtipoexoneraciones)
						WHERE s.idestado = 1";

			return $this->GetData($sql); //este GetData es del c_ajax
		}


		function Traer_Estudiantes(){
			$sql = "SELECT * FROM estudiantes WHERE cedula =".$cedula;
			return $this->GetData($sql); //este GetData es del c_ajax
		}

		function Traer_Usuario(){
 			$sql ="SELECT * FROM usuario";

			return $this->GetData($sql); //este GetData es del c_ajax
		}

		function Ver_Detalle($idsolicitud){
			$sql ="SELECT 
				ev.detalle, CONCAT(u.pnombre,' ',u.apellidop) AS psicologo
				FROM evaluacion ev
				INNER JOIN usuario u ON(u.idusuario = ev.idpsicologo)
				WHERE ev.idsolicitud=$idsolicitud";


			return $this->GetData($sql);
		}

		function traer_mis_solicitudes(){
			$sql = "SELECT s.* ,ex.descripcion as EXONERACION, sem.detalle AS SEMESTRE, esol.detalle as ESTADO
			
			FROM solicitud s
			INNER JOIN tipoexoneraciones ex on(ex.idtipoexoneraciones = s.idtipo)
			INNER JOIN semestres sem ON (sem.idsemestre = s.idsemestre)
			INNER JOIN estadosolicitud esol on (esol.idestado = s.idestado)
			INNER JOIN estudiantes est on(est.cedula = s.cedula)
			WHERE s.cedula='{$this->session->userdata('cedula')}'";

			return @$this->GetData($sql);
		}

		function ver_solicitudes_negadas_detalle($idsolicitud){
			$sql = "SELECT ev.detalle 

			FROM evaluacion ev INNER JOIN solicitud s ON (ev.idsolicitud = s.idsolicitud)
			WHERE ev.idsolicitud = $idsolicitud and s.idestado = 5 and ev.negado = 1";
			return @$this->GetData($sql);
		}

		function traer_reportes($data){
			$sql = "SELECT s.idsolicitud, s.cedula, est.pnombre, est.apellidop, s.idnivel, s.idestado 
			FROM solicitud s INNER JOIN estudiantes est ON (s.cedula = est.cedula)
			WHERE s.idtipo = {$data['idtipo']} "; 

			if(!empty($data['fecha'])){
				$sql.="AND YEAR(s.fecha)={$data['fecha']} ";
			}
			if(!empty($data['idsemestre'])){
				$sql.="AND s.idsemestre={$data['idsemestre']} ";
			}
			return @$this->GetData($sql);

		}

		function mostrar_archivos($idsolicitud){
			$sql = "SELECT nombre FROM archivos WHERE idsolicitud = $idsolicitud";
			return @$this->GetData($sql);
		}

		function Contar($sql){
            $db=$this->DriverDB($dr);
            $query = $db->query($sql);
            return $query->num_rows(); 
        }

        function logueo($usuario,$password){
        	$password = strtoupper(md5($password));
        	$sql = "SELECT * FROM usuario WHERE usuario ='".$usuario."' and clave = '".$password."'";
			return  $this->GetData($sql);
        }

		function generar_clave($longitud){
	       $cadena="[^A-Z0-9]";
	       return substr(str_replace($cadena, "", md5(rand())) .
	       str_replace($cadena, "", md5(rand())) .
	       str_replace($cadena, "", md5(rand())),
	       0, $longitud);
		} 

	}
?>

