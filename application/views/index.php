<?php
session_start();
error_reporting(0);

 $sql ="select nrodoc,nombre,apellido,fechanac,lugnac from personas where nombre ilike 'VICTOR%' and apellido ilike 'ROMERO%'";
 
    /*  include"inc/cone98.php"; 
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
<!--[if gt IE 9]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">

        <title>ProUI - Responsive Bootstrap Admin Template</title>

        <meta name="description" content="ProUI is a Responsive Bootstrap Admin Template created by pixelcave and published on Themeforest.">
        <meta name="author" content="pixelcave">
        <meta name="robots" content="noindex, nofollow">
        <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0">

        <!-- Icons -->
        <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
        <link rel="shortcut icon" href="img/favicon.png">
        <link rel="apple-touch-icon" href="img/icon57.png" sizes="57x57">
        <link rel="apple-touch-icon" href="img/icon72.png" sizes="72x72">
        <link rel="apple-touch-icon" href="img/icon76.png" sizes="76x76">
        <link rel="apple-touch-icon" href="img/icon114.png" sizes="114x114">
        <link rel="apple-touch-icon" href="img/icon120.png" sizes="120x120">
        <link rel="apple-touch-icon" href="img/icon144.png" sizes="144x144">
        <link rel="apple-touch-icon" href="img/icon152.png" sizes="152x152">
        <link rel="apple-touch-icon" href="img/icon180.png" sizes="180x180">
        <!-- END Icons -->

        <!-- Stylesheets -->
        <!-- Bootstrap is included in its original form, unaltered -->
        <link rel="stylesheet" href="<?= base_url("assets")?>/css/bootstrap.min.css">

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

        <!-- User Settings, modal which opens from Settings link (found in top right user menu) and the Cog link (found in sidebar user info) -->
        <div id="modal-user-settings" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header text-center">
                        <h2 class="modal-title"><i class="fa fa-pencil"></i> Settings</h2>
                    </div>
                    <!-- END Modal Header -->

                    <!-- Modal Body -->
                    <div class="modal-body">
                        <form action="indexhtm.html" method="post" enctype="multipart/form-data" class="form-horizontal form-bordered" onSubmit="return false;">
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

        <!-- jQuery, Bootstrap.js, jQuery plugins and Custom JS code -->
        <script src="<?= base_url("assets")?>/js/vendor/jquery.min.js"></script>
        <script src="<?= base_url("assets")?>/js/vendor/bootstrap.min.js"></script>
        <script src="<?= base_url("assets")?>/js/plugins.js"></script>
        <script src="<?= base_url("assets")?>/js/app.js"></script>

        <!-- Load and execute javascript code used only in this page -->
        <script src="<?= base_url("assets")?>/js/pages/tablesDatatables.js"></script>
        <script>$(function(){ TablesDatatables.init(); });</script>
        <script>
           
           function ImageLoader(){
           var imag= "<img class='img-responsive center-block' src='<?= base_url("assets/img/loader.gif")?>'/>";
           return imag;
           }
           
            
           function pedirVista(arg){
            $.ajax(
                       {
                           url: arg ,
                           beforeSend: function(){
                               $("#page-content").html( ImageLoader() );
                           },
                           success: function(  data ){
                               $("#page-content").html( data );
                                                }//end success
                       });//end call to ajax
    
            }
            
            
           $(document).ready( function(){
              pedirVista( "<?= base_url("index.php/welcome/central")?>" );
           });
           
           
           
           
           
           
        </script>
    </body>
</html>