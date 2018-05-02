<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


class Persona_model extends CI_Model{
 

  private $tabla= "personas";




  public function __construct() {
        parent::__construct();
        $this->load->database();// carga db trabajo
    }
    
    
    
   /********
    * Metadatos
    * 
    * 
    */ 
  
    
    
    
  public function campos(){
     return  $this->db->list_fields( $this->tabla );
  }
  
  
//  public function  total_registros(){
//    $valor= $this->db->count_all( $this->tabla ); return $valor;
//  }

 
  public function  total_registros(){
      $this->db->select("select nrodo*) as numrows");
      $quer= $this->db->get("personas");
    $valor= $quer->row()->numrows; return $valor;
  }





  /*********
   * 
   * Recuperacion de datos
   * 
   * 
   * 
   */
  
  public function obt_lista($nro_rows, $desde_nro_fila){
   $quer= $this->db->query("select * from {$this->tabla} limit $nro_rows offset $desde_nro_fila");   
   $res= $quer->result();//  Retorna una lista o arreglo de objetos
   return $res;
      
  }
  
  
  
  
    
    
    
    
    
    
}
