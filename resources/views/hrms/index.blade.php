@extends('layout.master')
@section('parentPageTitle', 'HRMS')
@section('title', 'Dashboard')


@section('content')
    <div class="section-body mt-3">
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="mb-4">
                        <h4>Welcome Jason Porter!</h4>
                        <small>Measure How Fast You’re Growing Monthly Recurring Revenue. <a href="#">Learn More</a></small>
                    </div>                        
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-6 col-md-4 col-xl-2">
                    <div class="card">
                        <div class="card-body ribbon">
                            <div class="ribbon-box green">5</div>
                            <a href="hr-users.html" class="my_sort_cut text-muted">
                                <i class="icon-users"></i>
                                <span>Users</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-xl-2">
                    <div class="card">
                        <div class="card-body">
                            <a href="hr-holidays.html" class="my_sort_cut text-muted">
                                <i class="icon-like"></i>
                                <span>Holidays</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-xl-2">
                    <div class="card">
                        <div class="card-body ribbon">
                            <div class="ribbon-box orange">8</div>
                            <a href="hr-events.html" class="my_sort_cut text-muted">
                                <i class="icon-calendar"></i>
                                <span>Events</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-xl-2">
                    <div class="card">
                        <div class="card-body">
                            <a href="hr-payroll.html" class="my_sort_cut text-muted">
                                <i class="icon-credit-card"></i>
                                <span>Payroll</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-xl-2">
                    <div class="card">
                        <div class="card-body">
                            <a href="hr-accounts.html" class="my_sort_cut text-muted">
                                <i class="icon-calculator"></i>
                                <span>Accounts</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-xl-2">
                    <div class="card">
                        <div class="card-body">
                            <a href="hr-report.html" class="my_sort_cut text-muted">
                                <i class="icon-pie-chart"></i>
                                <span>Report</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section-body">
        <div class="container-fluid">
            <div class="row clearfix row-deck">
                <div class="col-xl-6 col-lg-12 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Salary Statistics</h3>
                            <div class="card-options">
                                <label class="custom-switch m-0">
                                    <input type="checkbox" value="1" class="custom-switch-input" checked="">
                                    <span class="custom-switch-indicator"></span>
                                </label>
                            </div>
                        </div>
                        <div class="card-body">
                            <div id="apex-basic-column"></div>
                        </div>
                        <div class="card-footer">
                            <div class="d-flex justify-content-between align-items-center">
                                <a href="javascript:void(0)" class="btn btn-info btn-sm w200 mr-3">Generate Report</a>
                                <small>Measure How Fast You’re Growing Monthly Recurring Revenue. <a href="#">Learn More</a></small>                                    
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Revenue</h3>
                        </div>
                        <div class="card-body text-center">
                            <div class="mt-4">
                                <input type="text" class="knob" value="82" data-width="147" data-height="147" data-thickness="0.07" data-bgColor="#3f454a" data-fgColor="#E21E32">
                            </div>
                            <h3 class="mb-0 mt-3 font300"><span class="counter">1,24,301</span> <span class="text-green font-15">+3.7%</span></h3>
                            <small>Lorem Ipsum is simply dummy text <br> <a href="#">Read more</a> </small>
                            <div class="mt-4">
                                <span class="chart_3">2,5,8,3,6,9,4,5,6,3</span>
                            </div>
                        </div>
                        <div class="card-footer">
                            <a href="javascript:void(0)" class="btn btn-block btn-success btn-sm">Send Report</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">My Balance</h3>
                        </div>
                        <div class="card-body">
                            <span>Balance</span>
                            <h4>$<span class="counter">20,508</span></h4>
                            <div id="apexspark1" class="mb-4"></div>
                            <div class="form-group">
                                <label class="d-block">Bank of America <span class="float-right">$<span class="counter">15,025</span></span></label>
                                <div class="progress progress-xs">
                                    <div class="progress-bar bg-azure" role="progressbar" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100" style="width: 77%;"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="d-block">RBC Bank <span class="float-right">$<span class="counter">1,843</span></span></label>
                                <div class="progress progress-xs">
                                    <div class="progress-bar bg-green" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="d-block">Frost Bank <span class="float-right">$<span class="counter">3,641</span></span></label>
                                <div class="progress progress-xs">
                                    <div class="progress-bar bg-blue" role="progressbar" aria-valuenow="23" aria-valuemin="0" aria-valuemax="100" style="width: 23%;"></div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <a href="javascript:void(0)" class="btn btn-block btn-info btn-sm">View More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row clearfix row-deck">
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Employee Structure</h3>
                        </div>
                        <div class="card-body text-center">
                            <div id="apex-basic-bar" style="height: 220px"></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="card">
                        <div class="card-header">                        
                            <h3 class="card-title">Employee Satisfaction</h3>
                        </div>
                        <div class="card-body text-center">
                            <div id="apex-radar-multiple-series" style="height: 220px"></div>
                        </div>                        
                    </div>
                </div>
                <div class="col-xl-4 col-lg-12 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Performance</h3>
                        </div>
                        <div class="card-body">
                            <span>Measure How Fast You’re Growing Monthly Recurring Revenue. <a href="#">Learn More</a></span>
                            <ul class="list-group mt-3 mb-0">
                                <li class="list-group-item">
                                    <div class="clearfix">
                                        <div class="float-left"><strong>35%</strong></div>
                                        <div class="float-right"><small class="text-muted">Design Team</small></div>
                                    </div>
                                    <div class="progress progress-xs">
                                        <div class="progress-bar bg-azure" role="progressbar" style="width: 35%" aria-valuenow="42" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="clearfix">
                                        <div class="float-left"><strong>25%</strong></div>
                                        <div class="float-right"><small class="text-muted">Developer Team</small></div>
                                    </div>
                                    <div class="progress progress-xs">
                                        <div class="progress-bar bg-green" role="progressbar" style="width: 25%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="clearfix">
                                        <div class="float-left"><strong>15%</strong></div>
                                        <div class="float-right"><small class="text-muted">Marketing</small></div>
                                    </div>
                                    <div class="progress progress-xs">
                                        <div class="progress-bar bg-orange" role="progressbar" style="width: 15%" aria-valuenow="36" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="clearfix">
                                        <div class="float-left"><strong>20%</strong></div>
                                        <div class="float-right"><small class="text-muted">Management</small></div>
                                    </div>
                                    <div class="progress progress-xs">
                                        <div class="progress-bar bg-indigo" role="progressbar" style="width: 20%" aria-valuenow="6" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="clearfix">
                                        <div class="float-left"><strong>11%</strong></div>
                                        <div class="float-right"><small class="text-muted">Other</small></div>
                                    </div>
                                    <div class="progress progress-xs">
                                        <div class="progress-bar bg-pink" role="progressbar" style="width: 11%" aria-valuenow="6" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </li>
                            </ul>
                        </div>                        
                    </div>
                </div>
            </div>    
            <div class="row clearfix">
                <div class="col-12 col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Project Summary</h3>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover table-striped text-nowrap table-vcenter mb-0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Client Name</th>
                                            <th>Team</th>
                                            <th>Project</th>
                                            <th>Project Cost</th>
                                            <th>Payment</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>#AD1245</td>
                                            <td>Sean Black</td>
                                            <td>
                                                <ul class="list-unstyled team-info sm margin-0 w150">
                                                    <li><img src="../assets/images/xs/avatar1.jpg" alt="Avatar"></li>
                                                    <li><img src="../assets/images/xs/avatar2.jpg" alt="Avatar"></li>
                                                    <li><img src="../assets/images/xs/avatar3.jpg" alt="Avatar"></li>
                                                    <li><img src="../assets/images/xs/avatar4.jpg" alt="Avatar"></li>
                                                    <li class="ml-2"><span>2+</span></li>
                                                </ul>
                                            </td>
                                            <td>Angular Admin</td>
                                            <td>$14,500</td>
                                            <td>Done</td>
                                            <td><span class="tag tag-success">Delivered</span></td>
                                        </tr>
                                        <tr>
                                            <td>#DF1937</td>
                                            <td>Sean Black</td>
                                            <td>
                                                <ul class="list-unstyled team-info sm margin-0 w150">
                                                    <li><img src="../assets/images/xs/avatar1.jpg" alt="Avatar"></li>
                                                    <li><img src="../assets/images/xs/avatar2.jpg" alt="Avatar"></li>
                                                    <li><img src="../assets/images/xs/avatar3.jpg" alt="Avatar"></li>
                                                    <li><img src="../assets/images/xs/avatar4.jpg" alt="Avatar"></li>
                                                    <li class="ml-2"><span>2+</span></li>
                                                </ul>
                                            </td>
                                            <td>Angular Admin</td>
                                            <td>$14,500</td>
                                            <td>Pending</td>
                                            <td><span class="tag tag-success">Delivered</span></td>
                                        </tr>
                                        <tr>
                                            <td>#YU8585</td>
                                            <td>Merri Diamond</td>
                                            <td>
                                                <ul class="list-unstyled team-info sm margin-0 w150">
                                                    <li><img src="../assets/images/xs/avatar1.jpg" alt="Avatar"></li>
                                                    <li><img src="../assets/images/xs/avatar2.jpg" alt="Avatar"></li>
                                                </ul>
                                            </td>
                                            <td>One page html Admin</td>
                                            <td>$500</td>
                                            <td>Done</td>
                                            <td><span class="tag tag-orange">Submit</span></td>
                                        </tr>
                                        <tr>
                                            <td>#AD1245</td>
                                            <td>Sean Black</td>
                                            <td>
                                                <ul class="list-unstyled team-info sm margin-0 w150">
                                                    <li><img src="../assets/images/xs/avatar1.jpg" alt="Avatar"></li>
                                                    <li><img src="../assets/images/xs/avatar2.jpg" alt="Avatar"></li>
                                                    <li><img src="../assets/images/xs/avatar3.jpg" alt="Avatar"></li>
                                                    <li><img src="../assets/images/xs/avatar4.jpg" alt="Avatar"></li>
                                                </ul>
                                            </td>
                                            <td>Wordpress One page</td>
                                            <td>$1,500</td>
                                            <td>Done</td>
                                            <td><span class="tag tag-success">Delivered</span></td>
                                        </tr>
                                        <tr>
                                            <td>#GH8596</td>
                                            <td>Allen Collins</td>
                                            <td>
                                                <ul class="list-unstyled team-info sm margin-0 w150">
                                                    <li><img src="../assets/images/xs/avatar1.jpg" alt="Avatar"></li>
                                                    <li><img src="../assets/images/xs/avatar2.jpg" alt="Avatar"></li>
                                                    <li><img src="../assets/images/xs/avatar3.jpg" alt="Avatar"></li>
                                                    <li><img src="../assets/images/xs/avatar4.jpg" alt="Avatar"></li>
                                                    <li class="ml-2"><span>2+</span></li>
                                                </ul>
                                            </td>
                                            <td>VueJs Application</td>
                                            <td>$9,500</td>
                                            <td>Done</td>
                                            <td><span class="tag tag-success">Delivered</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('page-styles')

@stop

@section('page-script')
<script src="{{ asset('assets/bundles/apexcharts.bundle.js') }}"></script>
<script src="{{ asset('assets/bundles/counterup.bundle.js') }}"></script>
<script src="{{ asset('assets/bundles/knobjs.bundle.js') }}"></script>

<script src="{{ asset('assets/js/core.js') }}"></script>
<script src="{{ asset('assets/js/page/index.js') }}"></script>
@stop
