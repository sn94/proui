<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of SesionCheck
 *
 * @author Sonia
 */
if(!defined('BASEPATH')) {exit('No direct script access allowed');}


class SesionCheck {
    //put your code here
    private $ci_instance;
    
    
    
    public function __construct() {
        $this->ci_instance=& get_instance();   
    }
    
    
    
    
    public function check_auth(){
       //if( isset($_SESSION['poli_user']) == FALSE){
         if($this->ci_instance->my_session->userdata("poli_user") ==    FALSE){ 
            if( ($this->ci_instance->uri->segment(1) !=  "Usuario" && 
               $this->ci_instance->uri->segment(2) !=  "login")    ){
               redirect( base_url('index.php/Usuario/login'));
            }   } 
           }
    
    
}
