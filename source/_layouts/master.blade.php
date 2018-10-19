<!DOCTYPE html>
@include('_partials/montag')
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="https://fonts.googleapis.com/css?family=Barlow:100,300,400,400i,500,500i,700,800" rel="stylesheet">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <link rel="author" href="humans.txt" />
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

        <section class="band features">
          <div class="container">
            <div class="row">
              <div class="col-md-4">
                <h3 class="band__title">
                  DO YOU STRUGGLE WITH YOUR PROJECT DELIVERIES?
                </h3>
              </div>

              <div class="col-md-8">
                <div class="row row-feature">
                  <div class="col-md-6">
                    <span class="strike">
                      <span>TOO MUCH WORK AND NO HANDS?</span>
                    </span>
                  </div>
                  <div class="col-md-6">
                    <span class="strike">
                      <span>Burn-out by deadlines?</span>
                    </span>
                  </div>
                </div>
                <div class="row row-feature">
                  <div class="col-md-6">
                    <span class="strike">
                      <span>Not using BIM to its full capacity to streamline production?</span>
                    </span>
                  </div>
                  <div class="col-md-6">
                    <span class="strike">
                      <span>Hiring new team members consumes too much time and money in training?</span>
                    </span>
                  </div>
                </div>
                <div class="row row-feature">
                  <div class="col-md-6">
                    <span class="strike">
                      <span>Long hours at the office to finish projects?</span>
                    </span>
                  </div>
                  <div class="col-md-6">
                    <span class="strike">
                      <span>YOUR FIRM'S BOTTOM LINE DEPENDS ON THE TIMELY MANNER YOU DEVELOP YOUR CONSTRUCTION DOCUMENTS?</span>
                    </span>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </section>

        <section class="band band-black">
          <div class="container">
            <div class="row">
              <div class="col-sm-4">
                <img class="asg" src="assets/images/asg.svg" alt="Archsourcing">
              </div>
              <div class="col-sm-8">
                <div class="description">
                  <strong>ASG</strong> IS CUTTING HIGH-TECH FIRM THAT HELPS BUSY <em>ARCHITECTS</em> TO 
                  DEVELOP THEIR PROJECTS, DRAMATICALLY REDUCE COSTS AND STREAMLINE 
                  PRODUCTION WITH NEXT GENERATION USE OF <em>BIM</em> TECHNOLOGY WHILE 
                  ARCHITECTS FOCUS ON EXPANDING THEIR COMPANY AND BOOST QUALITY TIME.
                </div>
              </div>
            </div>
          </div>
        </section>

        @include('_partials/project')
        
        @include('_partials/boxes')

        @yield('body')

        @include('_partials/footer')

        <script src="{{ mix('js/main.js', 'assets/build') }}"></script>
    </body>
</html>
