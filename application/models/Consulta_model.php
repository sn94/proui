<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Consulta_model extends CI_Model{
    
  private $nrodoc;
  private $nombre;
  private $apellido;
  private $edad_min;
  private $edad_max;
  private $nacio;
  private $sexo;
  private $fechanac;
  
  
  
  private $prefix_tab= "";
  
  
  private $wheres= array();
  private $sql_string="";
  private $sql_base= "select p.nrodoc,p.nombre,p.apellido,c.est_jud as situacion"
                 . " from personas p left join cap001 c on c.cidcap=p.nrodoc";








  public function __construct() {
        parent::__construct();
    }
    
    public function getNrodoc() {
        return $this->nrodoc;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getApellido() {
        return $this->apellido;
    }

    public function getEdad_min() {
        return $this->edad_min;
    }

    public function getEdad_max() {
        return $this->edad_max;
    }

    public function getNacio() {
        return $this->nacio;
    }

    public function getSexo() {
        return $this->sexo;
    }

    public function getFechanac() {
        return $this->fechanac;
    }

    public function getPrefix_tab() {
        return $this->prefix_tab;
    }

    public function setNrodoc($nrodoc) {
        $this->nrodoc = $nrodoc;
    }

    public function setNombre($nombre) {
        $this->nombre = mb_convert_case($nombre, MB_CASE_UPPER, "utf-8");
    }

    public function setApellido($apellido) {
        $this->apellido = mb_convert_case($apellido, MB_CASE_UPPER, "utf-8");
    }

    public function setEdad_min($edad_min) {
        $this->edad_min = $edad_min;
    }

    public function setEdad_max($edad_max) {
        $this->edad_max = $edad_max;
    }

    public function setNacio($nacio) {
        $this->nacio = $nacio;
    }

    public function setSexo($sexo) {
        if($sexo=='I')
        {$this->sexo = "";}
        else{
            $this->sexo = $sexo;
        }
    }

    public function setFechanac($fechanac) {
        $this->fechanac = $fechanac;
    }

    public function setPrefix_tab($prefix_tab) {
        $this->prefix_tab = $prefix_tab;
    }

    public function setSqlBase( $arg){
        $this->sql_base= $arg;
    }
 
   public function getSqlBase( ){
      return   $this->sql_base ;
    }



    /*** Clausulas where individuales ***/
    
private function porNrodoc(){
    $value1= $this->getPrefix_tab().".nrodoc ='".$this->getNrodoc()."'";
    array_push($this->wheres, $value1) ;
}





private function porNombre(){
    if( $this->getNombre() ){
       $nom_com= $this->getNombre()." ".$this->getApellido();
       
       $nom= $this->getPrefix_tab().".nombre";
       $ape= $this->getPrefix_tab().".apellido"; 
       $pr_cadena=  explode(' ', $nom_com );
      
        $value1=  " concat($nom, concat(' ',$ape)) like '";
        foreach( $pr_cadena as $pr ){ 
        $value1=  $value1."%".$pr."%"; }
        $value1= $value1."'";
        
        array_push($this->wheres, $value1); 
    } 
}
           
    

private function porFechaNac(){
    
   $campo= $this->getPrefix_tab().".fechanac";
    if( $this->getFechanac()){
       $fec= $this->getFechanac();
       array_push( $this->wheres, " $campo = '$fec' ");
    }
}




private function porEdad(){
    
    if( !$this->getFechanac()){
    $edadd= $this->getPrefix_tab().".fechanac";
    if( $this->getEdad_min()){
       $edadmi= $this->getEdad_min();
       array_push( $this->wheres,  "extract( year from age($edadd) ) >=  $edadmi "); 
    } 
    if( $this->getEdad_max()){
     $edadma= $this->getEdad_max();
      array_push( $this->wheres,  "extract( year from age($edadd) ) >=  $edadma ");   
    }
    
    }
}




private function porNacionalidad(){
    if( $this->getNacio()){
     $campo= $this->getPrefix_tab().".nacio";
     $val= $this->getNacio();
     array_push( $this->wheres, " $campo = $val");
 }
   }
   
   
   private function porSexo(){
       if( $this->getSexo()){
          $campo= $this->getPrefix_tab().".sexo";
     $val= $this->getSexo();
     array_push( $this->wheres, "$campo = '$val'"); 
       }
   }
           
        function build_sql(){ 
        $pref= $this->getPrefix_tab().".";
        
        $this->sql_string= $this->getSqlBase();
        
        if( $this->getNrodoc() ){
            $this->porNrodoc();
        }else{
            $this->porNombre();
            $this->porFechaNac();
            $this->porEdad();
            $this->porNacionalidad();
            $this->porSexo();
             
        } 
        $clauw= implode(" and ", $this->wheres);
        if( $this->wheres){ 
        $this->sql_string.=" where $clauw ";
        }
         
        
        return $this->sql_string;
                    }
}