@extends('layouts.master')

@section('style')

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.1.0/css/adminlte.min.css">
    <style>
        .full-height {
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>
@stop



@section('content')

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
                        <button type="button" class="btn btn-light" onclick="window.location='/simpleinput';">I'm a Beginner</button>
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
                        <button type="button" class="btn btn-light" onclick="window.location='/advancedinput';">I'm an Expert</button>
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
                <div class="card mb-2">
                <img class="card-img-top" src="../dist/img/left.jpg">
                <div class="card-img-overlay d-flex flex-column justify-content-center">
                    <h5 class="card-title text-white mt-5 pt-2">Optimize Financial Goals</h5>
                    <p class="card-text text-white pb-2 pt-1">Gain insights, improve stability, and drive growth with Finly.</p>
                    <a href="#" class="text-white">Unlock Financial Success Today</a>
                </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-6 col-xl-4">
                <div class="card mb-2">
                <img class="card-img-top" src="../dist/img/mid.jpg">
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
                <div class="card mb-2">
                <img class="card-img-top" src="../dist/img/right.jpg">
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

</div>


@stop

@section('script')

@stop
