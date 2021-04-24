<nav
      class="navbar navbar-expand-lg navbar-light navbar-store fixed-top navbar-fixed-top"
      data-aos="fade-down"
    >
      <div class="container">
        <a href="{{ url('home') }}" class="navbar-brand">
          <img src="/images/logo.svg" alt="logo"
        /></a>

        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarResponseve"
        >
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarResponseve">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a href="{{ url('home') }}" class="nav-link">Home</a>
            </li>
            <li class="nav-item">
              <a href="{{ url('categories') }} " class="nav-link">Categories</a>
            </li>
            <li class="nav-item ">
              <a href="/ " class="nav-link">Rewards</a>
            </li>
            {{-- <li class="nav-item">
              <a href="{{ url('register') }} " class="nav-link">Sign Up</a>
            </li>
            <li class="nav-item">
              <a
                href="{{ url('login') }} "
                class="btn btn-success nav-link px-2 text-white"
                >Sign In</a
              >
            </li> --}}
          </ul>
        </div>
      </div>
    </nav>