<!DOCTYPE html>
<!--[if IE 9]>         <html class="no-js lt-ie10" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html  class="no-js" lang="en"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">

        <title>Sistema de informaci&oacute;n policial</title>

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
        <!-- Bootstrap is included in its original form, unaltered -->
        <link rel="stylesheet" href="<?= base_url("assets/css/bootstrap.min.css") ?>">

        <!-- Related styles of various icon packs and plugins -->
        <link rel="stylesheet" href="<?= base_url("assets/css/plugins.css") ?>">

        <!-- The main stylesheet of this template. All Bootstrap overwrites are defined in here -->
        <link rel="stylesheet" href="<?= base_url("assets/css/main.css") ?>">

        <!-- Include a specific file here from css/themes/ folder to alter the default theme of the template -->

        <!-- The themes stylesheet of this template (for using specific theme color in individual elements - must included last) -->
        <link rel="stylesheet" href="<?= base_url("assets/css/themes.css") ?>">
        <!-- END Stylesheets -->

        <!-- Modernizr (browser feature detection library) -->
        <script src="<?= base_url("assets/js/vendor/modernizr.min.js") ?>"></script>
    </head>
    <body>
        
        
        
        
       

        <!-- Login Full Background -->
        <!-- For best results use an image with a resolution of 1280x1280 pixels (prefer a blurred image for smaller file size) -->
        <img src="<?= base_url("assets/img/placeholders/backgrounds/login_full_bg.jpg") ?>" alt="Login Full Background" class="full-bg animation-pulseSlow">
        <!-- END Login Full Background -->

        
        
        
        
      

        
        
        <!-- Login Container -->
        <div id="login-container" class="animation-fadeIn">
             



            <!-- Login Title -->
            <div class="login-title text-center">
                <h1><i class="gi gi-flash"></i>
                    <strong>Sistema de informaci&oacute;n Policial</strong><br>
                    <small>Por favor <strong>Identif&iacute;quese</strong> </small></h1>
            </div>
            <!-- END Login Title -->

            <!-- Login Block -->
            <div class="block push-bit">
                <!-- Login Form -->
                <form action="<?= base_url("index.php/Usuario/login")?>" method="post" id="form-login" class="form-horizontal form-bordered form-control-borderless">
                    <div class="form-group">
                        <div class="col-xs-12">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="gi gi-envelope"></i></span>
                                <input type="text" id="login-email" name="login-email" class="form-control input-lg" placeholder="Usuario">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="gi gi-asterisk"></i></span>
                                <input type="password" id="login-password" name="login-password" class="form-control input-lg" placeholder="Password">
                            </div>
                        </div>
                    </div>
                    <div class="form-group form-actions">
                         
                        <div class="col-offset-xs-4 col-xs-8 text-right">
                            <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-angle-right"></i> Login </button>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12 text-center">
                            <a href="javascript:void(0)" id="link-reminder-login"><small>¿Olvid&oacute; su contrase&ntilde;a?</small></a>
                        </div>
                    </div>
                </form>
                <!-- END Login Form -->

                <!-- Reminder Form -->
                <form action="login_full.html#reminder" method="post" id="form-reminder" class="form-horizontal form-bordered form-control-borderless display-none">
                    <div class="form-group">
                        <div class="col-xs-12">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="gi gi-envelope"></i></span>
                                <input type="text" id="reminder-email" name="reminder-email" class="form-control input-lg" placeholder="Usuario">
                            </div>
                        </div>
                    </div>
                    <div class="form-group form-actions">
                        <div class="col-xs-12 text-right">
                            <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-angle-right"></i> Reset Password</button>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12 text-center">
                            <small>¿Recordaste tu contraseña?</small> <a href="javascript:void(0)" id="link-reminder"><small>Login</small></a>
                        </div>
                    </div>
                </form>
                <!-- END Reminder Form -->
 
            </div>
            <!-- END Login Block -->
        </div>
        <!-- END Login Container -->

         
 
        
        
        
        
        
       

 
        <!-- jQuery, Bootstrap.js, jQuery plugins and Custom JS code -->
        <script src="<?= base_url("assets/js/vendor/jquery.min.js") ?>"></script>
        <script src="<?= base_url("assets/js/popper.min.js") ?>"></script>
        <script src="<?= base_url("assets/js/vendor/bootstrap.min.js") ?>"></script> 
        <script src="<?= base_url("assets/js/plugins.js")?>"></script>
        <script src="<?= base_url("assets/js/app.js") ?>"></script>
        
       <script src="<?= base_url("assets/js/vendor/jquery.validate.min.js")?>"></script>
       <script src="<?= base_url("assets/js/vendor/jquery-ui.min.js")?>"> </script>
         
        <script src="<?= base_url("assets")?>/js/pages/tablesDatatables.js"></script>
        <script> $(function(){ TablesDatatables.init(); }); </script>
        
        

        <!-- Load and execute javascript code used only in this page -->
        <script src="<?= base_url("assets/js/pages/login.js?v=1") ?>" ></script>
        <script>$(function(){ Login.init(); });</script>
    </body>
</html>