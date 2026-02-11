<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Seractive') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    @stack('styles')
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg bg-white fixed-top">
          <div class="container-xl">
            <a class="navbar-brand" href="{{ url('/') }}">
              <img src="{{ asset('img/seractive-logo.jpg') }}" alt="Seractive" height="30">
            </a>

            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#nav">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div id="nav" class="collapse navbar-collapse justify-content-center">
              <ul class="navbar-nav gap-lg-4 my-3 my-lg-0">
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Services
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="{{ url('/services/autonomic-marketing') }}">Autonomic Marketing</a></li>
                    <li><a class="dropdown-item" href="{{ url('/services/growth-concierge') }}">Growth Concierge</a></li>
                    <li><a class="dropdown-item" href="{{ url('/services/insight-360') }}">Insight 360</a></li>
                    <li><a class="dropdown-item" href="{{ url('/services/nexus-ai-crm') }}">Nexus AI CRM</a></li>
                    <li><a class="dropdown-item" href="{{ url('/services/workforce-efficiency') }}">Workforce Efficiency</a></li>
                  </ul>
                </li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/products') }}">Products</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/industries') }}">Industries</a></li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Resources
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="{{ url('/blog') }}">Blog</a></li>
                    <li><a class="dropdown-item" href="{{ url('/case-studies') }}">Case Studies</a></li>
                  </ul>
                </li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/about') }}">About</a></li>
              </ul>
            </div>

            <div class="d-none d-lg-block">
                <a href="{{ url('/contact') }}" class="btn btn-primary btn-sm">Let's talk</a>
                @guest
                    {{-- 
                    @if (Route::has('login'))
                        <a class="btn btn-outline-primary btn-sm ms-2" href="{{ route('login') }}">{{ __('Login') }}</a>
                    @endif
                    --}}
                @else
                    <div class="dropdown d-inline-block">
                        <a id="navbarDropdown" class="btn btn-outline-primary ms-2 dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </div>
                @endguest
            </div>
          </div>
        </nav>

        <main>
            @yield('content')
        </main>

        <footer class="pt-5 pb-4 border-top border-secondary border-opacity-25">
          <div class="container-xl">
            <div class="row g-5 mb-5">
              
              <!-- Brand Column -->
              <div class="col-lg-4">
                <a href="{{ url('/') }}" class="d-block mb-4">
                  <img src="{{ asset('img/seractive-white.png') }}" alt="Seractive" height="30">
                </a>
                <p class="opacity-75 mb-4 max-w-300">
                  Architecting intelligence for the modern enterprise. We build the systems that power your future.
                </p>
                <div class="d-flex gap-3">
                  <a href="#" class="social-link"><i class="bi bi-twitter-x"></i></a>
                  <a href="#" class="social-link"><i class="bi bi-linkedin"></i></a>
                  <a href="#" class="social-link"><i class="bi bi-github"></i></a>
                </div>
              </div>

              <!-- Services -->
              <div class="col-6 col-md-3 col-lg-2">
                <h6 class="mb-3">Services</h6>
                <ul class="list-unstyled d-flex flex-column gap-2 opacity-75 small">
                  <li><a href="{{ url('/services/autonomic-marketing') }}" class="text-decoration-none">Autonomic Marketing</a></li>
                  <li><a href="{{ url('/services/growth-concierge') }}" class="text-decoration-none">Growth Concierge</a></li>
                  <li><a href="{{ url('/services/insight-360') }}" class="text-decoration-none">Insight 360</a></li>
                  <li><a href="{{ url('/services/nexus-ai-crm') }}" class="text-decoration-none">Nexus AI CRM</a></li>
                  <li><a href="{{ url('/services/workforce-efficiency') }}" class="text-decoration-none">Workforce Efficiency</a></li>
                </ul>
              </div>

              <!-- Products -->
              <div class="col-6 col-md-3 col-lg-2">
                <h6 class="mb-3">Products</h6>
                <ul class="list-unstyled d-flex flex-column gap-2 opacity-75 small">
                  <li><a href="{{ url('/products#contextclue') }}" class="text-decoration-none">ContextClue</a></li>
                  <li><a href="{{ url('/products#nexus-core') }}" class="text-decoration-none">Nexus Core</a></li>
                  <li><a href="{{ url('/products#insight-engine') }}" class="text-decoration-none">Insight Engine</a></li>
                  <li><a href="{{ url('/products#concierge-framework') }}" class="text-decoration-none">Concierge Framework</a></li>
                </ul>
              </div>

              <!-- Industries -->
              <div class="col-6 col-md-3 col-lg-2">
                <h6 class="mb-3">Industries</h6>
                <ul class="list-unstyled d-flex flex-column gap-2 opacity-75 small">
                  <li><a href="{{ url('/industries#aviation') }}" class="text-decoration-none">Aviation</a></li>
                  <li><a href="{{ url('/industries#investments') }}" class="text-decoration-none">Investments</a></li>
                  <li><a href="{{ url('/industries#finance') }}" class="text-decoration-none">Finance</a></li>
                  <li><a href="{{ url('/industries#manufacturing') }}" class="text-decoration-none">Manufacturing</a></li>
                  <li><a href="{{ url('/industries#retail') }}" class="text-decoration-none">Retail</a></li>
                  <li><a href="{{ url('/industries#logistics') }}" class="text-decoration-none">Logistics</a></li>
                </ul>
              </div>

              <!-- Company -->
              <div class="col-6 col-md-3 col-lg-2">
                <h6 class="mb-3">Company</h6>
                <ul class="list-unstyled d-flex flex-column gap-2 opacity-75 small">
                  <li><a href="{{ url('/about') }}" class="text-decoration-none">About Us</a></li>
                  <li><a href="{{ url('/blog') }}" class="text-decoration-none">Blog</a></li>
                  <li><a href="{{ url('/case-studies') }}" class="text-decoration-none">Case Studies</a></li>
                  <li><a href="{{ url('/contact') }}" class="text-decoration-none">Contact</a></li>
                  <li><a href="#" class="text-decoration-none">Careers</a></li>
                  <li><a href="#" class="text-decoration-none">Partners</a></li>
                </ul>
              </div>

            </div>

            <!-- Footer Bottom -->
            <div class="footer-bottom d-flex flex-column flex-md-row justify-content-between align-items-center gap-3">
              <div class="small opacity-50">
                &copy; {{ date('Y') }} Seractive LLC. All rights reserved.
              </div>
              <div class="d-flex gap-4 small opacity-75">
                <a href="#" class="text-decoration-none">Privacy Policy</a>
                <a href="#" class="text-decoration-none">Terms of Service</a>
                <a href="#" class="text-decoration-none">Cookies</a>
              </div>
            </div>
          </div>
        </footer>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
