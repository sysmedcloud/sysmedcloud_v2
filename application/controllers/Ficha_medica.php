<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Ficha_medica extends CI_Controller {



    public function __construct() {



        parent::__construct();  

        

        //Cargamos todas las librerias utilizadas en es CI

        $this->load->library(array(

            'form_validation',//funciones para los formularios

            'session',//iniciar session

            'fileclass',//control css y js para cada pagina

            'general_sessions',//Validar datos de session

            'data_empresa',//informacion de la empresa

            'gestion_view'));//controlar vistas

        

        //Cargamos todos los helper que utilizaremos

        $this->load->helper(array('url', 'form','html','funciones_system'));

    }

    

    public function index()

    {

        $this->error_sql();

    }

    

    /******************************************************************/

    /** @Function...

    /******************************************************************/

    public function ver_detalle($id_paciente,$id_historia_med){

        

        $this->load->model('paciente_model');//cargar modelo

        $this->load->model('dropdown_model');//cargar modelo

        $this->load->model('ficha_medica_model');//cargar modelo

        

        //Cargamos las variables de session (LIBRERIA)

        $data["session"]    =   $this->general_sessions->datosDeSession(); 

        

        //CARGAR ARCHIVOS CSS Y JS (LIBRERIA)

        //$data['files'] = $this->fileclass->files_ficha_clinica();

        

        $data["menu"]       = "Historia Clíente";//muestra opcion seleccionada top

        

        $data["active"]     = activeMenu("pacientes");//(HELPERS)marca menu (active)

        

        //Id del paciente

        $data["id_paciente"]=$id_paciente;

        

        //Id historia medica

        $data["id_historia_med"] = $id_historia_med;

        

        //Cargamos datos del paciente seleccionado

        $data["paciente"]       = $this->paciente_model->info_paciente($id_paciente);    

        //echo "<pre>";print_r($data["paciente"]);exit();

        

        //Cargamos informacion historia clinica

        $data["info_hc"]        = $this->ficha_medica_model->info_ficha_med($id_paciente,$id_historia_med);

        

        //CARGAMOS LAS VISTAS NECESARIAS (VIEW - LIBRERIA)

        $this->load->view('templates/admin/header_ficha_clinica_view',$data);

        $this->load->view('templates/admin/navigation_view',$data);

        $this->load->view('templates/admin/navbar_header_view',$data);

        $this->load->view('templates/admin/heading_view',$data);

        $this->load->view('admin/historia_medica_view',$data);

        $this->load->view('templates/admin/footer_content_view');

        $this->load->view('templates/admin/footer_ficha_clinica_view',$data);

    }

    

    public function personas_contacto($id_paciente){

        

        $this->load->model('paciente_model');//cargar modelo

        

        //Cargamos personas de contacto del paciente

        $personas_contacto  = $this->paciente_model->personas_contacto($id_paciente);

        

        echo $personas_contacto;

    }

    

    /******************************************************************/

    /** @Function...

    /******************************************************************/

    public function listado_consultas_med($id_paciente){

        

        $this->load->model('ficha_medica_model');

        

        //Cargamos las variables de session (LIBRERIA)

        $this->general_sessions->datosDeSession(); 

        

        echo $this->ficha_medica_model->listado_consultas_medicas($id_paciente);

    }

    

    public function eliminarConsultaMed(){

        

        $this->load->model('ficha_medica_model');

        

        $id_consulta = $this->input->post("id_consulta_med");

        

        //Eliminamos consulta medica (Solo cambiamos el estado)

        echo $this->ficha_medica_model->removeConsultaMed($id_consulta);

    }

    

    public function guardar(){

        

        $this->load->model('ficha_medica_model');//cargar modelo

        

        //Cargamos las variables de session (LIBRERIA)

        $session                            = $this->general_sessions->datosDeSession(); 

        $data["id_paciente"]                = $this->input->post("id_paciente");

        $id_historia_medica                 = $this->input->post("id_historia_med");

        $data["ant_familiares"]             = $this->input->post("ant_familiares");

        $data["ant_sociales_personales"]    = $this->input->post("ant_soc_personales");

        $data["morbidos"]                   = $this->input->post("ant_morbidos");

        $data["ginecoobstetricos"]          = $this->input->post("annt_ginecoobstetricos");

        $data["habitos"]                    = $this->input->post("habitos");

        $data["medicamentos"]               = $this->input->post("medicamentos");

        $data["alergias"]                   = $this->input->post("alergias");

        $data["inmunizaciones"]             = $this->input->post("inmunizaciones");

        $data["modificado_por"]             = $session["id_usuario"];

        

        //Editar informacion ficha clinica

        $res = $this->ficha_medica_model->guardar_cambios($data,$id_historia_medica);

        

        //Retornar resultado

        if($res){

            echo "success";

        }else{

            echo "error";

        }

        

    }

    

    /**************************************************************************/

    /** @Function que permite obtener las ultimas historias clinicas ingresadas

    /**************************************************************************/

    public function historias_clinicas_recientes(){

        

        $this->load->model('ficha_medica_model');//cargar modelo

        

        $id_empresa         = $this->session->userdata('id_empresa');

        

        //Cargamos ultimas historias clinicas

        $hc_recientes  = $this->ficha_medica_model->hc_recientes($id_empresa);

        

        echo $hc_recientes;

    }

    public function historias_clinicas_recientes_paciente(){

        

        $this->load->model('ficha_medica_model');//cargar modelo

        

        $id_paciente         = $this->session->userdata('id_usuario');


        

        //Cargamos ultimas historias clinicas

        $hc_recientes  = $this->ficha_medica_model->hc_recientes_paciente($id_paciente);      

        echo $hc_recientes;

    }

    

    //Funcion que permite retornar detalla de una consulta medica

    public function detalle_consulta_medica(){

        

        $this->load->model('ficha_medica_model');//cargar modelo

        

        $id_consulta_medica = $this->input->post("id_consulta_med");

        

        //Cargamos las variables de session (LIBRERIA)

        $data["session"]    =   $this->general_sessions->datosDeSession(); 

        

        $data["active"]     = activeMenu("consulta");//(HELPERS)marca menu (active)

        

        $data["consulta_med"] = $this->ficha_medica_model->info_consulta_med($id_consulta_medica);

        

        //CARGAMOS LAS VISTAS NECESARIAS (VIEW - LIBRERIA)

        $this->load->view('admin/detalle_consulta_medica_view',$data);

    }

    

    //Funcion que permite retornar informacion referente a la revision por sistemas

    public function detalle_rev_sistema(){

        

        $this->load->model('ficha_medica_model');//cargar modelo

        

        $id_consulta_medica = $this->input->post("id_consulta_med");

        

        //Cargamos las variables de session (LIBRERIA)

        $data["session"]    =   $this->general_sessions->datosDeSession(); 

        

        $data["active"]     = activeMenu("consulta");//(HELPERS)marca menu (active)

        

        $data["rev_sist"] = $this->ficha_medica_model->revision_sistemas($id_consulta_medica);

        

        //CARGAMOS LAS VISTAS NECESARIAS (VIEW - LIBRERIA)

        $this->load->view('admin/detalle_revision_sistema_view',$data);

    }

    

    public function detalle_examen_fisico(){

        

        $this->load->model('ficha_medica_model');//cargar modelo

        

        $id_consulta_medica = $this->input->post("id_consulta_med");

        

        //Cargamos las variables de session (LIBRERIA)

        $data["session"]    =   $this->general_sessions->datosDeSession(); 

        

        $data["active"]     = activeMenu("consulta");//(HELPERS)marca menu (active)

        

        $data["examen_fisico"] = $this->ficha_medica_model->examen_fisico($id_consulta_medica);

        //echo "<pre>";print_r($data["examen_fisico"]);exit();

        //CARGAMOS LAS VISTAS NECESARIAS (VIEW - LIBRERIA)

        $this->load->view('admin/detalle_examen_fisico_view',$data);

    }

    

    //Buscar arvhivos multimedias para revisión por sistema

    public function archivos_rev_sis(){

        

        $this->load->model('ficha_medica_model');//cargar modelo

        

        $id_consulta_medica = $this->input->post("id_consulta_med");

        

        $archivos_rs  = $this->ficha_medica_model->archivos_rs($id_consulta_medica);

        

        echo json_encode($archivos_rs);

    }

    

    //Buscar arvhivos multimedias para examen físico

    public function archivos_ex_fisico(){

        

        $this->load->model('ficha_medica_model');//cargar modelo

        

        $id_consulta_medica = $this->input->post("id_consulta_med");

        

        $archivos_rs  = $this->ficha_medica_model->archivos_ef($id_consulta_medica);

        

        echo json_encode($archivos_rs);

    }

    

    //FUNCION QUE PERMITE SOLAMENTE EL BUEN FUNCIONAMIENTO DE LA VISUALIZACION DE LAS IMAGENES

    public function upload_files(){

        

        //Cargamos las variables de session (LIBRERIA)

        $session    =   $this->general_sessions->datosDeSession();

        

        $carpetaAdjunta="./archivos_/";

        // Contar envían por el plugin

        $Imagenes =count(isset($_FILES['imagenes']['name'])?$_FILES['imagenes']['name']:0);

        $infoImagenesSubidas = array();

        for($i = 0; $i < $Imagenes; $i++) {

                    

            // El nombre y nombre temporal del archivo que vamos para adjuntar

            $nombreArchivo  = isset($_FILES['imagenes']['name'][$i])?$_FILES['imagenes']['name'][$i]:null;

            $nombreTemporal = isset($_FILES['imagenes']['tmp_name'][$i])?$_FILES['imagenes']['tmp_name'][$i]:null;



            $rutaArchivo    = $carpetaAdjunta.$nombreArchivo;

            $ruta_src       = base_url()."archivos_/".$nombreArchivo;

            

            $infoImagenesSubidas[$i]=array("caption"=>"$nombreArchivo","height"=>"120px","url"=>"".base_url()."consulta_medica/delete_files","key"=>$nombreArchivo);

            

            $ImagenesSubidas[$i]='';

        }

        

        $arr = array("file_id"=>0,"overwriteInitial"=>true,"initialPreviewConfig"=>$infoImagenesSubidas,

                                 "initialPreview"=>$ImagenesSubidas);

        echo json_encode($arr);

    }

}



