<?php

  $cod=$_REQUEST['cod'];
  
  $reg="select imagen from usu_ima where id_imagen=$cod";
 
  include"../inc/conesis.php";
  $rcod = $mdb2->query($reg);
  if (PEAR::isError($rcod)) {
     die($rcod->getMessage());
  }   
  $mdb2->disconnect(); 
  $rowfot=$rcod->fetchRow(MDB2_FETCHMODE_ASSOC);
  $sal=$rowfot['imagen'];
  $tipo=trim($rowfot['tipo_ima']);
 //$sal10=base64_decode($sal);
  header('Content-Type: $tipo');
  echo pg_unescape_bytea($sal);	
	//	print $sal10;

 // $foto=base64_decode($rowfot['imagen']);
  // $foto=$rowfot['imagen'];
  // header ("Content-type: image/jpeg");
 //   header ("Content-type: image/PNG");
 // header ("Content-type: {$reg['typefoto']}");
 // echo $foto;
?>

