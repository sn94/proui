
<table id="table-id" class="table table-vcenter table-condensed table-bordered">
    <thead>
        <tr>  <th>Foto</th> <th>Nrodoc</th><th>Nombre</th><th>Situacion</th></tr>
 </thead>
 <tbody>
     
     <?php 
     if( isset($lista)):
     foreach ($lista as $ele):?>
     
        <tr>
            <td><img src="<?= base_url("assets/img/sin-foto.jpg")?>" / width="100" height="100"></td>
            
            <td><a onclick="view_person( event, this)" href="#"><?=  $ele->nrodoc?></a></td>
            <td><?=  $ele->nombre." ".$ele->apellido?></td>
            <td><?=  $ele->situacion?></td></tr>
        
        
      <?php endforeach;endif; ?> 
 </tbody>
 
   <tfoot>
        <tr>  <th>Foto</th>  <th>Nrodoc</th><th>Nombre</th><th>Situacion</th></tr>
 </tfoot>
</table>


<script >
    
$(document).ready(  function(){   
     $('#table-id').DataTable();  
    })    ;

</script>
    