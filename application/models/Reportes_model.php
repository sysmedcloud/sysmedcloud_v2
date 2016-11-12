<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Reportes_model extends CI_Model 
{
    function __construct() 
    {
        parent::__construct();
    }  
    
    public function consolidado_datos_paciente($rut){
        $query = $this->db->query("SELECT 
                                        *  
                                    FROM tbl_usuarios tu 
                                    JOIN tbl_historias_medicas thm on thm.id_paciente = tu.id_usuario
                                    JOIN tbl_estado_civil tec ON tec.id_estado_civil = tu.id_estado_civil
                                    JOIN tbl_ocupaciones tbo on tbo.cod_ocupacion = tu.id_ocupacion
                                    JOIN tbl_region tr on tr.region_id = tu.id_region
                                    JOIN tbl_comuna tc on tc.COMUNA_ID = tu.id_comuna
                                    JOIN tbl_provincia tpro on tpro.PROVINCIA_ID = tu.id_provincia
                                    JOIN tbl_paises tp on tp.cod_pais = tu.nacionalidad
                                    JOIN tbl_ocupaciones toc on toc.cod_ocupacion = tu.id_ocupacion
                                    JOIN tbl_previsiones_medicas tpm on tpm.id_prevision_medica = tu.id_prevision
                                    JOIN tbl_religiones tre on tre.id_religion = tu.id_religion
                                    JOIN tbl_niveles_estudios tne on tne.id_nivel_estudio = tu.id_nivel_estudio
                                    JOIN tbl_factores_rh tfrh on tfrh.id_factor_rh = tu.id_factorn_rh
                                    JOIN tbl_grupos_sanguineos tgs on tgs.id_grupo_sanguineo = tu.id_grupo_sang
                                    WHERE replace(replace(rut, '.', ''), '-', '') = '" . $rut ."'" );
        $r = $query->result_array();            
        $data = array();
        if($query->num_rows() > 0){
            foreach ($r as $key_data => $val_data) {
                array_push($data,array( 'ficha_medica' => $val_data,
                                        'consultas_medicas' => $this->consultas_paciente($val_data['id_usuario'])));
            }
            return $data;                        
        }else{
            return 'error';
        }

    }

    public function consultas_paciente($id_paciente){
        $this->db->select('*');
        $this->db->from('tbl_consulta_medica');
        $this->db->where('id_paciente', $id_paciente);
        $q = $this->db->get();
        $r = $q->result_array();
        return $r;
    }
}