<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from themeht.com/softino/html/rtl/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 28 Dec 2020 16:48:57 GMT -->
<head>
<meta charset="utf-8">
<meta name="keywords" content="bootstrap 4, premium, multipurpose, sass, scss, saas, software" />
<meta name="description" content="HTML5 Template" />
<meta name="author" content="www.themeht.com" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<title>Softino - Software Landing Page HTML5 Template</title>


<link rel="stylesheet" href="/css/index/main.css">

@yield('header')


<!-- inject css end -->

</head>

<body>

<!-- page wrapper start -->

<div class="page-wrapper">

<!-- preloader start -->

<div id="ht-preloader">
  <div class="loader clear-loader">
    <div class="loader-box"></div>
    <div class="loader-box"></div>
    <div class="loader-box"></div>
    <div class="loader-box"></div>
    <div class="loader-wrap-text">
      <div class="text"><span>S</span><span>O</span><span>F</span><span>T</span><span>I</span><span>N</span><span>O</span>
      </div>
    </div>
  </div>
</div>

<!-- preloader end -->


<!--header start-->

<header id="site-header" class="header header-1">
  <div class="container-fluid">
    <div id="header-wrap" class="box-shadow">
      <div class="row">
        <div class="col-lg-12">
          <!-- Navbar -->
          <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand logo" href="index.html">
              <img id="logo-img" class="img-center" src="images/logo.png" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation"> <span></span>
              <span></span>
              <span></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
              <!-- Left nav -->
              <ul id="main-menu" class="nav navbar-nav ml-auto mr-auto">
                <li class="nav-item"> <a class="nav-link active" href="#home">Home</a> 
                </li>
                <li class="nav-item"> <a class="nav-link" href="#about">About</a> 
                </li>
                <li class="nav-item"> <a class="nav-link" href="#service">Services</a> 
                </li>
                <li class="nav-item"> <a class="nav-link" href="#team">Team</a> 
                </li>
                <li class="nav-item"> <a class="nav-link" href="#pricing">Pricing</a> 
                </li>
                <li class="nav-item"> <a class="nav-link" href="#blog">Blog</a> 
                </li>
                <li class="nav-item"> <a class="nav-link" href="#">Pages</a>
                  <ul>
                   <li><a href="#">About Us</a>
                      <ul>
                        <li><a href="about-us.html">About Us 1</a>
                        </li>
                        <li><a href="about-us-2.html">About Us 2</a>
                        </li>
                      </ul>
                    </li>
                    <li><a href="#">Services</a>
                      <ul>
                        <li><a href="services.html">Service 1</a>
                        </li>
                        <li><a href="services-2.html">Service 2</a>
                        </li>
                      </ul>
                    </li>
                    <li><a href="team.html">Team</a>
                    </li>
                    <li><a href="team-single.html">Team Single</a>
                    </li>
                    <li><a href="faq.html">Faq</a>
                    </li>
                    <li><a href="#">Blogs</a>
                      <ul>
                        <li><a href="blog-grid-2.html">Blog Grid 2</a>
                        </li>
                        <li><a href="blog-left-sidebar.html">Blog Left Sidebar</a>
                        </li>
                        <li><a href="blog-right-sidebar.html">Blog Right Sidebar</a>
                        </li>
                        <li><a href="blog-single.html">Blog Single</a>
                        </li>
                      </ul>
                    </li>
                    <li><a href="#">Element</a>
                      <ul>
                        <li><a href="shortcode-accordions.html">Accordion</a>
                        </li>
                        <li><a href="shortcode-blog-post.html">Blog Post</a>
                        </li>
                        <li><a href="shortcode-counter.html">Counter</a>
                        </li>
                        <li><a href="shortcode-feature-box.html">Featured Box</a>
                        </li>
                        <li><a href="shortcode-pricing.html">Pricing Table</a>
                        </li>
                        <li><a href="shortcode-team.html">Team</a>
                        </li>
                        <li><a href="shortcode-testimonial.html">Testimonials</a>
                        </li>
                      </ul>
                    </li>
                    <li><a href="#">Contact us</a>
                      <ul>
                        <li><a href="contact.html">Contact 1</a>
                        </li>
                        <li><a href="contact-2.html">Contact 2</a>
                        </li>
                      </ul>
                    </li>
                    <li><a href="coming-soon.html">Coming Soon</a>
                    </li>
                    <li><a href="error-404.html">Error 404</a>
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
            @guest
            <a class="btn btn-theme btn-sm" href="/login" data-text="Login"> <span>L</span><span>o</span><span>g</span><span>i</span><span>n</span>
            @else
            <a class="btn btn-theme btn-sm" href="/login" data-text="Dashboard"> <span>D</span><span>a</span><span>s</span><span>h</span><span>b</span><span>o</span><span>a</span><span>r</span><span>d</span>
            @endguest
          </a>
          </nav>
        </div>
      </div>
    </div>
  </div>
</header>

<!--header end-->


<!--hero section start-->

<section id="home" class="fullscreen-banner banner p-0 bg-contain bg-pos-lt" data-bg-img="images/bg/01.png">
  <div class="spinner-eff">
    <div class="spinner-circle circle-1"></div>
    <div class="spinner-circle circle-2"></div>
  </div>
 <div class="align-center pt-0"> 
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 col-md-12 order-lg-1">
            <img class="img-center wow jackInTheBox" data-wow-duration="3s" src="images/banner/01.png" alt="">
          </div>
        <div class="col-lg-6 col-md-12 order-lg-1 md-mt-5">
          <h1 class="mb-4 wow fadeInUp" data-wow-duration="1.5s">Thinking The High Quality Software</h1>
          <p class="lead mb-4 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.3s">Softino is an all-new stylish Software For device that can show you things. awareness, drive traffic, connect with customers.</p>
          <a class="btn btn-theme wow fadeInUp" data-wow-duration="3s" data-wow-delay="0.5s" href="#" data-text="Start A Today"> <span>S</span><span>t</span><span>a</span><span>r</span><span>t</span>
            <span> </span><span>A</span>  <span> </span><span>T</span><span>o</span><span>d</span><span>a</span><span>y</span>
          </a>
          <a class="btn btn-dark wow fadeInUp" data-wow-duration="3s" data-wow-delay="0.5s" href="#" data-text="Learn More"> <span>L</span><span>e</span><span>a</span><span>r</span><span>n</span>
            <span> </span><span>M</span><span>o</span><span>r</span><span>e</span>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<!--hero section end-->


<!--body content start-->

<div class="page-content">

    
<!--feature start-->
@yield('content')
<!--feature end-->


    <!--about start-->

    <section id="about" class="pos-r bg-contain bg-pos-r py-10" data-bg-img="images/bg/02.png">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-7 col-md-12 image-column p-0 pl-lg-5">
            <div class="img-box box-shadow">
                <div class="box-loader">
              <span></span>
              <span></span>
              <span></span>
            </div>
                <img class="img-center" src="images/banner/03.jpg" alt="">
              </div>
          </div>
          <div class="col-lg-5 mr-auto col-md-12 md-mt-5">
            <div class="section-title mb-4">
              <div class="title-effect">
                <div class="bar bar-top"></div>
                <div class="bar bar-right"></div>
                <div class="bar bar-bottom"></div>
                <div class="bar bar-left"></div>
              </div>
              <h6>About Us</h6>
              <h2>We're Building Modern And High Software</h2>
            </div>
            <ul class="list-unstyled list-icon mb-4">
              <li class="mb-3"><i class="la la-check"></i> Deos et accusamus et iusto odio</li>
              <li class="mb-3"><i class="la la-check"></i> Distinctively brand adaptive innovation</li>
              <li><i class="la la-check"></i> Molestias a orci facilisis rutrum</li>
            </ul>
            <a class="btn btn-border btn-circle" href="#" data-text="See About"> <span>S</span><span>e</span><span>e</span><span> </span>
              <span>A</span><span>b</span><span>o</span><span>u</span><span>t</span>
            </a>
            <a class="btn btn-theme btn-circle" href="#" data-text="Learn More"> <span>L</span><span>e</span><span>a</span><span>r</span><span>n</span>
              <span> </span><span>M</span><span>o</span><span>r</span><span>e</span>
            </a>
          </div>
        </div>
      </div>
    </section>

    <!--about end-->


    <!--feature start-->

    <section id="service" class="service pos-r bg-effect o-hidden">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 col-md-12 order-lg-12 image-column left">
            <div class="blink-img">
              <img class="img-fluid blinkblink" src="images/pattern/04.png" alt="">
            </div>
            <img class="img-fluid z-index-1 w-100" src="images/svg/01.svg" alt="">
          </div>
          <div class="col-lg-6 col-md-12 md-mt-5 order-lg-1">
            <div class="row">
              <div class="col-lg-6 col-md-6">
                <div class="featured-item style-3">
                  <div class="featured-icon">
                    <i class="la la-diamond"></i>
                  </div>
                  <div class="featured-title">
                    <h5>Design</h5>
                  </div>
                  <div class="featured-desc">
                    <p>Top quality Software services, labore et dolore magna ali qua Lorem ipsum dolor sit amet.</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-md-6 mt-4">
                <div class="featured-item style-3">
                  <div class="featured-icon">
                    <i class="la la-credit-card"></i>
                  </div>
                  <div class="featured-title">
                    <h5>Drag And Drop</h5>
                  </div>
                  <div class="featured-desc">
                    <p>Top quality Software services, labore et dolore magna ali qua Lorem ipsum dolor sit amet.</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-md-6 sm-mt-3">
                <div class="featured-item style-3">
                  <div class="featured-icon">
                    <i class="la la-desktop"></i>
                  </div>
                  <div class="featured-title">
                    <h5>High Resolution</h5>
                  </div>
                  <div class="featured-desc">
                    <p>Top quality Software services, labore et dolore magna ali qua Lorem ipsum dolor sit amet.</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-md-6 mt-4">
                <div class="featured-item style-3">
                  <div class="featured-icon">
                    <i class="la la-headphones"></i>
                  </div>
                  <div class="featured-title">
                    <h5>Helping Support</h5>
                  </div>
                  <div class="featured-desc">
                    <p>Top quality Software services, labore et dolore magna ali qua Lorem ipsum dolor sit amet.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!--feature end-->


    <!--step start-->

    <section class="text-center pos-r">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-10 ml-auto mr-auto">
            <div class="section-title">
              <div class="title-effect">
                <div class="bar bar-top"></div>
                <div class="bar bar-right"></div>
                <div class="bar bar-bottom"></div>
                <div class="bar bar-left"></div>
              </div>
              <h6>How It Work</h6>
              <h2 class="title">Three Simple Step To Started Working Process</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div id="svg-container">
            <svg id="svgC" width="100%" height="100%" viewBox="0 0 620 120" preserveAspectRatio="xMidYMid meet"></svg>
          </div>
          <div class="col-lg-4 col-md-12">
            <div class="work-process">
              <div class="box-loader"> <span></span>
                <span></span>
                <span></span>
              </div>
              <div class="step-num-box">
                <div class="step-icon"><span><i class="la la-lightbulb-o"></i></span>
                </div>
                <div class="step-num">01</div>
              </div>
              <div class="step-desc">
                <h4>Research Project</h4>
                <p class="mb-0">Nostrud exercitat ullamco lorem ipsum dolor sit amet, consece adipising elit, sed doeo eiusmod</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-12 md-mt-5">
            <div class="work-process">
              <div class="box-loader"> <span></span>
                <span></span>
                <span></span>
              </div>
              <div class="step-num-box">
                <div class="step-icon"><span><i class="la la-rocket"></i></span>
                </div>
                <div class="step-num">02</div>
              </div>
              <div class="step-desc">
                <h4>Targeting</h4>
                <p class="mb-0">Nostrud exercitat ullamco lorem ipsum dolor sit amet, consece adipising elit, sed doeo eiusmod</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-12 md-mt-5">
            <div class="work-process">
              <div class="step-num-box">
                <div class="step-icon"><span><i class="la la-check-square"></i></span>
                </div>
                <div class="step-num">03</div>
              </div>
              <div class="step-desc">
                <h4>Result</h4>
                <p class="mb-0">Nostrud exercitat ullamco lorem ipsum dolor sit amet, consece adipising elit, sed doeo eiusmod</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!--step end-->


    <!--team start-->

    <section id="team" class="bg-effect right pos-r o-hidden">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-12">
            <div class="section-title">
              <div class="title-effect">
                <div class="bar bar-top"></div>
                <div class="bar bar-right"></div>
                <div class="bar bar-bottom"></div>
                <div class="bar bar-left"></div>
              </div>
              <h6>Creative Team</h6>
              <h2 class="title">Meet Our Expert team member will ready for your service</h2> 
            </div>
          </div>
        </div>
      </div>
      <div class="container-fluid p-0">
        <div class="row">
          <div class="col-xl-10 col-lg-11 col-md-10 mr-auto">
            <div class="owl-carousel owl-theme" data-dots="false" data-items="3" data-md-items="2" data-sm-items="1" data-autoplay="true">
              <div class="item">
                <div class="team-member style-1">
                  <div class="team-images">
                    <img class="img-fluid radius box-shadow" src="images/team/01.jpg" alt="">
                    <div class="social-icons social-colored circle team-social-icon">
                      <ul>
                        <li class="social-facebook"><a href="#"><i class="fab fa-facebook-f"></i></a>
                        </li>
                        <li class="social-twitter"><a href="#"><i class="fab fa-twitter"></i></a>
                        </li>
                        <li class="social-gplus"><a href="#"><i class="fab fa-google-plus-g"></i></a>
                        </li>
                        <li class="social-linkedin"><a href="#"><i class="fab fa-linkedin-in"></i></a>
                        </li>
                      </ul>
                    </div> <a class="team-link" href="team-single.html"><i class="la la-external-link"></i></a>
                  </div>
                  <div class="team-description"> <span>Manager</span>
                    <h5>Jemy Lusto</h5> 
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="team-member style-1">
                  <div class="team-images">
                    <img class="img-fluid radius box-shadow" src="images/team/02.jpg" alt="">
                    <div class="social-icons social-colored circle team-social-icon">
                      <ul>
                        <li class="social-facebook"><a href="#"><i class="fab fa-facebook-f"></i></a>
                        </li>
                        <li class="social-twitter"><a href="#"><i class="fab fa-twitter"></i></a>
                        </li>
                        <li class="social-gplus"><a href="#"><i class="fab fa-google-plus-g"></i></a>
                        </li>
                        <li class="social-linkedin"><a href="#"><i class="fab fa-linkedin-in"></i></a>
                        </li>
                      </ul>
                    </div> <a class="team-link" href="team-single.html"><i class="la la-external-link"></i></a>
                  </div>
                  <div class="team-description"> <span>Manager</span>
                    <h5>Tom Roadse</h5> 
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="team-member style-1">
                  <div class="team-images">
                    <img class="img-fluid radius box-shadow" src="images/team/03.jpg" alt="">
                    <div class="social-icons social-colored circle team-social-icon">
                      <ul>
                        <li class="social-facebook"><a href="#"><i class="fab fa-facebook-f"></i></a>
                        </li>
                        <li class="social-twitter"><a href="#"><i class="fab fa-twitter"></i></a>
                        </li>
                        <li class="social-gplus"><a href="#"><i class="fab fa-google-plus-g"></i></a>
                        </li>
                        <li class="social-linkedin"><a href="#"><i class="fab fa-linkedin-in"></i></a>
                        </li>
                      </ul>
                    </div> <a class="team-link" href="team-single.html"><i class="la la-external-link"></i></a>
                  </div>
                  <div class="team-description"> <span>Manager</span>
                    <h5>Lana Dior</h5> 
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="team-member style-1">
                  <div class="team-images">
                    <img class="img-fluid radius box-shadow" src="images/team/04.jpg" alt="">
                    <div class="social-icons social-colored circle team-social-icon">
                      <ul>
                        <li class="social-facebook"><a href="#"><i class="fab fa-facebook-f"></i></a>
                        </li>
                        <li class="social-twitter"><a href="#"><i class="fab fa-twitter"></i></a>
                        </li>
                        <li class="social-gplus"><a href="#"><i class="fab fa-google-plus-g"></i></a>
                        </li>
                        <li class="social-linkedin"><a href="#"><i class="fab fa-linkedin-in"></i></a>
                        </li>
                      </ul>
                    </div> <a class="team-link" href="team-single.html"><i class="la la-external-link"></i></a>
                  </div>
                  <div class="team-description"> <span>Manager</span>
                    <h5>James Lynn</h5> 
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6">
            <div class="clients-logo">
            <img class="img-center" src="images/client/07.png" alt="">
          </div>
          </div>
          <div class="col-lg-3 col-md-6 sm-mt-3">
            <div class="clients-logo">
            <img class="img-center" src="images/client/08.png" alt="">
          </div>
          </div>
          <div class="col-lg-3 col-md-6 md-mt-3">
            <div class="clients-logo">
            <img class="img-center" src="images/client/09.png" alt="">
          </div>
          </div>
          <div class="col-lg-3 col-md-6 md-mt-3">
            <div class="clients-logo">
            <img class="img-center" src="images/client/10.png" alt="">
          </div>
          </div>
        </div>
      </div>
    </section>

    <!--team end-->


    <!--pricing start-->

    <section id="pricing" class="pos-r">
      <canvas id="canvas"></canvas>
      <div class="container">
        <div class="row text-center">
          <div class="col-lg-8 col-md-12 ml-auto mr-auto">
            <div class="section-title">
              <div class="title-effect">
                <div class="bar bar-top"></div>
                <div class="bar bar-right"></div>
                <div class="bar bar-bottom"></div>
                <div class="bar bar-left"></div>
              </div>
              <h6>Pricing Plan</h6>
              <h2 class="title">Choose affordable prices</h2>
              <p>Softino Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderi</p>
            </div>
          </div>
        </div>
        <div class="row align-items-center">
          <div class="col-lg-4 col-md-12">
            <div class="price-table">
              <div class="price-inside">Starter</div>
              <div class="price-header">
                <div class="price-value">
                  <h2><span>$</span>33</h2>
                  <span>Monthly Package</span>
                </div>
                <h3 class="price-title">Starter</h3> 
              </div>
              <a class="btn btn-theme btn-circle my-4" href="#" data-text="Purchase Now"> <span>P</span><span>u</span><span>r</span><span>c</span><span>h</span><span>a</span><span>s</span><span>e</span>
                <span> </span><span>N</span><span>o</span><span>w</span>
              </a>
              <div class="price-list">
                <ul class="list-unstyled">
                  <li>15 Analytics Compaign</li>
                  <li>Unlimited Site licenses</li>
                  <li>1 Database</li>
                  <li>10 Free Optimization</li>
                  <li>Html5 + Css3</li>
                  <li>24/7 Customer Support</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-12 md-mt-5">
            <div class="price-table active">
              <div class="price-inside">Premium</div>
              <div class="price-header">
                <div class="price-value">
                  <h2><span>$</span>55</h2>
                  <span>Monthly Package</span>
                </div>
                <h3 class="price-title">Premium</h3> 
              </div>
              <a class="btn btn-theme btn-circle my-4" href="#" data-text="Purchase Now"> <span>P</span><span>u</span><span>r</span><span>c</span><span>h</span><span>a</span><span>s</span><span>e</span>
                <span> </span><span>N</span><span>o</span><span>w</span>
              </a>
              <div class="price-list">
                <ul class="list-unstyled">
                  <li>15 Analytics Compaign</li>
                  <li>Unlimited Site licenses</li>
                  <li>1 Database</li>
                  <li>10 Free Optimization</li>
                  <li>Html5 + Css3</li>
                  <li>24/7 Customer Support</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-12 md-mt-5">
            <div class="price-table">
              <div class="price-inside">Professional</div>
              <div class="price-header">
                <div class="price-value">
                  <h2><span>$</span>99</h2>
                  <span>Monthly Package</span>
                </div>
                <h3 class="price-title">Professional</h3> 
              </div>
              <a class="btn btn-theme btn-circle my-4" href="#" data-text="Purchase Now"> <span>P</span><span>u</span><span>r</span><span>c</span><span>h</span><span>a</span><span>s</span><span>e</span>
                <span> </span><span>N</span><span>o</span><span>w</span>
              </a>
              <div class="price-list">
                <ul class="list-unstyled">
                  <li>15 Analytics Compaign</li>
                  <li>Unlimited Site licenses</li>
                  <li>1 Database</li>
                  <li>10 Free Optimization</li>
                  <li>Html5 + Css3</li>
                  <li>24/7 Customer Support</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!--pricing end-->


    <!--testimonial start-->

    <section class="grey-bg pos-r o-hidden" data-bg-img="images/pattern/01.png">
      <div class="wave-shape">
        <img class="img-fluid" src="images/bg/03.png" alt="">
      </div>
      <div class="container">
        <div class="row text-center">
          <div class="col-lg-8 col-md-12 ml-auto mr-auto">
            <div class="section-title">
              <div class="title-effect">
                <div class="bar bar-top"></div>
                <div class="bar bar-right"></div>
                <div class="bar bar-bottom"></div>
                <div class="bar bar-left"></div>
              </div>
              <h6>Testimonial</h6>
              <h2 class="title">You Can See our clients feedback What You Say?</h2> 
            </div>
          </div>
        </div>
        <div class="row mt-5">
          <div class="col-md-12">
            <div id="testimonial-1" class="testimonial-carousel carousel slide" data-ride="carousel" data-interval="2500">
              <!-- Wrapper for slides -->
              <div class="row align-items-center">
                <div class="col-lg-7 col-md-12">
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <div class="testimonial style-1">
                        <div class="testimonial-content">
                          <div class="testimonial-quote"><i class="la la-quote-left"></i>
                          </div>
                          <p>Professional recommended and great experience, Nam pulvinar vitae neque et porttitor, Praesent sed nisi eleifend, Consectetur adipisicing elit, sed do eiusmodas temporo incididunt Praesent sed nisi eleifend, Consectetur adipisicing elit</p>
                          <div class="testimonial-caption">
                            <h5>Lana Roadse</h5>
                            <label>CEO of Softino</label>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="carousel-item">
                      <div class="testimonial style-1">
                        <div class="testimonial-content">
                          <div class="testimonial-quote"><i class="la la-quote-left"></i>
                          </div>
                          <p>Recommended Professional and great experience, Nam pulvinar vitae neque et porttitor, Praesent sed nisi eleifend, Consectetur adipisicing elit, sed do eiusmodas temporo incididunt Praesent sed nisi eleifend, Consectetur adipisicing elit,</p>
                          <div class="testimonial-caption">
                            <h5>Lana Roadse</h5>
                            <label>CEO of Softino</label>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="carousel-item">
                      <div class="testimonial style-1">
                        <div class="testimonial-content">
                          <div class="testimonial-quote"><i class="la la-quote-left"></i>
                          </div>
                          <p>Consectetur Recommended Professional and great experience, Nam pulvinar vitae neque et porttitor, Praesent sed nisi eleifend, adipisicing elit, sed do eiusmodas temporo incididunt Praesent sed nisi eleifend, Consectetur adipisicing elit,</p>
                          <div class="testimonial-caption">
                            <h5>Lana Roadse</h5>
                            <label>CEO of Softino</label>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- End Item -->
                  </div>
                  <!-- End Carousel Inner -->
                </div>
                <div class="col-lg-5 col-md-12 md-mt-5">
                  <div class="controls">
                    <div class="anti-01-holder">
                      <div class="anti-01"></div>
                    </div>
                    <div class="anti-02-holder">
                      <div class="anti-02"></div>
                    </div>
                    <div class="anti-03-holder">
                      <div class="anti-03"></div>
                    </div>
                    <ul class="nav">
                      <li data-target="#testimonial-1" data-slide-to="0" class="active">
                        <a href="#">
                          <img class="img-fluid" src="images/testimonial/01.jpg" alt="">
                        </a>
                      </li>
                      <li data-target="#testimonial-1" data-slide-to="1">
                        <a href="#">
                          <img class="img-fluid" src="images/testimonial/02.jpg" alt="">
                        </a>
                      </li>
                      <li data-target="#testimonial-1" data-slide-to="2">
                        <a href="#">
                          <img class="img-fluid" src="images/testimonial/03.jpg" alt="">
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <!-- End Carousel -->
          </div>
        </div>
      </div>
    </section>

    <!--testimonial end-->


    <!--blog start-->
    @yield('blog')

    <!--blog end-->

    </div>

    <!--body content end--> 


<!--footer start-->

<footer class="footer footer-1 pos-r" data-bg-img="images/bg/05.png">
  <div class="subscribe-box">
    <div class="container">
      <div class="row subscribe-inner align-items-center">
        <div class="col-md-6 col-sm-12">
          <h4>Subscribe Our Newsletter</h4>
          <p class="lead mb-0">Get started for 1 Month free trial No Purchace required.</p>
        </div>
        <div class="col-md-6 col-sm-12 sm-mt-2">
          <div class="subscribe-form sm-mt-2">
            <form id="mc-form" class="group">
              <input type="email" value="" name="EMAIL" class="email" id="mc-email" placeholder="Email Address" required="">
              <input class="btn btn-theme" type="submit" name="subscribe" value="Subscribe">
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="primary-footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-6">
          <div class="footer-logo">
            <img id="footer-logo-img" src="images/logo.png" class="img-center" alt="">
          </div>
          <p class="mb-0">Softino Software Landing Page Is fully responsible, Build whatever you like with the Softino, Softino is the creative, modern HTML5 Template suitable for Your business.</p>
        </div>
        <div class="col-lg-4 col-md-6 pl-md-5 sm-mt-5 footer-list justify-content-between d-flex">
          <ul class="list-unstyled w-100">            
            <li><a href="about-us.html">About Us</a>
            </li>
            <li><a href="services.html">Service</a>
            </li>
            <li><a href="team.html">Team</a>
            </li>
            <li><a href="team-single.html">Team Single</a>
            </li>
            <li><a href="contact.html">Contact Us</a>
            </li>
          </ul>
          <ul class="list-unstyled w-100">
            <li><a href="blog-right-sidebar.html">Blog</a>
            </li>            
            <li><a href="faq.html">Faq</a>
            </li>
            <li><a href="error-404.html">Error 404</a>
            </li>
            <li><a href="privacy-policy.html">Privacy Policy</a>
            </li>
            <li><a href="terms-and-conditions.html">Terms</a>
            </li>
          </ul>
        </div>
        <div class="col-lg-4 col-md-12 md-mt-5">
          <ul class="media-icon list-unstyled">
            <li>
              <p class="mb-0">Address: <b>423B, Road Wordwide Country, USA</b>
              </p>
            </li>
            <li>Email: <a href="mailto:themeht23@gmail.com"><b>themeht23@gmail.com</b></a>
            </li>
            <li>Phone: <a href="tel:+912345678900"><b>+91-234-567-8900</b></a>
            </li>
            <li>Fax: <a href="tel:+912345678900"><b>+91-234-567-8900</b></a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="secondary-footer">
    <div class="container">
      <div class="copyright">
        <div class="row align-items-center">
          <div class="col-lg-6 col-md-12"> <span>Copyright 2019 Softino Theme by <u><a href="#">ThemeHt</a></u> | All Rights Reserved</span>
          </div>
          <div class="col-lg-6 col-md-12 text-lg-left md-mt-3">
            <div class="footer-social">
              <ul class="list-inline">
                <li class="ml-2"><a href="#"><i class="fab fa-facebook-f"></i> Facebook</a>
                </li>
                <li class="ml-2"><a href="#"><i class="fab fa-twitter"></i> Twitter</a>
                </li>
                <li><a href="#"><i class="fab fa-google-plus-g"></i> Google Plus</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>

<!--footer end-->


</div>

<!-- page wrapper end -->


<!--color-customizer start-->

<div class="color-customizer closed">
  <div class="color-button">
    <a class="opener" href="#"> <i class="fas fa-spinner fa-spin"></i>
    </a>
  </div>
  <div class="clearfix color-chooser text-center">
    <h4 class="text-theme font-w-8 mb-4">Softino With <span class="text-black font-w-5">Awesome Colors</span></h4>
    <ul class="colorChange clearfix">
      <li class="theme-default selected" title="theme-default" data-style="color-1"></li>
      <li class="theme-2" title="theme-2" data-style="color-2"></li>
      <li class="theme-3" title="theme-3" data-style="color-3"></li>
      <li class="theme-4" title="theme-4" data-style="color-4"></li>
      <li class="theme-5" title="theme-5" data-style="color-5"></li>
      <li class="theme-6" title="theme-6" data-style="color-6"></li>
    </ul>
    <div class="text-center mt-4">
      <a class="btn btn-theme btn-circle" href="#" data-text="Purchase Now">
       <span>P</span><span>u</span><span>r</span><span>c</span><span>h</span><span>a</span><span>s</span><span>e</span>
       <span> </span><span>N</span><span>o</span><span>W</span>
        </a>
    </div>
  </div>
</div>

<!--color-customizer end-->


<!--back-to-top start-->

<div class="scroll-top"><a class="smoothscroll" href="#top"><i class="flaticon-go-up-in-web"></i></a></div>


<script src="/js/index/main.js"></script>

@yield('footer')


<!-- inject js end -->

</body>


<!-- Mirrored from themeht.com/softino/html/rtl/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 28 Dec 2020 16:51:03 GMT -->
</html>