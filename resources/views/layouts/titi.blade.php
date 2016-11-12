<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
    <meta charset="UTF-8" />
    <title>R-Sport Center| Dashboard </title>
     <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />
     <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <!-- GLOBAL STYLES -->
    <link rel="stylesheet" href="{{ url('assets/plugins/bootstrap/css/bootstrap.css') }}" />
    <link rel="stylesheet" href="{{ url('assets/css/main.css') }}" />
    <link rel="stylesheet" href="{{ url('assets/css/theme.css') }}" />
    <link rel="stylesheet" href="{{ url('assets/css/MoneAdmin.css') }}" />
    <link rel="stylesheet" href="{{ url('assets/plugins/Font-Awesome/css/font-awesome.css') }}" />
    <!--END GLOBAL STYLES -->

    <!-- PAGE LEVEL STYLES -->
    <link href="{{ url('assets/css/layout2.css" rel="stylesheet') }}" />
       <link href="{{ url('assets/plugins/flot/examples/examples.css" rel="stylesheet') }}" />
       <link rel="{{ url('stylesheet" href="assets/plugins/timeline/timeline.css') }}" />
    <!-- END PAGE LEVEL  STYLES -->
     <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>

    <!-- END HEAD -->

    <!-- BEGIN BODY -->
<body class="padTop53 " >

    <!-- MAIN WRAPPER -->
    <div id="wrap" >
        

        <!-- HEADER SECTION -->
        <div id="top">

            <nav class="navbar navbar-inverse navbar-fixed-top " style="padding-top: 10px;">
                <a data-original-title="Show/Hide Menu" data-placement="bottom" data-tooltip="tooltip" class="accordion-toggle btn btn-primary btn-sm visible-xs" data-toggle="collapse" href="#menu" id="menu-toggle">
                    <i class="icon-align-justify"></i>
                </a>
                <!-- LOGO SECTION -->
                <header class="navbar-header">

                    <a href="index.html" class="navbar-brand">
                    <h3>R-Sport Center</h3>
                        
                        </a>
                </header>
                <!-- END LOGO SECTION -->
                <ul class="nav navbar-top-links navbar-right">

                    <!--ADMIN SETTINGS SECTIONS -->

                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="icon-user "></i>&nbsp; <i class="icon-chevron-down "></i>
                        </a>

                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="#"><i class="icon-user"></i> User Profile </a>
                            </li>
                            <li><a href="#"><i class="icon-gear"></i> Settings </a>
                            </li>
                            <li class="divider"></li>
                            <li><a href="{{url('logout')}}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="icon-signout"></i> Logout </a>

                                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                               </li>
                            </li>
                        </ul>

                    </li>
                    <!--END ADMIN SETTINGS -->
                </ul>

            </nav>

        </div>
        <!-- END HEADER SECTION -->



        <!-- MENU SECTION -->
       <div id="left" >
            <div class="media user-media well-small">
                <a class="user-link" href="#">
                    <img class="media-object img-thumbnail user-img" alt="User Picture" src="assets/img/user.gif" />
                </a>
                <br />
                <div class="media-body">
                    <h5 class="media-heading"> {{ Auth::user()->nama_depan }} {{ Auth::user()->nama_belakang }}</h5>
                    <ul class="list-unstyled user-info">
                        
                        <li>
                             <a class="btn btn-success btn-xs btn-circle" style="width: 10px;height: 12px;"></a> Online
                           
                        </li>
                       
                    </ul>
                </div>
                <br />
            </div>

            <ul id="menu" class="collapse">

                
                <li class="panel active">
                    <a href="index.html" >
                        <i class="icon-table"></i> Dashboard
       
                       
                    </a>                   
                </li>



               

                <li class="panel">
                    <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#pagesr-nav">
                        <i class="icon-money"></i> Saldo
       
                        <span class="pull-right">
                            <i class="icon-angle-left"></i>
                        </span>
                          &nbsp; <span class="label label-info">4</span>&nbsp;
                    </a>
                    <ul class="collapse" id="pagesr-nav">
                        <li><a href="pages_calendar.html"><i class="icon-angle-right"></i> Informasi Saldo </a></li>
                        <li><a href="pages_timeline.html"><i class="icon-angle-right"></i> Isi Saldo</a></li>
                        <li><a href="pages_social.html"><i class="icon-angle-right"></i> Konfirmasi </a></li>
                        <li><a href="pages_pricing.html"><i class="icon-angle-right"></i> Keanggotaan </a></li>
                       
                    </ul>
               </li>
             

            </ul>

        </div>
        <!--END MENU SECTION -->



        <!--PAGE CONTENT -->
        <div id="content">
             
            @yield('content') <!-- memanggil content -->     
                  
        </div>
        <!--END PAGE CONTENT -->

         <!-- RIGHT STRIP  SECTION -->
       
            
         
         <!-- END RIGHT STRIP  SECTION -->
    </div>

    <!--END MAIN WRAPPER -->

   
    <!--END FOOTER -->


    <!-- GLOBAL SCRIPTS -->
    <script src="assets/plugins/jquery-2.0.3.min.js"></script>
     <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/plugins/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    <!-- END GLOBAL SCRIPTS -->

    <!-- PAGE LEVEL SCRIPTS -->
    <script src="assets/plugins/flot/jquery.flot.js"></script>
    <script src="assets/plugins/flot/jquery.flot.resize.js"></script>
    <script src="assets/plugins/flot/jquery.flot.time.js"></script>
     <script  src="assets/plugins/flot/jquery.flot.stack.js"></script>
    <script src="assets/js/for_index.js"></script>
   
    <!-- END PAGE LEVEL SCRIPTS -->


</body>

    <!-- END BODY -->
</html>