@extends('layouts.master')


@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          <h1 class="m-0">Simple Form</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Simple</li>
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
      <div class="card card-success">
          <div class="card-header">
          <h3 class="card-title">Cash In</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form>
          <div class="card-body">
              <div class="form-group">
              <label for="Sales">Sales / Gross Revenue</label><i class="fas fa-info-circle" data-toggle="tooltip" data-placement="right" @popper(TOOLTIP DESC)></i>
              <input type="number" class="form-control" id="Sales" placeholder="Enter a number" min=0>
              </div>

              <div class="form-group">
              <label for="Sales">Assets</label><i class="fas fa-info-circle" data-toggle="tooltip" data-placement="right" @popper(TOOLTIP DESC)> </i>
              <input type="number" class="form-control" id="Assets" placeholder="Enter a number" min=0>
              </div>

              <div class="form-group">
              <label for="Sales">Inventory</label><i class="fas fa-info-circle" data-toggle="tooltip" data-placement="right" @popper(TOOLTIP DESC)> </i>
              <input type="number" class="form-control" id="Sales" placeholder="Enter a number" min=0>
              </div>
          </div>
          <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
    <div class="col">
      <!-- general form elements -->
      <div class="card card-warning">
          <div class="card-header">
          <h3 class="card-title">Cash Out</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form>
          <div class="card-body">
              <div class="form-group">
              <label for="COGS">COGS</label><i class="fas fa-info-circle" data-toggle="tooltip" data-placement="right" @popper(TOOLTIP DESC)> </i>
              <input type="number" class="form-control" id="COGS" placeholder="Enter a number" min=0>
              </div>

              <div class="form-group">
              <label for="Liabilities">Liabilities</label><i class="fas fa-info-circle" data-toggle="tooltip" data-placement="right" @popper(TOOLTIP DESC)> </i>
              <input type="number" class="form-control" id="Liabilities" placeholder="Enter a number" min=0>
              </div>

              <div class="form-group">
              <label for="Operating Expenses">Inventory</label><i class="fas fa-info-circle" data-toggle="tooltip" data-placement="right" @popper(TOOLTIP DESC)> </i>
              <input type="number" class="form-control" id="operatingExpenses" placeholder="Enter a number" min=0>
              </div>
          </div>
          <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
  </div>

  <div class ="row">
    <div class="col">
      <div class="row d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </div>



</div>

@stop

