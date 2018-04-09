<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <link rel="shortcut icon" href="">
    <link rel="image_src" href="" />
    <link rel="canonical" href="" />

    <title>Farm Manager</title>

     <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
      <link href="{{ asset('bootstrap/css/bootstrap-responsive.min.css') }}" rel="stylesheet">
     <link href="{{ asset('css/theme.css') }}" rel="stylesheet">
      <link href="{{ asset('images/icons/css/font-awesome.css') }}" rel="stylesheet">

    <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-confirmation/1.0.7/bootstrap-confirmation.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-confirmation/1.0.7/bootstrap-confirmation.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-confirmation/1.0.7/bootstrap-confirmation.min.js.map"></script>

</head>
<body>
<div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
            <i class="icon-reorder shaded"></i></a>
            <a class="brand" href="{{ url('/home') }}">Farm Manager</a>
            <div class="nav-collapse collapse navbar-inverse-collapse">
                <ul class="nav pull-right">
                    <li class="nav-user dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        {{ Auth::user()->name }}
                        <img src="{{ asset('images/user.png') }}" class="nav-avatar" />
                        <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="" target="_blank">Issues</a></li>
                            <li class="divider"></li>
                            <li><a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Logout
                                    </a></li>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="wrapper">
    <div class="container">
        <div class="row">

            <div class="span3">
    <div class="sidebar" style="position: fixed">
        <ul class="widget widget-menu unstyled">
            <li>
                <a href="{{ url('/home') }}">
                    <i class="menu-icon icon-home"></i>Home
                </a>
            </li>
            <li>
                <a href="{{ url('/farmers_list') }}">
                    <i class="menu-icon icon-filter"></i>Farmers
                </a>
            </li>
            <li>
                <a href="{{ url('/employees_list') }}">
                    <i class="menu-icon icon-group"></i>Employees
                </a>
            </li>
            <li>
                <a href="{{ url('/products') }}">
                    <i class="menu-icon icon-th-list"></i>Products
                </a>
            </li>
            <li>
                <a href="{{ url('/inventory') }}">
                    <i class="menu-icon icon-th-list"></i>Inventory
                </a>
            </li>
            <li>
                <a href="{{ url('/orders') }}">
                    <i class="menu-icon icon-th-list"></i>Orders
                </a>
            </li>
            <li>
                <a href="{{ url('/deliveries') }}">
                    <i class="menu-icon icon-th-list"></i>Deliveries
                </a>
            </li>
            <li>
                <a href="{{ url('/sales_reports') }}">
                    <i class="menu-icon icon-folder-open-alt"></i>Reports
                </a>
            </li>
        
            <li>
                <a href="{{ url('/issues') }}">
                    <i class="menu-icon icon-wrench"></i>Issues
                </a>
            </li>
        </ul>
        
        <ul class="widget widget-menu unstyled">
            <li><a href=""{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();""><i class="menu-icon icon-signout"></i>Logout </a></li>
                                                     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
        </ul>
    </div>

</div>


            
        </div>
        <div class="span10 pull-right">
             
@yield('content')
        </div>
       
    </div>  

</div>
<div class="footer">
    <div class="container">
        <b class="copyright">&copy; {{ date('Y') }} - Farm Manager </b> All rights reserved.
    </div>
</div>
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
