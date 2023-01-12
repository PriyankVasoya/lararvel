@extends('index')
@section('title','data')
@section('main')

<body class="theme-orange">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">        
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
            <p>Please wait...</p>
            <div class="m-t-30"><img src="assets/images/logo.svg" width="48" height="48" alt="Nexa"></div>
        </div>
    </div>
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div><!-- Search  -->
    <div class="search-bar">
        <div class="search-icon"> <i class="material-icons">search</i> </div>
        <input type="text" placeholder="Explore Nexa...">
        <div class="close-search"> <i class="material-icons">close</i> </div>
    </div>

    
    <!-- Left Sidebar -->

    <!-- Right Sidebar -->

    
    
    <!-- Chat-launcher -->
   
    
    <!-- Main Content -->
    <section class="content home">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>Dashboard
                    <small class="text-muted">Welcome to Nexa Application</small>
                    </h2>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <ul class="breadcrumb float-md-right">
                        <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> Nexa</a></li>
                        <li class="breadcrumb-item active">Dashboard 1</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-3 col-md-6 col-sm-12 text-center">
                    <div class="card tasks_report">
                        <div class="body">
                            <input type="text" class="knob dial1" value="66" data-width="90" data-height="90" data-thickness="0.05" data-fgColor="#00ced1" readonly>
                            <h6 class="m-t-20">Satisfaction Rate</h6>
                            <small class="displayblock">47% Average <i class="zmdi zmdi-trending-up"></i></small>
                            <div class="sparkline m-t-30" data-type="bar" data-width="97%" data-height="30px" data-bar-Width="2" data-bar-Spacing="5" data-bar-Color="#00ced1">5,8,3,4,8,9,7,2,9,5</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 text-center">
                    <div class="card tasks_report">
                        <div class="body">
                            <input type="text" class="knob dial2" value="26" data-width="90" data-height="90" data-thickness="0.05" data-fgColor="#ffa07a" readonly>
                            <h6 class="m-t-20">Orders Panding</h6>
                            <small class="displayblock">13% Average <i class="zmdi zmdi-trending-down"></i></small>
                            <div class="sparkline m-t-30" data-type="bar" data-width="97%" data-height="30px" data-bar-Width="2" data-bar-Spacing="5" data-bar-Color="#ffa07a">9,5,1,5,4,8,7,6,3,4</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 text-center">
                    <div class="card tasks_report">
                        <div class="body">
                            <input type="text" class="knob dial3" value="76" data-width="90" data-height="90" data-thickness="0.05" data-fgColor="#8fbc8f" readonly>
                            <h6 class="m-t-20">Productivity Goal</h6>
                            <small class="displayblock">75% Average <i class="zmdi zmdi-trending-up"></i></small>
                            <div class="sparkline m-t-30" data-type="bar" data-width="97%" data-height="30px" data-bar-Width="2" data-bar-Spacing="5" data-bar-Color="#8fbc8f">6,4,9,8,6,5,4,5,3,2</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 text-center">
                    <div class="card tasks_report">
                        <div class="body">
                            <input type="text" class="knob dial4" value="88" data-width="90" data-height="90" data-thickness="0.05" data-fgColor="#00adef" readonly>
                            <h6 class="m-t-20">Total Revenue</h6>
                            <small class="displayblock">54% Average <i class="zmdi zmdi-trending-up"></i></small>
                            <div class="sparkline m-t-30" data-type="bar" data-width="97%" data-height="30px" data-bar-Width="2" data-bar-Spacing="5" data-bar-Color="#00adef">3,5,7,9,5,1,4,5,6,8</div>
                        </div>
                    </div>
                </div>            
            </div>        
            <div class="row clearfix">
                <div class="col-lg-8 col-md-12">
                    <div class="card product-report">
                        <div class="header">
                            <h2>Annual Report</h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more-vert"></i> </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="row clearfix m-b-15">
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <div class="icon l-amber"><i class="zmdi zmdi-chart-donut"></i></div>
                                    <div class="col-in">
                                        <h3 class="counter m-b-0">$4,516</h3>
                                        <small class="text-muted m-t-0">Sales Report</small>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <div class="icon l-turquoise"><i class="zmdi zmdi-chart"></i></div>
                                    <div class="col-in">
                                        <h3 class="counter m-b-0">$6,481</h3>
                                        <small class="text-muted m-t-0">Annual Revenue </small>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <div class="icon l-parpl"><i class="zmdi zmdi-card"></i></div>
                                    <div class="col-in">
                                        <h3 class="counter m-b-0">$3,915</h3>
                                        <small class="text-muted m-t-0">Total Profit</small>
                                    </div>
                                </div>
                            </div>
                            <div id="area_chart" class="graph"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="row clearfix">
                        <div class="col-lg-12 col-md-6 col-sm-12">
                            <div class="card top-report">
                                <div class="body">
                                    <h3 class="m-t-0">50.5 Gb <i class="zmdi zmdi-trending-up float-right"></i></h3>
                                    <p class="text-muted">Traffic this month</p>
                                    <div class="progress">
                                        <div class="progress-bar l-turquoise" role="progressbar" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100" style="width: 68%;"></div>
                                    </div>
                                    <small>Change 5%</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-6 col-sm-12">
                            <div class="card top-report">
                                <div class="body">
                                    <h3 class="m-t-0">1,600 <i class="zmdi zmdi-trending-up float-right"></i></h3>
                                    <p class="text-muted">New Feedbacks</p>
                                    <div class="progress">
                                        <div class="progress-bar l-blush" role="progressbar" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100" style="width: 68%;"></div>
                                    </div>
                                    <small>Change 15%</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="card top-report">
                                <div class="body">
                                    <h3 class="m-t-0">26.8% <i class="zmdi zmdi-trending-down float-right"></i></h3>
                                    <p class="text-muted">Server Load</p>
                                    <div class="progress">
                                        <div class="progress-bar l-parpl" role="progressbar" aria-valuenow="32" aria-valuemin="0" aria-valuemax="100" style="width:32%;"></div>
                                    </div>
                                    <small>Change 17%</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="card ">
                        <div class="header">
                            <h2>Sales<small >This week</small></h2>
                        </div>
                        <div class="body">
                            <div class="row">
                                <div class="col-sm-4 col-4 m-b-10">
                                    <span class="text-muted">This Week</span>
                                    <h5 class="m-b-0">1,256</h5>
                                    <span><i class="zmdi zmdi-caret-up text-success"></i> +18%</span>
                                </div>
                                <div class="col-sm-4 col-4 m-b-10">
                                    <span class="text-muted">This Month</span>
                                    <h5 class="m-b-0">621</h5>
                                    <span><i class="zmdi zmdi-caret-down text-danger"></i> -8%</span>
                                </div>
                                <div class="col-sm-4 col-4 m-b-10">
                                    <span class="text-muted">Average</span>
                                    <h5 class="m-b-0">981</h5>
                                    <span><i class="zmdi zmdi-caret-up text-success"></i> +5%</span>
                                </div>
                            </div>                        
                        </div>
                        <div class="sparkline" data-type="line" data-spot-Radius="3" data-highlight-Spot-Color="rgb(63, 81, 181)" data-highlight-Line-Color="#222"
                        data-min-Spot-Color="rgb(233, 30, 99)" data-max-Spot-Color="rgb(63, 81, 181)" data-spot-Color="rgb(63, 81, 181, 0.7)"
                        data-offset="90" data-width="100%" data-height="37px" data-line-Width="1" data-line-Color="rgb(63, 81, 181, 0.7)"
                        data-fill-Color="rgba(221,94,137, 0.2)"> 1,2,3,1,4,3,6,4,4,1 </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="card ">
                        <div class="header">
                            <h2>Earnings <small >This week</small></h2>                        
                        </div>
                        <div class="body">
                            <div class="row">
                                <div class="col-sm-4 col-4 m-b-10">
                                    <span class="text-muted">This Week</span>
                                    <h5 class="m-b-0">1,951</h5>
                                    <span><i class="zmdi zmdi-caret-up text-success"></i> +15%</span>
                                </div>
                                <div class="col-sm-4 col-4 m-b-10">
                                    <span class="text-muted">This Month</span>
                                    <h5 class="m-b-0">1,254</h5>
                                    <span><i class="zmdi zmdi-caret-up text-success"></i> +21%</span>
                                </div>
                                <div class="col-sm-4 col-4 m-b-10">
                                    <span class="text-muted">Average</span>
                                    <h5 class="m-b-0">1,100</h5>
                                    <span><i class="zmdi zmdi-caret-up text-success"></i> +17%</span>
                                </div>
                            </div>                        
                        </div>
                        <div class="sparkline" data-type="line" data-spot-Radius="3" data-highlight-Spot-Color="rgb(63, 81, 181)" data-highlight-Line-Color="#222"
                        data-min-Spot-Color="rgb(233, 30, 99)" data-max-Spot-Color="rgb(120, 184, 62)" data-spot-Color="rgb(63, 81, 181, 0.7)"
                        data-offset="90" data-width="100%" data-height="37px" data-line-Width="1" data-line-Color="rgb(63, 81, 181, 0.7)"
                        data-fill-Color="rgba(255,193,7, 0.2)"> 1,3,5,4,2,5,4,6,3,1 </div>
                    </div>
                </div>           
            </div>
            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <ul class="row profile_state list-unstyled">
                            <li class="col-lg-2 col-md-4 col-6">
                                <div class="body">
                                    <i class="zmdi zmdi-camera col-amber"></i>
                                    <h4>2,365</h4>
                                    <span>Shots View</span>
                                </div>
                            </li>
                            <li class="col-lg-2 col-md-4 col-6">
                                <div class="body">
                                    <i class="zmdi zmdi-thumb-up col-blue"></i>
                                    <h4>365</h4>
                                    <span>Likes</span>
                                </div>
                            </li>
                            <li class="col-lg-2 col-md-4 col-6">
                                <div class="body">
                                    <i class="zmdi zmdi-comment-text col-red"></i>
                                    <h4>65</h4>
                                    <span>Comments</span>
                                </div>
                            </li>
                            <li class="col-lg-2 col-md-4 col-6">
                                <div class="body">
                                    <i class="zmdi zmdi-account text-success"></i>
                                    <h4>2,055</h4>
                                    <span>Profile Views</span>
                                </div>
                            </li>
                            <li class="col-lg-2 col-md-4 col-6">
                                <div class="body">
                                    <i class="zmdi zmdi-desktop-mac text-info"></i>
                                    <h4>3,159</h4>
                                    <span>Website View</span>
                                </div>
                            </li>
                            <li class="col-lg-2 col-md-4 col-6">
                                <div class="body">
                                    <i class="zmdi zmdi-attachment text-warning"></i>
                                    <h4>2,365</h4>
                                    <span>Attachment</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>        
            <div class="row clearfix">
                <div class="col-md-12 col-lg-12">
                    <div class="card visitors-map">
                        <div class="header">
                            <h2>Visitors Statistics</h2>                        
                        </div>
                        <div class="body">
                            <div class="row">
                                <div class="col-xl-8 col-lg-7 col-md-12">
                                    <div id="world-map-markers" class="jvector-map"></div>
                                </div>
                                <div class="col-xl-4 col-lg-5 col-md-12">
                                    <div class="table-responsive">
                                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text</p>
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Contrary</th>
                                                    <th>2016</th>
                                                    <th>2017</th>
                                                    <th>Change</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>USA</td>
                                                    <td>2,009</td>
                                                    <td>3,591</td>
                                                    <td>7.01% <i class="zmdi zmdi-trending-up text-success"></i></td>
                                                </tr>
                                                <tr>
                                                    <td>India</td>
                                                    <td>1,129</td>
                                                    <td>1,361</td>
                                                    <td>3.01% <i class="zmdi zmdi-trending-up text-success"></i></td>
                                                </tr>
                                                <tr>
                                                    <td>Canada</td>
                                                    <td>2,009</td>
                                                    <td>2,901</td>
                                                    <td>9.01% <i class="zmdi zmdi-trending-up text-success"></i></td>
                                                </tr>
                                                <tr>
                                                    <td>Australia</td>
                                                    <td>954</td>
                                                    <td>901</td>
                                                    <td>5.71% <i class="zmdi zmdi-trending-down text-warning"></i></td>
                                                </tr>
                                                <tr>
                                                    <td>Germany</td>
                                                    <td>594</td>
                                                    <td>500</td>
                                                    <td>6.11% <i class="zmdi zmdi-trending-down text-warning"></i></td>
                                                </tr>
                                                <tr>
                                                    <td>UK</td>
                                                    <td>1,500</td>
                                                    <td>1,971</td>
                                                    <td>8.50% <i class="zmdi zmdi-trending-up text-success"></i></td>
                                                </tr>
                                                <tr>
                                                    <td>Other</td>
                                                    <td>4,236</td>
                                                    <td>4,591</td>
                                                    <td>9.15% <i class="zmdi zmdi-trending-up text-success"></i></td>
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
           
           
       
        </div>
    </section>
    <!-- Jquery Core Js --> 
    <script src="assets/bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js --> 
    <script src="assets/bundles/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js --> 
    
    <script src="assets/bundles/jvectormap.bundle.js"></script> <!-- JVectorMap Plugin Js -->
    <script src="assets/bundles/morrisscripts.bundle.js"></script><!-- Morris Plugin Js -->
    <script src="assets/bundles/sparkline.bundle.js"></script> <!-- Sparkline Plugin Js -->
    <script src="assets/bundles/knob.bundle.js"></script> <!-- Jquery Knob Plugin Js -->
    
    <script src="assets/bundles/mainscripts.bundle.js"></script>
    <script src="assets/js/pages/index.js"></script>
    <script src="assets/js/pages/charts/jquery-knob.min.js"></script>
    </body>
@endsection