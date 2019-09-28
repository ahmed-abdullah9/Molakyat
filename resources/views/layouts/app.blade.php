<!DOCTYPE html>
<html lang="ar" dir="rtl" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
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
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">     
            <nav class="navbar navbar-expand-lg  navbar-fixed-top scrolled d-flex flex-column flex-md-row p-3 px-md-4 mb-3 bg-white  border-bottom shadow-sm"  >
                    <div class="container-fluid">
                      <a  class="navbar-brand" href="{{ route('showAllCompany') }}">
                        <!-- Logo Image -->
                        <img src={{ asset("/img/molkyat.jpeg") }} width="300" height="70" alt="Molkyat Logo" class="d-inline-block align-middle mr-2" href>
                        <!-- Logo Text -->
                        <span class="text-uppercase font-weight-bold"></span>
                      </a>
                  
                      <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler"><span class="navbar-toggler-icon"></span></button>
                  
                      <div id="navbarSupportedContent" class="collapse navbar-collapse fill">
                        <ul class="navbar-nav ml-auto">
                          <li class="nav-item active "><a href="{{ route('showAllCompany') }}" class="nav-link nav-tab">الصفحة الرئيسية <span class="sr-only">(current)</span></a></li>
                          <li class="nav-item ">
                            <a class="nav-link nav-tab" href="{{ route('showAllCompany') }}">الشركات</a>
                        </li>
                          @if(Auth::guard('web')->check())
                          <li class="nav-item ">
                              <a class="nav-link nav-tab" href="{{ route('user.companies') }}">شركاتي</a>
                          </li>
                          @endif
                          <li class="nav-item"><a href="#" class="nav-link nav-tab">من نحن </a></li>
                        </ul>
                          <!-- Authentication Links -->
                            @guest
                            <ul class="navbar-nav ml-auto">

                                <li class="nav-item"  style="padding: 0px 0px 0px 16px;">
                                    <a class="nav-link authenticate" href="{{ route('login') }}">{{ __('تسجيل الدخول') }}</a>
                                </li>
                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link authenticate" href="{{ route('register') }}">{{ __('التسجيل') }}</a>
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
                            </ul>

                            @endguest
                      </div>

                    </div>
                </nav>
        <main class="py-4">
            @yield('content')
        </main>
        
    </div>
    <!-- Footer -->
    <footer class="page-footer font-small mdb-color lighten-3 pt-4 my-md-5 pt-md-5 border-top" style="background: rgb(5, 48, 83);">
    
      <!-- Footer Links -->
      <div class="container text-center text-md-right">
    
        <!-- Grid row -->
        <div class="row">
    
          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 mr-auto my-md-4 my-0 mt-4 mb-1" style="color: #f8fafc;">
    
            <!-- Content -->
            <h5 class="font-weight-bold text-uppercase mb-4">عن ملكيات</h5>
            <p>Here you can use rows and columns to organize your footer content.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit amet numquam iure provident voluptate
              esse
              quasi, veritatis totam voluptas nostrum.</p>
    
          </div>
          <!-- Grid column -->
    
          <hr class="clearfix w-100 d-md-none">
    
          <!-- Grid column -->
          <div class="col-md-2 col-lg-2 mx-auto my-md-4 my-0 mt-4 mb-1" style="color: #f8fafc;">
    
            <!-- Links -->
            <h5 class="font-weight-bold text-uppercase mb-4" style="text-align: center;">الشركة</h5>
    
            <ul class="list-unstyled">
              <li>
                <p>
                  <a href="#!">من نحن
                    </a>
                </p>
              </li>
              <li>
                <p>
                  <a href="#!">فريق ملكيات
                    </a>
                </p>
              </li>
              <li>
                    <p>
                      <a href="#!">شركاؤنا
                        </a>
                    </p>
                </li>
              <li>
                <p>
                  <a href="#!">النشرات</a>
                </p>
              </li>
            </ul>
    
          </div>
          <!-- Grid column -->
    
          <hr class="clearfix w-100 d-md-none">
    
          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 mx-auto my-md-4 my-0 mt-4 mb-1" style="color: #f8fafc;">
    
            <!-- Contact details -->
            <h5 class="font-weight-bold text-uppercase mb-4" style="text-align: center;">العنوان</h5>
    
            <ul class="list-unstyled">
              <li>
                <p>
                  <i class="fas fa-home mr-3"></i> المملكة العربية السعودية, الرياض</p>
              </li>
              <li>
                <p>
                  <i class="fas fa-envelope mr-3"></i> info@molkiat.com</p>
              </li>
              <li>
                <p>
                  <i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
              </li>
              <li>
                <p>
                  <i class="fas fa-print mr-3"></i> + 01 234 567 89</p>
              </li>
            </ul>
    
          </div>
          <!-- Grid column -->
    
          <hr class="clearfix w-100 d-md-none">
    
          <!-- Grid column -->
          <div class="col-md-2 col-lg-2 text-center mx-auto my-4" style="color: #f8fafc;">
    
            <!-- Social buttons -->
            <h5 class="font-weight-bold text-uppercase mb-4">تابعونا</h5>
    
            <!-- Facebook -->
            <a type="button" class="btn-floating btn-fb">
              <i class="fab fa-facebook-f"></i>
            </a>
            <!-- Twitter -->
            <a type="button" class="btn-floating btn-tw">
              <i class="fab fa-twitter"></i>
            </a>
            <!-- Google +-->
            <a type="button" class="btn-floating btn-gplus">
              <i class="fab fa-google-plus-g"></i>
            </a>
            <!-- Dribbble -->
            <a type="button" class="btn-floating btn-dribbble">
              <i class="fab fa-dribbble"></i>
            </a>
    
          </div>
          <!-- Grid column -->
    
        </div>
        <!-- Grid row -->
    
      </div>
      <!-- Footer Links -->
    
      <!-- Copyright -->
      <div class="footer-copyright text-center py-3" style="color: #f8fafc;"> 2019 Copyright:
            © Molkiat .. All rights reserved
      </div>
      <!-- Copyright -->
    
    </footer>
    <!-- Footer -->
</body>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/global.js') }}" defer></script>
    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script> --}}
</html>
