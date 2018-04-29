<!DOCTYPE html>
<!--[if IE 9]>         <html class="no-js lt-ie10" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">

        <title>Sistema de Informacion Policial</title>

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
       
       
        <div id="page-wrapper">
          
         
            <div id="page-container" class="sidebar-partial sidebar-visible-lg sidebar-no-animations">
                <!-- Alternative Sidebar -->
                 
                <?php
                 include( "assets/inc/menu.php");
                ?>
                <!-- Main Container -->
                <div id="main-container">
                  <!-- Alternative Sidebar -->
                   <?php 
                 include( "assets/inc/header.php");
                ?>

                    <!-- Page content -->
                    <div id="page-content">
                        <!-- Dashboard Header -->
                        <!-- For an image header add the class 'content-header-media' and an image as in the following example -->
                        <div class="content-header content-header-media">
                            <div class="header-section">
                                <div class="row">
                                    <!-- Main Title (hidden on small devices for the statistics to fit) -->
                                    <div class="col-md-4 col-lg-6 hidden-xs hidden-sm">
                                        <h1>Welcome <strong>Admin</strong><br><small>You Look Awesome!</small></h1>
                                    </div>
                                    <!-- END Main Title -->

                                    <!-- Top Stats -->
                                    <div class="col-md-8 col-lg-6">
                                        <div class="row text-center">
                                            <div class="col-xs-4 col-sm-3">
                                                <h2 class="animation-hatch">
                                                    $<strong>93.7k</strong><br>
                                                    <small><i class="fa fa-thumbs-o-up"></i> Great</small>
                                                </h2>
                                            </div>
                                            <div class="col-xs-4 col-sm-3">
                                                <h2 class="animation-hatch">
                                                    <strong>167k</strong><br>
                                                    <small><i class="fa fa-heart-o"></i> Likes</small>
                                                </h2>
                                            </div>
                                            <div class="col-xs-4 col-sm-3">
                                                <h2 class="animation-hatch">
                                                    <strong>101</strong><br>
                                                    <small><i class="fa fa-calendar-o"></i> Events</small>
                                                </h2>
                                            </div>
                                            <!-- We hide the last stat to fit the other 3 on small devices -->
                                            <div class="col-sm-3 hidden-xs">
                                                <h2 class="animation-hatch">
                                                    <strong>27&deg; C</strong><br>
                                                    <small><i class="fa fa-map-marker"></i> Sydney</small>
                                                </h2>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END Top Stats -->
                                </div>
                            </div>
                            <!-- For best results use an image with a resolution of 2560x248 pixels (You can also use a blurred image with ratio 10:1 - eg: 1000x100 pixels - it will adjust and look great!) -->
                            <img src="<?= base_url("assets")?>/img/placeholders/headers/dashboard_header.jpg" alt="header image" class="animation-pulseSlow">
                        </div>
                        <!-- END Dashboard Header -->

                        <!-- Mini Top Stats Row -->
                        <div class="row">
                            <div class="col-sm-6 col-lg-3">
                                <!-- Widget -->
                                <a href="page_ready_article.html" class="widget widget-hover-effect1">
                                    <div class="widget-simple">
                                        <div class="widget-icon pull-left themed-background-autumn animation-fadeIn">
                                            <i class="fa fa-file-text"></i>
                                        </div>
                                        <h3 class="widget-content text-right animation-pullDown">
                                            New <strong>Article</strong><br>
                                            <small>Mountain Trip</small>
                                        </h3>
                                    </div>
                                </a>
                                <!-- END Widget -->
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <!-- Widget -->
                                <a href="page_comp_charts.html" class="widget widget-hover-effect1">
                                    <div class="widget-simple">
                                        <div class="widget-icon pull-left themed-background-spring animation-fadeIn">
                                            <i class="gi gi-usd"></i>
                                        </div>
                                        <h3 class="widget-content text-right animation-pullDown">
                                            + <strong>250%</strong><br>
                                            <small>Sales Today</small>
                                        </h3>
                                    </div>
                                </a>
                                <!-- END Widget -->
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <!-- Widget -->
                                <a href="page_ready_inbox.html" class="widget widget-hover-effect1">
                                    <div class="widget-simple">
                                        <div class="widget-icon pull-left themed-background-fire animation-fadeIn">
                                            <i class="gi gi-envelope"></i>
                                        </div>
                                        <h3 class="widget-content text-right animation-pullDown">
                                            5 <strong>Messages</strong>
                                            <small>Support Center</small>
                                        </h3>
                                    </div>
                                </a>
                                <!-- END Widget -->
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <!-- Widget -->
                                <a href="page_comp_gallery.html" class="widget widget-hover-effect1">
                                    <div class="widget-simple">
                                        <div class="widget-icon pull-left themed-background-amethyst animation-fadeIn">
                                            <i class="gi gi-picture"></i>
                                        </div>
                                        <h3 class="widget-content text-right animation-pullDown">
                                            +30 <strong>Photos</strong>
                                            <small>Gallery</small>
                                        </h3>
                                    </div>
                                </a>
                                <!-- END Widget -->
                            </div>
                            <div class="col-sm-6">
                                <!-- Widget -->
                                <a href="page_comp_charts.html" class="widget widget-hover-effect1">
                                    <div class="widget-simple">
                                        <div class="widget-icon pull-left themed-background animation-fadeIn">
                                            <i class="gi gi-wallet"></i>
                                        </div>
                                        <div class="pull-right">
                                            <!-- Jquery Sparkline (initialized in js/pages/index.js), for more examples you can check out http://omnipotent.net/jquery.sparkline/#s-about -->
                                            <span id="mini-chart-sales"></span>
                                        </div>
                                        <h3 class="widget-content animation-pullDown visible-lg">
                                            Latest <strong>Sales</strong>
                                            <small>Per hour</small>
                                        </h3>
                                    </div>
                                </a>
                                <!-- END Widget -->
                            </div>
                            <div class="col-sm-6">
                                <!-- Widget -->
                                <a href="page_widgets_stats.html" class="widget widget-hover-effect1">
                                    <div class="widget-simple">
                                        <div class="widget-icon pull-left themed-background animation-fadeIn">
                                            <i class="gi gi-crown"></i>
                                        </div>
                                        <div class="pull-right">
                                            <!-- Jquery Sparkline (initialized in js/pages/index.js), for more examples you can check out http://omnipotent.net/jquery.sparkline/#s-about -->
                                            <span id="mini-chart-brand"></span>
                                        </div>
                                        <h3 class="widget-content animation-pullDown visible-lg">
                                            Our <strong>Brand</strong>
                                            <small>Popularity over time</small>
                                        </h3>
                                    </div>
                                </a>
                                <!-- END Widget -->
                            </div>
                        </div>
                        <!-- END Mini Top Stats Row -->

                        <!-- Widgets Row -->
                        <div class="row">
                            <div class="col-md-6">
                                <!-- Timeline Widget -->
                                <div class="widget">
                                    <div class="widget-extra themed-background-dark">
                                        <div class="widget-options">
                                            <div class="btn-group btn-group-xs">
                                                <a href="javascript:void(0)" class="btn btn-default" data-toggle="tooltip" title="Edit Widget"><i class="fa fa-pencil"></i></a>
                                                <a href="javascript:void(0)" class="btn btn-default" data-toggle="tooltip" title="Quick Settings"><i class="fa fa-cog"></i></a>
                                            </div>
                                        </div>
                                        <h3 class="widget-content-light">
                                            Latest <strong>News</strong>
                                            <small><a href="page_ready_timeline.html"><strong>View all</strong></a></small>
                                        </h3>
                                    </div>
                                    <div class="widget-extra">
                                        <!-- Timeline Content -->
                                        <div class="timeline">
                                            <ul class="timeline-list">
                                                <li class="active">
                                                    <div class="timeline-icon"><i class="gi gi-airplane"></i></div>
                                                    <div class="timeline-time"><small>just now</small></div>
                                                    <div class="timeline-content">
                                                        <p class="push-bit"><a href="page_ready_user_profile.html"><strong>Jordan Carter</strong></a></p>
                                                        <p class="push-bit">The trip was an amazing and a life changing experience!!</p>
                                                        <p class="push-bit"><a href="page_ready_article.html" class="btn btn-xs btn-primary"><i class="fa fa-file"></i> Read the article</a></p>
                                                        <div class="row push">
                                                            <div class="col-sm-6 col-md-4">
                                                                <a href="<?= base_url("assets")?>/img/placeholders/photos/photo1.jpg" data-toggle="lightbox-image">
                                                                    <img src="<?= base_url("assets")?>/img/placeholders/photos/photo1.jpg" alt="image">
                                                                </a>
                                                            </div>
                                                            <div class="col-sm-6 col-md-4">
                                                                <a href="<?= base_url("assets")?>/img/placeholders/photos/photo22.jpg" data-toggle="lightbox-image">
                                                                    <img src="<?= base_url("assets")?>/img/placeholders/photos/photo22.jpg" alt="image">
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="active">
                                                    <div class="timeline-icon themed-background-fire themed-border-fire"><i class="fa fa-file-text"></i></div>
                                                    <div class="timeline-time"><small>5 min ago</small></div>
                                                    <div class="timeline-content">
                                                        <p class="push-bit"><a href="page_ready_user_profile.html"><strong>Administrator</strong></a></p>
                                                        <strong>Free courses</strong> for all our customers at A1 Conference Room - 9:00 <strong>am</strong> tomorrow!
                                                    </div>
                                                </li>
                                                <li class="active">
                                                    <div class="timeline-icon"><i class="gi gi-drink"></i></div>
                                                    <div class="timeline-time"><small>3 hours ago</small></div>
                                                    <div class="timeline-content">
                                                        <p class="push-bit"><a href="page_ready_user_profile.html"><strong>Ella Winter</strong></a></p>
                                                        <p class="push-bit"><strong>Happy Hour!</strong> Free drinks at <a href="javascript:void(0)">Cafe-Bar</a> all day long!</p>
                                                        <div id="gmap-timeline" class="gmap"></div>
                                                    </div>
                                                </li>
                                                <li class="active">
                                                    <div class="timeline-icon"><i class="fa fa-cutlery"></i></div>
                                                    <div class="timeline-time"><small>yesterday</small></div>
                                                    <div class="timeline-content">
                                                        <p class="push-bit"><a href="page_ready_user_profile.html"><strong>Patricia Woods</strong></a></p>
                                                        <p class="push-bit">Today I had the lunch of my life! It was delicious!</p>
                                                        <div class="row push">
                                                            <div class="col-sm-6 col-md-4">
                                                                <a href="<?= base_url("assets")?>/img/placeholders/photos/photo23.jpg" data-toggle="lightbox-image">
                                                                    <img src="<?= base_url("assets")?>/img/placeholders/photos/photo23.jpg" alt="image">
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="active">
                                                    <div class="timeline-icon themed-background-fire themed-border-fire"><i class="fa fa-smile-o"></i></div>
                                                    <div class="timeline-time"><small>2 days ago</small></div>
                                                    <div class="timeline-content">
                                                        <p class="push-bit"><a href="page_ready_user_profile.html"><strong>Administrator</strong></a></p>
                                                        To thank you all for your support we would like to let you know that you will receive free feature updates for life! You are awesome!
                                                    </div>
                                                </li>
                                                <li class="active">
                                                    <div class="timeline-icon"><i class="fa fa-pencil"></i></div>
                                                    <div class="timeline-time"><small>1 week ago</small></div>
                                                    <div class="timeline-content">
                                                        <p class="push-bit"><a href="page_ready_user_profile.html"><strong>Nicole Ward</strong></a></p>
                                                        <p class="push-bit">Consectetur adipiscing elit. Maecenas ultrices, justo vel imperdiet gravida, urna ligula hendrerit nibh, ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta. Integer fermentum tincidunt auctor. Vestibulum ullamcorper, odio sed rhoncus imperdiet, enim elit sollicitudin orci, eget dictum leo mi nec lectus. Nam commodo turpis id lectus scelerisque vulputate.</p>
                                                        Integer sed dolor erat. Fusce erat ipsum, varius vel euismod sed, tristique et lectus? Etiam egestas fringilla enim, id convallis lectus laoreet at. Fusce purus nisi, gravida sed consectetur ut, interdum quis nisi. Quisque egestas nisl id lectus facilisis scelerisque? Proin rhoncus dui at ligula vestibulum ut facilisis ante sodales! Suspendisse potenti. Aliquam tincidunt sollicitudin sem nec ultrices. Sed at mi velit. Ut egestas tempor est, in cursus enim venenatis eget! Nulla quis ligula ipsum.
                                                    </div>
                                                </li>
                                                <li class="text-center">
                                                    <a href="javascript:void(0)" class="btn btn-xs btn-default">View more..</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- END Timeline Content -->
                                    </div>
                                </div>
                                <!-- END Timeline Widget -->
                            </div>
                            <div class="col-md-6">
                                <!-- Your Plan Widget -->
                                <div class="widget">
                                    <div class="widget-extra themed-background-dark">
                                        <div class="widget-options">
                                            <div class="btn-group btn-group-xs">
                                                <a href="javascript:void(0)" class="btn btn-default" data-toggle="tooltip" title="Edit Widget"><i class="fa fa-pencil"></i></a>
                                                <a href="javascript:void(0)" class="btn btn-default" data-toggle="tooltip" title="Quick Settings"><i class="fa fa-cog"></i></a>
                                            </div>
                                        </div>
                                        <h3 class="widget-content-light">
                                            Your <strong>VIP Plan</strong>
                                            <small><a href="page_ready_pricing_tables.html"><strong>Upgrade</strong></a></small>
                                        </h3>
                                    </div>
                                    <div class="widget-extra-full">
                                        <div class="row text-center">
                                            <div class="col-xs-6 col-lg-3">
                                                <h3>
                                                    <strong>35</strong> <small>/50</small><br>
                                                    <small><i class="fa fa-folder-open-o"></i> Projects</small>
                                                </h3>
                                            </div>
                                            <div class="col-xs-6 col-lg-3">
                                                <h3>
                                                    <strong>25</strong> <small>/100GB</small><br>
                                                    <small><i class="fa fa-hdd-o"></i> Storage</small>
                                                </h3>
                                            </div>
                                            <div class="col-xs-6 col-lg-3">
                                                <h3>
                                                    <strong>65</strong> <small>/1k</small><br>
                                                    <small><i class="fa fa-building-o"></i> Clients</small>
                                                </h3>
                                            </div>
                                            <div class="col-xs-6 col-lg-3">
                                                <h3>
                                                    <strong>10</strong> <small>k</small><br>
                                                    <small><i class="fa fa-envelope-o"></i> Emails</small>
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- END Your Plan Widget -->

                                <!-- Charts Widget -->
                                <div class="widget">
                                    <div class="widget-advanced widget-advanced-alt">
                                        <!-- Widget Header -->
                                        <div class="widget-header text-center themed-background">
                                            <h3 class="widget-content-light text-left pull-left animation-pullDown">
                                                <strong>Sales</strong> &amp; <strong>Earnings</strong><br>
                                                <small>Last Year</small>
                                            </h3>
                                            <!-- Flot Charts (initialized in js/pages/index.js), for more examples you can check out http://www.flotcharts.org/ -->
                                            <div id="dash-widget-chart" class="chart"></div>
                                        </div>
                                        <!-- END Widget Header -->

                                        <!-- Widget Main -->
                                        <div class="widget-main">
                                            <div class="row text-center">
                                                <div class="col-xs-4">
                                                    <h3 class="animation-hatch"><strong>7.500</strong><br><small>Clients</small></h3>
                                                </div>
                                                <div class="col-xs-4">
                                                    <h3 class="animation-hatch"><strong>10.970</strong><br><small>Sales</small></h3>
                                                </div>
                                                <div class="col-xs-4">
                                                    <h3 class="animation-hatch">$<strong>31.230</strong><br><small>Earnings</small></h3>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END Widget Main -->
                                    </div>
                                </div>
                                <!-- END Charts Widget -->

                                <!-- Weather Widget -->
                                <div class="widget">
                                    <div class="widget-advanced widget-advanced-alt">
                                        <!-- Widget Header -->
                                        <div class="widget-header text-left">
                                            <!-- For best results use an image with at least 150 pixels in height (with the width relative to how big your widget will be!) - Here I'm using a 1200x150 pixels image -->
                                            <img src="<?= base_url("assets")?>/img/placeholders/headers/widget5_header.jpg" alt="background" class="widget-background animation-pulseSlow">
                                            <h3 class="widget-content widget-content-image widget-content-light clearfix">
                                                <span class="widget-icon pull-right">
                                                    <i class="fa fa-sun-o animation-pulse"></i>
                                                </span>
                                                Weather <strong>Station</strong><br>
                                                <small><i class="fa fa-location-arrow"></i> The Mountain</small>
                                            </h3>
                                        </div>
                                        <!-- END Widget Header -->

                                        <!-- Widget Main -->
                                        <div class="widget-main">
                                            <div class="row text-center">
                                                <div class="col-xs-6 col-lg-3">
                                                    <h3>
                                                        <strong>10&deg;</strong> <small>C</small><br>
                                                        <small>Sunny</small>
                                                    </h3>
                                                </div>
                                                <div class="col-xs-6 col-lg-3">
                                                    <h3>
                                                        <strong>80</strong> <small>%</small><br>
                                                        <small>Humidity</small>
                                                    </h3>
                                                </div>
                                                <div class="col-xs-6 col-lg-3">
                                                    <h3>
                                                        <strong>60</strong> <small>km/h</small><br>
                                                        <small>Wind</small>
                                                    </h3>
                                                </div>
                                                <div class="col-xs-6 col-lg-3">
                                                    <h3>
                                                        <strong>5</strong> <small>km</small><br>
                                                        <small>Visibility</small>
                                                    </h3>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END Widget Main -->
                                    </div>
                                </div>
                                <!-- END Weather Widget-->

                                <!-- Advanced Gallery Widget -->
                                <div class="widget">
                                    <div class="widget-advanced">
                                        <!-- Widget Header -->
                                        <div class="widget-header text-center themed-background-dark">
                                            <h3 class="widget-content-light clearfix">
                                                Awesome <strong>Gallery</strong><br>
                                                <small>4 Photos</small>
                                            </h3>
                                        </div>
                                        <!-- END Widget Header -->

                                        <!-- Widget Main -->
                                        <div class="widget-main">
                                            <a href="page_comp_gallery.html" class="widget-image-container">
                                                <span class="widget-icon themed-background"><i class="gi gi-picture"></i></span>
                                            </a>
                                            <div class="gallery gallery-widget" data-toggle="lightbox-gallery">
                                                <div class="row">
                                                    <div class="col-xs-6 col-sm-3">
                                                        <a href="<?= base_url("assets")?>/img/placeholders/photos/photo15.jpg" class="gallery-link" title="Image Info">
                                                            <img src="<?= base_url("assets")?>/img/placeholders/photos/photo15.jpg" alt="image">
                                                        </a>
                                                    </div>
                                                    <div class="col-xs-6 col-sm-3">
                                                        <a href="<?= base_url("assets")?>/img/placeholders/photos/photo5.jpg" class="gallery-link" title="Image Info">
                                                            <img src="<?= base_url("assets")?>/img/placeholders/photos/photo5.jpg" alt="image">
                                                        </a>
                                                    </div>
                                                    <div class="col-xs-6 col-sm-3">
                                                        <a href="<?= base_url("assets")?>/img/placeholders/photos/photo6.jpg" class="gallery-link" title="Image Info">
                                                            <img src="<?= base_url("assets")?>/img/placeholders/photos/photo6.jpg" alt="image">
                                                        </a>
                                                    </div>
                                                    <div class="col-xs-6 col-sm-3">
                                                        <a href="<?= base_url("assets")?>/img/placeholders/photos/photo13.jpg" class="gallery-link" title="Image Info">
                                                            <img src="<?= base_url("assets")?>/img/placeholders/photos/photo13.jpg" alt="image">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END Widget Main -->
                                    </div>
                                </div>
                                <!-- END Advanced Gallery Widget -->
                            </div>
                        </div>
                        <!-- END Widgets Row -->
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

        <!-- Google Maps API Key (you will have to obtain a Google Maps API key to use Google Maps) -->
        <!-- For more info please have a look at https://developers.google.com/maps/documentation/javascript/get-api-key#key -->
        <script src="https://maps.googleapis.com/maps/api/js?key="></script>
        <script src="<?= base_url("assets")?>/js/helpers/gmaps.min.js"></script>

        <!-- Load and execute javascript code used only in this page -->
        <script src="<?= base_url("assets")?>/js/pages/index.js"></script>
        <script>$(function(){ Index.init(); });</script>
        
    </body>
</html>