<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Golden Clean</title>

    <!-- Custom fonts for this template-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
          integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
          crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
            crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-typeahead/2.11.0/jquery.typeahead.min.js"
            integrity="sha512-Rc24PGD2NTEGNYG/EMB+jcFpAltU9svgPcG/73l1/5M6is6gu3Vo1uVqyaNWf/sXfKyI0l240iwX9wpm6HE/Tg=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.js"
            integrity="sha512-P2Z/b+j031xZuS/nr8Re8dMwx6pNIexgJ7YqcFWKIqCdbjynk4kuX/GrqpQWEcI94PRCyfbUQrjRcWMi7btb0g=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- Custom styles for this template-->
    <link href="{{asset('css/sb-admin-min.css')}}" rel="stylesheet">
    <link href="{{asset('css/custom.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">

    @livewireStyles
</head>

<body id="page-top">



<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center align-items-center p-0" href="{{route('dashboard')}}">
            <div class="sidebar-brand-icon">

                <img src="{{asset('images/logo.png')}}" class="img-fluid" style="width: 80px" alt="logo"/>

            </div>
            <div class="sidebar-brand-text"><span style="color: gold">Golden</span> Clean</div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
            <a class="nav-link" href="{{route('dashboard')}}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">



        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
               aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-fw fa-plus"></i>
                <span>Krijo</span>
            </a>

            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">


                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Krijo:</h6>
                    <a class="collapse-item" href="{{route('clients.create')}}">Banorin</a>
                    @if (Auth::user()->hasRole('admin'))
                    <a class="collapse-item" href="{{route('buildings.create')}}">Banesen</a>
                    @endif
                    <a class="collapse-item" href="{{route('damages.create')}}">Prishjen</a>
                    @if (Auth::user()->hasRole('admin'))
                    <a class="collapse-item"  href="{{route('gates.create')}}">Hyrjen</a>
                    @endif
                </div>
            </div>
        </li>




        <!-- Divider -->
        <hr class="sidebar-divider">



        <!-- Nav Item - Tables -->
        <li class="nav-item">
            <a class="nav-link" href="{{route('clients.index')}}">
                <i class="fas fa-fw fa-users"></i>
                <span>Banoret</span></a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{route('buildings.index')}}">
                <i class="fas fa-fw fa-building"></i>
                <span>Banesat</span></a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{route('payments.index')}}">
                <i class="fas fa-fw fa-dollar-sign"></i>
                <span>Pagesat</span></a>
        </li>

                @if(Auth::user()->hasRole('admin'))
        <li class="nav-item">
            <a class="nav-link" href="{{route('gates.index')}}">
                <i class="fas fa-fw fa-building"></i>
                <span>Hyrjet e Banesave</span></a>
        </li>
                @endif
        <li class="nav-item">
            <a class="nav-link" href="{{route('damages.index')}}">
                <i class="fas fa-fw fa-cog"></i>
                <span>Prishjet</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>




    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
        @if(session()->has('message2'))
            <div class="alert alert-danger">
                {{session('message2')}}
            </div>
    @endif
        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                <!-- Sidebar Toggle (Topbar) -->
                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                </button>
                <form method="POST" action="{{route('searchClient')}}"
                    class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                    @csrf
                    <div class="input-group">
                        <input type="text" id="clientName" name="clientName" class="form-control typeahead" placeholder="Search for..."
                               aria-label="Search" aria-describedby="basic-addon2">

                    <div class="input-group-append">
                        <input type="submit" class="btn btn-primary" value="Search">
                    </div>
                    </div>
                </form>


                <script type="text/javascript">

                    url = "{{route('get-result')}}";

                    $('input.typeahead').typeahead({
                        source:function (value,process){
                            return $.get(url,{value:value},function (data){
                                return process(data);
                            });
                        }
                    });

                </script>

                <!-- Topbar Navbar -->
                <ul class="navbar-nav ml-auto">

                    <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                    <li class="nav-item dropdown no-arrow d-sm-none">
                        <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-search fa-fw"></i>
                        </a>
                        <!-- Dropdown - Messages -->
                        <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                             aria-labelledby="searchDropdown">
                            <form class="form-inline mr-auto w-100 navbar-search">
                                <div class="input-group">
                                    <input type="text" class="form-control bg-light border-0 small"
                                           placeholder="Search for..." aria-label="Search"
                                           aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="button">
                                            <i class="fas fa-search fa-sm"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </li>






                    <!-- Nav Item - User Information -->
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{Auth::user()->name}}</span>
                            <img class="img-profile rounded-circle"src="{{asset('images/user.png')}}" />
                        </a>
                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                             aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                Profile
                            </a>
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                Settings
                            </a>
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                Activity Log
                            </a>
                            <div class="dropdown-divider"></div>

                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>

                        </div>
                    </li>

                </ul>

            </nav>
            <!-- End of Topbar -->

            <!-- Begin Page Content -->
            <div class="container-fluid">
                <div class="row">
                    @yield('content')
                </div>


            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        <footer class="sticky-footer bg-white">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright &copy; Dimensio Agency  2022</span>
                </div>
            </div>
        </footer>
        <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="{{ route('logout') }}">Logout</a>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="{{mix('js/app.js')}}"></script>


<!-- Custom scripts for all pages-->
<script src="{{asset('js/sb-admin.min.js')}}"></script>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
    $( function() {
        $( ".datepicker" ).datepicker();
    } );
</script>

@livewireScripts
</body>




</html>
