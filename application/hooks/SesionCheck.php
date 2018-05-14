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
        /***Condiciones empleadas cuando aun no se identifica el usuario ***/
        
        //Cuando no exista una variable de sesion llamada poli_user
       $condicion1= $this->ci_instance->my_session->userdata("poli_user") ==    FALSE;
       //Si en la url, el controlador que se indica no es Usuario y la accion a ejecutar es
       //no es login
       $condicion1_1= ($this->ci_instance->uri->segment(1) !=  "Usuario" && 
               $this->ci_instance->uri->segment(2) !=  "login");
       
       /***********Fin Set 1 de condiciones ****/
       
       
       /***Condiciones empleadas en caso que ya exista una sesion  ***/
       //Si en la url, no se indique controlador o
       //que el controlado llamado sea Usuario, y la accion invocada es 
       //al menos login o index, en su defecto, no se indique accion (metodo)
       $condicion2= $this->ci_instance->uri->segment(1) ==  FALSE ||
              ( $this->ci_instance->uri->segment(1) ==  "Usuario" && 
              (  $this->ci_instance->uri->segment(2) ==  "login" ||
                  $this->ci_instance->uri->segment(2) ==  "index" || 
                  $this->ci_instance->uri->segment(2) ==  FALSE ));
       /*********Fin Set 2 de condiciones  *****/
       
       if( $condicion1){  /**Cuando aun no hay autenticacion**/
            if(  $condicion1_1   ){
               redirect( base_url('index.php/Usuario/login'));
            }   
            
         } else {/**Cuando existe una sesion **/
             
             if( $condicion2  ){
               redirect( base_url('index.php/Welcome'));
            }
         }
           }
    
    
}
