<?php if (!defined('BASEPATH')) exit('No permitir el acceso directo al script');

/* *

 *   LIBRERIA CONTROL DE VISTAS: PERMITE CONTROLAR LAS VISTAS QUE SE DESEAN 

 *   UTILIZAR

 *   version 1.0

*/

class Gestion_View{

    

    var $CI;

    

    function Gestion_view()

    {   

        $this->CI =& get_instance();  

        $this->CI->load->helper('url');

    }

    

    /******************************************************************/

    /** @Function que permite retornar las vistas utilizadas

    /******************************************************************/

    public function defaultAdminView($view,$data){

        

        $this->CI->load->view('templates/admin/header_app_view',$data);

        $this->CI->load->view('templates/admin/navigation_view',$data);

        $this->CI->load->view('templates/admin/navbar_header_view',$data);

        $this->CI->load->view('templates/admin/heading_view',$data);

        $this->CI->load->view('admin/'.$view,$data);

        $this->CI->load->view('templates/admin/footer_content_view');

        $this->CI->load->view('templates/admin/footer_app_view',$data);

    }

      public function defaultPacienteView($view,$data){

        

        $this->CI->load->view('templates/admin/header_app_view',$data);

        $this->CI->load->view('templates/admin/navigation_view',$data);

        $this->CI->load->view('templates/admin/navbar_header_view',$data);

        $this->CI->load->view('templates/admin/heading_view',$data);

        $this->CI->load->view('admin/'.$view,$data);

        $this->CI->load->view('templates/admin/footer_content_view');

        $this->CI->load->view('templates/admin/footer_app_view',$data);

    }

    

    public function defaultAdminViewConsultaMed($view,$data){

        

        $this->CI->load->view('templates/admin/header_consulta_med_view',$data);

        $this->CI->load->view('templates/admin/navigation_view',$data);

        $this->CI->load->view('templates/admin/navbar_header_view',$data);

        $this->CI->load->view('templates/admin/heading_view',$data);

        $this->CI->load->view('admin/'.$view,$data);

        $this->CI->load->view('templates/admin/footer_content_view');

        $this->CI->load->view('templates/admin/footer_consulta_med_view',$data);

    }

    

    public function viewsAgenda($view,$data){
        

        $this->CI->load->view('templates/admin/header_agenda_view',$data);

        $this->CI->load->view('templates/admin/navigation_view',$data);

        $this->CI->load->view('templates/admin/navbar_header_view',$data);

        $this->CI->load->view('templates/admin/heading_view',$data);

        $this->CI->load->view('admin/'.$view,$data);

        $this->CI->load->view('templates/admin/footer_content_view');

        $this->CI->load->view('templates/admin/footer_app_view',$data);

    }

    

}



/* End of file Files.php */ 