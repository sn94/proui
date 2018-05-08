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
    }
    
    
    public function index(){
        
        $this->load->view("Usuario/index");
    }
    
    
    public function login(){
        
        //recibir usuario y clave
        
        //obtener dato de clave de usuario
        
        //comparar
        
        //opcion correcta
        if($this->input->post("login-email") == "sonia@gmail.com"){
            echo "Logueado";
        }
        //clave invalida
        else{
            $this->load->view("Usuario/index");
        }
        
    }
    
    
    
    
}
