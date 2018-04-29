    <!-- Datatables Header -->
                        <div class="content-header">
                            <div class="header-section">
                                <h1>
                                    <i class="fa fa-table"></i>Datatables<br><small>HTML tables can become fully dynamic with cool features!</small>
                                </h1>
                            </div>
                        </div>
                        <ul class="breadcrumb breadcrumb-top">
                            <li>Tables</li>
                            <li><a href="">Datatables</a></li>
                        </ul>
                        <!-- END Datatables Header -->

                        <!-- Datatables Content -->
                        <div class="block full">
                            <div class="block-title">
                                <h2><strong>Datatables</strong> integration</h2>
                            </div>
                            <p><a href="https://datatables.net/" target="_blank">DataTables</a> is a plug-in for the Jquery Javascript library. It is a highly flexible tool, based upon the foundations of progressive enhancement, which will add advanced interaction controls to any HTML table. It is integrated with template's design and it offers many features such as on-the-fly filtering and variable length pagination.</p>

                            <div class="table-responsive">
                                <table id="example-datatable" class="table table-vcenter table-condensed table-bordered">
                                    <thead>
                                        <tr>
                                            <th class="text-center">Nro.Docu.</th>
                                            <th class="text-center"><i class="gi gi-user"></i></th>
                                            <th>Nombres</th>
                                            <th>Email</th>
                                            <th>Subscription</th>
                                            <th class="text-center">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                     <?
                                  for ($i=0; $i < $nn; $i++){
									     $nomape[$i]=$nombre[$i].' '.$apellido[$i];  
	    
									 ?>
                                        <tr>
                                            <td class="text-center"><? print $nrodoc[$i] ?></td>
                                            <td class="text-center"><img src="<?= base_url("assets")?>/img/placeholders/avatars/avatar15.jpg" alt="avatar" class="img-circle"></td>
                                            <td><? print $nomape[$i] ?></td>
                                            <td><? print $fechanac[$i] ?></td>
                                             <td><? print $lugnac[$i] ?></td>
                                             
                                        </tr>
                                     <?
                                      }
									 ?>
                                        
                                         
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- END Datatables Content -->