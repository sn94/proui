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
  
 
   





  /*********
   * 
   * Recuperacion de datos
   * 
   * 
   * 
   */
  
  
  
  public function obt_lista_simply($nro_rows, $desde_nro_fila, $params= ""){
  $sql=""; 
 
      if( !$params){
           $sql="select p.nrodoc,p.nombre,p.apellido,"
           . "(case c.est_jud when 'ANTE' then 'Tiene antecedentes' "
           . "else 'No tiene antecedentes' end) as situacion "
           . "from {$this->tabla} p join cap001 c "
   . "on c.cidcap=p.nrodoc limit $nro_rows offset $desde_nro_fila";
      }else{
          $sql= "$params limit $nro_rows offset $desde_nro_fila";
      }
   
     
   $quer= $this->db->query( $sql);   
   $res= $quer->result();//  Retorna una lista o arreglo de objetos
   return $res;   
  }
  
  
  
  
  
  /***Recupera todos los campos ************/
  public function obt_lista($nro_rows, $desde_nro_fila){
   $quer= $this->db->query("select * from {$this->tabla} limit $nro_rows offset $desde_nro_fila");   
   $res= $quer->result();//  Retorna una lista o arreglo de objetos
   return $res;   
  }
  
  
  
  public function obt_lista_custom($nro_rows, $desde_nro_fila){
      
      //campos
      
      //condicion
      
      //tabla
      
   $quer= $this->db->query("select * from {$this->tabla} limit $nro_rows offset $desde_nro_fila");   
   $res= $quer->result();//  Retorna una lista o arreglo de objetos
   return $res;   
  }
  
  
   
    
    
    
     public function search( $params= ""){
  $sql=""; 
 
      if( !$params){
           $sql="select p.nrodoc,concat(p.nombre,concat(' ',p.apellido)) as nombre,"
           . "  c.est_jud  as situacion "
           . "from {$this->tabla} p join cap001 c "
   . "on c.cidcap=p.nrodoc where concat p.nombre like 'JHON%' LIMIT 100";
          
      }else{
          $sql= "$params ";  
      }
       
  $quer= $this->db->query( $sql);   
   $res= $quer->result();//  Retorna una lista o arreglo de objetos
   //$jsondata= json_encode($res);
   return $res;  
  }
  
  
}
