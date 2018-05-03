<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Referencia extends CI_Controller{
    
    
    
    function __construct() {
        parent::__construct();
        $this->load->model("Referencias_model");
    }
    
    
    
    public function nacionalidad(){
        echo $this->Referencias_model->nacionalidadJson();
    }
    
    
    
    
    
    
    
    
}