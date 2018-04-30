

<div class="row">
     <?php   
        foreach ($lista as $obj){
          ?>

         
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 p-1">
                <div class="card border-success h-100">
                    <img class="card-img-top" src="<?= base_url("assets/img/sin-foto.jpg")?>"  />
                    <div class="card-body">
                        <h5 class="card-title d"><?= $obj->nombre ?> <?= $obj->apellido ?></h5>
                        <p class="card-text"><span class="badge badge-dark"><?= $obj->nrodoc ?></span></p>
                    </div>
                    <div class="card-footer">
     <div class="btn-group align-bottom">
                        <button type="button" class="btn btn-info btn-sm"><i class="fa fa-edit"></i></button> 
                       <button type="button" class="btn btn-info btn-sm"><i class="fa fa-address-card"></i></button>
                       
 <div class="btn-group" role="group">
    <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <i class="fa fa-wrench"></i>
    </button>
    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
      <a class="dropdown-item" href="#">Dropdown link</a>
      <a class="dropdown-item" href="#">Dropdown link</a>
    </div>
  </div>
                        </div>
                     </div>
                </div>
            </div>
           
                 
               
        
            <?php     }?>

      </div>
        