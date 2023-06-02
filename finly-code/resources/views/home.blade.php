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
<div class="content-wrapper d-flex align-items-center justify-content-center" style="min-height: 100vh;">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <div class="container">
        <div class="row justify-content-center">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h1 class="text-center">Are you an advanced or simple user?</h1>
                        <form action="process_user_selection.php">
                            <div class="row mt-5">
                                <div class="col"></div>
                                <div class="col-md-4">
                                    <!-- Simple User Button -->
                                    <a href="" class="btn btn-primary btn-block btn-lg">Simple <br> User</a>
                                </div>
                                <div class="col"></div>
                                <div class="col-md-4">
                                    <!-- Advanced User Button -->
                                    <a href="" class="btn btn-primary btn-block btn-lg">Advanced <br> User</a>
                                </div>
                                <div class="col"></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop


@section('script')

@stop