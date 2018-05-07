<style>
    td.details-control {
    background: url('../resources/details_open.png') no-repeat center center;
    cursor: pointer;
}
tr.details td.details-control {
    background: url('../resources/details_close.png') no-repeat center center;
}

</style>

<table id="people-table" class="display" style="width:100%">
        <thead>
            <tr>
                <th></th>
                <th>Nrodoc</th>
                <th>First name</th>
                <th>Last name</th>
                <th>Fecha de nac.</th> 
            </tr>
        </thead>
        <tfoot>
            <tr>
               <th></th>
                <th>Nrodoc</th>
                <th>First name</th>
                <th>Last name</th>
                <th>Fecha de nac.</th> 
            </tr>
        </tfoot>
    </table>

<script>

function format ( d ) {
    return 'Full name: '+d.nombre+' '+d.apellido+'<br>'+
        'Birthday: '+d.fechanac+'<br>'+
        'The child row can contain any data you wish, including links, images, inner tables etc.';
}
 
$(document).ready(function() {
    var dt = $('#people-table').DataTable( {
        "processing": true,
        "serverSide": true,
        "ajax": {
            "url": "<?= base_url("index.php/Persona/data_json")?>",
            "method": "POST"
        },
        "columns": [
            {
                "class":          "details-control",
                "orderable":      false,
                "data":           null,
                "defaultContent": ""
            },
            
            { "data": "nombre" },
            { "data": "apellido" },
            { "data": "fechanac" } 
        ],
        "order": [[1, 'asc']]
    } );
 
    // Array to track the ids of the details displayed rows
    var detailRows = [];
 
    $('#people-table tbody').on( 'click', 'tr td.details-control', function () {
        var tr = $(this).closest('tr');
        var row = dt.row( tr );
        var idx = $.inArray( tr.attr('id'), detailRows );
 
        if ( row.child.isShown() ) {
            tr.removeClass( 'details' );
            row.child.hide();
 
            // Remove from the 'open' array
            detailRows.splice( idx, 1 );
        }
        else {
            tr.addClass( 'details' );
            row.child( format( row.data() ) ).show();
 
            // Add to the 'open' array
            if ( idx === -1 ) {
                detailRows.push( tr.attr('id') );
            }
        }
    } );
 
    // On each draw, loop over the `detailRows` array and show any child rows
    dt.on( 'draw', function () {
        $.each( detailRows, function ( i, id ) {
            $('#'+id+' td.details-control').trigger( 'click' );
        } );
    } );
} );



 
</script>