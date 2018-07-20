<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
  <title>Dashboard Tables, Free Admin Template</title>
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="viewport" content="width=device-width">
  <link rel="stylesheet" href="{{asset('css/styles.css')}}">
  <link rel="stylesheet" href="{{asset('css/templatemo_main.css')}}">

</head>
<body>
  <div id="main-wrapper">
    <div class="navbar navbar-inverse" role="navigation">
      <div class="navbar-header">
        <div class="logo"><h1>zAssets - Admin</h1></div>
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
          <li class="sub">
            <a href="javascript:;">
              <i class="fa fa-users"></i> Users <div class="pull-right"><span class="caret"></span></div>
            </a>
            <ul class="templatemo-submenu">
              <li><a href="{{route('users.index')}}">All Users</a></li>
              <li><a href="{{route('users.create')}}">Create user</a></li>
            </ul>
          </li>
          <li class="sub">
            <a href="javascript:;">
              <i class="fa fa-compass"></i> Sites <div class="pull-right"><span class="caret"></span></div>
            </a>
            <ul class="templatemo-submenu">
              <li><a href="{{route('site.index')}}">All Sites</a></li>
              <li><a href="{{route('site.create')}}">Create site</a></li>
            </ul>
          </li>
          <li class="sub">
            <a href="javascript:;">
              <i class="fa fa-hand-o-right"></i> Vendors <div class="pull-right"><span class="caret"></span></div>
            </a>
            <ul class="templatemo-submenu">
              <li><a href="{{route('vendors.index')}}">All Vendors</a></li>
              <li><a href="{{route('vendors.create')}}">Create Vendor</a></li>
            </ul>
          </li>
           <li class="sub">
            <a href="javascript:;">
              <i class="fa fa-clipboard"></i> Asset Cattegories <div class="pull-right"><span class="caret"></span></div>
            </a>
            <ul class="templatemo-submenu">
              <li><a href="{{route('categories.index')}}">All Categories</a></li>
              <li><a href="{{route('categories.create')}}">Create Category</a></li>
            </ul>
          </li>
          <li class="sub">
            <a href="javascript:;">
              <i class="fa fa-paste"></i> Subcategories <div class="pull-right"><span class="caret"></span></div>
            </a>
            <ul class="templatemo-submenu">
              <li><a href="{{route('subcategories.index')}}">All Subcategories</a></li>
              <li><a href="{{route('subcategories.create')}}">Create Subcategory</a></li>
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
          <p>Copyright &copy; 2018 zAssets <!-- Credit: www.templatemo.com --></p>
        </div>
      </footer>
    </div>
</div>
    <script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/templatemo_script.js')}}"></script>
  </body>
</html>
