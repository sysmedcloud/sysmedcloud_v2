<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard_model extends CI_Model 
{
    function __construct() 
    {
        parent::__construct();
    }	
    
    /**************************************************************************/
    /** FUNCION QUE PERMITE OBTENER LA CANTIDAD DE PACIENTES ACTIVOS
    /**************************************************************************/
    public function cantidad_paciente($id_empresa){
        
        $this->db->select("COUNT(*) as cantidad_pacientes");
        $this->db->from('tbl_usuarios du');
        $this->db->join('tbl_historias_medicas hd','hd.id_paciente = du.id_usuario');
        $this->db->where('du.id_perfil',4);//tipo paciente
        $this->db->where('du.estado',0);
        $this->db->where('du.eliminado',0);
        $this->db->where('du.id_empresa',$id_empresa);
        $this->db->order_by("du.id_usuario", "asc");
        $datos = $this->db->get();
        
        if($datos->num_rows() > 0 ){
            
            return $datos->row()->cantidad_pacientes;
            
        }else{
            
            return 0;
        }
    }
    
    /**************************************************************************/
    /** FUNCION QUE PERMITE OBTENER CANTIDAD DE CONSULTAS MEDICAS REGISTRADAS
    /**************************************************************************/
    public function cantidad_cons_medicas($id_empresa){
        
        $this->db->select("COUNT(*) as cantidad_consultas_med");
        $this->db->from('tbl_consulta_medica cm');
        $this->db->join('tbl_usuarios u','u.id_usuario = cm.ingresado_por');
        $this->db->where('u.estado',0);
        $this->db->where('u.eliminado',0);
        //$this->db->where('u.id_usuario',$id_usuario);
        $this->db->where('u.id_empresa',$id_empresa);
        $this->db->where('cm.eliminado',0);        
        $this->db->order_by("cm.id_consulta","asc");
        $datos = $this->db->get();
        
        if($datos->num_rows() > 0 ){
            
            return $datos->row()->cantidad_consultas_med;
            
        }else{
            
            return 0;
        }
    }
    
    /**************************************************************************/
    /** FUNCION QUE PERMITE OBTENER CANTIDAD DE CITAS REGISTRADAS
    /**************************************************************************/
    public function cantidad_citas($id_empresa){
        
        $this->db->select("COUNT(*) as cantidad_citas");
        $this->db->from('tbl_citas_medicas c');
        $this->db->join('tbl_usuarios u','u.id_usuario = c.id_paciente');
        $this->db->where('u.estado',0);
        $this->db->where('u.eliminado',0);
        //$this->db->where('u.id_usuario',$id_usuario);
        $this->db->where('c.id_empresa',$id_empresa);      
        $this->db->order_by("c.id","asc");
        $datos = $this->db->get();
        
        if($datos->num_rows() > 0 ){
            
            return $datos->row()->cantidad_citas;
            
        }else{
            
            return 0;
        }
    }
    
    /**************************************************************************/
    /** FUNCION QUE PERMITE OBTENER CANTIDAD DE USUARIOS DE LA CUENTA
    /**************************************************************************/
    public function cantidad_users($id_empresa){
        
        $this->db->select("COUNT(*) as cantidad_usuarios");
        $this->db->from('tbl_usuarios u');       
        $this->db->where_in('u.id_perfil',array(1,2,3,5));//tipo paciente
        $this->db->where('u.estado',0);
        $this->db->where('u.eliminado',0);
        $this->db->where('u.id_empresa',$id_empresa);
        $this->db->order_by("u.id_usuario", "asc");
        $datos = $this->db->get();
        
        if($datos->num_rows() > 0 ){
            
            return $datos->row()->cantidad_usuarios;
            
        }else{
            
            return 0;
        }
    }
    
    /**************************************************************************/
    /** Funcion que permite retornar cantidad de pacientes hombres
    /**************************************************************************/
    public function cantidad_pacientes_hombre($id_empresa){
        
        //Cantidad de consultas medicas realizadas por paciente hombres
        $this->db->select("COUNT(*) as cantidad_pacientes_m");
        $this->db->from('tbl_usuarios u');
        $this->db->join('tbl_historias_medicas h','h.id_paciente = u.id_usuario');
        $this->db->where('u.id_perfil',4);//tipo paciente
        $this->db->where('u.estado',0);
        $this->db->where('u.eliminado',0);
        $this->db->where('u.genero','M');
        $this->db->where('u.id_empresa',$id_empresa);
        $this->db->order_by("u.id_usuario", "asc");
        $query_cant_paciente_m = $this->db->get();
        
        if($query_cant_paciente_m->num_rows() > 0 ){    
            $cant_paciente_m = $query_cant_paciente_m->row()->cantidad_pacientes_m;
        }else{
            $cant_paciente_m = 0;
        }
        
        return $cant_paciente_m;
    }
    
    /**************************************************************************/
    /** Funcion que permite retornar cantidad de pacientes mujeres
    /**************************************************************************/
    public function cantidad_pacientes_mujer($id_empresa){
        
        //Cantidad de consultas medicas realizadas por pacientes mujeres
        $this->db->select("COUNT(*) as cantidad_pacientes_f");
        $this->db->from('tbl_usuarios u');
        $this->db->join('tbl_historias_medicas h','h.id_paciente = u.id_usuario');
        $this->db->where('u.id_perfil',4);//tipo paciente
        $this->db->where('u.estado',0);
        $this->db->where('u.eliminado',0);
        $this->db->where('u.genero','F');
        $this->db->where('u.id_empresa',$id_empresa);
        $this->db->order_by("u.id_usuario", "asc");
        $query_cant_paciente_f = $this->db->get();
        
        if($query_cant_paciente_f->num_rows() > 0 ){
            $cant_paciente_f = $query_cant_paciente_f->row()->cantidad_pacientes_f;
        }else{
            $cant_paciente_f = 0;
        }
        
        return $cant_paciente_f;
    }
    
    /**************************************************************************/
    /** Info grafico distribucion de consultas medicas por pacientes y genero
    /**************************************************************************/
    public function dist_cm_hm($id_empresa){
        
        //Cantidad de consultas medicas realizadas por paciente hombres
        $cant_paciente_m = $this->cantidad_consultas_med_m($id_empresa);
        
        //Cantidad de consultas medicas realizadas por pacientes mujeres
        $cant_paciente_f = $this->cantidad_consultas_med_f($id_empresa);
        
        return array("M"=>$cant_paciente_m,"F"=>$cant_paciente_f);
    }
    
    /**************************************************************************/
    /** Cantidad de consultas medicas realizadas a pacientes hombres
    /**************************************************************************/
    public function cantidad_consultas_med_m($id_empresa){
        
        //Cantidad de consultas medicas realizadas por paciente hombres
        $this->db->select("COUNT(*) as cantidad");
        $this->db->from('tbl_consulta_medica c');
        $this->db->join('tbl_usuarios u','u.id_usuario = c.id_paciente');
        $this->db->join('tbl_historias_medicas h','h.id_paciente = u.id_usuario');
        $this->db->where('u.id_perfil',4);//tipo paciente
        $this->db->where('u.estado',0);
        $this->db->where('u.eliminado',0);
        $this->db->where('u.genero','M');
        $this->db->where('u.id_empresa',$id_empresa);
        $this->db->order_by("u.id_usuario", "asc");
        $query_cant = $this->db->get();
        
        if($query_cant->num_rows() > 0 ){    
            $cantidad = $query_cant->row()->cantidad;
        }else{
            $cantidad = 0;
        }
        
        return $cantidad;
    }
    
    /**************************************************************************/
    /** Cantidad de consultas medicas realizadas a pacientes mujeres
    /**************************************************************************/
    public function cantidad_consultas_med_f($id_empresa){
        
        //Cantidad de consultas medicas realizadas por paciente mujeres
        $this->db->select("COUNT(*) as cantidad");
        $this->db->from('tbl_consulta_medica c');
        $this->db->join('tbl_usuarios u','u.id_usuario = c.id_paciente');
        $this->db->join('tbl_historias_medicas h','h.id_paciente = u.id_usuario');
        $this->db->where('u.id_perfil',4);//tipo paciente
        $this->db->where('u.estado',0);
        $this->db->where('u.eliminado',0);
        $this->db->where('u.genero','F');
        $this->db->where('u.id_empresa',$id_empresa);
        $this->db->order_by("u.id_usuario", "asc");
        $query_cant = $this->db->get();
        
        if($query_cant->num_rows() > 0 ){    
            $cantidad = $query_cant->row()->cantidad;
        }else{
            $cantidad = 0;
        }
        
        return $cantidad;
    }
    
    /**************************************************************************/
    /** Info Grafico paciente genero
    /**************************************************************************/
    public function paciente_genero($id_empresa){
        
        //Obtener total de pacientes registrados
        $total_pacientes = $this->cantidad_paciente($id_empresa);
        
        //Obtener cantidad total de pacientes hombres
        $cant_hombres = $this->cantidad_pacientes_hombre($id_empresa);
        
        //Obtener cantidad total de pacientes mujeres
        $cant_mujeres = $this->cantidad_pacientes_mujer($id_empresa);
        
        //Obtener porcentajes
        $ph = ($cant_hombres *  100) / $total_pacientes;//% de hombres
        $pm = ($cant_mujeres * 100) / $total_pacientes;//% de mujeres
        
        $pacientes  = array();
        $hombres[0] = "Hombres";
        $hombres[1] = round($ph);
        $mujeres[0] = "Mujeres";
        $mujeres[1] = round($pm);
        
        array_push($pacientes,$hombres);
        array_push($pacientes,$mujeres);
        
        echo json_encode($pacientes);
    }
    
    /**************************************************************************/
    /** Actividades recientes de la agenda médica
    /**************************************************************************/
    public function act_recientes_agenda($id_empresa){
        
        //Buscar ultimas citas registradas
        $this->db->select("c.id,c.id_empresa,c.id_profesional,c.id_paciente,
                           c.rut_paciente,c.nom_paciente,e.estado,u.imagen,c.class,
                           c.inicio_normal,c.final_normal,c.fecha_creacion");
        $this->db->from('tbl_citas_medicas c');
        $this->db->join('tbl_estados_citas_medicas e','e.id_estado_cita_medica = c.id_estado_cita_medica');
        $this->db->join('tbl_usuarios u','u.id_usuario = c.id_paciente');
        $this->db->join('tbl_historias_medicas h','h.id_paciente = u.id_usuario');
        $this->db->where('u.id_perfil',4);//tipo paciente
        $this->db->where('u.estado',0);
        $this->db->where('u.eliminado',0);
        $this->db->where('u.id_empresa',$id_empresa);
        $this->db->order_by("c.id", "desc");
        $this->db->limit(3);
        $query = $this->db->get();
        
        $html = '';
        if($query->num_rows() > 0 ){    
            
            foreach ($query->result() as $row) {
                
                $html .= '<div class="feed-element">
                            <a href="profile.html" class="pull-left">
                                <img alt="image" class="img-circle" src="'.base_url().'img/pacientes/'.$row->imagen.'">
                            </a>
                            <div class="media-body ">
                                <small class="pull-right">'.date('d/m/Y',strtotime(explode(" ",$row->fecha_creacion)[0])).'.</small>
                                <strong>'.$row->nom_paciente.'</strong> Estado cita: <strong style="color:'.$row->class.'">'.$row->estado.'</strong>. <br>
                                <small class="text-muted">Fecha cita: '.$row->inicio_normal.' - '.$row->final_normal.'</small>

                            </div>
                        </div>';
            }
            
        }
        
        return $html;
    }
}	