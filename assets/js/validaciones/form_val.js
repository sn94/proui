$(document).ready(function() {
   /******/
    
    $("#form-busqueda").validate(
            {
        rules: {
            nrodoc: {  minlength: 2},
            nombre: { minlength: 2},
            apellido: { required:true },
            edad: { minlength: 2},
            'fecha-nac': { required: true},
            nacio: { required:true, minlength: 2}
        },
        messages: {
            nrodoc: "Debe introducir su nombre.",
            nombre: "Debe introducir su apellido.",
            apellido : "Debe introducir un email válido.",
            edad : "El número de teléfono introducido no es correcto.",
            'fecha-nac' : "Debe introducir solo números.",
            nacio : "El campo Mensaje es obligatorio.",
        },
        submitHandler: function(form){
           var accion= $(form).attr("action"); 
            var dataString = $(form).serialize();
            pedirVista(  accion,"#person-result", dataString);
             
        }
    }    );
 
   /****/
});