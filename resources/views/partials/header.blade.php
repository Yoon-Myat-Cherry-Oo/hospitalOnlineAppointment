@section('style')

@endsection
<header>
    <div class="topbar">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 text-sm">
            <div class="site-info">
              <a href="#"><span class="mai-call text-primary"></span>053 27911 , 053 25177</a>
               <span class="divider">|</span>
              <a href="#"><span class="mai-mail text-primary"></span> pyaymyanmar@gmail.com</a>
            </div>
          </div>
          <div class="col-sm-4 text-center text-sm">
            <div class="social-mini-button">
              <a href="https://web.facebook.com/"><span class="mai-logo-facebook-f"></span></a>
              <a href="https://www.twitter.com/"><span class="mai-logo-twitter"></span></a>
              <a href="https://www.dribble.com/"><span class="mai-logo-dribbble"></span></a>
              <a href="https://www.instagram.com/"><span class="mai-logo-instagram"></span></a>
            </div>
          </div>
        </div> <!-- .row -->
      </div> <!-- .container -->
    </div> <!-- .topbar -->

    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
      <div class="container">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('user/assets/img/logo.jpg') }}" style="width:70px; height: 35px;"/>
            <span class="text-primary font-bold" >Pyay Myanmar<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hospital</span></a>

         {{-- <form action="#">
          <div class="input-group input-navbar">
            <div class="input-group-prepend">
              <span class="input-group-text" id="icon-addon1">
                <span class="mai-search"></span></span>
            </div>
            <input type="text" class="form-control" placeholder="Enter keyword.." a
            ria-label="Username" aria-describedby="icon-addon1">
          </div>
        </form> --}}

         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport"
        aria-expanded="false" aria-label="Toggle navigation" >
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupport">
          <ul class="navbar-nav text-right ml-5 pl-3">
             <li class="nav-item">
              <a class="nav-link" href="{{ route('user.index') }}" id="home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('user.about') }}" id="about">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('user.doctor') }}" id="doctor">Doctors</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('user.news') }}" id="news">News</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('user.service') }}" id="service">Services</a>
              </li>

            {{-- <li class="nav-item">
                <a class="nav-link" href="{{ route('user.review') }}" id="review">Testimonial</a>
              </li> --}}

            <li class="nav-item">
              <a class="nav-link" href="{{ route('user.contact') }}" id="contact">Contact</a>
            </li>
          </ul>

        </div> <!-- .navbar-collapse -->
        @if(Route::has('login'))
        {{-- @if(Auth::check()) --}}
        @auth
        <div class="dropdown">
            <button class="btn btn-primary dropdown-toggle" type="button"
            data-toggle="dropdown">{{ Auth::user()->name }}
            <span class="caret"></span></button>
            <ul class="dropdown-menu">
              {{-- <li><a href="#">Profile</a></li> --}}

              <li><form method="POST" action="{{ route('logout') }}">
                @csrf
                  <ul type="none">
                  <li class="nav-item px-1 my-2">
                    <button type="submit" class="text-end btn-sm">Log Out</button>
                </li>

                </form></li>
            </ul>
        </div>

        @else

        <li class="nav-item px-2 text-right" type="none">
            <a class="btn btn-primary btn-sm" href="{{ route('login') }}">Login</a>
        </li>

        <li class="nav-it3em px-2 text-right" type="none">
            <a class="btn btn-primary btn-sm" href="{{ route('register') }}">Register</a>
        </li>

      </ul>

        @endauth
        @endif

      </div> <!-- .container -->

    </nav>
  </header>
