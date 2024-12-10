<nav class="navbar navbar-expand-lg">
  <div class="search-panel">
      <div class="search-inner d-flex align-items-center justify-content-center">
          <div class="close-btn">Close <i class="fa fa-close"></i></div>
          <form id="searchForm" action="#">
              <div class="form-group">
                  <input type="search" name="search" placeholder="What are you searching for...">
                  <button type="submit" class="submit">Search</button>
              </div>
          </form>
      </div>
  </div>
  <div class="container-fluid d-flex align-items-center justify-content-between">
      <div class="navbar-header">
          <!-- Navbar Header -->
          <a href="index.html" class="navbar-brand">
              <div class="brand-text brand-big visible text-uppercase">
                  <strong class="text-primary">Dark</strong><strong>Admin</strong>
              </div>
              <div class="brand-text brand-sm">
                  <strong class="text-primary">D</strong><strong>A</strong>
              </div>
          </a>
          <!-- Sidebar Toggle Btn -->
          <button class="sidebar-toggle"><i class="fa fa-long-arrow-left"></i></button>
      </div>
      <div class="right-menu list-inline no-margin-bottom">
          <div class="list-inline-item">
              <a href="#" class="search-open nav-link"><i class="icon-magnifying-glass-browser"></i></a>
          </div>
          <div class="list-inline-item dropdown">
              <a id="navbarDropdownMenuLink1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link messages-toggle">
                  <i class="icon-email"></i><span class="badge dashbg-1">5</span>
              </a>
              <div aria-labelledby="navbarDropdownMenuLink1" class="dropdown-menu messages">
                  <!-- Messages Dropdown -->
              </div>
          </div>
          <!-- User Profile and Logout -->
          <div class="list-inline-item dropdown">
              <a id="userDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link">
                  <i class="fa fa-user"></i> <span>{{ Auth::user()->name }}</span>
              </a>
              <div aria-labelledby="userDropdown" class="dropdown-menu">
                  <a href="{{ route('profile.edit') }}" class="dropdown-item">Profile</a>
                  <form method="POST" action="{{ route('logout') }}" class="dropdown-item">
                      @csrf
                      <button type="submit" class="btn btn-link p-0 text-danger">Logout</button>
                  </form>
              </div>
          </div>
      </div>
  </div>
</nav>
