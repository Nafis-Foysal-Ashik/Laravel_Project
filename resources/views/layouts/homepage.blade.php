<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Employee Task Management System</title>
  <meta content="A description of your task management system" name="description">
  <meta content="task management, employee productivity" name="keywords">

  <link href="{{ asset('import/assets/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('import/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <link href="{{ asset('import/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('import/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('import/assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('import/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('import/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <link href="{{ asset('import/assets/css/main.css') }}" rel="stylesheet">

  </head>

<body class="index-page">


  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

        <h1 class="sitename">CTMS</h1> <span>.</span>

      <nav id="navmenu" class="navmenu">
        <ul>

          <li> <a class="nav-link collapsed" href="{{ route('loginpage') }}">
            <i class="bi bi-box-arrow-in-right"></i>
            <span>Login</span>
        </a></li>


          <li><a class="nav-link collapsed" href="{{ route('registerPage') }}">
            <i class="bi bi-box-arrow-in-right"></i>
            <span>Register</span>
        </a></li>


          <li><a class="nav-link collapsed" href="{{ route('showpage') }}">

            <span>Show</span>
        </a></li>


          <!-- <li><a href="blog.html">Blog</a></li>

          <li><a href="blog.html">Blog</a></li>

          <li><a href="blog.html">Blog</a></li> -->


          <li class="dropdown"><a href="#"><span>Division</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a class="nav-link collapsed" href="{{ route('khulna') }}">

                <span>Khulna</span>
            </a></li>
              <li><a class="nav-link collapsed" href="{{ route('dhaka') }}">

                <span>Dhaka</span>
            </a></li>


              <li><a class="nav-link collapsed" href="{{ route('rajshahi') }}">

                <span>Rajshahi</span>
            </a></li>


              <li><a class="nav-link collapsed" href="{{ route('sylhet') }}">

                <span>Sylhet</span>
            </a></li>

              <li><a class="nav-link collapsed" href="{{ route('chottogram') }}">

                <span>Chottogram</span>
            </a></li>
            </ul>
          </li>
          {{-- <li><a class="nav-link collapsed" href="{{ route('availablebookingPage') }}">
            <span>Avaiable</span>
        </a></li> --}}
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

    </div>
  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section">

      <div class="info d-flex align-items-center">
        <div class="container">
          <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="100">
            <div class="col-lg-6 text-center">
              <h2 class="">Welcome to CTMS</h2>
              <p> We're thrilled to have you join our team. To help you hit the ground running, we're introducing you to our employee task management system, your one-stop shop for staying organized and achieving your goals!</p>
              <a href="{{ route('loginpage') }}" class="btn-get-started">Log In</a>
            </div>
          </div>
        </div>
      </div>

      <div id="section-fqREP4OWmC-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">

        <div class="carousel-item">
            <img src="{{ asset('import/assets/img/projects/construction-1.jpg')}}" class="img-fluid" alt="">
        </div>

        <div class="carousel-item active">
            <img src="{{ asset('import/assets/img/projects/construction-2.jpg')}}" class="img-fluid" alt="">
        </div>

        <div class="carousel-item">
            <img src="{{ asset('import/assets/img/projects/construction-3.jpg')}}" class="img-fluid" alt="">
        </div>

        <div class="carousel-item">
            <img src="{{ asset('import/assets/img/projects/design-1.jpg')}}" class="img-fluid" alt="">
        </div>

        <div class="carousel-item">
            <img src="{{ asset('import/assets/img/projects/design-2.jpg')}}" class="img-fluid" alt="">
        </div>

        <a class="carousel-control-prev" href="#section-fqREP4OWmC-carousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#section-fqREP4OWmC-carousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

      </div>

    </section><!-- /Hero Section -->


    </section><!-- /Get Started Section -->


    <!-- Services Section -->
    <section id="services" class="services section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Services</h2>

      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item  position-relative">
              <div class="icon">
                <i class="fa-solid fa-mountain-city"></i>
              </div>
              <h3>Organize</h3>
                    <p>This section focuses on the core functionality of creating, assigning, and managing tasks. It highlights how users can organize their work effectively with features</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="fa-solid fa-arrow-up-from-ground-water"></i>
              </div>
              <h3>Collaborate Seamlessly</h3>
              <p>This emphasizes the communication and collaboration features that facilitate teamwork.Real-time task discussions and comments for quick communication and problem-solving</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="fa-solid fa-compass-drafting"></i>
              </div>
              <h3>Boost Productivity</h3>
              <p> This section showcases features that help employees manage their time and work efficiently.</p>

            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="fa-solid fa-trowel-bricks"></i>
              </div>
              <h3>Stay on Top of Goals</h3>
              <p>This  focuses on features that promote goal-oriented work for employees and teams. </p>

            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="fa-solid fa-helmet-safety"></i>
              </div>
              <h3>Simplify Workflow</h3>
              <p>This section emphasizes the benefits of potential integrations and automations within the system.</p>

            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="fa-solid fa-arrow-up-from-ground-water"></i>
              </div>
              <h3>Gain Valuable Insights</h3>
              <p>This section highlights the reporting and analytics features that provide valuable data and insights.</p>

            </div>
          </div><!-- End Service Item -->

        </div>

      </div>

    </section><!-- /Services Section -->



    <!-- Projects Section -->
    <section id="projects" class="projects section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2 class="">Projects</h2>

      </div><!-- End Section Title -->

      <div class="container">

        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

          <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-remodeling">Remodeling</li>
            <li data-filter=".filter-construction">Construction</li>
            <li data-filter=".filter-repairs">Repairs</li>
            <li data-filter=".filter-design">Design</li>
          </ul><!-- End Portfolio Filters -->

          <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-remodeling">
              <div class="portfolio-content h-100">
                <img src="{{ asset('import/assets/img/projects/construction-3.jpg')}}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>App 1</h4>

                  <a href="{{ asset('import/assets/img/projects/construction-3.jpg')}}" title="App 1" data-gallery="portfolio-gallery-app" class="glightbox preview-link"></a>
                  <a href="{{ asset('import/assets/project-details.html')}}" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-construction">
              <div class="portfolio-content h-100">
                <img src="{{ asset('import/assets/img/projects/construction-1.jpg')}}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Product 1</h4>

                  <a href="{{ asset('import/assets/img/projects/construction-1.jpg" title="Product 1" data-gallery="portfolio-gallery-product" class="glightbox preview-link')}}"></a>

                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-repairs">
              <div class="portfolio-content h-100">
                <img src="{{ asset('import/assets/img/projects/construction-2.jpg')}}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Branding 1</h4>

                  <a href="{{ asset('import/assets/img/projects/construction-2.jpg" title="Branding 1" data-gallery="portfolio-gallery-branding')}}" class="glightbox preview-link"></a>

                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-design">
              <div class="portfolio-content h-100">
                <img src="{{ asset('import/assets/img/projects/design-1.jpg')}}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Books 1</h4>

                  <a href="{{ asset('import/assets/img/projects/design-1.jpg" title="Branding 1" data-gallery="portfolio-gallery-book" class="glightbox preview-link')}}"></a>

                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-remodeling">
              <div class="portfolio-content h-100">
                <img src="{{ asset('import/assets/img/projects/design-3.jpg')}}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>App 2</h4>

                  <a href="{{ asset('import/assets/img/projects/design-3.jpg" title="App 2" data-gallery="portfolio-gallery-app" class="glightbox preview-link')}}"></a>

                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-construction">
              <div class="portfolio-content h-100">
                <img src="{{ asset('import/assets/img/projects/design-2.jpg')}}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Product 2</h4>

                  <a href="{{ asset('import/assets/img/projects/design-2.jpg" title="Product 2" data-gallery="portfolio-gallery-product" class="glightbox preview-link')}}"></a>

                </div>
              </div>
            </div><!-- End Portfolio Item -->




        </div>

      </div>

    </section><!-- /Projects Section -->



  </main>

  <footer id="footer" class="footer">

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about">
          <!-- <a href="index.html" class="logo d-flex align-items-center">
            <span class="sitename">UpConstruction</span>
          </a> -->
          <div class="footer-contact pt-3">
            <p>Pocket Gate , KUET</p>
            <p>BANGLADESH</p>
            <p class="mt-3"><strong>Phone:</strong> <span>01538383849</span></p>
            <p><strong>Email:</strong> <span>etms@example.com</span></p>
          </div>

        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About us</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Terms of service</a></li>
            <li><a href="#">Privacy policy</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Our Services</h4>
          <ul>
            <li><a href="#">Web Design</a></li>
            <li><a href="#">Web Development</a></li>
            <li><a href="#">Product Management</a></li>
            <li><a href="#">Marketing</a></li>
            <li><a href="#">Graphic Design</a></li>
          </ul>
        </div>


    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">CTMS</strong> <span>All Rights Reserved</span></p>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{ asset('import/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{ asset('import/assets/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{ asset('import/assets/vendor/aos/aos.js')}}"></script>
  <script src="{{ asset('import/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{ asset('import/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js')}}"></script>
  <script src="{{ asset('import/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{ asset('import/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{ asset('import/assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>

  <!-- Main JS File -->
  <script src="{{ asset('import/assets/js/main.js')}}"></script>

</body>

</html>
