 

<?php   
// "onsubmit"=>"procesarBusqueda(event,this)",
$atributos= array( "class"=> "form-inline", 
                   
                    "id"=>"form-busqueda");
$ocultos= array( "nacio"=> "226", "aniomin"=> "", "aniomax"=>"");

echo form_open("Persona/buscar", $atributos , $ocultos)  ?> 

<div class="form-group">
    <label for="nrodoc" class="sr-only">Nro. CI&deg;:</label>
    <input type="text" class="form-control" name="nrodoc" placeholder="Nro. Doc.">
  </div>

  <div class="form-group">
    <label for="nombre" class="sr-only">Nombre:</label>
    <input type="text" class="form-control" name="nombre" placeholder="Nombre(s)">
  </div>
  <div class="form-group">
      <label for="apellido" class="sr-only">Apellido:</label>
    <input type="text" class="form-control" name="apellido" placeholder="Apellido(s)">
  </div>
 <div class="form-group">
     <label for="fecha-nac" class="sr-only">Fecha de nacimiento:</label>
     <input type="text" class="form-control sel-fecha" name="fecha-nac" placeholder="Fecha de nac.">
  </div>

 <div class="form-group">
     <label for="edad" class="sr-only">Edad m&iacute;nima:</label>
     <input type="text" class="form-control" name="edadmin" placeholder="Edad min.">
  </div>
 <div class="form-group">
     <label for="edad" class="sr-only">Edad m&aacute;xima:</label>
     <input type="text" class="form-control" name="edadmax" placeholder="Edad max.">
  </div>

 <div class="form-group">
     <label for="nacio" class="sr-only">Nacionalidad:</label>
     <input type="text" class="form-control nacio-complete" name="nacio-des" placeholder="Nacionalidad">
  </div>
<div class="radio">
    <label><input type="radio" name="sexo" value="M" checked="true">Masculino</label>
</div>
<div class="radio">
    <label><input type="radio" name="sexo" value="F">Femenino</label>
</div> 


<button type="submit" class="btn btn-primary">Buscar</button>
  
  
</form> 
<script src="<?= base_url("assets/js/validaciones/form_val.js")?>"></script>
<script type="text/javascript">
    
    
 $( function(){ 
 $(".nacio-complete").autocomplete( { source: list_nacions} );
$(".sel-fecha").datepicker(  objDate  );
  
 });
</script>