@include('blog_hompage.layout.head')

<style>
    p {

        overflow: hidden;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;

    }

    .post_title {
        overflow: hidden;
        display: -webkit-box;
        -webkit-line-clamp: 1;
        -webkit-box-orient: vertical;

    }

    .recent_post {

        min-width: 244px;

    }

    .post_image {
        max-height: 260px;
        min-height: 260px;
    }

    .postshow_image {
        height: 252px;
        width: 100%;
        max-height: 260px;
        min-height: 260px;
        cursor: pointer;

    }

    .post_contet_height {
        min-height: 47px;
    }

    .post_category {
        opacity: 0;
        min-width: 140px;
        max-width: 140px;
        display: flex;
        font-size: 12px;
        align-items: center;
        justify-content: center;
    }

    .post_category:hover {
        opacity: 1;

    }

    .blog-item:hover .post_category {
        opacity: 1;
    }

</style>
<!-- Spinner Start -->
<div id="spinner"
    class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner"></div>
</div>
<!-- Spinner End -->


<!-- Topbar Start -->
<div class="container-fluid bg-dark px-5 d-none d-lg-block">
    <div class="row gx-0">
        <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
            <div class="d-inline-flex align-items-center" style="height: 45px;">
                <small class="me-3 text-light">
                    <i class="fa fa-map-marker-alt me-2">
                    </i>
                    123 Street,Banglore,India
                </small>
                <small class="me-3 text-light">
                    <i class="fa fa-phone-alt me-2"></i>
                    8695166945
                </small>
                <small class="text-light">
                    <i class="fa fa-envelope-open me-2"></i>kumaramk1999@gmail.com</small>
            </div>
        </div>
        <div class="col-lg-4 text-center text-lg-end">
            <div class="d-inline-flex align-items-center" style="height: 45px;">
                <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i
                        class="fab fa-twitter fw-normal"></i></a>
                <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i
                        class="fab fa-facebook-f fw-normal"></i></a>
                <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i
                        class="fab fa-linkedin-in fw-normal"></i></a>
                <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i
                        class="fab fa-instagram fw-normal"></i></a>
                <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle" href=""><i
                        class="fab fa-youtube fw-normal"></i></a>
            </div>
        </div>
    </div>
</div>
<!-- Topbar End -->


<!-- Navbar & Carousel Start -->
<div class="container-fluid position-relative p-0">
    <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0">
        <a href="{{ route('user./.blog_starting_home_page') }}" class="navbar-brand p-0">
            <h1 class="m-0"><i class="fa fa-user-tie me-2"></i>Blog</h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="{{ route('user./.blog_starting_home_page') }}" class="nav-item nav-link active">Home</a>
                <a href="{{ route('user./.blog_starting_home_about_page') }}" class="nav-item nav-link">About</a>
                <a href="{{ route('user./.blog_starting_home_allpost') }}" class=" nav-item nav-link ">Blog</a>
                <a href="{{ route('user./.blog_starting_home_contact_page') }}" class="nav-item nav-link">Contact</a>
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                                                                                                                                         document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>


        </div>
    </nav>

    <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="w-100" src="{{ asset('design/img/carousel-1.jpg') }}" alt="Image">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 900px;">
                        <h5 class="text-white text-uppercase mb-3 animated slideInDown">Creative &
                            Innovative</h5>
                        <h1 class="display-1 text-white mb-md-4 animated zoomIn">Creative & Innovative
                            Digital Solution</h1>
                        <a href="{{ route('user./.blog_starting_home_quote_page') }}"
                            class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Free
                            Quote</a>
                        <a href="{{ route('user./.blog_starting_home_contact_page') }}"
                            class="btn btn-outline-light py-md-3 px-md-5 animated slideInRight">Contact
                            Us</a>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="w-100" src="{{ asset('design/img/carousel-2.jpg') }}" alt="Image">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 900px;">
                        <h5 class="text-white text-uppercase mb-3 animated slideInDown">Creative &
                            Innovative</h5>
                        <h1 class="display-1 text-white mb-md-4 animated zoomIn">Creative & Innovative
                            Digital Solution</h1>
                        <a href="quote.html" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Free
                            Quote</a>
                        <a href="" class="btn btn-outline-light py-md-3 px-md-5 animated slideInRight">Contact
                            Us</a>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
<!-- Navbar & Carousel End -->


<!-- Full Screen Search Start -->
<div class="container-fluid position-relative p-0">
    <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0">
        <a href="{{ route('user./.blog_starting_home_page') }}" class="navbar-brand p-0">
            <h1 class="m-0"><i class="fa fa-user-tie me-2"></i>Startup</h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="{{ route('user./.blog_starting_home_page') }}" class="nav-item nav-link">Home</a>
                <a href="{{ route('user./.blog_starting_home_about_page') }}" class="nav-item nav-link">About</a>
                <a href="{{ route('user./.blog_starting_home_service_page') }}" class="nav-item nav-link">Services</a>
                <a href="{{ route('user./.blog_starting_home_allpost') }}" class="nav-item nav-link active">Blog</a>

                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu m-0">

                        <a href="{{ route('user./.blog_starting_home_feature_page') }}" class="dropdown-item active">Our
                            features</a>
                        <a href="{{ route('user./.blog_starting_home_team_page') }}" class="dropdown-item">Team
                            Members</a>
                        <a href="{{ route('user./.blog_starting_home_testimonial_page') }}"
                            class="dropdown-item">Testimonial</a>
                        <a href="{{ route('user./.blog_starting_home_quote_page') }}" class="dropdown-item">Free Quote</a>
                    </div>
                </div>
                <a href="{{ route('user./.blog_starting_home_contact_page') }}" class="nav-item nav-link">Contact</a>
            </div>

        </div>
    </nav>

    <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
        <div class="row py-5">
            <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                <h1 class="display-4 text-white animated zoomIn">Blog</h1>
                <a href="{{ route('user./.blog_starting_home_page') }}" class="h5 text-white">Home</a>
                <i class="far fa-circle text-white px-2"></i>
                <a href="{{ route('user./.blog_starting_home_allpost') }}" class="h5 text-white">Blog</a>
            </div>
        </div>
    </div>
</div>
<!-- Full Screen Search End -->


<!-- About Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-7">
                <div class="section-title position-relative pb-3 mb-5">
                    <h5 class="fw-bold text-primary text-uppercase">About Us</h5>
                    <h1 class="mb-0">The Best IT Solution With 6 Years of Experience</h1>
                </div>
                <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum et
                    tempor sit. Aliqu diam amet diam et eos labore. Clita erat ipsum et lorem et sit,
                    sed stet no labore lorem sit. Sanctus clita duo justo et tempor eirmod magna dolore
                    erat amet</p>
                <div class="row g-0 mb-3">
                    <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                        <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Award
                            Winning</h5>
                        <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Professional Staff
                        </h5>
                    </div>
                    <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                        <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>24/7
                            Support</h5>
                        <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Fair
                            Prices</h5>
                    </div>
                </div>
                <div class="d-flex align-items-center mb-4 wow fadeIn" data-wow-delay="0.6s">
                    <div class="bg-primary d-flex align-items-center justify-content-center rounded"
                        style="width: 60px; height: 60px;">
                        <i class="fa fa-phone-alt text-white"></i>
                    </div>
                    <div class="ps-4">
                        <h5 class="mb-2">Call to ask any question</h5>
                        <h4 class="text-primary mb-0">8695166945</h4>
                    </div>
                </div>
                <a href="quote.html" class="btn btn-primary py-3 px-5 mt-3 wow zoomIn" data-wow-delay="0.9s">Request A
                    Quote</a>
            </div>
            <div class="col-lg-5" style="min-height: 500px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s"
                        src="{{ asset('design/img/about.jpg') }}" style="object-fit: cover;">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->


<!-- Features Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
            <h5 class="fw-bold text-primary text-uppercase">Why Choose Us</h5>
            <h1 class="mb-0">We Are Here to Grow Your Business Exponentially</h1>
        </div>
        <div class="row g-5">
            <div class="col-lg-4">
                <div class="row g-5">
                    <div class="col-12 wow zoomIn" data-wow-delay="0.2s">
                        <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3"
                            style="width: 60px; height: 60px;">
                            <i class="fa fa-cubes text-white"></i>
                        </div>
                        <h4>Best In Industry</h4>
                        <p class="mb-0">Magna sea eos sit dolor, ipsum amet lorem diam dolor
                            eos et diam dolor</p>
                    </div>
                    <div class="col-12 wow zoomIn" data-wow-delay="0.6s">
                        <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3"
                            style="width: 60px; height: 60px;">
                            <i class="fa fa-award text-white"></i>
                        </div>
                        <h4>Award Winning</h4>
                        <p class="mb-0">Magna sea eos sit dolor, ipsum amet lorem diam dolor
                            eos et diam dolor</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4  wow zoomIn" data-wow-delay="0.9s" style="min-height: 350px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.1s"
                        src="{{ asset('design/img/feature.jpg') }}" style="object-fit: cover;">
                </div>
            </div>
            <div class="col-lg-4">
                <div class="row g-5">
                    <div class="col-12 wow zoomIn" data-wow-delay="0.4s">
                        <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3"
                            style="width: 60px; height: 60px;">
                            <i class="fa fa-users-cog text-white"></i>
                        </div>
                        <h4>Professional Staff</h4>
                        <p class="mb-0">Magna sea eos sit dolor, ipsum amet lorem diam dolor
                            eos et diam dolor</p>
                    </div>
                    <div class="col-12 wow zoomIn" data-wow-delay="0.8s">
                        <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3"
                            style="width: 60px; height: 60px;">
                            <i class="fa fa-phone-alt text-white"></i>
                        </div>
                        <h4>24/7 Support</h4>
                        <p class="mb-0">Magna sea eos sit dolor, ipsum amet lorem diam dolor
                            eos et diam dolor</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Features Start -->


<!-- Service Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
            <h5 class="fw-bold text-primary text-uppercase">Our Services</h5>
            <h1 class="mb-0">Custom IT Solutions for Your Successful Business</h1>
        </div>
        <div class="row g-5">
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                <div
                    class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                    <div class="service-icon">
                        <i class="fa fa-shield-alt text-white"></i>
                    </div>
                    <h4 class="mb-3">Cyber Security</h4>
                    <p class="m-0">Amet justo dolor lorem kasd amet magna sea stet eos vero
                        lorem ipsum dolore sed</p>
                    <a class="btn btn-lg btn-primary rounded" href="">
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                <div
                    class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                    <div class="service-icon">
                        <i class="fa fa-chart-pie text-white"></i>
                    </div>
                    <h4 class="mb-3">Data Analytics</h4>
                    <p class="m-0">Amet justo dolor lorem kasd amet magna sea stet eos vero
                        lorem ipsum dolore sed</p>
                    <a class="btn btn-lg btn-primary rounded" href="">
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.9s">
                <div
                    class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                    <div class="service-icon">
                        <i class="fa fa-code text-white"></i>
                    </div>
                    <h4 class="mb-3">Web Development</h4>
                    <p class="m-0">Amet justo dolor lorem kasd amet magna sea stet eos vero
                        lorem ipsum dolore sed</p>
                    <a class="btn btn-lg btn-primary rounded" href="">
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                <div
                    class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                    <div class="service-icon">
                        <i class="fab fa-android text-white"></i>
                    </div>
                    <h4 class="mb-3">Apps Development</h4>
                    <p class="m-0">Amet justo dolor lorem kasd amet magna sea stet eos vero
                        lorem ipsum dolore sed</p>
                    <a class="btn btn-lg btn-primary rounded" href="">
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                <div
                    class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                    <div class="service-icon">
                        <i class="fa fa-search text-white"></i>
                    </div>
                    <h4 class="mb-3">SEO Optimization</h4>
                    <p class="m-0">Amet justo dolor lorem kasd amet magna sea stet eos vero
                        lorem ipsum dolore sed</p>
                    <a class="btn btn-lg btn-primary rounded" href="">
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.9s">
                <div
                    class="position-relative bg-primary rounded h-100 d-flex flex-column align-items-center justify-content-center text-center p-5">
                    <h3 class="text-white mb-3">Call Us For Quote</h3>
                    <p class="text-white mb-3">Clita ipsum magna kasd rebum at ipsum amet dolor justo
                        dolor est magna stet eirmod</p>
                    <h2 class="text-white mb-0">+012 345 6789</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Service End -->


<!-- Quote Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-7">
                <div class="section-title position-relative pb-3 mb-5">
                    <h5 class="fw-bold text-primary text-uppercase">Request A Quote</h5>
                    <h1 class="mb-0">Need A Free Quote? Please Feel Free to Contact Us</h1>
                </div>
                <div class="row gx-3">
                    <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                        <h5 class="mb-4"><i class="fa fa-reply text-primary me-3"></i>Reply within 24 hours
                        </h5>
                    </div>
                    <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                        <h5 class="mb-4"><i class="fa fa-phone-alt text-primary me-3"></i>24 hrs telephone
                            support</h5>
                    </div>
                </div>
                <p class="mb-4">Eirmod sed tempor lorem ut dolores. Aliquyam sit sadipscing kasd ipsum. Dolor
                    ea et dolore et at sea ea at dolor, justo ipsum duo rebum sea invidunt voluptua. Eos vero eos vero
                    ea et dolore eirmod et. Dolores diam duo invidunt lorem. Elitr ut dolores magna sit. Sea dolore
                    sanctus sed et. Takimata takimata sanctus sed.</p>
                <div class="d-flex align-items-center mt-2 wow zoomIn" data-wow-delay="0.6s">
                    <div class="bg-primary d-flex align-items-center justify-content-center rounded"
                        style="width: 60px; height: 60px;">
                        <i class="fa fa-phone-alt text-white"></i>
                    </div>
                    <div class="ps-4">
                        <h5 class="mb-2">Call to ask any question</h5>
                        <h4 class="text-primary mb-0">+8695166945</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="bg-primary rounded h-100 d-flex align-items-center p-5 wow zoomIn" data-wow-delay="0.9s">
                    <form>
                        <div class="row g-3">
                            <div class="col-xl-12">
                                <input type="text" class="form-control bg-light border-0" placeholder="Your Name"
                                    style="height: 55px;">
                            </div>
                            <div class="col-12">
                                <input type="email" class="form-control bg-light border-0" placeholder="Your Email"
                                    style="height: 55px;">
                            </div>
                            <div class="col-12">
                                <select class="form-select bg-light border-0" style="height: 55px;">
                                    <option selected>Select A Service</option>
                                    <option value="1">Service 1</option>
                                    <option value="2">Service 2</option>
                                    <option value="3">Service 3</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <textarea class="form-control bg-light border-0" rows="3" placeholder="Message"></textarea>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-dark w-100 py-3" type="submit">Request A Quote</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Quote End -->


<!-- Testimonial Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-4 mx-auto" style="max-width: 600px;">
            <h5 class="fw-bold text-primary text-uppercase">Testimonial</h5>
            <h1 class="mb-0">What Our Clients Say About Our Digital Services</h1>
        </div>
        <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.6s">
            <div class="testimonial-item bg-light my-4">
                <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                    <img class="img-fluid rounded" src="{{ asset('design/img/testimonial-1.jpg') }}"
                        style="width: 60px; height: 60px;">
                    <div class="ps-4">
                        <h4 class="text-primary mb-1">Client Name</h4>
                        <small class="text-uppercase">Profession</small>
                    </div>
                </div>
                <div class="pt-4 pb-5 px-5">
                    Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam
                </div>
            </div>
            <div class="testimonial-item bg-light my-4">
                <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                    <img class="img-fluid rounded" src="{{ asset('design/img/testimonial-2.jpg') }}"
                        style="width: 60px; height: 60px;">
                    <div class="ps-4">
                        <h4 class="text-primary mb-1">Client Name</h4>
                        <small class="text-uppercase">Profession</small>
                    </div>
                </div>
                <div class="pt-4 pb-5 px-5">
                    Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam
                </div>
            </div>
            <div class="testimonial-item bg-light my-4">
                <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                    <img class="img-fluid rounded" src="{{ asset('design/img/testimonial-3.jpg') }}"
                        style="width: 60px; height: 60px;">
                    <div class="ps-4">
                        <h4 class="text-primary mb-1">Client Name</h4>
                        <small class="text-uppercase">Profession</small>
                    </div>
                </div>
                <div class="pt-4 pb-5 px-5">
                    Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam
                </div>
            </div>
            <div class="testimonial-item bg-light my-4">
                <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                    <img class="img-fluid rounded" src="{{ asset('design/img/testimonial-4.jpg') }}"
                        style="width: 60px; height: 60px;">
                    <div class="ps-4">
                        <h4 class="text-primary mb-1">Client Name</h4>
                        <small class="text-uppercase">Profession</small>
                    </div>
                </div>
                <div class="pt-4 pb-5 px-5">
                    Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial End -->


<!-- Team Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
            <h5 class="fw-bold text-primary text-uppercase">Team Members</h5>
            <h1 class="mb-0">Professional Stuffs Ready to Help Your Business</h1>
        </div>
        <div class="row g-5">
            <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                <div class="team-item bg-light rounded overflow-hidden">
                    <div class="team-img position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="{{ asset('design/img/team-1.jpg') }}" alt="">
                        <div class="team-social">
                            <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i
                                    class="fab fa-twitter fw-normal"></i></a>
                            <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i
                                    class="fab fa-facebook-f fw-normal"></i></a>
                            <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i
                                    class="fab fa-instagram fw-normal"></i></a>
                            <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i
                                    class="fab fa-linkedin-in fw-normal"></i></a>
                        </div>
                    </div>
                    <div class="text-center py-4">
                        <h4 class="text-primary">Full Name</h4>
                        <p class="text-uppercase m-0">Designation</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
                <div class="team-item bg-light rounded overflow-hidden">
                    <div class="team-img position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="{{ asset('design/img/team-2.jpg') }}" alt="">
                        <div class="team-social">
                            <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i
                                    class="fab fa-twitter fw-normal"></i></a>
                            <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i
                                    class="fab fa-facebook-f fw-normal"></i></a>
                            <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i
                                    class="fab fa-instagram fw-normal"></i></a>
                            <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i
                                    class="fab fa-linkedin-in fw-normal"></i></a>
                        </div>
                    </div>
                    <div class="text-center py-4">
                        <h4 class="text-primary">Full Name</h4>
                        <p class="text-uppercase m-0">Designation</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
                <div class="team-item bg-light rounded overflow-hidden">
                    <div class="team-img position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="{{ asset('design/img/team-3.jpg') }}" alt="">
                        <div class="team-social">
                            <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i
                                    class="fab fa-twitter fw-normal"></i></a>
                            <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i
                                    class="fab fa-facebook-f fw-normal"></i></a>
                            <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i
                                    class="fab fa-instagram fw-normal"></i></a>
                            <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i
                                    class="fab fa-linkedin-in fw-normal"></i></a>
                        </div>
                    </div>
                    <div class="text-center py-4">
                        <h4 class="text-primary">Full Name</h4>
                        <p class="text-uppercase m-0">Designation</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Team End -->


<!-- Blog Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
            <h5 class="fw-bold text-primary text-uppercase">Latest Blog</h5>
            <h1 class="mb-0">Read The Latest Articles from Our Blog Post</h1>
        </div>
        <div class="row g-5">

            @foreach ($latestpost as $post)
                <div class="col-md-4 wow slideInUp" data-wow-delay="0.1s">
                    <div class="blog-item bg-light rounded overflow-hidden">
                        <div class="blog-img position-relative overflow-hidden post_image">
                            <img class="img-fluid postshow_image" src="/storage/{{ $post->cover_image }}" alt="">
                            <a class="position-absolute  post_category top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4"
                                href="">{{ $post->category_name }}</a>
                        </div>
                        <div class="p-4 post_contet_width">
                            <div class="d-flex mb-3">
                                <small class="me-3"><i
                                        class="far fa-user text-primary me-2"></i>{{ $post->author_name }}
                                </small>
                                <small><i
                                        class="far fa-calendar-alt text-primary me-2"></i>{!! date('d M ,Y', strtotime($post->created_at)) !!}</small>
                            </div>
                            <h4 class="mb-3 post_title">{{ $post->title }}</h4>
                            <p class="post_contet_height">{{ $post->meta_description }}</p>
                            <a class="text-uppercase"
                                href="{{ route('user./.blog_starting_home_post_view', $post) }}">Read More <i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</div>
<!-- Blog Start -->


<!-- Vendor Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5 mb-5">
        <div class="bg-white">
            <div class="owl-carousel vendor-carousel">
                <img src="{{ asset('design/img/vendor-1.jpg') }}" alt="">
                <img src="{{ asset('design/img/vendor-2.jpg') }}" alt="">
                <img src="{{ asset('design/img/vendor-3.jpg') }}" alt="">
                <img src="{{ asset('design/img/vendor-4.jpg') }}" alt="">
                <img src="{{ asset('design/img/vendor-5.jpg') }}" alt="">
                <img src="{{ asset('design/img/vendor-6.jpg') }}" alt="">
                <img src="{{ asset('design/img/vendor-7.jpg') }}" alt="">
                <img src="{{ asset('design/img/vendor-8.jpg') }}" alt="">
                <img src="{{ asset('design/img/vendor-9.jpg') }}" alt="">
            </div>
        </div>
    </div>
</div>
<!-- Vendor End -->


<!-- Footer Start -->
<div class="container-fluid bg-dark text-light mt-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="row gx-5">
            <div class="col-lg-4 col-md-6 footer-about">
                <div
                    class="d-flex flex-column align-items-center justify-content-center text-center h-100 bg-primary p-4">
                    <a href="{{ route('user./.blog_starting_home_page') }}" class="navbar-brand">
                        <h1 class="m-0 text-white"><i class="fa fa-user-tie me-2"></i>Startup</h1>
                    </a>
                    <p class="mt-3 mb-4">Lorem diam sit erat dolor elitr et, diam lorem justo amet clita stet eos
                        sit. Elitr dolor duo lorem, elitr clita ipsum sea. Diam amet erat lorem stet eos. Diam amet et
                        kasd eos duo.</p>
                    <form action="">
                        <div class="input-group">
                            <input type="text" class="form-control border-white p-3" placeholder="Your Email">
                            <button class="btn btn-dark">Sign Up</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-8 col-md-6">
                <div class="row gx-5">
                    <div class="col-lg-4 col-md-12 pt-5 mb-5">
                        <div class="section-title section-title-sm position-relative pb-3 mb-4">
                            <h3 class="text-light mb-0">Get In Touch</h3>
                        </div>
                        <div class="d-flex mb-2">
                            <i class="bi bi-geo-alt text-primary me-2"></i>
                            <p class="mb-0">123 Street, New York, USA</p>
                        </div>
                        <div class="d-flex mb-2">
                            <i class="bi bi-envelope-open text-primary me-2"></i>
                            <p class="mb-0">info@example.com</p>
                        </div>
                        <div class="d-flex mb-2">
                            <i class="bi bi-telephone text-primary me-2"></i>
                            <p class="mb-0">+012 345 67890</p>
                        </div>
                        <div class="d-flex mt-4">
                            <a class="btn btn-primary btn-square me-2" href="#"><i
                                    class="fab fa-twitter fw-normal"></i></a>
                            <a class="btn btn-primary btn-square me-2" href="#"><i
                                    class="fab fa-facebook-f fw-normal"></i></a>
                            <a class="btn btn-primary btn-square me-2" href="#"><i
                                    class="fab fa-linkedin-in fw-normal"></i></a>
                            <a class="btn btn-primary btn-square" href="#"><i
                                    class="fab fa-instagram fw-normal"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                        <div class="section-title section-title-sm position-relative pb-3 mb-4">
                            <h3 class="text-light mb-0">Quick Links</h3>
                        </div>
                        <div class="link-animated d-flex flex-column justify-content-start">
                            <a class="text-light mb-2" href="{{ route('user./.blog_starting_home_page') }}"><i
                                    class="bi bi-arrow-right text-primary me-2"></i>Home</a>
                            <a class="text-light mb-2" href="{{ route('user./.blog_starting_home_about_page') }}"><i
                                    class="bi bi-arrow-right text-primary me-2"></i>About Us</a>
                            <a class="text-light mb-2" href="{{ route('user./.blog_starting_home_service_page') }}"><i
                                    class="bi bi-arrow-right text-primary me-2"></i>Our Services</a>
                            <a class="text-light mb-2" href="{{ route('user./.blog_starting_home_team_page') }}"><i
                                    class="bi bi-arrow-right text-primary me-2"></i>Meet The Team</a>
                            <a class="text-light mb-2" href="{{ route('user./.blog_starting_home_allpost') }}"><i
                                    class="bi bi-arrow-right text-primary me-2"></i>Latest Blog</a>
                            <a class="text-light" href="{{ route('user./.blog_starting_home_contact_page') }}"><i
                                    class="bi bi-arrow-right text-primary me-2"></i>Contact Us</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                        <div class="section-title section-title-sm position-relative pb-3 mb-4">
                            <h3 class="text-light mb-0">Popular Links</h3>
                        </div>
                        <div class="link-animated d-flex flex-column justify-content-start">
                            <a class="text-light mb-2" href="{{ route('user./.blog_starting_home_page') }}"><i
                                    class="bi bi-arrow-right text-primary me-2"></i>Home</a>
                            <a class="text-light mb-2" href="{{ route('user./.blog_starting_home_about_page') }}"><i
                                    class="bi bi-arrow-right text-primary me-2"></i>About Us</a>
                            <a class="text-light mb-2" href="{{ route('user./.blog_starting_home_service_page') }}"><i
                                    class="bi bi-arrow-right text-primary me-2"></i>Our
                                Services</a>
                            <a class="text-light mb-2" href="{{ route('user./.blog_starting_home_team_page') }}"><i
                                    class="bi bi-arrow-right text-primary me-2"></i>Meet The Team</a>
                            <a class="text-light mb-2" href="{{ route('user./.blog_starting_home_allpost') }}"><i
                                    class="bi bi-arrow-right text-primary me-2"></i>Latest Blog</a>
                            <a class="text-light" href="{{ route('user./.blog_starting_home_contact_page') }}"><i
                                    class="bi bi-arrow-right text-primary me-2"></i>Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid text-white" style="background: #061429;">
    <div class="container text-center">
        <div class="row justify-content-end">
            <div class="col-lg-8 col-md-6">
                <div class="d-flex align-items-center justify-content-center" style="height: 75px;">
                    <p class="mb-0">&copy; <a class="text-white border-bottom"
                            href="https://github.com/kumaran-qoruz">Your Site Name</a>.
                        All Rights Reserve
                    </p>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->

@include('blog_hompage.layout.head')
