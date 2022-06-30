<nav class="navbar navbar-expand-md navbar-dark bg-black shadow-sm">
    <div class="container">
        <button class="btn btn-outline-light" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">
          Gallery Photo Sports
        </button>
        <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
          <div class="offcanvas-header navbar-dark bg-light">
            <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">Gallery Photo Sports</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body bg-dark" >
            <li class="nav-item">
                  <a class="nav-link {{  $active === "home" ? 'active' : '' }} list-group-item list-group-item-action list-group-item-light" href="/">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ ($active === "posts" ) ? 'active' : '' }} list-group-item list-group-item-action list-group-item-light" href="/posts">Blog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ ($active === "categories" ) ? 'active' : '' }} list-group-item list-group-item-action list-group-item-light" href="{{ url('/categories') }}">Categories</a>
            </li>
          </div>
        </div>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
              @auth
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Welcome , {{ auth()->user()->name }}
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-sidebar-reverse"></i> My Dashboard</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li>
                      <form action="/logout" method="post">
                        @csrf
                        <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i> Logout</button>
                      </form>
                    </li>
                  </ul>
                </li>
              @else
                <li class="nav-item">
                  <a href="/login" class="nav-link {{ ($active === "login" ) ? 'active' : '' }}"><i class="bi bi-box-arrow-in-right"></i>Login</a>
                </li>
              @endauth
            </ul>
        </div>
    </div>
</nav>