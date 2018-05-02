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
    
    
     private function paginacion(){
         
         
        $start_index = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $limit_per_page = 30;
        $params['lista']= $this->Persona_model->obt_lista( $limit_per_page, $start_index);
        
        $total_records= sizeof($params['lista']);
        //Calcular proximo startIndex
        $nextStartIndex= $total_records==$limit_per_page ? $limit_per_page+1 : $total_records+1;
        echo $nextStartIndex;
        
        if( $total_records > 0){
            
        $config['base_url'] = base_url() . 'index.php/Persona/paginar';
        $config['total_rows'] = $total_records;
        $config['per_page'] = $limit_per_page;
        $config["uri_segment"] = 3;
        
        $this->pagination->initialize($config);
        // construir  links de paginacion
        $params["links"] = $this->pagination->create_links();
        var_dump($params['links']);
        //cargar vista
        $this->load->view("Persona/index", $params);
        }else{
            echo "nada que mostrar";
        }
     }
     
     
    private function datos_paginacion(){
          $start_index = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $limit_per_page = 30;
        $params['lista']= $this->Persona_model->obt_lista( $limit_per_page, $start_index);
        
        $total_records= sizeof($params['lista']);
        
        
        if( $total_records > 0){  
            //Calcular proximo startIndex
           $nextStartIndex=0;

            if($total_records==$limit_per_page ){
                $aux= $start_index+$limit_per_page;
                 $nextStartIndex= $start_index==0? $limit_per_page: $aux;  
            }else{    $nextStartIndex= $total_records; }
            
          $prevStartIndex= $start_index == 0 ? 0 : abs($start_index-$limit_per_page);
        
        
        $enlaceSig= base_url("index.php/Persona/paginar1/$nextStartIndex");
        $enlaceAnt=   base_url("index.php/Persona/paginar1/$prevStartIndex");
        
        $params['links']= array("next"=> $enlaceSig, "prev"=>$enlaceAnt);
        return $params;
        }else{   return "";        }
    }
    
    
    public function paginar(){ 
        //cargar vista
        $this->load->view("Persona/index", $this->datos_paginacion() ); 
     }
    
      public function paginar1(){ 
        //cargar vista
        $this->load->view("Persona/lista", $this->datos_paginacion() ); 
     }
    
    
}