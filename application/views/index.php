<?php 
 $sql ="select nrodoc,nombre,apellido,fechanac,lugnac "
         . "from personas where nombre ilike 'VICTOR%' and apellido ilike 'ROMERO%'";
 
 /*     include"inc/cone98.php"; 
     $rs = $mdb2->query($sql);
     if (PEAR::isError($rs)) {
        // die($rs->getMessage());
		print 'Error. '.$sql;
		exit();
     }
     $mdb2->disconnect();  
	 $nn=0;
	 while ($row = $rs->fetchRow(MDB2_FETCHMODE_ASSOC)){ 
	    $nrodoc[$nn]=$row['nrodoc'];
	    $nombre[$nn]=$row['nombre'];
	    $apellido[$nn]=$row['apellido'];
	    $fechanac[$nn]=$row['fechanac'];
		$lugnac[$nn]=$row['lugnac'];
		$nn++;
	 }	*/ 
 
?>
<!DOCTYPE html>
<!--[if IE 9]>         <html class="no-js lt-ie10" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> 

<html class="no-js" lang="en"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">

        <title>Sistema de Informaci&oacute;n Policial</title>

        <meta name="description" content="ProUI is a Responsive Bootstrap Admin Template created by pixelcave and published on Themeforest.">
        <meta name="author" content="pixelcave">
        <meta name="robots" content="noindex, nofollow">
        <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0">


        <!-- Icons -->
        <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
        <link rel="shortcut icon" href="<?= base_url("assets")?>/img/cachito.png">
        <link rel="apple-touch-icon" href="<?= base_url("assets")?>/img/icon57.png" sizes="57x57">
        <link rel="apple-touch-icon" href="<?= base_url("assets")?>/img/icon72.png" sizes="72x72">
        <link rel="apple-touch-icon" href="<?= base_url("assets")?>/img/icon76.png" sizes="76x76">
        <link rel="apple-touch-icon" href="<?= base_url("assets")?>/img/icon114.png" sizes="114x114">
        <link rel="apple-touch-icon" href="<?= base_url("assets")?>/img/icon120.png" sizes="120x120">
        <link rel="apple-touch-icon" href="<?= base_url("assets")?>/img/icon144.png" sizes="144x144">
        <link rel="apple-touch-icon" href="<?= base_url("assets")?>/img/icon152.png" sizes="152x152">
        <link rel="apple-touch-icon" href="<?= base_url("assets")?>/img/icon180.png" sizes="180x180">
        <!-- END Icons -->


        <!-- Stylesheets -->
        <!-- Bootstrap is included in its original form, unaltered-->
    
        <link rel="stylesheet" href="<?= base_url("assets")?>/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?= base_url("assets")?>/css/jquery-ui.min.css"> 

  
        <!-- Related styles of various icon packs and plugins -->
        <link rel="stylesheet" href="<?= base_url("assets")?>/css/plugins.css">

        <!-- The main stylesheet of this template. All Bootstrap overwrites are defined in here -->
        <link rel="stylesheet" href="<?= base_url("assets")?>/css/main.css">

        <!-- Include a specific file here from css/themes/ folder to alter the default theme of the template -->

        <!-- The themes stylesheet of this template (for using specific theme color in individual elements - must included last) -->
        <link rel="stylesheet" href="<?= base_url("assets")?>/css/themes.css">
        <!-- END Stylesheets -->

         <!-- Modernizr (browser feature detection library) -->
       
       <script src="<?= base_url("assets")?>/js/vendor/modernizr.min.js"></script>
        
       
       </head>
    <body>
        <!-- Page Wrapper -->
        <!-- In the PHP version you can set the following options from inc/config file -->
        <!--
            Available classes:

            'page-loading'      enables page preloader
        -->
        
        
        
        <div class="container">
            <!-- User Settings, modal which opens from Settings link (found in top right user menu) and the Cog link (found in sidebar user info) -->
        <div id="modal-user-settings" class="modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header text-center">
                        <h2 class="modal-title"><i class="fa fa-pencil"></i> Settings</h2>
                    </div>
                    <!-- END Modal Header -->

                    <!-- Modal Body -->
                    <div class="modal-body">
                        <form action="index.html" method="post" enctype="multipart/form-data" class="form-horizontal form-bordered" onSubmit="return false;">
                            <fieldset>
                                <legend>Vital Info</legend>
                                <div class="form-group">
                                    <label class="col-md-4 control-label">Username</label>
                                    <div class="col-md-8">
                                        <p class="form-control-static">Admin</p>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="user-settings-email">Email</label>
                                    <div class="col-md-8">
                                        <input type="email" id="user-settings-email" name="user-settings-email" class="form-control" value="admin@example.com">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="user-settings-notifications">Email Notifications</label>
                                    <div class="col-md-8">
                                        <label class="switch switch-primary">
                                            <input type="checkbox" id="user-settings-notifications" name="user-settings-notifications" value="1" checked>
                                            <span></span>
                                        </label>
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset>
                                <legend>Password Update</legend>
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="user-settings-password">New Password</label>
                                    <div class="col-md-8">
                                        <input type="password" id="user-settings-password" name="user-settings-password" class="form-control" placeholder="Please choose a complex one..">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="user-settings-repassword">Confirm New Password</label>
                                    <div class="col-md-8">
                                        <input type="password" id="user-settings-repassword" name="user-settings-repassword" class="form-control" placeholder="..and confirm it!">
                                    </div>
                                </div>
                            </fieldset>
                            <div class="form-group form-actions">
                                <div class="col-xs-12 text-right">
                                    <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-sm btn-primary">Save Changes</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- END Modal Body -->
                </div>
            </div>
        </div>
        <!-- END User Settings -->
        </div>
        
        
        <div id="page-wrapper">
           
            <div id="page-container" class="sidebar-partial sidebar-visible-lg sidebar-no-animations">
                <!-- Alternative Sidebar -->
                 <!-- END Alternative Sidebar -->

     
        
        
                <?php
                 include("assets/inc/menu.php");
                ?>

                <!-- Main Container -->
                <div id="main-container">
                   
                     
                    <!-- END Header -->
                    <?php 
                    include("assets/inc/header.php");
                    ?>
                    
                    
                    
                    
                    
                    
                    
                    
                    <!-- Page content --> 
                    <div id="page-content">
                    <!--Aqui se sirve el contenido  --->
                    
                    </div>
                    <!-- END Page Content -->

                    
                    
                    
                    
                    
                    
                    
                    
                    
                    <!-- Footer -->
                    <footer class="clearfix">
                        <div class="pull-right">
                            Crafted with <i class="fa fa-heart text-danger"></i> by <a href="http://goo.gl/vNS3I" target="_blank">pixelcave</a>
                        </div>
                        <div class="pull-left">
                            <span id="year-copy"></span> &copy; <a href="http://goo.gl/TDOSuC" target="_blank">ProUI 3.8</a>
                        </div>
                    </footer>
                    <!-- END Footer -->
                </div>
                <!-- END Main Container -->
            </div>
            <!-- END Page Container -->
        </div>
        <!-- END Page Wrapper -->

        <!-- Scroll to top link, initialized in js/app.js - scrollToTop() -->
        <a href="#" id="to-top"><i class="fa fa-angle-double-up"></i></a>
  
 </body>
  <!-- jQuery, Bootstrap.js, jQuery plugins and Custom JS code -->
        
       <script src="<?= base_url("assets/js/vendor/jquery.min.js")?>"></script> 
       <script src="<?= base_url("assets/js/vendor")?>/bootstrap.min.js?v=2"></script>
       <script src="<?= base_url("assets")?>/js/plugins.js"></script>
       <script src="<?= base_url("assets")?>/js/app.js"></script> 
        
       <script src="<?= base_url("assets/js/vendor/jquery.validate.min.js")?>"></script>
       <script src="<?= base_url("assets/js/vendor/jquery-ui.min.js")?>"> </script>
         
        <script src="<?= base_url("assets")?>/js/pages/tablesDatatables.js"></script>
        <script> $(function(){ TablesDatatables.init(); }); </script>
 
        
        <script>
            
            /**********GLOBALES *****************/
           //objeto para datepicker
   var objDate= {
   inline: true, dateFormat:"yy-mm-dd",
   dayNames: [ "Domingo", "Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sabado" ],
   dayNamesMin: [ "Do", "Lu", "Ma", "Mi", "Ju", "Vi", "Sa" ],
   monthNames: [ "Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre" ]
};

 var list_nacions= [];
           /***************************************/
           
           
           
           /** Devuelve la cadena html correspondiente a la imagen que sirve de loader**/
           function ImageLoader(){
           var imag= "<img class='img-responsive center-block' src='<?= base_url("assets/img/loader.gif")?>'/>";
           return imag;
           }
           
           
           function ErrorMessage(){
               
             var msg="<div class='alert alert-danger'>Proporcione mas parametros por favor</div>";  
             return msg;   }
         
         
           
            function cargarNacionalidades(){
        var url=  "<?= base_url("index.php/referencia/nacionalidad")?>";
        
        $.getJSON( url, function(data){
            
        Object.keys( data).map( function(keyword){
            list_nacions.push( data[keyword].descrip);
        } );
        }); 
        
      
        }
        
        
        
        
        /************Formularios y peticiones***************/
        
            /** Actualiza por defecto solo el div page-content ***/
           function pedirVista(arg, contenedor="#page-content",metodo="get",datos={}){
            
            $.ajax(
                       {
                           url: arg ,
                           data: datos,
                           method: metodo,
                           beforeSend: function(){
                               $( contenedor).html( ImageLoader() );
                           },
                           success: function(  data ){ 
                               $( contenedor).html( data );
                           }//end success
                                                ,
                           error: function(xhr, textStatus, errorThrown){
                           $( contenedor).html( ErrorMessage() );
                           console.log( textStatus," ", errorThrown);
                            }
                       });//end call to ajax
    
            }
            
            
            
            
            
           function pedirContenido(arg, metodo="get", datos=null){
            var contenido="";
            $.ajax(
                       {
                           url: arg ,
                           data: datos,
                           method: metodo,
                           success: function(  data ){ 
                              contenido= data;
                                                }//end success
                                                ,
                           error: function(xhr, textStatus, errorThrown){
                           console.log( textStatus," ", errorThrown);
    
                                }
                       });//end call to ajax
                       return contenido;
            }
            
            
            
        
      
             
       
       /*** 
        * 
        * Efectua las validaciones pertinentes respecto a campos de
        * nacionalidad, y edades. El objetivo es limpiar los datos y enviarlos, 
        * evitando procesamiento innecesario en el servidor para transformar los
        * datos
        * @return {undefined}
        */
       
       function validar_nacionali(arg){
            if(arg=== ""){  return true;
            }else{
                 for(var c=0; c < list_nacions.length; c++){
           if( arg.trim() === list_nacions[c].trim() )
             {  obtenerCodigoNac( list_nacions[c].trim() );
                return true;}                              }
         $("#validation-msg").html("Indique una nacionalidad valida");
         $("#validation-msg").dialog(); 
         return false;
            }/***************/
       }
       
       function validar_edades( edadmin, edadmax){
       //anio actual
            var curr= new Date().getFullYear();
            var aniomin= $("#form-busqueda input:hidden[name=aniomin]");
            var aniomax= $("#form-busqueda input:hidden[name=aniomax]");
            var ok= false;

            if( edadmin ){
                var x_1= parseInt(curr)-parseInt(edadmin); 
                aniomin.val(  x_1+"-12-31");
                 if( edadmax ){
                     var x_2= parseInt(curr)-parseInt(edadmax); 
                     aniomax.val(  x_2+"-01-01");   }
                 ok= true;
                
             }else{ 
                 if(edadmax){  
                     $("#validation-msg").html("Indique una edad minima");
                     $("#validation-msg").dialog();  
                 }else{
                     ok= true;
                 }
             }

             return ok;
        }
       

        function validacionBusqueda( contexto){
            //validar nacionalidad
            var nacioDes= "#"+$(contexto).attr("id")+" input[name=nacio-des]"; 
            var nac_vali= validar_nacionali( $(nacioDes).val()  ) ;
            //validar edades
           var edad1= "#"+$(contexto).attr("id")+" input[name=edadmin]";
           var edad2= "#"+$(contexto).attr("id")+" input[name=edadmax]";
           var edad_vali= validar_edades( $(edad1).val(), $(edad2).val()  ) ;
           
           return nac_vali && edad_vali;
       }
       
       /*****
        * 
        * @param {type} event submit
        * @param {type} contexto del formulario que se procesa
        * @return {undefined} no retorna nada
        */
         function procesarBusqueda(event,  contexto ){
            
           if(event){ event.preventDefault(); event.stopPropagation();}
            
            if(  validacionBusqueda( contexto )  ){ //Validacion exitosa
               var datos= $(contexto).serialize(); 
                var accion=  $(contexto).attr("action"); 
                pedirVista(accion, "#person-result","post", datos);  
                
            }else{
               
            }
             
         }/*************/
    
             
      function obtenerCodigoNac( arg){
   $.ajax( {
       url: "<?= base_url("index.php/Referencia/nacio_cod/")?>"+arg,
       success: function( data ) {
       console.log( data) ;
  $( "#form-busqueda input:hidden[name=cod-nac]" ).val( data ); 
}
       
   }); }
   
      
       
        
        
     
    
     function procesarPaginacion( url ){
        //validar nacionalidad
            var elem= "#"+$("#form-busqueda").attr("id")+" input[name=nacio]"; 
            var nac_var= validar_nacionali( $(elem).val()  ) ; 
             //validar fecha
                
             var datos= $("#form-busqueda").serialize(); 
             var accion= url; 
            pedirVista(accion, "#person-result","post", datos);
         }
         

    
    
        /***Se ejecuta despues de cargar completamente el documento ***/
        $(document).ready( function(){
            pedirVista( "<?= base_url("index.php/welcome/central")?>" );
             cargarNacionalidades();   
        });
        </script>
        
        
</html>