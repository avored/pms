@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="card card-banner card-chart card-green no-br">
                <div class="card-header">
                    <div class="card-title">
                        <div class="title">Top Sale Today</div>
                    </div>
                    <ul class="card-action">
                        <li>
                            <a href="/">
                                <i class="fa fa-refresh"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="card-body">
                    <div class="ct-chart-sale"></div>
                </div>
            </div>
        </div>
    </div>
    

    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="card card-mini">
                <div class="card-header">
                    <div class="card-title">Last Statuses</div>
                    <ul class="card-action">
                        <li>
                            <a href="/">
                                <i class="fa fa-refresh"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="card-body no-padding table-responsive">
                    <table class="table card-table">
                        <thead>
                        <tr>
                            <th>Products</th>
                            <th class="right">Amount</th>
                            <th>Status</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>MicroSD 64Gb</td>
                            <td class="right">12</td>
                            <td><span class="badge badge-success badge-icon"><i class="fa fa-check" aria-hidden="true"></i><span>Complete</span></span></td>
                        </tr>
                        <tr>
                            <td>MiniPC i5</td>
                            <td class="right">5</td>
                            <td><span class="badge badge-warning badge-icon"><i class="fa fa-clock-o" aria-hidden="true"></i><span>Pending</span></span></td>
                        </tr>
                        <tr>
                            <td>Mountain Bike</td>
                            <td class="right">1</td>
                            <td><span class="badge badge-info badge-icon"><i class="fa fa-credit-card" aria-hidden="true"></i><span>Confirm Payment</span></span></td>
                        </tr>
                        <tr>
                            <td>Notebook</td>
                            <td class="right">10</td>
                            <td><span class="badge badge-danger badge-icon"><i class="fa fa-times" aria-hidden="true"></i><span>Cancelled</span></span></td>
                        </tr>
                        <tr>
                            <td>Raspberry Pi2</td>
                            <td class="right">6</td>
                            <td><span class="badge badge-primary badge-icon"><i class="fa fa-truck" aria-hidden="true"></i><span>Shipped</span></span></td>
                        </tr>
                        <tr>
                            <td>Flashdrive 128Mb</td>
                            <td class="right">40</td>
                            <td><span class="badge badge-info badge-icon"><i class="fa fa-credit-card" aria-hidden="true"></i><span>Confirm Payment</span></span></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="card card-tab card-mini">
                <div class="card-header">
                    <ul class="nav nav-tabs tab-stats">
                        <li role="tab1" class="active">
                            <a href="#tab1" aria-controls="tab1" role="tab" data-toggle="tab">Browsers</a>
                        </li>
                        <li role="tab2">
                            <a href="#tab2" aria-controls="tab2" role="tab" data-toggle="tab">OS</a>
                        </li>
                        <li role="tab2">
                            <a href="#tab3" aria-controls="tab3" role="tab" data-toggle="tab">More</a>
                        </li>
                    </ul>
                </div>
                <div class="card-body tab-content">
                    <div role="tabpanel" class="tab-pane active" id="tab1">
                        <div class="row">
                            <div class="col-sm-8">
                                <div class="chart ct-chart-browser ct-perfect-fourth"></div>
                            </div>
                            <div class="col-sm-4">
                                <ul class="chart-label">
                                    <li class="ct-label ct-series-a">Google Chrome</li>
                                    <li class="ct-label ct-series-b">Firefox</li>
                                    <li class="ct-label ct-series-c">Safari</li>
                                    <li class="ct-label ct-series-d">IE</li>
                                    <li class="ct-label ct-series-e">Opera</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="tab2">
                        <div class="row">
                            <div class="col-sm-8">
                                <div class="chart ct-chart-os ct-perfect-fourth"></div>
                            </div>
                            <div class="col-sm-4">
                                <ul class="chart-label">
                                    <li class="ct-label ct-series-a">iOS</li>
                                    <li class="ct-label ct-series-b">Android</li>
                                    <li class="ct-label ct-series-c">Windows</li>
                                    <li class="ct-label ct-series-d">OSX</li>
                                    <li class="ct-label ct-series-e">Linux</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="tab3">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
