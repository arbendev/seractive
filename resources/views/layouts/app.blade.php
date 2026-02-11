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
              <img src="{{ asset('img/logo-seractive.png') }}" alt="Seractive" height="30">
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
                    <li><a class="dropdown-item" href="{{ url('/resources') }}">All Resources</a></li>
                    <li><a class="dropdown-item" href="{{ url('/blog') }}">Blog</a></li>
                    <li><a class="dropdown-item" href="{{ url('/resources/ai-audit') }}">AI Audit</a></li>
                  </ul>
                </li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/about') }}">About</a></li>
              </ul>
            </div>

            <div class="d-none d-lg-block">
                @guest
                    <a href="{{ url('/contact') }}" class="btn btn-primary btn-sm">Let's talk</a>
                    @if (Route::has('login'))
                        <a class="btn btn-outline-primary btn-sm ms-2" href="{{ route('login') }}">{{ __('Login') }}</a>
                    @endif
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

        <footer class="pt-5 pb-4">
          <div class="container-xl">
            <div class="row g-5">
              
              <div class="col-lg-4 mb-4 mb-lg-0">
                <a href="#" class="d-block mb-4">
                  <img src="{{ asset('img/seractive-white.png') }}" alt="Seractive" height="36">
                </a>
                <p class="text-light opacity-75 mb-4 max-w-300">
                  Architecting intelligence for the modern enterprise. We build the systems that power your future.
                </p>
                <div class="d-flex gap-3">
                  <a href="#" class="social-link"><i class="bi bi-twitter-x"></i></a>
                  <a href="#" class="social-link"><i class="bi bi-linkedin"></i></a>
                  <a href="#" class="social-link"><i class="bi bi-github"></i></a>
                </div>
              </div>

              <div class="col-6 col-lg-2">
                <h6>Company</h6>
                <ul class="list-unstyled d-flex flex-column gap-3">
                  <li><a href="{{ url('/about') }}">About Us</a></li>
                  <li><a href="#">Careers</a></li>
                  <li><a href="{{ url('/contact') }}">Contact</a></li>
                  <li><a href="#">Partners</a></li>
                </ul>
              </div>

              <div class="col-6 col-lg-2">
                <h6>Resources</h6>
                <ul class="list-unstyled d-flex flex-column gap-3">
                  <li><a href="#">Blog</a></li>
                  <li><a href="#">Case Studies</a></li>
                  <li><a href="#">Documentation</a></li>
                  <li><a href="#">Support</a></li>
                </ul>
              </div>

              <div class="col-lg-4">
                <h6>Stay Updated</h6>
                <p class="text-light opacity-75 small mb-3">Get the latest insights on AI and automation delivered to your inbox.</p>
<livewire:components.newsletter-signup />
              </div>

            </div>

            <div class="footer-bottom d-flex flex-column flex-md-row justify-content-between align-items-center gap-3">
              <div class="small text-light opacity-50">
                © {{ date('Y') }} Seractive. All rights reserved.
              </div>
              <div class="d-flex gap-4 small text-light opacity-75">
                <a href="#">Privacy Policy</a>
                <a href="#">Terms of Service</a>
                <a href="#">Cookies</a>
              </div>
            </div>
          </div>
        </footer>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
