<?php

class Persona extends CI_Controller{
    
    private $parametros= array();
    
    
    
    
    public function __construct() {
        parent::__construct();
         $this->load->model("Consulta_model");
        $this->load->model("Persona_model"); 
        $this->load->helper("form");
    }
    
    
    
    
    
    
     
    
     
      /*******Muestra solo el formulario de busqueda y una tabla sin resultados
        * es la vista inicial ***
        */
       public function index(){
      //$datos['lista']= $this->Persona_model->search();  
       $this->load->view("Persona/index"  );
       }
    
    
     
       
       //Vista individualizada
       public function view($nrodoc=""){
           $data['datos']= $this->Persona_model->byCi($nrodoc);
           $this->load->view("Persona/view", $data);
       }
       
       /**********Recibe los parametros de busqueda y forma un string sql
      * especifico
      */
     public function buscar( ){  
       $datos['lista']= $this->Persona_model->search( $this->Consulta_model->build_sql()  );  
       $this->load->view("Persona/lista_tab", $datos );
        
     }
       
       

    public function data_json(){
         $this->load->model("Datatables_model");
        echo $this->Datatables_model->obtener_json();
                 
     }
       
        public function data_tables(){
         $this->load->view("Persona/datatabla"); 
        }
      
       
        
}