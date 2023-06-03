<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>FinlyLITE | Dashboard</title>

  <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- fullCalendar -->
  <link rel="stylesheet" href="../plugins/fullcalendar/main.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

 <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
        <img class="animation__shake" src="dist/img/finlylogo.png" height="60" width="60">
    </div>


    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-light">

        <ul class="navbar-nav ml-auto">
            <!-- Authentication Links -->
            @guest
                @if (Route::has('login'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                @endif

                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif
            @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
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
            @endguest

            <li class="nav-item">
                <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                <i class="fas fa-expand-arrows-alt"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#" role="button">
                <i class="fas fa-th-large"></i>
                </a>
            </li>
        </ul>
    </nav>

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-light-purple elevation-4">
        <!-- Brand Logo -->
        <a href="home" class="brand-link" style="background-color: #8C52FF">
        <img src="dist/img/finlylogo.png" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light text-white">FINLY</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="dist/img/boy.png" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <a href="#" class="d-block">{{ Auth::user()->name ?? 'Guest User'}}</a>
                </div>
            </div>

            <!-- SidebarSearch Form -->
            <div class="form-inline">
                <div class="input-group" data-widget="sidebar-search" style="color:white">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                    <div class="input-group-append">
                        <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                    with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="home" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                        Dashboard
                        <span class="right badge badge-danger">New</span>
                        </p>
                    </a>
                </li>
                <li class="nav-item menu-open">
                    <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Financial Checker
                            <i class="right fas fa-angle-left"></i>
                            <span class="badge badge-info right">2</span>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="simpleinput" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Simple Form</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="advancedinput" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Advanced Form</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="planner" class="nav-link">
                        <i class="nav-icon far fa-calendar-alt"></i>
                        <p>
                        Planner
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="contact" class="nav-link">
                        <i class="nav-icon far fa-envelope"></i>
                        <p>
                        Contact
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="faq" class="nav-link">
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                        FAQ
                        </p>
                    </a>
                </li>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                <h1 class="m-0">Dashboard</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="home">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <div class="container-fluid">
            <div class="row">
                <div class="col">
                <!-- general form elements -->
                <form id="goSimple" action="/simpleinput">
                <div class="card bg-gradient-success">
                    <div class="card-header">
                    <h3 class="card-title">Are you getting started?</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <div class="card-body">
                        {{-- <div class="form-group">
                        <label for="grossRevenue">Sales / Gross Revenue</label><i class="fas fa-info-circle" data-toggle="tooltip" data-placement="right" @popper(TOOLTIP DESC)></i>
                        <input type="number" class="form-control" id="grossRevenue" placeholder="Enter a number" min=0>
                        </div>

                        <div class="form-group">
                        <label for="totalAssets">Total Assets</label><i class="fas fa-info-circle" data-toggle="tooltip" data-placement="right" @popper(TOOLTIP DESC)> </i>
                        <input type="number" class="form-control" id="totalAssets" placeholder="Enter a number" min=0>
                        </div>

                        <div class="form-group">
                        <label for="inventory">Inventory</label><i class="fas fa-info-circle" data-toggle="tooltip" data-placement="right" @popper(TOOLTIP DESC)> </i>
                        <input type="number" class="form-control" id="inventory" placeholder="Enter a number" min=0>
                        </div> --}}

                        <div id="submit" class="row d-flex justify-content-center">
                            <button type="button" class="btn btn-block btn-light" onclick="window.location='/simpleinput';">I'm a Beginner</button>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
                    </form>
                </div>
                <div class="col">
                    <form id="goAdvanced" action="/advancedinput">
                <!-- general form elements -->
                <div class="card bg-gradient-danger">
                    <div class="card-header">
                    <h3 class="card-title">Are you a professional?</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <div class="card-body">
                        {{-- <div class="form-group">
                        <label for="costOfGoodsSold">COGS</label><i class="fas fa-info-circle" data-toggle="tooltip" data-placement="right" @popper(TOOLTIP DESC)> </i>
                        <input type="number" class="form-control" id="costOfGoodsSold" placeholder="Enter a number" min=0>
                        </div>

                        <div class="form-group">
                        <label for="totalLiabilities">Total Liabilities</label><i class="fas fa-info-circle" data-toggle="tooltip" data-placement="right" @popper(TOOLTIP DESC)> </i>
                        <input type="number" class="form-control" id="totalLiabilities" placeholder="Enter a number" min=0>
                        </div>

                        <div class="form-group">
                        <label for="operatingExpenses">Operating Expenses</label><i class="fas fa-info-circle" data-toggle="tooltip" data-placement="right" @popper(TOOLTIP DESC)> </i>
                        <input type="number" class="form-control" id="operatingExpenses" placeholder="Enter a number" min=0>
                        </div> --}}

                        <div id="submit" class="row d-flex justify-content-center">
                            <button type="button" class="btn btn-block btn-light" onclick="window.location='/advancedinput';">I'm an Expert</button>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
                <form id="goAdvanced">
                </div>
            </div>
        </div>

        {{-- <div class="container-fluid">

            <div class="card card-success">
            <div class="card-body">
                <div class="row">
                <div class="col-md-12 col-lg-6 col-xl">
                    <div class="card mb-2 bg-gradient-dark">
                    <img class="card-img-top" src="../dist/img/photo1.png" alt="Dist Photo 1">
                    <div class="card-img-overlay d-flex flex-column justify-content-end">
                        <h5 class="card-title text-primary text-white">Card Title</h5>
                        <p class="card-text text-white pb-2 pt-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmod tempor.</p>
                        <a href="#" class="text-white">Last update 2 mins ago</a>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div><!-- /.container-fluid --> --}}

        <div class="container-fluid">

            <div class="card card-success">
            <div class="card-body">
                <div class="row">
                <div class="col-md-12 col-lg-6 col-xl-4">
                    <div class="card mb-2" style="background-color: black">
                    <img class="card-img-top" src="../dist/img/left.jpg" style="opacity: 0.5">
                    <div class="card-img-overlay d-flex flex-column justify-content-center">
                        <h5 class="card-title text-white mt-5 pt-2">Optimize Financial Goals</h5>
                        <p class="card-text text-white pb-2 pt-1">Gain insights, improve stability, and drive growth with Finly.</p>
                        <a href="#" class="text-white">Unlock Financial Success Today</a>
                    </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-6 col-xl-4">
                    <div class="card mb-2" style="background-color: black">
                    <img class="card-img-top" src="../dist/img/mid.jpg" style="opacity: 0.5">
                    <div class="card-img-overlay d-flex flex-column justify-content-center">
                        <h5 class="card-title text-white mt-5 pt-2">Take Control of Your Finances</h5>
                        <p class="card-text pb-2 pt-1 text-white">
                            Make informed decisions and drive profitability with Finly.
                        </p>
                        <a href="#" class="text-white">Empowering Financial Confidence</a>
                    </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-6 col-xl-4">
                    <div class="card mb-2" style="background-color: black">
                    <img class="card-img-top" src="../dist/img/right.jpg" style="opacity: 0.5">
                    <div class="card-img-overlay d-flex flex-column justify-content-center">
                        <h5 class="card-title text-white mt-5 pt-2">Secure Your Business's Future</h5>
                        <p class="card-text pb-2 pt-1 text-white">
                            Ensure long-term success and stability using Finly.
                        </p>
                        <a href="#" class="text-white">Building Resilient Financial Foundations</a>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div><!-- /.container-fluid -->
    </div>

    <footer class="main-footer">
        <div class="float-right d-none d-sm-block">
          <b>Version</b> 2.0.0
        </div>
        <strong>Copyright &copy; 2023-2024 <a href="https://adminlte.io">FinlyLTE</a>.</strong> All rights reserved.
      </footer>

      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
      </aside>
      <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- jQuery UI -->
<script src="../plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<!-- fullCalendar 2.2.5 -->
<script src="../plugins/moment/moment.min.js"></script>
<script src="../plugins/fullcalendar/main.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
<!-- Page specific script -->

</body>
</html>
