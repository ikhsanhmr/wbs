  <nav class="navbar navbar-expand-lg" style="background-color: rgba(10, 10, 10, 0.171)">
      <div class="container">
      <a href="{{ route('home') }}">
        <img src="{{ url('images/wbs.png') }}" width="150" alt="logo">
      </a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
          @auth
          <li>
            <div class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" style="color: black;">Welcome Back, {{ auth()->user()->name }}</a>
              <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">            
                <li><a class="dropdown-item" href="{{ route('dashboard') }}"><i class="bi bi-layout-text-sidebar"></i>  My Dashboard</a></li>
                <li><a class="dropdown-item" href="{{ route('archieve') }}"><i class="bi bi-archive"></i>  Archieve</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="{{ route('user') }}"><i class="bi bi-people"></i>  User List</a></li>
                <li><hr class="dropdown-divider"></li>
                <li>
                  <form action="{{ route('logout') }}" method="post">
                    @csrf
                    <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-in-right"></i>  Logout</button>
                  </form>
                </li>
              </ul>
            </div>   
          </li>
          @else
            <li class="nav-item">
                <a href="{{ route('login') }}" class="btn">
                    <i class="bi bi-box-arrow-in-right"></i> Login
                </a>
            </li>
          @endauth
      </ul>          
    </div>
    
    </div>
  </nav>
  