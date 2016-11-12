
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">
        <!-- App Favicon icon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">
        <!-- App Title -->
        <title>Rsport</title>

        <link href="{{ url('/') }}/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="{{ url('/') }}/assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="{{ url('/') }}/assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="{{ url('/') }}/assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="{{ url('/') }}/assets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="{{ url('/') }}/assets/css/menu.css" rel="stylesheet" type="text/css" />
        <link href="{{ url('/') }}/assets/css/responsive.css" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <script src="{{ url('/') }}/assets/js/modernizr.min.js"></script>

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Scripts -->
        <script>
            window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
            ]); ?>
        </script>

    </head>


    <body>


        <!-- Navigation Bar-->
        <header id="topnav">
            <div class="topbar-main">
                <div class="container">

                    <!-- Logo container-->
                    <div class="logo">
                        <a href="index.html" class="logo"><span>Rsp<i
                                class="md md-album"></i>rt</span></a>
                    </div>
                    <!-- End Logo container-->


                    <div class="menu-extras">

                        <ul class="nav navbar-nav navbar-right pull-right">
                            <li class="dropdown navbar-c-items">
                                <a href="" class="dropdown-toggle waves-effect waves-light profile" data-toggle="dropdown" aria-expanded="true"><img src="{{ url('/') }}/assets/images/users/avatar-1.jpg" alt="user-img" class="img-circle"> </a>
                                <ul class="dropdown-menu">
                                    <li><a href="javascript:void(0)"><i class="ti-user text-custom m-r-10"></i> Profile</a></li>
                                    <li><a href="javascript:void(0)"><i class="ti-settings text-custom m-r-10"></i> Settings</a></li>
                                    <li><a href="javascript:void(0)"><i class="ti-lock text-custom m-r-10"></i> Lock screen</a></li>
                                    <li class="divider"></li>
                                    <li><a href="{{ url('/logout') }}"
                                        onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();"--><i class="ti-power-off text-danger m-r-10"></i> Logout</a>
                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                                 </li>
                                </ul>
                            </li>
                        </ul>
                        <div class="menu-item">
                            <!-- Mobile menu toggle-->
                            <a class="navbar-toggle">
                                <div class="lines">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </a>
                            <!-- End mobile menu toggle-->
                        </div>
                    </div>

                </div>
            </div>

            <div class="navbar-custom">
                <div class="container">
                    <div id="navigation">
                        <!-- Navigation Menu-->
                        <ul class="navigation-menu">
                            <li class="has-submenu">
                                <a href="#"><i class="md md-dashboard"></i>Dashboard</a>

                            </li>
                            <li class="has-submenu">
                                <a href="#"><i class="md md-content-paste"></i>Booking</a>
                                <!-- <ul class="submenu">
                                    <li><a href="ui-buttons.html">Buttons</a></li>
                                    <li><a href="ui-loading-buttons.html">Loading Buttons</a></li>
                                    <li><a href="ui-panels.html">Panels</a></li>
                                    <li><a href="ui-portlets.html">Portlets</a></li>
                                    <li><a href="ui-checkbox-radio.html">Checkboxs-Radios</a></li>
                                    <li><a href="ui-tabs.html">Tabs</a></li>
                                    <li><a href="ui-modals.html">Modals</a></li>
                                    <li><a href="ui-progressbars.html">Progress Bars</a></li>
                                    <li><a href="ui-notification.html">Notification</a></li>
                                    <li><a href="ui-images.html">Images</a></li>
                                    <li><a href="ui-carousel.html">Carousel</a>
                                    <li><a href="ui-video.html">Video</a>
                                    <li><a href="ui-bootstrap.html">Bootstrap UI</a></li>
                                    <li><a href="ui-typography.html">Typography</a></li>
                                </ul> -->
                            </li>


                            <li class="has-submenu">
                                <a href="#"><i class="md md-attach-money"></i>Saldo</a>
                                <ul class="submenu megamenu">
                                    <li>
                                        <ul>
                                            <li>
                                                <span>Elements</span>
                                            </li>
                                            <li><a href="components-grid.html">Informasi Saldo</a></li>
                                            <li><a href="components-widgets.html">Isi Saldo</a></li>
                                            <li><a href="components-nestable-list.html">Konfirmasi</a></li>
                                            <li><a href="components-range-sliders.html">Keanggotaan</a></li>

                                        </ul>
                                    </li>



                                </ul>
                            </li>
                            <li class="has-submenu">
                                <a href="#"><i class="md md-class"></i>Jadwal Event</a>
                                <!-- <ul class="submenu">
                                    <li class="has-submenu">
                                        <a href="#">Tables</a>
                                        <ul class="submenu">
                                            <li><a href="tables-basic.html">Basic Tables</a></li>
                                            <li><a href="tables-datatable.html">Data Table</a></li>
                                            <li><a href="tables-editable.html">Editable Table</a></li>
                                            <li><a href="tables-responsive.html">Responsive Table</a></li>
                                            <li><a href="tables-foo-tables.html">FooTable</a></li>
                                            <li><a href="tables-bootstrap.html">Bootstrap Tables</a></li>
                                            <li><a href="tables-tablesaw.html">Tablesaw Tables</a></li>
                                            <li><a href="tables-jsgrid.html">JsGrid Tables</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-submenu">
                                        <a href="#">Charts</a>
                                        <ul class="submenu">
                                            <li><a href="chart-flot.html">Flot Chart</a></li>
                                            <li><a href="chart-morris.html">Morris Chart</a></li>
                                            <li><a href="chart-chartjs.html">Chartjs</a></li>
                                            <li><a href="chart-peity.html">Peity Charts</a></li>
                                            <li><a href="chart-chartist.html">Chartist Charts</a></li>
                                            <li><a href="chart-c3.html">C3 Charts</a></li>
                                            <li><a href="chart-nvd3.html"> Nvd3 Charts</a></li>
                                            <li><a href="chart-sparkline.html">Sparkline charts</a></li>
                                            <li><a href="chart-radial.html">Radial charts</a></li>
                                            <li><a href="chart-other.html">Other Chart</a></li>
                                            <li><a href="chart-ricksaw.html">Ricksaw Chart</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-submenu">
                                        <a href="#">Icons</a>
                                        <ul class="submenu">
                                            <li><a href="icons-glyphicons.html">Glyphicons</a></li>
                                            <li><a href="icons-materialdesign.html">Material Design</a></li>
                                            <li><a href="icons-ionicons.html">Ion Icons</a></li>
                                            <li><a href="icons-fontawesome.html">Font awesome</a></li>
                                            <li><a href="icons-themifyicon.html">Themify Icons</a></li>
                                            <li><a href="icons-simple-line.html">Simple line Icons</a></li>
                                            <li><a href="icons-weather.html">Weather Icons</a></li>
                                            <li><a href="icons-typicons.html">Typicons</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-submenu">
                                        <a href="#">Maps</a>
                                        <ul class="submenu">
                                            <li><a href="map-google.html"> Google Map</a></li>
                                            <li><a href="map-vector.html"> Vector Map</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-submenu">
                                        <a href="#">Email</a>
                                        <ul class="submenu">
                                            <li><a href="email-inbox.html"> Inbox</a></li>
                                            <li><a href="email-read.html"> Read Mail</a></li>
                                            <li><a href="email-compose.html"> Compose Mail</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li> -->

                            <li class="has-submenu">
                                <a href="#"><i class="md md-accessibility"></i>Pelatih</a>
                               <!--  <ul class="submenu megamenu">
                                    <li>
                                        <ul>
                                            <li><a href="page-starter.html">Starter Page</a></li>
                                            <li><a href="page-login.html">Login</a></li>
                                            <li><a href="page-login-v2.html">Login v2</a></li>
                                            <li><a href="page-register.html">Register</a></li>
                                            <li><a href="page-register-v2.html">Register v2</a></li>
                                            <li><a href="page-signup-signin.html">Signin - Signup</a></li>
                                            <li><a href="page-recoverpw.html">Recover Password</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <ul>
                                            <li><a href="page-lock-screen.html">Lock Screen</a></li>
                                            <li><a href="page-400.html">Error 400</a></li>
                                            <li><a href="page-403.html">Error 403</a></li>
                                            <li><a href="page-404.html">Error 404</a></li>
                                            <li><a href="page-404_alt.html">Error 404-alt</a></li>
                                            <li><a href="page-500.html">Error 500</a></li>
                                            <li><a href="page-503.html">Error 503</a></li>
                                        </ul>
                                    </li>

                                </ul> -->
                            </li>


                            <li class="has-submenu">
                                <a href="#"><i class="md md-folder-special"></i>Fasilitas</a>
                               <!--  <ul class="submenu megamenu">
                                    <li>
                                        <ul>
                                            <li><a href="extra-profile.html">Profile</a></li>
                                            <li><a href="extra-timeline.html">Timeline</a></li>
                                            <li><a href="extra-sitemap.html">Site map</a></li>
                                            <li><a href="extra-invoice.html">Invoice</a></li>
                                            <li><a href="extra-email-template.html">Email template</a></li>
                                            <li><a href="extra-maintenance.html">Maintenance</a></li>
                                            <li><a href="extra-coming-soon.html">Coming-soon</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <ul>
                                            <li><a href="extra-faq.html">FAQ</a></li>
                                            <li><a href="extra-search-result.html">Search result</a></li>
                                            <li><a href="extra-gallery.html">Gallery</a></li>
                                            <li><a href="extra-pricing.html">Pricing</a></li>
                                            <li><a href="apps-calendar.html"> Calendar</a></li>
                                            <li><a href="apps-contact.html"> Contact</a></li>
                                            <li><a href="apps-taskboard.html"> Taskboard</a></li>
                                        </ul>
                                    </li>


                                </ul> -->
                            </li>

                          <!--   <li class="has-submenu">
                                <a href="#"><i class="md md-account-circle"></i>CRM</a>
                                <ul class="submenu">
                                    <li><a href="crm-dashboard.html"> Dashboard </a></li>
                                    <li><a href="crm-contact.html"> Contacts </a></li>
                                    <li><a href="crm-opportunities.html"> Opportunities </a></li>
                                    <li><a href="crm-leads.html"> Leads </a></li>
                                    <li><a href="crm-customers.html"> Customers </a></li>
                                </ul>
                            </li>
                            <li class="has-submenu">
                                <a href="#"><i class="md md-shopping-cart"></i>eCommerce</a>
                                <ul class="submenu">
                                    <li><a href="ecommerce-dashboard.html"> Dashboard</a></li>
                                    <li><a href="ecommerce-products.html"> Products</a></li>
                                    <li><a href="ecommerce-product-detail.html"> Product Detail</a></li>
                                    <li><a href="ecommerce-product-edit.html"> Product Edit</a></li>
                                    <li><a href="ecommerce-orders.html"> Orders</a></li>
                                    <li><a href="ecommerce-sellers.html"> Sellers</a></li>
                                </ul>
                            </li> -->
                        </ul>
                        <!-- End navigation menu        -->
                    </div>
                </div> <!-- end container -->
            </div> <!-- end navbar-custom -->
        </header>
        <!-- End Navigation Bar-->


        <div class="wrapper">
            <div class="container">

              <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <!-- <div class="btn-group pull-right m-t-15">
                            <button type="button" class="btn btn-default dropdown-toggle waves-effect" data-toggle="dropdown" aria-expanded="false">Settings <span class="m-l-5"><i class="fa fa-cog"></i></span></button>
                            <ul class="dropdown-menu drop-menu-right" role="menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                            </ul>
                        </div> -->

                        <h4 class="page-title">
                          @yield('title')
                        </h4>
                        <ol class="breadcrumb">
                        @yield('breadcrumb')
                        </ol>
                    </div>
                </div>

                <!-- COntent -->
                @yield('content')
                <!-- END CONTENT -->


                <!-- Footer -->
                <footer class="footer text-right">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-6">
                                © 2016. All rights reserved.
                            </div>
                            <div class="col-xs-6">
                                <ul class="pull-right list-inline m-b-0">
                                    <li>
                                        <a href="#">About</a>
                                    </li>
                                    <li>
                                        <a href="#">Help</a>
                                    </li>
                                    <li>
                                        <a href="#">Contact</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- End Footer -->

            </div> <!-- end container -->
        </div>
        <!-- end wrapper -->



        <!-- jQuery  -->
        <script src="{{ url('/') }}/assets/js/jquery.min.js"></script>
        <script src="{{ url('/') }}/assets/js/bootstrap.min.js"></script>
        <script src="{{ url('/') }}/assets/js/detect.js"></script>
        <script src="{{ url('/') }}/assets/js/fastclick.js"></script>
        <script src="{{ url('/') }}/assets/js/jquery.slimscroll.js"></script>
        <script src="{{ url('/') }}/assets/js/jquery.blockUI.js"></script>
        <script src="{{ url('/') }}/assets/js/waves.js"></script>
        <script src="{{ url('/') }}/assets/js/wow.min.js"></script>
        <script src="{{ url('/') }}/assets/js/jquery.nicescroll.js"></script>
        <script src="{{ url('/') }}/assets/js/jquery.scrollTo.min.js"></script>

        <!-- App core js -->
        <script src="{{ url('/') }}/assets/js/jquery.core.js"></script>
        <script src="{{ url('/') }}/assets/js/jquery.app.js"></script>

    </body>
</html>
