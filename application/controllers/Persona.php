<?php

class Persona extends CI_Controller{
    
    
    
    public function __construct() {
        parent::__construct();
        $this->load->model("Persona_model");
        $this->load->library("pagination");
    }
    
    
    
    public function index(){
        /*******formulario de busqueda ***********/
         $datos['lista']=  $this->Persona_model->obt_lista(15,1);
         $this->load->view("Persona/index", $datos); 
    }
    

    
    public function personales(){
        /* lista ******/
        $datos['lista']=  $this->Persona_model->obt_lista();
        $this->load->view("lista",  $datos ); 
        
    }
    
    
    
    public function paginar(){
         
         
        $start_index = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $limit_per_page = 20;
         

        $total_records= $this->Persona_model->total_registros();
          echo $total_records;
        if( $total_records > 0){
            
        $params['lista']= $this->Persona_model->obt_lista( $limit_per_page, $start_index);
        $config['base_url'] = base_url() . 'index.php/Persona/paginar';
        $config['total_rows'] = $total_records;
        $config['per_page'] = $limit_per_page;
        $config["uri_segment"] = 3;
        
        $this->pagination->initialize($config);
        // construir  links de paginacion
        $params["links"] = $this->pagination->create_links();
        
        //cargar vista
        $this->load->view("Persona/index");
        }else{
            echo "nada que mostrar";
        }
     }
    
    
    
}