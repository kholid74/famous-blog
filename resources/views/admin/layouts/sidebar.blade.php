<div class="sidebar">
  <nav class="sidebar-nav">
    <ul class="nav">
      <li class="nav-item">
        <a class="nav-link" href="{{ url('/dashboard') }}">
          <i class="nav-icon icon-home"></i> Dashboard
        </a>
      </li>
      <li class="nav-title">Menu</li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('post.index') }}">
          <i class="nav-icon icon-note"></i> Post</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('categories.index') }}">
          <i class="nav-icon icon-folder"></i> Categories</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('/admincms/change-password')}}">
          <i class="nav-icon icon-shield"></i> Change Password</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('/admincms/logout') }}">
          <i class="nav-icon icon-lock"></i> Logout</a>
      </li>
     
    </ul>
  </nav>
  <button class="sidebar-minimizer brand-minimizer" type="button"></button>
</div>