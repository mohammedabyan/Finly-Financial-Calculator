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
                        <label for="Total Assets">Total Assets</label><i class="fas fa-info-circle" data-toggle="tooltip" data-placement="right" @popper(The sum of the current and fixed assets, representing the total value of its resources.)> </i>
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
      </form>
    </div>

    <!-- OUTPUT -->
    <div class="container-fluid">
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
                      <a class="nav-link" id="custom-tabs-two-l-tab" data-toggle="pill" href="#custom-tabs-two-l" role="tab" aria-controls="custom-tabs-two-l" aria-selected="false">Liquidity</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="custom-tabs-two-am-tab" data-toggle="pill" href="#custom-tabs-two-am" role="tab" aria-controls="custom-tabs-two-am" aria-selected="false">Asset Management</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="custom-tabs-two-dm-tab" data-toggle="pill" href="#custom-tabs-two-dm" role="tab" aria-controls="custom-tabs-two-dm" aria-selected="false">Debt Management</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="custom-tabs-two-p-tab" data-toggle="pill" href="#custom-tabs-two-p" role="tab" aria-controls="custom-tabs-two-p" aria-selected="false">Profitability</a>
                    </li>
                  </ul>
                </div>
                <div class="card-body">
                  <div class="tab-content" id="custom-tabs-two-tabContent">
                    <!--INCOME ANALYSIS-->
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
                              <h5 class="description-header" id="oiText"></h5>
                                <span class="description-text">OPERATING INCOME</span><i class="fas fa-info-circle" data-toggle="tooltip" data-placement="right" @popper(The profit generated from a companys regular business operations. It is calculated by subtracting operating expenses from gross profit.)> </i>
                              </div>
                              <!-- /.description-block -->
                            </div>
                            <div class="col">
                              <div class="description-block border-right">
                              <h5 class="description-header" id="ibtText"></h5>
                                <span class="description-text">INCOME BEFORE TAX</span><i class="fas fa-info-circle" data-toggle="tooltip" data-placement="right" @popper(The profit generated from a companys regular business operations. It is calculated by subtracting operating expenses from gross profit.)> </i>
                              </div>
                              <!-- /.description-block -->
                            </div>
                            <!-- /.col -->
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
                    <!--LIQUIDITY ANALYSIS-->
                    <div class="tab-pane fade" id="custom-tabs-two-l" role="tabpanel" aria-labelledby="custom-tabs-two-l-tab">
                      <!-- LIQUIDITY CARD -->
                      <div class="card">
                        <!-- /.card-header -->
                        <div class="card-body">
                          <div class="row">
                            <div class="col">
                              <p class="text-center">
                                <strong>Chart</strong>
                              </p>

                              <div class="chart">
                                <!-- liquidity Chart Canvas -->
                                <canvas id="liquidityChart" height="180" style="height: 180px;"></canvas>
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
                              <h5 class="description-header" id="clText"></h5>
                                <span class="description-text">CURRENT LIQUIDITY</span><i class="fas fa-info-circle" data-toggle="tooltip" data-placement="right" @popper(Current liquidity refers to a companys ability to pay off its short-term obligations. It measures the companys ability to meet its current liabilities using its current assets, such as cash, accounts receivable, and inventory.)> </i>
                              </div>
                              <!-- /.description-block -->
                            </div>
                            <!-- /.col -->
                            <div class="col">
                              <div class="description-block border-right">
                              <h5 class="description-header" id="atText"></h5>
                                <span class="description-text">QUICK (ACID TEST)</span><i class="fas fa-info-circle" data-toggle="tooltip" data-placement="right" @popper(The acid test, also known as the quick ratio, is a measure of a companys short-term liquidity. It assesses the companys ability to cover its immediate liabilities using its most liquid assets, excluding inventory.)> </i>
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
                    <!--ASSET MANAGEMENT-->
                    <div class="tab-pane fade" id="custom-tabs-two-am" role="tabpanel" aria-labelledby="custom-tabs-two-am-tab">
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
                                <canvas id="assetManagementChart" height="180" style="height: 180px;"></canvas>
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
                                <span class="description-text">INVENTORY TURNOVER</span><i class="fas fa-info-circle" data-toggle="tooltip" data-placement="right" @popper(Profit margin on sales is the percentage of profit a company earns from each dollar of revenue generated. It indicates how efficiently a company manages its costs and pricing strategies to generate profit)></i>
                              </div>
                              <!-- /.description-block -->
                            </div>
                            <!-- /.col -->
                            <div class="col">
                              <div class="description-block border-right">
                              <h5 class="description-header" id="faText"></h5>
                                <span class="description-text">FIXED Assets Turnover</span><i class="fas fa-info-circle" data-toggle="tooltip" data-placement="left" @popper(Return on assets (ROA) measures a companys profitability in relation to its total assets. It shows how effectively a company utilizes its assets to generate profit.)> </i>
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
                    <!--DEBT MANAGEMENT-->
                    <div class="tab-pane fade" id="custom-tabs-two-dm" role="tabpanel" aria-labelledby="custom-tabs-two-dm-tab">
                      <!-- debt CARD -->
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
                                <canvas id="debtManagementChart" height="180" style="height: 180px;"></canvas>
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
                              <h5 class="description-header" id="dttaText"></h5>
                                <span class="description-text">DEBT TO TOTAL ASSETS</span><i class="fas fa-info-circle" data-toggle="tooltip" data-placement="right" @popper(Profit margin on sales is the percentage of profit a company earns from each dollar of revenue generated. It indicates how efficiently a company manages its costs and pricing strategies to generate profit)></i>
                              </div>
                              <!-- /.description-block -->
                            </div>
                            <!-- /.col -->
                            <div class="col">
                              <div class="description-block border-right">
                              <h5 class="description-header" id="tiText"></h5>
                                <span class="description-text">TIMES INTEREST EARNED</span><i class="fas fa-info-circle" data-toggle="tooltip" data-placement="left" @popper(Return on assets (ROA) measures a companys profitability in relation to its total assets. It shows how effectively a company utilizes its assets to generate profit.)> </i>
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
                    <!--PROFITABILITY-->
                    <div class="tab-pane fade" id="custom-tabs-two-p" role="tabpanel" aria-labelledby="custom-tabs-two-p-tab">
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
                                <!-- Sales Chart Canvass -->
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
                              <h5 class="description-header" id="pmText"></h5>
                                <span class="description-text">PROFIT MARGIN ON SALES</span><i class="fas fa-info-circle" data-toggle="tooltip" data-placement="right" @popper(Profit margin on sales is the percentage of profit a company earns from each dollar of revenue generated. It indicates how efficiently a company manages its costs and pricing strategies to generate profit)></i>
                              </div>
                              <!-- /.description-block -->
                            </div>
                            <!-- /.col -->
                            <div class="col">
                              <div class="description-block border-right">
                              <h5 class="description-header" id="raText"></h5>
                                <span class="description-text">RETURN ON ASSETS</span><i class="fas fa-info-circle" data-toggle="tooltip" data-placement="left" @popper(Return on assets (ROA) measures a companys profitability in relation to its total assets. It shows how effectively a company utilizes its assets to generate profit.)> </i>
                              </div>
                              <!-- /.description-block -->
                            </div>
                            <!-- /.col -->
                            <div class="col">
                              <div class="description-block border-right">
                              <h5 class="description-header" id="raText"></h5>
                                <span class="description-text">RETURN ON EQUITY</span><i class="fas fa-info-circle" data-toggle="tooltip" data-placement="left" @popper(Return on assets (ROA) measures a companys profitability in relation to its total assets. It shows how effectively a company utilizes its assets to generate profit.)> </i>
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


</div>
<script src="dist/js/finly.js"></script>
@stop

