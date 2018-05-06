$(document).ready(function() {
   /******/
    
    $("#form-busqueda").validate(
            {
        rules: { 
            edad: { minlength: 1, maxlength: 3},
           'fecha-nac': { date: true},
            
        },
        messages: { 
            edad : "Ingrese una edad valida",
            'fecha-nac' : "Indique en el formato correcto"
        },
        submitHandler: function(form){ 
            procesarBusqueda( null, form); 
        }
    }    );
 
   /****/
});