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
              <li class="breadcrumb-item"><a href="home">Home</a></li>
              <li class="breadcrumb-item active">Advanced</li>
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
                <h3 class="card-title">Income Statement Items</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form>
                <div class="card-body">
                    <div class="form-group">
                    <label for="Gross Revenue">Gross Revenue</label><i class="fas fa-info-circle" data-toggle="tooltip" data-placement="right" @popper(The total amount of revenue generated before deducting any expenses or costs.)></i>
                    <input type="number" class="form-control" id="grossRevenue" placeholder="Enter a number" min=0>
                    </div>

                    <div class="form-group">
                    <label for="COGs">COGs (Cost of Goods Sold)</label><i class="fas fa-info-circle" data-toggle="tooltip" data-placement="right" @popper(The direct costs associated with producing or purchasing the goods sold by a business.)> </i>
                    <input type="number" class="form-control" id="cogs" placeholder="Enter a number" min=0>
                    </div>

                    <div class="form-group">
                    <label for="Operating">Operating Expenses</label><i class="fas fa-info-circle" data-toggle="tooltip" data-placement="right" @popper(The costs incurred by a business in its day-to-day operations, excluding COGs.)> </i>
                    <input type="number" class="form-control" id="operatingExpenses" placeholder="Enter a number" min=0>
                    </div>

                    <div class="form-group">
                        <label for="Interest">Interest Expenses</label><i class="fas fa-info-circle" data-toggle="tooltip" data-placement="right" @popper(The cost of borrowing funds or interest paid on outstanding loans or debt.)> </i>
                        <input type="number" class="form-control" id="interest" placeholder="Enter a number" min=0>
                        </div>

                    <div class="form-group">
                        <label for="Income Tax">Income Tax Expenses</label><i class="fas fa-info-circle" data-toggle="tooltip" data-placement="right" @popper(The amount of taxes payable by a business on its taxable income.)> </i>
                        <input type="number" class="form-control" id="incomeTax" placeholder="Enter a number" min=0>
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
                <h3 class="card-title">Balance Sheet Items</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form>
                <div class="card-body">
                    <div class="form-group">
                    <label for="Current Assets">Current Assets</label><i class="fas fa-info-circle" data-toggle="tooltip" data-placement="right" @popper(The resources owned by a business that are expected to be converted into cash or used up within one year.)> </i>
                    <input type="number" class="form-control" id="currentAssets" placeholder="Enter a number" min=0>
                    </div>

                    <div class="form-group">
                        <label for="Current Liabilities">Current Liabilities</label><i class="fas fa-info-circle" data-toggle="tooltip" data-placement="right" @popper(The obligations or debts of a business that are expected to be settled within one year.)> </i>
                        <input type="number" class="form-control" id="currentLiabilities" placeholder="Enter a number" min=0>
                        </div>

                    <div class="form-group">
                    <label for="Inventory">Inventory</label><i class="fas fa-info-circle" data-toggle="tooltip" data-placement="right" @popper( The goods or products held by a business for sale or used in the production process.)> </i>
                    <input type="number" class="form-control" id="inventory" placeholder="Enter a number" min=0>
                    </div>

                    <div class="form-group">
                    <label for="Fixed Assets">Fixed Assets</label><i class="fas fa-info-circle" data-toggle="tooltip" data-placement="right" @popper(The long-term tangible assets of a business, such as property, plant, and equipment, used in its operations.)> </i>
                    <input type="number" class="form-control" id="fixedAssets" placeholder="Enter a number" min=0>
                    </div>

                    <div class="form-group">
                        <label for="Total Assets">Total Assets</label><i class="fas fa-info-circle" data-toggle="tooltip" data-placement="right" @popper(The sume of the current and fixed assets, representing the total value of its resources.)> </i>
                        <input type="number" class="form-control" id="totalAssets" placeholder="Enter a number" min=0>
                        </div>

                    <div class="form-group">
                        <label for="Total Liabilities">Total Liabilities</label><i class="fas fa-info-circle" data-toggle="tooltip" data-placement="right" @popper(The sum of the current and long-term liabilities, representing its total obligations.)> </i>
                        <input type="number" class="form-control" id="totalLiabilities" placeholder="Enter a number" min=0>
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
@stop

