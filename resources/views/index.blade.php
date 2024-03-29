<!doctype html>
<html lang="en">
  <head>
    <title>MeetApp &mdash; Where Your Meeting Needs Fulfilled!</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link href="https://fonts.googleapis.com/css?family=Work+Sans:400,700,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">

    <link rel="stylesheet" href="{{asset('css/jquery.fancybox.min.css')}}">

    <link rel="stylesheet" href="{{asset('css/bootstrap-datepicker.css')}}">

    <link rel="stylesheet" href="{{asset('fonts/flaticon/font/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('fonts/icomoon/style.css')}}">

    <link rel="stylesheet" href="{{asset('css/aos.css')}}">

    <link rel="stylesheet" href="{{asset('css/style.css')}}">

  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

    <div class="site-wrap">

      <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
          <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
          </div>
        </div>
        <div class="site-mobile-menu-body"></div>
      </div>


      <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">

        <div class="container">
          <div class="row align-items-center">

            <div class="col-6 col-xl-2">
              <h1 class="mb-0 site-logo"><a href="index.html" class="mb-0">MeetApp</a></h1>
            </div>

            <div class="col-12 col-md-10 d-none d-xl-block">
              <nav class="site-navigation position-relative text-right" role="navigation">

                <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                  <li><a href="#home-section" class="nav-link">Home</a></li>
                  <li class="has-children">
                    <a href="#about-section" class="nav-link">About Us</a>
                    <ul class="dropdown">
                      <li><a href="#team-section" class="nav-link">Team</a></li>
                      <li><a href="#pricing-section" class="nav-link">Pricing</a></li>
                      <li><a href="#faq-section" class="nav-link">FAQ</a></li>
                      <li class="has-children">
                        <a href="#">More Links</a>
                        <ul class="dropdown">
                          <li><a href="#">Menu One</a></li>
                          <li><a href="#">Menu Two</a></li>
                          <li><a href="#">Menu Three</a></li>
                        </ul>
                      </li>
                    </ul>
                  </li>

                  <li><a href="#portfolio-section" class="nav-link">Portfolio</a></li>
                  <li><a href="#services-section" class="nav-link">Services</a></li>
                  <li><a href="#testimonials-section" class="nav-link">Testimonials</a></li>
                  <li><a href="#contact-section" class="nav-link">Contact</a></li>
                  @if (Route::has('login'))
                    @auth
                      <li><a href="{{ url('/home') }}" class="nav-link">Home</a></li>
                    @else
                      <li><a href="{{ route('login') }}" class="nav-link">Login</a></li>
                      @if (Route::has('register'))
                        <li><a href="{{ route('register') }}" class="nav-link">Register</a></li>
                      @endif
                    @endauth
                  @endif
                </ul>
              </nav>
            </div>


            <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle float-right"><span class="icon-menu h3"></span></a></div>

          </div>
        </div>

      </header>



      <div class="site-blocks-cover overlay" style="background-image: url(images/hero_1.jpg);" data-aos="fade" id="home-section">

        <div class="container">
          <div class="row align-items-center justify-content-center">


            <div class="col-md-8 mt-lg-5 text-center">
              <h1 class="text-uppercase mb-5" data-aos="fade-up">MeetApp<br><small>one stop solution for your meeting needs</small></h1>

              <div data-aos="fade-up" data-aos-delay="100">
                <a href="#contact-section" class="btn smoothscroll btn-primary mr-2 mb-2">Start Booking!</a>
              </div>
            </div>

          </div>
        </div>

        <a href="#about-section" class="mouse smoothscroll">
          <span class="mouse-icon">
            <span class="mouse-wheel"></span>
          </span>
        </a>
      </div>


      <div class="site-section cta-big-image" id="about-section">
        <div class="container">
          <div class="row mb-5">
            <div class="col-12 text-center" data-aos="fade">
              <h2 class="section-title mb-3">About MeetApp</h2>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-6 mb-5" data-aos="fade-up" data-aos-delay="">
              <figure class="circle-bg">
              <img src="{{asset('images/Logo MeetApp.png')}}" alt="Image" class="img-fluid">
              </figure>
            </div>
            <div class="col-lg-5 ml-auto" data-aos="fade-up" data-aos-delay="100">
              <div class="mb-4">
                <h3 class="h3 mb-4 text-black">Booking tempat rapat dengan mudah.</h3>
                <p>MeetApp merupakan aplikasi yang mempermudah mahasiswa ITS dalam menentukan dan membooking tempat untuk rapat ataupun nongkrong dengan beberapa ketukan jari saja. MeetApp akan membantumu memesankan meja sesuai dengan kapasitas orang yang kalian inginkan maupun ruangan khusus yang kalian butuhkan agar rapat kalian lebih efektif.</p>
                <p><a href="#contact-section" class="smoothscroll btn btn-primary">Register</a></p>
              </div>

              </div>



            </div>
          </div>
        </div>
      </div>


      <section class="site-section" id="portfolio-section">


        <div class="container">

          <div class="row mb-3">
            <div class="col-12 text-center" data-aos="fade">
              <h2 class="section-title mb-3">Tempat Pilihan</h2>
            </div>
          </div>

          <div class="row justify-content-center mb-5" data-aos="fade-up">
            <div id="filters" class="filters text-center button-group col-md-7">
              <button class="btn btn-primary active" data-filter="*">Tempat Makan</button>
              <button class="btn btn-primary" data-filter=".warkop">Warung Kopi</button>
              <button class="btn btn-primary" data-filter=".resto">Restoran</button>
              <button class="btn btn-primary" data-filter=".kafe">Kafe</button>
            </div>
          </div>

          <div id="posts" class="row no-gutter">
            <div class="item resto col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-4">
              <a href="images/eatboss.jpg" class="item-wrap fancybox" data-fancybox="gallery2">
                <span class="icon-search2"></span>
                <img class="img-fluid" src="images/eatboss.jpg">
              </a>
              <h5 class="h5 mb-4 text-black text-center">Eatboss</h5>
            </div>

            <div class="item resto col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-4">
              <a href="images/kedai27.jpg" class="item-wrap fancybox" data-fancybox="gallery2">
                <span class="icon-search2"></span>
                <img class="img-fluid" src="images/kedai 27.jpg">
              </a>
              <h5 class="h5 mb-4 text-black text-center">Kedai 27</h5>
            </div>

            <div class="item kafe col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-4">
                <a href="images/upnormal.png" class="item-wrap fancybox" data-fancybox="gallery2">
                  <span class="icon-search2"></span>
                  <img class="img-fluid" src="images/upnormal.png">
                </a>
                <h5 class="h5 mb-4 text-black text-center">Upnormal</h5>
              </div>

            <div class="item resto col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-4">
                <a href="images/dapoer mantab.jpg" class="item-wrap fancybox" data-fancybox="gallery2">
                  <span class="icon-search2"></span>
                  <img class="img-fluid" src="images/dapoer mantab.jpg">
                </a>
                <h5 class="h5 mb-4 text-black text-center">Dapoer Mantab</h5>
              </div>

              <div class="item warkop col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-4">
                  <a href="images/warkop1.jpg" class="item-wrap fancybox" data-fancybox="gallery2">
                    <span class="icon-search2"></span>
                    <img class="img-fluid" src="images/warkop1.jpg">
                  </a>
                  <h5 class="h5 mb-4 text-black text-center">Warkop Keputih</h5>
                </div>




          </div>
        </div>

      </section>






      <section class="site-section border-bottom bg-light" id="services-section">
        <div class="container">
          <div class="row mb-5">
            <div class="col-12 text-center" data-aos="fade">
              <h2 class="section-title mb-3">Our Services</h2>
            </div>
          </div>
          <div class="row align-items-stretch">
            <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up">
              <div class="unit-4">
                <div class="unit-4-icon mr-4"><span class="text-primary flaticon-startup"></span></div>
                <div>
                  <h3>Business Consulting</h3>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>
                  <p><a href="#">Learn More</a></p>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="100">
              <div class="unit-4">
                <div class="unit-4-icon mr-4"><span class="text-primary flaticon-graphic-design"></span></div>
                <div>
                  <h3>Market Analysis</h3>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>
                  <p><a href="#">Learn More</a></p>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="200">
              <div class="unit-4">
                <div class="unit-4-icon mr-4"><span class="text-primary flaticon-settings"></span></div>
                <div>
                  <h3>User Monitoring</h3>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>
                  <p><a href="#">Learn More</a></p>
                </div>
              </div>
            </div>


            <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="">
              <div class="unit-4">
                <div class="unit-4-icon mr-4"><span class="text-primary flaticon-idea"></span></div>
                <div>
                  <h3>Insurance Consulting</h3>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>
                  <p><a href="#">Learn More</a></p>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="100">
              <div class="unit-4">
                <div class="unit-4-icon mr-4"><span class="text-primary flaticon-smartphone"></span></div>
                <div>
                  <h3>Financial Investment</h3>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>
                  <p><a href="#">Learn More</a></p>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="200">
              <div class="unit-4">
                <div class="unit-4-icon mr-4"><span class="text-primary flaticon-head"></span></div>
                <div>
                  <h3>Financial Management</h3>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>
                  <p><a href="#">Learn More</a></p>
                </div>
              </div>
            </div>

          </div>
        </div>
      </section>

      <section class="site-section testimonial-wrap" id="testimonials-section" data-aos="fade">
        <div class="container">
          <div class="row mb-5">
            <div class="col-12 text-center">
              <h2 class="section-title mb-3">Testimonials</h2>
            </div>
          </div>
        </div>
        <div class="slide-one-item home-slider owl-carousel">
            <div>
              <div class="testimonial">

                <blockquote class="mb-5">
                  <p>&ldquo;Dulu kalau mau mencari tempat rapat itu agak susah, kadang malu kalau udah masuk harus beli, padahal cuma mau tau kapasitas aja. Sejak ada aplikasi ini, sudah ada referensi semua jadi tinggal pilih deh~&rdquo;</p>
                </blockquote>

                <figure class="mb-4 d-flex align-items-center justify-content-center">
                  <div><img src="images/person_3.jpg" alt="Image" class="w-50 img-fluid mb-3"></div>
                  <p>John Smith</p>
                </figure>
              </div>
            </div>
            <div>
              <div class="testimonial">

                <blockquote class="mb-5">
                  <p>&ldquo;Mau booking tempat gausah dateng dulu deh, langsung di satu tempat!&rdquo;</p>
                </blockquote>
                <figure class="mb-4 d-flex align-items-center justify-content-center">
                  <div><img src="images/person_2.jpg" alt="Image" class="w-50 img-fluid mb-3"></div>
                  <p>Christine Aguilar</p>
                </figure>

              </div>
            </div>

            {{-- <div>
              <div class="testimonial">

                <blockquote class="mb-5">
                  <p>&ldquo;.&rdquo;</p>
                </blockquote>
                <figure class="mb-4 d-flex align-items-center justify-content-center">
                  <div><img src="images/person_4.jpg" alt="Image" class="w-50 img-fluid mb-3"></div>
                  <p>Robert Spears</p>
                </figure>


              </div>
            </div>

            <div>
              <div class="testimonial">

                <blockquote class="mb-5">
                  <p>&ldquo;Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur unde reprehenderit aperiam quaerat fugiat repudiandae explicabo animi minima fuga beatae illum eligendi incidunt consequatur. Amet dolores excepturi earum unde iusto.&rdquo;</p>
                </blockquote>
                <figure class="mb-4 d-flex align-items-center justify-content-center">
                  <div><img src="images/person_4.jpg" alt="Image" class="w-50 img-fluid mb-3"></div>
                  <p>Bruce Rogers</p>
                </figure>

              </div>
            </div> --}}

          </div>
      </section>

      <section class="site-section bg-light" id="pricing-section">
        <div class="container">
          <div class="row mb-5">
            <div class="col-12 text-center" data-aos="fade-up">
              <h2 class="section-title mb-3">Pricing</h2>
            </div>
          </div>
          <div class="row mb-5">
            <div class="col-md-6 mb-4 mb-lg-0 col-lg-4" data-aos="fade-up" data-aos-delay="">
              <div class="pricing">
                <h3 class="text-center text-black">Basic</h3>
                <div class="price text-center mb-4 ">
                  <span><span>$47</span> / year</span>
                </div>
                <ul class="list-unstyled ul-check success mb-5">

                  <li>Officia quaerat eaque neque</li>
                  <li>Possimus aut consequuntur incidunt</li>
                  <li class="remove">Lorem ipsum dolor sit amet</li>
                  <li class="remove">Consectetur adipisicing elit</li>
                  <li class="remove">Dolorum esse odio quas architecto sint</li>
                </ul>
                <p class="text-center">
                  <a href="#" class="btn btn-secondary">Buy Now</a>
                </p>
              </div>
            </div>

            <div class="col-md-6 mb-4 mb-lg-0 col-lg-4" data-aos="fade-up" data-aos-delay="100">
              <div class="pricing">
                <h3 class="text-center text-black">Premium</h3>
                <div class="price text-center mb-4 ">
                  <span><span>$200</span> / year</span>
                </div>
                <ul class="list-unstyled ul-check success mb-5">

                  <li>Officia quaerat eaque neque</li>
                  <li>Possimus aut consequuntur incidunt</li>
                  <li>Lorem ipsum dolor sit amet</li>
                  <li>Consectetur adipisicing elit</li>
                  <li class="remove">Dolorum esse odio quas architecto sint</li>
                </ul>
                <p class="text-center">
                  <a href="#" class="btn btn-primary">Buy Now</a>
                </p>
              </div>
            </div>

            <div class="col-md-6 mb-4 mb-lg-0 col-lg-4" data-aos="fade-up" data-aos-delay="200">
              <div class="pricing">
                <h3 class="text-center text-black">Professional</h3>
                <div class="price text-center mb-4 ">
                  <span><span>$750</span> / year</span>
                </div>
                <ul class="list-unstyled ul-check success mb-5">

                  <li>Officia quaerat eaque neque</li>
                  <li>Possimus aut consequuntur incidunt</li>
                  <li>Lorem ipsum dolor sit amet</li>
                  <li>Consectetur adipisicing elit</li>
                  <li>Dolorum esse odio quas architecto sint</li>
                </ul>
                <p class="text-center">
                  <a href="#" class="btn btn-secondary">Buy Now</a>
                </p>
              </div>
            </div>
          </div>

          <div class="row site-section" id="faq-section">
            <div class="col-12 text-center" data-aos="fade">
              <h2 class="section-title">Frequently Ask Questions</h2>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-6">

              <div class="mb-5" data-aos="fade-up" data-aos-delay="100">
              <h3 class="text-black h5 mb-4">Can I accept both Paypal and Stripe?</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam assumenda eum blanditiis perferendis.</p>
              </div>

              <div class="mb-5" data-aos="fade-up" data-aos-delay="100">
                <h3 class="text-black h5 mb-4">What available is refund period?</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam assumenda eum blanditiis perferendis.</p>
              </div>

              <div class="mb-5" data-aos="fade-up" data-aos-delay="100">
              <h3 class="text-black h5 mb-4">Can I accept both Paypal and Stripe?</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam assumenda eum blanditiis perferendis.</p>
              </div>

              <div class="mb-5" data-aos="fade-up" data-aos-delay="100">
                <h3 class="text-black h5 mb-4">What available is refund period?</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam assumenda eum blanditiis perferendis.</p>
              </div>
            </div>
            <div class="col-lg-6">

              <div class="mb-5" data-aos="fade-up" data-aos-delay="100">
                <h3 class="text-black h5 mb-4">Where are you from?</h3>
                <p>Voluptatum nobis obcaecati perferendis dolor totam unde dolores quod maxime corporis officia et. Distinctio assumenda minima maiores.</p>
              </div>

              <div class="mb-5" data-aos="fade-up" data-aos-delay="100">
                <h3 class="text-black h5 mb-4">What is your opening time?</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam assumenda eum blanditiis perferendis.</p>
              </div>

              <div class="mb-5" data-aos="fade-up" data-aos-delay="100">
              <h3 class="text-black h5 mb-4">Can I accept both Paypal and Stripe?</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam assumenda eum blanditiis perferendis.</p>
              </div>

              <div class="mb-5" data-aos="fade-up" data-aos-delay="100">
                <h3 class="text-black h5 mb-4">What available is refund period?</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam assumenda eum blanditiis perferendis.</p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="site-section" id="about-section">
        <div class="container">
          <div class="row mb-5">

            <div class="col-lg-6 ml-auto mb-5 order-1 order-lg-2" data-aos="fade" data-aos="fade-up" data-aos-delay="">
              <img src="images/hero_1.jpg" alt="Image" class="img-fluid rounded">
            </div>
            <div class="col-lg-6 order-2 order-lg-1" data-aos="fade">

              <div class="row">



                <div class="col-md-12 mb-md-5 mb-0 col-lg-6" data-aos="fade-up" data-aos-delay="">
                  <div class="unit-4">
                    <div class="unit-4-icon mr-4 mb-3"><span class="text-primary flaticon-head"></span></div>
                    <div>
                      <h3>Web &amp; Mobile Specialties</h3>
                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis consect.</p>
                      <p class="mb-0"><a href="#">Learn More</a></p>
                    </div>
                  </div>
                </div>
                <div class="col-md-12 mb-md-5 mb-0 col-lg-6" data-aos="fade-up" data-aos-delay="100">
                  <div class="unit-4">
                    <div class="unit-4-icon mr-4 mb-3"><span class="text-primary flaticon-smartphone"></span></div>
                    <div>
                      <h3>Intuitive Thinkers</h3>
                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis.</p>
                      <p class="mb-0"><a href="#">Learn More</a></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </section>




      <section class="site-section" id="blog-section">
        <div class="container">
          <div class="row mb-5">
            <div class="col-12 text-center" data-aos="fade">
              <h2 class="section-title mb-3">Our Blog</h2>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="">
              <div class="h-entry">
                <a href="single.html">
                  <img src="images/post_1.jpg" alt="Image" class="img-fluid">
                </a>
                <h2 class="font-size-regular"><a href="#">Repudiandae Quisquam Eaque Dolore</a></h2>
                <div class="meta mb-4">Ham Brook <span class="mx-2">&bullet;</span> Jan 18, 2019<span class="mx-2">&bullet;</span> <a href="#">News</a></div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus eligendi nobis ea maiores sapiente veritatis reprehenderit suscipit quaerat rerum voluptatibus a eius.</p>
                <p><a href="#">Continue Reading...</a></p>
              </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="100">
              <div class="h-entry">
                <a href="single.html">
                  <img src="images/post_2.jpg" alt="Image" class="img-fluid">
                </a>
                <h2 class="font-size-regular"><a href="#">Repudiandae Quisquam Eaque Dolore</a></h2>
                <div class="meta mb-4">James Phelps <span class="mx-2">&bullet;</span> Jan 18, 2019<span class="mx-2">&bullet;</span> <a href="#">News</a></div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus eligendi nobis ea maiores sapiente veritatis reprehenderit suscipit quaerat rerum voluptatibus a eius.</p>
                <p><a href="#">Continue Reading...</a></p>
              </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="200">
              <div class="h-entry">
                <a href="single.html">
                  <img src="images/post_3.jpg" alt="Image" class="img-fluid">
                </a>
                <h2 class="font-size-regular"><a href="#">Repudiandae Quisquam Eaque Dolore</a></h2>
                <div class="meta mb-4">James Phelps <span class="mx-2">&bullet;</span> Jan 18, 2019<span class="mx-2">&bullet;</span> <a href="#">News</a></div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus eligendi nobis ea maiores sapiente veritatis reprehenderit suscipit quaerat rerum voluptatibus a eius.</p>
                <p><a href="#">Continue Reading...</a></p>
              </div>
            </div>

          </div>
        </div>
      </section>




      <section class="site-section bg-light" id="contact-section" data-aos="fade">
        <div class="container">
          <div class="row mb-5">
            <div class="col-12 text-center">
              <h2 class="section-title mb-3">Contact Us</h2>
            </div>
          </div>
          <div class="row mb-5">



            <div class="col-md-4 text-center">
              <p class="mb-4">
                <span class="icon-room d-block h4 text-primary"></span>
                <span>203 Fake St. Mountain View, San Francisco, California, USA</span>
              </p>
            </div>
            <div class="col-md-4 text-center">
              <p class="mb-4">
                <span class="icon-phone d-block h4 text-primary"></span>
                <a href="#">+1 232 3235 324</a>
              </p>
            </div>
            <div class="col-md-4 text-center">
              <p class="mb-0">
                <span class="icon-mail_outline d-block h4 text-primary"></span>
                <a href="#">youremail@domain.com</a>
              </p>
            </div>
          </div>

        </div>
      </section>


      <footer class="site-footer">
        <div class="container">
          <div class="row">
            <div class="col-md-9">
              <div class="row">
                <div class="col-md-5">
                  <h2 class="footer-heading mb-4">About Us</h2>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque facere laudantium magnam voluptatum autem. Amet aliquid nesciunt veritatis aliquam.</p>
                </div>
                <div class="col-md-3 ml-auto">
                  <h2 class="footer-heading mb-4">Quick Links</h2>
                  <ul class="list-unstyled">
                    <li><a href="#about-section" class="smoothscroll">About Us</a></li>
                    <li><a href="#services-section" class="smoothscroll">Services</a></li>
                    <li><a href="#testimonials-section" class="smoothscroll">Testimonials</a></li>
                    <li><a href="#contact-section" class="smoothscroll">Contact Us</a></li>
                  </ul>
                </div>
                <div class="col-md-3">
                  <h2 class="footer-heading mb-4">Follow Us</h2>
                  <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                  <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                  <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                  <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <h2 class="footer-heading mb-4">Subscribe Newsletter</h2>
              <form action="#" method="post" class="footer-subscribe">
                <div class="input-group mb-3">
                  <input type="text" class="form-control border-secondary text-white bg-transparent" placeholder="Enter Email" aria-label="Enter Email" aria-describedby="button-addon2">
                  <div class="input-group-append">
                    <button class="btn btn-primary text-black" type="button" id="button-addon2">Send</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <div class="row pt-5 mt-5 text-center">
            <div class="col-md-12">
              <div class="border-top pt-5">
                <p>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              </p>

              </div>
            </div>

          </div>
        </div>
      </footer>

    </div> <!-- .site-wrap -->

  <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
  <script src="{{asset('js/jquery-ui.js')}}"></script>
  <script src="{{asset('js/popper.min.js')}}"></script>
  <script src="{{asset('js/bootstrap.min.js')}}"></script>
  <script src="{{asset('js/owl.carousel.min.js')}}"></script>
  <script src="{{asset('js/jquery.countdown.min.js')}}"></script>
  <script src="{{asset('js/jquery.easing.1.3.js')}}"></script>
  <script src="{{asset('js/aos.js')}}"></script>
  <script src="{{asset('js/jquery.fancybox.min.js')}}"></script>
  <script src="{{asset('js/jquery.sticky.js')}}"></script>
  <script src="{{asset('js/isotope.pkgd.min.js')}}"></script>


  <script src="{{asset('js/main.js')}}"></script>



  </body>
</html>
