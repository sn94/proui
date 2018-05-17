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
  
  
   
    
    
    
  public function byCi(  $arg){
      $sql="select p.nrodoc,concat(p.nombre,concat(' ',p.apellido)) as nombre,p.fechanac,"
           . "p.lugnac, n.descrip as nacio, n1.descrip as nacioori,pr.descripcion as profesion,"
              . "(case when p.sexo='M' then (
  case when p.estado_civil='SO' then 'SOLTERO' 
   when p.estado_civil='CA' then 'CASADO' 
   when p.estado_civil='SE' then 'SEPARADO' 
   when p.estado_civil='DI' then 'DIVORCIADO' 
   when p.estado_civil='VI' then 'VIUDO' 
   when p.estado_civil='ME' then 'MENOR'  end ) 
  else  (
  case when p.estado_civil='SO' then 'SOLTERA' 
   when p.estado_civil='CA' then 'CASADA' 
   when p.estado_civil='SE' then 'SEPARADA' 
   when p.estado_civil='DI' then 'DIVORCIADA' 
   when p.estado_civil='VI' then 'VIUDA' 
   when p.estado_civil='ME' then 'MENOR'  end )     end ) as estado_civil,p.domicilio,coalesce(p.barrio_ciudad,'****') as barrio_ciudad,"
              . "p.telefono,p.celular,  p.nacio_orig "
           . "from {$this->tabla} p join nacio n on n.idnacio=p.nacio "
           . "join nacio n1 on n1.idnacio=p.nacio_orig "
                   . " join profesiones pr on pr.idprofesiones=p.profesion "
                   . "where p.nrodoc='$arg' ";
       $quer= $this->db->query( $sql);  
  $res= $quer->row();   return $res; 
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
  $res= array();
  while ($row = $quer->unbuffered_row())
    {   array_push($res, $row);}

   //$res= $quer->result();//  Retorna una lista o arreglo de objetos
   //$jsondata= json_encode($res);
   return $res;  
  }
  
  
}
