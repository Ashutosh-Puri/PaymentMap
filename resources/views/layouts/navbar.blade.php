  <!-- Navbar Start -->

    <nav class="navbar navbar-expand-lg bg-light py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
        {{-- <img src="{{ asset('img/favicon.png') }}" style="height:50px; width:50px;" > --}}
        <a href="{{ url('/') }}" class="navbar-brand ms-4 ms-lg-0">
            <h1 class="ml-2 display-5 text-primary m-0">{{ config('app.name', 'Laravel') }}</h1>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse z-10" id="navbarCollapse">
            {{-- <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="index.html" class="nav-item nav-link active">Home</a>
                <a href="about.html" class="nav-item nav-link">About</a>
                <a href="service.html" class="nav-item nav-link">Services</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu border-light m-0">
                        <a href="project.html" class="dropdown-item">Projects</a>
                        <a href="feature.html" class="dropdown-item">Features</a>
                        <a href="team.html" class="dropdown-item">Team Member</a>
                        <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                        <a href="404.html" class="dropdown-item">404 Page</a>
                    </div>
                </div>
                <a href="contact.html" class="nav-item nav-link">Contact</a>
            </div> --}}
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav me-auto">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ms-auto">
                <!-- Authentication Links -->
                <a href="{{ route('home') }}" class="nav-item nav-link @stack('home')">Home</a>
                <a href="{{ route('services') }}" class="nav-item nav-link @stack('services')">Services</a>
                <a href="{{ route('aboutus') }}" class="nav-item nav-link @stack('aboutus')">About</a>
                 {{-- <a href="{{ route('contactus') }}" class="nav-item nav-link @stack('contactus')">Contact</a> --}}
                <div class="nav-item dropdown z-10">
                    <a id="MoreDropdown"  class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>More</a>
                    <div class="dropdown-menu border-light m-0" aria-labelledby="MoreDropdown">
                        <a href="{{ route('projects') }}" class="dropdown-item @stack('projects')">Projects</a>
                         <a href="{{ route('features') }}" class="dropdown-item @stack('features')">Features</a>
                         <a href="{{ route('team') }}" class="dropdown-item @stack('team')">Team</a>
                    </div>
                </div>

                @guest
                    @if (Route::has('login'))
                        <a class="nav-item nav-link @stack('login')" href="{{ route('login') }}">{{ __('Login') }}</a>
                    @endif
                    @if (Route::has('register'))
                        <a class="nav-item nav-link @stack('register')" href="{{ route('register') }}">{{ __('Register') }}</a>
                    @endif
                @else
                    <li class="nav-item dropdown z-10">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">

                            @if (Auth::user()->role=='1')
                                <a class="dropdown-item" href="{{ route('admin.admin.dashboard') }}">{{ __('A Dashboard') }}</a>
                                <a class="dropdown-item" href="{{ route('user.dashboard') }}">{{ __('U Dashboard') }}</a>
                                @else
                                <a class="dropdown-item" href="{{ route('user.dashboard') }}">{{ __('Dashboard') }}</a>
                            @endif
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>

        </div>
    </nav>

<!-- Navbar End -->
