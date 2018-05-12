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
        $key = bin2hex($this->encryption->create_key(16)); 
        $config['encryption_key']= hex2bin( $key);
        
        
        //verificar si existe una sesion
        //if($this->session->has_userdata("poli_user")){//ir a menu
            //menu principal
           // $this->load->view("index"); 
        //}else{//mostrar form de login
            $this->load->view("Usuario/index");
        //}
        
    }
    
    
    /***
     * proceso de autenticacion
     */
    public function login(){ 
        
        //comparar
        //$this->Usuario_model->claveCorrecta();
        //
        //obtener credenciales 
        $user= $this->input->post("login-email");
        $pass= $this->input->post("login-password");
        
        //obtener tipo pregunta
        //obtener respuesta  a pregunta
        if( $user && $pass){
           $this->my_session->set_userdata("poli_user",$user);
           $this->my_session->set_userdata("poli_pass",$pass); 
           echo  "Usuario " . $this->my_session->userdata("poli_user");
           //$this->load->view("index");
        }else{ 
             // echo  "Usuario " .$user." ".$pass;
           $this->load->view("Usuario/index"); 
        }
          
        }
    /**
     * end autenticacion
     */
        
        
        
    
    
    
}
