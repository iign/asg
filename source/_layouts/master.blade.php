<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="https://fonts.googleapis.com/css?family=Barlow:300,400,400i,500,500i,700" rel="stylesheet">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
    </head>
    <body>
        <header class="header">
          
          <div class="container header-flex">
            <a href="/" class="header__link">
              @include('_partials/logo')
            </a>
          
            <div class="header__menu">
              <ul class="header__menu-list">
                <li class="header__menu-item">
                  <a href="#" class="header__menu-link">Services</a>
                </li>
                <li class="header__menu-item">
                  <a href="#" class="header__menu-link">Projects</a>
                </li>
                <li class="header__menu-item">
                  <a href="#" class="header__menu-link">About</a>
                </li>
                <li class="header__menu-item">
                  <a href="#" class="header__menu-link">Jobs</a>
                </li>
                <li class="header__menu-item">
                  <a href="#" class="header__menu-link asg-btn">Request a proposal</a>
                </li>
              </ul>
            </div>
          </div>
          
          
          
          <button class="header__menu-btn js-toggle-menu">Menu</button>
        </header>
        @yield('body')

        <script src="{{ mix('js/main.js', 'assets/build') }}"></script>
    </body>
</html>
