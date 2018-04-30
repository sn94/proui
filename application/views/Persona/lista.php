
<div class="paginas-perso">
    <?php   echo isset($links)? $links : "sin links";  ?>
</div>     
<script>
    $(".paginas-perso a").addClass("btn btn-success");
      $(".paginas-perso strong").addClass("btn btn-primary");
</script>


<?php    foreach ($lista as $obj){  ?>
<!-- Left-aligned -->
<div class="media">
  <div class="media-left">
    <img src="<?= base_url("assets/img/sin-foto.jpg")?>"  class="media-object" style="width:60px">
  </div>
  <div class="media-body">
    <h4 class="media-heading">
        <span class="badge badge-primary"><?= $obj->nrodoc ?> </span>
       <?= $obj->nombre ?> <?= $obj->apellido ?>
    </h4>
    <p>Lorem ipsum...</p>
    <div class="btn-group">
                          <button type="button" class="btn btn-primary"><i class=" fa fa-address-card"></i></button>
                          <button type="button" class="btn btn-primary"><i class="fa fa-edit"></i></button>
                            <div class="btn-group">
                                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                    Sony <span class="caret"></span></button>
                            <ul class="dropdown-menu" role="menu">
                              <li><a href="#">Tablet</a></li>
                              <li><a href="#">Smartphone</a></li>
                            </ul>
                            </div>
                        </div> 
  </div>
</div>
          
        
            <?php     }?>
 