<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Login
 *
 * @author Sonia
 */
class Usuario extends CI_Controller {
    
    
    public function __construct() {
        parent::__construct();
        $this->load->model("Usuario_model");
    }
    
    
    /**
     * formulario para inicio de sesion
     */
    public function index(){
        
        $this->load->view("Usuario/index");
    }
    
    
    /***
     * proceso de autenticacion
     */
    public function login(){ 
        
        //comparar
        //$this->Usuario_model->claveCorrecta();
        
        if(true){  //opcion correcta
            
            //crear la sesion
            
            //menu principal
            $this->load->view("index"); 
        }else{
            //clave invalida 
            $this->load->view("Usuario/index"); 
        }
        }
    /**
     * end autenticacion
     */
        
        
        
    
    
    
}
