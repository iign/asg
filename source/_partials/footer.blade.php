<footer id="footer" class="footer">
  <section class="footer-top band">
    <div class="container">
      <div class="row">
        <div class="col col-lg-4">
          <h5 class="footer__title footer__title--ln">
            <a href="https://www.linkedin.com/company/archsourcing/">Linkedin</a>
          </h5>
          <div class="footer__stream footer__stream--linkedin stream-ln">
            <div>
              <img src="/assets/images/avatar.png" alt="Archsourcing" class="stream-ln__img">
              <div class="stream-ln__titles">
                <div class="stream-ln__title">Archsourcing</div>
                <div class="stream-ln__subtitle">Your projects developed. You unplug.</div>
              </div>

              <div class="stream-ln__links">
                <a target="_blank" rel="noopener noreferrer" href="https://www.linkedin.com/company/archsourcing/" class="stream-ln__btn">Follow</a>
              </div>

              <div class="stream-ln__text">
                <p>
                  We believe in work-life balance for architects. <br>
                  We believe that architecture projects can be done quicker, smarter and better.
                </p>
                <p>
                  /ASG is cutting high-tech firm that helps busy architects
                  to develop their projects, dramatically reduce costs and
                  streamline production with next generation use of BIM
                  technology while architects focus on expanding their
                  company and boost quality time.
                </p>
              </div>

            </div>
          </div>
        </div>
        <div class="col col-lg-4">
          <h5 class="footer__title footer__title--tw">
            <a target="_blank" rel="noopener noreferrer" href="https://twitter.com/archsourcing">Twitter</a>
          </h5>
          <div class="footer__stream js-twitter-stream">
            Loading...
          </div>
        </div>
        <div class="col col-lg-4">
          <h5 class="footer__title footer__title--jobs">Jobs</h5>
          <div class="jobs">

            <h4 class="jobs__title">
              We are always looking for talented people to join our team!
            </h4>
            <form enctype="multipart/form-data" method="POST" action="/jobs.php" class="jobs__form">
              <input type="email" name="jobs-email" id="jobs-email" class="jobs__input" placeholder="your e-mail" required>
              <input type="file" name="jobs-file" class="custom-file-input" required>
              <input style="position: absolute; top: 0; left: 0; pointer-events:none; opacity: 0;" type="text" name="lastname" class="form-input" placeholder="your lastname" tabindex="9999">
              <input type="submit" value="Send" class="jobs__btn">
            </form>

          </div>
        </div>
      </div>

      <div class="row">
        <div class="col">
          <h5 class="footer__title">Contact us</h5>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <div class="icon-house-wrap">
            <img class="icon-house" src="assets/images/icon-house.svg" alt="Headquarters">
          </div>
          <p class="font-weight-500">
            <h3 class="footer__header">United States</h3>
            Embarcadero 4 Embarcadero Center, <br>
            Suite 1400, San Francisco, CA, 9411
          </p>
          <p class="font-weight-500">
            <h3 class="footer__header">Latin America</h3>
            World Trade Center Montevideo Free Zone<br>
            Avenida Luis Alberto de Herrera 1248, 11300<br>
            Suites 205/212<br>
            Montevideo, Uruguay
          </p>

          <p class="footer__phone">
            +1 310 598 2214 <br> hello@archsourcing.com
          </p>
        </div>
      </div>
    </div>
  </section>
  <section class="footer-bottom band">
    <div class="container-fluid footer__container">
      <div class="row">
        <div class="col-md-9">
          @include('_partials/logo_white')
          <div class="footer__menu">
            <a href="#services" class="footer__menu-link">Services</a>
            <a href="#projects" class="footer__menu-link">Projects</a>
            <a href="#about" class="footer__menu-link">About</a>
            <a href="#footer" class="footer__menu-link">Jobs</a>
            <span class="footer__menu-link footer__link-feature js-proposal">Request a proposal</span>
            <a href="#up" data-scroll class="footer__menu-link footer__up">Go up</a>
          </div>
        </div>
        <div class="col-md-3 footer__copy">
          Copyright &copy; Archsourcing 2018
        </div>
      </div>
    </div>
  </section>

</footer>