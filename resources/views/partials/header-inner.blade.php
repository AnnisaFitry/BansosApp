<header id="header" class="fixed-top d-flex align-items-center ">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h1><a href="{{ route('index') }}"><span>BansosApp</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="{{ route('index') }}">Home</a></li>
          <li><a class="nav-link scrollto" href="{{ route('pengajuan') }}">Pengajuan</a></li>
          <li><a class="nav-link scrollto" href="{{ route('profile') }}">Profile</a></li>
          <li>
            <a class="nav-link scrollto" href="{{ route('login') }}">
              <button type="button" class="btn btn-success">Sign In</button>
            </a>
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
      <!-- .navbar -->

    </div>
  </header><!-- End Header -->