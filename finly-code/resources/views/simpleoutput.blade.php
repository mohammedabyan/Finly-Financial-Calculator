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
            
<!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col">
            <div class="card card-primary card-tabs">
              <div class="card-header p-0 pt-1">
                <ul class="nav nav-tabs" id="custom-tabs-two-tab" role="tablist">
                  <li class="pt-2 px-3"><h3 class="card-title">Analysis Result</h3></li>
                  <li class="nav-item">
                    <a class="nav-link active" id="custom-tabs-two-home-tab" data-toggle="pill" href="#custom-tabs-two-home" role="tab" aria-controls="custom-tabs-two-home" aria-selected="true">Income Analysis</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-two-profile-tab" data-toggle="pill" href="#custom-tabs-two-profile" role="tab" aria-controls="custom-tabs-two-profile" aria-selected="false">Liquidity</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-two-messages-tab" data-toggle="pill" href="#custom-tabs-two-messages" role="tab" aria-controls="custom-tabs-two-messages" aria-selected="false">Profitability</a>
                  </li>
                </ul>
              </div>
              <div class="card-body">
                <div class="tab-content" id="custom-tabs-two-tabContent">
                  <div class="tab-pane fade show active" id="custom-tabs-two-home" role="tabpanel" aria-labelledby="custom-tabs-two-home-tab">
                    <!-- CARD -->
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
                              <span class="description-percentage text-success"><i class="fas fa-caret-up"></i> 17%</span>
                              <h5 class="description-header">$35,210.43</h5>
                              <span class="description-text">GROSS PROFIT</span><i class="fas fa-info-circle" data-toggle="tooltip" data-placement="right" @popper(TOOLTIP DESC)> </i>
                            </div>
                            <!-- /.description-block -->
                          </div>
                          <!-- /.col -->
                          <div class="col">
                            <div class="description-block border-right">
                              <span class="description-percentage text-warning"><i class="fas fa-caret-left"></i> 0%</span>
                              <h5 class="description-header">$10,390.90</h5>
                              <span class="description-text">OPERATING INCOME</span><i class="fas fa-info-circle" data-toggle="tooltip" data-placement="right" @popper(TOOLTIP DESC)> </i>
                            </div>
                            <!-- /.description-block -->
                          </div>
                          <!-- /.col -->
                          <div class="col">
                            <div class="description-block border-right">
                              <span class="description-percentage text-success"><i class="fas fa-caret-up"></i> 20%</span>
                              <h5 class="description-header">$24,813.53</h5>
                              <span class="description-text">NET PROFIT</span><i class="fas fa-info-circle" data-toggle="tooltip" data-placement="right" @popper(TOOLTIP DESC)> </i>
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
                  <div class="tab-pane fade" id="custom-tabs-two-profile" role="tabpanel" aria-labelledby="custom-tabs-two-profile-tab">
                     <!-- CARD -->
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
                              <span class="description-percentage text-success"><i class="fas fa-caret-up"></i> 17%</span>
                              <h5 class="description-header">$35,210.43</h5>
                              <span class="description-text">GROSS PROFIT</span><i class="fas fa-info-circle" data-toggle="tooltip" data-placement="right" @popper(TOOLTIP DESC)> </i>
                            </div>
                            <!-- /.description-block -->
                          </div>
                          <!-- /.col -->
                          <div class="col">
                            <div class="description-block border-right">
                              <span class="description-percentage text-warning"><i class="fas fa-caret-left"></i> 0%</span>
                              <h5 class="description-header">$10,390.90</h5>
                              <span class="description-text">OPERATING INCOME</span><i class="fas fa-info-circle" data-toggle="tooltip" data-placement="right" @popper(TOOLTIP DESC)> </i>
                            </div>
                            <!-- /.description-block -->
                          </div>
                          <!-- /.col -->
                          <div class="col">
                            <div class="description-block border-right">
                              <span class="description-percentage text-success"><i class="fas fa-caret-up"></i> 20%</span>
                              <h5 class="description-header">$24,813.53</h5>
                              <span class="description-text">NET PROFIT</span><i class="fas fa-info-circle" data-toggle="tooltip" data-placement="right" @popper(TOOLTIP DESC)> </i>
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
                     <!-- CARD -->
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
                              <span class="description-percentage text-success"><i class="fas fa-caret-up"></i> 17%</span>
                              <h5 class="description-header">$35,210.43</h5>
                              <span class="description-text">GROSS PROFIT</span><i class="fas fa-info-circle" data-toggle="tooltip" data-placement="right" @popper(TOOLTIP DESC)> </i>
                            </div>
                            <!-- /.description-block -->
                          </div>
                          <!-- /.col -->
                          <div class="col">
                            <div class="description-block border-right">
                              <span class="description-percentage text-warning"><i class="fas fa-caret-left"></i> 0%</span>
                              <h5 class="description-header">$10,390.90</h5>
                              <span class="description-text">OPERATING INCOME</span><i class="fas fa-info-circle" data-toggle="tooltip" data-placement="right" @popper(TOOLTIP DESC)> </i>
                            </div>
                            <!-- /.description-block -->
                          </div>
                          <!-- /.col -->
                          <div class="col">
                            <div class="description-block border-right">
                              <span class="description-percentage text-success"><i class="fas fa-caret-up"></i> 20%</span>
                              <h5 class="description-header">$24,813.53</h5>
                              <span class="description-text">NET PROFIT</span><i class="fas fa-info-circle" data-toggle="tooltip" data-placement="right" @popper(TOOLTIP DESC)> </i>
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
                  <div class="tab-pane fade" id="custom-tabs-two-settings" role="tabpanel" aria-labelledby="custom-tabs-two-settings-tab">
                     <!-- CARD -->
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
                              <span class="description-percentage text-success"><i class="fas fa-caret-up"></i> 17%</span>
                              <h5 class="description-header">$35,210.43</h5>
                              <span class="description-text">GROSS PROFIT</span><i class="fas fa-info-circle" data-toggle="tooltip" data-placement="right" @popper(TOOLTIP DESC)> </i>
                            </div>
                            <!-- /.description-block -->
                          </div>
                          <!-- /.col -->
                          <div class="col">
                            <div class="description-block border-right">
                              <span class="description-percentage text-warning"><i class="fas fa-caret-left"></i> 0%</span>
                              <h5 class="description-header">$10,390.90</h5>
                              <span class="description-text">OPERATING INCOME</span><i class="fas fa-info-circle" data-toggle="tooltip" data-placement="right" @popper(TOOLTIP DESC)> </i>
                            </div>
                            <!-- /.description-block -->
                          </div>
                          <!-- /.col -->
                          <div class="col">
                            <div class="description-block border-right">
                              <span class="description-percentage text-success"><i class="fas fa-caret-up"></i> 20%</span>
                              <h5 class="description-header">$24,813.53</h5>
                              <span class="description-text">NET PROFIT</span><i class="fas fa-info-circle" data-toggle="tooltip" data-placement="right" @popper(TOOLTIP DESC)> </i>
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
                </div>
              </div>
              <!-- /.card -->
            </div>
          </div>
        
</div>
</div>
@stop