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
    
    private function encriptar_pass($ar){
        // Switch back to the OpenSSL driver
        $this->encryption->initialize(
                array('driver' => 'openssl',
                       'key' => '<a 16-character random string>'
                    ));
      $encri= $this->encryption->encrypt( $ar); //encriptado de la libreria
      $sha1_str= sha1($ar);
      $md5_str=  md5($ar)."<br>";
    }
    
    
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
            
         $this->encriptar_pass( $pass ); 
         redirect(base_url("index.php/Welcome")) ; 
         
        }else{  
           $this->load->view("Usuario/index"); 
        } 
        }
    /**
     * end autenticacion
     */
        
        
        
        
        
        
        public function log_out(){
            $this->my_session->sess_destroy();
            redirect(base_url("index.php/Usuario"));
        }
    
        
        
    
    
}
