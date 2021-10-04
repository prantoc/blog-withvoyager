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
              {!!menu('main', 'my_menu') !!}
              <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
          </div>
        </div>
      </div>
      </header><!-- End Header -->
      <!-- ======= Hero Section ======= -->
      <section id="portfolio" class="portfolio">
        <div class="container" data-aos="fade-up">
          <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="300">
            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
              <div class="portfolio-wrap">
                <img src="assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <div class="portfolio-links">
                    <a href="assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
              <div class="portfolio-wrap">
                <img src="assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <div class="portfolio-links">
                    <a href="assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
              <div class="portfolio-wrap">
                <img src="assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <div class="portfolio-links">
                    <a href="assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
              <div class="portfolio-wrap">
                <img src="assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <div class="portfolio-links">
                    <a href="assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
              <div class="portfolio-wrap">
                <img src="assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <div class="portfolio-links">
                    <a href="assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
              <div class="portfolio-wrap">
                <img src="assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <div class="portfolio-links">
                    <a href="assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        </section><!-- End Portfolio Section -->
        <main id="main">
          <!-- ======= About Section ======= -->
          <section id="cost" class="about">
            <div class="container" data-aos="fade-up">
              <div class="section-title">
                <h2>Offer</h2>
              </div>
              <div class="row content">
                <div class="col-lg-4">
                  <img src="assets/img/OFFER.PNG" alt="">
                </div>
                <div class="col-lg-8 pt-4 pt-lg-0">
                  <ul>
                    <li><i class="ri-check-double-line"></i> Inspection only -$150</li>
                    <li><i class="ri-check-double-line"></i> Cleaning and inspection- $220(Repairs and alterations will be priced separately)</li>
                  </ul>
                  <p style="color: #df5a00;">All services will be performed by a CSIA (Chimney Safety Institute of America) certified technician.</p>
                </div>
              </div>
            </div>
            </section><!-- End About Section -->
            <!-- ======= Testimonials Section ======= -->
            <section id="introduction" class="testimonials">
              <div class="container" data-aos="fade-up">
                <div class="section-title">
                  <h2>INTRODUCTION</h2>
                  <p>
                    Inspection- The first task when servicing a furnace, stove or fire place is visual evaluation. A trained technician can identify most deficiencies with a
                    level 1 inspection which does not require a camera. The examination focuses on the interior of the wood or gas burning appliance or fireplace. The
                    exterior chimney is also a part of a level 1 inspection. If the fire place, stove or furnace is dirty it must be cleaned before a proper inspection can
                    take place.
                  </p>
                  <p>Cleaning- A standard cleaning utilizes manual or mechanical brushes to remove soot and creosote so a technician can see any cracks, gaps, holes
                    and corrosion and other defects which can affect proper and safe functions of appliances. An inspection will detail any such flaws and corrective
                  action will be discussed with resident or landlord.</p>
                </div>
              </div>
              </section><!-- End Testimonials Section -->
              <section id="service" class="services section-bg">
                <div class="container" data-aos="fade-up">
                  <div class="section-title">
                    <h2>Sevices</h2>
                    <div class="row">
                      <div class="col-md-3 p-4"><i class="ri-check-double-line"></i>Inspection</div>
                      <div class="col-md-3 p-4"><i class="ri-check-double-line"></i> Cleaning</div>
                      <div class="col-md-3 p-4"><i class="ri-check-double-line"></i> Brick and cement repair or replacement</div>
                      <div class="col-md-3 p-4"><i class="ri-check-double-line"></i> Caps and crown repair</div>
                      <div class="col-md-3 p-4"><i class="ri-check-double-line"></i> Dampers</div>
                      <div class="col-md-3 p-4"><i class="ri-check-double-line"></i> Water proofing</div>
                      <div class="col-md-3 p-4"><i class="ri-check-double-line"></i> Smoke chamber repair</div>
                      <div class="col-md-3 p-4"><i class="ri-check-double-line"></i> Furnace liners</div>
                      <div class="col-md-3 p-4"><i class="ri-check-double-line"></i> Hearth cleaning</div>
                      <div class="col-md-3 p-4"><i class="ri-check-double-line"></i> Stucco repair</div>
                      <div class="col-md-3 p-4"><i class="ri-check-double-line"></i> Flashing repair</div>
                      <div class="col-md-3 p-4"><i class="ri-check-double-line"></i> Violations – Correcting gas/furnace and water heater chimney violations</div>
                    </div>
                  </div>
                </div>
              </section><!-- End Sevices Section -->
                <section id="about" class="services section-bg">
                  <div class="container" data-aos="fade-up">
                    <div class="section-title">
                      <h2>About Steve Craig</h2>
                      <p>About Steve Craig- CSIA certified with over 20 years of service experience in greater South Jersey area. Very professional, polite and punctual. A
                      local guy with a lot of experience in chimney services who loves to socialize and meet people and help them.</p>
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
                  <section id="area" class="contact">
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
                              <p>A108 Adam Street, New York, NY 535022</p>
                            </div>
                            <div class="email">
                              <i class="bi bi-envelope"></i>
                              <h4>Email:</h4>
                              <p>info@example.com</p>
                            </div>
                            <div class="phone">
                              <i class="bi bi-phone"></i>
                              <h4>Call:</h4>
                              <p>+1 5589 55488 55s</p>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-8 mt-5 mt-lg-0">
                          <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe>
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
                              Designed by <a href="https://mybdhost.com/">MybdHost</a>
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