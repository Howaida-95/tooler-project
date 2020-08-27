<?php

//include header section
include __DIR__ . '/_header.php';

?>
  <!----------------------- header ------------------------>
  <section class="header">
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top shadow-sm">
      <div class="container">
        <div class="d-flex align-items-center">
          <div class="logo-icon mr-2">
            <i class="fas fa-cog fa-2x"></i>
          </div>
          <a class="navbar-brand font-weight-bold" href="#">Tooler</a>
        </div>
        <button class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto align-items-center">
            <li class="nav-item">
              <a class="nav-link px-0" href="#">About <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link px-0" href="#">Contact Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link px-0" href="#">Privacy</a>
            </li>
            <li class="nav-item">
              <a class="nav-link px-0" href="#">Api</a>
            </li>
            <li class="d-flex align-items-center">
              <a class="nav-link mr-1 mr-lg-0" href="#">Ar</a>
              <img alt="lang-img" height="20px" src='./assets/images/lang-img.png' />
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- intro -->
    <div class="intro">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 pt-md-5">
            <h1 class="py-5">
              Don't think about it </br>
              <span>Just Do It!</span>
            </h1>
            <div class="txt-container pl-2">
              <p>We provide all kind of tool you need for free.</p>
              <p>and accessible from all platforms.</p>
              <div class="mt-2">
                <img src="./assets/images/android.svg" alt="android img" class="mr-3" style="width: 20px;"/>
                <img src="./assets/images/internet.svg" alt="internet img" class="mr-3" style="width: 20px;"/>
                <img src="./assets/images/desktop.svg" alt="desktop img" class="mr-3" style="width: 20px;"/>
              </div>
            </div>
          </div>
          <div class="col-lg-6 intro-img-container d-none d-lg-block">
            <img class="intro-img" src="./assets/images/intro-img.svg" alt="intro img"/>
          </div>
        </div>
      </div>
      <img class="intro-bg" src="./assets/images/intro-bg.svg" alt="intro bg"/>
      <div class="see-more d-flex justify-content-center align-items-center flex-column">
        <div>
          <img src="./assets/images/mouse.svg" alt="mouse pointer"/></br>
        </div>
        <span class="mt-1">See More</span>
      </div>
    </div>
  </section>
  <!------------------------- services section ------------>
  <section class="services">
    <div class="container py-5">
      <div class="row">
        <div class="col-lg-6 pr-lg-5 mb-5 mb-lg-0">
          <img src="./assets/images/data-points.svg" alt="data-points"/>
        </div>
        <div class="col-lg-6 text-center pl-lg-5 services-container d-md-flex d-lg-block">
          <div class="service service-one p-3 col-md-4 col-lg-auto rounded">
            <h3>Make It Smooth</h3>
            <p class="mb-0">
              We develop and deliver cost-effective business applications and operational software            </p>
          </div>
          <div class="service service-two my-3 my-md-0 my-lg-5 mx-md-3  mx-lg-0 ml-lg-auto p-3 rounded col-md-4 col-lg-auto">
            <h3>We Are The best</h3>
            <p class="mb-0">
              We’ll create a safe information environment for data migration based on your current system            </p>
          </div>
          <div class="service service-three p-3 rounded col-md-4 col-lg-auto">
            <h3>Daily New Feature</h3>
            <p class="mb-0">
              We help startups and ventures with the most challenging tech aspect of starting a project            </p>
          </div>
        </div>
      </div>
    </div>
    <img class="service-bg" src="./assets/images/service-bg.svg" alt="intro bg"/>
  </section>
  <!----------------------- tools section ------------------------->
  <section class="tools py-5">
    <div class="container">
      <!-- txt -contaiber -->
      <div class="text-container">
        <h2 class="text-center">We Have Tools</h2>
        <p class="py-3 text-center">All What you nedd is here. Many catogeries with tens of tools is available</p>
      </div>
      <!-- carousel -->
      <div class="owl-carousel my-5">
        <!-- 1st slide -->
        <div class="item p-3 rounded">
          <div>
            <i class="fas fa-suitcase mr-1"></i>
            <span>secure information</span>
          </div>
          <div class="row align-items-center justify-content-center my-3">
            <div class="col-9">
              <p class="mb-0">Encryption Tools</p>
            </div>
            <div class="col-3">
              <img src="./assets/images/unlock.svg" alt="unlock img">
            </div>
          </div>
          <span>prevent access to digital information.</span>
        </div>
        <!-- 2nd slide -->
        <div class="item p-3 rounded">
          <div>
            <i class="fas fa-suitcase mr-1"></i>
            <span>the most powerful tools</span>
          </div>
          <div class="row align-items-center justify-content-center my-3">
            <div class="col-9">
              <p class="mb-0">Text Tools</p>
            </div>
            <div class="col-3">
              <img src="./assets/images/text.svg" alt="text img"/>
            </div>
          </div>
          <span>allows text to be typed onto that layer</span>
        </div>
        <!-- 3rd slide -->
        <div class="item p-3 rounded">
          <div>
            <i class="fas fa-suitcase mr-1"></i>
            <span>Irreplaceable tool</span>
          </div>
          <div class="row align-items-center justify-content-center my-3">
            <div class="col-9">
              <p class="mb-0">Images Tools</p>
            </div>
            <div class="col-3">
              <img src="./assets/images/insert-picture-icon.svg"/>
            </div>
          </div>
          <span> makes an image to be output in a report </span>
        </div>
        <!-- 4th slide -->
        <div class="item p-3 rounded">
          <div>
            <i class="fas fa-suitcase mr-1"></i>
            <span>the most powerful tools</span>
          </div>
          <div class="row align-items-center justify-content-center my-3">
            <div class="col-9">
              <p class="mb-0">Text Tools</p>
            </div>
            <div class="col-3">
              <img src="./assets/images/text.svg" alt="text img"/>
            </div>
          </div>
          <span>allows text to be typed onto that layer</span>
        </div>
      </div>
      <!-- contact-->
      <div class="contact my-3">
        <div class="row align-items-center justify-content-center">
          <div class="col-lg-10 mb-3 mb-lg-0">
            <h4>Need another tool?</h4>
            <p class="ml-lg-5 mb-0">Just tell us. and we will make as soon as poosible</p>
          </div>
          <div class="col-lg-2 text-lg-right">
            <a href="#" class="btn btn-light">Contact Us</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!----------------------- footer section ------------------------->
  <footer>
    <!-- updates -->
    <div class="updates py-5">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-lg-8 text-center">
            <h3>
              <i class="fas fa-location-arrow"></i>
              Want to know the latest updates?
            </h3>
            <span>Subscribe to our mail list</span>     
          </div>   
        </div>
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <label class="sr-only" for="inlineFormInputGroup">Username</label>
            <div class="input-group mb-2">
              <input type="email" class="form-control" id="inlineFormInputGroup" placeholder="Your email">
              <div class="input-group-append">
                <button class="btn" type="button">Subscribe</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- svg shape -->
      <div class="svg-container">
        <img class="svg-img" src="./assets/images/media-bg.svg"/>
      </div>
    <!-- social media -->
    <div class="media">
      <div class="container">
        <div class="row justify-content-center mb-3">
          <div class="col-lg-10">
            <input class="form-control mr-sm-2 shadow-0 rounded-pill" type="search" placeholder="Search" aria-label="Search">
          </div>
        </div>
        <div class="row justify-content-center mb-5">
          <div class="col-lg-10 text-center">
            <a href="#"><i class="fab fa-facebook-f fa-2x mr-3"></i></a>
            <a href="#"><i class="fab fa-twitter fa-2x mr-3"></i></a>
            <a href="#"><i class="fab fa-pinterest-p fa-2x mr-3"></i></a>
            <a href="#"><i class="fab fa-instagram fa-2x"></i></a>
          </div>
        </div>
        <div class="row justify-content-center mb-5">
          <p class="col-lg-10 text-center">All copyrights saved for Tooler &copy; 2020</p>
        </div>
      </div>
    </div>

  </footer>


<?php

//include footer section
include __DIR__ . '/_footer.php';
