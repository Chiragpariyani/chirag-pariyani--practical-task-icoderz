<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel Task</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('dist/img/AdminLTELogo.png') }}" />

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
    <!-- Select2 -->
    <link rel="stylesheet" href="{{ asset('plugins/select2/css/select2.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
    <!-- Stepper -->
    <link rel="stylesheet" href="{{asset('plugins/bs-stepper/css/bs-stepper.min.css')}}">
    {{-- Ck Editor  --}}
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">   
    {{-- jquery --}}
    <script  src="https://code.jquery.com/jquery-1.12.1.js"   integrity="sha256-VuhDpmsr9xiKwvTIHfYWCIQ84US9WqZsLfR4P7qF6O8="   crossorigin="anonymous"></script>
     
    @yield('styles')

    <!-- Custom styles for ourApp-->
    <link href="{{ asset('dist/css/style.css') }}" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <!-- Site wrapper -->
    <div class="wrapper">


        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light bg-side">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                 <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class=" default-color fas fa-bars"></i></a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown user-menu">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                        {{-- <img src="{{ asset('/storage/images/userProfile/th/'.Auth::getUser()->avatar) }}" class="user-image img-circle elevation-2"
                            alt="User Image"> --}}
                        <span class="d-none default-color d-md-inline">{{ Auth::getUser()->name }}</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <!-- User image -->
                        <li class="user-header bg-pcb">
                            {{-- <img src="{{ asset('/storage/images/userProfile/th/'.Auth::getUser()->avatar) }}" class="img-circle elevation-2" alt="UserImage"> --}}

                            <p>
                            {{ Auth::getUser()->name }}
                                <small>{{ Auth::getUser()->role }}</small>
                            </p>
                        </li>

                        <!-- Menu Footer-->
                        <li class="user-footer">
                            {{-- <a href="{{ route('profile') }}" class="btn btn-default btn-flat">Profile</a> --}}
                            <a href="{{ route('logout') }}" class="btn btn-default btn-flat float-right">Sign out</a>
                        </li>
                    </ul>
                </li>
                {{-- <li class="nav-item">
                    @if(hasAnyOnePermission('modules')||hasAnyOnePermission('users')||hasAnyOnePermission('roles')||hasAnyOnePermission('language'))
                    <a href="{{ route('admin.settings') }}" class="btn btn-link default-color" data-toggle="tooltip" title="AdminSttings"><i class="fas fa-cogs"></i></a>
                    @endif
                </li> --}}
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="default-color fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar main-sidebar-custom sidebar-dark-primary bg-main elevation-4 ">
            <!-- Brand Logo -->
            <a href="#" class="brand-link">
                <img src="{{ asset('dist/img/AdminLTELogo.png') }}" alt="Gac Logo"
                    class="brand-image img-circle elevation-2" >
                <p class=" text-sm  brand-text h6 mt-2 font-weight-dark text-dark">
                    Laravel Task     
                    {{-- {{env('APP_NAME')}} --}}
                </p>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class  with font-awesome or any other icon font library -->
                    <li class="nav-item {{ request()->is('jpanel/company*') ? 'menu-open' : '' }}">
                       <a href="#" class="nav-link {{ request()->is('jpanel/company*') ? 'menu-active' : '' }}">
                         <i class="fas fa-user-friends nav-icon"></i>
                           <p>
                            Company
                               <i class="right fas fa-angle-left"></i>
                           </p>
                       </a>
                       <ul class="nav nav-treeview">
                           <li class="nav-item">
                               <a href="{{route('add.company')}}" class="nav-link {{ request()->is('jpanel/company/add') ? 'active' : '' }}">
                                 <i class="fas fa-plus nav-icon"></i>
                                   <p>Add Company</p>
                               </a>
                           </li>
                           <li class="nav-item">
                               <a href="{{route('company')}}" class="nav-link {{ request()->is('jpanel/company/list') ? 'active' : '' }}">
                                 <i class="fas fa-list nav-icon"></i>
                                   <p>Company list </p>
                               </a>
                           </li>
                       </ul>
                   </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
            <!-- /.sidebar-custom -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">

                @yield('content')

        </div>
        <!-- /.content-wrapper -->

        <footer class="main-footer">
            <div class="float-right d-none d-sm-block text-dark">
                <strong><span id='ct6' ></span></strong>
            </div>
            <strong>Copyright &copy; {{ now()->year }}  </strong> All rights
            reserved.
        </footer>


    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>

   <!-- Stepper -->
    <script src="{{asset('plugins/bs-stepper/js/bs-stepper.min.js')}}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- overlayScrollbars -->
    <script src="{{ asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('plugins/jszip/jszip.min.js') }}"></script>
    <script src="{{ asset('plugins/pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ asset('plugins/pdfmake/vfs_fonts.js') }}"></script>
    <script src="{{ asset('plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
    <!-- Select2 -->
    <script src="{{ asset('plugins/select2/js/select2.full.min.js') }}"></script>
    <!-- Sweet Alert js -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('dist/js/adminlte.min.js') }}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset('dist/js/demo.js') }}"></script>
    <!-- Canvas  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fabric.js/1.7.19/fabric.min.js"></script>
    <!-- Custom Scripts -->
    <script src="{{ asset('dist/js/customscript.js') }}"></script>
    {{-- ck editor --}}
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    {{-- icons  --}}
    <script src="https://kit.fontawesome.com/86d790b9cd.js" crossorigin="anonymous"></script>
    @yield('scripts')
</body>

</html>
