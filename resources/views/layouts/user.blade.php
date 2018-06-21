<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
  <title>Dashboard Tables, Free Admin Template</title>
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="viewport" content="width=device-width">        
  <link rel="stylesheet" href="{{asset('css/templatemo_main.css')}}">

</head>
<body>
  <div id="main-wrapper">
    <div class="navbar navbar-inverse" role="navigation">
      <div class="navbar-header">
        <div class="logo"><h1>Dashboard - Admin Template</h1></div>
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button> 
      </div>   
    </div>
    <div class="template-page-wrapper">
      <div class="navbar-collapse collapse templatemo-sidebar">
        <ul class="templatemo-sidebar-menu">
          <li>
            <form class="navbar-form">
              <input type="text" class="form-control" id="templatemo_search_box" placeholder="Search...">
              <span class="btn btn-default">Go</span>
            </form>
          </li>
          <li><a href="index.html"><i class="fa fa-home"></i>Dashboard</a></li>
          <li class="sub">
            <a href="javascript:;">
              <i class="fa fa-database"></i> Manage Locations <div class="pull-right"><span class="caret"></span></div>
            </a>
            <ul class="templatemo-submenu">
              <li><a href="{{route('locations.index')}}">All locations</a></li>
              <li><a href="{{route('locations.create')}}">Create location</a></li>
            </ul>
          </li>
                    <li class="sub">
            <a href="javascript:;">
              <i class="fa fa-database"></i> Manage Owners <div class="pull-right"><span class="caret"></span></div>
            </a>
            <ul class="templatemo-submenu">
              <li><a href="{{route('owners.index')}}">All owners</a></li>
              <li><a href="{{route('owners.create')}}">Create owner</a></li>
            </ul>
          </li>
          <li class="sub">
            <a href="javascript:;">
              <i class="fa fa-database"></i> Nested Menu <div class="pull-right"><span class="caret"></span></div>
            </a>
            <ul class="templatemo-submenu">
              <li><a href="#">Aenean</a></li>
              <li><a href="#">Pellentesque</a></li>
              <li><a href="#">Congue</a></li>             
              <li><a href="#">Interdum</a></li>
              <li><a href="#">Facilisi</a></li>
            </ul>
          </li>
          <li><a href="data-visualization.html"><i class="fa fa-cubes"></i><span class="badge pull-right">9</span>Data Visualization</a></li>
          <li><a href="maps.html"><i class="fa fa-map-marker"></i><span class="badge pull-right">42</span>Maps</a></li>
          <li class="active"><a href="#"><i class="fa fa-users"></i><span class="badge pull-right">NEW</span>Manage Users</a></li>
          <li><a href="preferences.html"><i class="fa fa-cog"></i>Preferences</a></li>
          <li><a href="javascript:;" data-toggle="modal" data-target="#confirmModal"><i class="fa fa-sign-out"></i>Sign Out</a></li>
        </ul>
      </div><!--/.navbar-collapse -->

      <div class="templatemo-content-wrapper">
        <div class="templatemo-content">
          <ol class="breadcrumb">
            <li><a href="index.html">Admin Panel</a></li>
            <li><a href="#">Manage Users</a></li>
            <li class="active">Tables</li>
          </ol>
      @yield('content')
      </div>
      </div>
      <!-- Modal -->
      <div class="modal fade" id="confirmModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
              <h4 class="modal-title" id="myModalLabel">Are you sure you want to sign out?</h4>
            </div>
            <div class="modal-footer">
              <a href="sign-in.html" class="btn btn-primary">Yes</a>
              <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
            </div>
          </div>
        </div>
      </div>

      <footer class="templatemo-footer">
        <div class="templatemo-copyright">
          <p>Copyright &copy; 2084 Your Company Name <!-- Credit: www.templatemo.com --></p>
        </div>
      </footer>
    </div>
</div>
    <script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/templatemo_script.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/fieldgroup.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/checkbox.js')}}"></script>
  </body>
</html>