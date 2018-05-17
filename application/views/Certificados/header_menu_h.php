      <header class="navbar navbar-default">
                        <!-- Navbar Header -->
                        <div class="navbar-header">
                            <!-- Horizontal Menu Toggle + Alternative Sidebar Toggle Button, Visible only in small screens (< 768px) -->
                            <ul class="nav navbar-nav-custom pull-right visible-xs">
                                <li>
                                    <a href="javascript:void(0)" data-toggle="collapse" data-target="#horizontal-menu-collapse">Menu</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" onclick="App.sidebar('toggle-sidebar-alt');">
                                        <i class="gi gi-share_alt"></i>
                                        <span class="label label-primary label-indicator animation-floating">4</span>
                                    </a>
                                </li>
                            </ul>
                            <!-- END Horizontal Menu Toggle + Alternative Sidebar Toggle Button -->

                            <!-- Main Sidebar Toggle Button -->
                            <ul class="nav navbar-nav-custom">
                                <li>
                                    <a href="javascript:void(0)" onclick="App.sidebar('toggle-sidebar');this.blur();">
                                        <i class="fa fa-bars fa-fw"></i>
                                    </a>
                                </li>
                            </ul>
                            <!-- END Main Sidebar Toggle Button -->
                        </div>
                        <!-- END Navbar Header -->

                        <!-- Alternative Sidebar Toggle Button, Visible only in large screens (> 767px) -->
                        <ul class="nav navbar-nav-custom pull-right hidden-xs">
                            <li>
                                <!-- If you do not want the main sidebar to open when the alternative sidebar is closed, just remove the second parameter: App.sidebar('toggle-sidebar-alt'); -->
                                <a href="javascript:void(0)" onclick="App.sidebar('toggle-sidebar-alt', 'toggle-other');this.blur();">
                                    <i class="gi gi-share_alt"></i>
                                    <span class="label label-primary label-indicator animation-floating">4</span>
                                </a>
                            </li>
                        </ul>
                        <!-- END Alternative Sidebar Toggle Button -->

                        <!-- Horizontal Menu + Search -->
                        <div id="horizontal-menu-collapse" class="collapse navbar-collapse">
                            <ul class="nav navbar-nav">
                                <li>
                                    <a href="javascript:void(0)">Home</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">Profile</a>
                                </li>
                                <li class="dropdown">
                                    <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">Settings <i class="fa fa-angle-down"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="javascript:void(0)"><i class="fa fa-asterisk fa-fw pull-right"></i> General</a></li>
                                        <li><a href="javascript:void(0)"><i class="fa fa-lock fa-fw pull-right"></i> Security</a></li>
                                        <li><a href="javascript:void(0)"><i class="fa fa-user fa-fw pull-right"></i> Account</a></li>
                                        <li><a href="javascript:void(0)"><i class="fa fa-magnet fa-fw pull-right"></i> Subscription</a></li>
                                        <li class="divider"></li>
                                        <li class="dropdown-submenu">
                                            <a href="javascript:void(0)" tabindex="-1"><i class="fa fa-chevron-right fa-fw pull-right"></i> More Settings</a>
                                            <ul class="dropdown-menu">
                                                <li><a href="javascript:void(0)" tabindex="-1">Second level</a></li>
                                                <li><a href="javascript:void(0)">Second level</a></li>
                                                <li><a href="javascript:void(0)">Second level</a></li>
                                                <li class="divider"></li>
                                                <li class="dropdown-submenu">
                                                    <a href="javascript:void(0)" tabindex="-1"><i class="fa fa-chevron-right fa-fw pull-right"></i> More Settings</a>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="javascript:void(0)">Third level</a></li>
                                                        <li><a href="javascript:void(0)">Third level</a></li>
                                                        <li><a href="javascript:void(0)">Third level</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">Contact <i class="fa fa-angle-down"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="javascript:void(0)"><i class="fa fa-envelope-o fa-fw pull-right"></i> By Email</a></li>
                                        <li><a href="javascript:void(0)"><i class="fa fa-phone fa-fw pull-right"></i> By Phone</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <form action="page_ready_search_results.html" class="navbar-form navbar-left">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Search..">
                                </div>
                            </form>
                        </div>
                        <!-- END Horizontal Menu + Search -->
                    </header>
                    <!-- END Header -->

