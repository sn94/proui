
<table id="table-id" class="table table-vcenter table-condensed table-bordered">
    <thead>
        <tr><th>Nrodoc</th><th>Nombre</th><th>Situacion</th></tr>
 </thead>
 <tbody>
     
     <?php 
     if( isset($lista)):
     foreach ($lista as $ele):?>
     
        <tr>
            <td><a onclick="persona.show( event)" href="#"><?=  $ele->nrodoc?></a></td>
            <td><?=  $ele->nombre." ".$ele->apellido?></td>
            <td><?=  $ele->situacion?></td></tr>
        
        
      <?php endforeach;endif; ?> 
 </tbody>
 
   <tfoot>
        <tr> <th>Nrodoc</th><th>Nombre</th><th>Situacion</th></tr>
 </tfoot>
</table>


<script >
    
$(document).ready(  function(){   
     $('#table-id').DataTable();  
    })    ;

</script>
    