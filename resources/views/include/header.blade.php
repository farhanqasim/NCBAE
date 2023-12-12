  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">
    <div class="container-fluid d-flex align-items-center justify-content-between">

      <a href="" class="logo d-flex align-items-center me-auto me-xl-0">

        <img src="{{asset('assets/img/logo.svg')}}" alt="">
      </a>

      <!-- Nav Menu -->
      <nav id="navmenu" class="navmenu" style="display: flex; justify-content:space-between; column-gap:20px;">
        <ul class=""  style=" margin-right:auto">
          <li><a href="{{ url('/') }}" class="active">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#posts">Posts</a></li>
          <li><a href="#events">Event</a></li>
          <li><a href="{{ route('blog') }}">Blog</a></li>

          <li><a href="#contact">Contact</a></li>

        </ul>
         <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
         </nav>
         <a class="btn-getstarted" href="{{ route('login') }}">Get Started</a>

    </div>
  </header><!-- End Header -->
