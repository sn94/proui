<div class="panel panel-danger" id="validation-msg">
    
</div>
<?php   
$atributos= array( "class"=> "form-inline", 
                    "onsubmit"=>"procesarBusqueda(event,this)",
                    "id"=>"form-busqueda");
echo form_open("Persona/buscar", $atributos )  ?> 

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
     <label for="edad" class="sr-only">Edad:</label>
     <input type="text" class="form-control" name="edad" placeholder="Edad">
  </div>
 <div class="form-group">
     <label for="fecha-nac" class="sr-only">Fecha de nacimiento:</label>
     <input type="text" class="form-control sel-fecha" name="fecha-nac" placeholder="YYYY/MM/dd">
  </div>
 <div class="form-group">
     <label for="nacio" class="sr-only">Nacionalidad:</label>
     <input type="text" class="form-control nacio-complete" name="nacio" placeholder="Nacionalidad">
  </div>
<div class="radio">
    <label><input type="radio" name="sexo" value="M">Masculino</label>
</div>
<div class="radio">
    <label><input type="radio" name="sexo" value="F">Femenino</label>
</div>
<div class="radio">
    <label><input type="radio" name="sexo" value="I"  checked="true">Indistinto</label>
</div>


<button type="submit" class="btn btn-primary">Buscar</button>
  
  
</form> 
<script type="text/javascript">
 $( function(){
     
     $(".nacio-complete").autocomplete( { source: list_nacions} );
  console.log( objDate );
   var objd= {
   inline: true, dateFormat:"yy-mm-dd",
   dayNames: [ "Domingo", "Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sabado" ],
   dayNamesMin: [ "Do", "Lu", "Ma", "Mi", "Ju", "Vi", "Sa``" ],
   monthNames: [ "Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre" ]
};
  $(".sel-fecha").datepicker(  { dateFormat: "yy-mm-dd"});
  
  
  
 });
</script>