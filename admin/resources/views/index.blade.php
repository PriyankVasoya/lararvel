<!doctype html>
<html class="no-js " lang="en">
<head>
<meta charset="utf-8">
<meta name="csrf-token" content="{{ csrf_token() }}" />

<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">

<title>:: Nexa Bootstrap 4 Admin::</title>
<!-- Favicon-->
<link rel="icon" href="favicon.ico" type="image/x-icon">
<link rel="stylesheet" href="{{asset('assets/plugins/bootstrap/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/plugins/jvectormap/jquery-jvectormap-2.0.3.css')}}"/>
<link rel="stylesheet" href="{{asset('assets/plugins/morrisjs/morris.css')}}" />
<link rel="stylesheet" href="{{asset('assets/plugins/jquery-datatable/dataTables.bootstrap4.min.css')}}">

<!-- Custom Css -->
<link rel="stylesheet" href="{{asset('assets/css/main.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/parsley.css')}}">

<link rel="stylesheet" href="{{asset('assets/css/color_skins.css')}}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.6.16/sweetalert2.css" integrity="sha512-JzSVRb7c802/njMbV97pjo1wuJAE/6v9CvthGTDxiaZij/TFpPQmQPTcdXyUVucsvLtJBT6YwRb5LhVxX3pQHQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />


</head>
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
<!-- Top Bar -->
<nav class="navbar">
    <div class="col-12">
        
        <div class="navbar-header">
            <a href="javascript:void(0);" class="bars"></a>
            <a class="navbar-brand" href="index.html">Nexa</a>
        </div>
        <ul class="nav navbar-nav navbar-left">
            <li><a href="javascript:void(0);" class="ls-toggle-btn" data-close="true"><i class="zmdi zmdi-swap"></i></a></li>
            <li><a href="mail-inbox.html" class="inbox-btn hidden-sm-down" data-close="true"><i class="zmdi zmdi-email"></i></a></li>
            <li class="dropdown menu-app hidden-sm-down"><a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button"> <i class="zmdi zmdi-apps"></i> </a>
                <ul class="dropdown-menu slideDown">
                    <li class="body">
                        <ul class="menu">
                            <li><a href="blog-dashboard.html"><i class="zmdi zmdi-blogger"></i><span>Blog</span></a></li>
                            <li><a href="contact.html"><i class="zmdi zmdi-accounts-list"></i><span>Contacts</span></a></li>
                            <li><a href="chat.html"><i class="zmdi zmdi-comment-text"></i><span>Chat</span></a></li>
                            <li><a href="javascript:void(0)"><i class="zmdi zmdi-arrows"></i><span>Notes</span></a></li>
                            <li><a href="javascript:void(0)"><i class="zmdi zmdi-view-column"></i><span>Taskboard</span></a></li>
                            <li><a href="events.html"><i class="zmdi zmdi-calendar-note"></i><span>Calendar</span></a></li>
                        </ul>
                    </li>
                </ul>
            </li>

        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="javascript:void(0);" class="js-search" data-close="true"><i class="zmdi zmdi-search"></i></a></li>
            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button"><i class="zmdi zmdi-notifications"></i>
                <div class="notify"><span class="heartbit"></span><span class="point"></span></div>
                </a>
                <ul class="dropdown-menu slideDown">
                    <li class="header">NOTIFICATIONS</li>
                    <li class="body">
                        <ul class="menu list-unstyled">
                            <li> <a href="javascript:void(0);">
                                <div class="icon-circle l-coral"> <i class="material-icons">person_add</i> </div>
                                <div class="menu-info">
                                    <h4>12 new members joined</h4>
                                    <p> <i class="material-icons">access_time</i> 14 mins ago </p>
                                </div>
                                </a> </li>
                            <li> <a href="javascript:void(0);">
                                <div class="icon-circle l-turquoise"> <i class="material-icons">add_shopping_cart</i> </div>
                                <div class="menu-info">
                                    <h4>4 sales made</h4>
                                    <p> <i class="material-icons">access_time</i> 22 mins ago </p>
                                </div>
                                </a> </li>
                            <li> <a href="javascript:void(0);">
                                <div class="icon-circle g-bg-cyan"> <i class="material-icons">delete_forever</i> </div>
                                <div class="menu-info">
                                    <h4><b>Nancy Doe</b> deleted account</h4>
                                    <p> <i class="material-icons">access_time</i> 3 hours ago </p>
                                </div>
                                </a> </li>
                            <li> <a href="javascript:void(0);">
                                <div class="icon-circle g-bg-blue"> <i class="material-icons">mode_edit</i> </div>
                                <div class="menu-info">
                                    <h4><b>Nancy</b> changed name</h4>
                                    <p> <i class="material-icons">access_time</i> 2 hours ago </p>
                                </div>
                                </a> </li>
                            <li> <a href="javascript:void(0);">
                                <div class="icon-circle l-slategray"> <i class="material-icons">comment</i> </div>
                                <div class="menu-info">
                                    <h4><b>John</b> commented your post</h4>
                                    <p> <i class="material-icons">access_time</i> 4 hours ago </p>
                                </div>
                                </a> </li>
                            <li> <a href="javascript:void(0);">
                                <div class="icon-circle l-seagreen"> <i class="material-icons">cached</i> </div>
                                <div class="menu-info">
                                    <h4><b>John</b> updated status</h4>
                                    <p> <i class="material-icons">access_time</i> 3 hours ago </p>
                                </div>
                                </a> </li>
                            <li> <a href="javascript:void(0);">
                                <div class="icon-circle l-blue"> <i class="material-icons">settings</i> </div>
                                <div class="menu-info">
                                    <h4>Settings updated</h4>
                                    <p> <i class="material-icons">access_time</i> Yesterday </p>
                                </div>
                                </a> </li>
                        </ul>
                    </li>
                    <li class="footer"> <a href="javascript:void(0);">View All Notifications</a> </li>
                </ul>
            </li>
            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button"><i class="zmdi zmdi-flag"></i>
                <div class="notify"><span class="heartbit"></span><span class="point"></span></div>
                </a>
                <ul class="dropdown-menu slideDown">
                    <li class="header">TASKS</li>
                    <li class="body">
                        <ul class="menu tasks list-unstyled">
                            <li> <a href="javascript:void(0);">
                                <h4> Footer display issue <small>72%</small> </h4>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100" style="width: 68%;"></div>
                                </div>
                                </a> </li>
                            <li> <a href="javascript:void(0);">
                                <h4> Make new buttons <small>56%</small> </h4>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="56" aria-valuemin="0" aria-valuemax="100" style="width: 68%;"></div>
                                </div>s
                                </a> </li>
                            <li> <a href="javascript:void(0);">
                                <h4> Create new dashboard <small>68%</small> </h4>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-striped" role="progressbar" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100" style="width: 68%;"></div>
                                </div>
                                </a> </li>
                            <li> <a href="javascript:void(0);">
                                <h4> Solve transition issue <small>77%</small> </h4>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100" style="width: 68%;"></div>
                                </div>
                                </a> </li>
                            <li> <a href="javascript:void(0);">
                                <h4> Answer GitHub questions <small>87%</small> </h4>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="87" aria-valuemin="0" aria-valuemax="100" style="width: 68%;"></div>
                                </div>
                                </a> </li>
                        </ul>
                    </li>
                    <li class="footer"> <a href="javascript:void(0);">View All Tasks</a> </li>
                </ul>
            </li>
            <li>
                <a href="javascript:void(0);" class="fullscreen hidden-sm-down" data-provide="fullscreen" data-close="true">
                    <i class="zmdi zmdi-fullscreen"></i>                   
                </a>
            </li>
            <li><a onclick="logout()" class="mega-menu" data-close="true"><i class="zmdi zmdi-power"></i></a></li>
            <li class=""><a href="javascript:void(0);" class="js-right-sidebar" data-close="true"><i class="zmdi zmdi-settings zmdi-hc-spin"></i></a></li>
        </ul>
    </div>
</nav>

<!-- Left Sidebar -->
<aside id="leftsidebar" class="sidebar">
    <!-- User Info -->
    <div class="user-info">
        <div class="image">
            <img src="assets/images/xs/avatar1.jpg" width="48" height="48" alt="User" />
        </div>
        <div class="info-container">
            <div class="name" data-toggle="dropdown">John Doe</div>
            <div class="btn-group user-helper-dropdown">
                <ul class="dropdown-menu slideUp">
                    <li><a href="profile.html"><i class="material-icons">person</i>Profile</a></li>
                    <li class="divider"></li>
                    <li><a href="javascript:void(0);"><i class="material-icons">group</i>Followers</a></li>
                    <li><a href="javascript:void(0);"><i class="material-icons">shopping_cart</i>Sales</a></li>
                    <li><a href="javascript:void(0);"><i class="material-icons">favorite</i>Likes</a></li>
                    <li class="divider"></li>
                    <li><a onclick="logout()"><i class="material-icons">input</i>Sign Out</a></li>
                </ul>
            </div>
            <div class="email">{{session('user')[0]['email']}}</div>
        </div>
    </div>
    <!-- #User Info --> 
    <!-- Menu -->
    <div class="menu">
        <ul class="list">
            {{-- <li class="header">MAIN NAVIGATION</li>
            <li class="active open"> <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-home"></i><span>Dashboard</span></a>
                <ul class="ml-menu">
                    <li class="active"><a href="index.html">Main Dashboard</a> </li>
                    <li><a href="dashboard-rtl.html">RTL Dashboard</a></li>
                    <li><a href="index2.html">Horizontal Menu</a></li>
                    <li><a href="blog-dashboard.html">Blog Dashboard</a></li>
                    <li><a href="ec-dashboard.html">Ecommerce Dashboard</a></li>
                </ul>
            </li> --}}
            <li class="{{ Request::segment(1) === 'data' ? 'active' : null }}"> 
            <a class="nav-link " aria-current="page" href="/data">Home</a>
            <li>
            {{-- <a class="nav-link active" aria-current="page" href="/form">Form</a> --}}
            <li class="{{ Request::segment(1) === 'userlist' ? 'active' : null }} {{ Request::segment(1) === 'userview' ? 'active' : null }}"> 
            <a class="nav-link active" aria-current="page" href="/userlist">UserList</a>
            <li>
            

            {{-- <li> <a href="/data"><i class="zmdi zmdi-delicious"></i><span>Data</span> </a> </li> --}}
            {{-- <li><a href="mail-inbox.html"><i class="zmdi zmdi-email"></i><span>Inbox</span> </a></li>
            <li><a href="blog-dashboard.html"><i class="zmdi zmdi-blogger"></i><span>Blogger</span> </a></li>          
            <li> <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-shopping-cart"></i><span>Ecommerce</span> </a>
                <ul class="ml-menu">
                    <li> <a href="ec-dashboard.html">Dashboard</a></li>
                    <li> <a href="ec-product.html">Product</a></li>
                    <li> <a href="ec-product-List.html">Product List</a></li>
                    <li> <a href="ec-product-detail.html">Product detail</a></li>
                </ul>
            </li>
            <li> <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-swap-alt"></i><span>User Interface (UI)</span> </a>
                <ul class="ml-menu">
                    <li> <a href="typography.html">Typography</a> </li>
                    <li> <a href="helper-classes.html">Helper Classes</a></li>
                    <li> <a href="alerts.html">Alerts</a> </li>
                    <li> <a href="animations.html">Animations</a> </li>
                    <li> <a href="badges.html">Badges</a> </li>
                    <li> <a href="breadcrumbs.html">Breadcrumbs</a> </li>
                    <li> <a href="buttons.html">Buttons</a> </li>
                    <li> <a href="collapse.html">Collapse</a> </li>
                    <li> <a href="colors.html">Colors</a> </li>
                    <li> <a href="dialogs.html">Dialogs</a> </li>
                    <li> <a href="icons.html">Icons</a> </li>
                    <li> <a href="labels.html">Labels</a> </li>
                    <li> <a href="list-group.html">List Group</a> </li>
                    <li> <a href="media-object.html">Media Object</a> </li>
                    <li> <a href="modals.html">Modals</a> </li>
                    <li> <a href="notifications.html">Notifications</a> </li>
                    <li> <a href="pagination.html">Pagination</a> </li>
                    <li> <a href="preloaders.html">Preloaders</a> </li>
                    <li> <a href="progressbars.html">Progress Bars</a> </li>
                    <li> <a href="range-sliders.html">Range Sliders</a> </li>
                    <li> <a href="sortable-nestable.html">Sortable & Nestable</a> </li>
                    <li> <a href="tabs.html">Tabs</a> </li>
                    <li> <a href="waves.html">Waves</a> </li>
                </ul>
            </li>
            <li> <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-assignment"></i><span>Forms</span> </a>
                <ul class="ml-menu">
                    <li><a href="basic-form-elements.html">Basic Form Elements</a> </li>
                    <li><a href="advanced-form-elements.html">Advanced Form Elements</a> </li>
                    <li><a href="form-examples.html">Form Examples</a> </li>
                    <li><a href="form-validation.html">Form Validation</a> </li>
                    <li><a href="form-wizard.html">Form Wizard</a> </li>
                    <li><a href="form-editors.html">Editors</a> </li>
                    <li><a href="form-upload.html">File Upload</a></li>
                </ul>
            </li>
            <li> <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-grid"></i><span>Tables</span> </a>
                <ul class="ml-menu">                        
                    <li> <a href="normal-tables.html">Normal Tables</a> </li>
                    <li> <a href="jquery-datatable.html">Jquery Datatables</a> </li>
                    <li> <a href="editable-table.html">Editable Tables</a> </li>
                    <li> <a href="footable.html">Foo Tables</a> </li>
                    <li> <a href="table-color.html">Tables Color</a> </li>
                </ul>
            </li>
            <li> <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-image"></i><span>Medias</span> </a>
                <ul class="ml-menu">
                    <li> <a href="image-gallery.html">Image Gallery</a> </li>
                    <li> <a href="carousel.html">Carousel</a> </li>
                </ul>
            </li>
            <li> <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-chart"></i><span>Charts</span> </a>
                <ul class="ml-menu">
                    <li> <a href="morris.html">Morris</a> </li>
                    <li> <a href="flot.html">Flot</a> </li>
                    <li> <a href="chartjs.html">ChartJS</a> </li>
                    <li> <a href="sparkline.html">Sparkline</a> </li>
                    <li> <a href="jquery-knob.html">Jquery Knob</a> </li>
                </ul>
            </li>
            <li> <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-lock"></i><span>Authentication</span> </a>
                <ul class="ml-menu">
                    <li><a href="sign-in.html">Sign In</a> </li>
                    <li><a href="sign-up.html">Sign Up</a> </li>
                    <li><a href="forgot-password.html">Forgot Password</a> </li>
                    <li><a href="404.html">Page 404</a> </li>
                    <li><a href="500.html">Page 500</a> </li>
                    <li><a href="page-offline.html">Page Offline</a> </li>
                    <li><a href="locked.html">Locked Screen</a> </li>
                </ul>
            </li>
            <li> <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-copy"></i><span>Extra Pages</span> </a>
                <ul class="ml-menu">
                    <li><a href="blank.html">Blank Page</a> </li>
                    <li><a href="events.html">Calendar</a></li>
                    <li><a href="profile.html">Profile</a></li>
                    <li><a href="timeline.html">Timeline</a></li>
                    <li><a href="chat.html">Chat</a></li>
                    <li><a href="contact.html">Contact list</a></li>
                    <li><a href="pricing.html">Pricing</a></li>
                    <li><a href="invoices.html">Invoices</a></li>
                    <li><a href="search-results.html">Search Results</a></li>
                </ul>
            </li>
            <li> <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-map"></i><span>Maps</span> </a>
                <ul class="ml-menu">
                    <li> <a href="google.html">Google Map</a> </li>
                    <li> <a href="yandex.html">YandexMap</a> </li>
                    <li> <a href="jvectormap.html">jVectorMap</a> </li>
                </ul>
            </li>
            <li> <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-trending-down"></i><span>Multi Level Menu</span> </a>
                <ul class="ml-menu">
                    <li> <a href="javascript:void(0);"> <span>Menu Item</span> </a> </li>
                    <li> <a href="javascript:void(0);"> <span>Menu Item - 2</span> </a> </li>
                    <li> <a href="javascript:void(0);" class="menu-toggle"> <span>Level - 2</span> </a>
                        <ul class="ml-menu">
                            <li> <a href="javascript:void(0);"> <span>Menu Item</span> </a> </li>
                            <li> <a href="javascript:void(0);" class="menu-toggle"> <span>Level - 3</span> </a>
                                <ul class="ml-menu">
                                    <li> <a href="javascript:void(0);"> <span>Level - 4</span> </a> </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li> <a href="changelogs.html"><i class="zmdi zmdi-time-restore"></i><span>Changelogs</span> </a> </li> --}}
            {{-- <li class="header">LABELS</li>
            <li> <a href="javascript:void(0);"><i class="zmdi zmdi-chart-donut col-red"></i><span>Important</span> </a> </li>
            <li> <a href="javascript:void(0);"><i class="zmdi zmdi-chart-donut col-amber"></i><span>Warning</span> </a> </li>
            <li> <a href="javascript:void(0);"><i class="zmdi zmdi-chart-donut col-blue"></i><span>Information</span> </a> </li> --}}
        </ul>
    </div>
    <!-- #Menu --> 

</aside>    
<!-- Right Sidebar -->
{{-- <aside id="rightsidebar" class="right-sidebar">
    <ul class="nav nav-tabs">
        <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#skins">Skins</a></li>
        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#chat">Chat</a></li>
        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#settings">Setting</a></li>
    </ul>
    <div class="tab-content">
        <div role="tabpanel" class="tab-pane in active in active slideRight" id="skins">
            <div class="slim_scroll">
                <h6>Flat Color</h6>
                <ul class="choose-skin">                   
                    <li data-theme="purple">
                        <div class="purple"></div>
                        <span>Purple</span> </li>                   
                    <li data-theme="blue">
                        <div class="blue"></div>
                        <span>Blue</span> </li>
                    <li data-theme="cyan">
                        <div class="cyan"></div>
                        <span>Cyan</span>
                    </li>                        
                </ul>                    
                <h6>Multi Color</h6>
                <ul class="choose-skin">                        
                    <li data-theme="black">
                        <div class="black"></div>
                        <span>Black</span> </li>
                    <li data-theme="deep-purple">
                        <div class="deep-purple"></div>
                        <span>Deep Purple</span> </li>
                    <li data-theme="red">
                        <div class="red"></div>
                        <span>Red</span>
                    </li>                        
                </ul>                    
                <h6>Gradient Color</h6>
                <ul class="choose-skin">                    
                    <li data-theme="green">
                        <div class="green"></div>
                        <span>Green</span> </li>
                    <li data-theme="orange"  class="active">
                        <div class="orange"></div>
                        <span>Orange</span> </li>
                    <li data-theme="blush">
                        <div class="blush"></div>
                        <span>Blush</span>
                    </li>
                </ul>
            </div>                
        </div>
        <div role="tabpanel" class="tab-pane pullUp" id="chat">
            <div class="right_chat slim_scroll">
                <div class="search">
                    <div class="input-group">
                        <div class="form-line">
                            <input type="text" class="form-control" placeholder="Search..." required autofocus>
                        </div>
                    </div>
                </div>
                <h6>Recent</h6>
                <ul class="list-unstyled">
                    <li class="online">
                        <a href="javascript:void(0);">
                            <div class="media">
                                <img class="media-object " src="assets/images/xs/avatar4.jpg" alt="">
                                <div class="media-body">
                                    <span class="name">Sophia</span>
                                    <span class="message">There are many variations of passages of Lorem Ipsum available</span>
                                    <span class="badge badge-outline status"></span>
                                </div>
                            </div>
                        </a>                            
                    </li>
                    <li class="online">
                        <a href="javascript:void(0);">
                            <div class="media">
                                <img class="media-object " src="assets/images/xs/avatar5.jpg" alt="">
                                <div class="media-body">
                                    <span class="name">Grayson</span>
                                    <span class="message">All the Lorem Ipsum generators on the</span>
                                    <span class="badge badge-outline status"></span>
                                </div>
                            </div>
                        </a>                            
                    </li>
                    <li class="offline">
                        <a href="javascript:void(0);">
                            <div class="media">
                                <img class="media-object " src="assets/images/xs/avatar2.jpg" alt="">
                                <div class="media-body">
                                    <span class="name">Isabella</span>
                                    <span class="message">Contrary to popular belief, Lorem Ipsum</span>
                                    <span class="badge badge-outline status"></span>
                                </div>
                            </div>
                        </a>                            
                    </li>
                    <li class="me">
                        <a href="javascript:void(0);">
                            <div class="media">
                                <img class="media-object " src="assets/images/xs/avatar1.jpg" alt="">
                                <div class="media-body">
                                    <span class="name">John</span>
                                    <span class="message">It is a long established fact that a reader</span>
                                    <span class="badge badge-outline status"></span>
                                </div>
                            </div>
                        </a>                            
                    </li>
                    <li class="online">
                        <a href="javascript:void(0);">
                            <div class="media">
                                <img class="media-object " src="assets/images/xs/avatar3.jpg" alt="">
                                <div class="media-body">
                                    <span class="name">Alexander</span>
                                    <span class="message">Richard McClintock, a Latin professor</span>
                                    <span class="badge badge-outline status"></span>
                                </div>
                            </div>
                        </a>                            
                    </li>                        
                </ul>
                <h6>Contacts</h6>
                <ul class="list-unstyled">
                    <li class="offline inlineblock">
                        <a href="javascript:void(0);">
                            <div class="media">
                                <img class="media-object " src="assets/images/xs/avatar10.jpg" alt="">
                                <div class="media-body">
                                    <span class="badge badge-outline status"></span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="offline inlineblock">
                        <a href="javascript:void(0);">
                            <div class="media">
                                <img class="media-object " src="assets/images/xs/avatar6.jpg" alt="">
                                <div class="media-body">
                                    <span class="badge badge-outline status"></span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="offline inlineblock">
                        <a href="javascript:void(0);">
                            <div class="media">
                                <img class="media-object " src="assets/images/xs/avatar7.jpg" alt="">
                                <div class="media-body">
                                    <span class="badge badge-outline status"></span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="offline inlineblock">
                        <a href="javascript:void(0);">
                            <div class="media">
                                <img class="media-object " src="assets/images/xs/avatar8.jpg" alt="">
                                <div class="media-body">
                                    <span class="badge badge-outline status"></span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="offline inlineblock">
                        <a href="javascript:void(0);">
                            <div class="media">
                                <img class="media-object " src="assets/images/xs/avatar9.jpg" alt="">
                                <div class="media-body">
                                    <span class="badge badge-outline status"></span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="online inlineblock">
                        <a href="javascript:void(0);">
                            <div class="media">
                                <img class="media-object " src="assets/images/xs/avatar5.jpg" alt="">
                                <div class="media-body">
                                    <span class="badge badge-outline status"></span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="offline inlineblock">
                        <a href="javascript:void(0);">
                            <div class="media">
                                <img class="media-object " src="assets/images/xs/avatar4.jpg" alt="">
                                <div class="media-body">
                                    <span class="badge badge-outline status"></span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="offline inlineblock">
                        <a href="javascript:void(0);">
                            <div class="media">
                                <img class="media-object " src="assets/images/xs/avatar3.jpg" alt="">
                                <div class="media-body">
                                    <span class="badge badge-outline status"></span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="online inlineblock">
                        <a href="javascript:void(0);">
                            <div class="media">
                                <img class="media-object " src="assets/images/xs/avatar2.jpg" alt="">
                                <div class="media-body">
                                    <span class="badge badge-outline status"></span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="offline inlineblock">
                        <a href="javascript:void(0);">
                            <div class="media">
                                <img class="media-object " src="assets/images/xs/avatar1.jpg" alt="">
                                <div class="media-body">
                                    <span class="badge badge-outline status"></span>
                                </div>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div role="tabpanel" class="tab-pane slideLeft" id="settings">
            <div class="settings slim_scroll">
                <p class="text-left">General Settings</p>
                <ul class="setting-list">
                    <li> <span>Report Panel Usage</span>
                        <div class="switch">
                            <label>
                                <input type="checkbox" checked>
                                <span class="lever"></span></label>
                        </div>
                    </li>
                    <li> <span>Email Redirect</span>
                        <div class="switch">
                            <label>
                                <input type="checkbox">
                                <span class="lever"></span></label>
                        </div>
                    </li>
                </ul>
                <p class="text-left">System Settings</p>
                <ul class="setting-list">
                    <li> <span>Notifications</span>
                        <div class="switch">
                            <label>
                                <input type="checkbox" checked>
                                <span class="lever"></span></label>
                        </div>
                    </li>
                    <li> <span>Auto Updates</span>
                        <div class="switch">
                            <label>
                                <input type="checkbox" checked>
                                <span class="lever"></span></label>
                        </div>
                    </li>
                </ul>
                <p class="text-left">Account Settings</p>
                <ul class="setting-list">
                    <li> <span>Offline</span>
                        <div class="switch">
                            <label>
                                <input type="checkbox">
                                <span class="lever"></span></label>
                        </div>
                    </li>
                    <li> <span>Location Permission</span>
                        <div class="switch">
                            <label>
                                <input type="checkbox" checked>
                                <span class="lever"></span></label>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</aside> --}}

@yield('main')

<!-- Chat-launcher -->
{{-- <div class="chat-launcher"></div>
<div class="chat-wrapper">
    <div class="card">
        <div class="header">
            <h2>TL Groups</h2>                    
        </div>
        <div class="body">
            <div class="chat-widget">
            <ul class="chat-scroll-list clearfix">
                <li class="left float-left">
                    <img src="assets/images/xs/avatar3.jpg" class="rounded-circle" alt="">
                    <div class="chat-info">
                        <a class="name" href="#">Alexander</a>
                        <span class="datetime">6:12</span>                            
                        <span class="message">Hello, John </span>
                    </div>
                </li>
                <li class="right">
                    <div class="chat-info"><span class="datetime">6:15</span> <span class="message">Hi, Alexander<br> How are you!</span> </div>
                </li>
                <li class="right">
                    <div class="chat-info"><span class="datetime">6:16</span> <span class="message">There are many variations of passages of Lorem Ipsum available</span> </div>
                </li>
                <li class="left float-left"> <img src="assets/images/xs/avatar2.jpg" class="rounded-circle" alt="">
                    <div class="chat-info"> <a class="name" href="#">Elizabeth</a> <span class="datetime">6:25</span> <span class="message">Hi, Alexander,<br> John <br> What are you doing?</span> </div>
                </li>
                <li class="left float-left"> <img src="assets/images/xs/avatar1.jpg" class="rounded-circle" alt="">
                    <div class="chat-info"> <a class="name" href="#">Michael</a> <span class="datetime">6:28</span> <span class="message">I would love to join the team.</span> </div>
                </li>
                    <li class="right">
                    <div class="chat-info"><span class="datetime">7:02</span> <span class="message">Hello, <br>Michael</span> </div>
                </li>
            </ul>
            </div>
            <div class="input-group">
                <div class="form-line">
                    <input type="text" class="form-control date" placeholder="Enter your email...">
                </div>
                <span class="input-group-addon"> <i class="material-icons">send</i> </span>
            </div>
        </div>
    </div>
</div> --}}

<!-- Main Content -->

<!-- Jquery Core Js --> 
<script src="{{asset('assets/bundles/libscripts.bundle.js')}}"></script> <!-- Lib Scripts Plugin Js --> 
<script src="{{asset('assets/bundles/vendorscripts.bundle.js')}}"></script> <!-- Lib Scripts Plugin Js --> 
<script src="{{asset('assets/plugins/jquery/jquery.js')}}"></script>

<script src="{{asset('assets/js/parsley.js')}}"></script>
<script src="{{asset('assets/bundles/jvectormap.bundle.js')}}"></script> <!-- JVectorMap Plugin Js -->
<script src="{{asset('assets/bundles/morrisscripts.bundle.js')}}"></script><!-- Morris Plugin Js -->
<script src="{{asset('assets/bundles/sparkline.bundle.js')}}"></script> <!-- Sparkline Plugin Js -->
<script src="{{asset('assets/bundles/knob.bundle.js')}}"></script> <!-- Jquery Knob Plugin Js -->

<script src="{{asset('assets/bundles/mainscripts.bundle.js')}}"></script>
<script src="{{asset('assets/js/pages/index.js')}}"></script>
<script src="{{asset('assets/js/pages/charts/jquery-knob.min.js')}}"></script>

<!-- Jquery DataTable Plugin Js --> 
<script src="{{asset('assets/bundles/datatablescripts.bundle.js')}}"></script>
<script src="{{asset('assets/plugins/jquery-datatable/buttons/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('assets/plugins/jquery-datatable/buttons/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('assets/plugins/jquery-datatable/buttons/buttons.colVis.min.js')}}"></script>
<script src="{{asset('assets/plugins/jquery-datatable/buttons/buttons.flash.min.js')}}"></script>
<script src="{{asset('assets/plugins/jquery-datatable/buttons/buttons.html5.min.js')}}"></script>
<script src="{{asset('assets/plugins/jquery-datatable/buttons/buttons.print.min.js')}}"></script>

{{-- <script src="{{asset('assets/bundles/mainscripts.bundle.js')}}"></script><!-- Custom Js -->  --}}
{{-- <script src="{{asset('assets/js/pages/tables/jquery-datatable.js')}}"></script> --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.6.16/sweetalert2.js" integrity="sha512-HSX6+785OA1Th/CvDy4O2giA2Bvr0Ex6M5yeh+PMomOnpDKBeEnTurP5sSO+jlHShGXku8UmG93POKvXYf3zEg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</body>
</html>


{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> --}}
<script>

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

function logout(){
var redirect = '/'
       Swal.fire({
       title: 'Are you sure you want to logout?',
       showDenyButton: true,
       showCancelButton: true,
       confirmButtonText: 'Yes',
       denyButtonText: `Don't logout`,
       }).then((result) => {
  /* Read more about isConfirmed, isDenied below */
      if (result.isConfirmed) {


                               $.ajax({
                                url: '/logout',
                                type: "post",
                                success: function (response) {
                                //   $("#success_message").text(response.message);
                                window.location = redirect
                                }
                               });
      } else if (result.isDenied) {
      Swal.fire('Changes are not saved', '', 'info')
      }
     })
}

</script>