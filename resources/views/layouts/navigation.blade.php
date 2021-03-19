<div class="container">  
  <div class="container">  
    <nav class="main-navigation">
            <div class="navbar-header animated fadeInUp">
                <a class="navbar-brand" href="#">IMaba</a>
            </div>
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
    </nav>
</div>