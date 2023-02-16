<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
  <a class="navbar-brand" href="{{url('/')}}">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      
      
      <li class="nav-item">
        <a class="nav-link btn btn-outline-secondary my-2 my-sm-0" href="{{url('/oan/y')}}">Online Application</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('/cfv')}}">Certificate Verification</a>
      </li>
      
      @guest
      <li class="nav-item">
        <a class="nav-link" href="{{url('/login')}}">Login</a>
      </li>
      @else
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Registration
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{url('/cfe')}}">Certificate Registration</a>
          <a class="dropdown-item" href="{{url('/dr')}}">Department Registration</a>
          <a class="dropdown-item" href="{{url('/pr')}}">Program Registration</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="{{url('/register')}}">User Registration</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          View & Edit Information
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{url('/cfl')}}">Certificates</a>
          <a class="dropdown-item" href="{{url('/drl')}}">Departments</a>
          <a class="dropdown-item" href="{{url('/prl')}}">Programs</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="{{url('/register')}}">User Registration</a>
        </div>
      </li>
      <li class="nav-item">
        <a  class="nav-link "  href="{{ route('logout') }}"
          onclick="event.preventDefault();
          document.getElementById('logout-form').submit();">
          {{ __('Logout') }}
        </a>
      </li>
      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
      </form>
      @endguest
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
    </form>
  </div>
</nav>