<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
  <title>zAssets</title>
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="viewport" content="width=device-width">        
  <link rel="stylesheet" href="{{asset('css/templatemo_main.css')}}">

</head>
<body>
  <div id="main-wrapper">
    <div class="navbar navbar-inverse" role="navigation">
      <div class="navbar-header">
        <div class="logo"><h1>zAssets - Operator</h1></div>
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
          
          <li><a href="{{route('home')}}"><i class="fa fa-home"></i>Dashboard</a></li>
          <li><a href="{{route('assets.index')}}"><i class="fa fa-laptop"></i>All Assets</a></li>
          <li class="sub">
            <a href="javascript:;">
              <i class="fa fa-archive"></i> Documents <div class="pull-right"><span class="caret"></span></div>
            </a>
            <ul class="templatemo-submenu">
              <li><a href="{{route('documents.index')}}">All documents</a></li>
              <li><a href="{{route('documents.create')}}">Receive</a></li>
              <li><a href="{{route('documents.send')}}">Outbound</a></li>
              <li><a href="{{route('documents.handover')}}">Handover</a></li>
              
            </ul>
          </li>
          <li class="sub">
            <a href="javascript:;">
              <i class="fa fa-thumb-tack"></i> Manage Locations <div class="pull-right"><span class="caret"></span></div>
            </a>
            <ul class="templatemo-submenu">
              <li><a href="{{route('locations.index')}}">All locations</a></li>
              <li><a href="{{route('locations.create')}}">Create location</a></li>
            </ul>
          </li>
          <li class="sub">
            <a href="javascript:;">
              <i class="fa fa-user"></i> Manage Owners <div class="pull-right"><span class="caret"></span></div>
            </a>
            <ul class="templatemo-submenu">
              <li><a href="{{route('owners.index')}}">All owners</a></li>
              <li><a href="{{route('owners.create')}}">Create owner</a></li>
            </ul>
          </li>
         

           <li>
              
              <a href="{{ route('logout') }}"
                 onclick="event.preventDefault();
                 document.getElementById('logout-form').submit();"><i class="fa fa-sign-out"></i>Sign Out</a>
              <form action="{{ route('logout') }}" id="logout-form" method="POST">
                  @csrf
              </form>
          </li>   
        </ul>
      </div><!--/.navbar-collapse -->

      <div class="templatemo-content-wrapper">
        <div class="templatemo-content">
          
      @yield('content')
      </div>
      </div>
      <!-- Modal -->
      

      <footer class="templatemo-footer">
        <div class="templatemo-copyright">
          <p>Copyright &copy; 2018 zAssets <!-- Credit: www.templatemo.com --></p>
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
