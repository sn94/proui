
<form name="form-add-persona" role="form" enctype="multipart/form-data" method="post" >

<div class="row"> 
<div class="col-12 col-md-6"> <div class="form-group">

<label for="tipo-ci">Tipo de CI: </label>
<select name="tipo-ci" class="form-control">
<option value="CIP">CI. Provisoria.</option>
<option value="PAS">Pasaporte</option>
<option value="DNI">DNI</option>
<option value="CEX">C&eacute;dula extranjera</option>
<option value="CAT">Carnet Adm. tempo.</option>
<option value="CAP">Carnet Adm. Perma.</option>     
</select>

</div> </div>


<div class="col-12 col-md-6"> <div class="form-group">
<label for="docu-ori">Origen de documento: </label>
<input  type="text" name="docu-ori" class="form-control"/>
</div>  </div>

</div><!-- **************** end row **************** -->



<div class="row">

<div class="col-12 col-md-6">
<div class="form-group">
<label for="nro-ci">N&uacute;mero de c&eacute;dula: </label>
<input  type="text" name="nro-ci" class="form-control"/>
</div>
<div class="form-group">
<label for="txt-per-nombre">Nombres: </label>
<input  type="text" name="txt-per-nombre" class="form-control"/>
</div>
 <div class="form-group">
<label for="txt-per-apellido">Apellidos: </label>
<input  type="text" name="txt-per-apellido" class="form-control"/>
</div>
</div><!-- end col -->


<div class="col-12 col-md-6">
  <div class="form-group">
 <label for="foto-input">Seleccione una foto</label>
<input type="file" name="foto-input" class="fileContainer"   />
 </div>
 
 <img id="foto-persona" class="d-block mx-auto" src="<?= base_url()?>images/nofoto.png"/>
 </div>

</div><!-- **************** end row **************** -->




<div class="row">

<div class="col-12 col-md-6">
<div class="form-group">
<label for="txt-per-nacio">Nacionalidad: </label>
<input type="text" name="txt-per-nacio" class="form-control auto-com-nacio"/>
</div>
 <div class="form-group">
<label for="txt-per-nacio">Nacionalidad de origen: </label>
<input type="text" name="txt-per-nacio-ori" class="form-control auto-com-nacio"/>
</div>
<div class="form-group">
<label for="fecha-nac">Fecha de nacimiento: </label>
<input  type="text" name="fecha-nac" class="form-control sel-fecha"/>
</div>
<div class="form-group">
<label for="domicilio">Domicilio: </label>
<input type="text" name="domicilio" class="form-control"/>
</div>
<div class="form-group">
<label for="barriociu">Barrio-ciudad: </label>
<input type="text" name="barriociu" class="form-control"/>
</div>
  </div><!-- *****end col*** -->


<div class="col-12 col-md-6">
 
<div class="btn-group" data-toggle="buttons">
<label class="btn btn-primary">
<input  type="radio" name="r_sexo"  autocomplete="off"  value="F"/> Femenino </label>
<label class="btn btn-primary active">
<input   type="radio" name="r_sexo" autocomplete="off"  value="M" checked />Masculino</label>

</div> 
 

 

<div class="form-group">
<label for="profesion">Profesi&oacute;n: </label>
<input type="text" class="form-control auto-com-profe" name="profesion"/>
</div>

<div class="form-group">
<label for="estado-civil">Estado civil: </label>
<select name="estado-civil" class="form-control">
<option value="SO">Soltero</option>
<option value="CA">Casado</option>
<option value="SE">Separado</option>
<option value="DI">Divorciado</option>
<option value="VI">Viudo</option>
<option value="ME">Menor</option>  </select>
</div>

<div class="form-group">
<label for="telefono">Tel&eacute;fono: </label>
<input type="text" name="telefono" class="form-control"/>
</div>

<div class="form-group">
<label for="lugnac">Lugar de nacimiento: </label>
<input type="text" name="lugnac" class="form-control"/>
</div>

</div><!-- *****end col*** -->

</div><!-- **************** end row **************** -->

 




 
<div id="accordion-modif-pers">

<div class="card">
<div class="card-header"><h5><a data-toggle="collapse" data-parent="#accordion-modif-pers" href="#acor-1">Datos de la Madre</a></h5></div>
</div>

<div id="acor-1" role="tabpanel" class="collapse" >
<div class="card-block"> 
 
 <div class="form-group">
 <label for="ci-madre">CI. Madre:</label><input  type="text" name="ci-madre" class="form-control"/></div>
  
  <div class="form-group">
 <label for="nom-madre">Nombre. Madre:</label><input  type="text" name="nom-madre" class="form-control"/></div>

 <div class="form-group">
 <label for="ape-madre">Apellido. Madre:</label><input  type="text" name="ape-madre" class="form-control"/></div>
 
</div><!-- end card block -->
</div><!-- end acor-1 -->

	
    
    
<div class="card">
<div class="card-header">	<h5><a class="collapsed" data-toggle="collapse" data-parent="#accordion-modif-pers" href="#acor-2">Datos del Padre</a></h5></div>
<div id="acor-2" class="collapse" role="tabpanel">
<div class="card-block"> 
 <div class="form-group">
 <label for="ci-padre">CI. Padre:</label><input  type="text" name="ci-padre" class="form-control"/></div>
  
  <div class="form-group">
 <label for="nom-padre">Nombre. Padre:</label><input  type="text" name="nom-padre" class="form-control"/></div>

<div class="form-group">
 <label for="ape-padre">Apellido. Padre:</label><input  type="text" name="ape-padre" class="form-control"/></div>
 


</div><!-- end card block -->
</div><!-- end acord 2 -->
</div>
 


<div class="card">
<div class="card-header"><h5><a data-toggle="collapse" href="#acor-3" data-parent="#accordion-modif-pers" class="collapsed">Datos de C&oacute;nyuge</a></h5></div>
<div id="acor-3" class="collapse" role="tabpanel">
<div class="card-block"> 
 <div class="form-group">
 <label for="ci-conyuge">CI. C&oacute;nyuge:</label><input  type="text" name="ci-conyuge" class="form-control"/>
 </div>
<div class="form-group">
 <label for="nom-conyuge">Nombre. C&oacute;nyuge:</label><input  type="text" name="nom-conyuge" class="form-control"/>
 </div>
 
 <div class="form-group">
 <label for="ape-conyuge">Apellido. C&oacute;nyuge:</label><input  type="text" name="ape-conyuge" class="form-control"/>
 </div>
 
</div><!-- end card block -->
</div><!-- acor 3 -->
</div>

 
</div><!-- end accordion -->

<button type="submit" class="btn btn-primary w-100"  >Enviar</button>
</form>
