<!DOCTYPE html>
<html  dir="rtl" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
            <nav class="navbar navbar-expand-lg py-3 navbar-light shadow-sm"  >
                    <div class="container">
                      <a href="{{ route('showAllCompany') }}" class="navbar-brand">
                        <!-- Logo Image -->
                        <img src={{ asset("/img/molkyat.jpeg") }} width="300" height="70" alt="Molkyat Logo" class="d-inline-block align-middle mr-2" href>
                        <!-- Logo Text -->
                        <span class="text-uppercase font-weight-bold"></span>
                      </a>
                  
                      <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler"><span class="navbar-toggler-icon"></span></button>
                  
                      <div id="navbarSupportedContent" class="collapse navbar-collapse">
                        <ul class="navbar-nav ml-auto">
                          <li class="nav-item active"><a href="{{ route('showAllCompany') }}" class="nav-link">الصفحة الرئيسية <span class="sr-only">(current)</span></a></li>
                          <li class="nav-item hvr-underline-from-right">
                            <a class="nav-link" href="{{ route('showAllCompany') }}">الشركات</a>
                        </li>
                          @if(Auth::guard('web')->check())
                          <li class="nav-item hvr-underline-from-right">
                              <a class="nav-link" href="{{ route('user.companies') }}">شركاتي</a>
                          </li>
                          @endif
                          <li class="nav-item"><a href="#" class="nav-link">من نحن </a></li>
                          <!-- Authentication Links -->
                            @guest
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </li>
                                @endif
                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>
    
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>
    
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endguest
                        </ul>
                      </div>

                    </div>
                </nav>
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script> --}}
</html>
