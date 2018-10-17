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
            <a href="/" class="header__logo-link">
              @include('_partials/logo')
            </a>
          
            <div class="header__menu">
              <ul class="header__menu-list" role="menu">
                <li class="header__menu-item header__menu-item--services">
                  <span class="header__menu-link ">Services</span>
                  <ul class="header__menu-sub">
                    <li>
                      <a href="#" class="header__menu-link header__menu-link--services">Production &amp; Coordination</a>
                    </li>
                    <li>
                      <a href="#" class="header__menu-link header__menu-link--services">Consulting</a>
                    </li>
                    <li>
                      <a href="#" class="header__menu-link header__menu-link--services">Content Development</a>
                    </li>
                    <li>
                      <a href="#" class="header__menu-link header__menu-link--services">Visualization</a>
                    </li>
                  </ul>
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
        
        @include('_partials/hero')

        <section class="band">
          <div class="container">
            <div class="row">
              <div class="col-sm">
                DO YOU STRUGGLE WITH YOUR PROJECT DELIVERIES?
              </div>
              <div class="col-sm">
                <div class="row">
                  <div class="col-md-6">
                    TOO MUCH WORK AND NO HANDS?
                  </div>
                  <div class="col-md-6">
                    Burn-out by deadlines?
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    Not using BIM to its full capacity to streamline production?
                  </div>
                  <div class="col-md-6">
                    Hiring new team members consumes too much time and money in training?
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    Long hours at the office to finish projects?
                  </div>
                  <div class="col-md-6">
                    YOUR FIRM'S BOTTOM LINE DEPENDS ON THE TIMELY MANNER YOU 
                    DEVELOP YOUR CONSTRUCTION DOCUMENTS?
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>


        @yield('body')

        <script src="{{ mix('js/main.js', 'assets/build') }}"></script>
    </body>
</html>
