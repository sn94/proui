<?php
if( isset($datos)){?>
    

<dl>
    <dt>CI&deg;</dt>
    <dd><?= $datos->nrodoc?></dd>
    <dt>Nombre completo</dt>
    <dd><?= $datos->nombre?></dd>
    <dt>Fecha de  nacimiento:</dt>
    <dd><?= $datos->fechanac?></dd>
    <dt>Lugar de nacimiento:</dt>
    <dd><?= $datos->lugnac?></dd>
    <dt>Nacionalidad:</dt>
    <dd><?= $datos->nacio?></dd>
    <dt>Nacionalidad de origen:</dt>
    <dd><?= $datos->nacioori ?></dd>
    <dt>Profesi&oacute;n:</dt>
    <dd><?= $datos->profesion?></dd>
    <dt>Estado civil:</dt>
    <dd><?= $datos->estado_civil?></dd>
    <dt>Domicilio:</dt>
    <dd><?= $datos->domicilio?></dd>
    <dt>Barrio ciudad:</dt>
    <dd><?= $datos->barrio_ciudad?></dd>
    <dt>Tel&eacute;fono</dt>
    <dd><?= $datos->telefono?></dd>
    <dt>Celular:</dt>
    <dd><?= $datos->celular?></dd>
</dl>



<?php } ?> 
