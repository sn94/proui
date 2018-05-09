<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Usuario_model
 *
 * @author Sonia
 */
class Usuario_model extends CI_Model {
    
    
    
    public function __construct() {
        parent::__construct();
        $this->load->database("sistema");
    }
    
    
    
    
    
    public function existUserByName( $arg){
        $sql= "select codigo from usuario where usugra='$arg'";
        $res= $this->db->query( $sql );
        if($res){
            $row= $res->row();
            return isset($row); 
        }else{
            return false;
        }    
    }
    
    
    //136dbc33331e292746b7e051e22b0b74 carrilloh
        public function existUserByCI( $arg){
        $sql= "select codigo from usuario where nroced='$arg'";
        $res= $this->db->query( $sql );
        if($res){
            $row= $res->row();
            return isset($row); 
        }else{
            return false;
        }    
    }
    
    
    public function existUserByCod( $arg){
        $sql= "select codigo from usuario where codigo='$arg'";
        $res= $this->db->query( $sql );
        if($res){
            $row= $res->row();
            return isset($row); 
        }else{
            return false;
        }    
    }
    
    
    
    public function claveCorrecta(){
        //recibir usuario y clave
        $user= $this->input->post("login-email") ;
        $clav= $this->input->post("login-password");  
        //veri
        $sql= "select contrase from usuario where usugra='$user'";
        $res= $this->db->query( $sql );
        if($res){
            $row= $res->row();
            $clavebd= $row->contrase;
            if( $clavebd == $clav){
                return true;
            }
            return false;
        }else{
            return false;
        }
    }
    
    
    
    
    

    
    
    
}
