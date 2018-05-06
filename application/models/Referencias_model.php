<?php

class Referencias_model extends CI_Model{
    
    
public function __construct(){
   parent::__construct();
   $this->load->database();
   
}  
    
public function codigo_nacionalidad($arg){
    $condicion="  where descrip ilike '%$arg%'";
$query= $this->db->query("select idnacio from nacio  $condicion");
$queryr=  $query->row();
return $queryr->idnacio;
  
    
}

public function nacionalidadJson($arg=""){
    
$query= $this->db->query("select idnacio, descrip from nacio " );
$queryr=  $query->result_array();
return json_encode($queryr);
 }

 

 


public function profesiones($arg=""){
$condicion="";
if( $arg !=""){
    $arg=  strtolower(trim( $arg ));
    $condicion=" where lower(trim(descripcion)) like '%$arg%'";
}
$query= $this->db->query("select idprofesiones, descripcion from profesiones $condicion");
$queryr=  $query->result_array(); 
 return $queryr;
}

public function profesiones_json(){

$query= $this->db->query("select idprofesiones, descripcion from profesiones");
$queryr=  $query->result_array();
$resjson=  json_encode($queryr);
 return $resjson;
}






public function lugarFallecimiento($arg=""){
    $condicion="";
if( $arg !=""){
    $arg=  strtolower(trim( $arg ));
    $condicion=" where lower(trim(descrip)) like '%$arg%'";
}
$query= $this->db->query("select id, descrip from fallecidos.lugar_falleci $condicion");
$queryr=  $query->result_array();
 return $queryr;
}

public function causaFallecimiento($arg=""){
    $condicion="";
if( $arg !=""){
    $arg=  strtolower(trim( $arg ));
    $condicion=" where lower(trim(descrip)) like '%$arg%'";
}

$query= $this->db->query("select id, descrip from fallecidos.causa  $condicion");
$queryr=  $query->result_array();
 return $queryr;
}

public function circunstanciaFallecimiento( $arg=""){
       $condicion="";
if( $arg !=""){
    $arg=  strtolower(trim( $arg ));
    $condicion=" where lower(trim(descrip)) like '%$arg%'";
}
$query= $this->db->query("select id, descrip from fallecidos.circunstancia $condicion");
$queryr=  $query->result_array();
 return $queryr;
}




public function lugarExpedicion(){
       
$sql = "select id,usuario,lugexp,costo,costo_desc from certificado.inicerti";
$res= $this->db->query( $sql );
$re= $res->result_array();
return $re;
}

    
    
    
}