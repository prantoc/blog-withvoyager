<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>{{setting('site.title')}} | {{setting('site.description')}}</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <!-- Favicons -->
    <link href="{{ Voyager::image( Voyager::setting('site.logo')) }}" rel="icon">
    <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
  </head>
  <body>
    <!-- ======= Header ======= -->
    <header id="header">
      <div class="container d-flex align-items-center justify-content-center">
        <div class="row">
          <div class="col-12 d-flex align-items-center justify-content-center">
            <a href=""><img src="{{ Voyager::image( Voyager::setting('site.logo')) }}" class="logo "></img></a>
          </div>
          <div class="col-12 d-flex align-items-center justify-content-center">
            <nav id="navbar" class="navbar">
              {{--  <ul>
                <li><a class="nav-link scrollto active" href="">HOME</a></li>
                <li><a class="nav-link scrollto" href="#about">INTRODUCTION</a></li>
                <li><a class="nav-link scrollto" href="#services">SEVICES</a></li>
                <li><a class="nav-link scrollto o" href="#portfolio">AREA</a></li>
                <li><a class="nav-link scrollto" href="#team">COST</a></li>
              </ul> --}}
              {!! menu('main', 'my_menu') !!}
              <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
          </div>
        </div>
      </div>
      </header><!-- End Header -->
      <!-- ======= Hero Section ======= -->
      <section id="portfolio"  style="height: 436px;">
        <div class="container" data-aos="fade-up">
          <div class="row">

          @foreach ($homeimgs as $homeimg)
          @foreach(json_decode($homeimg->imgs, true) as $image)
            <div class="col-lg-4 col-md-6 d-flex align-items-center justify-content-center">
              
                <img src="{{ Voyager::image($image)}}" alt="">
                {{-- <div class="portfolio-info">
                  <div class="portfolio-links">
                    <a href="{{ Voyager::image($image)}}" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
                  </div>
                </div> --}}
              
            </div>
          @endforeach
          @endforeach

          </div>
        </div>
        </section><!-- End Portfolio Section -->
        <main id="main">
          <!-- ======= About Section ======= -->
          <section id="cost" class="about section-bg">
            <div class="container" data-aos="fade-up">
              <div class="section-title">
                <h2>{{$home->offer_title}}</h2>
              </div>
              <div class="row content">
                <div class="col-lg-4">
                  <img src="{{ Voyager::image( $home->offer_img) }}" alt="">
                </div>
                <div class="col-lg-8 pt-4 pt-lg-0">
                  {!! $home->offer_description !!}
                </div>
              </div>
            </div>
            </section><!-- End About Section -->
            <!-- ======= Testimonials Section ======= -->
            <section id="introduction" class="testimonials">
              <div class="container" data-aos="fade-up">
                <div class="section-title">
                  <h2>{{$home->intro_title}}</h2>
                  {!! $home->intro_description !!}
                </div>
              </div>
              </section><!-- End Testimonials Section -->
              <section id="service" class="services section-bg">
                <div class="container" data-aos="fade-up">
                  <div class="section-title">
                    <h2>Sevices</h2>
                    <div class="row">
                      @foreach($services as $service)
                        <div class="col-md-3 p-4"><i class="ri-check-double-line"></i> {{$service->service}}</div>
                      @endforeach
                    </div>
                  </div>
                </div>
              </section><!-- End Sevices Section -->
                <section id="about" class="services ">
                  <div class="container" data-aos="fade-up">
                    <div class="section-title">
                      <h2>{{$home->about_title}}</h2>
                      {!! $home->about_description !!}
                    </div>
                    <h4 class="text-center mt-4">Why Steve Craig Chimney Services Is the Best in Chimney Services</h4>
                    <div class="row mt-4">
                      <div class="col-lg-3 col-md-4 col-6 d-flex align-items-center" data-aos="zoom-in">
                        <span>Over 20 years of experience</span>
                        <img src="assets/img/20years.png" class="img-fluid" alt="">
                      </div>
                      <div class="col-lg-3 col-md-4 col-6 d-flex align-items-center" data-aos="zoom-in">
                        <span>Competitive prices</span>
                        <img src="assets/img/like.png" class="img-fluid" alt="">
                      </div>
                      <div class="col-lg-3 col-md-4 col-6 d-flex align-items-center" data-aos="zoom-in">
                        <span>Free estimates</span>
                        <img src="assets/img/free.png" class="img-fluid" alt="">
                      </div>
                      <div class="col-lg-3 col-md-4 col-6 d-flex align-items-center" data-aos="zoom-in">
                        <span>Senior discount</span>
                        <img src="assets/img/10percent.png" class="img-fluid" alt="">
                      </div>
                    </div>
                  </div>
                </section><!-- End Sevices Section -->
                  <!-- ======= Contact Section ======= -->
                  <section id="area" class="contact section-bg">
                    <div class="container" data-aos="fade-up">
                      <div class="section-title">
                        <h2>Contact</h2>
                      </div>
                      <div class="row mt-5">
                        <div class="col-lg-4">
                          <div class="info">
                            <div class="address">
                              <i class="bi bi-geo-alt"></i>
                              <h4>Location:</h4>
                              <p>{{$home->contact_address}}</p>
                            </div>
                            <div class="email">
                              <i class="bi bi-envelope"></i>
                              <h4>Email:</h4>
                              <p>{{$home->contact_email}}</p>
                            </div>
                            <div class="phone">
                              <i class="bi bi-phone"></i>
                              <h4>Call:</h4>
                              <p>{{$home->contact_number}}</p>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-8 mt-5 mt-lg-0">
                          {{-- <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe> --}}
                          <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3023.7462578160707!2d-74.0387489852267!3d40.72360204484369!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c257534e2c599b%3A0xa998bd1efb75d3da!2sDoubleTree%20by%20Hilton%20Hotel%20%26%20Suites%20Jersey%20City!5e0!3m2!1sen!2sbg!4v1633380075533!5m2!1sen!2sbg" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                      </div>
                    </div>
                    </section><!-- End Contact Section -->
                    </main><!-- End #main -->
                    <!-- ======= Footer ======= -->
                    <footer id="footer">
                      <div class="container py-4">
                        <div class="row">
                          <div class="col-md-7">
                            <div class="copyright text-md-start">
                              &copy; Copyright <strong><span>Steve Craig</span></strong>. All Rights Reserved
                            </div>
                          </div>
                          <div class="col-md-5 d-flex justify-content-end">
                            <div class="credits">
                              Developed by <a href="https://mybdhost.com/">MybdHost</a>
                            </div>
                          </div>
                        </div>
                        {{--   <div class="social-links text-center text-md-right pt-3 pt-md-0">
                          <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                          <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                          <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                          <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                          <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                        </div> --}}
                      </div>
                      </footer><!-- End Footer -->
                      <div id="preloader"></div>
                      <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
                      <!-- Vendor JS Files -->
                      <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
                      <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
                      <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
                      <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
                      <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
                      <script src="{{ asset('assets/vendor/purecounter/purecounter.js') }}"></script>
                      <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
                      <!-- Template Main JS File -->
                      <script src="{{ asset('assets/js/main.js') }}"></script>
                    </body>
                  </html>