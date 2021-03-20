  {{-- <div class="container">  
    <nav class="main-navigation navbar">
            <div class="navbar-header animated fadeInUp">
                <a class="navbar-brand main-navigation" href="#">IMaba</a>
            </div>
            <a class="navbar-brand main-navigation" href="#">Navbar</a>
            <ul class="nav-list">
                <li class="nav-list-item">
                  <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="/">Home</a>                    
                </li>
                <li class="nav-list-item">
                  <a class="nav-link {{ request()->is('contact') ? 'active' : '' }}" href="/contact">Contact</a>
                </li>
                <li class="nav-list-item">
                  <a class="nav-link {{ request()->is('about') ? 'active' : '' }}" href="/about">About</a>
                </li>
                <li class="nav-list-item">
                  <a class="nav-link {{ request()->is('login') ? 'active' : '' }}" href="/login">Login</a>
                </li>
            </ul>
    </nav> --}}
   
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">IMaba</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-list-item">
              <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="/">Home</a>                    
              <li class="nav-list-item">
                <a class="nav-link {{ request()->is('contact') ? 'active' : '' }}" href="/contact">Contact</a>
              </li>
              <li class="nav-list-item">
                <a class="nav-link {{ request()->is('about') ? 'active' : '' }}" href="/about">About</a>
              </li>
              <li class="nav-list-item">
                <a class="nav-link {{ request()->is('login') ? 'active' : '' }}" href="/login">Login</a>
              </li>
        </ul>
        </div>
      </div>
    </nav>