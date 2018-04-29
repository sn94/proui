<?php

class Persona extends CI_Controller{
    
    
    
    public function __construct() {
        parent::__construct();
        //$this->load->database();
    }
    
    
    
    public function index(){
        $this->load->view("Persona/index");
    }
    

    
    public function datos_personales(){
        
    }
    
    
    
    
    
    
}