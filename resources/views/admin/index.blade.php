@extends('layouts.app')
@section('contents')
  <div class="be-content">
        <div class="main-content container-fluid">
          <div class="row">
            <div class="col-12 col-lg-6 col-xl-3">
                        <div class="widget widget-tile">
                          <div class="chart sparkline" id="spark1"></div>
                          <div class="data-info">
                            <div class="desc">New Users</div>
                            <div class="value"><span class="indicator indicator-equal mdi mdi-chevron-right"></span><span class="number" data-toggle="counter" data-end="113">0</span>
                            </div>
                          </div>
                        </div>
            </div>
            <div class="col-12 col-lg-6 col-xl-3">
                        <div class="widget widget-tile">
                          <div class="chart sparkline" id="spark2"></div>
                          <div class="data-info">
                            <div class="desc">Monthly Sales</div>
                            <div class="value"><span class="indicator indicator-positive mdi mdi-chevron-up"></span><span class="number" data-toggle="counter" data-end="80" data-suffix="%">0</span>
                            </div>
                          </div>
                        </div>
            </div>
            <div class="col-12 col-lg-6 col-xl-3">
                        <div class="widget widget-tile">
                          <div class="chart sparkline" id="spark3"></div>
                          <div class="data-info">
                            <div class="desc">Impressions</div>
                            <div class="value"><span class="indicator indicator-positive mdi mdi-chevron-up"></span><span class="number" data-toggle="counter" data-end="532">0</span>
                            </div>
                          </div>
                        </div>
            </div>
            <div class="col-12 col-lg-6 col-xl-3">
                        <div class="widget widget-tile">
                          <div class="chart sparkline" id="spark4"></div>
                          <div class="data-info">
                            <div class="desc">Downloads</div>
                            <div class="value"><span class="indicator indicator-negative mdi mdi-chevron-down"></span><span class="number" data-toggle="counter" data-end="113">0</span>
                            </div>
                          </div>
                        </div>
            </div>
          </div>

          <div class="row">
            <div class="col-12 col-lg-12">
              <div class="card card-table">
                <div class="card-header">
                  <div class="tools dropdown"> <span class="icon mdi mdi-download"></span><a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown"><span class="icon mdi mdi-more-vert"></span></a>
                    <div class="dropdown-menu" role="menu"><a class="dropdown-item" href="#">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a>
                      <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Separated link</a>
                    </div>
                  </div>
                  <div class="title">Purchases</div>
                </div>
                <div class="card-body table-responsive">
                  <table class="table table-striped table-borderless">
                    <thead>
                      <tr>
                        <th style="width:40%;">Product</th>
                        <th class="number">Price</th>
                        <th style="width:20%;">Date</th>
                        <th style="width:20%;">State</th>
                        <th class="actions" style="width:5%;"></th>
                      </tr>
                    </thead>
                    <tbody class="no-border-x">
                      <tr>
                        <td>Sony Xperia M4</td>
                        <td class="number">$149</td>
                        <td>Aug 23, 2018</td>
                        <td class="text-success">Completed</td>
                        <td class="actions"><a class="icon" href="#"><i class="mdi mdi-plus-circle-o"></i></a></td>
                      </tr>
                      <tr>
                        <td>Apple iPhone 6</td>
                        <td class="number">$535</td>
                        <td>Aug 20, 2018</td>
                        <td class="text-success">Completed</td>
                        <td class="actions"><a class="icon" href="#"><i class="mdi mdi-plus-circle-o"></i></a></td>
                      </tr>
                      <tr>
                        <td>Samsung Galaxy S7</td>
                        <td class="number">$583</td>
                        <td>Aug 18, 2018</td>
                        <td class="text-warning">Pending</td>
                        <td class="actions"><a class="icon" href="#"><i class="mdi mdi-plus-circle-o"></i></a></td>
                      </tr>
                      <tr>
                        <td>HTC One M9</td>
                        <td class="number">$350</td>
                        <td>Aug 15, 2018</td>
                        <td class="text-warning">Pending</td>
                        <td class="actions"><a class="icon" href="#"><i class="mdi mdi-plus-circle-o"></i></a></td>
                      </tr>
                      <tr>
                        <td>Sony Xperia Z5</td>
                        <td class="number">$495</td>
                        <td>Aug 13, 2018</td>
                        <td class="text-danger">Cancelled</td>
                        <td class="actions"><a class="icon" href="#"><i class="mdi mdi-plus-circle-o"></i></a></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
         
          </div>
        
    
        </div>
      </div>
@endsection