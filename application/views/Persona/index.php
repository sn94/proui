    <!-- Datatables Header -->
                        <div class="content-header">
                            <div class="header-section">
                                <h1>
                                    <i class="fa fa-table"></i>Personas<br><small>Búsqueda de registros</small>
                                </h1>
                                
                                <?php include("application/views/Persona/form_busqueda.php"); ?>
                                
                                
                            </div>
                        </div>
                       <!-- <ul class="breadcrumb breadcrumb-top">
                            <li>Resultados</li>
                            <li><a href="">Datatables</a></li>
                        </ul>-->
                        <!-- END Datatables Header -->

                        <!-- Datatables Content    -->
                        <div class="block full">
                            <div class="block-title">
                                <h2><strong>Resultados</strong></h2>
                            </div>
                            
                           <div class="container-fluid"  id="person-result">
                               
                
    
                           <?php  
                           
                           
                            include("application/views/Persona/datatabla.php")
                          
                           
                           ?>
                           
                           
                           
                           
                           
                           
                           
                           
                           </div>
                            
                        </div>
                        <!-- END Datatables Content -->