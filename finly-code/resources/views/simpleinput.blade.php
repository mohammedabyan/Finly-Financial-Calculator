<!-- SIMPLEINPUT -->

@extends('layouts.master')

@section('style')
#OUTPUT, #OUTPUT2 {
  visibility: hidden;
}

@stop

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
  <form id="simpleInput">
    <div class="row">
      <div class="col">
        <!-- general form elements -->
        <div class="card bg-gradient-primary">
            <div class="card-header">
            <h3 class="card-title">Income</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <div class="card-body">
                <div class="form-group">
                <label for="grossRevenue">Sales / Gross Revenue</label><i class="fas fa-info-circle" data-toggle="tooltip" data-placement="right" @popper(TOOLTIP DESC)></i>
                <input type="number" class="form-control" id="grossRevenue" placeholder="Enter a number" min=0>
                </div>

                <div class="form-group">
                <label for="inventory">Inventory</label><i class="fas fa-info-circle" data-toggle="tooltip" data-placement="right" @popper(TOOLTIP DESC)> </i>
                <input type="number" class="form-control" id="inventory" placeholder="Enter a number" min=0>
                </div>

            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <div class="col">
        <!-- general form elements -->
        <div class="card bg-gradient-warning">
            <div class="card-header">
            <h3 class="card-title">Expenses</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <div class="card-body">
                <div class="form-group">
                <label for="costOfGoodsSold">COGS</label><i class="fas fa-info-circle" data-toggle="tooltip" data-placement="right" @popper(TOOLTIP DESC)> </i>
                <input type="number" class="form-control" id="costOfGoodsSold" placeholder="Enter a number" min=0>
                </div>

                <div class="form-group">
                <label for="operatingExpenses">Operating Expenses</label><i class="fas fa-info-circle" data-toggle="tooltip" data-placement="right" @popper(TOOLTIP DESC)> </i>
                <input type="number" class="form-control" id="operatingExpenses" placeholder="Enter a number" min=0>
                </div>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
    </div>
    <div class="row">
      <div class="col">
        <div id="submit" class="d-flex justify-content-center">
          <button type="button" class="btn btn-block btn-secondary btn-s" onclick="calculateSimpleMetrics();">Submit</button>
        </div>
      </div>
    </div>
  </form>


  <!-- OUTPUT -->
      <div class="row" id="OUTPUT">
        <div class="col">
            <div class="card card-primary card-tabs">
              <div class="card-header p-0 pt-1">
                <ul class="nav nav-tabs" id="custom-tabs-two-tab" role="tablist">
                  <li class="pt-2 px-3"><h3 class="card-title">Analysis Result</h3></li>
                  <li class="nav-item">
                    <a class="nav-link active" id="custom-tabs-two-home-tab" data-toggle="pill" href="#custom-tabs-two-home" role="tab" aria-controls="custom-tabs-two-home" aria-selected="true">Income Analysis</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-two-messages-tab" data-toggle="pill" href="#custom-tabs-two-messages" role="tab" aria-controls="custom-tabs-two-messages" aria-selected="false">Profitability</a>
                  </li>
                </ul>
              </div>
              <div class="card-body">
                <div class="tab-content" id="custom-tabs-two-tabContent">
                  <div class="tab-pane fade show active" id="custom-tabs-two-home" role="tabpanel" aria-labelledby="custom-tabs-two-home-tab">
                    <!-- INCOME ANALYSIS CARD -->
                    <div class="card">
                      <!-- /.card-header -->
                      <div class="card-body">
                        <div class="row">
                          <div class="col">
                            <p class="text-center">
                              <strong>Chart</strong>
                            </p>

                            <div class="chart">
                              <!-- Sales Chart Canvas -->
                              <canvas id="salesChart" height="180" style="height: 180px;"></canvas>
                            </div>
                            <!-- /.chart-responsive -->
                          </div>
                        </div>
                        <!-- /.row -->
                      </div>
                      <!-- ./card-body -->
                      <div class="card-footer">
                        <div class="row">
                          <div class="col">
                            <div class="description-block border-right">
                              <h5 class="description-header" id="gpText"></h5>
                              <span class="description-text">GROSS PROFIT</span><i class="fas fa-info-circle" data-toggle="tooltip" data-placement="right" @popper(The amount of money remaining after subtracting the cost of goods sold from total revenue. It represents the profit before deducting other expenses.)> </i>
                            </div>
                            <!-- /.description-block -->
                          </div>
                          <!-- /.col -->
                          <div class="col">
                            <div class="description-block border-right">
                            <h5 class="description-header" id="npText"></h5>
                              <span class="description-text">NET PROFIT</span><i class="fas fa-info-circle" data-toggle="tooltip" data-placement="right" @popper(The final profit earned by a company after deducting all expenses, including taxes and interest. It represents the overall profitability of the business.)> </i>
                            </div>
                            <!-- /.description-block -->
                          </div>
                        </div>
                        <!-- /.row -->
                      </div>
                      <!-- /.card-footer -->
                    </div>
                    <!-- CARD -->
                  </div>

                  <div class="tab-pane fade" id="custom-tabs-two-messages" role="tabpanel" aria-labelledby="custom-tabs-two-messages-tab">
                    <!-- PROFITABILITY CARD -->
                    <div class="card">
                      <!-- /.card-header -->
                      <div class="card-body">
                        <div class="row">
                          <div class="col">
                            <p class="text-center">
                              <strong>Chart</strong>
                            </p>

                            <div class="chart">
                              <!-- Sales Chart Canvas -->
                              <canvas id="profitabilityChart" height="180" style="height: 180px;"></canvas>
                            </div>
                            <!-- /.chart-responsive -->
                          </div>
                        </div>
                        <!-- /.row -->
                      </div>
                      <!-- ./card-body -->
                      <div class="card-footer">
                        <div class="row">
                          <div class="col">
                            <div class="description-block border-right">
                            <h5 class="description-header" id="itText"></h5>
                              <span class="description-text">Inventory turnover</span><i class="fas fa-info-circle" data-toggle="tooltip" data-placement="right" @popper(Profit margin on sales is the percentage of profit a company earns from each dollar of revenue generated. It indicates how efficiently a company manages its costs and pricing strategies to generate profit)></i>
                            </div>
                            <!-- /.description-block -->
                          </div>
                          <!-- /.col -->
                          <div class="col">
                            <div class="description-block border-right">
                            <h5 class="description-header" id="pmText"></h5>
                              <span class="description-text">PROFIT margin on sales</span><i class="fas fa-info-circle" data-toggle="tooltip" data-placement="right" @popper(The profit generated from a companys regular business operations. It is calculated by subtracting operating expenses from gross profit.)> </i>
                            </div>
                            <!-- /.description-block -->
                          </div>
                          <!-- /.col -->
                        </div>
                        <!-- /.row -->
                      </div>
                      <!-- /.card-footer -->
                    </div>
                    <!-- CARD -->
                  </div>
                </div>
              </div>
              <!-- /.card -->
            </div>
          </div>
        </div>
      </div>

      <div class="row" id="OUTPUT2">
        <div class="col">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Listed Financial Indicators</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Financial Variables</th>
                      <th>Amount<i class="fas fa-info-circle" data-toggle="tooltip" data-placement="right" @popper(If Blue, unit is measured in $. Else, unit is measured in %.)> </i></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1.</td>
                      <td>GrossProfit</td>
                      <td><span class="badge bg-primary" id="grossProfit1"></span></td>
                    </tr>
                    <tr>
                      <td>2.</td>
                      <td>NetProfit</td>
                      <td><span class="badge bg-primary"  id="netProfit1"></span></td>
                    </tr>
                    <tr>
                      <td>3.</td>
                      <td>ProfitMargin</td>
                      <td><span class="badge bg-warning" id="profitMargin1"></span></td>
                    </tr>
                    <tr>
                      <td>4.</td>
                      <td>InventoryTurnover</td>
                      <td><span class="badge bg-warning" id="inventoryTurnover1"></span></td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
      </div>

</div>

<script src="dist/js/finly.js"></script>

{{-- <script>

    var gP = document.getElementById("grossProfit").value;
    document.getElementById("grossProfit1").innerHTML = gP;
    var nP = document.getElementById("netProfit").value;
    document.getElementById("netProfit1").innerHTML = nP;
    var pM = document.getElementById("profitMargin").value;
    document.getElementById("profitMargin1").innerHTML = pM;
    var iT = document.getElementById("inventoryTurnover").value;
    document.getElementById("inventoryTurnover1").innerHTML = iT;

</script> --}}


@stop
