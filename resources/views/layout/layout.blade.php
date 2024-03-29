<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ isset($title)? $title : "Tarek's Blog" }}</title>
    <!-- Css -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <!--tailwind css --> 
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />

    @yield('head')
   
</head>

<body>
    <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-7L431MHN2M"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-7L431MHN2M');
</script>

    <div id="wrapper">
        <!-- header -->
        @yield('header')
        <!-- sidebar -->
        <div class="sidebar">
            <span class="closeButton">&times;</span>
            <p class="brand-title"><a href="{{ route('welcome.index') }}">Dev Dynamo Sphere</a></p>

            <div class="side-links">
                <ul>
                    <li><a class="{{ Request::routeIs('welcome.index') ? 'active' : '' }}" href="{{ route('welcome.index') }}">Home</a></li>
                    <li><a class="{{ Request::routeIs('blog.index') ? 'active' : '' }}" href="{{ route('blog.index') }}">Blog</a></li>
                    <li><a class="{{ Request::routeIs('about') ? 'active' : '' }}" href="{{ route('about') }}">About</a></li>
                    <li><a class="{{ Request::routeIs('contact.index') ? 'active' : '' }}" href="{{ route('contact.index') }}">Contact</a></li>

                    {{-- only guest user can see this --}}
                    @guest
                    <li><a class="{{ Request::routeIs('login') ? 'active' : '' }}" href="{{ route('login') }}">Login</a></li>
                    <li><a class="{{ Request::routeIs('register') ? 'active' : '' }}" href="{{ route('register') }}">Register</a></li>
                    @endguest

                    {{-- only logged in user can see Dashboard --}}
                    @auth
                    <li><a class="{{ Request::routeIs('dashboard') ? 'active' : '' }}" href="{{ route('dashboard') }}">Dashboard</a></li>
                    @endauth
                </ul>
            </div>

            <!-- sidebar footer -->
            <footer class="sidebar-footer">
                <div>
                    <a href="https://web.facebook.com/muhammadtarekreza/" target="_blank"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://www.instagram.com/muhammadtarekreza/" target="_blank"><i class="fab fa-instagram"></i></a>
                    <a href="https://twitter.com/tarek_reza" target="_blank"><i class="fab fa-twitter"></i></a>
                </div>

                <small>&copy {{ date("Y") }} Dev Dynamo Sphere. All rights reserved.</small><br>
                <small>Developed by <a href="https://tarekreza.com/">Tarek Reza</a></small>
            </footer>
        </div>
        <!-- Menu Button -->
        <div class="menuButton">
            <div class="bar"></div>
            <div class="bar"></div>
            <div class="bar"></div>
        </div>
        <!-- main -->
        @yield('main')

        <!-- Main footer -->
        <footer class="main-footer">
            <div>
                <a href="https://web.facebook.com/muhammadtarekreza/" target="_blank"><i class="fab fa-facebook-f"></i></a>
                <a href="https://www.instagram.com/muhammadtarekreza/" target="_blank"><i class="fab fa-instagram"></i></a>
                <a href="https://twitter.com/tarek_reza" target="_blank"><i class="fab fa-twitter"></i></a>
            </div>
            <small>&copy {{ date("Y") }} Dev Dynamo Sphere. All rights reserved.</small><br>
            <small>Developed by <a href="https://tarekreza.com/">Tarek Reza</a></small>
        </footer>
    </div>
    <!-- Click events to menu and close buttons using javaascript-->
    <script>
        document
        .querySelector(".menuButton")
        .addEventListener("click", function () {
          document.querySelector(".sidebar").style.width = "100%";
          document.querySelector(".sidebar").style.zIndex = "5";
        });

      document
        .querySelector(".closeButton")
        .addEventListener("click", function () {
          document.querySelector(".sidebar").style.width = "0";
        });
    </script>

    @yield('scripts')

</body>

</html>