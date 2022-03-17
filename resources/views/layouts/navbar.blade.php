<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href={{ route('index') }}>Laravel Blog</a>
      <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul id="left__side" class="navbar-nav me-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href={{ route('index') }}>Home</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
        </ul>

        <ul id="right__side" class="navbar-nav ms-auto">
          @auth
            <li class="nav-item">
                <a class="nav-link" href="#">Create Post</a>
            </li>
            
            <li class="nav-item dropdown">
                <a
                class="nav-link dropdown-toggle"
                href="#"
                id="navbarDropdown"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
                >
                <img
                    height="35px"
                    width="35px"
                    src={{ asset('images/user.jpg') }}
                    style="object-fit: cover"
                    class="rounded-circle border border-2 border-white"
                />
                {{ auth()->user()->username }}
                </a>
                <ul
                class="dropdown-menu dropdown-menu-end"
                aria-labelledby="navbarDropdown"
                >
                <li>
                    <a class="dropdown-item" href="#"
                    ><i class="fa">&#xf2bd;</i> Profile</a
                    >
                </li>
                <li>
                    <a class="dropdown-item" href="#"
                    ><i class="fa">&#xf085;</i> Settings</a
                    >
                </li>
                <li>
                    <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault(); 
                        document.querySelector('#logout-form').submit();">
                        <i class="fa">&#xf08b;</i> Logout
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
                </ul>
            </li>
          @else

            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">Login</a>
            </li>
              
          @endauth

        </ul>
      </div>
    </div>
  </nav>