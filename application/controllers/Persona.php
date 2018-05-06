<?php

class Persona extends CI_Controller{
    
    private $parametros= array();
    
    
    
    
    public function __construct() {
        parent::__construct();
         $this->load->model("Consulta_model");
        $this->load->model("Persona_model");
        $this->load->library("pagination");
        $this->load->helper("form");
    }
    
    
    
    public function index(){
        /*******formulario de busqueda ***********/
        $this->paginar();
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
     
    private function set_sql(  $arg){
        $this->parametros= $arg;
        
    }
    private function get_sql(){
     return $this->parametros;   
    }
    
    private function datos_paginacion(){
          $start_index = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $limit_per_page = 30;
        $params['lista']= 
                $this->Persona_model->obt_lista_simply( $limit_per_page, 
                                                        $start_index, 
                                                        $this->get_sql());
        
        $total_records= sizeof($params['lista']);
        
        
        if( $total_records > 0){  
            //Calcular proximo startIndex
           $nextStartIndex=0;

            if($total_records==$limit_per_page ){
                $aux= $start_index+$limit_per_page;
                 $nextStartIndex= $start_index==0? $limit_per_page: $aux;  
            }else{    $nextStartIndex= $total_records; }
            
          $prevStartIndex= $start_index == 0 ? 0 : abs($start_index-$limit_per_page);
        
        
        $enlaceSig= base_url("index.php/Persona/buscar/$nextStartIndex");
        $enlaceAnt=   base_url("index.php/Persona/buscar/$prevStartIndex");
        
        $params['links']= array("next"=> $enlaceSig, "prev"=>$enlaceAnt);
        return $params;
        }else{   return "";        }
    }
    
    
    /**
     * 
     * Muestra cabecera y cuerpo, formulario de busqueda y resultados generales
     * solo se llama una vez, luego solo se actualiza el sector de resultados.
     * A no ser que se solicite esta pagina de nuevo mediante el link de Consultas
     * en el menu principal
     */
    public function paginar(){ 
        //cargar vista
        $xx= $this->datos_paginacion() ;
        if($xx)
        { $this->load->view("Persona/index", $xx );}
        else
         { $this->load->view("templates/sin_datos");}
     
     }
    
     
     /**
      * 
      * Obtiene solo el sector correspondiente a la lista de resultados
      * sin la cabecera que contiene el formulario de busqueda
      */
      public function paginar1(){ 
        //cargar vista
        $this->load->view("Persona/lista", $this->datos_paginacion() );
     }
    
     
     
     
     public function buscar(){
         
         $this->Consulta_model->setNrodoc( $this->input->post("nrodoc" ) );
         $this->Consulta_model->setNombre( $this->input->post("nombre" ) );
         $this->Consulta_model->setApellido( $this->input->post("apellido" ) );
         $this->Consulta_model->setSexo( $this->input->post("sexo" ) );
        $this->Consulta_model->setEdad_max( $this->input->post("edadmax" ) );
         $this->Consulta_model->setEdad_min( $this->input->post("edadmin" ) );
         $this->Consulta_model->setNacio( $this->input->post("nacio" ) );
         $this->Consulta_model->setFechanac( $this->input->post("fechanac" ) );
          $this->Consulta_model->setPrefix_tab("p");
          
          $this->set_sql( $this->Consulta_model->build_sql() ); 
          echo $this->get_sql();
         //$this->paginar1();
       $datos['lista']= $this->Persona_model->search( $this->get_sql());  
       $this->load->view("Persona/lista_tab", $datos );
       }
       
       public function consultar(){
      //$datos['lista']= $this->Persona_model->search();  
       $this->load->view("Persona/index"  );
       }
    
       
       public function tablas(){
         $this->load->view("Persona/index" );
       }
    
}