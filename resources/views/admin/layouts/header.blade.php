
    <header class="app-header navbar">
      <button class="navbar-toggler sidebar-toggler d-lg-none mr-auto" type="button" data-toggle="sidebar-show">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="{{ url('/dashboard') }}">
        <img class="navbar-brand-full" src="{{ asset('admin/img/brand/logo.png') }}" width="89" height="25" alt="CoreUI Logo">
        <img class="navbar-brand-minimized" src="img/brand/sygnet.svg" width="30" height="30" alt="CoreUI Logo">
      </a>
      <button class="navbar-toggler sidebar-toggler d-md-down-none" type="button" data-toggle="sidebar-lg-show">
        <span class="navbar-toggler-icon"></span>
      </button>
     
      <ul class="nav navbar-nav ml-auto">
       
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
            {{ Auth::user()->name }}
            <img class="img-avatar" src="{{ asset('admin/img/avatars/6.jpg') }}">
          </a>
          <div class="dropdown-menu dropdown-menu-right">
           
            <div class="dropdown-header text-center">
              <strong>Settings</strong>
            </div>
           
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="{{ url('/admincms/change-password')}}">
              <i class="fa fa-shield"></i> Change Password</a>
            
            <a class="dropdown-item" href="{{ url('admincms/logout') }}">
                <i class="fa fa-lock"></i>Logout</a>
          </div>
        </li>
       
      </ul>
      <button class="navbar-toggler aside-menu-toggler d-md-down-none" type="button" data-toggle="aside-menu-lg-show">
        <span class="navbar-toggler-icon"></span>
      </button>
      <button class="navbar-toggler aside-menu-toggler d-lg-none" type="button" data-toggle="aside-menu-show">
        <span class="navbar-toggler-icon"></span>
      </button>
    </header>
   
      