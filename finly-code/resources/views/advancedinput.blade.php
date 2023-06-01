@extends('layouts.master')


@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          <h1 class="m-0">Advanced Form</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Advanced</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

            <!-- general form elements -->
            <div class="card card-primary">
                <div class="card-header">
                <h3 class="card-title">Quick Example</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form>
                <div class="card-body">
                    <div class="form-group">
                    <label for="Sales">Sales / Gross Revenue</label><i class="fas fa-info-circle" @popper(TOOL TIP DESC)> </i>
                    <input type="number" class="form-control" id="Sales" placeholder="Enter a number" min=0>
                    </div>

                    <div class="form-group">
                    <label for="Sales">Assets</label><i class="fas fa-info-circle" @popper(TOOL TIP DESC)> </i>
                    <input type="number" class="form-control" id="Assets" placeholder="Enter a number" min=0>
                    </div>

                    <div class="form-group">
                    <label for="Sales">Inventory</label><i class="fas fa-info-circle" @popper(TOOL TIP DESC)> </i>
                    <input type="number" class="form-control" id="Sales" placeholder="Enter a number" min=0>
                    </div>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->



            <!-- general form elements -->
            <div class="card card-primary">
                <div class="card-header">
                <h3 class="card-title">Quick Example</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form>
                <div class="card-body">
                    <div class="form-group">
                    <label for="COGS">COGS</label><i class="fas fa-info-circle" @popper(TOOL TIP DESC)> </i>
                    <input type="number" class="form-control" id="COGS" placeholder="Enter a number" min=0>
                    </div>

                    <div class="form-group">
                    <label for="Liabilities">Liabilities</label><i class="fas fa-info-circle" @popper(TOOL TIP DESC)> </i>
                    <input type="number" class="form-control" id="Liabilities" placeholder="Enter a number" min=0>
                    </div>

                    <div class="form-group">
                    <label for="Operating Expenses">Inventory</label><i class="fas fa-info-circle" @popper(TOOL TIP DESC)> </i>
                    <input type="number" class="form-control" id="operatingExpenses" placeholder="Enter a number" min=0>
                    </div>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
@stop

